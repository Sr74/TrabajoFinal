<?php
$correo = $_POST["correo"];
$conexion = mysqli_connect("localhost","root","","personas");
$verificar = mysqli_query($conexion ,"SELECT*FROM datos WHERE correo ='$correo'");
if(mysqli_num_rows($verificar) > 0){
    header("Location:contrabuena.php");

?>