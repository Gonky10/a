<?php
$host = "45.227.160.40";
$usuario = "uv1949";
$password = "Rojocapo1984.";
$base = "gp_imagenes";

$conn = new mysqli($host, $usuario, $password, $base);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
