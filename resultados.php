<?php
session_start();
$datos = $_SESSION['datos'] ?? null;

if (!$datos) {
    header('Location: index.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Resultados formulario</title>
</head>
<body>
    <?php @include 'header.php'; ?>


    <div class="resultados" id="resultados">
    <h2>Datos Recibidos</h2>
    <p><strong>Nombre:</strong> <?= htmlspecialchars($datos['nombre']) ?></p>
    <p><strong>Apellidos:</strong> <?= htmlspecialchars($datos['apellidos']) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($datos['email']) ?></p>
    <p><strong>Mensaje:</strong> <?= nl2br(htmlspecialchars($datos['mensaje'])) ?></p>


    </div>




    <?php @include 'footer.php'; ?>
    <script src="./JS/script.js"></script>
</body>
</html>