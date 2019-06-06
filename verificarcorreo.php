<?php
$correo = $_POST["correo"];
$conexion = mysqli_connect("localhost","root","","personas");
$verificar = mysqli_query($conexion ,"SELECT*FROM datos WHERE correo ='$correo'"); 
$resultado = $conexion->query("SELECT*FROM datos WHERE correo ='$correo'");
if(mysqli_num_rows($verificar) > 0){
    $contra1 = $_POST["contra1"];
    $contra = $_POST["contra"];
    if($contra == $contra1){
            header("Location:sds.php");
    }else{
            header("Location:contraseñamala.php");
}
}else{
    header("Location:contraseñamala.php");
}
?>