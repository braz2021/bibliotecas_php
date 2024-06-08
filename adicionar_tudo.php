
<?php
require_once 'connexao.php';
require_once 'ClienteRepository.php';

$conexao = new Conexao();
$clienteRepo = new ClienteRepository($conexao);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_autor = $_POST['nome_autor'];
    $nacionalidade_autor = $_POST['nacionalidade_autor'];
    $titulo_livro = $_POST['titulo_livro'];
    $autor_id = $_POST['autor_id'];
    $ano_publicacao = $_POST['ano_publicacao'];
    $genero_livro = $_POST['genero_livro'];
    $preco_livro = $_POST['preco_livro'];
    $nome_cliente = $_POST['nome_cliente'];
    $email_cliente = $_POST['email_cliente'];
    $telefone_cliente = $_POST['telefone_cliente'];
    $cliente_id = $_POST['cliente_id'];
    $livro_id = $_POST['livro_id'];
    $data_venda = $_POST['data_venda'];
    $quantidade_venda = $_POST['quantidade_venda'];

    // Adicionar novo autor
    if (!empty($nome_autor)) {
        $sql_autor = "INSERT INTO autores (Nome, Nacionalidade) VALUES (:nome, :nacionalidade)";
        $parametros = [
            ':nome' => $nome_autor,
            ':nacionalidade' => $nacionalidade_autor
        ];
        $conexao->executar($sql_autor, $parametros);
    }

    // Adicionar novo livro
    if (!empty($titulo_livro)) {
        $sql_livro = "INSERT INTO livros (Titulo, AutorID, AnoPublicacao, Genero, Preco) VALUES (:titulo_livro, :autor_id, :ano_publicacao, :genero_livro, :preco_livro)";
        $parametros_livro = [
            ':titulo_livro' => $titulo_livro,
            ':autor_id' => $autor_id,
            ':ano_publicacao' => $ano_publicacao,
            ':genero_livro' => $genero_livro,
            ':preco_livro' => $preco_livro
        ];
        $conexao->executar($sql_livro, $parametros_livro);
    }

    // Adicionar novo cliente
    if (!empty($nome_cliente)) {
        $sql_cliente = "INSERT INTO clientes (Nome, Email, Telefone) VALUES (:nome_cliente, :email_cliente, :telefone_cliente)";
        $parametros_cliente = [
            ':nome_cliente' => $nome_cliente,
            ':email_cliente' => $email_cliente,
            ':telefone_cliente' => $telefone_cliente
        ];
        $conexao->executar($sql_cliente, $parametros_cliente);
    }

    // Registrar venda
    if (!empty($cliente_id) && !empty($livro_id)) {
        $sql_venda = "INSERT INTO vendas (ClienteID, LivroID, DataVenda, Quantidade) VALUES (:cliente_id, :livro_id, :data_venda, :quantidade)";
        $parametros_venda = [
            ':cliente_id' => $cliente_id,
            ':livro_id' => $livro_id,
            ':data_venda' => $data_venda,
            ':quantidade' => $quantidade_venda
        ];
        $conexao->executar($sql_venda, $parametros_venda);
    }
}

echo "Informações adicionadas com sucesso!";
?>
