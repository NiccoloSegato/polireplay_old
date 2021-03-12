<?php
include 'conn.php';

$query = $conn->prepare("INSERT INTO creators (cellulare, cognome, corso, date, email, insegnamento, status, name, token)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$query->bind_param('sssssssss', $cellulare, $cognome, $corso, $date, $email, $insegnamento, $status, $name, $token);

$cellulare = htmlspecialchars($_GET["cellulare"]);
$cognome = htmlspecialchars($_GET["cognome"]);
$corso = htmlspecialchars($_GET["corso"]);
$email = htmlspecialchars($_GET["dest"]);
$insegnamento = htmlspecialchars($_GET["insegnamento"]);
$name = htmlspecialchars($_GET["name"]);
$status = 'pending';
$date = htmlspecialchars($_GET["date"]);
$token = '';

$query->execute();
$result = $query->get_result();
$last_id = $query->insert_id;

if ($last_id === 0) {
  echo "Error: " . $conn->error;
} 
else {
  header('location: https://us-central1-polimi-lessons.cloudfunctions.net/sendMailJoinSQL?id=' . $last_id . '&dest=' . $email . '&loc=it');
}

$conn->close();
?>