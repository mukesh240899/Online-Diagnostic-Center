<?php
include 'connection.php';
    session_start();
    if(isset($_POST["submit"])){
    $name= $_POST['name'];
    $email = $_POST['email'];
    $mob= $_POST['mob'];
    $age= $_POST['age'];
    $gender=$_POST['gender'];
    $address= $_POST['address'];
    $pw = $_POST['pw'];  
    $sql = "insert into patient(name,age,sex,mobile,email,password,address) values('$name',$age,'$gender','$mob','$email','$pw','$address')";  
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Signup</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="main">
        <div class="register" >
            <form id="register" method="post">
                <h2 >Patient SignUp</h2><br>
                <h3>SignUp</h3><br>
                <input type="text" class="input-box" placeholder="NAME" id="name" name="name"><br><br>
                <input type="email" class="input-box" placeholder="EMAIL" id="email" name="email"><br><br>
                <input type="password" class="input-box" placeholder="PASSWORD" id="pw" name="pw"><br><br>
                <label class="label">Gender</label>
                <br>
                &nbsp; &nbsp; &nbsp;
                <input type="radio" name="gender" value="male" id="male">
                &nbsp;
                <span id="male">Male</span>
                &nbsp; &nbsp; &nbsp; &nbsp; 
                <input  type="radio" name="gender" value="female" id="female">
                &nbsp;
                <span id="female">Female</span>
                &nbsp; &nbsp; &nbsp; &nbsp; 
                <input  type="radio" name="gender" value="other" id="other">
                &nbsp;
                <span id="other">Other</span> <br>
                <label class="label">Age</label>
                <input type="number" class="input-box" id="age" name="age"><br><br>
                <label class="label" >Mobile Number</label>
                <input class="input-box" placeholder="Enter your 10 digit phone number" type="text" id="mob" name="mob"><br><br>
                <label class="label">Address</label>
                <textarea class="textarea" name="address"></textarea>
                <button type="submit" class="button" name="submit">Submit</button>
                <br><center><a class="btn btn-primary" href="index.php">BACK</a></center><br>
                <!-- <button type="submit" class="button" name=""><a href="index.php">Back</a></button> -->
              </form>
        </div>
    </div>
</body>
</html>