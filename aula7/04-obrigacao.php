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
            $nasc = $_GET["ano"];
            $idade = 2022 - $nasc;
            $sit = ($idade >= 18 and $idade < 65) ? "obrigado": "não obrigado";
            echo "A sua idade é $idade.<br>";
            echo "Você é $sit a votar.<br>";

        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>