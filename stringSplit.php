<?php

$story = "a quick brown, fox jump. over a lazy dog";

$parts = explode(",", $story);

$part2 = str_split($story);
print_r($parts);
print_r($part2);

//joining two or more string
$joined = implode($part2); //join() for same function
print_r($joined);

?>