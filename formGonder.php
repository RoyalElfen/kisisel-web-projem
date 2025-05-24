<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Verileri</title>
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  <div class="contact-wrapper">
    <div class="contact-header">Gönderilen Form Verileri</div>
    <div class="contact-body">
      <?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ad = $_POST["firstName"] ?? "Belirtilmemiş";
    $soyad = $_POST["lastName"] ?? "Belirtilmemiş";
    $email = $_POST["email"] ?? "Belirtilmemiş";
    $telefon = $_POST["telefon"] ?? "Belirtilmemiş";
    $cinsiyet = $_POST["cinsiyet"] ?? "Belirtilmemiş";
    $sehir = $_POST["sehir"] ?? "Belirtilmemiş";
    $dogumTarihi = $_POST["dogumTarihi"] ?? "Belirtilmemiş";
    $nedenler = $_POST["nedenler"] ?? [];
    $mesaj = $_POST["message"] ?? "Belirtilmemiş";
    $kaynak = $_POST["kaynak"] ?? "Yüklenmemiş";

    echo "<p><strong>Ad:</strong> " . ($ad ?: "Belirtilmemiş") . "</p>";
    echo "<p><strong>Soyad:</strong> " . ($soyad ?: "Belirtilmemiş") . "</p>";
    echo "<p><strong>Email:</strong> " . ($email ?: "Belirtilmemiş") . "</p>";
    echo "<p><strong>Telefon:</strong> " . ($telefon ?: "Belirtilmemiş") . "</p>";
    echo "<p><strong>Cinsiyet:</strong> " . ($cinsiyet ?: "Belirtilmemiş") . "</p>";
    echo "<p><strong>Şehir:</strong> " . ($sehir ?: "Belirtilmemiş") . "</p>";
    echo "<p><strong>Doğum Tarihi:</strong> " . ($dogumTarihi ?: "Belirtilmemiş") . "</p>";
    echo "<p><strong>Nedenler:</strong> " . (!empty($nedenler) ? implode(", ", $nedenler) : "Belirtilmemiş") . "</p>";
    echo "<p><strong>Mesaj:</strong> " . ($mesaj ?: "Belirtilmemiş") . "</p>";
    echo "<p><strong>Kaynak:</strong> " . ($kaynak ?: "Yüklenmemiş") . "</p>";

    if (isset($_FILES["dosya"]) && $_FILES["dosya"]["error"] == 0) {
        $dosyaAd = $_FILES["dosya"]["name"];
        echo "<p><strong>Yüklenen Dosya:</strong> $dosyaAd</p>";
    } else {
        echo "<p><strong>Yüklenen Dosya:</strong> Yüklenmemiş</p>";
    }

    echo '<div style="text-align: center; margin-top: 40px;">';
    echo '<a href="iletisim.html" class="btn btn-secondary" style="padding: 10px 20px; text-decoration: none; background-color: #007bff; color: white; border-radius: 5px;">İletişim Sayfasına Geri Dön</a>';
    echo '</div>';
} else {
    echo "<p>Form gönderilmedi.</p>";
}
?>
    </div>
  </div>
</body>
</html>