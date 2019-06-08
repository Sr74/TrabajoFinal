<?php
$iid = $_POST["idd"];
$nombre = $_POST["nombre"];
$dni = $_POST["dni"];

$conexion = mysqli_connect("localhost","root","","personas");
$verificar = mysqli_query($conexion ,"SELECT*FROM datos WHERE nombres ='$nombre' and dni='$dni'"); 


if(mysqli_num_rows($verificar) > 0){
    //poner una alerta mensaje
    $sql2 =  mysqli_query($conexion ,"DELETE FROM adoptados WHERE id='$iid'");
    header("Location:adoptar.php");
}else{
    header("Location:adoptando.php");
}

?>