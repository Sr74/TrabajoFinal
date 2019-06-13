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
$foto = $_POST["foto"];


$conexion = mysqli_connect("localhost","root","","personas");
if($direc == "" or $descrip == ""){
    header("Location:daralerta.php");
}else{
    $verificar = mysqli_query($conexion ,"INSERT INTO alertas VALUES (NULL,'$nombre','$telefono','$direc','$descrip','$foto')");
    header("Location:alertas.php");

}

?>