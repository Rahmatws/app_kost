<?php
require_once __DIR__ . '/../controllers/barang.php';
$barang = getAllBarang();
?>
<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:18px;">
    <h2 style="margin:0;">Data Barang</h2>
    <div style="font-weight:500;color:#888;">Dashboard / Data Barang</div>
</div>
<div style="display:flex;gap:18px;margin-bottom:24px;">
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;">156</div>
        <div style="color:#8d7b5a;">Total Barang</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;color:#3bb273;">142</div>
        <div style="color:#8d7b5a;">Kondisi Baik</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;color:#ffb347;">8</div>
        <div style="color:#8d7b5a;">Maintenance</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;color:#e65a5a;">6</div>
        <div style="color:#8d7b5a;">Rusak</div>
    </div>
</div>
<div style="display:flex;align-items:center;gap:12px;margin-bottom:18px;">
    <a href="?page=barang&action=add" style="background:#7b5ae6;color:#fff;padding:10px 22px;border-radius:8px;font-weight:600;text-decoration:none;box-shadow:0 2px 8px #e6b87a22;">+ Tambah Barang</a>
    <button style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Export Data</button>
    <button style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Laporan Inventori</button>
    <button style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Update Stock</button>
</div>
<div style="display:flex;align-items:center;gap:12px;margin-bottom:18px;">
    <input type="text" placeholder="Cari nama barang, kode, atau kategori..." style="flex:1;padding:10px 14px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff8f0;" />
    <span style="color:#888;">Kategori:</span>
    <select style="padding:8px 12px;border-radius:6px;border:1.5px solid #e6b87a;">
        <option>Semua Kategori</option>
    </select>
    <span style="color:#888;">Kondisi:</span>
    <select style="padding:8px 12px;border-radius:6px;border:1.5px solid #e6b87a;">
        <option>Semua Kondisi</option>
    </select>
</div>
<div style="background:#fff8f0;border-radius:14px;padding:18px 0 0 0;box-shadow:0 2px 8px #e6b87a22;">
    <div style="padding:0 24px 12px 24px;font-weight:600;font-size:1.1em;color:#8d7b5a;">Daftar Inventori Barang Kost</div>
    <table style="width:100%;border-collapse:separate;border-spacing:0 8px;font-size:1em;">
        <thead>
            <tr style="background:#fff8f0;color:#8d7b5a;text-align:left;">
                <th style="padding:10px 12px;">FOTO</th>
                <th style="padding:10px 12px;">KODE</th>
                <th style="padding:10px 12px;">NAMA BARANG</th>
                <th style="padding:10px 12px;">KATEGORI</th>
                <th style="padding:10px 12px;">JUMLAH</th>
                <th style="padding:10px 12px;">KONDISI</th>
                <th style="padding:10px 12px;">LOKASI</th>
                <th style="padding:10px 12px;">TERAKHIR UPDATE</th>
                <th style="padding:10px 12px;">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background:#fff;border-radius:8px;box-shadow:0 2px 8px #e6b87a11;">
                <td style="padding:10px 12px;"><span style="font-size:1.5em;">🛏️</span></td>
                <td style="padding:10px 12px;color:#7b5ae6;font-weight:600;">BRG001</td>
                <td style="padding:10px 12px;font-weight:600;">Kasur Single</td>
                <td style="padding:10px 12px;"><span style="background:#e6e6ff;color:#7b5ae6;padding:3px 10px;border-radius:6px;font-size:0.95em;">FURNITURE</span></td>
                <td style="padding:10px 12px;color:#3bb273;font-weight:600;">25 unit</td>
                <td style="padding:10px 12px;"><span style="background:#eafbe6;color:#3bb273;padding:4px 14px;border-radius:8px;font-weight:600;">BAIK</span></td>
                <td style="padding:10px 12px;">Gudang A</td>
                <td style="padding:10px 12px;">15 Jan 2024</td>
                <td style="padding:10px 12px;display:flex;gap:6px;">
                    <button style="background:#f5f8ff;color:#3b7be6;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🔍</button>
                    <button style="background:#ffb347;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">✏️</button>
                    <button style="background:#e65a5a;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🗑️</button>
                </td>
            </tr>
            <tr style="background:#fff;border-radius:8px;box-shadow:0 2px 8px #e6b87a11;">
                <td style="padding:10px 12px;"><span style="font-size:1.5em;">❄️</span></td>
                <td style="padding:10px 12px;color:#7b5ae6;font-weight:600;">BRG002</td>
                <td style="padding:10px 12px;font-weight:600;">AC 1 PK</td>
                <td style="padding:10px 12px;"><span style="background:#e6f7ff;color:#3b7be6;padding:3px 10px;border-radius:6px;font-size:0.95em;">ELEKTRONIK</span></td>
                <td style="padding:10px 12px;color:#ffb347;font-weight:600;">8 unit</td>
                <td style="padding:10px 12px;"><span style="background:#eafbe6;color:#3bb273;padding:4px 14px;border-radius:8px;font-weight:600;">BAIK</span></td>
                <td style="padding:10px 12px;">Gudang B</td>
                <td style="padding:10px 12px;">12 Jan 2024</td>
                <td style="padding:10px 12px;display:flex;gap:6px;">
                    <button style="background:#f5f8ff;color:#3b7be6;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🔍</button>
                    <button style="background:#ffb347;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">✏️</button>
                    <button style="background:#e65a5a;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🗑️</button>
                </td>
            </tr>
            <tr style="background:#fff;border-radius:8px;box-shadow:0 2px 8px #e6b87a11;">
                <td style="padding:10px 12px;"><span style="font-size:1.5em;">🪑</span></td>
                <td style="padding:10px 12px;color:#7b5ae6;font-weight:600;">BRG003</td>
                <td style="padding:10px 12px;font-weight:600;">Kursi Belajar</td>
                <td style="padding:10px 12px;"><span style="background:#e6e6ff;color:#7b5ae6;padding:3px 10px;border-radius:6px;font-size:0.95em;">FURNITURE</span></td>
                <td style="padding:10px 12px;color:#e65a5a;font-weight:600;">3 unit</td>
                <td style="padding:10px 12px;"><span style="background:#fff5e0;color:#ffb347;padding:4px 14px;border-radius:8px;font-weight:600;">MAINTENANCE</span></td>
                <td style="padding:10px 12px;">Gudang A</td>
                <td style="padding:10px 12px;">10 Jan 2024</td>
                <td style="padding:10px 12px;display:flex;gap:6px;">
                    <button style="background:#f5f8ff;color:#3b7be6;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🔍</button>
                    <button style="background:#ffb347;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">✏️</button>
                    <button style="background:#e65a5a;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🗑️</button>
                </td>
            </tr>
            <tr style="background:#fff;border-radius:8px;box-shadow:0 2px 8px #e6b87a11;">
                <td style="padding:10px 12px;"><span style="font-size:1.5em;">🧹</span></td>
                <td style="padding:10px 12px;color:#7b5ae6;font-weight:600;">BRG004</td>
                <td style="padding:10px 12px;font-weight:600;">Vacuum Cleaner</td>
                <td style="padding:10px 12px;"><span style="background:#e6fff2;color:#3bb273;padding:3px 10px;border-radius:6px;font-size:0.95em;">KEBERSIHAN</span></td>
                <td style="padding:10px 12px;color:#ffb347;font-weight:600;">5 unit</td>
                <td style="padding:10px 12px;"><span style="background:#eafbe6;color:#3bb273;padding:4px 14px;border-radius:8px;font-weight:600;">BAIK</span></td>
                <td style="padding:10px 12px;">Ruang Utilitas</td>
                <td style="padding:10px 12px;">08 Jan 2024</td>
                <td style="padding:10px 12px;display:flex;gap:6px;">
                    <button style="background:#f5f8ff;color:#3b7be6;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🔍</button>
                    <button style="background:#ffb347;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">✏️</button>
                    <button style="background:#e65a5a;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🗑️</button>
                </td>
            </tr>
            <tr style="background:#fff;border-radius:8px;box-shadow:0 2px 8px #e6b87a11;">
                <td style="padding:10px 12px;"><span style="font-size:1.5em;">🍳</span></td>
                <td style="padding:10px 12px;color:#7b5ae6;font-weight:600;">BRG005</td>
                <td style="padding:10px 12px;font-weight:600;">Kompor Gas 2</td>
                <td style="padding:10px 12px;"><span style="background:#e6f7ff;color:#3b7be6;padding:3px 10px;border-radius:6px;font-size:0.95em;">KITCHEN</span></td>
                <td style="padding:10px 12px;color:#3bb273;font-weight:600;">12 unit</td>
                <td style="padding:10px 12px;"><span style="background:#ffeaea;color:#e65a5a;padding:4px 14px;border-radius:8px;font-weight:600;">RUSAK</span></td>
                <td style="padding:10px 12px;">Gudang B</td>
                <td style="padding:10px 12px;">05 Jan 2024</td>
                <td style="padding:10px 12px;display:flex;gap:6px;">
                    <button style="background:#f5f8ff;color:#3b7be6;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🔍</button>
                    <button style="background:#ffb347;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">✏️</button>
                    <button style="background:#e65a5a;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🗑️</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
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