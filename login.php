<?php
session_start();
include 'includes/conexion.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css\fontello.css">
	<link rel="stylesheet" href="css/preloader.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@3.0.0-beta.6/dist/aos.css">

	<script type="js/jquery-3.5.1.min.js"></script>
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
	<title>LOGIN</title>
</style>

</head>

<body>

	<!--inicia  el navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="">AUTO-SPACE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

 </div>
 </nav>
<!--finaliza el navbar-->

<!--inicia el login-->
<div class="container">
      <h3 class="text-cente py-4">Inicio de secion </h3>

      <div class="card">
				<a href="./inicio.php" class="icon-ccw"></a>
        <form class="form-group" action="inicio.php" method="post"><br>
          <input type="email" name="Usuario" placeholder="Usuario" required>
          <br>


<input type="password" id="pass" name="pass"  placeholder="password" required >
<input type="checkbox" id="chec" name="chec" onclick="test()" >
<label for="chec">Ver el Password</label><br>
<input type="submit" name="inicio" value="Inicio" class=" btn btn-outline-success ">
        </form>
<div class="container">

<h6>Otras acciones... </h6>
				<a href="./registro.php"> <input type="submit" name="registro" value="Registro" class=" btn btn-outline-danger"> </a>
				<a href="./olvide contraseña.php"> <input type="submit" name="registro" value="olvide contraseña" class=" btn btn-outline-warning"> </a>

</div>
</div>
      </div>
<!--finaliza el login-->
<br><br><br><br><br><br><br>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <li class="nav-item">
        <a class="nav-link disabled" href="luis_horta@hotmail.com" tabindex="-1" aria-disabled="true">Salmones Horta Luis Enrique  luis_horta@hotmail.com</a>
      </li>
 </nav>

 <!--inicia el script para login-->
 <script type="text/javascript">
 function test() {
 var p=document.getElementById("pass");
 var c=document.getElementById("chec");
 p.type=(c.checked) ? "text" : "password";
 }
 </script>
 <!--finaliza el script para login-->
 <script src="js\jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/preloader.js"></script>
<script src="js/main.js"></script>

</body>
</html>
