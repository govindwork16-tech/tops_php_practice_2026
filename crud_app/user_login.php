<?php

require_once 'functions.php';

if (isset($_SESSION['user_id'])) {
  header('location: dashboard.php');
  exit();
}

if (isset($_POST['login_btn'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $user = login_user($email, $password);
  if ($user) {
    echo "<script>alert('Login successful'); window.location='dashboard.php';</script>";
  }else {
    echo "<script>alert('Email Or Password Are Incorrect'); windows.location = 'user_login.php';</script>"; 
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

</head>

<body class="bg-light">

  <div class="container">
    <div class="row justify-content-center align-items-center vh-100">
      <div class="col-md-5">
        <div class="card shadow">
          <div class="card-header bg-success text-white text-center">
            <h4>Login</h4>
          </div>

          <div class="card-body">
            <form method="POST">

              <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
              </div>

              <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>

              <div class="d-grid">
                <button type="submit" name="login_btn" class="btn btn-success">Login</button>
              </div>

              <div class="text-center mt-3">
                <a href="register.php">Create new account</a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>