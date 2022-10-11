<?php

//opening file in write mode
$handle = fopen('monir.txt', 'w');
//writing to file if not exist then create the file
if(fwrite($handle, 'Hey, there. I am Monir'))
{
    echo "Write successful";
}
else
{
    echo "Write failed";
}

fclose($handle);

?>
