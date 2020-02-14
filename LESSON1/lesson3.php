<?php
//PHP operators
//used to perform operations on variables an values
//php has the following operators
//1.Arithmetic  operators
//2.Assignment ops
//3.Comparison ops
//4.Logical ops

//Arithmetic  operators
// +:Addition
$x=23;
$y=234;
$sum=$x+$y;
echo "<br>";
echo "The sum of 23 and 234 is".$sum."<br>";
echo 23 + 234;
echo "<br>";
// -:Subtraction
$x=234;
$y=23;
$sub=$x+$y;
echo "<br>";
echo "The sub of 234 and 23 is".$sub."<br>";
echo 234 - 23;
echo "<br>";
// *:Multiplication
$x=234;
$y=23;
$mult=$x * $y;
echo "<br>";
echo "The Multiplication of 234 and 23 is".$mult."<br>";
echo 234 * 23;
echo "<br>";
// /:Division(/)
$x=24;
$y=3;
$div=$x / $y;
echo "<br>";
echo "The Division of 24 and 3 is".$div."<br>";
echo 24 / 3;
echo "<br>";
// %:Modulus
$x=3;
$y=2;
$mod=$x % $y;
echo "<br>";
echo "The Modulus of 3 and 2 is".$mod."<br>";
echo 3 % 2;
echo "<br>";
// **:Exponential
echo 2**3;
echo "<br>";


//Assignment operators
//used to write a value to a variable
$car= "Benz";
echo $car;
echo "<br>";
$i= 12;
$f= 12.12;

//Assignment operators with other arithmetic  operators
// +:Addition
$s= 30;
$sum= $i + $s;
$i= $i + $s;
echo $i;
echo "<br>";
$a= 100;
$b= 200;
$a += 100;
echo $a;
echo "<br>";
// -:Subtraction
$a = 400;
$b = 300;
$a -=$b;
echo $a;
echo "<br>";
// *:Multiplication
$a = 400;
$b = 300;
$a *=$b;
echo $a;
echo "<br>";
// /:Division(/)
$a = 400;
$b = 300;
$a /=$b;
echo $a;
echo "<br>";
// %:Modulus
$a = 400;
$b = 300;
$a %=$b;
echo $a;
echo "<br>";
// **:Exponential
$a = 4;
$b = 3;
$a **=$b;
echo $a;
echo "<br>";
//3.Comparison ops
//Used to compare value
//Comparison ops return a boolean data types:true,false
1.==(equal);
echo '<br>';
$s = 2;
$t = 3;
$j = 2;
$answer = $s = $t;
var_dump($answer);
echo '<br>';
$db_username ='Ronkenoly';
$db_password ='Ronkenoly1';
//Data from user
$user_username ='levy';
$user_password ='Ronkenoly1';


var_dump($check);
echo'<br>';

//2.= = = : Identical : returns true if one variable is equal to anther variable and this two variables of the same datatype
$check = $db_password === $user_password;
var_dump($check);
echo '<br>';

//3.!= : not equal to : return if two variables are not equal
$check = $db_username !=$user_username;
var_dump($check);
echo '<br>';

//4.!== : not identical returns true of two variables are not identical
$check = $db_username !==$user_username;
var_dump($check);
echo '<br>';

//5.> :greater  than : returns true if the variable is greater than the other value
$myname ='Ronkenoly';
$yourname ='johndoe';
$result = strlen($myname) > strlen($yourname);
var_dump($result);
echo '<br>';

//6.> :less  than : returns true if the variable is less than the other value
$myname ='Ronkenoly';
$yourname ='johndoe';
$result = strlen($myname) < strlen($yourname);
var_dump($result);
echo '<br>';

//7.>= :Greater than or equals to : returns true if the variable is greater than or equals to the other value
$myname ='Ronkenoly';
$yourname ='johndoe';
$result = strlen($myname) >= strlen($yourname);
var_dump($result);
echo '<br>';

//8.<= :Less than or equalsto : returns true if the variable is less than or equals to the other value
$myname ='Ronkenoly';
$yourname ='johndoe';
$result = strlen($myname) <= strlen($yourname);
var_dump($result);
echo '<br>';


//4.LOGICAL OPS
//Used to combine conditional statements
//1.and : returns true if two operations are true
$x = 100;
$y = 200;
if($x == 100 and $y == 200) {
    echo '<h1>it is true $x is equal to 100 and $y is equal to 200</h1>';
}
//2.or : returns true if  either one of two operations is  true
$x = 100;
$y = 200;
if($x == 300 || $y != 200) {
    echo '<h1>it is true $x is equal to 100 and $y is  not equal  200</h1>';
}
//3.! not: returns true if a variable is false
$check = !($x == 100 and $y == 200);
var_dump($check);



















?>