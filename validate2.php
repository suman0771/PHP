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
$name = $email = $gender = $remarks = $website = "";
$nameErr = $emailErr = $genderErr = $remarksErr = $websiteErr = "";

function testvalue($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}
if($_POST){

    if(empty($_POST['name']))
    {
        $nameErr = "Name is required.";
    }
    else
    {
        $name = testvalue($_POST['name']);
    }
    if(empty($_POST['email']))
    {
        $emailErr = "Email is required.";
    }
    else
    {
        $email = testvalue($_POST['email']);
    }
    if(empty($_POST['gender']))
    {
        $genderErr = "Gender is required.";
    }
    else
    {
        $gender = testvalue($_POST['gender']);
    }
    if(empty($_POST['remarks']))
    {
        $remarksErr = "Remarks is required.";
    }
    else
    {
        $remarks = testvalue($_POST['remarks']);
    }
    if(empty($_POST['website']))
    {
        $websiteErr = "Website is required.";
    }
    else
    {
        $website = testvalue($_POST['website']);
    }

}

?>

<form action="" method="POST">
    Name : <input type="text" name="name" value=<?php  echo $name ?>><span class="err"><?php echo $nameErr; ?></span><br>
    E-mail : <input type="text" name="email" value=<?php  echo $email ?>><span class="err"><?php echo $emailErr; ?></span><br>

    Wesite link : <input type="text" name="website" value=<?php  echo $website ?>><span class="err"><?php echo $websiteErr; ?></span><br>
    Remarks : <textarea name="remarks" id="" cols="30" rows="10" value=<?php  echo $remarks ?> ><?php  echo $remarks ?></textarea><span class="err"><?php echo $remarksErr; ?></span><br><br>
    Gender : <input type="radio" name="gender" value="female" <?php if ($gender=="female") echo "checked"; ?>> female<input type="radio" name="gender" value="male" <?php if ($gender=="male") echo "checked"; ?>> Male
    <input type="radio" name="gender" value="other" <?php if ($gender=="other") echo "checked"; ?>> Other
    <span class="err"><?php echo $genderErr; ?></span>
    <input type="submit">
</form>

<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $gender;
echo "<br>";
echo $remarks;
?>