<?php

if($_GET["r"] === "dsc"){
    // Google Developer Student Club
    header('location: https://polireplay.it/user.php?query=Developer Student Club PoliMi');
}
else if($_GET["r"] === "polifonia"){
    // Google Developer Student Club
    header('location: https://polireplay.it/user.php?query=Polifonia');
}
else if($_GET["r"] === "eclub"){
    // Google Developer Student Club
    header('location: https://polireplay.it/user.php?query=Entrepreneurship Club Polimi');
}

include 'php/conn.php';

$query = "SELECT COUNT(id) FROM lezioni WHERE tipologia <> 'ext';";
$queryExt = "SELECT COUNT(id) FROM lezioni WHERE tipologia = 'ext';";

$result = mysqli_query($conn, $query);
while ($row = $result->fetch_row()) {
    $counter = $row[0];
}

$resultExt = mysqli_query($conn, $queryExt);
while ($rowExt = $resultExt->fetch_row()) {
    $counterExt = $rowExt[0];
}

$query2 = "SELECT * FROM lezioni WHERE status = 'confirmed' AND tipologia <> 'ext' ORDER BY data DESC, addedDate DESC LIMIT 2;";
$result2 = mysqli_query($conn, $query2);
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Riguarda le lezioni - PoliReplay</title>
        <meta charset="utf-8" />
        <link rel="icon" href="./assets/images/favicon.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta
        name="description"
        content="Guarda e aggiungi tutte le lezioni registrate del Politecnico di Milano"
        />
        <link rel="manifest" href="./assets/manifest.json" />
        <meta property="og:type'" content="website">
        <meta property="og:url'" content="www.polireplay.it">
        <meta property="og:title'" content="Cerca e riguarda le lezioni - PoliReplay">
        <meta property="og:image'" content="./assets/images/favicon.ico">
        <meta property="og:description'" content="Cerca, filtra e riguarda le lezioni online del Politecnico di Milano. Semplice, gratuito e veloce.">
        <script src="scripts/global.js"></script>
        <link rel="stylesheet" href="./styles/navbar.css">
        <link rel="stylesheet" href="./styles/feed3.css">
        <link rel="stylesheet" href="./styles/search.css">
        <link rel="stylesheet" href="./styles/add.css">
        <link rel="stylesheet" href="./styles/news.css">
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
              <a href="https://www.polireplay.it" title="Home">
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
                <a title="Nuova lezione" class="purple-no-btn" href="add.html">
                    <img id="plus" src="assets/images/plus.svg" alt="Add an event"/>
                </a>
              </ul>
            </div>
          </div>

          <h1 style="margin-top: 40px; padding-top: 16px; padding-left: 24px; padding-right: 16px; margin-left: 0px; margin-bottom: 0px; margin-right: 0px;" >Riguarda le lezioni online</h1>
        <!-- SEARCHBAR -->
        <div id="searchbar" style="width: calc(100% - 48px); margin-left: 24px;">
            <input type="text" autocomplete=“off” placeholder="Effettua una ricerca..." id="query" value="<?php echo $string ?>" onkeydown="search()">
            <img src="assets/images/mag.png" alt="Cerca">
        </div>

            <div id="cats">
                <a class="cat" href="https://www.polireplay.it/search.php?query=aerospaziale">
                    <img src="./assets/images/increase.png" alt="Categoria">
                    <p>aerospaziale</p>
                </a>
                <a class="cat" href="https://www.polireplay.it/search.php?query=sistemi edilizi">
                    <img src="./assets/images/increase.png" alt="Categoria">
                    <p>sistemi edilizi</p>
                </a>
                <a class="cat" href="https://www.polireplay.it/search.php?query=ferrara liberato">
                    <img src="./assets/images/increase.png" alt="Categoria">
                    <p>ferrara liberato</p>
                </a>
                <a class="cat" href="https://www.polireplay.it/search.php?query=tecnica delle costruzioni">
                    <img src="./assets/images/increase.png" alt="Categoria">
                    <p>tecnica delle costruzioni</p>
                </a>
            </div>
            <p style=" padding-left: 24px; padding-right: 16px; margin-top: 10px; color: rgb(112, 112, 112);" >Sfoglia il catalogo di <strong><?php echo $counter; ?></strong> lezioni e <strong><?php echo $counterExt; ?></strong> video del Politecnico di Milano</p>


          <h1 style="padding-top: 24px; padding-left: 24px; padding-right: 16px; margin: 0px;" >Ultime aggiunte</h1>
          <!-- FEED -->
          <div id="feed-container">
          <?php
          while ($row = mysqli_fetch_assoc($result2)) {
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
            echo '      <p class="insegnamento_lbl">'.$row["insegnamento"].'</p>';
            echo '      <div class="bottom_doc"><p class="prof_lbl"><strong>'.$row["docente"].'</strong>&nbsp;</p>';
            echo '      <p class="prof_lbl"> - '.$row["views"].' visualizzazioni</p></div>';
            echo '      <p class="titolo_lbl">'.$row["titolo"].'</p>';
            echo '  </div>';
            echo '  </a>';
            echo '</div>';
        }
        ?>
        </div>

        <h1 style=" padding-top: 24px; padding-left: 24px; padding-right: 16px; margin: 0px;" >About the project</h1>
        <!-- NEWS -->
        <div class="news-big">
            <div id="news" class="subdiv">
                <img src="./assets/images/support.jpg" alt="Telegram support"/>
                <div class="news-container">
                    <h1>Hai bisogno di aiuto?</h1>
                    <p>Hai problemi con l'aggiunta di una lezione? Non trovi un professore o il link non funziona? Noi siamo qui per aiutarti! Cerca <strong>@polireplay_support</strong> su Telegram e ricevi assistenza immediata dal nostro team ✌🏼. Puoi sempre scriverci anche via e-mail a <a href="mailto:info@polireplay.it">info@polireplay.it</a></p>
                </div>
            </div>
            <div id="news" class="subdiv">
                <img src="./assets/images/creator.jpg" alt="Nuovi creators"/>
                <div class="news-container">
                    <h1>Iscriviti per aggiungere lezioni</h1>
                    <p>Non trovi una lezione del tuo corso di studi? Unisciti al nostro team di creators e comincia ad aggiungere lezioni su PoliReplay. Invia una email a <a title="info@polireplay.it" href="mailto:info@polireplay.it">info@polireplay.it</a> e verrai ricontattato 😉</p>
                </div>
            </div>
            <div id="news2" class="subdiv">
                <img src="./assets/images/news.png" alt="Semplificare lo studio"/>
                <div class="news-container">
                    <h1>Dagli studenti, per gli studenti</h1>
                    <p>PoliReplay è una piattaforma nata per aiutare gli studenti Politecnico di Milano. Il progetto, servito gratuitamente agli studenti, mira a semplificare e velocizzare il processo di studi.<br></br>Visita i nostri canali social <a title="PoliReplay su Instagram" href="https://www.instagram.com/polireplay">@polireplay</a> su Instagram e <a title="PoliReplay su Twitter" href="https://www.twitter.com/poli_replay">@poli_replay</a> su Twitter per rimanere sempre aggiornato!</p>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <div id="footbar">
            <p>© Copyright 2020 PoliReplay - All rights reserved -
                <a title="Privacy Policy" href="privacy.html" >Privacy Policy</a>
                -
                <a title="Termini e condizioni" href="termini.html">Termini e condizioni</a>
            </p>
            <div class="cookie-alert" <?php if(isset($_COOKIE['cookiealert'])) { echo 'style="display: none;"'; } ?>>
                <p>Usiamo i
                    <a title="Privacy Policy" href="privacy.html"> cookies</a>
                </p>
                <img onclick="document.cookie = 'cookiealert=true'; document.getElementsByClassName('cookie-alert')[0].style.display = 'none';" src="./assets/images/close.svg" alt="close"/>
            </div>
        </div>
    </body>
</html>
