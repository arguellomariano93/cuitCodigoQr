<?php
// Obtener los parámetros GET
$cuit = $_GET['cuit'];
$timestamp = $_GET['t'];
$randomCode = $_GET['rc'];
$filename = $_GET['fn'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Información de Parámetros</title>
    <!-- Incluye el CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Incluye SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.15/dist/sweetalert2.min.css">
</head>
<body>  

    <div class="container mt-5">
        <div id="table-container" style="display:block;">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Información de Parámetros</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Parámetro</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CUIT</td>
                                <td><?php echo htmlspecialchars($cuit); ?></td>
                            </tr>
                            <tr>
                                <td>Timestamp</td>
                                <td><?php echo htmlspecialchars($timestamp); ?></td>
                            </tr>
                            <tr>
                                <td>Código Random</td>
                                <td><?php echo htmlspecialchars($randomCode); ?></td>
                            </tr>
                            <tr>
                                <td>Path</td>
                                <td><?php echo htmlspecialchars($filename); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center mt-3">
                        <button onclick="history.back()" class="btn btn-secondary">Volver</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Incluye el JavaScript de Bootstrap y sus dependencias -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
