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
    <div class="dashboard-card"><div class="icon">👥</div><div class="value">6</div><div class="label">Total Penghuni</div></div>
    <div class="dashboard-card"><div class="icon">🏡</div><div class="value">7</div><div class="label">Total Kamar</div></div>
    <div class="dashboard-card"><div class="icon">📦</div><div class="value">8</div><div class="label">Total Barang</div></div>
    <div class="dashboard-card"><div class="icon">💳</div><div class="value">3</div><div class="label">Tagihan Pending</div></div>
    <div class="dashboard-card"><div class="icon">💰</div><div class="value">4</div><div class="label">Pembayaran Lunas</div></div>
</div>
<div class="dashboard-cards">
    <div class="dashboard-card"><div class="icon">🏡</div><div class="label">Kamar Kosong</div><div style="color:#aaa;">Kamar 101, Kamar 104</div></div>
    <div class="dashboard-card"><div class="icon">⏰</div><div class="label">Kamar Hampir Jatuh Tempo</div><div style="color:#aaa;">Kamar 105</div></div>
    <div class="dashboard-card"><div class="icon">⚠️</div><div class="label">Kamar Telat Bayar</div><div style="color:#aaa;">Kamar 102</div></div>
</div>
<div class="section-title">Aksi Cepat</div>
<div class="quick-actions">
    <a href="?page=penghuni&action=add">+ Tambah Penghuni Baru</a>
    <a href="?page=kamar&action=add">+ Tambah Kamar Baru</a>
    <a href="?page=tagihan&action=add">+ Buat Tagihan Baru</a>
    <a href="?page=bayar">Lihat Pembayaran</a>
</div> 