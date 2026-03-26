<?php 

session_start();

// echo $_SESSION["username"];

// if ($_SESSION["username"]) {
//     echo "Welcome " . $_SESSION["username"];
// }else {
//     echo "Session not found";
// }

unset($_SESSION["username"]);
session_destroy();

?>