<?php
include 'php/conn.php';

$query = $conn->prepare("UPDATE creators SET status = 'confirmed' WHERE id = ? ;");
$query->bind_param('i', $id);

$id = $_GET["id"];

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
    <script src="scripts/global.js"></script>
    <link rel="stylesheet" href="./styles/navbar.css">
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

<?php
if ($query->affected_rows === 1) {
    echo '<div id="confirmation">';
    echo '<h1>Grazie</h1>';
    echo '<p>Il tuo indirizzo email è ora abilitato ad aggiungere lezioni su PoliReplay.</p>';
    echo '</div>';
} else {
    echo '<div id="confirmation">';
    echo '<h1>Errore</h1>';
    echo '<p>C\'è stato un errore nella conferma.</p>';
    echo '</div>';
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