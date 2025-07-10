<?php
require_once __DIR__ . '/../controllers/kamar.php';
$kamar = getAllKamar();
?>
<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:18px;">
    <h2 style="margin:0;">Data Kamar</h2>
    <div style="font-weight:500;color:#888;">Dashboard / Data Kamar</div>
</div>
<div style="display:flex;gap:18px;margin-bottom:24px;">
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;">20</div>
        <div style="color:#8d7b5a;">Total Kamar</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;color:#e65a5a;">15</div>
        <div style="color:#8d7b5a;">Kamar Terisi</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;color:#3bb273;">5</div>
        <div style="color:#8d7b5a;">Kamar Kosong</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;color:#3b7be6;">Rp 850,000</div>
        <div style="color:#8d7b5a;">Rata-rata Harga</div>
    </div>
</div>
<div style="display:flex;align-items:center;gap:12px;margin-bottom:18px;">
    <a href="?page=kamar&action=add" style="background:#7b5ae6;color:#fff;padding:10px 22px;border-radius:8px;font-weight:600;text-decoration:none;box-shadow:0 2px 8px #e6b87a22;">+ Tambah Kamar</a>
    <button style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Export Data</button>
    <button style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Print Laporan</button>
    <div style="flex:1;"></div>
    <button style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">🗒️ Tabel</button>
    <button style="background:#e6b87a;color:#fff;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">🟦 Grid</button>
</div>
<div style="display:flex;gap:12px;margin-bottom:18px;">
    <select style="padding:8px 12px;border-radius:6px;border:1.5px solid #e6b87a;">
        <option>Filter Status: Semua Status</option>
    </select>
    <select style="padding:8px 12px;border-radius:6px;border:1.5px solid #e6b87a;">
        <option>Filter Tipe: Semua Tipe</option>
    </select>
    <select style="padding:8px 12px;border-radius:6px;border:1.5px solid #e6b87a;">
        <option>Range Harga: Semua Harga</option>
    </select>
</div>
<div style="display:flex;flex-wrap:wrap;gap:24px;">
    <!-- Card Kamar Dummy -->
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:260px;max-width:270px;flex:1 1 260px;display:flex;flex-direction:column;gap:8px;border:2px solid #3bb273;">
        <div style="font-size:1.2em;font-weight:700;">🏡 Kamar 101</div>
        <div style="color:#888;font-size:0.98em;">VIP ROOM</div>
        <div style="color:#3b7be6;font-weight:600;font-size:1.1em;">Rp 1,200,000/bulan</div>
        <div style="margin:6px 0;">
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">AC</span>
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">WiFi</span>
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">Kamar Mandi Dalam</span>
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">Balkon</span>
        </div>
        <div style="color:#3bb273;font-weight:600;background:#eafbe6;padding:4px 14px;border-radius:8px;display:inline-block;">TERSEDIA</div>
        <div style="color:#888;font-size:0.95em;">Kamar tersedia untuk dihuni</div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#f5f8ff;color:#3b7be6;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#ffb347;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Edit</button>
            <button style="background:#e65a5a;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Hapus</button>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:260px;max-width:270px;flex:1 1 260px;display:flex;flex-direction:column;gap:8px;border:2px solid #e65a5a;">
        <div style="font-size:1.2em;font-weight:700;">🏡 Kamar 102</div>
        <div style="color:#888;font-size:0.98em;">STANDAR ROOM</div>
        <div style="color:#3b7be6;font-weight:600;font-size:1.1em;">Rp 650,000/bulan</div>
        <div style="margin:6px 0;">
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">AC</span>
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">WiFi</span>
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">Kamar Mandi Luar</span>
        </div>
        <div style="color:#e65a5a;font-weight:600;background:#ffeaea;padding:4px 14px;border-radius:8px;display:inline-block;">TERISI</div>
        <div style="color:#888;font-size:0.95em;">Ditempati: Ahmad Rizki</div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#f5f8ff;color:#3b7be6;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#ffb347;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Edit</button>
            <button style="background:#e65a5a;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Hapus</button>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:260px;max-width:270px;flex:1 1 260px;display:flex;flex-direction:column;gap:8px;border:2px solid #ffb347;">
        <div style="font-size:1.2em;font-weight:700;">🏡 Kamar 103</div>
        <div style="color:#888;font-size:0.98em;">DELUXE ROOM</div>
        <div style="color:#3b7be6;font-weight:600;font-size:1.1em;">Rp 900,000/bulan</div>
        <div style="margin:6px 0;">
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">AC</span>
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">WiFi</span>
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">Kamar Mandi Dalam</span>
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">Kitchen Set</span>
        </div>
        <div style="color:#ffb347;font-weight:600;background:#fff5e0;padding:4px 14px;border-radius:8px;display:inline-block;">MAINTENANCE</div>
        <div style="color:#888;font-size:0.95em;">Sedang dalam perbaikan</div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#f5f8ff;color:#3b7be6;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#ffb347;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Edit</button>
            <button style="background:#e65a5a;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Hapus</button>
        </div>
    </div>
    <!-- Card dummy lain bisa ditambah sesuai kebutuhan -->
</div>
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