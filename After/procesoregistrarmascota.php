<?php
$nombre = $_POST["nombre"];
$numero = $_POST["numero"];
$numero2 = $_POST["numero2"];
$direc = $_POST["direc"];
$descrip = $_POST["descrip"];
$conexion = mysqli_connect("localhost","root","","personas");
if($nombre == "" or $numero == "" or $direc == "" or $descrip == ""){
    header("Location:registrarmascota.php");
}else{
    if($numero == $numero2){
        $verificar = mysqli_query($conexion ,"INSERT INTO adoptados VALUES (NULL,'$nombre','$numero','$direc','$descrip')");
        header("Location:adoptar.php");
    }else{
        header("Location:registrarmascota.php");
    }
}



?>