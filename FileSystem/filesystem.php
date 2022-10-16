<?php
//working with filesystem
$dir = scandir(__DIR__);

//making new directory
mkdir("newfolder");

//removing directory
rmdir("newfolder");

//creating directory inside directory or recursive directory
mkdir("file/photos", recursive:true);

if(file_exists("test.txt"))
{
    echo filesize("test.txt");
    echo "<br>";
    file_put_contents("test.txt", "hello file store me");
    echo filesize("test.txt");

    //to clear cache stored for performance issue
    // clearstatcache()
}
else
{
    echo "file not found";
    echo "<br>";
}

var_dump($dir);