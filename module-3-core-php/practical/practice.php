<?php
/* 
    $name = 'Govind';
    $age = '24';
    $city = 'Rajkot';

    print "My name is $name I am $age years old I live in $city";
    
    $a = 10;
    $b = 20;

    print ($a + $b) . "<br>";
    print ($a - $b) . "<br>";
    print ($a * $b) . "<br>";
    print ($a / $b) . "<br>";
    print($a % $b);

    $c = 12;
    $d = 12.233;
    $e = 'Govind';
    $f = true;
    $g = null;

    echo var_dump($c) . "<br>";
    echo var_dump($d) . "<br>";
    echo var_dump($e) . "<br>";
    echo var_dump($f) . "<br>";
    echo var_dump($g) . "<br>";

    $a = 20;
    $b = 20;

    echo ($a == $b)."<br>";
    echo ($a === $b)."<br>";
    echo ($a != $b)."<br>";
    echo ($a > $b)."<br>";
    echo ($a <= $b)."<br>";

    $x = 10;

    echo ($x += 5)."<br>";
    echo ($x -= 3)."<br>";
    echo ($x *= 2)."<br>";
    echo ($x /= 4)."<br>";

    $a = true;
    $b = false;

    var_dump($a && $b);
    var_dump($a || $b);
    var_dump(!$b);

    $age = 18;
    $res = $age >= 18?"adult": "minor";
    echo $res;

    $a = 10;

    if ($a > 0) {
        echo "Number is positive";
    }else {
        echo "Number is negative or zero";
    }

    echo "<br>";

    $b = 7;

    if ($b % 2 == 1) {
        echo "Number is odd";
    }else {
        echo "Number is even";
    }

    $a = 76;

    if ($a >= 90) {
        echo "A Grade";
    }elseif ($a >= 75) {
        echo "B Grade";
    }elseif ($a >= 50) {
        echo "C Grade";
    }else {
        echo "Fail";
    }

    function welcome() {
        echo "Welcome To PHP";
    }

    welcome();

    function addition() {
        $a = 10;
        $b = 20;
        echo ($a + $b);
    }

    addition();

    function check($a) {
        if ($a % 2 == 0) {
            return "Number is even";
        }else {
            return "Number is odd";
        }
    }

    echo check(10);
    echo "<br>";
    echo check(7);

    */


    function num_check($a, $b, $ope) {
        if ($ope == "+") {
            return $a + $b;
        }elseif ($ope == "-") {
            return $a - $b;
        }elseif ($ope == "*") {
            return $a * $b;
        }elseif ($ope == "/") {
            return $a / $b;
        }else{
            return "Invalid Operator";
        }
    }

   echo num_check(10,20,"-")

?>
