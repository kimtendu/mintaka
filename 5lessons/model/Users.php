<?php 
include_once 'Db.php';

class Users{

	protected $users = [];

	public function __construct() {
		$dbConnection = DataBase::getInstance();
		$this->users = $dbConnection->getContent('users');
	}

	public function getUsers(){
		return $this->users;
	}
	
}