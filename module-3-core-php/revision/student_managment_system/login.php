<?php
session_start();

include_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Login</title>

  <?php

  if (isset($_POST['login_btn'])) {
    $email = $_POST['student_email'];
    $password = $_POST['student_password'];

    $select = "select * from students where (student_email = '$email')";
    $select_query = mysqli_query($connect, $select);
    $fetch = mysqli_fetch_assoc($select_query);

    if ($fetch) {
      $pass_decode = base64_decode($fetch['password']);

      if ($password == $pass_decode) {
        $_SESSION['student_name'] = $fetch['student_name'];
        header("location: dashboard.php");
      } else {
        echo "<script>alert('Incorrect Email or Password')</script>";
      }
    } else {
      echo "<script>alert('Something went wrong')</script>";
    }
  }

  ?>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(120deg, #4facfe, #00f2fe);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .form-container {
      background: #fff;
      padding: 40px;
      border-radius: 12px;
      width: 420px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      animation: fadeIn 1s ease-in-out;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 25px;
    }

    .input-group {
      position: relative;
      margin-bottom: 20px;
    }

    .input-group input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      outline: none;
      font-size: 14px;
      transition: 0.3s;
    }

    .input-group label {
      position: absolute;
      left: 12px;
      top: 12px;
      color: #777;
      font-size: 14px;
      background: #fff;
      padding: 0 5px;
      transition: 0.3s;
      pointer-events: none;
    }

    .input-group input:focus {
      border-color: #4facfe;
      box-shadow: 0 0 5px rgba(79, 172, 254, 0.5);
    }

    .input-group input:focus+label,
    .input-group input:valid+label {
      top: -8px;
      font-size: 12px;
      color: #4facfe;
    }

    .btn {
      width: 100%;
      padding: 12px;
      border: none;
      background: #4facfe;
      color: white;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn:hover {
      background: #00c6ff;
      transform: scale(1.03);
    }

    .link {
      text-align: center;
      margin-top: 15px;
    }

    .link a {
      text-decoration: none;
      color: #4facfe;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>

  <div class="form-container">
    <h2>Student Login</h2>
    <form method="post">

      <div class="input-group">
        <input type="email" name="student_email" required>
        <label>Email Address</label>
      </div>

      <div class="input-group">
        <input type="password" name="student_password" required>
        <label>Password</label>
      </div>

      <input type="submit" name="login_btn" value="Login" class="btn">

      <div class="link">
        <p>Don't have an account? <a href="student_register.php">Register</a></p>
      </div>

    </form>
  </div>

</body>

</html>