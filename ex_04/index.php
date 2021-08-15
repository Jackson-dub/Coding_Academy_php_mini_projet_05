<?php
include_once "Animal.php";
include_once "Canary.php";
include_once "Cat.php";
include_once "Shark.php";

$teddy  = new Shark("Teddy");
$teddy -> smellBlood(true);
$teddy -> status();

$titi = new Canary("titi");
$titi->layEgg()."\n";
echo $titi->getEggsCount()."\n";
