<?php
// save_result.php
$data = json_decode(file_get_contents("php://input"), true);
$name = $data['name'];
$score = $data['score'];

$conn = new mysqli("localhost", "root", "", "quiz_db");
$conn->query("INSERT INTO results (name, score) VALUES ('$name', '$score')");
$conn->close();
?>

