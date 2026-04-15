<?php

  function admin_login($email, $password) {
    global $connection;

    $select = "select * from tbl_admin where email = '$email' and password = '$password'";
    $select_query = mysqli_query($connection, $select);

    if (mysqli_num_rows($select_query) > 0) {
      $row = mysqli_fetch_assoc($select_query);
      $_SESSION['admin_id'] = $row['admin_id'];
      $_SESSION['email'] = $row['email'];
      return true;
    }else {
      return false;
    }
  }

  // Admin Logout

  function adminlogout() {
    unset($_SESSION['admin_id']);
    unset($_SESSION['email']);
    session_destroy();
    header("Location: index.php");
    exit();
}

?>