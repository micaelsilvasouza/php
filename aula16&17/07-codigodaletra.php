<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codigo da letra</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Codigo da letra</h1>
    <div>
        <p>Chr retorna a letra de um detemindado valor numérico de codigo.</p>
        <p>Ord retorna o codigo da letra.</p>
        <?php
           $letra = chr(67);
           echo "A letra de codigo 67 é $letra";
           $codigo = ord($letra);
           echo " e codigo da C é $codigo";
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>