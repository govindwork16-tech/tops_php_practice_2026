<?php
require_once 'functions.php';
require_once 'header_links.php';

if (!isset($_SESSION['user_id'])) {
  header('location:user_login.php');
}

if(isset($_SESSION['user_id'])) {
  $user = $_SESSION['user_id'];
  $user_fetch = user_data($user);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>User Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container-fluid">
    <div class="row">

      <!-- Sidebar -->
      <div class="col-md-3 col-lg-2 bg-dark text-white min-vh-100">
        <h4 class="text-center py-3">User Panel</h4>
        <div class="list-group list-group-flush">
          <a href="#" class="list-group-item list-group-item-action">Dashboard</a>
          <a href="edit_account.php" class="list-group-item list-group-item-action">Edit Account</a>
          <a href="delete.php" class="list-group-item list-group-item-action text-danger">Delete Account</a>
          <a href="logout.php?logoutid=true" class="list-group-item list-group-item-action">Logout</a>
        </div>
      </div>

      <!-- Main Content -->
      <div class="col-md-9 col-lg-10 p-4">
        <h2>Welcome, <?php echo $user_fetch["name"]; ?></h2>
        <hr>

        <div class="card">
          <div class="card-header bg-primary text-white">
            Your Profile Details
          </div>
          <div class="card-body">

            <table class="table table-bordered">
              <tr>
                <th>Name</th>
                <td><?php echo $user_fetch["name"]; ?></td>
              </tr>
              <tr>
                <th>Email</th>
                <td><?php echo $user_fetch["email"]; ?></td>
              </tr>
              <tr>
                <th>Phone</th>
                <td><?php echo $user_fetch["phone"]; ?></td>
              </tr>
              <tr>
                <th>Gender</th>
                <td><?php echo $user_fetch["gender"]; ?></td>
              </tr>
            </table>

          </div>
        </div>

      </div>

    </div>
  </div>

</body>

</html>