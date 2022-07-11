<?php

class Car{

    //propert 
	public $company;

    protected $test = true; 

	private $wheels = 4;
	private $color  = 'white';
	private $egeh = 1;

	

	//method
	public function bibi(){
		return 'bibi';
	}

	public function setColor($newColor){
		if ($newColor !== 'red' ) {
			$this->color = $newColor;
		}

	}

	public function setEgeh($egeh){
		$this->egeh = $egeh;
	}
	
	public function getTest(){
		if ($this->test) {
			return 'This car have got test';
		}
		return 'This car have NOT got test';
	}


	public function getColor(){
		return 'my car color is ' . $this->color. '<br>';
	}

	


}

// $levy = new Car();

