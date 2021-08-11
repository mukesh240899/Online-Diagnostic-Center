<?php 
    session_start();  
    include 'connection.php';
    if($_SESSION["loggedin"])
    {
      header("Location:adminpatient.php");
    }
    if(isset($_POST["login"])){
    $email = $_POST['email'];  
    $pw = $_POST['pw'];  
    $sql = "select * from admin_tbl where email = '$email' and password = '$pw'";  
    $result = mysqli_query($conn, $sql);  
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);  
    if($count == 1){  
      $row = $result->fetch_assoc();
        $_SESSION["email"]=$email;
        $_SESSION["loggedin"]=TRUE;
        $_SESSION["id"]=$row['id'];
        //echo "hello";
        //echo isset($_SESSION["loggedin"]);
        header("Location:adminpatient.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    
    <form class="mt-5 mx-auto border border-2 p-5"  style="text-align: center; width:40%;" method="POST">
        <h2>ADMIN LOGIN</h2>
        <div class="mb-3" >
          <label for="email" class="form-label" >Email address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="pw">
        </div>
        <button type="submit" class="btn btn-primary" name="login">Log In</button>
      </form>
</body>
</html>
