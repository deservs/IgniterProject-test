<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/d
ist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h2>Cadastrar Produto</h2>
    <form action="/produtos/salvar" method="POST">
        <div class="mb-3">
            <label>Nome do Produto</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Preço</label>
            <input type="number" step="0.01" name="price" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>

        <a href="/produtos" class="btn btn-secondary">Voltar</a>
    </form>
</body>

</html>