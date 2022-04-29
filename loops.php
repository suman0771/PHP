<?php
//While Loop:
$i = 1;
while($i <= 3){
    $i++;
    echo "The number is " . $i . "<br>";
}
//do..while loop:
echo "<br>";
$i = 1;
do{
    $i++;
    echo "The number is " . $i . "<br>";
}
while($i <= 3);
echo "<br>";
//for loop:
for($i=0;$i<=3;$i++){
    echo "the muners is : ".$i."<br>";
}
echo "<br>";
//foreach loop: used to iterate over arrays
$colors = array("Red", "Green", "Blue");
 
// Loop through colors array
foreach($colors as $value){
    echo $value . "<br>";
}
echo "<br>";
foreach($colors as $key=>$value){
    echo "key: ".$key." Value = ".$value . "<br>";
}
echo "<br>";
$superhero = array(
    "name" => "Peter Parker",
    "email" => "peterparker@mail.com",
    "age" => 18
);
 
// Loop through superhero array
foreach($superhero as $key => $value){
    echo $key . " : " . $value . "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

//break inside loop
print("Break: ");
echo "<br>";
for($i=0;$i<=10;$i++){
    echo "Value of i = ".$i."<br>";
    if($i==5){
        break;
    }
} 
echo "<br>";
for($i=1;$i<=3;$i++){
    for($j=1;$j<=3;$j++){ 
        echo "$i  $j <br>";
        if($i==2 && $j==2){
            break;
        }
    }
}
echo "<br>";
//break in Switch:
$num=200;
switch($num){
    case 100:echo("Number is = 100");
            break;
    case 200:echo("Number is = 200");
            break;
    case 50:echo("Number is = 50");
            break;
    default:
    echo("Number not in 50,100,200");
}
echo "<br>";
//declare an array of string  
$number = array ("One", "Two", "Three", "Stop", "Four");  
foreach ($number as $element) {  
if ($element == "Stop") {  
break;  
}  
echo "$element </br>";  
}  
echo "<br>";
echo "<br>";
echo "<br>";
print("Continue");
echo "<br>";
//outer loop  
for ($i =1; $i<=3; $i++) {  
    //inner loop  
    for ($j=1; $j<=3; $j++) {  
        if (!($i == $j) ) {  
            continue;       //skip when i and j does not have same values  
        }  
        echo $i.$j;  
        echo "</br>";  
    }  
}  
echo "<br>";
echo "<br>";
//continue in while loop:  
//php program to demonstrate the use of continue statement  
  
echo "Even numbers between 1 to 10: </br>";  
$i = 1;  
while ($i<=10) {  
    if ($i %2 == 1) {  
        $i++;  
        continue;   //here it will skip rest of statements  
    }  
    echo $i;  
    echo "</br>";  
    $i++;  
}     
echo "<br>";
echo "<br>";

//continue in array:
$number= array("One","two","three","Stop","four");
foreach($number as $i){
    if($i == "Stop"){
        continue;
    }
    echo "$i <br>";
}





    

?>