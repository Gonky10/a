<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$img = $_GET['img'] ?? '';
$img = basename($img);

$ruta = __DIR__ . '/../../admin_logic/admin/img/' . $img;

if (!file_exists($ruta)) {
    http_response_code(404);
    echo "Imagen no encontrada: $ruta";
    exit;
}

if (!is_readable($ruta)) {
    http_response_code(403);
    echo "El archivo no se puede leer: $ruta";
    exit;
}

// Determinar el tipo MIME de forma segura
$extension = strtolower(pathinfo($ruta, PATHINFO_EXTENSION));

switch ($extension) {
    case 'jpg':
    case 'jpeg':
        $mime = 'image/jpeg';
        break;
    case 'png':
        $mime = 'image/png';
        break;
    case 'gif':
        $mime = 'image/gif';
        break;
    case 'webp':
        $mime = 'image/webp';
        break;
    default:
        $mime = 'application/octet-stream';
        break;
}

header("Content-Type: $mime");
readfile($ruta);
exit;
