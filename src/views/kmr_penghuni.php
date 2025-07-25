<?php
require_once __DIR__ . '/../controllers/kmr_penghuni.php';
require_once __DIR__ . '/../controllers/kamar.php';
require_once __DIR__ . '/../controllers/penghuni.php';
$kmr_penghuni = getAllKmrPenghuni();
$kamar = getAllKamar();
$penghuni = getAllPenghuni();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kamar Penghuni</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="logo-kosverse" style="text-align:center;margin-top:24px;margin-bottom:8px;font-size:2em;font-weight:bold;color:#2a3b4c;letter-spacing:2px;">
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" style="vertical-align:middle;margin-right:8px;"><circle cx="16" cy="16" r="15" fill="#ffb347" stroke="#2a3b4c" stroke-width="2"/><path d="M10 22V14L16 10L22 14V22H10Z" fill="#fff" stroke="#2a3b4c" stroke-width="2"/></svg>
        KosVerse
    </div>
    <h2>Data Kamar Penghuni</h2>
    <a href="?page=kmr_penghuni&action=add">Tambah Kamar Penghuni</a>
    <table border="1" cellpadding="4">
        <tr><th>ID</th><th>Kamar</th><th>Penghuni</th><th>Tgl Masuk</th><th>Tgl Keluar</th><th>Aksi</th></tr>
        <?php foreach ($kmr_penghuni as $kp): ?>
        <tr>
            <td><?= $kp['id'] ?></td>
            <td><?= $kp['nomor_kamar'] ?></td>
            <td><?= $kp['nama_penghuni'] ?></td>
            <td><?= $kp['tgl_masuk'] ?></td>
            <td><?= $kp['tgl_keluar'] ?></td>
            <td>
                <a href="?page=kmr_penghuni&action=edit&id=<?= $kp['id'] ?>">Edit</a> |
                <a href="?page=kmr_penghuni&action=delete&id=<?= $kp['id'] ?>" data-confirm="Yakin ingin menghapus data ini?">Hapus</a> |
                <a href="?page=kmr_penghuni&action=keluar&id=<?= $kp['id'] ?>">Keluar</a> |
                <a href="?page=kmr_penghuni&action=pindah&id=<?= $kp['id'] ?>">Pindah Kamar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php if (isset($_GET['action']) && $_GET['action'] == 'add'): ?>
        <h3>Tambah Kamar Penghuni</h3>
        <form method="post" action="?page=kmr_penghuni&action=save">
            Kamar: <select name="id_kamar" required>
                <?php foreach ($kamar as $k): ?>
                    <option value="<?= $k['id'] ?>"><?= $k['nomor'] ?></option>
                <?php endforeach; ?>
            </select><br>
            Penghuni: <select name="id_penghuni" required>
                <?php foreach ($penghuni as $p): ?>
                    <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                <?php endforeach; ?>
            </select><br>
            Tgl Masuk: <input type="date" name="tgl_masuk" required><br>
            <button type="submit">Simpan</button>
        </form>
    <?php endif; ?>
    <?php if (isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])): 
        $edit = getKmrPenghuniById($_GET['id']); ?>
        <h3>Edit Kamar Penghuni</h3>
        <form method="post" action="?page=kmr_penghuni&action=update&id=<?= $edit['id'] ?>">
            Kamar: <select name="id_kamar" required>
                <?php foreach ($kamar as $k): ?>
                    <option value="<?= $k['id'] ?>" <?= $edit['id_kamar']==$k['id']?'selected':'' ?>><?= $k['nomor'] ?></option>
                <?php endforeach; ?>
            </select><br>
            Penghuni: <select name="id_penghuni" required>
                <?php foreach ($penghuni as $p): ?>
                    <option value="<?= $p['id'] ?>" <?= $edit['id_penghuni']==$p['id']?'selected':'' ?>><?= $p['nama'] ?></option>
                <?php endforeach; ?>
            </select><br>
            Tgl Masuk: <input type="date" name="tgl_masuk" value="<?= $edit['tgl_masuk'] ?>" required><br>
            Tgl Keluar: <input type="date" name="tgl_keluar" value="<?= $edit['tgl_keluar'] ?>"><br>
            <button type="submit">Update</button>
        </form>
    <?php endif; ?>
    <?php if (isset($_GET['action']) && $_GET['action'] == 'keluar' && isset($_GET['id'])): 
        $edit = getKmrPenghuniById($_GET['id']); ?>
        <h3>Keluar Kost</h3>
        <form method="post" action="?page=kmr_penghuni&action=update_keluar&id=<?= $edit['id'] ?>">
            Tgl Keluar: <input type="date" name="tgl_keluar" required><br>
            <button type="submit">Simpan</button>
        </form>
    <?php endif; ?>
    <?php if (isset($_GET['action']) && $_GET['action'] == 'pindah' && isset($_GET['id'])): 
        $edit = getKmrPenghuniById($_GET['id']); ?>
        <h3>Pindah Kamar</h3>
        <form method="post" action="?page=kmr_penghuni&action=update_pindah&id=<?= $edit['id'] ?>">
            Tgl Keluar Kamar Lama: <input type="date" name="tgl_keluar" required><br>
            <button type="submit">Simpan & Pindah</button>
        </form>
    <?php endif; ?>
    <script src="assets/app.js"></script>
</body>
</html> 