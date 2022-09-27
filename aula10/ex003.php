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
            $es = $_GET["es"];

            switch($es){
                case "nor":
                    $reg = "Norte";
                    break;
                case "nord":
                    $reg = "Nordeste";
                    break;
                case "sul":
                    $reg = "Sul";
                    break;
                case "suld":
                    $reg = "Suldeste";
                    break;
                case "co":
                    $reg = "Centro Oeste";
            }
            
            echo "Você está na região $reg."
        ?>
    </div>
    <a href="javascript:history.go(-1)">Voltar</a>
    <p>Aprendedo PHP</p>
</body>
</html>