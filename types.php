<?php
$typeMult = 1;

switch ($typeA) {
    case 'normal':
        switch ($typeD){
            case 'rock' :
                $typeMult == 0.5;
                break;
            case 'ghost' :
                $typeMult == 0;
                break;
            case 'steel' :
                $typeMult == 0.5;
                break;
            default:
                break;
        } break;
    case 'fire':
        switch ($typeD){
            case 'fire' :
                $typeMult == 0.5;
                break;
            case 'water' :
                $typeMult == 0.5;
                break;
            case 'grass' :
                $typeMult == 2;
                break;
            case 'ice' :
                $typeMult == 2;
                break;
            case 'bug' :
                $typeMult == 2;
                break;
            case 'rock' :
                $typeMult == 0.5;
                break;
            case 'dragon' :
                $typeMult == 0.5;
                break;
            case 'steel' :
                $typeMult == 2;
                break;
            default:
                break;
        } break;
    case 'water':
        switch ($typeD){
            case 'fire' :
                $typeMult == 2;
                break;
            case 'ground' :
                $typeMult == 2;
                break;
            case 'grass' :
                $typeMult == 0.5;
                break;
            case 'water' :
                $typeMult == 0.5;
                break;
            case 'rock' :
                $typeMult == 2;
                break;
            case 'dragon' :
                $typeMult == 0.5;
                break;
            default:
                break;
        } break;
    case 'electric':
        switch ($typeD){
            case 'water' :
                $typeMult == 2;
                break;
            case 'electric' :
                $typeMult == 0.5;
                break;
            case 'grass' :
                $typeMult == 0.5;
                break;
            case 'ground' :
                $typeMult == 0;
                break;
            case 'electric' :
                $typeMult == 0.5;
                break;
            case 'grass' :
                $typeMult == 0.5;
                break;
            default:
                break;
        } break;
    case 'grass':
        switch ($typeD){
            case 'fire' :
                $typeMult == 0.5;
                break;
            case 'water' :
                $typeMult == 2;
                break;
            case 'grass' :
                $typeMult == 0.5;
                break;
            case 'poison' :
                $typeMult == 0.5;
                break;
            case 'ground' :
                $typeMult == 2;
                break;
            case 'flying' :
                $typeMult == 0.5;
                break;
            case 'bug' :
                $typeMult == 0.5;
                break;
            case 'rock' :
                $typeMult == 2;
                break;
            case 'dragon' :
                $typeMult == 0.5;
                break;
            case 'steel' :
                $typeMult == 0.5;
                break;
            default:
                break;
        } break;
    case 'ice':
        switch ($typeD){
            case 'fire' :
                $typeMult == 0.5;
                break;
            case 'water' :
                $typeMult == 0.5;
                break;
            case 'grass' :
                $typeMult == 2;
                break;
            case 'ice' :
                $typeMult == 0.5;
                break;
            case 'ground' :
                $typeMult == 2;
                break;
            case 'flying' :
                $typeMult == 2;
                break;
            case 'dragon' :
                $typeMult == 2;
                break;
            case 'steel' :
                $typeMult == 0.5;
                break;
            default:
                break;
        } break;
    case 'fighting':
        switch ($typeD){
            case 'normal' :
                $typeMult == 2;
                break;
            case 'ice' :
                $typeMult == 2;
                break;
            case 'psychic' :
                $typeMult == 0.5;
                break;
            case 'poison' :
                $typeMult == 0.5;
                break;
            case 'dark' :
                $typeMult == 2;
                break;
            case 'flying' :
                $typeMult == 0.5;
                break;
            case 'bug' :
                $typeMult == 0.5;
                break;
            case 'rock' :
                $typeMult == 2;
                break;
            case 'ghost' :
                $typeMult == 0;
                break;
            case 'steel' :
                $typeMult == 2;
                break;
            case 'fairy' :
                $typeMult == 0.5;
                break;
            default:
                break;
        } break;
    case 'poison':
        switch ($typeD{
            case 'poison' :
                $typeMult == 0.5;
                break;
            case 'ground' :
                $typeMult == 0.5;
                break;
            case 'grass' :
                $typeMult == 2;
                break;
            case 'steel' :
                $typeMult == 0;
                break;
            case 'rock' :
                $typeMult == 0.5;
                break;
            case 'ghost' :
                $typeMult == 0.5;
                break;
            case 'fairy' :
                $typeMult == 2;
                break;
            default:
                break;
        } break;
    case 'ground':
        switch ($typeD){
            case 'fire' :
                $typeMult == 2;
                break;
            case 'electric' :
                $typeMult == 2;
                break;
            case 'grass' :
                $typeMult == 0.5;
                break;
            case 'poison' :
                $typeMult == 2;
                break;
            case 'bug' :
                $typeMult == 0.5;
                break;
            case 'flying' :
                $typeMult == 0;
                break;
            case 'rock' :
                $typeMult == 2;
                break;
            case 'steel' :
                $typeMult == 2;
                break;
            default:
                break;
        } break;
    case 'flying':
        switch ($typeD){
            case 'grass' :
                $typeMult == 2;
                break;
            case 'electric' :
                $typeMult == 0.5;
                break;
            case 'figthing' :
                $typeMult == 2;
                break;
            case 'bug' :
                $typeMult == 2;
                break;
            case 'rock' :
                $typeMult == 0.5;
                break;
            case 'steel' :
                $typeMult == 0.5;
                break;
            default:
                break;
        } break;
    case 'psychic':
        switch ($typeD){
            case 'fighting' :
                $typeMult == 2;
                break;
            case 'poison' :
                $typeMult == 2;
                break;
            case 'psychic' :
                $typeMult == 0.5;
                break;
            case 'dark' :
                $typeMult == 0;
                break;
            case 'steel' :
                $typeMult == 0.5;
                break;
            default:
                break;
        } break;
    case 'bug':
        switch ($typeD){
            case 'fire' :
                $typeMult == 0.5;
                break;
            case 'fighting' :
                $typeMult == 0.5;
                break;
            case 'grass' :
                $typeMult == 2;
                break;
            case 'poison' :
                $typeMult == 0.5;
                break;
            case 'psychic' :
                $typeMult == 2;
                break;
            case 'flying' :
                $typeMult == 0.5;
                break;
            case 'ghost' :
                $typeMult == 0.5;
                break;
            case 'dark' :
                $typeMult == 2;
                break;
            case 'fairy' :
                $typeMult == 0.5;
                break;
            case 'steel' :
                $typeMult == 0.5;
                break;
            default:
                break;
        } break;
    case 'rock':
        switch ($typeD){
            case 'fire' :
                $typeMult == 2;
                break;
            case 'ice' :
                $typeMult == 2;
                break;
            case 'fighting' :
                $typeMult == 0.5;
                break;
            case 'grounded' :
                $typeMult == 0.5;
                break;
            case 'flying' :
                $typeMult == 2;
                break;
            case 'bug' :
                $typeMult == 2;
                break;
            case 'steel' :
                $typeMult == 0.5;
                break;
            default:
                break;
        } break;
    case 'ghost':
        switch ($typeD){
            case 'normal' :
                $typeMult == 0;
                break;
            case 'psychic' :
                $typeMult == 2;
                break;
            case 'ghost' :
                $typeMult == 2;
                break;
            case 'dark' :
                $typeMult == 2;
                break;
            default:
                break;
        } break;
    case 'dragon':
        switch ($typeD){
            case 'dragon' :
                $typeMult == 2;
                break;
            case 'steel' :
                $typeMult == 0.5;
                break;
            case 'fairy' :
                $typeMult == 0;
                break;
            default:
                break;
        } break;
    case 'dark':
        switch ($typeD){
            case 'fighting' :
                $typeMult == 0.5;
                break;
            case 'psychic' :
                $typeMult == 2;
                break;
            case 'ghost' :
                $typeMult == 2;
                break;
            case 'dark' :
                $typeMult == 0.5;
                break;
            case 'fairy' :
                $typeMult == 0.5;
                break;
            default:
                break;
        } break;
    case 'steel':
        switch ($typeD){
            case 'fire' :
                $typeMult == 0.5;
                break;
            case 'water' :
                $typeMult == 0.5;
                break;
            case 'electric' :
                $typeMult == 0.5;
                break;
            case 'ice' :
                $typeMult == 2;
                break;
            case 'rock' :
                $typeMult == 2;
                break;
            case 'fairy' :
                $typeMult == 2;
                break;
            case 'steel' :
                $typeMult == 0.5;
                break;
            default:
                break;
        } break;
    case 'fairy':
        switch ($typeD){
            case 'fire' :
                $typeMult == 0.5;
                break;
            case 'poison' :
                $typeMult == 0.5;
                break;
            case 'fighting' :
                $typeMult == 2;
                break;
            case 'dragon' :
                $typeMult == 2;
                break;
            case 'dark' :
                $typeMult == 2;
                break;
            case 'steel' :
                $typeMult == 0.5;
                break;
            default:
                break;
        } break;
}
?>