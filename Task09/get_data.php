<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interntask9";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM mytask9";
$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode(array('data' => $data));

$conn->close();
?>
