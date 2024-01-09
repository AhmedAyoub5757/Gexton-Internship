<?php

include_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['signup_username'];
  $password = $_POST['signup_password'];

  $sql = "SELECT * FROM users WHERE username = '$username'";
  $result = $conn->query($sql);

  if ($result->num_rows == 0) {
    
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
      
      header("Location: index.php?signup_success=1");
    } else {

      header("Location: index.php?signup_error=1");
    }
  } else {
    
    header("Location: index.php?username_taken=1");
  }
}
?>
