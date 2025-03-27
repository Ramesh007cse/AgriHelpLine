<?php
session_start();
if(isset($_SESSION["id"])){
$id=$_SESSION["id"];
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agrhelpline";
$con = mysqli_connect($servername, $username, $password, $dbname);
$sq = "SELECT * FROM userregdata where ID=$id";
$sql = mysqli_query($con, $sq);
if ($r = mysqli_fetch_row($sql)) {
  $n = $r[0];
} else {
  $n = 0;
}
$z = "";
if ($n <= 9) {
  $z = "000";
} elseif ($n >= 10 && $n <= 99) {
  $z = "00";
} elseif ($n >= 100 && $n <= 999) {
  $z = "0";
}
$farmid = "FARM24" . $z . ($n );
$q_name = "SELECT Full_Name FROM userregdata WHERE id= $id";
$sq_name = mysqli_query($con, $q_name);
if ($r_name = mysqli_fetch_assoc($sq_name)) {
    $name = $r_name['Full_Name'];
} else {
    $name = "";
}
$password = strrev(substr($name, 0, 4));
if (strlen($password) < 4) {
    $password = str_pad($password, 4, 'X');
}
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
function sendmail($name,$email){
  $name=htmlentities($name);
  $email=htmlentities($email);
  $mailsender="ramesh";
  $message="haiiii";
  $mail = new PHPMailer(true);
  $mail->isSMTP(); 
  $mail->Host       = 'smtp.gmail.com';                    
  $mail->SMTPAuth   = true;                                   
  $mail->Username   = 'ramesh10ram6@gmail.com';                    
  $mail->Password   = 'uxyi urpx tygb yach';  
  $mail->Port       = 465;   
  $mail->SMTPSecure = 'ssl';            
  $mail->isHTML(true); 
  $mail->setFrom($email,$mailsender); 
  $mail->addAddress($email);                                   
  $mail->Subject = ("mail sending");
  $mail->Body    = $message;
  $mail->send();      
}
?>
<!DOCTYPE html>
<html lang="en">
  <title>Agri Help Line</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <style>
    body {
      background-color: skyblue;
      font-family: 'Arial', sans-serif;
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-box {
      background: violet;
      padding: 100px;
      border-radius: 50px;
      box-shadow: 10px 10px 20px 10px rgba(0, 0, 0, 0.1);
    }
    .login-box h3 {
      margin-bottom: 30px;
      font-weight: 600;
      color: white;
    }
    .form-label {
      font-weight: 800;
      font-stretch: extra-expanded;
    }
    .form-control {
      border-radius: 10px;
    }
    .btn {
      width: 100%;
      padding: 10px;
      background-color: yellowgreen;
      border: none;
      border-radius: 5px;
      color: #fff;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .btn:hover {
      background-color: blueviolet;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .text-center {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-box">
      <form name="login" method="post">
        <h3 class="text-center">permission access</h3>
        <div class="form-group">
          <?php
          echo "<label for='name' class='form-label'> ID</label>
          <input type='text' name='farmid' value='$farmid' class='form-control' placeholder='owner-id' readonly>";
          ?>
        </div>
        <div class="form-group">
          <?php
          echo "<label for='name' class='form-label'> password</label>
          <input type='text' name='password' value='$password' class='form-control' placeholder='owner-id' readonly>";
          ?>
        </div>
        <button type="submit" class="btn" name="sub">send mail</button>
      </form>
    </div>
  </div>
  <?php
  if (isset($_POST["sub"])) {
    $farmid = $_POST["farmid"];
    $pass = $_POST["password"];
  }
  ?>
  <?php
  if(isset($_POST["sub"])){
  $mq = "SELECT * FROM userregdata where id=$id";
  $msq = mysqli_query($con, $mq);
  if ($r = mysqli_fetch_row($msq)) {
    $email=$r[3];
    $name=$r[1];
  sendmail($name,$email);}
    }
  ?>
</body>
</html>