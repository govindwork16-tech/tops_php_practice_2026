<?php 

$connection = mysqli_connect('localhost', 'root', '', 'game_db');

if (!$connection) {
  die(mysqli_error($connection));
}

?>