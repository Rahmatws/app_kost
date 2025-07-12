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
    <button id="inputBarangBawaanBtn" style="background:#7b5ae6;color:#fff;padding:10px 22px;border-radius:8px;font-weight:600;box-shadow:0 2px 8px #e6b87a22;border:none;cursor:pointer;">+ Input Barang Bawaan</button>
    <button id="laporanCheckinoutBtn" style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Laporan Check-in/out</button>
    <button id="exportBarangBawaanBtn" style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Export Data</button>
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
        </div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#3b7be6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#ffb347;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Edit</button>
            <button style="background:#e65a5a;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Check-out</button>
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
        </div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#3b7be6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#3bb273;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Verifikasi</button>
            <button style="background:#ffb347;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Edit</button>
        </div>
    </div>
    <!-- Card dummy lain bisa ditambah sesuai kebutuhan -->
</div>
<table style="width:100%;border-collapse:collapse;margin-top:24px;">
    <thead>
        <tr>
            <th style="padding:12px 16px;text-align:left;border-bottom:1px solid #e0e0e0;font-weight:600;">Foto</th>
            <th style="padding:12px 16px;text-align:left;border-bottom:1px solid #e0e0e0;font-weight:600;">Penghuni</th>
            <th style="padding:12px 16px;text-align:left;border-bottom:1px solid #e0e0e0;font-weight:600;">Kamar</th>
            <th style="padding:12px 16px;text-align:left;border-bottom:1px solid #e0e0e0;font-weight:600;">Barang</th>
            <th style="padding:12px 16px;text-align:left;border-bottom:1px solid #e0e0e0;font-weight:600;">Jumlah</th>
            <th style="padding:12px 16px;text-align:left;border-bottom:1px solid #e0e0e0;font-weight:600;">Status</th>
            <th style="padding:12px 16px;text-align:left;border-bottom:1px solid #e0e0e0;font-weight:600;">Tanggal</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>🧳</td>
            <td>Andi Setiawan</td>
            <td>Kamar 101</td>
            <td>Kasur Lipat</td>
            <td>1</td>
            <td>Check-in</td>
            <td>01 Jan 2024</td>
        </tr>
        <tr>
            <td>🎒</td>
            <td>Maya Sari</td>
            <td>Kamar 105</td>
            <td>Tas Ransel</td>
            <td>2</td>
            <td>Check-in</td>
            <td>15 Jan 2024</td>
        </tr>
        <tr>
            <td>📦</td>
            <td>Budi Santoso</td>
            <td>Kamar 103</td>
            <td>Kardus Besar</td>
            <td>3</td>
            <td>Check-in</td>
            <td>10 Feb 2024</td>
        </tr>
        <tr>
            <td>🧥</td>
            <td>Ahmad Rizki</td>
            <td>Kamar 102</td>
            <td>Jaket Kulit</td>
            <td>1</td>
            <td>Check-out</td>
            <td>20 Mar 2024</td>
        </tr>
        <tr>
            <td>🛏️</td>
            <td>Budi Raharja</td>
            <td>Kamar 104</td>
            <td>Bantal Guling</td>
            <td>2</td>
            <td>Check-in</td>
            <td>05 Apr 2024</td>
        </tr>
        <tr>
            <td>📚</td>
            <td>Maya Sari</td>
            <td>Kamar 106</td>
            <td>Buku Kuliah</td>
            <td>5</td>
            <td>Check-out</td>
            <td>10 Mei 2024</td>
        </tr>
    </tbody>
</table>
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
<!-- Modal Input Barang Bawaan (Statis/Simulasi) -->
<div id="inputBarangBawaanModal" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.18);align-items:center;justify-content:center;">
  <div id="inputBarangBawaanPanel" style="background:#fff;border-radius:12px;max-width:500px;width:96vw;padding:0 0 18px 0;box-shadow:0 8px 32px #0002;position:relative;overflow-y:auto;max-height:90vh;">
    <div style="padding:20px 40px 0 40px;display:flex;align-items:center;justify-content:space-between;">
      <div style="font-size:1.18em;font-weight:600;">Input Barang Bawaan</div>
      <button id="closeInputBarangBawaan" style="background:none;border:none;font-size:1.5em;line-height:1;color:#888;cursor:pointer;">&times;</button>
    </div>
    <div style="height:2px;background:linear-gradient(90deg,#ffe6a0 0,#fff 100%);margin:12px 0 18px 0;"></div>
    <form onsubmit="return false;" style="padding:0 40px;display:flex;flex-direction:column;gap:14px;">
      <div style="background:#f5f8ff;border-radius:8px;padding:12px 16px;margin-bottom:8px;display:flex;align-items:center;gap:10px;">
        <span style="font-size:1.2em;color:#3b7be6;">📝</span>
        <div style="font-weight:600;color:#3b7be6;">Formulir Input Barang Bawaan</div>
      </div>
      <div>
        <label style="font-weight:500;">Penghuni *</label><br>
        <select style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>-- Pilih Penghuni --</option>
          <option>Andi Setiawan</option>
          <option>Maya Sari</option>
          <option>Budi Raharja</option>
        </select>
      </div>
      <div>
        <label style="font-weight:500;">Kamar *</label><br>
        <select style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>-- Pilih Kamar --</option>
          <option>Kamar 104</option>
          <option>Kamar 105</option>
          <option>Kamar 106</option>
        </select>
      </div>
      <div>
        <label style="font-weight:500;">Jenis Aktivitas *</label><br>
        <select style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>Check-in</option>
          <option>Check-out</option>
        </select>
      </div>
      <div style="display:flex;gap:32px;">
        <div style="flex:1;">
          <label style="font-weight:500;">Tanggal *</label><br>
          <input type="date" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
        </div>
        <div style="flex:1;">
          <label style="font-weight:500;">Waktu *</label><br>
          <input type="time" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
        </div>
      </div>
      <div>
        <label style="font-weight:500;">Daftar Barang Bawaan *</label>
        <button type="button" style="margin-left:12px;background:#3bb273;color:#fff;padding:5px 14px;border-radius:7px;font-weight:600;border:none;font-size:0.98em;">+ Tambah Item</button>
        <div style="background:#fafbfc;border:1.2px dashed #cfd8dc;border-radius:8px;padding:24px 0;margin-top:10px;text-align:center;color:#bbb;">
          <div style="font-size:2em;">📦</div>
          <div style="font-weight:500;">Belum ada barang yang ditambahkan</div>
          <div style="font-size:0.97em;">Klik 'Tambah Item' untuk mulai menambah barang</div>
        </div>
      </div>
      <div>
        <label style="font-weight:500;">Upload Foto Barang</label>
        <div style="background:#fafbfc;border:1.2px dashed #cfd8dc;border-radius:8px;padding:24px 0;margin-top:10px;text-align:center;color:#bbb;">
          <div style="font-size:2em;">📷</div>
          <div style="font-weight:500;">Klik untuk upload foto atau drag & drop</div>
          <div style="font-size:0.97em;">PNG, JPG, CIF | Max 10MB (maksimal 5 foto)</div>
          <button type="button" style="margin-top:10px;background:#e6e6ff;color:#7b5ae6;padding:7px 18px;border-radius:7px;font-weight:600;border:none;">Pilih Foto</button>
        </div>
      </div>
      <div>
        <label style="font-weight:500;">Catatan Tambahan</label><br>
        <textarea style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;min-height:48px;resize:vertical;" placeholder="Catatan khusus tentang barang atau kondisi..."></textarea>
      </div>
      <div style="background:#eaffea;border-radius:8px;padding:14px 18px;margin:8px 0 0 0;">
        <div style="font-weight:600;color:#3bb273;margin-bottom:6px;">Ringkasan Input</div>
        <div style="font-size:0.98em;line-height:1.7;display:flex;flex-wrap:wrap;gap:18px;">
          <div>Total Item: <b>0</b></div>
          <div>Jenis Barang: <b>-</b></div>
          <div>Aktivitas: <b>Check-in</b></div>
          <div>Status: <span style="color:#ffb347;font-weight:600;">Menunggu Verifikasi</span></div>
        </div>
      </div>
      <div style="display:flex;gap:10px;margin-top:18px;">
        <button type="button" id="batalInputBarangBawaan" style="flex:1;background:#fff;border:1.5px solid #cfd8dc;color:#888;font-weight:600;padding:10px 0;border-radius:7px;">Batal</button>
        <button type="submit" style="flex:2;background:#3b7be6;color:#fff;font-weight:600;padding:10px 0;border-radius:7px;border:none;">Simpan Input Barang</button>
      </div>
    </form>
  </div>
</div>
<script>
// Modal Input Barang Bawaan logic
const inputBarangBawaanBtn = document.getElementById('inputBarangBawaanBtn');
const inputBarangBawaanModal = document.getElementById('inputBarangBawaanModal');
const closeInputBarangBawaan = document.getElementById('closeInputBarangBawaan');
const batalInputBarangBawaan = document.getElementById('batalInputBarangBawaan');

inputBarangBawaanBtn.onclick = () => inputBarangBawaanModal.style.display = 'flex';
closeInputBarangBawaan.onclick = batalInputBarangBawaan.onclick = () => inputBarangBawaanModal.style.display = 'none';
inputBarangBawaanModal.onclick = e => { if (e.target === inputBarangBawaanModal) inputBarangBawaanModal.style.display = 'none'; };
</script> 
<!-- Modal Laporan Check-in/out (Statis/Simulasi) -->
<div id="laporanCheckinoutModal" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.18);align-items:center;justify-content:center;">
  <div id="laporanCheckinoutPanel" style="background:#fff;border-radius:12px;max-width:500px;width:96vw;padding:0 0 18px 0;box-shadow:0 8px 32px #0002;position:relative;overflow-y:auto;max-height:90vh;">
    <div style="padding:20px 30px 0 30px;display:flex;align-items:center;justify-content:space-between;">
      <div style="font-size:1.18em;font-weight:600;">Generate Laporan Check-in/out</div>
      <button id="closeLaporanCheckinout" style="background:none;border:none;font-size:1.5em;line-height:1;color:#888;cursor:pointer;">&times;</button>
    </div>
    <div style="height:2px;background:linear-gradient(90deg,#ffe6a0 0,#fff 100%);margin:12px 0 18px 0;"></div>
    <form onsubmit="return false;" style="padding:0 30px;display:flex;flex-direction:column;gap:14px;">
      <div>
        <label style="font-weight:500;">Jenis Laporan</label>
        <div style="display:flex;flex-direction:column;gap:8px;margin-top:6px;">
          <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="jenis_laporan" value="Aktivitas Check-in/out" checked style="accent-color:#7b5ae6;margin-top:2px;">
            <div>
              <div style="font-weight:600;">Aktivitas Check-in/out</div>
              <div style="font-size:0.97em;color:#888;">Semua aktivitas keluar/masuk barang</div>
            </div>
          </label>
          <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="jenis_laporan" value="Ringkasan Inventori" style="accent-color:#7b5ae6;margin-top:2px;">
            <div>
              <div style="font-weight:600;">Ringkasan Inventori</div>
              <div style="font-size:0.97em;color:#888;">Summary barang per penghuni/kamar</div>
            </div>
          </label>
          <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="jenis_laporan" value="Barang Hilang/Rusak" style="accent-color:#7b5ae6;margin-top:2px;">
            <div>
              <div style="font-weight:600;">Barang Hilang/Rusak</div>
              <div style="font-size:0.97em;color:#888;">Laporan barang bermasalah</div>
            </div>
          </label>
          <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="jenis_laporan" value="Status Verifikasi" style="accent-color:#7b5ae6;margin-top:2px;">
            <div>
              <div style="font-weight:600;">Status Verifikasi</div>
              <div style="font-size:0.97em;color:#888;">Tracking proses verifikasi</div>
            </div>
          </label>
        </div>
      </div>
      <div>
        <label style="font-weight:500;">Periode Laporan</label><br>
        <select style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>Harian</option>
          <option>Mingguan</option>
          <option selected>Bulanan</option>
          <option>Kuartalan</option>
          <option>Tahunan</option>
          <option>Custom Range</option>
        </select>
      </div>
      <div style="display:flex;gap:36px;">
        <div style="flex:1;">
          <label style="font-weight:500;">Dari tanggal</label><br>
          <input type="date" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
        </div>
        <div style="flex:1;">
          <label style="font-weight:500;">Sampai tanggal</label><br>
          <input type="date" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
        </div>
      </div>
      <div>
        <label style="font-weight:500;">Filter Penghuni (Opsional)</label><br>
        <select style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>Semua Penghuni</option>
          <option>Andi Setiawan</option>
          <option>Maya Sari</option>
          <option>Budi Raharja</option>
        </select>
      </div>
      <div>
        <label style="font-weight:500;">Filter Kamar (Opsional)</label><br>
        <select style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>Semua Kamar</option>
          <option>Kamar 104</option>
          <option>Kamar 105</option>
          <option>Kamar 106</option>
        </select>
      </div>
      <div>
        <label style="font-weight:500;">Format Output</label>
        <div style="display:flex;gap:24px;margin-top:6px;">
          <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
            <input type="radio" name="format_output" value="Pdf" checked style="accent-color:#7b5ae6;">
            <span style="font-size:1.2em;">📄</span> Pdf
          </label>
          <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
            <input type="radio" name="format_output" value="Excel" style="accent-color:#7b5ae6;">
            <span style="font-size:1.2em;">📊</span> Excel
          </label>
          <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
            <input type="radio" name="format_output" value="Word" style="accent-color:#7b5ae6;">
            <span style="font-size:1.2em;">🗎</span> Word
          </label>
        </div>
      </div>
      <div style="background:#f8f5ff;border-radius:8px;padding:14px 18px;margin:8px 0 0 0;">
        <div style="font-weight:600;color:#7b5ae6;margin-bottom:6px;">Preview Konten Laporan</div>
        <div style="font-size:0.98em;line-height:1.7;color:#7b5ae6;">
          <span style="display:flex;align-items:center;gap:7px;"><span style="font-size:1.1em;">📋</span> Total aktivitas check-in/out</span><br>
          <span style="display:flex;align-items:center;gap:7px;"><span style="font-size:1.1em;">👤</span> Breakdown per penghuni</span><br>
          <span style="display:flex;align-items:center;gap:7px;"><span style="font-size:1.1em;">🏠</span> Distribusi per kamar</span><br>
          <span style="display:flex;align-items:center;gap:7px;"><span style="font-size:1.1em;">⚠️</span> Item bermasalah</span>
        </div>
      </div>
      <div style="display:flex;gap:10px;margin-top:18px;">
        <button type="button" id="batalLaporanCheckinout" style="flex:1;background:#fff;border:1.5px solid #cfd8dc;color:#888;font-weight:600;padding:10px 0;border-radius:7px;">Batal</button>
        <button type="submit" style="flex:2;background:#7b5ae6;color:#fff;font-weight:600;padding:10px 0;border-radius:7px;border:none;display:flex;align-items:center;justify-content:center;gap:8px;"><span style="font-size:1.2em;">📄</span> Generate Laporan</button>
      </div>
    </form>
  </div>
</div>
<script>
// Modal Laporan Check-in/out logic
const laporanCheckinoutBtn = document.getElementById('laporanCheckinoutBtn');
const laporanCheckinoutModal = document.getElementById('laporanCheckinoutModal');
const closeLaporanCheckinout = document.getElementById('closeLaporanCheckinout');
const batalLaporanCheckinout = document.getElementById('batalLaporanCheckinout');

laporanCheckinoutBtn.onclick = () => laporanCheckinoutModal.style.display = 'flex';
closeLaporanCheckinout.onclick = batalLaporanCheckinout.onclick = () => laporanCheckinoutModal.style.display = 'none';
laporanCheckinoutModal.onclick = e => { if (e.target === laporanCheckinoutModal) laporanCheckinoutModal.style.display = 'none'; };
</script> 
<!-- Modal Export Data Barang Bawaan (Statis/Simulasi) -->
<div id="exportBarangBawaanModal" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.18);align-items:center;justify-content:center;">
  <div id="exportBarangBawaanPanel" style="background:#fff;border-radius:12px;max-width:500px;width:96vw;padding:0 0 18px 0;box-shadow:0 8px 32px #0002;position:relative;overflow-y:auto;max-height:90vh;">
    <div style="padding:20px 30px 0 30px;display:flex;align-items:center;justify-content:space-between;">
      <div style="font-size:1.18em;font-weight:600;">Export Data Barang Bawaan</div>
      <button id="closeExportBarangBawaan" style="background:none;border:none;font-size:1.5em;line-height:1;color:#888;cursor:pointer;">&times;</button>
    </div>
    <div style="height:2px;background:linear-gradient(90deg,#ffe6a0 0,#fff 100%);margin:12px 0 18px 0;"></div>
    <form onsubmit="return false;" style="padding:0 30px;display:flex;flex-direction:column;gap:14px;">
      <div>
        <label style="font-weight:500;">Format Export</label>
        <div style="display:flex;flex-direction:column;gap:8px;margin-top:6px;">
          <label style="display:flex;align-items:center;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="format_export" value="Excel" checked style="accent-color:#ff9100;">
            <span style="font-size:1.3em;">🟢</span>
            <div>
              <div style="font-weight:600;">Excel (.xlsx)</div>
              <div style="font-size:0.97em;color:#888;">Untuk analisis dan kalkulasi</div>
            </div>
          </label>
          <label style="display:flex;align-items:center;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="format_export" value="CSV" style="accent-color:#ff9100;">
            <span style="font-size:1.3em;">🟡</span>
            <div>
              <div style="font-weight:600;">CSV (.csv)</div>
              <div style="font-size:0.97em;color:#888;">Import ke sistem lain</div>
            </div>
          </label>
          <label style="display:flex;align-items:center;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="format_export" value="PDF" style="accent-color:#ff9100;">
            <span style="font-size:1.3em;">📄</span>
            <div>
              <div style="font-weight:600;">PDF (.pdf)</div>
              <div style="font-size:0.97em;color:#888;">Dokumentasi dan arsip</div>
            </div>
          </label>
          <label style="display:flex;align-items:center;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="format_export" value="JSON" style="accent-color:#ff9100;">
            <span style="font-size:1.3em;">🛠️</span>
            <div>
              <div style="font-weight:600;">JSON (.json)</div>
              <div style="font-size:0.97em;color:#888;">Data terstruktur untuk API</div>
            </div>
          </label>
        </div>
      </div>
      <div>
        <label style="font-weight:500;">Range Data</label><br>
        <select style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>Semua Data</option>
          <option>Hanya Check-in</option>
          <option>Hanya Check-out</option>
          <option>Pending Verifikasi</option>
          <option>Sudah Terverifikasi</option>
          <option>Hari Ini</option>
          <option>7 Hari Terakhir</option>
          <option>30 Hari Terakhir</option>
        </select>
      </div>
      <div>
        <label style="font-weight:500;">Status Filter</label><br>
        <select style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>Semua Status</option>
          <option>Kondisi Baik</option>
          <option>Kondisi Rusak</option>
          <option>Barang Hilang</option>
        </select>
      </div>
      <div style="font-weight:500;">Opsi Export:</div>
      <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
        <input type="checkbox" style="accent-color:#ff9100;">
        Sertakan foto barang (hanya untuk PDF)
      </label>
      <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
        <input type="checkbox" checked style="accent-color:#ff9100;">
        Sertakan detail lengkap item
      </label>
      <div style="background:#fff6ed;border:1.5px solid #ff9100;border-radius:8px;padding:14px 18px;margin:8px 0 0 0;">
        <div style="font-weight:600;color:#ff9100;margin-bottom:6px;">Preview Export</div>
        <div style="font-size:0.98em;line-height:1.7;">
          Total Records: <b>156</b><br>
          Format: <span style="color:#ff9100;font-weight:600;">EXCEL</span><br>
          Estimated Size: <b>~2.8 MB</b><br>
          <div style="margin-top:8px;font-size:0.97em;color:#b85c00;">Kolom yang disertakan: <span style="color:#ff9100;">ID, Penghuni, Kamar, Tanggal, Waktu, Aktivitas, Daftar Barang, Status Verifikasi, Detail Kondisi, Catatan</span></div>
        </div>
      </div>
      <div style="display:flex;gap:10px;margin-top:18px;">
        <button type="button" id="batalExportBarangBawaan" style="flex:1;background:#fff;border:1.5px solid #cfd8dc;color:#888;font-weight:600;padding:10px 0;border-radius:7px;">Batal</button>
        <button type="submit" style="flex:2;background:#ff9100;color:#fff;font-weight:600;padding:10px 0;border-radius:7px;border:none;display:flex;align-items:center;justify-content:center;gap:8px;"><span style="font-size:1.2em;">⬇️</span> Download Export</button>
      </div>
    </form>
  </div>
</div>
<script>
// Modal Export Data Barang Bawaan logic
const exportBarangBawaanBtn = document.getElementById('exportBarangBawaanBtn');
const exportBarangBawaanModal = document.getElementById('exportBarangBawaanModal');
const closeExportBarangBawaan = document.getElementById('closeExportBarangBawaan');
const batalExportBarangBawaan = document.getElementById('batalExportBarangBawaan');

exportBarangBawaanBtn.onclick = () => exportBarangBawaanModal.style.display = 'flex';
closeExportBarangBawaan.onclick = batalExportBarangBawaan.onclick = () => exportBarangBawaanModal.style.display = 'none';
exportBarangBawaanModal.onclick = e => { if (e.target === exportBarangBawaanModal) exportBarangBawaanModal.style.display = 'none'; };
</script> 