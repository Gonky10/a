<?php
session_start();
$conn = new mysqli("45.227.160.40", "uv1949", "Rojocapo1984.", "gp_imagenes");
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$usuario = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
        $_SESSION['usuario_id'] = $row['id'];
        $_SESSION['usuario'] = $usuario;

        header("Location: ../views/agregar_productos.php");
        exit;
    } else {
        header("Location: ../views/login_panel.php?error=1");
        exit;
    }
} else {
    header("Location: ../views/login_panel.php?error=1");
    exit;
}
