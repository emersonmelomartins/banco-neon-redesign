<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="shortcut icon"
      href="<?php echo get_template_directory_uri() ?>/favicon.png"
      type="image/png"
    />

    <!-- Primary Meta Tags -->
    <title>Redesign Landing Page NEON</title>
    <meta name="title" content="Redesign Landing Page NEON" />
    <meta
      name="description"
      content="A conta digital certa pra cuidar bem do seu dinheiro"
    />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://neon.emersondev.online" />
    <meta property="og:title" content="Redesign Landing Page NEON" />
    <meta
      property="og:description"
      content="A conta digital certa pra cuidar bem do seu dinheiro"
    />
    <meta
      property="og:image"
      content="https://neon.emersondev.online/imgs/share-img.jpg"
    />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://neon.emersondev.online" />
    <meta property="twitter:title" content="Redesign Landing Page NEON" />
    <meta
      property="twitter:description"
      content="A conta digital certa pra cuidar bem do seu dinheiro"
    />
    <meta
      property="twitter:image"
      content="https://neon.emersondev.online/imgs/share-img.jpg"
    />

    <link
      rel="stylesheet"
      href="<?php echo get_template_directory_uri() ?>/css/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="<?php echo get_template_directory_uri() ?>/css/aos.css"
    />
    <link
      rel="stylesheet"
      href="<?php echo get_template_directory_uri() ?>/css/hamburgers.css"
    />
    <link
      rel="stylesheet"
      href="<?php echo get_template_directory_uri() ?>/css/main.min.css"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <header>
      <div class="container">
        <a href="#" class="logo">
          <img
            src="<?php echo get_template_directory_uri() ?>/imgs/logo.svg"
            alt="Logo do Neon"
          />
        </a>

        <nav id="navigation">
          <ul id="menu-list">
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Conta digital PJ</a></li>
            <li><a href="#">Quem somos</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Ajuda</a></li>
          </ul>
          <button class="btn-secondary white">Abra sua conta digital</button>

          <button
            type="button"
            id="js-btn-menu"
            class="btn-mobile hamburger hamburger--spin"
            aria-label="Menu"
            aria-controls="navigation"
          >
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </nav>
      </div>
    </header>
  </body>
</html>
