<?php

require_once 'functions.php';


if (isset($_POST['register_btn'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $gender = $_POST['gender'];
  $phone = $_POST['phone'];

  $result = user_register($name, $email, $password, $confirm_password, $gender, $phone);

  if ($result) {
    echo "<script>alert('Registration successful'); window.location='user_login.php';</script>";
  }else {
    echo "<script>alert('Password Does Not Match'); window.location='register.php';</script>";
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>

<body class="bg-light">

  <div class="container">
    <div class="row justify-content-center align-items-center vh-100">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-header bg-primary text-white text-center">
            <h4>Register</h4>
          </div>

          <div class="card-body">
            <form action="register.php" method="POST">

              <!-- Name -->
              <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" required>
              </div>

              <!-- Email -->
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
              </div>

              <!-- Password -->
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>

              <!-- Confirm Password -->

              <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" required>
              </div>

              <!-- Gender -->
              <div class="mb-3">
                <label class="form-label">Gender</label>
                <select name="gender" class="form-control" required>
                  <option value="">Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                </select>
              </div>

              <!-- Phone -->
              <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" required>
              </div>

              <!-- Submit -->
              <div class="d-grid">
                <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
              </div>

              <div class="text-center mt-3">
                <a href="user_login.php">Already have an account? Login</a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>