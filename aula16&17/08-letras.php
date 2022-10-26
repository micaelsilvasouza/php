<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letras Minusculas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Letras Minusculas</h1>
    <div>
        <p>strtolower deixa minusculas.</p>
        <p>strtoupper deixa maiusculas.</p>
        <p>ucfirst coloca a primeira maiusculas, não altera as outras.</p>
        <p>ucwords coloca a primeira letra de cada palavra maiscula, não altera as outras.</p>
        <?php
            $nome = "micael silva";
            $nome2 = strtolower($nome);
            $nome3 = strtoupper($nome);
            $nome4 = ucfirst($nome);
            $nome5 = ucwords($nome);
            print("Seu nome é $nome2");
            print("<br>Seu nome é $nome3");
            print("<br>Seu nome é $nome4");
            print("<br>Seu nome é $nome5");
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>