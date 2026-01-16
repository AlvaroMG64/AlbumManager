<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel de control</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<style>
body{font-family:Roboto;background:#f5f7fa}
.card{max-width:500px;margin:80px auto;padding:30px;border-radius:15px}
</style>
</head>
<body>

<div class="card shadow text-center">
<h3>Panel de control</h3>
<p>Bienvenido <strong><?= $_SESSION['idusuario'] ?></strong></p>
<a href="index.php?action=index" class="btn btn-primary mb-2">Gestionar álbumes</a>
<a href="index.php?action=logout" class="btn btn-danger">Cerrar sesión</a>
</div>

</body>
</html>