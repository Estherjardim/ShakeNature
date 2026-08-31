<?php

$nomeUser = $_SESSION['nome'] ?? 'Usuário';

?>

<!doctype html>
<html lang="pt-BR">

<head>
<meta charset="utf-8">
<meta name="viewport"
content="width=device-width, initial-scale=1">

<title>Shake Nature - Fornecedores</title>

<link rel="stylesheet"
href="../public/assets/css/style.css">
</head>

<body>

<header class="topbar">

<div class="brand">
<span class="logo">🥤</span>
<span>SHAKE NATURE</span>
</div>

<div class="menu">
Olá,
<strong>
<?= htmlspecialchars($nomeUser) ?>
</strong>

<a href="index.php?controller=auth&action=logout">
Sair
</a>
</div>

</header>

<div class="container">

<div class="page-header">

<h1>Fornecedores</h1>

<small>
Gerencie os fornecedores da Shake Nature
</small>

</div>

<div class="grid">

<!-- Formulário -->

<div class="card">

<h2>
<?= $editar
? "Editar Fornecedor #" . (int)$editar['id']
: "Novo Fornecedor"
?>
</h2>

<form method="post"
action="index.php?controller=fornecedor&action=salvar">

<input
type="hidden"
name="id"
value="<?= $editar ? (int)$editar['id'] : 0 ?>"
>

<label>Nome</label>

<input
class="input"
type="text"
name="nome"
required
value="<?= $editar
? htmlspecialchars($editar['nome'])
: ''
?>"
>

<label>CNPJ</label>

<input
class="input"
type="text"
name="cnpj"
value="<?= $editar
? htmlspecialchars($editar['cnpj'] ?? '')
: ''
?>"
>

<label>Telefone</label>

<input
class="input"
type="text"
name="telefone"
value="<?= $editar
? htmlspecialchars($editar['telefone'] ?? '')
: ''
?>"
>

<label>E-mail</label>

<input
class="input"
type="email"
name="email"
value="<?= $editar
? htmlspecialchars($editar['email'] ?? '')
: ''
?>"
>

<label>Endereço</label>

<textarea
class="input"
name="endereco"
rows="3"
><?= $editar
? htmlspecialchars($editar['endereco'] ?? '')
: ''
?></textarea>

<div class="actions">

<button
class="btn btn-primary"
type="submit">
Salvar
</button>

<a
class="btn"
href="index.php?controller=fornecedor&action=index">
Limpar
</a>

</div>

</form>

</div>

<!-- Lista -->

<div class="card">

<h2>Lista de Fornecedores</h2>

<table class="table">

<thead>

<tr>
<th>ID</th>
<th>Nome</th>
<th>CNPJ</th>
<th>Telefone</th>
<th>Status</th>
<th>Ações</th>
</tr>

</thead>

<tbody>

<?php foreach ($fornecedores as $f): ?>

<tr>

<td>
<?= (int)$f['id'] ?>
</td>

<td>
<?= htmlspecialchars($f['nome']) ?>
</td>

<td>
<?= htmlspecialchars(
$f['cnpj'] ?? '-'
) ?>
</td>

<td>
<?= htmlspecialchars(
$f['telefone'] ?? '-'
) ?>
</td>

<td>

<?php if ((int)$f['ativo'] === 1): ?>

<span class="tag ok">
Ativo
</span>

<?php else: ?>

<span class="tag off">
Inativo
</span>

<?php endif; ?>

</td>

<td>

<a
class="btn"
href="index.php?controller=fornecedor&action=index&id=<?= (int)$f['id'] ?>">
Editar
</a>

<?php if ((int)$f['ativo'] === 1): ?>

<a
class="btn btn-danger"
href="index.php?controller=fornecedor&action=toggle&id=<?= (int)$f['id'] ?>&ativo=0"
onclick="return confirm('Inativar este fornecedor?')">
Inativar
</a>

<?php else: ?>

<a
class="btn btn-success"
href="index.php?controller=fornecedor&action=toggle&id=<?= (int)$f['id'] ?>&ativo=1"
onclick="return confirm('Ativar este fornecedor?')">
Ativar
</a>

<?php endif; ?>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</div>

</div>

<footer>
<strong>SHAKE NATURE</strong> — Sistema de gerenciamento
</footer>

</body>
</html>