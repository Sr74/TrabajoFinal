
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
<div class="acceso">
<h1>RESCUEPETS <br> INICIO DE SESION</h1><br><br>
    <div>
        <form action="procesarlogin.php" method="post" >
            <div>
                <label>Correo:</label>
                <input type="email" name="correo" placeholder="Ingresar correo" maxlength="30"   class="tam"  style="width:300px; height: 30px ; border: 1px solid blue ">
                
            </div>
            <br>
            <div>
                <label>Contraseña:</label>
                <input type="password" name="claveUsuario" placeholder="Ingresar contraseña" class="tam"  style="width:300px; height: 30px ; border: 1px solid blue " >
            </div>
            <br>
            <div>
                <button class="boton">Ingresar</button>
            </div>
        </form>
    </div>

</div>
    
</body>
</html>