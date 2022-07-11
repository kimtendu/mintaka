<?php
$myArray = 
	[
		15, 
		NULL, 
		1, 
		"  ", 
		-2, 
		
		"", 
		"\n", 
		"Red", 
		54, 
		"\t" 
	];
	echo '<pre>';
print_r($myArray);



function clearArray($array){
	$newArray = [];

	foreach ($array as $key => $value){
		if (!empty($value)){ 
			$value = trim($value); 
			if (!empty($value)) {
				// echo __LINE__ . '  -  '.$value .' not empty <br>';
				$newArray[] = $value;
			}
			
		}
	}	

	return $newArray;
}

print_r (clearArray($myArray));

