<?php

require_once '../database/connexao.php';

$conexao = new Conexao();

$nome_cliente = $_POST['nome_cliente'];
$email_cliente = $_POST['email_cliente'];
$telefone_cliente = $_POST['telefone_cliente'];


$sql_cliente = "INSERT INTO clientes (Nome, Email, Telefone) VALUES (:nome_cliente, :email_cliente, :telefone_cliente)";

$parametros_cliente = [
    ':nome_cliente' => $nome_cliente,
    ':email_cliente' => $email_cliente,
    ':telefone_cliente' => $telefone_cliente
];

$conexao->executar($sql_cliente, $parametros_cliente);

header("Location: ../../../../../praticando/views/cliente/listagemCliente.php");
    exit();

?>
