
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


  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='$role'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) == 1) {
    // echo "wrong";

    // echo "<center><h1>Wrong Entry</h1></center";
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION["role"] = $role;

    // Redirect user based on role
    if ($role == "user") {
      header("Location: user_dashboard.php");
    } elseif ($role == "admin") {
      header("Location: admin_dashboard.php");
    }
  } else {
    echo "Invalid login credentials. This User Does Not Exist In Our Database.";
    // header("Location: fail.php");
    //   echo '<div class="alert alert-danger" role="alert">
    //   A simple danger alert—check it out!
    // </div>';



    exit();
  }
}

mysqli_close($conn);

?>


