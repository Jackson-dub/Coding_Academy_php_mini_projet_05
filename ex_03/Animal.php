<?php
class Animal{

    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;
    public $name;
    protected $legs;
    protected  $type;
    protected static $typecheck1 = 0;
    protected static $typecheck2 = 0;
    protected static $typecheck3 = 0;
    protected static $count = 0;

    function __construct($param1,$param2,$param3){

       
        $this -> name = $param1;

        if(is_numeric($param2)){
            $this -> legs = $param2;
        }
        
        if($param3 >= 0 && $param3 <= 2){

            switch(true){
                case($param3 == 0):
                    $this -> type = "mammal";
                    self::$typecheck1 ++;
                    self::$count ++;
                break;
                case($param3 == 1):
                    $this -> type = "fish";
                    self::$typecheck2 ++;
                    self::$count ++;
                break;
                case($param3 == 2):
                    $this -> type = "bird";
                    self::$typecheck3 ++;
                    self::$count ++;
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

    public static function getNumberOfAnimalsAlive() {

        $x;

        $x = self::$count;

        if($x == ""){
            $x = 0;
        }

        if($x==1){
            echo "There is currently ".$x." animal alive in our world.".PHP_EOL;
        }elseif( $x > 1 ){
            echo "There are currently ".$x." animals alive in our world.".PHP_EOL;
        }elseif($x == 0){
            echo "There are currently 0 animals alive in our world.".PHP_EOL;
        }

        return $x;  
    }

    static public function getNumberOfMammals() {

        $xm;
   
            $xm = self::$typecheck1;

            if($xm == ""){
                $xm = 0;
            }
              
            if($xm ==1){
                echo "There is currently ".$xm." mammal alive in our world.".PHP_EOL;
            }elseif($xm>1){
                echo "There are currently ".$xm." mammals alive in our world.".PHP_EOL;
            }elseif($xm == 0){
                echo "There are currently 0 mammal alive in our world.".PHP_EOL;
            }

            return $xm;  
        }
        

    static public function getNumberOfFishes() {

        $xf;

        $xf = self::$typecheck2;

        if($xf == ""){
            $xf = 0;
        }
     
    if($xf ==1){
        echo "There is currently ".$xf." fish alive in our world.".PHP_EOL;
    }elseif($xf >1){
        echo "There are currently ".$xf." fishes alive in our world.".PHP_EOL;
    }elseif($x == 0){
        echo "There are currently 0 fish alive in our world.".PHP_EOL;
    }

    return $xf;  

    }
    
    
    public static function getNumberOfBirds() {

        $xb;

            $xb = self::$typecheck3;

            if($xb == ""){
                $xb = 0;
            }

    if($xb ==1){
        echo "There is currently ".$xb." bird alive in our world.".PHP_EOL;
    }elseif($xb == 0 || $xb>1){
        echo "There are currently ".$xb." birds alive in our world.".PHP_EOL;
    }elseif($x == 0){
        echo "There are currently 0 bird alive in our world.".PHP_EOL;
    }

    return $xb;  

    }

    
    function __destruct(){

         switch(true){
             case( $this -> type == "mammal"):
                 self::$typecheck1--;
                 self::$count--;
             break;
             case($this -> type == "fish"):
                 self::$typecheck2--;
                 self::$count--;
             break;
             case($this -> type == "bird"):
                 self::$typecheck3--;
                 self::$count--;
             break;
         }

         if(self::$count < 1){

            self::$count = 0;
            self::$typecheck1 = 0;
            self::$typecheck2 = 0;
            self::$typecheck3 = 0;
         }

    }
}

