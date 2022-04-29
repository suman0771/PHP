 
<!-- <form action="getmethod.php" method="GET"> -->
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="_GET">
<!-- PHP_SELF is a variable that returns the current script being executed. -->
Firstname: <input type="text" name="firstnumb">
Lastname: <input type="text" name="lastnumb">
<input type="Submit">
</form>
<?php
if(_GET){
echo "Sum: " . $_GET['firstnumb'] + $_GET['lastnumb'] . "<br>";
echo "Diff: " . $_GET['firstnumb'] - $_GET['lastnumb'] . "<br>";
echo "Mul: " . $_GET['firstnumb'] * $_GET['lastnumb'] . "<br>";
echo "Div: " . $_GET['lastnumb'] / $_GET['firstnumb']; 
}


?>

