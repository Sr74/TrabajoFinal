<?php
//conexion
$conexion = mysqli_connect("localhost","root","","personas");

//guardado de datos
$correo = $_POST["correo"];
$claveUsuario = $_POST["claveUsuario"];
$claveUsuariomod=md5($claveUsuario);

//validado de los espacios
$req =(strlen($correo)*strlen($claveUsuario)) or die ('<script>
alert("complete todos los campos del formulario");
window.history.go(-1);
</script>');

//validacion
$verificar = mysqli_query($conexion ,"SELECT*FROM datos WHERE correo ='$correo' and claveUsuario='$claveUsuariomod'");


if(mysqli_num_rows($verificar) > 0){

    header("Location:../../After/index.php");
}
else{
    echo '<script>
    alert("Su contraseña o usuario no coinciden ,por favor  vuelve a intentarlo");
    window.location="http://localhost/TrabajoFinal/Before/ventanas/login.php";
    </script>
    '
    ;

}
?>