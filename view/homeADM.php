<?php
session_start();
require_once "../factory/conexao.php";

if (!isset($_SESSION['idOps']) || $_SESSION['classe'] !== 'adm') {
    header("Location: login.php");
    exit;
}

$conn = new Caminho;
$conexao = $conn->getConn();

$filtro = $_GET['filtro'] ?? '';

$query = "SELECT * FROM chamados";

switch (strtoupper($filtro)) {
    case "MAIS RECENTES":
        $query .= " ORDER BY created_at DESC";
        break;
    case "MENOS RECENTES":
        $query .= " ORDER BY created_at ASC";
        break;
    case "ATIVOS":
        $query .= " WHERE status = 'em_andamento'";
        break;
    case "CANCELADOS":
        $query .= " WHERE status = 'cancelado'";
        break;
    case "CONCLUÍDOS":
        $query .= " WHERE status = 'concluido'";
        break;
}

$stmt = $conexao->prepare($query);
$stmt->execute();
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
</head>
<body>
    <header class="header">
        <div class="container">
            <h1 id="titulo-home-entrada">Bem vindo, <span><?php echo htmlspecialchars($_SESSION['nome']); ?></span>!</h1>
            <ul class="nav">
                <li><a href="registrarADM.php">Registrar</a></li>
                <li><a href="../actions/logout.php">Sair</a></li>
            </ul>
        </div>
    </header> 
    <section class="main">
        <div class="container">
            <form action="../actions/procuraChamado.php" method="get" class="input-pesquisa"> 
                <input type="text" placeholder="Digite o ID do chamado..." name="pesquisa" id="pesquisa">
            </form>
            <div class="head-main">
                <h1 class="title">Todos Chamados:</h1>
                <form action="" method="get" class="campo-filtro">
                    <input type="text" id="filtro" name="filtro" list="filtro-opcoes" placeholder="FILTRO: ">

                    <datalist id="filtro-opcoes">
                        <option value="MAIS RECENTES">
                        <option value="MENOS RECENTES">
                        <option value="ATIVOS">
                        <option value="CANCELADOS">
                        <option value="CONCLUÍDOS">
                    </datalist>
                </form>
            </div>
            <div class="tabela">
                <table>
                    <thead class="cabecalho">
                        <tr>
                            <th class="col id">ID</th>
                            <th class="col nome">NOME DO CLIENTE</th>
                            <th class="col status">STATUS</th>
                        </tr>
                    </thead>
                    <tbody class="chamados">
                        <?php foreach ($chamados as $chamado): ?>
                            <tr class="openEditModal">
                                <td class="<?= $chamado['idChamado'] % 2 === 0 ? '' : 'impar-bg' ?>"><?php echo $chamado['idChamado']; ?></td>
                                <td class="<?= $chamado['idChamado'] % 2 === 0 ? '' : 'impar-bg' ?>"><?php echo htmlspecialchars($chamado['nome']); ?></td>
                                <td class="<?= $chamado['idChamado'] % 2 === 0 ? '' : 'impar-bg' ?>"><?php echo htmlspecialchars($chamado['status']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <?php include("../include/modalBase.php"); ?>
    <footer class="footer">
        <p>@COPY</p>
    </footer>    
    <script src="../JS/script.js?v=<?php echo time(); ?>"></script>
</body>
</html>
