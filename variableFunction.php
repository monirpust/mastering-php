<?php

function one()
{
    echo "hello, from function one<br>";
}

function two()
{
    echo "hello, from function two<br>";
}

function three()
{
    echo "hello, from function three<br>";
}
echo "<h1>Normal function: </h1>";
one();
two();
three();

echo "<h1>From variable function: </h1>";
$func_variable = "one";

$func_variable();

?>