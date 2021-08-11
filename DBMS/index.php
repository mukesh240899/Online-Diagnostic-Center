<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header style="background-color:#559affb3;">
        <p>
            <img src="images/logo.png" alt="logo" width="20%">
            <span>Digital Diagnostic Center</span>
        </p>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Department.php">DEPARTMENT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">FACILITY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="career.php">CAREER</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  LOG IN/SIGN UP
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="Admin.php">ADMIN LOGIN</a></li>
                  <li><a class="dropdown-item" href="Doc_login.php">DOCTOR LOGIN</a></li>
                  <li><a class="dropdown-item" href="Patient_login.php">PATIENT LOGIN</a></li>
                  <li><a class="dropdown-item" href="patientsignin.php">PATIENT SIGN-UP</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <main>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/vaccination.png" class="d-block w-100" alt="vaccination">
                <div class="carousel-caption d-none d-md-block">
                  <!-- <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p> -->
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/checkup3.jpg" class="d-block w-100" height=501 alt="checkup3">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Get Your Health Check-UP</h5>
                  <p>Keep you and your family safe.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/pic3.jpg" class="d-block w-100" height=501 alt="pic3">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Advance Research Environment</h5>
                  <!-- <p></p> -->
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        <div id="div1">
            <h2>ABOUT DIGITAL DIAGNOSTIC CENTER</h2>
            <p>Your health and well being is our atmost concern and all our efforts, expertise and resources are channeled to provide you the best in diagnostic health solutions.<br>
                <b>Digital Diagnostic Center</b> offers a wide array of screening preventive tests and health check packages enabling timely and early diagnosis of a disease which in turn serves the medical fraternity to accurately identify and treat the disease effectively and also aid the prognosis of disease under treatment. In most cases, timely diagnosis of a disease can make all the difference.</p>
                <button type="button" class="btn btn-dark">Know more</button>
        </div>
        <div id="div2">
            <h2>OUR SERVICES</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex itaque, dolorem consequatur veniam consectetur dolor aut nostrum impedit quibusdam! Accusantium?</p>
            <div>
                <img src="images/laboratory.jpg" alt="laboratory" width="24%">
                <img src="images/radiology.jpg" alt="radiology" width="24%">
                <img src="images/cardiology.jpg" alt="cardiology" width="24%">
                <img src="images/consultancy.jpg" alt="consultancy" width="24%">
            </div>
            <pre class="h3">Laboratory              Radiology               Cardiology              Consultancy</pre>
        </div>
    </main>
    <footer style="background-color:#05182b;">
        <div class="footer">
          <div class="footer-content">
            <div class="text-start">
              <h1 class="logo-text text-info">Digital Diagnostic Centre</h1>
              <h6 class="logo-text text-light">Expert in diagnostic management software solutions.<br>Nationally recognized products.<br>Easy to use interface.</h6>
              <div class="contact">
                <h6 class="logo-text text-light"> Phone :&nbsp;+1234567899</h6>
                <h6 class="logo-text text-light"> Mobile :&nbsp;+0897654324</h6>
                <h6 class="logo-text text-light"> Mail :&nbsp;knowmore@email.com</h6><br>
                </div>
                  <a href="https://www.facebook.com/" class="foot" target="blank"><img src="images/facebook logo.jpg" alt="facebook" width="2%"></a>
                  <a href="https://www.instagram.com" class="foot" target="blank"><img src="images/insta logo.png" alt="insta" width="2%"></a>
                  <a href="https://www.linkedin.com/home" class="foot" target="blank"><img src="images/linkedin logo.jpg" alt="linkedin" width="2%"></a>
                </div>          
            </div>
        </div>
    </footer>
</body>
</html>