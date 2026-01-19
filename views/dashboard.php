<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel de control</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<style>
    body {
        font-family: Roboto, sans-serif;
        background: #f5f7fa;
    }
    .card {
        max-width: 600px;
        margin: 80px auto;
        padding: 35px;
        border-radius: 18px;
    }
    .info-label {
        font-weight: 500;
        color: #6c757d;
    }
</style>
</head>

<body>

<div class="card shadow text-center">

    <h3 class="mb-4">Panel de control</h3>

    <p class="mb-1">
        <span class="info-label">Usuario:</span><br>
        <strong><?= htmlspecialchars($_SESSION['idusuario']) ?></strong>
    </p>

    <p class="mb-1 mt-3">
        <span class="info-label">Nombre:</span><br>
        <strong>
            <?= htmlspecialchars($_SESSION['nombre']) ?>
            <?= htmlspecialchars($_SESSION['apellidos']) ?>
        </strong>
    </p>

    <p class="mb-4 mt-3">
        <span class="info-label">Inicio de sesión:</span><br>
        <strong><?= $_SESSION['login_time'] ?></strong>
    </p>

    <div class="d-grid gap-2">
        <a href="index.php?action=index" class="btn btn-primary">
            Gestionar álbumes
        </a>

        <a href="index.php?action=logout" class="btn btn-danger">
            Cerrar sesión
        </a>
    </div>

</div>

</body>
</html>