<?php
$person = [
	"first_name" => "Levy", 
	"last_name" => "Kim", 
	"address" => "David Reznik", 
	"city" => "Netanya",
	"Country" => ''
];

// echo $person['Country'];

if (
	array_key_exists("Country", $person) 
	&& !empty($person['Country']) 
){

	echo $person['Country'];
 } else {
 	echo 'Add a value of country';
 }

// $key = array_key_exists("Country", $person); 

// var_dump($key);


?>
<hr>

<?php 
$os = ["Mac", "NT", "Irix", "Linux"]; 
if (in_array("Irix", $os)) {
	echo "Got Irix";
}

if (in_array("mac", $os)){ 
	echo "Got mac";
}
?>

<hr>

<?php 

$array = [
	0 => 'blue', 
	1 => 'red', 
    "color" => 'green', 
	3 => 'red'
];

$key = array_search('green', $array); 
var_dump($key);
$key = array_search('color', $array);	
var_dump($key);
?>
<hr>

<?php

$langages = [
	"p"=>"PHP", 
	"h"=>"PHP", 
	"a"=>"Ada", 
	"z"=>"HTML"
];
$v1 = array_keys($langages);
var_dump($v1); // obj.keys();
$v2 = array_keys($langages, "PHP");
var_dump($v2);
$v3 = array_search('PHP', $langages); 
var_dump($v3);
//Return Array([0]=>"p", [1]=>"h"])
?>
<hr>

<?php 

$t = array_search('pp', array_keys($langages));
 var_dump($t);

if (!is_bool($t)){
	echo 'true';
} else {
	echo 'false';
}

?>
<hr>

<?php 
$arrs = [78, 60, 62, 6];
var_dump(sort($arrs));

var_dump($arrs);


?>
<hr>

<?php 

$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
];

$avg = 0;
foreach($numbers as $number) {
	$avg += $number /count($numbers);

}
echo $avg;



