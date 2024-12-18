<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizando dados</title>
    <style>
        *{
            text-align: center;
        }

        section{
            height: 300px;
            overflow-y: auto;
            margin-top: 25px;
        }

        table{
            margin: auto;
            border-collapse: collapse;
        }

        td, th{
            border: 2px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1> <!--Titulo da pagina de acordo com a conexão-->
        <?php 
            try {
                $conn = new mysqli("localhost", "root", database:"bd_python");
                $conn->set_charset("utf8");  #configurando caracteres            
                echo "Adicionar dados ao banco de dados!!"; 
            } catch (Exception $e) {
                die ("Falha ao conectar ao banco de dado");
            }
        ?>
    </h1>
    <p>Por favor, não atualize a pagina para evitar adicionar dados repetido ao bonco de dados.</p>
    <form action="index.php" method="post" target="_self">
        <label for="letra">Letra</label>
        <input type="text" id="letra" name="letra" maxlength="1" required>
        <label for="rel">ID frase:</label>
        <input type="number" id="rel" name="rel" min="1" max="25" require>
        <input type="submit" value="Adcionar dados">
    </form>

    <?php
        $add = $conn->prepare("INSERT INTO relacional (letra, relacional) VALUES (?,?)");
        $add->bind_param("si",$letra, $relacional);

        $letra = $_POST["letra"] ?? 0;
        $relacional = $_POST["rel"] ?? 0;
        if ($letra !== 0 && $relacional !== 0) {
            $add->execute();
            echo "<p>Dado adicionado com sucesso!</p>";
        }
        
    ?>
    
    <section>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Frase</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $frases = $conn->query("SELECT id, caracteres FROM tabela")->fetch_all();
                    foreach($frases as $frase){
                        echo 
                        "<tr>
                            <td>$frase[0]</td>
                            <td>$frase[1]</td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
    </section>
    

    <?php
        $add->close(); 
        $conn->close()
    ?>
</body>
</html>