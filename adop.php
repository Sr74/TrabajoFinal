<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adoptar</title>
    <style>
        .box{
            padding:10px;
            background:blue;
            color:white;
            text-align:center;
            height:50vh;
        }

        .box:hover{
            background:orange;
            
        }
        .box1{
            padding:10px;
            background:blue;
            color:white;
            text-align:center;
            grid-column:1/5;
            height:50vh;
            
        }
        .contenedor{
            margin-top:140px;
            margin-left:20px;
            margin-right:20px;
            display:grid;
            grid-template-columns:repeat(4,2fr);
            grid-template-rows: repeat(4,4fr);
            grid-auto-rows:4fr;
            grid-gap:40px;
        }

        .box1 div{
            height:20vh;
        }


        h2, h3{
            text-align:center;
            width:50%;
            margin: 60px auto;
            font-size:50px;
            
        }

        h3{
            font-size:30px;
        }

        
    
    </style>

</head>
<body>
    <?php include('After/menu.php'); ?>
    <div class="contenedor">
        <div class="box1">
            <div class="two1"><h2>Bienvenido al Centro de Adopción</h2></div>
            <div class="two2"><h3>Escoge la mascota que quisieras adoptar</h3></div>
        </div>
        <div class="box"><img src="" alt=""></div>
        <div class="box"><img src="" alt=""></div>
        <div class="box"><img src="" alt=""></div>
        <div class="box"><img src="" alt=""></div>
        <div class="box"><img src="" alt=""></div>
        <div class="box"><img src="" alt=""></div>
        <div class="box"><img src="" alt=""></div>
    
    </div>
</body>
</html>