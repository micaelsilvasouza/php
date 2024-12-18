<?php 
    session_start()
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h1>Sessions</h1>
    <p>Minnha cor favorita era <?=$_SESSION["favoricor"]?></p>
    <p>Meu animal favorito era <?=$_SESSION["favoriani"]?></p>

    <?php 
        $_SESSION["favoricor"] = "rosa";
        $_SESSION["favoriani"] = "Ornitorrinco";
    ?>

    <p>Agora a minha cor favorita é <?=$_SESSION["favoricor"]?></p>
    <p>Agora o meu animal favorito é <?=$_SESSION["favoriani"]?></p>
</body>
</html>