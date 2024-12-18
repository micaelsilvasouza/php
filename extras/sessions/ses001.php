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
    <?php 
        $_SESSION["favoricor"] = "violeta";
        $_SESSION["favoriani"] = "galinha";
    ?>

    <p>Minnha cor favorita é <?=$_SESSION["favoricor"]?></p>
    <p>Meu animal favorito é <?=$_SESSION["favoriani"]?></p>
</body>
</html>