<?php
$name = "Tanvir";
$month = "October";
//normal function
function show()
{
    echo "Hello, from normal function <br>";
}

//anonymus function 

 $a = function($num)
        {
            echo "Hello, from anonymus functon $num<br>";
        };
show();
//calling anonymus function 
$a(50);

//accessing global variable and passing 
//parameter to anonymus function
$a = function($city) use($name)
{
    echo "anonymus functon from $city by $name<br>";
};
//calling anonymus function 
$a("Pabna");