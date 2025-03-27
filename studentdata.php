<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Data</title>
</head>
<body>
    <h1><Center>User Registration Data</Center></h1>
    <?php
    $servername="localhost";
    $user="root";
    $password="";
    $db="agrhelpline";
    $con=new mysqli($servername,$user,$password,$db);
    $sql="create table student(ID int(6) unsigned auto_increment primary key,Student_Name varchar(30),Mobile_No bigInt(10),Email varchar(30),Address varchar(50),Gender varchar(10),DOB date,Profile varchar(30))";
    if($con->query($sql)===true) {
        echo "table created";
    }
?>
</body>
</html>