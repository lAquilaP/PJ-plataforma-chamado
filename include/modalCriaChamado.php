<?php if (session_status() !== PHP_SESSION_ACTIVE) session_start(); ?>

<div id="modalCriaChamado" class="modal">
    <div class="modal-content">
        <div class="headline">
            <h1>Chamado: </h1>
            <span class="close">&times;</span>
        </div>
        <form method="POST" class="form-chamado" action="../actions/criaChamado.php">
            <div class="campo-id">
                <label for="id">ID do Chamado:</label>
                <input type="text" id="id" name="id" size="4" value="<?= random_int(1000,9999) ?>" required>
            </div>
            <div class="campo-operador">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" size="30" value="<?= htmlspecialchars($_SESSION['nome'] ?? '') ?>" required>
            </div>
            <div class="campo-cod">
                <label for="idOps">Código do Operador:</label>
                <input type="text" id="idOps" name="idOps" value="<?= htmlspecialchars($_SESSION['idOps'] ?? '') ?>" required>
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
