<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <h1>Operadores de Atribuição</h1>
    <div>
        <?php
            $a = 3;
            $b = $a;
            $b += 5;
            
            echo "<h2>Usando Variaveis dentro de outras</h2>";
            echo "<strong>Resultado normal, ao somar a variavel usada:</strong><br>";
            echo "A variavel A e a variavel B valem $a.<br>";
            echo "Somanda a variavel B a ela mesma mais 5.<br>";
            echo "A variavel B vale $b e a variavel A continua valendo $a. <br><br>";

            $c = 5;
            $d = &$c; 
            echo "<strong>Resultado refencial, ao somar uma referencia de variavel:</strong><br>";
            echo "A variavel C vale $c, e a variavel D vale igual.<br>";
            echo "Usando a referencia a variavel(&) as duas passam a valer o mesmo valor, ao somar a variavel D a ela mesma com mais 5.<br>";
            $d += 5;
            echo "A variavel D passa a veler $d, e a variavel C tambem valerá $c.";
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>