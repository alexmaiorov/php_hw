<?php
// Задание 1
echo "Задание 1<br>";

$a = rand(-1000,1000);
$b = rand(-1000,1000);
echo "a = $a<br>b = $b<br>";

if (gettype($a) != "integer" || gettype($b) != "integer") {
    echo "please, enter integers<br>";
} else if ($a >= 0 && $b >= 0) {
    echo "a - b = " . ($a-$b)."<br>";
} else if ($a < 0 && $b < 0) {
    echo "a * b = " . ($a*$b)."<br>";
} else {
    echo "a + b = " . ($a+$b)."<br>";
}


// Задание 2
echo "<br>Задание 2<br>";

$a = rand(0, 15);
echo "our number is $a <br>";

switch($a){
    case 0:
        echo $a++." ";
    case 1:
        echo $a++." ";
    case 2:
        echo $a++." ";
    case 3:
        echo $a++." ";
    case 4:
        echo $a++." ";
    case 5:
        echo $a++." ";
    case 6:
        echo $a++." ";
    case 7:
        echo $a++." ";
    case 8:
        echo $a++." ";
    case 9:
        echo $a++." ";
    case 10:
        echo $a++." ";
    case 11:
        echo $a++." ";
    case 12:
        echo $a++." ";
    case 13:
        echo $a++." ";
    case 14:
        echo $a++." ";
    case 15:
        echo "$a <br>";
    break;
    default:
    echo "not a number";
}

// Задание 3
function sum($a, $b){
    return $a + $b;
}

function sub($a,$b){
    return $a - $b;
}

function mul($a, $b){
    return $a * $b;
}

function div($a, $b){
    if ($b !== 0) {
        return $a/$b;
    } else {
        echo "second number can't be zero";
    }
}

// Задание 4
echo "<br>Задание 3,4<br>";

$num1 = rand(-1000,1000);
$num2 = rand(-1000,1000);
$opArr = array("+", "-", "*", "/");
$op = $opArr[rand(0,3)];

echo "($num1) $op ($num2) = ";

function mathOperation($arg1, $arg2, $operation){
    switch($operation){
        case '+':
            return sum($arg1, $arg2);
            break;
        case '-':
            return sub($arg1, $arg2);
            break;
        case '*':
            return mul($arg1, $arg2);
            break;
        case '/':
            return div($arg1, $arg2);
            break;
    }
}

echo mathOperation($num1, $num2, $op)."<br>";

// Задание 6
echo "<br>Задание 6<br>";

function power($val, $pow){
    if ($pow === 0) return 1;
    if ($pow != 1){
        $pow--;
        return $val * power($val, $pow);
    }
    return $val;
}

echo power(11,2)."<br>";

// Задание 7
echo "<br>Задание 7<br>";

$h = date("H");
$m = date("i");

function hourTransform($h){
    if ($h==1 || $h==21) {
        $str = " час";
    } else if (($h>=2 && $h<=4) || ($h>=22 && $h<=24)) {
        $str = " часа";
    } else {
        $str = " часов";
    }
    return $str;
}

function minuteTransform($m){
    if ($m > 10 && $m < 20){
        $str = " минут";
    } else if (($m % 10) === 1) {
        $str = " минута";
    } else if ((($m % 10) >= 2) && (($m % 10) <= 4)){
        $str = " минуты";
    } else {
        $str = " минут";
    }
    return $str;
}

echo "$h ".hourTransform($h)." $m ".minuteTransform($m);
?>