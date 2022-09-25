<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Final</title>
    <link rel="stylesheet" href="../estilo.css">
    <?php
        $n1 = number_format($_GET["n1"], 1);
        $n2 = number_format($_GET["n2"], 1);
        $med = number_format(($n1 + $n2) / 2, 1);
        
        if($med > 7){
            $res = "APROVADO";
            $medcolor = "green";
        }elseif($med < 7 && $med >= 5){
            $res = "RECUPERAÇÃO";
            $medcolor = "#e5e52f";
        }else{
            $res = "REPROVADO";
            $medcolor = "red";
        }

        if($n1 > 7){$n1color = "green";} elseif($n1 >= 5){$n1color = "yellow";} else{$n1color = "red";}
        
        if($n2 > 7){$n2color = "green";} elseif($n2 >= 5 ){$n2color = "yellow";} else{$n2color = "red";}
    ?>
    <style>
        span#n1{
            color: <?php echo $n1color;?>;
        }

        span#n2{
            color: <?php echo $n2color;?>;
        }

        span#med{
            color: <?php echo $medcolor;?>;
        }

        span#res{
            color: <?php echo $medcolor;?>;
        }
    </style>
</head>
<body>
    <h1>Média Final</h1>
    <div>
        <?php
            echo "As suas Notas foram <span id='n1'>$n1</span> e <span id='n2'>$n2</span>, sua média foi <span id='med'>$med</span>; <br>";

            

            echo "Pela sua média a situação é <span id='res'>$res</span>;"
        ?>
    </div>
    <a href="ex003.html">Voltar</a>
    <p>Aprendendo PHP</p>
</body>
</html>