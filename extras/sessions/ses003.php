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
    <p>As variaveis criadas nessa seção <?=print_r($_SESSION)?></p>

    <?php 
        //removendo variaveis da seção
        session_unset();

        //Deletando a seção
        session_destroy()
    ?>

    <p>Agora não existe mais nenhuma seção <?=print_r($_SESSION)?></p>

    <p>Case ja estivesse vazio antes, volte ao primeiro para criar as variaveis da seção</p>
</html>