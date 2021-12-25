<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Paginação com filtro</title>
    </head>
    <body>
        <form>
            <label>Nome:</label>
            <input name="nome" value="<?php echo isset($_REQUEST['nome']) ? $_REQUEST['nome'] : '';?>"/>
            <label>CPF:</label>
            <input name="cpf" value="<?php echo isset($_REQUEST['cpf']) ? $_REQUEST['cpf'] : '';?>"/>
            <input type="submit" value="filtrar" />
        </form>
        
        <?php
            // put your code here
            // include 'conexao_oracle.php';
            include 'conexao.php';

            function limit(\PDO $pdo, string $query, int $limit, int $offset, string $order = 'id'): \PDOStatement {
$query_limit = "";
            switch ($pdo->getAttribute(PDO::ATTR_DRIVER_NAME)) {
                case 'sqlsrv':
                case 'oci':
                    $query_limit = "$query ORDER BY $order OFFSET :offset ROWS FETCH NEXT :limit ROWS ONLY";
                    break;
                default:
                    $query_limit = "$query ORDER BY $order LIMIT :limit OFFSET :offset";
                    break;
            }

            $statement = $pdo->prepare($query_limit);
            $statement->bindValue('offset', (int) $offset, PDO::PARAM_INT);
            $statement->bindValue('limit', (int) $limit, PDO::PARAM_INT);
            return $statement;  
        }

        $pagina = (isset($_REQUEST['pagina'])) ? $_REQUEST['pagina'] : 1;
        unset($_REQUEST['pagina']);
        $parametros = [];
        $nome = "";
        $cpf = "";
        $limit = 5;
        $inicio = $pagina * $limit;
        $offset = ($pagina - 1) * $limit;
        $query = "SELECT * FROM funcionario WHERE 1=1 ";

        if(!empty($_REQUEST['nome'])){
            $nome = $_REQUEST['nome'];
            $parametros['nome'] = $nome;
            $query .= " AND nome LIKE :nome";
        }

        if(!empty($_REQUEST['cpf'])){
            $cpf = $_REQUEST['cpf'];
            $parametros['nome'] = $cpf;
            $query .= " AND cpf LIKE :cpf";
        }

        $query_total = $pdo->prepare("SELECT COUNT(*) FROM ($query) q");
        $query_total->execute($parametros);
        $total = $query_total->fetchColumn();
        $statement = limit($pdo, $query, $limit, $offset);
        (!$nome) ?: $statement->bindValue('nome', "%$nome%");
        (!$cpf) ?: $statement->bindValue('cpf', "%$cpf%");
        $funcionarios = $statement->execute();

        echo "<table border>";
        echo "<tr><th>Nome</th><th>CPF</th></tr>";
        while($funcionario = $statement->fetch()){
            echo "<tr>";
            echo "<td>{$funcionario['nome']}</td>";
            echo "<td>{$funcionario['cpf']}</td>";
            echo "</tr>";
        }
        echo "</table>";

        $parametrosUrl = http_build_query($_REQUEST);
        echo (($pagina - 1) > 0 ) ? "<a href='paginacao_1.php?pagina=" . ($pagina-1) . "&$parametrosUrl'>Anterior</a>" : "Anterior";
        echo "&nbsp";
        echo (($pagina) * $limit < $total) ? "<a href='paginacao_1.php?pagina=". ($pagina+1) . "&$parametrosUrl'>Próximo</a>" :
"Próximo";
        ?>

    </body>
</html>