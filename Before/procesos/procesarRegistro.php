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
$repeticion =$_POST["repeticion"];
$foto=(isset($_FILES['foto2']["name"]))?$_FILES['foto2']["name"]:"";
$Fecha= new DateTime();
$nombreArchivo2=($foto!="")?$Fecha->getTimestamp()."_".$_FILES["foto2"]["name"]:"usuario.png";

$cd2 = $_FILES["foto2"]["tmp_name"];

if($cd2!=""){
        move_uploaded_file($cd2,"../../Image/".$nombreArchivo2);
}

//validacion de llenado de datos
$req =(strlen($nombres)*strlen($apellidos)*strlen($dni)*strlen($distrito)*strlen($correo)*strlen($clave)) or die ('<script>
alert("complete todos los campos del formulario");
window.history.go(-1);
</script>');

//validacion de contraseña
if($clave!=$repeticion){
    echo'<script>
    alert("Las contraseñas no coinciden; por favor intente de nuevo");
    window.history.go(-1);
    </script>
    ';    
}

//encriptado de contraseña
$clave = md5($clave);



//verificar si el usuario ya existe en el base de datos;
$verificar = mysqli_query($conexion ,"SELECT*FROM datos WHERE correo ='$correo' and dni ='$dni'");
if(mysqli_num_rows($verificar) > 0){
    echo '<script>
    alert("El usuario ya esta registrado, por lo le pedimos iniciar sesion");
    window.location="http://localhost/TrabajoFinal/Before/ventanas/login.php";
    </script>
    ';
 //insercion
}
else{

    $insertar = "INSERT INTO datos(nombres,apellidos,dni,distrito,correo,claveUsuario,foto) VALUE ('$nombres','$apellidos','$dni','$distrito','$correo','$clave','$nombreArchivo2')";
    header("Location:../ventanas/login.php");
}


//ejecucion
$resultado = mysqli_query($conexion, $insertar);
?>