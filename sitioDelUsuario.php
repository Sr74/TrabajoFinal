<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: beige;
        }
        .cuerpo{
            text-align: center;
        }
        h3{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Bienvenido Mr <?php echo $_SESSION["usuario"] ?></h1>
    
   
    
</body>
</html>