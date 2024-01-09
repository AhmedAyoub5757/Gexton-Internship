<!DOCTYPE html>
<html>

<head>
  <title>Login/Signup</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      max-width: 400px;
      margin: 100px auto;
    }

    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header {
      background-color: #007bff;
      color: #fff;
      text-align: center;
      padding: 15px 0;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .form-group {
      margin: 20px;
    }

    .btn-primary {
      width: 100%;
    }

    .error-message {
      color: #dc3545;
      margin-bottom: 10px;
      text-align: center;
    }

    .card-footer {
      text-align: center;
    }

    .nav-tabs {
      margin-left: 90px;
      margin-bottom: 20px;
    }

    .nav-tabs .nav-item {
      cursor: pointer;
    }

    .nav-tabs .nav-link.active {
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h3>Login/Signup</h3>
      </div>
      <div class="card-body">

        <?php
        if (isset($_GET['login_error'])) {
          echo '<div class="error-message">Invalid username or password.</div>';
        } elseif (isset($_GET['signup_error'])) {
          echo '<div class="error-message">Failed to create account. Please try again.</div>';
        } elseif (isset($_GET['username_taken'])) {
          echo '<div class="error-message">Username is already taken. Please choose a different username.</div>';
        } elseif (isset($_GET['signup_success'])) {
          echo '<div class="alert alert-success">Account created successfully. Please log in.</div>';
        }
        ?>

        <ul class="nav nav-tabs" id="switch-tabs">
          <li class="nav-item">
            <a class="nav-link active" id="login-tab" onclick="showForm('login')">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="signup-tab" onclick="showForm('signup')">Signup</a>
          </li>
        </ul>


        <div id="login-card" class="form-content">
          <form method="post" action="login.php">
            <div class="form-group">
              <label for="login_username">Username:</label>
              <input type="text" class="form-control" id="login_username" name="login_username" required>
            </div>
            <div class="form-group">
              <label for="login_password">Password:</label>
              <input type="password" class="form-control" id="login_password" name="login_password" required>
            </div>
            <button type="submit" class="btn btn-outline-primary mx-4">Login</button>
          </form>
        </div>


        <div id="signup-card" class="form-content" style="display: none;">
          <form method="post" action="signup.php">
            <div class="form-group">
              <label for="signup_username">Username:</label>
              <input type="text" class="form-control" id="signup_username" name="signup_username" required>
            </div>
            <div class="form-group">
              <label for="signup_password">Password:</label>
              <input type="password" class="form-control" id="signup_password" name="signup_password" required>
            </div>
            <button type="submit" class="btn btn-outline-primary mx-4
            ">Signup</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    function showForm(formType) {
      const loginCard = document.getElementById('login-card');
      const signupCard = document.getElementById('signup-card');
      const loginTab = document.getElementById('login-tab');
      const signupTab = document.getElementById('signup-tab');

      if (formType === 'login') {
        loginCard.style.display = 'block';
        signupCard.style.display = 'none';
        loginTab.classList.add('active');
        signupTab.classList.remove('active');
      } else {
        loginCard.style.display = 'none';
        signupCard.style.display = 'block';
        loginTab.classList.remove('active');
        signupTab.classList.add('active');
      }
    }
  </script>
</body>

</html>