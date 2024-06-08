<?php
require_once '../../domain/database/connexao.php';

$conexao = new Conexao();
$sql = "SELECT * FROM autor a order by  a.ID desc ";
$autores = $conexao->recuperarDados($sql);
?>

<!DOCTYPE html>
<html>
<head>

<?php
   include_once("../dashboad/menu.php");
   ?>

    <title>Listagem de Autores</title>

    <a class="btn btn-info" href="./adicinarnovoautor.php"> Cadastro de Autores </a>

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
                <th>Nacionalidade</th>
                
            </tr>
        </thead>
        <tbody>
            <?php if (count($autores) > 0): ?>
                <?php foreach ($autores as $autor): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($autor['ID']); ?></td>
                        <td><?php echo htmlspecialchars($autor['Nome']); ?></td>
                        <td><?php echo htmlspecialchars($autor['Nacionalidade']); ?></td>
                        
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