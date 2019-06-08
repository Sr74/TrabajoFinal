<?php
$id = $_GET["id"];
$respuesta=$_POST["respuesta"];
$conexion = mysqli_connect("localhost","root","","personas");
$verificar = mysqli_query($conexion ,"INSERT INTO respuestas VALUES (NULL,'$respuesta','$id')");
header("Location:foro.php");

?>  