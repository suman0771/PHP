<form action="" method="POST">
    Name : <input type="text" name="name"><br>
    E-mail : <input type="text" name="email"><br>

    Wesite link : <input type="text" name="website"><br>
    Remarks : <textarea name="remarks" id="" cols="30" rows="10"></textarea><br><br>
    Gender : <input type="radio" name="gender" value="female"> female<input type="radio" name="gender" value="female"> Male
    <input type="radio" name="gender" value="female"> Other
    <input type="submit">
</form>

<?php
$name = $email=$gender = $remarks =$website = "";


function testvalue($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}
if($_POST){
    $name = testvalue($_POST['name']);
    $email = testvalue($_POST['email']);
    $gender = testvalue($_POST['gender']);
    $remarks = testvalue($_POST['remarks']);
    $website = testvalue($_POST['website']);
}
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