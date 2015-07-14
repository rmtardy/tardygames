<?php

$level = 50;
//$name = readline("What is the name: ");
//$hp = readline("HP: ");
$att = readline("Attack: ");
//$def = readline("Defense: ");
//$spatt = readline("Special Attack: ");
//$sdef = readline("Special Defense: ");
//$speed = readline("Speed: ");

//$moveName = readline("What is the move: ");
$bp = readline("What is the move's base power: ");
//$typeA = readline("What is the type of the attack: ");

//$nameD = readline("What is the name: ");
//$hpD = readline("HP: ");
//$attD = readline("Attack: ");
$defD = readline("Defense: ");
//$spattD = readline("Special Attack: ");
//$sdefD = readline("Special Defense: ");
//$speedD = readline("Speed: ");

$modifier = 

$damage = (((2*$level+10)/250)*($att/$defD)*$bp+2) * $modifier;
echo $damage;





?>