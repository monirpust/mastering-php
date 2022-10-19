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

function getTransaction(string $fileName): array
{
    if(! file_exists($fileName))
    {
        trigger_error('File ' . $fileName. ' does not exist.', E_USER_ERROR);
    }

    $file = fopen($fileName, 'r');

    //removing first line by reading
    fgetcsv($file);

    $allTransactions = [];

    while(($fileTransactions = fgetcsv($file)) !== false)
    {
        $allTransactions[] = $fileTransactions;
    }

    return $allTransactions;
}