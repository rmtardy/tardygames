<?php
$count=1;
while($count<=100){if($count%15==0){printf("fizzbuzz\n");}
    else if($count%5==0){printf("buzz\n");}
    else if($count%3==0){printf("fizz\n");}
    else {printf($count."\n");}
    $count++;}
?>
