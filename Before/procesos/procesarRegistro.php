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
$foto=(isset($_FILES['foto']["name"]))?$_FILES['foto']["name"]:"";

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
    alert("El usuario ya esta registrado, por lo le pedimos iniciar session");
    window.location="http://localhost/TrabajoFinal/Before/ventanas/login.php";
    </script>
    '
    ;
 //insercion
}
else{
    
    //Cargar imagen
    $Fecha= new DateTime();
    $nombreArchivo=($foto!="")?$Fecha->getTimestamp()."_".$_FILES["foto"]["name"]:"usuario.png";

    $cd=$_FILES["foto"]["tmp_name"];

    if($cd!=""){
        move_uploaded_file($cd,"../ImagesUser/".$nombreArchivo);
    }


    $insertar = "INSERT INTO datos(nombres,apellidos,dni,distrito,correo,claveUsuario,foto) VALUE ('$nombres','$apellidos','$dni','$distrito','$correo','$clave','$nombreArchivo')";
    header("Location:../ventanas/login.php");
}


//ejecucion
$resultado = mysqli_query($conexion, $insertar);
?>