<?php
class Animal{

    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;
    public $name;
    protected $legs;
    protected $type;

    function __construct($param1,$param2,$param3){

        $this -> name = $param1;

        if(is_numeric($param2)){
            $this -> legs = $param2;
        }
        
        if(is_numeric($param3)&& ($param3 >=0 && $param3 <= 2)){

            switch(true){
                case($param3 == self::MAMMAL):
                    $this -> type = "mammal";
                break;
                case($param3 == self::FISH):
                    $this -> type = "fish";
                break;
                case($param3 == self::BIRD):
                    $this -> type = "bird";
                break;
            }
        }
        
        echo "My name is ".$this->name." and I am a ".$this->type."!".PHP_EOL;
    }

    function getName(){
        return $this -> name;
    }

    function getLegs(){
        return $this -> legs;
    }

    function getType(){
        return $this -> type;
    }

}

//$isidore = new Animal("Isidor",4,1);
//echo $isidore->getType();
//echo $isidore->getName()." has ".$isidore->getLegs()." legs and is a ".$isidore->getType().".\n";