<?php
include 'php/conn.php';

$query = "SELECT insegnamento, docente, tipologia FROM lezioni WHERE tipologia <> 'ext' GROUP BY insegnamento, docente, tipologia;";

$result = mysqli_query($conn, $query);
$counter = $result->num_rows
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <title>Roadmap - PoliReplay</title>
        <meta charset="utf-8" />
        <link rel="icon" href="./assets/images/favicon.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta
        name="description"
        content="Guarda e aggiungi tutte le lezioni regisTRate del Politecnico di Milano"
        />
        <link rel="manifest" href="./assets/manifest.json" />
        <meta property="og:type'" content="website">
        <meta property="og:url'" content="www.polireplay.it">
        <meta property="og:title'" content="Cerca e riguarda le lezioni - PoliReplay">
        <meta property="og:image'" content="./assets/images/favicon.ico">
        <meta property="og:description'" content="Cerca, filTRa e riguarda le lezioni online del Politecnico di Milano. Semplice, gratuito e veloce.">
        <link rel="stylesheet" href="./styles/navbar.css">
        <link rel="stylesheet" href="./styles/footer.css">
        <link rel="stylesheet" href="./styles/cookiesalert.css">
        <style>
          #rd-cont{
            padding-left: 24px;
          }
          #rd-cont div {
            border-bottom: 1px solid grey;
          }
          h3 {
            margin-bottom: 3px;
          }
          p{
            margin-top: 0px;
          }
          .not {
            color: red;
            font-weight: bold;
          }
          .yep {
            color: green;
            font-weight: bold;
          }
          .yel {
            color: #ff9900;
            font-weight: bold;
          }
          #myProgress {
            width: calc(100% - 48px);
            max-width: 750px;
            background-color: #eee;
            border-radius: 5px;
            overflow: hidden;
            margin-left: 24px;
          }
          #myBar {
            width: 3.9%;
            height: 30px;
            background: linear-gradient(90deg, rgba(0, 60, 255, 1) 0%, rgba(0, 255, 136, 1) 100%);
            text-align: center; /* To center it horizontally (if you want) */
            line-height: 30px; /* To center it vertically */
            color: white; 
          }
        </style>
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
                <a class="purple-no-btn" href="add.html">
                    <img id="plus" src="assets/images/plus.svg" alt="Add an event"/>
                </a>
              </ul>
            </div>
          </div>

        <h1 style="margin-top: 40px; padding-top: 16px; padding-left: 24px; padding-right: 16px; margin-left: 0px; margin-bottom: 0px; margin-right: 0px;" >Roadmap</h1>
        <p style=" padding-left: 24px; padding-right: 16px; margin-top: 10px; color: rgb(112, 112, 112);" >In questa pagina è riportato lo status degli insegnamenti presenti su PoliReplay.</p>
        <p style=" padding-left: 24px; padding-right: 16px; margin-top: 10px; color: rgb(112, 112, 112);" >Se l'insegnamento non è presente, puoi contribuire ad aggiungere le lezioni registrandoti <a href="https://polireplay.it/join">qui</a>.</p>
        <h2 style=" padding-left: 24px; padding-right: 16px; margin-top: 10px; color: black; margin-bottom: 2px;" ><?php echo $counter + 67 ?> / 4448</h2>
        <p style=" padding-left: 24px; padding-right: 16px; margin-top: 0px; color: rgb(112, 112, 112); margin-bottom: 30px;" >Insegnamenti indicizzati</p>
        <div id="myProgress">
          <div id="myBar">3.9%</div>
        </div>
        <p style=" padding-left: 24px; padding-right: 16px; margin-top: 10px; color: rgb(112, 112, 112); margin-bottom: 50px;" >Effettua una ricerca con <strong>Ctrl + F</strong> (Windows e Linux) oppure Command + F (macOS)</p>

<div id="rd-cont">
 <div>
  <h3>MANAGEMENT OF
  ORGANIZATIONS AND PROJECTS</h3>
  <p>TOLETTI GIOVANNI</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=TOLETTI GIOVANNI">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>SISTEMI ENERGETICI E
  IMPATTO AMBIENTALE</h3>
  <p>LOZZA GIOVANNI GUSTAVO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>DINAMICA E CONTROLLO
  DELLE MACCHINE</h3>
  <p>CHATTERTON STEVEN</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>REMOTE SENSING FOR EARTH
  OBSERVATION AND SURVEILLANCE</h3>
  <p>TEBALDINI STEFANO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>ECONOMIA E ORGANIZZAZIONE
  AZIENDALE</h3>
  <p>GUERINI MASSIMILIANO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>SOFTWARE DEFINED
  NETWORKING</h3>
  <p>VERTICALE GIACOMO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>GESTIONE DEGLI IMPIANTI
  INDUSTRIALI</h3>
  <p>MICHELI GUIDO JACOPO LUCA</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>BASI DI DATI 1</h3>
  <p>COMAI SARA</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=Comai Sara">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>STATISTICAL PHYSICS</h3>
  <p>PIAZZA ROBERTO</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=Piazza Roberto">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>DOMAIN SPECIFIC MODELLING</h3>
  <p>BRAMBILLA MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ROBOTICS AND DESIGN</h3>
  <p>BONARINI ANDREA</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>PROVA FINALE (SOFTWARE
  DEFINED NETWORKING)</h3>
  <p>VERTICALE GIACOMO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>MECCANICA DEI FLUIDI</h3>
  <p>MOLINARI DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA B</h3>
  <p>CASSANO LUCA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MOLECULAR MODELING OF
  MATERIALS</h3>
  <p>RAOS GUIDO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>IMPIANTI MECCANICI</h3>
  <p>PEROTTI SARA</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>FONDAMENTI DI ELETTRONICA</h3>
  <p>CASTOLDI ANDREA</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=Castoldi Andrea">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>FONDAMENTI DI ELETTRONICA</h3>
  <p>LEVANTINO SALVATORE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI FISICA DEL
  NUCLEO</h3>
  <p>POLA ANDREA</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>METHODS FOR BIOMEDICAL
  IMAGING AND COMPUTER AIDED SURGERY [2]</h3>
  <p>BARONI GUIDO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>ADVANCED SIGNALS AND DATA
  PROCESSING IN MEDICINE 1</h3>
  <p>CERUTTI SERGIO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>RENEWABLE ENERGY AND
  LOW-CARBON TECHNOLOGIES (I.C.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>MICRO AND NANOOPTICS
  [C.I.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>DIGITAL BUSINESS
  INNOVATION</h3>
  <p>MANGIARACINA RICCARDO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>APPLICAZIONI
  BIOTECNOLOGICHE E BIOREATTORI [1]</h3>
  <p>CANDIANI GABRIELE</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>PROCESSI CHIMICI</h3>
  <p>GROPPI GIANPIERO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>DESIGNING DIGITAL
  BUSINESS INNOVATION LAB</h3>
  <p>RANGONE ANDREA</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>BIOMEDICAL SIGNAL
  PROCESSING AND MEDICAL IMAGES - BIOE 540-421</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>IC ADVANCED ARCHITECTURAL
  DESIGN STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>TECHNOLOGIES FOR MOTOR
  BEHAVIOUR ANALYSIS AND VIRTUAL MODELLING 1</h3>
  <p>FERRIGNO GIANCARLO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>SEJIMA KAZUYO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>CONSTRUCTION MANAGEMENT</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>DIGITAL COMMUNICATION II</h3>
  <p>SPALVIERI ARNALDO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>COMPUTATIONAL FLUID
  DYNAMICS [1]</h3>
  <p>PAROLINI NICOLA</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>VICENS HUALDE IGNACIO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN
  THEORY</h3>
  <p>HEIDARI AFSHARI ARIAN</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>COMPUTATIONAL FLUID
  DYNAMICS [C.I.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>DESIGN METHODS FOR
  INNOVATION</h3>
  <p>CAUTELA CABIRIO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>DESIGN MANAGEMENT</h3>
  <p>PRESS BRIAN JOSEPH</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>LANDSCAPE CULTURE AND
  HISTORY</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>LANDSCAPE CULTURE</h3>
  <p>JAKOB MICHAEL FRANZ</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>TECNICA DELLA SICUREZZA E
  IGIENE INDUSTRIALE A+B</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>CONSTRUCTION AND
  SUSTAINABILITY DESIGN STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>NANOMAGNETISM AND
  SPINTRONICS</h3>
  <p>BERTACCO RICCARDO</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=Bertacco Riccardo">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>MAGNETISM AND
  SUPERCONDUCTIVITY</h3>
  <p>GHIRINGHELLI GIACOMO CLAUDIO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>URBAN DESIGN STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div height=20 style='page-break-before:always;height:15.0pt'>
  <h3>FINANCE LAB + CORPORATE
  FINANCE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>FINANCE LAB</h3>
  <p>GIUDICI GIANCARLO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>TECHNOLOGICAL AND
  ENVIRONMENTAL DESIGN</h3>
  <p>BELLADELLI LEONARDO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>LEMES de OLIVEIRA FABIANO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>CONTROL OF INDUSTRIAL AND
  MOBILE ROBOTS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>ADVANCED PROCESS CONTROL</h3>
  <p>CASELLA FRANCESCO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>TECNOLOGIE PER LA
  MEDICINA RIGENERATIVA [C.I.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>TECNOLOGIE PER LA
  MEDICINA RIGENERATIVA [2]</h3>
  <p>RASPONI MARCO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>MULTIMEDIA SIGNAL
  PROCESSING 2ND MODULE</h3>
  <p>BESTAGINI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SURVEY ADVANCED
  TECHNIQUES</h3>
  <p>FASSI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SEISMIC MICROZONATION</h3>
  <p>LUALDI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN PLANNING</h3>
  <p>MENONI SCIRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EMERGENCY PLANS FOR
  HYDROGEOLOGICAL RISK</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>GEOTECHNICAL DESIGN</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>GEOSPATIAL DATA
  PROCESSING AND MAPPING FOR<span style='mso-spacerun:yes'>� </span>CRISIS
  MANAGEMENT</h3>
  <p>CARRION DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ESERCIZIO FERROVIARIO</h3>
  <p>MAJA ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EARTHQUAKE RESISTANT
  DESIGN 2</h3>
  <p>MARTINELLI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOMATERIALI</h3>
  <p>STERPI DONATELLA VALERIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENGINEERING STRUCTURES
  FOR THE ENVIRONMENT</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>FISICA TECNICA AMBIENTALE
  - PROGETTAZIONE ENERGETICA</h3>
  <p>SCANSANI SANDRO ATTILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NATURAL RESOURCES
  MANAGEMENT</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>ADVANCED ENVIRONMENTAL
  SYSTEMS ANALYSIS [2ND MOD]</h3>
  <p>GIULIANI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>PILERI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  URBANISTICA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>RESTAURO</h3>
  <p>GUARISCO GABRIELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE AVANZATE DI
  RILIEVO E RAPPRESENTAZIONE</h3>
  <p>ACHILLE CRISTIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 1</h3>
  <p>POTRICH NORMAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI E SERVIZI
  INFORMATICI</h3>
  <p>MIRANDOLA RAFFAELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOINGEGNERIA CELLULARE</h3>
  <p>SONCINI MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI OTTIMIZZAZIONE</h3>
  <p>OCCHINERO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DELLE
  VIBRAZIONI</h3>
  <p>VANIA ANDREA TOMMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE AMBIENTALE
  D'IMPRESA E DELLE ENERGIE RINNOVABILI</h3>
  <p>CASULA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACHINE DESIGN 2</h3>
  <p>GORLA CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SURFACE ENGINEERING</h3>
  <p>MAGAGNIN LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL MECHANICS</h3>
  <p>RACIC VITOMIR</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED ALGORITHMS AND
  PARALLEL PROGRAMMING</h3>
  <p>FERRANDI FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA E ORGANIZZAZIONE
  AZIENDALE C</h3>
  <p>SONCIN MARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPI DI INGEGNERIA
  ELETTRICA</h3>
  <p>DOLARA ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN AND CONSTRUCTION
  STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>INFORMATICA B</h3>
  <p>FUMMI FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE INDUSTRIALE
  DELLA QUALITA' CON ELEMENTI DI STATISTICA</h3>
  <p>SEMERARO QUIRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TIROCINIO (ING.
  INFORMATICA)</h3>
  <p>MATTEUCCI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTRONICA BIOMEDICA</h3>
  <p>DELLACA' RAFFAELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA RAZIONALE E DEI
  CONTINUI</h3>
  <p>VIANELLO MAURIZIO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI OTTIMIZZAZIONE
  DELLA RICERCA OPERATIVA</h3>
  <p>ORSENIGO CARLOTTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI INFORMATIVI (PER
  IL SETTORE DELL'INFORMAZIONE)</h3>
  <p>AMARILLI FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  ELABORAZIONE NUMERICA DEI SEGNALI</h3>
  <p>TUBARO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div height=20 style='page-break-before:always;height:15.0pt'>
  <h3>PROGETTO DI INGEGNERIA
  INFORMATICA (5 CFU)</h3>
  <p>PALERMO GIANLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTER MUSIC -
  REPRESENTATIONS AND MODELS</h3>
  <p>SARTI AUGUSTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL
  PRESERVATION STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>PRESERVATION</h3>
  <p>CAZZANI ALBERTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROTECNICA I</h3>
  <p>ARTURI CESARE MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISCRETE MATHEMATICS</h3>
  <p>NOTARI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRAFFIC THEORY</h3>
  <p>FILIPPINI ILARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROTECNICA E
  ELETTRONICA APPLICATA</h3>
  <p>ZICH RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTRONICA</h3>
  <p>TOSI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA (PER
  INGEGNERIA MECCANICA)</h3>
  <p>RINALDI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MISURE E STRUMENTAZIONE
  INDUSTRIALE</h3>
  <p>CIGADA ALFREDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED CATALYTIC
  REACTOR DESIGN</h3>
  <p>MAESTRI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  COMUNICAZIONI E INTERNET</h3>
  <p>CESANA MATTEO</p>
  <p class="yep">Disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI CHIMICI PER
  L'INFORMATICA</h3>
  <p>METRANGOLO PIERANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE E CALCOLO
  ASSISTITO DI STRUTTURE MECCANICHE</h3>
  <p>MICCOLI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FORMAL LANGUAGES AND
  COMPILERS</h3>
  <p>BREVEGLIERI LUCA ODDONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBABILIT� E STATISTICA
  PER L'INFORMATICA</h3>
  <p>BASSETTI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FORMAL LANGUAGES AND
  COMPILERS</h3>
  <p>MORZENTI ANGELO CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FLUIDODINAMICA</h3>
  <p>VIGEVANO LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TIROCINIO</h3>
  <p>NOVA ISABELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  COMUNICAZIONI E INTERNET</h3>
  <p>MUSUMECI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO [INDUSTRIALE]</h3>
  <p>GIORDANO CARMEN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>QUALITY DATA ANALYSIS</h3>
  <p>COLOSIMO BIANCA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA I</h3>
  <p>MONTICELLI DARIO DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MEDICAL APPLICATIONS OF
  RADIATION FIELDS</h3>
  <p>GIULINI CASTIGLIONI AGOSTEO STEFANO LUIGI MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA</h3>
  <p>RUIZ PALACIOS FREDY ORLANDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FLUIDODINAMICA
  SPERIMENTALE</h3>
  <p>BELAN MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONSTRUCTION AND DESIGN
  OF ELECTRICAL MACHINES</h3>
  <p>DI GERLANDO ANTONINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRICITY MARKETS</h3>
  <p>BOVO CRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEADERSHIP &amp;
  INNOVATION</h3>
  <p>CANTERINO FILOMENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACHINE LEARNING</h3>
  <p>VERCELLIS CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA DELLE COSTRUZIONI</h3>
  <p>BAMONTE PATRICK</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA 1
  (MICROECONOMIA)</h3>
  <p>FELICE GIULIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA 1
  (MICROECONOMIA)</h3>
  <p>FLORIO ANNA PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AUTOMATION AND CONTROL
  LABORATORY</h3>
  <p>KARIMI HAMID REZA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIRITTO DELL'ENERGIA</h3>
  <p>GIOVANNINI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HIGH-TECH STARTUPS:
  CREATING AND SCALING UP II</h3>
  <p>GHEZZI ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNCTIONAL MECHANICAL
  DESIGN</h3>
  <p>CINQUEMANI SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENERGY SYSTEMS LM</h3>
  <p>CAMPANARI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI E FENOMENI DI
  TRASPORTO</h3>
  <p>NOBILI LUCA GIAMPAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>MONICA LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE E CRITERI DI
  PROGETTAZIONE ANTISISMICA</h3>
  <p>GALLONI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>ZANDA CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURES AND EARTHQUAKE
  RESISTANCE CRITERIA</h3>
  <p>NICOLETTI MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE E CRITERI DI
  PROGETTAZIONE ANTISISMICA</h3>
  <p>FORMIS LUCA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI PROGETTO E
  COSTRUZIONE DELL'ARCHITETTURA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>PROGETTAZIONE TECNOLOGICA
  AMBIENTALE</h3>
  <p>GAMBARO MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE E CRITERI DI
  PROGETTAZIONE ANTISISMICA</h3>
  <p>DI LUZIO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLIED BOTANY AND
  LANDSCAPE DESIGN</h3>
  <p>VAGGE ILDA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE PLANNING</h3>
  <p>GIBELLI MADDALENA GIOIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN REGENERATION AND
  LANDSCAPE RECOVERING</h3>
  <p>FONTANA CARLOTTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE ARCHITECTURE
  AND ENVIRONMENTAL DESIGN</h3>
  <p>BURGI PAUL LUTHER</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTEMPORARY ISSUES IN
  LANDSCAPE ARCHITECTURE</h3>
  <p>TANG YANHONG</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE DESIGN STUDIO 2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>HEALT AND SUSTAINABILITY
  FOR BUILT ENVIRONMENT</h3>
  <p>CAPOLONGO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METABOLISM OF CITY AND
  LANDSCAPE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>FINI GIULIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN PROCESS
  MANAGEMENT</h3>
  <p>RECALCATI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR DESIGN</h3>
  <p>CISLER ONDREJ</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL COMPOSITION</h3>
  <p>BELLONI FRANCESCA CLAUDIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN
  STUDIO 1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>SUSTAINABLE ARCHITECTURE</h3>
  <p>COPPETTI BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACCHINE</h3>
  <p>ONORATI ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOINGEGNERIA DEL SISTEMA
  MOTORIO</h3>
  <p>GALLI MANUELA</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=GALLI MANUELA">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>DESIGN OF PUBLIC SPACES
  AND INFRASTRUCTURES</h3>
  <p>PUCCI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTRODUCTORY ECONOMETRICS</h3>
  <p>MOSCONI ROCCO ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ROTOR DYNAMICS AND
  DIAGNOSTIC B</h3>
  <p>PENNACCHI PAOLO EMILIO LINO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (TECNOLOGIE
  E MATERIALI AEROSPAZIALI)</h3>
  <p>SALA GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOLIDIFICATION AND
  WELDING METALLURGY</h3>
  <p>GRUTTADAURIA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CYBER SECURITY
  TECHNOLOGIES, PROCEDURES AND POLICIES</h3>
  <p>ZANERO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MISURE MECCANICHE E
  TERMICHE</h3>
  <p>ZAPPA EMANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACCHINE</h3>
  <p>DOSSENA VINCENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOSTATISTICS</h3>
  <p>IEVA FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGIES FOR SAFETY
  AND ENVIRONMENT IN THE OIL&amp;GAS AND ENERGY INDUSTRY</h3>
  <p>CAPELLI LAURA MARIA TERESA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DELLA
  MISURAZIONE</h3>
  <p>NORGIA MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECOLOGY</h3>
  <p>MELIA' PACO VASCO ALDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AGRONOMY AND FOOD
  SCIENCES</h3>
  <p>TORRIGIANI EMANUELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURE PRESERVATION
  STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>GESTIONE DEGLI IMPIANTI
  INDUSTRIALI</h3>
  <p>FUMAGALLI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE
  (MODELLISTICA DELLE MACCHINE E DEGLI IMPIANTI ELETTRICI)</h3>
  <p>CARMELI MARIA STEFANIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA INDUSTRIALE</h3>
  <p>TRONCONI ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARTIFICIAL INTELLIGENCE</h3>
  <p>AMIGONI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA II</h3>
  <p>PUNZO FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARTIFICIAL INTELLIGENCE</h3>
  <p>COLOMBETTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROTECNICA</h3>
  <p>GRIMACCIA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MULTIBODY SYSTEM DYNAMICS</h3>
  <p>MASARATI PIERANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTEMPORARY CITY:
  DESCRIPTIONS AND PROJECTS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>ARCHITECTURAL
  PRESERVATION</h3>
  <p>LOMBARDINI NORA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA E
  COMPOSIZIONE ARCHITETTONICA L + LABORATORIO + STORIA E CRITICA
  DELL'ARCHITETTURA CONTEMPORANEA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>FUNCTIONAL MATERIALS</h3>
  <p>BERTARELLI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA E
  COMPOSIZIONE ARCHITETTONICA L</h3>
  <p>GHILOTTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA E
  COMPOSIZIONE ARCHITETTONICA XL - TEORIA</h3>
  <p>POGGIOLI PIERO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE E
  INNOVAZIONE TECNOLOGICA + LABORATORIO DI TECNOLOGIA STRATIFICATA A SECCO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>RECUPERO E CONSERVAZIONE
  DEGLI EDIFICI + LABORATORIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>PROGETTAZIONE TECNOLOGICA
  ASSISTITA</h3>
  <p>ARLATI EZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IL METODO DEGLI<span
  style='mso-spacerun:yes'>� </span>ELEMENTI FINITI PER L 'ANALISI DEI PRODOTTI
  INDUSTRIALI</h3>
  <p>MICCOLI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI TECNICA
  URBANISTICA 1</h3>
  <p>PINTO FULVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI TECNICA
  URBANISTICA 1</h3>
  <p>FOSSATI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO CAD DI
  INFORMATICA GRAFICA</h3>
  <p>MUSCOGIURI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANTROPOLOGIA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA
  + LABORATORIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DEGLI
  ELEMENTI COSTRUTTIVI B</h3>
  <p>PITTAU FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO DELL'ARCHITETTURA
  2 (DISEGNO)</h3>
  <p>BOLOGNESI CECILIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA DELLE COSTRUZIONI</h3>
  <p>COLOMBO MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI MOTORI A
  COMBUSTIONE INTERNA</h3>
  <p>CERRI TARCISIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA (ING.
  CIVILE)</h3>
  <p>VISCONTI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TIMBER, MEMBRANE AND
  GLASS STRUCTURES</h3>
  <p>FEDELE ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO CAD PARAMETRICO
  3D</h3>
  <p>CAMMARATA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  1</h3>
  <p>LOI MARIACRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  1</h3>
  <p>ZANZOTTERA FERDINANDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DEL DESIGN E
  DELL'ARCHITETTURA</h3>
  <p>CONTI GIOVANNI MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DELLA
  RAPPRESENTAZIONE</h3>
  <p>IAROSSI MARIA POMPEIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DELLA
  RAPPRESENTAZIONE</h3>
  <p>PAPI DANIELE GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  TERRITORIALE PER LA GESTIONE DEI RISCHI</h3>
  <p>BIGNAMI DANIELE FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E METODI DEL
  PROGETTO</h3>
  <p>AMORUSO GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E METODI DEL
  PROGETTO</h3>
  <p>DONADEL VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E METODI DEL
  PROGETTO</h3>
  <p>PROTASONI FILIPPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E METODI DEL
  PROGETTO</h3>
  <p>MAINI MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>GAETA LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>POGLIANI LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE CAD</h3>
  <p>ROSA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  2</h3>
  <p>D'AMIA GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DI STRUTTURE PER
  LA NUOVA COSTRUZIONE</h3>
  <p>TATTONI SERGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DEL DESIGN E DELLA
  TECNICA</h3>
  <p>HOCKEMEYER LISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOSTENIBILITA' AMBIENTALE
  E LCA DEI MATERIALI DELLE COSTRUZIONI</h3>
  <p>DOTELLI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATICA</h3>
  <p>LOSI GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARTE</h3>
  <p>BOERI ELISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ILLUMINOTECNICA</h3>
  <p>PALLADINO PIETRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN E RESTAURO</h3>
  <p>CARAMEL CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN E ARTI</h3>
  <p>FINESSI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TYPOGRAPHIC DESIGN</h3>
  <p>FUGA GIANGIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARTE MODERNA</h3>
  <p>MAFFEIS RODOLFO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARTE MODERNA</h3>
  <p>MARANI PIETRO CESARE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIOLOGY OF CONTEMPORARY
  CITIES</h3>
  <p>ARLOTTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTEGRATED PROJECT
  MANAGEMENT AND DESIGN TOOLS</h3>
  <p>RE CECCONI FULVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIOLOGIA</h3>
  <p>PETRILLO AGOSTINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI PER
  L'ARCHITETTURA</h3>
  <p>GASTALDI MATTEO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN PER LA
  SOSTENIBILIT� AMBIENTALE</h3>
  <p>ROGNOLI VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA DELLE COSTRUZIONI</h3>
  <p>CATTANEO SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL DESIGN</h3>
  <p>BAMONTE PATRICK</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL DESIGN</h3>
  <p>GENTILE CARMELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA E IMPIANTI</h3>
  <p>LEONFORTE FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  E DELLE TECNICHE COSTRUTTIVE</h3>
  <p>FORNI MARIA ENRICA MARICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ART DIRECTION &amp;
  COPYWRITING - SENTIMENTO E COMUNICAZIONE NELL'ERA DELLA POST-PUBBLICIT�</h3>
  <p>CICCOGNANI LUIGI MARCELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA DEL PROGETTO PER
  IL DESIGN DEGLI EVENTI</h3>
  <p>FOIS LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>REGIONAL ECONOMICS + LAND
  RENT THEORY</h3>
  <p>CAPELLO ROBERTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL USER INNOVATION</h3>
  <p>LOPARCO GIANLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERNI TRA PERMANENZA E
  TEMPORANEIT�</h3>
  <p>BOIDI SERGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AMBIENTE E PROGETTO</h3>
  <p>BORRONI ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING PHYSICS</h3>
  <p>FERRARI SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RISK-BASED DESIGN</h3>
  <p>SMERZINI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING RENOVATION
  STUDIO</h3>
  <p>GRECCHI MANUELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADAPTIVE FACADE STUDIO</h3>
  <p>PESENTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>CAMPIOLI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>LAVAGNA MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPECIAL TOPICS IN
  LANDSCAPE</h3>
  <p>TZORTZI NERANTZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRATEGIA ED ECONOMIA DEL
  PROGETTO</h3>
  <p>SALA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGI SKILLS (H)
  RAPPRESENTAZIONE DELLO SPAZIO IN AMBIENTE DIGITALE</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WORKSHOP</h3>
  <p>GILAD RON</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DEL PAESAGGISMO
  CONTEMPORANEO</h3>
  <p>REPISHTI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 1 +
  COMPLEMENTI DI ALGEBRA LINEARE</h3>
  <p>CONTI MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CARATTERI TIPOLOGICI
  DELL'ARCHITETTURA</h3>
  <p>BONFANTE FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE PARAMETRICA
  BIM ORIENTED IN AMBIENTE: REVIT + DYNAMO</h3>
  <p>BOLOGNESI CECILIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VIRTUAL AND PHYSICAL
  PROTOTYPING</h3>
  <p>BORDEGONI MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGI SKILLS (I)
  RAPPRESENTAZIONE DELLO SPAZIO IN AMBIENTE DIGITALE</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGI SKILLS (M)
  RAPPRESENTAZIONE DELLO SPAZIO IN AMBIENTE DIGITALE</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COSTRUZIONI IN ZONA
  SISMICA</h3>
  <p>PARISI MARIA ADELAIDE VITTORIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN RESPONSABILE</h3>
  <p>MAIOCCHI MARCO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGI SKILLS(J)
  RAPPRESENTAZIONE DELLO SPAZIO IN AMBIENTE DIGITALE</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING TYPES AND REAL
  ESTATE FUNCTIONS</h3>
  <p>CIARAMELLA GIANANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA DELLA
  LOCALIZZAZIONE E DEGLI INVESTIMENTI NEL SETTORE DELLE COSTRUZIONI</h3>
  <p>PERUCCA GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MIAW B</h3>
  <p>FIORETTI DONATELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA E IMPIANTI</h3>
  <p>SARTO LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIRITTO DELLA
  RIGENERAZIONE URBANA</h3>
  <p>MANTINI PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE 2</h3>
  <p>RATTI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA DEL TERRITORIO</h3>
  <p>ROSSI FEDERICA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CI METODI E STRUMENTI
  DELLA PREVENZIONE E GESTIONE DEI RISCHI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>VETTORI MARIA PILAR</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>OBERTI ILARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING COMPONENTS AND
  SYSTEMS DESIGN</h3>
  <p>CASTALDO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>TAMINI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA DI BASE</h3>
  <p>DICHIARANTE VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN IN
  HISTORICAL CONTEXT STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  PROGETTAZIONE ARCHITETTONICA 3</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>CI MATEMATICA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>ELEMENTS OF MATHEMATICS A</h3>
  <p>VERANI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI MATEMATICA A</h3>
  <p>ZAVAGLIA ANDREA CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY OF ARCHITECTURAL
  HERITAGE</h3>
  <p>BUCCI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI MATEMATICA B</h3>
  <p>ZAVAGLIA ANDREA CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALS IN ARCHITECTURE</h3>
  <p>GOIDANICH SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIC ANALYSIS OF
  PUBLIC POLICIES</h3>
  <p>MATSAGANIS EMMANUEL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN PLANNING</h3>
  <p>MORONI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECOLOGIA URBANA</h3>
  <p>CASAGRANDI RENATO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  PROGETTAZIONE DELL'ARCHITETTURA DEGLI INTERNI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="yel">Nessuna lezione registrata</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA II</h3>
  <p>GAZZOLA FILIPPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  TECNICA PER L'INGEGNERIA CHIMICA</h3>
  <p>CELLESI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROGETTO
  MULTI-DISCIPLINARE)</h3>
  <p>CASCINI GAETANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROTECNICA</h3>
  <p>STORTI GAJANI GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI INFORMATICA</h3>
  <p>MIRANDOLA RAFFAELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI INFORMATICA</h3>
  <p>BRAGA DANIELE MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI INFORMATICA</h3>
  <p>CAGLIOTI VINCENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED MANUFACTURING
  PROCESSES</h3>
  <p>DEMIR ALI GOKHAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED MANUFACTURING
  PROCESSES</h3>
  <p>ANNONI MASSIMILIANO PIETRO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLIED METALLURGY</h3>
  <p>D'ERRICO FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED COMPUTER
  ARCHITECTURES</h3>
  <p>SILVANO CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOMECCANICA</h3>
  <p>VESENTINI SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA E ORGANIZZAZIONE
  AZIENDALE C</h3>
  <p>MASELLA CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HIGH-TECH
  ENTREPRENEURSHIP</h3>
  <p>COLOMBO MASSIMO GAETANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RELIABILITY ENGINEERING
  AND QUALITY CONTROL</h3>
  <p>CRISTALDI LOREDANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MOLECULAR AND
  COMPUTATIONAL BIOLOGY AND MEDICAL GENETICS MODULE 3</h3>
  <p>BOLCHINI CRISTIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NOISE AND VIBRATION
  ENGINEERING</h3>
  <p>CORRADI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTRONICA</h3>
  <p>NATALI DARIO ANDREA NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA III</h3>
  <p>FRAGAL� ILARIA MARIA RITA</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=TOMARELLI FRANCO">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>RETI DI TELECOMUNICAZIONE</h3>
  <p>BREGNI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CALCOLO NUMERICO</h3>
  <p>DEDE' LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEI
  CALCOLATORI E SISTEMI OPERATIVI</h3>
  <p>BRANDOLESE CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA</h3>
  <p>SALIONI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>USI DEL SUOLO ED EFFETTI
  AMBIENTALI</h3>
  <p>PILERI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>OPTIMAL MECHANICAL DESIGN
  AND FINITE ELEMENT METHOD</h3>
  <p>BERNASCONI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOFTWARE ENGINEERING FOR
  GEOINFORMATICS</h3>
  <p>DI NITTO ELISABETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNDAMENTALS OF
  COMMUNICATION NETWORKS</h3>
  <p>PATTAVINA ACHILLE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA DELLE COSTRUZIONI
  (AMB)</h3>
  <p>CORONELLI DARIO ANGELO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA MECCANICA E
  QUALITA'</h3>
  <p>COLLEDANI MARCELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOFTWARE ENGINEERING 2</h3>
  <p>ROSSI MATTEO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRATTAMENTI DELLE ACQUE
  DI RIFIUTO</h3>
  <p>MALPEI FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HYDROLOGY FOR FLOOD RISK
  EVALUATION</h3>
  <p>MENDUNI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENTERPRISE RISK
  MANAGEMENT (ERM)</h3>
  <p>COLOMBO SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED MANUFACTURING
  PROCESSES LAB A</h3>
  <p>PREVITALI BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTATIONAL STRUCTURAL
  ANALYSIS</h3>
  <p>BIONDINI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA DELLE
  PAVIMENTAZIONI</h3>
  <p>TORALDO EMANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DATA-BASED MODELLING OF
  DYNAMICAL SYSTEMS AND OPTIMAL CONTROL</h3>
  <p>TANELLI MARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANTENNAS</h3>
  <p>GENTILI GIAN GUIDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 2</h3>
  <p>LELLA PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI CHIMICA</h3>
  <p>RAOS GUIDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI CHIMICA</h3>
  <p>CAVALLO GABRIELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI CHIMICA</h3>
  <p>MARTI RUJAS JAVIER</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI ANALISI E
  MODELLIZZAZIONE DEI PROCESSI + PROVA FINALE</h3>
  <p>PERO MARGHERITA EMMA PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BAYESIAN LEARNING AND
  MONTECARLO SIMULATION</h3>
  <p>BASSETTI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SMART GRIDS AND
  REGULATION FOR RENEWABLE ENERGY SOURCES</h3>
  <p>ZANINELLI DARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERNET OF THINGS</h3>
  <p>CESANA MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL FORENSICS AND
  CYBERCRIME</h3>
  <p>ZANERO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIE GIURIDICHE E
  NORMATIVE</h3>
  <p>CARUCCIO LORENZO SILVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOLOGIA APPLICATA 1</h3>
  <p>PAPINI MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA AMBIENTALE</h3>
  <p>TAVONI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI E MODELLI
  MATEMATICI PER L'INGEGNERIA</h3>
  <p>VERRI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RADIOCHIMICA APPLICATA
  A+B</h3>
  <p>MARIANI MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOLAR AND BIOMASS POWER
  GENERATION</h3>
  <p>MANZOLINI GIAMPAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA</h3>
  <p>COLOMBO LUIGI PIETRO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA</h3>
  <p>NIRO ALFONSO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEORIA E TECNICA DEI
  VEICOLI TERRESTRI</h3>
  <p>GOBBI MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI
  RAPPRESENTAZIONE TECNICA</h3>
  <p>CARUSO GIANDOMENICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE
  (IAT-ICAR/07)</h3>
  <p>STERPI DONATELLA VALERIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRATTAMENTI SUPERFICIALI
  PER APPLICAZIONI MECCANICHE</h3>
  <p>LECIS NORA FRANCESCA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPI DI ARCHITETTURE
  DEI CALCOLATORI</h3>
  <p>ZACCARIA VITTORIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROTECNICA</h3>
  <p>GRASSI FLAVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTATIONAL MODELING IN
  ELECTRONICS AND BIOMATHEMATICS</h3>
  <p>SACCO RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBABILITA' E STATISTICA
  MATEMATICA</h3>
  <p>GUATTERI GIUSEPPINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LOGISTICS MANAGEMENT</h3>
  <p>MELACINI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NUMERICAL ANALYSIS FOR
  MACHINE LEARNING</h3>
  <p>MIGLIO EDIE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NEW SENSORS AND
  MEASUREMENT SYSTEMS FOR CIVIL ENGINEERING</h3>
  <p>SACCOMANDI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTATIONAL STATISTICS</h3>
  <p>MANZONI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (MACCHINE
  ELETTRICHE E AZIONAMENTI)</h3>
  <p>MAURI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INGEGNERIA DEL SOFTWARE</h3>
  <p>BARESI LUCIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOMECCANICA</h3>
  <p>REDAELLI ALBERTO CESARE LUIGI</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=REDAELLI ALBERTO CESARE LUIGI">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 1</h3>
  <p>MARCHINI ELSA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>REVIEWING, REBUTTAL, AND
  PRESENTATION (HPSR)</h3>
  <p>COLANERI PATRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATISTICS</h3>
  <p>IEVA FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DYNAMIC ANALYSIS OF
  TRANSPORT SYSTEMS</h3>
  <p>MUSSONE LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOMEDICAL SIGNAL
  PROCESSING LABORATORY</h3>
  <p>MAINARDI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROTECNICA</h3>
  <p>SPADACINI GIORDANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  PROGETTAZIONE ARCHITETTONICA 1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA I E FISICA IIA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MOBILE RADIO NETWORKS</h3>
  <p>CAPONE ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ALGORITMI E PRINCIPI
  DELL'INFORMATICA (MOD 2 - INFORMATICA 3)</h3>
  <p>PRADELLA MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>USER CENTRED DESIGN
  WORKSHOP</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA E
  GEOMETRIA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINAL SYNTHESIS DESIGN
  STUDIO SECT.3</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EQUAZIONI DIFFERENZIALI
  ALLE DERIVATE PARZIALI</h3>
  <p>COLLINI TIZIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EQUAZIONI DIFFERENZIALI
  ALLE DERIVATE PARZIALI</h3>
  <p>CITRINI CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATION AND
  COMMUNICATION DESIGN</h3>
  <p>MAURI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMMUNICATION DESIGN
  (DATA - DRIVEN)</h3>
  <p>VANTINI SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROTEZIONE IDRAULICA DEL
  TERRITORIO [C.I.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EQUAZIONI DIFFERENZIALI
  ORDINARIE</h3>
  <p>CITRINI CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RADIOATTIVIT� (MODULO
  C.I.)</h3>
  <p>POLA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METADESIGN</h3>
  <p>AURICCHIO VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METHODS AND TOOLS FOR
  PSSD</h3>
  <p>FASSI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERACTION - DESIGN</h3>
  <p>BOIANO RAFFAELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ATELIER FOR TECHNOLOGIES</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMMUNICATION FOR FASHION</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA RAZIONALE</h3>
  <p>BARBANTE PAOLO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN MANAGEMENT FOR
  FASHION</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ORGANIZZAZIONE DI IMPRESA
  (INTEGR.)</h3>
  <p>RENGA FILIPPO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LIFE DESIGN</h3>
  <p>ANNOVAZZI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHEMICAL REACTION
  ENGINEERING AND APPLIED CHEMICAL KINETICS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOSTATISTICA</h3>
  <p>VENUTI GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOTECNICA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>FOLLI MARIA GRAZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>BALDUCCI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI POLIMERICI B</h3>
  <p>TURRI STEFANO ETTORE ROMANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DIGITALI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  SPERIMENTALE I (INTEGR.)</h3>
  <p>ISELLA GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA (MODULO 1)</h3>
  <p>DALLA MORA ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA (MODULO 1)</h3>
  <p>LUCCHINI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI ANALITICI E
  NUMERICI PER L'INGEGNERIA (PARTE DI ANALISI NUMERICA)</h3>
  <p>FUMAGALLI ALESSIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS DATA ANALYTICS
  [1]</h3>
  <p>PAMMOLLI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 1 E
  GEOMETRIA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VIBRATION ANALYSIS AND
  VIBROACOUSTICS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  SPERIMENTALE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHYSICS IIA</h3>
  <p>SORDAN ROMAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOINGEGNERIA<span
  style='mso-spacerun:yes'>� </span>PER IL DISSESTO IDROGEOLOGICO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOLOGIA APPLICATA 2</h3>
  <p>PAPINI MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI DI PRODUZIONE
  INTELLIGENTI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  SPERIMENTALE B (INTEGR)</h3>
  <p>MORETTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INDUSTRIAL MANAGEMENT LAB
  AND TOOLBOX</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRESTAZIONI E DINAMICA
  DEL VELIVOLO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  SPERIMENTALE I (INTEGR.)</h3>
  <p>FRIGERIO JACOPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOELETTROMAGNETISMO E
  STRUMENTAZIONE BIOMEDICA [C.I.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOELETTROMAGNETISMO E
  STRUMENTAZIONE BIOMEDICA [1]</h3>
  <p>CORINO VALENTINA</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=CORINO VALENTINA">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>FISICA (MODULO 2)</h3>
  <p>GAMBETTA ALESSIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA (MODULO 1)</h3>
  <p>MARANGONI MARCO ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  SPERIMENTALE I (INTEGR.)</h3>
  <p>DI SIENO LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NANODEVICE
  CHARACTERIZATION</h3>
  <p>CHRASTINA DANIEL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PIANIFICAZIONE
  TERRITORIALE [1]</h3>
  <p>GUENTHER FELIX CHRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  COMUNICAZIONI E INTERNET</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI
  II</h3>
  <p>TALIERCIO ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AUTOMATION AND
  MECHATRONICS MODULE 2</h3>
  <p>ROCCO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS DATA ANALYTICS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO
  TECNOLOGICO-PROGETTUALE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESEARCH THEMATIC SEMINAR</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRESERVATION</h3>
  <p>LOMBARDINI NORA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL MODELLING</h3>
  <p>GHISI ALDO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VALORISATION OF<span
  style='mso-spacerun:yes'>� </span>CULTURAL HERITAGE</h3>
  <p>RONCHI ALFREDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DEL
  DESIGN</h3>
  <p>GATTI GIACOMO ATTILIO CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLICAZIONI DEI
  MATERIALI NEL DESIGN</h3>
  <p>LOUSTEAU JORIS GILLES, ALAIN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI PER IL DESIGN</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DEI MATERIALI
  PER IL DISEGNO INDUSTRIALE</h3>
  <p>LOUSTEAU JORIS GILLES, ALAIN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE VISIVA</h3>
  <p>PITONI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR DESIGN</h3>
  <p>DEL CURTO BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR DESIGN</h3>
  <p>BALENA ARISTA FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN ALPINO</h3>
  <p>FALERI ALDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN ALPINO (INT. DI)</h3>
  <p>BONI ROBERTO DOMENICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>BIAGI MARCO ENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>PAPI DANIELE GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITT� E DEL
  TERRITORIO</h3>
  <p>POMILIO FILOMENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RILIEVO PER
  L'ARCHITETTURA</h3>
  <p>BARAZZETTI LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>GAGLIO VINCENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>FLORIDI GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA</h3>
  <p>BIRAGHI MARCO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>INFUSSI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WORKSHOP DI TESI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DI
  DESIGN</h3>
  <p>COLLINA LUISA MARIA VIRGINIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMA DESIGN (SEMINARI
  DI)</h3>
  <p>COLLINA LUISA MARIA VIRGINIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMA DESIGN (SEMINARI
  DI)</h3>
  <p>ELGANI ELENA MARIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DI
  DESIGN</h3>
  <p>SILVA CORONEL PAOLA LETIZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBLEM SETTING AND TEAM
  BUILDING<span style='mso-spacerun:yes'>� </span>1</h3>
  <p>FERRARO VENERE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPATIAL DESIGN</h3>
  <p>PICCINNO GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  PROGETTAZIONE PER L'EDILIZIA STORICA</h3>
  <p>CARLESSI MARIANGELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  PROGETTAZIONE FINALE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA</h3>
  <p>BARATTUCCI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR ARCHITECTURE</h3>
  <p>ZUCCHI CINO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>BRUNETTI GIAN LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLICAZIONI DEI
  MATERIALI NEL DESIGN</h3>
  <p>MARANO CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL ART</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBLEM SETTING AND TEAM
  BUILDING<span style='mso-spacerun:yes'>� </span>1</h3>
  <p>ARQUILLA VENANZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>SCANDIFFIO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>GABRIELLI SIMONA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITT� E DEL
  TERRITORIO</h3>
  <p>BUOLI ALICE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>BONFANTE FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE AESTHETICS</h3>
  <p>ALISON AURORAROSA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>da SILVA FERREIRA de CARVALHO ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN
  STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE DIGITALE</h3>
  <p>MANTEGNA ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI RICERCA PER IL
  PROGETTO</h3>
  <p>PALEARI MARGHERITA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL MODELLING</h3>
  <p>VILLANI GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CRITERI E METODI DI
  SELEZIONE DEI MATERIALI PER L'INNOVAZIONE DEL PRODOTTO INDUSTRIALE
  (APPLICAZIONI DI)</h3>
  <p>DEL CURTO BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>ZANNI FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN
  STUDIO 2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING TECHNOLOGY</h3>
  <p>FABRIS LUCA MARIA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI VISIVI PER IL
  PROGETTO</h3>
  <p>VITALE GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE</h3>
  <p>RAPP DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FIBRE TESSILI</h3>
  <p>FRASSINE ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMA DESIGN (SEMINARI
  DI)</h3>
  <p>COLOMBI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  METAPROGETTO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN STRATEGICO E DEI
  SERVIZI</h3>
  <p>ZURLO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIAL SELECTION
  CRITERIA AND METHODS FOR PRODUCT INNOVATION (APPLICATIONS)</h3>
  <p>GRIFFINI GIANMARCO ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PERCEPTUAL DIMENSIONS AND
  COMMUNICATION DESIGN</h3>
  <p>PICCINNO GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBLEM SETTING 2</h3>
  <p>FERRARO VENERE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EPHEMERAL/TEMPORARY
  SPACES 1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPATIAL DESIGN</h3>
  <p>BARBARA ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR DESIGN</h3>
  <p>GILAD RON</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONSERVAZIONE DEGLI
  EDIFICI</h3>
  <p>CANTINI LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL AND URBAN
  COMPOSITION</h3>
  <p>SETTI GIULIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>REPRESENTATION TECHNIQUES</h3>
  <p>FAZZINA VERONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>VIDECNIK SPELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL DESIGN</h3>
  <p>PECORA CORRADO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI FONDAMENTI
  DEL PROGETTO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DI
  DESIGN</h3>
  <p>ARQUILLA VENANZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI RICERCA PER IL
  PROGETTO</h3>
  <p>GUARICCI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMUNICAZIONE VISIVA</h3>
  <p>RICCO' DINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN AND REGIONAL
  ANALYSIS</h3>
  <p>FELLONI MARIA FIORELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RETI VERDI E
  PIANIFICAZIONE PAESAGGISTICA</h3>
  <p>ARCIDIACONO ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRASPORTI</h3>
  <p>MUSSONE LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEGLI
  INTERNI</h3>
  <p>DONDI LAVINIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE AS HERITAGE</h3>
  <p>BRANDUINI PAOLA NELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE</h3>
  <p>SOLARI MICHELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMA DESIGN (SEMINARI
  DI)</h3>
  <p>AJOVALASIT MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE DEL
  PRODOTTO</h3>
  <p>INGARAMO MATTEO ORESTE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INNOVATION STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLICAZIONI DI
  INFORMATICA</h3>
  <p>MATERA MARISTELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERACTION DESIGN</h3>
  <p>SERGIO FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  COSTRUZIONE DELL'ARCHITETTURA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>CANELLA RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>NERI RAFFAELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA URBANA</h3>
  <p>ZANNI FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN AND LANDSCAPE
  REGENERATION STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI ELEMENTI
  VISIVI DEL PROGETTO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE PER
  LA MODA (RICERCA BIBLIOGRAFICA E COMUNICAZIONE DEL PROGETTO DI LAUREA)</h3>
  <p>MARELLI GIULIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DEI MATERIALI
  PER LA MODA</h3>
  <p>DE NARDO LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE DEL
  PRODOTTO</h3>
  <p>CREA NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEORIA E PRATICA DEL
  DESIGN DI PRODOTTO</h3>
  <p>GIACOBONE GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE DEL
  PRODOTTO</h3>
  <p>MAFFEI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WORKSHOP</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLICAZIONI DI
  INFORMATICA</h3>
  <p>DELLA VALLE EMANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL AND URBAN
  COMPOSITION</h3>
  <p>PEREGO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI SISTEMI
  E ELEMENTI COSTRUTTIVI</h3>
  <p>ASTOLFI GELSOMINA MARGHERITA JESSICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HOUSING POLITICS AND
  DESIGN</h3>
  <p>DI GIOVANNI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANA</h3>
  <p>MERLINI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ESTIMO</h3>
  <p>OPPIO ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>GINELLI ELISABETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE
  (INT. DI)</h3>
  <p>AMANDOLESE DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE</h3>
  <p>PIZZOCARO SILVIA LUISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEORIA E PRATICA DEL
  DESIGN DI PRODOTTO</h3>
  <p>BIANCHINI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SUSTAINABLE FASHION</h3>
  <p>RINALDI FRANCESCA ROMANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE (TRADUZIONE DI CONTENUTI E RAPPRESENTAZIONE)</h3>
  <p>BAULE GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI SISTEMI
  E ELEMENTI COSTRUTTIVI</h3>
  <p>RASCAROLI LUCA VASCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI SISTEMI
  E ELEMENTI COSTRUTTIVI</h3>
  <p>MUZIO GIOVANNI TOMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI SISTEMI
  E ELEMENTI COSTRUTTIVI</h3>
  <p>CUCINI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DEGLI
  INTERNI</h3>
  <p>MONTANARI ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING TECHNOLOGY</h3>
  <p>CLEMENTI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E TECNICHE DEL
  DISEGNO</h3>
  <p>MANCINI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DEI MATERIALI
  PER LA MODA</h3>
  <p>PEDEFERRI MARIAPIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN AND ROBOTICS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>CORRADI EMILIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>DONAIRE GARCIA DE MORA JESUS</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>DI GENNARO MARIA FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>LORENZI ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI MATEMATICA B</h3>
  <p>VALENTE GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>RAVEGNANI MOROSINI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>PAOLETTI INGRID</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>da SILVA FERREIRA de CARVALHO ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIOLOGY OF URBAN SPACE</h3>
  <p>RANCI ORTIGOSA COSTANZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DEFINIZIONE DEL PROGETTO
  - KIT DI USCITA</h3>
  <p>PIARDI SILVIA ELVIRA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI DISEGNO</h3>
  <p>AMORUSO GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI DISEGNO</h3>
  <p>GALLONI LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE</h3>
  <p>MATTANA WALTER</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI PROGETTO
  DELLA COMUNICAZIONE VISIVA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FASHION MODELLING</h3>
  <p>PERSONENI SILVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FASHION DESIGN STUDIO 1</h3>
  <p>SINIBALDI DEBORA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  PROGETTAZIONE ARCHITETTONICA 2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>FIANCHINI MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ALLESTIMENTO</h3>
  <p>RAPISARDA FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI MATEMATICA B</h3>
  <p>DE FALCO CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANA</h3>
  <p>COGNETTI DE MARTIIS FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI DISEGNO</h3>
  <p>CECONELLO MAURO ATTILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO</h3>
  <p>MAGINI EMANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO</h3>
  <p>ARQUILLA VENANZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO (INT.
  DI)</h3>
  <p>RIFINO INNOCENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO (INT.
  DI)</h3>
  <p>VILLANI EMMANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE VISIVA</h3>
  <p>BUFFA DI CASTELALTO PIETRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FATTIBILIT� DEL PROGETTO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>INVERNIZZI ERMES</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEGLI
  INTERNI</h3>
  <p>RIZZI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI MATEMATICA B</h3>
  <p>PIEROTTI DARIO GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTS OF MATHEMATICS B</h3>
  <p>VERANI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI STRUTTURE
  E INFRASTRUTTURE NEL PAESAGGIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IC URBAN PLANNING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>SANGALLI MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI
  TEAMWORK</h3>
  <p>VILLA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLI PER IL DESIGN</h3>
  <p>BONERA MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E METODI DEL
  PROGETTO 2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI DI MODELLAZIONE
  DELLO SPAZIO</h3>
  <p>GADIA DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO (INT.
  DI)</h3>
  <p>de LIGUORI MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO (INT.
  DI)</h3>
  <p>FOIS LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO
  (INT.DI)</h3>
  <p>CORBELLINI BERNARDO GABRIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN SEMINAR</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>ROCA MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>NEBULONI ATTILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>RUIN KLAS OLOF WALDEMAR</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLI PER IL DESIGN</h3>
  <p>BORIOLO ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DEL DISEGNO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI DISEGNO</h3>
  <p>BORDOLI ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE VISIVA</h3>
  <p>GUIDA FRANCESCO ERMANNO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERDISCIPLINARY
  WORKSHOP - TEAMBUILDING STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NEW INTERIORS_TECH TIPS</h3>
  <p>MIGLIORE LODOVICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI COMPONENTI
  E SISTEMI EDILIZI E IMPIANTISTICI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO TEMATICO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA APPLICATA</h3>
  <p>DI MATTEO DANTE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ETHNOGRAPHICAL APPROACHES
  IN URBANISM</h3>
  <p>BRICOCOLI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI
  TEAMWORK</h3>
  <p>GALBIATI MARCELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO
  (INT.DI)</h3>
  <p>PALMERI LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTS OF MATHEMATICS B</h3>
  <p>PAGANI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>SANGALLI MATTEO MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  URBANISTICA 1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CI URBANISTICA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MILANO INTERNATIONAL
  DESIGN STUDIO (MINDS)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THEMATIC STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>BERTELLI GUYA GRAZIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DEL
  DESIGN</h3>
  <p>PIVA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL DESIGN (INT. DI)</h3>
  <p>SPALLAZZO DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL TECHNOLOGIES</h3>
  <p>SPALLAZZO DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPAZIO E SOCIET�</h3>
  <p>ZENONI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>VITILLO PIERGIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITT� E DEL
  TERRITORIO</h3>
  <p>PASQUI GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RILIEVO PER
  L'ARCHITETTURA</h3>
  <p>FIORILLO FAUSTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHYSICAL GEOGRAPHY AND
  GEO-MORPHOLOGY</h3>
  <p>VATANPOUR NAHID</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE</h3>
  <p>RINALDI CHRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HIGH-TECH STARTUPS:
  CREATING AND SCALING UP I</h3>
  <p>COLOMBO MASSIMO GAETANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOMETRIA E ALGEBRA
  LINEARE</h3>
  <p>FRIGERI ACHILLE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI ENERGETICI E
  IMPATTO AMBIENTALE</h3>
  <p>BINOTTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PLASMAS FOR SURFACE MICRO
  E NANOSTRUCTURING + PHYSICS OF DISORDERED MATERIALS</h3>
  <p>OSSI PAOLO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO SOFTWARE</h3>
  <p>BARESI LUCIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>OTTICA E IMMAGINI</h3>
  <p>MARTELLI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRODOTTI DA RISORSE
  RINNOVABILI</h3>
  <p>TERRANEO GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA DELLA MATERIA</h3>
  <p>RUSSO VALERIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI CONTROLLO
  E STRUMENTAZIONE INDUSTRIALE</h3>
  <p>VISCONTI CARLO GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ACCOUNTING, FINANCE &amp;
  CONTROL</h3>
  <p>ARENA MARIKA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INVESTMENT BANKING</h3>
  <p>GRASSI LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISPOSITIVI ELETTRONICI</h3>
  <p>LACAITA ANDREA LEONARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOFTWARE ENGINEERING (FOR
  AUTOMATION)</h3>
  <p>ROSSI MATTEO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA E ORGANIZZAZIONE
  AZIENDALE</h3>
  <p>TENCA FRANCESCA ENRICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MANAGING TECHNOLOGY
  DISRUPTION</h3>
  <p>CAIO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (MISURE
  ELETTRICHE)</h3>
  <p>OTTOBONI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA</h3>
  <p>INZOLI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DINAMICA DI SISTEMI
  AEROSPAZIALI</h3>
  <p>CINQUEMANI SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METALLURGIA E MATERIALI
  NON METALLICI</h3>
  <p>LECIS NORA FRANCESCA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DEI FLUIDI</h3>
  <p>RADICE ALESSIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI INFORMATICI (PER
  IL SETTORE DELL'INFORMAZIONE)</h3>
  <p>ARRIGONI NERI MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPI DI COMBUSTIONE</h3>
  <p>MEHL MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INGEGNERIA CHIMICA
  AMBIENTALE A+B</h3>
  <p>SIRONI SELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA DEL NUCLEO +
  LABORATORIO DI FISICA DEL NUCLEO [C.I.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METHODS FOR BIOMEDICAL
  IMAGING AND COMPUTER AIDED SURGERY</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS INFORMATION
  SYSTEMS 1</h3>
  <p>FRANCALANCI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS INFORMATION
  SYSTEMS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS INFORMATION
  SYSTEMS 2</h3>
  <p>FRANCALANCI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MICRO AND NANOOPTICS [1]</h3>
  <p>MARANGONI MARCO ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SICUREZZA DEI PROCESSI
  DISCONTINUI + SICUREZZA DEI REATTORI DISCONTINUI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SIGNALS AND SYSTEMS
  MODULE 1</h3>
  <p>CANCLINI ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SIGNALS AND SYSTEMS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODEL IDENTIFICATION AND
  DATA ANALYSIS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INDUSTRIAL HETEROGENEOUS
  CATALYSIS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E ORGANIZZAZIONE
  DI SISTEMI SANITARI (C.I.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATHEMATICAL AND
  NUMERICAL METHODS IN ENGINEERING [2]</h3>
  <p>ZUNINO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGIES FOR MOTOR
  BEHAVIOUR ANALYSIS AND VIRTUAL MODELLING (I.C.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VIRTUAL PROTOTYPING
  (C.I.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS IN
  TRANSFORMATION: SOCIAL AND SUSTAINABILITY CHALLENGES LAB [1]</h3>
  <p>BENGO IRENE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOFTWARE ENGINEERING
  METHODOLOGIES FOR SECURITY (MODULE 2)</h3>
  <p>BERSANI MARCELLO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOPHOTONICS (C.I.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>OPTICAL MICROSCOPY</h3>
  <p>BASSI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AUDIO SIGNALS</h3>
  <p>BESTAGINI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PLANTS IN FOOD INDUSTRY</h3>
  <p>MANENTI FLAVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA DELLA SICUREZZA E
  IGIENE INDUSTRIALE A</h3>
  <p>NANO GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHYSICS OF SEMICONDUCTOR
  NANOSTRUCTURES [I.C.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SEMICONDUCTOR
  NANOSTRUCTURES</h3>
  <p>ISELLA GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHYSICS OF SEMICONDUCTORS</h3>
  <p>FERRAGUT RAFAEL OMAR</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>PASTORE MARIA CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL
  PRESERVATION</h3>
  <p>DEL CURTO DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHOTONICS [I.C.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ROOM ACOUSTICS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MUSICAL ACOUSTICS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLING AND CONTROL OF
  ENERGY SYSTEMS (C.I.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN PLANNING</h3>
  <p>DEL BIANCO CORINNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN PLANNING</h3>
  <p>CONCILIO GRAZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOTECHNICAL MODELLING
  [1ST MOD]</h3>
  <p>DELLA VECCHIA GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOTECHNICAL MODELLING
  [2ND MOD]</h3>
  <p>JOMMI CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE TECNOLOGICA
  E AMBIENTALE</h3>
  <p>CAMPIOLI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOSPATIAL DATA ANALYSIS
  [MOD. B]</h3>
  <p>VENUTI GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEO FUNDAMENTALS [2]</h3>
  <p>BIAGI LUDOVICO GIORGIO ALDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DI FERROVIE +
  ESERCIZIO FERROVIARIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EARTHQUAKE RESISTANT
  DESIGN 1</h3>
  <p>CHESI CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SURVEY ADVANCED
  TECHNIQUES</h3>
  <p>PREVITALI MATTIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHOTOGRAMMETRIC
  ASSESSMENT AND MONITORING</h3>
  <p>SCAIONI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IDRAULICA APPLICATA</h3>
  <p>BALLIO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA COMPUTAZIONALE
  PER I GEOMATERIALI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA COMPUTAZIONALE</h3>
  <p>ZEGA VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE TECNOLOGICA
  E AMBIENTALE</h3>
  <p>FIANCHINI MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENTIFIC PROGRAMMING</h3>
  <p>PIRO ROSARIO MICHAEL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA</h3>
  <p>NOVAK CHRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>CURCI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CLIMATE AND GLOBAL
  CHANGES IN THE AGE OF SUSTAINABLE DEVELOPMENT [2ND MOD]</h3>
  <p>CASAGRANDI RENATO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI RESTAURO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLI E METODI
  DELL'INFERENZA STATISTICA</h3>
  <p>PAGANONI ANNA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO</h3>
  <p>PRACCHI VALERIA NATALINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE INNOVATIVE DEL
  RILEVAMENTO</h3>
  <p>FREGONESE LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTAZIONE
  AERONAUTICA</h3>
  <p>ROLANDO ALBERTO LUIGI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRON AND SCANNING
  PROBE MICROSCOPY</h3>
  <p>TAGLIAFERRI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 1</h3>
  <p>MUNARINI EMANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI MECCANICA
  STRUTTURALE</h3>
  <p>PANDOLFI ANNA MARINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TERMODINAMICA E PROCESSI
  ENERGETICI</h3>
  <p>SALIONI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE II</h3>
  <p>TARONI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA A</h3>
  <p>DISTANTE FAUSTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NETWORK SECURITY AND
  CRYPTOGRAPHY</h3>
  <p>VERTICALE GIACOMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CORROSION AND MATERIAL
  PROTECTION</h3>
  <p>BRENNA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA A</h3>
  <p>AGOSTA GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA A</h3>
  <p>POZZI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN METHODS</h3>
  <p>VIGANO' ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA (PER
  INGEGNERIA MECCANICA)</h3>
  <p>MAROCCO LUCA DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPI DI INGEGNERIA
  ELETTRICA</h3>
  <p>MAURI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROMAGNETISMO E CAMPI</h3>
  <p>RIVA CARLO GIUSEPPE</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=RIVA CARLO GIUSEPPE">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>METODI DI OTTIMIZZAZIONE
  DELLA RICERCA OPERATIVA</h3>
  <p>SOTO GOMEZ MAURICIO ABEL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPI E APPLICAZIONI
  DEI LASER</h3>
  <p>LONGHI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROTECNICA</h3>
  <p>BIZZARRI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI ELETTRONICA
  (PER ING. FISICA)</h3>
  <p>TOSI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED MATHEMATICAL
  ANALYSIS</h3>
  <p>TOMARELLI FRANCO</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=TOMARELLI FRANCO">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>STRUTTURE AEROSPAZIALI</h3>
  <p>ANGHILERI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOMOLECULAR MODELLING
  LABORATORY</h3>
  <p>GAUTIERI ALFONSO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>POWER ELECTRONICS</h3>
  <p>GHIONI MASSIMO ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA</h3>
  <p>DELLA ROSSA FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DYNAMICS OF ELECTRICAL
  MACHINES AND DRIVES</h3>
  <p>CASTELLI DEZZA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOLID STATE PHYSICS</h3>
  <p>BOTTANI CARLO ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGICAL AND
  ENVIRONMENTAL DESIGN</h3>
  <p>PAOLETTI INGRID</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FOUNDATIONS OF OPERATIONS
  RESEARCH</h3>
  <p>MALUCELLI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRESERVATION</h3>
  <p>DELLA TORRE STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (5 CFU)</h3>
  <p>CASARI CARLO SPARTACO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARTIFICIAL INTELLIGENCE
  AND ADVANCED SIMULATION FOR THE SAFETY, RELIABILITY AND MAINTENANCE OF ENERGY
  SYSTEMS</h3>
  <p>DI MAIO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOMETRIA E ALGEBRA
  LINEARE</h3>
  <p>M�SENEDER FRAJRIA PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTROL AND ACTUATING
  DEVICES FOR MECHANICAL SYSTEMS</h3>
  <p>BUCCA GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>REAL AND FUNCTIONAL
  ANALYSIS</h3>
  <p>GRASSELLI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTRONICA</h3>
  <p>VILLA FEDERICA ALBERTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN AND MANAGEMENT OF
  PRODUCTION SYSTEMS</h3>
  <p>TAVOLA GIACOMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PLASTIC DEFORMATION OF
  METALS</h3>
  <p>CASTRODEZA ENRIQUE MARIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DYNAMICS, CONTROL AND
  DIAGNOSTICS OF GROUND TRANSPORTATION SYSTEMS</h3>
  <p>COLLINA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ISTITUZIONI DI INGEGNERIA
  AEROSPAZIALE</h3>
  <p>JANSZEN GERARDUS</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACCHINE E SISTEMI
  ENERGETICI</h3>
  <p>DELLA TORRE AUGUSTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACCHINE E SISTEMI
  ENERGETICI</h3>
  <p>LUCCHINI TOMMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RETI DI TELECOMUNICAZIONE</h3>
  <p>TORNATORE MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AVVIAMENTO AL TIROCINIO</h3>
  <p>COLOMBO LUIGI PIETRO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BASI DI DATI 1</h3>
  <p>CAMPI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  SPERIMENTAZIONE AEROSPAZIALE</h3>
  <p>GIBERTINI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOMETRIA E ALGEBRA
  LINEARE</h3>
  <p>DULIO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DEI FLUIDI</h3>
  <p>CAVALLOTTI CARLO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SEGNALI PER LE
  COMUNICAZIONI</h3>
  <p>PRATI CLAUDIO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 1</h3>
  <p>FRIGERI ACHILLE</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=FRIGERI ACHILLE">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA</h3>
  <p>PANZANI GIULIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECHANICS OF BIOLOGICAL
  STRUCTURES</h3>
  <p>VENA PASQUALE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPACECRAFT<span
  style='mso-spacerun:yes'>� </span>ATTITUDE<span style='mso-spacerun:yes'>�
  </span>DYNAMICS<span style='mso-spacerun:yes'>� </span>AND CONTROL</h3>
  <p>BERNELLI ZAZZERA FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CFD FOR ENERGY
  ENGINEERING</h3>
  <p>INZOLI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AEROSTRUCTURES DESIGN AND
  TESTING</h3>
  <p>RICCI SERGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRESERVATION</h3>
  <p>MOIOLI ROSSELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNDAMENTALS OF CHEMICAL
  PROCESSES</h3>
  <p>GROPPI GIANPIERO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  BIOCOMPATIBILITA' E COLTURE CELLULARI</h3>
  <p>TUNESI MARTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNCTIONAL EVALUATION
  LABORATORY</h3>
  <p>GALLI MANUELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED SURVEY AND
  REPRESENTATION TECHNIQUES</h3>
  <p>FIORILLO FAUSTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS &amp; INDUSTRIAL
  ECONOMICS</h3>
  <p>ROSSI CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>TAN ZHU</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AUTOMATIC CONTROL A</h3>
  <p>ZANCHETTIN ANDREA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURES AND EARTHQUAKE
  RESISTANCE CRITERIA</h3>
  <p>CARRERA ALESSANDRO EMILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE TECNOLOGICA
  AMBIENTALE</h3>
  <p>GINELLI ELISABETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILT ENVIRONMENT AND
  LANDSCAPE DESIGN STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGICAL DESIGN FOR
  ARCHITECTURE AND URBAN REGENERATION</h3>
  <p>FAROLDI EMILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE DESIGN</h3>
  <p>PREIS LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SUSTAINABLE ARCHITECTURE</h3>
  <p>CONTIN ANTONELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI CHIMICI</h3>
  <p>PELLEGRINI LAURA ANNAMARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATHEMATICAL METHODS FOR
  MATERIALS ENGINEERING</h3>
  <p>FRAGAL� ILARIA MARIA RITA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESEARCH LABORATORY AND
  MANUSCRIPT (HPSR)</h3>
  <p>MARTINENGHI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NUCLEAR DESIGN AND
  TECHNOLOGY</h3>
  <p>LUZZI LELIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNDAMENTALS OF ACOUSTICS</h3>
  <p>BIAGIONI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI INFORMATICI</h3>
  <p>GATTI NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIAL ENGINEERING</h3>
  <p>ZANERO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTING INFRASTRUCTURES</h3>
  <p>PALERMO GIANLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 2</h3>
  <p>BRAMANTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI INFORMATIVI (PER
  IL SETTORE DELL'INFORMAZIONE)</h3>
  <p>PERNICI BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN OF PUBLIC SPACES
  AND INFRASTRUCTURES</h3>
  <p>LEMES de OLIVEIRA FABIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EARTHQUAKE RESISTANT
  DESIGN</h3>
  <p>PARISI MARIA ADELAIDE VITTORIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TIMBER SYSTEMS DESIGN AND
  CONSTRUCTION</h3>
  <p>IMPERADORI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA E MATERIALI</h3>
  <p>MEILLE STEFANO VALDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI CALCOLO DELLE
  STRUTTURE</h3>
  <p>LOSI GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DEI SOLIDI</h3>
  <p>PANDOLFI ANNA MARINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATE OF THE ART REVIEW
  AND PROJECT PROPOSAL (HPSR)</h3>
  <p>MARTINENGHI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  CARATTERIZZAZIONE DEI TESSUTI</h3>
  <p>BOSCHETTI FEDERICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOMOLECULES: STRUCTURE
  AND FUNCTIONS</h3>
  <p>FASOLI ELISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INGEGNERIA DEL SOFTWARE</h3>
  <p>CUGOLA GIANPAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA II</h3>
  <p>CATINO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATISTICA</h3>
  <p>SANGALLI LAURA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN POLICIES</h3>
  <p>BRICOCOLI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING TECHNOLOGY</h3>
  <p>GRANATO ADRIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IC LANDSCAPE
  REPRESENTATION AND MODELLING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SMART CITIES AND URBAN
  INNOVATION</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GIS APPLICATIONS</h3>
  <p>SONA GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ESTIMO</h3>
  <p>FRATESI UGO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO ARCHITETTONICO</h3>
  <p>ROSINA ELISABETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  COSTRUZIONI</h3>
  <p>COLOMBO MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA URBANISTICA 1 +
  LABORATORIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO DELL'ARCHITETTURA
  1 + INFORMATICA GRAFICA + LABORATORIO CAD</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA TECNICA</h3>
  <p>POLI TIZIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA GRAFICA.</h3>
  <p>ROVERI MANUEL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA</h3>
  <p>COLUCCI ANGELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ACUSTICA AMBIENTALE</h3>
  <p>OLIARO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DI STRUTTURE</h3>
  <p>DI PRISCO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  STRUMENTAZIONE INDUSTRIALE E CHIMICA</h3>
  <p>BERETTA ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI RILIEVO
  FOTOGRAMMETRICO DELL'ARCHITETTURA</h3>
  <p>RONCORONI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO DELL'ARCHITETTURA
  2 (RILIEVO E MODELLAZIONE)</h3>
  <p>BRUMANA RAFFAELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AUTOMATION AND CONTROL
  FOR MOBILITY</h3>
  <p>SAVARESI SERGIO MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI ANALISI E
  MODELLIZZAZIONE DEI PROCESSI + PROVA FINALE</h3>
  <p>GASTALDI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI ANALISI E
  MODELLIZZAZIONE DEI PROCESSI + PROVA FINALE</h3>
  <p>CANIATO FEDERICO FRANCESCO ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECHANICAL DESIGN</h3>
  <p>CAZZULANI GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WORKSHOP 2</h3>
  <p>BAUR RODOLPHE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DELLA
  RAPPRESENTAZIONE</h3>
  <p>BOLOGNESI CECILIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DELLA
  RAPPRESENTAZIONE</h3>
  <p>BIANCHI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI INFORMATICA E
  RETI DI CALCOLATORI</h3>
  <p>PILATO CHRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNDAMENTALS OF
  REPRESENTATION</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E METODI DEL
  PROGETTO</h3>
  <p>CALVANO MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E METODI DEL
  PROGETTO</h3>
  <p>ROSSI MICHELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY OF ARCHITECTURE 2</h3>
  <p>SKANSI LUKA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARTE</h3>
  <p>MARINOTTI CHRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>GALUZZI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE CAD</h3>
  <p>BORDEGONI MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI</h3>
  <p>MILANI GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AESTHETICS</h3>
  <p>BANDI FABRIZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IL RINASCIMENTO E LE ARTI</h3>
  <p>CARPEGGIANI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DURABILITA' E
  CONSERVAZIONE DEI MATERIALI DELL'ARCHITETTURA</h3>
  <p>TONIOLO LUCIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATICA</h3>
  <p>GARAVAGLIA ELSA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATICA</h3>
  <p>LIMONGELLI MARIA GIUSEPPINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WORKSHOP 2</h3>
  <p>NOEL FABIOLA GUILLERMINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESILIENT STRATEGIES IN
  RISK SITUATIONS</h3>
  <p>REDAELLI GAIA ANGELICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARTS AND LANGUAGES OF THE
  PRESENT</h3>
  <p>GUERRINI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RETORICA DELLA PAROLA E
  DELL'IMMAGINE</h3>
  <p>ALBERA MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIOLOGIA DEI MEDIA</h3>
  <p>CIASTELLARDI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TYPOGRAPHIC DESIGN</h3>
  <p>COLIZZI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PARAMETRIC DESIGN BIM
  ORIENTED THROUGH GRASSHOPPER+ RHINO</h3>
  <p>BOLOGNESI CECILIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA PER IL
  PATRIMONIO COSTRUITO</h3>
  <p>DELLA TORRE STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN OF STRUCTURES</h3>
  <p>CASTIGLIONI CARLO ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IDRAULICA APPLICATA</h3>
  <p>BERZI DIEGO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRATEGIC AND SERVICE
  DESIGN</h3>
  <p>CAUTELA CABIRIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VALUTAZIONE ECONOMICA DEI
  PROGETTI</h3>
  <p>FERRETTI VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTEMPORARY
  ARCHITECTURAL DESIGN THEORY</h3>
  <p>BOLOGNA ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL DESIGN</h3>
  <p>VALENTE MARCO VINCENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PORTFOLIO &amp; DIGITAL
  BRANDING</h3>
  <p>MARINO LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL CULTURE</h3>
  <p>Di ROSARIO GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LUCE E CITTA'</h3>
  <p>RAVELLI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CRITERI DI PROGETTAZIONE
  E ADEGUAMENTO IN CONDIZIONI DI RISCHIO</h3>
  <p>GARAVAGLIA ELSA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THEORIES OF
  ARCHITECTURE,<span style='mso-spacerun:yes'>� </span>CITY AND LANDSCAPE</h3>
  <p>PALERM SALAZAR JUAN MANUEL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING AND CONSTRUCTION
  TECHNOLOGIES</h3>
  <p>LUPICA SPAGNOLO SONIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THEORY IN CONTEMPORARY
  ARCHITECTURAL DESIGN</h3>
  <p>INGERSOLL RICHARD JOSEPH</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROJECT APPRAISAL</h3>
  <p>OPPIO ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIOLOGY OF MEDIA</h3>
  <p>CIASTELLARDI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PARAMETRIC DESIGN BIM
  ORIENTED THROUGH: REVIT+ DYNAMO</h3>
  <p>BOLOGNESI CECILIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SEMINARIO DI TESI</h3>
  <p>CHIZZONITI DOMENICO GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PARAMETRIC DESIGN BIM
  ORIENTED THROUGH: GRASSHOPPER + RHINO</h3>
  <p>BOLOGNESI CECILIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLIED MATHEMATICS FOR
  PARAMETRIC ARCHITECTURE</h3>
  <p>VIANELLO MAURIZIO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>CROCE BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY OF BUILDING
  CONSTRUCTION</h3>
  <p>LOI MARIACRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL TECHNOLOGY
  FUNDAMENTALS</h3>
  <p>BRUNETTI GIAN LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DI IMPIANTI
  NEGLI EDIFICI</h3>
  <p>MOTTA MARIO GUALTIERO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WORKSHOP</h3>
  <p>PORCINI MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATCHING TECHNOLOGY WITH
  HUMANISM (INT OF)</h3>
  <p>LISSONI PIERO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SEMIOTICS METHODS FOR
  DESIGN</h3>
  <p>MANCHIA VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTS OF ARCHITECTURAL
  TYPOLOGY</h3>
  <p>ROCCA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE GRAFICHE
  AVANZATE &amp; SOFTWARE DESIGN</h3>
  <p>FIAMMENGHI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ILLUSTRAZIONE PER LA MODA</h3>
  <p>TESTA SUSANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LONGEVIT� E INNOVAZIONE
  RESPONSABILE</h3>
  <p>SAMOR� FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CARATTERI TIPOLOGICI
  DELL'ARCHITETTURA</h3>
  <p>MONESTIROLI TOMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CARATTERI TIPOLOGICI
  DELL'ARCHITETTURA</h3>
  <p>VALENTE ILARIA PAMELA SIMONETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ARCHITETTURA E COMPOSIZIONE ARCHITETTONICA S</h3>
  <p>ACCOSSATO KATIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THESIS WORKSHOP</h3>
  <p>CHIZZONITI DOMENICO GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ESTETICA E DESIGN</h3>
  <p>TASSINARI VIRGINIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIREZIONE E COORDINAMENTO
  DEI LAVORI</h3>
  <p>DI GIUDA GIUSEPPE MARTINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY OF DESIGN</h3>
  <p>ALESSI ANGHINI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DI NARRAZIONE</h3>
  <p>PINARDI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGI SKILLS (A)
  RAPPRESENTAZIONE DELLO SPAZIO IN AMBIENTE DIGITALE</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTS OF ARCHITECTURAL
  TYPOLOGY</h3>
  <p>CONTIN ANTONELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIAGNOSTICA PER IL
  PROGETTO DI CONSERVAZIONE</h3>
  <p>SAISI ANTONELLA ELIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI SISTEMI
  E ELEMENTI COSTRUTTIVI</h3>
  <p>FACCHINETTI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>TINAZZI CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DELLE STRUTTURE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>CARDANI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY OF ARCHITECTURE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>MACHADO SOUTO de MOURA EDUARDO ELISIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN POLICIES DESIGN
  STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE ARCHITECTURE</h3>
  <p>LANZONI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN SURVEY</h3>
  <p>BRIATA PAOLA GIUSEPPINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>MERIGGI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DINAMICA DI SISTEMI
  AEROSPAZIALI</h3>
  <p>BELLOLI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  TURBOMACCHINE</h3>
  <p>MORA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA MECCANICA 1</h3>
  <p>PETRO' STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACCHINE E SISTEMI
  ENERGETICI</h3>
  <p>VIGANO' FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROTECNICA</h3>
  <p>PIGNARI SERGIO AMEDEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA II</h3>
  <p>COLOMBO FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI ENERGETICI
  AVANZATI</h3>
  <p>CHIESA PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI MECCANICA
  DEL VOLO ATMOSFERICO</h3>
  <p>CACCIOLA STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI ENERGETICA</h3>
  <p>RAVIDA' ANTONINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPI DI SISTEMI
  ELETTRICI</h3>
  <p>LEVA SONIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA MECCANICA 1</h3>
  <p>MANDELLI MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROGETTO
  MULTI-DISCIPLINARE)</h3>
  <p>DI GIALLEONARDO EGIDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROGETTO
  MULTI-DISCIPLINARE)</h3>
  <p>COLOMBO GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTROLLO DEI PROCESSI</h3>
  <p>BOLZERN PAOLO GIUSEPPE EMILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI ELETTRONICA</h3>
  <p>BERTUCCIO GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ROBOTICS AND MECHATRONICS</h3>
  <p>KARIMI HAMID REZA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLISTICA DEI SISTEMI
  MECCANICI</h3>
  <p>RESTA FERRUCCIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPI DI CHIMICA DEI
  POLIMERI</h3>
  <p>GRIFFINI GIANMARCO ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE</h3>
  <p>RE REBECCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBABILITA' E STATISTICA
  MATEMATICA</h3>
  <p>BATTISTINI EGIDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INDUSTRIAL PROJECT
  MANAGEMENT A</h3>
  <p>MANCINI MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED CYBERSECURITY
  TOPICS</h3>
  <p>ZANERO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED MEASUREMENT
  TECHNIQUES</h3>
  <p>MANZONI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOFT COMPUTING</h3>
  <p>BONARINI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI PER LA VALUTAZIONE
  DELL'IMPATTO OLFATTIVO INDUSTRIALE</h3>
  <p>SIRONI SELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOIL-STRUCTURE
  INTERACTION</h3>
  <p>CALVETTI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTER SECURITY - UIC
  587</h3>
  <p>ZANERO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BASICS OF CIRCUIT THEORY</h3>
  <p>SPADACINI GIORDANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MOLECULAR AND
  COMPUTATIONAL BIOLOGY AND MEDICAL GENETICS MODULE 4</h3>
  <p>PATTINI LINDA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL TECHNOLOGY</h3>
  <p>PERNICI BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONSTRAINED NUMERICAL
  OPTIMIZATION FOR ESTIMATION AND CONTROL</h3>
  <p>FAGIANO LORENZO MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 1</h3>
  <p>LANZARONE ETTORE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DEI CONTINUI E
  DELLE STRUTTURE (PER ING. BIOMEDICA)</h3>
  <p>GASTALDI DARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MEASUREMENTS</h3>
  <p>CIGADA ALFREDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NORMATIVE AERONAUTICHE</h3>
  <p>BIANCHI MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLISTICA E
  SIMULAZIONE</h3>
  <p>GUARISO GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMUNICAZIONE
  TECNICO-SCIENTIFICA</h3>
  <p>COMI CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TIROCINIO (LP MTM)</h3>
  <p>MICHELETTI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA A</h3>
  <p>CAMPI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI INFORMATICI</h3>
  <p>MOTTOLA LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SURFACE TECHNOLOGY</h3>
  <p>NOBILI LUCA GIAMPAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMAZIONE E STIMA (PER
  INGEGNERIA INFORMATICA)</h3>
  <p>BARLETTA LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCELTA E GESTIONE DEI
  MATERIALI</h3>
  <p>PEDEFERRI MARIAPIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBABILITA'</h3>
  <p>GUATTERI GIUSEPPINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERAZIONE LUCE-MATERIA</h3>
  <p>TORRICELLI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HYBRID AND ELECTRIC
  VEHICLE</h3>
  <p>TARSITANO DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENERGY SYSTEMS LM</h3>
  <p>MARTELLI EMANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DATA SCIENCE AND SECURITY
  FOR MOBILITY</h3>
  <p>CARMAN MARK JAMES</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACCHINE E SISTEMI
  ENERGETICI</h3>
  <p>SPINELLI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE DEI SISTEMI
  LOGISTICI E PRODUTTIVI</h3>
  <p>TUMINO ANGELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA</h3>
  <p>ZAGO MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI CONVERSIONE
  DELL'ENERGIA</h3>
  <p>CHIESA PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRIC POWER SYSTEMS</h3>
  <p>ILEA VALENTIN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTROL SYSTEMS</h3>
  <p>CASELLA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CALCOLI DI PROCESSO
  DELL'INGEGNERIA CHIMICA</h3>
  <p>MEHL MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DYNAMICS AND CONTROL OF
  CHEMICAL PROCESSES</h3>
  <p>PELUCCHI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNDAMENTALS OF GIS</h3>
  <p>CARRION DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI IMPIANTI
  TERMICI</h3>
  <p>JOPPOLO CESARE MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DECISION MODELS</h3>
  <p>COLORNI VITALE ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FRACTURE MECHANICS</h3>
  <p>PEREGO UMBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOTECNICA</h3>
  <p>GALLI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLIED PHYSICAL
  CHEMISTRY</h3>
  <p>MORBIDELLI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED AND
  MULTIVARIABLE CONTROL</h3>
  <p>SCATTOLINI RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL ELECTRONIC
  SYSTEMS DESIGN</h3>
  <p>GERACI ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 2</h3>
  <p>SCHLESINGER ENRICO ETTORE MARCELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRICAL SWITCHING
  DEVICES</h3>
  <p>RAGAINI ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MITIGAZIONE DEI
  CAMBIAMENTI CLIMATICI</h3>
  <p>CASERINI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WATER AND FOOD SECURITY</h3>
  <p>RULLI MARIA CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA 2
  (MACROECONOMIA)</h3>
  <p>SUVERATO DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI</h3>
  <p>CASOLO SIRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METHODS FOR ADVANCED
  MECHANICAL DESIGN</h3>
  <p>GUAGLIANO MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 2</h3>
  <p>BOELLA MARCO UGO CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI CHIMICA</h3>
  <p>GANAZZOLI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DINAMICA STRUTTURALE E
  AEROELASTICITA'</h3>
  <p>BINDOLINO GIAMPIERO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRATEGIC PLANNING IN
  REAL PRACTICE</h3>
  <p>MORETTI MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE INFORMATICHE
  PER IL WEB</h3>
  <p>FRATERNALI PIERO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI
  I</h3>
  <p>COMI CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONSTRUCTION MATERIALS</h3>
  <p>LOLLINI FEDERICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BLOCKCHAIN AND
  CRYPTOASSETS</h3>
  <p>SCIUTO DONATELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>REACTION-DIFFUSION
  EQUATIONS</h3>
  <p>VERZINI GIANMARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SMART STRUCTURES AND
  DEVICES</h3>
  <p>ERTURK ALPER</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROTECNICA</h3>
  <p>OGLIARI EMANUELE GIOVANNI CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AUTOMATION AND CONTROL
  LABORATORY</h3>
  <p>RUIZ PALACIOS FREDY ORLANDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA E ORGANIZZAZIONE
  AZIENDALE</h3>
  <p>TOLETTI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOLOGIA E FISIOLOGIA</h3>
  <p>BRAMBILLA DARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL DYNAMICS</h3>
  <p>BOFFI GIACOMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI MECCANICA
  TEORICA ED APPLICATA</h3>
  <p>TOMASINI GISELLA MARITA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA I E
  GEOMETRIA</h3>
  <p>IANNELLI ANGELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA I E
  GEOMETRIA</h3>
  <p>BOELLA MARCO UGO CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA COMPUTAZIONALE</h3>
  <p>CARVELLI VALTER</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOLID STATE PHYSICS</h3>
  <p>PUPPIN EZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MEASURING TECHNIQUES AND
  SENSORS FOR AUTOMATION B</h3>
  <p>BOCCIOLONE MARCO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED STRUCTURAL
  DESIGN</h3>
  <p>BIONDINI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SIDERURGIA</h3>
  <p>MOMBELLI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATISTICA</h3>
  <p>TOIGO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE E MATERIALI
  AEROSPAZIALI</h3>
  <p>GRANDE ANTONIO MATTIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NONPARAMETRIC STATISTICS</h3>
  <p>IEVA FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPACE PHYSICS</h3>
  <p>CONSOLATI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA GENERALE</h3>
  <p>RESNATI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRASPORTI MARITTIMI E
  INTERMODALI</h3>
  <p>MAJA ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENERGY ECONOMICS</h3>
  <p>BUTTICE' VINCENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FENOMENI DI TRASPORTO NEI
  SISTEMI BIOLOGICI</h3>
  <p>DUBINI GABRIELE ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE BIOARTIFICIALI
  E BIOMIMETICHE</h3>
  <p>FARE' SILVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TIROCINIO BIC</h3>
  <p>BIANCHI ANNA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI ANALITICI E
  NUMERICI PER L'INGEGNERIA (PARTE DI ANALISI NUMERICA)</h3>
  <p>PAROLINI NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RIVESTIMENTI SUPERFICIALI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LOGICA E ALGEBRA</h3>
  <p>M�SENEDER FRAJRIA PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN PLANNING AND DESIGN
  STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TOPOGRAFIA E TRATTAMENTO
  DELLE OSSERVAZIONI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED OPERATING
  SYSTEMS</h3>
  <p>FORNACIARI WILLIAM</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ALGORITMI E PRINCIPI
  DELL'INFORMATICA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IC URBANISM</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DI
  POSIZIONAMENTO E CONTROLLO [MOD. 2]</h3>
  <p>BETTI BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURE OF INTERIORS
  DESIGN STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SUSTAINABLE MANUFACTURING</h3>
  <p>TAISCH MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MEDICAL INFORMATICS [2]</h3>
  <p>BIANCHI ANNA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>USER EXPERIENCE ANALYSIS
  AND INFORMATION ARCHITECTURE</h3>
  <p>PILLAN MARGHERITA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EQUAZIONI DIFFERENZIALI
  ORDINARIE</h3>
  <p>COLLINI TIZIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FLUIDS LABS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINANCIAL MARKETS AND
  INSTITUTIONS + MACROECONOMICS OF FINANCE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METHODS AND TOOLS FOR
  SYSTEMATIC INNOVATION I.C.</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMMUNICATION DESIGN (AND
  DIGITAL METHODS)</h3>
  <p>COLOMBO GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METHODS AND TOOLS FOR
  SYSTEMATIC INNOVATION B - PROBLEM SOLVING AND INVENTIVE DESIGN (I.C. MODULE)</h3>
  <p>CASCINI GAETANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROTEZIONE IDRAULICA DEL
  TERRITORIO [MOD. 2]</h3>
  <p>RAVAZZANI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL SYSTEMS DESIGN
  METHODOLOGIES</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALS SELECTION</h3>
  <p>CHIESA ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EQUAZIONI DIFFERENZIALI
  ORDINARIE</h3>
  <p>BARBANTE PAOLO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI DI PRODUZIONE E
  ORGANIZZAZIONE DI IMPRESA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI
  ENDOPROTESI [2]</h3>
  <p>VILLA TOMASO MARIA TOBIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LIFE DESIGN</h3>
  <p>CAMUSSI ELISABETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOINGEGNERIA CHIMICA [2]</h3>
  <p>CANDIANI GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOINGEGNERIA CHIMICA [2]</h3>
  <p>MANTERO SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE GENERALI DEI
  MATERIALI</h3>
  <p>IMPERIO ERNESTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI
  ENDOPROTESI [1]</h3>
  <p>VILLA TOMASO MARIA TOBIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLIED CHEMICAL KINETICS</h3>
  <p>CAVALLOTTI CARLO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ARCHITETTURA DELLE COSTRUZIONI COMPLESSE I</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRATTAMENTO DELLE
  OSSERVAZIONI + TECNICHE DI POSIZIONAMENTO E CONTROLLO (C.I.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENERGY MANAGEMENT LAB</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN
  STUDIO FOR RESTORATION AND TRANSFORMATION OF COMPLEX CONSTRUCTIONS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI ANALITICI E
  NUMERICI DELLE E.D.P. (1)</h3>
  <p>SALSA SANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI STATISTICA
  E SEGNALI BIOMEDICI [1]</h3>
  <p>ZANELLA MARGHERITA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELING OF SPACE
  STRUCTURES</h3>
  <p>VESCOVINI RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIC APPRAISAL ON
  HERITAGE MANAGEMENT</h3>
  <p>ARANDA-MENA GUILLERMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRATEGIE PER LE SFIDE
  AMBIENTALI [C2]</h3>
  <p>TUROLLA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DIGITALI [1]</h3>
  <p>CAPPIELLO CINZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DIGITALI [2]</h3>
  <p>FILIPPINI ILARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DIGITALI [1]</h3>
  <p>VITALI MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NANOTECNOLOGIA E
  TRATTAMENTO DELLE SUPERFICI</h3>
  <p>FRANZ SILVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRATTAMENTO DELLE
  OSSERVAZIONI (MOD. B)</h3>
  <p>BETTI BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRATTAMENTO DELLE
  OSSERVAZIONI (MOD. A)</h3>
  <p>BETTI BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI INDUSTRIALI E
  ORGANIZZAZIONE D'IMPRESA (PARTE IMPIANTI)</h3>
  <p>MIRAGLIOTTA GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA E ELEMENTI DI
  INFORMATICA MEDICA [1]</h3>
  <p>BERSANI MARCELLO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA E ELEMENTI DI
  INFORMATICA MEDICA [C.I.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS DATA ANALYTICS
  [1]</h3>
  <p>BUTTICE' VINCENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACROECONOMICS OF FINANCE</h3>
  <p>FLORIO ANNA PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA (MODULO 2)</h3>
  <p>PETTI DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA (MODULO 1)</h3>
  <p>PETTI DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI IMPIANTI
  ENERGETICI NEGLI EDIFICI - DIAGNOSI E CERTIFICAZIONI ENERGETICHE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COSTRUZIONE DI MACCHINE
  (INTEGRATO)</h3>
  <p>FILIPPINI MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA E ELEMENTI DI
  INFORMATICA MEDICA [2]</h3>
  <p>PATTINI LINDA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  SPERIMENTALE B (INTEGR)</h3>
  <p>QUASSO FIORENZA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRODUZIONE ASSISTITA DAL
  CALCOLATORE</h3>
  <p>CIRROTTOLA PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTRODUZIONE ALLA SCIENZA
  DEI MATERIALI A+B</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOTECNICA II-A</h3>
  <p>STERPI DONATELLA VALERIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA (ECONOMIA DEI
  SISTEMI AGROINDUSTRIALI) [2]</h3>
  <p>ELIA STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NANOTECNOLOGIA E
  TRATTAMENTO DELLE SUPERFICI</h3>
  <p>NOBILI LUCA GIAMPAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GRAPHENE NANOELECTRONICS
  AND NANOFABRICATION</h3>
  <p>SORDAN ROMAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRONICS AND
  ELECTROACOUSTICS FOR SOUND ENGINEERING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRONICS AND
  ELECTROACOUSTICS FOR SOUND ENGINEERING - MODULE 2: ELECTROACOUSTICS FOR SOUND
  ENGINEERING</h3>
  <p>BERTUCCIO GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COSTRUZIONE DELLE OPERE
  DI ARCHITETTURA</h3>
  <p>BELLINI OSCAR EUGENIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO</h3>
  <p>DEL CURTO DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>MENINI GIACOMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>ROCCA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO ARCHITETTONICO</h3>
  <p>GIAMBRUNO MARIA CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOGRAPHY</h3>
  <p>ARMONDI SIMONETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMY</h3>
  <p>LENZI CAMILLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VALORISATION<span
  style='mso-spacerun:yes'>� </span>OF HISTORICAL BUILDINGS + VALORISATION<span
  style='mso-spacerun:yes'>� </span>OF CULTURAL HERITAGE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI PER IL DESIGN
  DEGLI INTERNI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COSTRUZIONI MECCANICHE</h3>
  <p>MICCOLI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE-SEZ.5</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR DESIGN</h3>
  <p>CAMOCINI BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HEALTH_BEAUTY NEW
  GENERATION</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  CONSERVAZIONE DELL'EDILIZIA STORICA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  PROGETTAZIONE PER L'EDILIZIA STORICA</h3>
  <p>TIGANEA OANA CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURE AND URBAN
  DESIGN</h3>
  <p>PEZZETTI LAURA ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONSTRUCTION OF
  ARCHITECTURAL WORKS</h3>
  <p>JAKICA NEBOJSA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THE CITY OF CARE</h3>
  <p>ANZANI ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIE PLASTICHE</h3>
  <p>LEVI MARINELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI INTEGRATI DI
  PRODUZIONE</h3>
  <p>ARMILLOTTA ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DI
  DESIGN</h3>
  <p>SCULLICA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE DEL
  PRODOTTO</h3>
  <p>PALMIERI STEFANIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPATIAL DESIGN</h3>
  <p>FASSI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EPHEMERAL-TECH TIPS</h3>
  <p>FASSI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE-TECH TIPS</h3>
  <p>PICCINNO GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>MORO ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE IN AMBIENTE
  BIM</h3>
  <p>PAGANIN GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>ZUCCHI CINO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO ARCHITETTONICO</h3>
  <p>CAMPANELLA CHRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA VISIVA PER IL
  DESIGN</h3>
  <p>CAMOCINI BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINAL SYNTHESIS STUDIO
  SECT. 2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRODUCT DESIGN (INT. OF)</h3>
  <p>BIANCHINI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRODUCT DEVELOPMENT
  DESIGN STUDIO 1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENGINEERING DESIGN FOR
  INTERACTION</h3>
  <p>CARULLI MARINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>MONTEDORO LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>MERLINI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>VENTURA CESARE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI VISIVI PER IL
  PROGETTO</h3>
  <p>MAINI MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEZIONI DI DESIGN</h3>
  <p>FERABOLI MARIA TERESA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMA DESIGN (SEMINARI
  DI)</h3>
  <p>MANDATO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ACCESSORY DESIGN STUDIO 3</h3>
  <p>BALLESTRAZZI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL TECHNOLOGIES AND
  SOCIETY</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO
  INDUSTRIALE</h3>
  <p>ZURLO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO CONCEPT
  DESIGN</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRODUCT DEVELOPMENT
  DESIGN STUDIO 2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>LANDSBERGER MARTINA ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA URBANISTICA DEL
  PAESAGGIO</h3>
  <p>ROSSATI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RAPPRESENTAZIONE<span
  style='mso-spacerun:yes'>� </span>PER L'ARCHITETTURA</h3>
  <p>ORENI DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE DESIGN</h3>
  <p>PANDAKOVIC DARKO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE AND
  INFRASTRUCTURE DESIGN STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRESERVATION</h3>
  <p>LANDI ANGELO GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PERCEZIONE
  VISIVA</h3>
  <p>VITALE GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE
  (INT. DI)</h3>
  <p>MAZZOTTI ANGELA PIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE</h3>
  <p>GUERRINI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI RICERCA PER IL
  PROGETTO</h3>
  <p>CIMINI MARIANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DI
  DESIGN</h3>
  <p>DEL BUONO CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMA DESIGN (SEMINARI
  DI)</h3>
  <p>DEL BUONO CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMA DESIGN (SEMINARI
  DI)</h3>
  <p>CASCIANI DARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRODUCT-SYSTEM DESIGN</h3>
  <p>DOMINONI ANNALISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THESIS INCUBATOR STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN FOR ENGINEERING</h3>
  <p>MARANO CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINAL PROJECT WORK -
  SECT. 2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MANUFACTURABILITY
  ASSESSMENT</h3>
  <p>PREVITALI BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROJECT VISION</h3>
  <p>BARBARA ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINAL DESIGN STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLO SPAZIO
  APERTO URBANO E DI PAESAGGIO</h3>
  <p>LENZINI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEL
  PAESAGGIO</h3>
  <p>BERTOLI CHIARA MARIA AMALIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IGIENE AMBIENTALE</h3>
  <p>BUFFOLI MADDALENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISM AND LANDSCAPE</h3>
  <p>LONGO ANTONIO EMILIO ALVISE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AGRONOMY</h3>
  <p>COLA GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEGLI
  INTERNI</h3>
  <p>LANZ FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA VISIVA PER IL
  DESIGN</h3>
  <p>PENATI ANTONELLA VALERIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEZIONI DI DESIGN</h3>
  <p>BRUNO RAFFAELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DI
  DESIGN</h3>
  <p>CELI MANUELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E TECNICHE DEL
  PROGETTO URBANISTICO</h3>
  <p>RENZONI CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI INFORMATICA</h3>
  <p>ZONI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGICAL DESIGN FOR
  ARCHITECTURE</h3>
  <p>FAROLDI EMILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PERCEZIONE
  VISIVA</h3>
  <p>ANDRIANI ANTONIA SABINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE VIRTUALE DEL
  PRODOTTO</h3>
  <p>BECATTINI NICCOLO'</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI RICERCA PER IL
  PROGETTO</h3>
  <p>AJOVALASIT MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE DEL
  PRODOTTO (INT. DI)</h3>
  <p>RAMPINO LUCIA ROSA ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN FOR THE PRODUCT
  SYSTEM</h3>
  <p>SUPPANEN ILKKA JAAKKO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SISTEMI
  PER L'INTERAZIONE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>MUSSINELLI ELENA GERMANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>REDAELLI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ESTETICA</h3>
  <p>GIACOMINI LORENZO MARIO LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GENERAL ECOLOGY</h3>
  <p>MELIA' PACO VASCO ALDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENVIRONMENTAL TECHNOLOGY</h3>
  <p>DENTIS EMANUELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GENERAL ECOLOGY</h3>
  <p>BOLPAGNI ROSSANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENVIRONMENTAL TECHNOLOGY</h3>
  <p>FONTANA CARLOTTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE - SEZ 5</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PERCEZIONE
  VISIVA</h3>
  <p>HACHEN MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI DESIGN DEL
  PRODOTTO INDUSTRIALE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE DEL
  PRODOTTO</h3>
  <p>ANSELMI LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALS SELECTION
  CRITERIA AND METHODS</h3>
  <p>ANDENA LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPLEX ARTEFACTS AND
  SYSTEM DESIGN STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>MONTICELLI CAROL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>BARAZZETTA GIULIO MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>TOLVE VALERIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RILIEVO PER
  L'ARCHITETTURA</h3>
  <p>D'UVA DOMENICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>MURO SOLER CARLES</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA</h3>
  <p>PEZZONI NAUSICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>BERTELLI GUYA GRAZIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DEL
  DESIGN</h3>
  <p>TROCCHIANESI RAFFAELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA VISIVA PER IL
  DESIGN</h3>
  <p>DALLA RIVA MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA VISIVA PER IL
  DESIGN</h3>
  <p>SIGONA DARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PERCEZIONE
  VISIVA</h3>
  <p>SIGONA DARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEZIONI DI DESIGN</h3>
  <p>PIZZOCARO SILVIA LUISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE SEZ.1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE (INTERFACCE E SISTEMI DEL DIGITALE)</h3>
  <p>QUAGGIOTTO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>BELLINI OSCAR EUGENIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>PIERINI ORSINA SIMONA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE ARCHITECTURE</h3>
  <p>WALL EDWARD DUNCAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO (INT.
  DI)</h3>
  <p>MANGIAROTTI RAFFAELLA MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA VISIVA PER IL
  DESIGN</h3>
  <p>MAZZA MARGHERITA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PERCEZIONE
  VISIVA</h3>
  <p>MAZZA MARGHERITA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ATELIER DELLA TECNOLOGIA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPERIMENTAZIONE DI
  SISTEMI E COMPONENTI</h3>
  <p>ZANELLI ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE PER
  LA MODA (RICERCA BIBLIOGRAFICA E COMUNICAZIONE DEL PROGETTO DI LAUREA)</h3>
  <p>CAPPELLIERI ALBA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE PER
  LA MODA</h3>
  <p>ZINI EDOARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI PROGETTO
  MODA - M3</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DELLA MODA</h3>
  <p>SINIBALDI DEBORA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE (CONTENUTI E MEDIA)</h3>
  <p>GALBIATI MARIA LUISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>MAZZOLENI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>BELLINTANI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI MATEMATICA A</h3>
  <p>VALENTE GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA</h3>
  <p>RE CECCONI FULVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  PROGETTAZIONE ARCHITETTONICA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>ORSINI FILIPPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE PER
  LA MODA</h3>
  <p>SOLDATI MARIA GRAZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE VISIVA</h3>
  <p>CARBONE GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEGLI
  INTERNI</h3>
  <p>FORINO IMMACOLATA CONCEZIONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI MATEMATICA B</h3>
  <p>MAGLI GIULIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI MATEMATICA A</h3>
  <p>PIEROTTI DARIO GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>GALLIANI PIERFRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>LUCCHINI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DEFINIZIONE DEL PROGETTO
  - KIT DI USCITA</h3>
  <p>TROCCHIANESI RAFFAELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E TECNICHE DEL
  DISEGNO</h3>
  <p>INNOCENTI SERENO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE VISIVA</h3>
  <p>CARMI ELIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE PER L'IGIENE
  EDILIZIA E AMBIENTALE</h3>
  <p>REBECCHI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ALLESTIMENTO</h3>
  <p>BASSANELLI MICHELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ALLESTIMENTO</h3>
  <p>SALVADEO PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORICAL BUILDING
  PRESERVATION STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA PER LE
  INFRASTRUTTURE</h3>
  <p>FOLLI MARIA GRAZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURE AND URBAN
  DESIGN</h3>
  <p>FRIGERIO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI</h3>
  <p>GALLI CHRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI DESIGN
  DEGLI INTERNI SEZ.1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI DISEGNO</h3>
  <p>REDAELLI DANILO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ESTIMO</h3>
  <p>ALLODI DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>KOUSIDI STAMATINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>MAGNI CAMILLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI</h3>
  <p>HIRSCH DAVID</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI
  TEAMWORK</h3>
  <p>SCHINCO MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI PROGETTAZIONE</h3>
  <p>ROSSI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DI FATTIBILITA'
  DEI PROGETTI</h3>
  <p>POGLIANI OSVALDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPATIAL DESIGN</h3>
  <p>GIACOMAZZI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENVISIONING AI THROUGH
  DESIGN</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTS OF ARTIFICIAL
  INTELLIGENCE (AI)</h3>
  <p>BONARINI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEL
  PAESAGGIO</h3>
  <p>KOGAN MARCIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIOLOGIA URBANA</h3>
  <p>SABATINELLI STEFANIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI</h3>
  <p>GRAMEGNA SILVIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI</h3>
  <p>ORIGONI FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE - SEZ 2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA PER GLI
  INTERNI</h3>
  <p>PIARDI SILVIA ELVIRA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE VISIVA</h3>
  <p>MASSERDOTTI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE - SEZ.2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINAL SYNTHESIS DESIGN
  STUDIO SECT.2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  PROGETTAZIONE PER L'EDILIZIA STORICA</h3>
  <p>TEDESCHI CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIOLOGIA URBANA</h3>
  <p>PETRILLO AGOSTINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>BOVATI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>BRIATA PAOLA GIUSEPPINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROPRIETA' GENERALI DEI
  MATERIALI E MATERIE PLASTICHE</h3>
  <p>MARANO CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI COMPUTER
  GRAFICA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE VISIVA</h3>
  <p>VISCONTI PAMELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE VISIVA (INT.DI)</h3>
  <p>VISCONTI PAMELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTEST DESIGN STUDIO
  SECT.1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE DESIGN STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>OPERATIONS RESEARCH</h3>
  <p>BRUGLIERI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GAME THEORY</h3>
  <p>LUCCHETTI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ACUSTICA APPLICATA E
  ILLUMINOTECNICA</h3>
  <p>MAZZARELLA LIVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSES FOR ENERGY AND
  ENVIRONMENT</h3>
  <p>NOVA ISABELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GAME THEORY</h3>
  <p>ARIOLI GIANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI INFORMATICA</h3>
  <p>BARESI LUCIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ROTOR AERODYNAMICS</h3>
  <p>GIBERTINI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PUBLIC MANAGEMENT</h3>
  <p>AGASISTI TOMMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DATA MANAGEMENT FOR THE
  WEB</h3>
  <p>CERI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI
  RAPPRESENTAZIONE TECNICA</h3>
  <p>CASAROLI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COSTRUZIONI DI STRADE,
  FERROVIE ED AEROPORTI</h3>
  <p>CRISPINO MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DEI FLUIDI</h3>
  <p>BERZI DIEGO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA B</h3>
  <p>TROVO' FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI SPERIMENTALI PER
  LA DIAGNOSTICA STRUTTURALE</h3>
  <p>CARBONI MICHELE EZIO RUGGERO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METALLURGIA E MATERIALI
  NON METALLICI</h3>
  <p>BONIARDI MARCO VIRGINIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA ORGANICA A</h3>
  <p>SACCHETTI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI FISICI PER
  L'ANALISI CHIMICA</h3>
  <p>MELE ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENERGY AND EMISSIONS IN
  TRANSPORTATION SYSTEMS</h3>
  <p>GUANDALINI GIULIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA ORGANICA A</h3>
  <p>GATTI FRANCESCO GILBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>REACTIVITY, STRUCTURE AND
  FUNCTIONS OF FLUORINATED MATERIALS</h3>
  <p>SANSOTERA MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SIGNAL RECOVERY</h3>
  <p>RECH IVAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA E MACCHINE</h3>
  <p>BARICCI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AFFIDABILIT� E SICUREZZA
  NELL'INDUSTRIA DI PROCESSO + MODELLAZIONE DELLE CONSEGUENZE DI INCIDENTI
  INDUSTRIALI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA DEL NUCLEO</h3>
  <p>PASSONI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED SIGNALS AND DATA
  PROCESSING IN MEDICINE [I.C.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PAYLOAD DESIGN</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOMATERIALI [C.I.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPACE MISSION ANALYSIS
  AND DESIGN (C.I.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGNING DIGITAL
  BUSINESS INNOVATION LAB</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI OSPEDALIERI<span
  style='mso-spacerun:yes'>� </span>E SICUREZZA [1]</h3>
  <p>VISMARA RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E ORGANIZZAZIONE
  DI SISTEMI SANITARI 1</h3>
  <p>CIMOLIN VERONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI OSPEDALIERI E
  SICUREZZA [2]</h3>
  <p>CIMOLIN VERONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONSTRUCTION MANAGEMENT
  B: APPLICATIONS</h3>
  <p>RIGAMONTI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS IN
  TRANSFORMATION: SOCIAL AND SUSTAINABILITY CHALLENGES LAB</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HAPTICS (I.C. MODULE)</h3>
  <p>FERRISE FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOFTWARE METHODOLOGIES
  AND ARCHITECTURES FOR SECURITY</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED CODING TOOLS AND
  METHODOLOGIES</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CORROSION ENGINEERING OF
  METALS AND CERAMICS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIFFUSE OPTICAL
  TOMOGRAPHY</h3>
  <p>PIFFERI ANTONIO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED MODELING
  APPROACHES FOR CARDIOVASCULAR SURGERY [I.C.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED MODELING
  APPROACHES FOR CARDIOVASCULAR SURGERY [2]</h3>
  <p>VOTTA EMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED CODING TOOLS AND
  METHODOLOGIES MODULE 1</h3>
  <p>BRUSCHI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED CODING TOOLS AND
  METHODOLOGIES MODULE 2</h3>
  <p>RANA VINCENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MOBILITY INFRASTRUCTURE
  TECHNIQUES</h3>
  <p>DEBERNARDI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGICAL AND
  ENVIRONMENTAL DESIGN</h3>
  <p>SCALTRITTI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING PHYSICS - ENERGY
  DESIGN</h3>
  <p>ADHIKARI RAJENDRA SINGH</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING PHYSICS - ENERGY
  DESIGN</h3>
  <p>DALL'O' GIULIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>PARIS MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHOTONICS [1]</h3>
  <p>NISOLI MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>E-HEALTH METHODS AND
  APPLICATIONS [I.C.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODEL IDENTIFICATION AND
  MACHINE LEARNING [I.C.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN PLANNING</h3>
  <p>DI VITA STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE PER LA
  MEDICINA RIGENERATIVA [1]</h3>
  <p>JACCHETTI EMANUELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTROL OF MOBILE ROBOTS</h3>
  <p>BASCETTA LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL
  PRESERVATION</h3>
  <p>OTERI ANNUNZIATA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SURVEY AND DIGITAL
  MODELLING</h3>
  <p>BARAZZETTI LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOSPATIAL DATA ANALYSIS
  [MOD. A]</h3>
  <p>MUSSIO LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HYDROGEOLOGICAL RISKS IN
  MOUNTAIN AREA [2ND MOD.]</h3>
  <p>RADICE ALESSIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HYDROGEOLOGICAL RISKS IN
  MOUNTAIN AREA [1ST MOD.]</h3>
  <p>IVANOV VLADISLAV IVOV</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FENOMENI DI INQUINAMENTO
  ACUSTICO</h3>
  <p>BASSANINO MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEO-ENGINEERING
  TECHNIQUES FOR UNSTABLE SLOPES</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOSPATIAL DATA
  PROCESSING TO SUPPORT SEISMIC EMERGENCY MANAGEMENT</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SLOPE STABILITY [I.C.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOPHYSICAL ASSESSMENT
  AND MONITORING</h3>
  <p>HOJAT AZADEH</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA AMBIENTALE
  - PROGETTAZIONE ENERGETICA</h3>
  <p>ASTE NICCOLO'</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  COSTRUIBILITA' E SOSTENIBILITA' DEL PROGETTO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMICS AND COMPUTATION</h3>
  <p>GATTI NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESILIENCE OF CRITICAL
  INFRASTRUCTURES</h3>
  <p>ZIO ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA A</h3>
  <p>PARMEGGIANI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ETHICS FOR TECHNOLOGY</h3>
  <p>CHIFFI DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA</h3>
  <p>TAMINI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>RECALCATI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GENOMIC BIG DATA
  MANAGEMENT AND COMPUTING</h3>
  <p>PIRO ROSARIO MICHAEL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO</h3>
  <p>TEDESCHI CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA E ORGANIZZAZIONE
  AZIENDALE (PER AEROSPAZIALI)</h3>
  <p>CHIODO VERONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  CLIMATIZZAZIONE AMBIENTALE</h3>
  <p>JOPPOLO CESARE MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI A EVENTI DISCRETI</h3>
  <p>FERRARINI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 2</h3>
  <p>GARRIONE MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RETI LOGICHE</h3>
  <p>MIELE ANTONIO ROSARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INGEGNERIA DEL SOFTWARE</h3>
  <p>QUATTROCCHI GIOVANNI ENNIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHEMISTRY AND ORGANIC
  CHEMISTRY</h3>
  <p>VOLONTERIO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSITE MATERIALS FOR
  STRUCTURAL APPLICATIONS</h3>
  <p>D'ANTINO TOMMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA E ORGANIZZAZIONE
  AZIENDALE C</h3>
  <p>ONOFRIO ROSSELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESS PLANTS</h3>
  <p>MOIOLI STEFANIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA APPLICATA ALLE
  MACCHINE</h3>
  <p>RIPAMONTI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROTECNICA</h3>
  <p>GRUOSSO GIAMBATTISTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DEI SISTEMI DI
  CONTROLLO PER L'AERONAUTICA</h3>
  <p>MAGNANI GIANANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA APPLICATA ALLE
  MACCHINE</h3>
  <p>BOCCIOLONE MARCO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE DELLA QUALITA'</h3>
  <p>CICCULLO FEDERICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AERODYNAMICS</h3>
  <p>CORTELEZZI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ALGEBRA LINEARE E
  GEOMETRIA</h3>
  <p>SABADINI IRENE MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA</h3>
  <p>GRAGNANI ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AUTOMAZIONE INDUSTRIALE</h3>
  <p>FERRARINI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE I</h3>
  <p>COMELLI DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNDAMENTALS OF
  HYPERSONIC FLOWS</h3>
  <p>FREZZOTTI ALDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACCHINE E SISTEMI
  ENERGETICI</h3>
  <p>GIUFFRIDA ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURES AND EARTHQUAKE
  RESISTANCE CRITERIA</h3>
  <p>MOLA ELENA FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE A+B</h3>
  <p>PINOTTI ERMANNO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPI DI INGEGNERIA
  CHIMICA</h3>
  <p>BOZZANO GIULIA LUISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTER SYSTEMS
  PERFORMANCE EVALUATION</h3>
  <p>GRIBAUDO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECHATRONIC SYSTEMS AND
  LABORATORY A</h3>
  <p>BRAGHIN FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROTECNICA E
  ELETTRONICA APPLICATA</h3>
  <p>DI RIENZO LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA II
  (PER ING. BIOMEDICA)</h3>
  <p>BIAGI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VEHICLE DESIGN<span
  style='mso-spacerun:yes'>� </span>(OPTIMAL DESIGN)</h3>
  <p>GOBBI MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROPULSIONE
  AEROSPAZIALE)</h3>
  <p>PARAVAN CHRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE METALLURGICHE</h3>
  <p>MOMBELLI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (IMPIANTI
  INDUSTRIALI E GESTIONE DELLA PRODUZIONE)</h3>
  <p>POZZETTI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI ELETTRONICA</h3>
  <p>GUAZZONI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  SPERIMENTAZIONE AEROSPAZIALE</h3>
  <p>GHIRINGHELLI GIANLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROJECT AND PROGRAMME
  MANAGEMENT B</h3>
  <p>MANCINI MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOMETRIA E ALGEBRA
  LINEARE</h3>
  <p>MAURI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 1</h3>
  <p>RIZZI CECILIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SUPPLIER RELATIONSHIP
  MANAGEMENT LAB</h3>
  <p>MORETTO ANTONELLA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE E ORGANIZZAZIONE
  AZIENDALE</h3>
  <p>CASTAGNA ROMEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ASSET LIFE CYCLE
  MANAGEMENT</h3>
  <p>MACCHI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEADERSHIP &amp;
  INNOVATION</h3>
  <p>BELLINI EMILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTER VISION AND
  REVERSE ENGINEERING</h3>
  <p>GUIDI GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESS AND SERVICE
  DESIGN</h3>
  <p>PLEBANI PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOMACHINES (WITH
  LABORATORY)</h3>
  <p>COSTANTINO MARIA LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AUTOMATION AND CONTROL
  LABORATORY</h3>
  <p>FALSONE ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECHANICAL SYSTEM
  DYNAMICS</h3>
  <p>CORRADI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECHANICAL DESIGN FOR
  HIGH TEMPERATURE ENGINEERING APPLICATIONS</h3>
  <p>FILIPPINI MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS &amp; INDUSTRIAL
  ECONOMICS</h3>
  <p>GARRONE PAOLA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ROBOTIC SYSTEMS DESIGN</h3>
  <p>GIBERTI HERMES</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE E CRITERI DI
  PROGETTAZIONE ANTISISMICA</h3>
  <p>MADEDDU MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE E CRITERI DI
  PROGETTAZIONE ANTISISMICA</h3>
  <p>ACITO MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL COMPOSITION</h3>
  <p>TAMBURELLI PIER PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL COMPOSITION</h3>
  <p>BOVATI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONSERVATION AND
  MANAGEMENT OF HISTORIC GARDENS AND LANDSCAPES</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BOTANY AND ARBORICULTURE</h3>
  <p>NOE NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPLES OF FOOD
  MANUFACTURING</h3>
  <p>MASI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IC STRUCTURES AND
  TECHNICAL ENVIRONMENTAL SYSTEMS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MULTI-CRITERIA ANALYSIS
  AND PROJECT APPRAISAL</h3>
  <p>POLETTI ANGELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISTRIBUZIONE
  DELL'ENERGIA ELETTRICA</h3>
  <p>FALABRETTI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (TECNOLOGIE
  E MATERIALI AEROSPAZIALI)</h3>
  <p>GRANDE ANTONIO MATTIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AIR POLLUTION AND CONTROL
  ENGINEERING</h3>
  <p>CERNUSCHI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESEARCH LABORATORY AND
  MANUSCRIPT (HPSR)</h3>
  <p>COLANERI PATRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESEARCH LABORATORY AND
  MANUSCRIPT (HPSR)</h3>
  <p>GRASSI FLAVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERNATIONAL ECONOMICS</h3>
  <p>MANCHIN MIRIAM JUDIT</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VISION BASED 3D
  MEASUREMENTS</h3>
  <p>ZAPPA EMANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE
  (DISTRIBUZIONE DELL'ENERGIA ELETTRICA)</h3>
  <p>FALABRETTI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTER-AIDED DESIGN AND
  MECHANICAL PROTOTYPING</h3>
  <p>COVARRUBIAS RODRIGUEZ MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARTIFICIAL INTELLIGENCE
  FOR SECURITY</h3>
  <p>CARMAN MARK JAMES</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DELL'INDUSTRIA
  DI PROCESSO</h3>
  <p>MATARRESE ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACCHINE</h3>
  <p>PERSICO GIACOMO BRUNO AZZURRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATISTICA</h3>
  <p>ZUCCA FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MOLECULAR FUNCTIONAL
  MATERIALS</h3>
  <p>CAVALLO GABRIELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTING INFRASTRUCTURES</h3>
  <p>ROVERI MANUEL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI INFORMATIVI (PER
  IL SETTORE DELL'INFORMAZIONE)</h3>
  <p>FUGINI MARIAGRAZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING SERVICES ENERGY
  MODELLING</h3>
  <p>SCOCCIA ROSSANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPERIMENTAZIONE E
  MODELLAZIONE DELLE PROPRIETA' DEI MATERIALI</h3>
  <p>TOMMASINI MATTEO MARIA SAVERIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA</h3>
  <p>CASTIGLIONE FRANCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DEI FLUIDI</h3>
  <p>PORTA GIOVANNI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FATTORI UMANI NELLA
  GESTIONE HSEQ</h3>
  <p>BACCHETTA ADRIANO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SENSOR SYSTEMS</h3>
  <p>CONCA ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MIDDLEWARE TECHNOLOGIES
  FOR DISTRIBUTED SYSTEMS</h3>
  <p>MOTTOLA LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA
  (PER ING. BIOMEDICA)</h3>
  <p>COLOMBO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RELIABILITY ENGINEERING
  AND QUANTITATIVE RISK ANALYSIS A+B</h3>
  <p>ZIO ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA E ORGANIZZAZIONE
  AZIENDALE D</h3>
  <p>AGASISTI TOMMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA E ORGANIZZAZIONE
  AZIENDALE D</h3>
  <p>BETTIGA DEBORA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATISTICA</h3>
  <p>VANTINI SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINAL WORKSHOP ANTICO E
  NUOVO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>FERRARI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA E
  COMPOSIZIONE ARCHITETTONICA XL - LABORATORIO</h3>
  <p>FRASCHINI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA E
  COMPOSIZIONE ARCHITETTONICA XL - LABORATORIO</h3>
  <p>MOIA IVAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ARCHITETTURA E COMPOSIZIONE ARCHITETTONICA XL</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONSERVATION</h3>
  <p>ROSINA ELISABETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI RESTAURO
  ARCHITETTONICO</h3>
  <p>SILVETTI ALESSIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COORDINAMENTO PROVA
  FINALE - PROGETTAZIONE TECNOLOGICA</h3>
  <p>RUTA MATTEO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI TECNICA
  URBANISTICA 1</h3>
  <p>ACERBI ANTONIO RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI PROGETTO
  DI SERVIZI TECNOLOGICI</h3>
  <p>MAZZUCCHELLI ENRICO SERGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ERGOTECNICA EDILE</h3>
  <p>VILLA VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI SISTEMI
  INFORMATIVI TERRITORIALI</h3>
  <p>MIGLIACCIO FEDERICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CLIMATIZZAZIONE E
  TERMOFISICA DELL'EDIFICIO</h3>
  <p>MAZZARELLA LIVIO</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=MAZZARELLA LIVIO">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>DISEGNO DELL'ARCHITETTURA
  2 + LABORATORIO DI RILIEVO FOTOGRAMMETRICO DELL'ARCHITETTURA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI RILIEVO
  FOTOGRAMMETRICO DELL'ARCHITETTURA</h3>
  <p>PREVITALI MATTIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONSOLIDAMENTO DI
  STRUTTURE</h3>
  <p>JURINA LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE INFORMATIVA
  E COORDINAMENTO PROVA FINALE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INGEGNERIA SANITARIA -
  AMBIENTALE</h3>
  <p>AZZELLINO ARIANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRASPORTI, MOBILIT� E
  SOSTENIBILIT�</h3>
  <p>MUSSONE LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WORKSHOP 2</h3>
  <p>ALLARD JOSE MANUEL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  1</h3>
  <p>REPISHTI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DEL DESIGN E
  DELL'ARCHITETTURA</h3>
  <p>COLIZZI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DELLA
  RAPPRESENTAZIONE</h3>
  <p>COMI CLAUDIO UMBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNICAL ASSESSMENT OF
  THE BUILT ENVIRONMENT</h3>
  <p>PAGANIN GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA RAZIONALE</h3>
  <p>LORENZANI SILVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA GENERALE</h3>
  <p>LAMPERTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DEL DESIGN E
  DELL'ARCHITETTURA</h3>
  <p>BOSONI GIAMPIERO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>RIBOLDAZZI RENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARTE
  CONTEMPORANEA</h3>
  <p>CASTELLI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY OF DESIGN</h3>
  <p>DELL'ACQUA BELLAVITIS ARTURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE CAD</h3>
  <p>CARUSO GIANDOMENICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  2</h3>
  <p>BIRAGHI MARCO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  2</h3>
  <p>PISANI DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI</h3>
  <p>NOVATI GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI</h3>
  <p>GHISI ALDO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ESTIMO</h3>
  <p>MUTTI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROJECT EVALUATION</h3>
  <p>OPPIO ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATICA</h3>
  <p>CORONELLI DARIO ANGELO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATICA</h3>
  <p>QUAGLINI VIRGINIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE DIGITALE PER
  LA MODA</h3>
  <p>TORINO ROMINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOFTWARE E GRAFICA PER IL
  WEB</h3>
  <p>TOLINO UMBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY OF ARCHITECTURE</h3>
  <p>GUERRIERI PILAR</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIC EVALUATION OF
  PROJECTS</h3>
  <p>FERRETTI VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CRITICA D'ARTE E DI
  ARCHITETTURA</h3>
  <p>PANZA PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA E IMPIANTI</h3>
  <p>ASTE NICCOLO'</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI COSTRUZIONE
  E ORGANIZZAZIONE DEGLI EDIFICI</h3>
  <p>MALIGHETTI LAURA ELISABETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIOLOGIA URBANA</h3>
  <p>ARLOTTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DELLA
  COMUNICAZIONE E CULTURE DI GENERE</h3>
  <p>BUCCHETTI VALERIA LUISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN THE COMPLEXITY</h3>
  <p>BRUNO ARMANDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CREATIVITY AND
  ARCHITECTURE IN THE MOVIES</h3>
  <p>CORSINI BARTOLOMEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPATIAL ANALYSIS</h3>
  <p>MUSSIO LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DURABILITY AND
  MAINTENANCE</h3>
  <p>DANIOTTI BRUNO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VALUTAZIONE ECONOMICA DEI
  PROGETTI</h3>
  <p>POLETTI ANGELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROJECT APPRAISAL</h3>
  <p>FERRETTI VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARTE CONTEMPORANEA<span
  style='mso-spacerun:yes'>� </span>E SPAZI</h3>
  <p>MAZZANTI ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA DELLA
  CREATIVIT�, CULTURA E INNOVAZIONE</h3>
  <p>FRATESI UGO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLIED MATHEMATICS FOR
  ARCHITECTURE</h3>
  <p>VIANELLO MAURIZIO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ARCHITETTURA TECNICA</h3>
  <p>POLI TIZIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>FANZINI DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHAEOLOGY, ARCHITECTURE
  AND ETHICAL ISSUES</h3>
  <p>ROSSI CORINNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE ECONOMICA DEL
  PROGETTO</h3>
  <p>PAVAN ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONSOLIDAMENTO DELLE
  STRUTTURE</h3>
  <p>PISANI MARCO ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CURVE E SUPERFICI PER IL
  DESIGN</h3>
  <p>MIGLIO EDIE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRANSPORT PLANNING AND
  ECONOMICS</h3>
  <p>BERIA PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WORKSHOP</h3>
  <p>VU DUY PHONG</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FILOSOFIA DELLA
  CONOSCENZA</h3>
  <p>CHIODO SIMONA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEORIE E STORIA
  DELL'ARCHITETTURA</h3>
  <p>BUCCI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI MATEMATICA
  E STATISTICA</h3>
  <p>MARAZZINA DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ESTETICA
  DELL'ARCHITETTURA</h3>
  <p>CHIODO SIMONA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LECTURES-LANDSCAPE</h3>
  <p>COLOMBO RAFFAELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATCHING TECHNOLOGY WITH
  HUMANISM</h3>
  <p>LISSONI PIERO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EFFECTIVE RELATIONSHIPS
  II - IMPROVE YOUR NTS (NON-TECHNICAL-SKILLS)</h3>
  <p>ARRIGONI CORRADO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEXTILE &amp; PRINTS
  DESIGN FOR FASHION</h3>
  <p>JARAMILLO REY LUZ MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE PARAMETRICA
  BIM ORIENTED IN AMBIENTE ARCHICAD+ GRASSHOPPER</h3>
  <p>BOLOGNESI CECILIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEMPORARY STORE, POP-UP E
  SHOP SHARING</h3>
  <p>FALERI ALDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGI SKILLS (B)
  RAPPRESENTAZIONE DELLO SPAZIO IN AMBIENTE DIGITALE</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGI SKILLS (C)
  RAPPRESENTAZIONE DELLO SPAZIO IN AMBIENTE DIGITALE</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGI SKILLS (K)
  RAPPRESENTAZIONE DELLO SPAZIO IN AMBIENTE DIGITALE</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>POLITICHE URBANE</h3>
  <p>PASQUI GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIAL HOUSING ESTATE AND
  MANAGEMENT</h3>
  <p>PAVESI ANGELA SILVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COLORE E PERCEZIONE</h3>
  <p>BOERI CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BEYOND THE MIRROR :
  ANALYZING ARCHITECTURE</h3>
  <p>IRACE FULVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LAND USE ETHICS AND THE
  LAW</h3>
  <p>MORONI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEAMBUILDING</h3>
  <p>GABELLIERI BARGAGLI GIOIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGI SKILLS (D)
  RAPPRESENTAZIONE DELLO SPAZIO IN AMBIENTE DIGITALE</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGI SKILLS (E)<span
  style='mso-spacerun:yes'>� </span>RAPPRESENTAZIONE DELLO SPAZIO IN AMBIENTE
  DIGITALE</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING PHYSICS</h3>
  <p>ADHIKARI RAJENDRA SINGH</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOLOGIA</h3>
  <p>PERGALANI FLORIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI ECONOMIA
  URBANA</h3>
  <p>CARAGLIU ANDREA ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>AGOSTI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>COZZA CASSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING TECHNOLOGY
  STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WORKSHOP<span
  style='mso-spacerun:yes'>� </span>INTERDISCIPLINARE</h3>
  <p>STANDOLI CARLO EMILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>NERI RAFFAELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIAL POLICIES</h3>
  <p>RANCI ORTIGOSA COSTANZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI MATEMATICA B</h3>
  <p>CORREGGI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY OF ARCHITECTURAL
  HERITAGE</h3>
  <p>BAGLIONE CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGICAL DESIGN</h3>
  <p>BRUNETTI GIAN LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HERITAGE MANAGEMENT</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURE E MATERIALI
  PER IL PATRIMONIO STORICO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACHINE LEARNING</h3>
  <p>RESTELLI MARCELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA II</h3>
  <p>BOTTEGONI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI E SISTEMI
  AEROSPAZIALI</h3>
  <p>BERNELLI ZAZZERA FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI E SISTEMI
  AEROSPAZIALI</h3>
  <p>CARDANI CESARE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METALLURGIA E MATERIALI
  NON METALLICI</h3>
  <p>CASAROLI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA MECCANICA 1</h3>
  <p>MONNO MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROTECNICA</h3>
  <p>MAFFEZZONI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA APPLICATA E
  DISEGNO</h3>
  <p>CHATTERTON STEVEN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI MECCANICA
  DEL VOLO ATMOSFERICO</h3>
  <p>CROCE ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI MECCANICA
  DEL VOLO ATMOSFERICO</h3>
  <p>RIBOLDI CARLO EMANUELE DIONIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LIGHTWEIGHT DESIGN OF
  SMART MECHANICAL SYSTEMS</h3>
  <p>GORLA CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROGETTO DI
  ALGORITMI E STRUTTURE DATI)</h3>
  <p>PRADELLA MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOINFORMATICS ALGORITHMS</h3>
  <p>PAVESI GIULIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLIED METALLURGY</h3>
  <p>VEDANI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLIED METALLURGY</h3>
  <p>MAPELLI CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVE NON DISTRUTTIVE</h3>
  <p>LUALDI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECHANICS OF MATERIALS
  AND INELASTIC CONSTITUTIVE LAWS</h3>
  <p>COMI CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTER SECURITY - UIC
  587</h3>
  <p>CARMINATI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ACCOUNTING, FINANCE &amp;
  CONTROL</h3>
  <p>AGOSTINO DEBORAH</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED MATHEMATICAL
  MODELS IN FINANCE</h3>
  <p>BARUCCI EMILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MANAGEMENT AND FINANCE OF
  NATURAL RISKS</h3>
  <p>FLORI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AEROSPACE CONTROL SYSTEMS</h3>
  <p>LOVERA MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPRESSIBLE FLUID
  DYNAMICS</h3>
  <p>GUARDONE ALBERTO MATTEO ATTILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FAILURE ANALYSIS E
  INGEGNERIA FORENSE</h3>
  <p>BONIARDI MARCO VIRGINIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI ANALISI
  FUNZIONALE E TRASFORMATE</h3>
  <p>BRAMANTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI RICERCA
  OPERATIVA</h3>
  <p>MALUCELLI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>POWER GENERATION AND
  RENEWABLES</h3>
  <p>BERIZZI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  ELETTROMAGNETISMO (PER INGEGNERIA BIOMEDICA)</h3>
  <p>VALENTINI GIANLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  ELETTROMAGNETISMO (PER INGEGNERIA BIOMEDICA)</h3>
  <p>PIFFERI ANTONIO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATEMATICA NUMERICA</h3>
  <p>VERANI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENERGY SYSTEMS LM</h3>
  <p>CONSONNI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPERIMENTAZIONE
  INDUSTRIALE</h3>
  <p>FRASSOLDATI ALESSIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECOSYSTEMS CONSERVATION
  AND MANAGEMENT</h3>
  <p>GATTO MARINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA MECCANICA E
  QUALITA'</h3>
  <p>MATTA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO<span
  style='mso-spacerun:yes'>� </span>AERODINAMICO</h3>
  <p>BOFFADOSSI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE
  (IAT-ICAR/20)</h3>
  <p>FOSSA GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NETWORK AUTOMATION AND
  PROTECTION SYSTEMS; TOOLS FOR NETWORK SIMULATION</h3>
  <p>FARANDA ROBERTO SEBASTIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RAIL VEHICLE DYNAMICS AND
  TRAIN-TRACK INTERACTION</h3>
  <p>BERETTA STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>OIL AND GAS FIELD
  DEVELOPMENT AND PRODUCTION</h3>
  <p>DE GHETTO GIAMBATTISTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISSION REACTOR PHYSICS
  II + TRANSPORT OF RADIOACTIVE CONTAMINANTS</h3>
  <p>GIACOBBO FRANCESCA CELSA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WATER RESOURCES
  MANAGEMENT</h3>
  <p>BOCCHIOLA DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACHINE DESIGN 2</h3>
  <p>VERGANI LAURA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACHINE DESIGN 2</h3>
  <p>GIGLIO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI SPECIALI
  IDRAULICI</h3>
  <p>BIANCHI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI INTEGRATI DI
  PRODUZIONE</h3>
  <p>URGO MARCELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENERGETICA GENERALE</h3>
  <p>GALLIANI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI CHIMICA</h3>
  <p>FAMULARI ANTONINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EQUAZIONI DIFFERENZIALI
  ORDINARIE</h3>
  <p>MARCHIONNA CLELIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTROCHEMICAL ENERGY
  CONVERSION AND STORAGE</h3>
  <p>CASALEGNO ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTROCHEMICAL ENERGY
  GENERATORS</h3>
  <p>MASI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE
  (ICMR-ICAR/02)</h3>
  <p>SANFILIPPO UMBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CALCOLO NUMERICO</h3>
  <p>FORMAGGIA LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECOLOGIA</h3>
  <p>CASAGRANDI RENATO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MICROCONTROLLORI</h3>
  <p>ZAPPA FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (LP MTM)</h3>
  <p>PAGANONI ANNA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIAL IMPACT, RISK AND
  RESPONSIBILITY OF TECHNOLOGY AND ENGINEERING</h3>
  <p>FOSSA FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINANCIAL ENGINEERING</h3>
  <p>BAVIERA ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBABILITA' E STATISTICA
  MATEMATICA</h3>
  <p>ZUCCA FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATISTICA</h3>
  <p>CONFORTOLA FULVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENGINEERING GEOLOGICAL
  SURVEY</h3>
  <p>GATTINONI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA II</h3>
  <p>SIANESI FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMUNICAZIONE TECNICA</h3>
  <p>ROVIDA EDOARDO GIOVANNI MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NUMERICAL MODELING OF
  DIFFERENTIAL PROBLEMS</h3>
  <p>MIGLIO EDIE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RETI LOGICHE</h3>
  <p>BRANDOLESE CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NUMERICAL ANALYSIS</h3>
  <p>PEROTTO SIMONA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STEEL STRUCTURES</h3>
  <p>BERNUZZI CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AEROPORTI E TRASPORTO
  AEREO</h3>
  <p>PIGNATARO PIETRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPORTAMENTO
  ORGANIZZATIVO</h3>
  <p>TRABUCCHI DANIEL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COSTRUZIONE DI MACCHINE 1</h3>
  <p>MANES ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLIED MECHANICS</h3>
  <p>VANIA ANDREA TOMMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATHEMATICS</h3>
  <p>CONTI MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA GENERALE</h3>
  <p>SEBASTIANO ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>POWER GENERATION SYSTEMS</h3>
  <p>MANZOLINI GIAMPAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TELERILEVAMENTO</h3>
  <p>GIANINETTO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERDISCIPLINARY PROJECT</h3>
  <p>PIRO ROSARIO MICHAEL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COSTRUZIONE DI MACCHINE 1</h3>
  <p>SBARUFATTI CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRIC MEASUREMENTS AND
  DIAGNOSTIC</h3>
  <p>FERRERO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATISTICAL AND
  MATHEMATICAL MODELING AND OPTIMIZATION</h3>
  <p>VANTINI SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WIRELESS AND MOBILE
  PROPAGATION</h3>
  <p>D'AMICO MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FLUID MACHINES FOR
  LOW-CARBON TECHNOLOGIES</h3>
  <p>LUCCHINI TOMMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE CHIMICHE
  SPECIALI: FONTI FOSSILI</h3>
  <p>CASTOLDI LIDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOMETRIA E ALGEBRA
  LINEARE</h3>
  <p>LUCCHETTI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EMBEDDED SYSTEMS 1</h3>
  <p>FORNACIARI WILLIAM</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RIVESTIMENTI INORGANICI</h3>
  <p>VICENZO ANTONELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ALGORITMI E PRINCIPI
  DELL'INFORMATICA (MOD 1 - INFORMATICA TEORICA)</h3>
  <p>MARTINENGHI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE II</h3>
  <p>GATTI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DI
  POSIZIONAMENTO E CONTROLLO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED AND SUSTAINABLE
  MANUFACTURING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED PRODUCTION
  SYSTEMS</h3>
  <p>TAISCH MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>UX-DESIGN</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>USER CENTRED DESIGN
  WORKSHOP (INT. OF)</h3>
  <p>SHARP II JOHN FRANKLIN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ALGORITMI E PRINCIPI
  DELL'INFORMATICA (MOD 2 - INFORMATICA 3)</h3>
  <p>COMAI SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THEORIES AND TOOLS FOR
  INTERACTION DESIGN</h3>
  <p>FERRARO VENERE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BASIC OF INTERACTION
  DESIGN</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALS SELECTION
  CRITERIA IN DESIGN &amp; ENGINEERING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECOLOGIA E SOSTENIBILITA'
  DEI SISTEMI PRODUTTIVI</h3>
  <p>MELIA' PACO VASCO ALDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SERVICE DESIGN</h3>
  <p>SANGIORGI DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURE OF DESIGN
  TECHNOLOGY</h3>
  <p>DAGLIO LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA DEGLI INTERNI
  ITALIANI</h3>
  <p>FINESSI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE E PROPRIET�
  DEI MATERIALI COMPOSITI</h3>
  <p>FRASSINE ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIO-ENERGY AND
  WASTE-TO-ENERGY TECHNOLOGIES (I.C.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>MONESTIROLI TOMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PLANNING IN HISTORICAL
  CONTEXT STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GIS</h3>
  <p>BROVELLI MARIA ANTONIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>OTTICA FISICA E
  TECNOLOGIE OTTICHE [C.I.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIO-WTE TECH:
  ENVIRONMENTAL ASPECTS</h3>
  <p>GROSSO MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>FERRO LUISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NEUROENGINEERING [2]</h3>
  <p>PEDROCCHI ALESSANDRA LAURA GIULIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NEUROENGINEERING [1]</h3>
  <p>CERVERI PIETRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI ANALITICI E
  NUMERICI DELLE E.D.P. (2)</h3>
  <p>ZUNINO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI STATISTICA
  E SEGNALI BIOMEDICI [2]</h3>
  <p>BIANCHI ANNA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PURCHASING AND OPERATIONS
  MANAGEMENT IN THE FOOD INDUSTRY</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>OPERATIONS MANAGEMENT IN
  THE FOOD INDUSTRY</h3>
  <p>RODA IRENE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PURCHASING MANAGEMENT IN
  THE FOOD INDUSTRY</h3>
  <p>LEON BRAVO CLARITA VER�NICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED SUPPLY CHAIN
  PLANNING LAB [1]</h3>
  <p>ABDELKAFI NIZAR</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DIGITALI [1]</h3>
  <p>SALNITRI MATTIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MULTIPHASE SYSTEMS AND
  TECHNOLOGIES +CFD FOR NUCLEAR ENGINEERING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI INDUSTRIALI E
  ORGANIZZAZIONE D'IMPRESA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CREATIVE PROGRAMMING AND
  COMPUTING - MODULE 1: LANGUAGES AND ENVIRONMENTS</h3>
  <p>ZANONI MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRATTAMENTO DELLE
  OSSERVAZIONI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI ANALITICI E
  NUMERICI PER L'INGEGNERIA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  SPERIMENTALE I (INTEGR.)</h3>
  <p>CELEBRANO MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA I [MOD. 2]</h3>
  <p>CANTONI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ACQUE SOTTERRANEE</h3>
  <p>RIVA MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOELETTROMAGNETISMO E
  STRUMENTAZIONE BIOMEDICA [2]</h3>
  <p>FERRIGNO GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DATA BASES</h3>
  <p>BRAGA DANIELE MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ATOM OPTICS AND QUANTUM
  TECHNOLOGIES</h3>
  <p>COLUCCELLI NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA E SISTEMI
  ENERGETICI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI ENERGETICI</h3>
  <p>GATTI MANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI POLIMERICI E
  PROGETTAZIONE</h3>
  <p>GALLO STAMPINO PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI
  I</h3>
  <p>PEREGO UMBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI SEGNALI E
  TRASMISSIONE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBABILIT� E
  TRASMISSIONI NUMERICHE</h3>
  <p>MONTI-GUARNIERI ANDREA VIRGILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DELLE MACCHINE E
  MECCANICA APPLICATA [1]</h3>
  <p>BUCCA GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AUTOMATION AND
  MECHATRONICS MODULE 1</h3>
  <p>TOMASINI GISELLA MARITA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS DATA ANALYTICS
  [2]</h3>
  <p>IEVA FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CORROSIONE E PROTEZIONE
  DEI MATERIALI</h3>
  <p>ORMELLESE MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI TECNICI</h3>
  <p>OLIARO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY OF ARCHITECTURE</h3>
  <p>CARAMELLINO GAIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DEL
  DESIGN</h3>
  <p>CRESPI LUCIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPATIAL DESIGN</h3>
  <p>ZINI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN NARRATIVES</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  PROGETTAZIONE PER L'EDILIZIA STORICA</h3>
  <p>DE STEFANI LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IGIENE AMBIENTALE</h3>
  <p>CAPOLONGO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>LEONI FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN PLANNING</h3>
  <p>VENDEMMIA BRUNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE STRUTTURALE</h3>
  <p>DI LUZIO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPATIAL DESIGN</h3>
  <p>DI SABATINO PETER ARTHUR</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR DESIGN</h3>
  <p>DI SABATINO PETER ARTHUR</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EPHEMERAL/TEMPORARY
  SPACES 2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE DESIGN</h3>
  <p>DE SANTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>RUGGIERO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITT� E DEL
  TERRITORIO</h3>
  <p>CLERICI MARIA ANTONIETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>VALSECCHI MARCO CRISTIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE DIGITALE</h3>
  <p>CUCA BRANKA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>LEPRATTO FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>ROCCA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO PER LA
  CONSERVAZIONE DELLE ARCHITETTURE COMPLESSE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI VISIVI PER IL
  PROGETTO</h3>
  <p>MOTTA DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO DIGITALE</h3>
  <p>BETTIN KATIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DI
  DESIGN</h3>
  <p>ANTINARELLI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI RICERCA PER IL
  PROGETTO</h3>
  <p>SCELSI MARIA ROSARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMA DESIGN (SEMINARI
  DI)</h3>
  <p>ANTINARELLI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RETAIL DESIGN STUDIO 3</h3>
  <p>SPAGNOLI ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RETAIL DESIGN STUDIO 2</h3>
  <p>CARATOZZOLO VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RETAIL DESIGN STUDIO 3</h3>
  <p>IANNILLI VALERIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RETAIL DESIGN STUDIO 4</h3>
  <p>SPAGNOLI ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBLEM SOLVING 1</h3>
  <p>SIMONELLI SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>COPPETTI BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>NEGRISOLI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>WIGGLESWORTH SARAH HEATH</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>LEONI FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI VISIVI PER IL
  PROGETTO</h3>
  <p>FALZONE DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PERCEZIONE
  VISIVA</h3>
  <p>POZZI PIERO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE
  (INT. DI)</h3>
  <p>DI PRETE BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE</h3>
  <p>DE SANTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEZIONI DI DESIGN</h3>
  <p>ZUCO GABRIELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO DIGITALE</h3>
  <p>SALA ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE DIGITALE</h3>
  <p>SALA ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  RAPPRESENTAZIONE DIGITALE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO SVILUPPO
  PRODOTTO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTARE IL SISTEMA
  PRODOTTO</h3>
  <p>CANINA MARIA RITA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBLEM SOLVING 2</h3>
  <p>WILHELM GIACOMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITT� E DEL
  TERRITORIO</h3>
  <p>CURCI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>DI GIOVANNI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>OPEN SPACE SYSTEM AND
  PARKS DESIGN STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFRASTRUCTURE AND
  LANDSCAPE DESIGN</h3>
  <p>GANGEMI SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIE PLASTICHE</h3>
  <p>ANDENA LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPATIAL DESIGN</h3>
  <p>MORBI CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN FOR INTERACTION</h3>
  <p>COVARRUBIAS RODRIGUEZ MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECHANICAL DESIGN AND
  STRUCTURAL ANALYSIS</h3>
  <p>CARBONI MICHELE EZIO RUGGERO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPI DICONSERVAZIONE
  DEGLI EDIFICI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURE DESIGN AND
  CONSTRUCTION</h3>
  <p>VETTORI MARIA PILAR</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SUSTAINABLE URBAN DESIGN</h3>
  <p>MORELLO EUGENIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>GRIBAUDO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI RICERCA PER IL
  PROGETTO</h3>
  <p>MILANI GIOVANNI PIETRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  PROGETTAZIONE DI ARTEFATTI E SISTEMI COMPLESSI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALS FOR DESIGN</h3>
  <p>FARALDI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  URBANISTICA 2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA
  2</h3>
  <p>ZANFI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISM</h3>
  <p>STABILINI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI DISEGNO E
  PROGRAMMAZIONE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  URBANISTICA 3</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA URBANISTICA 3</h3>
  <p>DONADONI ETTORE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURES</h3>
  <p>D'ALESSANDRO LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOLOGIA AMBIENTALE</h3>
  <p>GATTINONI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA VISIVA PER IL
  DESIGN</h3>
  <p>RICCO' DINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE</h3>
  <p>SEASSARO CRISTIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMA DESIGN (SEMINARI
  DI)</h3>
  <p>SEDINI CARLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL MECHANICS</h3>
  <p>QUAGLINI VIRGINIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>VALSECCHI MARCO CRISTIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE DESIGN</h3>
  <p>TZORTZI NERANTZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEZIONI DI DESIGN</h3>
  <p>DE PAOLIS ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE</h3>
  <p>POSTELL JAMES CHRISTOPHER</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE
  (INT. DI)</h3>
  <p>PARENTE MARINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIDATTICA INTEGRATIVA PER
  LA MAGLIERIA</h3>
  <p>MOTTA MARTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEORIA E PRATICA DEL
  DESIGN DI PRODOTTO</h3>
  <p>CREA NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROJECT VISION</h3>
  <p>LEVANTI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERACTION DESIGN STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERACTION DESIGN</h3>
  <p>QUAGGIOTTO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>ADAMI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>PINTO LIVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI SISTEMI
  E ELEMENTI COSTRUTTIVI</h3>
  <p>VISCUSO SALVATORE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>CAMPIOLI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA PER GLI
  INTERNI</h3>
  <p>BALDI CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI</h3>
  <p>BALDI CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI VISIVI PER IL
  PROGETTO</h3>
  <p>BONANNI TIZIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE DEL
  PRODOTTO (INT. DI)</h3>
  <p>BIANCHINI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE DEL
  PRODOTTO (INT. DI)</h3>
  <p>ANDREONI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI PROGETTO
  MODA - M1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE PER
  LA MODA</h3>
  <p>SPEZZAPRIA FIORENZA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE SEZ.2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>CONSALEZ LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>CEFIS NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPERIMENTAZIONE DI
  SISTEMI E COMPONENTI</h3>
  <p>RATTI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIDATTICA INTEGRATIVA PER
  L'ACCESSORIO</h3>
  <p>FABIANO FEDERICA LUCIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>PERDOMI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>BASSI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELLA CITTA' E DEL
  TERRITORIO</h3>
  <p>DULIO ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PORTFOLIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E TECNICHE DEL
  DISEGNO</h3>
  <p>DUVERNOY SYLVIE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLE STRUTTURE</h3>
  <p>MARIANI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE VISIVA</h3>
  <p>PIAZZA MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN BRANDING</h3>
  <p>BERTOLA PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE - SEZ 1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI DISEGNO</h3>
  <p>COMI CLAUDIO UMBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI PROGETTAZIONE</h3>
  <p>MICOLI LAURA LOREDANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA DEL PROGETTO</h3>
  <p>ALLODI DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>PUGLISI VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE DESIGN</h3>
  <p>PESSOA PEREIRA ALVES HENRIQUE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN SOCIOLOGY</h3>
  <p>CORDINI MARTA MARGHERITA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>OOMS TOMAS</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI DESIGN
  DEGLI INTERNI SEZ.4</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI
  TEAMWORK</h3>
  <p>TROCCHIANESI RAFFAELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI DI MODELLAZIONE
  DELLO SPAZIO</h3>
  <p>CALVANO MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO (INT.
  DI)</h3>
  <p>COSTA FIAMMETTA CARLA ENRICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>SANGALLI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>LIMONGELLI MARIA GIUSEPPINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI SISTEMI
  E ELEMENTI COSTRUTTIVI</h3>
  <p>FANTINI ADRIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE DESIGN</h3>
  <p>DE MATTEIS ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPLES OF THE
  CONSERVATION PROJECT OF HISTORICAL BUILDINGS</h3>
  <p>KLUZER ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>AUB�CK MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI DESIGN
  DEGLI INTERNI SEZ.2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E TECNICHE DEL
  DISEGNO</h3>
  <p>DEVOTO MARZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR YACHT DESIGN</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR DESIGN</h3>
  <p>MIGLIORE LODOVICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>PENDINI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>BRICOLO FILIPPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANA</h3>
  <p>PERABONI CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANA</h3>
  <p>DEZIO CATHERINE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI
  TEAMWORK</h3>
  <p>BIAMONTI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROPRIET� GENERALI DEI
  MATERIALI E MATERIE PLASTICHE</h3>
  <p>MARANO CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO</h3>
  <p>BRUNO DAVIDE MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>KANYILMAZ ALPER</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA
  1</h3>
  <p>POGLIANI LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA
  1</h3>
  <p>INFUSSI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  PROGETTAZIONE PER L'EDILIZIA STORICA</h3>
  <p>LANDI ANGELO GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RILIEVO PER
  L'ARCHITETTURA</h3>
  <p>BRUMANA RAFFAELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANA</h3>
  <p>CLERICI MARIA ANTONIETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>PACCHI CAROLINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLICAZIONI DEI
  MATERIALI NEL DESIGN</h3>
  <p>ALTOMARE LINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO DIGITALE</h3>
  <p>MICOLI LAURA LOREDANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>BERTOLO MARESA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO</h3>
  <p>FERRARA MARIA RITA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PERCEPTUAL DIMENSIONS AND
  COMMUNICATION DESIGN</h3>
  <p>DEDINI ANTONELLA PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>PIGNATARO MARIA ANNUNZIATA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI ANALISI
  DELLA CITTA' E DEL TERRITORIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  PROGETTAZIONE PER L'EDILIZIA STORICA</h3>
  <p>CARDANI GIULIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEGLI
  INTERNI</h3>
  <p>RIVA NICOLO' CARLO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOENGINEERING OF
  NEUROSENSORY SYSTEMS</h3>
  <p>BARBIERI RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNDAMENTALS OF
  ELECTROMAGNETIC FIELDS</h3>
  <p>GENTILI GIAN GUIDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SWITCHING AND ROUTING</h3>
  <p>PATTAVINA ACHILLE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENERGY SYSTEMS</h3>
  <p>GATTI MANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA E ORGANIZZAZIONE
  AZIENDALE</h3>
  <p>CROCE ANNALISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRICAL DRIVES FOR
  INDUSTRY AND TRANSPORT APPLICATIONS</h3>
  <p>TARSITANO DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BASI DI DATI 1</h3>
  <p>TANCA LETIZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THEORETICAL COMPUTER
  SCIENCE</h3>
  <p>MORZENTI ANGELO CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO [INFORMAZIONE]</h3>
  <p>PAGANELLI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACHINE DESIGN</h3>
  <p>GIGLIO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ACCOUNTING, FINANCE &amp;
  CONTROL</h3>
  <p>LETTIERI EMANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOFT MATTER: THE
  STRUCTURE AND RHEOLOGY OF COMPLEX FLUIDS</h3>
  <p>BUZZACCARO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROTECNICA</h3>
  <p>BRAMBILLA ANGELO MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTATIONAL
  BIOMECHANICS LABORATORY</h3>
  <p>VOTTA EMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTATIONAL FLUID
  DYNAMICS OF REACTIVE FLOWS</h3>
  <p>CUOCI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METALLURGIA E MATERIALI
  NON METALLICI</h3>
  <p>D'ERRICO FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA</h3>
  <p>TANELLI MARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA II</h3>
  <p>PATA VITTORINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL SECURITY
  MANAGEMENT</h3>
  <p>FUGINI MARIAGRAZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METALLURGIA</h3>
  <p>CASATI RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI ELETTRONICA</h3>
  <p>LUSARDI NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ORGANIZZAZIONE DEL
  TRASPORTO AEREO</h3>
  <p>TERRANOVA ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNDAMENTALS OF OIL AND
  GAS ENGINEERING</h3>
  <p>BLUNT MARTIN JULIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED PROGRAMMING FOR
  SCIENTIFIC COMPUTING</h3>
  <p>FORMAGGIA LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AFFIDABILITA' E SICUREZZA
  NELL'INDUSTRIA DI PROCESSO</h3>
  <p>DERUDI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RENEWABLE ENERGY</h3>
  <p>CONSONNI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTAMINAZIONE INTERNA +
  RADIOPROTEZIONE APPLICATA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RADIOPROTEZIONE APPLICATA</h3>
  <p>CAMPI FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHEMISTRY AND MATERIALS
  FOR ENVIRONMENT</h3>
  <p>DOTELLI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RIABILITAZIONE MOTORIA
  [M.S.]</h3>
  <p>FRIGO CARLO ALBINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPACE SYSTEMS DESIGN
  (MODULO C.I.)</h3>
  <p>LAVAGNA MICH�LE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOUND ANALYSIS, SYNTHESIS
  AND PROCESSING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHEMICAL PROJECTS
  ENGINEERING</h3>
  <p>FRASSOLDATI ALESSIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DI PRESIDIO
  PER I PROCESSI INDUSTRIALI A</h3>
  <p>DERUDI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PREPARATION AND
  CHARACTERIZATION OF CATALYTIC MATERIALS</h3>
  <p>CASTOLDI LIDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOARTIFICIAL SYSTEMS AT
  THE MICRO AND NANO SCALE 2 - BIOE 548</h3>
  <p>GAUTIERI ALFONSO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELING OF AUTOMOTIVE
  PROPULSION SYSTEMS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI OSPEDALIERI E
  SICUREZZA [C.I.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATHEMATICAL AND
  NUMERICAL METHODS IN ENGINEERING [2]</h3>
  <p>VERGARA CHRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGIES FOR MOTOR
  BEHAVIOUR ANALYSIS AND VIRTUAL MODELLING 2</h3>
  <p>BARONI GUIDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MANUFACTURING SYSTEMS
  ENGINEERING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATHEMATICAL AND
  NUMERICAL METHODS IN ENGINEERING [1]</h3>
  <p>GAZZOLA FILIPPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONSTRUCTION MANAGEMENT
  A: PRINCIPLES</h3>
  <p>PAVAN ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL COMMUNICATION</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMMUNICATION NETWORK
  DESIGN</h3>
  <p>TORNATORE MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IC ADVANCED ARCHITECTURAL
  DESIGN WORKSHOP</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED MODELING
  APPROACHES FOR CARDIOVASCULAR SURGERY [1]</h3>
  <p>FIORE GIANFRANCO BENIAMINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AUDIO AND VIDEO SIGNALS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECHANICAL BEHAVIOUR AND
  FAILURE OF METALS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECHANICAL BEHAVIOUR OF
  MATERIALS</h3>
  <p>VERGANI LAURA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGICAL AND
  ENVIRONMENTAL DESIGN</h3>
  <p>ROGORA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING PHYSICS - ENERGY
  DESIGN</h3>
  <p>BELLI LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGICAL AND
  ENVIRONMENTAL DESIGN</h3>
  <p>FABRIS LUCA MARIA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGICAL AND
  ENVIRONMENTAL DESIGN</h3>
  <p>FANZINI DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN PLANNING</h3>
  <p>FIOR MARIKA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>POLYMERS AND COMPOSITES
  FAILURE AND DURABILITY</h3>
  <p>FRASSINE ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>E-HEALTH APPLICATIONS</h3>
  <p>CAIANI ENRICO GIANLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SURVEY AND DIGITAL
  MODELLING</h3>
  <p>BIANCHI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODULE 2: ACOUSTICS OF
  LISTENING SPACES</h3>
  <p>CAIROLI MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODULE 1: FUNDAMENTALS OF
  ROOM ACOUSTICS</h3>
  <p>CAIROLI MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED MATHEMATICAL
  METHODS (C.I.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NUMERICAL METHODS FOR
  OPTIMIZATION</h3>
  <p>JABALI OLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLICATIONS OF ULTRAFAST
  PROCESSES</h3>
  <p>POLLI DARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>CONCILIO GRAZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL
  PRESERVATION</h3>
  <p>CARDANI GIULIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOLID WASTE MANAGEMENT
  AND TREATMENT [2ND MOD]</h3>
  <p>RIGAMONTI LUCIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLICATION OF STRUCTURAL
  DYNAMICS TO EARTHQUAKE ENGINEERING</h3>
  <p>SMERZINI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEO FUNDAMENTALS [1]</h3>
  <p>MARI LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE TECNOLOGICA
  E AMBIENTALE</h3>
  <p>DELERA ANNA CATERINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOLID WASTE MANAGEMENT
  AND TREATMENT [1ST MOD]</h3>
  <p>GROSSO MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SURVEYING IN EARTHQUAKE
  ENGINEERING</h3>
  <p>REGUZZONI MIRKO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE TECNOLOGICA
  E AMBIENTALE</h3>
  <p>SABBADINI SERGIO RENATO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA</h3>
  <p>LANZANI ARTURO SERGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>MATTIOLI CRISTIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THEORY OF STRUCTURES</h3>
  <p>ARDITO RAFFAELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THEORY OF STRUCTURES AND
  STABILITY OF STRUCTURES</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CLIMATE AND GLOBAL
  CHANGES IN THE AGE OF SUSTAINABLE DEVELOPMENT</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO</h3>
  <p>PERTOT GIANFRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RAPPRESENTAZIONE DELLA
  CITTA' E DEL TERRITORIO</h3>
  <p>ORENI DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE AVANZATE DI
  RILIEVO E RAPPRESENTAZIONE</h3>
  <p>ORENI DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 1</h3>
  <p>GRASSELLI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMBUSTION IN
  THERMOCHEMICAL PROPULSION</h3>
  <p>GALFETTI LUCIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO</h3>
  <p>OTERI ANNUNZIATA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED NUMERICAL
  METHODS FOR COUPLED PROBLEMS WITH APPLICATION TO LIVING SYSTEMS</h3>
  <p>VERGARA CHRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGY FORECASTING
  AND RESEARCHING FUTURE</h3>
  <p>KUCHARAVY DZMITRY</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGICAL AND
  ENVIRONMENTAL DESIGN</h3>
  <p>MORENA MARZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CATALISI OMOGENEA IN
  SINTESI ORGANICA</h3>
  <p>PARMEGGIANI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLIED STATISTICS</h3>
  <p>SECCHI PIERCESARE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DEI FLUIDI</h3>
  <p>GUADAGNINI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DEI FLUIDI</h3>
  <p>SIENA MARTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI OTTIMIZZAZIONE
  DELLA RICERCA OPERATIVA</h3>
  <p>JABALI OLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AEROSERVOELASTICITY OF
  FIXED AND ROTARY WING AIRCRAFT</h3>
  <p>QUARANTA GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ROTORCRAFT DESIGN</h3>
  <p>MASARATI PIERANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE DEI SISTEMI
  LOGISTICI E PRODUTTIVI</h3>
  <p>POZZETTI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  ELETTROTECNICA</h3>
  <p>GANDELLI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA APPLICATA ALLE
  MACCHINE</h3>
  <p>SCHITO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPRESA E DECISIONI
  STRATEGICHE</h3>
  <p>FRATTINI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA</h3>
  <p>FAGIANO LORENZO MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO [INFORMAZIONE]</h3>
  <p>FERRARIO MANUELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTATIONAL TECHNIQUES
  FOR THERMOCHEMICAL PROPULSION</h3>
  <p>PISCAGLIA FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA</h3>
  <p>DUBINI GABRIELE ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA</h3>
  <p>GASTALDI DARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE I</h3>
  <p>SCOTOGNELLA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE DEI SISTEMI
  LOGISTICI E PRODUTTIVI</h3>
  <p>SALA LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TIROCINIO [LP PRI]</h3>
  <p>RIVOLTA BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHEMICAL PROCESSES AND
  TECHNOLOGIES</h3>
  <p>DE GUIDO GIORGIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEI
  CALCOLATORI E SISTEMI OPERATIVI</h3>
  <p>BREVEGLIERI LUCA ODDONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEI
  CALCOLATORI E SISTEMI OPERATIVI</h3>
  <p>SILVANO CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOMETRIA E ALGEBRA
  LINEARE</h3>
  <p>COMPAGNONI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>OPTICAL AND TRANSPORT
  NETWORKS</h3>
  <p>BREGNI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED DIGITAL SIGNAL
  PROCESSING</h3>
  <p>SPAGNOLINI UMBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>OPTICAL COMMUNICATIONS</h3>
  <p>MARTINELLI MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALS FOR ELECTRICAL
  APPLICATIONS</h3>
  <p>LATORRATA SAVERIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUELS FROM FOSSIL AND
  RENEWABLE SOURCES</h3>
  <p>BERETTA ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTROL AND ACTUATING
  DEVICES FOR MECHANICAL SYSTEMS</h3>
  <p>BRAGHIN FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 1</h3>
  <p>PATA VITTORINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 1</h3>
  <p>MONTICELLI DARIO DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTRONICA</h3>
  <p>GULINATTI ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MISURE E STRUMENTAZIONE</h3>
  <p>NORGIA MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA APPLICATA ALLE
  MACCHINE</h3>
  <p>ZASSO ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DELLE
  VIBRAZIONI</h3>
  <p>CHELI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METALLIC MATERIALS AND
  PRODUCT INNOVATION</h3>
  <p>CASATI RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA RAZIONALE</h3>
  <p>CORREGGI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA I E
  GEOMETRIA</h3>
  <p>DI CRISTO MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  COMUNICAZIONI E INTERNET</h3>
  <p>MAIER GUIDO ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 1</h3>
  <p>SOAVE NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA I E
  GEOMETRIA</h3>
  <p>CITTERIO MAURIZIO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FENOMENI E CONTROLLO
  DELLE ALTERAZIONI AMBIENTALI</h3>
  <p>RIGAMONTI LUCIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOMETRIA E ALGEBRA
  LINEARE</h3>
  <p>PINTON STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>OPERATIONS MANAGEMENT</h3>
  <p>ROSSINI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>OPERATIONS MANAGEMENT</h3>
  <p>TAISCH MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRIC SYSTEMS FOR
  TRANSPORTATION</h3>
  <p>BRENNA MORRIS</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRIC SYSTEM FOR
  TRANSPORTATION C</h3>
  <p>LONGO MICHELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED OPTICS AND
  LASERS</h3>
  <p>GAMBETTA ALESSIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI MICRO E
  NANOSTRUTTURE</h3>
  <p>TUNESI MARTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOINFORMATICS AND
  COMPUTATIONAL BIOLOGY</h3>
  <p>MASSEROLI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELING AND SIMULATION
  OF AEROSPACE SYSTEMS</h3>
  <p>TOPPUTO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPRESA E DECISIONI
  STRATEGICHE</h3>
  <p>GASTALDI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AERODINAMICA</h3>
  <p>AUTERI FRANCO</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=AUTERI FRANCO">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>ADVANCED SURVEY AND
  REPRESENTATION TECHNIQUES</h3>
  <p>PREVITALI MATTIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHOTONIC DEVICES</h3>
  <p>MELLONI ANDREA IVANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRICAL APPLICATIONS</h3>
  <p>FARANDA ROBERTO SEBASTIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>OPERATIONS MANAGEMENT</h3>
  <p>PORTIOLI STAUDACHER ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTROCHEMISTRY OF
  MATERIALS</h3>
  <p>VICENZO ANTONELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEADERSHIP &amp;
  INNOVATION</h3>
  <p>BUGANZA TOMMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FORMAL METHODS FOR
  CONCURRENT AND REAL-TIME SYSTEMS<span style='mso-spacerun:yes'>� </span>(UIC
  545)</h3>
  <p>SAN PIETRO PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROTEOMICS LABORATORY</h3>
  <p>FASOLI ELISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECHANICS OF SOLIDS AND
  STRUCTURES II</h3>
  <p>BRUGGI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AUTOMATION AND CONTROL IN
  VEHICLES</h3>
  <p>SAVARESI SERGIO MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALS FOR ENERGY</h3>
  <p>GARIBOLDI ELISABETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HUMAN MODELLING IN
  ENGINEERING</h3>
  <p>COLOMBO GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INDUSTRIAL RISK
  MANAGEMENT</h3>
  <p>TRUCCO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE E CRITERI DI
  PROGETTAZIONE ANTISISMICA</h3>
  <p>CASOLO SIRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL COMPOSITION</h3>
  <p>MERIGGI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL COMPOSITION</h3>
  <p>PALLINI CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>KOROLIJA ALEKSA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTRODUCTION TO MATERIALS
  SCIENCE</h3>
  <p>SURIANO RAFFAELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL COMPOSITION</h3>
  <p>CROSET PIERRE-ALAIN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURES AND EARTHQUAKE
  RESISTANCE CRITERIA</h3>
  <p>BRICCOLA DEBORAH</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE E CRITERI DI
  PROGETTAZIONE ANTISISMICA</h3>
  <p>CAPSONI ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE E CRITERI DI
  PROGETTAZIONE ANTISISMICA</h3>
  <p>FEDELE ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RECYCLE AND LANDSCAPE
  DESIGN</h3>
  <p>BRANDOLINI D'ADDA SEBASTIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINANCIAL MANAGEMENT OF
  REAL ESTATE TRANSACTIONS + PROJECT MANAGEMENT</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISM</h3>
  <p>TANG YANHONG</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SUSTAINABLE ARCHITECTURE</h3>
  <p>HOFERT FEIX KARIN ELKE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA I E
  GEOMETRIA</h3>
  <p>GRILLO GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 1</h3>
  <p>LUCCHETTI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INDUSTRIAL TECHNOLOGIES</h3>
  <p>TERZI SERGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INDUSTRIAL TECHNOLOGIES</h3>
  <p>FUMAGALLI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AGRONOMY AND FOOD
  SCIENCES</h3>
  <p>AMADUCCI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ELABORAZIONE DI BIOIMMAGINI</h3>
  <p>CAIANI ENRICO GIANLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMMUNICATION NETWORKS
  FOR ELECTRICITY SYSTEMS</h3>
  <p>TRECORDI VITTORIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MULTICHANNEL CUSTOMER
  STRATEGY</h3>
  <p>LAMBERTI LUCIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELING OF MECHANICAL
  BEHAVIOUR OF MATERIALS A</h3>
  <p>FOLETTI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METHODS AND MODELS FOR
  STATISTICAL MECHANICS</h3>
  <p>LORENZANI SILVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BAYESIAN STATISTICS</h3>
  <p>GUGLIELMI ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERAZIONE UOMO-MACCHINA</h3>
  <p>GARZOTTO FRANCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING SERVICES</h3>
  <p>MOTTA MARIO GUALTIERO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPLICAZIONI LEGALI
  DELL'ESERCIZIO DELLA PROFESSIONE (LE RESPONSABILITA' DELL'INGEGNERE)</h3>
  <p>SCOTTI VERONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACCHINE ELETTRICHE</h3>
  <p>PIEGARI LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TIMBER SYSTEMS DESIGN,
  CONSTRUCTION AND SUSTAINABILITY</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROTECNICA II</h3>
  <p>BELLAN DIEGO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RELIABILITY AND
  VULNERABILITY</h3>
  <p>BRUGGI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SITE SURVEY, SETTING OUT
  AND MONITORING</h3>
  <p>FASSI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA
  (PER AEROSPAZIALI)</h3>
  <p>INCREMONA GIAN PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATE OF THE ART REVIEW
  AND PROJECT PROPOSAL (HPSR)</h3>
  <p>GRASSI FLAVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI RICERCA
  OPERATIVA</h3>
  <p>CARELLO GIULIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AUTONOMOUS AGENTS AND
  MULTIAGENT SYSTEMS</h3>
  <p>AMIGONI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE INNOVATIVE PER
  L'ENERGIA</h3>
  <p>MEREU RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CIRCUITI E MISURE
  ELETTRONICHE</h3>
  <p>SVELTO CESARE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NETWORKED CONTROL</h3>
  <p>FARINA MARCELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>LORENZI ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MUSEOGRAPHY</h3>
  <p>L'OCCASO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ARCHITETTURA E COMPOSIZIONE ARCHITETTONICA L</h3>
  <p>LEONI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA E CRITICA
  DELL'ARCHITETTURA CONTEMPORANEA</h3>
  <p>BOSSI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI ECONOMIA E
  PIANIFICAZIONE TERRITORIALE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIRITTO URBANISTICO +
  SOCIOLOGIA URBANA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONSERVATION + STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SUSTAINABLE BUILDING
  TECHNOLOGIES</h3>
  <p>MASERA GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SUSTAINABLE BUILDING
  TECHNOLOGIES + STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE DEI PROGETTI
  COMPLESSI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE DEI PROGETTI
  COMPLESSI A</h3>
  <p>RUTA MATTEO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI RESTAURO
  ARCHITETTONICO</h3>
  <p>BARDI TIZIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE E
  INNOVAZIONE TECNOLOGICA</h3>
  <p>IMPERADORI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA URBANISTICA 1</h3>
  <p>PINTO FULVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ARCHITETTURA TECNICA</h3>
  <p>SEGHEZZI ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN METHODS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDINGS IN SEISMIC
  AREAS</h3>
  <p>SMERZINI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOMETRICAL COMPLEMENTS
  OF GRAPHIC REPRESENTATION</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ARCHITETTURA TECNICA</h3>
  <p>IANNACCONE GIULIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LICENSING E BRAND
  EXTENSION</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ARCHITETTURA TECNICA ED ERGOTECNICA EDILE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA AMBIENTALE</h3>
  <p>BUZZETTI MICHELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPECIAL TOPICS IN
  ENVIRONMENTAL DESIGN</h3>
  <p>MARSHALL STEPHEN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CLIMATE AND HYDROLOGY</h3>
  <p>CEPPI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DEGLI
  ELEMENTI COSTRUTTIVI A</h3>
  <p>RUTA MATTEO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN STUDIO</h3>
  <p>MINUCCI GUIDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA + TECNOLOGIA DEI
  MATERIALI E CHIMICA APPLICATA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI DI
  RAPPRESENTAZIONE INNOVATIVA DEL PROGETTO</h3>
  <p>PAPI DANIELE GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTI DI
  ILLUMINOTECNICA</h3>
  <p>PALLADINO PIETRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HYPERMEDIA APPLICATIONS
  (WEB AND MULTIMEDIA)</h3>
  <p>GARZOTTO FRANCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA 2
  (MACROECONOMIA)</h3>
  <p>FLORIO ANNA PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  1</h3>
  <p>FORNI MARIA ENRICA MARICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DELLA
  RAPPRESENTAZIONE</h3>
  <p>SALERNO ROSSELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DELLA
  RAPPRESENTAZIONE</h3>
  <p>VILLA DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI COSTRUTTIVI IN
  LEGNO</h3>
  <p>LUCCHINI ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DEL DESIGN E
  DELL'ARCHITETTURA</h3>
  <p>FERABOLI MARIA TERESA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY OF ARCHITECTURE 1</h3>
  <p>LOI MARIACRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SEMIOTICS</h3>
  <p>FESTI GIACOMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ACOUSTICS IN BUILDINGS</h3>
  <p>MAZZARELLA LIVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DEL DESIGN E
  DELL'ARCHITETTURA</h3>
  <p>HOCKEMEYER LISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY OF ART</h3>
  <p>GARDELLA GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VALUTAZIONE ECONOMICA
  DELLE TRASFORMAZIONI URBANE</h3>
  <p>PERUCCA GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE CAD</h3>
  <p>COVARRUBIAS RODRIGUEZ MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  2</h3>
  <p>DE MAGISTRIS ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI</h3>
  <p>COMI CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PATOLOGIE E DIAGNOSI
  DEGLI EDIFICI STORICI</h3>
  <p>CARDANI GIULIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARTE</h3>
  <p>CORDERA PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DEL DESIGN E DELLA
  TECNICA</h3>
  <p>TONELLI MARIA CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE DIGITALE PER
  L'ACCESSORIO</h3>
  <p>CARULLI MARINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL DESIGN</h3>
  <p>MUCIACCIA GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGIES FOR THE
  FASHION PRODUCT</h3>
  <p>RUBERTELLI MANUELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANTHROPOLOGY OF
  COMMUNICATION</h3>
  <p>De KERCKHOVE DERRICK CLAUDE FREDERIC</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING SERVICES</h3>
  <p>PEDRANZINI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA DELL'EDIFICIO</h3>
  <p>ANGELOTTI ADRIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY OF CONTEMPORARY
  ARCHITECTURE</h3>
  <p>SCRIVANO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA E POLITICHE
  REGIONALI E URBANE</h3>
  <p>FRATESI UGO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INGEGNERIA DELLA
  SICUREZZA ANTINCENDIO AVANZATA ED FSE</h3>
  <p>LURASCHI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA E TEORIE
  DELL'ARCHITETTURA CONTEMPORANEA</h3>
  <p>BIRAGHI MARCO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENVIRONMENTAL ANALYSIS
  AND LANDSCAPE MAPPING</h3>
  <p>PREVITALI MATTIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROFESSIONAL WORKSHOP</h3>
  <p>COLOMBO SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIOLOGY OF THE
  ENVIRONMENT</h3>
  <p>MAESTRIPIERI LARA IVANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI ESTETICA</h3>
  <p>CHIODO SIMONA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIC ASSESSMENT OF
  URBAN TRASFORMATIONS</h3>
  <p>CARAGLIU ANDREA ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN STARTUP</h3>
  <p>CAMPODALL'ORTO SERGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHEOLOGIA E
  ARCHEOMETRIA</h3>
  <p>ROSSI CORINNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA DELL'IMMAGINE
  DIGITALE</h3>
  <p>POZZI PIERO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEORIA DELLA
  PROGETTAZIONE ARCHITETTONICA CONTEMPORANEA</h3>
  <p>BERTELLI GUYA GRAZIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEORIA DELLA
  PROGETTAZIONE ARCHITETTONICA CONTEMPORANEA</h3>
  <p>GALLIANI PIERFRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEGISLAZIONE SUGLI
  APPALTI PUBBLICI</h3>
  <p>MANTINI PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WORKSHOP/INTENSIVE
  INDUSTRY PROJECT</h3>
  <p>COLOMBI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN &amp; LAVORO</h3>
  <p>BOZANIC VLADIMIR</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTER ANIMATION</h3>
  <p>MIGLIO EDIE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WOOD DESIGN</h3>
  <p>CHERNICOFF MARIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THE DEBATE ON
  SUSTAINABILITY: HISTORY, THEORIES AND CONTEMPORARY APPROACHES</h3>
  <p>GARCIA VAZQUEZ CARLOS GABRIEL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTATIONAL DESIGN IN
  ARCHITECTURE</h3>
  <p>HEMMERLING MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPECIAL TOPICS IN URBAN
  DESIGN</h3>
  <p>PICO VALIMA�A RAM�N ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI TECNICA
  DELLE COSTRUZIONI</h3>
  <p>PISANI MARCO ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI TECNICA
  DELLE COSTRUZIONI</h3>
  <p>D'ANTINO TOMMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FACILITY MANAGEMENT LAB</h3>
  <p>CIARAMELLA GIANANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STUDI SULL'UTENTE</h3>
  <p>SANGIORGI DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DI
  RAPPRESENTAZIONE DELLO SPAZIO</h3>
  <p>INTROINI MARCO AUSANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CREATIVE PROGRAMMING FOR
  INTERACTIVE MEDIA</h3>
  <p>LANZI PIERLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN
  STUDIO</h3>
  <p>PAGLIANI FILIPPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIO-ECONOMIC
  TRANSFORMATIONS OF 4.0 TECHNOLOGIES</h3>
  <p>LENZI CAMILLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN PER SERVIZI
  EVOLUTI</h3>
  <p>MONTELLA GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL DESIGN</h3>
  <p>MARTINELLI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGI SKILLS (F)<span
  style='mso-spacerun:yes'>� </span>RAPPRESENTAZIONE DELLO SPAZIO IN AMBIENTE
  DIGITALE</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CARATTERI TIPOLOGICI
  DELL'ARCHITETTURA</h3>
  <p>SPINELLI LUIGI MARIO LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE PARAMETRICA
  BIM ORIENTED IN AMBIENTE GRASSHOPPER+ RHINO</h3>
  <p>BOLOGNESI CECILIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI CANTIERE</h3>
  <p>MALTESE SEBASTIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BRAND OF ME</h3>
  <p>DI LIBERTO FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ITALIAN FASHION SYSTEM</h3>
  <p>COLOMBI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DI RILIEVO E
  MODELLAZIONE 3D PER L'ARCHITETTURA</h3>
  <p>PINTO LIVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING PHYSICS</h3>
  <p>CAUSONE FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOPOLITICA CRITICA</h3>
  <p>GOLDSTEIN BOLOCAN MATTEO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ESTETICA DELLE
  COSE:ABITARE COMUNICARE PRODURRE</h3>
  <p>COLONETTI ALDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURE FOR HUMAN
  SPACE EXPLORATION</h3>
  <p>SUMINI VALENTINA MYRIAM ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN RESEARCH PLANNING</h3>
  <p>SAIKALY FATINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN FOR THE FASHION
  SYSTEM - WORKSHOP</h3>
  <p>IANNUZZI EDOARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>QUALITY MANAGEMENT</h3>
  <p>BRUN ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN AND REGIONAL
  ANALYSIS</h3>
  <p>LEMES de OLIVEIRA FABIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>DI FRANCO ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNDAMENTALS OF ENERGY
  TECHNOLOGIES</h3>
  <p>ZAGO MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>GUIDARINI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY OF CONTEMPORARY
  ARCHITECTURE</h3>
  <p>BUCCI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI</h3>
  <p>CREMONESI MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURE OF INTERIORS</h3>
  <p>BINI LORENZO CESARE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>BERSANI ELEONORA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CI ECONOMIA E SOCIET�</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISM: ISSUES AND
  TOOLS</h3>
  <p>BONFANTINI GIUSEPPE BERTRANDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE ARCHITECTURE</h3>
  <p>GEROLDI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IC ECONOMICS OF PUBLIC
  ISSUES</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHYSICS I AND PHYSICS IIA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TIROCINIO</h3>
  <p>GRASSI FLAVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 2</h3>
  <p>ZAVAGLIA ANDREA CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI OTTIMIZZAZIONE
  DELLA RICERCA OPERATIVA</h3>
  <p>FUMERO FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEI
  CALCOLATORI E SISTEMI OPERATIVI</h3>
  <p>NEGRINI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROTECNICA</h3>
  <p>LINARO DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE</h3>
  <p>NOVA ISABELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI MISURE PER
  ENERGETICA</h3>
  <p>SALA REMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLIED METALLURGY</h3>
  <p>GEROSA RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI INFORMATICA</h3>
  <p>NEGRI MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI INFORMATICA</h3>
  <p>LOIACONO DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DE-MANUFACTURING</h3>
  <p>COLLEDANI MARCELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TIROCINIO (INTERNO) (6
  CFU)</h3>
  <p>MAJA ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI MECCANICI</h3>
  <p>NERI ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROGETTO DI
  RETI LOGICHE)</h3>
  <p>SALICE FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RELIABILITY, SAFETY AND
  RISK ANALYSIS A+B</h3>
  <p>BARALDI PIERO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 1</h3>
  <p>CIPRIANI FABIO EUGENIO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA DELLE COSTRUZIONI</h3>
  <p>DI PRISCO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED SOIL AND ROCK
  MECHANICS</h3>
  <p>CALVETTI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTATIONAL FLUID
  DYNAMICS</h3>
  <p>GUARDONE ALBERTO MATTEO ATTILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRODUCT LIFE CYCLE
  MANAGEMENT</h3>
  <p>ROSSI MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL INNOVATION LAB</h3>
  <p>BRAMBILLA MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GROUND VEHICLE
  ENGINEERING A</h3>
  <p>MASTINU GIANPIERO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA (PER
  AEROSPAZIALI)</h3>
  <p>PELOSI GERARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI INDUSTRIALI E
  SICUREZZA</h3>
  <p>TRUCCO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA A</h3>
  <p>FUGGETTA ALFONSO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISCRETE DYNAMICAL MODELS</h3>
  <p>TOMARELLI FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRATEGY &amp; MARKETING</h3>
  <p>KOTLAR JOSIP</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE E ORGANIZZAZIONE
  AZIENDALE</h3>
  <p>CANIATO FEDERICO FRANCESCO ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FAMILY BUSINESS</h3>
  <p>KOTLAR JOSIP</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WATER AND WASTEWATER
  TREATMENT TECHNOLOGIES</h3>
  <p>CANZIANI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TIROCINIO ESTERNO (BIO
  LP)</h3>
  <p>BIANCHI ANNA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATEMATICA NUMERICA</h3>
  <p>ANTONIETTI PAOLA FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA</h3>
  <p>FERRETTI GIANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA MECCANICA E
  QUALITA'</h3>
  <p>TOLIO TULLIO ANTONIO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ICT FOR HEALTH CARE</h3>
  <p>MASSEROLI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RF SYSTEMS</h3>
  <p>MACCHIARELLA GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOIL REMEDIATION</h3>
  <p>SAPONARO SABRINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HEAT TRANSFER AND THERMAL
  ANALYSIS</h3>
  <p>GUILIZZONI MANFREDO GHERARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MEASUREMENT ORIENTED
  DIGITAL SIGNAL PROCESSING</h3>
  <p>TOSCANI SERGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA RAZIONALE</h3>
  <p>BELGIORNO FRANCESCO DOMENICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTATIONAL MECHANICS</h3>
  <p>BOLZON GABRIELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERNAL COMBUSTION
  ENGINES</h3>
  <p>ONORATI ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FOOD PACKAGING MATERIALS</h3>
  <p>DE NARDO LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NUMERICAL METHODS FOR
  PARTIAL DIFFERENTIAL EQUATIONS</h3>
  <p>BONAVENTURA LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL RELIABILITY
  AND RISK ANALYSIS</h3>
  <p>BIONDINI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LOW FREQUENCY
  COMPUTATIONAL ELECTROMAGNETICS</h3>
  <p>DI RIENZO LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA II
  (PER L'INGEGNERIA ELETTRICA)</h3>
  <p>MUNARINI EMANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HIGH-END AND LUXURY
  INDUSTRIES MANAGEMENT</h3>
  <p>BRUN ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 2</h3>
  <p>CITTERIO MAURIZIO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI CHIMICA</h3>
  <p>CASALEGNO MOSE'</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ETICA D'IMPRESA</h3>
  <p>MAGGIOLINI PIERCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENERGY AND CLIMATE CHANGE
  MODELING AND SCENARIOS</h3>
  <p>TAVONI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRIC CONVERSION FROM
  GREEN SOURCES OF ENERGY</h3>
  <p>DOLARA ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GRAPH OPTIMIZATION</h3>
  <p>CARELLO GIULIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 2</h3>
  <p>VEGNI FEDERICO MARIO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNCTIONAL CERAMIC
  MATERIALS PRODUCTION</h3>
  <p>CRISTIANI CINZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SUSTAINABLE ENERGY IN
  FOOD INDUSTRY</h3>
  <p>ROMANO MATTEO CARMELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED THERMODYNAMICS
  AND THERMOECONOMICS</h3>
  <p>COLOMBO EMANUELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI ENERGETICI L</h3>
  <p>GIUFFRIDA ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTELLIGENZA ARTIFICIALE</h3>
  <p>BONARINI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DURABILITA' DEI MATERIALI
  E TECNOLOGIE PER IL RESTAURO DELLE STRUTTURE</h3>
  <p>CARSANA MADDALENA</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=CARSANA MADDALENA">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>DESIGN AND MANAGEMENT OF
  PRODUCTION SYSTEMS</h3>
  <p>TERZI SERGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI
  RAPPRESENTAZIONE TECNICA</h3>
  <p>FERRISE FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MIXED-SIGNAL CIRCUIT
  DESIGN</h3>
  <p>SAMORI CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EFFICIENZA ENERGETICA
  NEGLI EDIFICI</h3>
  <p>MAZZARELLA LIVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SERVIZI IDRICI A RETE</h3>
  <p>BOCCHIOLA DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED MEASUREMENT
  SYSTEMS FOR CONTROL APPLICATIONS</h3>
  <p>TARABINI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRECAST STRUCTURES</h3>
  <p>FERRARA LIBERATO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATHEMATICAL ANALYSIS II</h3>
  <p>CAVAGNARI GIULIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NUMERICAL APPROXIMATION
  OF MATHEMATICAL MODELS AND APPLICATIONS</h3>
  <p>ANTONIETTI PAOLA FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACHINE TOOLS AND
  MANUFACTURING SYSTEMS LM B</h3>
  <p>ALBERTELLI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATISTICA</h3>
  <p>GUGLIELMI ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROTECNICA</h3>
  <p>D'AMORE DARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA GENERALE</h3>
  <p>GALIMBERTI MAURIZIO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA I E
  GEOMETRIA</h3>
  <p>PATA VITTORINO</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=PATA VITTORINO">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>SUBSURFACE IMAGING AND
  DETECTION</h3>
  <p>BERNASCONI GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESS INTENSIFICATION
  AND FLOW CHEMISTRY</h3>
  <p>VIL� GIANVITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COSTRUZIONE DI MACCHINE 1</h3>
  <p>PREVIATI GIORGIO</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=PREVIATI GIORGIO">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>FISSION REACTOR PHYSICS 1</h3>
  <p>CAMMI ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LOGISTICS AND FREIGHT
  TRANSPORTATION</h3>
  <p>COLICCHIA CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE PER LA
  COMUNICAZIONE NELLA MOBILIT�</h3>
  <p>NICOLI MONICA BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE
  (CIV-ICAR/02)</h3>
  <p>BECCIU GIANFRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA</h3>
  <p>BONARINI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ARCHITETTURA DEGLI INTERNI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA I</h3>
  <p>TAGLIAFERRI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRATTAMENTO DELLE
  OSSERVAZIONI (MOD. A)</h3>
  <p>BARZAGHI RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ALGORITMI E PRINCIPI
  DELL'INFORMATICA (MOD 1 - INFORMATICA TEORICA)</h3>
  <p>BARENGHI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CANTIERI DI
  INFRASTRUTTURE</h3>
  <p>OLIVA GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 1</h3>
  <p>LAENG ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EQUAZIONI DIFFERENZIALI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FLUID LABS [2]</h3>
  <p>MESSA GIANANDREA VITTORIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FLUID LABS [1]</h3>
  <p>MESSA GIANANDREA VITTORIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METHODS AND TOOLS FOR
  SYSTEMATIC INNOVATION C - INNOVATION AND INTELLECTUAL PROPERTY MANAGEMENT
  (I.C. MODULE)</h3>
  <p>CASCINI GAETANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WIRELESS NETWORKS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRACTICE OF DESIGN
  TECHNOLOGY</h3>
  <p>VILLA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA ITALIANA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI DI PRODUZIONE
  (INTEGR.)</h3>
  <p>CAGNO ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LIFE DESIGN</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHEMICAL REACTION
  ENGINEERING</h3>
  <p>CUOCI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>BARAZZETTA GIULIO MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MONITORAGGIO TOPOGRAFICO</h3>
  <p>SCAIONI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA A<span
  style='mso-spacerun:yes'>� </span>E CHIMICA AMBIENTALE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA AMBIENTALE</h3>
  <p>VOLONTERIO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOINGEGNERIA CHIMICA [2]</h3>
  <p>GIORDANO CARMEN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTATIONAL TECHNIQUES
  FOR MOLECULAR MODELING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIRITTO PENALE
  DELL'INFORMATICA</h3>
  <p>PERRI PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI STATISTICA
  E SEGNALI BIOMEDICI [C.I.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CFD FOR NUCLEAR
  ENGINEERING</h3>
  <p>INZOLI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI
  I</h3>
  <p>TALIERCIO ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI INDUSTRIALI E
  ORGANIZZAZIONE D'IMPRESA (PARTE IMPIANTI)</h3>
  <p>TRUCCO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI INDUSTRIALI E
  ORGANIZZAZIONE D'IMPRESA (PARTE DI ORGANIZZAZIONE AZIENDALE)</h3>
  <p>MANFREDI LATILLA VITO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS DATA ANALYTICS
  [2]</h3>
  <p>MENAFOGLIO ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 2
  [MOD. A]</h3>
  <p>LAENG ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOMETRIA</h3>
  <p>LAENG ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOMETRIA</h3>
  <p>BAVIERA ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NANOTECNOLOGIA E
  TRATTAMENTO DELLE SUPERFICI</h3>
  <p>TOMMASINI MATTEO MARIA SAVERIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA MECCANICA<span
  style='mso-spacerun:yes'>� </span>(INTEGRATO)</h3>
  <p>ALBERTELLI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPI DI PROGETTAZIONE
  E TECNOLOGIA MECCANICA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MOBILITY: INFRASTRUCTURES
  AND SERVICES - APPLICATIONS</h3>
  <p>LONGO MICHELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  SPERIMENTALE I (INTEGR.)</h3>
  <p>QUASSO FIORENZA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DYNAMICS AND FLYING
  QUALITIES</h3>
  <p>RIBOLDI CARLO EMANUELE DIONIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATHEMATICAL ANALYSIS I
  AND GEOMETRY</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTRODUZIONE ALLA SCIENZA
  DEI MATERIALI A</h3>
  <p>MACCHI PIERO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGRAMMING</h3>
  <p>PINOLI PIETRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 1</h3>
  <p>MARCHIONNA CLELIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA (MODULO 2)</h3>
  <p>CRESPI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOELETTROMAGNETISMO E
  STRUMENTAZIONE BIOMEDICA [1]</h3>
  <p>MAINARDI LUCA</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=MAINARDI LUCA">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>BIOELETTROMAGNETISMO E
  STRUMENTAZIONE BIOMEDICA [2]</h3>
  <p>AMBROSINI EMILIA</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=AMBROSINI EMILIA">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>RENEWABLE ENERGY SOURCES
  AND NETWORK INTERFACE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RENEWABLE ENERGY SOURCES</h3>
  <p>FERGNANI NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLICAZIONE DELLE
  TECNICHE DI MONITORAGGIO ALLE FRANE</h3>
  <p>LONGONI LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA (MODULO 1)</h3>
  <p>CERULLO GIULIO NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  SPERIMENTALE B (INTEGR)</h3>
  <p>GADERMAIER CHRISTOPH</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GRAPHENE AND
  NANOELECTRONIC DEVICES [I.C.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SAFETY IN MOBILITY [2]</h3>
  <p>DERUDI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI
  II</h3>
  <p>PEREGO UMBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  SPERIMENTALE B (INTEGR)</h3>
  <p>ALBISETTI EDOARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  COMUNICAZIONI E INTERNET MODULO 1</h3>
  <p>PAROLARI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA (MODULO 2)</h3>
  <p>BUSSETTI GIANLORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI</h3>
  <p>ANZANI ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI</h3>
  <p>DI PRETE BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO (INT.
  DI)</h3>
  <p>LUCCHESE FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTEST DESIGN STUDIO
  SECT.2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR DESIGN</h3>
  <p>CLEMENTI FRANK</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN CULTURE</h3>
  <p>DE LUCCHI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPATIAL DESIGN-TECH TIPS</h3>
  <p>GRECO MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN NARRATIVES</h3>
  <p>MORTATI MARZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>BRUZZESE MARIA ANTONELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>MEI PASQUALE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>ORSINI FILIPPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THE CITY OF CARE</h3>
  <p>SCULLICA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE E STRUTTURE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI RICERCA PER IL
  PROGETTO</h3>
  <p>GALLUZZO LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE DEL
  PRODOTTO</h3>
  <p>BISSON MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR DESIGN</h3>
  <p>MERONI ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INNOVATION CULTURES AND
  THEORIES</h3>
  <p>CRABU STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>PRINA VITTORIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITT� E DEL
  TERRITORIO</h3>
  <p>LONGO ANTONIO EMILIO ALVISE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>RENZONI CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEGLI
  INTERNI</h3>
  <p>UGOLINI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>SAVOLDI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA</h3>
  <p>CARAMELLINO GAIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRANSMEDIA STORYTELLING
  IN FASHION INDUSTRY</h3>
  <p>IANNILLI VALERIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRANSMEDIA STORYTELLING
  IN FASHION INDUSTRY</h3>
  <p>BALDI CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI VISIVI PER IL
  PROGETTO</h3>
  <p>ARDEMAGNI STEFANO FRANCO ANSELMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO DIGITALE</h3>
  <p>BREVI FAUSTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DI
  DESIGN</h3>
  <p>REBAGLIO AGNESE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DI
  DESIGN</h3>
  <p>PICCOLINI FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FASHION RETAIL EXPERIENCE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL ART</h3>
  <p>TANNI VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBLEM SETTING AND TEAM
  BUILDING<span style='mso-spacerun:yes'>� </span>1</h3>
  <p>FERRARIS SILVIA DEBORAH</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DI COSTRUZIONI E
  STRUTTURE</h3>
  <p>ACITO MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO DIGITALE</h3>
  <p>PIGNATEL ALICE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRODUCT CULTURES</h3>
  <p>CEPPI GIULIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HARDWARE &amp; SOFTWARE
  TECHNOLOGIES FOR DESIGN</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>GUZZETTI FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>COMI CLAUDIO UMBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN PLANNING STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISM</h3>
  <p>FACCHINETTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE TECNOLOGICA
  DELL'ARCHITETTURA</h3>
  <p>GINELLI ELISABETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO ARCHITETTONICO</h3>
  <p>PERTOT GIANFRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE HYDROLOGY</h3>
  <p>ROSSO RENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>VALLE PIETRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE</h3>
  <p>GEROSA GIULIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE
  (INT. DI)</h3>
  <p>DI VIRGILIO ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEZIONI DI DESIGN</h3>
  <p>CORDERA PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE E CULTURA
  TESSILE</h3>
  <p>SOLDATI MARIA GRAZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI RICERCA PER IL
  PROGETTO</h3>
  <p>COLOMBI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN STRATEGICO E DEI
  SERVIZI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBLEM SOLVING 2</h3>
  <p>ELLI FEDERICO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEFINITION</h3>
  <p>INGARAMO MATTEO ORESTE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALS FOR DESIGN</h3>
  <p>LEVI MARINELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN INTEGRATION FOR
  PRODUCT DEVELOPMENT</h3>
  <p>ZATTI ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>da SILVA FERREIRA de CARVALHO ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IDRAULICA</h3>
  <p>MAMBRETTI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PERCEZIONE
  VISIVA</h3>
  <p>BISSON MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE
  (INT. DI)</h3>
  <p>BOERI CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE VIRTUALE DEL
  PRODOTTO</h3>
  <p>CARULLI MARINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRODUCT CYCLE MODEL</h3>
  <p>BALLERINI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESEARCH METODOLOGIES FOR
  FASHION DESIGN</h3>
  <p>MANZI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E TECNICHE DEL
  PROGETTO URBANISTICO</h3>
  <p>MAREGGI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY OF MODERN AND
  CONTEMPORARY ARCHITECTURE</h3>
  <p>BUCCI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE AMBIENTALE</h3>
  <p>DESSI' VALENTINA MADDALENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURE OF INTERIORS</h3>
  <p>GASPARINI CHRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PERCEZIONE
  VISIVA</h3>
  <p>BARBERO FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE
  (INT. DI)</h3>
  <p>DEVOTO MARZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEORIA E PRATICA DEL
  DESIGN DI PRODOTTO</h3>
  <p>SALVI SERGIO ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EXHIBITION AND DISPLAY
  FOR PRODUCT SERVICE SYSTEM</h3>
  <p>AURICCHIO VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMUNICAZIONE VISIVA</h3>
  <p>BALZERANO GIAN LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERACTION DESIGN</h3>
  <p>TASSI ROBERTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALS SELECTION FOR
  PRODUCT PERFORMANCE IN FASHION DESIGN</h3>
  <p>DOTELLI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL MECHANICS</h3>
  <p>FAVA GIULIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIORS AND DOMESTIC
  CULTURE</h3>
  <p>MONTANARI ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALS FOR
  PRESERVATION</h3>
  <p>TONIOLO LUCIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL DESIGN</h3>
  <p>GIULIANI MAURO EUGENIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO</h3>
  <p>BIANCHI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI VISIVI PER IL
  PROGETTO</h3>
  <p>HACHEN MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR DESIGN</h3>
  <p>BOSONI GIAMPIERO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN RESEARCH</h3>
  <p>SPERBER AMY</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>MEI PASQUALE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  PROGETTAZIONE PER L'EDILIZIA STORICA</h3>
  <p>BORTOLOTTO SUSANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SEMINARIO TEMATICO DI
  RICERCA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>VANETTI DARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>GAMBARO MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO</h3>
  <p>BORTOLOTTO SUSANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEZIONI DI DESIGN</h3>
  <p>PARENTE MARINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE
  (INT. DI)</h3>
  <p>FERRARI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE PER
  LA MODA</h3>
  <p>CAPPELLIERI ALBA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE (SISTEMI DI IDENTIT� TERRITORIALE)</h3>
  <p>CALABI DANIELA ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMICS OF DESIGN AND
  PROCESSES</h3>
  <p>MANFREDI LATILLA VITO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>TALAMO CINZIA MARIA LUISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>DELERA ANNA CATERINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>PEZZETTI LAURA ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL COMPOSITION</h3>
  <p>PROCHAZKA ELSA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI INNOVATIVI PER
  L'ARCHITETTURA</h3>
  <p>GALLO STAMPINO PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA VISIVA PER IL
  DESIGN</h3>
  <p>MOLTENI ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI DISEGNO</h3>
  <p>ROSSI MICHELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MERCEOLOGIA PER LA MODA</h3>
  <p>FASOLINI LARISSA OLIVA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FASHION DESIGN WORKSHOP</h3>
  <p>POLICO MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FASHION DESIGN STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FASHION MODELLING</h3>
  <p>STASA KLEANT</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE (DIGITAL STRATEGY)</h3>
  <p>GOLDONI KATIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>CAJA MICHELE GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA AMBIENTALE</h3>
  <p>SCANSANI SANDRO ATTILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA AMBIENTALE</h3>
  <p>MAISTRELLO MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOGRAFIA AMBIENTALE</h3>
  <p>CLERICI MARIA ANTONIETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIDATTICA INTEGRATIVA PER
  L'ABBIGLIAMENTO</h3>
  <p>TARANTINO LUCIA CONSIGLIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FASHION DESIGN STUDIO 2</h3>
  <p>ZINI EDOARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>MAGGIORE CARLO ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA AMBIENTALE</h3>
  <p>ZAGARELLA FEDERICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI MATEMATICA A</h3>
  <p>BRUNETTO DOMENICO SAVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DEL
  DESIGN</h3>
  <p>BIAMONTI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E TECNICHE DEL
  DISEGNO</h3>
  <p>ABBATE MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLI PER IL DESIGN</h3>
  <p>DALL'AMICO MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DEI MATERIALI
  PER IL DISEGNO INDUSTRIALE</h3>
  <p>DE NARDO LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE DIGITALE PER
  IL KNITWEAR</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FATTIBILIT� DEL PROGETTO</h3>
  <p>RECCANELLO MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>MAGLIO SANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL COMPOSITION</h3>
  <p>MANGANARO ELVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>COPPOLA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DEL
  DESIGN</h3>
  <p>GRAMEGNA SILVIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLI PER IL DESIGN</h3>
  <p>PICCOLI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI DISEGNO</h3>
  <p>TRUPIANO PATRIZIA DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI PROGETTAZIONE</h3>
  <p>GUARINI GIANLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>LO MONTE FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  PROGETTAZIONE PER L'EDILIZIA STORICA</h3>
  <p>CAMPANELLA CHRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>CAO ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>BROMS WESSEL OLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO</h3>
  <p>GRIMOLDI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLI PER IL DESIGN</h3>
  <p>CARBONE GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGIES AND
  MATERIALS FOR PRODUCT SERVICE SYSTEM</h3>
  <p>DI SABATINO PETER ARTHUR</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPATIAL DESIGN</h3>
  <p>COLLINA LUISA MARIA VIRGINIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA DI COMPONENTI
  E SISTEMI EDILIZI E PRINCIPI DI IMPIANTI TERMICI ED ELETTRICI</h3>
  <p>SALVALAI GRAZIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGIES FOR
  CONSTRUCTION AND ENVIRONMENTAL HYGIENE</h3>
  <p>REBECCHI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITT� E DEL
  TERRITORIO</h3>
  <p>COLANINNO NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITT� E DEL
  TERRITORIO</h3>
  <p>NICOSIA CORINNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LIGHTING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN FOR PRODUCT
  SERVICE SYSTEM</h3>
  <p>VILLARI BEATRICE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINAL SYNTHESIS DESIGN
  STUDIO SECT. 1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>MUSCOGIURI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>ORTEGA CERD� LUIS</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL COMPOSITION</h3>
  <p>KOUSIDI STAMATINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA APPLICATA</h3>
  <p>BRUSCHI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO
  (INT.DI)</h3>
  <p>FUSO LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LIGHTING DESIGN</h3>
  <p>BERTOLAJA CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN FOR PRODUCT
  SERVICE SYSTEM</h3>
  <p>MERONI ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>CASONATO CAMILLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>MENEGATTI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>TORRICELLI CARLOTTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RILIEVO PER
  L'ARCHITETTURA</h3>
  <p>ACHILLE CRISTIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  PROGETTAZIONE PER L'EDILIZIA STORICA</h3>
  <p>ALBANI FRANCESCA LUCIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHYSICAL GEOGRAPHY AND
  GEO-MORPHOLOGY</h3>
  <p>PERGALANI FLORIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED LANDSCAPE DESIGN</h3>
  <p>POLI MATTEO UMBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE</h3>
  <p>BIAGIONI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA E ORGANIZZAZIONE
  AZIENDALE (PER AEROSPAZIALI)</h3>
  <p>AGOSTINO DEBORAH</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATISTICA</h3>
  <p>BOELLA MARCO UGO CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ALGORITMI E PRINCIPI
  DELL'INFORMATICA</h3>
  <p>ROSSI MATTEO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SMART GRIDS: COMPONENTS,
  FUNCTIONALITIES AND BENEFITS</h3>
  <p>GRILLO SAMUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA B</h3>
  <p>MASSEROLI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CALCOLO NUMERICO</h3>
  <p>VERGARA CHRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO [INFORMAZIONE]</h3>
  <p>FERRANTE SIMONA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ACCOUNTING, FINANCE &amp;
  CONTROL</h3>
  <p>MACCARRONE PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPERIMENTAZIONE IN VOLO</h3>
  <p>TRAINELLI LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI AVANZATI PER LA
  PROGETTAZIONE<span style='mso-spacerun:yes'>� </span>DI STRUTTURE
  AEROSPAZIALI</h3>
  <p>GHIRINGHELLI GIANLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PERSONALIT�, TEAM
  BUILDING, LEADERSHIP</h3>
  <p>SBATTELLA LICIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>POLICY ANALYSIS</h3>
  <p>VECCHI GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA</h3>
  <p>PICCARDI CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (INGEGNERIA
  DEL SOFTWARE)</h3>
  <p>SAN PIETRO PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DINAMICA DI SISTEMI
  AEROSPAZIALI</h3>
  <p>MUSCARELLO VINCENZO</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=MUSCARELLO VINCENZO">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>INFORMATICA B</h3>
  <p>DI NITTO ELISABETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  PROGETTAZIONE MECCANICA A</h3>
  <p>CASCINI GAETANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROGETTO
  MULTI-DISCIPLINARE)</h3>
  <p>BECATTINI NICCOLO'</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA</h3>
  <p>CORNO MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPLES OF ADVANCED
  SEPARATIONS</h3>
  <p>STORTI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA (PER L'INGEGNERIA
  ELETTRICA)</h3>
  <p>MELE ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METALLURGIA E MATERIALI
  NON METALLICI</h3>
  <p>GARIBOLDI ELISABETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GREEN BUILDING ENERGY
  SYSTEMS</h3>
  <p>JOPPOLO CESARE MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINANCIAL RISK MANAGEMENT</h3>
  <p>GIORGINO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PAYLOAD DESIGN B</h3>
  <p>MASSARI MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METHODS FOR BIOMEDICAL
  IMAGING AND COMPUTER AIDED SURGERY [1]</h3>
  <p>BASELLI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LOW-CARBON TECHNOLOGIES</h3>
  <p>MARTELLI EMANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLICAZIONI
  BIOTECNOLOGICHE E BIOREATTORI [C.I.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOUND ANALYSIS, SYNTHESIS
  AND PROCESSING MODULE 2: SOUND SYNTHESIS AND SPATIAL PROCESSING</h3>
  <p>SARTI AUGUSTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SIGNALS AND SYSTEMS
  MODULE 2</h3>
  <p>CANCLINI ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOMEDICAL SIGNAL
  PROCESSING AND MEDICAL IMAGES [2] - BIOE 421</h3>
  <p>SIGNORINI MARIA GABRIELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOMEDICAL SIGNAL
  PROCESSING AND MEDICAL IMAGES [1] - BIOE 540</h3>
  <p>SIGNORINI MARIA GABRIELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODEL IDENTIFICATION AND
  DATA ANALYSIS - 1ST MODULE</h3>
  <p>BITTANTI SERGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DI PRESIDIO
  PER I PROCESSI INDUSTRIALI A+B</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DI PRESIDIO
  PER I PROCESSI INDUSTRIALI B</h3>
  <p>DERUDI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E ORGANIZZAZIONE
  DI SISTEMI SANITARI 2</h3>
  <p>CRIVELLINI MARCELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN
  THEORY AND PRACTICE</h3>
  <p>ELDING LARS JONAS HUGO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MANUFACTURING SYSTEMS
  ENGINEERING II</h3>
  <p>TOLIO TULLIO ANTONIO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MANUFACTURING SYSTEMS
  ENGINEERING I</h3>
  <p>TOLIO TULLIO ANTONIO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NETWORK DESIGN</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SMART MANUFACTURING LAB
  [1]</h3>
  <p>URGO MARCELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FAILURE AND CONTROL OF
  METALS</h3>
  <p>VEDANI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY OF GARDENS AND
  LANDSCAPES</h3>
  <p>JAKOB MICHAEL FRANZ</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE AND
  INFRASTRUCTURE DESIGN TECHNIQUES</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN PLANNING</h3>
  <p>COPPOLA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING PHYSICS - ENERGY
  DESIGN</h3>
  <p>FILOGAMO LUANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MUSIC PRODUCTION
  TECHNOLOGIES - MODULE 1</h3>
  <p>COSMA VITTORIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FENOMENI DI TRASPORTO</h3>
  <p>BUSINI VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SURVEY AND DIGITAL
  MODELLING</h3>
  <p>IAROSSI MARIA POMPEIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE PER LA
  MEDICINA RIGENERATIVA [2]</h3>
  <p>GIORDANO CARMEN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AUTOMATION OF ENERGY
  SYSTEMS</h3>
  <p>LEVA ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTROL OF INDUSTRIAL
  ROBOTS</h3>
  <p>ROCCO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL
  PRESERVATION</h3>
  <p>AUGELLI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SLOPE STABILITY [1ST MOD]</h3>
  <p>STERPI DONATELLA VALERIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SLOPE STABILITY [2ND MOD]</h3>
  <p>DI PRISCO CLAUDIO GIULIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOTECHNICAL MODELLING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FENOMENI DI INQUINAMENTO
  ELETTROMAGNETICO</h3>
  <p>CAZZANIGA MARIA TERESA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOTECHNICAL DESIGN [2ND
  MOD]</h3>
  <p>JOMMI CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COGNITIVE AND
  ORGANISATIONAL ASPECTS OF CRISIS MANAGEMENT</h3>
  <p>MENONI SCIRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL
  PRESERVATION</h3>
  <p>SAISI ANTONELLA ELIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA AMBIENTALE
  - PROGETTAZIONE ENERGETICA</h3>
  <p>LEONFORTE FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DI FERROVIE</h3>
  <p>CASSANO GIANDOMENICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>UNDERGROUND AND
  ENVIRONMENTAL STRUCTURES</h3>
  <p>DI PRISCO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>POLLUTION MEASUREMENT AND
  MANAGEMENT [I.C.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED ENVIRONMENTAL
  SYSTEMS ANALYSIS [I.C.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA</h3>
  <p>RESTELLI MARCELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA</h3>
  <p>PILERI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO</h3>
  <p>PESENTI SERENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RAPPRESENTAZIONE DELLA
  CITTA' E DEL TERRITORIO</h3>
  <p>SCANDIFFIO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE AVANZATE DI
  RILIEVO E RAPPRESENTAZIONE</h3>
  <p>LUCE FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI MECCANICA
  STRUTTURALE</h3>
  <p>FEDELE ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI MECCANICA
  STRUTTURALE</h3>
  <p>COCCHETTI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 2</h3>
  <p>NORIS BENEDETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE II</h3>
  <p>FINAZZI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGICAL AND
  ENVIRONMENTAL DESIGN</h3>
  <p>TARTAGLIA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA APPLICATA ALLE
  MACCHINE</h3>
  <p>MUGGIASCA SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI CHIMICI PER LE
  TECNOLOGIE</h3>
  <p>BALDELLI BOMBELLI FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE DEI SISTEMI
  LOGISTICI E PRODUTTIVI</h3>
  <p>MANGIARACINA RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPRESA E DECISIONI
  STRATEGICHE</h3>
  <p>CALDERINI MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NONLINEAR CONTROL</h3>
  <p>PRANDINI MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTRONICA DELLO STATO
  SOLIDO</h3>
  <p>IELMINI DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RETI LOGICHE</h3>
  <p>SALICE FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LAUNCH SYSTEMS</h3>
  <p>MAGGI FILIPPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPACE PROPULSION</h3>
  <p>MAGGI FILIPPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA</h3>
  <p>TOPPI TOMMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE A+B</h3>
  <p>PICONE ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRESERVATION</h3>
  <p>SAISI ANTONELLA ELIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTRODUCTION TO GREEN AND
  SUSTAINABLE CHEMISTRY</h3>
  <p>GAMBAROTTI CRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCAMBIO TERMICO E DI
  MASSA</h3>
  <p>NIRO ALFONSO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTROL AND ACTUATING
  DEVICES FOR MECHANICAL SYSTEMS</h3>
  <p>SABBIONI EDOARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROTECNICA E
  ELETTRONICA APPLICATA</h3>
  <p>MUSSETTA MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACHINE DESIGN</h3>
  <p>MANES ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA II
  (PER ING. BIOMEDICA)</h3>
  <p>VECCHI EUGENIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LIGHTWEIGHT DESIGN OF
  MECHANICAL STRUCTURES</h3>
  <p>BERNASCONI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA (PER
  INGEGNERIA MECCANICA)</h3>
  <p>GUILIZZONI MANFREDO GHERARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA APPLICATA ALLE
  MACCHINE</h3>
  <p>COLLINA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATISTICS</h3>
  <p>MENAFOGLIO ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTER MUSIC -
  LANGUAGES AND SYSTEMS</h3>
  <p>ANTONACCI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBABILIT� E STATISTICA
  PER L'INFORMATICA</h3>
  <p>LADELLI LUCIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA E ORGANIZZAZIONE
  AZIENDALE B</h3>
  <p>CROCE ANNALISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MISURE E STRUMENTAZIONE
  INDUSTRIALE</h3>
  <p>SACCOMANDI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACCHINE ELETTRICHE</h3>
  <p>DI GERLANDO ANTONINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SICUREZZA DELLE RETI</h3>
  <p>BREGNI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA MECCANICA</h3>
  <p>IMPERIO ERNESTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOENGINEERING OF THE
  RESPIRATORY SYSTEM</h3>
  <p>ALIVERTI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATHEMATICAL ANALYSIS
  TOOLS FOR ENGINEERING</h3>
  <p>TOMARELLI FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALOG CIRCUIT DESIGN</h3>
  <p>LACAITA ANDREA LEONARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRESERVATION</h3>
  <p>CANTINI LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGIES FOR
  INFORMATION SYSTEMS</h3>
  <p>TANCA LETIZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMBUSTIONE E SICUREZZA</h3>
  <p>COZZI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNDAMENTALS OF CHEMICAL
  PROCESSES FOR ENERGY AND ENVIRONMENT</h3>
  <p>DONAZZI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA 1
  (MICROECONOMIA)</h3>
  <p>TAJOLI LUCIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECHANICAL SYSTEM
  DYNAMICS</h3>
  <p>MELZI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>BURG ANNEGRET HEDWIG ELISABETH</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>SALOMON LAURENT</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE E CRITERI DI
  PROGETTAZIONE ANTISISMICA</h3>
  <p>ACETI RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN AND TERRITORIAL
  RECYCLING</h3>
  <p>ZANFI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENVIRONMENTAL DESIGN</h3>
  <p>DAGLIO LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECOLOGICAL LANDSCAPE
  PLANNING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORY OF MECHANICAL
  METALLURGY</h3>
  <p>GEROSA RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTEMPORARY LANDSCAPE
  THEORY AND PRACTICE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GARDEN AND LANDSCAPE
  DESIGN</h3>
  <p>BURGI PAUL LUTHER</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL COMPOSITION</h3>
  <p>CHIZZONITI DOMENICO GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MULTI-CRITERIA ANALYSIS
  AND PROJECT APPRAISAL</h3>
  <p>PANDOLFI ALESSANDRA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HEAT AND MASS TRANSFER</h3>
  <p>LUCCHINI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACCHINE</h3>
  <p>MONTENEGRO GIANLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMBUSTIBILI E PROCESSI
  DI COMBUSTIONE</h3>
  <p>DONAZZI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AGRONOMY AND FOOD
  SCIENCES</h3>
  <p>FONTANA GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NUMERICAL METHODS FOR
  ENGINEERING</h3>
  <p>BONAVENTURA LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECHANICAL<span
  style='mso-spacerun:yes'>� </span>SYSTEMS RELIABILITY</h3>
  <p>BERETTA STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI INFORMATIVI (PER
  IL SETTORE DELL'INFORMAZIONE)</h3>
  <p>CAPPIELLO CINZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA</h3>
  <p>GUEDON GAEL RAYMOND</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TIMBER SYSTEMS
  SUSTAINABILITY</h3>
  <p>DOTELLI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI PROCESSI
  METALLURGICI</h3>
  <p>BAGGIOLI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI SISTEMI
  MECCANICI</h3>
  <p>FILIPPINI MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INGEGNERIA DEL SOFTWARE</h3>
  <p>MARGARA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOMATERIALS AND
  INSTRUMENTAL ANALYSIS LABORATORY</h3>
  <p>PETRINI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA AEROSPAZIALE</h3>
  <p>FREZZOTTI ALDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING ENERGY MODELLING
  AND DESIGN LAB</h3>
  <p>MAININI ANDREA GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LAND SURVEYS AND
  REPRESENTATION METHODS</h3>
  <p>BIANCHI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRENGHTENING AND SEISMIC
  DESIGN</h3>
  <p>UNDURRAGA SAAVEDRA CRISTIAN OCTAVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN INNOVATION AND
  PLANNING</h3>
  <p>PONZINI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA E
  COMPOSIZIONE ARCHITETTONICA XL - LABORATORIO</h3>
  <p>CESENA FAUSTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA URBANISTICA 2</h3>
  <p>PINTO FULVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SUSTAINABLE BUILDING
  TECHNOLOGIES STUDIO</h3>
  <p>BRASCA MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONSERVATION STUDIO</h3>
  <p>ROSINA ELISABETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO ARCHITETTONICO +
  LABORATORIO DI RESTAURO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA DELLE COSTRUZIONI
  + LABORATORIO DI COSTRUZIONI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO DELL'ARCHITETTURA
  1</h3>
  <p>MUSCOGIURI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEADERSHIP AND INNOVATION
  (INTEGRATION)</h3>
  <p>BUGANZA TOMMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO CAD DI
  INFORMATICA GRAFICA</h3>
  <p>PESENTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DEGLI
  ELEMENTI COSTRUTTIVI + LABORATORIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEORIE E STORIA DEL
  RESTAURO *</h3>
  <p>GIAMBRUNO MARIA CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE DEGLI IMPIANTI
  INDUSTRIALI</h3>
  <p>NEGRI ELISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  PROGETTAZIONE URBANISTICA</h3>
  <p>MINUCCI GUIDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN + STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>COLUCCI ANGELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA
  DI STRUTTURE COMMERCIALI</h3>
  <p>TAMINI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COORDINAMENTO PROVA
  FINALE - COMPOSIZIONE ARCHITETTONICA</h3>
  <p>POGGIOLI PIERO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INNOVATIONS IN
  METALLURGICAL PLANTS AND PROCESSES A</h3>
  <p>BARELLA SILVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA</h3>
  <p>BORACCHI GIACOMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI DA COSTRUZIONE</h3>
  <p>LOLLINI FEDERICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IDRAULICA</h3>
  <p>LARCAN ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS ECONOMICS</h3>
  <p>STROE IOANA SILVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRODUCTION MANAGEMENT</h3>
  <p>CIGOLINI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY OF ARCHITECTURE 1</h3>
  <p>GRITTI JESSICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METHODS AND TOOLS FOR
  ANALYSIS OF URBAN AND TERRITORIAL SYSTEMS</h3>
  <p>PESARO GIULIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATICS</h3>
  <p>MILANI GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  2</h3>
  <p>DULIO ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHOTOGRAPHY FOR
  ARCHITECTURE</h3>
  <p>HANNINEN ANDOLINA PETRI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  2</h3>
  <p>CAPITANUCCI MARIA VITTORIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ESTIMO</h3>
  <p>SDINO LEOPOLDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ESTIMO</h3>
  <p>PAPETTI MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECHANICS OF MATERIALS
  AND STRUCTURES</h3>
  <p>BIOLZI LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOTECNICA</h3>
  <p>REDAELLI IRENE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIOLOGIA DEI PROCESSI
  CULTURALI E COMUNICATIVI</h3>
  <p>CIASTELLARDI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARTE</h3>
  <p>SCARROCCHIA SANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARTE</h3>
  <p>D'AMIA GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>REGIONAL ECONOMICS</h3>
  <p>FRATESI UGO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RELAZIONI EFFICACI:
  CONOSCERE SE STESSI E GLI ALTRI PER COMUNICARE CON SUCCESSO</h3>
  <p>BANDINI BUTI SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IBRIDAZIONI E
  CONTAMINAZIONI TRA L'ARCHITETTURA MODERNA E CONTEMPORANEA</h3>
  <p>DE MAGISTRIS ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  CONTEMPORANEA</h3>
  <p>ZANZOTTERA FERDINANDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA DELLE COSTRUZIONI</h3>
  <p>LIMONGELLI MARIA GIUSEPPINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECHANICS AND DESIGN OF
  STRUCTURES</h3>
  <p>BOCCIARELLI MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTEMPORARY
  ARCHITECTURAL DESIGN THEORY</h3>
  <p>TAMBURELLI PIER PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA E IMPIANTI</h3>
  <p>LAMBRUSCHI ALEX</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATION SYSTEMS FOR
  THE MAINTENANCE AND MANAGEMENT</h3>
  <p>TALAMO CINZIA MARIA LUISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN HISTORY</h3>
  <p>CARAMELLINO GAIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DELLA
  RAPPRESENTAZIONE</h3>
  <p>FREGONESE LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATICA</h3>
  <p>BIOLZI LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IL FOTOGRAFO E IL
  PROGETTO</h3>
  <p>CRISCIANI CORRADO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MANUTENZIONI DELLE
  COSTRUZIONI</h3>
  <p>DEJACO MARIO CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LUCE E COLORE TRA ARTE E
  DESIGN</h3>
  <p>GELLINI GISELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NANOTECNOLOGIE E
  MATERIALI FUNZIONALI PER IL DESIGN</h3>
  <p>DEL CURTO BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TREND FORECASTING AND
  STRATEGIC INNOVATION</h3>
  <p>CHROMETZKA LUCIA EVANGELIA ELEFTHERIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THE ART OF ASKING
  QUESTIONS: TOOLS AND TECHNIQUES</h3>
  <p>MAESTRIPIERI LARA IVANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ARCHITETTURA TECNICA</h3>
  <p>FIORI MATTEO PAOLO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEMI DI PIANIFICAZIONE
  URBANISTICA</h3>
  <p>STABILINI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CURVE E SUPERFICI PER IL
  DESIGN</h3>
  <p>MICHELETTI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MIAW D</h3>
  <p>CAVALLO ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MIAW E</h3>
  <p>SANCHEZ GARCIA JOSE MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SHAPES AND ALGORITHMS:
  COMPUTATIONAL TOOLS FOR GENERATIVE DESIGN</h3>
  <p>SCOTTI ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CURVE E SUPERFICI PER IL
  DESIGN</h3>
  <p>PAROLINI NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CURVE E SUPERFICI PER IL
  DESIGN</h3>
  <p>SCOTTI ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGI SKILLS (G)
  RAPPRESENTAZIONE DELLO SPAZIO IN AMBIENTE DIGITALE</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGI SKILLS (N)
  RAPPRESENTAZIONE DELLO SPAZIO IN AMBIENTE DIGITALE</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNDAMENTALS OF
  REPRESENTATION</h3>
  <p>BARZAGHI RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLE
  PRESTAZIONI</h3>
  <p>DE ANGELIS ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SUSTAINABLE
  MULTIDISCIPLINARY DESIGN PROCESS STUDIO</h3>
  <p>TADI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  2</h3>
  <p>BOSSI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MIAW A</h3>
  <p>DUBOIS HERVE'</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MIAW C</h3>
  <p>IRARR�ZAVAL SEBASTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ISTITUZIONI DI DIRITTO
  AMMINISTRATIVO E URBANISTICO</h3>
  <p>CABIDDU MARIA AGOSTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA E IMPIANTI</h3>
  <p>CAPUTO PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIMENSIONAMENTO STRUTTURE</h3>
  <p>SALA GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEGLI
  INTERNI</h3>
  <p>BASSO PERESSUT GIAN LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATICA</h3>
  <p>FAVA GIULIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IC MATH</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>MOSCATELLI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURAL HERITAGE LAW</h3>
  <p>IACOVELLI DANILA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>LONGO ANTONIO EMILIO ALVISE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IC URBAN ETHNOGRAPHY</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CI ELEMENTI DI
  PROGETTAZIONE DELL'AMBIENTE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURES AND
  MATERIALS FOR HISTORIC HERITAGE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED COMPUTER
  ARCHITECTURES</h3>
  <p>SANTAMBROGIO MARCO DOMENICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FORMULATION TECHNOLOGY</h3>
  <p>ROSSI FILIPPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRIC CONVERSION OF
  RENEWABLE ENERGY SOURCES</h3>
  <p>BRENNA MORRIS</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MISURE MECCANICHE E
  TERMICHE</h3>
  <p>MANENTI ALESSANDRA CARLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROGETTO
  MULTI-DISCIPLINARE)</h3>
  <p>PREVIATI GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI CHIMICA PER
  L'ELETTRONICA</h3>
  <p>METRANGOLO PIERANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROGETTO DI
  ALGORITMI E STRUTTURE DATI)</h3>
  <p>MARTINENGHI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRATEGY &amp; MARKETING</h3>
  <p>CHIESA VITTORIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRATEGY &amp; MARKETING</h3>
  <p>CHIARONI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED MANUFACTURING
  PROCESSES</h3>
  <p>STRANO MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI INFORMATICA</h3>
  <p>DELLA VIGNA PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN AND ANALYSIS OF
  EXPERIMENTS B</h3>
  <p>TSIAMYRTZIS PANAGIOTIS</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MULTIDISCIPLINARY PROJECT</h3>
  <p>CREMONESI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMMUNICATION AND
  ARGUMENTATION B</h3>
  <p>DI BLAS NICOLETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROGETTO DI
  RETI LOGICHE)</h3>
  <p>PALERMO GIANLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA</h3>
  <p>FOLEGATI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CALCOLO DELLE PROBABILIT�
  E STATISTICA</h3>
  <p>PIAZZA ELIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTER SCIENCE</h3>
  <p>BOLCHINI CRISTIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHYSICS OF NANOSTRUCTURES</h3>
  <p>CASARI CARLO SPARTACO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTER ETHICS</h3>
  <p>SCHIAFFONATI VIOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENTREPRENEURSHIP
  ECONOMICS AND POLICY</h3>
  <p>PIVA EVILA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 1</h3>
  <p>SOAVE NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 1</h3>
  <p>LASTARIA FEDERICO GIAMPIERO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTATIONAL MECHANICS
  AND INELASTIC STRUCTURAL ANALYSIS</h3>
  <p>CORIGLIANO ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RIVER ENGINEERING AND
  BASIN RECLAMATION</h3>
  <p>MANCINI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA GENERALE</h3>
  <p>BARBERA VINCENZINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MEASUREMENTS</h3>
  <p>SCACCABAROZZI DIEGO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALYTICS FOR FOOD
  INDUSTRY</h3>
  <p>BRUN ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LOCALIZATION, NAVIGATION
  AND SMART MOBILITY</h3>
  <p>NICOLI MONICA BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INVEST IN FOREIGN MARKETS
  LAB</h3>
  <p>ELIA STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MISURE ED ELETTRONICA PER
  APPLICAZIONI INDUSTRIALI</h3>
  <p>FAZZI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  PROGETTAZIONE MECCANICA B</h3>
  <p>PREVIATI GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROSPEZIONI GEOFISICHE</h3>
  <p>ZANZI LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ETHICS FOR TECHNOLOGY B</h3>
  <p>FOSSA FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA A</h3>
  <p>BORACCHI GIACOMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ESTIMATION AND LEARNING
  IN AEROSPACE</h3>
  <p>LOVERA MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACHINE TOOLS DIGITAL LAB</h3>
  <p>FOPPIANI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTER-ASSISTED OPTICAL
  SYSTEM DESIGN</h3>
  <p>CONTINI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LOGICA E ALGEBRA</h3>
  <p>RODARO EMANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LOGICA E ALGEBRA</h3>
  <p>ADAMI STEFANIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  ELETTROMAGNETISMO (PER INGEGNERIA BIOMEDICA)</h3>
  <p>COLUCCELLI NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROGETTO DI
  RETI LOGICHE)</h3>
  <p>FORNACIARI WILLIAM</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CLINICAL TECHNOLOGY
  ASSESSMENT</h3>
  <p>DE MOMI ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ROBUST CONTROL</h3>
  <p>COLANERI PATRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENERGY SYSTEMS LM</h3>
  <p>ROMANO MATTEO CARMELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTROCHEMICAL
  TECHNOLOGIES FOR WATER AND WASTE WATER TREATMENT</h3>
  <p>FRANZ SILVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>POSITIONING AND LOCATION
  BASED SERVICES</h3>
  <p>BIAGI LUDOVICO GIORGIO ALDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IDRAULICA</h3>
  <p>BALLIO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA RAZIONALE</h3>
  <p>FORTE SANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MISURE MECCANICHE E
  TERMICHE</h3>
  <p>SCACCABAROZZI DIEGO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COSTRUZIONE DI MACCHINE 2</h3>
  <p>PETRONE GIANFRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRONIC TECHNOLOGIES
  AND BIOSENSORS LABORATORY</h3>
  <p>CERVERI PIETRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>POWER ELECTRONICS AND
  SUPPLIES</h3>
  <p>MAPELLI FERDINANDO LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRON DEVICES</h3>
  <p>MONZIO COMPAGNONI CHRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENTIFIC AND TECHNICAL
  COMMUNICATION</h3>
  <p>COMI CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACHINE DYNAMICS AND
  VIBRATIONS</h3>
  <p>ROCCHI DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACHINE DESIGN 2</h3>
  <p>BERETTA STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MANAGEMENT OF DESIGN AND
  INNOVATION PROJECTS</h3>
  <p>DELL'ERA CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLISTICA DELLE
  MACCHINE E DEGLI IMPIANTI ELETTRICI</h3>
  <p>CARMELI MARIA STEFANIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI CHIMICA</h3>
  <p>CAMETTI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOTECHNICAL EARTHQUAKE
  ENGINEERING</h3>
  <p>DELLA VECCHIA GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BRIDGE THEORY AND DESIGN</h3>
  <p>MALERBA PIER GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOLOGIA TECNICA</h3>
  <p>LONGONI LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>OCEAN AND COASTAL
  ENGINEERING</h3>
  <p>PASSONI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 2</h3>
  <p>SABADINI IRENE MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPORTAMENTO
  ORGANIZZATIVO</h3>
  <p>CANTERINO FILOMENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI ANALISI E
  MODELLIZZAZIONE DEI PROCESSI + PROVA FINALE</h3>
  <p>TAPPIA ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE CHIMICHE PER
  L'INDUSTRIA FARMACEUTICA</h3>
  <p>SACCHETTI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RF CIRCUIT DESIGN</h3>
  <p>LEVANTINO SALVATORE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL DYNAMICS AND
  AEROELASTICITY</h3>
  <p>QUARANTA GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHILOSOPHICAL ISSUES OF
  COMPUTER SCIENCE</h3>
  <p>SCHIAFFONATI VIOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI
  RAPPRESENTAZIONE TECNICA</h3>
  <p>CASCINI GAETANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ITALIAN AND EUROPEAN
  CULTURE</h3>
  <p>CARDILLI LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA PER
  L'AMBIENTE E IL TERRITORIO</h3>
  <p>NEGRI MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE CAD</h3>
  <p>GRAZIOSI SERENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI
  RAPPRESENTAZIONE TECNICA</h3>
  <p>GRAZIOSI SERENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESS CONTROL AND
  INSTRUMENTATION LABORATORY</h3>
  <p>BERETTA ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROJECT COURSE</h3>
  <p>SARTI AUGUSTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURA DELLA MATERIA:
  PRINCIPI E APPLICAZIONI</h3>
  <p>DUO' LAMBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBABILITA' E STATISTICA
  MATEMATICA</h3>
  <p>DHAHRI AMEUR</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBABILITA' E STATISTICA
  MATEMATICA</h3>
  <p>FAGNOLA FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA II</h3>
  <p>NORIS BENEDETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED MANUFACTURING
  PROCESSES</h3>
  <p>BIFFI CARLO ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRIC PROPULSION</h3>
  <p>CASTELLI DEZZA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MICROELECTRONIC
  TECHNOLOGIES</h3>
  <p>MARIANI MARCELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE E MATERIALI
  AEROSPAZIALI</h3>
  <p>SALA GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTINUOUS DYNAMICAL
  SYSTEMS</h3>
  <p>GARRIONE MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DETERMINISTIC AND
  STOCHASTIC OPTIMAL CONTROL THEORY</h3>
  <p>MARCHINI ELSA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISCRETE AND GEOMETRIC
  TOMOGRAPHY</h3>
  <p>DULIO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROTECNICA</h3>
  <p>CODECASA LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RADIO AND OPTICAL WAVE
  PROPAGATION</h3>
  <p>LUINI LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA E MACCHINE</h3>
  <p>BOMBARDA PAOLA ANGELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INGEGNERIA SANITARIA
  AMBIENTALE</h3>
  <p>CERNUSCHI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED MATERIALS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PLANNING THEORY AND
  PRACTICE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN PLANNING</h3>
  <p>MOTTI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NANOSTRUCTURED MATERIALS</h3>
  <p>DEL ZOPPO MIRELLA ELVIRA ANGELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ALGORITMI E PRINCIPI
  DELL'INFORMATICA (MOD 2 - INFORMATICA 3)</h3>
  <p>BARENGHI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA<span
  style='mso-spacerun:yes'>� </span>SPERIMENTALE I</h3>
  <p>GATTI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MEDICAL INFORMATICS [1]</h3>
  <p>BIANCHI ANNA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMMUNICATION DESIGN</h3>
  <p>BRIONES ROJAS MAR�A DE LOS ANGELES</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROPERTIES OF MATERIALS 2</h3>
  <p>CHIESA ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA RAZIONALE</h3>
  <p>BISCARI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI DI PRODUZIONE
  (INTEGR.)</h3>
  <p>PEROTTI SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SERVICE DESIGN AND
  INNOVATION</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>USER EXPERIENCE</h3>
  <p>SANGIORGI DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VISUALIZATION AND
  PROTOTYPING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIO-WTE TECH: ENERGY
  ASPECTS</h3>
  <p>VIGANO' FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TOOLS FOR MAPPING AND
  VISUALIZATION</h3>
  <p>LIGI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOTECHNICAL MODELLING
  AND DESIGN [I.C.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ARCHITETTURA DELLE COSTRUZIONI COMPLESSE II</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN
  STUDIO FOR COMPLEX CONSTRUCTIONS 1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SYSTEM IDENTIFICATION AND
  PREDICTION</h3>
  <p>SAVARESI SERGIO MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA E ELEMENTI DI
  INFORMATICA MEDICA [2]</h3>
  <p>FERRARIO MANUELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI STATISTICA
  E SEGNALI BIOMEDICI [2]</h3>
  <p>FERRARIO MANUELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RADAR IMAGING</h3>
  <p>MONTI-GUARNIERI ANDREA VIRGILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPACE<span
  style='mso-spacerun:yes'>� </span>STRUCTURES</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRATEGIE PER LE SFIDE
  AMBIENTALI [C1]</h3>
  <p>STERPI DONATELLA VALERIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI POLIMERICI A+B</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED SUPPLY CHAIN
  PLANNING LAB</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIRITTO CIVILE
  DELL'INFORMATICA</h3>
  <p>TRIBERTI CESARE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IDROLOGIA</h3>
  <p>CORBARI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRATEGIE PER LE SFIDE
  AMBIENTALI [C]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRONICS AND
  ELECTROACOUSTICS FOR SOUND ENGINEERING - MODULE 1: ELECTRONICS FOR SOUND
  ENGINEERING</h3>
  <p>BERTUCCIO GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI POLIMERICI E
  PROGETTAZIONE</h3>
  <p>LUCOTTI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA (MODULO 1)</h3>
  <p>DELLA VALLE GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE A E
  MECCANICA RAZIONALE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 1</h3>
  <p>BACCHELLI VALERIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIAGNOSI E CERTIFICAZIONI
  ENERGETICHE</h3>
  <p>LA MURA SERGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MOBILITY: INFRASTRUCTURES
  AND SERVICES</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MOBILITY: INFRASTRUCTURES
  AND SERVICES - GENERAL CONCEPTS</h3>
  <p>MAZZONCINI RENATO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE GEOTECNICA</h3>
  <p>GALLI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  SPERIMENTALE I (INTEGR.)</h3>
  <p>MORETTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FOTOGRAMMETRIA E
  TELERILEVAMENTO</h3>
  <p>BARAZZETTI LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AIRPLANE PERFORMANCE AND
  DYNAMICS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATHEMATICAL ANALYSIS I</h3>
  <p>LANZARONE ETTORE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  SPERIMENTALE I (INTEGR.)</h3>
  <p>DAL CONTE STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOELETTROMAGNETISMO E
  STRUMENTAZIONE BIOMEDICA [1]</h3>
  <p>RAVAZZANI PAOLO GIUSEPPE</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=RAVAZZANI PAOLO GIUSEPPE">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>PROGRAMMING AND DATA
  BASES</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGY RISK
  GOVERNANCE MODULE 2</h3>
  <p>MACCARRONE PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOMETRY</h3>
  <p>SAMMARTANO ALESSIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NETWORK INTERFACE</h3>
  <p>PERINI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>QUANTUM OPTICS AND
  INFORMATION</h3>
  <p>OSELLAME ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA (MODULO 2)</h3>
  <p>D'ANDREA COSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SEGNALI E PROCESSI
  STOCASTICI</h3>
  <p>TEBALDINI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AUTOMATION AND
  MECHATRONICS [I.C.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI CEMENTIZI E
  CERAMICI</h3>
  <p>BRENNA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AFFIDABILIT� E
  VULNERABILIT�</h3>
  <p>PETRINI LORENZA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRESERVATION</h3>
  <p>CANZIANI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NUMERICAL COMPUTATION</h3>
  <p>PAVANI RAFFAELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO</h3>
  <p>CECONELLO MAURO ATTILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO</h3>
  <p>SPALLAZZO DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPATIAL DESIGN</h3>
  <p>RECCANELLO MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE AND INTERIOR -
  SPATIAL DESIGN 2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR DESIGN</h3>
  <p>DE LUCCHI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITT� E DEL
  TERRITORIO</h3>
  <p>PESSINA GLORIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>GUIDARINI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>BERSANI ELEONORA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE STRUTTURALE
  PER L'ARCHITETTURA E CALCOLO NUMERICO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THE CITY OF CARE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA E TECNOLOGIA DEI
  MATERIALI</h3>
  <p>CIGADA ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI RICERCA PER IL
  PROGETTO</h3>
  <p>ELGANI ELENA MARIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE SEZ. 1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL INTERACTIVE
  TECHNOLOGIES FOR PHYSICAL INTERFACES</h3>
  <p>GRIBAUDO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN CULTURE</h3>
  <p>MERONI ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE DESIGN</h3>
  <p>MORBI CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROJECT VISION</h3>
  <p>BARSOTTINI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>DI MARIA FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEGLI
  INTERNI</h3>
  <p>NOCCHI MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA</h3>
  <p>MALUSARDI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>BRIGHENTI TOMMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>SABINI MAURIZIO ROMEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA DELLE COSTRUZIONI</h3>
  <p>DI LUZIO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA</h3>
  <p>SCRIVANO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>POVERTY, INEQUALITY AND
  THE WELFARE STATE</h3>
  <p>MATSAGANIS EMMANUEL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AFFIDABILIT� E
  VULNERABILIT�</h3>
  <p>GARAVAGLIA ELSA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIE PLASTICHE</h3>
  <p>MARANO CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI RICERCA PER IL
  PROGETTO</h3>
  <p>BALENA ARISTA FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMA DESIGN (SEMINARI
  DI)</h3>
  <p>DE SANTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMA DESIGN (SEMINARI
  DI)</h3>
  <p>COLOMBO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RETAIL DESIGN STUDIO 1</h3>
  <p>IANNILLI VALERIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBLEM SOLVING 1</h3>
  <p>MERAVIGLIA MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METHODS AND TOOLS FOR
  DETAILED DESIGN</h3>
  <p>BERTOLA PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DI COSTRUZIONI E
  STRUTTURE</h3>
  <p>MPAMPATSIKOS VASSILIS</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>PAVESI CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>CALZONI SONIA BEATRICE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PERCEZIONE
  VISIVA</h3>
  <p>INTROINI MARCO AUSANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA VISIVA PER IL
  DESIGN</h3>
  <p>TELLI FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI E TECNOLOGIE
  PER LA MODA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ACCESSORY DESIGN STUDIO 2</h3>
  <p>DELLA VECCHIA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ACCESSORY DESIGN STUDIO 1</h3>
  <p>CAPPELLIERI ALBA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESEARCH &amp;
  PRESENTATION</h3>
  <p>TENUTA LIVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALS FOR DESIGN</h3>
  <p>COCCIA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DRIVEN INNOVATION</h3>
  <p>PEREGO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINAL PROJECT WORK -
  SECT. 1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEVELOPMENT</h3>
  <p>WILHELM GIACOMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TOPOGRAFIA E CARTOGRAFIA</h3>
  <p>GUZZETTI FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>NOVATI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED ARCHITECTURAL
  DESIGN</h3>
  <p>ARRIOLA MADORELL ANDREU</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AGRONOMY</h3>
  <p>SALA GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA VISIVA PER IL
  DESIGN</h3>
  <p>DE ROSA ANNALINDA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI VISIVI PER IL
  PROGETTO</h3>
  <p>BUONANNO ANNA PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE
  (INT. DI)</h3>
  <p>PIROLA MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEZIONI DI DESIGN</h3>
  <p>MAFFEIS RODOLFO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DI
  DESIGN</h3>
  <p>CASACCI STEFANIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DI
  DESIGN</h3>
  <p>VACCA FEDERICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DATA AND DIGITAL DESIGN</h3>
  <p>VARISCO LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRODUCT DEVELOPMENT
  STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONCEPT DESIGN STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRODUCT CULTURES</h3>
  <p>CELI MANUELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN CULTURE</h3>
  <p>BARBARA ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR DESIGN</h3>
  <p>GOBINI NICOLO'</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>GENTILE CARMELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA VISIVA PER IL
  DESIGN</h3>
  <p>BISSON MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMA DESIGN (SEMINARI
  DI)</h3>
  <p>LAVIZZARI FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRENDS FORECASTING FOR
  FASHION</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLICAZIONI PER
  L'ANALISI URBANA E TERRITORIALE</h3>
  <p>RONCHI SILVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE URBANA</h3>
  <p>BOZZUTO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGY</h3>
  <p>IMPERADORI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTORATION</h3>
  <p>PISTIDDA SONIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL COMPOSITION</h3>
  <p>AZZOLINI ANDREA MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENVIRONMENTAL TECHNOLOGY</h3>
  <p>DEBIAGGI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EXHIBITION AND DISPLAY
  FOR PRODUCT SERVICE SYSTEM</h3>
  <p>CORUBOLO MARTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONCEPTS, TECNOLOGIES AND
  MATERIALS FOR PRODUCT SERVICE SYSTEM INNOVATION</h3>
  <p>BROADBENT STEFANA MAJA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALS_TECH TIPS</h3>
  <p>LEVANTI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FASHION MATERIALS AND
  TECHNOLOGIES</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>SCANDURRA SIMONA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI SISTEMI
  E ELEMENTI COSTRUTTIVI</h3>
  <p>RIVA RAFFAELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEL
  PAESAGGIO</h3>
  <p>BOFFINO MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DEGLI INTERNI
  URBANI ATTREZZATI</h3>
  <p>FARRIS AMANZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA VISIVA PER IL
  DESIGN</h3>
  <p>BUCCHETTI VALERIA LUISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE PER
  LA MODA</h3>
  <p>CONTI GIOVANNI MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FASHION DESIGN</h3>
  <p>SPERBER AMY</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLIED INFORMATICS</h3>
  <p>GARZOTTO FRANCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN AND VISUAL
  COMMUNICATION</h3>
  <p>MARIANI ILARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL AND URBAN
  COMPOSITION</h3>
  <p>LUCCHINI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHOTOGRAPHING
  CONTEMPORARY DWELLING</h3>
  <p>HANNINEN ANDOLINA PETRI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>CONTIN ANTONELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>LAVAGNA MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>ZANELLI ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA VISIVA PER IL
  DESIGN</h3>
  <p>BONANNI TIZIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE DEL
  PRODOTTO</h3>
  <p>DESERTI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN FOR THE FASHION
  SYSTEM 1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LICENSING E BRAND
  EXTENSION (INT DI)</h3>
  <p>TURINETTO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>GALLIANI PIERFRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>MAJ UMBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>CANCLINI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI</h3>
  <p>SCULLICA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DEL
  DESIGN</h3>
  <p>POSTELL JAMES CHRISTOPHER</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLI PER IL DESIGN</h3>
  <p>ZANELLA GIULIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE PER
  LA MODA</h3>
  <p>TESTA SUSANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE PER
  LA MODA (RICERCA BIBLIOGRAFICA E COMUNICAZIONE DEL PROGETTO DI LAUREA)</h3>
  <p>SABBIONI ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE PER
  LA MODA (RICERCA TENDENZE)</h3>
  <p>VOLLERO CATIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRODUCT LIFECYCLE
  MANAGEMENT FOR FASHION</h3>
  <p>BRUN ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN FOR THE FASHION
  SYSTEM 2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FASHION AND THE HISTORY
  OF ART</h3>
  <p>MAFFEIS RODOLFO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA AMBIENTALE</h3>
  <p>DEL PERO CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANA</h3>
  <p>PASTORE MARIA CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TOWN PLANNING</h3>
  <p>PACCHI CAROLINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO</h3>
  <p>MANGIAROTTI RAFFAELLA MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DEFINIZIONE DEL PROGETTO
  - KIT DI USCITA</h3>
  <p>CRESPI LUCIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE VISIVA (INT. DI 2)</h3>
  <p>BERSANELLI CHIARA VITTORIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BRANDING &amp;
  COMMUNICATION</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMMUNICATION BRANDING</h3>
  <p>BERTOLA PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>ORTALLI GIACOMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>ARDITO RAFFAELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>CARLI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>TAGLIABUE FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI MATEMATICA A</h3>
  <p>TURZI STEFANO SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI DISEGNO</h3>
  <p>BREVI FAUSTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE DIGITALE PER
  IL KNITWEAR</h3>
  <p>TERZI PATRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>BELLONI FRANCESCA CLAUDIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RILIEVO TRACCIAMENTO E
  CONTROLLO</h3>
  <p>GIANINETTO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE-SEZ.2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NEW INTERIORS 2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR DESIGN</h3>
  <p>MASTROMATTEI ANTONELLA YURI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EXHIBITION</h3>
  <p>COLOMBO CRISTINA FEDERICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA</h3>
  <p>REDAELLI VITO MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RILIEVO PER
  L'ARCHITETTURA</h3>
  <p>ADAMI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO</h3>
  <p>GABAGLIO ROSSANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>van GELDEREN MICHAEL GERARDUS JOSEPH</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI
  TEAMWORK</h3>
  <p>CRIPPA DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI</h3>
  <p>BOLELLI FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NEW INTERIORS</h3>
  <p>PICCINNO GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPATIAL DESIGN</h3>
  <p>GALLUZZO LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN CULTURE</h3>
  <p>GIACOMAZZI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL AWARENESS AND
  CONTEXTUAL ANALYSIS</h3>
  <p>BROADBENT STEFANA MAJA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>NASH ROY</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ALLESTIMENTO</h3>
  <p>DI LIETO ALBA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANA</h3>
  <p>SAVOLDI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LIGHTING THEORY</h3>
  <p>SINISCALCO ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>MURO SOLER CARLES</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA URBANISTICA 1</h3>
  <p>INNOCENTI MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>INTI ISABELLA SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>REGIONAL AND
  ENVIRONMENTAL ECONOMICS</h3>
  <p>LENZI CAMILLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI</h3>
  <p>PIARDI SILVIA ELVIRA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN CULTURE</h3>
  <p>GEROSA GIULIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>MONICA LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>PELLEGATTA CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPAZIO E SOCIET�</h3>
  <p>FEDELI VALERIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>VALENTE ILARIA PAMELA SIMONETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED LANDSCAPE DESIGN</h3>
  <p>PROTASONI SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MULTIPHASE SYSTEMS AND
  TECHNOLOGIES</h3>
  <p>COLOMBO LUIGI PIETRO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MANAGEMENT OF ENERGY AND
  SUSTAINABILITY</h3>
  <p>FRANZO' SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>POWER ELECTRONICS</h3>
  <p>PERINI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BASI DI DATI 1</h3>
  <p>CERI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHEMISTRY OF MATERIALS</h3>
  <p>FAMULARI ANTONINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE DEGLI IMPIANTI
  INDUSTRIALI</h3>
  <p>CALABRESE ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MICROWAVE ENGINEERING</h3>
  <p>GENTILI GIAN GUIDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLICAZIONI DELL'ENERGIA
  ELETTRICA</h3>
  <p>FARANDA ROBERTO SEBASTIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA</h3>
  <p>RINALDI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DEPENDABLE SYSTEMS</h3>
  <p>CASSANO LUCA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THESIS PREPARATION:
  HORIZONTAL COMPETENCIES</h3>
  <p>CARUSO GIANDOMENICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA</h3>
  <p>SALERNO ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA B</h3>
  <p>SANTAMBROGIO MARCO DOMENICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA APPLICATA ALLE
  MACCHINE</h3>
  <p>ARGENTINI TOMMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI CHIMICA E
  CHIMICA ORGANICA</h3>
  <p>BRENNA MARIA ELISABETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTROLLO DI QUALITA' DEI
  PRODOTTI CHIMICI</h3>
  <p>MACCHI PIERO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA</h3>
  <p>LEVA ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL INTEGRATED
  CIRCUIT DESIGN</h3>
  <p>BONFANTI ANDREA GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTRODUZIONE ALL'ANALISI
  DI MISSIONI SPAZIALI</h3>
  <p>COLOMBO CAMILLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTRODUZIONE ALL'ANALISI
  DI MISSIONI SPAZIALI</h3>
  <p>TOPPUTO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PAYLOAD DESIGN A</h3>
  <p>MASSARI MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI PROCESSI
  BIOLOGICI</h3>
  <p>CRISTIANI CINZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHEMISTRY AND MATERIALS
  FOR ENERGY AND ENVIRONMENT</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SICUREZZA DEI PROCESSI
  DISCONTINUI</h3>
  <p>MAESTRI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLICAZIONI
  BIOTECNOLOGICHE E BIOREATTORI [2]</h3>
  <p>MANTERO SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHYSICS OF LOW
  DIMENSIONAL SYSTEMS II: EXPERIMENTAL METHODS</h3>
  <p>BRAMBILLA ALBERTO LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHYSICS OF LOW
  DIMENSIONAL SYSTEMS I: PRINCIPLES</h3>
  <p>FINAZZI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOARTIFICIAL SYSTEMS AT
  THE MICRO AND NANO SCALE [I.C.] - BIOE 505 - BIOE 548</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELING OF AUTOMOTIVE
  PROPULSION SYSTEMS [1]</h3>
  <p>DELLA TORRE AUGUSTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELING OF AUTOMOTIVE
  PROPULSION SYSTEMS [2]</h3>
  <p>PERINI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHEMICAL PROJECTS
  ENGINEERING AND MANAGEMENT</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATHEMATICAL AND
  NUMERICAL METHODS IN ENGINEERING [I.C.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATHEMATICAL AND
  NUMERICAL METHODS IN ENGINEERING [1]</h3>
  <p>CIPRIANI FABIO EUGENIO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL COMMUNICATION I</h3>
  <p>SPALVIERI ARNALDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENTERPRISE ICT
  ARCHITECTURES (MODULE 1)</h3>
  <p>BRAMBILLA MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VIDEO SIGNALS</h3>
  <p>MARCON MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN MANAGEMENT LAB</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING PHYSICS - ENERGY
  DESIGN</h3>
  <p>BLAZQUEZ DE PINEDA MARIA TERESA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>BOERI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNDAMENTALS OF WATERSHED
  HYDROLOGY AND RIVER RESTORATION</h3>
  <p>BECCIU GIANFRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECHANICAL BEHAVIOUR AND
  DURABILITY OF POLYMERS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODULE 2: ANALYSIS AND
  CHARACTERIZATION OF MUSICAL INSTRUMENTS</h3>
  <p>ANTONACCI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODEL IDENTIFICATION AND
  MACHINE LEARNING [2]</h3>
  <p>VERCELLIS CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMICS OF INNOVATION</h3>
  <p>ROSSI CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA AMBIENTALE
  - PROGETTAZIONE ENERGETICA</h3>
  <p>BUZZETTI MICHELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEO FUNDAMENTALS [I.C.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOTECHNICAL DESIGN [1ST
  MOD]</h3>
  <p>JOMMI CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TESTING IN EARTHQUAKE
  ENGINEERING</h3>
  <p>DAL LAGO BRUNO ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA AMBIENTALE
  - PROGETTAZIONE ENERGETICA</h3>
  <p>GALANTE ANNALISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>POLLUTION MEASUREMENT
  [1ST MOD]</h3>
  <p>CANZIANI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>POLLUTION MANAGEMENT [2ND
  MOD]</h3>
  <p>FICARA ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED ENVIRONMENTAL
  SYSTEMS ANALYSIS [1ST MOD]</h3>
  <p>GUARISO GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>MARINI EDOARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA</h3>
  <p>ACUTO FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CLIMATE AND GLOBAL
  CHANGES IN THE AGE OF SUSTAINABLE DEVELOPMENT [1ST MOD]</h3>
  <p>RULLI MARIA CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RILIEVO E MODELLAZIONE
  DIGITALE</h3>
  <p>SALERNO ROSSELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 1</h3>
  <p>HOCHENEGGER ANDREAS</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROPULSIONE AEROSPAZIALE</h3>
  <p>ANDRIANI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGICAL AND
  ENVIRONMENTAL DESIGN</h3>
  <p>ZANELLI ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INDUSTRIAL PLANTS A</h3>
  <p>CALABRESE ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELING TECHNIQUES FOR
  FLUID MACHINES</h3>
  <p>MONTENEGRO GIANLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>OPTIMIZATION</h3>
  <p>AMALDI EDOARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DEI FLUIDI</h3>
  <p>MESSA GIANANDREA VITTORIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROGETTO DI
  RETI LOGICHE)</h3>
  <p>BRANDOLESE CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (SISTEMI DI
  COMUNICAZIONE)</h3>
  <p>MARTELLI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE DEI SISTEMI
  LOGISTICI E PRODUTTIVI</h3>
  <p>CIGOLINI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BASI DI DATI</h3>
  <p>CAMPI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TIROCINIO (IOL)</h3>
  <p>COMAI SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA</h3>
  <p>FARINA MARCELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RETI LOGICHE</h3>
  <p>PALERMO GIANLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (INGEGNERIA
  DEL SOFTWARE)</h3>
  <p>CUGOLA GIANPAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO<span
  style='mso-spacerun:yes'>� </span>DI GENERATORI EOLICI</h3>
  <p>CROCE ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEI
  CALCOLATORI E SISTEMI OPERATIVI</h3>
  <p>PELOSI GERARDO</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=PELOSI GERARDO">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE A+B</h3>
  <p>ZANI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTEGRATED MANUFACTURING
  SYSTEMS</h3>
  <p>MATTA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTING SYSTEMS</h3>
  <p>SALICE FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROPULSIONE
  AEROSPAZIALE)</h3>
  <p>GALFETTI LUCIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 1</h3>
  <p>MAGNAGHI DELFINO PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA II
  (PER ING. BIOMEDICA)</h3>
  <p>IANNELLI ANGELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DELLE
  VIBRAZIONI</h3>
  <p>BELLOLI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STOCHASTIC DYNAMICAL
  MODELS</h3>
  <p>FAGNOLA FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA RAZIONALE</h3>
  <p>CIARLETTA PASQUALE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NEW TECHNOLOGY FRONTIERS
  IN GAS PRODUCTION, TRANSPORTATION AND PROCESSING</h3>
  <p>MOIOLI STEFANIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SICUREZZA ELETTRICA</h3>
  <p>FOIADELLI FEDERICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FLUIDODINAMICA</h3>
  <p>QUADRIO MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBABILIT� E STATISTICA
  PER L'INFORMATICA</h3>
  <p>EPIFANI ILENIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MICROSTRUCTURAL
  CHARACTERISATION OF MATERIALS</h3>
  <p>BIANCO ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED USER INTERFACES</h3>
  <p>GARZOTTO FRANCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMAGE ANALYSIS AND
  COMPUTER VISION</h3>
  <p>CAGLIOTI VINCENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 1</h3>
  <p>CIPRIANI FABIO EUGENIO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DEVELOPMENT ECONOMICS</h3>
  <p>PISCITELLO LUCIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO [INDUSTRIALE]</h3>
  <p>VOTTA EMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA</h3>
  <p>STRADA SILVIA CARLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENGINEERING OF SOLAR
  THERMAL PROCESSES</h3>
  <p>APRILE MARCELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNDAMENTALS OF SIGNALS
  AND TRANSMISSION</h3>
  <p>BOFFI PIERPAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE DEI PROGETTI
  AEROSPAZIALI</h3>
  <p>CALIMANI IVAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ORBITAL MECHANICS</h3>
  <p>COLOMBO CAMILLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SENSORS, MEASUREMENTS AND
  SMART METERING</h3>
  <p>D'ANTONA GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LOGISTICS MANAGEMENT</h3>
  <p>PEREGO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EXPERIMENTAL NUCLEAR
  REACTOR KINETICS</h3>
  <p>LORENZI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERNATIONAL
  DISTRIBUTION</h3>
  <p>MELACINI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOMATHEMATICAL MODELING</h3>
  <p>CIARLETTA PASQUALE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECHANICAL SYSTEM
  DYNAMICS</h3>
  <p>ZASSO ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPLES OF POLYMER
  PROCESSING</h3>
  <p>BRIATICO VANGOSA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINANCIAL ECONOMETRICS</h3>
  <p>MOSCONI ROCCO ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>CORRADI EMILIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>CAJA MICHELE GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE TECNOLOGICA
  AMBIENTALE</h3>
  <p>GASPAROLI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE TECNOLOGICA
  AMBIENTALE</h3>
  <p>ROGORA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILT HERITAGE AND
  SUSTAINABLE DEVELOPMENT</h3>
  <p>MASTROPIRRO ROBERTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN FOR BUILT
  LANDSCAPE</h3>
  <p>TOSELLI IRENE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINANCE AND MANAGEMENT OF
  INFRASTRUCTURE INVESTMENTS</h3>
  <p>PAMMOLLI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GARDEN AND LANDSCAPE
  DESIGN</h3>
  <p>PROTASONI SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNICAL ENVIRONMENTAL
  SYSTEMS</h3>
  <p>NAJAFI BEHZAD</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROJECT MANAGEMENT</h3>
  <p>SALA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MULTI-CRITERIA ANALYSIS
  AND PROJECT APPRAISAL</h3>
  <p>DELL'OVO MARTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA I E
  GEOMETRIA</h3>
  <p>MARCHINI ELSA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONVERSIONE DELL'ENERGIA
  A</h3>
  <p>ASTOLFI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ONDE E OTTICA</h3>
  <p>ZAVELANI ROSSI MARGHERITA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESEARCH LABORATORY AND
  MANUSCRIPT (HPSR)</h3>
  <p>MAINARDI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESEARCH LABORATORY AND
  MANUSCRIPT (HPSR)</h3>
  <p>NATALI DARIO ANDREA NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOINGEGNERIA DEL SISTEMA
  MOTORIO</h3>
  <p>FRIGO CARLO ALBINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SYSTEMS THEORY (NONLINEAR
  DYNAMICS)</h3>
  <p>COLOMBO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRANSPORT PLANNING AND
  ECONOMICS</h3>
  <p>BORGHETTI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MISURE MECCANICHE E
  TERMICHE</h3>
  <p>MOSCHIONI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DELLE
  VIBRAZIONI</h3>
  <p>DI GIALLEONARDO EGIDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA</h3>
  <p>PUNTA CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTRONICA ANALOGICA</h3>
  <p>SAMPIETRO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AUTOMAZIONE DEI PROCESSI
  PRODUTTIVI</h3>
  <p>LEVA ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING SERVICES AND
  BUILDING SERVICES ENERGY MODELLING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED MATERIALS FOR
  STRUCTURAL REHABILITATION</h3>
  <p>POGGI CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TIROCINIO (FIS LP)</h3>
  <p>PINOTTI ERMANNO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SICUREZZA DEL TRASPORTO
  AEREO</h3>
  <p>ODDONE ITALO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MISURE MECCANICHE E
  TERMICHE</h3>
  <p>SAGGIN BORTOLINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN AND IMPLEMENTATION
  OF MOBILE APPLICATIONS</h3>
  <p>BARESI LUCIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI SISTEMI
  MECCANICI</h3>
  <p>COLOMBO CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI ELETTRONICI
  DIGITALI</h3>
  <p>GERACI ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATE OF THE ART REVIEW
  AND PROJECT PROPOSAL (HPSR)</h3>
  <p>NATALI DARIO ANDREA NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INGEGNERIA DEL SOFTWARE</h3>
  <p>SAN PIETRO PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTER AIDED
  MANUFACTURING</h3>
  <p>MORONI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA II (PER
  L'INGEGNERIA ELETTRICA)</h3>
  <p>LANZANI GUGLIELMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI DI COMUNICAZIONE</h3>
  <p>MAGARINI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA
  (PER ING. BIOMEDICA)</h3>
  <p>FORMENTIN SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI CALCOLO DELLE
  STRUTTURE</h3>
  <p>COCCHETTI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI ENERGETICI PER
  INGEGNERIA FISICA</h3>
  <p>GIOSTRI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRENGHTENING AND SEISMIC
  DESIGN</h3>
  <p>DI LUZIO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SMART CITIES</h3>
  <p>CONCILIO GRAZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA DEL TERRITORIO</h3>
  <p>CERISOLA SILVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI RECUPERO E
  CONSERVAZIONE DEGLI EDIFICI</h3>
  <p>SALVINI CHIARA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE DEI PROGETTI
  COMPLESSI B</h3>
  <p>SALA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ARCHITETTURA E COMPOSIZIONE ARCHITETTONICA L</h3>
  <p>RAFFA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIOLOGIA URBANA</h3>
  <p>PARMA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE COSTRUZIONE
  GESTIONE DELLE INFRASTRUTTURE SPORTIVE</h3>
  <p>FAROLDI EMILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ARCHITETTURA E COMPOSIZIONE ARCHITETTONICA M</h3>
  <p>GALBIATI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COSTRUZIONI IN CEMENTO
  ARMATO</h3>
  <p>ACITO MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  PROGETTAZIONE DEGLI ELEMENTI COSTRUTTIVI</h3>
  <p>PAGANI OSCAR LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  PROGETTAZIONE URBANISTICA</h3>
  <p>BORDIN MICAELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  COSTRUZIONI</h3>
  <p>SCOLA MARCELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI INFORMATIVI
  TERRITORIALI</h3>
  <p>MIGLIACCIO FEDERICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEORIE E STORIA DEGLI
  INTERNI</h3>
  <p>FORINO IMMACOLATA CONCEZIONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WORKSHOP FIT</h3>
  <p>MUGNAI BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING MATERIALS</h3>
  <p>BOLZONI FABIO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E METODI DEL
  PROGETTO</h3>
  <p>BURATTI GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DEL DESIGN E
  DELL'ARCHITETTURA</h3>
  <p>CIAGA' GRAZIELLA LEYLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN OF
  ULTRA-LIGHTWEIGHT BUILDING SYSTEM</h3>
  <p>ZANELLI ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN E ARTI</h3>
  <p>PIROLA MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MANUTENZIONE DEGLI
  EDIFICI E FACILITY MANAGEMENT</h3>
  <p>TALAMO CINZIA MARIA LUISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRATEGIA ED ECONOMIA DEL
  PROGETTO</h3>
  <p>MAGISTRETTI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GAME DESIGN</h3>
  <p>BERTOLO MARESA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  2</h3>
  <p>BAGLIONE CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ESTIMO</h3>
  <p>BRISCHETTO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CREATIVE CODING</h3>
  <p>MAURI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DI
  PRODUZIONE DI ARTEFATTI COMUNICATIVI</h3>
  <p>PILLAN MARGHERITA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  CONSERVAZIONE DELL'EDILIZIA STORICA</h3>
  <p>PESENTI SERENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DATA PROCESSING</h3>
  <p>MUSSIO LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PLANNING FOR
  ENVIRONMENTAL RISKS MANAGEMENT</h3>
  <p>PESARO GIULIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INNOVAZIONI NEI MATERIALI
  E NELLE FINITURE</h3>
  <p>CIGADA ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELLE COSTRUZIONI</h3>
  <p>BALESTRERI ISABELLA CARLA RACHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADMINISTRATIVE AND PUBLIC
  PROCUREMENT LAW</h3>
  <p>GIOVANNINI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARTE
  CONTEMPORANEA</h3>
  <p>PONTIGGIA ELENA ENRICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY AND THEORY OF
  CONTEMPORARY ARCHITECTURE</h3>
  <p>SCRIVANO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELLE
  COMUNICAZIONI VISIVE</h3>
  <p>GUNETTI LUCIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURE AND TOWN IN
  CHINA</h3>
  <p>CHEN ZHEN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DEL PRODOTTO
  D'ARREDO</h3>
  <p>MARELLI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHEOASTRONOMIA</h3>
  <p>MAGLI GIULIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA E IMPIANTI</h3>
  <p>DALL'O' GIULIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA E IMPIANTI</h3>
  <p>OLIARO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY OF CONTEMPORARY
  ARCHITECTURE</h3>
  <p>DEAMBROSIS FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DI RILIEVO E
  MODELLAZIONE 3D PER L'ARCHITETTURA</h3>
  <p>FREGONESE LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PORTFOLIO &amp; DIGITAL
  BRANDING</h3>
  <p>TESTA SUSANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WORKSHOP
  INTERDISCIPLINARE</h3>
  <p>DI PRETE BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEMPORARY URBAN SOLUTIONS</h3>
  <p>GALLUZZO LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL STRATEGY</h3>
  <p>SORMANI GIULIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>RAFFAGLIO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI INVERSIONE
  CONCETTUALE</h3>
  <p>MUSANTE GUIDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINAL SYMPOSIUM</h3>
  <p>PICCINNO GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRATEGIA ED ECONOMIA DEL
  PROGETTO</h3>
  <p>DELL'ERA CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DI STRUTTURE IN
  ACCIAIO</h3>
  <p>BERNUZZI CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CICLO DI INCONTRI DI
  &quot;CINEMATERAPIA&quot;</h3>
  <p>GABELLIERI BARGAGLI GIOIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARTE &amp; ARTI DALLA
  STORIA AL DESIGN</h3>
  <p>CORDERA PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MESTIERI D'ARTE E
  BELLEZZA ITALIANA</h3>
  <p>CAVALLI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ITALIAN DESIGN WAY: AN
  INTRODUCTION</h3>
  <p>ASTORI ELISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOTECNICA E TECNICA
  DELLE FONDAZIONI</h3>
  <p>CALVETTI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTS OF ARCHITECTURAL
  TYPOLOGY</h3>
  <p>GRESLERI JACOPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CARATTERI TIPOLOGICI
  DELL'ARCHITETTURA</h3>
  <p>GRITTI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SEMIOTICA DEL PROGETTO</h3>
  <p>ZINGALE SALVATORE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEORIE DELLA
  COMUNICAZIONE</h3>
  <p>ZINGALE SALVATORE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TOPICS IN LANDSCAPE
  ARCHITECTURE HISTORY AND THEORY</h3>
  <p>PICCAROLO GAIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STUDI SULL'UTENTE</h3>
  <p>RIZZO FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  INTEGRAZIONE IMPIANTISTICA</h3>
  <p>FIORATI SERGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IN &amp; OUTDOOR DESIGN:
  COLOURS, MATERIALS, FORNITURE, TREND</h3>
  <p>SEMPRINI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRATEGIC PLANNING AND
  URBAN POLICIES</h3>
  <p>FEDELI VALERIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CARATTERI TIPOLOGICI
  DELL'ARCHITETTURA</h3>
  <p>BOVATI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PUBLIC ECONOMICS</h3>
  <p>MATSAGANIS EMMANUEL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE AND PUBLIC
  SPACE DESIGN</h3>
  <p>KIPAR ANDREAS OTTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA DELLE COSTRUZIONI
  2</h3>
  <p>FERRARA LIBERATO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA E PIANIFICAZIONE
  DEI TRASPORTI</h3>
  <p>BERIA PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E METODI PER LA
  COMUNICAZIONE DI IDENTIT�</h3>
  <p>MAINI MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA E SICUREZZA DEI
  CANTIERI</h3>
  <p>TRANI MARCO LORENZO AGOSTINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY AND THEORY OF
  CONTEMPORARY ARCHITECTURE</h3>
  <p>SKANSI LUKA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN THEORY AND
  PRACTICE</h3>
  <p>RAMPINO LUCIA ROSA ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTRODUCTION TO DESIGN
  RESEARCH</h3>
  <p>MORTATI MARZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONSTRUCTION SUPPLY CHAIN
  MANAGEMENT</h3>
  <p>CIGOLINI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE EDILIZIA
  INTEGRATA</h3>
  <p>RUTA MATTEO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GLOBAL CLASSROOM:
  RESPONSIVE URBAN (BUILT) ENVIRONMENT + BIO-DESIGN</h3>
  <p>IANNACCONE GIULIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS INNOVATION</h3>
  <p>BARONE CAMILLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 1</h3>
  <p>DI CRISTO MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN FOR THE FASHION
  SYSTEM - WORKSHOP</h3>
  <p>ZLATAR AYUSO DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CI GEOGRAFIA ECONOMICA E
  SPAZIO URBANO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INDUSTRIAL ECO-EFFICIENCY</h3>
  <p>CAGNO ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARTIFICIAL NEURAL
  NETWORKS AND DEEP LEARNING</h3>
  <p>MATTEUCCI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI PER L'AUTOMAZIONE
  E LA COMUNICAZIONE INDUSTRIALE</h3>
  <p>MAGGI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITT� E DEL
  TERRITORIO</h3>
  <p>SOLERO ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI PER LE
  COSTRUZIONI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>BOGONI BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PREVENZIONE E GESTIONE
  DEL RISCHIO</h3>
  <p>MENONI SCIRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTEMPORARY CITY: SOCIAL
  CHANGE AND POLICIES</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIAL CHANGE</h3>
  <p>RANCI ORTIGOSA COSTANZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI MATEMATICA A</h3>
  <p>CORREGGI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI MATEMATICA A</h3>
  <p>MAGLI GIULIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURE CONSTRUCTION
  STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN POLICIES</h3>
  <p>COPPOLA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>BRUZZESE MARIA ANTONELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEL
  PAESAGGIO</h3>
  <p>ABREU ANDRADE PAULO DAVID</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN
  STUDIO 3</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEGLI
  INTERNI</h3>
  <p>BRENNA MARIELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  PROGETTAZIONE PER L'EDILIZIA STORICA</h3>
  <p>ALIVERTI LUCIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SAFETY IN AUTOMATION
  SYSTEMS</h3>
  <p>SCATTOLINI RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CODE TRANSFORMATION AND
  OPTIMIZATION</h3>
  <p>AGOSTA GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CATALYTIC PROCESSES FOR
  ENERGY AND ENVIRONMENT</h3>
  <p>NOVA ISABELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTRONICA</h3>
  <p>FAZZI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA DELLE ONDE</h3>
  <p>CONSOLATI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (ANALISI DI
  MISSIONI SPAZIALI)</h3>
  <p>BERNELLI ZAZZERA FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPI DI SISTEMI
  ELETTRICI</h3>
  <p>MERLO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROGETTO
  MULTI-DISCIPLINARE)</h3>
  <p>COLLINA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROGETTO
  MULTI-DISCIPLINARE)</h3>
  <p>CARBONI MICHELE EZIO RUGGERO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ROBOTICS</h3>
  <p>MATTEUCCI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>OPTOELETTRONICA</h3>
  <p>IELMINI DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROGETTO DI
  ALGORITMI E STRUTTURE DATI)</h3>
  <p>BARENGHI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI INFORMATICA</h3>
  <p>BOLCHINI CRISTIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI INFORMATICA</h3>
  <p>MIELE ANTONIO ROSARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LOGICA E ALGEBRA 2</h3>
  <p>FRIGERI ACHILLE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NUMERICAL MODELING AND
  SIMULATION IN ACOUSTICS</h3>
  <p>MAZZIERI ILARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NUMERICAL ANALYSIS</h3>
  <p>SACCO RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ETHICS SEMINAR</h3>
  <p>SCHIAFFONATI VIOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MISURE</h3>
  <p>PESATORI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MEASUREMENTS</h3>
  <p>MANZONI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA MECCANICA E
  QUALITA'</h3>
  <p>ALLEGRI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NANOMATERIALS FOR ENERGY
  CONVERSION</h3>
  <p>LI BASSI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPLESSIT� NEI SISTEMI E
  NELLE RETI</h3>
  <p>PICCARDI CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOTECHNICS FOR ENERGY
  PRODUCTION</h3>
  <p>DELLA VECCHIA GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CALCOLO DELLE PROBABILIT�
  E STATISTICA</h3>
  <p>LADELLI LUCIA MARIA</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=LADELLI LUCIA MARIA">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>MECCANICA DEI CONTINUI E
  DELLE STRUTTURE (PER ING. BIOMEDICA)</h3>
  <p>VENA PASQUALE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  PROGETTAZIONE MECCANICA B</h3>
  <p>CARBONI MICHELE EZIO RUGGERO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LOGICA E ALGEBRA</h3>
  <p>NUCCIO CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HEALTH CARE MANAGEMENT</h3>
  <p>LETTIERI EMANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRANSPORT RISK MANAGEMENT
  IN EMERGENCY PLANNING</h3>
  <p>GANDINI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA</h3>
  <p>PIRODDI LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI ELETTRONICA</h3>
  <p>LANGFELDER GIACOMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACHINE LEARNING</h3>
  <p>MATTEUCCI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHEMISTRY FOR SUSTAINABLE
  POLYMERS</h3>
  <p>GALIMBERTI MAURIZIO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE E ORGANIZZAZIONE
  AZIENDALE</h3>
  <p>RONCHI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TELECOMMUNICATION SYSTEMS</h3>
  <p>LUINI LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMICS AND PERFORMANCE
  MEASUREMENT OF HEALTH CARE SYSTEMS</h3>
  <p>PIGNATARO GIACOMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INDUSTRIAL AUTOMATION,
  COMMUNICATION AND DATA MANAGEMENT</h3>
  <p>CESANA MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PURCHASING AND SUPPLY
  MANAGEMENT</h3>
  <p>HARLAND CHRISTINE MARY</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMICS AND MANAGEMENT
  OF MULTINATIONAL ENTERPRISES</h3>
  <p>HENNART JEAN-FRANCOIS MARIE ANDRE'</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=HENNART JEAN-FRANCOIS MARIE ANDRE'">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>OPTICAL MEASUREMENTS</h3>
  <p>SVELTO CESARE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBABILITA'</h3>
  <p>GREGORATTI MATTEO PROBO SIRO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA II</h3>
  <p>PIEROTTI DARIO GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MEASUREMENT SYSTEMS FOR
  INDUSTRY 4.0</h3>
  <p>FAIFER MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AGRI-FOOD SUPPLY CHAIN
  PERSPECTIVES</h3>
  <p>CICCULLO FEDERICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>REVIEWING, REBUTTAL, AND
  PRESENTATION (HPSR)</h3>
  <p>CESANA MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA MECCANICA E
  QUALITA'</h3>
  <p>MORONI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOFTWARE ENGINEERING 2</h3>
  <p>DI NITTO ELISABETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPLES OF POLYMER
  CHEMISTRY</h3>
  <p>TURRI STEFANO ETTORE ROMANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BREVETTI E PROPRIETA
  INDUSTRIALE</h3>
  <p>FRANZONI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TOPOLOGIA ALGEBRICA
  COMPUTAZIONALE</h3>
  <p>LELLA PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>REINFORCED AND
  PRESTRESSED CONCRETE STRUCTURES</h3>
  <p>MOLA FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RETI DI MONITORAGGIO
  IDROMETEOROLOGICO</h3>
  <p>GHEZZI ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI CHIMICA</h3>
  <p>TERRANEO GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN RENEWAL AND
  PLANNING</h3>
  <p>FOSSA GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLICAZIONI DELL'ENERGIA
  ELETTRICA</h3>
  <p>GRIMACCIA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CALCOLO NUMERICO ED
  ELEMENTI DI ANALISI</h3>
  <p>MICHELETTI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI
  RAPPRESENTAZIONE TECNICA</h3>
  <p>COLOMBO GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>QUANTUM COMMUNICATIONS</h3>
  <p>MARTELLI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE
  (CIV-ICAR/09)</h3>
  <p>DI PRISCO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DEL VEICOLO</h3>
  <p>MELZI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA E ORGANIZZAZIONE
  AZIENDALE</h3>
  <p>FRANZONI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROGETTO DI
  SEGNALI PER LE COMUNICAZIONI)</h3>
  <p>PRATI CLAUDIO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROJECT WORK I</h3>
  <p>CORRADI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLISTICA DEI SISTEMI
  MECCANICI</h3>
  <p>FACCHINETTI ALAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN AND MANAGEMENT OF
  PRODUCTION SYSTEMS</h3>
  <p>TUMINO ANGELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN AND MANAGEMENT OF
  PRODUCTION SYSTEMS</h3>
  <p>CAGNO ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INQUINAMENTO ATMOSFERICO</h3>
  <p>LONATI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI RADIO SATELLITARI
  E TERRESTRI</h3>
  <p>MATRICCIANI EMILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE AZIENDALE E
  MANAGEMENT DELLE PMI</h3>
  <p>ZELLA EZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI
  RAPPRESENTAZIONE TECNICA</h3>
  <p>VIGANO' ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 2 (PER
  L'AUTOMAZIONE)</h3>
  <p>M�SENEDER FRAJRIA PIERLUIGI</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>FONDAMENTI DI ELETTRONICA</h3>
  <p>VANNOZZI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 2 (PER
  L'AUTOMAZIONE)</h3>
  <p>MURATORI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MICROBIOLOGY IN PROCESS
  AND PRODUCT ENGINEERING</h3>
  <p>CAPPA FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHEMICAL PRODUCT DESIGN</h3>
  <p>ROSSI FILIPPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE
  (IMPLEMENTAZIONE CIRCUITALE IN FIELD-PROGRAMMABLE GATE-ARRAY)</h3>
  <p>GERACI ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATHEMATICAL FINANCE II</h3>
  <p>SGARRA CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SEISMIC RISK ASSESSMENT
  FOR POST-EVENT MANAGEMENT</h3>
  <p>BONI MARIA PIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPORTAMENTO
  ORGANIZZATIVO</h3>
  <p>BUGANZA TOMMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COSTRUZIONE DI MACCHINE 1</h3>
  <p>BERNASCONI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPLES OF PROGRAMMING
  LANGUAGES</h3>
  <p>PRADELLA MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI ANALISI DI
  VULNERABILIT�, RISCHIO E RESILIENZA</h3>
  <p>DI MAIO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI ANALITICI E
  NUMERICI PER L'INGEGNERIA</h3>
  <p>VERZINI GIANMARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RADIATION DETECTION AND
  MEASUREMENT</h3>
  <p>CARESANA MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>REVIEWING, REBUTTAL, AND
  PRESENTATION (HPSR)</h3>
  <p>GRASSI FLAVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRONIC SYSTEMS</h3>
  <p>ZAPPA FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI</h3>
  <p>MULAS MARIA GABRIELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATISTICAL LEARNING FOR
  AUTOMATION SYSTEMS</h3>
  <p>FORMENTIN SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISSION REACTOR PHYSICS</h3>
  <p>PADOVANI ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPATIAL PLANNING AND
  INFRASTRUCTURE DESIGN STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPATIAL PLANNING AND
  DESIGN</h3>
  <p>ARCIDIACONO ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DI
  POSIZIONAMENTO E CONTROLLO [MOD. 1]</h3>
  <p>ALBERTELLA ALBERTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MEDICAL INFORMATICS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>USER CENTRED DESIGN
  WORKSHOP</h3>
  <p>SHARP II JOHN FRANKLIN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA ED ECONOMIA DEI
  TRASPORTI</h3>
  <p>MAJA ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IDROLOGIA</h3>
  <p>DE MICHELE CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RIVER HYDRAULICS FOR
  FLOOD RISK EVALUATION</h3>
  <p>RADICE ALESSIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL SYSTEMS DESIGN
  METHODOLOGIES 2</h3>
  <p>PILATO CHRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN &amp;
  MANUFACTURING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MANUFACTURING</h3>
  <p>ANNONI MASSIMILIANO PIETRO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOINGEGNERIA CHIMICA [1]</h3>
  <p>FARE' SILVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROPRIETA' E APPLICAZIONI
  DEI MATERIALI POLIMERICI E COMPOSITI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATHEMATICAL AND PHYSICAL
  MODELING IN ENGINEERING [C.I.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THEORY OF COMMUNICATION</h3>
  <p>KAWAMURA YUNIYA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI
  II-B</h3>
  <p>BOLZON GABRIELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GIS E GEOSTATISTICA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE OTTICHE [2]</h3>
  <p>DE SILVESTRI SANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DEI MATERIALI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>PERABONI CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN
  STUDIO FOR COMPLEX CONSTRUCTION 2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOPHYSICAL IMAGING</h3>
  <p>BERNASCONI GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOINGEGNERIA CHIMICA
  [C.I.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MOLECULAR MODELING IN
  PROCESS ENGINEERING</h3>
  <p>CAVALLOTTI CARLO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SUPPLY CHAIN MANAGEMENT</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED SUPPLY CHAIN
  PLANNING LAB [2]</h3>
  <p>MIRAGLIOTTA GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DIGITALI [1]</h3>
  <p>PLEBANI PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DIGITALI [2]</h3>
  <p>MUSUMECI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA (MODULO 2)</h3>
  <p>CONTINI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS DATA ANALYTICS
  [2]</h3>
  <p>SECCHI PIERCESARE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA E ELEMENTI DI
  INFORMATICA MEDICA [1]</h3>
  <p>ROVERI MANUEL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  SPERIMENTALE B (INTEGR)</h3>
  <p>CELEBRANO MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VIBROACOUSTICS</h3>
  <p>RIPAMONTI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INDUSTRIAL MANAGEMENT
  TOOLBOX (MODELS AND TOOLS)</h3>
  <p>PORTIOLI STAUDACHER ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRATTAMENTO DELLE
  OSSERVAZIONI (MOD. A)</h3>
  <p>ALBERTELLA ALBERTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOINGEGNERIA PER LE
  STRUTTURE E LE INFRASTRUTTURE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AIRPLANE INITIAL SIZING</h3>
  <p>TRAINELLI LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGY RISK
  GOVERNANCE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 2
  [MOD. A]</h3>
  <p>MARCHIONNA CLELIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOELETTROMAGNETISMO E
  STRUMENTAZIONE BIOMEDICA [2]</h3>
  <p>PEDROCCHI ALESSANDRA LAURA GIULIA</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=PEDROCCHI ALESSANDRA LAURA GIULIA">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>GEOFISICA</h3>
  <p>HOJAT AZADEH</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA (MODULO 1)</h3>
  <p>D'ANDREA COSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA</h3>
  <p>RUGGINENTI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA (ECONOMIA DEI
  SISTEMI AGROINDUSTRIALI) [C.I.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  SPERIMENTALE I (INTEGR.)</h3>
  <p>GADERMAIER CHRISTOPH</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SAFETY IN MOBILITY</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PIANIFICAZIONE
  TERRITORIALE [2]</h3>
  <p>FOSSA GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN PLANNING</h3>
  <p>PASQUI GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SITE SURVEY, SETTING OUT
  AND MONITORING</h3>
  <p>SCAIONI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VALORISATION<span
  style='mso-spacerun:yes'>� </span>OF HISTORICAL BUILDINGS</h3>
  <p>DELLA TORRE STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA PER GLI
  INTERNI</h3>
  <p>CRIPPA DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE - SEZ 4</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR DESIGN</h3>
  <p>GEROSA GIULIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CARATTERI COSTRUTTIVI
  DELL'EDILIZIA STORICA</h3>
  <p>CONDOLEO PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>RAVEGNANI MOROSINI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING PHISYCS</h3>
  <p>ADHIKARI RAJENDRA SINGH</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COSTRUZIONI IDRAULICHE E
  MARITTIME E IDROLOGIA</h3>
  <p>MANCINI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEGLI
  INTERNI</h3>
  <p>BORSOTTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CALCOLO NUMERICO</h3>
  <p>PAVANI RAFFAELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COSTRUZIONI MECCANICHE</h3>
  <p>FOLETTI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PERCEPTUAL DIMENSIONS AND
  COMMUNICATION DESIGN</h3>
  <p>MAZZOLANI MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUTURE STUDIES</h3>
  <p>SILVA CORONEL ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE AND INTERIOR -
  SPATIAL DESIGN 1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INNOVATION CULTURES AND
  THEORIES</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>CATTANEO NELLY</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>SCOTTI FRANCESCA CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DEFINIZIONE DEL PROGETTO
  - KIT DI USCITA</h3>
  <p>SCULLICA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE DIGITALE</h3>
  <p>PIGNATEL ALICE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RETAIL DESIGN STUDIO 4</h3>
  <p>IANNILLI VALERIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUTURE STUDIES</h3>
  <p>BOLZAN PATRIZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBLEM SOLVING 1</h3>
  <p>SCHREIBER DANIEL BRUNO JOSEF</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITT� E DEL
  TERRITORIO</h3>
  <p>GAGLIO VINCENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA</h3>
  <p>PETACCIA NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE DIGITALE</h3>
  <p>BANFI FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>DESSI' VALENTINA MADDALENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIOLOGIA DELL'AMBIENTE
  E DEL TERRITORIO</h3>
  <p>SABATINELLI STEFANIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA VISIVA PER IL
  DESIGN</h3>
  <p>FALZONE DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE
  (INT. DI)</h3>
  <p>DE SANTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO DIGITALE</h3>
  <p>LONGHI MONICA PATRIZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DI
  DESIGN</h3>
  <p>VIDARI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ACCESSORY DESIGN STUDIO 3</h3>
  <p>TENUTA LIVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBLEM SETTING 2</h3>
  <p>DE BELLIS GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MANUFACTURABILITY
  ASSESSMENT</h3>
  <p>PERRONE ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITT� E DEL
  TERRITORIO</h3>
  <p>GOLDSTEIN BOLOCAN MATTEO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DI COSTRUZIONI E
  STRUTTURE</h3>
  <p>CATTANEO SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPATIAL AND INTERIOR
  DESIGN</h3>
  <p>PICCINNO GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEVELOPMENT</h3>
  <p>ELLI FEDERICO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>FIOR MARIKA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE TECNOLOGICA
  DELL'ARCHITETTURA</h3>
  <p>CHIERICI PIETRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE DESIGN</h3>
  <p>OLDANI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING TECHNOLOGY</h3>
  <p>DESSI' VALENTINA MADDALENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN SURVEY AND
  REPRESENTATION</h3>
  <p>PIGA BARBARA ESTER ADELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI VISIVI PER IL
  PROGETTO</h3>
  <p>LAVIZZARI FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI VISIVI PER IL
  PROGETTO</h3>
  <p>ZINZONE MARTINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA VISIVA PER IL
  DESIGN</h3>
  <p>HACHEN MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE</h3>
  <p>CALABI DANIELA ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE</h3>
  <p>ACCANTI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE VIRTUALE DEL
  PRODOTTO</h3>
  <p>COLOMBO GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMA DESIGN (SEMINARI
  DI)</h3>
  <p>GENCO DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI RICERCA PER IL
  PROGETTO</h3>
  <p>LUPO ELEONORA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMA DESIGN (SEMINARI
  DI)</h3>
  <p>LUPO ELEONORA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGIES FOR
  CONNECTED PRODUCTS AND SYSTEMS</h3>
  <p>GELSOMINI MIRKO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO EDILE</h3>
  <p>BANFI FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING SERVICES DESIGN</h3>
  <p>ROMANO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INNOVATIVE MATERIALS FOR
  ARCHITECTURE</h3>
  <p>DOTELLI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN IN BIM ENVIRONMENT</h3>
  <p>LUPICA SPAGNOLO SONIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA VISIVA PER IL
  DESIGN</h3>
  <p>FERRARIS SILVIA DEBORAH</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI VISIVI PER IL
  PROGETTO</h3>
  <p>GUNETTI LUCIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE
  (INT. DI)</h3>
  <p>STEINER ANNA FOSCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>TORINO ROMINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURA, PROPRIETA' E
  APPLICAZIONI DEI MATERIALI</h3>
  <p>REDAELLI ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>CHIZZONITI DOMENICO GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO E ARREDO DEGLI
  SPAZI APERTI</h3>
  <p>UGOLINI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GENERAL ECOLOGY</h3>
  <p>MARI LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AUTONOMOUS VEHICLES</h3>
  <p>BRAGHIN FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA VISIVA PER IL
  DESIGN</h3>
  <p>TOLINO UMBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE</h3>
  <p>CANINA MARIA RITA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MERCEOLOGIA PER IL
  KNITWEAR</h3>
  <p>RUBERTELLI MANUELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE PER
  LA MODA</h3>
  <p>VICELLI LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE DEL
  PRODOTTO (INT. DI)</h3>
  <p>BONI ROBERTO DOMENICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LICENSING E BRAND
  EXTENSION</h3>
  <p>TURINETTO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>REPRESENTATION TECHNIQUES</h3>
  <p>BONARIA ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI SISTEMI
  E ELEMENTI COSTRUTTIVI</h3>
  <p>PLEBA PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THEORIES OF RESTORATION</h3>
  <p>PISTIDDA SONIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEORIA E PRATICA DEL
  DESIGN DI PRODOTTO</h3>
  <p>SALA ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE PER
  LA MODA</h3>
  <p>TORINO ROMINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN FOR THE FASHION
  SYSTEM</h3>
  <p>BERTOLA PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CORPORATE ECONOMICS AND
  ORGANISATION</h3>
  <p>VITALE TERESA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>MANGANARO ELVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA</h3>
  <p>GIACOMINI LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>FLORIDI GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE - SEZ 3</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA PER GLI
  INTERNI</h3>
  <p>VERONESE GISELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI</h3>
  <p>BORELLA MAURO AFRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO</h3>
  <p>POSTELL JAMES CHRISTOPHER</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE
  (INT. DI)</h3>
  <p>DE PAOLIS ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE - FASHION DESIGN</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI PROGETTO
  MODA - M2</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>MAROLDI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>DAGLIO LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>SCATTOLINI ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DEFINIZIONE DEL PROGETTO
  - KIT DI USCITA</h3>
  <p>BIAMONTI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLI PER IL DESIGN</h3>
  <p>CHERNICOFF MARIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E TECNICHE DEL
  DISEGNO</h3>
  <p>TRENTIN LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI DI MODELLAZIONE
  DELLO SPAZIO</h3>
  <p>BURATTI GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DEI MATERIALI
  PER LA MODA</h3>
  <p>SURIANO RAFFAELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA AMBIENTALE</h3>
  <p>SICILIANO ANTONIO GINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA AMBIENTALE</h3>
  <p>TAGLIABUE LAVINIA CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI MATEMATICA B</h3>
  <p>BRUNETTO DOMENICO SAVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>DI FRANCO ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEGLI
  INTERNI</h3>
  <p>GASPARINI CHRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA PER GLI
  INTERNI</h3>
  <p>MANFREDI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLI PER IL DESIGN</h3>
  <p>ALESSANDRI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE-SEZ.1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEGLI
  INTERNI</h3>
  <p>COLACI DAVIDE FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI</h3>
  <p>MAZZANTI ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E TECNICHE DEL
  DISEGNO</h3>
  <p>REDAELLI DANILO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DEI MATERIALI
  PER IL DISEGNO INDUSTRIALE</h3>
  <p>DEL CURTO BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FATTIBILIT� DEL PROGETTO</h3>
  <p>POGLIANI OSVALDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI SISTEMI
  E ELEMENTI COSTRUTTIVI</h3>
  <p>GRANATO ADRIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>BOLICI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGICAL DESIGN
  ARCHITECTURE</h3>
  <p>TARTAGLIA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR DESIGN STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>K�R�SZ J�NOS</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI DESIGN
  DEGLI INTERNI SEZ.5</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO (INT.
  DI)</h3>
  <p>STANDOLI CARLO EMILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPLES AND PRACTICES
  OF SERVICE DESIGN FOR DIGITAL TRANSFORMATION</h3>
  <p>MORTATI MARZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPLES AND PRACTICES
  OF SPECULATIVE DESIGN FOR DIGITAL TRANSFORMATION</h3>
  <p>FERRARO VENERE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEL
  PAESAGGIO</h3>
  <p>POLI MATTEO UMBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEGLI
  INTERNI</h3>
  <p>OTTOLINI LOLA ELISABETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR ARCHITECTURE</h3>
  <p>DE CURTIS ANNALISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DEI MATERIALI
  PER IL DISEGNO INDUSTRIALE</h3>
  <p>BERTARELLI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EPHEMERAL/TEMPORARY
  SPACES</h3>
  <p>PICCINNO GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN MANAGEMENT FOR
  PRODUCT SERVICE SYSTEM</h3>
  <p>LANDONI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SERVICE DESIGN</h3>
  <p>BROADBENT STEFANA MAJA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRODUCT SERVICE SYSTEM
  DESIGN STUDIO - SERVICE DESIGN</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGIES AND
  MATERIALS FOR PRODUCT SERVICE SYSTEM</h3>
  <p>EDELMAN JONATHAN ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA URBANISTICA 1</h3>
  <p>ALI' ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITTA' E
  DEL TERRITORIO</h3>
  <p>RABAIOTTI GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEGLI
  INTERNI</h3>
  <p>SCARAMELLINI ENRICO ATTILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>GRITTI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>FACCHINETTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN SOCIOLOGY</h3>
  <p>MAESTRIPIERI LARA IVANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI</h3>
  <p>OTTOMANELLI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE VISIVA</h3>
  <p>BUCCHETTI VALERIA LUISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>ARMONDI SIMONETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITT� E DEL
  TERRITORIO</h3>
  <p>DI VITA STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI PER L'ENERGIA E
  L'AMBIENTE</h3>
  <p>LOZZA GIOVANNI GUSTAVO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED LANDSCAPE DESIGN</h3>
  <p>PESSOA PEREIRA ALVES HENRIQUE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI INDUSTRIALI E
  GESTIONE DELLA PRODUZIONE</h3>
  <p>POZZETTI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CRITICAL THINKING</h3>
  <p>CHIFFI DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHYSICS OF NUCLEAR
  MATERIALS + NUCLEAR TECHNIQUES FOR THE ANALYSIS OF MATERIALS</h3>
  <p>BEGHI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  BIOFLUIDODINAMICA</h3>
  <p>VISMARA RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI STATISTICA
  PER ENERGETICA</h3>
  <p>MENAFOGLIO ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  PROGETTAZIONE MECCANICA A</h3>
  <p>BECATTINI NICCOLO'</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA E ORGANIZZAZIONE
  AZIENDALE</h3>
  <p>BENGO IRENE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>UNSTRUCTURED AND
  STREAMING DATA ENGINEERING</h3>
  <p>DELLA VALLE EMANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRIC SYSTEMS FOR
  MOBILITY</h3>
  <p>FOIADELLI FEDERICA</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=FOIADELLI FEDERICA">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>COSTRUZIONI BIOMECCANICHE</h3>
  <p>PENNATI GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATION THEORY</h3>
  <p>MAGARINI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METALLURGIA E MATERIALI
  NON METALLICI</h3>
  <p>CASTRODEZA ENRIQUE MARIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALS FOR ELECTRONICS</h3>
  <p>MAGAGNIN LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  PROGETTAZIONE MECCANICA A</h3>
  <p>COLOMBO GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI ANALITICI E
  NUMERICI PER L'INGEGNERIA</h3>
  <p>MAZZIERI ILARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA E ORGANIZZAZIONE
  AZIENDALE</h3>
  <p>GIUDICI GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RETI LOGICHE</h3>
  <p>FORNACIARI WILLIAM</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE DELLE
  CONSEGUENZE DI INCIDENTI INDUSTRIALI</h3>
  <p>BUSINI VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MICROBIOLOGIA INDUSTRIALE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHEMISTRY AND MATERIALS
  FOR ENERGY</h3>
  <p>GALLO STAMPINO PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOMATERIALI [2]</h3>
  <p>FARE' SILVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOMATERIALI [1]</h3>
  <p>PETRINI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SICUREZZA DEI REATTORI
  DISCONTINUI</h3>
  <p>COPELLI SABRINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPACE ENGINEERING<span
  style='mso-spacerun:yes'>� </span>DESIGN<span style='mso-spacerun:yes'>�
  </span>SYNTHESIS (MODULO C.I.)</h3>
  <p>LAVAGNA MICH�LE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI CHIMICI</h3>
  <p>STAGNI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHYSICS OF LOW
  DIMENSIONAL SYSTEMS [I.C.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOUND ANALYSIS, SYNTHESIS
  AND PROCESSING MODULE 1: DIGITAL AUDIO ANALYSIS AND PROCESSING</h3>
  <p>SARTI AUGUSTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CORROSION ENGINEERING</h3>
  <p>ORMELLESE MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CEMENTITIOUS AND CERAMIC
  MATERIALS ENGINEERING</h3>
  <p>DIAMANTI MARIA VITTORIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRATEGIC DESIGN</h3>
  <p>MORTATI MARZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSES AND PLANTS IN
  FOOD INDUSTRY</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGICAL AND
  ENVIRONMENTAL DESIGN</h3>
  <p>CLEMENTI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MAGNETISM,
  SUPERCONDUCTIVITY AND SPINTRONICS (C.I.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>POGLIANI LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN STRATEGY</h3>
  <p>DELL'ERA CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VISCOELASTIC BEHAVIOUR OF
  POLYMERS</h3>
  <p>FRASSINE ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>E-HEALTH METHODS</h3>
  <p>FERRANTE SIMONA</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=FERRANTE SIMONA">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>MODULE 1: MODELING OF
  MUSICAL INSTRUMENTS</h3>
  <p>ANTONACCI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MUSIC PRODUCTION
  TECHNOLOGIES</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODEL IDENTIFICATION AND
  MACHINE LEARNING [1]</h3>
  <p>GARATTI SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MUSIC PRODUCTION
  TECHNOLOGIES - MODULE 2</h3>
  <p>CAZZANIGA LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TERMODINAMICA DELLE
  MISCELE + FENOMENI DI TRASPORTO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TERMODINAMICA DELLE
  MISCELE</h3>
  <p>BUSINI VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHYSICS OF ULTRAFAST
  PROCESSES</h3>
  <p>CERULLO GIULIO NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE PER LA
  MEDICINA RIGENERATIVA [1]</h3>
  <p>FIORE GIANFRANCO BENIAMINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MULTIMEDIA SIGNAL
  PROCESSING 1ST MODULE</h3>
  <p>MARCON MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SEISMIC MICROZONATION AND
  URBAN PLANNING (I.C.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EARTHQUAKE ENGINEERING
  ANALYSIS (I.C.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOSPATIAL DATA ANALYSIS
  [I.C.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORY OF EMERGENCY
  PLANNING [3RD MOD.]</h3>
  <p>MOLINARI DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RETROFITTING DESIGN OF
  STRUCTURES SUBJECTED TO SEISMIC LOADING [2ND MOD.]</h3>
  <p>VALENTE MARCO VINCENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IDROGEOLOGIA</h3>
  <p>ALBERTI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE TECNOLOGICA
  E AMBIENTALE</h3>
  <p>GAMBARO MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DATA INTELLIGENCE
  APPLICATIONS</h3>
  <p>GATTI NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RAW MATERIALS AND METALS
  RECYCLING</h3>
  <p>BESTETTI MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO</h3>
  <p>SCAZZOSI LIONELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTER GRAPHICS</h3>
  <p>GRIBAUDO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI ENERGETICI</h3>
  <p>BONALUMI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 2</h3>
  <p>MALUTA ELISABETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROPULSIONE AEROSPAZIALE</h3>
  <p>GALFETTI LUCIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROPULSIONE AEROSPAZIALE</h3>
  <p>PARAVAN CHRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  CLIMATIZZAZIONE AMBIENTALE</h3>
  <p>DE ANTONELLIS STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE AVANZATE DI
  RILIEVO E RAPPRESENTAZIONE</h3>
  <p>BARAZZETTI LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURES AND EARTHQUAKE
  RESISTANCE CRITERIA</h3>
  <p>NOVATI GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI FISICA
  DELLE PARTICELLE</h3>
  <p>PASSONI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA A</h3>
  <p>PELOSI GERARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INSURANCE &amp;
  ECONOMETRICS</h3>
  <p>SGARRA CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURES AND EARTHQUAKE
  RESISTANCE CRITERIA</h3>
  <p>MAZZOLA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>POLYMER REACTION
  ENGINEERING</h3>
  <p>STORTI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 2</h3>
  <p>CITRINI CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LOGICA E ALGEBRA</h3>
  <p>FRIGERI ACHILLE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COSTRUZIONE DI MACCHINE 1</h3>
  <p>LO CONTE ANTONIETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEORIA DEI SISTEMI
  (DINAMICA NON LINEARE)</h3>
  <p>DERCOLE FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPRESA E DECISIONI
  STRATEGICHE</h3>
  <p>AZZONE GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPRESA E DECISIONI
  STRATEGICHE</h3>
  <p>MASELLA CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AEROSPACE STRUCTURES</h3>
  <p>MORANDINI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AEROSPACE TECHNOLOGIES
  AND MATERIALS</h3>
  <p>BETTINI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOENGINEERING OF
  PHYSIOLOGICAL CONTROL SYSTEMS</h3>
  <p>BASELLI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA</h3>
  <p>MIGLIAVACCA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TIROCINIO [LP GES CR]</h3>
  <p>GASTALDI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEI
  CALCOLATORI E SISTEMI OPERATIVI</h3>
  <p>SCIUTO DONATELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VIDEOGAME DESIGN AND
  PROGRAMMING</h3>
  <p>LANZI PIERLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED SURVEY AND
  REPRESENTATION TECHNIQUES</h3>
  <p>ADAMI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOMETRIA E ALGEBRA
  LINEARE</h3>
  <p>CITTERIO MAURIZIO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ALGORITHMS AND PARALLEL
  COMPUTING</h3>
  <p>ARDAGNA DANILO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THESIS PREPARATION:
  HORIZONTAL COMPETENCIES</h3>
  <p>MANZONI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRANSPORT PHENOMENA IN
  PETROLEUM RESERVOIRS</h3>
  <p>GUADAGNINI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNDAMENTALS OF
  EXPERIMENTAL PHYSICS</h3>
  <p>BASSI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA I</h3>
  <p>VERRI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED DESIGN OF
  MACHINE ELEMENTS</h3>
  <p>STAHL KARSTEN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROPULSIONE
  AEROSPAZIALE)</h3>
  <p>ANDRIANI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA (PER
  INGEGNERIA MECCANICA)</h3>
  <p>CASALEGNO ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA E MACCHINE</h3>
  <p>ARANEO LUCIO TIZIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ISTITUZIONI DI INGEGNERIA
  AEROSPAZIALE</h3>
  <p>ZANOTTI ALEX</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA I E
  GEOMETRIA</h3>
  <p>MONGODI SAMUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LOGISTICA INDUSTRIALE</h3>
  <p>PEROTTI SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DEI MATERIALI
  NANOSTRUTTURATI</h3>
  <p>BERTARELLI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FLUIDODINAMICA</h3>
  <p>ABBA' ANTONELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  SPERIMENTAZIONE AEROSPAZIALE</h3>
  <p>RICCI SERGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (INGEGNERIA
  DEL SOFTWARE)</h3>
  <p>MERONI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  COMUNICAZIONI E INTERNET</h3>
  <p>CAPONE ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DEI SOLIDI E
  DELLE STRUTTURE</h3>
  <p>BOCCIARELLI MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 1</h3>
  <p>MALUTA ELISABETTA</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=MALUTA ELISABETTA">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>MECHANICAL SYSTEM
  DYNAMICS</h3>
  <p>PIZZIGONI BRUNO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOMETRIA E ALGEBRA
  LINEARE</h3>
  <p>MONGODI SAMUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MEMS AND MICROSENSORS</h3>
  <p>LANGFELDER GIACOMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NATURAL LANGUAGE
  PROCESSING</h3>
  <p>TEDESCO ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED SURVEY AND
  REPRESENTATION TECHNIQUES</h3>
  <p>CUCA BRANKA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRONICS DESIGN FOR
  BIOMEDICAL INSTRUMENTATION</h3>
  <p>FIORINI CARLO ETTORE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN OF FLUID MACHINES
  FOR CLEAN POWER GENERATION</h3>
  <p>DOSSENA VINCENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED CIRCUIT THEORY</h3>
  <p>STORTI GAJANI GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>POLYMER TECHNOLOGY AND
  SUSTAINABILITY</h3>
  <p>TURRI STEFANO ETTORE ROMANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SUSTAINABLE DEVELOPMENT</h3>
  <p>MEREU RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SIMULATION TECHNIQUES AND
  TOOLS</h3>
  <p>FERRETTI GIANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRESERVATION</h3>
  <p>DEZZI BARDESCHI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROJECT WORK</h3>
  <p>TARABINI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED PARTIAL
  DIFFERENTIAL EQUATIONS</h3>
  <p>GAZZOLA FILIPPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>FERRERI GIOVANNI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>KTENAS NIKOLAOS</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURES AND EARTHQUAKE
  RESISTANCE CRITERIA</h3>
  <p>RACIC VITOMIR</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>BERLINGIERI FABRIZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>HEIDARI AFSHARI ARIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONSERVATION OF HISTORIC
  GARDEN AND<span style='mso-spacerun:yes'>� </span>LANDSCAPES</h3>
  <p>CAZZANI ALBERTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TERRITORIAL RESOURCES
  DESIGN AND MANAGEMENT</h3>
  <p>MOBIGLIA MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINANCIAL MANAGEMENT OF
  REAL ESTATE TRANSACTIONS</h3>
  <p>MORENA MARZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MASTER PLANS STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DATA ACQUISITION SYSTEMS</h3>
  <p>PESATORI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA I E
  GEOMETRIA</h3>
  <p>DELL'ORO FILIPPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN AND ENVIRONMENTAL
  DESIGN STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTRODUZIONE ALLE
  NANOTECNOLOGIE</h3>
  <p>CASARI CARLO SPARTACO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI MATEMATICI PER
  L'INGEGNERIA</h3>
  <p>BRAMANTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESEARCH LABORATORY AND
  MANUSCRIPT (HPSR)</h3>
  <p>CESANA MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DATA DRIVEN CONTROL
  SYSTEM DESIGN</h3>
  <p>GARATTI SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HIGH INTENSITY LASERS FOR
  NUCLEAR AND PHYSICAL APPLICATIONS I+II</h3>
  <p>ZAVELANI ROSSI MARGHERITA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WIRELESS COMMUNICATIONS</h3>
  <p>REGGIANI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PLANNING &amp; OPERATION
  OF DISTRIBUTION GRIDS WITH A HIGH PENETRATION OF RES</h3>
  <p>MERLO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTRODUCTION TO
  NANOSCIENCE</h3>
  <p>BEGHI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NON-LINEAR ANALYSIS OF
  AEROSPACE STRUCTURES</h3>
  <p>VESCOVINI RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATE OF THE ART REVIEW
  AND PROJECT PROPOSAL (HPSR)</h3>
  <p>MAINARDI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACCHINE UTENSILI</h3>
  <p>FOPPIANI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EARTHQUAKE RESISTANT
  DESIGN AND ADVANCED MATERIALS FOR STRUCTURAL REHABILITATION</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA</h3>
  <p>ALIPPI CESARE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPI DI INGEGNERIA
  ELETTRICA</h3>
  <p>ESPOSITO GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA E TECNOLOGIA DEI
  MATERIALI</h3>
  <p>CASTIGLIONI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATE OF THE ART REVIEW
  AND PROJECT PROPOSAL (HPSR)</h3>
  <p>CESANA MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE E PROCESSI
  DELL'INDUSTRIA PETROLIFERA</h3>
  <p>MOSCATELLI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHEMICAL PLANTS II</h3>
  <p>MANENTI FLAVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA FISICA APPLICATA
  AI MATERIALI</h3>
  <p>BESTETTI MASSIMILIANO</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=BESTETTI MASSIMILIANO">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>MECCANICA AEROSPAZIALE</h3>
  <p>DI LIZIA PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA AEROSPAZIALE</h3>
  <p>VALDETTARO LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA
  (PER ING. BIOMEDICA)</h3>
  <p>PIRODDI LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA</h3>
  <p>MIARI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTATIONAL
  BIOMECHANICS LABORATORY</h3>
  <p>GASTALDI DARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI TECNOLOGIE
  ELETTRONICHE E BIOSENSORI</h3>
  <p>CERVERI PIETRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIAL POLICIES</h3>
  <p>SABATINELLI STEFANIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SUSTAINABILITY AND THE
  BUILT ENVIRONMENT</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING ENERGY MODELLING
  AND DESIGN + LAB</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING ENERGY MODELLING
  AND DESIGN</h3>
  <p>DE ANGELIS ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECOLOGY AND AGRONOMIC
  SCIENCE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AGRONOMY AND AGROECOLOGY</h3>
  <p>BOCCHI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EXHIBITION DESIGN</h3>
  <p>BORSOTTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIRITTO URBANISTICO</h3>
  <p>IACOVELLI DANILA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IDRAULICA + COSTRUZIONI
  IDRAULICHE</h3>
  <p>PORTA GIOVANNI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EMERGING TECHNOLOGIES AND
  SOCIETAL CHALLENGES</h3>
  <p>VOLONTE' PAOLO GAETANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO CAD DI
  INFORMATICA GRAFICA</h3>
  <p>VIVIAN AMALIA SIRIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANTROPOLOGIA DELLA
  COMUNICAZIONE</h3>
  <p>SANTANERA GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI GRANDI
  MOSTRE E MUSEALIZZAZIONI</h3>
  <p>CALIARI PIER FEDERICO MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  PROGETTAZIONE DEGLI ELEMENTI COSTRUTTIVI</h3>
  <p>NEZOSI DEBORA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  PROGETTAZIONE DEGLI ELEMENTI COSTRUTTIVI</h3>
  <p>BONOMI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA DEI MATERIALI
  E CHIMICA APPLICATA</h3>
  <p>BOLZONI FABIO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA</h3>
  <p>CASALEGNO MOSE'</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=CASALEGNO MOSE'">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>PROVA FINALE
  (IAT-ICAR/02)</h3>
  <p>DE MICHELE CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA SOCIALE</h3>
  <p>CAPOLONGO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VALUTAZIONE ECONOMICA DEI
  PROGETTI</h3>
  <p>BRUSA GIANFRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  1</h3>
  <p>BALESTRERI ISABELLA CARLA RACHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DEL DESIGN E
  DELL'ARCHITETTURA</h3>
  <p>TONELLI MARIA CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DELLA
  RAPPRESENTAZIONE</h3>
  <p>CASONATO CAMILLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EVALUATION AND MANAGEMENT
  OF REAL ESTATE</h3>
  <p>BAIARDI LIALA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E METODI DEL
  PROGETTO</h3>
  <p>MANDATO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E METODI DEL
  PROGETTO</h3>
  <p>FONTANA MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENERGY EFFICIENT
  BUILDINGS</h3>
  <p>SALVALAI GRAZIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN PLANNING</h3>
  <p>PARIS MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI
  RAPPRESENTAZIONE PARAMETRICA</h3>
  <p>GATTI RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE CAD</h3>
  <p>FERRISE FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI</h3>
  <p>PETRINI LORENZA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI</h3>
  <p>CHESI CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI</h3>
  <p>CARVELLI VALTER</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARTE</h3>
  <p>POLI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEGGERE IL CINEMA: UNA
  NUOVA PERCEZIONE</h3>
  <p>BELLAVITA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TYPOGRAPHIC DESIGN</h3>
  <p>BRACCALONI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTEGRATED MODIFICATION
  METHODOLOGY FOR THE SUSTAINABLE BUILT ENVIRONMENT</h3>
  <p>TADI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN OPTIONEERING</h3>
  <p>VANOSSI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED CONSTRUCTION
  MATERIALS</h3>
  <p>GASTALDI MATTEO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED BUILDING
  ENVELOPE COMPONENTS ENGINEERING</h3>
  <p>RIGONE PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA E IMPIANTI</h3>
  <p>DEL PERO CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA DELLE COSTRUZIONI</h3>
  <p>ROSATI GIANPAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA DELLE COSTRUZIONI</h3>
  <p>MARTINELLI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING INFORMATION
  MODELLING</h3>
  <p>PALEARI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VALUTAZIONE ECONOMICA DEI
  PROGETTI</h3>
  <p>BERTOLINELLI MARCELLINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN ECONOMICS</h3>
  <p>LENZI CAMILLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIC EVALUATION OF
  PROJECTS</h3>
  <p>PANDOLFI ALESSANDRA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PARAMETRIC DESIGN BIM
  ORIENTED THROUGH ARCHICAD+ GRASSHOPPER</h3>
  <p>BOLOGNESI CECILIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA</h3>
  <p>BERTACCO RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PORTFOLIO &amp; NEW
  SCENARIUS</h3>
  <p>PITACCO PIERPAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEORIA DELLA
  PROGETTAZIONE ARCHITETTONICA CONTEMPORANEA</h3>
  <p>BORDOGNA ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL ANALYSIS</h3>
  <p>POGGI CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRADITIONAL AND
  INNOVATIVE MATERIALS FOR BUILDINGS</h3>
  <p>GOIDANICH SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VALUTAZIONE ECONOMICA DEI
  PROGETTI</h3>
  <p>OPPIO ALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEADERSHIP AND INNOVATION</h3>
  <p>BUGANZA TOMMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHILOSOPHY OF SCIENCE AND
  TECHNOLOGY</h3>
  <p>VALENTE GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FOTOGIORNALISMO: NARRARE
  PER IMMAGINI</h3>
  <p>CAPOVILLA MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FASHION MANAGEMENT</h3>
  <p>TURINETTO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTEMPORARY INTERIORS</h3>
  <p>NERI GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LIFE STYLE AND FASHION</h3>
  <p>DELL'ACQUA BELLAVITIS ARTURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>MIGLIORE MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURE FOR SMART
  CITY</h3>
  <p>TADI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ERGONOMICS APPLIED TO THE
  DESIGN OF USABLE WEB PAGES AND APPS</h3>
  <p>DADDA ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TYPE DESIGN</h3>
  <p>COLIZZI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INGEGNERIA ERGOTECNICA
  AVANZATA</h3>
  <p>TRANI MARCO LORENZO AGOSTINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN PER IL SOCIALE.
  CONTRIBUTO PER LA SOCIAL INNOVATION</h3>
  <p>FIGIANI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TESTO FILMICO E MONDI
  NARRATIVI</h3>
  <p>BELLAVITA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INCLUSIVE DESIGN</h3>
  <p>GRILLO ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE PARAMETRICA
  BIM ORIENTED IN AMBIENTE: GRASSHOPER + RHINO</h3>
  <p>BOLOGNESI CECILIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STUDI SULL'UTENTE</h3>
  <p>FIGIANI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ISTITUZIONI DI DIRITTO
  D'AUTORE</h3>
  <p>ROSITANI SUCKERT NICCOL�</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  VALIDAZIONE DEL PROGETTO</h3>
  <p>DE ANGELIS ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING MAINTENANCE
  PROCEEDINGS AND METHODS</h3>
  <p>DEJACO MARIO CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMAGINATION DESIGN</h3>
  <p>SCHIANCHI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IL DIRITTO DEL DESIGN</h3>
  <p>CAZZANIGA SIMONA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CARATTERI TIPOLOGICI
  DELL'ARCHITETTURA</h3>
  <p>ORSINI FILIPPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CARATTERI TIPOLOGICI
  DELL'ARCHITETTURA</h3>
  <p>CHIZZONITI DOMENICO GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA URBANISTICA 2</h3>
  <p>BONFANTINI GIUSEPPE BERTRANDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  INTEGRAZIONE IMPIANTISTICA</h3>
  <p>MAZZUCCHELLI ENRICO SERGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIOLOGIA PER LA MODA</h3>
  <p>VOLONTE' PAOLO GAETANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERNATIONAL WORKSHOP</h3>
  <p>SRINIVASAN SRINI R</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RAPPRESENTAZIONE DELLA
  CITTA' E DEL TERRITORIO</h3>
  <p>ROLANDO ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL HERITAGE
  PRESERVATION: CULTURE AND PRACTICES</h3>
  <p>CORRADINI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIM APPLICATIONS</h3>
  <p>CAMMARATA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL SCALE UP</h3>
  <p>GIOSTRA SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 2</h3>
  <p>DI CRISTO MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI SOCIALE E URBANA</h3>
  <p>COSTA GIULIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGI SKILLS (B)<span
  style='mso-spacerun:yes'>� </span>SPACE REPRESENTATION IN DIGITAL ENVIRONMENT</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LITERATURE REVIEW AND
  SCIENTIFIC WRITING</h3>
  <p>TRAPANI PAOLA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEMPORARY EXHIBITION
  DESIGN</h3>
  <p>MORGANTI LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INGEGNERIA DELLA
  SICUREZZA ANTINCENDIO</h3>
  <p>LURASCHI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NEUROMARKETING E DESIGN</h3>
  <p>GALLUCCI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AEROIDRODINAMICA DELLA
  VELA</h3>
  <p>SCHITO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITT� E DEL
  TERRITORIO</h3>
  <p>LOCARDI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>CATTANI LETIZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>GUIDARINI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>MARINELLI MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ALGEBRA AND MATHEMATICAL
  LOGIC</h3>
  <p>MAURI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL PROJECT
  MANAGEMENT</h3>
  <p>DELLA VALLE EMANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIMENSIONAMENTO STRUTTURE</h3>
  <p>DI LANDRO LUCA ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHYSICS OF NUCLEAR
  MATERIALS + HIGH INTENSITY LASERS FOR NUCLEAR AND PHYSICAL APPLICATIONS II</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>SPINELLI LUIGI MARIO LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERPRETATION OF URBAN
  AND RURAL LANDSCAPES</h3>
  <p>SCAZZOSI LIONELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI</h3>
  <p>COLOMBI PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ALLESTIMENTO</h3>
  <p>CATTIODORO SILVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI MATEMATICA A</h3>
  <p>BATTISTINI EGIDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEGLI
  INTERNI</h3>
  <p>SALVADEO PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEORIE DEL RESTAURO</h3>
  <p>GIAMBRUNO MARIA CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SMART MEASUREMENT
  ARCHITECTURES FOR ELECTRIC SYSTEMS</h3>
  <p>SALICONE SIMONA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACHINE LEARNING</h3>
  <p>LOIACONO DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLIED ELECTROCHEMISTRY</h3>
  <p>MAGAGNIN LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI E SISTEMI
  AEROSPAZIALI</h3>
  <p>ASTORI PAOLO CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MULTIMEDIA INTERNET</h3>
  <p>GIACOMAZZI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE D</h3>
  <p>ZANI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (ANALISI DI
  MISSIONI SPAZIALI)</h3>
  <p>COLOMBO CAMILLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI ENERGETICA</h3>
  <p>SOLERO GIULIO ANGELO GUIDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (INGEGNERIA
  DEL SOFTWARE)</h3>
  <p>BARESI LUCIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERNATIONAL MARKETS AND
  EUROPEAN INSTITUTIONS</h3>
  <p>TAJOLI LUCIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERNAL COMBUSTION
  ENGINES</h3>
  <p>D'ERRICO GIANLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DATA BASES 2</h3>
  <p>COMAI SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI TECNOLOGIE
  AMBIENTALI</h3>
  <p>FICARA ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL FASTENERS</h3>
  <p>MUCIACCIA GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ETICA DIGITALE</h3>
  <p>MAGGIOLINI PIERCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI ANALITICI E
  NUMERICI PER L'INGEGNERIA</h3>
  <p>PEROTTO SIMONA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA E ORGANIZZAZIONE
  AZIENDALE</h3>
  <p>PLATTI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINTECH</h3>
  <p>MARAZZINA DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOELECTRIC SIGNAL
  PROCESSING AND MODELING</h3>
  <p>BARBIERI RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 1</h3>
  <p>CATINO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ONDE ELETTROMAGNETICHE E
  MEZZI TRASMISSIVI</h3>
  <p>MORICHETTI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DEI CONTINUI E
  DELLE STRUTTURE (PER ING. BIOMEDICA)</h3>
  <p>RODRIGUEZ MATAS JOSE FELIX</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MEASUREMENTS</h3>
  <p>TARABINI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI PER L'ENERGIA</h3>
  <p>GARIBOLDI ELISABETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STUDI DI FABBRICAZIONE</h3>
  <p>LUMINI FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MANAGEMENT AND CONTROL
  DESIGN OF FLUID-DYNAMIC PROCESSES</h3>
  <p>MALAVASI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLI STATISTICI E
  PROCESSI STOCASTICI</h3>
  <p>EPIFANI ILENIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPACECRAFT ATTITUDE
  DYNAMICS</h3>
  <p>BERNELLI ZAZZERA FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE E ORGANIZZAZIONE
  AZIENDALE</h3>
  <p>CAGLIANO RAFFAELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PLASMA PHYSICS I+II</h3>
  <p>PASSONI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA (PER ING.
  INFORMATICA)</h3>
  <p>SABBIONI EDOARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA (PER ING.
  INFORMATICA)</h3>
  <p>CAZZULANI GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI</h3>
  <p>FRANGI ATTILIO ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE I</h3>
  <p>DALLERA CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTRODUZIONE ALLA RICERCA
  SPERIMENTALE E PROVA FINALE</h3>
  <p>PINOTTI ERMANNO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METALLURGIA E MATERIALI</h3>
  <p>RIVOLTA BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INDUSTRIAL ORGANIC
  CHEMISTRY</h3>
  <p>LIETTI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADDITIVE MANUFACTURING C</h3>
  <p>COLOSIMO BIANCA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA</h3>
  <p>ROCCO MATTEO VINCENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA</h3>
  <p>RABISSI CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TOOLS FOR RISK MANAGEMENT</h3>
  <p>MENONI SCIRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENGINEERING AND
  COOPERATION FOR DEVELOPMENT</h3>
  <p>COLOMBO EMANUELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMMUNICATION AND
  ARGUMENTATION</h3>
  <p>DI BLAS NICOLETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DEI FLUIDI CON
  FONDAMENTI DI INGEGNERIA CHIMICA</h3>
  <p>FARAVELLI TIZIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TIROCINIO</h3>
  <p>DIAMANTI MARIA VITTORIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOMEDICAL PHYSICAL
  CHEMISTRY</h3>
  <p>MORBIDELLI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL ANALYSIS OF
  AEROSPACE VEHICLES</h3>
  <p>AIROLDI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIM FUNDAMENTALS AND
  APPLICATIONS</h3>
  <p>DE GAETANI CARLO IAPIGE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 2</h3>
  <p>NOTARI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHOTOGRAMMETRY</h3>
  <p>REGUZZONI MIRKO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA DELLO STATO SOLIDO</h3>
  <p>LI BASSI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WIND ENGINEERING</h3>
  <p>ROCCHI DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 2</h3>
  <p>CERUTTI MARIA CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 2</h3>
  <p>GUMENYUK PAVEL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED MICRO AND
  NANOFABRICATION TECHNOLOGIES</h3>
  <p>CANTONI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA 2
  (MACROECONOMIA)</h3>
  <p>TAJOLI LUCIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INDUSTRIAL TECHNOLOGIES</h3>
  <p>MACCHI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PLANNING AND CONTROL OF
  TECHNOLOGY DRIVEN PROJECTS AND COMPANIES</h3>
  <p>BRUN ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI
  RAPPRESENTAZIONE TECNICA</h3>
  <p>BERTOLA PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADDITIVE MANUFACTURING
  FOR SPACE AND AEROSPACE APPLICATIONS</h3>
  <p>GHIDINI TOMMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CALCOLO NUMERICO ED
  ELEMENTI DI ANALISI</h3>
  <p>MANZONI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA E ORGANIZZAZIONE
  AZIENDALE</h3>
  <p>PIVA EVILA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI
  RAPPRESENTAZIONE TECNICA</h3>
  <p>BECATTINI NICCOLO'</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MICRO ELECTRO-MECHANICAL
  SYSTEMS (MEMS)</h3>
  <p>CORIGLIANO ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (CONTROLLO
  DEI PROCESSI)</h3>
  <p>BOLZERN PAOLO GIUSEPPE EMILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (PROGETTO DI
  ALGORITMI E STRUTTURE DATI)</h3>
  <p>ROSSI MATTEO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOLOGIA E FISIOLOGIA</h3>
  <p>ZOCCHI LUCIANO ALDO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EARTH OBSERVATION</h3>
  <p>VENUTI GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DATA MINING AND TEXT
  MINING</h3>
  <p>LANZI PIERLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA II</h3>
  <p>GARRIONE MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INDUSTRIAL AND NUCLEAR
  ELECTRONICS A+B</h3>
  <p>FAZZI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SLOPE STABILITY</h3>
  <p>DI PRISCO CLAUDIO GIULIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GROUNDWATER HYDRAULICS</h3>
  <p>RIVA MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHEMISTRY</h3>
  <p>VISMARA ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESS SYSTEMS
  ENGINEERING</h3>
  <p>MANCA DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA AMBIENTALE</h3>
  <p>SEBASTIANO ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPECIAL CHEMICAL
  TECHNOLOGIES: RENEWABLE RAW MATERIALS</h3>
  <p>CAPELLI LAURA MARIA TERESA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRIC POWER SYSTEMS</h3>
  <p>BERIZZI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTROMAGNETISMO<span
  style='mso-spacerun:yes'>� </span>ED OTTICA</h3>
  <p>LAPORTA PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOMECCANICA</h3>
  <p>MIGLIAVACCA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED MANUFACTURING
  SYSTEMS</h3>
  <p>FASSI IRENE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ASSESSMENT OF HISTORICAL
  BUILDINGS</h3>
  <p>TALIERCIO ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IDRAULICA 2</h3>
  <p>MALAVASI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOPHYSICAL DATA
  PROCESSING</h3>
  <p>ZANZI LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPACE SYSTEMS ENGINEERING
  AND OPERATIONS</h3>
  <p>LAVAGNA MICH�LE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE E MATERIALI
  AEROSPAZIALI</h3>
  <p>DI LANDRO LUCA ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRODUCTION SYSTEMS
  CONTROL</h3>
  <p>FERRARINI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>REVIEWING, REBUTTAL, AND
  PRESENTATION (HPSR)</h3>
  <p>MAINARDI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EMBEDDED SYSTEMS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ALGORITMI E PRINCIPI
  DELL'INFORMATICA (MOD 2 - INFORMATICA 3)</h3>
  <p>MARTINENGHI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IDROLOGIA + COSTRUZIONI
  IDRAULICHE [C.I.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA A</h3>
  <p>VISMARA ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IDRAULICA</h3>
  <p>FRANZETTI SILVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COSTRUZIONI IDRAULICHE</h3>
  <p>BECCIU GIANFRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RADIOATTIVITA' E
  RADIOPROTEZIONE (C.I.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RADIOPROTEZIONE (MODULO
  C.I.)</h3>
  <p>CAMPI FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROPERTIES OF MATERIALS 1</h3>
  <p>CHIESA ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WIRELESS INTERNET</h3>
  <p>REDONDI ALESSANDRO ENRICO CESARE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL SYSTEMS DESIGN
  METHODOLOGIES 1</h3>
  <p>FERRANDI FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EQUAZIONI DIFFERENZIALI
  ORDINARIE E MECCANICA RAZIONALE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA DELL'ARREDO
  ITALIANO</h3>
  <p>FINESSI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ORGANIZZAZIONE DI IMPRESA
  (INTEGR.)</h3>
  <p>GUERINI MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN MANAGEMENT FOR
  FASHION (INT. OF)</h3>
  <p>PINI FABRIZIO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PSSD PROTOTYPING</h3>
  <p>PIREDDA FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI
  ENDOPROTESI [C.I.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATHEMATICAL AND PHYSICAL
  MODELING IN ENGINEERING [1]</h3>
  <p>VIANELLO MAURIZIO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA DELLE COSTRUZIONI
  I</h3>
  <p>BOLZON GABRIELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE METALLURGICHE</h3>
  <p>GRUTTADAURIA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATHEMATICAL AND PHYSICAL
  MODELING IN ENGINEERING [2]</h3>
  <p>TURZI STEFANO SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>OTTICA FISICA [1]</h3>
  <p>DE SILVESTRI SANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOTECNICA I</h3>
  <p>DI PRISCO CLAUDIO GIULIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOTECNICA II-B</h3>
  <p>DI PRISCO CLAUDIO GIULIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DI MONITORAGGIO
  DEL DISSESTO IDROGEOLOGICO (WORKSHOP)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTAZIONE E
  CONTROLLO DI IMPIANTI CHIMICI + AFFIDABILIT� E SICUREZZA NELL'INDUSTRIA DI
  PROCESSO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTAZIONE E
  CONTROLLO DI IMPIANTI CHIMICI</h3>
  <p>MANCA DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ARCHITETTURA PER LA CONSERVAZIONE DELLE COSTRUZIONI COMPLESSE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NEUROENGINEERING [I.C.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENERGY MANAGEMENT LAB [2]</h3>
  <p>FRANZO' SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHIMICA A</h3>
  <p>VOLONTERIO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI STATISTICA
  E SEGNALI BIOMEDICI [1]</h3>
  <p>SANGALLI LAURA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENGINEERING</h3>
  <p>GUAGLIANO MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DIGITALI [2]</h3>
  <p>REDONDI ALESSANDRO ENRICO CESARE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA (MODULO 1)</h3>
  <p>BUSSETTI GIANLORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  SPERIMENTALE I (INTEGR.)</h3>
  <p>FERRAGUT RAFAEL OMAR</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA (MODULO 2)</h3>
  <p>DALLA MORA ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CREATIVE PROGRAMMING AND
  COMPUTING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA (MODULO 2)</h3>
  <p>LUCCHINI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NUMERICAL METHODS FOR
  MOLECULAR SIMULATION</h3>
  <p>DE FALCO CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI POLIMERICI E
  PROGETTAZIONE</h3>
  <p>ANDENA LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA MECCANICA<span
  style='mso-spacerun:yes'>� </span>(INTEGRATO)</h3>
  <p>STRANO MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VIBRATION ANALYSIS</h3>
  <p>ALFI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA I [MOD. 1]</h3>
  <p>CANTONI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INDUSTRIAL MANAGEMENT LAB</h3>
  <p>PORTIOLI STAUDACHER ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI DI PRODUZIONE</h3>
  <p>RASELLA MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DINAMICA E QUALITA' DI
  VOLO</h3>
  <p>CROCE ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIMENSIONAMENTO INIZIALE
  DEL VELIVOLO</h3>
  <p>CROCE ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA (MODULO 1)</h3>
  <p>CRESPI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  SPERIMENTALE B (INTEGR)</h3>
  <p>FRIGERIO JACOPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI POLIMERICI E
  PROGETTAZIONE</h3>
  <p>LEVI MARINELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>QUANTUM OPTICS AND
  QUANTUM TECHNOLOGIES (C.I.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SAFETY IN MOBILITY [1]</h3>
  <p>ZIO ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DELLE MACCHINE E
  MECCANICA APPLICATA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>CRESPI PIETRO GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>ARCIDIACONO ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEGLI
  INTERNI</h3>
  <p>LEVERATTO JACOPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROPRIET� GENERALI DEI
  MATERIALI</h3>
  <p>ALTOMARE LINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA DELLE COSTRUZIONI
  MECCANICHE</h3>
  <p>MICCOLI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE VISIVA</h3>
  <p>PEA MARCO GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PERCEPTUAL DIMENSIONS AND
  COMMUNICATION DESIGN</h3>
  <p>FOGLIENI FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN CULTURE</h3>
  <p>BENCIVENGA MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTEST DESIGN STUDIO
  SECT.3</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HEALTH_BEAUTY NEW
  GENERATION (INT. DI)</h3>
  <p>CAVEZZALI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>CAFFI VITTORIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>CUCA BRANKA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>BOZZUTO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO</h3>
  <p>ROLANDO ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL COMPOSITION</h3>
  <p>MAGNI CAMILLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRANSMEDIA STORYTELLING
  IN FASHION INDUSTRY</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>APPLICAZIONI DEI
  MATERIALI NEL DESIGN</h3>
  <p>LEVI MARINELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN CULTURE</h3>
  <p>DI SABATINO PETER ARTHUR</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING TECHNOLOGY</h3>
  <p>BRUNETTI GIAN LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO</h3>
  <p>PISTIDDA SONIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RILIEVO E CONTROLLO DEL
  COSTRUITO</h3>
  <p>GUZZETTI FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA DELLE COSTRUZIONI
  MECCANICHE</h3>
  <p>FOLETTI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE DIGITALE</h3>
  <p>GAETANI FLORA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI RICERCA PER IL
  PROGETTO</h3>
  <p>BRENNA LUIGI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RETAIL DESIGN STUDIO 2</h3>
  <p>BALDI CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ACCESSORY DESIGN STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METHODS AND TOOLS FOR
  DETAILED DESIGN</h3>
  <p>COLOMBO GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITT� E DEL
  TERRITORIO</h3>
  <p>VESCOVI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>GRANATA ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE IN AMBIENTE
  BIM</h3>
  <p>FANZINI DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED ARCHITECTURAL
  DESIGN</h3>
  <p>GARCIA FUENTES JOSE MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA</h3>
  <p>DE MAGISTRIS ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA</h3>
  <p>SKANSI LUKA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PERCEZIONE
  VISIVA</h3>
  <p>ROTELLI SILVA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE</h3>
  <p>DI PRETE BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI RICERCA PER IL
  PROGETTO</h3>
  <p>MANDATO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI RICERCA PER IL
  PROGETTO</h3>
  <p>DEL CIELLO DARIS DIEGO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ACCESSORY DESIGN STUDIO 4</h3>
  <p>BALLESTRAZZI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DI LAVORAZIONE
  PER L'INNOVAZIONE DEL PRODOTTO INDUSTRIALE (APPLICAZIONI DI)</h3>
  <p>PERRONE ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROBLEM SETTING 2</h3>
  <p>GATTI RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>BERLINGIERI FABRIZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED ARCHITECTURAL
  DESIGN</h3>
  <p>DA CUNHA BASTOS RODRIGUES REBELO CAMILO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE HERITAGE
  CONSERVATION</h3>
  <p>SCAZZOSI LIONELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFRASTRUCTURE AND
  LANDSCAPE DESIGN</h3>
  <p>POLI MATTEO UMBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VISIONING</h3>
  <p>ANSELMI LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MANUFACTURING FOR PRODUCT
  INNOVATION (APPLICATIONS)</h3>
  <p>PETRO' STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>UCCELLI VITTORIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>RODA MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENERGY, CLIMATE AND URBAN
  PLANNING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PERCEZIONE
  VISIVA</h3>
  <p>LAVIZZARI FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE</h3>
  <p>BAULE GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEZIONI DI DESIGN</h3>
  <p>CARATTI ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VISIONING</h3>
  <p>QUAQUARO BENEDETTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMUNICAZIONE VISIVA</h3>
  <p>CARATTI ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENVISIONING OF COMPLEX
  INTERACTIVE SCENARIOS AND CONTEXTS</h3>
  <p>CIANCIA MARIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>SECCHI MARIALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA URBANA</h3>
  <p>VOLTINI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURE OF INTERIORS</h3>
  <p>LEVERATTO JACOPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>SABINI MAURIZIO ROMEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEZIONI DAL PASSATO:
  SUCCESSI E FALLIMENTI NELL'INGEGNERIA CIVILE</h3>
  <p>MALERBA PIER GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PERCEZIONE
  VISIVA</h3>
  <p>LOLLIO VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEZIONI DI DESIGN</h3>
  <p>STEINER ANNA FOSCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DI
  DESIGN</h3>
  <p>PARENTE MARINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESS AND MATERIALS
  INNOVATION IN FASHION DESIGN</h3>
  <p>LOUSTEAU JORIS GILLES, ALAIN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>FERRARI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RAIL VEHICLES</h3>
  <p>MASTINU GIANPIERO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI VISIVI PER IL
  PROGETTO</h3>
  <p>VISCONTI PAMELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NEW INTERIORS 1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPATIAL DESIGN</h3>
  <p>LECCE CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FASHION DESIGN</h3>
  <p>BROWN SANDRA FIONA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN RESEARCH</h3>
  <p>BROWN SANDRA FIONA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN AND VISUAL
  COMMUNICATION</h3>
  <p>CIANCIA MARIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>REPRESENTATION TECHNIQUES</h3>
  <p>VITA GIANLUCA EMILIO ENNIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>TRONCONI OLIVIERO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>CARDANI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>GASPAROLI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>FERRARI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO</h3>
  <p>AUGELLI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEGLI INTERNI</h3>
  <p>BOLLATI ILARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE
  (INT. DI)</h3>
  <p>PADERNO DIEGO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE</h3>
  <p>PALMIERI STEFANIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE</h3>
  <p>FERRARA MARIA RITA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE (CONTENT STRATEGY)</h3>
  <p>RONCHI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN AND CORPORATE
  ECONOMICS</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>PELOSO SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE STRUTTURALE</h3>
  <p>MPAMPATSIKOS VASSILIS</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  IMPIANTISTICA</h3>
  <p>APRILE MARCELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURE OF INTERIORS</h3>
  <p>LEONI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCE INTERACTIVE
  NARRATIVES</h3>
  <p>MARIANI ILARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>CORONELLI DARIO ANGELO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEL
  PAESAGGIO</h3>
  <p>OLDANI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI DISEGNO</h3>
  <p>TRENTIN LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLI PER IL DESIGN</h3>
  <p>COLCUC ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN &amp; ROBOTICS</h3>
  <p>ROMERO MAXIMILIANO ERNESTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>FAVA GIULIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>PALLINI CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>QUAGLINI VIRGINIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>CUENCA ASENSIO ESTEFANIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE PER L'IGIENE
  EDILIZIA E AMBIENTALE</h3>
  <p>BUFFOLI MADDALENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E TECNICHE DEL
  DISEGNO</h3>
  <p>BONI ROBERTO DOMENICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI DISEGNO</h3>
  <p>MALAGUGINI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>COMI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALS OF HISTORICAL
  BUILDINGS</h3>
  <p>GOIDANICH SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E TECNICHE DEL
  DISEGNO</h3>
  <p>TRUPIANO PATRIZIA DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE-SEZ.3</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR YACHT DESIGN</h3>
  <p>RATTI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR YACHT DESIGN</h3>
  <p>BIONDA ARIANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN ALPINO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI COMPONENTI
  E SISTEMI EDILIZI ED IMPIANTISTICI</h3>
  <p>LUCCHINI ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>VISENTIN CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TOPOGRAFIA E CARTOGRAFIA</h3>
  <p>BRUMANA RAFFAELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE - SEZ.1</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LIGHTING DESIGN</h3>
  <p>BERTOLETTI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>BRUNO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>GALLIANI PIERFRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL DESIGN</h3>
  <p>BOFFI GIACOMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA APPLICATA</h3>
  <p>RANA VINCENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE-SEZ.4</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LIGHTING THEORY</h3>
  <p>D'ALESIO CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITTA' E
  DEL TERRITORIO</h3>
  <p>GRANATA ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI ROBOTICA</h3>
  <p>MAGNANI GIANANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGIES FOR FOOD
  CHEMISTRY</h3>
  <p>DICHIARANTE VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BEING A RESEARCHER (HPSR)</h3>
  <p>GHEZZI CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROJECT WORK II</h3>
  <p>BERNASCONI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE</h3>
  <p>CALLONI ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE</h3>
  <p>FOLEGATI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISTRIBUTED SYSTEMS</h3>
  <p>CUGOLA GIANPAOLO</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=CUGOLA GIANPAOLO">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>POWER PRODUCTION FROM
  RENEWABLE ENERGY</h3>
  <p>SILVA PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO CAD</h3>
  <p>VIGANO' ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DI<span
  style='mso-spacerun:yes'>� </span>VELIVOLI</h3>
  <p>TRAINELLI LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRONICS</h3>
  <p>SOTTOCORNOLA SPINELLI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RADIATION DETECTION
  SYSTEMS</h3>
  <p>CASTOLDI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISPOSITIVI PER LA
  TRASMISSIONE DELL'INFORMAZIONE</h3>
  <p>MORICHETTI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI RICERCA
  OPERATIVA D</h3>
  <p>BRUGLIERI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CALCOLO NUMERICO</h3>
  <p>QUARTERONI ALFIO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTATIONAL FINANCE</h3>
  <p>MARAZZINA DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ACCOUNTING, FINANCE &amp;
  CONTROL</h3>
  <p>ARNABOLDI MICHELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENTREPRENEURIAL FINANCE</h3>
  <p>COLOMBO MASSIMO GAETANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METALLURGIA E MATERIALI
  NON METALLICI</h3>
  <p>BARELLA SILVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA B</h3>
  <p>ZACCARIA VITTORIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN PLANNING, TRANSPORT
  AND ECONOMICS</h3>
  <p>COPPOLA PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI CALCOLO
  NUMERICO</h3>
  <p>DE FALCO CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI CHIMICA E
  CHIMICA ORGANICA</h3>
  <p>D'ARRIGO PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI ELETTRONICA</h3>
  <p>ACCONCIA GIULIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SMART MEASUREMENT LAB</h3>
  <p>OTTOBONI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATISTICA</h3>
  <p>GREGORATTI MATTEO PROBO SIRO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTRODUZIONE ALL'ANALISI
  DI MISSIONI SPAZIALI</h3>
  <p>BERNELLI ZAZZERA FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SISTEMI E MACCHINE
  ELETTRICHE</h3>
  <p>BOVO CRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED SIGNALS AND DATA
  PROCESSING IN MEDICINE 2</h3>
  <p>BARBIERI RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI BIOLOGICI
  INDUSTRIALI</h3>
  <p>CRISTIANI CINZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTAMINAZIONE INTERNA</h3>
  <p>PORTA ALESSANDRO ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MICRO AND NANOOPTICS [2]</h3>
  <p>DELLA VALLE GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VALUTAZIONE FUNZIONALE
  [M.S.]</h3>
  <p>GALLI MANUELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VALUTAZIONE FUNZIONALE E
  RIABILITAZIONE MOTORIA [C.I.]</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI E PROCESSI
  CHIMICI (C.I.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODEL IDENTIFICATION AND
  DATA ANALYSIS - 2ND MODULE</h3>
  <p>SAVARESI SERGIO MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INDUSTRIAL CATALYTIC
  PROCESSES</h3>
  <p>VISCONTI CARLO GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOARTIFICIAL SYSTEMS AT
  THE MICRO AND NANO SCALE 1 - BIOE 505</h3>
  <p>RASPONI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CHEMICAL PROJECTS
  MANAGEMENT</h3>
  <p>MICHELI GUIDO JACOPO LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS IN
  TRANSFORMATION: SOCIAL AND SUSTAINABILITY CHALLENGES LAB [2]</h3>
  <p>DE BRUIJN JOHAN ADAM</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTATIONAL FLUID
  DYNAMICS [2]</h3>
  <p>VALDETTARO LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VIRTUAL PROTOTYPING
  METHODS (I.C. MODULE)</h3>
  <p>BORDEGONI MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SMART MANUFACTURING LAB</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SMART MANUFACTURING LAB
  [2]</h3>
  <p>MACCHI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSES OF FOOD
  INDUSTRY</h3>
  <p>CAPELLI LAURA MARIA TERESA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MULTIMEDIA SIGNAL
  PROCESSING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICA DELLA SICUREZZA E
  IGIENE INDUSTRIALE B</h3>
  <p>CAVALLO DOMENICO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING PHYSICS - ENERGY
  DESIGN</h3>
  <p>LUCCHI ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN PLANNING</h3>
  <p>BOERI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CORPORATE FINANCE</h3>
  <p>GIUDICI GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHOTONICS [2]</h3>
  <p>VALENTINI GIANLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNCTIONAL ANALYSIS AND
  NUMERICS FOR PDES</h3>
  <p>FEDELE MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHYSICS AND APPLICATIONS
  OF ULTRAFAST PROCESSES (C.I.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN STRATEGY AND
  ECONOMICS OF INNOVATION</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOLID WASTE MANAGEMENT
  AND TREATMENT</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FENOMENI DI INQUINAMENTO
  ACUSTICO ED ELETTROMAGNETICO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURE RETROFITTING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL ASSESSMENT AND
  RESIDUAL BEARING CAPACITY. FIRE AND BLAST SAFETY [1ST MOD.]</h3>
  <p>FELICETTI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EARTHQUAKE RESISTANT
  DESIGN (I.C.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOLOGICAL ASSESSMENT AND
  MONITORING</h3>
  <p>LONGONI LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IDRAULICA APPLICATA E
  IDROGEOLOGIA</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SLOPE STABILITY AND SOIL
  RESPONSE</h3>
  <p>GALLI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURE DURABILITY:
  MONITORING AND CONTROL</h3>
  <p>REDAELLI ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TESTING AND SURVEYING IN
  EARTHQUAKE ENGINEERING (C.I.)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NATURAL RESOURCES
  MANAGEMENT [1ST MOD]</h3>
  <p>GIULIANI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NATURAL RESOURCES
  MANAGEMENT [2ND MOD]</h3>
  <p>CASTELLETTI ANDREA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SYSTEMS BIOLOGY AND
  NETWORK ANALYSIS</h3>
  <p>PATTINI LINDA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STABILITY OF STRUCTURES</h3>
  <p>CAPSONI ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RILEVAMENTO GEOLOGICO
  TECNICO</h3>
  <p>PAPINI MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 1</h3>
  <p>MURATORI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 2</h3>
  <p>ARIOLI GIANNI</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=ARIOLI GIANNI">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>TECNICHE AVANZATE DI
  RILIEVO E RAPPRESENTAZIONE</h3>
  <p>DE GAETANI CARLO IAPIGE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE II</h3>
  <p>STAGIRA SALVATORE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LOGISTICS MANAGEMENT</h3>
  <p>COLICCHIA CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURES AND EARTHQUAKE
  RESISTANCE CRITERIA</h3>
  <p>MUCIACCIA GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA</h3>
  <p>COLANERI PATRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGICAL AND
  ENVIRONMENTAL DESIGN</h3>
  <p>NASTRI MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURES AND EARTHQUAKE
  RESISTANCE CRITERIA</h3>
  <p>SANJUST CARLO ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRINCIPI DI INGEGNERIA
  ELETTRICA</h3>
  <p>CARMELI MARIA STEFANIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INDUSTRIAL ECOLOGY</h3>
  <p>MARI LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENTIFIC COMMUNICATION
  (HPSR)</h3>
  <p>DI BLAS NICOLETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  TELECOMUNICAZIONI</h3>
  <p>BOFFI PIERPAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE DEI SISTEMI
  LOGISTICI E PRODUTTIVI</h3>
  <p>SIANESI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA</h3>
  <p>PRANDINI MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ALGEBRA LINEARE E
  GEOMETRIA</h3>
  <p>SCHLESINGER ENRICO ETTORE MARCELLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOETHICS</h3>
  <p>SCHIAFFONATI VIOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINANZA MATEMATICA I</h3>
  <p>BARUCCI EMILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (INGEGNERIA
  DEL SOFTWARE)</h3>
  <p>MARGARA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MOTORI PER AEROMOBILI</h3>
  <p>ANDRIANI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI SPERIMENTALI PER
  LA FISICA</h3>
  <p>PINOTTI ERMANNO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED SURVEY AND
  REPRESENTATION TECHNIQUES</h3>
  <p>ORENI DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FOUNDATIONS OF OPERATIONS
  RESEARCH</h3>
  <p>AMALDI EDOARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED SURVEY AND
  REPRESENTATION TECHNIQUES</h3>
  <p>BRUMANA RAFFAELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROJECT MANAGEMENT:
  PRINCIPLES &amp; TOOLS</h3>
  <p>TELLARINI FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI PROCESSI
  CHIMICI</h3>
  <p>MAESTRI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED ORGANIC COATINGS</h3>
  <p>SURIANO RAFFAELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MICROMECHANICS</h3>
  <p>VENA PASQUALE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA APPLICATA ALLE
  MACCHINE</h3>
  <p>ROCCHI DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOMETRIA E ALGEBRA
  LINEARE</h3>
  <p>RODARO EMANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MEDICAL ROBOTICS AND
  TECHNOLOGIES FOR COMPUTER AIDED SURGERY LABORATORY</h3>
  <p>DE MOMI ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA</h3>
  <p>BOLZERN PAOLO GIUSEPPE EMILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AUTOMAZIONE DEI SISTEMI
  ELETTRICI DI TRASPORTO</h3>
  <p>LONGO MICHELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>REGULATION OF ELECTRIC
  POWER SYSTEMS</h3>
  <p>BENINI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LEADERSHIP &amp;
  INNOVATION</h3>
  <p>CORSO MARIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENERGY AND ENVIRONMENTAL
  TECHNOLOGIES FOR BUILDING SYSTEMS</h3>
  <p>NAJAFI BEHZAD</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRODUZIONE DI ENERGIA
  TERMICA E FRIGORIFERA A</h3>
  <p>MOLINAROLI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  ELETTROTECNICA</h3>
  <p>ZICH RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SICUREZZA PASSIVA DELLE
  STRUTTURE</h3>
  <p>ANGHILERI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>AUTOMATION AND CONTROL
  LABORATORY</h3>
  <p>FACCHINETTI ALAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS &amp; INDUSTRIAL
  ECONOMICS</h3>
  <p>GRILLI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>FONTANELLA ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE TECNOLOGICA
  AMBIENTALE</h3>
  <p>BOLICI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE ARCHITECTURE
  AND ENVIRONMENTAL DESIGN</h3>
  <p>STRODE HOPE IVES</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENVIRONMENTAL TECHNOLOGY</h3>
  <p>FABRIS LUCA MARIA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STEEL, TIMBER AND
  REINFORCED CONCRETE STRUCTURES</h3>
  <p>QUAGLIAROLI MANUEL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MISURE ELETTRICHE</h3>
  <p>OTTOBONI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN OF PUBLIC SPACES
  AND INFRASTRUCTURES</h3>
  <p>MOTTI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOINFORMATICA E GENOMICA
  FUNZIONALE</h3>
  <p>PATTINI LINDA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DYNAMICS OF MECHANICAL
  SYSTEMS</h3>
  <p>BRUNI STEFANO</p>
  <p class="yep">Disponibile</p>
  <a href="https://polireplay.it/user.php?query=BRUNI STEFANO">
    <p>Vai al docente</p>
  </a>
 </div>
 <div>
  <h3>ELECTRICAL DRIVES</h3>
  <p>PIEGARI LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHYSICS OF PHOTOVOLTAIC
  PROCESSES</h3>
  <p>LANZANI GUGLIELMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (TECNOLOGIE
  E MATERIALI AEROSPAZIALI)</h3>
  <p>DI LANDRO LUCA ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATE OF THE ART REVIEW
  AND PROJECT PROPOSAL (HPSR)</h3>
  <p>COLANERI PATRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MACCHINE ELETTRICHE E
  AZIONAMENTI</h3>
  <p>MAURI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RECOMMENDER SYSTEMS</h3>
  <p>CREMONESI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI ELETTRONICA</h3>
  <p>CARMINATI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECHANICAL TESTING AT
  SMALL SCALE</h3>
  <p>GHISI ALDO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA
  (PER AEROSPAZIALI)</h3>
  <p>ROCCO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA DEI SOLIDI</h3>
  <p>ARDITO RAFFAELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA
  (PER AEROSPAZIALI)</h3>
  <p>BASCETTA LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI CALCOLO DELLE
  STRUTTURE</h3>
  <p>FOTI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA III</h3>
  <p>ARIOLI GIANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTRODUCTION TO NUCLEAR
  ENGINEERING A+B</h3>
  <p>RICOTTI MARCO ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METHODS AND TOOLS IN
  ENVIRONMENTAL CONTROL</h3>
  <p>MAZZON MANLIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFRASTRUCTURE AND URBAN
  PLANNING</h3>
  <p>NOBRE EDUARDO ALBERTO CUSC�</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN PLANNING AND DESIGN</h3>
  <p>NOBRE EDUARDO ALBERTO CUSC�</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HOUSING AND NEIGHBOURHOOD</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ARCHITETTURA E COMPOSIZIONE ARCHITETTONICA L</h3>
  <p>GHILOTTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI TECNOLOGIA
  STRATIFICATA A SECCO</h3>
  <p>TAGLIABUE PIETRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RECUPERO E CONSERVAZIONE
  DEGLI EDIFICI</h3>
  <p>MALIGHETTI LAURA ELISABETTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ARCHITETTURA TECNICA</h3>
  <p>MASERA GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOTECNICA</h3>
  <p>CALVETTI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ARCHITETTURA E COMPOSIZIONE ARCHITETTONICA M</h3>
  <p>CARONES MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCENOGRAFIA E SPAZI DELLA
  RAPPRESENTAZIONE</h3>
  <p>SALVADEO PIERLUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  COSTRUZIONI</h3>
  <p>IORIO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI RILIEVO
  FOTOGRAMMETRICO DELL'ARCHITETTURA</h3>
  <p>BOLOGNESI CECILIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  1</h3>
  <p>IACOBONE DAMIANO COSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  1</h3>
  <p>TOGLIANI CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>REVERSE MODELING</h3>
  <p>GUIDI GABRIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E METODI DEL
  PROGETTO</h3>
  <p>PALAZZO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DELLA
  RAPPRESENTAZIONE</h3>
  <p>PINTO LIVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E METODI DEL
  PROGETTO</h3>
  <p>MUGNAI BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E METODI DEL
  PROGETTO</h3>
  <p>ROLFINI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E METODI DEL
  PROGETTO</h3>
  <p>VILLA WERNER STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS INNOVATION</h3>
  <p>BELLINI EMILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>BALDUCCI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>PERABONI CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  2</h3>
  <p>IACOBONE DAMIANO COSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ESTIMO</h3>
  <p>CARUSO DI SPACCAFORNO ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ESTIMO</h3>
  <p>POLETTI ANGELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA, ARTE E
  SPAZIO PUBBLICO</h3>
  <p>CERESOLI GIACOMINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATICA</h3>
  <p>MARTINELLI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ILLUMINOTECNICA</h3>
  <p>ROSSI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIC EVALUATION OF
  PROJECT</h3>
  <p>ABASTANTE FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MUSEOLOGY IN CONTEMPORARY
  AGE</h3>
  <p>MARANI PIETRO CESARE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FOTOGRAFIA
  DELL'ARCHITETTURA</h3>
  <p>POZZI PIERO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DEL GIARDINO E DEL
  PAESAGGIO</h3>
  <p>RESMINI MONICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA
  CONTEMPORANEA</h3>
  <p>IACOBONE DAMIANO COSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADATTABILITA' E
  RIGENERAZIONE DEGLI EDIFICI</h3>
  <p>GRECCHI MANUELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA E TEORIE
  DELL'ARCHITETTURA CONTEMPORANEA</h3>
  <p>PISANI DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PORTFOLIO &amp; DIGITAL
  BRANDING</h3>
  <p>TENUTA LIVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEORIA DELLA
  PROGETTAZIONE ARCHITETTONICA CONTEMPORANEA</h3>
  <p>CANCLINI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>THEORY IN CONTEMPORARY
  ARCHITECTURAL DESIGN</h3>
  <p>COVIC IVICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED BUILDING PHYSICS</h3>
  <p>PAGLIANO LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL STEEL DESIGN</h3>
  <p>BERNUZZI CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING PROCESS AND
  INFORMATION MANAGEMENT</h3>
  <p>DANIOTTI BRUNO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>EUROPEAN ENVIRONMENTAL
  AND LANDSCAPE POLITICS AND PROJECTS</h3>
  <p>TZORTZI NERANTZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MANAGEMENT FOR
  ARCHITECTURE</h3>
  <p>ARNABOLDI MICHELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>OBERTI ILARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CURVE E SUPERFICI PER IL
  DESIGN</h3>
  <p>FUMAGALLI ALESSIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL TECHNOLOGY
  FUNDAMENTALS</h3>
  <p>MONTICELLI CAROL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGI SKILLS (L)
  RAPPRESENTAZIONE DELLO SPAZIO IN AMBIENTE DIGITALE</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DI EDIFICI
  COMPLESSI</h3>
  <p>LUCCHINI ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRESERVATION DESIGN IN
  HISTORICAL BUILDINGS</h3>
  <p>MAZZANTINI RENATA CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE REPRESENTATION</h3>
  <p>ROLANDO ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIRITTO DELL'AMBIENTE</h3>
  <p>BASILE FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CARATTERI TIPOLOGICI
  DELL'ARCHITETTURA</h3>
  <p>SERRAZANETTI FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CARATTERI TIPOLOGICI
  DELL'ARCHITETTURA</h3>
  <p>LANDSBERGER MARTINA ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE E
  RAPPRESENTAZIONE URBANISTICA</h3>
  <p>VILLA DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 2</h3>
  <p>DELL'ORO FILIPPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  ARCHITETTURA E COMPOSIZIONE ARCHITETTONICA S</h3>
  <p>TRABATTONI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELLA CITTA' E DEL
  TERRITORIO</h3>
  <p>DE MAGISTRIS ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CARATTERI TIPOLOGICI
  DELL'ARCHITETTURA</h3>
  <p>POGGIOLI PIERO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TEORIE DELL'URBANISTICA E
  DELLA PIANIFICAZIONE DEL TERRITORIO</h3>
  <p>LANZANI ARTURO SERGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI CANTIERE</h3>
  <p>RE CECCONI FULVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGI SKILLS (A)<span
  style='mso-spacerun:yes'>� </span>SPACE REPRESENTATION IN DIGITAL ENVIRONMENT</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONFLICTS MANAGEMENT AND
  RESOLUTION</h3>
  <p>PACCHI CAROLINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTEMPORARY SOCIOLOGY.
  VISION OF THE FUTURE</h3>
  <p>ARLOTTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELL'IDENTIT�</h3>
  <p>ROMANO ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI E DISPOSITIVI
  BIOMEDICI</h3>
  <p>TANZI MARIA CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PATOLOGIA E DIAGNOSTICA
  EDILIZIA</h3>
  <p>FIORI MATTEO PAOLO GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CAMBIAMENTI CLIMATICI E
  RESILIENZA IDROLOGICA URBANA</h3>
  <p>BOCCHIOLA DANIELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI
  SOTTOSISTEMI E COMPONENTI EDILIZI</h3>
  <p>MAININI ANDREA GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FUNDAMENTALS OF
  INTEGRATED BUILDING DESIGN</h3>
  <p>IANNACCONE GIULIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  DELL'INVOLUCRO EDILIZIO</h3>
  <p>RIGONE PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SVILUPPO IMPRENDITORIALE
  E POLITICHE TERRITORIALI</h3>
  <p>SAGUATTI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISTICA</h3>
  <p>MAREGGI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TURBOMACHINERY A</h3>
  <p>GAETANI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHYSICS OF NUCLEAR
  MATERIALS + HIGH INTENSITY LASERS FOR NUCLEAR AND PHYSICAL APPLICATIONS I</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISM</h3>
  <p>PONZINI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STATICA</h3>
  <p>FRANGI ATTILIO ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURE OF INTERIORS</h3>
  <p>VARVARO STEFANIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI MATEMATICA B</h3>
  <p>BATTISTINI EGIDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFRASTRUCTURE DESIGN</h3>
  <p>PUCCI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>BOGONI BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI PER
  L'ARCHITETTURA</h3>
  <p>TONIOLO LUCIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI MICRORETI</h3>
  <p>DI MARCOBERARDINO GIOELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI INGEGNERIA
  NUCLEARE</h3>
  <p>POLA ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA MECCANICA 1</h3>
  <p>PREVITALI BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TERMODINAMICA
  DELL'INGEGNERIA CHIMICA</h3>
  <p>ROTA RENATO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE D</h3>
  <p>GHIRINGHELLI GIACOMO CLAUDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SMART ELECTROMECHANICAL
  DEVICES LAB</h3>
  <p>FOGLIA GIOVANNI MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (ANALISI DI
  MISSIONI SPAZIALI)</h3>
  <p>TOPPUTO FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONI DEI SISTEMI
  PRODUTTIVI E LOGISTICA</h3>
  <p>CASADIO STROZZI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTROL AND ACTUATING
  DEVICES FOR MECHANICAL SYSTEMS</h3>
  <p>CUSIMANO GIANCARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHYSICAL PROPERTIES OF
  MOLECULAR MATERIALS</h3>
  <p>TOMMASINI MATTEO MARIA SAVERIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CAMPI ELETTROMAGNETICI</h3>
  <p>D'AMICO MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRATEGY &amp; MARKETING</h3>
  <p>NOCI GIULIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRATEGY &amp; MARKETING</h3>
  <p>GHEZZI ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIAL INNOVATION</h3>
  <p>CALDERINI MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI INFORMATICA</h3>
  <p>MATERA MARISTELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DATA BASES 2</h3>
  <p>FRATERNALI PIERO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI MECCANICI</h3>
  <p>GRANDE OTTAVIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE ASSISTITA
  DAL CALCOLATORE</h3>
  <p>PETRONE GIANFRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO [INDUSTRIALE]</h3>
  <p>BOSCHETTI FEDERICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA (PER
  AEROSPAZIALI)</h3>
  <p>DISTANTE FAUSTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VALUTAZIONE DI IMPATTO
  AMBIENTALE DELL'INQUINAMENTO</h3>
  <p>AZZELLINO ARIANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI MATEMATICA 2</h3>
  <p>BATTISTINI EGIDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI
  RAPPRESENTAZIONE TECNICA</h3>
  <p>COVARRUBIAS RODRIGUEZ MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GESTIONE DEGLI IMPIANTI
  INDUSTRIALI</h3>
  <p>SALA GUIDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI CHIMICI PER LE
  TECNOLOGIE</h3>
  <p>SANSOTERA MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NUMERICAL ANALYSIS FOR
  PARTIAL DIFFERENTIAL EQUATIONS</h3>
  <p>QUARTERONI ALFIO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DI STRADE</h3>
  <p>TORALDO EMANUELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALS ENGINEERING
  &amp; ENVIRONMENTAL IMPACT</h3>
  <p>MAPELLI CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>KNOWLEDGE ENGINEERING</h3>
  <p>COLOMBETTI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTROMAGNETIC
  COMPATIBILITY B</h3>
  <p>PIGNARI SERGIO AMEDEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STOCHASTIC DIFFERENTIAL
  EQUATIONS</h3>
  <p>CONFORTOLA FULVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INSTRUMENTAL METHODS FOR
  MATERIALS ANALYSIS</h3>
  <p>BERTARELLI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CIRCOLAZIONE E SICUREZZA
  STRADALE</h3>
  <p>STUDER LUCA PASINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI ANALISI E
  MODELLIZZAZIONE DEI PROCESSI + PROVA FINALE</h3>
  <p>LOCATELLI PAOLO ROMOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI CHIMICA E
  CHIMICA ORGANICA</h3>
  <p>RAFFAINI GIUSEPPINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGIES FOR SENSORS
  AND CLINICAL INSTRUMENTATION - BIOE 430</h3>
  <p>ALIVERTI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>WIND, HYDRO AND
  GEOTHERMAL POWER GENERATION</h3>
  <p>SILVA PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI
  COSTRUZIONI BIOMECCANICHE</h3>
  <p>BOSCHETTI FEDERICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LIFE SUPPORT SYSTEMS</h3>
  <p>COSTANTINO MARIA LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RADIOPROTEZIONE</h3>
  <p>CAMPI FABRIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPERIMENTAZIONE NEI
  PROPULSORI</h3>
  <p>SOLERO GIULIO ANGELO GUIDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOCHIP</h3>
  <p>CARMINATI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GESTIONE DEI
  SISTEMI AMBIENTALI</h3>
  <p>CASTELLETTI ANDREA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELECTRIC POWER SYSTEMS II</h3>
  <p>ZANINELLI DARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CRYPTOGRAPHY AND
  ARCHITECTURES FOR COMPUTER SECURITY</h3>
  <p>PELOSI GERARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRANSPORT SYSTEMS AND
  TRANSPORT RISK</h3>
  <p>STUDER LUCA PASINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED COMPUTATIONAL
  MECHANICS</h3>
  <p>NOVATI GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI CHIMICA</h3>
  <p>PUNTA CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI CHIMICA</h3>
  <p>GAMBAROTTI CRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ETHICS FOR
  TRANSPORTATIONS</h3>
  <p>SANTONI De SIO FILIPPO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL REHABILITATION
  AND SEISMIC RETROFITTING</h3>
  <p>CRESPI PIETRO GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENGINEERING SEISMOLOGY</h3>
  <p>PAOLUCCI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOGRAPHIC INFORMATION
  SYSTEMS</h3>
  <p>BROVELLI MARIA ANTONIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RISCHIO IDROGEOLOGICO E
  PROTEZIONE CIVILE</h3>
  <p>MENDUNI GIOVANNI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI PER LE
  STRUTTURE</h3>
  <p>CARSANA MADDALENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTER SCIENCE</h3>
  <p>MAGRI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELETTRONICA DI POTENZA</h3>
  <p>FOGLIA GIOVANNI MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI E GEOMETRIA 2</h3>
  <p>SIANESI FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CALCOLO NUMERICO ED
  ELEMENTI DI ANALISI</h3>
  <p>DEDE' LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI ECONOMIA +
  ESTIMO CIVILE</h3>
  <p>CARUSO DI SPACCAFORNO ANGELO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALS FOR DIRECT
  ENERGY CONVERSION</h3>
  <p>BOZZINI BENEDETTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TURBULENCE: PHYSICS AND
  MODELING</h3>
  <p>QUADRIO MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA E TECNOLOGIA DEI
  MATERIALI</h3>
  <p>DIAMANTI MARIA VITTORIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NANOMEDICINE-PRINCIPLES
  AND APPLICATIONS</h3>
  <p>CELLESI FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOLOGIA E FISIOLOGIA</h3>
  <p>MANFRIDI ALFREDO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ICT FOR CONTROL SYSTEMS
  ENGINEERING</h3>
  <p>CORNO MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENCE AND ENGINEERING
  FOR THE CONSERVATION OF CULTURAL HERITAGE</h3>
  <p>TONIOLO LUCIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (FONDAMENTI
  DI ELETTRONICA)</h3>
  <p>GUAZZONI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTRODUZIONE ALLA FISICA
  DEI QUANTI</h3>
  <p>CICCACCI FRANCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI
  RAPPRESENTAZIONE TECNICA</h3>
  <p>ROSA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENERGY CONVERSION A</h3>
  <p>VALENTI GIANLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRATTAMENTO DELLE ACQUE
  DI APPROVVIGIONAMENTO</h3>
  <p>ANTONELLI MANUELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTATIONAL BIOLOGY OF
  THE HEART</h3>
  <p>RODRIGUEZ MATAS JOSE FELIX</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI MECCANICA
  TEORICA ED APPLICATA</h3>
  <p>DI GIALLEONARDO EGIDIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISTRIBUTED SOFTWARE
  DEVELOPMENT</h3>
  <p>MIRANDOLA RAFFAELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECHANICAL TESTING FOR
  STRUCTURAL ENGINEERING</h3>
  <p>FELICETTI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROVA FINALE (WORKSHOP DI
  PROGETTAZIONE CON SPICE)</h3>
  <p>SAMPIETRO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>VEHICLE DYNAMICS AND
  CONTROL A</h3>
  <p>CHELI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPUTATIONAL MODELING
  FOR MATERIALS ENGINEERING</h3>
  <p>MARIANI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED TOPICS IN
  AUTOMATION AND CONTROL ENGINEERING</h3>
  <p>MIRKIN LEONID</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MECCANICA APPLICATA</h3>
  <p>PENNACCHI PAOLO EMILIO LINO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>REVIEWING, REBUTTAL, AND
  PRESENTATION (HPSR)</h3>
  <p>MARTINENGHI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONCEPTUAL DESIGN OF
  STRUCTURES</h3>
  <p>ROSATI GIANPAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DYNAMICS OF STRUCTURES</h3>
  <p>PEROTTI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATHEMATICAL PHYSICS</h3>
  <p>VIVARELLI MARIA DINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA TECNICA (ING.
  CIVILE)</h3>
  <p>VERCESI PAOLO EMILIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI AUTOMATICA
  (PER INGEGNERIA FISICA)</h3>
  <p>DERCOLE FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>REVIEWING, REBUTTAL, AND
  PRESENTATION (HPSR)</h3>
  <p>NATALI DARIO ANDREA NICOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SICUREZZA ANTINCENDIO</h3>
  <p>FRASSOLDATI ALESSIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI ANALITICI E
  NUMERICI (PARTE DI ANALISI MATEMATICA)</h3>
  <p>CERUTTI MARIA CRISTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALYSIS AND
  INTERPRETATION OF URBAN AND RURAL SOIL AND LANDSCAPES</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA IIA</h3>
  <p>NISOLI MAURO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TOPOGRAFIA</h3>
  <p>BARZAGHI RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RIVESTIMENTI ORGANICI</h3>
  <p>SPONCHIONI MATTIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ALGORITMI E PRINCIPI
  DELL'INFORMATICA (MOD 1 - INFORMATICA TEORICA)</h3>
  <p>PRADELLA MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE I E
  II</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TOOLS AND METHODS FOR UX
  DESIGN AND PROJECT PRESENTATION</h3>
  <p>PILLAN MARGHERITA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FINANCIAL MARKETS AND
  INSTITUTIONS</h3>
  <p>GIORGINO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMMUNICATION DESIGN (AND
  TRASLATION)</h3>
  <p>ZINGALE SALVATORE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CONTEXTUAL INQUIRY AND
  USER STUDIES</h3>
  <p>GALLACE ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROTEZIONE IDRAULICA DEL
  TERRITORIO [MOD. 1]</h3>
  <p>DE MICHELE CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE A</h3>
  <p>BISCARI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTRODUZIONE ALLA SCIENZA
  DEI MATERIALI A</h3>
  <p>GANAZZOLI FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTRODUZIONE ALLA SCIENZA
  DEI MATERIALI B</h3>
  <p>CASTIGLIONI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL AND NEW MEDIA FOR
  FASHION</h3>
  <p>KAWAMURA YUNIYA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN MANAGEMENT FOR
  FASHION</h3>
  <p>PINI FABRIZIO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI POLIMERICI</h3>
  <p>MARANO CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOINGEGNERIA CHIMICA [1]</h3>
  <p>PETRINI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DEI POLIMERI</h3>
  <p>GRIFFINI GIANMARCO ENRICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>BATTISTI FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ENERGY MANAGEMENT LAB [1]</h3>
  <p>LAPKO YULIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI ANALITICI E
  NUMERICI DELLE E.D.P.</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI STATISTICA
  E SEGNALI BIOMEDICI [1]</h3>
  <p>VERRI MAURIZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOPHYSICAL AND RADAR
  IMAGING</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI STATISTICA
  E SEGNALI BIOMEDICI [2]</h3>
  <p>CORINO VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BIOINGEGNERIA CHIMICA [1]</h3>
  <p>BONO NINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DYNAMICS OF SPACE
  STRUCTURES</h3>
  <p>DOZIO LORENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SUPPLY CHAIN PROCESSES</h3>
  <p>ABDELKAFI NIZAR</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOURCING AND PROCUREMENT</h3>
  <p>HARLAND CHRISTINE MARY</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI POLIMERICI A</h3>
  <p>BRIATICO VANGOSA FRANCESCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA E DIRITTO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COSTRUZIONI IDRAULICHE</h3>
  <p>RAIMONDI ANITA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DIGITALI [2]</h3>
  <p>NICOLI MONICA BARBARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE A</h3>
  <p>TORRICELLI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  SPERIMENTALE B (INTEGR)</h3>
  <p>CHRASTINA DANIEL</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA SPERIMENTALE A</h3>
  <p>PUPPIN EZIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CREATIVE PROGRAMMING AND
  COMPUTING - MODULE 2: PLATFORMS, INTERACTION DEVICES AND INTERFACES</h3>
  <p>ZANONI MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IMPIANTI INDUSTRIALI E
  ORGANIZZAZIONE D'IMPRESA (PARTE DI ORGANIZZAZIONE AZIENDALE)</h3>
  <p>DELL'AGOSTINO LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA E ELEMENTI DI
  INFORMATICA MEDICA [2]</h3>
  <p>PAGLIALONGA ALESSIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INFORMATICA E ELEMENTI DI
  INFORMATICA MEDICA [1]</h3>
  <p>SANTAMBROGIO MARCO DOMENICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA I</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COSTRUZIONE DI MACCHINE
  (INTEGRATO)</h3>
  <p>COLOMBO CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE DI IMPIANTI
  ENERGETICI NEGLI EDIFICI</h3>
  <p>PEDRANZINI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHYSICS I</h3>
  <p>BRAMBILLA ALBERTO LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TOPOGRAFIA</h3>
  <p>ALBERTELLA ALBERTA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI FISICA
  SPERIMENTALE B (INTEGR)</h3>
  <p>DAL CONTE STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTRODUZIONE ALLA SCIENZA
  DEI MATERIALI B</h3>
  <p>DEL ZOPPO MIRELLA ELVIRA ANGELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGY RISK
  GOVERNANCE MODULE 1</h3>
  <p>TRUCCO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DI MONITORAGGIO
  DELLE INFRASTRUTTURE (WORKSHOP)</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOMETRIA</h3>
  <p>VIVARELLI MARIA DINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>NANOTECNOLOGIA E
  TRATTAMENTO DELLE SUPERFICI</h3>
  <p>BUZZACCARO STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOTECNICA I</h3>
  <p>STERPI DONATELLA VALERIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FISICA (MODULO 2)</h3>
  <p>POLLI DARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA (ECONOMIA DEI
  SISTEMI AGROINDUSTRIALI) [1]</h3>
  <p>TORRESAN PIETRO ITALO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PIANIFICAZIONE
  TERRITORIALE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  COMUNICAZIONI E INTERNET MODULO 2</h3>
  <p>PAROLARI PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DELLE MACCHINE E
  MECCANICA APPLICATA [2]</h3>
  <p>COLOMBO GIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUSINESS DATA ANALYTICS
  [1]</h3>
  <p>FLORI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALI CEMENTIZI E
  CERAMICI + CORROSIONE E PROTEZIONE DEI MATERIALI</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>ROGORA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURAL MODELLING IN
  ARCHITECTURE AND NUMERICAL COMPUTATION</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DI PRODUZIONE</h3>
  <p>ARMILLOTTA ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE - SEZ.3</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HEALTH_BEAUTY NEW
  GENERATION</h3>
  <p>TURINETTO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SPATIAL DESIGN</h3>
  <p>DE LUCCHI MICHELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN NARRATIVES</h3>
  <p>AURICCHIO VALENTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>BRIGHENTI TOMMASO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PHISICAL GEOGRAPHY AND
  GEOMORPHOLOGY</h3>
  <p>ALBERTI LUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE DEL
  PRODOTTO</h3>
  <p>DE PONTI GIORGIO ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INTERIOR DESIGN</h3>
  <p>FASSI DAVIDE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITT� E DEL
  TERRITORIO</h3>
  <p>PARENTI CLAUDIA IDA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITT� E DEL
  TERRITORIO</h3>
  <p>NIFOSI' CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>DE' ANGELIS PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>GARAVAGLIA ELSA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA VISIVA PER IL
  DESIGN</h3>
  <p>DURONI MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SCIENZA E TECNOLOGIA DEI
  MATERIALI</h3>
  <p>PEDEFERRI MARIAPIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RETAIL DESIGN STUDIO 1</h3>
  <p>BALDI CLAUDIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRODUCT DESIGN</h3>
  <p>MAFFEI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL INTERACTIVE
  TECHNOLOGIES FOR PHYSICAL INTERFACES</h3>
  <p>GELSOMINI MIRKO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL ART (INT.OF)</h3>
  <p>BORDIN VINICIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNICHE DELLA
  RAPPRESENTAZIONE</h3>
  <p>PIGA BARBARA ESTER ADELE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>BOZZOLA MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DELLA CITT� E DEL
  TERRITORIO</h3>
  <p>TANCREDI MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COSTRUZIONI IDRAULICHE E
  MARITTIME E IDROLOGIA</h3>
  <p>ROSSO RENZO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PORTFOLIO PER IL DESIGN
  DEGLI INTERNI</h3>
  <p>VERONESE GISELLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DI
  DESIGN</h3>
  <p>BUTTAFAVA LUCA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>IT LANGUAGES AND SYSTEMS</h3>
  <p>PEREGO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEFINITION</h3>
  <p>ANDREONI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>MAZZOCCHI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN AND REGIONAL
  ANALYSIS</h3>
  <p>FEDELI VALERIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE DIGITALE</h3>
  <p>COCCHIARELLA LUIGI</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISM AND LANDSCAPE</h3>
  <p>SECCHI MARIALESSANDRA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE HYDROLOGY</h3>
  <p>MANCINI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBANISM AND LANDSCAPE</h3>
  <p>BOZZUTO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>TOGNON ALISIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CULTURA VISIVA PER IL
  DESIGN</h3>
  <p>LUPO ELEONORA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SUSTAINABILITY IN DIGITAL
  SOCIETY</h3>
  <p>COSTA FIAMMETTA CARLA ENRICA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>INDUSTRIAL DESIGN</h3>
  <p>DESERTI ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MULTIMEDIA-TECH TIPS</h3>
  <p>MOLTENI FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN OF COMPLEX
  PRODUCTS/SYSTEMS</h3>
  <p>AJOVALASIT MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TOPOGRAFIA E SISTEMI
  INFORMATIVI GIS</h3>
  <p>BARZAGHI RICCARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANA
  SOSTENIBILE</h3>
  <p>MORELLO EUGENIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL COMPOSITION</h3>
  <p>COENEN JOZEF MARIA JOHANNES</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUCTURES</h3>
  <p>ANGJELIU GRIGOR</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN IN BIM ENVIRONMENT</h3>
  <p>NASTRI MASSIMILIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI VISIVI PER IL
  PROGETTO</h3>
  <p>BRENNA LUIGI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PROGETTAZIONE
  (INT. DI)</h3>
  <p>CARATTI ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DI
  DESIGN</h3>
  <p>PENATI ANTONELLA VALERIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMUNICAZIONE VISIVA</h3>
  <p>MENICHELLI SERGIO VIRGINIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TRENDS FORECASTING FOR
  FASHION</h3>
  <p>COLOMBI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA
  2</h3>
  <p>VITILLO PIERGIORGIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>CI METODI E TECNICHE
  DELLA VALUTAZIONE AMBIENTALE</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA
  3</h3>
  <p>GALUZZI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE URBANISTICA
  3</h3>
  <p>COGNETTI DE MARTIIS FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ECONOMIA DELL'AMBIENTE E
  SOSTENIBILITA'</h3>
  <p>AKHAVAN MINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>BUILDING SERVICES DESIGN</h3>
  <p>PITERA' LUCA ALBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI VISIVI PER IL
  PROGETTO</h3>
  <p>FERRARIS SILVIA DEBORAH</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE - KNITWEAR DESIGN</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>METODI DI RICERCA PER IL
  PROGETTO</h3>
  <p>MAURER DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DI
  DESIGN</h3>
  <p>VILLARI BEATRICE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN FOR THE PRODUCT
  SYSTEM</h3>
  <p>DI LIBERTO FABIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DEGLI SPAZI
  APERTI PERIURBANI E NATURALI</h3>
  <p>GALLIZIOLI CATERINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>GRITTI ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGY</h3>
  <p>PAVESI ANGELA SILVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>LUCCHINI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI PERCEZIONE
  VISIVA</h3>
  <p>ZORDAN ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI SINTESI
  FINALE - JEWELLERY AND ACCESSORY DESIGN</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE DEL
  PRODOTTO (INT. DI)</h3>
  <p>BOLZAN PATRIZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MATERIALS AND
  MANUFACTURING FOR DESIGN</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>COLONNA DI PALIANO EDOARDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROCESSI E METODI DEL
  DESIGN</h3>
  <p>FUMAGALLI PAOLO MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN FOR MANUFACTURING</h3>
  <p>ARMILLOTTA ANTONIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FASHION 4.0</h3>
  <p>SAVIAN SARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FASHION DESIGN WORKSHOP</h3>
  <p>TOMASELLO GIULIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA E URBANA</h3>
  <p>SORTINO GIANLUCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>SCAGLIA MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>COMPOSIZIONE
  ARCHITETTONICA</h3>
  <p>CROSET PIERRE-ALAIN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SOCIOLOGY</h3>
  <p>COSTA GIULIANA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>HISTORY OF MODERN ART</h3>
  <p>BUCCI FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI DISEGNO</h3>
  <p>PALTRINIERI DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MERCEOLOGIA PER GLI
  ACCESSORI</h3>
  <p>DELLA NOCE ALAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ADVANCED MANUFACTURING
  FOR SUSTAINABLE FASHION</h3>
  <p>CASCIANI DARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE (IDENTIT� E STRATEGIA)</h3>
  <p>PIREDDA FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>VITALI PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEL
  PAESAGGIO</h3>
  <p>LANZONI CHIARA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE AMBIENTALE</h3>
  <p>GOZZI GIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DISEGNO INDUSTRIALE PER
  LA MODA</h3>
  <p>BOTTI MAURIZIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE VISIVA</h3>
  <p>PIREDDA FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE VISIVA (INT. DI 1)</h3>
  <p>BLEU FULVIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL MODELLING</h3>
  <p>CARULLI MARINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUTTURE</h3>
  <p>ARONICA ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>DI LAURO ANTONIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITETTURA DEGLI
  INTERNI</h3>
  <p>ARNALDI ARNALDO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI MATEMATICA A</h3>
  <p>DE FALCO CARLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI MATEMATICA B</h3>
  <p>TURZI STEFANO SIMONE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>DE MATTEIS ANDREA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTI DI DISEGNO</h3>
  <p>INNOCENTI SERENO MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLAZIONE DIGITALE PER
  IL KNITWEAR (INT.DI)</h3>
  <p>MOTTA MARTINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE STRUTTURALE</h3>
  <p>BRUGGI MATTEO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO</h3>
  <p>ALBANI FRANCESCA LUCIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN PLANNING</h3>
  <p>BUOLI ALICE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>URBAN DESIGN</h3>
  <p>MONTEDORO LAURA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E TECNICHE DEL
  DISEGNO</h3>
  <p>GAETANI FLORA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STRUMENTI E TECNICHE DEL
  DISEGNO</h3>
  <p>MARABOTTO MARIA PAOLA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ANALISI DI FATTIBILITA'
  DEI PROGETTI</h3>
  <p>RECCANELLO MASSIMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIA
  DELL'ARCHITETTURA</h3>
  <p>REGGIANI ROBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECHNOLOGICAL DESIGN
  ARCHITECTURE</h3>
  <p>PAOLETTI INGRID</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI
  PROGETTAZIONE PER L'EDILIZIA STORICA</h3>
  <p>GRISONI MICHELA MARISA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>MODELLI PER IL DESIGN</h3>
  <p>VOLLERO CATIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO</h3>
  <p>VIGNATI ARIANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRODUCT SERVICE SYSTEM
  DESIGN STUDIO - SPATIAL DESIGN</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>META-DESIGN</h3>
  <p>DI SABATINO PETER ARTHUR</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI COMPONENTI
  E SISTEMI EDILIZI ED IMPIANTISTICI</h3>
  <p>SALVALAI GRAZIANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>FONDAMENTI DI SOCIOLOGIA
  URBANA</h3>
  <p>PETRILLO AGOSTINO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTAZIONE
  ARCHITETTONICA</h3>
  <p>BOVATI MARCO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PRESERVATION</h3>
  <p>ALBANI FRANCESCA LUCIA MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ARCHITECTURAL DESIGN</h3>
  <p>MORPURGO GUIDO MARIO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LABORATORIO DI DESIGN
  DEGLI INTERNI SEZ.3</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO (INT.
  DI)</h3>
  <p>PEREGO PAOLO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO</h3>
  <p>ANDREONI GIUSEPPE</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE VISIVA</h3>
  <p>SCANDOLARA GIACOMO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>LANDSCAPE AND
  INTERIOR-SPATIAL DESIGN</h3>
  <p>PICCINNO GIOVANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN THINKING</h3>
  <p>GARCIA FORTUNY MARC</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>SERVICE DESIGN</h3>
  <p>CONFETTI ALESSANDRO CRISTIAN</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN MANAGEMENT FOR
  PRODUCT SERVICE SYSTEM</h3>
  <p>PERONDI ELENA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN THINKING</h3>
  <p>SELLONI DANIELA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>ELEMENTS OF MATHEMATICS A</h3>
  <p>PAGANI STEFANO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>GEOGRAFIA ECONOMICA E
  POLITICA</h3>
  <p>GOLDSTEIN BOLOCAN MATTEO ALESSANDRO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>RESTAURO</h3>
  <p>FERRUGIARI ANNA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>STORIA DELL'ARCHITETTURA</h3>
  <p>DEAMBROSIS FEDERICO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DESIGN DEL PRODOTTO
  (INT.DI)</h3>
  <p>BRUNO DAVIDE MARIA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>TECNOLOGIE DEI MATERIALI
  PER IL DISEGNO INDUSTRIALE</h3>
  <p>ALTOMARE LINA</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE VISIVA</h3>
  <p>TOLINO UMBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>PROGETTO DELLA
  COMUNICAZIONE VISIVA (INT.DI)</h3>
  <p>TOLINO UMBERTO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL DESIGN STUDIO</h3>
  <p>DOCENTE NON DEFINITO</p>
  <p class="not">Non disponibile</p>
 </div>
 <div>
  <h3>DIGITAL DESIGN</h3>
  <p>RIZZO FRANCESCA</p>
  <p class="not">Non disponibile</p>
 </div>
 </div>
</div>

</body>

</html>
