<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php 

    if (isset($_POST["submit_btn"])) {
        $age = $_POST["age"];

        if ($age < 0) {
            echo "Please enter correct number";
        }elseif ($age < 18) {
            echo "You are not allowed";
        }elseif ($age >= 18 && $age <= 60) {
            echo "You can work";
        }elseif ($age > 60) {
            echo "You are retired";
        }else {
            echo "<script>alert('Something went wrong')
            window.location = age_check.php;
            </script>";
        }
    }

?>

<body>

    <form method="post">
        <input type="number" name="age"><br>
        <input type="submit" name="submit_btn">
    </form>
    
</body>
</html>