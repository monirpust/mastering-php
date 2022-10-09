<?php

//check existance of file

//echo file_exists("test.txt"); //return 1 if exist

if(file_exists("test.txt"))
{
    echo "This file exists in your directory<br>";
}
else
{
    echo "Enter the correct file name<br>";
}

//return file size in bytes
echo "The size of your file is : ". filesize("test.txt"). "bytes";

$fileInfo = stat("test.txt");

echo "<br>";
foreach($fileInfo as $property=>$value)
{
    echo $property . " : ". $value;
    echo "<br>";
}


?>