<?php

function getTypeMultiplier($typeA, $typeD){

$typeMult = 1;

      switch ($typeA) {

        case 'NORMAL':
            switch ($typeD){
                case 'ROCK' :
                    $typeMult = 0.5;
                    break;
                case 'GHOST' :
                    $typeMult = 0;
                    break;
                case 'STEEL' :
                    $typeMult = 0.5;
                    break;
                default:
                    break;
            } break;
        case 'FIRE':
            switch ($typeD){
                case 'FIRE' :
                    $typeMult = 0.5;
                    break;
                case 'WATER' :
                    $typeMult = 0.5;
                    break;
                case 'GRASS' :
                    $typeMult = 2;
                    break;
                case 'ICE' :
                    $typeMult = 2;
                    break;
                case 'BUG' :
                    $typeMult = 2;
                    break;
                case 'ROCK' :
                    $typeMult = 0.5;
                    break;
                case 'DRAGON' :
                    $typeMult = 0.5;
                    break;
                case 'STEEL' :
                    $typeMult = 2;
                    break;
                default:
                    break;
            } break;
        case 'WATER':
            switch ($typeD){
                case 'FIRE' :
                    $typeMult = 2;
                    break;
                case 'GROUND' :
                    $typeMult = 2;
                    break;
                case 'GRASS' :
                    $typeMult = 0.5;
                    break;
                case 'WATER' :
                    $typeMult = 0.5;
                    break;
                case 'ROCK' :
                    $typeMult = 2;
                    break;
                case 'DRAGON' :
                    $typeMult = 0.5;
                    break;
                default:
                    break;
            } break;
        case 'ELECTRIC':
            switch ($typeD){
                case 'WATER' :
                    $typeMult = 2;
                    break;
                case 'ELECTRIC' :
                    $typeMult = 0.5;
                    break;
                case 'GRASS' :
                    $typeMult = 0.5;
                    break;
                case 'GROUND' :
                    $typeMult = 0;
                    break;
                case 'FLYING' :
                    $typeMult = 2;
                    break;
                case 'DRAGON' :
                    $typeMult = 0.5;
                    break;
                default:
                    break;
            } break;
        case 'GRASS':
            switch ($typeD){
                case 'FIRE' :
                    $typeMult = 0.5;
                    break;
                case 'WATER' :
                    $typeMult = 2;
                    break;
                case 'GRASS' :
                    $typeMult = 0.5;
                    break;
                case 'POISON' :
                    $typeMult = 0.5;
                    break;
                case 'GROUND' :
                    $typeMult = 2;
                    break;
                case 'FLYING' :
                    $typeMult = 0.5;
                    break;
                case 'BUG' :
                    $typeMult = 0.5;
                    break;
                case 'ROCK' :
                    $typeMult = 2;
                    break;
                case 'DRAGON' :
                    $typeMult = 0.5;
                    break;
                case 'STEEL' :
                    $typeMult = 0.5;
                    break;
                default:
                    break;
            } break;
        case 'ICE':
            switch ($typeD){
                case 'FIRE' :
                    $typeMult = 0.5;
                    break;
                case 'WATER' :
                    $typeMult = 0.5;
                    break;
                case 'GRASS' :
                    $typeMult = 2;
                    break;
                case 'ICE' :
                    $typeMult = 0.5;
                    break;
                case 'GROUND' :
                    $typeMult = 2;
                    break;
                case 'FLYING' :
                    $typeMult = 2;
                    break;
                case 'DRAGON' :
                    $typeMult = 2;
                    break;
                case 'STEEL' :
                    $typeMult = 0.5;
                    break;
                default:
                    break;
            } break;
        case 'FIGHTING':
            switch ($typeD){
                case 'NORMAL' :
                    $typeMult = 2;
                    break;
                case 'ICE' :
                    $typeMult = 2;
                    break;
                case 'PSYCHIC' :
                    $typeMult = 0.5;
                    break;
                case 'POISON' :
                    $typeMult = 0.5;
                    break;
                case 'DARK' :
                    $typeMult = 2;
                    break;
                case 'FLYING' :
                    $typeMult = 0.5;
                    break;
                case 'BUG' :
                    $typeMult = 0.5;
                    break;
                case 'ROCK' :
                    $typeMult = 2;
                    break;
                case 'GHOST' :
                    $typeMult = 0;
                    break;
                case 'STEEL' :
                    $typeMult = 2;
                    break;
                case 'FAIRY' :
                    $typeMult = 0.5;
                    break;
                default:
                    break;
            } break;
        case 'POISON':
            switch ($typeD){
                case 'POISON' :
                    $typeMult = 0.5;
                    break;
                case 'GROUND' :
                    $typeMult = 0.5;
                    break;
                case 'GRASS' :
                    $typeMult = 2;
                    break;
                case 'STEEL' :
                    $typeMult = 0;
                    break;
                case 'ROCK' :
                    $typeMult = 0.5;
                    break;
                case 'GHOST' :
                    $typeMult = 0.5;
                    break;
                case 'FAIRY' :
                    $typeMult = 2;
                    break;
                default:
                    break;
            } break;
        case 'GROUND':
            switch ($typeD){
                case 'FIRE' :
                    $typeMult = 2;
                    break;
                case 'ELECTRIC' :
                    $typeMult = 2;
                    break;
                case 'GRASS' :
                    $typeMult = 0.5;
                    break;
                case 'POISON' :
                    $typeMult = 2;
                    break;
                case 'BUG' :
                    $typeMult = 0.5;
                    break;
                case 'FLYING' :
                    $typeMult = 0;
                    break;
                case 'ROCK' :
                    $typeMult = 2;
                    break;
                case 'STEEL' :
                    $typeMult = 2;
                    break;
                default:
                    break;
            } break;
        case 'FLYING':
            switch ($typeD){
                case 'GRASS' :
                    $typeMult = 2;
                    break;
                case 'ELECTRIC' :
                    $typeMult = 0.5;
                    break;
                case 'figthing' :
                    $typeMult = 2;
                    break;
                case 'BUG' :
                    $typeMult = 2;
                    break;
                case 'ROCK' :
                    $typeMult = 0.5;
                    break;
                case 'STEEL' :
                    $typeMult = 0.5;
                    break;
                default:
                    break;
            } break;
        case 'PSYCHIC':
            switch ($typeD){
                case 'FIGHTING' :
                    $typeMult = 2;
                    break;
                case 'POISON' :
                    $typeMult = 2;
                    break;
                case 'PSYCHIC' :
                    $typeMult = 0.5;
                    break;
                case 'DARK' :
                    $typeMult = 0;
                    break;
                case 'STEEL' :
                    $typeMult = 0.5;
                    break;
                default:
                    break;
            } break;
        case 'BUG':
            switch ($typeD){
                case 'FIRE' :
                    $typeMult = 0.5;
                    break;
                case 'FIGHTING' :
                    $typeMult = 0.5;
                    break;
                case 'GRASS' :
                    $typeMult = 2;
                    break;
                case 'POISON' :
                    $typeMult = 0.5;
                    break;
                case 'PSYCHIC' :
                    $typeMult = 2;
                    break;
                case 'FLYING' :
                    $typeMult = 0.5;
                    break;
                case 'GHOST' :
                    $typeMult = 0.5;
                    break;
                case 'DARK' :
                    $typeMult = 2;
                    break;
                case 'FAIRY' :
                    $typeMult = 0.5;
                    break;
                case 'STEEL' :
                    $typeMult = 0.5;
                    break;
                default:
                    break;
            } break;
        case 'ROCK':
            switch ($typeD){
                case 'FIRE' :
                    $typeMult = 2;
                    break;
                case 'ICE' :
                    $typeMult = 2;
                    break;
                case 'FIGHTING' :
                    $typeMult = 0.5;
                    break;
                case 'GROUNDed' :
                    $typeMult = 0.5;
                    break;
                case 'FLYING' :
                    $typeMult = 2;
                    break;
                case 'BUG' :
                    $typeMult = 2;
                    break;
                case 'STEEL' :
                    $typeMult = 0.5;
                    break;
                default:
                    break;
            } break;
        case 'GHOST':
            switch ($typeD){
                case 'NORMAL' :
                    $typeMult = 0;
                    break;
                case 'PSYCHIC' :
                    $typeMult = 2;
                    break;
                case 'GHOST' :
                    $typeMult = 2;
                    break;
                case 'DARK' :
                    $typeMult = 2;
                    break;
                default:
                    break;
            } break;
        case 'DRAGON':
            switch ($typeD){
                case 'DRAGON' :
                    $typeMult = 2;
                    break;
                case 'STEEL' :
                    $typeMult = 0.5;
                    break;
                case 'FAIRY' :
                    $typeMult = 0;
                    break;
                default:
                    break;
            } break;
        case 'DARK':
            switch ($typeD){
                case 'FIGHTING' :
                    $typeMult = 0.5;
                    break;
                case 'PSYCHIC' :
                    $typeMult = 2;
                    break;
                case 'GHOST' :
                    $typeMult = 2;
                    break;
                case 'DARK' :
                    $typeMult = 0.5;
                    break;
                case 'FAIRY' :
                    $typeMult = 0.5;
                    break;
                default:
                    break;
            } break;
        case 'STEEL':
            switch ($typeD){
                case 'FIRE' :
                    $typeMult = 0.5;
                    break;
                case 'WATER' :
                    $typeMult = 0.5;
                    break;
                case 'ELECTRIC' :
                    $typeMult = 0.5;
                    break;
                case 'ICE' :
                    $typeMult = 2;
                    break;
                case 'ROCK' :
                    $typeMult = 2;
                    break;
                case 'FAIRY' :
                    $typeMult = 2;
                    break;
                case 'STEEL' :
                    $typeMult = 0.5;
                    break;
                default:
                    break;
            } break;
        case 'FAIRY':
            switch ($typeD){
                case 'FIRE' :
                    $typeMult = 0.5;
                    break;
                case 'POISON' :
                    $typeMult = 0.5;
                    break;
                case 'FIGHTING' :
                    $typeMult = 2;
                    break;
                case 'DRAGON' :
                    $typeMult = 2;
                    break;
                case 'DARK' :
                    $typeMult = 2;
                    break;
                case 'STEEL' :
                    $typeMult = 0.5;
                    break;
                default:
                    break;
            } break;
        default:
            //$typeMult = 1;
            break;
    }
    return $typeMult;
}


?>