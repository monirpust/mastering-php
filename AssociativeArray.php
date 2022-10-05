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

 // travarsing php array wit for loop

 $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

 $keys = array_keys($age);

 for($i = 0; $i < count($keys); $i++)
 {
    echo $keys[$i]." => " . $age[$keys[$i]] ."<br>";
 }

 // travarsing php array with foreach loop

 foreach($age as $personAge)
 {
    echo $personAge . "<br>";
 }

// travarsing php array with foreach loop with keys

foreach($age as $name => $year):
    echo $name . " => ". $year . "<br>";
endforeach;

// numeric array by while loop
$students = array("Abul", "Babul", "Cabul", "Dabul", "Ebul");
$i = 0;
while($i < count($students))
{
    echo $students[$i] . "<br>";
    $i++;
}

// php array by while loop
$students = array("Abul"=>4.9, "Babul"=>5.7, "Cabul"=>5.4, "Dabul"=>5.2, "Ebul"=>5.3);
$i = 0;
$keys = array_keys($students);
while($i < count($keys))
{
    echo $keys[$i] . " => " .$students[$keys[$i]] . "<br>";
    $i++;
}


?>
