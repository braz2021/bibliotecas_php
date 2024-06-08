<?php
require_once '../../domain/database/connexao.php';

$conexao = new Conexao();
$sql = "SELECT * FROM vendas ORDER BY ID DESC";
$vendas = $conexao->recuperarDados($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Vendas</title>
   
</head>
<body>
<?php
   include_once("../dashboad/menu.php");
   ?>

    <div class="container mt-4">
        <h1>Listagem de Vendas</h1>
        <a class="btn btn-info" href="./registrarvendas.php"> registrar vendas </a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($vendas) > 0): ?>
                    <?php foreach ($vendas as $venda): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($venda['ID']); ?></td>
                            <td><?php echo htmlspecialchars($venda['Produto']); ?></td>
                            <td><?php echo htmlspecialchars($venda['Preço']); ?></td>
                            <td><?php echo htmlspecialchars($venda['Quantidade']); ?></td>
                            <td><?php echo htmlspecialchars($venda['Data']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">Nenhuma venda encontrada.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
