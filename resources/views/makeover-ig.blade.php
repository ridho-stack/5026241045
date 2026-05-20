<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Makeover IG - Stockwise.id</title>

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    body, .main {
      background-color: #000000 !important;
      color: #ffffff !important;
    }
    .header {
      background-color: #0a0a0a !important;
      border-bottom: 1px solid #222;
    }
    .header .logo h1 {
      color: #ffffff !important;
    }
    .header .logo h1 span {
      color: #0095f6 !important;
    }
    .navmenu a {
      color: #ffffff !important;
    }
    .navmenu a:hover, .navmenu a.active {
      color: #0095f6 !important;
    }

    /* Hero Section */
    .hero.dark-background {
      background-color: #000000 !important;
      background-image: none !important;
    }
    .hero h1 {
      color: #ffffff !important;
    }
    .hero h1 .bi-patch-check-fill {
      color: #0095f6;
      font-size: 0.7em;
      vertical-align: middle;
    }
    .hero p {
      color: #a8a8a8 !important;
    }

    /* Profile Section */
    .light-background {
      background-color: #121212 !important;
    }

    /* Tombol Utama */
    .btn-get-started, .btn-getstarted {
      background-color: #0095f6 !important;
      color: #ffffff !important;
      font-weight: 600 !important;
      border-radius: 8px !important;
      border: none !important;
    }

    /* Statistik & Teks */
    .stats-item strong {
      color: #ffffff;
      font-size: 18px;
    }
    .stats-item span {
      color: #a8a8a8;
    }
    .text-link {
      color: #00bfff !important;
      font-weight: 600;
    }

    /* Highlights Style */
    .highlight-item {
      text-align: center;
      cursor: pointer;
      width: 80px;
    }
    .highlight-ring {
      width: 75px;
      height: 75px;
      border-radius: 50%;
      border: 2px solid #333;
      padding: 3px;
      margin: 0 auto;
      background: #000;
      transition: all 0.3s ease;
    }
    .highlight-inner {
      width: 100%; height: 100%; border-radius: 50%; overflow: hidden;
    }
    .highlight-inner img {
      width: 100%; height: 100%; object-fit: cover;
    }
    .highlight-text {
      font-size: 11px; font-weight: 500; color: #e0e0e0; display: block; margin-top: 8px;
    }
    .highlight-item:hover .highlight-ring {
      border-color: #00bfff;
      transform: scale(1.05);
    }
  </style>
</head>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">STOCKWISE<span>.ID</span></h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#header" class="active">Home</a></li>
          <li><a href="#profil">Analisis Profil</a></li>
          <li><a href="#postingan">Market Update</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted" href="index.html">Kembali</a>
    </div>
  </header>

  <main class="main">
    <section id="header" class="hero section dark-background">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>stockwise.id <i class="bi bi-patch-check-fill"></i></h1>
            <p>Financial Service | Media & Komunitas Saham Terbesar #1 di Indonesia</p>
            <div class="d-flex gap-2">
              <a href="#profil" class="btn-get-started">Analisis Akun</a>
              <a href="https://www.instagram.com/stockwise.id/" target="_blank" class="btn-watch-video d-flex align-items-center">
                <i class="bi bi-instagram"></i><span style="color: white;">Kunjungi Instagram</span>
              </a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img text-center" data-aos="zoom-out" data-aos-delay="200">
            <div class="p-3 d-inline-block" style="background: #000; border-radius: 50%; border: 3px solid #333;">
              <img src="assets/img/stockwise-logo.jpg" class="img-fluid animated rounded-circle" alt="Logo Stockwise" style="max-width: 250px;">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="profil" class="section why-us light-background" data-builder="section">
      <div class="container-fluid">
        <div class="row gy-4">
          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="mb-3"><strong style="color: #00bfff !important; font-size: 34px; letter-spacing: 0.5px;">Stockwise Indonesia</strong></h3>
              <div class="mb-4 d-flex gap-4 stats-item">
                <p><strong>1,700</strong> <span>posts</span></p>
                <p><strong>521K</strong> <span>followers</span></p>
              </div>
              <p style="color: #ffffff; line-height: 1.8; font-size: 16px;">
                🇮🇩 Media & Komunitas Saham Terbesar #1<br>
                🎓 Belajar Investasi Saham Multibagger dari @andryhakim<br>
                📆 Next Class: 12 - 17 May 2026<br>
                ⬇️ Join our free community<br>
                <i class="bi bi-link-45deg"></i> <a href="https://linktr.ee/stockwise.id" class="text-link text-decoration-none">linktr.ee/stockwise.id</a>
              </p>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-12 px-xl-5">
            <div class="d-flex justify-content-start justify-content-md-center gap-3 gap-md-4 flex-wrap" data-aos="fade-up" data-aos-delay="200">
              <div class="highlight-item">
                <div class="highlight-ring"><div class="highlight-inner"><img src="assets/img/masterclass-logo.jpg" alt="Masterclass"></div></div>
                <span class="highlight-text">Masterclass</span>
              </div>
              <div class="highlight-item">
                <div class="highlight-ring"><div class="highlight-inner"><img src="assets/img/testimonials-logo.jpg" alt="Testimonials"></div></div>
                <span class="highlight-text">Testimonials</span>
              </div>
              <div class="highlight-item">
                <div class="highlight-ring"><div class="highlight-inner"><img src="assets/img/clipper-logo.jpg" alt="Clipper"></div></div>
                <span class="highlight-text">Clipper</span>
              </div>
              <div class="highlight-item">
                <div class="highlight-ring"><div class="highlight-inner"><img src="assets/img/companyvisit-logo.jpg" alt="Company Visit"></div></div>
                <span class="highlight-text">Company Visit</span>
              </div>
              <div class="highlight-item">
                <div class="highlight-ring"><div class="highlight-inner"><img src="assets/img/community-logo.jpg" alt="Community"></div></div>
                <span class="highlight-text">Community</span>
              </div>
              <div class="highlight-item">
                <div class="highlight-ring"><div class="highlight-inner"><img src="assets/img/scam-logo.jpg" alt="Scam"></div></div>
                <span class="highlight-text">Scam</span>
              </div>
              <div class="highlight-item">
                <div class="highlight-ring"><div class="highlight-inner"><img src="assets/img/official-logo.jpg" alt="Official"></div></div>
                <span class="highlight-text">Official</span>
              </div>
              <div class="highlight-item">
                <div class="highlight-ring"><div class="highlight-inner"><img src="assets/img/portfolio-logo.jpg" alt="Portfolio"></div></div>
                <span class="highlight-text">Portfolio</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="postingan" class="portfolio section pt-5 pb-5">
      <div class="container section-title" data-aos="fade-up">
        <h2>Market Update</h2>
      </div>
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p style="color: #00bfff;"><strong>Multibagger Investing Strategy</strong></p>
            <img src="assets/img/post-multibagger.jpg" class="img-fluid rounded shadow" alt="Postingan Multibagger" style="width: 100%; border: 1px solid #333;">
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p style="color: #00bfff;"><strong>Berita Terkini IHSG</strong></p>
            <img src="assets/img/post-ihsg.jpg" class="img-fluid rounded shadow" alt="Postingan IHSG" style="width: 100%; border: 1px solid #333;">
          </div>
        </div>
      </div>
    </section>
  </main>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center" style="background: #00bfff; color: #fff;"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
