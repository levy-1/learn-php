<?php
//Loops:
//We use loops to execute a block of code again as long as a certain condition is true


//In PHP,w hav the following loop types:
//WHILE - loops through a block of code as long as the specified condition is true
$count = 0;
//syntax
//while(condition){
//    code to execute
//}

while($count < 20){
    if($count==0){//FIRST CHECK THE CONDITION THEN LOOPS ONLY IF CONDITION IS TRUE
        echo $count."IS NOT DIVISIBLE BY THREE";
    }
    if($count % 3==0){
        echo $count."DIVISIBLE BY THREE<br>";
    }else{
        echo $count."Is NOT DIVISIBLE BY THREE<br>";
    }

    $count ++;
}
//$count: initializes the loop counter and sets the start value
//$count <20:continue the loop as long as $count is less than 20
//$count ++:increases the loop counter valued by 1 of each loop/iteration


//DO...WHILE - loops through a block of code once and then repeats the loop as long as the specified condition is true
//syntax
//do(
//    code to execute
//)while(condition is true)
//
$x = 0;
do{
    echo "<div style='border: 2px solid red'>
            <p>$x</p>
          </div>";
    $x ++;
}while($x < 10);
//FOR - loops through a code a specified number of times
//syntax
//for(initial value;text value;increment value){
//    code to be executed
//}
//
//INITIAL VALUE: initialize the loop counter value: determines the starting of a loop
//TEST VALUE:Evaluated for each loop iteration. if it evaluates to TRUE,the loop continues.If it evaluates FALSE the loop ends
//INCREMENT VALUE:Increases te loop counter value
//FOREACH - loops through a block of code for each element in an array
for($x = 0;$x < 100;$x+=5){
    echo "<span>value : $x </span><br>";
}




?>
