<div id="modalCriaChamado" class="modal">
    <div class="modal-content form-user">
        <div class="headline">
            <h1>Editar: </h1>
            <span class="close">&times;</span>
        </div>
        <form method="POST" class="form-chamado" action="../actions/criaUsuario.php">
            <div class="campo-id">
                <label for="cod-ops">Código do Operador:</label>
                <input type="text" id="idOps" name="idOps" value="<?= "Ops" . random_int(10000, 99999)?>" size="8" >
            </div>
            <div class="campo-operador">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" size="80" required>
            </div>
            <div class="campo-email">
                <label for="email-criar">Email:</label>
                <input type="email" id="email-criar" name="email" size="80" required>
            </div>
            <div class="campo-senha">
                <label for="senha-criar">Senha:</label>
                <input type="password" id="senha-criar" name="senha" maxlength="12" size="8" required>
            </div>

            <div class="campo-classificacao">
                <label for="classificacao" id="title-form-classificacao">Classificação: </label>
                <div class="options">
                    <label class="classificacao-opcoes azul">
                        <input type="radio" name="classificacao" required value="cliente"> Cliente
                    </label>
                    <label class="classificacao-opcoes verde">
                        <input type="radio" name="classificacao" required value="tec"> Técnico
                    </label>
                </div>
            </div>
            <div class="footer-modal-line">
                <div class="secao-btn">
                    <button type="submit" value="enviar" class="btn-modal">SALVAR</button>
                </div>
            </div>
        </form>
    </div>
</div>
