<?php
require_once __DIR__ . '/../controllers/tagihan.php';
require_once __DIR__ . '/../controllers/kmr_penghuni.php';
$tagihan = getAllTagihan();
$kmr_penghuni = getAllKmrPenghuni();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Tagihan</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h2>Data Tagihan</h2>
    <a href="?page=tagihan&action=add">Tambah Tagihan</a>
    <table border="1" cellpadding="4">
        <tr><th>ID</th><th>Bulan</th><th>Kamar</th><th>Penghuni</th><th>Jumlah Tagihan</th><th>Aksi</th></tr>
        <?php foreach ($tagihan as $t): ?>
        <tr>
            <td><?= $t['id'] ?></td>
            <td><?= $t['bulan'] ?></td>
            <td><?= $t['nomor_kamar'] ?></td>
            <td><?= $t['nama_penghuni'] ?></td>
            <td><?= $t['jml_tagihan'] ?></td>
            <td>
                <a href="?page=tagihan&action=edit&id=<?= $t['id'] ?>">Edit</a> |
                <a href="?page=tagihan&action=delete&id=<?= $t['id'] ?>" data-confirm="Yakin ingin menghapus data ini?">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php if (isset($_GET['action']) && $_GET['action'] == 'add'): ?>
        <h3>Tambah Tagihan</h3>
        <form method="post" action="?page=tagihan&action=save">
            Bulan: <input name="bulan" required placeholder="YYYY-MM"><br>
            Kamar Penghuni: <select name="id_kmr_penghuni" required>
                <?php foreach ($kmr_penghuni as $kp): ?>
                    <option value="<?= $kp['id'] ?>"><?= $kp['nomor_kamar'] ?> - <?= $kp['nama_penghuni'] ?></option>
                <?php endforeach; ?>
            </select><br>
            Jumlah Tagihan: <input name="jml_tagihan" required><br>
            <button type="submit">Simpan</button>
        </form>
    <?php endif; ?>
    <?php if (isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])): 
        $edit = getTagihanById($_GET['id']); ?>
        <h3>Edit Tagihan</h3>
        <form method="post" action="?page=tagihan&action=update&id=<?= $edit['id'] ?>">
            Bulan: <input name="bulan" value="<?= $edit['bulan'] ?>" required placeholder="YYYY-MM"><br>
            Kamar Penghuni: <select name="id_kmr_penghuni" required>
                <?php foreach ($kmr_penghuni as $kp): ?>
                    <option value="<?= $kp['id'] ?>" <?= $edit['id_kmr_penghuni']==$kp['id']?'selected':'' ?>><?= $kp['nomor_kamar'] ?> - <?= $kp['nama_penghuni'] ?></option>
                <?php endforeach; ?>
            </select><br>
            Jumlah Tagihan: <input name="jml_tagihan" value="<?= $edit['jml_tagihan'] ?>" required><br>
            <button type="submit">Update</button>
        </form>
    <?php endif; ?>
    <script src="assets/app.js"></script>
</body>
</html> 