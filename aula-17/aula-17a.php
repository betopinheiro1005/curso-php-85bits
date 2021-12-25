<!DOCTYPE html>
<html>
    <head>
        <title>Incluir Nova Foto</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form action="blob_action.php" method="post" enctype="multipart/form-data">
            Funcionário:
            <select name="funcionario_id">
            <?php include 'conexao.php';
                $funcionarios = $pdo->query('SELECT id, nome FROM funcionario')->fetchAll(PDO::FETCH_KEY_PAIR);
                foreach($funcionarios as $key => $value){
                    echo "<option value='$key'>$value</option>";
                }
            ?>
            </select>

            Foto:
            <input type="file" name="foto" accept="image/*"><br>
            
            <input type="submit" value="cadastrar"/>
        </form>
    </body>
</html>