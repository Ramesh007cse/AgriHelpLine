<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Table</title>
</head>
<body>
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
                print("<tr>
                    <td>$ro[1]</td>
                    <td>$ro[2]</td>
                    <td>$ro[3]</td>
                    <td>$ro[4]</td>
                    <td>$ro[5]</td>
                    <td>$ro[6]</td>
                    <td><img src='Media/Database/$ro[7]' class='rounded' style='width:100px; height:100px;'></td>
                    </tr>
                    ");
            }
         }
    ?>
</body>
</html>