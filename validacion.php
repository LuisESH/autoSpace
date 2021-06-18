<?php
$usuario = $_POST['Usuario'];
$pass = $_POST['pass'];

if (empty($usuario) || empty($pass)) {
  # code...
  header("location: ../login.php ");
  exit();
}
