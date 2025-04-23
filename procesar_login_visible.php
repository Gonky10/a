<?php
// Iniciamos sesión para guardar el login si es correcto
session_start();

// Incluimos la lógica real que está en la ruta protegida
require_once __DIR__ . '/../admin_logic/admin/process/procesar_login.php';
