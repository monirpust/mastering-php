<?php
declare(strict_types=1); //strict mode on

//scalar type declaration in php
function add(int $a, int $b):int //return type
{
    return $a + $b;
}

//strict mode
echo add(2,5);

?>