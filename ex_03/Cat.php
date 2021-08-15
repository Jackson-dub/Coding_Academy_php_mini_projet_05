<?php
include_once "Animal.php";

class Cat extends Animal{

    protected $color;
    
    function __construct($name,$color=null){

        if(! $color){

            $this -> color ="grey";

        }else{

            $this -> color = $color;
            
        };
       
        if($name){

            parent::__construct($name,null,null);

            $this->type = "mammal";
            $this->legs = 4;
            
        echo $this->name.": MEEEOOWWWW".PHP_EOL;

        }else{
            die;
        }
    }

    function getColor(){
        return $this->color;
    }

    function setColor($newColor){
        
        if($newColor && gettype($newColor)=="string"){

            $this->color = $newColor;

            return $this -> color;

        }          
    }

    public function meow(){
        echo $this->name." the ".$this->color." kitty is meowing.".PHP_EOL;
    }

}

