<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Álbumes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Álbumes</h2>
            <a href="index.php?action=create" class="btn btn-success">Nuevo álbum</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Título</th>
                        <th>Artista</th>
                        <th>Género</th>
                        <th>Fecha</th>
                        <th>Canciones</th>
                        <th>Explícito</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($albumes as $album): ?>
                        <tr>
                            <td><?= $album['titulo'] ?></td>
                            <td><?= $album['artista'] ?></td>
                            <td><?= $album['genero'] ?></td>
                            <td><?= date('d/m/Y', strtotime($album['fecha_lanzamiento'])) ?></td>
                            <td><?= $album['num_canciones'] ?></td>
                            <td>
                                <?php if ($album['es_explicit']): ?>
                                    <span class="badge bg-danger">Explícito</span>
                                <?php else: ?>
                                    <span class="badge bg-success">No explícito</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="index.php?action=edit&id=<?= $album['idAlbum'] ?>" class="btn btn-sm btn-warning">Editar</a>
                                <a href="index.php?action=delete&id=<?= $album['idAlbum'] ?>"
                                class="btn btn-sm btn-danger"
                                onclick="return confirm('¿Seguro que deseas eliminar este álbum?')">
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>