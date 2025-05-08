<div id="myModal" class="modal">
    <div class="modal-content">
        <div class="headline">
            <h1>Chamado: </h1>
            <span class="close">&times;</span>
        </div>
        <form method="POST" class="form-chamado" action="../actions/editaChamado.php">
            <div class="campo-id">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id" size="5" readonly required>
            </div>
            <div class="campo-operador">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" size="80" readonly required>
            </div>
            <div class="campo-cod">
                <label for="cod-ops">Código do Operador:</label>
                <input type="text" id="cod-ops" name="cod-ops" size="8" readonly required>
            </div>
            <div class="campo-desc">
                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" required></textarea>
            </div>
            <div class="campo-status">
                <label for="status" id="title-form-status">Status: </label>
                <div class="options">
                    <label class="status-opcoes azul">
                        <input type="radio" name="status" value="em_andamento"> Em Andamento
                    </label>

                    <label class="status-opcoes vermelho">
                        <input type="radio" name="status" value="cancelado"> Cancelado
                    </label>
                </div>
            </div>
            <div class="secao-btn">
                <button type="button" id="cancelar" class="btn-modal">CANCELAR</button>
            </div>
            <div class="secao-btn">
                <button type="submit" value="enviar" class="btn-modal">CONCLUIR</button>
            </div>
        </form>
    </div>
</div>