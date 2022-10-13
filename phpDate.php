<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    date_default_timezone_set("Asia/Dhaka");
       echo date('dS F, Y h:i:s a');
       echo "\n";
       echo date('t');
       echo "<br>";
       //printing unix timestamp
       echo time();
       echo "<br>";

       //return pass time in seconds after unix timestamp 1979
       echo mktime(0,0,0,12,1,2022);
       echo "<br>";
    ?>
</body>
</html>