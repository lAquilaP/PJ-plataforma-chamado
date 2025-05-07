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
            <h1 id="titulo-home-entrada">Bem vindo, <span><?php echo "ADM" ?></span>!</h1>
            <ul class="nav">
                <li><a href="registrarADM.php">Registrar</a></li>
                <li><a href="#">Sair</a></li>
            </ul>
        </div>
    </header> 
    <section class="main">
        <div class="container">
            <form action="" method="get" class="input-pesquisa">
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
                            <th class="col id ">ID</th>
                            <th class="col nome ">NOME DO CLIENTE</th>
                            <th class="col status">STATUS</th>
                        </tr>
                    </thead>
                    <tbody class="chamados">
                        
                        <tr class="openEditModal">
                                <td class=" impar-bg"><?="id"?></td>
                                <td class=" impar-bg"><?="nome"?></td>
                                <td class="impar-bg"><?="status"?></td>                            
                        </tr>
                        <tr class="openEditModal">
                            <td class=""><?="id"?></td>
                            <td class=""><?="nome"?></td>
                            <td class=""><?="status"?></td>
                        </tr>
                        <tr class="openEditModal">
                            <td class="impar-bg"><?="id"?></td>
                            <td class="impar-bg"><?="nome"?></td>
                            <td class="impar-bg"><?="status"?></td>
                        </tr>
                        <tr class="openEditModal">
                            <td class=""><?="id"?></td>
                            <td class=""><?="nome"?></td>
                            <td class=""><?="status"?></td>
                        </tr>
                        <tr class="openEditModal">
                            <td class="impar-bg"><?="id"?></td>
                            <td class="impar-bg"><?="nome"?></td>
                            <td class="impar-bg"><?="status"?></td>
                        </tr>
                        <tr class="openEditModal">
                            <td class=""><?="id"?></td>
                            <td class=""><?="nome"?></td>
                            <td class=""><?="status"?></td>
                        </tr>
                        <tr class="openEditModal">
                            <td class=" impar-bg"><?="id"?></td>
                            <td class=" impar-bg"><?="nome"?></td>
                            <td class="impar-bg"><?="status"?></td>
                        </tr>
                        <tr class="openEditModal">
                            <td class=""><?="id"?></td>
                            <td class=""><?="nome"?></td>
                            <td class=""><?="status"?></td>
                        </tr>
                        <tr class="openEditModal">
                            <td class=" impar-bg"><?="id"?></td>
                            <td class=" impar-bg"><?="nome"?></td>
                            <td class="impar-bg"><?="status"?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <?php include("../include/modalBase.php") ?>
    <footer class="footer">
        <p>@COPY</p>
    </footer>    
    <script src="../JS/script.js?v=<?php echo time(); ?>"></script>


</body>
</html>