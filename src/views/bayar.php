<?php
require_once __DIR__ . '/../controllers/bayar.php';
require_once __DIR__ . '/../controllers/tagihan.php';
$bayar = getAllBayar();
$tagihan = getAllTagihan();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pembayaran</title>
</head>
<body>
    <h2>Data Pembayaran</h2>
    <a href="?page=bayar&action=add">Tambah Pembayaran</a>
    <table border="1" cellpadding="4">
        <tr><th>ID</th><th>Bulan</th><th>Kamar</th><th>Penghuni</th><th>Jumlah Tagihan</th><th>Jumlah Bayar</th><th>Status</th><th>Aksi</th></tr>
        <?php foreach ($bayar as $b): ?>
        <tr>
            <td><?= $b['id'] ?></td>
            <td><?= $b['bulan'] ?></td>
            <td><?= $b['nomor_kamar'] ?></td>
            <td><?= $b['nama_penghuni'] ?></td>
            <td><?= $b['jml_tagihan'] ?></td>
            <td><?= $b['jml_bayar'] ?></td>
            <td><?= $b['status'] ?></td>
            <td>
                <a href="?page=bayar&action=edit&id=<?= $b['id'] ?>">Edit</a> |
                <a href="?page=bayar&action=delete&id=<?= $b['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php if (isset($_GET['action']) && $_GET['action'] == 'add'): ?>
        <h3>Tambah Pembayaran</h3>
        <form method="post" action="?page=bayar&action=save">
            Tagihan: <select name="id_tagihan" required>
                <?php foreach ($tagihan as $t): ?>
                    <option value="<?= $t['id'] ?>"><?= $t['bulan'] ?> - <?= $t['nomor_kamar'] ?> - <?= $t['nama_penghuni'] ?></option>
                <?php endforeach; ?>
            </select><br>
            Jumlah Bayar: <input name="jml_bayar" required><br>
            Status: <select name="status" required>
                <option value="lunas">Lunas</option>
                <option value="cicil">Cicil</option>
            </select><br>
            <button type="submit">Simpan</button>
        </form>
    <?php endif; ?>
    <?php if (isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])): 
        $edit = getBayarById($_GET['id']); ?>
        <h3>Edit Pembayaran</h3>
        <form method="post" action="?page=bayar&action=update&id=<?= $edit['id'] ?>">
            Tagihan: <select name="id_tagihan" required>
                <?php foreach ($tagihan as $t): ?>
                    <option value="<?= $t['id'] ?>" <?= $edit['id_tagihan']==$t['id']?'selected':'' ?>><?= $t['bulan'] ?> - <?= $t['nomor_kamar'] ?> - <?= $t['nama_penghuni'] ?></option>
                <?php endforeach; ?>
            </select><br>
            Jumlah Bayar: <input name="jml_bayar" value="<?= $edit['jml_bayar'] ?>" required><br>
            Status: <select name="status" required>
                <option value="lunas" <?= $edit['status']=='lunas'?'selected':'' ?>>Lunas</option>
                <option value="cicil" <?= $edit['status']=='cicil'?'selected':'' ?>>Cicil</option>
            </select><br>
            <button type="submit">Update</button>
        </form>
    <?php endif; ?>
</body>
</html> 