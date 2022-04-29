<?php

//Validate filter  filter_has_var
$url = "https://\ngoo.com";
$url = filter_var($url, FILTER_SANITIZE_URL);
if (!filter_var($url, FILTER_VALIDATE_URL) === false) 
{
  echo("$url is a valid URL");
} 
else 
{
  echo("$url is not a valid URL");
}
echo "<br>";


//validate integer
$int = 100;
if(!filter_var($int, FILTER_VALIDATE_INT) == false)
{
    echo ("Integer is valid");
}
else{
    echo ("Integer is not valid");
}
echo "<br>";
$num = 1;
if ($num == 0 or filter_var($num, FILTER_VALIDATE_INT)) {
    echo("Valid Integer");
    }

echo "<br>";


//Sanitize and Validate a URL
$url = "https://\ngoo.com";
$url = filter_var($url, FILTER_SANITIZE_URL);
if (!filter_var($url, FILTER_VALIDATE_URL) === false) 
{
  echo("$url is a valid URL");
} 
else 
{
  echo("$url is not a valid URL");
}
echo "<br>";

//Sanitize and Validate a email
$email = "sum🤣\n?.19/9\+9@gmail.com";
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) 
{
  echo("$email is a valid email address");
} 
else 
{
  echo("$email is not a valid email address");
}
echo "<br>";

//IP validate method:1
$ip = "1.256.1.1";
$ip = filter_var($ip, FILTER_VALIDATE_IP);
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) 
{
  echo("$ip is a valid IP");
}
else 
{
  echo("$ip is not a valid IP");
}
echo "<br>";

//IP validate method:2
$ip = "1.256.1.1";
if (filter_var($ip, FILTER_VALIDATE_IP)) 
{
  echo("$ip is a valid IP");
} 
else 
{
  echo("$ip is not a valid IP");
}
echo "<br>";

$ip = "1.256.1.1";
if (filter_var($ip, FILTER_VALIDATE_IP)) 
{
  echo("$ip is a valid IP");
} 
else 
{
  echo("$ip is not a valid IP");
}
echo "<br>";
?>

<!--filter_has_var -->
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
Name:
<input type="text" name="name">
<input type="submit" value="Submit" name="submit">
</form>
<?php
if(isset($_REQUEST['submit'])){
    if(!filter_has_var(INPUT_POST, "name")){
        echo("Name not Found");
    }
    else{
        echo("Name found");
    }
}
?>
<!--print_r(filter_id()) -->
<?php
print_r(filter_list());
foreach(filter_list() as $id=>$filter){
    echo filter_id($filter) ."-->".$filter."<br>";
}
?>
<!--filter_input -->
<form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
Name:
<input type="text" name="name">
<input type="submit" value="Submit" name="submit">
</form>
<?php
if(isset($_REQUEST['submit'])){
    if(!filter_has_var(INPUT_POST, "name")){
        echo("Name not Found");
    }
    else{
        echo("Name found");
    }
}
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
Name:
<input type="text" name="name">
<input type="submit" value="Submit" name="submit">
</form>
<?php
if(isset($_REQUEST['submit'])){
    if(!filter_has_var(INPUT_GET, "name")){
        echo("Name not Found");
    }
    else{
        echo("Name found");
    }
}
?>