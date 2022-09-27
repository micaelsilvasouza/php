<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Switch</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <h1>Estrutura Switch</h1>
    <div>
        <?php
            $ds = $_GET["ds"];
            switch($ds){
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar! :)";
                    break;
                case 1:
                case 7:
                    echo "Descanse, pequeno gafanhoto! ;)";
            }
        ?>
    </div>
    <a href="javascript:history.go(-1)">Voltar</a>
    <p>Aprendedo PHP</p>
</body>
</html>