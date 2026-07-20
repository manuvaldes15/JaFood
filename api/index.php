<?php 
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH); 
$normalizedPath = rtrim($path, '/'); 

if ($normalizedPath === '') {     
    $normalizedPath = '/'; 
} // <- ¡FALTABA ESTA LLAVE DE CIERRE!

$routes = [     
    '/' => '/index.php',     
    '/index' => '/index.php',     
    '/index.php' => '/index.php',     
    '/menu' => '/pages/menu.php',     
    '/menu.php' => '/pages/menu.php',     
    '/nosotros' => '/pages/nosotros.php',     
    '/nosotros.php' => '/pages/nosotros.php',     
    '/galeria' => '/pages/galeria.php',     
    '/galeria.php' => '/pages/galeria.php',     
    '/blog' => '/pages/blog.php',     
    '/blog.php' => '/pages/blog.php',     
    '/contacto' => '/pages/contacto.php',     
    '/contacto.php' => '/pages/contacto.php',     
    '/testimonios' => '/pages/testimonios.php',     
    '/testimonios.php' => '/pages/testimonios.php',
]; // Recortado para brevedad, pero asegúrate de mantener todas tus rutas

$target = $routes[$normalizedPath] ?? null; 

if ($target) {     
    // Utilizamos require en lugar de include para asegurar la carga
    require __DIR__ . '/..' . $target; 
} else {     
    http_response_code(404);     
    echo '404 Not Found - Ruta no encontrada'; 
}