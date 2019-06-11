<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styleregistro.css">
</head>
<body>
<?php include('../partes/layerizq.php'); ?>
<?php include('../partes/headpart.php'); ?>
<div class="formulario">
    <div class="form_register">
        <h2 class="titulo">CREAR UNA CUENTA</h2>
        <div class="contenedor">
            <form action="../procesos/procesarRegistro.php" method="post">
                <input type="hidden" name="id" >
                
                <input type="text" name="nombres" class="input_100" placeholder="Nombres" >
            
                <input type="text" name="apellidos" class="input_100" placeholder="Apellidos"  >
        
                <input type="text" name="dni" class="input_48" placeholder="DNI" >
        
                <input type="text" name="distrito" class="input_48" placeholder="Distrito" >
        
                <input type="email" name="correo" class="input_100" placeholder="Correo Electrónico" >
        
                <input type="password" name="clave" class="input_48" placeholder="Contraseña"  >
            
                <input type="password" name="repeticion" class="input_48" placeholder="Repita su contraseña" >
                
                <div class="bot"><button class="bott">REGISTRARSE</button></div>
            </form>
                <div class="text">
                        <div><h3>¿Ya estas registrado?</h3></div>
                        <div class="entrada"><a href="../ventanas/login.php">Haz clic aqui</a></div><br>

                </div>
            
        </div>
        
        
    </div>

   

</div>

   

    
</body>
</html>