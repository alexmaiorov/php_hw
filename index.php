<?php
$a = 1;
$b = 2;
echo "a = $a <br> b = $b <br>";
$a = $a + $b;
$b = $b - $a;
$b = -$b;
$a = $a - $b;
echo "new values <br>";
echo "a = $a <br> b = $b";
?>
