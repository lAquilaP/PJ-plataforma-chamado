<div id="myModal" class="modal">
    <div class="modal-content">
        <div class="headline">
            <h1>Chamado: </h1>
            <span class="close">&times;</span>
        </div>
        <form method="POST" class="form-chamado" action="../actions/atualizaChamado.php">
            <div class="campo-id">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id" size="5" value="<?= isset($_GET['id']) ? $_GET['id'] : ''; ?>" readonly required>
            </div>
            <div class="campo-operador">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" size="30" value="<?= isset($chamado['nome']) ? $chamado['nome'] : ''; ?>" readonly required>
            </div>
            <div class="campo-cod">
                <label for="cod-ops">Código do Operador:</label>
                <input type="text" id="cod-ops" name="cod-ops" value="<?= isset($chamado['idOps']) ? $chamado['idOps'] : ''; ?>" readonly required>
            </div>
            <div class="campo-desc">
                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" readonly required><?= isset($chamado['descricao']) ? $chamado['descricao'] : ''; ?></textarea>
            </div>
            <div class="campo-status">
                <label for="status" id="title-form-status">Status: </label>
                <div class="options">
                    <label class="status-opcoes azul">
                        <input type="radio" name="status" value="em_andamento" <?= isset($chamado['status']) && $chamado['status'] == "em_andamento" ? "checked" : "" ?>> Em Aberto
                    </label>
                    <label class="status-opcoes verde">
                        <input type="radio" name="status" value="concluido" <?= isset($chamado['status']) && $chamado['status'] == "concluido" ? "checked" : "" ?>> Concluído
                    </label>
                    <label class="status-opcoes vermelho">
                        <input type="radio" name="status" value="cancelado" <?= isset($chamado['status']) && $chamado['status'] == "cancelado" ? "checked" : "" ?>> Cancelado
                    </label>
                </div>
            </div>
            <div class="secao-btn">
                <button type="submit" value="enviar" class="btn-modal">CONCLUIR</button>
            </div>
        </form>
    </div>
</div>
