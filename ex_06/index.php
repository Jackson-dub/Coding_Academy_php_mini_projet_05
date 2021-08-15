<?php
include_once "Shark.php";
include_once "Canary.php";
include_once "BlueShark.php";
include_once "GreatWhite.php";
include_once "Cat.php";
include_once "Animal.php";

$minet = new Cat("Sylvestre");
$teddy  = new Shark("Teddy");
$ted = new BlueShark("Ted");
$Heddy = new GreatWhite("Heddy");
$titi = new Canary("titi");
$Heddy -> smellBlood(true);
$Heddy -> status();
$Heddy -> eat($ted);
$Heddy -> status();
$titi->__destruct();
Animal::getNumberOfAnimalsAlive();