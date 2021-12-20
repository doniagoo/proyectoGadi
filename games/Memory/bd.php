<?php 

$data = json_decode(file_get_contents('php://input'), true);

if ($data['action'] == 'selectScores') {
selectScores();
}

if ($data['action'] == 'updateUserGame') {
$user = isset($_SESSION['userActivo']) ? $_SESSION['userActivo'] : "";
$score = $data['score'];

updateUserGame($score, $user);
}

?>