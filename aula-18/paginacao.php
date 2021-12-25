<?php

include_once 'conexao.php';

$pagina = (isset($_REQUEST['pagina'])) ? $_REQUEST['pagina'] : 1;
$limit = 5;
$inicio = $pagina * $limit;
$offset = ($pagina - 1) * $limit;
$query = "SELECT id, titulo, preco, isbn, edicao, ano_publicacao FROM livro ";
$query_total = $pdo->query("SELECT COUNT(*) FROM ($query) q");
$total = $query_total->fetchColumn();
$statement = limit($pdo, $query, $limit, $offset);
$livros = $statement->execute();

function limit($pdo, string $query, int $limit, int $offset, string $order = 'id') : \PDOStatement{
    $query_limit = "";

    switch ($pdo->getAttribute(PDO::ATTR_DRIVER_NAME)) {
        case 'sqlsrv': //>= 2012
        case 'oci': //>= 12c
            $query_limit = "$query ORDER BY $order OFFSET :offset ROWS FETCH NEXT :limit ROWS ONLY";
            break;
        default: //mysql e postgres
            $query_limit = "$query ORDER BY $order LIMIT :limit OFFSET :offset";
            break;
    }
    
    $statement = $pdo->prepare($query_limit);
    $statement->bindValue(':offset', (int) $offset, PDO::PARAM_INT);
    $statement->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
    return $statement;
}

function montaLinha(array $row, $tag = 'td'){
    return "<tr>".implode('',array_map(function($row) use ($tag){
        return "<$tag>" . $row . "</$tag>";
    }, $row))."</tr>";
}

echo "<table border>";
echo montaLinha(['ID','Título','Preço','ISBN','Edição','Ano'], 'th');

while ($row = $statement->fetch()){
    echo montaLinha($row);
}

echo "</table>";
echo (($pagina-1) > 0) ? "<a href='index.php?pagina=".($pagina-1)."'>Anterior</a>" : "Anterior";
echo "&nbsp";
echo (($pagina)*$limit < $total) ? "<a href='index.php?pagina=".($pagina+1)."'>Próximo</a>" : "Próximo";