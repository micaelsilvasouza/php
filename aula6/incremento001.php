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
            //comentário em linha
            #comentário em linha
            /*
                comentário para mais de uma linha
            */
            $atual = $_GET["aa"];
            echo "O ano atual é $atual, então o ano anterior foi ". --$atual;
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>