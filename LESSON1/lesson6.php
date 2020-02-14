<?php
//An array stores multiple values in one single variable:
//An array is a special variable,which can hold more than one value at a time
$fruit = 'mango';
$fruit = 'orange';
$fruit = 'apple';
$fruit = 'avocado';
$fruit = 'pineapple';
$fruit = 'watermelon';
$fruit = 'guava';
//Create an array in PHP
//In PHP,the array() function is used to create an array:
$fruits = array('mango','orange','apple','avocado','pineapple','watermelon','guava');
//echo $fruits;
//count number of items in an array: use count() function
$num_items = count($fruits);
echo $num_items.'<br>';

//Accessing array items:use square brackets[] with index number inside
echo $fruits[0].'<br>';
echo $fruits[1].'<br>';
echo $fruits[2].'<br>';
echo $fruits[3].'<br>';
echo $fruits[4].'<br>';
echo $fruits[5].'<br>';
echo $fruits[6].'<br>';
echo"My favourite fruit is ".$fruits[0]." and ".$fruits[3].'<br>';
//Looping through an indexed array
foreach($fruits as $matunda){
    echo $matunda.'<br>';
}
ASSIGNMENT:
//Using a for loop,loop from 0 - 100.if a number is a multiple of 3 echo "FIZZ".
//if a number is a multiple of 5 echo "BUZZ". if a number is a multiple of both 3 and 5
//echo"FIZZBUZZ" otherwise echo the number
for ($i =0; $i < 100; $i++){
//  $x : startofthe loop
//  $x < 100:test condition
//  $x++ :increament value
    if ($x% 15 ==0){
        echo "$x FIZZBUZZ <br>";
    }elseif ($x % 3 == 0){
        echo"$x FIZZBUZZ <br>";
    }elseif ($x % 5){
        echo "$x BUZZ <br>";
    } else{
        echo "$x <br>";
    }
}
//sol 2 to fizzbuzz
for ($i =100; $i < 100; $i++){
    if ($x % 3 == 0 and $i % 5 == 0){
        echo "$x FIZZBUZZ <br>";
    }elseif ($x % 3 == 0){
        echo"$x FIZZBUZZ <br>";
    }elseif ($x % 5){
        echo "$x BUZZ <br>";
    } else{
        echo "$x <br>";
    }
}
//for(initial value;text value; increment value){
//      code to be executed
//}
for ($x = 0; $x < count($fruits);$x++){
//    echo out each item by accessing them using index numbers
    echo $fruits[$x].'<br>';
}
$num_fruits = count($fruits);
for ($x = 0; $x < $num_fruits ;$x++){
//    echo out each item by accessing tem using index numbers
    echo $fruits[$x].'<br>';
}
//ASSOCIATIVE ARRAY:1 -Populating directly
$geeks_fruits = array("Craig" => "mango","steve"=>"apple","victor"=>"mapera","ron"=>"grapes");
$geeks_teams = array("chelsea"=>"blue","man-city"=>"grey","tottenham"=>"white","man-u"=>"red","watford"=>"yellow");
//ASSOCIATIVE ARRAY:2 -Populating one by one
$country_car_brand['kenya'] ='Nyayo';
$country_car_brand['germany'] = array('benz,bmw,vw');
$country_car_brand['us'] ='ford';
$country_car_brand['japan'] = array('mitsubishi','toyota');
$country_car_brand['china'] ='hyundai';
//ACCESSING ASSOCIATIVE ARRAY ITEM:USE THE KEYS
echo$country_car_brand['kenya'];


$car_count = count($country_car_brand ['Grmany']);
foreach($country_car_brand ['Germany'] as $motors){
    echo $motors.'<br>';
}
$car_count = count($country_car_brand ['Grmany']);//number of cars
$cars_found_germany = $country_car_brand['Germany'];//actual indexed array in german key
foreach($country_car_brand ['Germany'] as $motors){
    echo $motors.'<br>';
}






?>