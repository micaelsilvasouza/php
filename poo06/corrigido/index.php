<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultra Emoji Combat</title>
</head>
<body>
    <?php
        require_once "lutador.php";

        $l = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11,2,1);
        $l->status();
    ?>
</body>
</html>