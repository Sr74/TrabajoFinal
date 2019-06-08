<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="page2.php">
</head>
<body>
    <div class="navigation">
        <input type="checkbox">
        <span></span>
        <span></span>
        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="registrarmascota.php">Registrar Mascota</a></li>
            <li><a href="Adoptar.php">Adoptar</a></li>
            <li><a href="sobrePets.php">Sobre Pets</a></li>
            <li><a href="donar.php">Donar</a></li>
            <li><a href="veterinarias.php">Veterianrias</a></li>
            <li><a href="alertas.php">Alertas</a></li>
        </ul>
    </div>
    <form action="procesoalerta.php" method="post">
        <div>
            <label>Ingrese nombre</label>
            <input type="text" name="nombre" placeholder="No es obligatorio">
        </div>
        <div>
            <label>Ingrese un telefono</label>
            <input type="text" name="telefono" placeholder="No es obligatorio">
        </div>
        <div>
            <label>Ingrese la direccion</label>
            <input type="text" name="direc" placeholder="Obligatorio">
        </div>
        <div>
            <label>Ingrese una descripcion</label>
            <textarea name="descrip" cols="30" rows="10" placeholder="Obligatorio"></textarea>
        </div>
        <div>
            <button>Enviar</button>
        </div>
    </form>
    
</body>
</html>