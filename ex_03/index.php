<?php
include "Cat.php";

$isidore = new Cat('Isidore',"blue");
//print_r($isidore -> getName());
//echo($isidore -> getLegs());
//echo $isidore->getType();

echo $isidore -> getName()." has ".$isidore->getLegs()." legs and is a ".$isidore->getType().".".PHP_EOL;
echo $isidore->getColor()."\n";
$isidore->meow();
//$isidore-> setColor('green');
$isidore->meow();