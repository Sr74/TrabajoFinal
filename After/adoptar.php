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
</head>
<body>
    <table>
        <?php
        foreach($pdo->query($sql) as $fila){
        ?> 
            <tr>
                <td><?php echo $fila["nombre"]?></td>
                <td><?php echo $fila["numero"]?></td>
                <td><?php echo $fila["direccion"]?></td>
                <td><?php echo $fila["descripcion"]?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>