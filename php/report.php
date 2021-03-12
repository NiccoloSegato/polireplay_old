<?php
include 'conn.php';

$query = $conn->prepare("INSERT INTO segnalazioni (lezione, messaggio, email) VALUES (?, ?, ?)");
$query->bind_param('iss', $id, $messaggio, $email);

$messaggio = htmlspecialchars($_GET["messaggio"]);
$email = htmlspecialchars($_GET["email"]);
$id = $_GET["id"];

$query->execute();
$result = $query->get_result();
$last_id = $query->insert_id;

if ($last_id === 0) {
  echo "Error: " . $conn->error;
} 
else {
  header('location: https://polireplay.it/successreport.html');
}

$conn->close();
?>