<?php
require_once '../database/connexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $data = $_POST['data'];

    $conexao = new Conexao();

    $sql_venda = "INSERT INTO vendas (Produto, Preço, Quantidade, Data) VALUES (:produto, :preco, :quantidade, :data)";

    $parametros_venda = [
        ':produto' => $produto,
        ':preco' => $preco,
        ':quantidade' => $quantidade,
        ':data' => $data
    ];

    $conexao->executar($sql_venda, $parametros_venda);

    header("Location: ../../../../../praticando/views/vendas/listar_vendas.php");
    exit();
}
?>