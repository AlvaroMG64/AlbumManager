<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Álbum</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f7fa;
            padding: 40px 20px;
        }

        .card-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px 25px;
            border-radius: 15px;
            background-color: #ffffff;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
        }

        h1 {
            font-weight: 500;
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .form-label {
            font-weight: 500;
        }

        .btn-submit {
            width: 100%;
        }

        .form-check-label {
            font-weight: 400;
        }
    </style>
</head>
<body>

<div class="card card-form">
    <h1>Editar Álbum</h1>

    <form action="index.php?action=edit" method="post">
        <input type="hidden" name="idAlbum" value="<?= $album_data->idAlbum ?>">

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="<?= htmlspecialchars($album_data->titulo) ?>" required>
        </div>

        <div class="mb-3">
            <label for="artista" class="form-label">Artista</label>
            <input type="text" name="artista" id="artista" class="form-control" value="<?= htmlspecialchars($album_data->artista) ?>" required>
        </div>

        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <input type="text" name="genero" id="genero" class="form-control" value="<?= htmlspecialchars($album_data->genero) ?>" required>
        </div>

        <div class="mb-3">
            <label for="fecha_lanzamiento" class="form-label">Fecha de lanzamiento</label>
            <input type="date" name="fecha_lanzamiento" id="fecha_lanzamiento" class="form-control" value="<?= $album_data->fecha_lanzamiento ?>" required>
        </div>

        <div class="mb-3">
            <label for="num_canciones" class="form-label">Número de canciones</label>
            <input type="number" name="num_canciones" id="num_canciones" class="form-control" value="<?= $album_data->num_canciones ?>" min="1" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Contenido explícito</label><br>

            <div class="form-check form-check-inline">
                <input class="form-check-input"
                    type="radio"
                    name="es_explicit"
                    id="explicit_no"
                    value="0"
                    <?= $album_data->es_explicit == 0 ? 'checked' : '' ?>>
                <label class="form-check-label text-success" for="explicit_no">
                    No
                </label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input"
                    type="radio"
                    name="es_explicit"
                    id="explicit_yes"
                    value="1"
                    <?= $album_data->es_explicit == 1 ? 'checked' : '' ?>>
                <label class="form-check-label text-danger" for="explicit_yes">
                    Sí
                </label>
            </div>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-warning btn-submit">
                Guardar Cambios
            </button>

            <a href="index.php?action=index" class="btn btn-secondary">
                Cancelar
            </a>
        </div>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="public/js/validaciones_album.js" defer></script>

</body>
</html>