<?php 
abstract class Fridge{
    protected $serial;
    public static $bla = 'test';
    const STATUS_ACTIVE = 'Active';
    protected $type = 'fridge';
    public function getType(){
    	echo $this->type;
    }
}

class HomeFridge extends Fridge{
	//..
	function getType(){
		echo self::$bla;
		// $this->$type = 'Home';
	}
	//$this => instanse 
	 
	

}

Final class OfficeFridge extends HomeFridge {
	public $width = '100';
}


class ManufactureFridge extends Fridge{
	//..
	protected $type = 'Manufacture';


}


// echo 

$myFridge = new HomeFridge();
$myFridge->getType();
// $manufactureFridge = new ManufactureFridge();
// $manufactureFridge->getType();

// $fridge = new Fridge();