<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somando em PHP</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
   <h1>Somando números em PHP</h1>
   <div>
       <?php
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];
            $v3 = $_GET["z"];
            $v4 = $_GET["a"];
            $v5 = $_GET["b"];
            echo "<h2>Valores recebidos: $v1, $v2 e $v3</h2>";

            echo "Para saber um valor absoluto de um número basata usar a função abs().<br>Exemplo: valor absoluto de $v2 é ". abs($v2). "<br><br>";

            echo "Para fazer uma potencia basta usar a função pow() passando dois argumetos.<br>Exemplo: $v1<sup>$v3</sup> = ". pow($v1, $v3). "<br><br>";

            echo "Para saber a raiz quadrada e um número basta usar a função sqrt().<br>Exemplo: a rais quadrada de $v1 é ". sqrt($v1). "<br><br>";

            echo "Para saber o falor arredondado de um número real basata usar a função round().<br>Exemplo: o valor arredondade de $v4 é ". round($v4). "<br>";

            echo "Outras funções de arrendodamento são o ciel()(apenas para cima) e o floor()(para baixo), existe tambem a função intval() que pega o valor inteiro ignorando os valor apos o ponto.<br><br>";

            echo "Para criar um formato monetário para o número basta usar a fonção number_format(num, casas decimais, sinal de centavos, sinal de milhar). <br>Exemplo: $v5 em valor monetário fica - ". number_format($v5, 2, ",", ".");
       ?>
   </div>
   <p>Aprendendo PHP</p>
</body>
</html>