<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <h1>Herança</h1>
    <pre>
        <?php
            require_once "Visitante.php";
            require_once "Aluno.php";
            require_once "Bolsista.php";
            
            //$p1 = new Pessoa();
            
            $v1 = new Visitante();
            $v1->setNome("Juvenal");
            $v1->setIdade(33);
            $v1->setSexo("Masculino");
            print_r($v1);

            $a1 = new Aluno();
            $a1->setNome("Pedro");
            $a1->setIdade(16);
            $a1->setSexo("Masculino");
            $a1->setMatricula(111);
            $a1->setCurso("Informática");
            $a1->pagarMensalidade();
            print_r($a1);

            $b1 = new Bolsista();
            $b1->setNome("Joana");
            $b1->setSexo("Feminino");
            $b1->setIdade(17);
            $b1->setMatricula(1112);
            $b1->setCurso("Administração");
            $b1->setBolsa(12.5);
            $b1->pagarMensalidade();
            print_r($b1);
        ?>
    </pre>
</body>
</html>