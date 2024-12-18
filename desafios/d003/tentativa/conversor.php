<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
            $val = $_GET['val']??10;
            $con = $val / 5;
            echo "<p>O seus R$ $val equivalem a <strong>U$ $con</strong></p>";        
        ?>
        <button onclick="document:history.go(-1)">Voltar</button>
    </main>

</body>
</html>