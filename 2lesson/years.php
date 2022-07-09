<?php 

$years =[
	"January", 
	"February",
	"March",
	"April",
	"May",
	"June",
	"July",
	"August",
	"September",
	"October",
	"November",
	"Dec"
]; 
$days = [
	31, 
	28, 
	31, 
	30, 
	31, 
	30, 
	31,
	31,
	30,
	31,
	30,
	31
];

if (!empty($years) 
	&& !empty($days)
	&& count($years) === 12
	&& count($years) === count($days) 

){
	// for ($i= 0; $i< count($years); $i ++) 
	foreach ($years as $key => $value)
	{
		echo "in Month $value there is $days[$key] days<br>";
	}	
}
