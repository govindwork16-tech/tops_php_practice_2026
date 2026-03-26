<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max Number</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<?php

// function age_checker($age_num)
// {
//     if ($age_num < 0) {
//         return "Invalid Age";
//     } elseif ($age_num >= 18) {
//         return "You Can Vote";
//         header("refresh:4,welcome.php");
//     } else {
//         return "You cannot Vote";
//     }
// }

// if (isset($_POST['submit_button'])) {
//     $age = $_POST['age_num'];
//     echo age_checker($age);
// }

function age_checker() {
    if (isset($_POST['submit_button'])) {
        $age_num = $_POST['age_num'];

        if ($age_num < 0) {
            echo "Invalid Number";
        }elseif ($age_num >= 18) {
            // echo "You can vote";
            header("location:welcome.php");

        }else {
             echo "You cannot vote";
        }
    }
}

age_checker();

?>



<body>

    <div class="container">
        <form method="post">
            <div class="form-group">
                <input type="text" name="age_num" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Number 1">
            </div>
            <button type="submit" name="submit_button" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>