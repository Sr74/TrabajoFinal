<?php
$correo = $_POST["correo"];
$conexion = mysqli_connect("localhost","root","","personas");
$verificar = mysqli_query($conexion ,"SELECT*FROM datos WHERE correo ='$correo'"); 

if(mysqli_num_rows($verificar) > 0){
    $contra1 = $_POST["contra1"];
    $contra = $_POST["contra"];
    if($contra == $contra1){
        $contra = md5($contra);
        $verificar = mysqli_query($conexion ,"UPDATE datos SET claveUsuario='$contra' WHERE correo ='$correo'");
        header("Location:../ventanas/login.php");
    }else{
            header("Location:../ventanas/contraseñamala.php");
    }   
}else{
    header("Location:../ventanas/contraseñamala.php?id=2");
}
?>