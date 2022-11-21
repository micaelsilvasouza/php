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
            $cad = array(
                "nome" => "Cecilia",
                "idade" => 26,
                "peso" => 57.8
            );
            $cad["sexo"] = "feminino";
            $cad["namorado"] = "Micael";
            foreach($cad as $camp=>$v){
                echo "$camp = $v <br>";
            }
        ?>
    </div>
</body>
</html>