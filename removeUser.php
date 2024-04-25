<?php

include_once 'connect.php';

$user_name = $_POST['name'];

$stmt = $conn->prepare("UPDATE users SET active = 0 WHERE user_name = ?;"); 
$stmt->execute([$user_name]);