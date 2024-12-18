<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filters</title>
    <style>
        table{
            border-collapse: collapse ;
        }

        td, th{
            border: 2px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Filters</h1>
    <p>A função filter_list() pode ser usada para listar o que a extensão de filtro PHP oferece:</p>

    <table>
        <tr>
            <th>Nome do Filtro</th>
            <th>Id do Filtro</th>
        </tr>
        <?php 
            foreach(filter_list() as $id =>$filtro){
                echo "
                    <tr>
                        <td>$filtro</td>
                        <td>".filter_id($filtro)."</td>
                    </tr>
                " ;
            }
        ?>
    </table>
</body>
</html>