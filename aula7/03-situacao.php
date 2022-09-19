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
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $media = ($nota1 + $nota2) / 2;
            $sit = $media < 7 ? "REPROVADO":"APROVADO";

            echo "De acordo com as notas o aluno teve a média de $media, então ele está $sit.<br>";
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>