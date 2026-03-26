<?php
session_start(); 
include('config.php');
?>

<?php 
    if (isset($_SESSION['student_name'])) {
        echo "Welcome " . $_SESSION['student_name'];
    }else {
        echo "Hello Guest"; 
    }
?>