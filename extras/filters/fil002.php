<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filters</title>
    <style>
        table{
            border-collapse: collapse ;
        }

        td, th{
            border: 2px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Filters</h1>
    <p>A função filter_var() valida e higieniza dados.</p>

    <p>A função filter_var() filtra uma única variável com um filtro especificado. São necessários dois dados:</p>
    <ul>
        <li>A variável que você deseja verificar</li>
        <li>O tipo de verificação a ser usado</li>
    </ul>

    <?php 
        $var = "https://jogos2d.com" // Mude a conteudo ou o tipo
    ?>
    <p>valor = <?=$var?></p>
    <p>O valor <?=filter_var($var, FILTER_VALIDATE_INT)? "é ":"não é " ?>um número interio</p>
    <p>O valor <?=filter_var($var, FILTER_VALIDATE_FLOAT)? "é ":"não é " ?>um número flutuante</p>
    <p>O valor <?=filter_var($var, FILTER_VALIDATE_EMAIL)? "é ":"não é " ?>um número email</p>
    <p>O valor <?=filter_var($var, FILTER_VALIDATE_URL)? "é ":"não é " ?>um número url</p>
</body>
</html>