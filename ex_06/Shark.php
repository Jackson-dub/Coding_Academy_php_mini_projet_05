<?php
include_once 'Animal.php';

class Shark extends Animal{

    protected $frenzy = false;
    

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

    function eat($object){

        $food = gettype($object);

        if($food == 'object'){

            if(get_class($object) == "Animal" || get_class($object) == "Cat" || get_class($object) == "Canary" && get_class($object) !== "Shark"){

                echo $this->name." ate a ".$object->getType()." named ".$object->name.'.'.PHP_EOL;
                
                parent::$count--;
                
                switch(true){

                    case($object->getType() == "mammal"):
                        parent::$typecheck1 --;
                    break;
                    case($object->getType() == "fish"):
                        parent::$typecheck2 --;
                    break;
                    case($object->getType() == "bird"):
                        parent::$typecheck3 --;
                    break;

                }

                if($this->frenzy){
                    $this->frenzy = false;
                };

            }else{

                echo $this->name.": It's not worth my time.".PHP_EOL;
               
            }
        }


    }

}
