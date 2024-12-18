<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões Regulares</title>
</head>
<body>
    <h1>Expressões Regulares</h1>
    <a href="expre-reg.php">Usando Expressões Regulares em um código</a>
    <p>Aprentamos funções que funcionam com expressões regulares, essas expressões são strig com delimitadores exemplo "/expressão/", os delimitadores podem ser qualquer caracteres não sendo letras ou numeros e nem a barra invertida(\), aida pode acrescentar a letra i ao final para indentificar memo a expressão independente de letras maiusculas ou minusculas</p>
    
    <h2>Modificadores de Expressão Regular</h2>
    <p>O modificar muda a forma como uma expressão é pesquisada na string</p>
    <ul>
        <li>(i): Executa uma pesquisa que diferencia maiúsculas de minúsculas</li>
        <li>(m): Executa uma pesquisa de várias linhas</li>
        <li>(u): Permite a correspondência correta de padrões codificados em UTF-8</li>
    </ul>

    <h2>Entre colchetes</h2>
    <p>Pode delimitar a pesquisa usand o colchetes</p>
    <ul>
        <li>[abc]: Executa a pesquisa apenas do que se está em colchetes</li>
        <li>[^abc]: Executa a pesquisa apenas do que esta fora dos colchetes</li>
        <li>[n1-n2]: Executa a pesquisa entre um intervalo numérico entre o numero n1 e o numero n2</li>
    </ul>

    <h2>MetaCaracteres</h2>
    <p>caracteres especiais que auxilina na pesquisa de caracters</p>
    <ul>
        <li>(|): auxilia a encontrada, duas ou mais string em uma outra (/hoje|amanha|ontem/)</li>
        <li>(^string): Encontra uma ocorrencia como a primeira seguencia da string</li>
        <li>(string$): Encontra uma ocorrenica como a ultima seguencia da string</li>
        <li>(\s): Encontra uma ocorrencia de espaço em branco</li>
        <li>(\b): Encontra uma ocorrencia separada, pode ser adiconado no começo e no final para encontrada somente uma seguencia separada</li>
    </ul>

    <h2>Quantificadores</h2>
    <p>Determinam quantidades especificas para pesquisa</p>
    <ul>
        <li>(n+): encontrada uma ou mais ocorrencias</li>
        <li>(n*): encontrada zero ou mais ocorrenicas</li>
        <li>(n?): encontrada uma ou zero ocorrencia</li>
        <li>n(x): encontrada em x ocorrencias de n</li>
        <li>n(x,y): encontrada entre x e y ocorrencias de n</li>
    </ul>

    <h1>Funções</h1>
    <h2>preg_match()</h2>
    <p>Retorna um 1 caso uma expressão regular exista em uma strint e 0 caso não exista, lebrando que 1 equivale a true e 0 a false</p>
    <h3>Codigo</h3>
    <pre><code>
        $str = "Hoje é um dia FELIZ";
        $exp = "/feliz/i";
        echo preg_match($exp,$str)
    </code></pre>

    <h3>saida: 
    <?php 
        $str = "Hoje é um dia 1 FELIZ";
        $exp = "/[5-9]/i";
        echo preg_match($exp,$str)
    ?>
    </h3>

    <h2>preg_match_all()</h2>
    <p>Retorna a quantidade de vezes que uma expressão regular apareceu em uma string, um valor numérico</p>
    <h3>Codigo</h3>
    <pre><code>
        $str = "Hoje é um dia FELIZ! Eu estou feliz e você esta Feliz";
        $exp = "/feliz/i";
        echo preg_match_all($exp,$str)
    </code></pre>
    <h3>Saida:
        <?php 
            $str = "Hoje é um dia FELIZ! Eu estou feliz e você esta Feliz";
            $exp = "/feliz/i";
            echo preg_match_all($exp,$str)
        ?>
    </h3>

    <h2>preg_replace()</h2>
    <p>Troca toda expressão regular encontrada em uma string por outra string, por exemplo: temos uma string que tem a espressão regular feliz, podemos troca onde esta escrito feliz por triste</p>
    <h3>Codigo</h3>
    <pre><code>
        $str = "Hoje é um dia FELIZ! Eu estou feliz e você esta Feliz";
        $exp = "/feliz/i";
        echo preg_replace($exp,"triste", $str)
    </code></pre>
    <h3>Saida: 
        <?php
            $str = "Hoje é um dia FELIZ! Eu estou feliz e você esta Feliz";
            $exp = "/feliz/i";
            echo preg_replace($exp,"triste", $str)
        ?>
    </h3>

</body>
</html>