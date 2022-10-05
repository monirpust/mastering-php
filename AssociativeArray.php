<?php


$money = array("Tanvir"=>400, "Roni"=>2344, 4=>"Abul", "Babul"=>450);

unset($money["Babul"]);

echo "My A/C {$money["4"]}<br>";

//copying array to another array

$fees = $money;

 echo "Here from fee {$fees["Tanvir"]}<br>";

 //counting number of elements in array

 echo count($fees)."<br>";

 //retrieving key of array from value

 $key = array_keys($fees);

 echo "array key is $key[1] <br>";


?>
