<?php
$count=0;
$random = rand(1, 6);
while($count<3){

    printf($random);
    $input = readline("Guess a Number 1-6: You get 3 tries > ");

  if ($input == "exit")
        exit(0);
    else if ($input == $random){
        printf("You Win\n");
        exit();
    } else
        printf("\nAgain\n");
    $count++;
}
printf("\nSuck Ma Balls\n");
?>
