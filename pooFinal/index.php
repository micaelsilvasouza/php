<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto YouTube</title>
</head>
<body>
    <h1>Projeto YouTube</h1>
    <pre>
    <?php
        require_once "Video.php";
        require_once "Gafanhoto.php";

        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML");

        $g[0] = new Gafanhoto("Jubileu", 22, "M", "Juba");

        print_r($v);
        print_r($g)
    ?>
    </pre>
</body>
</html>