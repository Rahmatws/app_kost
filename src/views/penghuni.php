<?php
require_once __DIR__ . '/../controllers/penghuni.php';
$penghuni = getAllPenghuni();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Penghuni</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h2>Data Penghuni</h2>
    <a href="?page=penghuni&action=add">Tambah Penghuni</a>
    <table border="1" cellpadding="4">
        <tr><th>ID</th><th>Nama</th><th>No KTP</th><th>No HP</th><th>Tgl Masuk</th><th>Tgl Keluar</th><th>Aksi</th></tr>
        <?php foreach ($penghuni as $p): ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['nama'] ?></td>
            <td><?= $p['no_ktp'] ?></td>
            <td><?= $p['no_hp'] ?></td>
            <td><?= $p['tgl_masuk'] ?></td>
            <td><?= $p['tgl_keluar'] ?></td>
            <td>
                <a href="?page=penghuni&action=edit&id=<?= $p['id'] ?>">Edit</a> |
                <a href="?page=penghuni&action=delete&id=<?= $p['id'] ?>" data-confirm="Yakin ingin menghapus data ini?">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
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
    <script src="assets/app.js"></script>
</body>
</html> 