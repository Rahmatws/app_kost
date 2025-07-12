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
    <button id="assignKamarBtn" style="background:#7b5ae6;color:#fff;padding:10px 22px;border-radius:8px;font-weight:600;box-shadow:0 2px 8px #e6b87a22;border:none;cursor:pointer;">+ Assign Kamar</button>
    <button id="laporanHunianBtn" style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Laporan Hunian</button>
    <button id="exportDataBtn" style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Export Data</button>
</div>
<div style="display:flex;gap:0;margin-bottom:18px;">
    <button class="filter-hunian-btn" data-status="all" style="flex:1;background:#3b7be6;color:#fff;padding:10px 0;border-radius:8px 0 0 8px;font-weight:600;border:none;">Semua Hunian</button>
    <button class="filter-hunian-btn" data-status="aktif" style="flex:1;background:#f5f8ff;color:#3b7be6;padding:10px 0;border-radius:0;font-weight:600;border:none;">Penghuni Aktif</button>
    <button class="filter-hunian-btn" data-status="pending" style="flex:1;background:#f5f8ff;color:#ffb347;padding:10px 0;border-radius:0;font-weight:600;border:none;">Menunggu Konfirmasi</button>
    <button class="filter-hunian-btn" data-status="keluar" style="flex:1;background:#f5f8ff;color:#e65a5a;padding:10px 0;border-radius:0 8px 8px 0;font-weight:600;border:none;">Akan Keluar</button>
</div>
<div id="hunianCardContainer" style="display:flex;flex-wrap:wrap;gap:24px;">
    <!-- Card Hunian Dummy -->
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:22px 20px;min-width:260px;max-width:270px;flex:1 1 260px;display:flex;flex-direction:column;gap:8px;border:2px solid #3bb273;">
        <div style="font-size:1.1em;font-weight:700;">Andi Setiawan</div>
        <div style="color:#888;font-size:0.98em;">Kamar 101 - VIP</div>
        <div style="color:#3b7be6;font-weight:600;">Durasi: 12 bulan</div>
        <div style="color:#3bb273;font-weight:600;background:#eafbe6;padding:4px 14px;border-radius:8px;display:inline-block;">AKTIF</div>
        <div style="color:#888;font-size:0.95em;">Check-in: 01 Jan 2024</div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#f5f8ff;color:#3b7be6;padding:7px 14px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#ffb347;color:#fff;padding:7px 14px;border-radius:7px;font-weight:600;border:none;">Edit</button>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:22px 20px;min-width:260px;max-width:270px;flex:1 1 260px;display:flex;flex-direction:column;gap:8px;border:2px solid #e65a5a;">
        <div style="font-size:1.1em;font-weight:700;">Maya Sari</div>
        <div style="color:#888;font-size:0.98em;">Kamar 105 - Deluxe</div>
        <div style="color:#3b7be6;font-weight:600;">Durasi: 6 bulan</div>
        <div style="color:#e65a5a;font-weight:600;background:#ffeaea;padding:4px 14px;border-radius:8px;display:inline-block;">AKAN KELUAR</div>
        <div style="color:#888;font-size:0.95em;">Check-out: 15 Juli 2024</div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#f5f8ff;color:#3b7be6;padding:7px 14px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#ffb347;color:#fff;padding:7px 14px;border-radius:7px;font-weight:600;border:none;">Edit</button>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:22px 20px;min-width:260px;max-width:270px;flex:1 1 260px;display:flex;flex-direction:column;gap:8px;border:2px solid #ffb347;">
        <div style="font-size:1.1em;font-weight:700;">Budi Santoso</div>
        <div style="color:#888;font-size:0.98em;">Kamar 103 - Deluxe</div>
        <div style="color:#3b7be6;font-weight:600;">Durasi: 3 bulan</div>
        <div style="color:#ffb347;font-weight:600;background:#fff5e0;padding:4px 14px;border-radius:8px;display:inline-block;">MENUNGGU KONFIRMASI</div>
        <div style="color:#888;font-size:0.95em;">Pengajuan: 10 Juni 2024</div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#f5f8ff;color:#3b7be6;padding:7px 14px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#ffb347;color:#fff;padding:7px 14px;border-radius:7px;font-weight:600;border:none;">Edit</button>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:22px 20px;min-width:260px;max-width:270px;flex:1 1 260px;display:flex;flex-direction:column;gap:8px;border:2px solid #3bb273;">
        <div style="font-size:1.1em;font-weight:700;">Ahmad Rizki</div>
        <div style="color:#888;font-size:0.98em;">Kamar 102 - Standar</div>
        <div style="color:#3b7be6;font-weight:600;">Durasi: 1 tahun</div>
        <div style="color:#3bb273;font-weight:600;background:#eafbe6;padding:4px 14px;border-radius:8px;display:inline-block;">AKTIF</div>
        <div style="color:#888;font-size:0.95em;">Check-in: 10 Feb 2024</div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#f5f8ff;color:#3b7be6;padding:7px 14px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#ffb347;color:#fff;padding:7px 14px;border-radius:7px;font-weight:600;border:none;">Edit</button>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:22px 20px;min-width:260px;max-width:270px;flex:1 1 260px;display:flex;flex-direction:column;gap:8px;border:2px solid #e65a5a;">
        <div style="font-size:1.1em;font-weight:700;">Budi Raharja</div>
        <div style="color:#888;font-size:0.98em;">Kamar 104 - Standar</div>
        <div style="color:#3b7be6;font-weight:600;">Durasi: 9 bulan</div>
        <div style="color:#e65a5a;font-weight:600;background:#ffeaea;padding:4px 14px;border-radius:8px;display:inline-block;">AKAN KELUAR</div>
        <div style="color:#888;font-size:0.95em;">Check-out: 01 Agustus 2024</div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#f5f8ff;color:#3b7be6;padding:7px 14px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#ffb347;color:#fff;padding:7px 14px;border-radius:7px;font-weight:600;border:none;">Edit</button>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:22px 20px;min-width:260px;max-width:270px;flex:1 1 260px;display:flex;flex-direction:column;gap:8px;border:2px solid #ffb347;">
        <div style="font-size:1.1em;font-weight:700;">Maya Sari</div>
        <div style="color:#888;font-size:0.98em;">Kamar 106 - VIP</div>
        <div style="color:#3b7be6;font-weight:600;">Durasi: 2 bulan</div>
        <div style="color:#ffb347;font-weight:600;background:#fff5e0;padding:4px 14px;border-radius:8px;display:inline-block;">MENUNGGU KONFIRMASI</div>
        <div style="color:#888;font-size:0.95em;">Pengajuan: 20 Juni 2024</div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#f5f8ff;color:#3b7be6;padding:7px 14px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#ffb347;color:#fff;padding:7px 14px;border-radius:7px;font-weight:600;border:none;">Edit</button>
        </div>
    </div>
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

<!-- Modal Assign Kamar (Statis/Simulasi) -->
<div id="assignKamarModal" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.18);align-items:center;justify-content:center;">
  <div id="assignKamarPanel" style="background:#fff;border-radius:12px;max-width:540px;width:96vw;padding:0 0 18px 0;box-shadow:0 8px 32px #0002;position:relative;overflow-y:auto;max-height:90vh;">
    <div style="padding:20px 28px 0 28px;display:flex;align-items:center;justify-content:space-between;">
      <div style="font-size:1.18em;font-weight:600;">Assign Kamar ke Penghuni</div>
      <button id="closeAssignKamar" style="background:none;border:none;font-size:1.5em;line-height:1;color:#888;cursor:pointer;">&times;</button>
    </div>
    <div style="height:2px;background:linear-gradient(90deg,#ffe6a0 0,#fff 100%);margin:12px 0 18px 0;"></div>
    <form onsubmit="return false;" style="padding:0 28px;display:flex;flex-direction:column;gap:12px;">
      <div>
        <label style="font-weight:500;">Pilih Penghuni *</label><br>
        <select id="penghuniSelect" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>-- Pilih Penghuni --</option>
          <option>Andi Setiawan - +62 812-3456-7891</option>
          <option>Maya Sari - +62 813-4567-8902</option>
          <option>Budi Raharja - +62 814-5678-9013</option>
        </select>
        <div style="font-size:0.93em;color:#888;">Hanya menampilkan penghuni yang sudah verified</div>
      </div>
      <div>
        <label style="font-weight:500;">Pilih Kamar *</label><br>
        <select id="kamarSelect" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>-- Pilih Kamar --</option>
          <option data-harga="800000">Kamar 104 - Standard Room (Rp 800.000/bulan)</option>
          <option data-harga="1200000">Kamar 105 - VIP Room (Rp 1.200.000/bulan)</option>
          <option data-harga="900000">Kamar 106 - Deluxe Room (Rp 900.000/bulan)</option>
        </select>
        <div style="font-size:0.93em;color:#888;">Hanya menampilkan kamar yang tersedia</div>
      </div>
      <div>
        <label style="font-weight:500;">Tanggal Masuk *</label><br>
        <input id="tglMasukInput" type="date" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
      </div>
      <div>
        <label style="font-weight:500;">Durasi Kontrak *</label><br>
        <select id="durasiSelect" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>-- Pilih Durasi --</option>
          <option>1 Bulan</option>
          <option>3 Bulan</option>
          <option>6 Bulan</option>
          <option>12 Bulan</option>
          <option>Custom</option>
        </select>
      </div>
      <div>
        <label style="font-weight:500;">Harga Sewa per Bulan *</label><br>
        <input id="hargaSewaInput" type="text" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;" value="0" readonly>
        <div style="font-size:0.93em;color:#888;">Akan otomatis terisi sesuai harga kamar</div>
      </div>
      <div>
        <label style="font-weight:500;">Uang Muka/Deposit</label><br>
        <input id="depositInput" type="text" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;" value="0">
      </div>
      <div>
        <label style="font-weight:500;">Catatan Khusus</label><br>
        <textarea id="catatanInput" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;min-height:48px;resize:vertical;" placeholder="Catatan tambahan untuk assignment ini..."></textarea>
      </div>
      <div style="background:#f5f8ff;border-radius:8px;padding:14px 18px;margin:8px 0 0 0;">
        <div style="font-weight:600;color:#3b7be6;margin-bottom:6px;">Preview Assignment</div>
        <div style="font-size:0.98em;line-height:1.7;">
          Penghuni: <span id="previewPenghuni">-</span><br>
          Kamar: <span id="previewKamar">-</span><br>
          Tanggal Masuk: <span id="previewTglMasuk">-</span><br>
          Durasi: <span id="previewDurasi">-</span>
        </div>
      </div>
      <div style="display:flex;gap:10px;margin-top:18px;">
        <button type="button" id="batalAssignKamar" style="flex:1;background:#fff;border:1.5px solid #cfd8dc;color:#888;font-weight:600;padding:10px 0;border-radius:7px;">Batal</button>
        <button type="submit" style="flex:2;background:#3b7be6;color:#fff;font-weight:600;padding:10px 0;border-radius:7px;border:none;">Assign Kamar</button>
      </div>
    </form>
  </div>
</div>

<!-- Modal Laporan Hunian (Statis/Simulasi) -->
<div id="laporanHunianModal" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.18);align-items:center;justify-content:center;">
  <div id="laporanHunianPanel" style="background:#fff;border-radius:12px;max-width:500px;width:96vw;padding:0 0 18px 0;box-shadow:0 8px 32px #0002;position:relative;overflow-y:auto;max-height:90vh;">
    <div style="padding:20px 30px 0 30px;display:flex;align-items:center;justify-content:space-between;">
      <div style="font-size:1.18em;font-weight:600;">Generate Laporan Hunian</div>
      <button id="closeLaporanHunian" style="background:none;border:none;font-size:1.5em;line-height:1;color:#888;cursor:pointer;">&times;</button>
    </div>
    <div style="height:2px;background:linear-gradient(90deg,#ffe6a0 0,#fff 100%);margin:12px 0 18px 0;"></div>
    <form onsubmit="return false;" style="padding:0 30px;display:flex;flex-direction:column;gap:14px;">
      <div>
        <label style="font-weight:500;">Jenis Laporan</label>
        <div style="display:flex;flex-direction:column;gap:8px;margin-top:6px;">
          <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="jenis_laporan" value="Tingkat Hunian" checked style="accent-color:#3bb273;margin-top:2px;">
            <div>
              <div style="font-weight:600;">Tingkat Hunian</div>
              <div style="font-size:0.97em;color:#888;">Persentase okupansi per periode</div>
            </div>
          </label>
          <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="jenis_laporan" value="Laporan Pendapatan" style="accent-color:#3bb273;margin-top:2px;">
            <div>
              <div style="font-weight:600;">Laporan Pendapatan</div>
              <div style="font-size:0.97em;color:#888;">Total pendapatan dari sewa</div>
            </div>
          </label>
          <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="jenis_laporan" value="Data Penghuni" style="accent-color:#3bb273;margin-top:2px;">
            <div>
              <div style="font-weight:600;">Data Penghuni</div>
              <div style="font-size:0.97em;color:#888;">Daftar lengkap penghuni aktif</div>
            </div>
          </label>
          <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="jenis_laporan" value="Turnover Rate" style="accent-color:#3bb273;margin-top:2px;">
            <div>
              <div style="font-weight:600;">Turnover Rate</div>
              <div style="font-size:0.97em;color:#888;">Analisis keluar masuk penghuni</div>
            </div>
          </label>
        </div>
      </div>
      <div>
        <label style="font-weight:500;">Periode</label><br>
        <select style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>Harian</option>
          <option>Mingguan</option>
          <option selected>Bulanan</option>
          <option>Kuartalan</option>
          <option>Tahunan</option>
          <option>Custom Range</option>
        </select>
      </div>
      <div style="display:flex;gap:10px;">
        <div style="flex:1;">
          <label style="font-weight:500;">Dari Tanggal</label><br>
          <input type="date" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
        </div>
        <div style="flex:1;">
          <label style="font-weight:500;">Sampai Tanggal</label><br>
          <input type="date" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
        </div>
      </div>
      <div>
        <label style="font-weight:500;">Format Output</label>
        <div style="display:flex;gap:24px;margin-top:6px;">
          <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
            <input type="radio" name="format_output" value="Pdf" checked style="accent-color:#3bb273;">
            Pdf
          </label>
          <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
            <input type="radio" name="format_output" value="Excel" style="accent-color:#3bb273;">
            Excel
          </label>
          <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
            <input type="radio" name="format_output" value="Word" style="accent-color:#3bb273;">
            Word
          </label>
        </div>
        <label style="display:flex;align-items:center;gap:7px;margin-top:10px;cursor:pointer;">
          <input type="checkbox" checked style="accent-color:#3bb273;">
          Sertakan grafik dan chart
        </label>
      </div>
      <div style="background:#eaffea;border-radius:8px;padding:14px 18px;margin:8px 0 0 0;">
        <div style="font-weight:600;color:#3bb273;margin-bottom:6px;">Preview Konten Laporan</div>
        <div style="font-size:0.98em;line-height:1.7;">
          <span style="display:flex;align-items:center;gap:7px;"><span style="font-size:1.1em;">🧑‍💼</span> Ringkasan Hunian</span><br>
          <span style="display:flex;align-items:center;gap:7px;"><span style="font-size:1.1em;">📊</span> Analisis Periode</span><br>
          <span style="display:flex;align-items:center;gap:7px;"><span style="font-size:1.1em;">💳</span> Data Pembayaran</span><br>
          <span style="display:flex;align-items:center;gap:7px;"><span style="font-size:1.1em;">📈</span> Occupancy Rate per Kamar</span>
        </div>
      </div>
      <div style="display:flex;gap:10px;margin-top:18px;">
        <button type="button" id="batalLaporanHunian" style="flex:1;background:#fff;border:1.5px solid #cfd8dc;color:#888;font-weight:600;padding:10px 0;border-radius:7px;">Batal</button>
        <button type="submit" style="flex:2;background:#22b573;color:#fff;font-weight:600;padding:10px 0;border-radius:7px;border:none;display:flex;align-items:center;justify-content:center;gap:8px;"><span style="font-size:1.2em;">🗎</span> Generate Laporan</button>
      </div>
    </form>
  </div>
</div>

<!-- Modal Export Data Hunian (Statis/Simulasi) -->
<div id="exportDataModal" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.18);align-items:center;justify-content:center;">
  <div id="exportDataPanel" style="background:#fff;border-radius:12px;max-width:500px;width:96vw;padding:0 0 18px 0;box-shadow:0 8px 32px #0002;position:relative;overflow-y:auto;max-height:90vh;">
    <div style="padding:20px 30px 0 30px;display:flex;align-items:center;justify-content:space-between;">
      <div style="font-size:1.18em;font-weight:600;">Export Data Hunian</div>
      <button id="closeExportData" style="background:none;border:none;font-size:1.5em;line-height:1;color:#888;cursor:pointer;">&times;</button>
    </div>
    <div style="height:2px;background:linear-gradient(90deg,#ffe6a0 0,#fff 100%);margin:12px 0 18px 0;"></div>
    <form onsubmit="return false;" style="padding:0 30px;display:flex;flex-direction:column;gap:14px;">
      <div>
        <label style="font-weight:500;">Format Export</label>
        <div style="display:flex;flex-direction:column;gap:8px;margin-top:6px;">
          <label style="display:flex;align-items:center;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="format_export" value="Excel" checked style="accent-color:#3bb273;">
            <span style="font-size:1.3em;">📊</span>
            <div>
              <div style="font-weight:600;">Excel (.xlsx)</div>
              <div style="font-size:0.97em;color:#888;">Untuk analisis data</div>
            </div>
          </label>
          <label style="display:flex;align-items:center;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="format_export" value="CSV" style="accent-color:#3bb273;">
            <span style="font-size:1.3em;">🗎</span>
            <div>
              <div style="font-weight:600;">CSV (.csv)</div>
              <div style="font-size:0.97em;color:#888;">Import ke sistem lain</div>
            </div>
          </label>
          <label style="display:flex;align-items:center;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="format_export" value="PDF" style="accent-color:#3bb273;">
            <span style="font-size:1.3em;">📄</span>
            <div>
              <div style="font-weight:600;">PDF (.pdf)</div>
              <div style="font-size:0.97em;color:#888;">Untuk dokumentasi</div>
            </div>
          </label>
        </div>
      </div>
      <div>
        <label style="font-weight:500;">Range Data</label><br>
        <select style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>Semua Data</option>
          <option>30 Hari Terakhir</option>
          <option>6 Bulan Terakhir</option>
          <option>1 Tahun Terakhir</option>
          <option>Custom Range</option>
        </select>
      </div>
      <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
        <input type="checkbox" checked style="accent-color:#3bb273;">
        Sertakan detail lengkap penghuni
      </label>
      <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
        <input type="checkbox" checked style="accent-color:#3bb273;">
        Sertakan riwayat pembayaran
      </label>
      <div style="background:#f5f8ff;border-radius:8px;padding:14px 18px;margin:8px 0 0 0;">
        <div style="font-weight:600;color:#3b7be6;margin-bottom:6px;">Data yang akan diekspor</div>
        <div style="font-size:0.98em;line-height:1.7;">
          Total Records: <b>18</b><br>
          Format: <span style="color:#3bb273;font-weight:600;">EXCEL</span><br>
          Estimated Size: <b>~2.5 MB</b><br>
          <div style="margin-top:8px;font-size:0.97em;color:#444;">Kolom yang disertakan: <span style="color:#3b7be6;">Nomor Kamar, Nama Penghuni, Kontak, Status, Tanggal Masuk, Kontrak Berakhir, Harga Sewa, Detail Identitas, Riwayat Pembayaran</span></div>
        </div>
      </div>
      <div style="display:flex;gap:10px;margin-top:18px;">
        <button type="button" id="batalExportData" style="flex:1;background:#fff;border:1.5px solid #cfd8dc;color:#888;font-weight:600;padding:10px 0;border-radius:7px;">Batal</button>
        <button type="submit" style="flex:2;background:#5a5ae6;color:#fff;font-weight:600;padding:10px 0;border-radius:7px;border:none;display:flex;align-items:center;justify-content:center;gap:8px;"><span style="font-size:1.2em;">⬇️</span> Download Export</button>
      </div>
    </form>
  </div>
</div>
<script>
// Modal logic
const assignKamarBtn = document.getElementById('assignKamarBtn');
const assignKamarModal = document.getElementById('assignKamarModal');
const closeAssignKamar = document.getElementById('closeAssignKamar');
const batalAssignKamar = document.getElementById('batalAssignKamar');

assignKamarBtn.onclick = () => assignKamarModal.style.display = 'flex';
closeAssignKamar.onclick = batalAssignKamar.onclick = () => assignKamarModal.style.display = 'none';
assignKamarModal.onclick = e => { if (e.target === assignKamarModal) assignKamarModal.style.display = 'none'; };

// Simulasi interaksi form
const penghuniSelect = document.getElementById('penghuniSelect');
const kamarSelect = document.getElementById('kamarSelect');
const tglMasukInput = document.getElementById('tglMasukInput');
const durasiSelect = document.getElementById('durasiSelect');
const hargaSewaInput = document.getElementById('hargaSewaInput');

const previewPenghuni = document.getElementById('previewPenghuni');
const previewKamar = document.getElementById('previewKamar');
const previewTglMasuk = document.getElementById('previewTglMasuk');
const previewDurasi = document.getElementById('previewDurasi');

penghuniSelect.onchange = () => previewPenghuni.textContent = penghuniSelect.value !== '-- Pilih Penghuni --' ? penghuniSelect.value : '-';
kamarSelect.onchange = () => {
  previewKamar.textContent = kamarSelect.value !== '-- Pilih Kamar --' ? kamarSelect.value : '-';
  // Isi harga otomatis
  const harga = kamarSelect.selectedOptions[0].getAttribute('data-harga');
  hargaSewaInput.value = harga ? parseInt(harga).toLocaleString('id-ID') : '0';
};
tglMasukInput.oninput = () => previewTglMasuk.textContent = tglMasukInput.value ? tglMasukInput.value : '-';
durasiSelect.onchange = () => previewDurasi.textContent = durasiSelect.value !== '-- Pilih Durasi --' ? durasiSelect.value : '-';

// Modal Laporan Hunian logic
const laporanHunianBtn = document.getElementById('laporanHunianBtn');
const laporanHunianModal = document.getElementById('laporanHunianModal');
const closeLaporanHunian = document.getElementById('closeLaporanHunian');
const batalLaporanHunian = document.getElementById('batalLaporanHunian');

laporanHunianBtn.onclick = () => laporanHunianModal.style.display = 'flex';
closeLaporanHunian.onclick = batalLaporanHunian.onclick = () => laporanHunianModal.style.display = 'none';
laporanHunianModal.onclick = e => { if (e.target === laporanHunianModal) laporanHunianModal.style.display = 'none'; };

// Modal Export Data logic
const exportDataBtn = document.getElementById('exportDataBtn');
const exportDataModal = document.getElementById('exportDataModal');
const closeExportData = document.getElementById('closeExportData');
const batalExportData = document.getElementById('batalExportData');

exportDataBtn.onclick = () => exportDataModal.style.display = 'flex';
closeExportData.onclick = batalExportData.onclick = () => exportDataModal.style.display = 'none';
exportDataModal.onclick = e => { if (e.target === exportDataModal) exportDataModal.style.display = 'none'; };

// Filter hunian logic
const filterHunianBtns = document.querySelectorAll('.filter-hunian-btn');
const hunianCards = document.querySelectorAll('#hunianCardContainer > div');
filterHunianBtns.forEach(btn => {
  btn.onclick = function() {
    filterHunianBtns.forEach(b => b.style.background = '#f5f8ff');
    filterHunianBtns.forEach(b => b.style.color = b.dataset.status === 'pending' ? '#ffb347' : b.dataset.status === 'keluar' ? '#e65a5a' : b.dataset.status === 'aktif' ? '#3b7be6' : '#3b7be6');
    if (btn.dataset.status === 'all') {
      btn.style.background = '#3b7be6'; btn.style.color = '#fff';
      hunianCards.forEach(card => card.style.display = '');
    } else if (btn.dataset.status === 'aktif') {
      btn.style.background = '#3b7be6'; btn.style.color = '#fff';
      hunianCards.forEach(card => card.innerHTML.toUpperCase().includes('AKTIF') ? card.style.display = '' : card.style.display = 'none');
    } else if (btn.dataset.status === 'pending') {
      btn.style.background = '#ffb347'; btn.style.color = '#fff';
      hunianCards.forEach(card => card.innerHTML.toUpperCase().includes('PENDING') ? card.style.display = '' : card.style.display = 'none');
    } else if (btn.dataset.status === 'keluar') {
      btn.style.background = '#e65a5a'; btn.style.color = '#fff';
      hunianCards.forEach(card => card.innerHTML.toUpperCase().includes('AKAN KELUAR') ? card.style.display = '' : card.style.display = 'none');
    }
  }
});
// Set default active
filterHunianBtns[0].click();
</script> 