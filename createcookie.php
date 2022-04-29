
<?php 
$cookie_name = "user";
$cookie_value = "Suman Moond";
setcookie($cookie_name, $cookie_value,time()+15);

if(isset($_COOKIE[$cookie_name])){
    echo "Cookie is ".$cookie_name." has been set <br>";
    echo "Value of cookie is ".$_COOKIE[$cookie_name];
}
else{
    "Cookie with name ".$cookie_name." is not set";
}

/* to validate the user is genuine or not and then identify the some basic information of user and give him/her recommended categories if heshe chosen in the form */
?>