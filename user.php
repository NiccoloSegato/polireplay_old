<?php
include 'php/conn.php';

$search = $_GET["query"];

// DOCENTE
$query = $conn->prepare("SELECT * FROM lezioni WHERE docente = ? AND status = 'confirmed' ORDER BY data DESC;");
$query2 = $conn->prepare("SELECT COUNT(*), SUM(views) FROM lezioni WHERE docente = ? AND status = 'confirmed';");
$query->bind_param('s', $string);
$query2->bind_param('s', $string);
$string = $_GET["query"];
$query->execute();
$result = $query->get_result();
$doc = true;

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title><?php echo $search ?> - PoliReplay</title>
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
    <link rel="stylesheet" href="./styles/feed2.css">
    <link rel="stylesheet" href="./styles/user.css">
    <link rel="stylesheet" href="./styles/footer.css">
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
                <img id="plus" src="assets/images/plus.svg" alt="Add an event"/>
            </a>
        </ul>
    </div>
</div>
<p></p>
<div id="feed-container">

    <?php
    if($doc){
        $query2->execute();
        $result2 = $query2->get_result();
        if($result2->num_rows != 0){
            echo '<a id="prof_user" href="user.php?query=' . $string . '">';
            echo '<div class="prof_user-border">';
            echo '<div class="prof_user-border-int">';
            if($string === 'Developer Student Club PoliMi'){
                echo '<img src="assets/images/dsc.png" alt="Google Developer Student Club">';
            }
            else if($string === 'Polifonia'){
                echo '<img src="assets/images/polifonia.jpg" alt="Polifonia PoliMi">';
            }
            else if($string === 'Entrepreneurship Club Polimi'){
                echo '<img src="assets/images/entre.png" alt="Entrepreneurship Club Polimi">';
            }
            else {
                echo '<img src="assets/images/profile.webp" alt="user">';
            }
            echo '</div></div><div><p id="docente_d" style="margin-bottom: 0px; margin-top: 9px;">' . $string . '</p>';
            echo '<p style="font-weight: normal; margin-top: 2px; font-size: 14px;"><strong>';
            while ($row = $result2->fetch_array(MYSQLI_NUM)) {
                echo $row[0] . '</strong> lezioni - <strong>' . $row[1] . '</strong> visualizzazioni';
            }
            echo '</p></div></a>';
        }
    }
    
    
    if($result->num_rows == 0){
        $error = true;
    }
    else {
        while ($row = mysqli_fetch_assoc($result)) {
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
    ?>

<?php if($error){
    echo '<h1>Nessun risultato</h1>';
    echo '<p>La ricerca effettuata non ha fornito risultati</p>';
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
