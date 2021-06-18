<?php
$servername = 'localhost';
$database = 'autospace';
$username = 'root';
$password ='';
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("coneccion fallida: " . mysqli_connect_error());
}
echo "coneccion exitosa";
mysqli_close($conn);




?>
