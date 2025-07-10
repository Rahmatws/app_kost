<?php
require_once __DIR__ . '/../controllers/summary.php';
$kosong = getKamarKosong();
$hampir = getKamarHampirJatuhTempo();
$telat = getKamarTelatBayar();
$summary = getSummaryCount();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Aplikasi Kost</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1>Dashboard Aplikasi Kost</h1>
    <nav>
        <a href="?page=penghuni">Data Penghuni</a> |
        <a href="?page=kamar">Data Kamar</a> |
        <a href="?page=barang">Data Barang</a> |
        <a href="?page=kmr_penghuni">Kamar Penghuni</a> |
        <a href="?page=brng_bawaan">Barang Bawaan</a> |
        <a href="?page=tagihan">Tagihan</a> |
        <a href="?page=bayar">Pembayaran</a>
    </nav>
    <h2>Ringkasan Data</h2>
    <ul>
        <li>Penghuni: <?= $summary['tb_penghuni'] ?></li>
        <li>Kamar: <?= $summary['tb_kamar'] ?></li>
        <li>Barang: <?= $summary['tb_barang'] ?></li>
        <li>Kamar Penghuni: <?= $summary['tb_kmr_penghuni'] ?></li>
        <li>Tagihan: <?= $summary['tb_tagihan'] ?></li>
        <li>Pembayaran: <?= $summary['tb_bayar'] ?></li>
    </ul>
    <h2>Kamar Kosong</h2>
    <ul>
        <?php foreach ($kosong as $k): ?>
            <li>Kamar <?= $k['nomor'] ?> (Rp<?= $k['harga'] ?>)</li>
        <?php endforeach; ?>
        <?php if (count($kosong) == 0): ?>
            <li>Tidak ada kamar kosong</li>
        <?php endif; ?>
    </ul>
    <h2>Kamar Hampir Jatuh Tempo</h2>
    <ul>
        <?php foreach ($hampir as $h): ?>
            <li>Kamar <?= $h['nomor'] ?> - <?= $h['nama'] ?>, Bulan <?= $h['bulan'] ?>, Tagihan Rp<?= $h['jml_tagihan'] ?></li>
        <?php endforeach; ?>
        <?php if (count($hampir) == 0): ?>
            <li>Tidak ada kamar yang hampir jatuh tempo</li>
        <?php endif; ?>
    </ul>
    <h2>Kamar Telat Bayar</h2>
    <ul>
        <?php foreach ($telat as $t): ?>
            <li>Kamar <?= $t['nomor'] ?> - <?= $t['nama'] ?>, Bulan <?= $t['bulan'] ?>, Tagihan Rp<?= $t['jml_tagihan'] ?></li>
        <?php endforeach; ?>
        <?php if (count($telat) == 0): ?>
            <li>Tidak ada kamar yang telat bayar</li>
        <?php endif; ?>
    </ul>
    <script src="assets/app.js"></script>
</body>
</html> 