<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Form</title>
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
            width: 100%;
            max-width: 400px;
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
        .form-group input {
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
            background-color: #76127b;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Admin Login</h2>
    <form action="AdminDB.php" name="adminlog" onsubmit="return adminValidate()" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit">Register</button>
        </div>
    </form>
</div>
<script>
        function adminValidate(){
            usrid=document.forms["adminlog"]["username"];
            psw=document.forms["adminlog"]["password"];
            if(username.value===""||null){
                alert("Enter The User Id");
                return false;
            }
            else if(password.value===""||null){
                alert("Enter the Password");
                return false;
            }
            else if(username.value==="Ramesh" && password.value==="ram12123"){
                return true;
            }
            else{
                alert("Invalid User Id & Password");
                return false;
            }
        }

    </script>
</body>
</html>
