<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap | Burak Çanoğlu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-dark">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-lg mt-5">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Kullanıcı Girişi</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="gonder.php" method="POST">

                       <?php
                            if (isset($_GET['hata'])) {
                               echo '<div class="alert alert-danger text-center py-2">
                                     Kullanıcı adı veya şifre hatalı!
                                    </div>';
                                 }                                                 
                        ?> 
                            <div class="mb-3">
                                <label class="form-label">Kullanıcı Adı (Öğrenci No)</label>
                                <input type="text" name="username" class="form-control" placeholder="B251210065" required>
                                <div class="form-text text-muted">Öğrenci numaranızı giriniz.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Şifre (TCKN.)</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>
                            <p class="text-center mt-3 text-secondary" style="font-size: 0.8rem;">
                               <strong> Giriş Bilgileri:</strong><br>
                               Kullanıcı Adı: B251210065  | Şifre: 31406329020
</                          p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>