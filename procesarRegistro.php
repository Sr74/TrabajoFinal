<?php
$conexion = mysqli_connect("localhost","root","","personas");


$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$dni = $_POST["dni"];
$distrito = $_POST["distrito"];
$correo = $_POST["correo"];
$clave = $_POST["clave"];


$insertar = "INSERT INTO datos(nombres,apellidos,dni,distrito,correo,claveUsuario) VALUE ('$nombres','$apellidos','$dni','$distrito','$correo','$clave')";
$resultado = mysqli_query($conexion, $insertar);

header("Location:portal.php");

//sistema conectado
?>