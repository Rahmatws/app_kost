<?php
require_once __DIR__ . '/../controllers/barang.php';
$barang = getAllBarang();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
</head>
<body>
    <h2>Data Barang</h2>
    <a href="?page=barang&action=add">Tambah Barang</a>
    <table border="1" cellpadding="4">
        <tr><th>ID</th><th>Nama</th><th>Harga</th><th>Aksi</th></tr>
        <?php foreach ($barang as $b): ?>
        <tr>
            <td><?= $b['id'] ?></td>
            <td><?= $b['nama'] ?></td>
            <td><?= $b['harga'] ?></td>
            <td>
                <a href="?page=barang&action=edit&id=<?= $b['id'] ?>">Edit</a> |
                <a href="?page=barang&action=delete&id=<?= $b['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php if (isset($_GET['action']) && $_GET['action'] == 'add'): ?>
        <h3>Tambah Barang</h3>
        <form method="post" action="?page=barang&action=save">
            Nama: <input name="nama" required><br>
            Harga: <input name="harga" required><br>
            <button type="submit">Simpan</button>
        </form>
    <?php endif; ?>
    <?php if (isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])): 
        $edit = getBarangById($_GET['id']); ?>
        <h3>Edit Barang</h3>
        <form method="post" action="?page=barang&action=update&id=<?= $edit['id'] ?>">
            Nama: <input name="nama" value="<?= $edit['nama'] ?>" required><br>
            Harga: <input name="harga" value="<?= $edit['harga'] ?>" required><br>
            <button type="submit">Update</button>
        </form>
    <?php endif; ?>
</body>
</html> 