<?php

require_once 'config.php';
require_once 'header_links.php';


// Register

function user_register($name, $email, $password, $confirm_password, $gender, $phone){
  global $connection;

  if ($password == $confirm_password) {
    $insert = "INSERT into tbl_register(name, email, password, gender, phone) values('$name', '$email', '$password', '$gender', '$phone')";
    $insert_query = mysqli_query($connection, $insert);

    if ($insert_query) {
      return true;
    } else {
      return false;
    }
  }
}

// Login Function

function login_user($email, $password) {
  global $connection;

  $user = "SELECT * from tbl_register where email = '$email' and password = '$password'";
  $user_query = mysqli_query($connection, $user);
  $user_fetch = mysqli_fetch_array($user_query);
  $user_rows = mysqli_num_rows($user_query);

  if ($user_rows > 0 ) {
    $_SESSION['user_id'] = $user_fetch['user_id'];
    return true;
  }else {
    return false;
  }
}

// User Data

function user_data($user_info) {
  global $connection;

  $user_info_select = "SELECT * from tbl_register where user_id = '$user_info'";
  $user_info_query = mysqli_query($connection, $user_info_select);
  $user_fetch = mysqli_fetch_array($user_info_query);
  return $user_fetch;
}

// Edit Profile

function edit_profile($edit) {
  global $connection;

  $edit_select = "SELECT * from tbl_register where user_id = '$edit'";
  $edit_query = mysqli_query($connection, $edit_select);
  $user_fetch = mysqli_fetch_array($edit_query);
  return $user_fetch;
}

// Update 

function update_function($user_id, $name, $email, $gender, $phone) {
  global $connection;

  $update = "UPDATE tbl_register SET name = '$name', email = '$email', gender = '$gender', phone = '$phone' WHERE user_id = '$user_id'";
  $update_query = mysqli_query($connection, $update);

  if ($update_query) {
    return true;
  }else {
    return false;
  }
}

// delete account

function delete_acc($user_id) {
  global $connection;

  $user_id = $_SESSION['user_id'];
  $delete = "DELETE from tbl_register where user_id = '$user_id'";
  $delete_query = mysqli_query($connection, $delete);
  if ($delete_query) {
    return true;
  }else {
    return false;
  }
} 

// Logout 

function logout() {
  unset($_SESSION['user_id']);
  session_destroy();
  return true;
}