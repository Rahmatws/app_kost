<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:18px;">
    <h2 style="margin:0;">Pembayaran</h2>
    <div style="font-weight:500;color:#888;">Dashboard / Pembayaran</div>
</div>
<div style="display:flex;gap:18px;margin-bottom:24px;">
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:180px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.3em;font-weight:bold;">Rp 45,250,000</div>
        <div style="color:#8d7b5a;">Total Pembayaran</div>
    </div>
    <div style="background:#f5fff8;border-radius:12px;padding:18px 32px;min-width:180px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.3em;font-weight:bold;color:#3bb273;">Rp 38,900,000</div>
        <div style="color:#8d7b5a;">Terverifikasi</div>
    </div>
    <div style="background:#fffdf5;border-radius:12px;padding:18px 32px;min-width:180px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.3em;font-weight:bold;color:#ffb347;">Rp 4,850,000</div>
        <div style="color:#8d7b5a;">Menunggu Verifikasi</div>
    </div>
    <div style="background:#fff8f8;border-radius:12px;padding:18px 32px;min-width:180px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.3em;font-weight:bold;color:#e65a5a;">Rp 1,500,000</div>
        <div style="color:#8d7b5a;">Ditolak</div>
    </div>
</div>
<div style="display:flex;align-items:center;gap:12px;margin-bottom:18px;">
    <button id="btnInputPembayaranManual" style="background:#3bb273;color:#fff;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Input Pembayaran Manual</button>
    <button id="btnLaporanKeuangan" style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Laporan Keuangan</button>
    <button id="btnExportPembayaran" style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Export Data</button>
    <button id="btnKwitansiPembayaran" style="background:#f5f8ff;color:#e67e22;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Buat Kwitansi</button>
</div>
<div style="display:flex;align-items:center;gap:12px;margin-bottom:18px;">
    <span style="color:#888;">Status:</span>
    <select id="filterStatusPembayaran" style="padding:8px 12px;border-radius:6px;border:1.5px solid #e6b87a;">
        <option value="all">Semua Status</option>
        <option value="terverifikasi">Terverifikasi</option>
        <option value="menunggu">Menunggu Verifikasi</option>
        <option value="ditolak">Ditolak</option>
    </select>
    <span style="color:#888;">Metode:</span>
    <select id="filterMetodePembayaran" style="padding:8px 12px;border-radius:6px;border:1.5px solid #e6b87a;">
        <option value="all">Semua Metode</option>
        <option value="transfer">Transfer Bank</option>
        <option value="gopay">GoPay</option>
        <option value="cash">Cash</option>
        <option value="qris">QRIS</option>
    </select>
    <span style="color:#888;">Periode:</span>
    <input type="date" value="2024-06-01" style="padding:8px 12px;border-radius:6px;border:1.5px solid #e6b87a;">
    <span style="color:#888;">s/d</span>
    <input type="date" value="2024-06-30" style="padding:8px 12px;border-radius:6px;border:1.5px solid #e6b87a;">
</div>
<div id="pembayaranCardContainer" style="display:flex;flex-wrap:wrap;gap:24px;">
    <!-- Card Pembayaran Dummy -->
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:340px;max-width:360px;flex:1 1 340px;display:flex;flex-direction:column;gap:8px;border:2px solid #3bb273;">
        <div style="font-weight:700;">PAY-2024-0233</div>
        <div style="color:#888;font-size:0.98em;">28 Juni 2024, 10:15</div>
        <span style="color:#3bb273;font-weight:600;background:#eafbe6;padding:4px 14px;border-radius:8px;align-self:flex-end;">TERVERIFIKASI</span>
        <div style="background:#f5f8ff;padding:10px 14px;border-radius:8px;display:flex;align-items:center;gap:10px;margin:8px 0;">
            <div style="background:#e6e6ff;color:#7b5ae6;width:38px;height:38px;display:flex;align-items:center;justify-content:center;border-radius:50%;font-weight:700;font-size:1.1em;">AR</div>
            <div>
                <div style="font-weight:600;">Ahmad Rizki</div>
                <div style="color:#3b7be6;font-size:0.98em;">Kamar 101 - VIP</div>
            </div>
        </div>
        <div>Invoice <span style="float:right;">INV-2024-0156</span></div>
        <div>Periode <span style="float:right;">Juni 2024</span></div>
        <div style="font-weight:600;">Jumlah Bayar <span style="float:right;color:#3b7be6;">Rp 1,415,000</span></div>
        <div style="margin:8px 0 0 0;">GoPay <span style="color:#888;">GP789012345</span></div>
        <div style="background:#f5f8ff;padding:10px 14px;border-radius:8px;margin-top:8px;font-size:0.97em;color:#3bb273;">
            <b>CATATAN VERIFIKASI</b><br>Pembayaran telah diverifikasi dan sesuai dengan tagihan. Dikonfirmasi pada 28 Juni 2024 pukul 11:30.
        </div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#3b7be6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#a259e6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Kwitansi</button>
            <button style="background:#888;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Invoice</button>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:340px;max-width:360px;flex:1 1 340px;display:flex;flex-direction:column;gap:8px;border:2px solid #ffb347;">
        <div style="font-weight:700;">PAY-2024-0234</div>
        <div style="color:#888;font-size:0.98em;">29 Juni 2024, 14:25</div>
        <span style="color:#ffb347;font-weight:600;background:#fff5e0;padding:4px 14px;border-radius:8px;align-self:flex-end;">MENUNGGU VERIFIKASI</span>
        <div style="background:#f5f8ff;padding:10px 14px;border-radius:8px;display:flex;align-items:center;gap:10px;margin:8px 0;">
            <div style="background:#e6e6ff;color:#7b5ae6;width:38px;height:38px;display:flex;align-items:center;justify-content:center;border-radius:50%;font-weight:700;font-size:1.1em;">SN</div>
            <div>
                <div style="font-weight:600;">Siti Nurhaliza</div>
                <div style="color:#3b7be6;font-size:0.98em;">Kamar 102 - Standar</div>
            </div>
        </div>
        <div>Invoice <span style="float:right;">INV-2024-0157</span></div>
        <div>Periode <span style="float:right;">Juni 2024</span></div>
        <div style="font-weight:600;">Jumlah Bayar <span style="float:right;color:#3b7be6;">Rp 810,000</span></div>
        <div style="margin:8px 0 0 0;">Transfer BCA <span style="color:#888;">TRX123456789</span></div>
        <div style="background:#f5f8ff;padding:10px 14px;border-radius:8px;margin-top:8px;font-size:0.97em;color:#888;">
            Bukti Transfer<br>
            <span style="display:flex;align-items:center;gap:8px;margin-top:6px;"><span style="font-size:1.3em;">📷</span> transfer bukti 29062024.jpg (2.3 MB)</span>
        </div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#3b7be6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
        </div>
    </div>
    <!-- Tambahan 4 kartu pembayaran dummy -->
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:340px;max-width:360px;flex:1 1 340px;display:flex;flex-direction:column;gap:8px;border:2px solid #e65a5a;">
        <div style="font-weight:700;">PAY-2024-0235</div>
        <div style="color:#888;font-size:0.98em;">27 Juni 2024, 09:00</div>
        <span style="color:#e65a5a;font-weight:600;background:#ffeaea;padding:4px 14px;border-radius:8px;align-self:flex-end;">GAGAL</span>
        <div style="background:#f5f8ff;padding:10px 14px;border-radius:8px;display:flex;align-items:center;gap:10px;margin:8px 0;">
            <div style="background:#e6e6ff;color:#7b5ae6;width:38px;height:38px;display:flex;align-items:center;justify-content:center;border-radius:50%;font-weight:700;font-size:1.1em;">BS</div>
            <div>
                <div style="font-weight:600;">Budi Santoso</div>
                <div style="color:#3b7be6;font-size:0.98em;">Kamar 103 - Deluxe</div>
            </div>
        </div>
        <div>Invoice <span style="float:right;">INV-2024-0158</span></div>
        <div>Periode <span style="float:right;">Juni 2024</span></div>
        <div style="font-weight:600;">Jumlah Bayar <span style="float:right;color:#3b7be6;">Rp 900,000</span></div>
        <div style="margin:8px 0 0 0;">Transfer Mandiri <span style="color:#888;">TRX987654321</span></div>
        <div style="background:#ffeaea;padding:10px 14px;border-radius:8px;margin-top:8px;font-size:0.97em;color:#e65a5a;">
            <b>CATATAN</b><br>Pembayaran gagal diverifikasi. Silakan ulangi pembayaran.
        </div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#3b7be6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:340px;max-width:360px;flex:1 1 340px;display:flex;flex-direction:column;gap:8px;border:2px solid #ffb347;">
        <div style="font-weight:700;">PAY-2024-0236</div>
        <div style="color:#888;font-size:0.98em;">26 Juni 2024, 16:45</div>
        <span style="color:#ffb347;font-weight:600;background:#fff5e0;padding:4px 14px;border-radius:8px;align-self:flex-end;">TELAT</span>
        <div style="background:#f5f8ff;padding:10px 14px;border-radius:8px;display:flex;align-items:center;gap:10px;margin:8px 0;">
            <div style="background:#e6e6ff;color:#7b5ae6;width:38px;height:38px;display:flex;align-items:center;justify-content:center;border-radius:50%;font-weight:700;font-size:1.1em;">BR</div>
            <div>
                <div style="font-weight:600;">Budi Raharja</div>
                <div style="color:#3b7be6;font-size:0.98em;">Kamar 104 - Standar</div>
            </div>
        </div>
        <div>Invoice <span style="float:right;">INV-2024-0159</span></div>
        <div>Periode <span style="float:right;">Juni 2024</span></div>
        <div style="font-weight:600;">Jumlah Bayar <span style="float:right;color:#3b7be6;">Rp 850,000</span></div>
        <div style="margin:8px 0 0 0;">Transfer BRI <span style="color:#888;">TRX246813579</span></div>
        <div style="background:#fff5e0;padding:10px 14px;border-radius:8px;margin-top:8px;font-size:0.97em;color:#ffb347;">
            <b>CATATAN</b><br>Pembayaran diterima namun melewati batas waktu jatuh tempo.
        </div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#3b7be6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:340px;max-width:360px;flex:1 1 340px;display:flex;flex-direction:column;gap:8px;border:2px solid #e65a5a;">
        <div style="font-weight:700;">PAY-2024-0237</div>
        <div style="color:#888;font-size:0.98em;">25 Juni 2024, 11:20</div>
        <span style="color:#e65a5a;font-weight:600;background:#ffeaea;padding:4px 14px;border-radius:8px;align-self:flex-end;">DIBATALKAN</span>
        <div style="background:#f5f8ff;padding:10px 14px;border-radius:8px;display:flex;align-items:center;gap:10px;margin:8px 0;">
            <div style="background:#e6e6ff;color:#7b5ae6;width:38px;height:38px;display:flex;align-items:center;justify-content:center;border-radius:50%;font-weight:700;font-size:1.1em;">MS</div>
            <div>
                <div style="font-weight:600;">Maya Sari</div>
                <div style="color:#3b7be6;font-size:0.98em;">Kamar 106 - VIP</div>
            </div>
        </div>
        <div>Invoice <span style="float:right;">INV-2024-0160</span></div>
        <div>Periode <span style="float:right;">Juni 2024</span></div>
        <div style="font-weight:600;">Jumlah Bayar <span style="float:right;color:#3b7be6;">Rp 1,300,000</span></div>
        <div style="margin:8px 0 0 0;">Transfer BCA <span style="color:#888;">TRX135792468</span></div>
        <div style="background:#ffeaea;padding:10px 14px;border-radius:8px;margin-top:8px;font-size:0.97em;color:#e65a5a;">
            <b>CATATAN</b><br>Pembayaran dibatalkan oleh sistem karena tidak ada konfirmasi.
        </div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#3b7be6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
        </div>
    </div>
</div>
<!-- Modal Input Pembayaran Manual (Statis/Simulasi) -->
<div id="modalInputPembayaranManual" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.18);align-items:center;justify-content:center;">
  <div id="panelInputPembayaranManual" style="background:#fff;border-radius:12px;max-width:540px;width:96vw;padding:0 0 18px 0;box-shadow:0 8px 32px #0002;position:relative;overflow-y:auto;max-height:90vh;">
    <div style="padding:20px 32px 0 32px;display:flex;align-items:center;justify-content:space-between;">
      <div style="font-size:1.18em;font-weight:600;">Input Pembayaran Manual</div>
      <button id="closeInputPembayaranManual" style="background:none;border:none;font-size:1.5em;line-height:1;color:#888;cursor:pointer;">&times;</button>
    </div>
    <div style="height:2px;background:linear-gradient(90deg,#ffe6a0 0,#fff 100%);margin:12px 0 18px 0;"></div>
    <div style="background:#eaffea;border-radius:8px;padding:14px 18px;margin:0 32px 18px 32px;display:flex;align-items:center;gap:12px;">
      <span style="font-size:1.3em;color:#3bb273;">💳</span>
      <div>
        <b>Input Pembayaran Manual</b><br>
        <span style="color:#3bb273;font-size:0.98em;">Catat pembayaran yang diterima secara manual dari penghuni untuk tagihan yang belum dibayar.</span>
      </div>
    </div>
    <form onsubmit="return false;" style="padding:0 32px;display:flex;flex-direction:column;gap:14px;">
      <div style="font-weight:600;margin-bottom:2px;">Pilih Tagihan yang Dibayar *</div>
      <div style="display:flex;flex-direction:column;gap:12px;">
        <div style="border:1.5px solid #eee;border-radius:8px;padding:14px 18px;display:flex;align-items:center;justify-content:space-between;cursor:pointer;">
          <div>
            <div style="font-weight:600;">INV-2024-0156</div>
            <div style="color:#888;font-size:0.98em;">Budi Santoso - Juni 2024</div>
          </div>
          <div style="text-align:right;">
            <div style="color:#3b7be6;font-weight:700;font-size:1.1em;">Rp 1.080.000</div>
            <div style="color:#888;font-size:0.97em;">Belum dibayar</div>
          </div>
        </div>
        <div style="border:1.5px solid #eee;border-radius:8px;padding:14px 18px;display:flex;align-items:center;justify-content:space-between;cursor:pointer;">
          <div>
            <div style="font-weight:600;">INV-2024-0157</div>
            <div style="color:#888;font-size:0.98em;">Ahmad Rizki - Juni 2024</div>
          </div>
          <div style="text-align:right;">
            <div style="color:#3b7be6;font-weight:700;font-size:1.1em;">Rp 1.415.000</div>
            <div style="color:#888;font-size:0.97em;">Belum dibayar</div>
          </div>
        </div>
        <div style="border:1.5px solid #eee;border-radius:8px;padding:14px 18px;display:flex;align-items:center;justify-content:space-between;cursor:pointer;">
          <div>
            <div style="font-weight:600;">INV-2024-0158</div>
            <div style="color:#888;font-size:0.98em;">Siti Nurhaliza - Juli 2024</div>
          </div>
          <div style="text-align:right;">
            <div style="color:#3b7be6;font-weight:700;font-size:1.1em;">Rp 810.000</div>
            <div style="color:#888;font-size:0.97em;">Belum dibayar</div>
          </div>
        </div>
      </div>
      <div style="display:flex;gap:10px;margin-top:18px;">
        <button type="button" id="batalInputPembayaranManual" style="flex:1;background:#fff;border:1.5px solid #cfd8dc;color:#888;font-weight:600;padding:10px 0;border-radius:7px;">Batal</button>
        <button type="submit" style="flex:2;background:#3bb273;color:#fff;font-weight:600;padding:10px 0;border-radius:7px;border:none;">Simpan Pembayaran</button>
      </div>
    </form>
  </div>
</div>
<!-- Modal Laporan Keuangan (Statis/Simulasi) -->
<div id="modalLaporanKeuangan" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.18);align-items:center;justify-content:center;">
  <div id="panelLaporanKeuangan" style="background:#fff;border-radius:12px;max-width:550px;width:96vw;padding:0 0 18px 0;box-shadow:0 8px 32px #0002;position:relative;overflow-y:auto;max-height:95vh;">
    <div style="padding:20px 24px 0 24px;display:flex;align-items:center;justify-content:space-between;">
      <div style="font-size:1.18em;font-weight:600;">Generate Laporan Keuangan</div>
      <button id="closeLaporanKeuangan" style="background:none;border:none;font-size:1.5em;line-height:1;color:#888;cursor:pointer;">&times;</button>
    </div>
    <div style="height:2px;background:linear-gradient(90deg,#ffe6a0 0,#fff 100%);margin:12px 0 18px 0;"></div>
    <form onsubmit="return false;" style="padding:0 24px;display:flex;flex-direction:column;gap:14px;">
      <div style="font-weight:600;margin-bottom:2px;">Jenis Laporan Keuangan</div>
      <div style="display:flex;flex-direction:column;gap:10px;margin-bottom:8px;">
        <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
          <input type="radio" name="jenis_laporan_keuangan" value="cashflow" checked style="accent-color:#3bb273;margin-top:2px;">
          <span style="font-size:1.3em;">💸</span>
          <div>
            <div style="font-weight:600;">Cash Flow Statement</div>
            <div style="font-size:0.97em;color:#888;">Arus kas masuk dan keluar</div>
          </div>
        </label>
        <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
          <input type="radio" name="jenis_laporan_keuangan" value="income" style="accent-color:#7b5ae6;margin-top:2px;">
          <span style="font-size:1.3em;">📊</span>
          <div>
            <div style="font-weight:600;">Income Statement</div>
            <div style="font-size:0.97em;color:#888;">Laporan laba rugi periode</div>
          </div>
        </label>
        <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
          <input type="radio" name="jenis_laporan_keuangan" value="balance" style="accent-color:#3b7be6;margin-top:2px;">
          <span style="font-size:1.3em;">📋</span>
          <div>
            <div style="font-weight:600;">Balance Sheet</div>
            <div style="font-size:0.97em;color:#888;">Neraca aset dan kewajiban</div>
          </div>
        </label>
        <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
          <input type="radio" name="jenis_laporan_keuangan" value="revenue" style="accent-color:#ffb347;margin-top:2px;">
          <span style="font-size:1.3em;">📈</span>
          <div>
            <div style="font-weight:600;">Revenue Analysis</div>
            <div style="font-size:0.97em;color:#888;">Analisis pendapatan detail</div>
          </div>
        </label>
        <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
          <input type="radio" name="jenis_laporan_keuangan" value="summary" style="accent-color:#a259e6;margin-top:2px;">
          <span style="font-size:1.3em;">📑</span>
          <div>
            <div style="font-weight:600;">Financial Summary</div>
            <div style="font-size:0.97em;color:#888;">Ringkasan keuangan overall</div>
          </div>
        </label>
      </div>
      <div>
        <label style="font-weight:500;">Periode Laporan</label><br>
        <select style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>Bulanan</option>
          <option>Harian</option>
          <option>Mingguan</option>
          <option>Kuartalan</option>
          <option>Tahunan</option>
          <option>Custom Range</option>
        </select>
      </div>
      <div style="display:flex;gap:18px;">
        <div style="flex:1;">
          <label style="font-weight:500;">Dari Tanggal</label><br>
          <input type="text" placeholder="dd/mm/yyyy" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
        </div>
        <div style="flex:1;">
          <label style="font-weight:500;">Sampai Tanggal</label><br>
          <input type="text" placeholder="dd/mm/yyyy" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
        </div>
      </div>
      <div>
        <label style="font-weight:500;">Breakdown Data</label><br>
        <select style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>Per Kamar</option>
          <option>Per Kategori</option>
          <option>Per Periode</option>
        </select>
      </div>
      <div style="font-weight:600;margin-bottom:2px;">Format Output</div>
      <div style="display:flex;flex-direction:column;gap:10px;margin-bottom:8px;">
        <label style="display:flex;align-items:center;gap:10px;cursor:pointer;">
          <input type="radio" name="format_output" value="pdf" checked style="accent-color:#7b5ae6;">
          <span style="font-size:1.2em;">🗎</span> PDF (Recommended)
        </label>
        <label style="display:flex;align-items:center;gap:10px;cursor:pointer;">
          <input type="radio" name="format_output" value="excel" style="accent-color:#3b7be6;">
          <span style="font-size:1.2em;">📊</span> Excel Spreadsheet
        </label>
        <label style="display:flex;align-items:center;gap:10px;cursor:pointer;">
          <input type="radio" name="format_output" value="word" style="accent-color:#a259e6;">
          <span style="font-size:1.2em;">📄</span> Word Document
        </label>
      </div>
      <div style="font-weight:600;margin-bottom:2px;">Opsi Tambahan:</div>
      <div style="display:flex;flex-direction:column;gap:7px;margin-bottom:8px;">
        <label style="display:flex;align-items:center;gap:8px;cursor:pointer;">
          <input type="checkbox" checked style="accent-color:#7b5ae6;">
          Sertakan grafik dan visualisasi
        </label>
        <label style="display:flex;align-items:center;gap:8px;cursor:pointer;">
          <input type="checkbox" style="accent-color:#7b5ae6;">
          Include perhitungan pajak
        </label>
      </div>
      <div style="background:#f8f5ff;border:1.5px solid #a259e6;border-radius:8px;padding:14px 18px;margin:8px 0 0 0;">
        <div style="font-weight:600;color:#a259e6;margin-bottom:6px;">Preview Konten Laporan</div>
        <div style="font-size:0.98em;line-height:1.7;color:#a259e6;">
          <span style="display:flex;align-items:center;gap:7px;"><span style="font-size:1.1em;">💲</span> Total pendapatan & pengeluaran</span><br>
          <span style="display:flex;align-items:center;gap:7px;"><span style="font-size:1.1em;">📈</span> Trend and growth analysis</span><br>
          <span style="display:flex;align-items:center;gap:7px;"><span style="font-size:1.1em;">📊</span> Breakdown per kategori</span><br>
          <span style="display:flex;align-items:center;gap:7px;"><span style="font-size:1.1em;">📅</span> Perbandingan periode</span>
        </div>
      </div>
      <div style="display:flex;gap:10px;margin-top:18px;">
        <button type="button" id="batalLaporanKeuangan" style="flex:1;background:#fff;border:1.5px solid #cfd8dc;color:#888;font-weight:600;padding:10px 0;border-radius:7px;">Batal</button>
        <button type="submit" style="flex:2;background:#7b5ae6;color:#fff;font-weight:600;padding:10px 0;border-radius:7px;border:none;display:flex;align-items:center;justify-content:center;gap:8px;"><span style="font-size:1.2em;">📄</span> Generate Laporan</button>
      </div>
    </form>
  </div>
</div>
<!-- Modal Export Data Pembayaran (Statis/Simulasi) -->
<div id="modalExportPembayaran" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.18);align-items:center;justify-content:center;">
  <div id="panelExportPembayaran" style="background:#fff;border-radius:12px;max-width:480px;width:96vw;padding:0 0 18px 0;box-shadow:0 8px 32px #0002;position:relative;overflow-y:auto;max-height:95vh;">
    <div style="padding:20px 28px 0 28px;display:flex;align-items:center;justify-content:space-between;">
      <div style="font-size:1.18em;font-weight:600;">Export Data Pembayaran</div>
      <button id="closeExportPembayaran" style="background:none;border:none;font-size:1.5em;line-height:1;color:#888;cursor:pointer;">&times;</button>
    </div>
    <div style="height:2px;background:linear-gradient(90deg,#ffe6a0 0,#fff 100%);margin:12px 0 18px 0;"></div>
    <form onsubmit="return false;" style="padding:0 28px;display:flex;flex-direction:column;gap:14px;">
      <div style="font-weight:600;margin-bottom:2px;">Format Export</div>
      <div style="display:flex;flex-direction:column;gap:10px;margin-bottom:8px;">
        <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
          <input type="radio" name="format_export" value="excel" checked style="accent-color:#3b7be6;margin-top:2px;">
          <span style="font-size:1.3em;">📊</span>
          <div>
            <div style="font-weight:600;">Excel (.xlsx)</div>
            <div style="font-size:0.97em;color:#888;">Untuk analisis dan pivot table</div>
          </div>
        </label>
        <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
          <input type="radio" name="format_export" value="csv" style="accent-color:#3b7be6;margin-top:2px;">
          <span style="font-size:1.3em;">📄</span>
          <div>
            <div style="font-weight:600;">CSV (.csv)</div>
            <div style="font-size:0.97em;color:#888;">Import ke software accounting</div>
          </div>
        </label>
        <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
          <input type="radio" name="format_export" value="pdf" style="accent-color:#3b7be6;margin-top:2px;">
          <span style="font-size:1.3em;">🗎</span>
          <div>
            <div style="font-weight:600;">PDF (.pdf)</div>
            <div style="font-size:0.97em;color:#888;">Dokumentasi dan presentasi</div>
          </div>
        </label>
        <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
          <input type="radio" name="format_export" value="json" style="accent-color:#3b7be6;margin-top:2px;">
          <span style="font-size:1.3em;">🔗</span>
          <div>
            <div style="font-weight:600;">JSON (.json)</div>
            <div style="font-size:0.97em;color:#888;">Integrasi dengan API sistem</div>
          </div>
        </label>
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
      <div>
        <label style="font-weight:500;">Status Pembayaran</label><br>
        <select style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>Semua Status</option>
          <option>Terverifikasi</option>
          <option>Menunggu Verifikasi</option>
          <option>Telat</option>
          <option>Dibatalkan</option>
        </select>
      </div>
      <div>
        <label style="font-weight:500;">Metode Pembayaran</label><br>
        <select style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>Semua Metode</option>
          <option>Transfer BCA</option>
          <option>Transfer Mandiri</option>
          <option>Transfer BRI</option>
          <option>GoPay</option>
          <option>Cash</option>
        </select>
      </div>
      <div style="margin-bottom:2px;font-weight:600;">Opsi Export:</div>
      <div style="display:flex;flex-direction:column;gap:7px;margin-bottom:8px;">
        <label style="display:flex;align-items:center;gap:8px;cursor:pointer;">
          <input type="checkbox" checked style="accent-color:#3b7be6;">
          Sertakan detail lengkap pembayaran
        </label>
        <label style="display:flex;align-items:center;gap:8px;cursor:pointer;">
          <input type="checkbox" style="accent-color:#3b7be6;">
          Sertakan link bukti pembayaran
        </label>
      </div>
      <div style="background:#f5f8ff;border:1.5px solid #3b7be6;border-radius:8px;padding:14px 18px;margin:8px 0 0 0;">
        <div style="font-weight:600;color:#3b7be6;margin-bottom:6px;">Summary Export</div>
        <div style="font-size:0.98em;line-height:1.7;">
          Total Records: <b>156</b><br>
          Format: <span style="color:#3b7be6;font-weight:600;">EXCEL</span><br>
          Estimated Size: <span style="color:#888;">~4.2 MB</span>
        </div>
        <div style="font-size:0.97em;color:#888;margin-top:8px;">
          Kolom yang disertakan: ID Pembayaran, Tanggal, Penghuni, Kamar, Invoice, Jumlah, Metode, Status, Detail Transaksi, Catatan
        </div>
      </div>
      <div style="display:flex;gap:10px;margin-top:18px;">
        <button type="button" id="batalExportPembayaran" style="flex:1;background:#fff;border:1.5px solid #cfd8dc;color:#888;font-weight:600;padding:10px 0;border-radius:7px;">Batal</button>
        <button type="submit" style="flex:2;background:#3b7be6;color:#fff;font-weight:600;padding:10px 0;border-radius:7px;border:none;display:flex;align-items:center;justify-content:center;gap:8px;"><span style="font-size:1.2em;">⭳</span> Download Export</button>
      </div>
    </form>
  </div>
</div>
<!-- Modal Buat Kwitansi Pembayaran (Statis/Simulasi) -->
<div id="modalKwitansiPembayaran" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.18);align-items:center;justify-content:center;">
  <div id="panelKwitansiPembayaran" style="background:#fff;border-radius:12px;max-width:500px;width:96vw;padding:0 0 18px 0;box-shadow:0 8px 32px #0002;position:relative;overflow-y:auto;max-height:95vh;">
    <div style="padding:20px 28px 0 28px;display:flex;align-items:center;justify-content:space-between;">
      <div style="font-size:1.18em;font-weight:600;">Buat Kwitansi Pembayaran</div>
      <button id="closeKwitansiPembayaran" style="background:none;border:none;font-size:1.5em;line-height:1;color:#888;cursor:pointer;">&times;</button>
    </div>
    <div style="height:2px;background:linear-gradient(90deg,#ffe6a0 0,#fff 100%);margin:12px 0 18px 0;"></div>
    <div style="background:#fff6ed;border-radius:8px;padding:14px 18px;margin:0 28px 18px 28px;display:flex;align-items:center;gap:12px;">
      <span style="font-size:1.3em;color:#e67e22;">🧾</span>
      <div>
        <b>Generator Kwitansi Pembayaran</b><br>
        <span style="color:#e67e22;font-size:0.98em;">Buat kwitansi resmi untuk pembayaran yang telah terverifikasi sebagai bukti transaksi.</span>
      </div>
    </div>
    <form onsubmit="return false;" style="padding:0 28px;display:flex;flex-direction:column;gap:14px;">
      <div style="font-weight:600;margin-bottom:2px;">Pilih Pembayaran untuk Kwitansi</div>
      <div style="display:flex;flex-direction:column;gap:12px;">
        <label style="display:flex;align-items:center;gap:12px;border:1.5px solid #eee;border-radius:8px;padding:14px 18px;cursor:pointer;">
          <input type="radio" name="pilih_pembayaran" checked style="accent-color:#3b7be6;">
          <div>
            <div style="font-weight:600;">PAY-2024-0233</div>
            <div style="color:#888;font-size:0.98em;">Ahmad Rizki - Kamar 101</div>
            <div style="color:#3bb273;font-weight:700;font-size:1.1em;">Rp 1.415.000 - 28 Juni 2024</div>
          </div>
        </label>
      </div>
      <div style="font-weight:600;margin-bottom:2px;">Template Kwitansi</div>
      <div style="display:flex;flex-direction:column;gap:10px;margin-bottom:8px;">
        <label style="display:flex;align-items:center;gap:10px;cursor:pointer;">
          <input type="radio" name="template_kwitansi" value="standard" checked style="accent-color:#3b7be6;">
          Standard Template <span style="color:#888;font-size:0.97em;">Template standar dengan logo</span>
        </label>
        <label style="display:flex;align-items:center;gap:10px;cursor:pointer;">
          <input type="radio" name="template_kwitansi" value="formal" style="accent-color:#3b7be6;">
          Formal Template <span style="color:#888;font-size:0.97em;">Template formal untuk bisnis</span>
        </label>
        <label style="display:flex;align-items:center;gap:10px;cursor:pointer;">
          <input type="radio" name="template_kwitansi" value="simple" style="accent-color:#3b7be6;">
          Simple Template <span style="color:#888;font-size:0.97em;">Template minimalis</span>
        </label>
      </div>
      <div>
        <label style="font-weight:500;">Ukuran Font</label><br>
        <select style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>Sedang</option>
          <option>Kecil</option>
          <option>Besar</option>
        </select>
      </div>
      <div>
        <label style="font-weight:500;">Jumlah Copy untuk Print</label><br>
        <input type="number" value="1" min="1" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
      </div>
      <div style="font-weight:600;margin-bottom:2px;">Opsi Tambahan:</div>
      <div style="display:flex;flex-direction:column;gap:7px;margin-bottom:8px;">
        <label style="display:flex;align-items:center;gap:8px;cursor:pointer;">
          <input type="checkbox" style="accent-color:#3b7be6;">
          Gunakan logo custom
        </label>
        <label style="display:flex;align-items:center;gap:8px;cursor:pointer;">
          <input type="checkbox" checked style="accent-color:#3b7be6;">
          Sertakan cap/stempel digital
        </label>
      </div>
      <div>
        <label style="font-weight:500;">Catatan Tambahan di Kwitansi</label><br>
        <textarea style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;min-height:48px;resize:vertical;" placeholder="Catatan tambahan yang akan tampil di kwitansi (opsional)..."></textarea>
      </div>
      <div style="display:flex;gap:10px;margin-top:18px;">
        <button type="button" id="batalKwitansiPembayaran" style="flex:1;background:#fff;border:1.5px solid #cfd8dc;color:#888;font-weight:600;padding:10px 0;border-radius:7px;">Batal</button>
        <button type="submit" style="flex:2;background:#e67e22;color:#fff;font-weight:600;padding:10px 0;border-radius:7px;border:none;display:flex;align-items:center;justify-content:center;gap:8px;"><span style="font-size:1.2em;">🧾</span> Generate Kwitansi</button>
      </div>
    </form>
  </div>
</div>
<script>
// Modal Input Pembayaran Manual logic
const btnInputPembayaranManual = document.getElementById('btnInputPembayaranManual');
const modalInputPembayaranManual = document.getElementById('modalInputPembayaranManual');
const closeInputPembayaranManual = document.getElementById('closeInputPembayaranManual');
const batalInputPembayaranManual = document.getElementById('batalInputPembayaranManual');

btnInputPembayaranManual.onclick = () => modalInputPembayaranManual.style.display = 'flex';
closeInputPembayaranManual.onclick = batalInputPembayaranManual.onclick = () => modalInputPembayaranManual.style.display = 'none';
modalInputPembayaranManual.onclick = e => { if (e.target === modalInputPembayaranManual) modalInputPembayaranManual.style.display = 'none'; };

// Modal Laporan Keuangan logic
const btnLaporanKeuangan = document.getElementById('btnLaporanKeuangan');
const modalLaporanKeuangan = document.getElementById('modalLaporanKeuangan');
const closeLaporanKeuangan = document.getElementById('closeLaporanKeuangan');
const batalLaporanKeuangan = document.getElementById('batalLaporanKeuangan');

btnLaporanKeuangan.onclick = () => modalLaporanKeuangan.style.display = 'flex';
closeLaporanKeuangan.onclick = batalLaporanKeuangan.onclick = () => modalLaporanKeuangan.style.display = 'none';
modalLaporanKeuangan.onclick = e => { if (e.target === modalLaporanKeuangan) modalLaporanKeuangan.style.display = 'none'; };

// Modal Export Data Pembayaran logic
const btnExportPembayaran = document.getElementById('btnExportPembayaran');
const modalExportPembayaran = document.getElementById('modalExportPembayaran');
const closeExportPembayaran = document.getElementById('closeExportPembayaran');
const batalExportPembayaran = document.getElementById('batalExportPembayaran');

btnExportPembayaran.onclick = () => modalExportPembayaran.style.display = 'flex';
closeExportPembayaran.onclick = batalExportPembayaran.onclick = () => modalExportPembayaran.style.display = 'none';
modalExportPembayaran.onclick = e => { if (e.target === modalExportPembayaran) modalExportPembayaran.style.display = 'none'; };

// Modal Buat Kwitansi Pembayaran logic
const btnKwitansiPembayaran = document.getElementById('btnKwitansiPembayaran');
const modalKwitansiPembayaran = document.getElementById('modalKwitansiPembayaran');
const closeKwitansiPembayaran = document.getElementById('closeKwitansiPembayaran');
const batalKwitansiPembayaran = document.getElementById('batalKwitansiPembayaran');

btnKwitansiPembayaran.onclick = () => modalKwitansiPembayaran.style.display = 'flex';
closeKwitansiPembayaran.onclick = batalKwitansiPembayaran.onclick = () => modalKwitansiPembayaran.style.display = 'none';
modalKwitansiPembayaran.onclick = e => { if (e.target === modalKwitansiPembayaran) modalKwitansiPembayaran.style.display = 'none'; };

// Filter pembayaran logic
const statusSelect = document.getElementById('filterStatusPembayaran');
const metodeSelect = document.getElementById('filterMetodePembayaran');
const pembayaranCards = document.querySelectorAll('#pembayaranCardContainer > div');

function filterPembayaran() {
    const status = statusSelect.value;
    const metode = metodeSelect.value;
    pembayaranCards.forEach(card => {
        let show = true;
        // Status
        if (status !== 'all') {
            if (status === 'terverifikasi' && !card.innerHTML.includes('TERVERIFIKASI')) show = false;
            if (status === 'menunggu' && !card.innerHTML.includes('MENUNGGU VERIFIKASI')) show = false;
            if (status === 'ditolak' && !card.innerHTML.includes('DITOLAK')) show = false;
        }
        // Metode
        if (metode !== 'all') {
            if (metode === 'transfer' && !(card.innerHTML.includes('Transfer BCA') || card.innerHTML.includes('Transfer Mandiri') || card.innerHTML.includes('Transfer BRI'))) show = false;
            if (metode === 'gopay' && !card.innerHTML.includes('GoPay')) show = false;
            if (metode === 'cash' && !card.innerHTML.includes('Cash')) show = false;
            if (metode === 'qris' && !card.innerHTML.includes('QRIS')) show = false;
        }
        card.style.display = show ? '' : 'none';
    });
}
statusSelect.onchange = filterPembayaran;
metodeSelect.onchange = filterPembayaran;
</script> 