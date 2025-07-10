<?php
function active($page) {
    return (isset($_GET['page']) && $_GET['page'] === $page) ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>KosVerse</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo-kosverse">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" style="vertical-align:middle;margin-right:8px;"><circle cx="16" cy="16" r="15" fill="#ffb347" stroke="#2a3b4c" stroke-width="2"/><path d="M10 22V14L16 10L22 14V22H10Z" fill="#fff" stroke="#2a3b4c" stroke-width="2"/></svg>
            KosVerse
        </div>
        <nav>
            <a href="?page=home" class="<?= active('home') ?>">🏠 Dashboard</a>
            <a href="?page=penghuni" class="<?= active('penghuni') ?>">👥 Data Penghuni</a>
            <a href="?page=kamar" class="<?= active('kamar') ?>">🏡 Data Kamar</a>
            <a href="?page=barang" class="<?= active('barang') ?>">📦 Data Barang</a>
            <a href="?page=kmr_penghuni" class="<?= active('kmr_penghuni') ?>">🔗 Kamar Penghuni</a>
            <a href="?page=brng_bawaan" class="<?= active('brng_bawaan') ?>">👜 Barang Bawaan</a>
            <a href="?page=tagihan" class="<?= active('tagihan') ?>">💳 Tagihan</a>
            <a href="?page=bayar" class="<?= active('bayar') ?>">💰 Pembayaran</a>
        </nav>
    </div>
    <div class="main-content">
        <?php include __DIR__ . '/' . $content_view; ?>
    </div>
    <script src="assets/app.js"></script>
</body>
</html> 