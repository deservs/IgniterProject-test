<! DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>CRUD Produtos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/d
ist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h2>Lista de Produtos</h2>
<a href="/produtos/novo" class="btn btn-primary mb-3">Novo
Produto</a>
<table class="table table-bordered">
<thead>
<tr>
<th>ID</th>
<th>Nome</th>
<th>Preço</th>
<th>Ações</th>
</tr>
</thead>
<tbody>
<?php foreach ($products as $prod) : ?>
<tr>
<td> <?= $prod['id'] ?></td>
<td> <?= $prod['name'] ?></td>
<td>R$ <?= number_format($prod['price'], 2, ',', '.') ?></td>
<td>
<a href="/produtos/editar/ <?= $prod['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
<a href="/produtos/deletar/ <?= $prod['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja apagar?')">Deletar</a>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</ body>
</html>