<?php
session_start();  
if(!$_SESSION["logedin"])
{
  header("Location:Patient_login.php");
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
      <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">APPOINTMENT ID</th>
            <th scope="col">CHECK-UP/TEST</th>
            <th scope="col">DAY</th>
            <th scope="col">TIME</th>
            <th scope="col">DOCTOR</th>
            <th scope="col">STATUS</th>
          </tr>
        </thead>
        <tbody>
        <?php
            include "connection.php";
            $sql = "select a.sno,a.date,a.time,a.status,a.test,d.name as dname,a.patient_id from appointment a,doctor d where a.doctor_id=d.doc_id";  
            $result = mysqli_query($conn, $sql);  
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                if($row["patient_id"]==$_SESSION['id'])
                  echo "<tr><td>" . $row["sno"]. "</td><td>" . $row["test"]. "</td><td>" . $row["date"]. "</td><td>" . $row["time"]. "</td><td>" . $row["dname"]. "</td><td>" . $row["status"]. "</td></tr>";
              }
            } else {
                echo "0 results";
            }
            ?>
          <!-- <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr> -->
        </tbody>
      </table>
    </div>
</body>
</html>