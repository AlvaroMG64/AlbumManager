<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel de control</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<style>
body{
    font-family:Roboto;
    background:#f5f7fa
}
.card{
    max-width:500px;
    margin:80px auto;
    padding:30px;
    border-radius:15px
}
</style>
</head>
<body>

<div class="card shadow text-center">

    <h3 class="mb-3">Panel de control</h3>

    <p class="mb-1">
        <strong><?= $_SESSION['nombre'] . ' ' . $_SESSION['apellidos'] ?></strong>
    </p>

    <p class="text-muted mb-1">
        Usuario: <?= $_SESSION['idusuario'] ?>
    </p>

    <p class="text-muted mb-4">
        Sesión iniciada a las
        <?= date('H:i:s', $_SESSION['login_time']) ?>
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