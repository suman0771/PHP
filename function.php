<?php
function cse($course, $credit){
    echo "$course with credit $credit <br>";
}
cse("HTML",3 );
cse("CSS",2);
cse("NodeJs",4);

function add(float $a, float $b){
    return (int)($a+$b);
}

/*function add(int $a, int $b){
    return ($a+$b);
} */
//add(3,"4 sem");

function total($numcourse = 0){
    echo "The total number of courses are: $numcourse <br>";
}
total(3);
total(0);

echo add(3,5);

echo "<br>";

echo add(2.1,1.5);
echo "<br>";

//Passing by reference:
print("Pass by reference: ");
function fun(&$res){
    $res++;
    echo $res;
}
$a=5;
fun($a);
echo "<br>";

// Function applied to assign a new value to 
// $string variable and printing it 
function print_string(&$string)
{
  
  $string = "Function w3docs \n";
  
  // Print $string variable 
  print($string);
}

// Driver code 
$string = "Global w3docs \n";
print_string($string);
print($string);
echo "<br>";




//variable scope:local, global, static

/*
$course = "CSS";
function test(){
    $course = "PHP";
    echo "The course is $course <br>";
}
test();
echo "The course is $course <br>"; */

//to access global variable inside function use global keyword.
// $course = "CSS";
// function test(){
//     global $course;
//     echo "The course is $course <br>";
// }
// test();
// echo "The course is $course <br>";

$course = "CSS";
function test(){
    $a = $GLOBALS['course'];
    echo "The course is $a <br>";
}
test();
//Super global concept: GLOBALS['']
$a=4;
$b=7;
function adds($a,$b){
    $sum = $GLOBALS['a'] + $GLOBALS['b'];

    echo "Addition of Two numbers is $sum";

    //$c=$GLOBALS['$a','$b'];
//echo "the sum is $c <br>";
}
adds($a,$b);

//static variable: we want local variable should not be deleted.
echo "<br>";
function st(){
    static $num1 = 2;
    $num2 = 5;
    $num1++;
    echo "The number is $num1 <br>";
}
st();
st();



?>