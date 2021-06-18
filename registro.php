<?php require 'includes/conexion.php';?>
<!DOCTYPE html >
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@3.0.0-beta.6/dist/aos.css">
    <script type="js/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="css/style.css">

   </script>
    <title>Registro</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="">AUTO-SPACE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

   </div>
   </nav>
    <div class="container" >

      <h1 class="text-center py-4" >REGISTRO</h1>
<div class="cont">
<form class="" action="Login.php" method="post">

<a href="./inicio.php" class="icon-ccw"><br></a>
        <input  type="text" name="nombre" placeholder="nombre" required>
        <br>
        <input type="text" name="apellidoP" placeholder="apellido Paterno" required>
        <br>
        <input type="text" name="apellidoM" placeholder="apellido Materno" required>
        <br>
        <input type="text" name="genero" placeholder="GERNERO" required>
        <br>
      <input type="email" name="Usuario" placeholder="Usuario" required>
      <br>
      <input type="password" id="pass" name="pass" placeholder="password">
      <input type="checkbox" id="chec" name="chec" onclick="test()">
      <label for="chec">Ver el Password</label><br>


        <input type="submit" name="inicio" value="Inicio" class="btn-succes "    >

    </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <li class="nav-item">
            <a class="nav-link disabled" href="luis_horta@hotmail.com" tabindex="-1" aria-disabled="true">Salmones Horta Luis Enrique  luis_horta@hotmail.com</a>
          </li>
     </nav>
     <script type="text/javascript">
     function test() {
     var p=document.getElementById("pass");
     var c=document.getElementById("chec");
     p.type=(c.checked) ? "text" : "password";
     }
     </script>
     <script src="js\jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/preloader.js"></script>
    <script src="js/main.js"></script>
  </body>

</html>
