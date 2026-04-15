<?php
session_start();

$connection = mysqli_connect('localhost', 'root', '', 'shopnova');  

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>