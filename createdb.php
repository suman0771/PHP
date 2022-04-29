<?php

//Object Oriented Way


/* Attempt MYSQL server connection. Assuming you are running MYSQL serveer with default setting (user 'root' with no password) */

/* Syntax: MySQLi, Object Oriented way
$mysqli = new mysqli("hostname", "username", "password", "database");
*/
$link = new mysqli("localhost", "root", "");

//check connection
if($link->connect_error){
    die("Connection Failed. ". $link->connect_error());
}

//Attempt create database query execution
$sql="CREATE DATABASE demoobjectOriented";
if($link->query($sql)){
    echo "Database created successfully.";
}else{
    echo "ERROR Creating Database. ".$link->error;

}

//close connection
$link->close();
?>