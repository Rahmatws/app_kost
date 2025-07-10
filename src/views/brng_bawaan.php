<?php
require_once __DIR__ . '/../controllers/brng_bawaan.php';
require_once __DIR__ . '/../controllers/penghuni.php';
require_once __DIR__ . '/../controllers/barang.php';
$brng_bawaan = getAllBrngBawaan();
$penghuni = getAllPenghuni();
$barang = getAllBarang();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Barang Bawaan Penghuni</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="logo-kosverse" style="text-align:center;margin-top:24px;margin-bottom:8px;font-size:2em;font-weight:bold;color:#2a3b4c;letter-spacing:2px;">
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" style="vertical-align:middle;margin-right:8px;"><circle cx="16" cy="16" r="15" fill="#ffb347" stroke="#2a3b4c" stroke-width="2"/><path d="M10 22V14L16 10L22 14V22H10Z" fill="#fff" stroke="#2a3b4c" stroke-width="2"/></svg>
        KosVerse
    </div>
    <h2>Data Barang Bawaan Penghuni</h2>
    <a href="?page=brng_bawaan&action=add">Tambah Barang Bawaan</a>
    <table border="1" cellpadding="4">
        <tr><th>ID</th><th>Penghuni</th><th>Barang</th><th>Aksi</th></tr>
        <?php foreach ($brng_bawaan as $bb): ?>
        <tr>
            <td><?= $bb['id'] ?></td>
            <td><?= $bb['nama_penghuni'] ?></td>
            <td><?= $bb['nama_barang'] ?></td>
            <td>
                <a href="?page=brng_bawaan&action=edit&id=<?= $bb['id'] ?>">Edit</a> |
                <a href="?page=brng_bawaan&action=delete&id=<?= $bb['id'] ?>" data-confirm="Yakin ingin menghapus data ini?">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php if (isset($_GET['action']) && $_GET['action'] == 'add'): ?>
        <h3>Tambah Barang Bawaan</h3>
        <form method="post" action="?page=brng_bawaan&action=save">
            Penghuni: <select name="id_penghuni" required>
                <?php foreach ($penghuni as $p): ?>
                    <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                <?php endforeach; ?>
            </select><br>
            Barang: <select name="id_barang" required>
                <?php foreach ($barang as $b): ?>
                    <option value="<?= $b['id'] ?>"><?= $b['nama'] ?></option>
                <?php endforeach; ?>
            </select><br>
            <button type="submit">Simpan</button>
        </form>
    <?php endif; ?>
    <?php if (isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])): 
        $edit = getBrngBawaanById($_GET['id']); ?>
        <h3>Edit Barang Bawaan</h3>
        <form method="post" action="?page=brng_bawaan&action=update&id=<?= $edit['id'] ?>">
            Penghuni: <select name="id_penghuni" required>
                <?php foreach ($penghuni as $p): ?>
                    <option value="<?= $p['id'] ?>" <?= $edit['id_penghuni']==$p['id']?'selected':'' ?>><?= $p['nama'] ?></option>
                <?php endforeach; ?>
            </select><br>
            Barang: <select name="id_barang" required>
                <?php foreach ($barang as $b): ?>
                    <option value="<?= $b['id'] ?>" <?= $edit['id_barang']==$b['id']?'selected':'' ?>><?= $b['nama'] ?></option>
                <?php endforeach; ?>
            </select><br>
            <button type="submit">Update</button>
        </form>
    <?php endif; ?>
    <script src="assets/app.js"></script>
</body>
</html> 