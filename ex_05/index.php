<?php
include_once "Animal.php";
include_once "Canary.php";
include_once "Shark.php";
include_once "Cat.php";

$james = new Shark("James");
$titi = new Canary("Titi");
$sylvestre = new Cat("Sylvestre");
 ///////////////////////////////
 echo $titi -> getType();
 Animal::getNumberOfAnimalsAlive();
 $james->eat($sylvestre);
 Animal::getNumberOfAnimalsAlive();