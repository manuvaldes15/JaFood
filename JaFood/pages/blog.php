<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JaFood - Blog</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <link rel="icon" type="image/png" href="../../../assets/media/double_isologo_Ft.png">
  <link rel="stylesheet" href="../assets/css/blog.css" />
  <link rel="stylesheet" href="../../../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/navbar.css" />



</head>
<body>
  
  <?php include '../includes/navbar.php'; ?>
  
  <main>
    <!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, rgba(10, 10, 10, 0.8), rgba(212, 175, 55, 0.1)), url('../assets/media/blog.webp'); background-size: cover; background-position: center;">
      <div class="hero-content">
        <h1>Noticias</h1>
        <div class="hero-stats">
          <div class="stat-item">
            <span class="stat-number">500+</span>
            <span class="stat-label">Reseñas 5 Estrellas</span>
          </div>
          <div class="stat-item">
            <span class="stat-number">15</span>
            <span class="stat-label">Premios Gastronómicos</span>
          </div>
          <div class="stat-item">
            <span class="stat-number">8</span>
            <span class="stat-label">Años de Excelencia</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Section -->
    <section class="main-section">
        <div class="scroll-fade news-section">
          <h2 class="section-title">Noticias</h2>
          <p class="section-subtitle">Reconocimientos y actualizaciones recientes del mundo JaFood</p>

          <div class="news-grid">
            <div class="news-card scroll-slide-left">
              <div class="news-image">
                <span class="news-badge">Premio</span>
                <i class="fas fa-award news-icon"></i>
              </div>
              <div class="news-content">
                <p class="news-date">Abril 2025</p>
                <h3 class="news-title">JaFood gana “Mejor Restaurante Fusión”</h3>
                <p class="news-excerpt">
                  En los premios de gastronomía Centroamericana, JaFood fue galardonado por su propuesta innovadora que fusiona la tradición local con técnicas culinarias internacionales.
                </p>
                <div class="news-source">
                  <i class="fas fa-globe source-icon"></i>
                  <span>Revista Gourmet El Salvador</span>
                </div>
              </div>
            </div>

            <div class="news-card scroll-slide-right">
              <div class="news-image">
                <span class="news-badge">Entrevista</span>
                <i class="fas fa-microphone news-icon"></i>
              </div>
              <div class="news-content">
                <p class="news-date">Marzo 2025</p>
                <h3 class="news-title">Chef fundador habla sobre el futuro de JaFood</h3>
                <p class="news-excerpt">
                  En una reciente entrevista, el chef ejecutivo de JaFood compartió su visión para los próximos años, incluyendo nuevas sucursales y propuestas de menús sostenibles.
                </p>
                <div class="news-source">
                  <i class="fas fa-tv source-icon"></i>
                  <span>Canal 12 - “Gastro TV”</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Premios -->
        <div class="awards-section scroll-fade">
          <div class="awards-grid">
            <div class="award-item">
              <i class="fas fa-crown award-icon"></i>
              <h4 class="award-title">Premio a la Innovación Culinaria</h4>
              <p class="award-year">2023</p>
            </div>
            <div class="award-item">
              <i class="fas fa-star award-icon"></i>
              <h4 class="award-title">5 Estrellas en TripAdvisor</h4>
              <p class="award-year">2022 - 2024</p>
            </div>
            <div class="award-item">
              <i class="fas fa-heart award-icon"></i>
              <h4 class="award-title">Favorito del Público</h4>
              <p class="award-year">2024</p>
            </div>
            <div class="award-item">
              <i class="fas fa-globe-americas award-icon"></i>
              <h4 class="award-title">Reconocimiento Internacional</h4>
              <p class="award-year">2021</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script src="../assets/js/blog.js"></script>

</body>
</html>
