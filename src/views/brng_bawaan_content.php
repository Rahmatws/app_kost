<?php
require_once __DIR__ . '/../controllers/brng_bawaan.php';
require_once __DIR__ . '/../controllers/penghuni.php';
require_once __DIR__ . '/../controllers/barang.php';
$brng_bawaan = getAllBrngBawaan();
$penghuni = getAllPenghuni();
$barang = getAllBarang();
?>
<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:18px;">
    <h2 style="margin:0;">Barang Bawaan</h2>
    <div style="font-weight:500;color:#888;">Dashboard / Barang Bawaan</div>
</div>
<div style="display:flex;gap:18px;margin-bottom:24px;">
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;">156</div>
        <div style="color:#8d7b5a;">Total Records</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;color:#3bb273;">89</div>
        <div style="color:#8d7b5a;">Check-in Items</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;color:#e65a5a;">34</div>
        <div style="color:#8d7b5a;">Check-out Items</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;color:#ffb347;">33</div>
        <div style="color:#8d7b5a;">Pending Verification</div>
    </div>
</div>
<div style="display:flex;align-items:center;gap:12px;margin-bottom:18px;">
    <a href="?page=brng_bawaan&action=add" style="background:#7b5ae6;color:#fff;padding:10px 22px;border-radius:8px;font-weight:600;text-decoration:none;box-shadow:0 2px 8px #e6b87a22;">+ Input Barang Bawaan</a>
    <button style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Laporan Check-in/out</button>
    <button style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Export Data</button>
</div>
<div style="display:flex;align-items:center;gap:12px;margin-bottom:18px;">
    <input type="text" placeholder="Cari nama penghuni atau nomor kamar..." style="flex:1;padding:10px 14px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff8f0;" />
    <span style="color:#888;">Status:</span>
    <select style="padding:8px 12px;border-radius:6px;border:1.5px solid #e6b87a;">
        <option>Semua Status</option>
    </select>
    <span style="color:#888;">Verifikasi:</span>
    <select style="padding:8px 12px;border-radius:6px;border:1.5px solid #e6b87a;">
        <option>Semua</option>
    </select>
</div>
<div style="display:flex;flex-wrap:wrap;gap:24px;">
    <!-- Card Barang Bawaan Dummy -->
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:340px;max-width:360px;flex:1 1 340px;display:flex;flex-direction:column;gap:8px;border:2px solid #3bb273;">
        <div style="display:flex;align-items:center;justify-content:space-between;">
            <div style="display:flex;align-items:center;gap:10px;">
                <div style="background:#e6e6ff;color:#7b5ae6;width:38px;height:38px;display:flex;align-items:center;justify-content:center;border-radius:50%;font-weight:700;font-size:1.1em;">AR</div>
                <div>
                    <div style="font-weight:600;">Ahmad Rizki</div>
                    <div style="color:#3b7be6;font-size:0.98em;">Kamar 101</div>
                </div>
            </div>
            <span style="color:#3bb273;font-weight:600;background:#eafbe6;padding:4px 14px;border-radius:8px;">CHECK-IN</span>
        </div>
        <div style="display:flex;gap:18px;margin:8px 0 0 0;">
            <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;">
                <div style="font-size:0.95em;color:#888;">TANGGAL CHECK-IN</div>
                <div style="font-weight:600;">15 Jan 2024</div>
            </div>
            <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;">
                <div style="font-size:0.95em;color:#888;">WAKTU</div>
                <div style="font-weight:600;">14:30 WIB</div>
            </div>
        </div>
        <div style="margin-top:8px;font-weight:600;color:#e65a5a;">📦 Daftar Barang Bawaan</div>
        <div style="margin-bottom:4px;">
            <div style="display:flex;align-items:center;gap:8px;margin-bottom:2px;">
                <span style="color:#3b7be6;">💻</span> Laptop ASUS <span style="margin-left:auto;color:#3bb273;font-size:0.98em;">1x BAIK</span>
            </div>
            <div style="display:flex;align-items:center;gap:8px;margin-bottom:2px;">
                <span style="color:#3bb273;">👕</span> Pakaian <span style="margin-left:auto;color:#3bb273;font-size:0.98em;">15x BAIK</span>
            </div>
            <div style="display:flex;align-items:center;gap:8px;margin-bottom:2px;">
                <span style="color:#7b5ae6;">📚</span> Buku-buku <span style="margin-left:auto;color:#3bb273;font-size:0.98em;">8x BAIK</span>
            </div>
            <div style="display:flex;align-items:center;gap:8px;margin-bottom:2px;">
                <span style="color:#e65a5a;">🎸</span> Gitar Akustik <span style="margin-left:auto;color:#3bb273;font-size:0.98em;">1x BAIK</span>
            </div>
        </div>
        <div style="font-size:0.98em;color:#888;margin-bottom:4px;">Total: <span style="color:#3b7be6;font-weight:600;">25 items</span></div>
        <div style="display:flex;align-items:center;justify-content:space-between;">
            <span style="color:#3bb273;font-weight:600;">✔️ Terverifikasi</span>
            <div style="display:flex;gap:8px;">
                <button style="background:#3b7be6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
                <button style="background:#ffb347;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Edit</button>
                <button style="background:#e65a5a;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Check-out</button>
            </div>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:340px;max-width:360px;flex:1 1 340px;display:flex;flex-direction:column;gap:8px;border:2px solid #ffb347;">
        <div style="display:flex;align-items:center;justify-content:space-between;">
            <div style="display:flex;align-items:center;gap:10px;">
                <div style="background:#e6e6ff;color:#7b5ae6;width:38px;height:38px;display:flex;align-items:center;justify-content:center;border-radius:50%;font-weight:700;font-size:1.1em;">SN</div>
                <div>
                    <div style="font-weight:600;">Siti Nurhaliza</div>
                    <div style="color:#3b7be6;font-size:0.98em;">Kamar 102</div>
                </div>
            </div>
            <span style="color:#ffb347;font-weight:600;background:#fff5e0;padding:4px 14px;border-radius:8px;">PENDING</span>
        </div>
        <div style="display:flex;gap:18px;margin:8px 0 0 0;">
            <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;">
                <div style="font-size:0.95em;color:#888;">TANGGAL INPUT</div>
                <div style="font-weight:600;">28 Jun 2024</div>
            </div>
            <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;">
                <div style="font-size:0.95em;color:#888;">WAKTU</div>
                <div style="font-weight:600;">10:15 WIB</div>
            </div>
        </div>
        <div style="margin-top:8px;font-weight:600;color:#e65a5a;">📦 Daftar Barang Bawaan</div>
        <div style="margin-bottom:4px;">
            <div style="display:flex;align-items:center;gap:8px;margin-bottom:2px;">
                <span style="color:#3b7be6;">📱</span> Smartphone iPhone <span style="margin-left:auto;color:#3bb273;font-size:0.98em;">1x BAIK</span>
            </div>
            <div style="display:flex;align-items:center;gap:8px;margin-bottom:2px;">
                <span style="color:#7b5ae6;">🎒</span> Tas Ransel <span style="margin-left:auto;color:#3bb273;font-size:0.98em;">2x BAIK</span>
            </div>
            <div style="display:flex;align-items:center;gap:8px;margin-bottom:2px;">
                <span style="color:#3bb273;">👗</span> Pakaian Wanita <span style="margin-left:auto;color:#3bb273;font-size:0.98em;">20x BAIK</span>
            </div>
        </div>
        <div style="font-size:0.98em;color:#888;margin-bottom:4px;">Total: <span style="color:#3b7be6;font-weight:600;">23 items</span></div>
        <div style="display:flex;align-items:center;justify-content:space-between;">
            <span style="color:#ffb347;font-weight:600;">⏳ Menunggu Verifikasi</span>
            <div style="display:flex;gap:8px;">
                <button style="background:#3b7be6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
                <button style="background:#3bb273;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Verifikasi</button>
                <button style="background:#ffb347;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Edit</button>
            </div>
        </div>
    </div>
    <!-- Card dummy lain bisa ditambah sesuai kebutuhan -->
</div>
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