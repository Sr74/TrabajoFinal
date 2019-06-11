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

    <?php include("menu.php") ?>
    <header>
        <h1>Adopta una Mascota </h1>
    </header>

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
                <td><textarea readonly cols="30" rows="5"><?php echo $fila["descripcion"]?></textarea></td>
                <td><a href="adoptando.php?id=<?php echo $fila["id"]?>">Adoptar</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>