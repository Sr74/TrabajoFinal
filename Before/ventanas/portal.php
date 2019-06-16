<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PortalRescue</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
</head>
<body>
    <?php include('../partes/layerar.php'); ?>
    <header>

            <div class="logo">
                RESCUEpets
            </div>

            <nav class="active">
                    <ul>
                        <li class="active"><a href="portal.php">Inicio</a></li>
                        <li ><a href="nosotros.php">Nosotros</a></li>
                        <li ><a href="registro.php">Registrate</a></li>
                        <li><a href="login.php">Inicia Sesion</a></li>
                    </ul>
            </nav>

            <div class="icon"><i class="fa fa-bars" aria-hidden="true"></i></div>
        
        </header>
        <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        ></script>
        <script> type="text/javascript">
            $(document).ready(function()
            {
                $('.icon').click(function(){
                    $('nav').toggleClass('active')
                })
            })
        </script>

        <hr id="linea1">

        <section class="izq">
                <div class="title-page">
                    <h1>RESCUEPETS: Más que una Familia</h1>
                </div>

                <div id="desc-page">
                    <p>Bienvenido a RESCUEPETS, una organización sin fines de lucro que brinda información relevante sobre mascotas y facilita procesos de adopción, esterilización y alertas sobre animales sin hogar.
                    Si estas interesado en pertenecer a esta comunidad,no dudes en registrarte</p>
                </div>
            
        </section>

        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>




</body>
</html>