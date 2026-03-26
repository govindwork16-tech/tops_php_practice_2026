<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

    // if (isset($_POST['submit_btn'])) {
    //     $number_input = $_POST['number_input'];

    //     if ($number_input % 2 == 0) {
    //         echo "Number is Even";
    //     }else {
    //         echo "Number is odd";
    //     }
    // }

    $i = 1;

    // while ($i <= 5) {
    //     if ($i % 2 == 0) {
    //         echo "even numbers: " . "$i" . "<br>";
    //     }

    //     $i++;
    // }

    // for ($i=0; $i <5 ; $i++) { 
    //     if ($i % 2 == 0) {
    //         echo "Even numbers are: " . "$i" . "<br>";
    //     }
    // }

?>

<form method="post">

    <input type="number" name="number_input">
    <input type="submit" name="submit_btn">

</form>


</body>
</html>