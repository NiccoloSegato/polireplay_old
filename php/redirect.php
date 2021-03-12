<?php
include 'conn.php';

$query = $conn->prepare("UPDATE lezioni SET views = views + 1 WHERE link = ?;");
$queryHis = $conn->prepare("INSERT INTO cronologia (email, lezione, data) VALUES (?, ?, now())");
$queryCreator = $conn->prepare("SELECT id FROM creators WHERE email = ? AND status = 'confirmed' AND token = ?");
$query->bind_param('s', $url);
$queryHis->bind_param('si', $prmc, $id);
$queryCreator->bind_param('ss', $prmc, $token);

$url = htmlspecialchars($_GET['url']);
$id = htmlspecialchars($_GET['id']);
$prmc = htmlspecialchars($_COOKIE["PRMC"]);
$token = htmlspecialchars($_COOKIE["PRAC"]);

if(isset($_COOKIE["PRMC"]) && isset($_COOKIE["PRAC"])) {
  // Cookie presente, controllare token
  $queryCreator->execute();
  $resultC = $queryCreator->get_result();
    if($resultC->num_rows > 0){
      // Token valido, salvo la view nella cronologia
      $queryHis->execute();
    }
  
}

$query->execute();
$result = $query->get_result();

if ($query->affected_rows === 1) {
  echo '<h1>Sito in manutenzione</h1><p> attendi qualche secondo e ricarica la pagina</p>';
  echo '\nCi scusiamo per il disagio\n';
  header('location: ' . $url);
} else {
  echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();
?>