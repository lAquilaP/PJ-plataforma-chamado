<?php
require_once '../factory/conexao.php';

$conn = new Caminho;
$conexao = $conn->getConn();


$idOps = $_POST['idOps'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$classificacao = $_POST['classificacao'] ?? null;

if (!$classificacao) {
    echo "Erro: classificação não foi selecionada.";
    exit;
}

if ($classificacao === 'tec') {
    $classificacao = 'adm';
}

$sql = "INSERT INTO usuarios (idOps, nome, email, senha, classe) 
        VALUES (?, ?, ?, ?, ?)";
$stmt = $conexao->prepare($sql);

if ($stmt->execute([$idOps, $nome, $email, $senha, $classificacao])) {
    header("Location: ../view/registrarADM.php?msg=sucesso");
    exit;
} else {
    echo "Erro ao cadastrar usuário.";
}
?>
