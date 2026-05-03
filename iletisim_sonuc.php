<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Form Sonucu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h4>Gönderilen Form Bilgileri</h4>
            </div>
            <div class="card-body">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    $ad = $_POST['ad'] ?? 'Belirtilmedi';
                    $soyad = $_POST['soyad'] ?? 'Belirtilmedi';
                    $email = $_POST['email'] ?? 'Belirtilmedi';
                    $sehir = $_POST['sehir'] ?? 'Belirtilmedi';
                    $mesaj = $_POST['mesaj'] ?? 'Belirtilmedi';
                    $cinsiyet = $_POST['gender'] ?? 'Belirtilmedi';
                    
                    
                    $ilgi_alanlari = isset($_POST['interests']) ? implode(", ", $_POST['interests']) : "Seçilmedi";

                    echo "<p><strong>Ad Soyad:</strong> $ad $soyad</p>";
                    echo "<p><strong>E-posta:</strong> $email</p>";
                    echo "<p><strong>Şehir:</strong> $sehir</p>";
                    echo "<p><strong>Cinsiyet:</strong> $cinsiyet</p>";
                    echo "<p><strong>İlgi Alanları:</strong> $ilgi_alanlari</p>";
                    echo "<p><strong>Mesaj:</strong> $mesaj</p>";
                } else {
                    echo "<div class='alert alert-danger'>Form verisi gelmedi!</div>";
                }
                ?>
                <a href="iletisim.html" class="btn btn-primary mt-3">Geri Dön</a>
            </div>
        </div>
    </div>
</body>
</html>