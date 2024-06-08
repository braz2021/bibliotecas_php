<?php
require_once '../../domain/database/connexao.php';

$conexao = new Conexao();
$sql = "SELECT * FROM livros ORDER BY ID DESC";
$livros = $conexao->recuperarDados($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Livros</title>
   
</head>
<body>
<?php
   include_once("../dashboad/menu.php");
   ?>

    <div class="container mt-4">
        <h1>Listagem de Livros</h1>
        <a class="btn btn-info" href="./listagem_livros.php"> lista de livros </a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Gênero</th>
                    <th>Ano de Publicação</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($livros) > 0): ?>
                    <?php foreach ($livros as $livro): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($livro['ID']); ?></td>
                            <td><?php echo htmlspecialchars($livro['Titulo']); ?></td>
                            <td><?php echo htmlspecialchars($livro['Autor']); ?></td>
                            <td><?php echo htmlspecialchars($livro['Genero']); ?></td>
                            <td><?php echo htmlspecialchars($livro['Ano_Publicacao']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">Nenhum livro encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>