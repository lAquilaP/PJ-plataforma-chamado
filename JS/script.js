document.addEventListener('DOMContentLoaded', () => {
    const modalEdit = document.getElementById("myModal");
    const modalCria = document.getElementById("modalCriaChamado");
    const closeBtns = document.querySelectorAll(".close");
    const openEditButtons = document.querySelectorAll(".openEditModal");
    const openCriaButtons = document.querySelectorAll(".openCriaModal");

    if (modalEdit && closeBtns.length) {
        openEditButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                modalEdit.style.display = "block";
                const id = btn.getAttribute('data-id');
                const nome = btn.getAttribute('data-nome');
                const descricao = btn.getAttribute('data-descricao');
                const status = btn.getAttribute('data-status');
                document.getElementById('id').value = id;
                document.getElementById('nome').value = nome;
                document.getElementById('descricao').value = descricao;
                document.querySelectorAll('input[name="status"]').forEach(radio => {
                    radio.checked = (radio.value === status);
                });
            });
        });

        if (modalCria) {
            openCriaButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    modalCria.style.display = "block";
                });
            });
        }

        closeBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const modal = btn.closest(".modal");
                if (modal) modal.style.display = "none";
            });
        });

        window.addEventListener('click', (event) => {
            if (event.target === modalEdit) {
                modalEdit.style.display = "none";
            }
            if (modalCria && event.target === modalCria) {
                modalCria.style.display = "none";
            }
        });
    } else {
        console.error("Modal de edição ou botões de fechar não encontrados.");
    }
});
