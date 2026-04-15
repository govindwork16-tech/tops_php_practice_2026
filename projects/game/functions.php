<?php 

error_reporting(0);

require_once 'config.php';

function add_game($player_name, $name, $place, $animal, $thing, $time) {
  global $connection;

  $insert = "INSERT into tbl_game(player_name, name, place, animal, thing, date_time) values('$player_name', '$name', '$place', '$animal', '$thing', '$time')";

  $insert_query = mysqli_query($connection, $insert);

  if ($insert_query) {
    return true;
  }else {
    return false;
  }
}

function get_game() {
  global $connection;

  $select = "SELECT * from tbl_game order by player_name ASC";
  $select_query = mysqli_query($connection, $select);

  while ($fetch = mysqli_fetch_array($select_query)) {
    $arr[] = $fetch;
  }

  return $arr;
}

// Edit

function edit_game($edit_id) {
  global $connection;

  $edit_id = $_GET['edit_id'];
  $select_edit = "SELECT * FROM tbl_game where player_id = '$edit_id'";
  $select_query = mysqli_query($connection, $select_edit);
  
  while($fetch = mysqli_fetch_array($select_query)) {
    $fetch_arr[] = $fetch;
  }

  return $fetch_arr;
}

// Update

function update($player_id,$player_name, $name, $place, $animal, $thing) {
  global $connection;

  $update = "UPDATE tbl_game set player_name = '$player_name', name = '$name', place = '$place', animal = '$animal', thing = '$thing' where player_id = '$player_id'";
  $update_query = mysqli_query($connection, $update);
  if ($update_query) {
    return true;
  }else {
    return false;
  }
}

// Delete

function delete($delete_id) {
  global $connection;

  $delete_id = $_GET['delete_id'];
  $delete = "DELETE from tbl_game where player_id = '$delete_id'";
  $delete_query = mysqli_query($connection,$delete);
  if ($delete_query) {
    return true;
  }else 
  return false;
}

?>