<?php
include_once 'Animal.php';
include_once 'Shark.php';

class GreatWhite extends Shark{ 

    function __construct($name){

            parent::__construct($name);
            
  
    }

    function eat($object){

        $food = gettype($object);
       
        if($food == 'object'){

            if(get_class($object) == "Cat" || get_class($object) == "Animal" || $object->getType() == "mammal"){

                echo $this->name." ate a ".$object->getType()." named ".$object->name.'.'.PHP_EOL;
                parent::$count--;
                parent::$typecheck2--;
                
                if($this->frenzy){

                    $this->frenzy = false;
                };

            }elseif(get_class($object) == "Canary"){

                echo $this->name.": Next time you try to give me that to eat, I'll eat you instead.".PHP_EOL;
              
            }elseif(get_class($object)== "Shark" || get_class($object)== "BlueShark"){

                echo $this->name." ate a ".$object->getType()." named ".$object->name.'.'.PHP_EOL;
                echo $this->name.": The best meal one could wish for.".PHP_EOL;
                parent::$count--;
                parent::$typecheck1--;
                if($this->frenzy){

                    $this->frenzy = false;
                };
            }else{
                echo $this->name.": It's not worth my time.".PHP_EOL;
            };

        }else{

            echo $this->name.": It's not worth my time.".PHP_EOL;

        }
    }


    }

