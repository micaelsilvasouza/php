<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetições While</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <h1>Repetições While</h1>
    <div>
        <p>Criando caixa de texto dinamicamente pelo PHP</p>
        <form action="02-parte2.php" method="get">
            <?php
                $c = 1;
                while($c <= 5){        
                    echo "<p><label for='iv$c'>Valor $c:</label><input type='number' name='v$c' id='iv$c' require max='100' min='0' value='0'></p>";

                    $c++;
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>