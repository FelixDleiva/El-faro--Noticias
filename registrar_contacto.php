<?php
include 'config.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

try {
    $stmt = $conn->prepare("INSERT INTO Contacto (Nombre, Email, Mensaje) VALUES (?, ?, ?)");
    $stmt->execute([$nombre, $email, $mensaje]);
    echo "Mensaje enviado exitosamente";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>