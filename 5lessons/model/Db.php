<?php 

// Singelton
class DataBase{

    protected $content = [];
    protected $fileName = 'docs/db.json';

	private static $instance = null;

	private function __construct(){
		$this->getFromFile();
		//new DataBase();
	}

	public static function getInstance() {
		if ( self::$instance === null ) {
			self::$instance = new DataBase();
		}
		return self::$instance;
	}

	public function getFromFile(){
		return $this->content = json_decode(
        	file_get_contents($this->fileName), true);
	}

	public function setToFile(){
        file_put_contents($this->fileName ,json_encode($this->content));
    }

	public function getContent($name){
		return $this->content[$name] ?? null;
		
	}


}






