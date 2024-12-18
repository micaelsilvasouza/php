<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DesAfio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $segtot = $_POST["seg"]??0;
        $segFim = $segtot;

        $sem = intdiv($segFim, 604800);
        $segFim %= 604800;

        $dia = intdiv($segFim, 86400);
        $segFim %= 86400;

        $hor = intdiv($segFim, 3600);
        $segFim %= 3600;

        $min = intdiv($segFim, 60);
        $segFim %= 60;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" value="<?=$segtot?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando Tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?= number_format($segtot, 0,",",".")?> equivalem</strong> a um total de:</p>
        <ul>
            <li><?=$sem?> Semanas</li>
            <li><?=$dia?> Dias</li>
            <li><?=$hor?> Horas</li>
            <li><?=$min?> Minutos</li>
            <li><?=$segFim?> Segundos</li>
        </ul>
    </section>

</body>
</html>