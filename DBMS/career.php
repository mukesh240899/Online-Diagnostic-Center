<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="main">
        <div class="register" >
            <form id="register" method="post">
                <h2 >CAREER</h2><br>
                <h4>APPLY ONLINE</h4><br>
                <input type="text" class="input-box" placeholder="NAME" id="" name=""><br><br>
                <input type="email" class="input-box" placeholder="EMAIL" id="" name=""> <br><br>
                <label class="label">Gender</label>
                <br>
                &nbsp; &nbsp; &nbsp;
                <input type="radio" name="gender" id="male">
                 &nbsp;
                <span id="male">Male</span>
                &nbsp; &nbsp; &nbsp; &nbsp; 
                <input  type="radio" name="gender" id="female">
                &nbsp;
                <span id="female">Female</span>
                <br>
                <label class="label">Age</label><br>
                <input type="number" class="input-box" id="" name=""><br><br>
                <label  class="label">Qualification</label><br>
                <input type="text" class="input-box" id="" name=""><br><br>
                <label class="label">Apply For</label>
                <br>
                &nbsp;
                <select class="input-box">
                    <option value="choose">choose</option>
                    <option value="doctor">Doctor</option>
                   <option value="nurse">Nurse</option>
                   <option value="wardboy">Ward Boy</option>
                </select>
                <br>
                <button type="submit" class="button">Submit</button>
                


                 

            </form>

        </div>
    </div>
</body>
</html>