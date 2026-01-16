document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");
    if (!form) return;

    form.addEventListener("submit", e => {
        const usuario = document.getElementById("identificador").value.trim();
        const password = document.getElementById("password").value.trim();

        const usuarioRegex = /^[A-Za-z0-9_]{3,50}$/;
        const passwordRegex = /^.{3,50}$/;

        let msg = "";
        if (!usuarioRegex.test(usuario)) msg = "Usuario inválido (3–50 caracteres)";
        else if (!passwordRegex.test(password)) msg = "Contraseña inválida (3–50 caracteres)";

        if (msg) {
            e.preventDefault();
            alert(msg);
        }
    });
});