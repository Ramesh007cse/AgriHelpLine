<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Table</title>
</head>
<body>
    <table border="2px">
        <tr>
            <th>Farmer_ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
    <?php
         $servername="localhost";
         $user="root";
         $password="";
         $db="agrhelpline";
         $con=new mysqli($servername,$user,$password,$db);
         if($con){
            $sq="select * from admtab";
            $sql=mysqli_query($con,$sq);
            while($ro=mysqli_fetch_row($sql)){
                print("<tr>
                    <td>$ro[0]</td>
                    <td>$ro[1]</td>
                    <td>$ro[2]</td>
                    <td>$ro[3]</td>

                    ");
            }
         }
    ?>
</body>
</html>