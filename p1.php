<?php
    $input = "Swapna<b>Lawrence</b>you<h1> are</h1> really<i>pretty</i>!";
    echo $input;
    echo "<br>";
    $input = strip_tags($input,"<i></i>");
    echo $input;
    ?>