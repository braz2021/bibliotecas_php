<?php
require_once '../../domain/database/connexao.php';

$conexao = new Conexao();
$sql = "SELECT * FROM clientes c  order by  c.ID desc ";
$clientes = $conexao->recuperarDados($sql);
?>

<!DOCTYPE html>
<html>
<head>

<?php
   include_once("../dashboad/menu.php");
   ?>

    <title>Listagem de Clientes</title>

    <a class="btn btn-info" href="./cadastroCliente.php"> Cadastro de Clientes </a>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Listagem de Clientes</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($clientes) > 0): ?>
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($cliente['ID']); ?></td>
                        <td><?php echo htmlspecialchars($cliente['Nome']); ?></td>
                        <td><?php echo htmlspecialchars($cliente['Email']); ?></td>
                        <td><?php echo htmlspecialchars($cliente['Telefone']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">Nenhum cliente encontrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>