<?php
require_once __DIR__ . '/../controllers/kamar.php';
$kamar = getAllKamar();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kamar</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="logo-kosverse" style="text-align:center;margin-top:24px;margin-bottom:8px;font-size:2em;font-weight:bold;color:#2a3b4c;letter-spacing:2px;">
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" style="vertical-align:middle;margin-right:8px;"><circle cx="16" cy="16" r="15" fill="#ffb347" stroke="#2a3b4c" stroke-width="2"/><path d="M10 22V14L16 10L22 14V22H10Z" fill="#fff" stroke="#2a3b4c" stroke-width="2"/></svg>
        KosVerse
    </div>
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
                <a href="?page=kamar&action=delete&id=<?= $k['id'] ?>" data-confirm="Yakin ingin menghapus data ini?">Hapus</a>
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
    <script src="assets/app.js"></script>
</body>
</html> 