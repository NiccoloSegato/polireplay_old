<?php
include 'conn.php';

$query = $conn->prepare("UPDATE lezioni SET status = 'confirmed' WHERE id = ?;");
$queryTeams = $conn->prepare("UPDATE lezioni SET status = 'approving' WHERE id = ?;");
$queryLink = $conn->prepare("SELECT link FROM lezioni WHERE id = ? ;");
$query->bind_param('i', $id);
$queryTeams->bind_param('i', $id);
$queryLink->bind_param('i', $id);

$id = $_GET['id'];

$queryLink->execute();
$result = $queryLink->get_result();
if($result->num_rows > 0){
  // Il link esiste !!
  while ($data = $result->fetch_assoc()) {
    if(strpos($data['link'], 'https://web.microsoftstream.com/video/') !== false){
      // Teams Lesson
      $queryTeams->execute();
      $result = $queryTeams->get_result();

      if ($queryTeams->affected_rows === 1) {
        header('location: https://polireplay.it/success.html');
      } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
      }
    }
    else {
      // Webex or SharePoint Lesson
      $query->execute();
      $result = $query->get_result();

      if ($query->affected_rows === 1) {
        header('location: https://polireplay.it/success.html');
      } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
      }
    }
  }
}
else {
  echo '<h1>Server error!</h1>';
  echo '<p>Contact us at info@polireplay.it reporting error 19. Sorry for the inconvenient, your lesson will not be added</p>';
}

$conn->close();
?>