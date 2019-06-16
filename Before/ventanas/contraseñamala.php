<?php

$id= $_GET["id"];
if($id==2){ ?>
<script>
    window.alert("Contraseñas no son Iguales");
</script>

<?php } ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recuperar Contraseña</title>

    <style>
        .acceso {
            position: absolute;
            background: linear-gradient(rgb(5, 132, 252) 0%, rgb(5, 132, 252) 0%,#fff 50%,white 100%) ;
            text-align: center;
            margin:100px 450px;
            border:1px solid rgb(5, 132, 252);
            padding: 100px;
            border-radius:10px;
        }

        form div {
            padding: 10px;
        }

        #encabez {
            margin:10px auto;
            padding:20px;
        }

        .bot{
            transform-text:uppercase;
            background-color:black;
            padding:10px 30px;
            border:none;
            border-radius:20px;
            color:White
        }

        .bot:hover{
            background-color:rgb(5, 132, 252);
            cursor:pointer;
        }

    </style>
</head>
<body>
<?php include('../partes/headpart.php'); ?>
<div class="acceso">
    <form action="../procesos/verificarcorreo.php" method="post">
         <div><h2 id="encabez">Recuperar Contraseña</h2></div>
        <div>
            Por favor ingrese su correo
            <input type="email" name="correo" placeholder="Correo">
        </div>
        <div>
            insertar contraseña:
            <input type="password" name="contra">
        </div>
        <div>
            inserte nuevamente:
            <input type="password" name="contra1">
        </div>
    

        <div>
            <input class="bot" type="submit" value="VERIFICAR">
        </div>
    </form>
   
</div>   

</body>
</html>