<?php 
  require '../functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <title>Web</title>
</head>

<body>
  <!-- Awal Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#"><img src="undiksha.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="Home.html">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="menu/makanan.php">Menu</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#">Lokasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
      </ul>
      <form class="form">
        <a class="btn" href="Sign_In/Sign_in.php" role="button">Sign In</a>
        <a class="btn" href="Sign_up/sign_up.php" role="button">Sign Up</a>
      </form>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Awal Slide img -->
  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="10000">
        <img src="img/1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-interval="2000">
        <img src="img/2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Akhir Silde -->

  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>