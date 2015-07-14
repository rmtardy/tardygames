<?php
$school = array('Florida' => array('GATORS', 'GAINESVILLE', 'JIM MCELWAIN'),
                'Georgia' => array('BULLDOGS', 'ATHENS', 'MARK RICHT'),
                'Kentucky' => array('WILDCATS', 'LEXINGTON', 'MARK STOOPS'),
                'Missouri' => array('TIGERS', 'COLUMBIA', 'GARY PINKEL'),
                'South Carolina' => array('GAMECOCKS', 'COLUMBIA', 'STEVE SPURRIER'),
                'Tennessee' => array('VOLUNTEERS', 'KNOXVILLE', 'BUTCH JONES'),
                'Vanderbilt' => array('COMMODORES', 'NASHVILLE', 'DEREK MASON'),
                'Alabama' => array('CRIMSON TIDE', 'TUSCALOOSA', 'NICK SABAN'),
                'Arkansas' => array('RAZORBACKS', 'FAYETTEVILLE', 'BRET BIELEMA'),
                'Auburn' => array('TIGERS', 'AUBURN', 'GUS MALZAHN'),
                'LSU' => array('TIGERS', 'BATON ROUGE', 'LES MILES'),
                'Ole Miss' => array('REBELS', 'OXFORD', 'HUGH FREEZE'),
                'Mississippi State' => array('BULLDOGS', 'STARKVILLE', 'DAN MULLEN'),
                'Texas A&M' => array('AGGIES', 'COLLEGE STATION', 'KEVIN SUMLIN')
            );
$random = array_rand($school);
$lives=3;
$spell;
printf("\nWelcome to the SEC Quiz! Answer these 3 questions to become a master of the school. You get 3 lives.\n");
while($lives>0){
    if($lives==2) {
        $spell = "life";
    }
    else{ $spell = "lives";
    }
    $input0 = readline("What is ". $random."'s nickname? (plural): \n");
    $lower_input0 = strtoupper($input0);
    if($lower_input0 == $school[$random][0]) {
        while($lives>0){
            if($lives==2) {
                $spell = "life";
            }
            else{ $spell = "lives";
            }
            $input1 = readline("What is the name of the city that ". $random. " is located in? \n");
            $lower_input1 = strtoupper($input1);
            if($lower_input1 == $school[$random][1]) {
                while($lives>0){
                    if($lives==2) {
                        $spell = "life";
                    }
                    else{ $spell = "lives";
                    }
                    $input2 = readline("Who is ". $random."'s football coach: \n");
                    $lower_input2 = strtoupper($input2);
                    if($lower_input2 == $school[$random][2]) {
                        echo "\nCongratulations! You are a master of ". $random ."!\n\n";
                        die();
                    }
                    else{echo "Wrong coach name. You have ". ($lives-1) ." ". $spell ." remaining.\n";
                    }
                    $lives--;
                }
            }
            else{echo "Wrong city. You have ". ($lives-1) ." ". $spell ." remaining.\n";
            };
            $lives--;
        }
    }
    else {echo ("Wrong name. You have ". ($lives-1) ." ". $spell ." remaining\n");
    }
    $lives--;
}
echo ("You ran out of lives. You lose.\n");
    ?>
