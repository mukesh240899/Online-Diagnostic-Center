<?php
session_start();  
include "connection.php";
if(!$_SESSION["logedin"])
{
  header("Location:Patient_login.php");
}
$check=FALSE;
$flag=FALSE;
$id=(int)$_SESSION["id"];
if( isset($_POST["submit"])){
  $flag=TRUE;
      $id=$_SESSION["id"];
      $test=$_POST["test"];
      $doc=$_POST["doc"];
      $date=$_POST["date"];
      $time=$_POST["time"];

      $sql="insert into appointment(patient_id,date,time,test,doctor_id) values($id,'$date','$time','$test',$doc)";
      // mysqli_query($conn, $sql);
      if ($conn->query($sql)){
        $check=TRUE;
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
    <br><br><br>
    <center><p class="h3">BOOK YOUR TEST/CHECK-UP NOW</p></center>
    <br><br>
    <form action="" method="POST">
      <select class="form-select" aria-label="Default select example" name="test">
        <option selected>SELECT TEST</option>
        <option value="doctorA">DOCTOR APPOINTMENT</option>
        <option value="COVID TEST">COVID TEST</option>
        <option value="COVID VACCINATION">COVID VACCINATION</option>
        <option value="X-RAY">X-RAY</option>
        <option value="CT-SCAN">CT-SCAN</option>
        <option value="ULTRASOUND">ULTRASOUND</option>
        <option value="BLOOD TEST">BLOOD TEST</option>
      </select><br>

      <select class="form-select" aria-label="Default select example" name="doc">
        <option selected>SELECT DOCTOR</option>
        <?php
        $sql="select doc_id,name from doctor";
        $result = mysqli_query($conn, $sql);  
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
          echo "<option value=".$row["doc_id"].">".$row["name"]."</option>";
          }
        }
        ?>
      </select><br>

      <center>
        <input class="form-control" type="date" name="date"><br>
        <input class="form-control" type="time" name="time"><br><br>
        <?php
        if($flag==TRUE)
        {
          if($check==TRUE)
          {
            echo "<h6>BOOKED...!!</h6>";
          }
        }
        ?>
        <input class="btn btn-primary" type="submit" value="SUBMIT" name="submit">
      </center>
    </form>
    </div>
</body>
</html>