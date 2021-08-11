<?php
include "connection.php";
session_start();  
if(!$_SESSION["loggedin"])
{
  header("Location:Admin.php");
}
$check=FALSE;
$flag=FALSE;
$id=(int)$_SESSION["id"];
if( isset($_POST["update"])){
    $flag=TRUE;
    $oldpass="select password from admin_tbl where id=$id";
    $result = mysqli_query($conn, $oldpass);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($_POST['opw']==$row['password']){
        $check=TRUE;
        $pw = $_POST['pw'];  
        $sql = "update admin_tbl set password='$pw' where id=$id";  
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    else{
      $check=FALSE;
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
      <br>
      <center>
        <h3>CHANGE PASSWORD</h3><br>
        <form action="" method="POST">
        <input class="form-control" type="password" placeholder="Old Password" aria-label="default input example" name="opw">
        <?php
        if($flag==TRUE){
          if($check==FALSE)
          {
            echo "<h6>WRONG OLD PASSWORD</h6>";
          }
          else{
            echo "<h6>UPDATED</h6>";
          }
        }
        ?><br>
         <input class="form-control" type="password" placeholder="New Password" aria-label="default input example" name="pw"><br><br>
        <button class="btn bg-warning" type="submit" name="update">UPDATE</button>
        </form>
      </center>
  </div>
</body>
</html>