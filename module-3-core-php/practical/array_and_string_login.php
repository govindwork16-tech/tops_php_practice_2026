<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array + String login practice</title>
</head>

<?php 


    // if (isset($_POST["submit_btn"])) {
    //     $arr = array("Govind", "Harsh", "Dp");

    //     $login_user = $_POST["user"];

    //     if (in_array($login_user, $arr)) {
    //         echo "User found";
    //     }else {
    //         echo "User Not found";
    //     }
    // }

    // if (isset($_POST["submit_btn"])) {
    //     $pass = "Govind@123";

    //     $user_pass = $_POST["pass"];

    //     if ($user_pass === "") {
    //         echo "Please enater a password";
    //     }elseif (strlen($user_pass) >= 6) {
    //         echo "Password is valid";
    //     }else {
    //         echo "password too short";
    //     }
    // }

    if (isset($_POST["submit_btn"])) {
        $arr = array("Govind", "Harsh", "Dp");

        $login_user = strtolower($_POST["user"]);

        if (in_array($login_user, $arr)) {
            echo "User found";
        }else {
            echo "User Not found";
        }
    }

?>

<body>

    <div class="container">
        <form method="post">
            <div class="form-group">
                <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" name="submit_btn" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>