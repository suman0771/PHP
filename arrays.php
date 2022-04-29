<?php

//Traditional array: or Indexed Arrays:
$guitars = ['Vela','Explorer','Strat'];
$guitar = array('Vela','Explorer','Strat');
if (isset($guitars[3])){
    echo $guitars[3];
}
else{
    echo "Guitar doesn't exist.";
}
print_r($guitar);


//Associated Array:
$guitar2 = [
    'prs' => 'vela',
    'gib' => 'Explorer',
    'fend' => 'strat'

];
echo $guitar2['prs'];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$a = array("INT219" => "Front End Web", "INT220" => "PHP", "INT221" => "Laravel");
$b = array("INT222" => "Node js", "CSE316" => "Operating System");
$d = array("INT219" => "Front End Web", "INT220" => "PHP", "INT221" => "Laravel");
$c = ($a + $b); // Union of $x and $y
var_dump($c);
echo "<br>";
var_dump($a == $b);   // Outputs: boolean false
echo "<br>";

var_dump($a == $d);   // Outputs: boolean true
echo "<br>";
var_dump($a === $b);  // Outputs: boolean false
echo "<br>";
var_dump($a === $d);  // Outputs: boolean true

echo "<br>";
var_dump($a != $b);   // Outputs: boolean true
echo "<br>";
var_dump($a <> $b);   // Outputs: boolean true
echo "<br>";
var_dump($a !== $b);  // Outputs: boolean true
echo "<br>";
echo "<br>";
echo "<br>";

print("Indexed Array: ");
echo "<br>";
$courses = array("PHP", "Laravel", "Node js"); 
echo "I like " . $courses[0] . ", " . $courses[1] . " and " . $courses[2];
echo "<br>";
echo count($courses);

//loop through indexed array:
echo "<br>";
echo "<br>";
$coursesLen = count($courses);
echo "<br>";
print("For Loop:");
echo "<br>";
for($i=0;$i<$coursesLen;$i++){
    echo $courses[$i];
    echo "<br>";
}
echo "<br>";
echo "<br>";

print("Foreach Loop:");
echo "<br>";
foreach($courses as $i){
    echo $i."<br>";
}

foreach($courses as $courses){
    echo $courses."<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
print("Associative Array:");
echo "<br>";
$cours = array("INT220"=>"PHP", "INT221"=>"Laravel", "INT222"=>"Node js");
echo "INT 220 is ".$cours['INT220'].". INT 221 is ".$cours['INT221'].". INT222 is ".$cours['INT222'];
echo "<br>";
echo "<br>";
$courses = array("INT220"=>"PHP", "INT221"=>"Laravel", "INT222"=>"Node js");
echo "INT 220 is ".$courses['INT220'].". INT 221 is ".$courses['INT221'].". INT222 is ".$courses['INT222'];
echo "<br>";
echo "<br>";
echo "<br>";
print("Loop through Associative Array:");
echo "<br>";
$courses = array("INT220"=>"PHP","INT221"=>"Laravel","INT222"=>"Node js");
foreach($courses as $course => $value) {
  echo "Key=".$course.","."Value=".$value;
  echo "<br>";
}
echo "<br>";

$courses=array('INT220'=>'PHP','INT221'=>'Laravel','INT222'=>'Node js');
$keys=array_keys($courses);
$values=array_values($courses);
for($x=0;$x<count($courses);$x++){
 echo "Key=".$keys[$x].','."Value=".$values[$x]."<br>";
}










?>