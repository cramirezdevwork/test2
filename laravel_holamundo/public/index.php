<?php
// Placeholder front controller for the Hola Mundo project
// This does not include the full Laravel framework.

// Simulate a simple router
if ($_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '') {
    echo "Hola Mundo";
    return;
}

http_response_code(404);
echo "Ruta no encontrada";

