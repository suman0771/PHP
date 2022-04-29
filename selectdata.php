<?php

//Prodedural Way

/* $link = mysqli_connect("hostname", "username", "password", "database"); */
$link = mysqli_connect("localhost", "root", "","demoprocedural");

//check connection
if($link===false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}

//Attempt select query execution
$sql="SELECT * FROM students";
if($result=mysqli_query($link, $sql)){
    if(mysqli_num_rows($result)>0){
        echo "<table border=2>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
                echo "<th>city</th>";
                echo "<th>marks</th>";
            echo "</tr>";
        while($row=mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['first_name']."</td>";
                echo "<td>".$row['last_name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['city']."</td>";
                echo "<td>".$row['marks']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        //free result set
        mysqli_free_result($result);
    }else{
        echo "No record matching your query were found.";
    }
}
    else {
        echo "ERROR: Could not able to execute $sql. ".mysqli_error($link);
    }


//close connection
mysqli_close($link);
?>