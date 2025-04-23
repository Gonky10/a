<?php
// Iniciamos sesi贸n para guardar el login si es correcto
session_start();

// Incluimos la l贸gica real que est谩 en la ruta protegida
require_once __DIR__ . '/../../admin_logic/admin/process/obtener_productos_front.php';
