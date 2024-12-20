<!DOCTYPE html>
<html>
<head>
    <title>Generar QR</title>
    <!-- Incluye el CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Generar QR</h2>
            </div>
            <div class="card-body">
                <form action="/generarQr.php" method="get">
                    <div class="form-group">
                        <label for="cuit">CUIT:</label>
                        <input type="text" class="form-control" id="cuit" name="cuit" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Incluye el JavaScript de Bootstrap y sus dependencias -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
// Agregamos la librería para generar códigos QR
require "./generarQr.php";
require "./parametroRecibido.php";
?>
