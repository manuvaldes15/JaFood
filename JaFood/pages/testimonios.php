<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JaFood - Testimonios</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="icon" type="image/png" href="../../../assets/media/double_isologo_Ft.png">
  <link rel="stylesheet" href="../assets/css/testimonios.css" />
  <link rel="stylesheet" href="../../../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/navbar.css" />

</head>
<body>
  <?php include '../includes/navbar.php'; ?>

  <main>
    <!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, rgba(10, 10, 10, 0.8), rgba(212, 175, 55, 0.1)), url('../assets/media/testimonios.webp'); background-size: cover; background-position: center;">
      <div class="hero-content">
        <h1 style ="color:#d4af37">Testimonios</h1>
        <p>Descubre las experiencias de nuestros clientes satisfechos</p>
      </div>
    </section>

    <!-- Reviews Section -->
    <section class="reviews-section scroll-fade" id="testimonios">
      <h2 class="section-title">Lo que dicen nuestros clientes</h2>
      <div class="carousel-container">
        <div class="slider">
          <div class="item active">
            <h3>★★★★★</h3>
            <p>"El ramen de JaFood es una obra de arte culinaria. El caldo posee un sabor profundo y auténtico que transporta directamente a Japón. Una experiencia gastronómica excepcional."</p>
            <small>— Mariana López</small>
          </div>
          
          <div class="item">
            <h3>★★★★★</h3>
            <p>"Ambiente sereno y un sushi que se deshace delicadamente en el paladar. Una experiencia recomendada sin reservas."</p>
            <small>— Diego Martínez</small>
          </div>
          
          <div class="item">
            <h3>★★★★☆</h3>
            <p>"El menú degustación fue un verdadero viaje culinario. Cada plato una revelación, aunque el servicio podría ser más ágil en los tiempos de presentación."</p>
            <small>— Lucía Herrera</small>
          </div>
          
          <div class="item">
            <h3>★★★★★</h3>
            <p>"Atención impecable y personalizada. El chef nos honró con su presencia y el mochi fue la perfecta culminación de una velada extraordinaria."</p>
            <small>— Andrés Mendoza</small>
          </div>
          
          <div class="item">
            <h3>★★★★★</h3>
            <p>"Gastronomía exquisita con porciones generosas y presentación artística. El té verde frío es simplemente adictivo y refrescante."</p>
            <small>— Carla Méndez</small>
          </div>
          
          <div class="item">
            <h3>★★★★☆</h3>
            <p>"Una experiencia culinaria excepcional. Únicamente sugeriría ajustar la intensidad de la música ambiental para mayor intimidad."</p>
            <small>— Jorge Olmes</small>
          </div>
          
          <div class="item">
            <h3>★★★★★</h3>
            <p>"Impresionante selección de opciones veganas. Raramente se encuentra una adaptación tan sofisticada de la cocina japonesa. Felicitaciones."</p>
            <small>— Fernanda Ruiz</small>
          </div>
          
          <div class="item">
            <h3>★★★★★</h3>
            <p>"El escenario perfecto para ocasiones especiales. Cada detalle refleja elegancia y autenticidad en su máxima expresión."</p>
            <small>— Pablo Guzmán</small>
          </div>
          
          <div class="item">
            <h3>★★★★★</h3>
            <p>"Cada bocado me transportó a mis días en Kioto. JaFood es una auténtica joya gastronómica en nuestra ciudad."</p>
            <small>— Jonathan Gómez</small>
          </div>
          
          <div class="item">
            <h3>★★★★★</h3>
            <p>"La experiencia gastronómica japonesa más auténtica fuera de Japón. Cada elemento fue ejecutado con perfección absoluta."</p>
            <small>— Sebastián Valiente</small>
          </div>
        </div>
        
        <button class="carousel-nav prev" id="prevBtn">‹</button>
        <button class="carousel-nav next" id="nextBtn">›</button>
      </div>
    </section>
  </main>
  <script src="../assets/js/testimonios.js"></script>


</body>
</html>