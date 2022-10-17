<?php

declare(strict_types=1);

$roots = dirname(__DIR__). DIRECTORY_SEPARATOR ;

define('APP_PATH', $roots . 'app'. DIRECTORY_SEPARATOR);
define('FILES_PATH', $roots . 'transaction_files'. DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $roots . 'views'. DIRECTORY_SEPARATOR);


echo $roots;
echo "<br>";
echo "initial setup for app is done";
echo "<br>";
echo FILES_PATH;
echo "<br>";
echo VIEWS_PATH;
echo "<br>";
 echo APP_PATH;

?>