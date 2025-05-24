<?php
// Kullanıcı bilgileri
$dogru_kullanici = "g231210033@sakarya.edu.tr";
$dogru_sifre = "g231210033";

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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Giriş Başarılı</title>
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
      <div class="page-wrapper">
        <nav class="navbar">
      <div class="container">
        <div class="logo"><a href="index.html">Yunus Emre Kurnalı</a></div>
        <ul class="nav-links">
          <li><a href="index.html">Hakkımda</a></li>
          <li><a href="cv.html">CV</a></li>
          <li><a href="sehrim.html">Şehrim</a></li>
          <li><a href="takimimiz.html">Takımımız</a></li>
          <li><a href="ilgialanlarim.html">İlgi Alanlarım</a></li>
          <li><a href="iletisim.html">İletişim</a></li>
          <li><a href="login.html">Giriş Yap</a></li>
        </ul>
      </div>
    </nav>

        <div class="login-wrapper">
            <div class="login-header">Giriş Başarılı</div>
            <p style="text-align: center; font-size: 1.2rem;">
                Hoşgeldiniz <strong><?php echo htmlspecialchars($username); ?></strong>
            </p>
        </div>

        <footer>
      <div class="footer-container">
        <p>© 2025 Yunus Emre Kurnalı - Tüm hakları saklıdır.</p>
        <div class="footer-links">
          <span class="footer-divider"></span>
          <a href="iletisim.html">İletişim</a>
          <span class="footer-divider"></span>
          <a href="login.html">Giriş Yap</a>
          <span class="footer-divider"></span>
        </div>
      </div>
    </footer>
    </div>
    </body>
    </html>
    <?php
} else {
    // Giriş başarısızsa login sayfasına yönlendir
    header("Location: login.html");
    exit();
}
?>

