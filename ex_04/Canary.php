<?php


include_once "Animal.php";

class Canary extends Animal{

    private $eggs = 0;
    
    function __construct($name){

        $this -> legs = 2;

        parent::__construct($name,2,2);

        echo "Yellow and smart? Here I am!".PHP_EOL;
    }

    function getEggsCount(){
        return $this -> eggs;
    }

    function layEgg(){
        static $count = 0;
        $count++;
        $this -> eggs = $count;
    }

}



