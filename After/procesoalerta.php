<?php
$nombre=$_POST["nombre"];
if ($nombre == ""){
    $nombre="anonimo";
}
$telefono = $_POST["telefono"];
if ($telefono == ""){
    $telefono='1234';
}
$direc = $_POST["direc"];
$descrip = $_POST["descrip"];


$conexion = mysqli_connect("localhost","root","","personas");
if($direc == "" or $descrip == ""){
    header("Location:daralerta.php");
}else{
    $verificar = mysqli_query($conexion ,"INSERT INTO alertas VALUES (NULL,'$nombre','$telefono','$direc','$descrip')");
    header("Location:alertas.php");

}

?>