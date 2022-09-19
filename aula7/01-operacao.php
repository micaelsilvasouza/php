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
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $tipo = $_GET["op"];

            echo "Os valores recebidos foram: $n1 e $n2. <br/>";

            $r = $tipo == "s" ? $n1 + $n2 : $n1 - $n2;

            echo "Como tipo foi '$tipo', então esse será o resultado $r.<br>";
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>