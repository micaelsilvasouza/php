<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
    <?php 
        $numero = $_POST["numero"] ?? 10;
    ?>
</head>
<body>
    <header>
        <h1></h1>
    </header>
    <main>
        <h1>Resultado Final</h1>
        <p>O nummero escolhido foi <strong><?php echo $numero?></strong></p>
        <p>O seu antecessor é <strong><?php echo $numero - 1 ?></strong></p>
        <p>O seu sucessor é <strong><?php echo $numero + 1?></strong></p>
        <a href="javascript:history.go(-1)">Voltar</a>
    </main>
</body>
</html>