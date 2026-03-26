<?php
include_once("config.php");
if (isset($_POST["add_users"])) {
    date_default_timezone_set("Asia/Calcutta");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = date("d/m/Y H:i:s a");

    $insert_data = "insert into users_table(name,email,phone,date_and_time) values('$name', '$email', '$phone', '$date')";
    $query_add = mysqli_query($data_conn, $insert_data);

    if ($query_add) {
        echo "<script>
        alert('users successfully addedd')
        window.location='index.php';
        </script>";
    }
}
