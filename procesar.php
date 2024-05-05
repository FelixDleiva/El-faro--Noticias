<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = $_POST["password"];

   $header .="Content-Type: text/plain";

    
    header("Location: confirmacion.php");
    exit;
} else {
    echo "Error: Acceso no válido";
}
