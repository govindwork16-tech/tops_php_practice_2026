<?php

session_start();

$_SESSION["username"] = "Govind";

if ($_SESSION["username"]) {
    echo "Welcome " . $_SESSION["username"];
    header("refresh: 2, session_page.php");
} else {
    echo "Session not found";
}
