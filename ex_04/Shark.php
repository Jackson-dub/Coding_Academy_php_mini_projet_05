<?php
include_once 'Animal.php';

class Shark extends Animal{

    private $frenzy = false;
    

    function __construct($name){
            
            parent::__construct($name,0,1);

            echo "A KILLER IS BORN!".PHP_EOL;
    }

    function smellBlood(bool $bool){

        $boolType = gettype($bool);
      
        if($boolType === "boolean"){
            $this -> frenzy = $bool;
        }  

    }

    function status(){

        if($this -> frenzy){

            echo $this -> name." is smelling blood and wants to kill.".PHP_EOL;

        }else{
            echo $this -> name." is swimming peacefully.".PHP_EOL;
        }
    }

}