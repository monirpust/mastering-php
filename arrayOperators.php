<?php
$ages1 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

print_r($ages1);
echo "<br>";

$ages2 = array("Abul"=>"35", "Babul"=>"37", "Joe"=>"73");
print_r($ages2);
echo "<br>";

//union of array
$ages =  $ages2 + $ages1;

print_r($ages);
echo "<br>";
//'==' comparing two array only key-value pair
$persons1 =array("Abul"=>"35", "Babul"=>"37", "Joe"=>"73");
$persons2 =array("Babul"=>"37", "Joe"=>"73", "Abul"=>"35");
if($persons1 == $persons2)
    echo "both are key/value pair same";
else
    echo "two different array";

//'===' comparing two array only key-value pair and order
$persons1 =array("Abul"=>"35", "Babul"=>"37", "Joe"=>"73");
$persons2 =array("Abul"=>"35", "Babul"=>"37", "Joe"=>"73");
if($persons1 === $persons2)
{
    echo "both are key/value pair and order same";
    echo "<br>";
}
else
{
    echo "two different ordered with same key/value array";
}

echo "<br>";
?>