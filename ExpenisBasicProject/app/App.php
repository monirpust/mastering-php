<?php

declare(strict_types = 1);

//reading transaction file
function getTransactionFiles(string $dirPath):array
{
    $files = [];
    //print_r(scandir(FILES_PATH));

    foreach(scandir($dirPath) as $file)
    {
        if(is_dir($file))
        {
            continue;
        }

        $files[] = $dirPath.$file;
    }

    return $files;
    
}