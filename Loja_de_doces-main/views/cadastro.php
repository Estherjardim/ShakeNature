<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">

    <title>Cadastro - Top Doces</title>

    <link rel="stylesheet" href="/LOJADOCES/public/assets/css/style.css">
</head>

<body>

<div class="cadastro-container">

    <div class="cadastro-card">

        <div class="brand">

            <img src="/LOJADOCES/imagem/logo.png" class="logo">

            <div>
                <h1>Top Doces</h1>
                <small>Acesso ao sistema</small>
            </div>

        </div>

        <form action="index.php?controller=usuario&action=store" method="POST">

            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>

            <div class="buttons">

                <button type="submit" class="btn cadastrar-btn">
                    Cadastrar
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>












