<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printf</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Printf</h1>
    <div>
        <?php
            $pro = "leite";
            $pre = 10.4;
            echo "Antes: <br>";
            echo "O $pro custa R$". number_format($pre, 2);
            echo "<br>Depois: <br>";
            printf("O %s custa R$%.2f", $pro, $pre)
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>