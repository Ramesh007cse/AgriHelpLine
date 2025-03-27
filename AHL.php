<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Database</title>
</head>
<body>
    <?php
    $username="localhost";
    $user="root";
    $con=new mysqli($username,$user);
    $sql="create database agrhelpline";
    if($con->query($sql)===true){
        echo "database created";
    }
    ?>
</body>
</html>