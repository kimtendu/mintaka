<?php 

interface Machine {
	public function wash();

	public function dry();
}

abstract class Machines {
	public function setTemperature(){
		return true;
	}
}


class WashingMachine extends Machines implements Machine{
	public function wash(){
		return 'wash';
	}

	public function dry(){
		return false;
	}
}

class DryMachine implements Machine{
	public function wash(){
			return false;
	}

	public function dry(){
		return 'dry';
	}
}

$machine = new WashingMachine();