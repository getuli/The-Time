<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main><?php

    $tempo = isset($_GET['tempo']) ? intval($_GET['tempo']) : 1 ;
    $semanas = intdiv($tempo , 604800);
    $dias = intdiv(($tempo - ($semanas* 604800)), 86400);
    $horas =intdiv(($tempo -(( $semanas *  604800) + ($dias *  86400))), 3600);
    $minutos =intdiv(($tempo - (( $semanas *  604800) + ($dias *  86400) + ($horas * 3600))), 60);
    $segundos = $tempo - ($semanas * 604800) - ($dias * 86400) - ($horas * 3600) - ($minutos * 60);
    ?>
        <div>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <h2>digite o tempo em segundos para se realizar o cálculo </h2>
            <label for="tempo">tempo em segundos: </label>
            <input id="btn" type="number" name="tempo" >
            </hr>
            </br>
            <input type="submit" value="calcular" name="ttempo" >
                  
            </form>
        </div>
        <span>
            <?php
            echo "<ul>
            <li> Você têm $semanas semanas.</li>
            <li>  $dias dias .</li>
            <li>  $horas horas .</li>
            <li>   $minutos minutos .</li>
            <li>   $segundos segundos .</li>" ;

            ?>
        </span>
    </main>
</body>
</html>