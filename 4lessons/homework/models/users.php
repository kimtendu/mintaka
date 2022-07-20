<?php 
include_once 'db.php';
class Users extends DataBase{
	protected $fileName="users.json";


    public function __construct()
    {
        $this->getFromFile(); //1s
    }
    
    public function setUser($user){
    	$this->getFromFile();
        $this->content = array_merge($this->content, $user);
        $this->setToFile();
        echo "setUser";
        $this->getUsers();
    }

    public function getUsers(){
    	$this->getFromFile();
        var_dump($this->content);
    }
}

