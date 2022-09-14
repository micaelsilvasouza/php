<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações em PHP</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
   <h1>Operadores Aritméticos em PHP</h1>
   <div>
       <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $m = ($n1 + $n2) / 2;
            
            echo "<h2>Os valores recebidos: $n1 e $n2</h2>";

            echo "Para somar valores basta usar o sinal (+).<br>Exemplo: $n1 + $n2 = ". ($n1+$n2). "<br><br>";
            
            echo "Para subtrair valores basta usar o sinal (-).<br>Exemplo: $n1 - $n2 = ". ($n1 - $n2). "<br><br>";

            echo "Para multiplicar valores basta usar o sinal (*).<br>Exemplo: $n1 * $n2 = ". ($n1*$n2). "<br><br>";

            echo "Para dividir valore basta usa o sinl (/).<br>Exemplo: $n1 / $n2 = ". ($n1/$n2). "<br><br>";

            echo "Para saber o Modulo (Resto de uma divisão) basta usa o sinal (%).<br>Exemplo: $n1 % $n2 = ". ($n1%$n2). "<br><br>";

            echo "A média entre $n1 e $n2 é igual a $m";
       ?>
   </div>
   <p>Aprendendo PHP</p>
</body>
</html>