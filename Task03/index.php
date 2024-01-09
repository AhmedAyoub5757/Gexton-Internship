<!DOCTYPE html>
<html>

<head>
  <title>User Login and Registration</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    document.getElementById('registerForm').addEventListener('submit', function(event) {

      // Prevent form submission if validation fails
      event.preventDefault();
    });


    document.getElementById('loginForm').addEventListener('submit', function(event) {

      event.preventDefault();
    });
  </script>

</head>
<!-- <?php include "success.php"; ?> -->

<body style="background-color: #808080; color: black;">
  <div class="container my-5">
    <center>
      <h2 class="my-4">User Registration</h2>
    </center>
    <form id="registerForm" method="post" action="register.php">
      <!-- Registration form fields -->
      <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Username" required>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
      </div>
      <div class="form-group">
        <select class="form-control" name="role">
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>

    <center>
      <h2 class="my-4">User Login</h2>
    </center>
    <form id="loginForm" method="post" action="login.php">
      <!-- Login form fields -->
      <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Username" required>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
      </div>
      <div class="form-group">
        <select class="form-control" name="role">
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</body>

</html>