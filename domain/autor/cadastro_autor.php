<?php

require_once '../database/connexao.php';

$conexao = new Conexao();

$nome_autor = $_POST['nome_autor'];
$nacionalidade_autor = $_POST['nacionalidade_autor'];

$sql_cliente = "insert into autor(Nome, Nacionalidade) value (:nome_autor,:nacionalidade_autor)";

$parametros_cliente = [
    ':nome_autor' => $nome_autor,
    ':nacionalidade_autor' => $nacionalidade_autor
    
];

$conexao->executar($sql_cliente, $parametros_cliente);

header("Location: ../../../../../praticando/views/autor/listagem_autor.php");
    exit();
?>