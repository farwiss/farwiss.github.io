<!DOCTYPE html>
<html>
<head>
    <title>OPERATOR ARITMATIKA</title>
</head>

<body>
<h1>VARIABEL DAN OPERATOR ARITMATIKA</h1>
<hr>

<?php
//Pertemuan 3 - Membuat Variabel dan Operator Aritmatika

//variabel
$a = 7;
$b = 2;
$c = 7.5;
$d = 2.5;
$e = -7.5;

//operator (+)
echo "<br>PENJUMLAHAN <br/>";

$w = $a+$b;
$x = $c+$b;
$y = $c+$d;
$z = $e+$d;

echo "$a + $b = $w<br/>"; 
echo "$c + $b = $x<br/>";
echo "$c + $d = $y<br/>";
echo "$e + $d = $z<br/>";


//operator (-)
echo "<br>PENGURANGAN<br/>";

$w = $a-$b;
$x = $c-$b;
$y = $c-$d;
$z = $e-$d;

echo "$a - $b = $w<br/>"; 
echo "$c - $b = $x<br/>";
echo "$c - $d = $y<br/>";
echo "$e - $d = $z<br/>";

//operator (*)
echo "<br>PERKALIAN<br/>";

$w = $a*$b;
$x = $c*$b;
$y = $c*$d;
$z = $e*$d;

echo "$a x $b = $w<br/>"; 
echo "$c x $b = $x<br/>";
echo "$c x $d = $y<br/>";
echo "$e x $d = $z<br/>";

//operator (/)
echo "<br>PEMBAGIAN<br/>";

$w = $a/$b;
$x = $c/$b;
$y = $c/$d;
$z = $e/$d;

echo "$a : $b = $w<br/>"; 
echo "$c : $b = $x<br/>";
echo "$c : $d = $y<br/>";
echo "$e : $d = $z<br/>";

//operator (%)
echo "<br>SISA BAGI (MODULUS)<br/>";

$w = $a%$b;
$x = $c%$b;
$y = $c%$d;
$z = $e%$d;

echo "$a % $b = $w<br/>"; 
echo "$c % $b = $x<br/>";
echo "$c % $d = $y<br/>";
echo "$e % $d = $z<br/>";

?>
