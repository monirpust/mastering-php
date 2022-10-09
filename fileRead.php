<?php

$handle = fopen("test.txt", 'r') or die("file not found");

//echo gettype($handle);

if($handle)
{
    echo "<br>" . fgets($handle) . "<br>";
}

echo "Now read rest of file: <br>";
while(!feof($handle))
{
    $data = fgets($handle);
    echo $data . "<br>";
}

//closing the file
fclose($handle);

?>