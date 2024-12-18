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
        $men = $_GET["men"]??"Nenhuma Mensagem";
        $promen = "/porra|caralho|desgraça/i";
        $sub = "\u{1f92c}"
    ?>
    <main>
        <h1>Verificador de mensagem</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="men">Mensagem</label>
            <input type="text" name="men" id="men" value="<?=$men?>">
            <input type="submit" value="Verificar">
        </form>
    </main>
    <?php 
        $temen = preg_match($promen,$men)?"SIM":"NÃO";
        $vezmen= preg_match_all($promen,$men);
        $newmen = preg_replace($promen, $sub, $men);
    ?>

    <section>
        <h2>Resultado da Verificação</h2>
        <p>A mensagem foi:<br><?=$men?></p>
        <ul>
            <li>Foi encontrado palavra proibida: <?=$temen?></li>
            <li>A palavra proibida apareceu <strong><?=$vezmen?> vezes</strong></li>
            <li>A alteração da mensagem ficou assim: <br><strong><?=$newmen?></strong></li>
        </ul>
    </section>
</body>
</html>