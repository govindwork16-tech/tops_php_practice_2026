<?php 

$connection = mysqli_connect('localhost', 'root', '', 'file_upload');

if (!$connection) {
  echo "Connection Not Working";
}

function image_insert($image) {
  global $connection;

  $insert = "INSERT into tbl_upload(photo) values('$image');";
  $insert_query = mysqli_query($connection, $insert);
  if ($insert_query) {
    return true;
  }else {
    return false;
  }
}

// Display Function

function display_image() {
  global $connection;
  $select = "SELECT * from tbl_upload";
  $select_query = mysqli_query($connection, $select);
  while ($select_fetch = mysqli_fetch_array($select_query)) {
    $fetch_arr[] = $select_fetch;
  }
  return $fetch_arr;
}

?>