<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
</head>
<body>
    <p>A função json_decode() é usada para decodificar um objeto JSON em um objeto PHP ou uma matriz associativa.</p>
    <?php 
        //mude o formato da array
        $dados = '{"Peter":35,"Ben":37,"Joe":43}';

        echo "<p>$dados</p>";
        var_dump(json_decode($dados, true));

        //O segundo parametro é usado para array associativa
    ?>
</body>
</html>