<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php 

    if (isset($_POST['submit_btn'])) {
        $number_1 = $_POST['number_1'];
        $number_2 = $_POST['number_2'];
        $number_3 = $_POST['number_3'];

        if ($number_1 > $number_2 && $number_1 > $number_3) {
            echo $number_1 . " is greater" . "<br>";
        }elseif ($number_2 > $number_1 && $number_2 > $number_3) {
            echo $number_2 . " is greater" . "<br>";
        }elseif ($number_3 > $number_1 && $number_3 > $number_2) {
            echo $number_3 . " is greater" . "<br>";
        }else {
             echo "Please enter correct number";
        }

        if ($number_1 < $number_2 && $number_1 < $number_3) {
            echo $number_1 . " is smaller" . "<br>";
        }elseif ($number_2 < $number_1 && $number_2 < $number_3) {
            echo $number_2 . " is smaller" . "<br>";
        }elseif ($number_3 < $number_1 && $number_3 < $number_2) {
            echo $number_3 . " is smaller" . "<br>";
        }else {
             echo "Please enter correct number";
        }

        // $largest = max($number_1,$number_2,$number_3);
        // $smallest = min($number_1,$number_2,$number_3);

        // echo "Largest number is: " . "$largest";
        // echo "Smallest number is: " . "$smallest";

    }

?>

<body>
    

<form method="post">

    <input type="text" name="number_1"><br>
    <input type="text" name="number_2"><br>
    <input type="text" name="number_3"><br>
    <input type="submit" name="submit_btn">

</form>


</body>
</html>