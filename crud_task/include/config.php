<?php


$connection = mysqli_connect('localhost', 'root', '', 'new_crud_app');

if (!$connection) {
  die('Connection Failed');
}
