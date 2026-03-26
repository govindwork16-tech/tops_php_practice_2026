<?php 

    $connect = mysqli_connect('localhost', 'root', '', 'student_managment');

    if (!$connect) {
        echo "Not connected";
    }

?>