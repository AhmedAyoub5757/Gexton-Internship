<?php

include_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['login_username'];
  $password = $_POST['login_password'];

  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {

    session_start();
    $_SESSION['username'] = $username;
    header("Location: test.php");
  } else {
    
    header("Location: index.php?login_error=1");
  }
}
?>
