<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tugas Pra ETS - Stockwise.id</title>

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    body, .main, .index-page { background-color: #000000 !important; color: #ffffff !important; }
    p, li { color: #ffffff !important; }

    /* Header & Navbar */
    .header { background-color: #0a0a0a !important; border-bottom: 1px solid #222; }
    .header .logo h1 { color: #ffffff !important; }
    .navmenu a { color: #ffffff !important; }
    .navmenu a:hover, .navmenu a.active { color: #ff0000 !important; }

    /* Tombol Utama */
    .btn-getstarted, .btn-get-started {
      background-color: #ff0000 !important;
      color: #000000 !important;
      font-weight: 600 !important;
      border: none !important;
    }
    .btn-getstarted:hover, .btn-get-started:hover { background-color: #ff0000 !important; color: #fff !important; }

    /* Heading Text General */
    h1, h2, h3, h4, h5, h6 { color: #ffffff !important; }
    .section-title h2 { color: #ff0000 !important; }
    .section-title h2::after { background: #ff0000 !important; } /* Garis bawah judul */
    strong { color: #ffffff !important; }

    /* Section Backgrounds */
    .hero.dark-background { background-color: #000000 !important; background-image: none !important; }
    .section { background-color: #000000 !important; }
    .section-bg { background-color: #ffffff !important; }

    /* Card Berita Styling */
    .news-card {
      background-color: #1a1a1a !important;
      border: 1px solid #333 !important;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }
    .news-card img { height: 220px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px; }
    .news-card .card-title { color: #ffffff !important; }
    .news-card .badge-date { position: absolute; bottom: 0; right: 0; background: #ff0000; color: #000; padding: 5px 15px; font-size: 12px; font-weight: bold; }
    .news-card a { color: #ff0000 !important; font-weight: 500; }
    .news-card p { color: #cccccc !important; } /* Sedikit abu terang untuk teks berita agar ada kontras */

    /* Misc */
    .hero-img img { border-color: #333 !important; }
    .scroll-top { background: #ff0000 !important; color: #ffffff !important; }
  </style>
</head>

<body class="index-page">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">TomTom</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Producs</a></li>
          <li><a href="#about">Solution</a></li>
          <li><a href="#achievement">Developers</a></li>
          <li><a href="#sejarah">Company</a></li>
          <li><a href="#berita">Newsroom</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#about">Log in</a>

    </div>
  </header>

  <main class="main">

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero section dark-background">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>TomTom<i class="bi bi-patch-check-fill" style="color: #00bfff; font-size: 0.7em;"></i></h1>
            <p>Maps and location technology to keep the world moving!</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Contact sales&rarr;</a>
              <a href="#about" class="btn-get-started">Start building for free</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img text-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/clients-logo.webp" class="img-fluid animated rounded-circle border border-4 shadow-lg" alt="Logo Stockwise" style="max-width: 350px;">
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <h2>TomTom Orbis Maps</h2>
      </div>
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/maps-logo.jpg" class="img-fluid rounded shadow" alt="Komunitas Stockwise" style="border: 1px solid #333;">
          </div>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <p>
              Dont let restrictive maps limit your business ambitions. Make our map yours and build digital mapping solutions that adapt to your business needs instead. Get ahead with the new map in town, based on an open standard that a breeze to build on.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="achievement" class="section section-bg">
      <div class="container section-title" data-aos="fade-up">
        <h2>Explore solutions</h2>
     </div>
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card news-card h-100 position-relative">
              <img src="assets/img/government-logo.avif" class="card-img-top" alt="Berita 1">
              <div class="card-body mt-2">
                <h5 class="card-title fw-bold">Government and public sector</h5>
                <p class="small mb-2" style="color: #ffffff !important;">TomtTom Traffic</p>
                <a href="#" class="text-decoration-none">TomTom Orbit Maps</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card news-card h-100 position-relative">
              <img src="assets/img/public-logo.avif" class="card-img-top" alt="Berita 2">
              <div class="card-body mt-2">
                <h5 class="card-title fw-bold">Public safety and emergency management</h5>
                <p class="small mb-2" style="color: #ffffff !important;">TomtTom Traffic</p>
                <a href="#" class="text-decoration-none">TomTom Orbit Maps</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card news-card h-100 position-relative">
              <img src="assets/img/urban-logo.avif" class="card-img-top" alt="Berita 3">
              <div class="card-body mt-2">
                <h5 class="card-title fw-bold">Urban infrastructure management and transportation planning</h5>
                <p class="small mb-2" style="color: #ffffff !important;"></i>TomTom Traffic</p>
                <a href="#" class="text-decoration-none">TomTom Orbis Maps</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="sejarah" class="section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Why TomTomm</h2>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-12">
            <p class="text-center" style="line-height: 1.8;">
              TomTom adalah pemimpin global dalam teknologi geolokasi, peta presisi tinggi, dan lalu lintas real-time. Perusahaan ini dipilih karena keunggulannya dalam menciptakan solusi navigasi yang andal untuk pengemudi, kota, dan bisnis, serta komitmen terhadap inovasi teknologi, keberlanjutan, dan inklusivitas di tempat kerja.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="berita" class="section section-bg">
      <div class="container section-title" data-aos="fade-up">
        <h2>Explore Products</h2>
      </div>
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card news-card h-100 position-relative">
              <img src="assets/img/product-driving-logo.jpg" class="card-img-top" alt="Berita 1">
              <div class="card-body mt-2">
                <h5 class="card-title fw-bold">Orbis Maps for Automad Driving</h5>
                <p class="small mb-2" style="color: #ffffff !important;"><i class="bi bi-person"></i> Admin </p>
                <a href="#" class="text-decoration-none">Baca Selengkapnya &rarr;</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card news-card h-100 position-relative">
              <img src="assets/img/nav-sdk-logo.avif" class="card-img-top" alt="Berita 2">
              <div class="card-body mt-2">
                <h5 class="card-title fw-bold">Navigation SDK for Mobile</h5>
                <p class="small mb-2" style="color: #ffffff !important;"><i class="bi bi-person"></i> Admin </p>
                <a href="#" class="text-decoration-none">Baca Selengkapnya &rarr;</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card news-card h-100 position-relative">
              <img src="assets/img/product-traffic-logo.jpg" class="card-img-top" alt="Berita 3">
              <div class="card-body mt-2">
                <h5 class="card-title fw-bold">Traffic</h5>
                <p class="small mb-2" style="color: #ffffff !important;"><i class="bi bi-person"></i> Andry </p>
                <a href="#" class="text-decoration-none">Baca Selengkapnya &rarr;</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= 5. Line Up Section ======= -->
    <section id="lineup" class="section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Next steps</h2>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <img src="#" class="img-fluid rounded border border-secondary shadow" alt="Line Up Portofolio">

            <p class="mt-3" style="font-size: 13px; font-style: italic; color: #ffffff !important;">
              Create an account on our developer portal, or contact sales for a tailored approach
            </p>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
