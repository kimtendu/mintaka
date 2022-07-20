<?php
abstract class DataBase{
    protected $content = [];
    protected $fileName = "";

    protected function getFromFile(){
        $this->content = json_decode(
        	file_get_contents($this->fileName), true);
    }

    protected function setToFile(){
        file_put_contents($this->fileName ,json_encode($this->content));
    }
}
