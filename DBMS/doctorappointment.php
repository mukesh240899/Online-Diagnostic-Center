<?php
session_start();  
if(!$_SESSION["log"])
{
  header("Location:Doc_login.php");
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
    <title>DOCTOR</title>
</head>
<body>
    <header>
        <p>
            <span>DOCTOR</span>
        </p>
    </header>
    <?php
    include 'doctornav.php';
    ?>
    <div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">APPOINTMENT ID</th>
          <th scope="col">PATIENT NAME</th>
          <th scope="col">DATE</th>
          <th scope="col">TIME</th>
          <th scope="col">STATUS</th>
          <th scope="col">CHANGE STATUS</th>
        </tr>
      </thead>
      <tbody>
          <?php
              include "connection.php";
              $sql = "select a.sno,d.doc_id,p.name as pname,a.date,a.time,a.status,a.test from patient p,doctor d,appointment a where p.id=a.patient_id and a.doctor_id=d.doc_id and a.test='doctorA' order by a.date";  
              $result = mysqli_query($conn, $sql);  
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  if($row["doc_id"]==$_SESSION["id"])
                    echo "<tr><td>" . $row["sno"]. "</td><td>" . $row["pname"]. "</td><td>" . $row["date"]. "</td><td>" . $row["time"]. "</td><td>" . $row["status"]. "</td><td><center><input class=\"btn btn-primary w-25\" value=\"DONE\" type=\"text\">&nbsp;&nbsp;<input class=\"btn btn-primary w-25\" value=\"DELETE\" type=\"text\"></center></td></tr>";
                }
            } else {
                echo "0 results";
            }
          ?>
      </tbody>
    </table>
  </div>
</body>
</head>