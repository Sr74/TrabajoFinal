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
    <header>

            <div class="logo">
                RESCUEpets
            </div>

            <nav class="active">
                    <ul>
                        <li class="active" href=""><a>Inicio</a></li>
                        <li ><a href="">Nosotros</a></li>
                        <li ><a href="">Registrate</a></li>
                        <li><a href="">Inicia Sesion</a></li>
                        <li><a href="">Contactanos</a></li>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi consectetur illo consequatur vel praesentium iste dolorum dignissimos officia, ratione provident odio molestiae accusamus enim harum quod corporis? Architecto, sunt quia.</p>
                </div>
            
        </section>

        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>




</body>
</html>