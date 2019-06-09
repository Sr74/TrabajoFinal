<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="page2.css">
    <style>
        body{
            background-image: url(https://encolombia.com/wp-content/uploads/2017/08/tienda-mascotas-medellin.jpg);
        }
        .mascota{
            margin: 80px 300px;
            border: 2px solid black;
            padding: 20px 80px;
            background-color: white;
            border-radius: 10px;
            
        }
        .boton{
            width: 80px;
            height: 30px;
            color: orange;
        }
    </style>
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
    <div class="mascota">
    <form action="procesoregistrarmascota.php" method="post">
        <h1> REGISTRO DE MASCOTAS</h1>
        <div>
            <label>Ingrese su nombre:</label>
            <input type="text" name="nombre" style="width:300px; height: 30px ; border: 1px solid blue; border-radius: 10px">
        </div><br>
        <div>
            <label>Ingrese numero de telefono:</label>
            <input type="text" name="numero" style="width:300px; height: 30px ; border: 1px solid blue; border-radius: 10px">
        </div><br>
        <div>
            <label>Reingrese su numero de telefono:</label>
            <input type="text" name="numero2" style="width:300px; height: 30px ; border: 1px solid blue; border-radius: 10px">
        </div><br>
        <div>
            <label>Ingrese direccion:</label>
            <input type="text" name="direc" style="width:300px; height: 30px ; border: 1px solid blue; border-radius: 10px">
        </div><br>
        <div>
            <label>Ingrese descripcion del animal:</label><br>
            <textarea name="descrip" cols="30" rows="10"></textarea>
        </div><br>
        <div>
            <button class="boton">registrar</button>
        </div>
    
    
    </form>

    </div>
    
    
</body>
</html>