<?php
session_start();
if (!isset($_SESSION["username"]) || !isset($_SESSION["role"]) || $_SESSION["role"] != "admin") {
  header("Location: login.php");
  exit();
}

// Fetch admin information from the database based on the logged-in username

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interntask3";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Fetch admin information
$username = $_SESSION["username"];
$sql = "SELECT * FROM admins WHERE username='$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
  $users = mysqli_fetch_assoc($result);
}

// Fetch data from the database
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body {
      padding-top: 60px;
    }
  </style>
</head>

<body style="background-color: #555555; color:white">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <span class="navbar-text mr-3"><?php echo $users["username"] ?? '';  ?></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container my-5">

    <table id="data-table" class="table table-striped table-bordered" style="color:white">
      <thead>
        <tr>
          <th>ID</th>
          <th>UserName</th>
          <th>Password </th>
          <th>Role </th>

        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $row) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['role']; ?></td>

          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#data-table').DataTable();
    });
  </script>
</body>

</html>