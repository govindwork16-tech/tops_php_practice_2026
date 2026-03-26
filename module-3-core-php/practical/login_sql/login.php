<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>PandaTracker Login</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <?php

  $connection = mysqli_connect("localhost", "root", "", "panda_tracker");

  if (!$connection) {
    echo "Database Disconnected";
  }

  if (isset($_POST["sign_up"])) {
    $full_name = mysqli_real_escape_string($connection, $_POST["full_name"]);
    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $username = mysqli_real_escape_string($connection, $_POST["username"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password == $confirm_password) {
      $hash_password = password_hash($_POST["password"], PASSWORD_DEFAULT);

      $insert_user = "insert into user_registration(full_name, email, username, password)
      values('$full_name', '$email', '$username', '$hash_password')";

      $my_sql_query = mysqli_query($connection, $insert_user);

      echo "<script>alert('User added successfully')
      window.location = 'dashboard.php';
      </script>";
    } else {
      echo "Password Do not match";
    }
  }

  if (isset($_POST["sign_in"])) {
    $user_email = $_POST["user_email"];
    $password = $_POST["password"];

    $user_select = "select * from user_registration where username = '$user_email' or email = '$user_email'";

    $user_sql_query = mysqli_query($connection, $user_select);

    print_r($user_sql_query);

    // if (mysqli_num_rows($user_sql_query) == 1) {
    //   $user_row = mysqli_fetch_assoc($user_sql_query);

    //   if (password_verify($password, $user_row["password"])) {
    //     $_SESSION["user"] = $user_row["username"];
    //     echo "<script>alert('login successful');
    //     window.location='dashboard.php';
    //     </script>";
    //   } else {
    //     echo "<script>alert('Wrong Password');</script>";
    //   }
    // } else {
    //   echo "<script>alert('User not found')</script>";
    // }
  }

  ?>

  <style>
    body {
      background: radial-gradient(circle at center, #0b2a46, #041421);
      overflow: hidden;
    }

    /* glass card */

    .glass {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.08);
    }

    /* button animation */

    .glow-btn {
      background: linear-gradient(90deg, #22c55e, #4ade80);
      transition: all .3s;
    }

    .glow-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 0 20px #22c55e;
    }

    /* leaves */

    .leaf {
      position: absolute;
      width: 28px;
      opacity: .6;
      animation: leafFall linear infinite;
    }

    @keyframes leafFall {

      0% {
        transform: translateY(-10vh) rotate(0deg);
        opacity: 0;
      }

      10% {
        opacity: .6;
      }

      100% {
        transform: translateY(110vh) rotate(360deg);
        opacity: 0;
      }

    }

    /* toggle */

    .toggle {
      background: #0f253a;
      border-radius: 999px;
      padding: 4px;
    }

    .toggle button {
      padding: 8px 20px;
      border-radius: 999px;
      font-size: 14px;
    }

    .active {
      background: #22c55e;
      color: black;
    }
  </style>

</head>


<body class="flex items-center justify-center min-h-screen text-white">


  <div id="leaves"></div>


  <!-- card -->

  <div class="glass w-[380px] p-8 rounded-2xl">

    <img src="https://cdn-icons-png.flaticon.com/512/616/616408.png"
      class="w-20 mx-auto mb-4">


    <!-- toggle -->

    <div class="toggle flex mb-6">

      <button id="loginBtn" class="active w-1/2">Sign In</button>
      <button id="signupBtn" class="w-1/2 text-gray-400">Sign Up</button>

    </div>


    <!-- LOGIN -->

    <form method="post" id="loginForm">

      <input type="text" placeholder="Username or Email" name="user_email"
        class="w-full p-3 mb-3 rounded-lg bg-[#13283b] outline-none">

      <input type="password" placeholder="Password" name="password"
        class="w-full p-3 mb-3 rounded-lg bg-[#13283b]">

      <div class="flex justify-between text-sm mb-4">

        <label>
          <input type="checkbox"> Remember
        </label>

        <a class="text-green-400">Forgot?</a>

      </div>

      <button name="sign_in" class="glow-btn w-full p-3 rounded-lg">
        Sign In →
      </button>

    </form>


    <!-- SIGNUP -->

    <form id="signupForm" method="post" class="hidden">

      <input placeholder="Full Name" name="full_name" class="w-full p-3 mb-3 rounded-lg bg-[#13283b]">

      <input placeholder="Email Address" name="email" class="w-full p-3 mb-3 rounded-lg bg-[#13283b]">

      <input placeholder="Username" name="username" class="w-full p-3 mb-3 rounded-lg bg-[#13283b]">

      <input placeholder="Password" name="password" type="password" class="w-full p-3 mb-3 rounded-lg bg-[#13283b]">

      <input placeholder="Confirm Password" name="confirm_password" type="password" class="w-full p-3 mb-4 rounded-lg bg-[#13283b]">

      <button name="sign_up" class="glow-btn w-full p-3 rounded-lg">
        Sign Up →
      </button>

    </form>

  </div>



  <script>
    /* toggle */

    $("#signupBtn").click(function() {

      $("#signupForm").fadeIn()
      $("#loginForm").hide()

      $(this).addClass("active").removeClass("text-gray-400")
      $("#loginBtn").removeClass("active").addClass("text-gray-400")

    })

    $("#loginBtn").click(function() {

      $("#loginForm").fadeIn()
      $("#signupForm").hide()

      $(this).addClass("active").removeClass("text-gray-400")
      $("#signupBtn").removeClass("active").addClass("text-gray-400")

    })


    /* leaf animation */

    function leaf() {

      let img = $("<img>")
      img.addClass("leaf")

      img.attr("src", "https://cdn-icons-png.flaticon.com/512/415/415733.png")

      let size = Math.random() * 20 + 20
      let left = Math.random() * window.innerWidth
      let dur = Math.random() * 10 + 10

      img.css({
        left: left + "px",
        width: size + "px",
        animationDuration: dur + "s"
      })

      $("#leaves").append(img)

      setTimeout(() => img.remove(), 20000)

    }

    setInterval(leaf, 1200)
  </script>

</body>

</html>