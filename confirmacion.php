<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Envío</title>
</head>
<body>
    <h2>¡Gracias por enviar tus datos!</h2>
    
    <p>Los siguientes datos fueron recibidos y procesados correctamente:</p>
    
    <ul>
        <li><strong>Nombre:</strong> <?php echo htmlspecialchars($_POST["nombre"]); ?></li>
        <li><strong>Correo Electrónico:</strong> <?php echo htmlspecialchars($_POST["email"]); ?></li>
        <li><strong>Teléfono:</strong> <?php echo htmlspecialchars($_POST["telefono"]); ?></li>
    </ul>
    
    <!-- Puedes agregar más contenido o enlaces aquí -->
    
    <p><a href="formulario.php">Volver al Formulario</a></p>
</body>
</html>