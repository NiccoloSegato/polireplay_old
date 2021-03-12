<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Segnala un errore - PoliReplay</title>
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
        <meta property="og:image'" content="https://polireplay.it/static/media/logo.f3108e60.png">
        <meta property="og:description'" content="Cerca, filtra e riguarda le lezioni online del Politecnico di Milano. Semplice, gratuito e veloce.">
        <script src="scripts/global.js"></script>
        <link rel="stylesheet" href="./styles/navbar.css">
        <link rel="stylesheet" href="./styles/add.css">
        <link rel="stylesheet" href="./styles/footer.css">
        <link rel="stylesheet" href="./styles/cookiesalert.css">

        <script>
            function submit() {
                let email = document.getElementById('email').value;
                let message = document.getElementById('message').value;
                window.location.href = 'php/report.php?id=<?php echo $_GET["id"] ?>&email=' + email + '&messaggio=' + message;
            }
            function onCheck() {
                let checker = document.getElementById('checker');
                if (checker.checked){
                    let btn = document.getElementById('bottone-aggiungi');
                    btn.style.background = 'blue';
                    btn.style.color = 'white';
                    btn.onclick = submit;
                }
                else {
                    let btn = document.getElementById('bottone-aggiungi');
                    btn.style.background = 'rgb(223, 223, 223)';
                    btn.onclick = null;
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

        <h1 style="margin-top: 40px; padding-top: 16px; padding-left: 24px; padding-right: 16px; margin-left: 0px; margin-bottom: 0px; margin-right: 0px;" >Segnala un errore</h1>
        <p style="margin-top: 4px; padding-left: 24px; padding-right: 16px; margin-left: 0px; margin-bottom: 0px; margin-right: 0px;" >Se hai riscontrato un errore o un contenuto che viola i nostri <a href="termini.html" title="Termini e condizioni del servizio">termini e condizioni</a> mandaci un messaggio attraverso questo form.</p>
        
        <div style="padding: 24px;">
            <h2>Email e messaggio</h2>
            <p>Inserisci la tua email istituzionale. I messaggi da altri domini email verranno ignorati. Provvederemo a contattarti il prima possibile.</p>
            <input style="max-width: 500px;" class="text-input" type="email" name="email" id="email" placeholder="La tua email..."/>
            <p>Descrivi il problema, come riprodurlo e come risolverlo</p>
            <textarea style="max-width: 500px;" class="text-big" type="text" name="message" id="message" maxlenght="400" placeholder="Descrivi il problema..."></textarea>
            <div class="checkbox-container" style="width: calc(100% - 48px);">
            <label>
                <input type="checkbox" name="checkbox-secondo-corso" onclick="onCheck()" id="checker"/>
                Ho letto e accetto i <a href="termini.html">Termini e le Condizioni</a> del servizio nonché la <a href="privacy.html">Privacy Policy</a>*
            </label>
        </div>
        <button id="bottone-aggiungi" style="background:rgb(223, 223, 223) !important; color: black; margin-top: 24px; width: calc(100% - 48px) !important; max-width: 400px;">Invia segnalazione</button>
        </div>

        <!-- FOOTER -->
        <div id="footbar">
            <p>© Copyright 2020 PoliReplay - All rights reserved -
                <a title="Privacy Policy" href="privacy.html" >Privacy Policy</a>
                -
                <a title="Termini e condizioni" href="termini.html">Termini e condizioni</a>
            </p>
            <div class="cookie-alert">
                <p>Usiamo i
                    <a title="Privacy Policy" href="privacy.html"> cookies</a>
                </p>
                <img onclick="document.getElementsByClassName('cookie-alert')[0].style.display = 'none';" src="./assets/images/close.svg" alt="close"/>
            </div>
        </div>
        <!--<script src="./scripts/feed.js"></script>-->

    </body>
</html>
