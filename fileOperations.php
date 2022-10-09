<?php
//open file in binary mode
$handle = fopen("test.txt", "rb");

//rading character till file size
$fileText = fread($handle, filesize("test.txt"));

fclose($handle);

echo $fileText;

echo "<br>";

//coping file
if(copy("test.txt", "newfile.txt"))
{
    echo "copy success<br>";
}
else
{
    echo "copy failed<br>";
}

//delete copied file
// if(unlink("newfile.txt"))
// {
//     echo "file deleted<br>";
// }
// else
// {
//     echo "fail to delete<br>";
// }