<?php 

$con = mysqli_connect("localhost", "root", "", "crud_op");

if ($con) {
    echo 'Connection Established';
}else {
    die('Connection not Established');
}

?>