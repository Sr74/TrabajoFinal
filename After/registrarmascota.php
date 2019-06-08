<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="page2.css">
</head>
<body>
    <div class="navigation">
        <input type="checkbox">
        <span></span>
        <span></span>
        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="veterinarias.php">Veterinarias</a></li>
            <li><a href="Adoptar.php">Adoptar</a></li>
            <li><a href="sobrePets.php">Sobre Pets</a></li>
            <li><a href="donar.php">Donar</a></li>
            <li><a href="daralerta.php">Alertar</a></li>
            <li><a href="alertas.php">Alertas</a></li>
        </ul>
    </div>

    <form action="procesoregistrarmascota.php" method="post">
        <div>
            <label>Ingrese su nombre:</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label>Ingrese numero de telefono:</label>
            <input type="text" name="numero">
        </div>
        <div>
            <label>Ingrese numero de telefono nuevamente:</label>
            <input type="text" name="numero2">
        </div>
        <div>
            <label>Ingrese direccion:</label>
            <input type="text" name="direc">
        </div>
        <div>
            <label>Ingrese descripcion del animal:</label>
            <textarea name="descrip" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button>registrar</button>
        </div>
    
    
    </form>
    
</body>
</html>