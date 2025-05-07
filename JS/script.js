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
