<?php 
// Solo incluir validar.php cuando el formulario se haya enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'validar.php';
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contacto</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <h2>Formulario de contacto</h2>

        <form action="contacto.php" class="formulario" method="POST" id="form">
            <fieldset>
                
                <div class="campos">
                    <div class="campo-nombre">
                        <label for="nombre"><p>Nombre:</p></label>
                        <input type="text" placeholder="Introduce tu nombre" id="nombre" name="nombre" value="<?php echo htmlspecialchars($_POST['nombre'] ?? ''); ?>">
                        <span class="mensaje-error">
                            <?php echo $errores['nombre']  ?? ''; ?>
                        </span>
                    </div>
                    <div class="campo-apellidos">
                        <label for="apellidos"><p>Apellidos:</p></label>
                        <input type="text" placeholder="Introduce tus apellidos" id="apellidos" name="apellidos" value="<?php echo htmlspecialchars($_POST['apellidos'] ?? ''); ?>">
                        <span class="mensaje-error">
                            <?php echo $errores['apellidos']  ?? ''; ?>
                        </span>
                    </div>
                    <div class="campo-email">
                        <label for="email"><p>Email:</p></label>
                        <input type="email" placeholder="Tu email" name="email" id="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                        <span class="mensaje-error">
                            <?php echo $errores['email']  ?? ''; ?>
                        </span>
                    </div>
                    <div class="campo-mensaje">
                        <label for="mensaje"><p>Mensaje:</p></label>
                        <textarea name="mensaje" id="mensaje" placeholder="Introduce tu mensaje"></textarea>
                        
                    </div>
                </div>
            </fieldset>
            <div class="btn">
            <button type="submit" class="btn-enviar">Enviar</button>
            </div>
        </form>
    </main>
    <?php include 'footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>