<?php
//Conditional statements are used to perform different actions based on different conditions
//To allow your code to perform different actions based on different variables
//PHP has the following if conditional statements
//1.If statement - executes some code if one condition is true
//2.If...else statement - executes some code if a condition is true and another code if that ondition is false
//2.If...elseif... statement - executes different codes for more than two conditions
//switch statement - selects one of many blocks to code
//
//if statement execute code if the condition true
//if(condition to examine){
//    code to be executed if condition is TRUE
//}
$db_first_name ='john doe';
$user_first_name ='john doe';
if ($user_first_name = $db_first_name){
    echo '<p>Credentials matched . you can log in</p>';
}

$age = 10;
if ($age < 18){
    echo '<h1>You cannot take alcohol.Go home and study hard</h1>';
}

//2.if...else: Executes code if the condition is TRUE and the other is false
$age = 10;
if ($age < 18){
    echo '<h1>You cannot take alcohol.Go home and study hard</h1>';
}else{
    echo "<h1>Hurray, you are old enough, grab a crate</h1>";
}

//3.If...elseif... statement - executes different codes for more than two conditions
//if(condition to examine){
//    code to be executed if condition is TRUE
//elseif(condition){
//  code to be executed if the 1st condition is false,and this condition is true
//elseif(condition){
//  code to be executed if the 2nd condition is false,and this condition is true
//}else{
//       code to be executed if all conditions are false
//}
$age = 17;
$kenyan = false;
if ($age < 18){
    echo"<h1>YOU cannot take alcohol.Go home and study hard</h1>";
}elseif($kenyan== true){
    echo"<h1>Hurray you are old enough grab a crate</h1>";
}else{
    echo '<h3>you ae underage and not kenyan you are kiddding</h3>';
}
//ASSIGNMENT:
//Using a conditional statement,check if 100 is a multiple of 2;
//if true echo "100 is a multiple of 2" else echo"100 is not a multiple of 2"
//2.write code that calculates the volume of a cylinder of height 14 and diameter 14.
//echo"this is the cylinder to use if the volume is greater than 10"

$a = 100;
$b =2;
if ($a % $b){
    echo '<h1>$a is a multiple of 2</h1>';
}else{
    echo "<h1>$a is not a multiple of 2</h1>";
}
$height = 14;
$diameter=14;
$height /=$diameter;
if($height * $diameter )
    echo '<h2>this is the cylinder to use if the volume is greater than 10</h2>';

//switch statement - selects one of many block of code to be executed
//switch syntax
//switch (n){
//    case label1:
//        code to execute if n = label1
//        break
//         case label2:
//             code to execute if n = label2
//         break
//
//          case label3:
//              code to execute if n = label3
//          break
//
//           case label4:
//               code to execute if n = label4
//           break
//
//    default:
//        code to be executed
//
//
$favteam = 'chelsea';
switch ($favteam){
    case 'man-u';
        echo '<p style="color:palevioletred">Man-u at position 5</p>';
        break;

    case 'Liverpool';
        echo '<p style="color:darkred">Liverpool at position 1</p>';
        break;

    case 'Leicester';
        echo '<p style="color:whitesmoke">Leicester at position 2</p>';
        break;

    default:
        echo'<p style="color: red">None of the above is my favourite team</p>';

}











?>