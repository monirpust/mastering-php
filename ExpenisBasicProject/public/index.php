<?php

declare(strict_types=1);

$roots = dirname(__DIR__). DIRECTORY_SEPARATOR ;

define('APP_PATH', $roots . 'app'. DIRECTORY_SEPARATOR);
define('FILES_PATH', $roots . 'transaction_files'. DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $roots . 'views'. DIRECTORY_SEPARATOR);

require APP_PATH.'App.php';
require APP_PATH.'helpers.php';

$files = getTransactionFiles(FILES_PATH);

$transactions = [];

foreach($files as $file)
{
    $transactions = array_merge(getTransaction($file, 'extractTransactions'), $transactions);
}

$totals = calculateTotals($transactions);

require VIEWS_PATH . 'transactions.php';

?>