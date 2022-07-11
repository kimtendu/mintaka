<?php 

$json = '{ "name": "Levy", "age": 42 }';
// var_dump($json);


$stdInstance = json_decode($json);  // JSON.parse()

var_dump($stdInstance);

// echo $stdInstance->name  . '<br>'; //"bar"
// echo $stdInstance->age  . '<br>'; //42