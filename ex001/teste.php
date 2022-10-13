<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1, 2, 3, Testando</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Testando PHP</h1>
    <div>
        <?php
            $t = isset($_GET["test"])? $_GET["test"] : "suado";

            echo $t;
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>