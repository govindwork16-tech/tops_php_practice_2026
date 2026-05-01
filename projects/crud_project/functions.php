<?php 
// error_reporting(0);
require_once 'config.php';

function get_category() {
  global $connection;
  $select = "SELECT * from tbl_personal_expense_category";

  $select_query = mysqli_query($connection, $select);

  while ($fetch = mysqli_fetch_array($select_query)) {
    $arr[] = $fetch;
  }

  return $arr;
}

// Insert

function insert_data($name, $category, $amount, $date, $description) {
  global $connection;
  $insert = "INSERT INTO tbl_personal_expense(name,category_id, amount, date, description) values('$name', '$category', '$amount', '$date', '$description')";
  $insert_query = mysqli_query($connection, $insert);
  if ($insert_query) {
    return true;
  }else {
    return false;
  }
}

// Display

function get_details() {
  global $connection;
  $select = "SELECT tbl_personal_expense.*, tbl_personal_expense_category.category_name from tbl_personal_expense join tbl_personal_expense_category on tbl_personal_expense.category_id = tbl_personal_expense_category.category_id ORDER BY amount DESC";

  $select_query = mysqli_query($connection, $select);

  while ($fetch = mysqli_fetch_array($select_query)) {
    $arr[] = $fetch;
  }

  return $arr;
}

// Subtotal

function get_total() {
  global $connection;
  $select = "SELECT sum(amount) as total_expense from tbl_personal_expense";

  $select_query = mysqli_query($connection, $select);

  while ($fetch = mysqli_fetch_array($select_query)) {
    $arr[] = $fetch;
  }

  return $arr;
}

// Total Expenses

function get_expense() {
  global $connection;

  $select = "SELECT count(expense_id) as all_expense from tbl_personal_expense";
  $select_query = mysqli_query($connection, $select);
  while($all_expense = mysqli_fetch_array($select_query)) {
    $expense_arr[] = $all_expense;
  }

  return $expense_arr;
}

// Edit

function edit_expense($id) {
  global $connection;

  $id = $_GET['expense_id'];
  $select = "SELECT * from tbl_personal_expense where expense_id = '$id'";
  $select_query = mysqli_query($connection, $select);

  while ($edit_exp = mysqli_fetch_array($select_query)) {
    $arr[] = $edit_exp;
  }

  return $arr;
}

// Update

function update_expense($id,$name, $category, $amount, $date, $description) {
  global $connection;
  $update = "UPDATE tbl_personal_expense SET name='$name', category_id = '$category', amount='$amount', date='$date', description = '$description' where expense_id = '$id'";
  $insert_query = mysqli_query($connection, $update);
  if ($insert_query) {
    return true;
  }else {
    return false;
  }
}

// Delete

function delete_expense($id) {
  global $connection;

  $delete = "DELETE from tbl_personal_expense where expense_id = $id";
  $delete_query = mysqli_query($connection, $delete);
  if ($delete_query) {
    return true;
  }else {
    return false;
  }
}

?>