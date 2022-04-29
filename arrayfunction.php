<?php

/* array_combine(keys,values);
array_chunk(array,size,preserve_key);
array_count_values($a);
array_diff($a,$b);
array_flip($a);
array_intersect($a,$b);
array_merge($a,$b);
array_pop($a);
array_push($a,"Blue");
array_reverse($a,true);
array_search(val,array);
array_slice(array,1,3); */

$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 2));
echo "<br>";
print_r(array_chunk($input_array, 2, true));
echo "<br>";
echo "<br>";


$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
#array_combine(array $keys, array $values);
$c = array_combine($a, $b);
print_r($c);
echo "<br>";
echo "<br>";

$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));

echo "<br>";
echo "<br>";

$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2,$a);

print_r($result);
echo "<br>";
echo "<br>";
$state = array ("Karnataka", "Goa", "Tamil Nadu",
"Andhra Pradesh");
echo (array_search ("Tamil Nadu", $state) );




?>