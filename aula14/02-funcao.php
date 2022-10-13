<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função em PHP</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Função em PHP</h1>
    <div>
        <?php
            function soma($a, $b){
                $s = $a + $b;
                return $s;
            }

            
            $x = -5;
            $y = 60;
            $r = soma($x, $y);
            echo "A soma de $x e $y é igual a $r.";
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>