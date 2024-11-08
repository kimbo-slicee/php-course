<?php
// Type Juggling  and Type Conversion in PHP
$number = 10;       // Integer
$result = $number + 2.5; // Float
echo $result; // Output: 12.5
echo gettype($result);//Double => Float
$value = "10";
$total = $value + 5;
echo $total; // Output: 15
echo gettype($total);//Integer
echo 1 + "2";
echo "<br>";
echo gettype(1+"2");// guess the type yes The return data type is integer
echo 5 + "5 users";
echo gettype(2+"2 files");
echo(true + true);//??and gettype
echo (false);//??
echo (false + true - false);//??
//The maine Note 📍: the type of input data style the same a never change but the output type change
$var = "5.7";
$intVar = (int) $var;    // Converts to integer: 5
$floatVar = (float) $var; // Converts to float: 5.7
# Type Conversion with Functions
/*
 *
 * */
