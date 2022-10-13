<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello User</title>
</head>
<body>
    
    <?php
    if($_REQUEST['pass']=="Hello"){?>
    <h1>Welcome to webapp</h1>
    <?php } else{ ?>

        <h2> Please enter correct password</h2>
    <?php } ?>

</body>
</html>