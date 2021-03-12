<?php
require 'conn.php';

$conn -> set_charset("utf8");

$query = $conn->prepare("INSERT INTO lezioni (addedDate, corso, corso2, data, docente, email, esercitazione, insegnamento, link, status, titolo, token, views, tipologia) VALUES (? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$queryCreator = $conn->prepare("SELECT id FROM creators WHERE email = ? AND status = 'confirmed' AND insegnamento = ?;");
$queryLink = $conn->prepare("SELECT id FROM lezioni WHERE link = ? ;");
$query->bind_param('ssssssisssssis', $addedDate, $corso, $corso2, $data, $docente, $email, $esercitazione, $insegnamento, $link, $status, $titolo, $token, $views, $tipologia);
$queryCreator->bind_param('ss', $email, $insegnamento);
$queryLink->bind_param('s', $link);

$addedDate = htmlspecialchars($_GET['addedDate']);
$corso = htmlspecialchars($_GET['corso']);
$corso2 = htmlspecialchars($_GET['corso2']);
$data = htmlspecialchars($_GET['data']);
$docente = htmlspecialchars($_GET['docente']);
$email = htmlspecialchars($_GET['email']);
$esercitazione = $_GET['esercitazione'];
$insegnamento = htmlspecialchars($_GET['insegnamento']);
$status = 'pending';
$link = htmlspecialchars($_GET['link']);
$titolo = htmlspecialchars($_GET['titolo']);
$secret = $data .'!PR!EP3';
$token = hash('sha256', $secret);
$views = 0;
$tipologia = '';

if ((strpos($email, 'polimi.it') !== false) && ((strpos($link, 'https://politecnicomilano.webex.com/') === 0) || (strpos($link, 'https://web.microsoftstream.com/video/') === 0)  || (strpos($link, 'https://polimi365-my.sharepoint.com/') === 0))) {
  $queryCreator->execute();
  $result = $queryCreator->get_result();
  if($result->num_rows > 0){
    // Creator registrato, check link lezione
      $queryLink->execute();
      $result = $queryLink->get_result();
      if($result->num_rows > 0){
          // Il link esiste !!
          header('location: https://polireplay.it/add.html?error=link');
      }
      else {
          // Il link non esiste
          $query->execute();
          $last_id = $query->insert_id;

          if ($last_id === 0) {
              // Errore interno !!
              header('location: https://polireplay.it/add.html?error=internal');
          }
          else {
                header('location: https://us-central1-polimi-lessons.cloudfunctions.net/sendMailSQL?id=' . $last_id . '&dest=' . $email . '&token=' . $token . '&loc=it');
          }
      }
  }
  else {
      // Utente non registrato !!
      header('location: https://polireplay.it/add.html?error=user');
  }
}
else {
    // Errore inserimento dati !!
    header('location: https://polireplay.it/add.html?error=gen');
}

$conn->close();
?>