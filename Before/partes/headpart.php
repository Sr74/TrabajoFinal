<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PortalRescue</title>
    <link rel="stylesheet" href="../partes/parthead.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
</head>
<body>
    <header class="header">

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
</body>
</html>