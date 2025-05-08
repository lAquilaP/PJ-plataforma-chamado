<div id="myModal" class="modal">
    <div class="modal-content form-user">
        <div class="headline">
            <h1>Editar: </h1>
            <span class="close">&times;</span>
        </div>

        <form method="POST" class="form-chamado" action="../actions/atualizaUsuario.php">
            <div class="campo-id">
                <label for="cod-ops">Código do Operador:</label>
                <input type="text" id="idOps" name="idOps" size="8" value="" readonly required>
            </div>
            <div class="campo-operador">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" size="80" value="" required>
            </div>
            <div class="campo-email">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" size="80" value="" required>
            </div>
            <div class="campo-senha">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" maxlength="12" size="8" value="" required>
            </div>
            <div class="campo-classificacao">
                <label for="classe" id="title-form-classificacao">Classificação: </label>
                <div class="options">
                    <label class="classificacao-opcoes azul">
                        <input type="radio" name="classe" required value="cliente"> Cliente
                    </label>
                    <label class="classificacao-opcoes verde">
                        <input type="radio" name="classe" required value="tec"> Técnico
                    </label>
                </div>
            </div>

            <div class="footer-modal-line">
                <div class="secao-btn">
                    <button type="submit" name="delete" value="delete" id="excluir" class="btn-modal">EXCLUIR</button>
                </div>
                <div class="secao-btn">
                    <button type="submit" name="salvar" value="salvar" class="btn-modal">SALVAR</button>
                </div>
            </div>
        </form>
    </div>
</div>
