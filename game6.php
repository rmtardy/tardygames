//Sum of all numbers divisible by 3 and 5 from 1-1000
<?php
$count=0;
$fizz = 0;
$buzz = 0;
while($count<=1000){
    if($count%5==0){
        $fizz += $count;}
    else if($count%3==0){
        $buzz += $count;}
    $count++;}
printf($fizz + $buzz . "\n");
?>
