<?php
$conexion = mysqli_connect("localhost","root","","centroderegistros");


$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$dni = $_POST["dni"];
$correo = $_POST["correo"];
$distrito = $_POST["distrito"];
$clave = $_POST["clave"];


$insertar = "INSERT INTO datos(nombres,apellidos,dni,correo,distrito,contraseña) VALUE ('$nombres','$apellidos','$dni','$correo','$distrito','$clave')";
$resultado = mysqli($conexion, $insertar);

//sistema conectado
?>