
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
<?php include('../partes/layerder.php'); ?>
<?php include('../partes/headpart.php'); ?>
<div class="acceso">
        <h2>  INICIO DE SESION </h2>
        <form action="../procesos/procesarlogin.php" method="post" >
            <div class="inbox">
                <input type="email"  name="correo" placeholder="Ingresar correo" maxlength="30"   class="tam"  required="">
            </div>
            
            <div class="inbox">
                <input type="password"  name="claveUsuario" placeholder="Ingresar contraseña" required="">
            </div>
            <input type="submit" value="Enviar">

        </form>
        <br>
        <form action="../procesos/contraseñamala.php" method="post">
            <input type="submit" value="Olvide mi contraseña">
        </form>

</div>
    
</body>
</html>