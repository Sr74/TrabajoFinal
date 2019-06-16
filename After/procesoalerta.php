<?php

$conexion = mysqli_connect("localhost","root","","personas");

$nombre=$_POST["nombre"];
if ($nombre == ""){
    $nombre="anonimo";
}
$telefono = $_POST["telefono"];
if ($telefono == ""){
    $telefono='1234';
}
$direc= $_POST["direc"];
$descrip = $_POST["descrip"];


$foto = $_FILES['foto']['name'];
$nombrer = strtolower($foto);
$cd=$_FILES['foto']['tmp_name'];
$ruta = "TrabajoFinal/images/" . $_FILES['foto']['name'];
$destino = "TrabajoFinal/images/".$nombrer;
$resultado = @move_uploaded_file($_FILES["foto"]["tmp_name"], $ruta);

if($direc == "" or $descrip == ""){
   header("Location:daralerta.php");
}else{
 $verificar = mysqli_query($conexion ,"INSERT INTO alertas VALUES (NULL,'$nombre','$telefono','$direc','$descrip','$foto')");
header("Location:alertas.php")
;}

?>