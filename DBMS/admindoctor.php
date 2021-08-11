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
    <!-- <div class="container-fluid">
          
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="adminpatient.php">PATIENTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admindoctor.php">DOCTORS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminappointment.php">APPOINTMENTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminpass.php">CHANGE PASSWORD</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">LOG OUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->   
  <br><center><a class="btn btn-primary" href="adminadddoc.php">ADD DOCTOR</a></center><br>
  <div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">DOCTOR NAME</th>
          <th scope="col">AGE</th>
          <th scope="col">SEX</th>
          <th scope="col">MOBILE</th>
          <th scope="col">EMAIL</th>
        </tr>
      </thead>
      <tbody>
      <?php
              include "connection.php";
              $sql = "select doc_id,name,age,sex,mobile,email from doctor";  
              $result = mysqli_query($conn, $sql);  
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["doc_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["age"]. "</td><td>" . $row["sex"]. "</td><td>" . $row["mobile"]. "</td><td>" . $row["email"]. "</td></tr>";
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
          <td>@mdo</td>
        </tr> -->
      </tbody>
    </table>
  </div>
</body>
</html>