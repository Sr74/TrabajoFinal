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
        
                <select name="distrito" id="" style="width: 200px ; height: 50px; border: 1px solid grey; border-radius: 5px;" required>
                        <option value="">Seleccione su Distrito</option>
                        <option value="ANCON">ANCON</option>
                        <option value="ATE">ATE</option>
                        <option value="BARRANCO">BARRANCO</option>
                        <option value="BREÑA">BREÑA</option>
                        <option value="CARABAYLLO">CARABAYLLO</option>
                        <option value="CHACLACAYO">CHACLACAYO</option>
                        <option value="CHACLACAYO">CHORRILLOS</option>
                        <option value="CIENEGUILLA">CIENEGUILLA</option>
                        <option value="COMAS">COMAS</option>
                        <option value="AGUSTINO">EL AGUSTINO</option>
                        <option value="INDEPENDENCIA">INDEPENDENCIA</option>
                        <option value="JESUS MARIA">JESUS MARIA</option>
                        <option value="MOLINA">LA MOLINA</option>
                        <option value="LA VICTORIA">LA VICTORIA</option>
                        <option value="LIMA">LIMA</option>
                        <option value="LINCE">LINCE</option>
                        <option value="LOS OLIVOS">LOS OLIVOS</option>
                        <option value="LURIGANCHO">LURIGANCHO</option>
                        <option value="LURIN">LURIN</option>
                        <option value="MAGDALENA">MAGDALENA DEL MAR</option>
                        <option value="MIRAFLORES">MIRAFLORES</option>
                        <option value="PACHACAMAC">PACHACAMAC</option>
                        <option value="PUCUSANA">PUCUSANA</option>
                        <option value="PUEBLO LIBRE">PUEBLO LIBRE</option>
                        <option value="PUENTE PIEDRA">PUENTE PIEDRA</option>
                        <option value="PUNTA HERMOSA">PUNTA HERMOSA</option>
                        <option value="PUNTA NEGRA">PUNTA NEGRA</option>
                        <option value="RIMAC">RIMAC</option>
                        <option value="SAN BARTOLO">SAN BARTOLO</option>
                        <option value="SAN BORJA">SAN BORJA</option>
                        <option value="SAN ISIDRO">SAN ISIDRO</option>
                        <option value="SAN JUAN DE LURIGANCHO">SAN JUAN DE LURIGANCHO</option>
                        <option value="SAN JUAN DE MIRAFLORES">SAN JUAN DE MIRAFLORES</option>
                        <option value="SAN LUIS">SAN LUIS</option>
                        <option value="SAN MARTIN DE  PORRES">SAN MARTIN DE PORRES</option>
                        <option value="SAN MIGUEL">SAN MIGUEL</option>
                        <option value="SANTA ANITA">SANTA ANITA</option>
                        <option value="SANTA MARIA DEL MAR">SANTA MARIA DEL MAR</option>
                        <option value="SANTA ROSA">SANTA ROSA</option>
                        <option value="SANTIAGO DE SURCO">SANTIAGO DE SURCO</option>
                        <option value="SURQUILLO">SURQUILLO</option>
                        <option value="VILLA EL SALVADOR">VILLA EL SALVADOR</option>
                        <option value="VILLA MARIA DEL TRIUNFO">VILLA MARIA DEL TRIUNFO</option>
                    
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
