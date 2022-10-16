<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função por referência</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Função por referência</h1>
    <div>
        <?php
            function teste(&$x){
                $x += 2;
                echo "O valor de X é $x<br>";
            }

            $a = 3;
            teste($a);
            echo "O valor de A é $a";
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>