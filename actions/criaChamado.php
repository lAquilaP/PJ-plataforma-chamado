<?php
require_once '../factory/conexao.php';

session_start();
$conn = new Caminho;
$conexao = $conn->getConn();

$idChamado = $_POST['id'] ?? null;
$idOps = $_POST['idOps'] ?? null;
$nome = $_POST['nome'] ?? null;
$descricao = $_POST['descricao'] ?? null;

if (!$idChamado || !$idOps || !$nome || !$descricao) {
    echo "Preencha todos os campos obrigatórios.";
    exit;
}

$status = 'ativo';
$created_at = date('Y-m-d H:i:s');

try {
    $sql = "INSERT INTO chamados (idChamado, idOps, nome, status, created_at, descricao)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$idChamado, $idOps, $nome, $status, $created_at, $descricao]);

    header("Location: ../view/homeCliente.php?msg=criado");
    exit;
} catch (PDOException $e) {
    echo "Erro ao criar chamado: " . $e->getMessage();
}
