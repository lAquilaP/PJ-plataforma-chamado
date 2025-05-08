<?php
require_once "../factory/conexao.php";

$conn = new Caminho;
$conexao = $conn->getConn();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idOps = $_POST['id-ops'] ?? '';
    $nome = $_POST['nome'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $query = "SELECT * FROM usuarios WHERE idOps = :idOps AND nome = :nome";
    $stmt = $conexao->prepare($query);
    $stmt->bindParam(':idOps', $idOps);
    $stmt->bindParam(':nome', $nome);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && $senha === $usuario['senha']) {
        session_start();
        $_SESSION['idOps'] = $usuario['idOps'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['classe'] = $usuario['classe'];

        if ($usuario['classe'] === 'adm') {
            header("Location: ../view/homeADM.php");
        } else {
            header("Location: ../view/homeCliente.php");
        }
        exit;
    } else {
        echo "<script>alert('Senha incorreta.'); window.location.href='../view/login.php';</script>";

    }
} else {
    echo "<script>alert('ACESSO INVÁLIDO.'); window.location.href='../view/login.php';</script>";

}
