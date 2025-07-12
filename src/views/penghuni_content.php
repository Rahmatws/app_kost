<?php
require_once __DIR__ . '/../controllers/penghuni.php';
$penghuni = getAllPenghuni();
?>
<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:18px;">
    <h2 style="margin:0;">Data Penghuni</h2>
    <div style="font-weight:500;color:#888;">Dashboard / Data Penghuni</div>
</div>
<div style="display:flex;gap:18px;margin-bottom:24px;">
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;">6</div>
        <div style="color:#8d7b5a;">Total Penghuni</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;">4</div>
        <div style="color:#8d7b5a;">Penghuni Aktif</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;">3</div>
        <div style="color:#8d7b5a;">Kamar Terisi</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;">2</div>
        <div style="color:#8d7b5a;">Menunggu Konfirmasi</div>
    </div>
</div>
<div style="display:flex;align-items:center;gap:12px;margin-bottom:18px;">
    <a href="#" id="btnTambahPenghuni" style="background:#7b5ae6;color:#fff;padding:10px 22px;border-radius:8px;font-weight:600;text-decoration:none;box-shadow:0 2px 8px #e6b87a22;">+ Tambah Penghuni</a>
    <button id="btnImportData" style="background:#ffe6a0;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Import Data</button>
    <button id="btnExportData" style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Export Data</button>
    <div style="flex:1;"></div>
    <form style="display:flex;align-items:center;gap:4px;" method="get">
        <input type="hidden" name="page" value="penghuni">
        <input type="text" name="q" placeholder="Cari penghuni..." style="padding:8px 12px;border-radius:6px;border:1.5px solid #e6b87a;">
        <button type="submit" style="background:none;border:none;font-size:1.2em;cursor:pointer;">🔍</button>
    </form>
</div>
<div style="background:#fff8f0;border-radius:14px;box-shadow:0 2px 12px #e6b87a22;padding:24px 18px;">
    <div style="font-weight:600;font-size:1.1em;margin-bottom:6px;">Daftar Penghuni Kost</div>
    <div style="color:#8d7b5a;margin-bottom:12px;">Kelola data lengkap penghuni kost Anda</div>
    <table style="width:100%;border-collapse:collapse;background:#fff8f0;">
        <tr style="background:#f5f8ff;">
            <th style="padding:10px 8px;">ID</th>
            <th style="padding:10px 8px;">NAMA</th>
            <th style="padding:10px 8px;">NO KTP</th>
            <th style="padding:10px 8px;">NO HP</th>
            <th style="padding:10px 8px;">TGL MASUK</th>
            <th style="padding:10px 8px;">TGL KELUAR</th>
            <th style="padding:10px 8px;">STATUS</th>
            <th style="padding:10px 8px;">AKSI</th>
        </tr>
        <tr><td>1</td><td>Ahmad Rizki</td><td>3201011234567890</td><td>081234567890</td><td>2024-01-10</td><td>-</td><td style="color:#3bb273;font-weight:600;">Aktif</td><td><button style="background:#f5f8ff;color:#3b7be6;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🔍</button> <button style="background:#ffb347;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">✏️</button> <button style="background:#e65a5a;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🗑️</button></td></tr>
        <tr><td>2</td><td>Siti Nurhaliza</td><td>3201029876543210</td><td>081298765432</td><td>2024-02-15</td><td>-</td><td style="color:#3bb273;font-weight:600;">Aktif</td><td><button style="background:#f5f8ff;color:#3b7be6;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🔍</button> <button style="background:#ffb347;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">✏️</button> <button style="background:#e65a5a;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🗑️</button></td></tr>
        <tr><td>3</td><td>Budi Santoso</td><td>3201031122334455</td><td>081312345678</td><td>2024-03-01</td><td>-</td><td style="color:#3bb273;font-weight:600;">Aktif</td><td><button style="background:#f5f8ff;color:#3b7be6;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🔍</button> <button style="background:#ffb347;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">✏️</button> <button style="background:#e65a5a;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🗑️</button></td></tr>
        <tr><td>4</td><td>Maya Sari</td><td>3201045566778899</td><td>081345678912</td><td>2024-03-20</td><td>-</td><td style="color:#3bb273;font-weight:600;">Aktif</td><td><button style="background:#f5f8ff;color:#3b7be6;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🔍</button> <button style="background:#ffb347;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">✏️</button> <button style="background:#e65a5a;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🗑️</button></td></tr>
        <tr><td>5</td><td>Rina Dewi</td><td>3201059988776655</td><td>081367891234</td><td>2024-04-05</td><td>-</td><td style="color:#ffb347;font-weight:600;">Menunggu Konfirmasi</td><td><button style="background:#f5f8ff;color:#3b7be6;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🔍</button> <button style="background:#ffb347;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">✏️</button> <button style="background:#e65a5a;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🗑️</button></td></tr>
        <tr><td>6</td><td>Andi Pratama</td><td>3201065544332211</td><td>081389123456</td><td>2024-04-18</td><td>-</td><td style="color:#ffb347;font-weight:600;">Menunggu Konfirmasi</td><td><button style="background:#f5f8ff;color:#3b7be6;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🔍</button> <button style="background:#ffb347;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">✏️</button> <button style="background:#e65a5a;color:#fff;padding:7px 12px;border-radius:7px;font-weight:600;border:none;">🗑️</button></td></tr>
    </table>
</div>
<!-- MODAL TAMBAH PENGHUNI -->
<div id="modalTambahPenghuni" style="display:none;position:fixed;z-index:1000;left:0;top:0;width:100vw;height:100vh;background:rgba(44,36,24,0.18);align-items:center;justify-content:center;">
  <div style="background:#fff8f0;border-radius:18px;box-shadow:0 4px 32px #e6b87a44;padding:0;min-width:340px;max-width:740px;width:95vw;position:relative;overflow-y:auto;max-height:95vh;display:flex;flex-direction:column;align-items:center;">
    <div style="width:100%;display:flex;align-items:center;justify-content:space-between;padding:24px 40px 0 40px;box-sizing:border-box;">
      <div style="font-size:1.35em;font-weight:700;color:#7b5ae6;">Registrasi Penghuni Baru</div>
      <button id="closeModalTambah" style="background:none;border:none;font-size:1.5em;color:#b89c7a;cursor:pointer;">&times;</button>
    </div>
    <form method="post" action="?page=penghuni&action=save" enctype="multipart/form-data" style="background:#fff;width:96%;max-width:680px;margin:24px auto 24px auto;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:32px 32px 18px 32px;display:flex;flex-direction:column;gap:22px;box-sizing:border-box;">
      <!-- Foto Penghuni -->
      <div style="display:flex;flex-direction:column;align-items:center;gap:8px;margin-bottom:8px;">
        <div style="width:90px;height:90px;border-radius:50%;background:#f5f5f5;display:flex;align-items:center;justify-content:center;font-size:2.5em;color:#b89c7a;overflow:hidden;">
          <span id="fotoPreview">📷</span>
        </div>
        <label for="foto_penghuni" style="color:#7b5ae6;cursor:pointer;font-size:1em;font-weight:500;">Upload Foto Penghuni (Opsional)</label>
        <input type="file" id="foto_penghuni" name="foto_penghuni" accept="image/*" style="display:none;">
      </div>
      <!-- Data Pribadi -->
      <div style="background:#fff;border-radius:12px;padding:18px 18px 8px 18px;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-weight:600;color:#7b5ae6;margin-bottom:10px;">Data Pribadi</div>
        <div style="display:flex;flex-wrap:wrap;gap:16px 24px;">
          <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
            <label>Nama Lengkap <span style="color:#e65a5a">*</span></label>
            <input name="nama" required placeholder="Masukkan nama lengkap" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
          <div style="flex:1 1 120px;min-width:120px;display:flex;flex-direction:column;gap:6px;">
            <label>Jenis Kelamin <span style="color:#e65a5a">*</span></label>
            <select name="jenis_kelamin" required style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
              <option value="">Pilih jenis kelamin</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
            <label>Tempat Lahir <span style="color:#e65a5a">*</span></label>
            <input name="tempat_lahir" required placeholder="Kota/Kabupaten kelahiran" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
          <div style="flex:1 1 120px;min-width:120px;display:flex;flex-direction:column;gap:6px;">
            <label>Tanggal Lahir <span style="color:#e65a5a">*</span></label>
            <input type="date" name="tgl_lahir" required style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
          <div style="flex:1 1 120px;min-width:120px;display:flex;flex-direction:column;gap:6px;">
            <label>Agama <span style="color:#e65a5a">*</span></label>
            <select name="agama" required style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
              <option value="">Pilih agama</option>
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Katolik">Katolik</option>
              <option value="Hindu">Hindu</option>
              <option value="Buddha">Buddha</option>
              <option value="Konghucu">Konghucu</option>
              <option value="Lainnya">Lainnya</option>
            </select>
          </div>
          <div style="flex:1 1 120px;min-width:120px;display:flex;flex-direction:column;gap:6px;">
            <label>Status Perkawinan <span style="color:#e65a5a">*</span></label>
            <select name="status_perkawinan" required style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
              <option value="">Pilih status</option>
              <option value="Belum Menikah">Belum Menikah</option>
              <option value="Menikah">Menikah</option>
              <option value="Cerai">Cerai</option>
            </select>
          </div>
          <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
            <label>Pekerjaan/Profesi</label>
            <input name="pekerjaan" placeholder="Mahasiswa, Karyawan, dll" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
          <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
            <label>Instansi/Perusahaan</label>
            <input name="instansi" placeholder="Nama universitas/perusahaan" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
        </div>
      </div>
      <!-- Data Identitas -->
      <div style="background:#fff;border-radius:12px;padding:18px 18px 8px 18px;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-weight:600;color:#7b5ae6;margin-bottom:10px;">Data Identitas</div>
        <div style="display:flex;flex-wrap:wrap;gap:16px 24px;">
          <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
            <label>Nomor KTP <span style="color:#e65a5a">*</span></label>
            <input name="no_ktp" required placeholder="16 digit nomor KTP" maxlength="16" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
          <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
            <label>Nomor HP <span style="color:#e65a5a">*</span></label>
            <input name="no_hp" required placeholder="08xxxxxxxxxx" maxlength="15" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
          <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
            <label>Email</label>
            <input name="email" type="email" placeholder="nama@email.com" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
          <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
            <label>Kontak Darurat</label>
            <input name="kontak_darurat" placeholder="Nomor HP keluarga/kerabat" maxlength="15" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
        </div>
      </div>
      <!-- Alamat Asal -->
      <div style="background:#fff;border-radius:12px;padding:18px 18px 8px 18px;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-weight:600;color:#7b5ae6;margin-bottom:10px;">Alamat Asal</div>
        <div style="display:flex;flex-wrap:wrap;gap:16px 24px;">
          <div style="flex:2 1 320px;min-width:220px;display:flex;flex-direction:column;gap:6px;">
            <label>Alamat Lengkap</label>
            <textarea name="alamat_lengkap" rows="2" placeholder="Jalan, RT/RW, Kelurahan/Desa, Kecamatan" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;"></textarea>
          </div>
          <div style="flex:1 1 120px;min-width:120px;display:flex;flex-direction:column;gap:6px;">
            <label>Kota/Kabupaten</label>
            <input name="kota" placeholder="Contoh: Bandung" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
          <div style="flex:1 1 120px;min-width:120px;display:flex;flex-direction:column;gap:6px;">
            <label>Provinsi</label>
            <input name="provinsi" placeholder="Contoh: Jawa Barat" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
          <div style="flex:1 1 80px;min-width:80px;display:flex;flex-direction:column;gap:6px;">
            <label>Kode Pos</label>
            <input name="kode_pos" placeholder="12345" maxlength="8" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
        </div>
      </div>
      <!-- Data Penempatan Kost -->
      <div style="background:#fff;border-radius:12px;padding:18px 18px 8px 18px;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-weight:600;color:#7b5ae6;margin-bottom:10px;">Data Penempatan Kost</div>
        <div style="display:flex;flex-wrap:wrap;gap:16px 24px;">
          <div style="flex:1 1 120px;min-width:120px;display:flex;flex-direction:column;gap:6px;">
            <label>Tanggal Masuk <span style="color:#e65a5a">*</span></label>
            <input type="date" name="tgl_masuk" required style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
          <div style="flex:1 1 120px;min-width:120px;display:flex;flex-direction:column;gap:6px;">
            <label>Status Penghuni</label>
            <select name="status_penghuni" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
              <option value="">Pilih status</option>
              <option value="Aktif">Aktif</option>
              <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
              <option value="Keluar">Keluar</option>
            </select>
          </div>
          <div style="flex:2 1 320px;min-width:220px;display:flex;flex-direction:column;gap:6px;">
            <label>Catatan Tambahan</label>
            <textarea name="catatan" rows="2" placeholder="Catatan khusus mengenai penghuni (opsional)" style="padding:10px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;"></textarea>
          </div>
        </div>
      </div>
      <div style="width:100%;display:flex;justify-content:flex-end;margin-top:8px;">
        <div style="display:inline-flex;gap:8px;">
          <button type="button" id="batalTambahPenghuni" class="btn-batal" style="display:flex;align-items:center;gap:4px;padding:3px 14px !important;font-weight:500;font-size:14px !important;border:1.2px solid #f2d6d6;background:#f9f9fb;color:#e65a5a;border-radius:4px;box-shadow:none;transition:all .15s;min-width:0;height:auto !important;min-height:0 !important;line-height:1 !important;">
            <span style="font-size:1em;">❌</span> Batal
          </button>
          <button type="submit" class="btn-simpan" style="display:flex;align-items:center;gap:4px;padding:3px 14px !important;font-weight:600;font-size:14px !important;border:none;background:linear-gradient(90deg,#7b5ae6,#6a7be6);color:#fff;border-radius:4px;box-shadow:none;transition:all .15s;min-width:0;height:auto !important;min-height:0 !important;line-height:1 !important;">
            <span style="font-size:1em;">💾</span> Simpan Data
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- MODAL IMPORT DATA PENGHUNI -->
<div id="modalImportPenghuni" style="display:none;position:fixed;z-index:1100;left:0;top:0;width:100vw;height:100vh;background:rgba(44,36,24,0.18);align-items:center;justify-content:center;">
  <div style="background:#fcf6ec;border-radius:18px;box-shadow:0 4px 32px #e6b87a44;padding:0;min-width:340px;max-width:760px;width:97vw;position:relative;overflow-y:auto;max-height:97vh;display:flex;flex-direction:column;align-items:center;">
    <div style="width:100%;display:flex;align-items:center;justify-content:space-between;padding:24px 40px 0 40px;box-sizing:border-box;">
      <div style="display:flex;align-items:center;gap:12px;">
        <span style="font-size:1.7em;">📁</span>
        <div>
          <div style="font-size:1.25em;font-weight:700;color:#7b5ae6;">Import Data Penghuni</div>
          <div style="font-size:1em;color:#888;">Import data penghuni secara massal dari file Excel atau CSV</div>
        </div>
      </div>
      <button id="closeModalImport" style="background:none;border:none;font-size:1.5em;color:#b89c7a;cursor:pointer;">&times;</button>
    </div>
    <div style="width:100%;padding:0 40px 0 40px;box-sizing:border-box;margin-top:18px;">
      <!-- Stepper -->
      <div style="display:flex;align-items:center;justify-content:center;gap:32px;margin-bottom:18px;">
        <div style="display:flex;flex-direction:column;align-items:center;">
          <div style="width:32px;height:32px;border-radius:50%;background:#7b5ae6;color:#fff;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:1.1em;">1</div>
          <div style="font-size:0.98em;margin-top:4px;color:#7b5ae6;font-weight:600;">Upload File</div>
        </div>
        <div style="width:32px;height:2px;background:#e6b87a44;margin-top:15px;"></div>
        <div style="display:flex;flex-direction:column;align-items:center;">
          <div style="width:32px;height:32px;border-radius:50%;background:#e6e6e6;color:#aaa;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:1.1em;">2</div>
          <div style="font-size:0.98em;margin-top:4px;color:#aaa;font-weight:600;">Preview Data</div>
        </div>
        <div style="width:32px;height:2px;background:#e6b87a44;margin-top:15px;"></div>
        <div style="display:flex;flex-direction:column;align-items:center;">
          <div style="width:32px;height:32px;border-radius:50%;background:#e6e6e6;color:#aaa;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:1.1em;">3</div>
          <div style="font-size:0.98em;margin-top:4px;color:#aaa;font-weight:600;">Import</div>
        </div>
      </div>
      <!-- Step 1: Upload File -->
      <div style="margin-bottom:18px;">
        <div style="font-weight:600;font-size:1.1em;margin-bottom:8px;">Langkah 1: Upload File Data</div>
        <div style="background:#f7ecd9;border-radius:12px;padding:18px 18px 12px 18px;margin-bottom:18px;">
          <div style="font-weight:600;color:#7b5ae6;margin-bottom:4px;">📄 Download Template</div>
          <div style="font-size:0.98em;color:#888;margin-bottom:10px;">Download template Excel untuk memastikan format data sesuai dengan sistem. Template sudah berisi contoh data dan kolom yang diperlukan.</div>
          <a href="#" style="display:inline-flex;align-items:center;gap:7px;padding:7px 18px;font-weight:600;font-size:1em;border:none;background:#f5f8ff;color:#7b5ae6;border-radius:8px;box-shadow:0 2px 8px #e6b87a22;text-decoration:none;">
            <span style="font-size:1.2em;">⬇️</span> Download Template Excel
          </a>
        </div>
        <div style="background:#f5f8ff;border:2px dashed #7b5ae6;border-radius:12px;padding:32px 0 24px 0;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:10px;">
          <span style="font-size:2.5em;">📁</span>
          <div style="font-weight:600;font-size:1.1em;">Klik untuk upload file atau drag & drop</div>
          <div style="font-size:0.98em;color:#888;">Mendukung format: .xlsx, .xls, .csv (Maksimal 10MB)</div>
          <button style="margin-top:8px;display:inline-flex;align-items:center;gap:7px;padding:8px 22px;font-weight:600;font-size:1em;border:none;background:linear-gradient(90deg,#7b5ae6,#6a7be6);color:#fff;border-radius:8px;box-shadow:0 2px 8px #7b5ae622;transition:all .15s;">
            <span style="font-size:1.2em;">📤</span> Pilih File
          </button>
        </div>
      </div>
    </div>
    <div style="width:100%;display:flex;justify-content:flex-end;padding:24px 40px 24px 40px;box-sizing:border-box;">
      <div style="display:inline-flex;gap:10px;">
        <button type="button" id="batalImportPenghuni" style="display:flex;align-items:center;gap:4px;padding:5px 16px;font-weight:500;font-size:1em;border:1.2px solid #f2d6d6;background:#fff;color:#e65a5a;border-radius:6px;box-shadow:none;transition:all .15s;min-width:0;height:auto;">
          <span style="font-size:1em;">❌</span> Batal
        </button>
        <button type="button" style="display:flex;align-items:center;gap:4px;padding:5px 18px;font-weight:600;font-size:1em;border:none;background:linear-gradient(90deg,#7b5ae6,#6a7be6);color:#fff;border-radius:6px;box-shadow:none;transition:all .15s;min-width:0;height:auto;">
          <span style="font-size:1em;">➡️</span> Lanjut
        </button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL EXPORT DATA PENGHUNI -->
<div id="modalExportPenghuni" style="display:none;position:fixed;z-index:1100;left:0;top:0;width:100vw;height:100vh;background:rgba(44,36,24,0.18);align-items:center;justify-content:center;">
  <div style="background:#fcf6ec;border-radius:18px;box-shadow:0 4px 32px #e6b87a44;padding:0;min-width:340px;max-width:760px;width:97vw;position:relative;overflow-y:auto;max-height:97vh;display:flex;flex-direction:column;align-items:center;">
    <div style="width:100%;display:flex;align-items:center;justify-content:space-between;padding:24px 40px 0 40px;box-sizing:border-box;">
      <div style="display:flex;align-items:center;gap:12px;">
        <span style="font-size:1.7em;">📊</span>
        <div>
          <div style="font-size:1.25em;font-weight:700;color:#7b5ae6;">Export Data Penghuni</div>
          <div style="font-size:1em;color:#888;">Export data penghuni sesuai dengan format dan filter yang diinginkan</div>
        </div>
      </div>
      <button id="closeModalExport" style="background:none;border:none;font-size:1.5em;color:#b89c7a;cursor:pointer;">&times;</button>
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
      <!-- Filter Data -->
      <div style="font-weight:600;font-size:1.1em;margin-bottom:8px;">🔍 Filter Data</div>
      <div style="display:flex;flex-wrap:wrap;gap:18px 24px;margin-bottom:18px;">
        <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
          <label>Status:</label>
          <select style="padding:8px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
            <option>Semua Status</option>
            <option>Aktif</option>
            <option>Menunggu Konfirmasi</option>
            <option>Keluar</option>
          </select>
        </div>
        <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
          <label>Jenis Kelamin:</label>
          <select style="padding:8px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
            <option>Semua</option>
            <option>Laki-laki</option>
            <option>Perempuan</option>
          </select>
        </div>
        <div style="flex:2 1 320px;min-width:220px;display:flex;flex-direction:column;gap:6px;">
          <label>Tanggal Masuk:</label>
          <div style="display:flex;gap:8px;align-items:center;">
            <input type="date" value="2024-01-01" style="padding:8px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
            <span style="color:#888;">s/d</span>
            <input type="date" value="2025-07-11" style="padding:8px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
          </div>
        </div>
        <div style="flex:1 1 180px;min-width:160px;display:flex;flex-direction:column;gap:6px;">
          <label>Urutkan:</label>
          <select style="padding:8px 12px;border-radius:7px;border:1.5px solid #e6b87a;background:#fff;">
            <option>Nama (A-Z)</option>
            <option>Nama (Z-A)</option>
            <option>Tanggal Masuk (Terbaru)</option>
            <option>Tanggal Masuk (Terlama)</option>
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
        <label><input type="checkbox" checked style="accent-color:#7b5ae6;margin-right:7px;">Nama Lengkap</label>
        <label><input type="checkbox" checked style="accent-color:#7b5ae6;margin-right:7px;">Jenis Kelamin</label>
        <label><input type="checkbox" checked style="accent-color:#7b5ae6;margin-right:7px;">Nomor KTP</label>
        <label><input type="checkbox" checked style="accent-color:#7b5ae6;margin-right:7px;">Nomor HP</label>
        <label><input type="checkbox" style="accent-color:#7b5ae6;margin-right:7px;">Email</label>
        <label><input type="checkbox" style="accent-color:#7b5ae6;margin-right:7px;">Tanggal Lahir</label>
        <label><input type="checkbox" style="accent-color:#7b5ae6;margin-right:7px;">Tempat Lahir</label>
        <label><input type="checkbox" style="accent-color:#7b5ae6;margin-right:7px;">Agama</label>
        <label><input type="checkbox" style="accent-color:#7b5ae6;margin-right:7px;">Pekerjaan</label>
        <label><input type="checkbox" style="accent-color:#7b5ae6;margin-right:7px;">Alamat</label>
        <label><input type="checkbox" checked style="accent-color:#7b5ae6;margin-right:7px;">Tanggal Masuk</label>
        <label><input type="checkbox" checked style="accent-color:#7b5ae6;margin-right:7px;">Status</label>
      </div>
      <!-- Ringkasan Export -->
      <div style="background:#f7f7fa;border-radius:10px;padding:18px 18px 10px 18px;margin-bottom:18px;display:flex;align-items:center;gap:32px;">
        <div style="font-weight:600;color:#7b5ae6;font-size:1.1em;">📄 Ringkasan Export</div>
        <div style="flex:1;display:flex;gap:24px;align-items:center;justify-content:flex-end;">
          <div style="text-align:center;">
            <div style="font-size:1.3em;font-weight:700;">12</div>
            <div style="font-size:0.98em;color:#888;">TOTAL RECORDS</div>
          </div>
          <div style="text-align:center;">
            <div style="font-size:1.3em;font-weight:700;">6</div>
            <div style="font-size:0.98em;color:#888;">KOLOM DIPILIH</div>
          </div>
          <div style="text-align:center;">
            <div style="font-size:1.3em;font-weight:700;">XLSX</div>
            <div style="font-size:0.98em;color:#888;">FORMAT FILE</div>
          </div>
        </div>
      </div>
    </div>
    <div style="width:100%;display:flex;justify-content:flex-end;padding:24px 40px 24px 40px;box-sizing:border-box;">
      <div style="display:inline-flex;gap:10px;">
        <button type="button" id="batalExportPenghuni" style="display:flex;align-items:center;gap:4px;padding:5px 16px;font-weight:500;font-size:1em;border:1.2px solid #f2d6d6;background:#fff;color:#e65a5a;border-radius:6px;box-shadow:none;transition:all .15s;min-width:0;height:auto;">
          <span style="font-size:1em;">❌</span> Batal
        </button>
        <button type="button" style="display:flex;align-items:center;gap:4px;padding:5px 18px;font-weight:600;font-size:1em;border:none;background:linear-gradient(90deg,#7b5ae6,#6a7be6);color:#fff;border-radius:6px;box-shadow:none;transition:all .15s;min-width:0;height:auto;">
          <span style="font-size:1em;">📤</span> Mulai Export
        </button>
      </div>
    </div>
  </div>
</div>
<script>
// Modal logic
const btnTambah = document.getElementById('btnTambahPenghuni');
const modal = document.getElementById('modalTambahPenghuni');
const closeModal = document.getElementById('closeModalTambah');
const batalBtn = document.getElementById('batalTambahPenghuni');
const fotoInput = document.getElementById('foto_penghuni');
const fotoPreview = document.getElementById('fotoPreview');
if(btnTambah && modal && closeModal && batalBtn) {
  btnTambah.addEventListener('click', function(e) {
    e.preventDefault();
    modal.style.display = 'flex';
  });
  closeModal.addEventListener('click', function() {
    modal.style.display = 'none';
  });
  batalBtn.addEventListener('click', function() {
    modal.style.display = 'none';
  });
  window.addEventListener('click', function(e) {
    if(e.target === modal) modal.style.display = 'none';
  });
}
if(fotoInput && fotoPreview) {
  fotoInput.addEventListener('change', function(e) {
    if(this.files && this.files[0]) {
      const reader = new FileReader();
      reader.onload = function(ev) {
        fotoPreview.innerHTML = `<img src='${ev.target.result}' style='width:100%;height:100%;object-fit:cover;border-radius:50%;'/>`;
      };
      reader.readAsDataURL(this.files[0]);
    } else {
      fotoPreview.innerHTML = '📷';
    }
  });
  document.querySelector('label[for="foto_penghuni"]').onclick = function() {
    fotoInput.click();
  };
}
// Modal Import Data logic
const btnImport = document.getElementById('btnImportData');
const modalImport = document.getElementById('modalImportPenghuni');
const closeModalImport = document.getElementById('closeModalImport');
const batalImportBtn = document.getElementById('batalImportPenghuni');

function openImportModal(e) {
  if(e) e.preventDefault();
  if(modalImport) modalImport.style.display = 'flex';
}
if(btnImport) btnImport.onclick = openImportModal;
if(closeModalImport) closeModalImport.onclick = function(){modalImport.style.display='none';};
if(batalImportBtn) batalImportBtn.onclick = function(){modalImport.style.display='none';};
window.addEventListener('click', function(e) {
  if(e.target === modalImport) modalImport.style.display = 'none';
});
// Modal Export Data logic
const btnExport = document.getElementById('btnExportData');
const modalExport = document.getElementById('modalExportPenghuni');
const closeModalExport = document.getElementById('closeModalExport');
const batalExportBtn = document.getElementById('batalExportPenghuni');
function openExportModal(e) {
  if(e) e.preventDefault();
  if(modalExport) modalExport.style.display = 'flex';
}
if(btnExport) btnExport.onclick = openExportModal;
if(closeModalExport) closeModalExport.onclick = function(){modalExport.style.display='none';};
if(batalExportBtn) batalExportBtn.onclick = function(){modalExport.style.display='none';};
window.addEventListener('click', function(e) {
  if(e.target === modalExport) modalExport.style.display = 'none';
});
</script>
<style>
#modalTambahPenghuni form > div {margin-bottom:0;}
#modalTambahPenghuni form > div:last-child {margin-bottom:0;}
@media (min-width: 600px) {
  #modalTambahPenghuni form > div { flex:1 1 180px; min-width:160px; }
  #modalTambahPenghuni form > .alamat, #modalTambahPenghuni form > .catatan { flex:2 1 320px; min-width:220px; }
  #modalTambahPenghuni form > div {margin-bottom:0;}
}
@media (max-width: 599px) {
  #modalTambahPenghuni form { flex-direction: column; }
  #modalTambahPenghuni form > div { width:100%; margin-bottom:0;}
}
.btn-batal:hover {background:#fff0f0;border-color:#e65a5a;color:#e65a5a;}
.btn-simpan:hover {background:linear-gradient(90deg,#6a7be6,#7b5ae6);box-shadow:0 4px 16px #7b5ae633;}
</style>
<?php if (isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])): 
    $edit = getPenghuniById($_GET['id']); ?>
    <h3>Edit Penghuni</h3>
    <form method="post" action="?page=penghuni&action=update&id=<?= $edit['id'] ?>">
        Nama: <input name="nama" value="<?= $edit['nama'] ?>" required><br>
        No KTP: <input name="no_ktp" value="<?= $edit['no_ktp'] ?>" required><br>
        No HP: <input name="no_hp" value="<?= $edit['no_hp'] ?>" required><br>
        Tgl Masuk: <input type="date" name="tgl_masuk" value="<?= $edit['tgl_masuk'] ?>" required><br>
        Tgl Keluar: <input type="date" name="tgl_keluar" value="<?= $edit['tgl_keluar'] ?>"><br>
        <button type="submit">Update</button>
    </form>
<?php endif; ?> 