<?php 

    $data_conn = mysqli_connect('localhost', 'root', '', 'crudpractice_php');
    
    if (!$data_conn) {
        echo "Not connected";
    }

?>