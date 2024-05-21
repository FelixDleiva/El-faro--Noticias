<?php
include 'config.php';

try {
    $stmt = $conn->query("SELECT Id, Nombre, Email, FechaRegistro FROM Usuarios");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<p>ID: " . $row["Id"] . " - Nombre: " . htmlspecialchars($row["Nombre"]) . " - Email: " . htmlspecialchars($row["Email"]) . " - Fecha de Registro: " . $row["FechaRegistro"] . "</p>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>