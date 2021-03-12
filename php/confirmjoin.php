<?php
include 'conn.php';

$id = $conn->real_escape_string($_GET['id']);


$sql = "UPDATE creators SET status = 'confirmed' WHERE id = '$id';";

if ($conn->query($sql) === TRUE) {
  header('location: https://polireplay.it');
} else {
  echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();
?>