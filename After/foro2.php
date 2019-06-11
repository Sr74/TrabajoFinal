<?php
$pdo = new PDO("mysql:host=localhost;dbname=personas;charset=utf8","root","");
$sql = "SELECT*FROM foro ORDER BY id DESC";
$sql2 = "SELECT*FROM respuestas ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="foro2.css">
</head>
<body>
    <form action="procesoforo.php" method="post">
        <div>
            <label>Haz una pregunta</label>
            <textarea name="pregunta" cols="30" rows="5" placeholder="Escribe aqui..." ></textarea>
            <button>enviar</button>
        </div>
    </form>
    <br>
    
        
        <?php
        foreach($pdo->query($sql) as $fila){
            
        ?> 
            <div class="orden">
                <textarea cols="30" rows="5" readonly><?php echo $fila["pregunta"]?></textarea>
                
                <form action="procesorespuesta.php?id=<?php echo $fila["id"]?>" method="post">
                    <div class="orden">
                        <textarea name="respuesta" cols="30" rows="2" placeholder="Pon una respuesta"></textarea>
                        <input type="submit" values="enviar">
                    </div>
                </form>
                    <?php  $dato = $fila["id"] ?>
            </div>  

            <?php
            foreach($pdo->query($sql2) as $fila2){
                if($fila2["idpre"]==$fila["id"]){
            ?>

                        <textarea cols="50" rows="5" readonly ><?php echo $fila2["respuesta"]?></textarea><br>
        <?php
               }
            }
        
        }
        ?>
   
</body>
</html>