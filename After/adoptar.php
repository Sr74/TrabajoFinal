<?php
$pdo = new PDO("mysql:host=localhost;dbname=personas;charset=utf8","root","");
$sql = "SELECT*FROM adoptados";
?>
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
    <header>
        <h1>Adopta una Mascota </h1>
    </header>
    <div class="navigation">
        <input type="checkbox">
        <span></span>
        <span></span>
        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="registrarmascota.php">Registrar Mascota</a></li>
            <li><a href="sobrePets.php">Sobre Pets</a></li>
            <li><a href="donar.php">Donar</a></li>
            <li><a href="veterinarias.php">Veterinarias</a></li>
            <li><a href="aletas.php">Alertas</a></li>
            <li><a href="daralertas.php">Alertar</a></li>
        </ul>
    </div>

    <table class="table">
        <tr>
            <td>Nombre</td>
            <td>Numero</td>
            <td>Direccion</td>
            <td>Descripcion</td>
        </tr>

    
        <?php
        foreach($pdo->query($sql) as $fila){
        ?> 
            <tr>
                <td><?php echo $fila["nombre"]?></td>
                <td><?php echo $fila["numero"]?></td>
                <td><?php echo $fila["direccion"]?></td>
                <td><textarea cols="30" rows="10"><?php echo $fila["descripcion"]?></textarea></td>
                <td><a href="adoptando.php">Adoptar</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>