<?php
$input = readline("What is ur name? > ");
$length = strlen($input);
$list = str_split($input);

while($length>0){
    echo end($list) . "\n";
    array_pop($list);
    $length--;
}

?>
