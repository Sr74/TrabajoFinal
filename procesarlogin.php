<?php
//conexion
$conexion = mysqli_connect("localhost","root","","personas");

//guardado de datos
$correo = $_POST["correo"];
$claveUsuario = $_POST["claveUsuario"];

//validado de los espacios
$req =(strlen($correo)*strlen($claveUsuario)) or die ('<script>
alert("complete todos los campos del formulario");
window.history.go(-1);
</script>');

//validacion
$verificar = mysqli_query($conexion ,"SELECT*FROM datos WHERE correo ='$correo' and $claveUsuario='claveUsuario'");
$pdo=new PDO("mysql:host=localhost;dbname=personas;charset=utf8");
$resultado = $pdo->query("SELECT*FROM datos WHERE correo ='$correo' and $claveUsuario='claveUsuario'");
$fila->$resultado.fetch();
$usuario = $fila["apellidos"]; 

if(mysqli_num_rows($verificar) > 0){
    session_start();
    $_SESSION["usuario"]=$usuario;
    header("Location:sitioDelUsuario.php");

   
}
$resultado= mysqli_query($conexion, $verificar);
?>