<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interntask9";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];

$sql = "INSERT INTO mytask9 (name, email, phone, address, city) VALUES ('$name', '$email', '$phone', '$address', '$city')";
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
