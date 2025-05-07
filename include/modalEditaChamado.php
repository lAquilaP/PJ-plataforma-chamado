<?php 
$statusAtual = "cancelado";
?>


<div id="myModal" class="modal">
        <div class="modal-content">
            <div class="headline">
                <h1>Chamado: </h1>
                <span class="close">&times;</span>
            </div>
            <form method="POST" class="form-chamado" action="abrirChamado.php">
                <div class="campo-id">
                    <label for="id">ID:</label>
                    <input type="text" id="id" name="id" size="5" value="<?= '=+id'?>" readonly required>
                </div>
                <div class="campo-operador">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" size="80" value="<?= '=+nome'?>" readonly required>
                </div>
                <div class="campo-cod">
                    <label for="cod-ops">Código do Operador:</label>
                    <input type="text" id="cod-ops" name="cod-ops" size="8" value="<?= '=+code'?>" readonly required>
                </div>
                <div class="campo-desc">
                    <label for="descricao">Descrição:</label>
                    <textarea id="descricao" name="descricao" required><?= "=+desk" ?></textarea>
                    </div>
                <div class="campo-status">
                    <label for="status" id="title-form-status">Status: </label>
                    <div class="options">
                        <label class="status-opcoes azul">
                            <input type="radio" name="status" value="em_andamento" <?= $statusAtual == "em_andamento" ? "checked" : "disabled" ?>> Em Aberto
                        </label>
                        <label class="status-opcoes verde">
                            <input type="radio" name="status" value="concluido" <?= $statusAtual == "concluido" ? "checked" : "disabled" ?>> Concluído
                        </label>
                        <label class="status-opcoes vermelho">
                            <input type="radio" name="status" value="cancelado" <?= $statusAtual == "cancelado" ? "checked" : "disabled" ?>> Cancelado
                        </label>
                    </div>
                </div>
                <div class="secao-btn">
                    <button type="" value="cancelar" id="cancelar" class="btn-modal">CANCELAR</button>
                </div>
                <div class="secao-btn">
                    <button type="submit" value="enviar" class="btn-modal">CONCLUIR</button>
                </div>
            </form>
        </div>
    </div>

</div>