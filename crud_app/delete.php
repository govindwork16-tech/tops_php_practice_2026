<?php

require_once 'functions.php';

if (!isset($_SESSION['user_id'])) {
  header('location: user_login.php');
}

if (isset($_POST['delete_btn'])) {
  $delete_id = $_SESSION['user_id'];
  if (delete_acc($delete_id)) {
    echo "<script>window.location = 'register.php'</script>";
  }else {
    echo "<script>alert('Something Went Wrong');window.location = 'register.php'</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Delete Account</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bg-light">

<div class="container vh-100 d-flex justify-content-center align-items-center">
  <div class="card text-center p-4 shadow" style="width: 400px;">

    <h4 class="mb-3 text-danger">Delete Account</h4>
    <p>Are you sure you want to delete your account?</p>

    <form method="POST" onsubmit="showLoader()">
      <button type="submit" class="btn btn-danger" name="delete_btn">
        Yes, Delete My Account
      </button>
    </form>

    <a href="dashboard.php" class="btn btn-secondary mt-2">Cancel</a>

    <!-- Loader -->
    <div id="loader" class="mt-4 d-none">
      <div class="spinner-border text-danger"></div>
      <p class="mt-2">Deleting your account... Please wait</p>
    </div>

    <!-- Message -->
    <div id="message" class="mt-3 d-none">
      <div class="alert alert-success">
        Account deleted successfully. Redirecting...
      </div>
    </div>

  </div>
</div>

<script>
function showLoader() {
  document.getElementById("loader").classList.remove("d-none");

  setTimeout(function() {
    document.getElementById("message").classList.remove("d-none");
  }, 3000);
}
</script>

</body>
</html>