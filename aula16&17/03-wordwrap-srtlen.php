<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WordWrap e Strlen</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <h1>WordWrap e Strlen</h1>
    <div>
        <p>Cria uma quebra de linha quando o texto é exibido no codigo fonte, o segundo parametro é quantos caracteres são usados antes de quebrar a linha, para exibir visualmente na pagina web, o terceiro paramentro recebe uma string com a tag br e o \n, o ultimo parametro é true ou false, para definir se deve dividir uma palavra ou não</p>
        <?php
            $t = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, laborum molestiae. ";
            $ww = wordwrap($t, 2, "<br>\n", false);
            echo $ww;
            $sl = strlen($t);
            echo "Ao todo existem $sl de caracteres nessa string.";
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>