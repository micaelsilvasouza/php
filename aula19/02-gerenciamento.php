<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e Matrizes</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <h1>Vetores e Matrizes</h1>
    <div>
        <pre>
            <?php
                $v = array("A", "L", "M", "X", "P");
                
                echo "Retirando o ultimo<br>";
                array_pop($v);
                print_r($v);

                echo "Adicionando no ultimo<br>";
                array_push($v, "O");
                print_r($v);

                echo "Retirando o primeiro<br>";
                array_shift($v);
                print_r($v);

                echo "Adicionando no primeiro<br>";
                array_unshift($v, "R");
                print_r($v)
            ?>
        </pre>
    </div>
</body>
</html>