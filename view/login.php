<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 

</head>
<body>
    <header class="header"></header>
    <main class="login"> 
        <h1 id="h1-login">Login</h1>
        <form action="../actions/verificaSessao.php" method="POST" class="formulario">
            <div class="campo-ops">
                <label for="id-ops">ID Ops:</label>
                <input type="text" name="id-ops" id="id-ops">
            </div>

            <div class="campo-nome">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="campo-senha">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha">
            </div>
            <input type="submit" value="ENTRAR" id="btn">

        </form>
        <div class="link">
            <a href="#">Esqueceu seu ID OPS?</a>
            <a href="#">Esqueceu sua senha?</a>
        </div>
    </main>
    <footer class="footer">
        <p>@COPY</p>
    </footer>
</body>
</html>