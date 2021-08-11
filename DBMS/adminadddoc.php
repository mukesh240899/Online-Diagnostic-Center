<?php
session_start();  
include 'connection.php';
if(!$_SESSION["loggedin"])
{
  header("Location:Admin.php");
}
if(isset($_POST["add"]))
{
  $name=$_POST['name'];
  $sex=$_POST['gender'];
  $age=$_POST['age'];
  $mob=$_POST['mob'];
  $email=$_POST['email'];
  $pw=$_POST['pw'];
  $sql="insert into doctor(name,sex,age,mobile,email,password) values('$name','$sex','$age','$mob','$email','$pw');";
  if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>ADMIN HOME</title>
</head>
<body>
    <header>
        <p>
            <span>ADMIN</span>
        </p>
    </header>
    <?php
    include "adminnav.php";
    ?>
    <div class="container w-50">
    <br><br>
    <center><p class="h3">ADD NEW DOCTOR</p></center>
    <br>
    <form action="" method="POST">
        <input class="form-control" type="text" placeholder="Name" aria-label="default input example" name="name"><br>
        <input class="form-control" type="text" placeholder="Age" aria-label="default input example" name="age"><br>
        <label class="label">Gender</label>
                &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="radio" name="gender" value="male" id="male">
                <span id="male">Male</span>
                &nbsp; &nbsp; &nbsp; &nbsp; 
                <input  type="radio" name="gender" value="female" id="female">
                <span id="female">Female</span>
                &nbsp; &nbsp; &nbsp; &nbsp; 
                <input  type="radio" name="gender" value="others" id="female">
                <span id="Others">Others</span>
                <br><br>
        <input class="form-control" type="text" placeholder="Mobile" aria-label="default input example" name="mob"><br>
        <input class="form-control" type="email" placeholder="Email" aria-label="default input example" name="email"><br>
        <input class="form-control" type="password" placeholder="New Password" aria-label="default input example" name="pw"><br>
         <center><button class="btn bg-warning" type="submit" name="add">ADD</button></center>
    </form>
    </div>
    <br><br>
  </body>
</html>