
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estiloslogin.css">
</head>
<body>    
<?php include("menu.php");?>
    <h1>RESCUEPETS <br> INICIO DE SESION</h1>    
    <div>
        <form action="procesarlogin.php" method="post" class="ubica">
            <div>
                <label>Correo:</label>
                <input type="email" name="correo" placeholder="Ingresar correo" maxlength="30"   class="tam">
                
            </div>
            <br>
            <div>
                <label>Contraseña:</label>
                <input type="password" name="claveUsuario" placeholder="Ingresar contraseña" class="tam" >
            </div>
            <br>
            <div>
                <button class="boton">Ingresar</button>
            </div>
        </form>
    </div>
</body>
</html>