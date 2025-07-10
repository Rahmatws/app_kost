<?php
require_once __DIR__ . '/../controllers/kmr_penghuni.php';
require_once __DIR__ . '/../controllers/kamar.php';
require_once __DIR__ . '/../controllers/penghuni.php';
$kmr_penghuni = getAllKmrPenghuni();
$kamar = getAllKamar();
$penghuni = getAllPenghuni();
?>
<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:18px;">
    <h2 style="margin:0;">Kamar Penghuni</h2>
    <div style="font-weight:500;color:#888;">Dashboard / Kamar Penghuni</div>
</div>
<div style="display:flex;gap:18px;margin-bottom:24px;">
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;">18</div>
        <div style="color:#8d7b5a;">Total Hunian</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;color:#3bb273;">15</div>
        <div style="color:#8d7b5a;">Penghuni Aktif</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;color:#ffb347;">2</div>
        <div style="color:#8d7b5a;">Menunggu Konfirmasi</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;color:#e65a5a;">1</div>
        <div style="color:#8d7b5a;">Akan Keluar</div>
    </div>
</div>
<div style="display:flex;align-items:center;gap:12px;margin-bottom:18px;">
    <a href="?page=kmr_penghuni&action=add" style="background:#7b5ae6;color:#fff;padding:10px 22px;border-radius:8px;font-weight:600;text-decoration:none;box-shadow:0 2px 8px #e6b87a22;">+ Assign Kamar</a>
    <button style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Laporan Hunian</button>
    <button style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Export Data</button>
</div>
<div style="display:flex;gap:0;margin-bottom:18px;">
    <button style="flex:1;background:#3b7be6;color:#fff;padding:10px 0;border-radius:8px 0 0 8px;font-weight:600;border:none;">Semua Hunian</button>
    <button style="flex:1;background:#f5f8ff;color:#3b7be6;padding:10px 0;border-radius:0;font-weight:600;border:none;">Penghuni Aktif</button>
    <button style="flex:1;background:#f5f8ff;color:#ffb347;padding:10px 0;border-radius:0;font-weight:600;border:none;">Menunggu Konfirmasi</button>
    <button style="flex:1;background:#f5f8ff;color:#e65a5a;padding:10px 0;border-radius:0 8px 8px 0;font-weight:600;border:none;">Akan Keluar</button>
</div>
<div style="display:flex;flex-wrap:wrap;gap:24px;">
    <!-- Card Hunian Dummy -->
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:290px;max-width:300px;flex:1 1 290px;display:flex;flex-direction:column;gap:8px;border:2px solid #3bb273;">
        <div style="display:flex;align-items:center;justify-content:space-between;">
            <div>
                <span style="font-size:1.1em;font-weight:700;">🏡 Kamar 101</span>
                <span style="color:#888;font-size:0.98em;">&nbsp;VIP Room</span>
            </div>
            <span style="color:#3bb273;font-weight:600;background:#eafbe6;padding:4px 14px;border-radius:8px;">AKTIF</span>
        </div>
        <div style="display:flex;align-items:center;gap:8px;">
            <span style="color:#3b7be6;font-size:1.2em;">👤</span>
            <span style="font-weight:600;">Ahmad Rizki Pratama</span>
        </div>
        <div style="color:#888;font-size:0.98em;margin-left:28px;">+62 812-3456-7890<br>ID 3201234567890123</div>
        <div style="display:flex;gap:8px;margin:8px 0;">
            <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;flex:1;">
                <div style="font-size:0.95em;color:#888;">TANGGAL MASUK</div>
                <div style="font-weight:600;">15 Jan 2024</div>
            </div>
            <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;flex:1;">
                <div style="font-size:0.95em;color:#888;">KONTRAK BERAKHIR</div>
                <div style="font-weight:600;">15 Jul 2024</div>
            </div>
        </div>
        <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;">
            <div style="font-size:0.95em;color:#888;">LAMA MENGHUNI</div>
            <div style="font-weight:600;color:#3b7be6;">5 Bulan 12 Hari</div>
        </div>
        <div style="display:flex;align-items:center;justify-content:space-between;margin-top:8px;">
            <div><span style="font-weight:600;">Rp 1,200,000/bulan</span> <span style="color:#3bb273;font-weight:600;">Lunas</span></div>
            <div style="display:flex;gap:8px;">
                <button style="background:#3b7be6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
                <button style="background:#ffb347;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Edit</button>
                <button style="background:#e65a5a;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Check Out</button>
            </div>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:290px;max-width:300px;flex:1 1 290px;display:flex;flex-direction:column;gap:8px;border:2px solid #ffb347;">
        <div style="display:flex;align-items:center;justify-content:space-between;">
            <div>
                <span style="font-size:1.1em;font-weight:700;">🏡 Kamar 102</span>
                <span style="color:#888;font-size:0.98em;">&nbsp;Standar Room</span>
            </div>
            <span style="color:#ffb347;font-weight:600;background:#fff5e0;padding:4px 14px;border-radius:8px;">PENDING</span>
        </div>
        <div style="display:flex;align-items:center;gap:8px;">
            <span style="color:#3b7be6;font-size:1.2em;">👤</span>
            <span style="font-weight:600;">Siti Nurhaliza</span>
        </div>
        <div style="color:#888;font-size:0.98em;margin-left:28px;">+62 812-9876-5432<br>ID 3201234567890124</div>
        <div style="display:flex;gap:8px;margin:8px 0;">
            <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;flex:1;">
                <div style="font-size:0.95em;color:#888;">TANGGAL DAFTAR</div>
                <div style="font-weight:600;">20 Jun 2024</div>
            </div>
            <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;flex:1;">
                <div style="font-size:0.95em;color:#888;">RENCANA MASUK</div>
                <div style="font-weight:600;">25 Jun 2024</div>
            </div>
        </div>
        <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;">
            <div style="font-size:0.95em;color:#888;">STATUS PENDAFTARAN</div>
            <div style="font-weight:600;color:#3b7be6;">Menunggu Pembayaran DP</div>
        </div>
        <div style="display:flex;align-items:center;justify-content:space-between;margin-top:8px;">
            <div><span style="font-weight:600;">Rp 650,000/bulan</span> <span style="color:#ffb347;font-weight:600;">DP Pending</span></div>
            <div style="display:flex;gap:8px;">
                <button style="background:#3b7be6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
                <button style="background:#ffb347;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Edit</button>
                <button style="background:#3bb273;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Konfirmasi</button>
            </div>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:290px;max-width:300px;flex:1 1 290px;display:flex;flex-direction:column;gap:8px;border:2px solid #3bb273;">
        <div style="display:flex;align-items:center;justify-content:space-between;">
            <div>
                <span style="font-size:1.1em;font-weight:700;">🏡 Kamar 103</span>
                <span style="color:#888;font-size:0.98em;">&nbsp;Deluxe Room</span>
            </div>
            <span style="color:#3bb273;font-weight:600;background:#eafbe6;padding:4px 14px;border-radius:8px;">AKTIF</span>
        </div>
        <div style="display:flex;align-items:center;gap:8px;">
            <span style="color:#3b7be6;font-size:1.2em;">👤</span>
            <span style="font-weight:600;">Budi Santoso</span>
        </div>
        <div style="color:#888;font-size:0.98em;margin-left:28px;">+62 813-4567-8901<br>ID 3201234567890125</div>
        <div style="display:flex;gap:8px;margin:8px 0;">
            <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;flex:1;">
                <div style="font-size:0.95em;color:#888;">TANGGAL MASUK</div>
                <div style="font-weight:600;">01 Mar 2024</div>
            </div>
            <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;flex:1;">
                <div style="font-size:0.95em;color:#888;">KONTRAK BERAKHIR</div>
                <div style="font-weight:600;">01 Sep 2024</div>
            </div>
        </div>
        <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;">
            <div style="font-size:0.95em;color:#888;">LAMA MENGHUNI</div>
            <div style="font-weight:600;color:#3b7be6;">3 Bulan 28 Hari</div>
        </div>
        <div style="display:flex;align-items:center;justify-content:space-between;margin-top:8px;">
            <div><span style="font-weight:600;">Rp 900,000/bulan</span> <span style="color:#e65a5a;font-weight:600;">Telat 3 Hari</span></div>
            <div style="display:flex;gap:8px;">
                <button style="background:#3b7be6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
                <button style="background:#ffb347;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Edit</button>
                <button style="background:#e65a5a;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Tagihan</button>
            </div>
        </div>
    </div>
    <!-- Card dummy lain bisa ditambah sesuai kebutuhan -->
</div>
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