<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Lista de funcionários (com foto)</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            include 'conexao.php';

            echo "<table border>";
            echo "<tr><th>Nome</th><th>Foto</th></tr>";
            $funcionarios = $pdo->query("SELECT * FROM funcionario")->fetchAll();

            foreach($funcionarios as $funcionario){
                echo "<tr>";
                echo "<td>{$funcionario['nome']}</td>";
                echo "<td><img src='carrega_foto.php?funcionario_id={$funcionario['id']}' /></td>";
            }
        ?>
    </body>
</html>