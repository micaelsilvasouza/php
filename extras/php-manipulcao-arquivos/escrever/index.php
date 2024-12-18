<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando um Arquivo</title>
</head>
<body>
    <h1>Criaçao/gravação de arquivo em PHP</h1>
    <h2>Função fopen</h2>
    <p><strong>Tambem pode ser usada para criar e gravar em um arquivo: </strong><br><code>$myflie = fopen('nome-aquivo', 'w')</code></p>
    <ul>
        <li>'w' - escrever/criar um arquivo</li>
        <li>'a' - escrever/adicionar algo em um arquivo</li>
    </ul>
    <h2>Função fwrite</h2>
    <p>Usada para gravar em um arqurivo, caso exista algum conteudo, será apagado e começado do zero, apenas no modo de abertura 'w'. Exemplo: </p>
    <pre>
<code>
$texto = fopen("testfile.text", "w");
$txt = "Primeira linha\n";
fwrite($texto, $txt);
$txt = "Segunda linha\n";
fwrite($texto, $txt);
fclose($texto);
</code>
    </pre>
    <?php 
        $texto = fopen("testfile.txt", "w");
        $txt = "Primeira linha\n";
        fwrite($texto, $txt);
        $txt = "Segunda linha\n";
        fwrite($texto, $txt);
        fclose($texto);
    ?>
    <p>Caso o conteudo precise continuar o mesmo, apenas tem a necessidade de adicionar algo a mais a ele, só abrir o arquivo no modo de abrertura 'a'. Exemplo: </p>
<pre>
<code>
$texto = fopen("testfile.txt", 'a');
fwrite($texto, "Terceira linha: Essa parte foi acresecentada!\n");
fwrite($texto, 'Quarta linha: Essa parte também foi acrescentada!');
fclose($texto);
</code>
</pre>
    <?php 
        $texto = fopen("testfile.txt", 'a');
        fwrite($texto, "Terceira linha: Essa parte foi acresecentada!\n");
        fwrite($texto, 'Quarta linha: Essa parte também foi acrescentada!');
        fclose($texto);
    ?>

    <h2>Função fseek</h2>
    <p>Muda o ponteiro de lugar, server para a leitura</p>
    <?php 
        $arq = fopen("testfile.txt", "r");
        $esc = fopen("testfile.txt", "a");
        fseek($esc, rand(5,10));
        fwrite($esc,"SEEK ADICIONADO");
        echo fread($arq, filesize("testfile.txt"));
        fclose($arq);
        fclose($esc);
    ?>
</body>
</html>