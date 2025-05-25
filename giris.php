  <?php
  // Kullanıcı bilgileri
  $dogru_kullanici = "b241121001@sakarya.edu.tr";
  $dogru_sifre = "b241121001";

  // Formdan gelen veriler
  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  // Giriş kontrolü
  if ($username === $dogru_kullanici && $password === $dogru_sifre) {
      // Giriş başarılıysa HTML sayfasını göster
      ?>
      <!DOCTYPE html>
      <html lang="tr">
      <head>
          <meta charset="UTF-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1" />
          <title>Giriş Başarılı</title>

          <!-- Bootstrap -->
          <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
          />
      </head>
      <body class="d-flex flex-column min-vh-100">

        <!-- NAVBAR  Boostrap ile uyumlu-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="index.html">Yunus Emre Kurnalı</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Hakkımda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cv.html">CV</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sehrim.html">Şehrim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="takimimiz.html">Takımımız</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="iletisim.html">İletişim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Giriş Yap</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

        <!-- Ana içerik -->
        <main class="flex-grow-1 d-flex justify-content-center align-items-center" style="min-height: 70vh;">
          <div class="card text-center shadow" style="max-width: 400px; width: 100%;">
            <div class="card-header bg-success text-white">
              Giriş Başarılı
            </div>
            <div class="card-body">
              <p class="card-text fs-5">
                Hoşgeldiniz <strong><?php echo htmlspecialchars($username); ?></strong>
              </p>
              <a href="index.html" class="btn btn-primary mt-3">Anasayfaya Dön</a>
            </div>
          </div>
        </main>

        <!-- Footer -->
        <footer class="bg-light py-4 mt-5 text-center">
        <div class="container">
          <p class="mb-3 mb-md-2">
            © 2025 Yunus Emre Kurnalı - Tüm hakları saklıdır.
          </p>
          <div class="d-flex justify-content-center align-items-center flex-wrap">
            <span class="text-muted mx-2">|</span>
            <a
              href="iletisim.html"
              class="text-decoration-none mx-2 text-dark fw-semibold"
              >İletişim</a
            >
            <span class="text-muted mx-2">|</span>
            <a
              href="login.html"
              class="text-decoration-none mx-2 text-dark fw-semibold"
              >Giriş Yap</a
            >
            <span class="text-muted mx-2">|</span>
          </div>
        </div>
      </footer>


        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      </body>
      </html>
      <?php
  } else {
      // Giriş başarısızsa login sayfasına yönlendir
      header("Location: login.html");
      exit();
  }
  ?>

