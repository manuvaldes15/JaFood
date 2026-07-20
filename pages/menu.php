<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JaFood - Nuestro Menú</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link rel="icon" type="image/png" href="../../../assets/media/double_isologo_Ft.png">
  <link rel="stylesheet" href="../assets/css/menu.css" />
  <link rel="stylesheet" href="../../../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/navbar.css" />



</head>
<body>

  <?php include '../includes/navbar.php'; ?>

  <main>
    <!-- Hero Section -->
    <section class="hero-section">
      <div class="hero-content">
        <h1>Nuestro Menú</h1>
        <p>Una sinfonía de sabores que honra la tradición japonesa con el alma salvadoreña</p>
      </div>
    </section>

    <!-- Menu Section -->
    <section class="menu-section">
      <div class="container">
        
        <!-- Sushi & Sashimi -->
        <div class="menu-category scroll-fade">
          <div class="category-header">
            <i class="fas fa-fish category-icon"></i>
            <h2 class="category-title">Sushi & Sashimi</h2>
          </div>
          <div class="menu-grid">
            <div class="menu-item">
              <div class="item-header">
                <div>
                  <h3 class="item-name">Omakase del Chef</h3>
                  <p class="item-japanese">シェフおまかせ</p>
                </div>
                <span class="item-price">$45.00</span>
              </div>
              <p class="item-description">Selección personal del Chef Hiroshi con 12 piezas de sushi y sashimi premium del día, incluyendo atún bluefin, hamachi y uni.</p>
              <div class="item-tags">
                <span class="tag">Chef's Choice</span>
                <span class="tag">Premium</span>
              </div>
            </div>

            <div class="menu-item">
              <div class="item-header">
                <div>
                  <h3 class="item-name">Sashimi Tropical</h3>
                  <p class="item-japanese">トロピカル刺身</p>
                </div>
                <span class="item-price">$28.00</span>
              </div>
              <p class="item-description">Pescado fresco del Pacífico con frutas tropicales locales, aceite de sésamo tostado y salsa ponzu con maracuyá.</p>
              <div class="item-tags">
                <span class="tag">Fusión</span>
                <span class="tag">Fresco</span>
              </div>
            </div>

            <div class="menu-item">
              <div class="item-header">
                <div>
                  <h3 class="item-name">Maki San Salvador</h3>
                  <p class="item-japanese">サンサルバドル巻</p>
                </div>
                <span class="item-price">$16.00</span>
              </div>
              <p class="item-description">Rollo especial con camarón tempura, aguacate salvadoreño, queso crema y salsa de tamarindo picante.</p>
              <div class="item-tags">
                <span class="tag">Signature</span>
                <span class="tag">Picante</span>
              </div>
            </div>

            <div class="menu-item">
              <div class="item-header">
                <div>
                  <h3 class="item-name">Nigiri Degustación</h3>
                  <p class="item-japanese">握り寿司盛合</p>
                </div>
                <span class="item-price">$22.00</span>
              </div>
              <p class="item-description">8 piezas de nigiri tradicional: atún, salmón, yellowtail, anguila, erizo de mar, pargo rojo y camarón dulce.</p>
              <div class="item-tags">
                <span class="tag">Tradicional</span>
                <span class="tag">Variado</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Especiales del Chef -->
        <div class="special-section scroll-fade">
          <div class="chef-recommendation">
            <div class="chef-badge">
              <i class="fas fa-crown"></i>
              Recomendación del Chef
            </div>
          </div>
          <div class="menu-grid">
            <div class="menu-item">
              <div class="item-header">
                <div>
                  <h3 class="item-name">Wagyu Tataki Volcán</h3>
                  <p class="item-japanese">和牛たたき火山</p>
                </div>
                <span class="item-price">$52.00</span>
              </div>
              <p class="item-description">Wagyu A5 sellado con costra de café salvadoreño, acompañado de puré de camote morado y reducción de sake con chile cobanero.</p>
              <div class="item-tags">
                <span class="tag">Premium</span>
                <span class="tag">Fusión</span>
                <span class="tag">Limitado</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Ramen & Sopas -->
        <div class="menu-category scroll-fade">
          <div class="category-header">
            <i class="fas fa-bowl-hot category-icon"></i>
            <h2 class="category-title">Ramen & Sopas</h2>
          </div>
          <div class="menu-grid">
            <div class="menu-item">
              <div class="item-header">
                <div>
                  <h3 class="item-name">Tonkotsu Ramen Clásico</h3>
                  <p class="item-japanese">豚骨ラーメン</p>
                </div>
                <span class="item-price">$18.00</span>
              </div>
              <p class="item-description">Caldo de hueso de cerdo cocido por 24 horas, fideos hechos en casa, chashu, huevo marinado, brotes de bambú y nori.</p>
              <div class="item-tags">
                <span class="tag">Tradicional</span>
                <span class="tag">Comfort Food</span>
              </div>
            </div>

            <div class="menu-item">
              <div class="item-header">
                <div>
                  <h3 class="item-name">Miso Ramen de Frijoles</h3>
                  <p class="item-japanese">フリホーレス味噌ラーメン</p>
                </div>
                <span class="item-price">$16.00</span>
              </div>
              <p class="item-description">Innovadora fusión con caldo de miso y frijoles negros salvadoreños, cerdo adobado, elote tierno y curtido fermentado.</p>
              <div class="item-tags">
                <span class="tag">Fusión</span>
                <span class="tag">Vegetariano</span>
              </div>
            </div>

            <div class="menu-item">
              <div class="item-header">
                <div>
                  <h3 class="item-name">Seafood Tsukemen</h3>
                  <p class="item-japanese">海鮮つけ麺</p>
                </div>
                <span class="item-price">$24.00</span>
              </div>
              <p class="item-description">Fideos gruesos para dippear en concentrado caldo de mariscos del Pacífico con pulpo, camarones y almejas.</p>
              <div class="item-tags">
                <span class="tag">Mariscos</span>
                <span class="tag">Intenso</span>
              </div>
            </div>

            <div class="menu-item">
              <div class="item-header">
                <div>
                  <h3 class="item-name">Sopa Miso Vegana</h3>
                  <p class="item-japanese">ビーガン味噌汁</p>
                </div>
                <span class="item-price">$14.00</span>
              </div>
              <p class="item-description">Caldo de kombu y shiitake, tofu sedoso, wakame, cebollín y pasta de miso orgánico de soya local.</p>
              <div class="item-tags">
                <span class="tag">Vegano</span>
                <span class="tag">Saludable</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Tempura & Fritos -->
        <div class="menu-category scroll-fade">
          <div class="category-header">
            <i class="fas fa-fire category-icon"></i>
            <h2 class="category-title">Tempura & Fritos</h2>
          </div>
          <div class="menu-grid">
            <div class="menu-item">
              <div class="item-header">
                <div>
                  <h3 class="item-name">Tempura de Vegetales</h3>
                  <p class="item-japanese">野菜天ぷら</p>
                </div>
                <span class="item-price">$15.00</span>
              </div>
              <p class="item-description">Selección de vegetales de temporada en tempura ligera: calabaza, berenjena, pimientos dulces y flores de calabaza.</p>
              <div class="item-tags">
                <span class="tag">Vegetariano</span>
                <span class="tag">Temporada</span>
              </div>
            </div>

            <div class="menu-item">
              <div class="item-header">
                <div>
                  <h3 class="item-name">Ebi Tempura Premium</h3>
                  <p class="item-japanese">海老天ぷら</p>
                </div>
                <span class="item-price">$19.00</span>
              </div>
              <p class="item-description">Langostinos jumbo del Golfo de Fonseca en tempura perfecta, acompañados de salsa tentsuyu y daikon rallado.</p>
              <div class="item-tags">
                <span class="tag">Mariscos</span>
                <span class="tag">Premium</span>
              </div>
            </div>

            <div class="menu-item">
              <div class="item-header">
                <div>
                  <h3 class="item-name">Karaage de Pollo</h3>
                  <p class="item-japanese">鶏唐揚げ</p>
                </div>
                <span class="item-price">$13.00</span>
              </div>
              <p class="item-description">Pollo marinado en salsa de soya, sake y jengibre, frito hasta quedar crujiente, con mayonesa de wasabi.</p>
              <div class="item-tags">
                <span class="tag">Clásico</span>
                <span class="tag">Crujiente</span>
              </div>
            </div>

            <div class="menu-item">
              <div class="item-header">
                <div>
                  <h3 class="item-name">Gyoza Artesanal</h3>
                  <p class="item-japanese">手作り餃子</p>
                </div>
                <span class="item-price">$12.00</span>
              </div>
              <p class="item-description">Dumplings hechos a mano rellenos de cerdo, repollo y cebollín, sellados y servidos con salsa de vinagre negro.</p>
              <div class="item-tags">
                <span class="tag">Hecho en Casa</span>
                <span class="tag">Tradicional</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Postres -->
        <div class="menu-category scroll-fade">
          <div class="category-header">
            <i class="fas fa-ice-cream category-icon"></i>
            <h2 class="category-title">Postres Japoneses</h2>
          </div>
          <div class="menu-grid">
            <div class="menu-item">
              <div class="item-header">
                <div>
                  <h3 class="item-name">Mochi de Café Salvadoreño</h3>
                  <p class="item-japanese">コーヒー餅</p>
                </div>
                <span class="item-price">$8.00</span>
              </div>
              <p class="item-description">Mochi artesanal relleno de helado de café de altura salvadoreño, cubierto con polvo de cacao orgánico.</p>
              <div class="item-tags">
                <span class="tag">Fusión</span>
                <span class="tag">Artesanal</span>
              </div>
            </div>

            <div class="menu-item">
              <div class="item-header">

                <div>
                  <h3 class="item-name">Dorayaki de Dulce de Leche</h3>
                  <p class="item-japanese">どら焼きキャラメル</p>
                </div>
                <span class="item-price">$9.00</span>
              </div>
              <p class="item-description">Panqueques japoneses rellenos de una mezcla cremosa de dulce de leche salvadoreño y pasta de azuki, servidos con sirope de maple.</p>
              <div class="item-tags">
                <span class="tag">Dulce</span>
                <span class="tag">Fusión</span>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>
  </main>
  <script src="../assets/js/menu.js"></script>

</body>
</html>
