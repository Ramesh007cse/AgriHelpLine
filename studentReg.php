<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 700px;
        }
        .container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input,.form-group select{
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Student Registration</h2>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="username">Student_Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="phoneno">Mobile No:</label>
            <input type="number" id="mobile" name="mobile" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="address" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
           <select name="gender" id="gender" required>
           <option value="male">Male</option>
           <option value="female">Female</option>
        </select>
        </div>
        <div class="form-group">
            <label for="dob">D.O.B:</label>
            <input type="date" id="dob" name="dob" required>
        </div>
        <div class="form-group">
            <label for="Profile">Profile:</label>
            <input type="file" id="profile" name="profile" required>
        </div>
        <div class="form-group">
            <input type="submit" name="sub" value="Register" class="btn btn-success">
        </div>
    </form>
</div>
<?php
    $servername="localhost";
    $user="root";
    $password="";
    $db="agrhelpline";
    $con=mysqli_connect($servername,$user,$password,$db);
    if ($con) {
        if(isset($_POST["sub"])){
            $Student_Name=$_POST["name"];
            $Mobile_No=$_POST["mobile"];
            $Email=$_POST["email"];
            $Address=$_POST["address"];
            $Gender=$_POST["gender"];
            $DOB=$_POST["dob"];
            $status = "New";
            $Profile=$_FILES["profile"]["name"];
            $tmp_Profile=$_FILES["profile"]["tmp_name"];
            $ip="./Media/Database/".$Profile;
            move_uploaded_file($tmp_Profile,$ip);
            $sql="insert into student(Student_Name,Mobile_No,Email,Address,Gender,DOB,Profile,Status)values('$Student_Name','$Mobile_No','$Email','$Address','$Gender','$DOB','$Profile','$status')";
            $sq=mysqli_query($con,$sql);
            print("
            <script>
            alert('Info Added Successfully')
            </script>
            ");
        }
    }
?>
</body>
</html>
