<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interntask3";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $role = $_POST["role"];

 
  $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
  if (mysqli_query($conn, $sql)) {
    echo "Registration successful!";

   
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
 
}

mysqli_close($conn);
