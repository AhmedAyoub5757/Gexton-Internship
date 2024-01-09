<?php
session_start();
if (!isset($_SESSION["username"]) || !isset($_SESSION["role"]) || $_SESSION["role"] != "user") {
  header("Location: login.php");
  exit();
}


// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interntask3";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Fetch user information
$username = $_SESSION["username"];
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
  $user = mysqli_fetch_assoc($result);
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MyNav</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <span class="nav-link">Welcome, <?php echo $user["username"]; ?></span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <div class="container">

    <marquee behavior="" direction="left">
      <h1> will add more details soon</h1>
    </marquee>
  </div>

  <script src="js/bootstrap.min.js"></script>
</body>

</html>