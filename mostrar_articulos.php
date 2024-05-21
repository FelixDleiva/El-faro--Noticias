<?php
include 'config.php';

try {
    $stmt = $conn->query("SELECT Id, Titulo, Contenido, FechaPublicacion FROM Articulos");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<h2>" . htmlspecialchars($row["Titulo"]) . "</h2>";
        echo "<p>" . htmlspecialchars($row["Contenido"]) . "</p>";
        echo "<p><em>" . $row["FechaPublicacion"] . "</em></p>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>