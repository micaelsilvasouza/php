<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritiméticas</title>
</head>
<body>
    <h1>Funções Aritiméticas</h1>
    <?php 
        $abs = abs(-20.5);
        $bac = base_convert(254, 10,8);
        $int = intdiv(5,2);
        $min = min([10,5,8,9,74,36,25,2.4,4]);
        $max = max(10,5,8,9,74,36,25,2.4,4);
    ?>
    <p>O abs() retorna um valor de um numero só que sem o sinal. O valor absoluto de -20.5 é <?php echo $abs?></p>
    <p>O base_convert() converte a base numerica de um numero, recebe três parâmetros, primeiro o numeros, segundo a base atual, o terceiro é a base para o resultado. O numero 254 convertido da base 10 para a base 8 é igual a <?php echo $bac?></p>
    <p>O intdiv() retorna uma divisão intera. A divisão intera de 5/2 é <?php echo $int?></p>
    <p>O min() e o max() retorna respectivamente um valor minimo e um valor maximo de uma sequencia de numero. O numero minimo da sequeica (10,5,8,9,74,36,25,2.4,4) é <?php echo $min?> e o maximo é <?php echo $max?></p>
    <p>O pi() retorna o valor do PI, também pode se obte através da constante M_PI. O valor de PI é <?php echo pi();?></p>
    <p>O sqrt() retorna a raiz quadrada de um numero, mas para mais raizes pode-se usar a expressâo: N ** (1/R). A raiz quadrada de 49 é <?php echo sqrt(49)?> e a raiz cubica de 125 é <?php echo 125 ** (1/3)?></p>
</body>
</html>