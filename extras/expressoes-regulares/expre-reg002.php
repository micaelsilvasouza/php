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
        $na = "/na+/i";
        $zero = "/na*/i";
        $uma = "/na?/i";
        $duas = "/(na){2}/i";
        $madi = "/(na){2,3}/i";
        $temna = preg_replace($na, "$$",$men);
        $temzero = preg_replace($zero, "$$",$men);
        $temuma = preg_replace($uma, "$$",$men);
        $temduas = preg_replace($duas, "$$",$men);
        $temmadi = preg_replace($madi, "$$",$men);
        $repna = preg_replace($madi, "NA", $men);
    ?>

    <section>
        <h2>Resultado da Verificação</h2>
        <ul>
            <li>Tem uma ou mais (na): <?=$temna?></li>
            <li>Tem zero ou mais (na): <?=$temzero?></li>
            <li>Tem zero ou uma (na): <?=$temuma?></li>
            <li>Tem duas (na): <?=$temduas?></li>
            <li>Tem entre uma a três: <?=$temmadi?></li>
        </ul>
        <p><?=$repna?></p>
    </section>
</body>
</html>