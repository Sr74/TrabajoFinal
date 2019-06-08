<?php
$pregunta=$_POST["pregunta"];
$conexion = mysqli_connect("localhost","root","","personas");
$verificar = mysqli_query($conexion ,"INSERT INTO foro VALUES (NULL,'$pregunta')");
header("Location:foro.php");

?>  