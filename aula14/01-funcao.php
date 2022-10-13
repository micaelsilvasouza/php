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
                echo "A soma foi $s<br>";
            }

            soma(4,3);
            soma(10,25);
            $x = 5;
            $y = 60;
            soma($x, $y);
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>