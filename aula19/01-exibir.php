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
                echo "O vetor tem ". count($v). " elementos.<br>";
                print_r($v);
                var_dump($v);
            ?>
        </pre>
    </div>
</body>
</html>