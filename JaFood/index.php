<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JaFood </title>
  <link rel="icon" type="image/png" href="../../../assets/media/double_isologo_Ft.png">
  <link rel="stylesheet" href="assets/css/index.css" />
  <link rel="stylesheet" href="../../assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/navbar.css" />

</head>

<body>

  <?php include './includes/navbar.php'; ?>

  <main>
    <section class="hero-section" id="inicio">
      <div class="photo">
        <div class="hero-content">
          <h1>Sabor que cuenta historias</h1>
          <p>Una experiencia culinaria única donde la tradición japonesa se encuentra con la elegancia contemporánea</p>
        </div>
      </div>
    </section>

    <section class="reviews-section scroll-fade" id="testimonios">
      <h2 class="section-title">Nosotros</h2>

      <div class="container" style="margin-bottom: 10dvh;">
        <div class="slider">

          <div class="item">
            <p>"Cuando vine al pais, no tenia idea de lo que me esperaba, pero la idea de fundar JaFood me cambio la vida."</p>
            <small>— Hiroshi Tanaka</small>
          </div>

          <div class="item">
            <p>"Una vez fui al restaurante, presente mi visión y el chef la hizo realidad."</p>
            <small>— María González</small>
          </div>

          <div class="item">
            <p>"Considero el sushi como un arte de la cultura japonesa, desde que conoci JaFood cambio mi forma de ver la gastronómia "</p>
            <small>— Kenji Nakamura</small>
          </div>

        </div>

      </div>
      <button id="prev">‹</button>
      <button id="next">›</button>
    </section>
  </main>

  <script src="assets/js/index.js"></script>

</body>

</html>