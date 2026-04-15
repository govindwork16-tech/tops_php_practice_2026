<?php 
require_once('include/config.php');
require_once('include/functions.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login — ShopNova</title>

  <link rel="stylesheet" href="css/style.css">
</head>

<?php 

if (isset($_POST['admin_login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  if (admin_login($email, $password)) {
    header('location: dashboard.php');
  } else {
    echo "<script>
        alert('Invalid email or password')
        </script>";
  }
}

?>

<body>

<div class="login-wrapper">
  <form method="post" class="login-card">
    <div class="login-logo">Shop<span>Nova</span></div>
    <div class="login-sub">Admin Panel Login</div>

    <!-- <?php if(isset($error)){ ?>
      <div class="login-error"><?php echo $error; ?></div>
    <?php } ?> -->

    <div class="form-group">
      <label class="form-label">Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>

    <div class="form-group">
      <label class="form-label">Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>

    <button type="submit" name="admin_login" class="btn btn-primary">Login</button>
  </form>
</div>

</body>
</html>