document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector(".needs-validation");
    if (!form) return;

    form.addEventListener("submit", e => {
        let titulo = form.titulo.value.trim();
        let artista = form.artista.value.trim();
        let genero = form.genero.value.trim();
        let num_canciones = parseInt(form.num_canciones.value);

        let msg = "";

        if (!titulo || titulo.length < 2) msg = "Título mínimo 2 caracteres";
        else if (!artista || artista.length < 2) msg = "Artista mínimo 2 caracteres";
        else if (!genero || genero.length < 2) msg = "Género mínimo 2 caracteres";
        else if (isNaN(num_canciones) || num_canciones < 1) msg = "Número de canciones inválido";

        if (msg) {
            e.preventDefault();
            alert(msg);
        }
    });
});