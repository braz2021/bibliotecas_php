<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Novo Autor</title>
</head>
<body>
   
<?php
   include_once("../dashboad/menu.php");
   ?>

    <div class="container mt-5">
        <h2 class="text-dark mb-2">Adicionar Novo Autor</h2>
        <form action="../../domain/autor/cadastro_autor.php" method="post">
            <div class="form-group">
                <label for="nome_autor">Nome do Autor:</label>
                <input type="text" class="form-control" id="nome_autor" name="nome_autor" required>
            </div>
            <div class="form-group">
                <label for="nacionalidade_autor">Nacionalidade:</label>
                <input type="text" class="form-control" id="nacionalidade_autor" name="nacionalidade_autor" required>
            </div>
            <button type="submit" class="btn btn-primary">Adicionar Autor</button>
        </form>
    </div>

    <!-- Bootstrap JS e dependências -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

