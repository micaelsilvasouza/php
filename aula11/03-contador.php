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
        <?php
            $ini = $_GET["ini"];
            $fim = $_GET["fim"];
            $inc = $_GET["inc"];
            echo "<p>Contando de $inc e $inc, a patir de $ini até $fim.</p>";
            
            if($ini == $fim){
                echo "Os numero são os mesmos, não tem motivo pra faze alguma contagem";
            }elseif($ini < $fim){
                while($ini <= $fim){
                    echo "$ini ";
                    $ini += $inc;
                }
            }else{
                while($ini >= $fim){
                    echo "$ini ";
                    $ini -= $inc;
                }
            }
            
            
            
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>