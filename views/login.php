<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<style>
body{
    font-family: Roboto, sans-serif;
    background: #f5f7fa;
}
.card{
    max-width: 400px;
    margin: 80px auto;
    padding: 30px;
    border-radius: 15px;
}
label{
    font-weight: 500;
}
</style>
</head>

<body>

<div class="card shadow">
    <h3 class="text-center mb-4">Iniciar sesión</h3>

    <?php if (!empty($_SESSION['error'])): ?>
        <div class="alert alert-danger">
            <?= $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>

    <form method="post" action="index.php?action=authenticate">

        <!-- CSRF -->
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?? '' ?>">

        <!-- Usuario -->
        <div class="mb-3">
            <label for="identificador" class="form-label">Usuario</label>
            <input
                type="text"
                id="identificador"
                name="identificador"
                class="form-control"
                placeholder="Usuario"
                required>
        </div>

        <!-- Contraseña -->
        <div class="mb-4">
            <label for="password" class="form-label">Contraseña</label>
            <input
                type="password"
                id="password"
                name="password"
                class="form-control"
                placeholder="Contraseña"
                required>
        </div>

        <button class="btn btn-primary w-100">
            Entrar
        </button>
    </form>
</div>

<script src="public/js/validaciones_usuario.js" defer></script>

</body>
</html>