<?php
session_start();

if (!isset($_SESSION['idOps'])) {
    header('Location: view/login.php');
    exit;
}
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>
<body>
</body>
</html>