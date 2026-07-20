<?php
$currentFile = basename($_SERVER['PHP_SELF']);
$currentPage = '';

$isInPages = strpos($_SERVER['PHP_SELF'], '/pages/') !== false;
$basePath = $isInPages ? '../' : '';

switch($currentFile) {
    case 'index.php':
        $currentPage = 'inicio';
        break;
    case 'menu.php':
        $currentPage = 'menu';
        break;
    case 'nosotros.php':
        $currentPage = 'nosotros';
        break;
    case 'galeria.php':
        $currentPage = 'galeria';
        break;
    case 'blog.php':
        $currentPage = 'blog';
        break;
    case 'contacto.php':
        $currentPage = 'contacto';
        break;
    case 'testimonios.php':
        $currentPage = 'testimonios';
        break;
    default:
        $currentPage = '';
}
?>

<nav class="navbar" id="navbar">
  <div class="nav-container">
    <a href="<?= $basePath ?>index.php" class="logo">JaFood</a>
    <button class="nav-toggle" id="navToggle">☰</button>
    <ul class="nav-links" id="navLinks">
      <li><a href="<?= $basePath ?>index.php" class="<?= $currentPage === 'inicio' ? 'active' : '' ?>">Inicio</a></li>
      <li><a href="<?= $basePath ?>pages/menu.php" class="<?= $currentPage === 'menu' ? 'active' : '' ?>">Menú</a></li>
      <li><a href="<?= $basePath ?>pages/nosotros.php" class="<?= $currentPage === 'nosotros' ? 'active' : '' ?>">Nosotros</a></li>
      <li><a href="<?= $basePath ?>pages/galeria.php" class="<?= $currentPage === 'galeria' ? 'active' : '' ?>">Galería</a></li>
      <li><a href="<?= $basePath ?>pages/blog.php" class="<?= $currentPage === 'blog' ? 'active' : '' ?>">Blog</a></li>
      <li><a href="<?= $basePath ?>pages/contacto.php" class="<?= $currentPage === 'contacto' ? 'active' : '' ?>">Contacto</a></li>
      <li><a href="<?= $basePath ?>pages/testimonios.php" class="<?= $currentPage === 'testimonios' ? 'active' : '' ?>">Testimonios</a></li>
    </ul>
  </div>
</nav>
