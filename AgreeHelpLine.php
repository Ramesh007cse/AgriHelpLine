<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Agri Help Line</title>
    <style>
        h1{
            text-align: center;
            border: 2px solid lightblue;
            background-color: rgb(18, 205, 90);
            color: white;
            padding: 15px;
        }
       
        footer{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: rgb(230, 236, 41);
            color: black;
            text-align: center;
            font-weight: bold;
            font-size: large;
            padding: 15px;
        }
        nav a:hover{
          background-color: rgb(0, 255, 119);
        }
        .dropdown-item:hover{
          background-color: aquamarine;
        }
    </style>
</head>
<body>
    <header><h1>AGRI HELP LINE</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./AgreeHelpLine.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="AboutUs.php">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login/Signup
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="adminReg.php">Admin Login</a></li>
                  <li><a class="dropdown-item" href="officerLogin.php">Officer Login</a></li>
                  <li><a class="dropdown-item" href="farmerLogin.php">Farmer Login</a></li>
                  <li><a class="dropdown-item" href="studentLogin.php">Student Login</a></li>
                  <li><a class="dropdown-item" href="generalUserLogin.php">General-User Login</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
            </form>
          </div>
        </div>
      </nav>
    </header>
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./ai-generated-8708404.jpg" class="d-block w-100" width="100%" height="520px">
              </div>
              <div class="carousel-item">
                <img src="./nature-3526840.jpg" class="d-block w-100" width="100%" height="520px">
              </div>
              <div class="carousel-item">
                <img src="./tractor-385681.jpg" class="d-block w-100" width="100%" height="520px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
  <footer>
    Agri Help Line &copy; 2024
  </footer>
</body>
</html>