<?php
$serverName = "localhost"; 
$database = "MiSitioWeb";
$username = "SANGYONG/PC"; 

try {
    $conn = new PDO("sqlsrv:server=$serverName;Database=$MiSitioWeb", $SANGYONG, $linkin2);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexión fallida: " . $e->getMessage());
}
?>
