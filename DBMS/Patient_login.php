<?php 
    session_start();  
    include 'connection.php';
    // echo $_SESSION["loggedin"];
    if($_SESSION["logedin"])
    {
      header("Location:patientappointment.php");
    }
    if(isset($_POST["login"])){
        $email = $_POST['email'];
        $pw = $_POST['pw'];  
        $sql = "select * from patient where email = '$email' and password = '$pw'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count == 1){  
            $_SESSION["email"]=$email;
            $_SESSION["logedin"]=TRUE;
            $_SESSION["id"]=$row['id'];
            echo "hello";
            //echo isset($_SESSION["loggedin"]);
            header("Location:patientappointment.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Login Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Eagle+Lake&family=Festive&family=Lateef&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <div class="box">
                <h2 align="center">PATIENT LOGIN PANEL</h2>
                <form method="POST">
                    
                    <fieldset>
                        <input type="email" class="input-box" placeholder="Email" id="email" name="email">
                    </fieldset>
                    <fieldset>
                        <input type="password" class="input-box" placeholder="Password" id="password" name="pw">
                    </fieldset>
                    <button class="button" type="submit" name="login">LOGIN</button>
                </form>
                <div style="text-align: center;">
                    <a href="index.php" class="link">BACK TO HOME</a>
                </div>
            </div>
       </div>
</body>
</html>