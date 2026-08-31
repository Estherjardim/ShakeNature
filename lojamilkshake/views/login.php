<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Login - Shake Nature</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="imagem/logo.png">
    <link rel="stylesheet" href="/lojamilkshake/public/assets/css/style.css">
</head>

<body>

<div class="login-container">

    <div class="login-card">

        <div class="brand">

            <img src="/lojamilkshake/imagem/logo.png" class="logo">

            <div>
                <h1>Shake Nature</h1>
                <small>Acesso ao sistema</small>
            </div>

        </div>

        <form method="post" action="/lojamilkshake/index.php?controller=auth&action=login">

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Senha</label>
            <input type="password" name="senha" required>

            <div class="buttons">

                <button class="btn entrar" type="submit">
                    Entrar
                </button>

                <a href="index.php?controller=usuario&action=create" class="btn cadastrar">
                    Cadastrar
                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>
