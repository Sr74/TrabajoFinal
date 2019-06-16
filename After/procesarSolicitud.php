<?php
//conexion con database
$conexion = mysqli_connect("localhost","root","","personas");
//guardando las variables
//datos del solicitante
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$dni = $_POST["dni"];
$distrito = $_POST["distrito"];
$direccion= $_POST["direccion"];
$correo = $_POST["correo"];
//datos de la mascota
$tipo =$_POST["tipo"];
$raza =$_POST["raza"];
$edad =$_POST["edad"];
$razones =$_POST["razones"];

//insercion
$insertar = "INSERT INTO solicitud(nombres,apellidos,dni,distrito,direccion,correo,tipo_mascota,raza,edad,razones) VALUE ('$nombres','$apellidos','$dni','$distrito','$direccion','$correo','$tipo','$raza','$edad','$razones')";
//mensaje
echo'<script >
    alert("Felicidades se ha enviado su solicitud exitosamente; en breve aprobaremos su solicitud, y enviaremos un correo con todo lo necesario para el proceso. Saludos coordiales que tenga un buen día");
    window.location="http://localhost/TrabajoFinal/After/sobrePets.php";
    </script>
    ';
    

//ejecucion
$resultado = mysqli_query($conexion, $insertar);


?>