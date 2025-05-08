<?php
session_start();
require_once '../factory/conexao.php';
$conn = new Caminho;
$conexao = $conn->getConn();

$stmt = $conexao->query("SELECT * FROM usuarios");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

$msg = $_GET['msg'] ?? '';
if ($msg === 'atualizado') {
    echo "<div class='alert alert-success'>Usuário atualizado com sucesso!</div>";
} elseif ($msg === 'excluido') {
    echo "<div class='alert alert-warning'>Usuário excluído com sucesso!</div>";
} elseif ($msg === 'erro') {
    echo "<div class='alert alert-danger'>Erro ao processar a requisição.</div>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR</title>
    <link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1 id="titulo-home-entrada">Bem-vindo, <span><?php echo htmlspecialchars($_SESSION['nome']); ?></span>!</h1>
            <ul class="nav">
                <li><a href="homeADM.php">Início</a></li>
                <li><a href="../actions/logout.php">Sair</a></li>
            </ul>
        </div>
    </header> 
    <section class="main">
        <div class="container">
            <form action="" method="get" class="input-pesquisa">
                <input type="text" placeholder="Digite o ID do Operador..." name="pesquisa" id="pesquisa">
            </form>
            <div class="head-main">
                <h1 class="title">Todos Operadores:</h1>
            </div>
            <div class="tabela">
                <table>
                    <thead class="cabecalho">
                        <tr>
                            <th class="col id">ID</th>
                            <th class="col nome">NOME</th>
                            <th class="col classificacao">CLASSIFICAÇÃO</th>
                        </tr>
                    </thead>
                    <tbody class="chamados">
                        <?php foreach ($usuarios as $i => $usuario): ?>
                            <?php
                                $classeFormatada = $usuario['classe'] === 'tec' ? 'Admin' : ucfirst($usuario['classe']);
                            ?>
                            <tr class="openEditModal" 
                                data-id="<?= $usuario['idOps'] ?>" 
                                data-nome="<?= $usuario['nome'] ?>" 
                                data-email="<?= $usuario['email'] ?>" 
                                data-senha="<?= $usuario['senha'] ?>" 
                                data-classificacao="<?= $usuario['classe'] ?>">
                                <td class="<?= $i % 2 == 0 ? 'impar-bg' : '' ?>"><?= $usuario['idOps'] ?></td>
                                <td class="<?= $i % 2 == 0 ? 'impar-bg' : '' ?>"><?= $usuario['nome'] ?></td>
                                <td class="<?= $i % 2 == 0 ? 'impar-bg' : '' ?>"><?= $classeFormatada ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="novo-cham">
                <button class="openCriaModal" id="btnChamado">NOVO USUÁRIO</button>
            </div>
        </div>
    </section>

    <?php include("../include/modalEditInfoUsuario.php"); ?>
    <?php include("../include/modalCriaUsuario.php"); ?>

    <footer class="footer">
        <p>&copy; Todos os direitos reservados</p>
    </footer>    
    <script src="../JS/script.js?v=<?php echo time(); ?>"></script>
</body>
</html>
