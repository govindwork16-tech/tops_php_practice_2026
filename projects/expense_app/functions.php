<?php

require_once 'config.php';

// Create a function to fetch category

function get_category()
{
  global $connection;

  $select = "SELECT * from tbl_expense_category";
  $select_query = mysqli_query($connection, $select);

  while ($fetch = mysqli_fetch_array($select_query)) {
    $arr[] = $fetch;
  }

  return $arr;
}

// Insert 

function insert_expense($name, $category_name, $description, $amount, $date)
{
  global $connection;

  $insert = "INSERT into tbl_add_expense(name,category, description, amount, add_date_and_time) values('$name', '$category_name', '$description','$amount', '$date')";

  $insert_query = mysqli_query($connection, $insert);

  if ($insert_query) {
    return true;
  } else {
    return false;
  }
}

// Create a function to show all expense

function get_expense()
{
  global $connection;

  $select = "SELECT tbl_add_expense.*, tbl_expense_category.category_name FROM tbl_add_expense JOIN tbl_expense_category ON tbl_add_expense.category = tbl_expense_category.category_id";

  $select_query = mysqli_query($connection, $select);


  while ($fetch = mysqli_fetch_array($select_query)) {
    $arr_expense[] = $fetch;
  }

  return $arr_expense;
}




// Edit Expense

function edit_expense($get_id)
{
  global $connection;
  $get_id = $_GET['expense_id'];

  $edit_select = "SELECT * from tbl_add_expense where expense_id = '$get_id'";
  $edit_query = mysqli_query($connection, $edit_select);
  
  while($fetch = mysqli_fetch_array($edit_query)) {
      $edit_user[] = $fetch;
  }

  return $edit_user;
}

// Delete Expense


function delete_expense($del_id) {
  global $connection;

  $delete = "DELETE FROM tbl_add_expense where expense_id = '$del_id'";
  $delete_query = mysqli_query($connection, $delete);
  
  if ($delete_query) {
    return true;
  }else {
    return false;
  }
}