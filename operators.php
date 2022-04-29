<?php

//Arithmatic Operator: +,-,*,/,%,**,

$x = 5;
$y = 6;
echo ($x+$y);
echo "<br>";
echo ($x-$y);
echo "<br>";
echo ($x*$y);
echo "<br>";
echo ($x/$y);
echo "<br>";
echo ($x%$y);
echo "<br>";
echo ($x**$y); //pow(x,y)
echo "<br>";
echo "<br>";

//Assignment Operator:=,+=,-=,*=,/=,%=,
print("Assignment Operator:");
echo "<br>";
echo ($x=$y);// x=y
echo "<br>";
echo ($x+=$y);// x = x+y
echo "<br>";
echo ($x-=$y);
echo "<br>";
echo ($x*=$y);
echo "<br>";
echo ($x/=$y);
echo "<br>";

$x +=2;

echo ($x%=$y);
echo "<br>";
echo "<br>";


//Comparision Operator:==,===,!=,<>,!==,<,>,>=,<=
print("Comparision Operator:");
echo"<br>";
$x = 25;
$y = 35;
$z = "25";
var_dump($x == $z);  // Outputs: boolean true
echo"<br>";
var_dump($x === $z); // Outputs: boolean false
echo"<br>";
var_dump($x != $y);  // Outputs: boolean true
echo"<br>";
var_dump($x !== $z); // Outputs: boolean true
echo"<br>";
var_dump($x < $y);   // Outputs: boolean true
echo"<br>";
var_dump($x > $y);   // Outputs: boolean false
echo"<br>";
var_dump($x <= $y);  // Outputs: boolean true
echo"<br>";
var_dump($x >= $y);  // Outputs: boolean false
echo"<br>";
var_dump($x<=$z);  // it will convert both type in one type then compare  o/p: true
echo"<br>";
echo"<br>";


//Incerement & Decrement Operator: ++ pre,++ post, -- pre, -- post,
print("Incerement & Decrement Operator:");
echo"<br>";
$x= 10;
++$x;
echo($x);   //11
echo"<br>";
echo($x++);// 11
echo"<br>";
echo($x);   //12
echo"<br>";
echo(--$x);  //11
echo"<br>";
echo($x); //11
echo"<br>";
echo($x--); //11
echo"<br>";
echo($x); //10
echo"<br>";
echo"<br>";


//String Operator: ., .=,
print("String Operator:");
echo"<br>";
$x = "Hello";
$y = " World!";
echo $x . $y; // concatenate, Outputs: Hello World!
echo "<br>";
$x .= $y;  // x = x . y
echo $x; // Outputs: Hello World!
echo "<br>";
echo "<br>";


//Conditional Assignment Operator: ?:,??,
// ?: = ternary => $x=exp1?exp2:exp3
// ?? = Null coalescing => $x = exp1??exp2
print("Conditional Assignment Operator:");
echo"<br>";
echo $status = (empty($user)) ? "anonymous" : $user; // status true so expression1 
echo "<br>";

$user = "Michael";
echo $status = (empty($user)) ? "anonymous" : $user;// status false so expression2 
echo"<br>";

echo $stat = $users ?? 'anonymous';//return exp2 as value doesn't exist

echo"<br>";
$users= NULL;
echo $stat = $users ?? 'anonymous';//return exp1 as value of users exist and is NULL
echo "<br>";

$users = "Michael";
echo $stat = $users ?? 'anonymous';//return exp1 if exp1 exist and not NULL 
echo"<br>";
echo"<br>";

//Logical Operator:and, or, xor,&&,||,!
print("Logical Operator:");
echo"<br>";
$x=1; // 110
$y=0; // 100
echo var_dump($x and $y);
echo "<br>";
echo ($x or $y);
echo "<br>";
echo ($x xor $y);
echo "<br>";
echo ($x && $y);
echo "<br>";
echo ($x || $y);
echo "<br>";
echo (! $y);
echo "<br>";








