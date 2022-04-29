<?php

//subqueries
/* $link = mysqli_connect("hostname", "username", "password", "database"); */
$link = mysqli_connect("localhost", "root", "","demoprocedural");

//check connection
if($link===false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}



$sql="SELECT first_name,last_name from students where marks= (SELECT min(marks) FROM students)";

if($result=mysqli_query($link,$sql)){
     while($row =mysqli_fetch_array($result)){
    echo $row['first_name']." ".$row['last_name'];
    }
}
else{
    echo "ERROR: Could not able to execute";
}
echo "<br>";
$sql1="SELECT first_name,last_name from students where city='Delhi' AND marks>70";

if($result1=mysqli_query($link,$sql1)){
     while($row1 =mysqli_fetch_array($result1)){
    echo $row1['first_name']." ".$row1['last_name'];
    }
}
else{
    echo "ERROR: Could not able to execute";
}

echo "<br>";
$sql2="SELECT first_name,last_name from students where first_name LIKE '%u' OR first_name LIKE 'S%'";

if($result2=mysqli_query($link,$sql2)){
     while($row2 =mysqli_fetch_array($result2)){
    echo $row2['first_name']." ".$row2['last_name'];
    }
}
else{
    echo "ERROR: Could not able to execute";
}

/* %a -> ending with a
a% -> starting with a
%a& -> between a */


echo "<br>";
$sql3="SELECT upper(first_name) FROM students";

if($result3=mysqli_query($link,$sql3)){
     while($row3 =mysqli_fetch_array($result3)){
    echo $row3['upper(first_name)']."<br>";
    }
}
else{
    echo "ERROR: Could not able to execute";
}

/* echo "<br>";
$sql3="SELECT ucase(first_name) FROM students";

if($result3=mysqli_query($link,$sql3)){
     while($row3 =mysqli_fetch_array($result3)){
    echo $row3['ucase(first_name)']."<br>";
    }
}
else{
    echo "ERROR: Could not able to execute";
} */

//find total no. of students from each city
echo "<br>";
$sql4="SELECT city,COUNT(id) FROM students GROUP BY city";

if($result4=mysqli_query($link,$sql4)){
     while($row4 =mysqli_fetch_array($result4)){
    echo $row4['COUNT(id)']." ".$row4['city']."<br>";
    }
}
else{
    echo "ERROR: Could not able to execute";
}
echo "<br>";
//find total no. of students from delhi
//having is always used with aggregate function or in numerical values
//order : where>group by>having
$sql5="SELECT COUNT(id) FROM students WHERE  city='Delhi'";
if($result5=mysqli_query($link,$sql5)){
    while($row5 =mysqli_fetch_array($result5)){
   echo $row5['COUNT(id)']."<br>";
   }
}
else{
   echo "ERROR: Could not able to execute";
}
//find city where total students are <3
//"SELECT city,COUNT(*)FROM students group by city HAVING COUNT(*)<2"

$sql6="SELECT city,COUNT(*)FROM students group by city HAVING COUNT(*)<3";
if($result6=mysqli_query($link,$sql6)){
    while($row6 =mysqli_fetch_array($result6)){
   echo $row6['city']."<br>";
   }
}
else{
   echo "ERROR: Could not able to execute";
}

$sql7="SELECT * FROM students ORDER BY marks desc";
if($result7=mysqli_query($link,$sql7)){
    while($row7 =mysqli_fetch_array($result7)){
   echo $row7['marks']."<br>";
   }
}
else{
   echo "ERROR: Could not able to execute";
}

//"DELETE FROM students WHERE city='Jaipur"
//

//close connection
mysqli_close($link);
?>