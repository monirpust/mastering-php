<?php
//recursive function
function myFunction($a)
{
    if($a <= 10)
    {
        echo "$a <br>";
        myFunction($a+1);
    }

}

myFunction(1);



?>