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
            $preco = $_GET["p"];
            echo "O preço do produto é R$". number_format($preco, 2, ",", '.');
            $preco = $preco + ($preco * 10 / 100);
            echo "<br>O novo preço com 10% de aumento será R$". number_format($preco, 2, ",",".");
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>