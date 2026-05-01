<?php

require_once('include/config.php');

// Register Logic

function user_register($first_name, $last_name, $email, $phone_number, $password, $confirm_password, $country, $state, $city)
{
  global $connection;

  if ($password == $confirm_password && strlen($password) >= 8) {
    $insert = "INSERT INTO tbl_users(first_name, last_name, email, phone_number, password, country_id, state_id, city_id) value('$first_name', '$last_name', '$email', '$phone_number', '$password', '$country', '$state', '$city')";
    $insert_query = mysqli_query($connection, $insert);
    if ($insert_query) {
      return true;
    } else {
      return false;
    }
  }
}

// Select Country 

function select_country()
{
  global $connection;

  $select = "SELECT * from tbl_country";
  $select_query = mysqli_query($connection, $select);
  while ($fetch = mysqli_fetch_array($select_query)) {
    $arr[] = $fetch;
  }
  return $arr;
}

// State

function select_state()
{
  global $connection;

  $select = "SELECT * from tbl_state";
  $select_query = mysqli_query($connection, $select);
  while ($fetch = mysqli_fetch_array($select_query)) {
    $arr[] = $fetch;
  }
  return $arr;
}

// City

function select_city()
{
  global $connection;

  $select = "SELECT * from tbl_city";
  $select_query = mysqli_query($connection, $select);
  while ($fetch = mysqli_fetch_array($select_query)) {
    $arr[] = $fetch;
  }
  return $arr;
}

// Login Logic

function user_login($email, $password)
{
  global $connection;

  $select = "SELECT * FROM tbl_users where email = '$email' and password = '$password'";
  $select_query = mysqli_query($connection, $select);

  if (mysqli_num_rows($select_query) > 0) {
    $fetch_user = mysqli_fetch_assoc($select_query);
    $_SESSION['user_id'] = $fetch_user['user_id'];
    return true;
  } else {
    return false;
  }
}

// User Data

function user_data($user_details)
{
  global $connection;

  $user_select = "SELECT tbl_users.*, tbl_country.country_name, tbl_state.state_name, tbl_city.city_name FROM tbl_users JOIN tbl_country ON tbl_users.country_id = tbl_country.country_id JOIN tbl_state ON tbl_users.state_id = tbl_state.state_id JOIN tbl_city ON tbl_users.city_id = tbl_city.city_id WHERE tbl_users.user_id = $user_details
";
  $user_select_query = mysqli_query($connection, $user_select);
  $user_detail_fetch = mysqli_fetch_array($user_select_query);
  return $user_detail_fetch;
}

// Update

function update_user($user_id, $first_name, $last_name, $email, $phone_number, $country, $state, $city)
{
  global $connection;

  $update = "UPDATE tbl_users set first_name = '$first_name', last_name = '$last_name', email = '$email', phone_number = '$phone_number', country_id = '$country', state_id = '$state', city_id = '$city' WHERE user_id = '$user_id'";
  $update_query = mysqli_query($connection, $update);
  if ($update_query) {
    return true;
  } else {
    return false;
  }
}

// Delete

function delete_account($user_id)
{
  global $connection;
  $user_id = $_SESSION['user_id'];
  $delete = "DELETE from tbl_users where user_id = '$user_id'";
  $delete_query = mysqli_query($connection, $delete);
  if ($delete_query) {
    return true;
  } else {
    return false;
  }
}

// logout

function logout()
{
  unset($_SESSION['user_id']);
  session_destroy();
  return true;
}


// Add Post

function add_posts($title, $description, $date_and_time, $post_category)
{
  global $connection;

  $insert_post = "INSERT INTO blog_posts(title, description, date_and_time, post_category) values('$title', '$description', '$date_and_time', '$post_category')";
  $insert_post_query = mysqli_query($connection, $insert_post);
  if ($insert_post_query) {
    return true;
  } else {
    return false;
  }
}

// Fetch All Post Loop

function display_post()
{
  global $connection;


  $fetch = "SELECT * FROM blog_posts order by post_id desc";
  $fetch_query = mysqli_query($connection, $fetch);
  while ($row = mysqli_fetch_array($fetch_query)) {
    $arr[] = $row;
  }
  return $arr;
}

// Fetch single post

function fetch_post($post_id)
{
  global $connection;

  $post_id = $_GET['post_id'];

  $fetch = "SELECT * FROM blog_posts where post_id = '$post_id'";
  $fetch_query = mysqli_query($connection, $fetch);
  while ($row = mysqli_fetch_array($fetch_query)) {
    $arr[] = $row;
  }
  return $arr;
}

// Admin Login


function admin_login($email, $password)
{
  global $connection;

  $select = "select * from tbl_admin where email = '$email' and password = '$password'";
  $select_query = mysqli_query($connection, $select);

  if (mysqli_num_rows($select_query) > 0) {
    $row = mysqli_fetch_assoc($select_query);
    $_SESSION['admin_id'] = $row['admin_id'];
    $_SESSION['email'] = $row['email'];
    return true;
  } else {
    return false;
  }
}

// Admin Add Category

function add_category($category_name) {
  global $connection;
  
  $insert = "INSERT INTO tbl_category(category_name) values('$category_name');";
  $insert_query = mysqli_query($connection, $insert);
  if ($insert_query) {
    return true;
  }else {
    return false;
  }
}

// Show Category

function show_category() {
  global $connection;

  $select = "SELECT * FROM tbl_category";
  $select_query = mysqli_query($connection, $select);
  
  while ($fetch_category = mysqli_fetch_array($select_query)) {
    $fetch_arr[] = $fetch_category;
  }
  return $fetch_arr;
}

// Edit Category

function edit_view($category_id) {
  global $connection;
  $category_select = "SELECT * from tbl_category WHERE category_id = '$category_id'";
  $category_query = mysqli_query($connection, $category_select);
  $category_fetch = mysqli_fetch_array($category_query);
  return $category_fetch;
}

// Update Category

function update_category($category_id, $category_name) {
  global $connection;
  $category_update = "UPDATE tbl_category set category_name = '$category_name' where category_id = '$category_id'";
  $update_query = mysqli_query($connection, $category_update);
  if ($update_query) {
    return true;
  }else {
    return false;
  }
}

// Delete Category 

function del_cat($category_id) {
  global $connection;
  $delete = "DELETE from tbl_category WHERE category_id = '$category_id'";
  $delete_query = mysqli_query($connection, $delete);
  if ($delete_query) {
    return true;
  }else {
    return false;
  }
}

// Add Product (Admin)

function add_product($category_id, $product_name, $old_price, $new_price, $qty, $desc, $product_image) {
  global $connection;

  $insert = "INSERT INTO tbl_products(category_id, product_name, old_price, new_price, qty, description, product_image) values('$category_id', '$product_name', '$old_price', '$new_price', '$qty', '$desc', '$product_image')";
  $insert_query = mysqli_query($connection, $insert);
  if ($insert_query) {
    return true;
  }else {
    return false;
  }
}

// Show Products 

function show_products() {
  global $connection;

  $select = "SELECT tbl_products.*, category_name from tbl_category join tbl_products on tbl_products.category_id = tbl_category.category_id";
  $select_query = mysqli_query($connection, $select);
  while ($fetch = mysqli_fetch_array($select_query)) {
    $fetch_arr[] = $fetch;
  }
  return $fetch_arr;
}

// Edit Product (Admin)

function edit_product($product_id) {
  global $connection;

  $select = "SELECT * from tbl_products where product_id = '$product_id'";
  $select_query = mysqli_query($connection, $select);
  while($row = mysqli_fetch_array($select_query)){
    $fetch_arr[] = $row;
  }

  return $fetch_arr;
}

// Update Product (Admin)

function update_product($product_id, $product_name, $category_id, $old_price, $new_price, $qty, $desc, $product_image) {
  global $connection;

  $update = "UPDATE tbl_products SET product_name = '$product_name', category_id = '$category_id', old_price = '$old_price', new_price = '$new_price', qty = '$qty', description = '$desc', product_image = '$product_image' WHERE product_id = '$product_id'";
  $update_query = mysqli_query($connection, $update);
  if ($update_query) {
    return true;
  }else {
    return false;
  }
}

// Delete Product (Admin)

function delete_product($product_id) {
  global $connection;
  $delete = "DELETE from tbl_products WHERE product_id = '$product_id'";
  $delete_query = mysqli_query($connection, $delete);
  return $delete_query;
}


// Sum Products

function count_product($category_id) {
  global $connection;

  $select = "SELECT count(*) as total_products from tbl_products where category_id = '$category_id'";
  $select_query = mysqli_query($connection, $select);
  $fetch_all = mysqli_fetch_assoc($select_query);
  return $fetch_all;
}

function count_all_product() {
  global $connection;

  $select = "SELECT count(*) as total_products from tbl_products";
  $select_query = mysqli_query($connection, $select);
  $fetch_count = mysqli_fetch_assoc($select_query);
  return $fetch_count;
}

// Category Filter

function show_category_products($category_id) {
  global $connection;
  $select = "SELECT tbl_products.*, category_name from tbl_category join tbl_products on tbl_products.category_id = tbl_category.category_id where tbl_products.category_id = '$category_id'";
  $select_query = mysqli_query($connection, $select);
  $arr = [];
  while ($fetch_arr = mysqli_fetch_array($select_query)) {
    $arr[] = $fetch_arr;
  }
  return $arr;
}

// Product Details

function product_details($product_id) {
  global $connection;
  $select = "SELECT tbl_products.*, category_name from tbl_category join tbl_products on tbl_products.category_id = tbl_category.category_id where product_id = '$product_id'";
  $select_query = mysqli_query($connection, $select);
  while($fetch_arr = mysqli_fetch_array($select_query)) {
    $arr[] = $fetch_arr;
  }
  return $arr;
}

// Add review for product

function add_review($user_name, $user_review, $ratings, $product_id) {
  global $connection;
  $review = "INSERT into tbl_reviews(user_name, user_review, ratings, product_id) values('$user_name', '$user_review', $ratings, $product_id)";
  $review_query = mysqli_query($connection, $review);
  if ($review_query) {
    return true;
  }else {
    return false;
  }
}

// Display Reviews

function show_reviews($product_id) {
  global $connection;
  $review = "SELECT * from tbl_reviews where product_id = '$product_id'";
  $review_query = mysqli_query($connection, $review);
  $review_fetch = [];
  while ($review_arr = mysqli_fetch_array($review_query)) {
    $review_fetch[] = $review_arr; 
  }
  return $review_fetch;
}

// Review Count

function review_count($product_id) {
  global $connection;
  $review_count = "SELECT count(*) as total_count from tbl_reviews where product_id = $product_id";
  $review_query = mysqli_query($connection, $review_count);
  $review_fetch = mysqli_fetch_assoc($review_query);
  return $review_fetch;
}

// Review Average 

function review_average($product_id) {
  global $connection;
  $review_average = "SELECT AVG(ratings) as avg_ratings from tbl_reviews where product_id = '$product_id'";
  $avg_query = mysqli_query($connection, $review_average);
  $avg_fetch = mysqli_fetch_assoc($avg_query);
  return $avg_fetch;
}


// Admin Logout

function adminlogout()
{
  unset($_SESSION['admin_id']);
  unset($_SESSION['email']);
  session_destroy();
  header("Location: index.php");
  exit();
}
