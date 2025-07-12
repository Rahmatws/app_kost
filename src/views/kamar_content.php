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
    <a href="#" id="btnTambahKamar" style="background:#7b5ae6;color:#fff;padding:10px 22px;border-radius:8px;font-weight:600;text-decoration:none;box-shadow:0 2px 8px #e6b87a22;">+ Tambah Kamar</a>
    <button id="btnExportKamar" style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Export Data</button>
    <button id="btnPrintLaporanKamar" style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Print Laporan</button>
    <div style="flex:1;"></div>
    <button style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">🗒️ Tabel</button>
    <button style="background:#e6b87a;color:#fff;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">🟦 Grid</button>
</div>
<div style="display:flex;gap:12px;margin-bottom:18px;">
    <select id="filterStatusKamar" style="padding:8px 12px;border-radius:6px;border:1.5px solid #e6b87a;">
        <option value="all">Semua Status</option>
        <option value="kosong">Kosong</option>
        <option value="terisi">Terisi</option>
        <option value="maintenance">Maintenance</option>
    </select>
    <select id="filterTipeKamar" style="padding:8px 12px;border-radius:6px;border:1.5px solid #e6b87a;">
        <option value="all">Semua Tipe</option>
        <option value="standar">Standar</option>
        <option value="vip">VIP</option>
        <option value="deluxe">Deluxe</option>
    </select>
    <select id="filterHargaKamar" style="padding:8px 12px;border-radius:6px;border:1.5px solid #e6b87a;">
        <option value="all">Semua Harga</option>
        <option value="500-750">500K - 750K</option>
        <option value="750-1000">750K - 1000K</option>
        <option value="1000+">1000K+</option>
    </select>
</div>
<div id="kamarCardContainer" style="display:flex;flex-wrap:wrap;gap:24px;">
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
    <!-- Tambahan kartu dummy -->
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:260px;max-width:270px;flex:1 1 260px;display:flex;flex-direction:column;gap:8px;border:2px solid #3bb273;">
        <div style="font-size:1.2em;font-weight:700;">🏡 Kamar 104</div>
        <div style="color:#888;font-size:0.98em;">STANDAR ROOM</div>
        <div style="color:#3b7be6;font-weight:600;font-size:1.1em;">Rp 700,000/bulan</div>
        <div style="margin:6px 0;">
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">Kipas Angin</span>
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">Kasur</span>
        </div>
        <div style="color:#3bb273;font-weight:600;background:#eafbe6;padding:4px 14px;border-radius:8px;display:inline-block;">TERSEDIA</div>
        <div style="color:#888;font-size:0.95em;">Kamar kosong, siap huni</div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#f5f8ff;color:#3b7be6;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#ffb347;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Edit</button>
            <button style="background:#e65a5a;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Hapus</button>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:260px;max-width:270px;flex:1 1 260px;display:flex;flex-direction:column;gap:8px;border:2px solid #e65a5a;">
        <div style="font-size:1.2em;font-weight:700;">🏡 Kamar 105</div>
        <div style="color:#888;font-size:0.98em;">DELUXE ROOM</div>
        <div style="color:#3b7be6;font-weight:600;font-size:1.1em;">Rp 950,000/bulan</div>
        <div style="margin:6px 0;">
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">AC</span>
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">WiFi</span>
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">Kamar Mandi Dalam</span>
        </div>
        <div style="color:#e65a5a;font-weight:600;background:#ffeaea;padding:4px 14px;border-radius:8px;display:inline-block;">TERISI</div>
        <div style="color:#888;font-size:0.95em;">Ditempati: Maya Sari</div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#f5f8ff;color:#3b7be6;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#ffb347;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Edit</button>
            <button style="background:#e65a5a;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Hapus</button>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:260px;max-width:270px;flex:1 1 260px;display:flex;flex-direction:column;gap:8px;border:2px solid #ffb347;">
        <div style="font-size:1.2em;font-weight:700;">🏡 Kamar 106</div>
        <div style="color:#888;font-size:0.98em;">VIP ROOM</div>
        <div style="color:#3b7be6;font-weight:600;font-size:1.1em;">Rp 1,300,000/bulan</div>
        <div style="margin:6px 0;">
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">AC</span>
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">TV</span>
            <span style="background:#f5f8ff;padding:3px 10px;border-radius:6px;margin-right:4px;font-size:0.95em;">Kulkas Mini</span>
        </div>
        <div style="color:#ffb347;font-weight:600;background:#fff5e0;padding:4px 14px;border-radius:8px;display:inline-block;">MAINTENANCE</div>
        <div style="color:#888;font-size:0.95em;">Perlu pengecekan AC</div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#f5f8ff;color:#3b7be6;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#ffb347;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Edit</button>
            <button style="background:#e65a5a;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Hapus</button>
        </div>
    </div>
</div>
<!-- MODAL TAMBAH KAMAR -->
<div id="modalTambahKamar" style="display:none;position:fixed;z-index:1200;left:0;top:0;width:100vw;height:100vh;background:rgba(44,36,24,0.18);align-items:center;justify-content:center;">
  <div style="background:#fff8f0;border-radius:18px;box-shadow:0 4px 32px #e6b87a44;padding:0;min-width:340px;max-width:800px;width:97vw;position:relative;overflow-y:auto;max-height:97vh;display:flex;flex-direction:column;align-items:center;">
    <div style="width:100%;display:flex;align-items:center;justify-content:space-between;padding:24px 40px 0 40px;box-sizing:border-box;">
      <div style="font-size:1.35em;font-weight:700;color:#7b5ae6;">Registrasi Kamar Kost Baru</div>
      <button id="closeModalTambahKamar" style="background:none;border:none;font-size:1.5em;color:#b89c7a;cursor:pointer;">&times;</button>
    </div>
    <form method="post" action="#" enctype="multipart/form-data" style="background:#fff;width:96%;max-width:740px;margin:24px auto 24px auto;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:32px 32px 18px 32px;display:flex;flex-direction:column;gap:22px;box-sizing:border-box;">
      <!-- Foto Kamar -->
      <div style="margin-bottom:8px;">
        <div style="font-weight:600;color:#7b5ae6;margin-bottom:10px;">📷 Foto Kamar</div>
        <div style="display:flex;gap:18px;justify-content:flex-start;align-items:center;">
          <div style="width:80px;height:80px;background:#f7ecd9;border-radius:10px;display:flex;align-items:center;justify-content:center;color:#b89c7a;font-size:2em;">📷</div>
          <div style="width:80px;height:80px;background:#f7ecd9;border-radius:10px;display:flex;align-items:center;justify-content:center;color:#b89c7a;font-size:2em;">📷</div>
          <div style="width:80px;height:80px;background:#f7ecd9;border-radius:10px;display:flex;align-items:center;justify-content:center;color:#b89c7a;font-size:2em;">📷</div>
          <div style="width:80px;height:80px;background:#f7ecd9;border-radius:10px;display:flex;align-items:center;justify-content:center;color:#b89c7a;font-size:2em;">📷</div>
        </div>
        <div style="text-align:center;color:#7b5ae6;font-size:0.98em;margin-top:8px;">Upload foto kamar (maksimal 4 foto)</div>
      </div>
      <!-- Informasi Dasar Kamar -->
      <div style="margin-bottom:8px;">
        <div style="font-weight:600;color:#7b5ae6;margin-bottom:10px;">🏠 Informasi Dasar Kamar</div>
        <div style="display:flex;flex-wrap:wrap;gap:16px 24px;">
          <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
            <label>Nomor Kamar</label>
            <input name="nomor_kamar" placeholder="Contoh: 101, A-1, dll" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
          <div style="flex:1 1 120px;min-width:120px;display:flex;flex-direction:column;gap:6px;">
            <label>Lantai</label>
            <select name="lantai" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
              <option>Pilih lantai</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
          <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
            <label>Tipe Kamar</label>
            <select name="tipe_kamar" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
              <option>Pilih tipe kamar</option>
              <option>Standar</option>
              <option>VIP</option>
              <option>Deluxe</option>
            </select>
          </div>
          <div style="flex:1 1 120px;min-width:120px;display:flex;flex-direction:column;gap:6px;">
            <label>Kapasitas</label>
            <select name="kapasitas" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
              <option>Pilih kapasitas</option>
              <option>1 Orang</option>
              <option>2 Orang</option>
              <option>3 Orang</option>
              <option>4 Orang</option>
            </select>
          </div>
          <div style="flex:1 1 120px;min-width:120px;display:flex;flex-direction:column;gap:6px;">
            <label>Luas Kamar (m²)</label>
            <input name="luas_kamar" placeholder="Contoh: 12" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
          <div style="flex:1 1 120px;min-width:120px;display:flex;flex-direction:column;gap:6px;">
            <label>Status Kamar</label>
            <select name="status_kamar" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
              <option>Pilih status</option>
              <option>Kosong</option>
              <option>Terisi</option>
              <option>Maintenance</option>
            </select>
          </div>
        </div>
      </div>
      <!-- Harga dan Pembayaran -->
      <div style="margin-bottom:8px;">
        <div style="font-weight:600;color:#7b5ae6;margin-bottom:10px;">💰 Harga dan Pembayaran</div>
        <div style="display:flex;flex-wrap:wrap;gap:16px 24px;">
          <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
            <label>Harga Bulanan</label>
            <input name="harga_bulanan" placeholder="Rp 850000" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
          <div style="flex:1 1 120px;min-width:120px;display:flex;flex-direction:column;gap:6px;">
            <label>Deposit</label>
            <input name="deposit" placeholder="Rp 500000" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
          <div style="flex:1 1 120px;min-width:120px;display:flex;flex-direction:column;gap:6px;">
            <label>Biaya Admin</label>
            <input name="biaya_admin" placeholder="Rp 100000" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
          <div style="flex:1 1 120px;min-width:120px;display:flex;flex-direction:column;gap:6px;">
            <label>Termasuk Listrik</label>
            <select name="termasuk_listrik" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
              <option>Tidak Termasuk</option>
              <option>Termasuk</option>
            </select>
          </div>
        </div>
      </div>
      <!-- Fasilitas Kamar -->
      <div style="margin-bottom:8px;">
        <div style="font-weight:600;color:#7b5ae6;margin-bottom:10px;">⚡ Fasilitas Kamar</div>
        <div style="background:#f7ecd9;border-radius:10px;padding:14px 18px;display:grid;grid-template-columns:repeat(4,1fr);gap:8px 12px;">
          <label><input type="checkbox"> AC</label>
          <label><input type="checkbox"> Kamar Mandi Dalam</label>
          <label><input type="checkbox"> Meja Belajar</label>
          <label><input type="checkbox"> Kulkas Mini</label>
          <label><input type="checkbox"> Kipas Angin</label>
          <label><input type="checkbox"> Lemari</label>
          <label><input type="checkbox"> Kursi</label>
          <label><input type="checkbox"> Balkon</label>
          <label><input type="checkbox"> WiFi</label>
          <label><input type="checkbox"> Kasur</label>
          <label><input type="checkbox"> TV</label>
          <label><input type="checkbox"> Kitchen Set</label>
        </div>
      </div>
      <!-- Informasi Tambahan -->
      <div style="margin-bottom:8px;">
        <div style="font-weight:600;color:#7b5ae6;margin-bottom:10px;">📝 Informasi Tambahan</div>
        <div style="display:flex;flex-wrap:wrap;gap:16px 24px;">
          <div style="flex:2 1 320px;min-width:220px;display:flex;flex-direction:column;gap:6px;">
            <label>Deskripsi Kamar</label>
            <textarea name="deskripsi" rows="2" placeholder="Deskripsi detail mengenai kamar, lokasi, akses, dan informasi penting lainnya..." style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;"></textarea>
          </div>
          <div style="flex:1 1 120px;min-width:120px;display:flex;flex-direction:column;gap:6px;">
            <label>Posisi Kamar</label>
            <select name="posisi_kamar" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
              <option>Pilih posisi</option>
              <option>Selatan</option>
              <option>Utara</option>
              <option>Barat</option>
              <option>Timur</option>
            </select>
          </div>
          <div style="flex:1 1 120px;min-width:120px;display:flex;flex-direction:column;gap:6px;">
            <label>Akses Kendaraan</label>
            <select name="akses_kendaraan" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
              <option>Pilih akses</option>
              <option>Motor</option>
              <option>Mobil</option>
              <option>Motor & Mobil</option>
            </select>
          </div>
        </div>
      </div>
      <!-- Preview Informasi Kamar -->
      <div style="background:#f7f7fa;border-radius:10px;padding:14px 14px 8px 14px;margin-bottom:18px;">
        <div style="font-weight:600;color:#7b5ae6;font-size:1.1em;margin-bottom:8px;">👁️ Preview Informasi Kamar</div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:8px 18px;">
          <div style="background:#fff8f0;border-radius:8px;padding:10px 8px;text-align:center;">Nomor Kamar<br><span style="color:#888;">-</span></div>
          <div style="background:#fff8f0;border-radius:8px;padding:10px 8px;text-align:center;">Tipe<br><span style="color:#888;">-</span></div>
          <div style="background:#fff8f0;border-radius:8px;padding:10px 8px;text-align:center;">Harga/Bulan<br><span style="color:#888;">-</span></div>
          <div style="background:#fff8f0;border-radius:8px;padding:10px 8px;text-align:center;">Kepemilikan<br><span style="color:#888;">-</span></div>
        </div>
      </div>
      <div style="width:100%;display:flex;justify-content:flex-end;margin-top:8px;">
        <div style="display:inline-flex;gap:10px;">
          <button type="button" id="batalTambahKamar" style="display:flex;align-items:center;gap:4px;padding:5px 16px;font-weight:500;font-size:1em;border:1.2px solid #f2d6d6;background:#fff;color:#e65a5a;border-radius:6px;box-shadow:none;transition:all .15s;min-width:0;height:auto;">
            <span style="font-size:1em;">❌</span> Batal
          </button>
          <button type="submit" style="display:flex;align-items:center;gap:4px;padding:5px 18px;font-weight:600;font-size:1em;border:none;background:linear-gradient(90deg,#7b5ae6,#6a7be6);color:#fff;border-radius:6px;box-shadow:none;transition:all .15s;min-width:0;height:auto;">
            <span style="font-size:1em;">💾</span> Simpan Kamar
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- MODAL EXPORT DATA KAMAR -->
<div id="modalExportKamar" style="display:none;position:fixed;z-index:1200;left:0;top:0;width:100vw;height:100vh;background:rgba(44,36,24,0.18);align-items:center;justify-content:center;">
  <div style="background:#fcf6ec;border-radius:18px;box-shadow:0 4px 32px #e6b87a44;padding:0;min-width:340px;max-width:760px;width:97vw;position:relative;overflow-y:auto;max-height:97vh;display:flex;flex-direction:column;align-items:center;">
    <div style="width:100%;display:flex;align-items:center;justify-content:space-between;padding:24px 40px 0 40px;box-sizing:border-box;">
      <div style="display:flex;align-items:center;gap:12px;">
        <span style="font-size:1.7em;">📊</span>
        <div>
          <div style="font-size:1.25em;font-weight:700;color:#7b5ae6;">Export Data Kamar</div>
          <div style="font-size:1em;color:#888;">Export data kamar sesuai dengan format dan filter yang diinginkan</div>
        </div>
      </div>
      <button id="closeModalExportKamar" style="background:none;border:none;font-size:1.5em;color:#b89c7a;cursor:pointer;">&times;</button>
    </div>
    <div style="width:100%;padding:0 40px 0 40px;box-sizing:border-box;margin-top:18px;">
      <!-- Pilih Format File -->
      <div style="font-weight:600;font-size:1.1em;margin-bottom:8px;">Pilih Format File</div>
      <div style="display:flex;gap:18px;margin-bottom:18px;">
        <div style="flex:1;min-width:120px;display:flex;flex-direction:column;align-items:center;gap:6px;border:2px solid #7b5ae6;background:#f5f8ff;border-radius:12px;padding:16px;cursor:pointer;">
          <span style="font-size:2em;">📊</span>
          <div style="font-weight:600;">Excel (XLSX)</div>
          <div style="font-size:0.98em;color:#888;text-align:center;">Format spreadsheet dengan formatting</div>
        </div>
        <div style="flex:1;min-width:120px;display:flex;flex-direction:column;align-items:center;gap:6px;border:2px solid #e6e6e6;background:#fff;border-radius:12px;padding:16px;cursor:pointer;">
          <span style="font-size:2em;">📝</span>
          <div style="font-weight:600;">CSV</div>
          <div style="font-size:0.98em;color:#888;text-align:center;">Format teks terpisah koma</div>
        </div>
        <div style="flex:1;min-width:120px;display:flex;flex-direction:column;align-items:center;gap:6px;border:2px solid #e6e6e6;background:#fff;border-radius:12px;padding:16px;cursor:pointer;">
          <span style="font-size:2em;">📄</span>
          <div style="font-weight:600;">PDF</div>
          <div style="font-size:0.98em;color:#888;text-align:center;">Format dokumen untuk cetak</div>
        </div>
      </div>
      <!-- Filter Data Kamar -->
      <div style="font-weight:600;font-size:1.1em;margin-bottom:8px;">🔍 Filter Data Kamar</div>
      <div style="display:flex;flex-wrap:wrap;gap:18px 24px;margin-bottom:18px;">
        <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
          <label>Status:</label>
          <select style="padding:8px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
            <option>Semua Status</option>
            <option>Kosong</option>
            <option>Terisi</option>
            <option>Maintenance</option>
            <option>Renovasi</option>
          </select>
        </div>
        <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
          <label>Tipe Kamar:</label>
          <select style="padding:8px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
            <option>Semua Tipe</option>
            <option>Standar</option>
            <option>Deluxe</option>
            <option>VIP</option>
            <option>Suite</option>
          </select>
        </div>
        <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
          <label>Lantai:</label>
          <select style="padding:8px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
            <option>Semua Lantai</option>
            <option>Lantai 1</option>
            <option>Lantai 2</option>
            <option>Lantai 3</option>
            <option>Lantai 4</option>
            <option>Lantai 5</option>
          </select>
        </div>
        <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
          <label>Kapasitas:</label>
          <select style="padding:8px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
            <option>Semua Kapasitas</option>
            <option>1 Orang</option>
            <option>2 Orang</option>
            <option>3 Orang</option>
            <option>4 Orang</option>
          </select>
        </div>
        <div style="flex:2 1 320px;min-width:220px;display:flex;flex-direction:column;gap:6px;">
          <label>Range Harga:</label>
          <div style="display:flex;gap:8px;align-items:center;">
            <input type="text" placeholder="Min" style="padding:8px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;width:90px;">
            <span style="color:#888;">s/d</span>
            <input type="text" placeholder="Max" style="padding:8px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;width:90px;">
          </div>
        </div>
        <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
          <label>Fasilitas:</label>
          <select style="padding:8px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
            <option>Semua Fasilitas</option>
            <option>Ada AC</option>
            <option>Ada WiFi</option>
            <option>KM Dalam</option>
            <option>Ada Balkon</option>
            <option>Ada Kitchen</option>
          </select>
        </div>
        <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
          <label>Urutkan:</label>
          <select style="padding:8px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
            <option>Nomor Kamar</option>
            <option>Harga (Termurah)</option>
            <option>Harga (Termahal)</option>
            <option>Tipe Kamar</option>
            <option>Status</option>
          </select>
        </div>
      </div>
      <!-- Pilih Kolom Data -->
      <div style="font-weight:600;font-size:1.1em;margin-bottom:8px;"><input type="checkbox" checked style="accent-color:#7b5ae6;margin-right:8px;">Pilih Kolom Data</div>
      <div style="font-size:0.98em;margin-bottom:8px;">
        <a href="#" style="color:#7b5ae6;text-decoration:underline;margin-right:12px;">Pilih Semua</a>
        <a href="#" style="color:#7b5ae6;text-decoration:underline;margin-right:12px;">Batal Semua</a>
        <a href="#" style="color:#7b5ae6;text-decoration:underline;">Kolom Penting</a>
      </div>
      <div style="background:#f7f7fa;border-radius:10px;padding:14px 14px 8px 14px;margin-bottom:18px;max-height:120px;overflow-y:auto;display:grid;grid-template-columns:repeat(2,1fr);gap:8px 18px;">
        <label><input type="checkbox" checked style="accent-color:#7b5ae6;margin-right:7px;">Nomor Kamar</label>
        <label><input type="checkbox" checked style="accent-color:#7b5ae6;margin-right:7px;">Tipe Kamar</label>
        <label><input type="checkbox" style="accent-color:#7b5ae6;margin-right:7px;">Lantai</label>
        <label><input type="checkbox" checked style="accent-color:#7b5ae6;margin-right:7px;">Kapasitas</label>
        <label><input type="checkbox" style="accent-color:#7b5ae6;margin-right:7px;">Luas Kamar (m²)</label>
        <label><input type="checkbox" style="accent-color:#7b5ae6;margin-right:7px;">Harga Bulanan</label>
        <label><input type="checkbox" style="accent-color:#7b5ae6;margin-right:7px;">Deposit</label>
        <label><input type="checkbox" style="accent-color:#7b5ae6;margin-right:7px;">Biaya Admin</label>
        <label><input type="checkbox" checked style="accent-color:#7b5ae6;margin-right:7px;">Fasilitas</label>
        <label><input type="checkbox" checked style="accent-color:#7b5ae6;margin-right:7px;">Status</label>
        <label><input type="checkbox" style="accent-color:#7b5ae6;margin-right:7px;">Posisi</label>
        <label><input type="checkbox" style="accent-color:#7b5ae6;margin-right:7px;">Include Listrik</label>
      </div>
      <!-- Ringkasan Export -->
      <div style="background:#f7f7fa;border-radius:10px;padding:18px 18px 10px 18px;margin-bottom:18px;display:flex;align-items:center;gap:32px;">
        <div style="font-weight:600;color:#7b5ae6;font-size:1.1em;">📄 Ringkasan Export</div>
        <div style="flex:1;display:flex;gap:24px;align-items:center;justify-content:flex-end;">
          <div style="text-align:center;">
            <div style="font-size:1.3em;font-weight:700;">20</div>
            <div style="font-size:0.98em;color:#888;">TOTAL KAMAR</div>
          </div>
          <div style="text-align:center;">
            <div style="font-size:1.3em;font-weight:700;">6</div>
            <div style="font-size:0.98em;color:#888;">KOLOM DIPILIH</div>
          </div>
          <div style="text-align:center;">
            <div style="font-size:1.3em;font-weight:700;">XLSX</div>
            <div style="font-size:0.98em;color:#888;">FORMAT FILE</div>
          </div>
          <div style="text-align:center;">
            <div style="font-size:1.3em;font-weight:700;">850K</div>
            <div style="font-size:0.98em;color:#888;">RATA-RATA HARGA</div>
          </div>
        </div>
      </div>
    </div>
    <div style="width:100%;display:flex;justify-content:flex-end;padding:24px 40px 24px 40px;box-sizing:border-box;">
      <div style="display:inline-flex;gap:10px;">
        <button type="button" id="batalExportKamar" style="display:flex;align-items:center;gap:4px;padding:5px 16px;font-weight:500;font-size:1em;border:1.2px solid #f2d6d6;background:#fff;color:#e65a5a;border-radius:6px;box-shadow:none;transition:all .15s;min-width:0;height:auto;">
          <span style="font-size:1em;">❌</span> Batal
        </button>
        <button type="button" style="display:flex;align-items:center;gap:4px;padding:5px 18px;font-weight:600;font-size:1em;border:none;background:linear-gradient(90deg,#7b5ae6,#6a7be6);color:#fff;border-radius:6px;box-shadow:none;transition:all .15s;min-width:0;height:auto;">
          <span style="font-size:1em;">📤</span> Mulai Export
        </button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL PRINT LAPORAN KAMAR -->
<div id="modalPrintLaporanKamar" style="display:none;position:fixed;z-index:1300;left:0;top:0;width:100vw;height:100vh;background:rgba(44,36,24,0.18);align-items:center;justify-content:center;">
  <div style="background:#fff;border-radius:18px;box-shadow:0 4px 32px #e6b87a44;padding:0;min-width:340px;max-width:1100px;width:98vw;position:relative;overflow-y:auto;max-height:97vh;display:flex;flex-direction:row;align-items:stretch;">
    <!-- Sidebar Kiri -->
    <div style="width:270px;background:#fcf6ec;border-radius:18px 0 0 18px;padding:32px 18px 24px 24px;display:flex;flex-direction:column;gap:18px;box-shadow:2px 0 12px #e6b87a11;">
      <div style="font-size:1.2em;font-weight:700;color:#7b5ae6;display:flex;align-items:center;gap:8px;">📄 Print Laporan</div>
      <div style="font-size:0.98em;color:#888;margin-bottom:8px;">Pilih jenis laporan dan atur opsi cetak</div>
      <div style="font-weight:600;color:#7b5ae6;margin-bottom:6px;">Jenis Laporan</div>
      <div style="display:flex;flex-direction:column;gap:7px;margin-bottom:18px;">
        <button style="background:#f5f8ff;color:#7b5ae6;font-weight:600;padding:8px 12px;border-radius:8px;border:2px solid #7b5ae6;cursor:pointer;text-align:left;">Ringkasan Kamar<br><span style='font-weight:400;font-size:0.97em;color:#888;'>Statistik umum dan status kamar</span></button>
        <button style="background:#fff;color:#7b5ae6;font-weight:600;padding:8px 12px;border-radius:8px;border:2px solid #e6e6e6;cursor:pointer;text-align:left;">Detail Kamar<br><span style='font-weight:400;font-size:0.97em;color:#888;'>Data lengkap semua kamar</span></button>
        <button style="background:#fff;color:#7b5ae6;font-weight:600;padding:8px 12px;border-radius:8px;border:2px solid #e6e6e6;cursor:pointer;text-align:left;">Tingkat Hunian<br><span style='font-weight:400;font-size:0.97em;color:#888;'>Analisis hunian dan revenue</span></button>
        <button style="background:#fff;color:#7b5ae6;font-weight:600;padding:8px 12px;border-radius:8px;border:2px solid #e6e6e6;cursor:pointer;text-align:left;">Status Maintenance<br><span style='font-weight:400;font-size:0.97em;color:#888;'>Kamar yang perlu perbaikan</span></button>
      </div>
      <div style="font-weight:600;color:#7b5ae6;margin-bottom:6px;">Filter Data</div>
      <div style="display:flex;flex-direction:column;gap:10px;">
        <div>
          <label style="font-size:0.98em;">Periode Laporan:</label>
          <select style="width:100%;padding:7px 10px;border-radius:6px;border:1.5px solid #e6b87a;background:#fff;">
            <option>Bulan Ini</option>
            <option>Bulan Lalu</option>
            <option>3 Bulan Terakhir</option>
            <option>6 Bulan Terakhir</option>
            <option>1 Tahun Terakhir</option>
            <option>Custom</option>
          </select>
        </div>
        <div>
          <label style="font-size:0.98em;">Status Kamar:</label>
          <select style="width:100%;padding:7px 10px;border-radius:6px;border:1.5px solid #e6b87a;background:#fff;">
            <option>Semua Status</option>
            <option>Kosong</option>
            <option>Terisi</option>
            <option>Maintenance</option>
            <option>Renovasi</option>
          </select>
        </div>
        <div>
          <label style="font-size:0.98em;">Tipe Kamar:</label>
          <select style="width:100%;padding:7px 10px;border-radius:6px;border:1.5px solid #e6b87a;background:#fff;">
            <option>Semua Tipe</option>
            <option>Standar</option>
            <option>Deluxe</option>
            <option>VIP</option>
            <option>Suite</option>
          </select>
        </div>
      </div>
      <div style="font-weight:600;color:#7b5ae6;margin:14px 0 6px 0;">Sertakan dalam Laporan</div>
      <div style="display:flex;flex-direction:column;gap:7px;">
        <label><input type="checkbox" checked style="accent-color:#7b5ae6;margin-right:7px;"> Grafik & Chart</label>
        <label><input type="checkbox" checked style="accent-color:#7b5ae6;margin-right:7px;"> Ringkasan Statistik</label>
        <label><input type="checkbox" style="accent-color:#7b5ae6;margin-right:7px;"> Foto Kamar</label>
        <label><input type="checkbox" checked style="accent-color:#7b5ae6;margin-right:7px;"> Detail Fasilitas</label>
      </div>
    </div>
    <!-- Preview Laporan Kanan -->
    <div style="flex:1;background:#fff;border-radius:0 18px 18px 0;padding:32px 32px 24px 32px;overflow-y:auto;max-height:97vh;">
      <div style="font-size:1.2em;font-weight:700;color:#7b5ae6;margin-bottom:8px;">Preview Laporan</div>
      <div style="background:#fff8f0;border-radius:16px;padding:24px 24px 18px 24px;margin-bottom:18px;">
        <div style="text-align:center;font-size:1.1em;font-weight:700;color:#7b5ae6;margin-bottom:2px;">🏠 KosVerse</div>
        <div style="text-align:center;font-size:1.15em;font-weight:700;margin-bottom:2px;">Laporan Ringkasan Kamar</div>
        <div style="text-align:center;font-size:1em;color:#3b7be6;margin-bottom:8px;">Periode: Juli 2025 | Dicetak: 11 Juli 2025</div>
        <div class="preview-summary-boxes" style="display:flex;gap:18px;justify-content:center;margin-bottom:18px;flex-wrap:wrap;">
          <div style="background:#f7ecd9;border-radius:12px;padding:18px 24px;min-width:100px;text-align:center;flex:1 1 180px;max-width:180px;margin-bottom:12px;">
            <div style="font-size:1.3em;font-weight:700;">20</div>
            <div style="color:#8d7b5a;">TOTAL KAMAR</div>
          </div>
          <div style="background:#f7ecd9;border-radius:12px;padding:18px 24px;min-width:100px;text-align:center;flex:1 1 180px;max-width:180px;margin-bottom:12px;">
            <div style="font-size:1.3em;font-weight:700;">15</div>
            <div style="color:#8d7b5a;">KAMAR TERISI</div>
          </div>
          <div style="background:#f7ecd9;border-radius:12px;padding:18px 24px;min-width:100px;text-align:center;flex:1 1 180px;max-width:180px;margin-bottom:12px;">
            <div style="font-size:1.3em;font-weight:700;">5</div>
            <div style="color:#8d7b5a;">KAMAR KOSONG</div>
          </div>
          <div style="background:#f7ecd9;border-radius:12px;padding:18px 24px;min-width:100px;text-align:center;flex:1 1 180px;max-width:180px;margin-bottom:12px;">
            <div style="font-size:1.3em;font-weight:700;">75%</div>
            <div style="color:#8d7b5a;">TINGKAT HUNIAN</div>
          </div>
          <div style="background:#f7ecd9;border-radius:12px;padding:18px 24px;min-width:100px;text-align:center;flex:1 1 180px;max-width:180px;margin-bottom:12px;">
            <div style="font-size:1.3em;font-weight:700;">Rp 850K</div>
            <div style="color:#8d7b5a;">RATA-RATA HARGA</div>
          </div>
          <div style="background:#f7ecd9;border-radius:12px;padding:18px 24px;min-width:100px;text-align:center;flex:1 1 180px;max-width:180px;margin-bottom:12px;">
            <div style="font-size:1.3em;font-weight:700;">Rp 12.75M</div>
            <div style="color:#8d7b5a;">TOTAL REVENUE</div>
          </div>
        </div>
        <style>
        .preview-summary-boxes {flex-wrap:wrap;}
        @media (max-width: 900px) {
          .preview-summary-boxes {flex-direction:column !important;align-items:stretch !important;}
        }
        </style>
        <div style="font-weight:600;color:#7b5ae6;margin-bottom:8px;">📊 Distribusi Status Kamar</div>
        <div style="background:#f7f7fa;border-radius:10px;padding:24px 0;text-align:center;color:#bbb;margin-bottom:18px;">[Grafik Pie Chart Status Kamar akan ditampilkan di sini]</div>
        <div style="font-weight:600;color:#7b5ae6;margin-bottom:8px;">📋 Detail Data Kamar</div>
        <table style="width:100%;border-collapse:collapse;background:#fff8f0;margin-bottom:18px;">
          <tr style="background:#f5f8ff;">
            <th style="padding:10px 8px;">NO</th>
            <th style="padding:10px 8px;">NOMOR KAMAR</th>
            <th style="padding:10px 8px;">TIPE</th>
            <th style="padding:10px 8px;">HARGA/BULAN</th>
            <th style="padding:10px 8px;">STATUS</th>
            <th style="padding:10px 8px;">PENGHUNI</th>
            <th style="padding:10px 8px;">FASILITAS UTAMA</th>
          </tr>
          <tr><td>1</td><td>101</td><td>VIP</td><td>Rp 1,200,000</td><td><span style='color:#3bb273;font-weight:600;'>KOSONG</span></td><td>-</td><td>AC, WiFi, KM Dalam, Balkon</td></tr>
          <tr><td>2</td><td>102</td><td>Standar</td><td>Rp 650,000</td><td><span style='color:#e65a5a;font-weight:600;'>TERISI</span></td><td>Ahmad Rizki</td><td>AC, WiFi, KM Luar</td></tr>
          <tr><td>3</td><td>103</td><td>Deluxe</td><td>Rp 900,000</td><td><span style='color:#ffb347;font-weight:600;'>MAINTENANCE</span></td><td>-</td><td>AC, WiFi, KM Dalam, Kitchen</td></tr>
          <tr><td>4</td><td>104</td><td>VIP</td><td>Rp 1,200,000</td><td><span style='color:#e65a5a;font-weight:600;'>TERISI</span></td><td>Siti Nurhaliza</td><td>AC, WiFi, KM Dalam, Balkon</td></tr>
          <tr><td>5</td><td>105</td><td>Standar</td><td>Rp 600,000</td><td><span style='color:#e65a5a;font-weight:600;'>TERISI</span></td><td>Budi Santoso</td><td>Kipas, WiFi, KM Luar</td></tr>
          <tr><td>6</td><td>106</td><td>Deluxe</td><td>Rp 850,000</td><td><span style='color:#3bb273;font-weight:600;'>KOSONG</span></td><td>-</td><td>AC, WiFi, Lemari, KM Dalam</td></tr>
        </table>
        <div style="font-weight:600;color:#7b5ae6;margin-bottom:8px;">💰 Analisis Revenue Bulanan</div>
        <div style="background:#f7f7fa;border-radius:10px;padding:24px 0;text-align:center;color:#bbb;margin-bottom:18px;">[Grafik Bar Chart Revenue per Bulan akan ditampilkan di sini]</div>
        <div class="preview-summary-boxes-bawah" style="display:flex;gap:18px;justify-content:center;margin-bottom:0;flex-wrap:wrap;">
          <div style="background:#f7ecd9;border-radius:12px;padding:18px 24px;min-width:100px;text-align:center;flex:1 1 180px;max-width:180px;margin-bottom:12px;">
            <div style="font-size:1.1em;font-weight:700;">2</div>
            <div style="color:#8d7b5a;">KAMAR VIP</div>
          </div>
          <div style="background:#f7ecd9;border-radius:12px;padding:18px 24px;min-width:100px;text-align:center;flex:1 1 180px;max-width:180px;margin-bottom:12px;">
            <div style="font-size:1.1em;font-weight:700;">8</div>
            <div style="color:#8d7b5a;">KAMAR DELUXE</div>
          </div>
          <div style="background:#f7ecd9;border-radius:12px;padding:18px 24px;min-width:100px;text-align:center;flex:1 1 180px;max-width:180px;margin-bottom:12px;">
            <div style="font-size:1.1em;font-weight:700;">10</div>
            <div style="color:#8d7b5a;">KAMAR STANDAR</div>
          </div>
          <div style="background:#f7ecd9;border-radius:12px;padding:18px 24px;min-width:100px;text-align:center;flex:1 1 180px;max-width:180px;margin-bottom:12px;">
            <div style="font-size:1.1em;font-weight:700;">18</div>
            <div style="color:#8d7b5a;">DENGAN AC</div>
          </div>
          <div style="background:#f7ecd9;border-radius:12px;padding:18px 24px;min-width:100px;text-align:center;flex:1 1 180px;max-width:180px;margin-bottom:12px;">
            <div style="font-size:1.1em;font-weight:700;">15</div>
            <div style="color:#8d7b5a;">KM DALAM</div>
          </div>
          <div style="background:#f7ecd9;border-radius:12px;padding:18px 24px;min-width:100px;text-align:center;flex:1 1 180px;max-width:180px;margin-bottom:12px;">
            <div style="font-size:1.1em;font-weight:700;">20</div>
            <div style="color:#8d7b5a;">WIFI READY</div>
          </div>
        </div>
        <style>
        .preview-summary-boxes-bawah {flex-wrap:wrap;}
        @media (max-width: 900px) {
          .preview-summary-boxes-bawah {flex-direction:column !important;align-items:stretch !important;}
        }
        </style>
        <div style="text-align:center;color:#bbb;font-size:0.98em;margin-top:18px;">Laporan ini dibuat secara otomatis oleh sistem KosVerse – Manajemen Kost Digital</div>
      </div>
    </div>
    <button id="closeModalPrintLaporanKamar" style="position:absolute;top:18px;right:18px;background:none;border:none;font-size:1.5em;color:#b89c7a;cursor:pointer;">&times;</button>
  </div>
</div>
<script>
// Modal Tambah Kamar logic
const btnTambahKamar = document.getElementById('btnTambahKamar');
const modalTambahKamar = document.getElementById('modalTambahKamar');
const closeModalTambahKamar = document.getElementById('closeModalTambahKamar');
const batalTambahKamar = document.getElementById('batalTambahKamar');
if(btnTambahKamar) btnTambahKamar.onclick = function(e){e.preventDefault();modalTambahKamar.style.display='flex';};
if(closeModalTambahKamar) closeModalTambahKamar.onclick = function(){modalTambahKamar.style.display='none';};
if(batalTambahKamar) batalTambahKamar.onclick = function(){modalTambahKamar.style.display='none';};
window.addEventListener('click', function(e) {
  if(e.target === modalTambahKamar) modalTambahKamar.style.display = 'none';
});

// Modal Export Data Kamar logic
const btnExportKamar = document.getElementById('btnExportKamar');
const modalExportKamar = document.getElementById('modalExportKamar');
const closeModalExportKamar = document.getElementById('closeModalExportKamar');
const batalExportKamar = document.getElementById('batalExportKamar');
if(btnExportKamar) btnExportKamar.onclick = function(e){e.preventDefault();modalExportKamar.style.display='flex';};
if(closeModalExportKamar) closeModalExportKamar.onclick = function(){modalExportKamar.style.display='none';};
if(batalExportKamar) batalExportKamar.onclick = function(){modalExportKamar.style.display='none';};
window.addEventListener('click', function(e) {
  if(e.target === modalExportKamar) modalExportKamar.style.display = 'none';
});

// Modal Print Laporan Kamar logic
const btnPrintLaporanKamar = document.getElementById('btnPrintLaporanKamar');
const modalPrintLaporanKamar = document.getElementById('modalPrintLaporanKamar');
const closeModalPrintLaporanKamar = document.getElementById('closeModalPrintLaporanKamar');
if(btnPrintLaporanKamar) btnPrintLaporanKamar.onclick = function(e){e.preventDefault();modalPrintLaporanKamar.style.display='flex';};
if(closeModalPrintLaporanKamar) closeModalPrintLaporanKamar.onclick = function(){modalPrintLaporanKamar.style.display='none';};
window.addEventListener('click', function(e) {
  if(e.target === modalPrintLaporanKamar) modalPrintLaporanKamar.style.display = 'none';
});

// Filter Kamar logic
const filterStatus = document.getElementById('filterStatusKamar');
const filterTipe = document.getElementById('filterTipeKamar');
const filterHarga = document.getElementById('filterHargaKamar');
const kamarCards = document.querySelectorAll('#kamarCardContainer > div');

function filterKamar() {
    const status = filterStatus.value;
    const tipe = filterTipe.value;
    const harga = filterHarga.value;
    kamarCards.forEach(card => {
        let show = true;
        const text = card.textContent.toLowerCase();
        // Status
        if (status !== 'all') {
            if (status === 'kosong' && !text.includes('tersedia')) show = false;
            if (status === 'terisi' && !text.includes('terisi')) show = false;
            if (status === 'maintenance' && !text.includes('maintenance')) show = false;
        }
        // Tipe
        if (tipe !== 'all') {
            if (tipe === 'standar' && !text.includes('standar')) show = false;
            if (tipe === 'vip' && !text.includes('vip')) show = false;
            if (tipe === 'deluxe' && !text.includes('deluxe')) show = false;
        }
        // Harga
        if (harga !== 'all') {
            let price = 0;
            const match = card.innerHTML.match(/Rp ([0-9.,]+)/);
            if (match) price = parseInt(match[1].replace(/\./g, '').replace(/,/g, ''));
            if (harga === '500-750' && !(price >= 500000 && price <= 750000)) show = false;
            if (harga === '750-1000' && !(price > 750000 && price <= 1000000)) show = false;
            if (harga === '1000+' && !(price > 1000000)) show = false;
        }
        card.style.display = show ? '' : 'none';
    });
}
filterStatus.onchange = filterKamar;
filterTipe.onchange = filterKamar;
filterHarga.onchange = filterKamar;
</script>
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