<?php
require_once __DIR__ . '/../controllers/summary.php';
$kosong = getKamarKosong();
$hampir = getKamarHampirJatuhTempo();
$telat = getKamarTelatBayar();
$summary = getSummaryCount();
function active($page) {
    return (isset($_GET['page']) && $_GET['page'] === $page) ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard KosVerse</title>
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
        <h1>Dashboard Overview</h1>
        <div style="color:#8d7b5a;margin-bottom:24px;">Ringkasan data dan informasi penting aplikasi kost Anda</div>
        <div class="dashboard-cards">
            <div class="dashboard-card"><div class="icon">👥</div><div class="value"><?= $summary['tb_penghuni'] ?></div><div class="label">Total Penghuni</div></div>
            <div class="dashboard-card"><div class="icon">🏡</div><div class="value"><?= $summary['tb_kamar'] ?></div><div class="label">Total Kamar</div></div>
            <div class="dashboard-card"><div class="icon">📦</div><div class="value"><?= $summary['tb_barang'] ?></div><div class="label">Total Barang</div></div>
            <div class="dashboard-card"><div class="icon">💳</div><div class="value"><?= $summary['tb_tagihan'] ?></div><div class="label">Tagihan Pending</div></div>
            <div class="dashboard-card"><div class="icon">💰</div><div class="value"><?= $summary['tb_bayar'] ?></div><div class="label">Pembayaran Lunas</div></div>
        </div>
        <div class="dashboard-cards">
            <div class="dashboard-card"><div class="icon">🏡</div><div class="label">Kamar Kosong</div><div style="color:#aaa;"><?= count($kosong) ? '' : 'Tidak ada kamar kosong saat ini' ?></div></div>
            <div class="dashboard-card"><div class="icon">⏰</div><div class="label">Kamar Hampir Jatuh Tempo</div><div style="color:#aaa;"><?= count($hampir) ? '' : 'Tidak ada kamar yang hampir jatuh tempo' ?></div></div>
            <div class="dashboard-card"><div class="icon">⚠️</div><div class="label">Kamar Telat Bayar</div><div style="color:#aaa;"><?= count($telat) ? '' : 'Tidak ada kamar yang telat bayar' ?></div></div>
        </div>
        <div class="section-title">Aksi Cepat</div>
        <div class="quick-actions">
            <a href="?page=penghuni&action=add">+ Tambah Penghuni Baru</a>
            <a href="?page=kamar&action=add">+ Tambah Kamar Baru</a>
            <a href="?page=tagihan&action=add">+ Buat Tagihan Baru</a>
            <a href="?page=bayar">Lihat Pembayaran</a>
        </div>
    </div>
    <script src="assets/app.js"></script>
</body>
</html> 