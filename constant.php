<?php
//case- sensitive constant name
define("WISHES","GOOD Evening");
//define function used to define constant only
echo WISHES;

//echo wishes; will not wor
?>
<br>
<?php
const wishes="Good Morning";
print wishes
?>
<br>
<?php 
define("courses",["php","HTMML","CSS"]);
echo courses[0];
?>
<br>
<?php
define("Wishes","Good Noon");
function test(){
    echo Wishes;
}  //no output as function is not called
test();
echo "<br>";
echo constant("Wishes");
?>
<br>
<hr>
<?php
define("Course",["PHP","HTML","CSS"]);
echo Course[0];
echo "<br>";
const WISH=array("PHP",
"HTML",
"CSS");  
echo WISH[0];  

?>
<br>
<hr>
<?php
define("WISHE", "Good Evening");

function testss(){
  echo WISHE;
}
testss();

?>
