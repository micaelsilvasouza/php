<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Usando Expressões Regulares</title>
</head>
<body>
    <?php 
        $pal = $_GET["pal"]??"Sonho";
    ?>
    <main>
        <h1>Verificador de mensagem</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="pal">Palavra</label>
            <input type="text" name="pal" id="pa" value="<?=$pal?>">
            <input type="submit" value="Verificar">
        </form>
    </main>
    <?php 
        $propal = "/ola/i";
        $comeco = "/^ola/i";
        $final = "/ola$/i";
        $espaco = "/\s/";
        $separada = "/\bola\b/i";
        $tem = preg_match($propal, $pal)?"SIM":"NÃO";
        $temcomeco= preg_match($comeco, $pal)?"SIM":"NÃO";
        $temfinal = preg_match($final,$pal)?"SIM":"NÃO";
        $temespaco = preg_match($espaco,$pal)?"SIM":"NÃO";
        $taseparada = preg_match($separada, $pal)?"SIM":"NÃO";
    ?>

    <section>
        <h2>Resultado da Verificação</h2>
        <p>A palavra foi: <strong><?=$pal?></strong></p>
        <ul>
            <li>Tem: <?=$tem?></li>
            <li>Tem no começo: <?=$temcomeco?></li>
            <li>Tem no final: <?=$temfinal?></li>
            <li>Tem um espaço: <?=$temespaco?></li>
            <li>Ta separda: <?=$taseparada?></li>
        </ul>
    </section>
</body>
</html>