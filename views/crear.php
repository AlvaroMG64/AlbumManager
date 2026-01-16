<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Álbum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">

            <h3 class="card-title mb-4">Nuevo Álbum</h3>

            <form method="POST" class="needs-validation" novalidate>

                <div class="mb-3">
                    <label class="form-label">Título</label>
                    <input type="text" name="titulo" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Artista</label>
                    <input type="text" name="artista" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Género</label>
                    <input type="text" name="genero" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha de lanzamiento</label>
                    <input type="date" name="fecha_lanzamiento" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Número de canciones</label>
                    <input type="number" name="num_canciones" class="form-control" min="1" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Contenido explícito</label>

                    <div class="border rounded p-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="es_explicit" id="explicit_no" value="0" checked>
                            <label class="form-check-label text-success fw-semibold" for="explicit_no">
                                No
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="es_explicit" id="explicit_yes" value="1">
                            <label class="form-check-label text-danger fw-semibold" for="explicit_yes">
                                Sí
                            </label>
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary">Guardar</button>
                <a href="index.php?action=index" class="btn btn-secondary">Cancelar</a>

            </form>

        </div>
    </div>
</div>

<script>
(() => {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
            form.classList.add('was-validated')
        }, false)
    })
})();
</script>

<script src="public/js/validaciones_album.js" defer></script>

</body>
</html>