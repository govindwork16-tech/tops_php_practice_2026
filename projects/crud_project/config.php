<?php 

$connection = mysqli_connect('localhost', 'root', '', 'personal_expense');

if (!$connection) {
  die(mysqli_error($connection));
}

?>