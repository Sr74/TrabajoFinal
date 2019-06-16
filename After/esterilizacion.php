<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styleEsterelizacion.css">
</head>
<body>
<?php include("menu.php") ?>
<div class="formulario">
    <h2> Solicitar Esterelizacion de mi mascota</h2>
    <div class="form_register">
        <div class="contenedor">
            <form action="procesarSolicitud.php" method="post">
                <h1>DATOS DEL SOLICITANTE</h1>
                <input type="hidden" name="id" >
                
                <input type="text" name="nombres" class="input_48" placeholder="Nombres" required >
            
                <input type="text" name="apellidos" class="input_48" placeholder="Apellidos" required >
        
                <input type="text" name="dni" class="input_48" placeholder="DNI" required >
        
                <select name="distrito" id="" style="width:200px; height: 50px; border-radius: 5px;">
                    <option value="Molina">Molina</option>
                    <option value="Surco">Surco</option>
                    <option value="Santa Anita">Santa Anita</option>
                 </select>
    
                <input type="text" name="direccion" class="input_100" placeholder="Direccion: calle/numero/piso" required>

                <input type="email" name="correo" class="input_100" placeholder="Correo Electrónico"required >
            
                <H1>DATOS DE SU MASCOTA</H1>
                <select name="tipo" id="" style="width:200px; height: 50px ; border-radius: 5px;">
                    <option value="Perro">Perro</option>
                    <option value="gato">Gato</option>
                    <option value="hamster">Hamster</option>

                </select>
            
                <input type="text" name="raza" class="input_48" placeholder="Raza" required >
        
                <input type="text" name="edad" class="input_48" placeholder="Edad" required>
        
                <textarea name="razones" id="razones" cols="60" rows="10" placeholder="Escriba las razones por la que quiere esterelizar a su mascota" required></textarea><br>

                
                <div class="bot"><button class="bott">Enviar solicitud</button></div>
            </form>
                
            
        </div>
        
        
    </div>
    
</body>
</html>
