<?php
include "config.php";

$user = $_POST['user'];
$message = $_POST['message'];

$sql = "INSERT INTO messages (user, message) VALUES ('$user', '$message')";
$conn->query($sql);

$conn->close();
?>
