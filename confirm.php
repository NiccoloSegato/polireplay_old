<?php
include 'php/conn.php';

$query = $conn->prepare("SELECT * FROM lezioni WHERE id = ? AND token = ? AND status = 'pending';");
$query->bind_param('is', $id, $token);

$id = $_GET['id'];
$token = $_GET['token'];

$query->execute();
$result = $query->get_result();

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Conferma - PoliReplay</title>
    <link rel="icon" href="./assets/images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
            name="description"
            content="Guarda e aggiungi tutte le lezioni registrate del Politecnico di Milano"
    />
    <link rel="manifest" href="./assets/manifest.json" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/confirm.js"></script>
    <script src="scripts/global.js"></script>
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/feed.css">
    <link rel="stylesheet" href="./styles/confirmation.css">
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
            echo '<a title="Profilo" class="purple-blog-btn" href="https://polireplay.it/profile.php"><p>PROFILO</p></a>';
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
<?php if($result->num_rows == 0){
        $error = true;
}
?>
<div id="confirmation" <?php if($error) { echo 'style="display: none;" '; } ?>>
    <h1>Controlla i dati</h1>
    <p>Grazie per l'aggiunta, hai qui la possibilità di verificare i dati della lezione.</p>
    <div id="confirmation-sub">
    <?php
    if(!$error){
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
            echo '      <p class="prof_lbl">Docente: '.$row["docente"].'</p>';
            echo '      <p class="titolo_lbl">'.$row["titolo"].'</p>';
            echo '      <h3 class="corso_lbl">'.$row["corso"].'</p>';
            echo '  </div>';
            echo '  </a>';
            echo '</div>';
        }
    }
    ?>
    </div>
    <span id="modifica">
        <p>C'è un problema con la lezione? Contattaci a <a href="mailto:info@polireplay.it">info@polireplay.it</a> specificando la modifica e il seguente codice lezione: </p>
        <p id="lesson-code"><?php echo $id ?></p>
    </span>

    <span>
        <button onclick="confirmLesson()" class="universal-btn" style="font-weight: bold;">Conferma</button>
        <button onclick="declineLesson()" class="universal-btn" style="color: red;">Elimina lezione</button>
    </span>

</div>

<?php if($error){
    echo '<h1 style="margin-left: 24px;">Ops..</h1>';
    echo '<p style="margin-left: 24px;">Qualcosa è andato storto</p>';
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
