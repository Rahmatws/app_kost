<?php
require_once __DIR__ . '/../controllers/kamar.php';
$kamar = getAllKamar();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kamar</title>
</head>
<body>
    <h2>Data Kamar</h2>
    <a href="?page=kamar&action=add">Tambah Kamar</a>
    <table border="1" cellpadding="4">
        <tr><th>ID</th><th>Nomor</th><th>Harga</th><th>Aksi</th></tr>
        <?php foreach ($kamar as $k): ?>
        <tr>
            <td><?= $k['id'] ?></td>
            <td><?= $k['nomor'] ?></td>
            <td><?= $k['harga'] ?></td>
            <td>
                <a href="?page=kamar&action=edit&id=<?= $k['id'] ?>">Edit</a> |
                <a href="?page=kamar&action=delete&id=<?= $k['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php if (isset($_GET['action']) && $_GET['action'] == 'add'): ?>
        <h3>Tambah Kamar</h3>
        <form method="post" action="?page=kamar&action=save">
            Nomor: <input name="nomor" required><br>
            Harga: <input name="harga" required><br>
            <button type="submit">Simpan</button>
        </form>
    <?php endif; ?>
    <?php if (isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])): 
        $edit = getKamarById($_GET['id']); ?>
        <h3>Edit Kamar</h3>
        <form method="post" action="?page=kamar&action=update&id=<?= $edit['id'] ?>">
            Nomor: <input name="nomor" value="<?= $edit['nomor'] ?>" required><br>
            Harga: <input name="harga" value="<?= $edit['harga'] ?>" required><br>
            <button type="submit">Update</button>
        </form>
    <?php endif; ?>
</body>
</html> 