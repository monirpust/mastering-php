<?php

/** require/ require_once/ include /include_once */
//require stop the script if file not found
// require 'filereads.php';

//include throw warning and run script if not found
include 'fileread.php';
echo "<br>";

//include the file one time in the script lifecycle
require_once 'monirs.txt';
require_once 'monirs.txt';

echo "Well, it include the file if exist";