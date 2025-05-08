<?php
require_once '../factory/conexao.php';

$conn = new Caminho;
$conexao = $conn->getConn();

if (isset($_GET['id'])) {
    $idChamado = $_GET['id'];

    $query = "SELECT * FROM chamados WHERE idChamado = :idChamado";
    $stmt = $conexao->prepare($query);
    $stmt->bindParam(':idChamado', $idChamado);
    $stmt->execute();

    $chamado = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($chamado) {
        $statusAtual = $chamado['status'];

        include("../view/homeADM.php"); 
    } else {
        echo "Chamado não encontrado.";
        exit;
    }
} else {
    echo "ID do chamado não fornecido.";
    exit;
}
