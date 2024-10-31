<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Projeto Final - style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>CriePizza</title>
</head>

<style>
        .div-direita {
            background-color: black; /* Cor de fundo para a div */
            padding: 10px; /* Espaçamento interno */
            margin-left: 15px; /* Margem à esquerda */
        }
</style>

<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['email'])) {
    header("Location: Login.php");
    exit();
}
?>
<body style="background-color: black;">
<nav class="navbar navbar-expand-lg bg-body-primary" style="background-color: black;">
  <div class="container-fluid">
  <a class="navbar-brand" href="/Projeto Final - style/index.php"> 
    <img src="img\logo.png" class="img-fluid" style="border-radius:100%" alt="Logo" width="100" height="100" id="logo"> 
   </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/Projeto Final - style/Nossas lojas.html" style="color: white;">Nossas lojas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: white;">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Projeto Final - style /Cardápio.php" style="color: white;">Cardápio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
            Entre
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/Projeto Final - style /Login.php" >Login</a></li>
            <li><a class="dropdown-item" href="/Projeto Final - style /Cadastro.php">Cadastro</a></li>
            <li><a class="dropdown-item" href="/Projeto Final - style /logout.php">Logout</a></li>
          </ul>
        </li>
            <div class="div-direita">
                <li class="nav-item">
                    <a style="color: green;">Logado <?php echo $_SESSION['email']; ?></a>
                </li>
            </div>
      </ul>
    </div>
  </div>
</nav>
  
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img\pizza.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img\pizza2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img\pizza3.jpg" class="d-block w-100" alt="...">
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
  <div id="dados"> 
     <p> <h3> Localização do CriePizza </h3> </p> <br>
  </div>
  <div id="maps">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1546.9378212446472!2d-43.44841264404839!3d-22.75577026005686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9967073646f12b%3A0x4945905c00461169!2sCol%C3%A9gio%20SR%20Millennium!5e0!3m2!1spt-BR!2sbr!4v1712514795953!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" display="flex" justify-content="center"></iframe>
     <br>
    </div>
    <footer>
       ©2024, Chessmate, Inc. ou suas afiliadas
       <br>
       <img src="img/chessmate.png" height="50px" width="50px" id="footerimg" style="border-radius:100%">
    </footer>
</body>
</html>