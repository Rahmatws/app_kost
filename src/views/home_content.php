<?php
require_once __DIR__ . '/../controllers/summary.php';
$kosong = getKamarKosong();
$hampir = getKamarHampirJatuhTempo();
$telat = getKamarTelatBayar();
$summary = getSummaryCount();
?>
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
    <div class="dashboard-card"><div class="icon">🏡</div><div class="label">Kamar Kosong</div><div style="color:#aaa;"> <?= count($kosong) ? '' : 'Tidak ada kamar kosong saat ini' ?></div></div>
    <div class="dashboard-card"><div class="icon">⏰</div><div class="label">Kamar Hampir Jatuh Tempo</div><div style="color:#aaa;"> <?= count($hampir) ? '' : 'Tidak ada kamar yang hampir jatuh tempo' ?></div></div>
    <div class="dashboard-card"><div class="icon">⚠️</div><div class="label">Kamar Telat Bayar</div><div style="color:#aaa;"> <?= count($telat) ? '' : 'Tidak ada kamar yang telat bayar' ?></div></div>
</div>
<div class="section-title">Aksi Cepat</div>
<div class="quick-actions">
    <a href="?page=penghuni&action=add">+ Tambah Penghuni Baru</a>
    <a href="?page=kamar&action=add">+ Tambah Kamar Baru</a>
    <a href="?page=tagihan&action=add">+ Buat Tagihan Baru</a>
    <a href="?page=bayar">Lihat Pembayaran</a>
</div> 