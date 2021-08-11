<?php
include 'connection.php';
session_start();  
if(!$_SESSION["logedin"])
{
  header("Location:Patient_login.php");
}
$id=(int)$_SESSION["id"];
if( isset($_POST["update"])){
    $oldpass="select password from patient where id=$id";
    $result = mysqli_query($conn, $oldpass);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($_POST['opw']==$row['password']){
        // echo "hello";
        $name= $_POST['name'];
        $email = $_POST['email'];
        $mob= $_POST['mob'];
        $age= $_POST['age'];
        $gender=$_POST['gender'];
        $address= $_POST['address'];
        $pw = $_POST['pw'];  
        $sql = "update patient set name='$name',age=$age,sex='$gender',mobile='$mob',email='$email',password='$pw',address='$address' where id=$id";  
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    // else{
    //     alert("WRONG OLD PASSWORD");
    // }
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
    <title>PATIENT</title>
</head>
<body>
    <header>
        <p>
            <span>PATIENT</span>
        </p>
    </header>
    <?php
    include "patientnav.php";
    ?>
    <div class="container w-50">
    <br><br>
    <center><p class="h3">UPDATE YOUR DETAILS</p></center>
    <br>
    <form action="" method="POST">
        <input class="form-control" type="password" placeholder="Old Password" aria-label="default input example" name="opw"><br><br>
        <input class="form-control" type="text" placeholder="Name" aria-label="default input example" name="name"><br>
        <input class="form-control" type="text" placeholder="Age" aria-label="default input example" name="age"><br>
        <label class="label">Gender</label>
                &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="radio" name="gender" value="male" id="male">
                <span id="male">Male</span>
                &nbsp; &nbsp; &nbsp; &nbsp; 
                <input  type="radio" name="gender" value="female" id="female">
                <span id="female">Female</span>
                <br><br>
        <input class="form-control" type="text" placeholder="Mobile" aria-label="default input example" name="mob"><br>
        <input class="form-control" type="email" placeholder="Email" aria-label="default input example" name="email"><br>
        <input class="form-control" type="password" placeholder="New Password" aria-label="default input example" name="pw"><br>
        <input class="form-control" type="text" placeholder="Address" aria-label="default input example" name="address"><br>
        <center><button class="btn bg-warning" type="submit" name="update">UPDATE</button></center>
    </form>
    </div>
    <br><br>
</body>
</html>