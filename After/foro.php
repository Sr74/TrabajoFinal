<?php
$pdo = new PDO("mysql:host=localhost;dbname=personas;charset=utf8","root","");
$sql = "SELECT*FROM foro";
$sql2 = "SELECT*FROM respuestas";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <table class="table">
        <tr>
            <td>Preguntas</td>
        </tr>

    
        <?php
        foreach($pdo->query($sql) as $fila){
            
        ?> 
            <tr>
                <td><textarea cols="30" rows="5" readonly><?php echo $fila["pregunta"]?></textarea></td>
                <td>
                    <form action="procesorespuesta.php?id=<?php echo $fila["id"]?>" method="post">
                        <textarea name="respuesta" cols="30" rows="2" placeholder="Pon una respuesta"></textarea>
                        <button>enviar</button>
                    </form>
                    <?php  $dato = $fila["id"] ?>
                </td>
                
            </tr>
            <tr>
                <td>
                    <?php
                    foreach($pdo->query($sql2) as $fila2){
                        if($fila2["idpre"]==$fila["id"]){
                    ?>
                        <textarea cols="50" rows="5" readonly ><?php echo $fila2["respuesta"]?></textarea><br>
                    <?php
                        }
                    }
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>