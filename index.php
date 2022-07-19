<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BankDom</title>

    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="css/homePage.css">
    <link rel="shortcut icon" href="img/logom.png"> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

</head>
<body onload="loader()">

  <!-- loader for splash screen -->
  <div id="loading"></div>

    <!-- navbar starts here  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./index.html">BankDom</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="login.php">Iniciar Sesión<span class="sr-only">(current)</span></a>
            </li>
          
          </ul>
        </div>
    </nav>
  
    <div class="container-fluid hero-content">
      <div class="row align-items-center">
        <div class="col-md-6 col-sm-12 text-center" data-aos="fade-up">
         <img src="img/logom.png" alt="">
          <h1>BankDom</h1>
          <p class="lead muted">Tu Billetera Aliada</p>
          <br>
          <br>
          <a class="get-started" href="login.php">Iniciar Sesión</a>
        </div>
        <div class="col-md-6 col-sm-12 text-center" data-aos="fade-left">
          <div class="hero-img-div">
            <img class="hero-img" src="img/hero-img.svg" alt="img-showing-money-transfer">
          </div>
        </div>
      </div>
    </div>

    <script>
      var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
    </script>

    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>

    <!-- aos data  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 700,
      });
    </script>
    
</body>
</html>