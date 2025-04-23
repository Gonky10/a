<?php
require_once '../connection_adm.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad = (int)$_POST['cantidad'];
$tipo = $_POST['type'];

$imagenes = [];

$upload_dir = '../img/';
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0755, true);
}

$imagenes = [];

for ($i = 1; $i <= 3; $i++) {
    $campo = "imagen$i";
    if (!empty($_FILES[$campo]['name'])) {
        $nombreArchivo = time() . "_" . $campo . "_" . basename($_FILES[$campo]['name']);
        $ruta = $upload_dir . $nombreArchivo;
        $ruta_guardada = 'admin/img/' . $nombreArchivo;

        $tipoPermitido = ['image/jpeg', 'image/png', 'image/webp'];
        if (in_array($_FILES[$campo]['type'], $tipoPermitido)) {
            if (move_uploaded_file($_FILES[$campo]['tmp_name'], $ruta)) {
                $imagenes[] = $ruta_guardada;
            } else {
                $imagenes[] = null;
            }
        } else {
            $imagenes[] = null;
        }
    } else {
        $imagenes[] = null;
    }
}


// Insertar en la base de datos
$stmt = $conn->prepare("INSERT INTO productos (nombre, descripcion, cantidad, imagen1, imagen2, imagen3, type_) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssissss", $nombre, $descripcion, $cantidad, $imagenes[0], $imagenes[1], $imagenes[2], $tipo);
$stmt->execute();
$stmt->close();

header("Location: ../views/agregar_productos.php");
exit;
