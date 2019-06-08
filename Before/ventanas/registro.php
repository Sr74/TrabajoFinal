<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styleregistro.css">
    <style>
         
        body{
            background-color: grey;
        }
        .formulario{
            text-align: center;
            margin: 100px 300px;
            border: 2px solid red;
            background-color: whitesmoke;
            border-radius: 20px;  
        }
        .bott:hover{
            background-color: red;

        }

    </style>
</head>
<body>
<?php include('../partes/layerizq.php'); ?>
<?php include('../partes/headpart.php'); ?>
<div class="formulario">
    <h1>Bienvenido al centro de registros</h1>
    <form action="procesarRegistro.php" method="post">
        <div>
            <input type="hidden" name="id" >
        </div>
        <div>
            <label for="">NOMBRES:</label>
            <input type="text" name="nombres" style="width:300px; height: 30px ; border: 1px solid blue "  >
        </div><br>

        <div>
            <label for="">APELLIDOS:</label>
            <input type="text" name="apellidos" style="width:300px; height: 30px ; border: 1px solid blue" >
        </div><br>

        <div>
            <label for="">DNI:</label>
            <input type="text" name="dni" style="width:300px; height: 30px ; border: 1px solid blue" >
        </div><br>
        <div>
            <label for="">DISTRITO:</label>
            <input type="text" name="distrito" style="width:300px; height: 30px ; border: 1px solid blue" >
        </div><br>

        <div>
            <label for="">CORREO:</label>
            <input type="email" name="correo" style="width:300px; height: 30px ; border: 1px solid blue" >
        </div><br>
    
        <div>
            <label for="">CONTRASEÑA:</label>
            <input type="password" name="clave" style="width:300px; height: 30px ; border: 1px solid blue" >
        </div><br>

        <div>
        <label for="">CONFIRMAR CONTRASEÑA:</label>
            <input type="password" name="repeticion" style="width:300px; height: 30px ; border: 1px solid blue" >
        </div><br>

        <div class="bot"><button class="bott">REGISTRARSE</button></div><br>

        <div><h3>¿Ya estas registrado?</h3></div>

        <div class="entrada"><a href="login.php">Haz clic aqui</a></div><br>

    </form>

</div>

   

    
</body>
</html>