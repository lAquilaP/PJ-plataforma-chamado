
<div id="modalCriaChamado" class="modal">
        <div class="modal-content">
            <div class="headline">
                <h1>Chamado: </h1>
                <span class="close">&times;</span>
            </div>
            <form method="POST" class="form-chamado" action="atualizaChamado.php">
                <div class="campo-id">
                    <label for="id">ID:</label>
                    <input type="text" id="id" name="id" size="5" value="<?= '=+id'?>" readonly required>
                </div>
                <div class="campo-operador">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" size="30" value="<?= '=+nome'?>" readonly required>
                </div>
                <div class="campo-cod">
                    <label for="cod-ops">Código do Operador:</label>
                    <input type="text" id="cod-ops" name="cod-ops" value="<?= '=+code'?>" readonly required>
                </div>
                <div class="campo-desc">
                    <label for="descricao">Descrição:</label>
                    <textarea id="descricao" name="descricao" required></textarea>
                </div>
                <div class="secao-btn">
                    <button type="submit" value="enviar" class="btn-modal">CONCLUIR</button>
                </div>
            </form>
        </div>
    </div>
