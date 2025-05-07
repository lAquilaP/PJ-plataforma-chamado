<?php 
$classificacao = "cancelado";
?>

<div id="myModal" class="modal">
        <div class="modal-content form-user">
            <div class="headline">
                <h1>Editar: </h1>
                <span class="close">&times;</span>
            </div>
            <form method="POST" class="form-chamado" action="atualizaUsuario.php">
                <div class="campo-id">
                <label for="cod-ops">Código do Operador:</label>
                <input type="text" id="cod-ops" name="cod-ops" size="8" value="<?= '=+code'?>" readonly required>
                </div>
                <div class="campo-operador">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" size="80" value="<?= '=+nome'?>"  required>
                </div>
                <div class="campo-email">
                    <label for="email">Email:</label>
                    <input type="email" id="email" size="80" value="<?= '=+email'?>"  required>
                </div>
                <div class="campo-senha">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" max-length="12" size="8" value="<?= '=+senha'?>"  required>
                </div>
                <div class="campo-classificacao">
                    <label for="classificacao" id="title-form-classificacao">Classificação: </label>
                    <div class="options">
                        <label class="classificacao-opcoes azul">
                            <input type="radio" name="classificacao" value="cliente" <?= $classificacao == "cliente" ? "checked" : " " ?>> Cliente
                        </label>
                        <label class="classificacao-opcoes verde">
                            <input type="radio" name="classificacao" value="tec"> Técnico
                        </label>
                    </div>
                </div>
                <div class="footer-modal-line">
                    <div class="secao-btn">
                        <button type="" value="delete" id="excluir" class="btn-modal">EXCLUIR</button>
                    </div>
                    <div class="secao-btn">
                        <button type="submit" value="enviar" class="btn-modal">SALVAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>