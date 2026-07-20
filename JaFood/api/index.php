<?php
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$normalizedPath = rtrim($path, '/');
if ($normalizedPath === '') {
    $normalizedPath = '/';
}

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
    '/pages/menu' => '/pages/menu.php',
    '/pages/menu.php' => '/pages/menu.php',
    '/pages/nosotros' => '/pages/nosotros.php',
    '/pages/nosotros.php' => '/pages/nosotros.php',
    '/pages/galeria' => '/pages/galeria.php',
    '/pages/galeria.php' => '/pages/galeria.php',
    '/pages/blog' => '/pages/blog.php',
    '/pages/blog.php' => '/pages/blog.php',
    '/pages/contacto' => '/pages/contacto.php',
    '/pages/contacto.php' => '/pages/contacto.php',
    '/pages/testimonios' => '/pages/testimonios.php',
    '/pages/testimonios.php' => '/pages/testimonios.php',
];

$target = $routes[$normalizedPath] ?? null;

if ($target) {
    include __DIR__ . '/..' . $target;
} else {
    http_response_code(404);
    echo '404 Not Found';
}
