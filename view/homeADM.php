<?php
session_start();
require_once '../factory/conexao.php';

$conn = new Caminho;
$conexao = $conn->getConn();

if (!isset($_SESSION['idOps'])) {
    echo "Usuário não autenticado.";
    exit;
}

$idOps = $_SESSION['idOps']; 
$classe = $_SESSION['classe'];

if ($classe === 'adm') {
    $stmt = $conexao->prepare("SELECT * FROM chamados ORDER BY created_at DESC");
    $stmt->execute();
} else {
    $stmt = $conexao->prepare("SELECT * FROM chamados WHERE idOps = ? ORDER BY created_at DESC");
    $stmt->execute([$idOps]);
}
$chamados = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
</head>
<body>
    <header class="header">
        <div class="container">
            <h1 id="titulo-home-entrada">Bem vindo, <span><?php echo htmlspecialchars($_SESSION['nome']); ?></span>!</h1>
            <ul class="nav">
                <?php if ($classe === 'adm'): ?>
                    <li><a href="../view/registrarADM.php">Registrar</a></li>
                <?php endif; ?>
                <li><a href="../actions/logout.php">Sair</a></li>
            </ul>
        </div>
    </header> 

    <section class="main">
        <div class="container">
            <form action="" method="get" class="input-pesquisa">
                <input type="text" placeholder="Digite o ID do chamado..." name="pesquisa" id="pesquisa">
            </form>
            <div class="head-main">
                <h1 class="title">Seus Chamados:</h1>
            </div>

            <div class="tabela">
                <table>
                    <thead class="cabecalho">
                        <tr>
                            <th class="col id">ID</th>
                            <th class="col descricao-title">DESCRIÇÃO</th>
                            <th class="col status">STATUS</th>
                        </tr>
                    </thead>
                    <tbody class="chamados">
                    <?php foreach ($chamados as $index => $chamado): ?>
                        <tr class="openEditModal">
                            <td class="<?= $index % 2 !== 0 ? 'impar-bg' : '' ?>"><?php echo $chamado['idChamado']; ?></td>
                            <td class="<?= $index % 2 !== 0 ? 'impar-bg' : '' ?>"><?php echo htmlspecialchars($chamado['nome']); ?></td>
                            <td class="<?= $index % 2 !== 0 ? 'impar-bg' : '' ?>"><?php echo htmlspecialchars($chamado['status']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="novo-cham">
                <button class="openCriaModal" value="novo-chamado" id="btnChamado">NOVO CHAMADO</button>
            </div>
        </div>
    </section>

    <?php include("../include/modalEditaChamado.php") ?>
    <?php include("../include/modalCriaChamado.php") ?>

    <footer class="footer">
        <p>@COPY</p>
    </footer>    

    <script src="../JS/script.js?v=<?php echo time(); ?>"></script>
</body>
</html>
