  <!DOCTYPE html>
  <html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Form Verileri</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body class="iletisim-sayfasi">
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

    <main class="container my-5">
      <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center">
          <h5>Gönderilen Form Verileri</h5>
        </div>
        <div class="card-body">
          <?php
          if ($_SERVER["REQUEST_METHOD"] === "POST") {
              $ad = htmlspecialchars($_POST["firstName"] ?? "Belirtilmemiş");
              $soyad = htmlspecialchars($_POST["lastName"] ?? "Belirtilmemiş");
              $email = htmlspecialchars($_POST["email"] ?? "Belirtilmemiş");
              $telefon = htmlspecialchars($_POST["telefon"] ?? "Belirtilmemiş");
              $cinsiyet = htmlspecialchars($_POST["cinsiyet"] ?? "Belirtilmemiş");
              $sehir = htmlspecialchars($_POST["sehir"] ?? "Belirtilmemiş");
              $dogumTarihiRaw = $_POST["dogumTarihi"] ?? "";
              $dogumTarihi = trim($dogumTarihiRaw) === "" ? "Belirtilmemiş" : htmlspecialchars($dogumTarihiRaw);
              $nedenler = $_POST["nedenler"] ?? [];
              $mesaj = htmlspecialchars($_POST["message"] ?? "Belirtilmemiş");
              $kaynak = htmlspecialchars($_POST["kaynak"] ?? "Yüklenmemiş");

              echo '<dl class="row">';
              echo '<dt class="col-sm-3">Ad:</dt><dd class="col-sm-9">' . $ad . '</dd>';
              echo '<dt class="col-sm-3">Soyad:</dt><dd class="col-sm-9">' . $soyad . '</dd>';
              echo '<dt class="col-sm-3">Email:</dt><dd class="col-sm-9">' . $email . '</dd>';
              echo '<dt class="col-sm-3">Telefon:</dt><dd class="col-sm-9">' . $telefon . '</dd>';
              echo '<dt class="col-sm-3">Cinsiyet:</dt><dd class="col-sm-9">' . $cinsiyet . '</dd>';
              echo '<dt class="col-sm-3">Şehir:</dt><dd class="col-sm-9">' . $sehir . '</dd>';
              echo '<dt class="col-sm-3">Doğum Tarihi:</dt><dd class="col-sm-9">' . $dogumTarihi . '</dd>';
              echo '<dt class="col-sm-3">Nedenler:</dt><dd class="col-sm-9">' . (!empty($nedenler) ? htmlspecialchars(implode(", ", $nedenler)) : "Belirtilmemiş") . '</dd>';
              echo '<dt class="col-sm-3">Mesaj:</dt><dd class="col-sm-9">' . nl2br($mesaj) . '</dd>';
              echo '<dt class="col-sm-3">Kaynak:</dt><dd class="col-sm-9">' . $kaynak . '</dd>';

              if (isset($_FILES["dosya"]) && $_FILES["dosya"]["error"] == 0) {
                  $dosyaAd = htmlspecialchars($_FILES["dosya"]["name"]);
                  echo '<dt class="col-sm-3">Yüklenen Dosya:</dt><dd class="col-sm-9">' . $dosyaAd . '</dd>';
              } else {
                  echo '<dt class="col-sm-3">Yüklenen Dosya:</dt><dd class="col-sm-9">Yüklenmemiş</dd>';
              }
              echo '</dl>';

              echo '<div class="text-center mt-4">';
              echo '<a href="iletisim.html" class="btn btn-primary">İletişim Sayfasına Geri Dön</a>';
              echo '</div>';
          } else {
              echo '<p class="text-danger text-center">Form gönderilmedi.</p>';
          }
          ?>
        </div>
      </div>
    </main>

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

    <!-- Bootstrap 5 JS Bundle (Popper + Bootstrap JS) -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    ></script>
  </body>
  </html>
