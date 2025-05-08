<?php
require_once '../factory/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];

    $conn = new Caminho;
    $conexao = $conn->getConn();

    $stmt = $conexao->prepare("UPDATE chamados SET descricao = ?, status = ? WHERE idChamado = ?");
    $stmt->execute([$descricao, $status, $id]);

    header("Location: ../view/homeCliente.php"); 
}
?>

