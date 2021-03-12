<?php
include 'php/conn.php';
$query = $conn->prepare("SELECT * FROM lezioni WHERE id = ?;");
$queryComm = $conn->prepare("SELECT * FROM commenti WHERE lessonid = ?;");
$query2 = $conn->prepare("SELECT COUNT(*) FROM lezioni WHERE docente = ? AND status = 'confirmed';");
$queryS = $conn->prepare("SELECT * FROM lezioni WHERE insegnamento = ? AND docente = ? AND data > ? AND status = 'confirmed' ORDER BY data ASC LIMIT 1;");
$queryP = $conn->prepare("SELECT * FROM lezioni WHERE insegnamento = ? AND docente = ? AND data < ? AND status = 'confirmed' ORDER BY data DESC LIMIT 1;");
$query->bind_param('i', $id);
$queryComm->bind_param('i', $id);
$queryS->bind_param('sss', $insegnamento, $docente, $data);
$query2->bind_param('s', $docente);
$queryP->bind_param('sss', $insegnamento, $docente, $data);

$id = $_GET["id"];

$query->execute();
$result = $query->get_result();

if($result->num_rows == 0){
    $error = true;
}
else {
    while ($row = mysqli_fetch_assoc($result)) {
        $docente = $row["docente"];
        $titolo = $row["titolo"];
        $insegnamento = $row["insegnamento"];
        $visualizzazioni = $row["views"];
        $link = $row["link"];
        $data = $row["data"];
        $status = $row["status"];
    }
    $queryS->execute();
    $resultS = $queryS->get_result();
    $queryP->execute();
    $resultP = $queryP->get_result();
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Dettagli della lezione - PoliReplay</title>
    <link rel="icon" href="./assets/images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
            name="description"
            content="Guarda e aggiungi tutte le lezioni registrate del Politecnico di Milano"
    />
    <link rel="manifest" href="./assets/manifest.json" />
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/lesson2.css">
    <link rel="stylesheet" href="./styles/feed.css">
    <link rel="stylesheet" href="./styles/confirmation.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/add.css">
    <link rel="stylesheet" href="./styles/cookiesalert.css">
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
                <img id="plus" src="assets/images/plus.svg" alt="Add an event"></img>
            </a>
        </ul>
    </div>
</div>

<div class="master" <?php if($error || ($status !== 'confirmed')){ echo 'style="display: none;"'; }?>>

    <div style="flex: 1 1 0px;">

    <!-- VIDEO -->
    <div class="video" >
    <a href="<?php echo 'php/redirect.php?url=' . $link . '&id=' . $id ?>" target="_blank">
        <div class="video-sub">
            <div class="scritte">
                <h1 id="insegnamento_d"><?php echo $insegnamento ?></h1>
            </div>
            <div class="white-internal">
                <img src="assets/images/play_colored.png" alt="play" />
                <p>Guarda ora</p>
            </div>
        </div>
</a>
</div>

    <div style="display: flex; justify-content: space-between;">
        <p id="visualizzazioni"><?php echo $visualizzazioni ?> visualizzazioni</p>
        <p id="data_d"><?php 
        $phpdate = strtotime( $data );
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
        echo $myday . ' ' . $mysqldate;
        ?></p>
    </div>

    <a id="prof_user" href="user.php?query=<?php echo $docente; ?>">
        <div class="prof_user-border">
            <div class="prof_user-border-int">
                <?php if($docente === 'Developer Student Club PoliMi'){
                    echo '<img src="assets/images/dsc.png" alt="Google Developer Student Club">';
                }
                else if($docente === 'Polifonia'){
                    echo '<img src="assets/images/polifonia.jpg" alt="Polifonia PoliMi">';
                }
                else if($docente === 'Entrepreneurship Club Polimi'){
                    echo '<img src="assets/images/entre.png" alt="Entrepreneurship Club Polimi">';
                }
                else {
                    echo '<img src="assets/images/profile.webp" alt="user">';
                }
                ?>
            </div>
        </div>
        <div>
            <p id="docente_d" style="margin-bottom: 0px; margin-top: 9px;"><?php echo $docente ?></p>
            <p style="font-weight: normal; margin-top: 2px; font-size: 14px;">
                <?php
                $query2->execute();
                $result2 = $query2->get_result();
                while ($row = $result2->fetch_array(MYSQLI_NUM)) {
                    echo $row[0] . ' lezioni';
                }
                ?>
            </p>
            </div>
    </a>

    <div class="divider"></div>

    <p class="description"><?php echo nl2br($titolo) ?></p>

    <span>
        <a href="report.php?id=<?php echo $id ?>" title="Segnala un errore" class="universal-btn" id="signal" style="color: red; text-decoration: none;">❗️Segnala un errore</a>
        <button class="universal-btn"><a style="color: black; text-decoration: none;" href="mailto:niccolo.segato@mail.polimi.it">📎Richiedi assistenza</a></button>
    </span>
</div>

<div class="news">
    <?php
        $s = $resultS->num_rows;
        $p = $resultP->num_rows;

        if(($s == 0) && ($p == 0)){
            // NOTHING TO DO
        }
        else {
            echo '<h1>Lezioni correlate</h1>';
            if($resultS->num_rows != 0){
                while ($row = mysqli_fetch_assoc($resultS)) {
                    echo '<div class="subdiv">';
                    echo '  <img class="border-img" src="assets/images/border.svg" alt="Border"/>';
                    echo '  <a title="Vai alla lezione" class="feed-element" href="lesson.php?id=' . $row["id"] . '">';
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
                    echo '      <p class="insegnamento_lbl">Lezione successiva</p>';
                    echo '      <p class="titolo_lbl">'.$row["titolo"].'</p>';
                    echo '  </div>';
                    echo '  </a>';
                    echo '</div>';
                }
            }
            if($resultP->num_rows != 0){
                while ($row2 = mysqli_fetch_assoc($resultP)) {
                    echo '<div class="subdiv">';
                    echo '  <img class="border-img" src="assets/images/border.svg" alt="Border"/>';
                    echo '  <a title="Vai alla lezione" class="feed-element" href="lesson.php?id=' . $row2["id"] . '">';
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
                    if($row2["esercitazione"]){
                        echo '      <p class="user_lbl">Esercitazione di ' . $myday . ' ' . $mysqldate . '</p>';
                    }
                    else {
                        echo '      <p class="user_lbl">Lezione di ' . $myday . ' ' . $mysqldate . '</p>';
                    }
                    echo '<p class="insegnamento_lbl">Lezione precedente</p>';
                    echo '<p class="titolo_lbl">'.$row2["titolo"].'</p>';
                    echo ' </div>';
                    echo ' </a>';
                    echo '</div>';
                }
            }
        }
    ?>
    <h1>Commenti</h1>
    <div class="news-latest">
        <?php
        $queryComm->execute();
        $resultComm = $queryComm->get_result();
        
        if($resultComm->num_rows == 0){
            echo '<p>Nessun commento</p>';
        }
        else {
            while ($rowComm = mysqli_fetch_assoc($resultComm)) {
                echo '<div class="comment"><img class="border-img" src="assets/images/border.svg" alt="Border"/><div><h3 class="comment-name">' . $rowComm["name"] . '</h3><p>' . $rowComm["commentText"] . '</p></div></div>';
            }
        }
        ?>
    </div>
</div>
</div>
<?php if($error){
    echo '<h1 style="margin-left: 24px;">Ops...</h1>';
    echo '<p style="margin-left: 24px;">La lezione non è stata trovata</p>';
}
else if(($status === 'pending') || ($status === 'approving')){
    echo '<h1 style="margin-left: 24px;">In attesa di conferma</h1>';
    echo '<p style="margin-left: 24px;">Questa lezione di ' . $insegnamento . ' è in fase di approvazione.</p>';
    echo '<h3 style="margin-left: 24px;">Perché chiediamo la verifica?</h3>';
    echo '<p style="margin-left: 24px;">Ogni lezione presente su PoliReplay deve prima essere verificata dall\'utente ed eventualmente dal nostro Team. In questo modo possiamo garantire la migliore esperienza di studio su PoliReplay</p>';
}
$conn->close();
?>

<!-- FOOTER -->
<div id="footbar">
    <p>© Copyright 2020 PoliReplay - All rights reserved -
        <a href="privacy.html" >Privacy Policy</a>
        -
        <a href="termini.html">Termini e condizioni</a>
    </p>
    <div class="cookie-alert" <?php if(isset($_COOKIE['cookiealert'])) { echo 'style="display: none;"'; } ?>>
        <p>Usiamo i
            <a href="privacy.html"> cookies</a>
        </p>
        <img onclick="document.cookie = 'cookiealert=true'; document.getElementsByClassName('cookie-alert')[0].style.display = 'none';" src="./assets/images/close.svg" alt="close"/>
    </div>
</body>
</html>
