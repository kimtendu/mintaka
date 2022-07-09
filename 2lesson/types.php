<?php
$str = 'This is string';
$q = 5.56;

$var = "3.52 km"; // string
$newVar = (double)$var; //parseFloat(q); 
$intVar = (integer)$var; //parseInt($i);
/*
var q = "3.52 km";
parseFloat(q);  -> 3
*/


$test = " 3.52 km ";
$test2 = (double)$test + 4;

// "3.52" + 4 => 7.52 //php
// "3.52" + 4 => 3.524 //JS

var_dump( $test2); // 0 