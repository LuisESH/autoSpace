<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/preloader.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@3.0.0-beta.6/dist/aos.css">
	<script src="js/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="css/img.css">
	<title>Inicio</title>
</head>
<body>

	<!--inicia  el navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand icon-html5" href="">AUTO-SPACE</a 		>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

       <li class="nav-item" >
        <a class="nav-link disabled  icon-home" href="#" tabindex="-1" aria-disabled="true">INICIO </a>
      </li>
      <li class="nav-item">
        <a class="nav-link icon-star" href="./Objetivo.html">Objetivo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link icon-info-circled" href="./info.html">INFORMACION DE AUTOS</a>
      </li>
			<li>
				<a class="nav-link icon-help-circled "  href="./principal.html ">Solicitar ayuda</a>
			</li>
			<li>
				<a class="nav-link icon-emo-happy "  href="./agregar productos.html ">ver productos</a>
			</li>

			<li class="nav-item dropdown">
		           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
		            <span class="icon-users">Usuario</span>
		           </a>
		           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		             <li><a class="dropdown-item" href="./login.php">LOGIN</a></li>
		             <li><hr class="dropdown-divider"></li>
		             <li><a class="dropdown-item" href="./registro.php">REGISTRO</a></li>
		           </ul>
		         </li>


    </ul>


		<li>
			<a class=" icon-facebook"></a>
			<a class=" icon-twitter"></a>
			<a class="icon-instagram"></a>
			<a class=" icon-whatsapp"></a>

		</li>
 </div>
 </nav>
<!--finaliza el navbar-->

<!--inicia el carousel-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active ">
      <img src="img/imagen1.jpg" class="d-block w-100 imagen" alt="imagen1">
    </div>
    <div class="carousel-item ">
      <img src="img/imagen2.jpg" class="d-block w-100 imagen" alt="imagen2">
    </div>
    <div class="carousel-item">
      <img src="img/imagen3.jpg" class=" d-block w-100 imagen" alt="imagen3">
    </div>
       <div class="carousel-item">
      <img src="img/imagen4.jpg" class="d-block w-100 imagen" alt="imagen4"		>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--finaliza el Carrousel-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <p class="nav-item">
        <a class="nav-link disabled" href="luis_horta@hotmail.com" tabindex="-1" aria-disabled="true">Salmones Horta Luis Enrique  luis_horta@hotmail.com</a>
      </p>
 </nav>
 <!-- The core Firebase JS SDK is always required and must be listed first -->
 <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>

 <!-- TODO: Add SDKs for Firebase products that you want to use
      https://firebase.google.com/docs/web/setup#available-libraries -->

 <script>
   // Your web app's Firebase configuration
   var firebaseConfig = {
     apiKey: "AIzaSyD4XqgkNa4FFBds4pgltNKDqsrvmpy-jTY",
     authDomain: "autospace-bf19d.firebaseapp.com",
     projectId: "autospace-bf19d",
     storageBucket: "autospace-bf19d.appspot.com",
     messagingSenderId: "847465630322",
     appId: "1:847465630322:web:194fc71deb355041a490eb"
   };
   // Initialize Firebase
   firebase.initializeApp(firebaseConfig);
 </script>
 <script>
   var nombre;

   nombre=prompt("ingresa tu nombre");
   alert("Hola bienvenido "+nombre);
 </script>
 <script src="js\jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/preloader.js"></script>
<script src="js/main.js"></script>

</body>
</html>
