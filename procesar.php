<?php
// Verifica si se han recibido datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura los valores de los campos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $password = $_POST["password"];

    // Ejemplo de cómo puedes mostrar los datos capturados (excepto la contraseña)
    echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
    echo "Correo Electrónico: " . htmlspecialchars($email) . "<br>";
    echo "Teléfono: " . htmlspecialchars($telefono) . "<br>";

    // Aquí deberías realizar el procesamiento seguro de la contraseña (NO la muestres ni almacenes en texto plano)

    // Redirige al usuario a una página de confirmación o a donde desees
    header("Location: confirmacion.php");
    exit; // asegúrate de terminar el script después de la redirección
} else {
    // Si no se ha recibido una solicitud POST, muestra un mensaje de error o redirige a otra página
    echo "Error: Acceso no válido";
}
?>
