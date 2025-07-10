<?php
require_once __DIR__ . '/../controllers/penghuni.php';
$penghuni = getAllPenghuni();
?>
<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:18px;">
    <h2 style="margin:0;">Data Penghuni</h2>
    <div style="font-weight:500;color:#888;">Dashboard / Data Penghuni</div>
</div>
<div style="display:flex;gap:18px;margin-bottom:24px;">
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;">0</div>
        <div style="color:#8d7b5a;">Total Penghuni</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;">0</div>
        <div style="color:#8d7b5a;">Penghuni Aktif</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;">0</div>
        <div style="color:#8d7b5a;">Kamar Terisi</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;">0</div>
        <div style="color:#8d7b5a;">Menunggu Konfirmasi</div>
    </div>
</div>
<div style="display:flex;align-items:center;gap:12px;margin-bottom:18px;">
    <a href="?page=penghuni&action=add" style="background:#7b5ae6;color:#fff;padding:10px 22px;border-radius:8px;font-weight:600;text-decoration:none;box-shadow:0 2px 8px #e6b87a22;">+ Tambah Penghuni</a>
    <button style="background:#ffe6a0;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Import Data</button>
    <button style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Export Data</button>
    <div style="flex:1;"></div>
    <form style="display:flex;align-items:center;gap:4px;" method="get">
        <input type="hidden" name="page" value="penghuni">
        <input type="text" name="q" placeholder="Cari penghuni..." style="padding:8px 12px;border-radius:6px;border:1.5px solid #e6b87a;">
        <button type="submit" style="background:none;border:none;font-size:1.2em;cursor:pointer;">🔍</button>
    </form>
</div>
<div style="background:#fff8f0;border-radius:14px;box-shadow:0 2px 12px #e6b87a22;padding:24px 18px;">
    <div style="font-weight:600;font-size:1.1em;margin-bottom:6px;">Daftar Penghuni Kost</div>
    <div style="color:#8d7b5a;margin-bottom:12px;">Kelola data lengkap penghuni kost Anda</div>
    <table style="width:100%;border-collapse:collapse;background:#fff8f0;">
        <tr style="background:#f5f8ff;">
            <th style="padding:10px 8px;">ID</th>
            <th style="padding:10px 8px;">NAMA</th>
            <th style="padding:10px 8px;">NO KTP</th>
            <th style="padding:10px 8px;">NO HP</th>
            <th style="padding:10px 8px;">TGL MASUK</th>
            <th style="padding:10px 8px;">TGL KELUAR</th>
            <th style="padding:10px 8px;">STATUS</th>
            <th style="padding:10px 8px;">AKSI</th>
        </tr>
        <!-- Data kosong, tampilkan baris kosong -->
    </table>
</div>
<?php if (isset($_GET['action']) && $_GET['action'] == 'add'): ?>
    <h3>Tambah Penghuni</h3>
    <form method="post" action="?page=penghuni&action=save">
        Nama: <input name="nama" required><br>
        No KTP: <input name="no_ktp" required><br>
        No HP: <input name="no_hp" required><br>
        Tgl Masuk: <input type="date" name="tgl_masuk" required><br>
        <button type="submit">Simpan</button>
    </form>
<?php endif; ?>
<?php if (isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])): 
    $edit = getPenghuniById($_GET['id']); ?>
    <h3>Edit Penghuni</h3>
    <form method="post" action="?page=penghuni&action=update&id=<?= $edit['id'] ?>">
        Nama: <input name="nama" value="<?= $edit['nama'] ?>" required><br>
        No KTP: <input name="no_ktp" value="<?= $edit['no_ktp'] ?>" required><br>
        No HP: <input name="no_hp" value="<?= $edit['no_hp'] ?>" required><br>
        Tgl Masuk: <input type="date" name="tgl_masuk" value="<?= $edit['tgl_masuk'] ?>" required><br>
        Tgl Keluar: <input type="date" name="tgl_keluar" value="<?= $edit['tgl_keluar'] ?>"><br>
        <button type="submit">Update</button>
    </form>
<?php endif; ?> 