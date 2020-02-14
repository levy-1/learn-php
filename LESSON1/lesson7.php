<?php
//Besides the buit in PHP functions, it is possible to create your own functions
//A function is a block of statements that cn be used repeatedly in a program./does a specific task
//A function will not execute automatically when a page loads
//A funtion will be executed by a call to the function
//syntax

//function function_name(){
//    Code to executeONL WHEN THIS FUNCTION IS CALLED/USED
//}
function greetings(){
    echo'hello world';
}
//using a function/calling a function;USE THE FUNCTION NAME FOLLOWED BY PARENTHESIS
greetings();

function food(){
    echo'pizza';
}
echo'<br>';
food();
function greetings2($name){
    echo"hello".$name."<br>";
}
echo'<br>';
greetings2('john');
//greetings2();//call these function with enough argument
//functions wit default arguments
function greetings3($name="php",$country="kenya"){
    echo "i am a $name developer from $country <br>";
}
greetings3("oracle","uk");
greetings3();
//functions that return values
function greetings4($name){
    $get_name = $name;
    return $get_name;
}
$found_name = greetings4('john');
echo $found_name;

function areaofCircle($radius){
//    area => pie*r*r
    $pie =3.142;
    $area =$pie * $radius * $radius;
    return $area;
}
$cr1 = 7;
$cr2 = 14;
$areaC1 = areaofcircle($cr1);
$areaC2 = areaofcircle($cr2);
echo $areaC1;
echo $areaC2;
//functions that take an array as an argument
function loopArray($array_name, $myforeach=true){
    if($myforeach) {
        echo "FOR EACH LOOP";
        foreach ($array_name as $item) {
            echo "$item <br>";

        }else{
            echo "FOR LOOP";
            //     get the length of the array
            //     for loop
            $length = count($array_name);
            for ($s = 0; $s < $length; $s++) {
                echo "$array_name[$s] <br>";
            }

        }
        $games = array("GTA", "NFS", "FIFA", "PES", "MORTAL COMBAT", "JACK RYAN", "ANGRY BIRDS",);
        loopArray($games);

//ASSIGNMENT:
//Write a function that calculates area of circle and prints the results with unit of measurement
//chosen.this function should have options for unit of measurements
        function area_unit($radius, $cm = true)
        {
            $pie = 3.142;
            $area = $pie * $radius * $radius;
            if ($cm) {
//      area in cm
                echo "Area is $area cm";
            } else {
//      area in m
                echo "Area is $area m";
            }
        }

        area_unit(7);
        area_unit(14, $cm = false);

    }

    Function max($num1,$num2){
        if($num1 > $num2){
            return $num1;
        }else{
            return $num2;
        }
    }
    $results = maxy(3,4);
    echo $results .'<br>';
    }














?>