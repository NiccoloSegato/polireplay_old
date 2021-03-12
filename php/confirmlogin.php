<?php
include 'conn.php';

$query = $conn->prepare("SELECT token FROM creators WHERE email = ? AND status = 'confirmed' LIMIT 1;");
$query->bind_param('s', $email);

$email = $_GET['email'];
$token = $_GET['token'];

$query->execute();
$result = $query->get_result();

while ($data = $result->fetch_assoc()) {
    if($data['token'] === $token){
        // ADD COOKIE
        setcookie("PRAC", $token, time()+3600, "/", "polireplay.it", 1);
        setcookie("PRMC", $email, time()+3600, "/", "polireplay.it", 1);
        header('location: https://polireplay.it');
    }
    else {
        echo 'Error';
    }
}

?>