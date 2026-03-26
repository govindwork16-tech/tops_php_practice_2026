<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'data_conn');

    if ($conn) {
        echo "Database Connected";
    }else {
        echo "Database Not Connected";
    }



?>