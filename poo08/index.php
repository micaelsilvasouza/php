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
    <p>para usar uma Herança use a palavra extends depois do nome da subClasse e em seguida o nome da superClasse, não esquecer de requerir o arquivo da classe mãe</p>
    <?php
        require_once "Pessoa.php";
        require_once "Aluno.php";
        require_once "Professor.php";
        require_once "Funcionario.php";

        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $p1->setNome("Pedro");
        $p2->setNome("Maria");
        $p3->setNome("Claudio");
        $p4->setNome("Fabiana");

        $p1->setSexo("Masculino");
        $p4->setSexo("Feminino");

        $p2->setCurso("Informática");
        $p3->setSalario(2500,75);
        $p4->setSetor("Estoque");

        $p3->receberAum(550,20);
        $p4->mudarTrabalho();
        $p2->cancelarMatr();
        
        echo "<pre>";
        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
        echo "</pre>";
    ?>    
</body>
</html>