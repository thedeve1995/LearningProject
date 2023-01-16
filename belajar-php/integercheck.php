<?php

$x = 2000;
var_dump(is_int($x));
// Hasilnya adalah bool(true)

$y= 20.90;
var_dump(is_int($y));
// Hasilnya adalah bool(false)

$x = 2000;
var_dump(is_float($x));
// Hasilnya adalah bool(False)

$y= 20.90;
var_dump(is_float($y));
// Hasilnya adalah bool(True)

$x = 2.3e5;
var_dump($x);
// Hasilnya adalah float(230000)

$x = 2.3e500;
var_dump($x);
// Hasilnya adalah float(INF)

$x = acos(8);
var_dump($x);
// Hasilnya adalah float(NAN)

$x = "500";
var_dump(is_numeric($x));
// Hasilnya adalah bool(true)

$x = 500;
var_dump(is_numeric($x));
// Hasilnya adalah bool(true)

$x = "50" + "40.67";
var_dump(is_numeric($x));
// Hasilnya adalah bool(true)

$x = "Hello Friends !";
var_dump(is_numeric($x));
// Hasilnya adalah bool(false )

$y = 50.8;
$int_cast = (int)$y; 
echo $int_cast;
                                                            


$g = 45.897;
$int_g= (int)$g;
echo $int_g;




?>


