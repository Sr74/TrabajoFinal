<?php

$conexion = mysqli_connect("localhost","root","","personas");
//Recepcion de datos
$nombre=$_POST["nombre"];
if ($nombre == ""){
    $nombre="anonimo";
}
$telefono = $_POST["telefono"];
if ($telefono == ""){
    $telefono='0';
}
$direc= $_POST["direc"];
$descrip = $_POST["descrip"];

$foto=(isset($_FILES['foto']["name"]))?$_FILES['foto']["name"]:"";
$Fecha= new DateTime();
$nombreArchivo=($foto!="")?$Fecha->getTimestamp()."_".$_FILES["foto"]["name"]:"pet.jpg";
//NOmbre temporal de archivo
$cd=$_FILES["foto"]["tmp_name"];
//Proceso de datos 
    //Carga/subida de imagen
if($cd!=""){
    move_uploaded_file($cd,"../Images/".$nombreArchivo);
}


if($direc != "" or $descrip != ""){
    
    $verificar = mysqli_query($conexion ,"INSERT INTO alertas VALUES (NULL,'$nombre','$telefono','$direc','$descrip','$nombreArchivo')");
    header("Location:alertas.php");

}


else{

    header("Location:daralerta.php");

}
?>