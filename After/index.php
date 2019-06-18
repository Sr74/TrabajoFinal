<?php
session_start();
$id=$_SESSION['id_plus'];
$pdo = new PDO("mysql:host=localhost;dbname=personas;charset=utf8","root","");
$sql = "SELECT foto FROM datos WHERE id='$id'"; //con esat parte trabaja
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="page.css">
    <title>RescuePets</title>
</head>
<body>
    
    <?php
    //aqui jala la foto pero no se como obtener la indicada
    foreach($pdo->query($sql) as $fila){
    ?> 
    <div>
        <img class="imguser" width="100px" height="100px" src="../Image/<?php echo $fila["foto"] ?>">
    </div>
    <?php
    }
    ?>

    <?php if(isset($_SESSION['id_user'])) { ?>
        <h2 class="loco"> Bienvenido RescueAmigo, <?php echo $_SESSION['id_user'] ?></h2>

    <?php } ?>
    <div>
        <h1 id="desc1">RescuePets: Rescatando Mascotas</h1>
    </div>

    <div class="imgs">
        <img src="https://cdn.pixabay.com/photo/2018/08/12/16/59/ara-3601194_1280.jpg" alt="">
        <img src="https://cdn.pixabay.com/photo/2016/05/10/12/21/lemur-1383616_1280.jpg" alt="">
        <img src="https://cdn.pixabay.com/photo/2018/04/23/14/38/adorable-3344414_1280.jpg" alt="">
        <img src="https://images.pexels.com/photos/255387/pexels-photo-255387.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
    </div>

    <hr id="line">
  
    <div class="navigation">
        <input type="checkbox">
        <span></span>
        <span></span>
        <ul class="menu">
            <li><a href="adoptar.php">Adoptar</a></li>
            <li><a href="registrarmascota.php">Registrar Mascota</a></li>
            <li><a href="sobrePets.php">Sobre Pets</a></li>
            <li><a href="off.php">Cerrar Sesión</a></li>
        </ul>
    </div>

    <div id="cita">
        <h4><q>La grandeza de una nación y su progreso moral puede ser juzgada por la forma en que sus animales son tratados.</q>
        <br><strong>Mahatma Gandhi.</strong></h4>
        <img src="https://www.biografiasyvidas.com/monografia/gandhi/fotos/gandhi_mahatma.jpg" alt="Gandhi">
    </div>
    <p class="copy"> © 2018 RESCUEPETS | Todos los derechos reservados</p>
    <hr id="gandi">
</body>
</html>