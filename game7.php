<?php
require 'types.php';
$typeCheck = true;
$typeCheckD = true;
$typeCheckD2 = true;
$typeCheckM = true;
$stab = 1;
$type_array = array('NORMAL', 'FIRE', 'WATER', 'GRASS', 'ELECTRIC', 'ROCK',
                    'GROUND', 'ICE', 'FIGHTING', 'POISON', 'PSYCHIC', 'FLYING',
                    'BUG', 'GHOST', 'DRAGON', 'DARK', 'STEEL', 'FAIRY');
$level = 50;
//$name = readline("What is the name: ");

//$att = readline("Attack / Special Attack: ");

//$moveName = readline("What is the move: ");
//$bp = readline("What is the move's base power: ");


while($typeCheckM){
    $typeA = strtoupper(trim(readline("What is the type of the attack move: ")));
    if (!in_array($typeA, $type_array)){
        printf ("That is not a valid type of attack move. ");
        }
    else {
        $typeCheckM = false;
        }
    }

while($typeCheckD){
    $typeD1 = strtoupper(trim(readline("What is the first type of the defender: ")));
    if (!in_array($typeD1, $type_array)){
        printf ("That is not a valid type of defender. ");
        }
    else {
        $typeCheckD = false;
        }
    }

$multiType = strtoupper(trim(readline("Does the defender have a second type? Yes or No: ")));

if($multiType == "YES"){
    while($typeCheckD2){
        $typeD2 = strtoupper(trim(readline("What is the second type of the defender: ")));
        if (!in_array($typeD2, $type_array)){
            printf("That is not a valid type of defender. ");
            }
        else {
            $typeCheckD2 = false;
            }
        }
        $type1 = getTypeMultiplier($typeA, $typeD1);
        $type2 = getTypeMultiplier($typeA, $typeD2);
        $type = $type1 * $type2;
    }
    if($multiType == "NO") {
            $type = getTypeMultiplier($typeA, $typeD1);
        }

while($typeCheck){
    $moveType = strtoupper(trim(readline("What is the type of the attacker? ")));
    if (!in_array($moveType, $type_array)){
        printf ("That is not a valid type of attacker. ");
        }
    else {
        $typeCheck = false;
        }
    }

if($moveType == $typeA){
    $stab = 1.5;
    }

echo $type ."\n";
echo $stab ."\n";

//$defD = readline("Defense: ");
//$sdefD = readline("Special Defense: ");

//$modifier = $stab * $type * $critical * $random;

//$damage = (((2*$level+10)/250)*($att/$defD)*$bp+2);

?>