<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="alerta.css">
</head>
<body>
    <?php include("menu.php" )?>
    <div class="alerta">
    <form action="procesoalerta.php" method="post" enctype="multipart/form-data">
        <h1>Publicar alerta</h1><br>
        <div>
            <label>Ingrese nombre</label>
            <input type="text" name="nombre" placeholder="No es obligatorio">
        </div><br>
        <div>
            <label>Ingrese un telefono</label>
            <input type="text" name="telefono" placeholder=" obligatorio" required>
        </div><br>
        <div>
            <label>Ingrese la direccion</label>
            <input type="text" name="direc" placeholder="Obligatorio" required>
        </div><br>
        <div>
            <label>Ingrese una descripcion</label><br>
            <textarea name="descrip" cols="30" rows="10" placeholder="Obligatorio"></textarea>
        </div><br>
        <div>
            <label>subir fotos:</label>
            <input type="file" name="foto"  >
            
        </div><br>
        <div>
            <button class="bott">Enviar</button>
        </div>
    </form>

    </div>
    
    
</body>
</html>