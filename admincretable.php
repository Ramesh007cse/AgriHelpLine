<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Data</title>
</head>
<body>
    <?php
    $servername="localhost";
    $user="root";
    $password="";
    $db="agrhelpline";
    $con=new mysqli($servername,$user,$password,$db);
    $sql="create table admtab(Farm_Id varchar(10),Name varchar(20),Username varchar(30),Password varchar(20))";
    if($con->query($sql)===true) {
        echo "table created";
    }
?>
</body>
</html>