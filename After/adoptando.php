<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="page2.php">
</head>
<body>
    <header>
        <h1>Estas por adoptar una nueva mascota, pofavor confirma tu peticion, ya segurece de tener los datos necesarios del dueño</h1>
    </header>
    <form action="procesoadoptado.php" method="post">
        <div>
            <label>Ingresa tu nombre:</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label>Ingrese su numeor de DNI:</label>
            <input type="text" name="dni">
        </div>
        <div>
            <input type="hidden" name="idd" value="<?php echo $_GET["id"] ?>">
        </div>
        <div>
            <button>confirmar</button>
        </div>
    </form>
    
</body>
</html>