<?php
include 'php/conn.php';

$queryCreator = $conn->prepare("SELECT id, name, cognome FROM creators WHERE email = ? AND status = 'confirmed' AND token = ?");
$queryAmount = $conn->prepare("SELECT count(id) as count, sum(views) as views FROM lezioni WHERE email = ? ");
$queryAdded = $conn->prepare("SELECT *  FROM lezioni WHERE email = ? ORDER BY addedDate DESC");
$queryPending = $conn->prepare("SELECT * FROM lezioni WHERE status = 'pending' AND email = ? ;");
$query = $conn->prepare("SELECT * FROM cronologia WHERE email = ? LIMIT 20");
$queryHis = $conn->prepare("SELECT * FROM lezioni WHERE id = ? ORDER BY data DESC;");
$queryCreator->bind_param('ss', $prmc, $token);
$query->bind_param('s', $prmc);
$queryAmount->bind_param('s', $prmc);
$queryAdded->bind_param('s', $prmc);
$queryPending->bind_param('s', $prmc);

$prmc = htmlspecialchars($_COOKIE["PRMC"]);
$token = htmlspecialchars($_COOKIE["PRAC"]);

$request = $_GET["r"];

if(isset($_COOKIE["PRMC"]) && isset($_COOKIE["PRAC"])) {
    // Cookie presente, controllare token
    $queryCreator->execute();
    $resultC = $queryCreator->get_result();
    if($resultC->num_rows > 0){
        // Token valido, ottengo history
        while ($row = mysqli_fetch_assoc($resultC)) {
            $name = $row["name"];
            $surname = $row["cognome"];
        }
        $query->execute();
        $result = $query->get_result();
    }
}
else {
    $error = true;
}

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Il tuo profilo - PoliReplay</title>
    <link rel="icon" href="./assets/images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
            name="description"
            content="Guarda e aggiungi tutte le lezioni di <?php echo $search ?> su PoliReplay"
    />
    <link rel="manifest" href="assets/manifest.json" />
    <meta property="og:type'" content="website">
    <meta property="og:url'" content="www.polireplay.it">
    <meta property="og:title'" content="Cerca e riguarda le lezioni - PoliReplay">
    <meta property="og:image'" content="https://polireplay.it/static/media/logo.f3108e60.png">
    <meta property="og:description'" content="Cerca, filtra e riguarda le lezioni online del Politecnico di Milano. Semplice, gratuito e veloce.">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/global.js"></script>
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/profile.css">
    <link rel="stylesheet" href="./styles/feed3.css">
    <link rel="stylesheet" href="./styles/user.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/cookiesalert.css">
    <script>
        function goRedirect(id, token) {
            window.location.href = "https://www.polireplay.it/confirm.php?token=" + token + "&id=" + id;
        }
        function declineLesson() {
            alert("Contattaci all'indirizzo info@polireplay.it o su Telegram @polireplay_support e chiedi la rimozione");
        }
    </script>
</head>
<body>

<!-- NAVBAR -->
<div class="NavBar">
    <div class="logo">
        <a href="https://www.polireplay.it">
            <img src="./assets/images/logo.png" alt="Logo" />
        </a>
    </div>
    <div class="menu">
        <ul>
        <!--<a title="PoliReplay Blog" class="purple-blog-btn" href="https://polireplay.it/blog"><p>BLOG</p></a>-->
        <?php if(isset($_COOKIE["PRAC"])) {
            echo '<a title="Cronologia" class="purple-blog-btn" href="https://polireplay.it/profile.php"><p>PROFILO</p></a>';
        }
        else {
            echo '<a title="Login" class="purple-blog-btn" href="https://polireplay.it/login"><p>LOGIN</p></a>';
        }
        ?>
            <!--<select name="lang" id="lang" onchange="language()">
                      <option value="it">🇮🇹</option>
                      <option value="en">🇬🇧</option>
                      <option value="zh">🇨🇳</option>
                  </select>-->
            <a class="purple-no-btn" href="add.html">
                <img id="plus" src="assets/images/plus.svg" alt="Add an event"/>
            </a>
        </ul>
    </div>
</div>
<p></p>
<div id="feed-container">
    <?php
    if(!$error){
        echo '<div id="prof_user">';
        echo '<div class="prof_user-border">';
        echo '<div class="prof_user-border-int">';
        echo '<img src="assets/images/profile.webp" alt="user">';
        echo '</div></div><div><p id="docente_d" style="margin-bottom: 0px; margin-top: 9px;">' . $name . $surname . '</p>';
        echo '<p style="font-weight: normal; margin-top: 2px; font-size: 14px;">';
        $queryAmount->execute();
        $resultAmount = $queryAmount->get_result();
        while ($row = mysqli_fetch_assoc($resultAmount)) {
            $count = $row["count"];
            $views = $row["views"];
        }
        echo '<strong>' . $count . '</strong> lezioni aggiunte - <strong>' . $views . '</strong> visualizzazioni';
        echo '</p></div></div>';

        // Selected PENDING LESSONS
        if($request === 'pending'){
            echo '<div id="cats-p"><a class="cat-p" href="https://www.polireplay.it/profile.php?r=history"><p>Cronologia</p></a>';
            echo '<a class="cat-p" href="https://www.polireplay.it/profile.php?r=added"><p>Aggiunte da me</p></a>';
            echo '<a class="cat-p selected" href="https://www.polireplay.it/profile.php?r=pending"><p>Da confermare</p></a></div>';
            $queryPending->execute();
            $resultPending = $queryPending->get_result();
            if($resultPending->num_rows > 0){
                echo '<p>Hai <strong>' . $resultPending->num_rows . '</strong> lezioni ancora da confermare:</p>';
                while ($row = mysqli_fetch_assoc($resultPending)) {
                    echo '<div class="subdiv" style="display: flex; flex-direction: row;">';
                    echo '  <img class="border-img" src="assets/images/border.svg" alt="Border"/>';
                    echo '  <a class="feed-element" href="https://www.polireplay.it/confirm.php?token=' .$row["token"] . '&id=' . $row["id"] . '">';
                    echo '  <div>';
                    $phpdate = strtotime( $row["data"] );
                    $mysqldate = date( 'd/m/Y', $phpdate );
                    $myday = date('l', $phpdate);
                    switch ($myday) {
                        case 'Monday':
                            $myday = 'Lunedì';
                        break;
                        case 'Tuesday':
                            $myday = 'Martedì';
                        break;
                        case 'Wednesday':
                            $myday = 'Mercoledì';
                        break;
                        case 'Thursday':
                            $myday = 'Giovedì';
                        break;
                        case 'Friday':
                            $myday = 'Venerdì';
                        break;
                        case 'Saturday':
                            $myday = 'Sabato';
                        break;
                        case 'Sunday':
                            $myday = 'Domenica';
                        break;
                        default:
                            $myday = '';
                        break;
                    }
                    if($row["esercitazione"]){
                        echo '      <p class="user_lbl">Esercitazione di ' . $myday . ' ' . $mysqldate . '</p>';
                    }
                    else {
                        echo '      <p class="user_lbl">Lezione di ' . $myday . ' ' . $mysqldate . '</p>';
                    }
                    echo '      <p class="insegnamento_lbl">'.$row["insegnamento"].'</p>';
                    echo '      <div class="bottom_doc"><p class="prof_lbl"><strong>'.$row["docente"].'</strong></p>';
                    echo '      <p class="prof_lbl"> - '.$row["views"].' visualizzazioni</p></div>';
                    echo '      <p class="titolo_lbl">'.$row["titolo"].'</p>';
                    echo '  </div>';
                    echo '  </a>';
                    echo '</div>';
                }
            }
            else {
                echo '<p>Hai confermato tutte le lezioni che hai aggiunto 🥳</p>';
            }
        }
        else if ($request === 'added'){
            echo '<div id="cats-p"><a class="cat-p" href="https://www.polireplay.it/profile.php?r=history"><p>Cronologia</p></a>';
            echo '<a class="cat-p selected" href="https://www.polireplay.it/profile.php?r=added"><p>Aggiunte da me</p></a>';
            echo '<a class="cat-p" href="https://www.polireplay.it/profile.php?r=pending"><p>Da confermare</p></a></div>';
            echo '<div class="divider"></div>';
            echo '<h2>Le tue lezioni</h2>';
            echo '<p>Queste sono le lezioni aggiunte da te su PoliReplay</p>';
            $queryAdded->execute();
            $resultAdded = $queryAdded->get_result();
            if($resultAdded->num_rows > 0){
                while ($row = mysqli_fetch_assoc($resultAdded)) {
                    echo '<p style="margin-bottom: -8px; margin-top: 30px;">Aggiunta il '.date( 'd/m/Y', strtotime($row["addedDate"])).' alle '.date( 'H:i', strtotime($row["addedDate"]) ).'</p>';
                    echo '<div class="subdiv">';
                    echo '  <img class="border-img" src="assets/images/border.svg" alt="Border"/>';
                    echo '  <a class="feed-element" href="lesson.php?id=' . $row["id"] . '">';
                    echo '  <div>';
                    $phpdate = strtotime( $row["data"] );
                    $mysqldate = date( 'd/m/Y', $phpdate );
                    $myday = date('l', $phpdate);
                    switch ($myday) {
                        case 'Monday':
                            $myday = 'Lunedì';
                        break;
                        case 'Tuesday':
                            $myday = 'Martedì';
                        break;
                        case 'Wednesday':
                            $myday = 'Mercoledì';
                        break;
                        case 'Thursday':
                            $myday = 'Giovedì';
                        break;
                        case 'Friday':
                            $myday = 'Venerdì';
                        break;
                        case 'Saturday':
                            $myday = 'Sabato';
                        break;
                        case 'Sunday':
                            $myday = 'Domenica';
                        break;
                        default:
                            $myday = '';
                        break;
                    }
                    if($row["esercitazione"]){
                        echo '      <p class="user_lbl">Esercitazione di ' . $myday . ' ' . $mysqldate . '</p>';
                    }
                    else {
                        echo '      <p class="user_lbl">Lezione di ' . $myday . ' ' . $mysqldate . '</p>';
                    }
                    echo '      <p class="insegnamento_lbl">'.$row["insegnamento"].'</p>';
                    echo '      <div class="bottom_doc"><p class="prof_lbl"><strong>'.$row["docente"].'</strong></p>';
                    echo '      <p class="prof_lbl"> - '.$row["views"].' visualizzazioni</p></div>';
                    echo '      <p class="titolo_lbl">'.$row["titolo"].'</p>';
                    echo '  </div>';
                    echo '  </a>';
                    echo '</div>';
                }
            }
        }
        else {
            echo '<div id="cats-p"><a class="cat-p selected" href="https://www.polireplay.it/profile.php?r=history"><p>Cronologia</p></a>';
            echo '<a class="cat-p" href="https://www.polireplay.it/profile.php?r=added"><p>Aggiunte da me</p></a>';
            echo '<a class="cat-p" href="https://www.polireplay.it/profile.php?r=pending"><p>Da confermare</p></a></div>';
            echo '<div class="divider"></div>';
            echo '<h2>Cronologia</h2>';
            echo '<p>Consulta la tua cronologia</p>';
            while ($row = mysqli_fetch_assoc($result)) {
                $queryHis->bind_param('i', $row["lezione"]);
                $queryHis->execute();
                $resultHis = $queryHis->get_result();
                while ($row2 = mysqli_fetch_assoc($resultHis)) {
                    echo '<p style="margin-bottom: -8px; margin-top: 30px;">Visualizzata il '.date( 'd/m/Y', strtotime($row["data"])).' alle '.date( 'H:i', strtotime($row["data"]) ).'</p>';
                    echo '<div class="subdiv">';
                    echo '  <img class="border-img" src="assets/images/border.svg" alt="Border"/>';
                    echo '  <a class="feed-element" href="lesson.php?id=' . $row2["id"] . '">';
                    echo '  <div>';
                    $phpdate = strtotime( $row2["data"] );
                    $mysqldate = date( 'd/m/Y', $phpdate );
                    $myday = date('l', $phpdate);
                    switch ($myday) {
                        case 'Monday':
                            $myday = 'Lunedì';
                        break;
                        case 'Tuesday':
                            $myday = 'Martedì';
                        break;
                        case 'Wednesday':
                            $myday = 'Mercoledì';
                        break;
                        case 'Thursday':
                            $myday = 'Giovedì';
                        break;
                        case 'Friday':
                            $myday = 'Venerdì';
                        break;
                        case 'Saturday':
                            $myday = 'Sabato';
                        break;
                        case 'Sunday':
                            $myday = 'Domenica';
                        break;
                        default:
                            $myday = '';
                        break;
                    }
                    if($row["esercitazione"]){
                        echo '      <p class="user_lbl">Esercitazione di ' . $myday . ' ' . $mysqldate . '</p>';
                    }
                    else {
                        echo '      <p class="user_lbl">Lezione di ' . $myday . ' ' . $mysqldate . '</p>';
                    }
                    echo '      <p class="insegnamento_lbl">'.$row2["insegnamento"].'</p>';
                    echo '      <div class="bottom_doc"><p class="prof_lbl"><strong>'.$row2["docente"].'</strong></p>';
                    echo '      <p class="prof_lbl"> - '.$row2["views"].' visualizzazioni</p></div>';
                    echo '      <p class="titolo_lbl">'.$row2["titolo"].'</p>';
                    echo '  </div>';
                    echo '  </a>';
                    echo '</div>';
                }
            }
        }
    }
    else {
        header('location: https://polireplay.it/login');
    }
    $conn->close();
    ?>

    <p></p>
    <!-- FOOTER -->
    <div id="footbar">
        <p>© Copyright 2020 PoliReplay - All rights reserved -
            <a href="privacy.html" >Privacy Policy</a>
            -
            <a href="termini.html">Termini e condizioni</a>
        </p>
        <div class="cookie-alert">
            <p>Usiamo i
                <a href="privacy.html"> cookies</a>
            </p>
            <img onclick="document.getElementsByClassName('cookie-alert')[0].style.display = 'none';" src="./assets/images/close.svg" alt="close"/>
        </div>
    </div>
</body>
</html>
