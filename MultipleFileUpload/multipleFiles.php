<?php
$allowedType = array(
    'image/png',
    'image/jpg',
     'image/jpeg',
);

if($_FILES["photo"])
{
    $totalFiles = count($_FILES['photo']['name']);
    for($i = 0; $i < $totalFiles; $i++)
    {
        if(in_array($_FILES['photo']['type'][$i], $allowedType) != false)
        {
            move_uploaded_file($_FILES["photo"]["tmp_name"][$i], "files/".$_FILES["photo"]["name"][$i]);
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
    <pre>
        <?php
          print_r($_POST);
          print_r($_FILES);
         echo $_FILES["photo"]["tmp_name"];
        ?>
    </pre>
</div>

    <div class="row">
        <div class="col">
        <div class="column column-60 column-offset-20">
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname">
            <br><br>
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname">
            <br><br>
            <label for="photo">Photo</label>
            <input type="file" name="photo[]" id="photo">
            <br><br>
            <label for="photo">Photo</label>
            <input type="file" name="photo[]" id="photo">
            <br><br>
            <button type="submit">Submit</button>
        </form>
      </div>
    </div>
    </div>
</body>
</html>