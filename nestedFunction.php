<?php

function outer_display()
{
    echo "hello, from function outer_display<br>";

    function inner_display()
    {
        echo "hello, from function inner_display<br>";
    }
}
//outer function must call first
outer_display();
inner_display();



