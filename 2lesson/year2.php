<?php

$years =[
	"January" =>"January", 
	"February" => "February",
	"March" => "March",
	"April" => "April",
	"May" => "May",
	"June" => "June",
	"July" => "July",
	"August" => "August",
	"September" => "September",
	"October" =>"October",
	"November" => "November",
	"Dec" => "Dec"
]; 
$days = [
	"January" => 31, 
	"February" => 28, 
	"March" =>31, 
	"April" => 30, 
	"May" => 31, 
	"June" => 30, 
	"July" => 31,
	"August" => 31,
	"September" => 30,
	"October" => 31,
	"November" => 30,
	"Dec" => 31
];

if (!empty($years) 
	&& !empty($days)

){
	foreach($years as $key => $year)
{
	$day = $days[$key];
	echo "in Month $year there is $day days<br>";
}	
}