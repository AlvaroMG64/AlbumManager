<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<style>
body{font-family:Roboto;background:#f5f7fa}
.card{max-width:400px;margin:80px auto;padding:30px;border-radius:15px}
</style>
</head>
<body>

<div class="card shadow">
<h3 class="text-center mb-4">Iniciar sesión</h3>

<?php if (!empty($_SESSION['error'])): ?>
<div class="alert alert-danger"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
<?php endif; ?>

<form method="post" action="index.php?action=authenticate">
<input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?? '' ?>">
<input class="form-control mb-3" name="identificador" placeholder="Usuario" required>
<input type="password" class="form-control mb-3" name="password" placeholder="Contraseña" required>
<button class="btn btn-primary w-100">Entrar</button>
</form>
</div>

<script src="public/js/validaciones_usuario.js" defer></script>
</body>
</html>