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
              <th scope="col">S.NO.</th>
              <th scope="col">PATIENT NAME</th>
              <th scope="col">AGE</th>
              <th scope="col">SEX</th>
              <th scope="col">MOBILE</th>
              <th scope="col">EMAIL</th>
              <th scope="col">ADDRESS</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "connection.php";
            $sql = "select id,name,age,sex,mobile,email,address from patient";  
            $result = mysqli_query($conn, $sql);  
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["age"]. "</td><td>" . $row["sex"]. "</td><td>" . $row["mobile"]. "</td><td>" . $row["email"]. "</td><td>" . $row["address"]. "</td></tr>";
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