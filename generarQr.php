<?php
// Agregamos la librería para generar códigos QR
require "phpqrcode/lib/full/qrlib.php";

// Declaramos una carpeta temporal para guardar las imágenes generadas
$dir = "temp/";

// Si no existe la carpeta la creamos
if (!file_exists($dir)) {
    mkdir($dir);
}

// Declaramos la ruta y nombre del archivo a generar
$cuit = $_GET['cuit'];
$randomCode = bin2hex(random_bytes(4)); // Contenido del código QR
$filename = $dir . $cuit . $randomCode . '.svg';
// echo $filename;
$timestamp = date('Y-m-d');
$contenido = "parametroRecibido.php?cuit=" . $cuit . "&t=" . $timestamp . "&rc=" . $randomCode . "&fn=" . $filename;

// Generamos el código SVG
$svgCode = QRcode::svg($contenido);

// Guardamos el archivo SVG en la carpeta especificada
//file_put_contents($filename, $svgCode);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Generar QR</title>
    <!-- Incluye SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.15/dist/sweetalert2.min.css">
    <!-- Incluye el CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Mostrar el modal de SweetAlert
        Swal.fire({
            title: '¡Éxito!',
            text: 'El código QR ha sido generado correctamente',
            icon: 'success',
            timer: 2000,
            showConfirmButton: false
        }).then(() => {
            // Mostrar la tabla después de que el modal se haya cerrado
            document.getElementById('table-container').style.display = 'block';
        });
    </script>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
                <h2>Generar QR</h2>
            </div>
            <div class="card-body text-center">
                <?php echo $svgCode; ?>
            </div>
            <div class="card-footer text-center">
                <a href='<?php echo $contenido; ?>' class="btn btn-primary">Ver mas información</a>
                <br><br>
                <button onclick="history.back()" class="btn btn-secondary">Volver</button>
            </div>
        </div>
    </div>

    <!-- Incluye el JavaScript de Bootstrap y sus dependencias -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
