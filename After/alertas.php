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
    <link rel="stylesheet" href="">
    <style>
        body{
            background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-C4H35XAAiBTorrbyE2AkbFfIj-2gsZNypq3NxqeHyv1I8bJm);
        }
        h1{
            text-align:center;
        }
        .table  td {
            border: 2px solid red;
            background-color:beige; 
            
        }
        h3{
           color: green;
        }
        h1{
            color: white;
        }
        .general{
            background-color: greenyellow;
            width: 800px;
            height: auto;
            margin: 30px 350px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="general">
    <header>
        <h1>Adoptame</h1>
    </header>
   <?php include ("menu.php") ?>
    <table class="table">
        <tr >
            <td><h3>Nombre</h3></td>
            <td><h3>Numero</h3></td>
            <td><h3>Direccion</h3></td>
            <td><h3>Descripcion</h3></td>
            <td><h3>Foto</h3></td>
        </tr>

    
        <?php
        foreach($pdo->query($sql) as $fila){
        ?> 
            <tr>
                <td><?php echo $fila["nombre"]?></td>
                <td><?php echo $fila["telefono"]?></td>
                <td><?php echo $fila["direccion"]?></td>
                <td><textarea cols="30" rows="10" readonly ><?php echo $fila["descripcion"]?></textarea></td>
                <td><?php echo $fila["foto"]?></td>

            </tr>
        <?php
        }
        ?>
    </table>

    </div>
    
</body>
</html>