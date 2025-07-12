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
    <button id="btnTambahBarang" style="background:#7b5ae6;color:#fff;padding:10px 22px;border-radius:8px;font-weight:600;box-shadow:0 2px 8px #e6b87a22;border:none;">+ Tambah Barang</button>
    <button id="btnExportBarang" style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Export Data</button>
    <button id="btnLaporanInventori" style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Laporan Inventori</button>
    <button id="btnUpdateStock" style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Update Stock</button>
</div>
<div style="display:flex;align-items:center;gap:12px;margin-bottom:18px;">
    <input id="searchBarang" type="text" placeholder="Cari nama barang, kode, atau kategori..." style="flex:1;padding:10px 14px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff8f0;" />
    <span style="color:#888;">Kategori:</span>
    <select id="filterKategoriBarang" style="padding:8px 12px;border-radius:6px;border:1.5px solid #e6b87a;">
        <option value="all">Semua Kategori</option>
        <option value="furniture">Furniture</option>
        <option value="elektronik">Elektronik</option>
        <option value="dapur">Dapur</option>
        <option value="kebersihan">Kebersihan</option>
    </select>
    <span style="color:#888;">Kondisi:</span>
    <select id="filterKondisiBarang" style="padding:8px 12px;border-radius:6px;border:1.5px solid #e6b87a;">
        <option value="all">Semua Kondisi</option>
        <option value="baik">Baik</option>
        <option value="maintenance">Maintenance</option>
        <option value="rusak">Rusak</option>
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
            <!-- Tambahan data dummy -->
            <tr style="background:#fff;border-radius:8px;box-shadow:0 2px 8px #e6b87a11;">
                <td style="padding:10px 12px;"><span style="font-size:1.5em;">🖨️</span></td>
                <td style="padding:10px 12px;color:#7b5ae6;font-weight:600;">BRG006</td>
                <td style="padding:10px 12px;font-weight:600;">Printer Epson</td>
                <td style="padding:10px 12px;"><span style="background:#e6f7ff;color:#3b7be6;padding:3px 10px;border-radius:6px;font-size:0.95em;">ELEKTRONIK</span></td>
                <td style="padding:10px 12px;color:#ffb347;font-weight:600;">2 unit</td>
                <td style="padding:10px 12px;"><span style="background:#fff5e0;color:#ffb347;padding:4px 14px;border-radius:8px;font-weight:600;">MAINTENANCE</span></td>
                <td style="padding:10px 12px;">Service Center</td>
                <td style="padding:10px 12px;">03 Jan 2024</td>
                <td style="padding:10px 12px;display:flex;gap:6px;">
                    <button style="background:#f5f8ff;color:#3b7be6;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🔍</button>
                    <button style="background:#ffb347;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">✏️</button>
                    <button style="background:#e65a5a;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🗑️</button>
                </td>
            </tr>
            <tr style="background:#fff;border-radius:8px;box-shadow:0 2px 8px #e6b87a11;">
                <td style="padding:10px 12px;"><span style="font-size:1.5em;">🧺</span></td>
                <td style="padding:10px 12px;color:#7b5ae6;font-weight:600;">BRG007</td>
                <td style="padding:10px 12px;font-weight:600;">Keranjang Laundry</td>
                <td style="padding:10px 12px;"><span style="background:#e6fff2;color:#3bb273;padding:3px 10px;border-radius:6px;font-size:0.95em;">KEBERSIHAN</span></td>
                <td style="padding:10px 12px;color:#3bb273;font-weight:600;">10 unit</td>
                <td style="padding:10px 12px;"><span style="background:#eafbe6;color:#3bb273;padding:4px 14px;border-radius:8px;font-weight:600;">BAIK</span></td>
                <td style="padding:10px 12px;">Gudang C</td>
                <td style="padding:10px 12px;">02 Jan 2024</td>
                <td style="padding:10px 12px;display:flex;gap:6px;">
                    <button style="background:#f5f8ff;color:#3b7be6;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🔍</button>
                    <button style="background:#ffb347;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">✏️</button>
                    <button style="background:#e65a5a;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🗑️</button>
                </td>
            </tr>
            <tr style="background:#fff;border-radius:8px;box-shadow:0 2px 8px #e6b87a11;">
                <td style="padding:10px 12px;"><span style="font-size:1.5em;">🪟</span></td>
                <td style="padding:10px 12px;color:#7b5ae6;font-weight:600;">BRG008</td>
                <td style="padding:10px 12px;font-weight:600;">Tirai Jendela</td>
                <td style="padding:10px 12px;"><span style="background:#e6e6ff;color:#7b5ae6;padding:3px 10px;border-radius:6px;font-size:0.95em;">FURNITURE</span></td>
                <td style="padding:10px 12px;color:#e65a5a;font-weight:600;">1 unit</td>
                <td style="padding:10px 12px;"><span style="background:#ffeaea;color:#e65a5a;padding:4px 14px;border-radius:8px;font-weight:600;">RUSAK</span></td>
                <td style="padding:10px 12px;">Gudang A</td>
                <td style="padding:10px 12px;">01 Jan 2024</td>
                <td style="padding:10px 12px;display:flex;gap:6px;">
                    <button style="background:#f5f8ff;color:#3b7be6;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🔍</button>
                    <button style="background:#ffb347;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">✏️</button>
                    <button style="background:#e65a5a;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🗑️</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- MODAL TAMBAH BARANG -->
<div id="modalTambahBarang" style="display:none;position:fixed;z-index:2000;left:0;top:0;width:100vw;height:100vh;background:rgba(44,36,24,0.18);align-items:center;justify-content:center;">
  <div style="background:#fff;border-radius:16px;box-shadow:0 4px 32px #e6b87a44;padding:0;min-width:320px;max-width:420px;width:98vw;position:relative;overflow-y:auto;max-height:97vh;">
    <div style="border-bottom:1.5px solid #f3e7d1;padding:18px 18px 8px 18px;display:flex;align-items:center;justify-content:space-between;">
      <div style="font-size:1.13em;font-weight:700;color:#7b5ae6;">Tambah Barang Baru</div>
      <button id="closeModalTambahBarang" style="background:none;border:none;font-size:1.5em;color:#b89c7a;cursor:pointer;">&times;</button>
    </div>
    <form method="post" action="?page=barang&action=save" enctype="multipart/form-data" style="padding:12px 18px 12px 18px;display:flex;flex-direction:column;gap:12px;">
      <style>
        #modalTambahBarang input,
        #modalTambahBarang select,
        #modalTambahBarang textarea {
          max-width: 100%;
          box-sizing: border-box;
        }
      </style>
      <div>
        <label style="font-weight:500;">Nama Barang *</label>
        <input name="nama" required placeholder="Masukkan nama barang" style="width:100%;padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;margin-top:4px;" />
      </div>
      <div>
        <label style="font-weight:500;">Kode Barang</label>
        <input name="kode" placeholder="BRG001 (auto-generate jika kosong)" style="width:100%;padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;margin-top:4px;" />
      </div>
      <div>
        <label style="font-weight:500;">Kategori *</label>
        <select name="kategori" required style="width:100%;padding:10px 12px;border-radius:7px;border:1.5px solid #222;margin-top:4px;">
          <option value="">Pilih Kategori</option>
          <option>Furniture</option>
          <option>Elektronik</option>
          <option>Kebersihan</option>
          <option>Dapur</option>
        </select>
      </div>
      <div>
        <label style="font-weight:500;">Jumlah *</label>
        <input name="jumlah" type="number" min="0" required value="0" style="width:100%;padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;margin-top:4px;" />
      </div>
      <div>
        <label style="font-weight:500;">Kondisi *</label>
        <select name="kondisi" required style="width:100%;padding:10px 12px;border-radius:7px;border:1.5px solid #222;margin-top:4px;">
          <option value="">Pilih Kondisi</option>
          <option>Baik</option>
          <option>Maintenance</option>
          <option>Rusak</option>
        </select>
      </div>
      <div>
        <label style="font-weight:500;">Lokasi *</label>
        <select name="lokasi" required style="width:100%;padding:10px 12px;border-radius:7px;border:1.5px solid #222;margin-top:4px;">
          <option value="">Pilih Lokasi</option>
          <option>Gudang A</option>
          <option>Gudang B</option>
          <option>Gudang C</option>
          <option>Ruang Utilitas</option>
          <option>Service Center</option>
        </select>
      </div>
      <div>
        <label style="font-weight:500;">Tanggal Masuk</label>
        <input name="tanggal_masuk" type="date" style="width:100%;padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;margin-top:4px;" />
      </div>
      <div>
        <label style="font-weight:500;">Harga (Opsional)</label>
        <input name="harga" type="number" min="0" value="0" style="width:100%;padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;margin-top:4px;" />
      </div>
      <div>
        <label style="font-weight:500;">Deskripsi</label>
        <textarea name="deskripsi" placeholder="Deskripsi tambahan tentang barang..." style="width:100%;padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;margin-top:4px;resize:vertical;min-height:48px;"></textarea>
      </div>
      <div>
        <label style="font-weight:500;">Upload Foto</label>
        <div style="border:2px dashed #e6b87a;border-radius:10px;padding:18px 0 12px 0;text-align:center;background:#fff8f0;">
          <div style="font-size:2em;color:#b89c7a;margin-bottom:6px;">&#128247;</div>
          <div style="color:#888;margin-bottom:6px;">Klik untuk upload foto atau drag & drop<br><span style='font-size:0.95em;color:#b89c7a;'>PNG, JPG, GIF hingga 10MB</span></div>
          <input type="file" name="foto" accept="image/*" style="display:none;" id="inputFotoBarang" />
          <button type="button" onclick="document.getElementById('inputFotoBarang').click();" style="background:#fff;border:1.5px solid #e6b87a;color:#7b5ae6;padding:7px 18px;border-radius:7px;font-weight:600;cursor:pointer;">Pilih File</button>
          <div id="previewFotoBarang" style="margin-top:10px;"></div>
        </div>
      </div>
      <div style="display:flex;gap:12px;justify-content:flex-end;margin-top:8px;">
        <button type="button" id="batalTambahBarang" style="flex:1;background:#fff;border:1.5px solid #e6b87a;color:#7b5ae6;padding:10px 0;border-radius:8px;font-weight:600;">Batal</button>
        <button type="submit" style="flex:1;background:#7b5ae6;color:#fff;padding:10px 0;border-radius:8px;font-weight:600;">Simpan Barang</button>
      </div>
    </form>
  </div>
</div>
<!-- MODAL EXPORT DATA INVENTORI -->
<div id="modalExportBarang" style="display:none;position:fixed;z-index:2100;left:0;top:0;width:100vw;height:100vh;background:rgba(44,36,24,0.18);align-items:center;justify-content:center;">
  <div style="background:#fff8f0;border-radius:18px;box-shadow:0 4px 32px #e6b87a44;padding:0;min-width:300px;max-width:410px;width:98vw;position:relative;overflow-y:auto;max-height:97vh;">
    <div style="display:flex;align-items:center;justify-content:space-between;padding:14px 14px 6px 14px;border-bottom:1.5px solid #f3e7d1;">
      <div style="font-size:1.13em;font-weight:700;color:#3b7be6;display:flex;align-items:center;gap:8px;">
        <span style='font-size:1.3em;'>📤</span> Export Data Inventori
      </div>
      <button id="closeModalExportBarang" style="background:none;border:none;font-size:1.5em;color:#b89c7a;cursor:pointer;">&times;</button>
    </div>
    <form style="padding:10px 14px 10px 14px;display:flex;flex-direction:column;gap:12px;">
      <div style="font-weight:600;color:#7b5ae6;">Pilih Format File</div>
      <div style="display:flex;gap:12px;margin-bottom:6px;">
        <label style="flex:1;background:#fff;border:2px solid #7b5ae6;border-radius:10px;padding:12px 0;text-align:center;cursor:pointer;display:flex;flex-direction:column;align-items:center;gap:4px;">
          <input type="radio" name="format" value="excel" checked style="accent-color:#3b7be6;margin-bottom:4px;"> 
          <span style="font-size:2em;">📊</span>
          <span style="font-weight:600;color:#3b7be6;">Excel (XLSX)</span>
          <span style="font-size:0.95em;color:#888;">Format spreadsheet dengan formatting</span>
        </label>
        <label style="flex:1;background:#fff;border:2px solid #e6e6e6;border-radius:10px;padding:12px 0;text-align:center;cursor:pointer;display:flex;flex-direction:column;align-items:center;gap:4px;">
          <input type="radio" name="format" value="csv" style="accent-color:#7b5ae6;margin-bottom:4px;"> 
          <span style="font-size:2em;">📝</span>
          <span style="font-weight:600;color:#7b5ae6;">CSV</span>
          <span style="font-size:0.95em;color:#888;">Format teks terpisah koma</span>
        </label>
        <label style="flex:1;background:#fff;border:2px solid #e6e6e6;border-radius:10px;padding:12px 0;text-align:center;cursor:pointer;display:flex;flex-direction:column;align-items:center;gap:4px;">
          <input type="radio" name="format" value="pdf" style="accent-color:#7b5ae6;margin-bottom:4px;"> 
          <span style="font-size:2em;">📄</span>
          <span style="font-weight:600;color:#7b5ae6;">PDF</span>
          <span style="font-size:0.95em;color:#888;">Format dokumen untuk cetak</span>
        </label>
      </div>
      <div style="font-weight:600;color:#7b5ae6;">Filter Data</div>
      <div>
        <label style="font-weight:500;">Rentang Data</label>
        <select style="width:100%;padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;margin-top:4px;">
          <option>Semua Data</option>
          <option>Barang Masuk 30 Hari Terakhir</option>
          <option>Barang Masuk Tahun Ini</option>
        </select>
      </div>
      <div>
        <label style="font-weight:500;">Pilih Kategori</label>
        <div style="display:flex;flex-wrap:wrap;gap:18px 32px;margin-top:6px;">
          <label><input type="checkbox" style="accent-color:#3b7be6;margin-right:7px;"> Furniture</label>
          <label><input type="checkbox" style="accent-color:#3b7be6;margin-right:7px;"> Elektronik</label>
          <label><input type="checkbox" style="accent-color:#3b7be6;margin-right:7px;"> Kebersihan</label>
          <label><input type="checkbox" style="accent-color:#3b7be6;margin-right:7px;"> Dapur</label>
        </div>
        <label style="margin-top:10px;display:block;"><input type="checkbox" style="accent-color:#3b7be6;margin-right:7px;"> Sertakan gambar barang</label>
      </div>
      <div style="background:#fffbe6;border:1.5px solid #ffe6a1;border-radius:8px;padding:12px 16px;color:#b89c7a;font-size:1em;">
        <b>Preview Export</b><br>
        File akan berisi: 156 items, Format: <span style='color:#3b7be6;font-weight:600;'>EXCEL</span>, tanpa gambar
      </div>
      <div style="display:flex;gap:12px;justify-content:flex-end;margin-top:8px;">
        <button type="button" id="batalExportBarang" style="flex:1;background:#fff;border:1.5px solid #e6b87a;color:#7b5ae6;padding:10px 0;border-radius:8px;font-weight:600;">Batal</button>
        <button type="button" style="flex:1;background:#22b573;color:#fff;padding:10px 0;border-radius:8px;font-weight:600;display:flex;align-items:center;justify-content:center;gap:8px;">
          <span style='font-size:1.2em;'>⭳</span> Download Export
        </button>
      </div>
    </form>
  </div>
</div>
<!-- MODAL LAPORAN INVENTORI -->
<div id="modalLaporanInventori" style="display:none;position:fixed;z-index:2200;left:0;top:0;width:100vw;height:100vh;background:rgba(44,36,24,0.18);align-items:center;justify-content:center;">
  <div style="background:#fff;border-radius:16px;box-shadow:0 4px 32px #e6b87a44;padding:0;min-width:320px;max-width:480px;width:98vw;position:relative;overflow-y:auto;max-height:97vh;">
    <div style="display:flex;align-items:center;justify-content:space-between;padding:18px 18px 8px 18px;border-bottom:1.5px solid #f3e7d1;">
      <div style="font-size:1.13em;font-weight:700;color:#222;">Generate Laporan Inventori</div>
      <button id="closeModalLaporanInventori" style="background:none;border:none;font-size:1.5em;color:#b89c7a;cursor:pointer;">&times;</button>
    </div>
    <form style="padding:14px 18px 14px 18px;display:flex;flex-direction:column;gap:16px;">
      <div style="font-weight:600;color:#222;">Jenis Laporan</div>
      <div style="display:flex;flex-direction:column;gap:7px;margin-bottom:6px;">
        <label style="display:flex;align-items:center;gap:8px;font-weight:500;"><input type="radio" name="jenis" checked style="accent-color:#3b7be6;"> Ringkasan Inventori</label>
        <label style="display:flex;align-items:center;gap:8px;font-weight:500;"><input type="radio" name="jenis" style="accent-color:#3b7be6;"> Laporan Detail</label>
        <label style="display:flex;align-items:center;gap:8px;font-weight:500;"><input type="radio" name="jenis" style="accent-color:#3b7be6;"> Pergerakan Stock</label>
        <label style="display:flex;align-items:center;gap:8px;font-weight:500;"><input type="radio" name="jenis" style="accent-color:#3b7be6;"> Laporan Maintenance</label>
      </div>
      <div style="font-weight:600;color:#222;">Periode</div>
      <select style="width:100%;padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;margin-bottom:8px;">
        <option>Bulanan</option>
        <option>Mingguan</option>
        <option>Tahunan</option>
        <option>Custom</option>
      </select>
      <div style="display:flex;gap:10px;">
        <div style="flex:1;">
          <label style="font-size:0.97em;color:#888;">Dari Tanggal</label>
          <input type="date" style="width:100%;padding:8px 10px;border-radius:7px;border:1.5px solid #e6b87a;" />
        </div>
        <div style="flex:1;">
          <label style="font-size:0.97em;color:#888;">Sampai Tanggal</label>
          <input type="date" style="width:100%;padding:8px 10px;border-radius:7px;border:1.5px solid #e6b87a;" />
        </div>
      </div>
      <label style="margin-top:4px;display:flex;align-items:center;gap:8px;font-weight:500;"><input type="checkbox" checked style="accent-color:#3b7be6;"> Sertakan grafik dan chart</label>
      <div style="background:#f5f8ff;border:1.5px solid #c7d6ff;border-radius:8px;padding:12px 16px;color:#3b7be6;font-size:1em;display:flex;flex-direction:column;gap:7px;">
        <div style="display:flex;align-items:center;gap:8px;font-weight:600;"><span style='font-size:1.2em;'>📊</span> Preview Laporan</div>
        <div style="display:flex;align-items:center;gap:8px;color:#7b5ae6;"><span style='font-size:1.1em;'>📦</span> Distribusi Kategori</div>
        <div style="display:flex;align-items:center;gap:8px;color:#22b573;"><span style='font-size:1.1em;'>📈</span> Trend Pergerakan</div>
        <div style="display:flex;align-items:center;gap:8px;color:#e65a5a;"><span style='font-size:1.1em;'>📉</span> Status Kondisi</div>
      </div>
      <div style="display:flex;gap:12px;justify-content:flex-end;margin-top:8px;">
        <button type="button" id="batalLaporanInventori" style="flex:1;background:#fff;border:1.5px solid #e6b87a;color:#7b5ae6;padding:10px 0;border-radius:8px;font-weight:600;">Batal</button>
        <button type="button" style="flex:1;background:#2563eb;color:#fff;padding:10px 0;border-radius:8px;font-weight:600;display:flex;align-items:center;justify-content:center;gap:8px;">
          <span style='font-size:1.2em;'>📄</span> Generate Laporan
        </button>
      </div>
    </form>
  </div>
</div>
<!-- MODAL UPDATE STOCK BARANG -->
<div id="modalUpdateStock" style="display:none;position:fixed;z-index:2300;left:0;top:0;width:100vw;height:100vh;background:rgba(44,36,24,0.18);align-items:center;justify-content:center;">
  <div style="background:#fff;border-radius:16px;box-shadow:0 4px 32px #e6b87a44;padding:0;min-width:320px;max-width:520px;width:98vw;position:relative;overflow-y:auto;max-height:97vh;">
    <div style="display:flex;align-items:center;justify-content:space-between;padding:18px 18px 8px 18px;border-bottom:1.5px solid #f3e7d1;">
      <div style="font-size:1.13em;font-weight:700;color:#222;">Update Stock Barang</div>
      <button id="closeModalUpdateStock" style="background:none;border:none;font-size:1.5em;color:#b89c7a;cursor:pointer;">&times;</button>
    </div>
    <div style="padding:14px 18px 0 18px;">
      <div style="display:flex;gap:10px;margin-bottom:14px;">
        <button type="button" style="flex:1;background:#7b5ae6;color:#fff;padding:8px 0;border-radius:8px;font-weight:600;border:none;">Input Manual</button>
        <button type="button" style="flex:1;background:#fff;border:1.5px solid #e6b87a;color:#7b5ae6;padding:8px 0;border-radius:8px;font-weight:600;">Scan Barcode</button>
        <button type="button" style="flex:1;background:#fff;border:1.5px solid #e6b87a;color:#7b5ae6;padding:8px 0;border-radius:8px;font-weight:600;">Import Excel</button>
      </div>
      <div style="background:#f7f7fa;border:1.5px solid #e6e6e6;border-radius:10px;padding:10px 0 0 0;margin-bottom:14px;">
        <div style="font-weight:600;color:#7b5ae6;padding:0 16px 8px 16px;">Update Stock Barang</div>
        <div style="display:flex;flex-direction:column;gap:8px;">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:8px 16px 0 16px;">
            <div>
              <div style="font-weight:600;">Kasur Single</div>
              <div style="font-size:0.97em;color:#888;">BRG001</div>
            </div>
            <div style="display:flex;align-items:center;gap:8px;">
              <span style="color:#888;font-size:0.98em;">Stock</span>
              <input type="number" value="25" min="0" style="width:48px;padding:4px 6px;border-radius:6px;border:1.5px solid #e6b87a;text-align:center;" />
              <span style="font-size:1.2em;">→</span>
              <input type="number" value="25" min="0" style="width:48px;padding:4px 6px;border-radius:6px;border:1.5px solid #e6b87a;text-align:center;" />
              <input type="checkbox" style="accent-color:#7b5ae6;margin-left:8px;" />
            </div>
          </div>
          <div style="display:flex;align-items:center;justify-content:space-between;padding:8px 16px 0 16px;">
            <div>
              <div style="font-weight:600;">AC 1 PK</div>
              <div style="font-size:0.97em;color:#888;">BRG002</div>
            </div>
            <div style="display:flex;align-items:center;gap:8px;">
              <span style="color:#888;font-size:0.98em;">Stock</span>
              <input type="number" value="8" min="0" style="width:48px;padding:4px 6px;border-radius:6px;border:1.5px solid #e6b87a;text-align:center;" />
              <span style="font-size:1.2em;">→</span>
              <input type="number" value="8" min="0" style="width:48px;padding:4px 6px;border-radius:6px;border:1.5px solid #e6b87a;text-align:center;" />
              <input type="checkbox" style="accent-color:#7b5ae6;margin-left:8px;" />
            </div>
          </div>
          <div style="display:flex;align-items:center;justify-content:space-between;padding:8px 16px 0 16px;">
            <div>
              <div style="font-weight:600;">Kursi Belajar</div>
              <div style="font-size:0.97em;color:#888;">BRG003</div>
            </div>
            <div style="display:flex;align-items:center;gap:8px;">
              <span style="color:#888;font-size:0.98em;">Stock</span>
              <input type="number" value="3" min="0" style="width:48px;padding:4px 6px;border-radius:6px;border:1.5px solid #e6b87a;text-align:center;" />
              <span style="font-size:1.2em;">→</span>
              <input type="number" value="3" min="0" style="width:48px;padding:4px 6px;border-radius:6px;border:1.5px solid #e6b87a;text-align:center;" />
              <input type="checkbox" style="accent-color:#7b5ae6;margin-left:8px;" />
            </div>
          </div>
        </div>
      </div>
      <div style="background:#f5fff5;border:1.5px solid #b6e6b6;border-radius:8px;padding:10px 16px;color:#22b573;font-size:1em;margin-bottom:14px;">
        <b>Ringkasan Update</b><br>
        • 0 item akan diupdate<br>
        • Total perubahan: 0 unit
      </div>
      <div>
        <label style="font-weight:500;">Keterangan Update</label>
        <textarea placeholder="Alasan update stock (opsional)..." style="width:100%;padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;margin-top:4px;resize:vertical;min-height:38px;"></textarea>
      </div>
      <div style="display:flex;gap:12px;justify-content:flex-end;margin-top:8px;">
        <button type="button" id="batalUpdateStock" style="flex:1;background:#fff;border:1.5px solid #e6b87a;color:#7b5ae6;padding:10px 0;border-radius:8px;font-weight:600;">Batal</button>
        <button type="button" style="flex:1;background:#ff7300;color:#fff;padding:10px 0;border-radius:8px;font-weight:600;display:flex;align-items:center;justify-content:center;gap:8px;">
          <span style='font-size:1.2em;'>⟳</span> Update Stock
        </button>
      </div>
    </div>
  </div>
</div>
<script>
const btnTambahBarang = document.getElementById('btnTambahBarang');
const modalTambahBarang = document.getElementById('modalTambahBarang');
const closeModalTambahBarang = document.getElementById('closeModalTambahBarang');
const batalTambahBarang = document.getElementById('batalTambahBarang');
if(btnTambahBarang) btnTambahBarang.onclick = function(e){e.preventDefault();modalTambahBarang.style.display='flex';};
if(closeModalTambahBarang) closeModalTambahBarang.onclick = function(){modalTambahBarang.style.display='none';};
if(batalTambahBarang) batalTambahBarang.onclick = function(){modalTambahBarang.style.display='none';};
window.addEventListener('click', function(e) {
  if(e.target === modalTambahBarang) modalTambahBarang.style.display = 'none';
});
// Preview foto
const inputFotoBarang = document.getElementById('inputFotoBarang');
const previewFotoBarang = document.getElementById('previewFotoBarang');
if(inputFotoBarang && previewFotoBarang) {
  inputFotoBarang.onchange = function(e) {
    previewFotoBarang.innerHTML = '';
    if(this.files && this.files[0]) {
      const reader = new FileReader();
      reader.onload = function(ev) {
        previewFotoBarang.innerHTML = `<img src='${ev.target.result}' style='max-width:120px;max-height:120px;border-radius:8px;margin-top:6px;' />`;
      };
      reader.readAsDataURL(this.files[0]);
    }
  };
}
const btnExportBarang = document.getElementById('btnExportBarang');
const modalExportBarang = document.getElementById('modalExportBarang');
const closeModalExportBarang = document.getElementById('closeModalExportBarang');
const batalExportBarang = document.getElementById('batalExportBarang');
if(btnExportBarang) btnExportBarang.onclick = function(e){e.preventDefault();modalExportBarang.style.display='flex';};
if(closeModalExportBarang) closeModalExportBarang.onclick = function(){modalExportBarang.style.display='none';};
if(batalExportBarang) batalExportBarang.onclick = function(){modalExportBarang.style.display='none';};
window.addEventListener('click', function(e) {
  if(e.target === modalExportBarang) modalExportBarang.style.display = 'none';
});
const btnLaporanInventori = document.getElementById('btnLaporanInventori');
const modalLaporanInventori = document.getElementById('modalLaporanInventori');
const closeModalLaporanInventori = document.getElementById('closeModalLaporanInventori');
const batalLaporanInventori = document.getElementById('batalLaporanInventori');
if(btnLaporanInventori) btnLaporanInventori.onclick = function(e){e.preventDefault();modalLaporanInventori.style.display='flex';};
if(closeModalLaporanInventori) closeModalLaporanInventori.onclick = function(){modalLaporanInventori.style.display='none';};
if(batalLaporanInventori) batalLaporanInventori.onclick = function(){modalLaporanInventori.style.display='none';};
window.addEventListener('click', function(e) {
  if(e.target === modalLaporanInventori) modalLaporanInventori.style.display = 'none';
});
const btnUpdateStock = document.getElementById('btnUpdateStock');
const modalUpdateStock = document.getElementById('modalUpdateStock');
const closeModalUpdateStock = document.getElementById('closeModalUpdateStock');
const batalUpdateStock = document.getElementById('batalUpdateStock');
if(btnUpdateStock) btnUpdateStock.onclick = function(e){e.preventDefault();modalUpdateStock.style.display='flex';};
if(closeModalUpdateStock) closeModalUpdateStock.onclick = function(){modalUpdateStock.style.display='none';};
if(batalUpdateStock) batalUpdateStock.onclick = function(){modalUpdateStock.style.display='none';};
window.addEventListener('click', function(e) {
  if(e.target === modalUpdateStock) modalUpdateStock.style.display = 'none';
});
// Filter & Search Barang logic
const searchBarang = document.getElementById('searchBarang');
const filterKategori = document.getElementById('filterKategoriBarang');
const filterKondisi = document.getElementById('filterKondisiBarang');
const barangRows = document.querySelectorAll('tbody tr');

function filterBarang() {
    const q = searchBarang.value.toLowerCase();
    const kategori = filterKategori.value;
    const kondisi = filterKondisi.value;
    barangRows.forEach(row => {
        let show = true;
        const rowText = row.textContent.toLowerCase();
        // Search
        if (q && !rowText.includes(q)) show = false;
        // Kategori
        if (kategori !== 'all') {
            if (kategori === 'furniture' && !rowText.includes('furniture')) show = false;
            if (kategori === 'elektronik' && !rowText.includes('elektronik')) show = false;
            if (kategori === 'dapur' && !rowText.includes('kitchen') && !rowText.includes('dapur')) show = false;
            if (kategori === 'kebersihan' && !rowText.includes('kebersihan')) show = false;
        }
        // Kondisi
        if (kondisi !== 'all') {
            if (kondisi === 'baik' && !rowText.includes('baik')) show = false;
            if (kondisi === 'maintenance' && !rowText.includes('maintenance')) show = false;
            if (kondisi === 'rusak' && !rowText.includes('rusak')) show = false;
        }
        row.style.display = show ? '' : 'none';
    });
}
searchBarang.oninput = filterBarang;
filterKategori.onchange = filterBarang;
filterKondisi.onchange = filterBarang;
</script>
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