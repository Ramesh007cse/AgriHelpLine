<?php
session_start();
if(isset($_SESSION)){
$id=$_SESSION["id"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Agri Help Line Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
        }
        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }
        .sidebar a:hover {
            background-color: #007bff;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        h2 {
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
        }
        form {
            background: #ffffff4e;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            color: #28a745;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        .form-group button {
            padding: 10px 20px;
            font-weight: bold;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background: #ad137f;
        }
        table{
            padding: 20px;
            width: 100%;
         
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <a href="./FarmerDB.php">Farmer</a>
        <a href="./StudentDB.php">Student</a>
        <a href="">General User</a>
    </div>

    <div class="content">
        <h2>Agri Help Line Admin Dashboard</h2>
        <h1>Farmer Table</h1>
    <table border="2px">
        <tr>
            <th>Full_Name</th>
            <th>Mobile_No</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Profile</th>
            <th>Approval</th>
        </tr>
    <?php
         $servername="localhost";
         $user="root";
         $password="";
         $db="agrhelpline";
         $con=new mysqli($servername,$user,$password,$db);
         if($con){
            $sq="select * from userregdata";
            $sql=mysqli_query($con,$sq);
            while($ro=mysqli_fetch_row($sql)){
                print("
                   <form method='post'>
                   <input type='text' name='id' value='$ro[0]'>
                <tr>
                    <td>$ro[1]</td>
                    <td>$ro[2]</td>
                    <td>$ro[3]</td>
                    <td>$ro[4]</td>
                    <td>$ro[5]</td>
                    <td>$ro[6]</td>
                    <td><img src='Media/Database/$ro[7]' class='rounded' style='width:100px; height:100px;'></td>
                    <td><input type='submit' name='submit' value='Accept' class='btn btn-success'><br>
                    <input type='submit' name='sub' value='Reject' class='btn btn-danger'></td> 
                    <td>$ro[9]</td>
                    <td>$ro[10]</td>
                    </tr>

                    ");     
            }
         }
    ?>
    </table>
         <?php

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $sq = "select * from userregdata where ID=$id";
    $sql = mysqli_query($con, $sq);
    while ($ro = mysqli_fetch_row($sql))
{     
        session_start();
        $_SESSION["id"] = $id;
        
        echo "<script>
document.location='autogenerate.php';
</script>";
    }
}


?>
</body>
</html>