<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Álbumes</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f7fa;
            padding: 30px;
        }

        h1 {
            font-weight: 500;
            margin-bottom: 30px;
            text-align: center;
            color: #333;
        }

        .card-album {
            border-radius: 15px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card-album:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.15);
        }

        .album-explicit {
            font-weight: 500;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
        }

        .explicit-yes {
            background-color: #f8d7da;
            color: #842029;
        }

        .explicit-no {
            background-color: #d1e7dd;
            color: #0f5132;
        }

        .table td, .table th {
            vertical-align: middle;
        }

        .btn-actions {
            display: flex;
            gap: 5px;
        }

        @media (max-width: 768px) {
            .btn-actions {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Listado de Álbumes</h1>

    <div class="mb-3 text-center">
        <a href="index.php?action=create" class="btn btn-primary btn-lg">Añadir nuevo álbum</a>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach ($albumes as $album): ?>
            <div class="col">
                <div class="card card-album h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($album['titulo']) ?></h5>
                        <p class="card-text mb-1"><strong>Artista:</strong> <?= htmlspecialchars($album['artista']) ?></p>
                        <p class="card-text mb-1"><strong>Género:</strong> <?= htmlspecialchars($album['genero']) ?></p>
                        <p class="card-text mb-1"><strong>Fecha de lanzamiento:</strong> <?= date('d/m/Y', strtotime($album['fecha_lanzamiento'])) ?></p>
                        <p class="card-text mb-1"><strong>Número de canciones:</strong> <?= $album['num_canciones'] ?></p>
                        <p class="album-explicit <?= $album['es_explicit'] ? 'explicit-yes' : 'explicit-no' ?>">
                            <?= $album['es_explicit'] ? 'Explícito' : 'No explícito' ?>
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-top-0 text-center">
                        <div class="btn-actions">
                            <a href="index.php?action=edit&id=<?= $album['idAlbum'] ?>" class="btn btn-sm btn-warning w-100">Editar</a>
                            <a href="index.php?action=delete&id=<?= $album['idAlbum'] ?>" class="btn btn-sm btn-danger w-100" onclick="return confirm('¿Seguro que quieres eliminar este álbum?')">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>