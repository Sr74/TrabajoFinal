<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="donar.css">
    <style>
        body{
            background: rgb(57, 168, 57);
        }
    </style>
</head>
<body>
    <?php include('menu.php'); ?>
    <div class="donacion">
        <h1>Bienvenido al centro de donaciones</h1><br>
        <form action="repcionDeDonacion.php">
        <div>
            <label for=""></label>
            <input class="myinput" type="int" name="nombres" style="width:300px; height: 40px ; border: 2px solid grey ;border-radius: 20px " placeholder="Numero de tarjeta" required>
        </div><br>

        <div>
            <label for="">Mes:</label>
            <input type="text" name="mes" style="width:300px; height: 40px ; border: 2px solid grey; border-radius: 20px" placeholder="MM" required >
            <label for="">Año:</label>
            <input type="text" name="year" style="width:300px; height: 40px ; border: 2px solid grey; border-radius: 20px" placeholder="YY" required>
        </div><br>
        <div>
            <label for="">Codigo de seguridad:</label>
            <input type="text" name="codigo" style="width:300px; height: 40px ; border: 2px solid grey; border-radius: 20px" placeholder="cvv" required>
        </div><br>

        <div>
            <label for="">Nombres:</label>
            <input type="text" name="nombres" style="width:300px; height: 40px ; border: 2px solid grey; border-radius: 20px" required>
        </div><br>
    
        <div>
            <label for="">Apellidos:</label>
            <input type="text" name="apellidos" style="width:300px; height: 40px ; border: 2px solid grey; border-radius: 20px" required>
        </div><br>
        <div>
            <label for="">Monto a Donar (s/.):</label>
            <input type="text" name="number" style="width:50px; height: 40px ; border: 2px solid red; border-radius: 20px" required>
        </div><br>
        <div>
            <button>validar datos</button>
            <button><a href="recepcionDeDonacion.php">Donar</a></button>
        </div>
            
        </form>
        
        
        
        
        
        

    </div>
</body>
</html>