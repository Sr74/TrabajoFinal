<?php
$pdo = new PDO("mysql:host=localhost;dbname=personas;charset=utf8","root","");
$sql = "SELECT * FROM adoptados ORDER BY id LIMIT 0,3";
$sql2 = "SELECT COUNT(*) total FROM adoptados";
$sa = $pdo->query($sql2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="interesante.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <?php
    $a=0;
    while ($a <= $sa) {
    ?>
        <div class="container">
            <?php
            foreach ($pdo->query($sql) as $fila) {
            ?>
                <div class="card">
                    <div class="img-box">
                        <img src="https://http2.mlstatic.com/perros-cachorros-D_NP_717526-MLM27062488387_032018-Q.jpg">
                    </div>
                    <div class="content">
                        <h2>someone famous <br><span>UX/UI Designer</span></h2>
                        <p> qwertyuioasdfghjkxcvbnmr
                        tyuijmkuytrdfvbnjm</p>
                    
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            <?php
            }
            ?>           
        </div>
    <?php
        $a++;
    }
    ?>
</body>
</html> 