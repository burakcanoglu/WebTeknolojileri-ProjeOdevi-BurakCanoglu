<?php

$user = $_POST['username'] ?? '';
$pass = $_POST['password'] ?? '';


$dogru_user = "B251210065"; 
$dogru_pass = "31406329020"; 

// KONTROL MEKANİZMASI
if ($user == $dogru_user && $pass == $dogru_pass) {
    // Giriş Başarılıysa
    echo "<!DOCTYPE html>
    <html>
    <head>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
        <meta http-equiv='refresh' content='3;url=index.html'> </head>
    <body class='container mt-5 text-center'>
        <div class='alert alert-success'>
            <h2>Hoşgeldiniz " . $user . "</h2>
            <p>Giriş başarılı! Ana sayfaya yönlendiriliyorsunuz...</p>
        </div>
    </body>
    </html>";
} else {
    
    header("Location: login.php?hata=1");
    exit();
}
?>