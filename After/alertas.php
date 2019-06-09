<?php
$pdo = new PDO("mysql:host=localhost;dbname=personas;charset=utf8","root","");
$sql = "SELECT*FROM alertas";
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
        <h1>Veterinarias con las que trabajamos</h1>
    </header>
   <?php include ("menu.php") ?>
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
                <td><?php echo $fila["telefono"]?></td>
                <td><?php echo $fila["direccion"]?></td>
                <td><textarea cols="30" rows="10" readonly ><?php echo $fila["descripcion"]?></textarea></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>