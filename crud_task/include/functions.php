<?php

require_once 'include/config.php';
require_once 'include/header_links.php';

function add_task($task) {
  global $connection;

  $task_insert = "insert into tbl_tasks(tasks) values('$task')";
  $task_query = mysqli_query($connection, $task_insert);
  if ($task_query) {
    return true;
  }else {
    return false;
  }
}

// Display task

function display_task() {
  global $connection;

  $task_insert = "SELECT * from tbl_tasks";
  $task_query = mysqli_query($connection, $task_insert);
  
  return $task_query;
}

// Edit 

function edit_task() {
  
}

?>