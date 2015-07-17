<?php
require 'types.php';
$typeCheckA = true;
$typeCheckA2 = true;
$typeCheckD = true;
$typeCheckD2 = true;
$typeCheckM = true;
$yesCheckA = true;
$yesCheckD = true;
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
    $moveType = strtoupper(trim(readline("What is the type of the attack move: ")));
    if (!in_array($moveType, $type_array)){
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

while($yesCheckD){
    $multiTypeD = strtoupper(trim(readline("Does the defender have a second type? Yes or No: ")));
    if ($multiTypeD == "YES" || $multiTypeD == "NO"){
        $yesCheckD = false;
        }
    }
        if($multiTypeD == "YES"){
                while ($typeCheckD2){
                    $typeD2 = strtoupper(trim(readline("What is the second type of the defender: ")));
                    if (!in_array($typeD2, $type_array)){
                        printf("That is not a valid type of defender. ");
                    }
                    else {
                        $typeCheckD2 = false;
                    }
                }
                    $type1 = getTypeMultiplier($moveType, $typeD1);
                    $type2 = getTypeMultiplier($moveType, $typeD2);
                    $type = $type1 * $type2;
                }
        if($multiTypeD == "NO") {
            $type = getTypeMultiplier($moveType, $typeD1);
            }



while ($typeCheckA){
    $typeA = strtoupper(trim(readline("What is the first type of the attacker? ")));
    if (!in_array($typeA, $type_array)){
        printf ("That is not a valid type of attacker. ");
        }
    else {
        $typeCheckA = false;
        }
    }

while ($yesCheckA){
    $multiTypeA = strtoupper(trim(readline("Does the attacker have a second type? Yes or No: ")));
        if($multiTypeA == "YES" || $multiTypeA == "NO"){
            $yesCheckA = false;
        }
        if ($multiTypeA == "YES"){
            while ($typeCheckA2){
                $typeA2 = strtoupper(trim(readline("What is the second type of the attacker: ")));
                    if (!in_array($typeA2, $type_array)){
                        printf("That is not a valid type of attacker. ");
                        }
                    else {
                        $typeCheckA2 = false;
                        }
                    }
                    if ($moveType == $typeA2 || $moveType == $typeA){
                        $stab = 1.5;
                        }
            }
            if ($multiTypeA == "NO"){
                $yesCheckA = false;
                if($typeA == $typeA){
                       $stab = 1.5;
                        }
            }
        // if ($multiTypeA !== "YES" || $multiTypeA !== "NO"){
        //     printf("Check spelling. ");
        //     }
        }



// if($multiTypeA == "NO") {
//     if($typeA == $typeA){
//         $stab = 1.5;
//         }
//     }

echo $type ."\n";
echo $stab ."\n";

//$defD = readline("Defense: ");
//$sdefD = readline("Special Defense: ");

//$modifier = $stab * $type * $critical * $random;

//$damage = (((2*$level+10)/250)*($att/$defD)*$bp+2);

?>