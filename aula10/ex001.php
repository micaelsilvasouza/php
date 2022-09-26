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
            $n = $_GET["num"];
            $o = $_GET["oper"];
            $r = 0;
            switch($o){
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = $n ** 3;
                    break;
                case 3:
                    $r = $n ** 0.5;
            }

            echo "De acordo com o que foi solicitado o resutado é $r";
        ?>
    </div>
    <a href="ex001.html">Voltar</a>
    <p>Aprendedo PHP</p>
</body>
</html>