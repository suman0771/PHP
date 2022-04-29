<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<style>
.err
{
color:red;
}
</style>
</body>
</html>
<?php 
$marks = "";
$marksErr = "";

function testvalue($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}
if($_POST){

    if(empty($_POST['marks']))
    {
        $marksErr = "marks is required.";
    }
    else
    {
        $marks = testvalue($_POST['marks']);
    }

}

?>

<form action="" method="POST">
    
    Marks : <textarea name="marks" id="" cols="30" rows="10" value=<?php  echo $marks ?> ><?php  echo $marks ?></textarea><span class="err"><?php echo $marksErr; ?></span><br><br>
    
    <input type="submit">
</form>

<?php

echo $marks;
?>