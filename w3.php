<html>
<body align="center">



<!-- data will be visible in current script via the url parameters -->
<!-- <form action="welcome.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
<br> -->

<!-- data will be passed to the current script via the http post method -->
<!-- <form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form> -->
<br>
<br>

<form action="welcome.php" method="post">
    Name:<input type="text" name="name"><br><br>
    Email:<input type="text" name="email"><br><br>
    Website:<input type="text" name="website"><br><br>
    Comment:<textarea name="comment" rows="5" cols="40">
    </textarea><br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="others">Others
    <br><br>
    <input type="submit">
</form>


</body>
</html>

<?php 
echo "My name is Suman!";
?>