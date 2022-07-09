<?php 

// echo 'functions.php';



function foo($arg){
    $arg = $arg+2;
	return $arg;

}


// $param = foo(4);
// echo $param . '<br>'; // 6


function recursion($a){ 
	if ($a < 20) {
		echo "$a<br>"; // 
		recursion($a + 1);
	}
}
// recursion(4); // 


function makeCoffee($cofee = 'Afuch', $sugar = 0)
{

	return $cofee .' - ' .  $sugar .'<br>';
}

function doubleSugar($sugar){
	 return $sugar*2;
}

$s = doubleSugar(4); // 8
$d = doubleSugar($s); // 
// echo $s .$d;
// echo $d;


function price($price){
	// echo '<pre>';
	// echo $arg;
	// echo '</pre>';
	echo "<pre> price is $price$ </pre>";
}

price(32);

function trim1($arg){
	return trim($arg);
}

$pizza = '   piece piece1 piece2 piece3    ';
echo strlen($pizza); //pizza.length;
$pizza = trim($pizza);
echo strlen($pizza);

//strlen trim explode

// echo "<div style='background:red'>". $pizza .'</div>';
// $passwod = "Test12345"; //hash() 




// Test12345-> jhsdfhdsfkjdsfhdshf234234ksjdfsd




// $pieces = explode(" ", $pizza);

// echo (); // string
// print_r('pieces'); // array
// var_dump($pieces); //








// makeCoffee('Afuch', '2');
// $b = makeCoffee('Botz');
// // echo $a;
// echo $b;
// makeCoffee('');
// makeCoffee();



// echo $param; // test return ;

