<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JaFood - Contactanos</title>
  <link rel="stylesheet" href="../Style/contacto.css">
  <link rel="icon" type="image/png" href="../../../assets/media/double_isologo_Ft.png">
  <link rel="stylesheet" href="../assets/css/contacto.css" />
  <link rel="stylesheet" href="../../../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/navbar.css" />

</head>

<body>

  <?php include '../includes/navbar.php'; ?>

  <main>
    <!-- Hero Section -->
    <section class="hero-section"
      style="background: linear-gradient(135deg, rgba(10, 10, 10, 0.8), rgba(212, 175, 55, 0.1)), url('../assets/media/contacto.webp'); background-size: cover; background-position: center;">
      <div class="hero-content">
        <h1>Contáctanos</h1>
        <p>Reserva tu mesa o evento especial fácilmente vía WhatsApp</p>
      </div>
    </section>

    <!-- Main Section -->
    <section class="main-section">
      <div class="container">
        <!-- Información -->
        <div class="scroll-fade">
          <h2 class="section-title">Reserva con Nosotros</h2>
          <p class="section-subtitle">Agenda por WhatsApp o visítanos directamente</p>

          <div class="reservation-grid">
            <!-- WhatsApp y detalles -->
            <div class="contact-info">
              <div class="form-header">
                <i class="fas fa-phone contact-icon"></i>
                <h3 class="form-title">Contáctanos</h3>
              </div>

              <div class="contact-item">
                <i class="fas fa-clock contact-icon"></i>
                <div class="contact-details">
                  <h4>Horarios de Atención</h4>
                  <p>Martes a Domingo<br>
                    Almuerzo: 12:00 PM - 3:00 PM<br>
                    Cena: 6:00 PM - 11:00 PM<br>
                    <em>Cerrado los Lunes</em>
                  </p>
                </div>
              </div>

              <div class="contact-item">
                <i class="fab fa-whatsapp contact-icon"></i>
                <div class="contact-details">
                  <h4>Teléfono</h4>
                  <p>+503 7000-1234<br></p>
                  <p>
                    <a href="https://wa.me/50370837578" target="_blank"
                      style="color:#d4af37; text-decoration:underline;">Haz clic aquí para chatear</a>
                  </p>
                  <p>Reserva tu mesa fácilmente a través de WhatsApp</p>
                </div>
              </div>

              <div class="contact-item">
                <i class="fas fa-envelope contact-icon"></i>
                <div class="contact-details">
                  <h4>Email</h4>
                  <p>contacto@jafood.com<br>Dejanos saber tu experiencia con nostros</p>
                </div>
              </div>
            </div>

            <!-- Mapa -->
            <div class="contact-info">
              <div class="form-header">
                <i class="fas fa-map-marker-alt form-icon"></i>
                <h3 class="form-title">Nuestra Ubicación</h3>
              </div>

              <div class="contact-item">
                <i class="fas fa-map-pin contact-icon"></i>
                <div class="contact-details">
                  <h4>Dirección</h4>
                  <p>Santa Ana, El Salvador</p>
                </div>
              </div>

              <div style="border-radius: 15px; overflow: hidden; height: 400px;">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241.9696603940501!2d-89.67026094929103!3d13.987475386155467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f62eb1e1040255b%3A0xd1515d92f1b54f52!2sDesvi%C3%B3%20chalchuapa!5e0!3m2!1ses!2ssv!4v1749717035882!5m2!1ses!2ssv"
                  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </main>
  <script src="../assets/js/contacto.js"></script>

</body>

</html>