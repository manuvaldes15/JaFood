<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JaFood - Galería</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <link rel="icon" type="image/png" href="../../../assets/media/double_isologo_Ft.png">
  <link rel="stylesheet" href="../assets/css/galeria.css" />
  <link rel="stylesheet" href="../../../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/navbar.css" />
</head>
<body>

  <?php include '../includes/navbar.php'; ?>

  <main>
    <!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, rgba(10, 10, 10, 0.8), rgba(212, 175, 55, 0.1)), url('../assets/media/galeria.webp'); background-size: cover; background-position: center;">
      <div class="hero-content">
        <h1>Nuestra Galería</h1>
        <p>Descubre los momentos especiales que creamos para ti</p>
      </div>
    </section>

    <!-- Main Section -->
    <section class="main-section">
      <div class="container">
        <div class="scroll-fade">
          <h2 class="section-title">Momentos Únicos</h2>
          <p class="section-subtitle">Cada imagen cuenta una historia de sabor y elegancia</p>

          <!-- Gallery Categories -->
          <div class="gallery-categories">
            <button class="category-btn active" data-category="all">Todas</button>
            <button class="category-btn" data-category="ambiente">Ambiente</button>
            <button class="category-btn" data-category="comida">Comida</button>
            <button class="category-btn" data-category="eventos">Eventos</button>
          </div>

          <!-- Gallery Grid -->
          <div class="gallery-grid" id="galleryGrid">
            <!-- Ambiente -->
            <div class="gallery-item fade-in" data-category="ambiente">
              <img src="../assets/media/restaur.webp" alt="Interior elegante del restaurante" loading="lazy">
              <div class="gallery-overlay">
                <h3>Ambiente Elegante</h3>
                <p>Diseño sofisticado que combina modernidad y calidez</p>
              </div>
            </div>

            <div class="gallery-item fade-in" data-category="ambiente">
              <img src="../assets/media/iluminacion.webp" alt="Mesa con iluminación cálida" loading="lazy">
              <div class="gallery-overlay">
                <h3>Iluminación Perfecta</h3>
                <p>Cada mesa cuidadosamente iluminada para crear el ambiente ideal</p>
              </div>
            </div>

            <div class="gallery-item fade-in" data-category="ambiente">
              <img src="../assets/media/sushibar.webp" alt="Barra del restaurante" loading="lazy">
              <div class="gallery-overlay">
                <h3>Barra Premium</h3>
                <p>Espacio exclusivo con selección de bebidas premium</p>
              </div>
            </div>

            <!-- Comida -->
            <div class="gallery-item fade-in" data-category="comida">
              <img src="../assets/media/platoEstre.webp" alt="Plato gourmet principal" loading="lazy">
              <div class="gallery-overlay">
                <h3>Plato Estrella</h3>
                <p>Creación culinaria con ingredientes de primera calidad</p>
              </div>
            </div>

            <div class="gallery-item fade-in" data-category="comida">
              <img src="../assets/media/Dorayaki.webp" alt="Ensalada gourmet" loading="lazy">
              <div class="gallery-overlay">
                <h3>Dorayaki de Dulce de Leche</h3>
                <p>Ingredientes de calidad con presentación artística</p>
              </div>
            </div>

            <div class="gallery-item fade-in" data-category="comida">
              <img src="../assets/media/Sashimi.webp" alt="Postre elegante" loading="lazy">
              <div class="gallery-overlay">
                <h3>Sashimi Tropical</h3>
                <p>Pescado fresco del Pacífico con frutas tropicales locales</p>
              </div>
            </div>

            <!-- Eventos -->
            <div class="gallery-item fade-in" data-category="eventos">
              <img src="../assets/media/evento2.webp" alt="Evento corporativo" loading="lazy">
              <div class="gallery-overlay">
                <h3>Eventos Corporativos</h3>
                <p>Espacios perfectos para reuniones de negocios</p>
              </div>
            </div>

            <div class="gallery-item fade-in" data-category="eventos">
              <img src="../assets/media/evento1.webp" alt="Celebración familiar" loading="lazy">
              <div class="gallery-overlay">
                <h3>Celebraciones Familiares</h3>
                <p>Momentos especiales en un ambiente acogedor</p>
              </div>
            </div>

            <div class="gallery-item fade-in" data-category="eventos">
              <img src="../assets/media/evento3.webp" alt="Cena romántica" loading="lazy">
              <div class="gallery-overlay">
                <h3>Cenas Románticas</h3>
                <p>El escenario perfecto para momentos íntimos</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script src="../assets/js/galeria.js"></script>

</body>
</html>