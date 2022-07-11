<?php 
include_once 'classCar.php';

class OldCar extends Car{
	public $prevOwnerName = 'Yad 2';

	public $ownerName;

	public function __construct($name) {
		$this->ownerName = $name; 
		$this->test = false;	
	}

}




$bobCar = new OldCar('Bob');
echo $bobCar->ownerName;
// $bobCar->test = 'true';
// echo $bobCar->getColor();
echo $bobCar->getTest();
// echo $bobCar->prevOwner;