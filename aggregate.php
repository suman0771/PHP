<?php

/*  avg, count, sum, min, max
are called aggregate bcz perform functioning on multiple values and give a single value
     */

/* $link = mysqli_connect("hostname", "username", "password", "database"); */
$link = mysqli_connect("localhost", "root", "","demoprocedural");

//check connection
if($link===false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}



$sql="SELECT COUNT(marks), AVG(marks),SUM(marks),MIN(marks),MAX(marks) FROM students";

if($result=mysqli_query($link,$sql)){
     while($row =mysqli_fetch_array($result)){
    echo $row['COUNT(marks)']."<br>";
    echo $row['AVG(marks)']."<br>";
    echo $row['SUM(marks)']."<br>";
    echo $row['MIN(marks)']."<br>";
    echo $row['MAX(marks)']."<br>";

     }
}
else{
    echo "ERROR: Could not able to execute";

}


//close connection
mysqli_close($link);

     
?>