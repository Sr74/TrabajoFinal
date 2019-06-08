<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="donar.css">
</head>
<body>
    <?php include('menu.php'); ?>
    <div class="donacion">
        <h1>Bienvenido al centro de donaciones</h1>
    <form action="procesarRegistro.php" method="post">
        <div>
            <input type="hidden" name="id" >
        </div>
        <div>
            <label for=""></label>
            <input class="myinput" type="int" name="nombres" style="width:300px; height: 30px ; border: 1px solid blue " placeholder="Numero de tarjeta" >
        </div><br>

        <div>
            <label for="">Mes:</label>
            <input type="text" name="mes" style="width:300px; height: 30px ; border: 1px solid blue" placeholder="MM" >
            <label for="">Año:</label>
            <input type="text" name="year" style="width:300px; height: 30px ; border: 1px solid blue" placeholder="YY">
        </div><br>
        <div>
            <label for="">Codigo de seguridad:</label>
            <input type="text" name="codigo" style="width:300px; height: 30px ; border: 1px solid blue" placeholder="cvv">
        </div><br>

        <div>
            <label for="">Nombres:</label>
            <input type="text" name="nombres" style="width:300px; height: 30px ; border: 1px solid blue" >
        </div><br>
    
        <div>
            <label for="">Apellidos:</label>
            <input type="text" name="apellidos" style="width:300px; height: 30px ; border: 1px solid blue" >
        </div><br>
        <div><button class="boton">Donar</button></div><br>
        
        

    </div>
</body>
</html>