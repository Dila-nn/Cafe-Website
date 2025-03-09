<?php
include 'db_connection.php';

$result = $mysqli->query("SELECT name, comment, created_at FROM addcomment ORDER BY created_at DESC");

$comments = [];
while ($row = $result->fetch_assoc()) {
    $comments[] = $row;
}
echo json_encode($comments);

$mysqli->close();
?>
