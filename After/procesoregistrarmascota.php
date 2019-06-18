<?php
//Recepcion de datos
$nombre = $_POST["nombre"];
$numero = $_POST["numero"];
$numero2 = $_POST["numero2"];
$direc = $_POST["direc"];
$descrip = $_POST["descrip"];
$conexion = mysqli_connect("localhost","root","","personas");
//procesamiento de datos
if($nombre == "" or $numero == "" or $direc == "" or $descrip == ""){
    header("Location:registrarmascota.php");
}else{
    if($numero == $numero2){
        $verificar = mysqli_query($conexion ,"INSERT INTO adoptados VALUES (NULL,'$nombre','$numero','$direc','$descrip')");
        header("Location:adoptar.php");
    }else{
        echo'<script>
        alert("Sus numero ingresados no coiniciden");
        window.history.go(-1);
        </script>';
    }
}



?>