<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function darError($logico) {
            if($logico){
                throw new Exception("DEU ERROO!!");
                //Sintaxe 
                // new Exception(message, code, previous)
            }else{
                return "Não teve nenhum erro seu Filho da Puta!!";
            }
        }

        try {
            echo darError(true);
        } catch (Exception $e) {
            echo "DEU ERRO!! SEU FILHO DA PUTA";
            //imformações do objeto de erro
            /*
            $e->getCode();
            $e->getMessage();
            $e->getPrevious();
            $e->getFile();
            $e->getLine();
            */
        } finally{
            echo "<br>Como é dificiu ajudar um jumento";
        }
    ?>
</body>
</html>