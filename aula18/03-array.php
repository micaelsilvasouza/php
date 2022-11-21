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
        <?php
            $n = array(5=>1, 8=>6, 1=>8, 3=>5);
            $n[] = 7;
            unset($n[8]);
            print_r($n);
        ?>
    </div>
</body>
</html>