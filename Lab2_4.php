<?php
#intergral data
$x = 67;
echo $x . "<br>"; 
echo gettype($x) . "<br>";

$y = 0126;
echo $y . "<br>";
echo gettype($y) . "<br>";

$z = 0x1b9;
echo $z . "<br>";

$w = 0X1B9;
echo $w . "<br>";

$a = 1753;
$b = +432;
$c = -46;

echo "$a, $b, $c";

$x1 = 5678;
$x2 = -5678;
$x3 = 0123;
$x4 = 0x1A;

echo "$x1, $x2, $x3, $x4<br>"; 

echo gettype($x1) . "<br>";
echo gettype($x2) . "<br>";
echo gettype($x3) . "<br>";
echo gettype($x4) . "<br>";

#floating point

$s = 3.14125;

$t = -3.14125;

$u = 47.895;

echo "$s, $t, $u <br>";

echo gettype($s) . "<br>";
echo gettype($t) . "<br>";
echo gettype($u) . "<br>";

$n1 = 6.25e+15;
$n2 = 6.25E15;
$n3 = 2.74E-23;
$n4 = - 1.268e7;
$n5 = -9.317e-14;

echo "$n1<br> $n2<br> $n3<br> $n4<br> $n5<br>";

echo $n1 * 5;

echo 1.268e13 . "<br>";

echo 1.268e14 . "<br>";

echo -1.268e13 . "<br>";

echo -1.268e14 . "<br>";

?>


