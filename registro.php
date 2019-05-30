<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<form action="procesarRegistro.php" method="post">
    <div class="formulario">
    <div>
        <label for="">Nombres:</label>
        <input type="text" name="nombres">
    </div><br>

    <div>
        <label for="">APELLIDOS:</label>
        <input type="text" name="apellidos">
    </div><br>

    <div>
        <label for="">DNI:</label>
        <input type="text" name="dni">
    </div><br>

    <div>
        <label for="">correo:</label>
        <input type="email" name="correo">
    </div><br>
    <div>
        <label for="">DISTRITO:</label>
        <input type="text" name="distrito">
    </div><br>
    <div>
        <label for="">CONTRASEÑA:</label>
        <input type="password" name="clave">
    </div><br>
    <div>
        <label for="">CONFIRMAR CONTRASEÑA:</label>
        <input type="text" name="validacion">
    </div><br>
    <div><button>REGISTRAR</button></div>
    <p> ¿YA TIENE CONTRASEÑA?
    </p>
    <a href="login.php">Haz clic</a>

    </div>
    


</form>

    
</body>
</html>