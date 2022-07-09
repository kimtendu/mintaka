<?php 
// $cms = ["WordPress", "Joomla", "Drupal"];
// echo "What is your favorite CMS? Is it " . $cms[0] . ", " . $cms[1] . " or "
// . $cms[2] . "?";



$person = [
	"first_name" => "Levy", 
	"last_name" => "Kim", 
	"address" => "David Reznik", 
	"city" => "Netanya",
];
//You can add data like this:
$person["country"] = "Israel";
$person['first_name'] = "Levy Izhak";
print_r($person);

foreach($person as $key => $p){
	// echo $p .'<br>';
	echo $key .'-'. $p .'<br>';
}


// $cms = [
// 	"WordPress",  // 0
// 	"Joomla",  //1 
// 	"Drupal" //2
// ];
// // var_dump($cms[0]); //WordPress
// // var_dump(count($cms));

//  for ( $i = 0; $i < count($cms); $i++ ){
//  	echo $cms[$i];

//  } 

