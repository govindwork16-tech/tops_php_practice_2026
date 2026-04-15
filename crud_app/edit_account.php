<?php
require_once 'functions.php';

if (!isset($_SESSION['user_id'])) {
  header('location: user_login.php');
}

if (isset($_SESSION['user_id'])) {
  $edit_id = $_SESSION['user_id'];
  $edit_fetch = edit_profile($edit_id);
}

if (isset($_POST['update_btn'])) {

  $user_id = $_SESSION['user_id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $phone = $_POST['phone'];

  $update_user = update_function($user_id, $name, $email, $gender, $phone);

  if ($update_user) {
    echo "<script>alert('User Updated Successfully'); window.location = 'dashboard.php';</script>";
  }else {
    echo "<script>alert('Something Went Wrong'); window.location = 'dashboard.php';</script>";
  }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Edit Account</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="bg-light">

  <div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow p-4" style="width: 500px;">

      <h3 class="text-center mb-4">Edit Account</h3>

      <form method="post">

        <!-- Name -->
        <div class="mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" name="name" value="<?php echo $edit_fetch['name']; ?>" class="form-control" value="John Doe">
        </div>

        <!-- Email -->
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" value="<?php echo $edit_fetch['email']; ?>" class="form-control" value="john@example.com">
        </div>


        <!-- Phone -->
        <div class="mb-3">
          <label class="form-label">Phone</label>
          <input type="text" name="phone" class="form-control" value="<?php echo $edit_fetch['phone']; ?>">
        </div>

        <!-- Gender -->
        <div class="mb-3">
          <label class="form-label">Gender</label>
          <select class="form-control" value="<?php echo $edit_fetch['gender']; ?>"  name="gender">
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
        </div>

        <!-- Buttons -->
        <div class="d-flex justify-content-between">
          <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
          <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
        </div>

      </form>

    </div>
  </div>

</body>

</html>