<?php
session_start();  
if(!$_SESSION["loggedin"])
{
  header("Location:Admin.php");
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
  <div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">PATIENT ID</th>
          <th scope="col">PATIENT NAME</th>
          <th scope="col">DOCTOR</th>
          <th scope="col">DATE</th>
          <th scope="col">TIME</th>
          <th scope="col">STATUS</th>
        </tr>
      </thead>
      <tbody>
          <?php
              include "connection.php";
              $sql = "select a.patient_id,a.test,p.name as pname,d.name,a.date,a.time,a.status from patient p,doctor d,appointment a where p.id=a.patient_id and a.doctor_id=d.doc_id";  
              $result = mysqli_query($conn, $sql);  
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  if($row["test"]=="doctorA")
                    echo "<tr><td>" . $row["patient_id"]. "</td><td>" . $row["pname"]. "</td><td>" . $row["name"]. "</td><td>" . $row["date"]. "</td><td>" . $row["time"]. "</td><td>" . $row["status"]. "</td></tr>";
                }
            } else {
                echo "0 results";
            }
          ?>
      
      </tbody>
    </table>
  </div>
</body>
</html>