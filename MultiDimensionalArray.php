<?php

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

echo "Here is my {$cars[3][0]} car with mileage of {$cars[3][2]}<br>";

//echoing all elements with foreach
echo "Showing all car deatails together<br>";
foreach($cars as $keyouter => $carpackages)
{
    foreach($carpackages as $keyinner => $carfeature)
    {
        echo $keyouter. $keyinner . " ". $carfeature . "<br>";
    }
}


//multi dimensional associative arrays

$languages = array();
  
$languages['Python'] = array(
    "first_release" => "1991", 
    "latest_release" => "3.8.0", 
    "designed_by" => "Guido van Rossum",
    "description" => array(
        "extension" => ".py", 
        "typing_discipline" => "Duck, dynamic, gradual",
        "license" => "Python Software Foundation License"
    )
);
  
$languages['PHP'] = array(
    "first_release" => "1995", 
    "latest_release" => "7.3.11", 
    "designed_by" => "Rasmus Lerdorf",
    "description" => array(
        "extension" => ".php", 
        "typing_discipline" => "Dynamic, weak",
        "license" => "PHP License (most of Zend engine
             under Zend Engine License)"
    )
);
  
print_r($languages);
echo "<br><br>";

foreach($languages as $name => $language)
{
    echo "<br><br>". $name."<br>";
    foreach($language as $feature => $detail)
    {
        echo $feature . " : \n\n";
        if (is_array($detail))
         {
            foreach ($detail as $k => $v)
            {
                echo "\t" .$k . " = " . $v . "<br>";
            }
        } 
        else
         {
            echo $feature . " = " . $detail . "<br>";
        }
    }
}

?>