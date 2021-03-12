<?php
include 'php/conn.php';

$query = $conn->prepare("SELECT * FROM lezioni WHERE titolo LIKE ? OR docente LIKE ? OR insegnamento LIKE ? OR corso LIKE ? AND status = 'confirmed' ORDER BY data DESC;");
$query->bind_param('ssss', $final, $final, $final, $final);
$string = $_GET["query"];
$final = '%'.$string.'%';
$query->execute();
$result = $query->get_result();


?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Risultati della ricerca - PoliReplay</title>
    <link rel="icon" href="./assets/images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
            name="description"
            content="Guarda e aggiungi tutte le lezioni registrate del Politecnico di Milano"
    />
    <link rel="manifest" href="assets/manifest.json" />
    <meta property="og:type'" content="website">
    <meta property="og:url'" content="www.polireplay.it">
    <meta property="og:title'" content="Cerca e riguarda le lezioni - PoliReplay">
    <meta property="og:image'" content="https://polireplay.it/static/media/logo.f3108e60.png">
    <meta property="og:description'" content="Cerca, filtra e riguarda le lezioni online del Politecnico di Milano. Semplice, gratuito e veloce.">
    <script src="scripts/global.js"></script>
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/feed2.css">
    <link rel="stylesheet" href="./styles/search.css">
    <link rel="stylesheet" href="./styles/lesson.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/cookiesalert.css">

    <script>
        function search() {
            if(event.key === 'Enter') {
                let query = document.getElementById('query').value;
                window.location.href = "search.php?query=" + query;
            }
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

        <!-- SEARCHBAR -->
        <div id="searchbar">
            <input type="text" placeholder="Effettua una ricerca..." id="query" value="<?php echo $string ?>" onkeydown="search()">
            <img src="assets/images/mag.png" alt="Cerca">
        </div>
        <p style="margin-left: 12px;"><strong><?php echo $result->num_rows ?></strong> risultati</p>
    <?php
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
            echo '      <p class="titolo_lbl">'.nl2br($row["titolo"]).'</p>';
            echo '  </div>';
            echo '  </a>';
            echo '</div>';
        }
    }
    if($error){
    echo '<h1>Nessun risultato</h1>';
    echo '<p>La ricerca effettuata non ha fornito risultati</p>';
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
    <div class="cookie-alert">
        <p>Usiamo i
            <a href="privacy.html"> cookies</a>
        </p>
        <img onclick="document.getElementsByClassName('cookie-alert')[0].style.display = 'none';" src="./assets/images/close.svg" alt="close"/>
    </div>
</div>
</body>
</html>
