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
            //Forma mais padrão usa number_format(valor, quantas casas decimais, separador decimal, separador de milhar)
            require_once "test.php";

            $real = $_GET["din"]??100;
            $dolar = $real/$cotação;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Os Seus ". numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>". numfmt_format_currency($padrao, $dolar, "USD").    '</strong></p>';
        ?>
        <button onclick="window.location.href = 'index.html'">voltar</button>
    </main>
</body>
</html>