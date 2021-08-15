<?php
include_once 'Animal.php';
include_once 'Shark.php';

class BlueShark extends Shark{

 

    function __construct($name){

            parent::__construct($name);
         
    }

    function eat($object){

        $food = gettype($object);

        if($food == 'object'){

                switch(true){

                    case($object -> getType() == "fish"):

                        echo $this->name." ate a ".$object->getType()." named ".$object->name.".".PHP_EOL;
                        parent::$count--;
                        parent::$typecheck2--;
                        if($this->frenzy){
                            $this->frenzy = false;
                        };
                    break;
                    default:
                    echo $this->name.": It's not worth my time.".PHP_EOL;
                };
            }else{
                echo $this->name.": It's not worth my time.".PHP_EOL;
            }
    }


}
