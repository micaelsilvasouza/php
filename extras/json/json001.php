<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
</head>
<body>
    <p>Usando a função json_encode() pegamos uma array e transformamos em json</p>
    <?php 
        //mude o formato da array
        $dados = array("nome"=>"Natam","Idade"=>43,"sexo"=>"M");

        var_dump($dados);
        echo "<p>".json_encode($dados)."</p>";
    ?>
</body>
</html>