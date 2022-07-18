<?php
class Fridge{
    private $serial;
    protected $isActiv=true;
    public $temperature = 10;
    protected $errors= [];
    protected $statusActive = 'Active';
    
    private $content = ["milk","bread","meat"];
    // private $statusNames = ["Active", "In-active"];

    const STATUS_ACTIVE = "Active";
    const STATUS_INACTIVE = "Not active";

    private $basicFoods = ["milk", "bread", "meat"];
    
    //קונסטרקטור

    // new Fridge(["milk", "bread", "meat"]);
    // new Fridge(["milk", "milky", "meat"], 0, 0 );
    public function __construct(              
        $serial,
        $content = [], 
        $temperature = 11, // 50
        
        )
    {
        if (!empty($content)){
           $this->content=$content; 
        }
        $this->serial=$serial;
        $this->setTemperature($temperature);
        $this->getErrors();
        

    }

    public function getErrors(){
        if(!empty( $this->errors)){
                    echo 'Something goes wrong'  . implode( ', ', $this->errors);
        }
    }

    //לקבל תכולה
    public function getContent($foodIndexes = [])
    {
        if(empty($foodIndexes)) {
            return $this->content; 
        }
        $arr = [];
        foreach($foodIndexes as $foodIndexe){ 
            if(!array_key_exists($foodIndexe,$this->content))
            {
                continue;
            }            
             $arr[]= $this->content[$foodIndexe];            
        }        
        return $arr;        
    } 
    //לעדכן תכולה
    public function setContent($newContent=[]){
		$this->content = array_merge($this->content,$newContent);  
       // print_r($this->content);     
	}    
    //לקבל מצב פעילות
    public function getIsActiv(){
        if($this->isActiv){
            return $this->statusActive;
            // return self::STATUS_ACTIVE;
        }

        return self::STATUS_INACTIVE;

    }

    //לעדכן מצב פעילות
    //setOposite
    public function setIsActive(){
        $this->isActiv = true;
    }

    public function setOposite(){
        $this->isActiv =!$this->isActiv;
    }

    //לעדכן טמפרטורה
    public function setTemperature($temperature) //50
    {
        if($temperature>30){
            $this->errors []= 
             'warning! Temperature'.$temperature .'too high';
        }
        else if($temperature<10){
            $this->errors []=  'warning! Temperature'.$temperature. 'too low';
        }
        else{
            $this->temperature=$temperature;
        }
        $this->getErrors();
        return 'Temperature'.$temperature. 'updated';
    }

    //לקבל טמפרטורה
    public function getTemperature(){
        return 'The temperature of the refrigerator is' .$this->temperature;
    }

    //האם קיים אוכל בסיסי
    public function isBasicFood(){       
        $arr=[];      
        foreach($this->basicFoods as $basicFood){
            if (!in_array($basicFood,$this->content)){
                $arr[]=$basicFood;
            }
            
        }
        if (empty($arr)){
            return 'There are all the basic food';            
        }
         return "missing: ". implode(', ', $arr);        
    }

    //לקבל מספר סידורי של המקרר
    public function getSerial(){
        echo 'The serial number of the fridge is' .$this->serial;
    }

    
    
}



echo '<pre>';

echo Fridge::STATUS_ACTIVE;
echo '<hr>';
echo Fridge::STATUS_INACTIVE;


die();
$myFridge=new Fridge(
    7463478435, 
    ["milky", "bread", "meat"] );

echo $myFridge->getTemperature();
echo '<hr>';
echo $myFridge->setTemperature(40);
// var_dump($myFridge->temperature);
echo '<hr>';
echo $myFridge->getTemperature();
echo '<hr>';
// $myFridge1->getSerial();
die();
$myFridge=new Fridge('','',["milk","bread1", "bread", "meat"]);

var_dump ($myFridge->getContent([1,0,5]));

//  $myFridge->setContent(["tomato"]);
//  var_dump($myFridge->content);



$myFridge->getSerial();
echo '<hr>';

$basicFood = $myFridge->isBasicFood();
echo $basicFood;

echo $myFridge-> setTemperature(15);
//echo $myFridge->temperature;

echo $myFridge->getTemperature();

//echo $myFridge->getIsActiv();

$myFridge->setIsActiv();
echo $myFridge->getIsActiv();


$myFridge1=new Fridge();
$myFridge2=new Fridge();