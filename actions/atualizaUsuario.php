<?php
require_once '../factory/conexao.php';

$conn = new Caminho;
$conexao = $conn->getConn();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['idOps'] ?? null;
    $nome = $_POST['nome'] ?? null;
    $email = $_POST['email'] ?? null;
    $senha = $_POST['senha'] ?? null;
    $classificacao = $_POST['classe'] ?? null;
    if ($classificacao === 'tec') {
        $classificacao = 'adm';
    }
    if (isset($_POST['delete']) && $id) {
        $stmt = $conexao->prepare("DELETE FROM usuarios WHERE idOps = ?");
        $stmt->execute([$id]);
        header("Location: ../view/registrarADM.php?msg=excluido");
        exit;
    }

    if (isset($_POST['salvar']) && $id) {
        $stmt = $conexao->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ?, classe = ? WHERE idOps = ?");
        $stmt->execute([$nome, $email, $senha, $classificacao, $id]);
        header("Location: ../view/registrarADM.php?msg=atualizado");
        exit;
    }
} else {
    header("Location: ../view/registrarADM.php?msg=erro");
    exit;
}
?>

