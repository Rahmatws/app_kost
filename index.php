<?php
// Landing page KosVerse
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>KosVerse - Landing Page</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        body { background: #f7e9d2; margin:0; font-family: 'Segoe UI',sans-serif; }
        .landing-container { max-width: 700px; margin: 60px auto; background: #fff8f0; border-radius: 18px; box-shadow: 0 4px 32px #0001; padding: 48px 38px 38px 38px; text-align: center; }
        .logo-kosverse { font-size: 2.5em; font-weight: bold; color: #2a3b4c; letter-spacing: 2px; margin-bottom: 8px; }
        .logo-kosverse svg { vertical-align: middle; margin-right: 8px; }
        .landing-title { font-size: 2em; font-weight: 700; color: #2a3b4c; margin-bottom: 8px; }
        .landing-desc { color: #8d7b5a; margin-bottom: 24px; font-size:1.1em; }
        .landing-btn { display:inline-block; background:#7b5ae6; color:#fff; font-weight:600; border:none; border-radius:8px; padding:14px 38px; font-size:1.1em; text-decoration:none; margin-top:18px; box-shadow:0 2px 8px #e6b87a22; transition:background 0.2s; }
        .landing-btn:hover { background:#5a3be6; }
    </style>
</head>
<body>
    <div class="landing-container">
        <div class="logo-kosverse">
            <svg width="38" height="38" viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="15" fill="#ffb347" stroke="#2a3b4c" stroke-width="2"/><path d="M10 22V14L16 10L22 14V22H10Z" fill="#fff" stroke="#2a3b4c" stroke-width="2"/></svg>
            KosVerse
        </div>
        <div class="landing-title">Selamat Datang di KosVerse</div>
        <div class="landing-desc">Sistem manajemen kost modern untuk mengelola penghuni, kamar, barang, tagihan, dan pembayaran dengan mudah dan efisien.<br><br>Kelola kost Anda secara digital, pantau data real-time, dan nikmati kemudahan administrasi!</div>
        <a href="login.php" class="landing-btn">Login Admin</a>
    </div>
</body>
</html> 