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

        <form action="procesar.php" class="formulario">
            <fieldset>
                
                <div class="campos">
                    <div class="campo-nombre">
                        <label for="nombre"><p>Nombre:</p></label>
                        <input type="text" placeholder="Introduce tu nombre" id="nombre" name="nombre">
                        <span class="mensaje-error"></span>
                    </div>
                    <div class="campo-apellidos">
                        <label for="apellidos"><p>Apellidos:</p></label>
                        <input type="text" placeholder="Introduce tus apellidos" id="apellidos" name="apellidos">
                        <span class="mensaje-error"></span>
                    </div>
                    <div class="campo-email">
                        <label for="email"><p>Email:</p></label>
                        <input type="email" placeholder="Tu email" name="email" id="email">
                        <span class="mensaje-error"></span>
                    </div>
                    <div class="campo-mensaje">
                        <label for="mensaje"><p>Mensaje:</p></label>
                        <textarea name="mensaje" id="mensaje" placeholder="Introduce tu mensaje"></textarea>
                        <span class="mensaje-error"></span>
                    </div>
                </div>
            </fieldset>
            <div class="btn">
            <button type="submit" class="btn-enviar">Enviar</button>
            </div>
        </form>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>