<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Recebido</title>
</head>
<body>
    <h1>Verificando o Upload</h1>
    <p>Recebido o Arquivo
        <?php 
            $nda = $_GET["nome"]??"nda";
            $file = $_FILES["up"];
            $nome = $file['name']??0;
            echo $nome;
            if(move_uploaded_file($file['tmp_name'], "uploads/$nome")){
                echo " com sucesso";
            }else{
                echo " sem sucesso";
            }
        ?>
    </p>
    <?=var_dump($file)?>
    <form action="<?$_SERVER['PHP_SELF']?>" method="get">
        <input type="file" name="up" id="up">
        <input type="submit" value="Enviar">           
    </form>
    
    <?php 
        #caso o aquivo seja um txt para escrever no codigo php execute
        /*$arq = fopen("uploads/texto.txt", "r");
        while (!feof($arq)){
            echo fgets($arq)."<br>";
        }
        fclose($arq)*/
        #caso um imagem faça
        $dir = 'uploads/'. $nome;
    ?>
    <img src="<?=$dir?>" alt="imagem enviada">
    <?php 
        /*#Diretorio para colocar o arquivo
        $target_dir = "uploads/"; 
        #Especifica o caminho do arquivo a ser carregado
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        #contem a extensão de arquivo do arquivo
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        #Conferir e o arquivo é uma imagem
        if(isset($_POST["submit"])){
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false){
                echo "Arquivo é uma imagem - ". $check["mime"];
                $uploadOk = 1;
            }else{
                echo "Arquivo não é uma imagem";
                $uploadOk = 0;
            }
        }

        if(file_exists($target_file)){
            echo "Descupe, o arquivo já existe";
        }

        if($uploadOk == 1){
            move_uploaded_file($_FILES["fileToUpload"]["tmp_nome"], $target_file);
        }*/
    ?>

</body>
</html>