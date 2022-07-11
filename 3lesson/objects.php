<?php 

$a = [
	'name'  => "levy",
	'age'  => 33,
	'city'  => 'Netanya',
];

echo '<pre>';
var_dump($a);
echo $a['name'];
echo '<br>';

$b = (object) $a; 
var_dump($b);

echo $b->age;

echo '<br>';

$obj = new stdClass();
$obj->name = "Avner";
$obj->age = 8;


/*

 obj = {
	
 };  // 

 console.log(obj);

 */

echo $obj->name;