
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estiloslogin.css">
</head>
<body>    
      
    <div class="conte"> 
        
        <img src="https://www.rockandpop.cl/wp-content/uploads/2018/08/Mascotas-400x360.png" class="imagen" alt="fondo">
        <div class="texto"><h1>RESCUEPETS <br> INICIO DE SESION</h1></div>
        <div class="ubica">
            
            <form action="procesarlogin.php" method="post" >
                <div>
                    <label>Correo:</label>
                    <input type="email" name="correo" placeholder="Ingresar correo" class="tam">
                    
                </div>
                <br>
                <div>
                    <label>Contraseña:</label>
                    <input type="password" name="claveUsuario" placeholder="Ingresar contraseña" class="tam" >
                </div>
                <br>
                <div>
                    <button class="boton">Ingresar</button>
                    <a href="verificarcorreo.php"><button>Recuperar contraseña</button></a>
                </div>
            </form>
        </div>
    </div>

</div>
    
</body>
</html>