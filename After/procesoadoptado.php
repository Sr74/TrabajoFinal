<?php
//Recepcion de datos
$iid = $_POST["idd"];
$nombre = $_POST["nombre"];
$dni = $_POST["dni"];
//Procesamiento de datos
if (isset($_POST['condiciones']) && $_POST['condiciones'] == '1'){
      
    $conexion = mysqli_connect("localhost","root","","personas");
    $verificar = mysqli_query($conexion ,"SELECT*FROM datos WHERE apellidos ='$nombre' and dni='$dni'"); 
    


    if(mysqli_num_rows($verificar) > 0){
    
        $sql2 =  mysqli_query($conexion ,"DELETE FROM adoptados WHERE id='$iid'");
        header("Location:Agradece.php");
    }else{
        echo'<script>
        alert("Los datos ingresados no estan registrados");
        window.history.go(-1);
        </script>';
    }
}else{
    echo'<script>
        alert("Acepte los terminos y condiciones");
        window.history.go(-1);
        </script>';
}

?>