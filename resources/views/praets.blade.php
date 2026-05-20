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
    .navmenu a:hover, .navmenu a.active { color: #00bfff !important; }

    /* Tombol Utama */
    .btn-getstarted, .btn-get-started {
      background-color: #00bfff !important;
      color: #000000 !important;
      font-weight: 600 !important;
      border: none !important;
    }
    .btn-getstarted:hover, .btn-get-started:hover { background-color: #0095f6 !important; color: #fff !important; }

    /* Heading Text General */
    h1, h2, h3, h4, h5, h6 { color: #ffffff !important; }
    .section-title h2 { color: #00bfff !important; }
    .section-title h2::after { background: #00bfff !important; } /* Garis bawah judul */
    strong { color: #ffffff !important; }

    /* Section Backgrounds */
    .hero.dark-background { background-color: #000000 !important; background-image: none !important; }
    .section { background-color: #000000 !important; }
    .section-bg { background-color: #121212 !important; }

    /* Card Berita Styling */
    .news-card {
      background-color: #1a1a1a !important;
      border: 1px solid #333 !important;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }
    .news-card img { height: 220px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px; }
    .news-card .card-title { color: #ffffff !important; }
    .news-card .badge-date { position: absolute; bottom: 0; right: 0; background: #00bfff; color: #000; padding: 5px 15px; font-size: 12px; font-weight: bold; }
    .news-card a { color: #00bfff !important; font-weight: 500; }
    .news-card p { color: #cccccc !important; } /* Sedikit abu terang untuk teks berita agar ada kontras */

    /* Misc */
    .hero-img img { border-color: #333 !important; }
    .scroll-top { background: #00bfff !important; color: #000 !important; }
  </style>
</head>

<body class="index-page">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">STOCKWISE.ID</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#achievement">Achievement</a></li>
          <li><a href="#sejarah">Sejarah</a></li>
          <li><a href="#berita">Berita</a></li>
          <li><a href="#lineup">Line Up</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#about">Lanjut Membaca</a>

    </div>
  </header>

  <main class="main">

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero section dark-background">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Stockwise Indonesia <i class="bi bi-patch-check-fill" style="color: #00bfff; font-size: 0.7em;"></i></h1>
            <p>MEDIA & KOMUNITAS SAHAM TERBESAR #1 📈📊</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Mulai Jelajah</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img text-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/stockwise-logo.jpg" class="img-fluid animated rounded-circle border border-4 shadow-lg" alt="Logo Stockwise" style="max-width: 350px;">
          </div>
        </div>
      </div>
    </section>

    <!-- ======= 1. About Us Section ======= -->
    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <h2>ABOUT US</h2>
      </div>
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/community-logo.webp" class="img-fluid rounded shadow" alt="Komunitas Stockwise" style="border: 1px solid #333;">
          </div>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <p>
              Stockwise Indonesia adalah platform edukasi dan komunitas saham terbesar nomor satu di Indonesia.
              Berdedikasi untuk memberikan literasi keuangan yang komprehensif, kami memandu para investor dari
              pemula hingga profesional untuk menemukan saham-saham potensial (Multibagger).
            </p>
            <p>
              Kami berkomitmen untuk menghadirkan analisis pasar berkualitas, mengembangkan talenta trader muda,
              dan membangun komunitas investasi yang solid dan anti-scam, baik secara online maupun offline.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= 2. Achievement Section ======= -->
    <section id="achievement" class="section section-bg">
      <div class="container section-title" data-aos="fade-up">
        <h2>ACHIEVEMENT</h2>
      </div>
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h3 class="mb-4" style="font-weight: 700;">Pencapaian Terbesar <span style="color: #00bfff;">Stockwise</span></h3>
            <ul class="list-unstyled" style="line-height: 2.2;">
              <li>🏆 <strong>Total Followers:</strong> 521.000+ Investor</li>
              <li>📈 <strong>Total Konten Edukasi:</strong> 1.700+ Posts</li>
              <li>🎓 <strong>Masterclass Alumni:</strong> Ribuan Peserta Lulus</li>
              <li>🏢 <strong>Company Visit:</strong> Emiten-emiten Top BEI</li>
              <li>🤝 <strong>Komunitas Aktif:</strong> Terbesar di Indonesia</li>
            </ul>
          </div>
          <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/testimonials-logo.jpg" class="img-fluid rounded shadow" alt="Pencapaian" style="max-width: 80%; border: 1px solid #333;">
          </div>
        </div>
      </div>
    </section>

    <!-- ======= 3. Sejarah Klub Section ======= -->
    <section id="sejarah" class="section">
      <div class="container section-title" data-aos="fade-up">
        <h2>SEJARAH KOMUNITAS</h2>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-12">
            <p class="text-center" style="line-height: 1.8;">
              Didirikan oleh Andry Hakim, Stockwise.id berawal dari visi sederhana untuk memerangi tingginya angka penipuan investasi (scam) di Indonesia. Stockwise merupakan sosok kunci yang mempopulerkan strategi "Multibagger Investing" kepada masyarakat luas, mengubah cara pandang ritel terhadap pasar modal.
            </p>
            <p class="text-center mt-3" style="line-height: 1.8;">
              Momen paling ikonik dalam sejarah komunitas terjadi ketika ribuan anggota berhasil mengidentifikasi peluang emas saat krisis, membuktikan bahwa edukasi yang tepat dapat mengalahkan kepanikan pasar. Kini, Stockwise menempatkan diri sebagai salah satu pilar utama literasi keuangan di tanah air.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= 4. Berita Terbaru Section ======= -->
    <section id="berita" class="section section-bg">
      <div class="container section-title" data-aos="fade-up">
        <h2>BERITA TERBARU</h2>
      </div>
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card news-card h-100 position-relative">
              <img src="assets/img/post-ihsg.jpg" class="card-img-top" alt="Berita 1">
              <span class="badge-date">MAY 05</span>
              <div class="card-body mt-2">
                <h5 class="card-title fw-bold">Market Update: IHSG Hari Ini</h5>
                <p class="small mb-2" style="color: #00bfff !important;"><i class="bi bi-person"></i> Admin Stockwise</p>
                <a href="#" class="text-decoration-none">Baca Selengkapnya &rarr;</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card news-card h-100 position-relative">
              <img src="assets/img/post-multibagger.jpg" class="card-img-top" alt="Berita 2">
              <span class="badge-date">MAY 03</span>
              <div class="card-body mt-2">
                <h5 class="card-title fw-bold">Strategi Multibagger 2026</h5>
                <p class="small mb-2" style="color: #00bfff !important;"><i class="bi bi-person"></i> Admin Stockwise</p>
                <a href="#" class="text-decoration-none">Baca Selengkapnya &rarr;</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card news-card h-100 position-relative">
              <img src="assets/img/Gokart-logo.png" class="card-img-top" alt="Berita 3">
              <span class="badge-date">MAY 01</span>
              <div class="card-body mt-2">
                <h5 class="card-title fw-bold">Stockwise Gokart Championship 2026 🏆</h5>
                <p class="small mb-2" style="color: #00bfff !important;"><i class="bi bi-person"></i> Andry Hakim</p>
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
        <h2>TOP WATCHLIST (LINE UP)</h2>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <img src="assets/img/portfolio-logo.jpg" class="img-fluid rounded border border-secondary shadow" alt="Line Up Portofolio">

            <p class="mt-3" style="font-size: 13px; font-style: italic; color: #ffffff !important;">
              *Watchlist saham dapat berubah sesuai dengan kondisi market menjelang pembukaan bursa.
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
