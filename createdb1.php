<?php

//Prodedural Way


/* Attempt MYSQL server connection. Assuming you are running MYSQL serveer with default setting (user 'root' with no password) */
/* $link = mysqli_connect("hostname", "username", "password", "database"); */
$link = mysqli_connect("localhost", "root", "");

//check connection
if($link===false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}

//Attempt create database query execution
$sql="CREATE DATABASE demoprocedural";
if(mysqli_query($link,$sql)){
    echo "Database created successfully.";
}else{
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($link);

}

//close connection
mysqli_close($link);
?>