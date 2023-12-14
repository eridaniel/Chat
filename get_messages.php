<?php
include "config.php";

$sql = "SELECT * FROM messages ORDER BY created_at DESC LIMIT 10";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo '<p><strong>' . $row['user'] . ':</strong> ' . $row['message'] . '</p>';
}

$conn->close();
?>
