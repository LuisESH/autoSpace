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
	<title>Olvide contraseña</title>
</head>
<body>

	<!--inicia  el navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="">AUTO-SPACE</a 		>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

 </div>
 </nav>
<!--finaliza el navbar-->
<div class="container">
      <h3 class="text-cente py-4">Olvide contraseña </h3>

      <div class="card">
				<a href="./login.php" class="icon-ccw"></a>
        <form class="form-group" action="login.php" method="post"><br>
          <input type="email" name="Usuario" placeholder="Usuario" id="usuario"   required>
          <br>


<input type="password" id="pass" name="pass"  placeholder=" new password" required >
<input type="checkbox" id="chec" name="chec" onclick="test()" >
<label for="chec">Ver el Password</label><br>
<input type="submit" name="inicio" value="terminar" class=" btn btn-outline-success ">
        </form>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <p class="nav-item">
        <a class="nav-link disabled" href="luis_horta@hotmail.com" tabindex="-1" aria-disabled="true">Salmones Horta Luis Enrique  luis_horta@hotmail.com</a>
      </p>
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
