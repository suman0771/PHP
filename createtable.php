<?php

//Prodedural Way

/* $link = mysqli_connect("hostname", "username", "password", "database"); */
$link = mysqli_connect("localhost", "root", "","demoprocedural");

//check connection
if($link===false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}

//Attempt create table query execution
$sql="CREATE TABLE students(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL UNIQUE,
    city VARCHAR(30) NOT NULL,
    marks INT NOT NULL
)";



if(mysqli_query($link,$sql)){
    echo "Table created successfully.";
}else{
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($link);

}

//close connection
mysqli_close($link);
?>