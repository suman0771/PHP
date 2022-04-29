<?php

/* Attempt MYSQL server connection. Assuming you are running MYSQL serveer with default setting (user 'root' with no password) */
/* $link = mysqli_connect("hostname", "username", "password", "database"); */
$link = mysqli_connect("localhost", "root", "");

//check connection
if($link===false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}

//print host info
echo "Connect Successfully. Host info: ". mysqli_get_host_info($link);

//close connection
mysqli_close($link);
?>