<?php
//conexion con database
$conexion = mysqli_connect("localhost","root","","personas");
//guardando las variables
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$dni = $_POST["dni"];
$distrito = $_POST["distrito"];
$correo = $_POST["correo"];
$clave = $_POST["clave"];

//validacion de llenado de datos
$req =(strlen($nombres)*strlen($apellidos)*strlen($dni)*strlen($distrito)*strlen($correo)*strlen($clave)) or die ('<script>
alert("complete todos los campos del formulario");
window.history.go(-1);
</script>');

//validacion de contraseña
if($clave!=$repeticion){
    echo'<script>
    alert("Las contraseñas no coinciden; intente de nuevo chavalito");
    window.history.go(-1);
    </script>
    ';
    
}
//encriptado de contraseña
$clave = md5($clave);
//verificar si el usuario ya existe en el base de datos;
$verificar = mysqli_query($conexion ,"SELECT*FROM datos WHERE correo ='$correo' or dni ='$dni'");
if(mysqli_num_rows($verificar) > 0){
    echo '<script>
    alert("El usuario ya esta registrado, regrese para Loguearse");
    window.history.go(-1);
    </script>
    ';
    
}else{
    echo '<script>
    alert("se ha registrado satisfactoriamente");
    </script>
    ';
header("Location:login.php");
}

//insercion
$insertar = "INSERT INTO datos(nombres,apellidos,dni,distrito,correo,claveUsuario) VALUE ('$nombres','$apellidos','$dni','$distrito','$correo','$clave')";

//ejecucion
$resultado = mysqli_query($conexion, $insertar);
//reingreso al portal

header("Location:portal.php");

//sistema conectado
?>