<?php
require_once __DIR__ . '/../controllers/tagihan.php';
require_once __DIR__ . '/../controllers/kmr_penghuni.php';
$tagihan = getAllTagihan();
$kmr_penghuni = getAllKmrPenghuni();
?>
<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:18px;">
    <h2 style="margin:0;">Tagihan</h2>
    <div style="font-weight:500;color:#888;">Dashboard / Tagihan</div>
</div>
<div style="display:flex;gap:18px;margin-bottom:24px;">
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;">45</div>
        <div style="color:#8d7b5a;">Total Tagihan</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;color:#ffb347;">28</div>
        <div style="color:#8d7b5a;">Menunggu Pembayaran</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;color:#e65a5a;">8</div>
        <div style="color:#8d7b5a;">Telat Bayar</div>
    </div>
    <div style="background:#fff8f0;border-radius:12px;padding:18px 32px;min-width:120px;text-align:center;box-shadow:0 2px 8px #e6b87a22;">
        <div style="font-size:1.6em;font-weight:bold;color:#3bb273;">9</div>
        <div style="color:#8d7b5a;">Sudah Dibayar</div>
    </div>
</div>
<div style="display:flex;align-items:center;gap:12px;margin-bottom:18px;">
    <button id="buatTagihanBtn" style="background:#7b5ae6;color:#fff;padding:10px 22px;border-radius:8px;font-weight:600;box-shadow:0 2px 8px #e6b87a22;border:none;cursor:pointer;">+ Buat Tagihan Baru</button>
    <button id="kirimReminderBtn" style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Kirim Reminder</button>
    <button id="laporanTagihanBtn" style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Laporan Tagihan</button>
    <button id="exportTagihanBtn" style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Export Data</button>
</div>
<div style="display:flex;gap:0;margin-bottom:18px;">
    <button class="filter-tagihan-btn" data-status="all" style="flex:1;background:#3b7be6;color:#fff;padding:10px 0;border-radius:8px 0 0 8px;font-weight:600;border:none;">Semua Tagihan</button>
    <button class="filter-tagihan-btn" data-status="pending" style="flex:1;background:#f5f8ff;color:#ffb347;padding:10px 0;border-radius:0;font-weight:600;border:none;">Menunggu Pembayaran</button>
    <button class="filter-tagihan-btn" data-status="late" style="flex:1;background:#f5f8ff;color:#e65a5a;padding:10px 0;border-radius:0;font-weight:600;border:none;">Telat Bayar</button>
    <button class="filter-tagihan-btn" data-status="paid" style="flex:1;background:#f5f8ff;color:#3bb273;padding:10px 0;border-radius:0 8px 8px 0;font-weight:600;border:none;">Sudah Dibayar</button>
</div>
<div id="tagihanCardContainer" style="display:flex;flex-wrap:wrap;gap:24px;">
    <!-- Card Tagihan Dummy -->
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:340px;max-width:360px;flex:1 1 340px;display:flex;flex-direction:column;gap:8px;border:2px solid #e65a5a;">
        <div style="display:flex;align-items:center;justify-content:space-between;">
            <div>
                <div style="font-weight:700;">INV-2024-0156</div>
                <div style="color:#888;font-size:0.98em;">Juni 2024</div>
            </div>
            <span style="color:#e65a5a;font-weight:600;background:#ffeaea;padding:4px 14px;border-radius:8px;">TELAT BAYAR</span>
        </div>
        <div style="background:#f5f8ff;padding:10px 14px;border-radius:8px;display:flex;align-items:center;gap:10px;margin:8px 0;">
            <div style="background:#e6e6ff;color:#7b5ae6;width:38px;height:38px;display:flex;align-items:center;justify-content:center;border-radius:50%;font-weight:700;font-size:1.1em;">BS</div>
            <div>
                <div style="font-weight:600;">Budi Santoso</div>
                <div style="color:#3b7be6;font-size:0.98em;">Kamar 103 - Deluxe</div>
            </div>
        </div>
        <div>Sewa Kamar <span style="float:right;">Rp 900,000</span></div>
        <div>Listrik <span style="float:right;">Rp 85,000</span></div>
        <div>Air <span style="float:right;">Rp 45,000</span></div>
        <div>Internet <span style="float:right;">Rp 50,000</span></div>
        <div style="font-weight:600;">Total <span style="float:right;color:#3b7be6;">Rp 1,080,000</span></div>
        <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;margin-top:8px;display:flex;align-items:center;justify-content:space-between;">
            <span>Jatuh Tempo: 25 Juni 2024</span>
            <span style="color:#e65a5a;font-weight:600;">Telat 3 Hari</span>
        </div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#3b7be6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#ffb347;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Reminder</button>
            <button style="background:#3bb273;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Bayar</button>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:340px;max-width:360px;flex:1 1 340px;display:flex;flex-direction:column;gap:8px;border:2px solid #ffb347;">
        <div style="display:flex;align-items:center;justify-content:space-between;">
            <div>
                <div style="font-weight:700;">INV-2024-0157</div>
                <div style="color:#888;font-size:0.98em;">Juni 2024</div>
            </div>
            <span style="color:#ffb347;font-weight:600;background:#fff5e0;padding:4px 14px;border-radius:8px;">PENDING</span>
        </div>
        <div style="background:#f5f8ff;padding:10px 14px;border-radius:8px;display:flex;align-items:center;gap:10px;margin:8px 0;">
            <div style="background:#e6e6ff;color:#7b5ae6;width:38px;height:38px;display:flex;align-items:center;justify-content:center;border-radius:50%;font-weight:700;font-size:1.1em;">AR</div>
            <div>
                <div style="font-weight:600;">Ahmad Rizki</div>
                <div style="color:#3b7be6;font-size:0.98em;">Kamar 101 - VIP</div>
            </div>
        </div>
        <div>Sewa Kamar <span style="float:right;">Rp 1,200,000</span></div>
        <div>Listrik <span style="float:right;">Rp 95,000</span></div>
        <div>Air <span style="float:right;">Rp 45,000</span></div>
        <div>Internet <span style="float:right;">Rp 75,000</span></div>
        <div style="font-weight:600;">Total <span style="float:right;color:#3b7be6;">Rp 1,415,000</span></div>
        <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;margin-top:8px;display:flex;align-items:center;justify-content:space-between;">
            <span>Jatuh Tempo: 30 Juni 2024</span>
            <span style="color:#ffb347;font-weight:600;">2 Hari Lagi</span>
        </div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#3b7be6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#888;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Edit</button>
            <button style="background:#3bb273;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Bayar</button>
        </div>
    </div>
    <!-- Tambahan 5 kartu dummy -->
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:340px;max-width:360px;flex:1 1 340px;display:flex;flex-direction:column;gap:8px;border:2px solid #3bb273;">
        <div style="display:flex;align-items:center;justify-content:space-between;">
            <div>
                <div style="font-weight:700;">INV-2024-0158</div>
                <div style="color:#888;font-size:0.98em;">Mei 2024</div>
            </div>
            <span style="color:#3bb273;font-weight:600;background:#eaffea;padding:4px 14px;border-radius:8px;">SUDAH DIBAYAR</span>
        </div>
        <div style="background:#f5f8ff;padding:10px 14px;border-radius:8px;display:flex;align-items:center;gap:10px;margin:8px 0;">
            <div style="background:#e6e6ff;color:#7b5ae6;width:38px;height:38px;display:flex;align-items:center;justify-content:center;border-radius:50%;font-weight:700;font-size:1.1em;">MS</div>
            <div>
                <div style="font-weight:600;">Maya Sari</div>
                <div style="color:#3b7be6;font-size:0.98em;">Kamar 102 - Standard</div>
            </div>
        </div>
        <div>Sewa Kamar <span style="float:right;">Rp 800,000</span></div>
        <div>Listrik <span style="float:right;">Rp 70,000</span></div>
        <div>Air <span style="float:right;">Rp 40,000</span></div>
        <div>Internet <span style="float:right;">Rp 60,000</span></div>
        <div style="font-weight:600;">Total <span style="float:right;color:#3b7be6;">Rp 970,000</span></div>
        <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;margin-top:8px;display:flex;align-items:center;justify-content:space-between;">
            <span>Jatuh Tempo: 25 Mei 2024</span>
            <span style="color:#3bb273;font-weight:600;">Lunas</span>
        </div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#3b7be6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#888;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Cetak</button>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:340px;max-width:360px;flex:1 1 340px;display:flex;flex-direction:column;gap:8px;border:2px solid #ffb347;">
        <div style="display:flex;align-items:center;justify-content:space-between;">
            <div>
                <div style="font-weight:700;">INV-2024-0159</div>
                <div style="color:#888;font-size:0.98em;">Juli 2024</div>
            </div>
            <span style="color:#ffb347;font-weight:600;background:#fff5e0;padding:4px 14px;border-radius:8px;">PENDING</span>
        </div>
        <div style="background:#f5f8ff;padding:10px 14px;border-radius:8px;display:flex;align-items:center;gap:10px;margin:8px 0;">
            <div style="background:#e6e6ff;color:#7b5ae6;width:38px;height:38px;display:flex;align-items:center;justify-content:center;border-radius:50%;font-weight:700;font-size:1.1em;">AS</div>
            <div>
                <div style="font-weight:600;">Andi Setiawan</div>
                <div style="color:#3b7be6;font-size:0.98em;">Kamar 104 - Deluxe</div>
            </div>
        </div>
        <div>Sewa Kamar <span style="float:right;">Rp 950,000</span></div>
        <div>Listrik <span style="float:right;">Rp 90,000</span></div>
        <div>Air <span style="float:right;">Rp 50,000</span></div>
        <div>Internet <span style="float:right;">Rp 55,000</span></div>
        <div style="font-weight:600;">Total <span style="float:right;color:#3b7be6;">Rp 1,145,000</span></div>
        <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;margin-top:8px;display:flex;align-items:center;justify-content:space-between;">
            <span>Jatuh Tempo: 10 Juli 2024</span>
            <span style="color:#ffb347;font-weight:600;">5 Hari Lagi</span>
        </div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#3b7be6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#ffb347;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Reminder</button>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:340px;max-width:360px;flex:1 1 340px;display:flex;flex-direction:column;gap:8px;border:2px solid #e65a5a;">
        <div style="display:flex;align-items:center;justify-content:space-between;">
            <div>
                <div style="font-weight:700;">INV-2024-0160</div>
                <div style="color:#888;font-size:0.98em;">Juni 2024</div>
            </div>
            <span style="color:#e65a5a;font-weight:600;background:#ffeaea;padding:4px 14px;border-radius:8px;">TELAT BAYAR</span>
        </div>
        <div style="background:#f5f8ff;padding:10px 14px;border-radius:8px;display:flex;align-items:center;gap:10px;margin:8px 0;">
            <div style="background:#e6e6ff;color:#7b5ae6;width:38px;height:38px;display:flex;align-items:center;justify-content:center;border-radius:50%;font-weight:700;font-size:1.1em;">BR</div>
            <div>
                <div style="font-weight:600;">Budi Raharja</div>
                <div style="color:#3b7be6;font-size:0.98em;">Kamar 105 - Standard</div>
            </div>
        </div>
        <div>Sewa Kamar <span style="float:right;">Rp 850,000</span></div>
        <div>Listrik <span style="float:right;">Rp 80,000</span></div>
        <div>Air <span style="float:right;">Rp 40,000</span></div>
        <div>Internet <span style="float:right;">Rp 60,000</span></div>
        <div style="font-weight:600;">Total <span style="float:right;color:#3b7be6;">Rp 1,030,000</span></div>
        <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;margin-top:8px;display:flex;align-items:center;justify-content:space-between;">
            <span>Jatuh Tempo: 20 Juni 2024</span>
            <span style="color:#e65a5a;font-weight:600;">Telat 7 Hari</span>
        </div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#3b7be6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#ffb347;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Reminder</button>
        </div>
    </div>
    <div style="background:#fff;border-radius:16px;box-shadow:0 2px 12px #e6b87a22;padding:24px 22px;min-width:340px;max-width:360px;flex:1 1 340px;display:flex;flex-direction:column;gap:8px;border:2px solid #3bb273;">
        <div style="display:flex;align-items:center;justify-content:space-between;">
            <div>
                <div style="font-weight:700;">INV-2024-0161</div>
                <div style="color:#888;font-size:0.98em;">Juli 2024</div>
            </div>
            <span style="color:#3bb273;font-weight:600;background:#eaffea;padding:4px 14px;border-radius:8px;">SUDAH DIBAYAR</span>
        </div>
        <div style="background:#f5f8ff;padding:10px 14px;border-radius:8px;display:flex;align-items:center;gap:10px;margin:8px 0;">
            <div style="background:#e6e6ff;color:#7b5ae6;width:38px;height:38px;display:flex;align-items:center;justify-content:center;border-radius:50%;font-weight:700;font-size:1.1em;">MS</div>
            <div>
                <div style="font-weight:600;">Maya Sari</div>
                <div style="color:#3b7be6;font-size:0.98em;">Kamar 102 - Standard</div>
            </div>
        </div>
        <div>Sewa Kamar <span style="float:right;">Rp 800,000</span></div>
        <div>Listrik <span style="float:right;">Rp 70,000</span></div>
        <div>Air <span style="float:right;">Rp 40,000</span></div>
        <div>Internet <span style="float:right;">Rp 60,000</span></div>
        <div style="font-weight:600;">Total <span style="float:right;color:#3b7be6;">Rp 970,000</span></div>
        <div style="background:#f5f8ff;padding:7px 12px;border-radius:7px;margin-top:8px;display:flex;align-items:center;justify-content:space-between;">
            <span>Jatuh Tempo: 10 Juli 2024</span>
            <span style="color:#3bb273;font-weight:600;">Lunas</span>
        </div>
        <div style="display:flex;gap:8px;margin-top:8px;">
            <button style="background:#3b7be6;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Detail</button>
            <button style="background:#888;color:#fff;padding:7px 16px;border-radius:7px;font-weight:600;border:none;">Cetak</button>
        </div>
    </div>
</div>
<!-- Modal Buat Tagihan Baru (Statis/Simulasi) -->
<div id="buatTagihanModal" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.18);align-items:center;justify-content:center;">
  <div id="buatTagihanPanel" style="background:#fff;border-radius:12px;max-width:540px;width:96vw;padding:0 0 18px 0;box-shadow:0 8px 32px #0002;position:relative;overflow-y:auto;max-height:90vh;">
    <div style="padding:20px 32px 0 32px;display:flex;align-items:center;justify-content:space-between;">
      <div style="font-size:1.18em;font-weight:600;">Buat Tagihan Baru</div>
      <button id="closeBuatTagihan" style="background:none;border:none;font-size:1.5em;line-height:1;color:#888;cursor:pointer;">&times;</button>
    </div>
    <div style="height:2px;background:linear-gradient(90deg,#ffe6a0 0,#fff 100%);margin:12px 0 18px 0;"></div>
    <form onsubmit="return false;" style="padding:0 32px;display:flex;flex-direction:column;gap:14px;">
      <div style="background:#f5f8ff;border-radius:8px;padding:12px 16px;margin-bottom:8px;display:flex;align-items:center;gap:10px;">
        <span style="font-size:1.2em;color:#3b7be6;">📝</span>
        <div style="font-weight:600;color:#3b7be6;">Formulir Tagihan Baru</div>
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
        <label style="font-weight:500;">Periode Tagihan *</label><br>
        <input type="month" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
      </div>
      <div>
        <label style="font-weight:500;">Jatuh Tempo *</label><br>
        <input type="date" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
      </div>
      <div>
        <label style="font-weight:500;">Info Kamar</label><br>
        <input type="text" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;" value="Pilih penghuni terlebih dahulu" readonly>
      </div>
      <div>
        <label style="font-weight:500;">Detail Tagihan *</label>
        <button type="button" style="margin-left:12px;background:#3bb273;color:#fff;padding:5px 14px;border-radius:7px;font-weight:600;border:none;font-size:0.98em;">+ Tambah Item</button>
        <div style="display:flex;flex-direction:column;gap:8px;margin-top:10px;">
          <div style="display:flex;gap:8px;align-items:center;flex-wrap:wrap;">
            <input type="text" value="Sewa Kamar" style="flex:2 1 120px;min-width:0;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
            <input type="text" value="Rp0" style="flex:1 1 80px;min-width:0;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
            <button type="button" style="background:#eee;border:none;color:#888;padding:7px 14px;border-radius:7px;font-size:1.1em;cursor:not-allowed;">•</button>
          </div>
          <div style="display:flex;gap:8px;align-items:center;flex-wrap:wrap;">
            <input type="text" value="Listrik" style="flex:2 1 120px;min-width:0;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
            <input type="text" value="Rp0" style="flex:1 1 80px;min-width:0;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
            <button type="button" style="background:#e65a5a;color:#fff;padding:7px 14px;border-radius:7px;font-size:1.1em;border:none;">×</button>
          </div>
          <div style="display:flex;gap:8px;align-items:center;flex-wrap:wrap;">
            <input type="text" value="Air" style="flex:2 1 120px;min-width:0;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
            <input type="text" value="Rp0" style="flex:1 1 80px;min-width:0;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
            <button type="button" style="background:#e65a5a;color:#fff;padding:7px 14px;border-radius:7px;font-size:1.1em;border:none;">×</button>
          </div>
          <div style="display:flex;gap:8px;align-items:center;flex-wrap:wrap;">
            <input type="text" value="Internet" style="flex:2 1 120px;min-width:0;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
            <input type="text" value="Rp0" style="flex:1 1 80px;min-width:0;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
            <button type="button" style="background:#e65a5a;color:#fff;padding:7px 14px;border-radius:7px;font-size:1.1em;border:none;">×</button>
          </div>
        </div>
      </div>
      <div>
        <label style="font-weight:500;">Denda Keterlambatan</label><br>
        <input type="text" value="Rp0" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
      </div>
      <div>
        <label style="font-weight:500;">Diskon</label><br>
        <input type="text" value="Rp0" style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
      </div>
      <div>
        <label style="font-weight:500;">Catatan Tagihan</label><br>
        <textarea style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;min-height:48px;resize:vertical;" placeholder="Catatan tambahan untuk tagihan ini..."></textarea>
      </div>
      <div style="background:#eaffea;border-radius:8px;padding:14px 18px;margin:8px 0 0 0;">
        <div style="font-weight:600;color:#3bb273;margin-bottom:6px;">Ringkasan Tagihan</div>
        <div style="font-size:1.15em;font-weight:700;display:flex;align-items:center;justify-content:space-between;">
          <span>Total:</span>
          <span style="color:#3b7be6;">Rp 0</span>
        </div>
      </div>
      <div style="display:flex;gap:10px;margin-top:18px;">
        <button type="button" id="batalBuatTagihan" style="flex:1;background:#fff;border:1.5px solid #cfd8dc;color:#888;font-weight:600;padding:10px 0;border-radius:7px;">Batal</button>
        <button type="submit" style="flex:2;background:#3b7be6;color:#fff;font-weight:600;padding:10px 0;border-radius:7px;border:none;">Buat Tagihan</button>
      </div>
    </form>
  </div>
</div>
<!-- Modal Kirim Reminder Pembayaran (Statis/Simulasi) -->
<div id="kirimReminderModal" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.18);align-items:center;justify-content:center;">
  <div id="kirimReminderPanel" style="background:#fff;border-radius:12px;max-width:520px;width:96vw;padding:0 0 18px 0;box-shadow:0 8px 32px #0002;position:relative;overflow-y:auto;max-height:90vh;">
    <div style="padding:20px 28px 0 28px;display:flex;align-items:center;justify-content:space-between;">
      <div style="font-size:1.18em;font-weight:600;">Kirim Reminder Pembayaran</div>
      <button id="closeKirimReminder" style="background:none;border:none;font-size:1.5em;line-height:1;color:#888;cursor:pointer;">&times;</button>
    </div>
    <div style="height:2px;background:linear-gradient(90deg,#ffe6a0 0,#fff 100%);margin:12px 0 18px 0;"></div>
    <form onsubmit="return false;" style="padding:0 28px;display:flex;flex-direction:column;gap:14px;">
      <div style="background:#fff6ed;border-radius:8px;padding:12px 16px;margin-bottom:8px;display:flex;align-items:center;gap:10px;">
        <span style="font-size:1.2em;color:#ff9100;">&#128276;</span>
        <div style="font-weight:600;color:#ff9100;">Kirim Reminder Pembayaran</div>
      </div>
      <div>
        <label style="font-weight:500;">Target Tagihan</label>
        <div style="display:flex;flex-direction:column;gap:8px;margin-top:6px;">
          <label style="display:flex;align-items:center;gap:10px;cursor:pointer;">
            <input type="radio" name="target_tagihan" value="pending" checked style="accent-color:#ff9100;">
            Menunggu Pembayaran <span style="margin-left:auto;background:#eee;padding:2px 10px;border-radius:12px;font-size:0.98em;color:#888;">28</span>
          </label>
          <label style="display:flex;align-items:center;gap:10px;cursor:pointer;">
            <input type="radio" name="target_tagihan" value="late" style="accent-color:#ff9100;">
            Telat Bayar <span style="margin-left:auto;background:#eee;padding:2px 10px;border-radius:12px;font-size:0.98em;color:#888;">0</span>
          </label>
          <label style="display:flex;align-items:center;gap:10px;cursor:pointer;">
            <input type="radio" name="target_tagihan" value="today" style="accent-color:#ff9100;">
            Jatuh Tempo Hari Ini <span style="margin-left:auto;background:#eee;padding:2px 10px;border-radius:12px;font-size:0.98em;color:#888;">0</span>
          </label>
          <label style="display:flex;align-items:center;gap:10px;cursor:pointer;">
            <input type="radio" name="target_tagihan" value="besok" style="accent-color:#ff9100;">
            Jatuh Tempo Besok <span style="margin-left:auto;background:#eee;padding:2px 10px;border-radius:12px;font-size:0.98em;color:#888;">0</span>
          </label>
          <label style="display:flex;align-items:center;gap:10px;cursor:pointer;">
            <input type="radio" name="target_tagihan" value="manual" style="accent-color:#ff9100;">
            Pilih Manual <span style="margin-left:auto;background:#eee;padding:2px 10px;border-radius:12px;font-size:0.98em;color:#888;">0</span>
          </label>
        </div>
      </div>
      <div>
        <label style="font-weight:500;">Jenis Reminder</label>
        <div style="display:flex;flex-direction:column;gap:8px;margin-top:6px;">
          <label style="display:flex;align-items:center;gap:10px;cursor:pointer;">
            <input type="radio" name="jenis_reminder" value="wa" checked style="accent-color:#25d366;">
            <span style="font-size:1.2em;">&#128241;</span> WhatsApp <span style="color:#888;font-size:0.97em;">Pesan langsung ke WhatsApp</span>
          </label>
          <label style="display:flex;align-items:center;gap:10px;cursor:pointer;">
            <input type="radio" name="jenis_reminder" value="sms" style="accent-color:#ff9100;">
            <span style="font-size:1.2em;">&#128241;</span> SMS <span style="color:#888;font-size:0.97em;">SMS ke nomor terdaftar</span>
          </label>
          <label style="display:flex;align-items:center;gap:10px;cursor:pointer;">
            <input type="radio" name="jenis_reminder" value="email" style="accent-color:#3b7be6;">
            <span style="font-size:1.2em;">&#128231;</span> Email <span style="color:#888;font-size:0.97em;">Email ke alamat terdaftar</span>
          </label>
          <label style="display:flex;align-items:center;gap:10px;cursor:pointer;">
            <input type="radio" name="jenis_reminder" value="all" style="accent-color:#888;">
            <span style="font-size:1.2em;">&#128226;</span> Semua Channel <span style="color:#888;font-size:0.97em;">Kirim via semua media</span>
          </label>
        </div>
      </div>
      <div>
        <label style="font-weight:500;">Template Pesan</label>
        <div style="display:flex;flex-direction:column;gap:8px;margin-top:6px;">
          <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
            <input type="radio" name="template_pesan" value="standard" checked style="accent-color:#ff9100;">
            Standard (Formal)
          </label>
          <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
            <input type="radio" name="template_pesan" value="friendly" style="accent-color:#ff9100;">
            Friendly (Ramah)
          </label>
          <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
            <input type="radio" name="template_pesan" value="urgent" style="accent-color:#ff9100;">
            Urgent (Mendesak)
          </label>
          <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
            <input type="radio" name="template_pesan" value="custom" style="accent-color:#ff9100;">
            Custom (Kustom)
          </label>
        </div>
      </div>
      <div>
        <label style="font-weight:500;">Preview Pesan</label>
        <div style="background:#f5f8ff;border-radius:8px;padding:12px 16px;margin-top:6px;font-size:0.98em;">
          Selamat pagi [Nama]. Tagihan sewa kamar [Nomor Tagihan] dengan total Rp [Jumlah] telah jatuh tempo pada [Tanggal]. Mohon segera melakukan pembayaran.
        </div>
      </div>
      <div>
        <label style="font-weight:500;">Jadwal Kirim</label>
        <div style="display:flex;gap:18px;margin-top:6px;">
          <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
            <input type="radio" name="jadwal_kirim" value="now" checked style="accent-color:#ff9100;">
            Kirim Sekarang
          </label>
          <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
            <input type="radio" name="jadwal_kirim" value="jadwalkan" style="accent-color:#ff9100;">
            Jadwalkan
          </label>
        </div>
      </div>
      <div style="background:#fff6ed;border:1.5px solid #ff9100;border-radius:8px;padding:14px 18px;margin:8px 0 0 0;">
        <div style="font-weight:600;color:#ff9100;margin-bottom:6px;">Summary Pengiriman</div>
        <div style="font-size:0.98em;line-height:1.7;">
          Target: <b>28 Tagihan Pending</b><br>
          Channel: <span style="color:#25d366;font-weight:600;">whatsapp</span><br>
          Template: <span style="color:#888;">standard</span><br>
          Waktu Kirim: <span style="color:#888;">Sekarang</span>
        </div>
      </div>
      <div style="display:flex;gap:10px;margin-top:18px;">
        <button type="button" id="batalKirimReminder" style="flex:1;background:#fff;border:1.5px solid #cfd8dc;color:#888;font-weight:600;padding:10px 0;border-radius:7px;">Batal</button>
        <button type="submit" style="flex:2;background:#ff9100;color:#fff;font-weight:600;padding:10px 0;border-radius:7px;border:none;">Kirim Sekarang</button>
      </div>
    </form>
  </div>
</div>
<!-- Modal Laporan Tagihan (Statis/Simulasi) -->
<div id="laporanTagihanModal" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.18);align-items:center;justify-content:center;">
  <div id="laporanTagihanPanel" style="background:#fff;border-radius:12px;max-width:540px;width:96vw;padding:0 0 18px 0;box-shadow:0 8px 32px #0002;position:relative;overflow-y:auto;max-height:90vh;">
    <div style="padding:20px 32px 0 32px;display:flex;align-items:center;justify-content:space-between;">
      <div style="font-size:1.18em;font-weight:600;">Generate Laporan Tagihan</div>
      <button id="closeLaporanTagihan" style="background:none;border:none;font-size:1.5em;line-height:1;color:#888;cursor:pointer;">&times;</button>
    </div>
    <div style="height:2px;background:linear-gradient(90deg,#ffe6a0 0,#fff 100%);margin:12px 0 18px 0;"></div>
    <form onsubmit="return false;" style="padding:0 32px;display:flex;flex-direction:column;gap:14px;">
      <div>
        <label style="font-weight:500;">Jenis Laporan</label>
        <div style="display:flex;flex-direction:column;gap:8px;margin-top:6px;">
          <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="jenis_laporan" value="Ringkasan Tagihan" checked style="accent-color:#a259e6;margin-top:2px;">
            <div>
              <div style="font-weight:600;">Ringkasan Tagihan</div>
              <div style="font-size:0.97em;color:#888;">Overview pendapatan dan status</div>
            </div>
          </label>
          <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="jenis_laporan" value="Laporan Detail" style="accent-color:#a259e6;margin-top:2px;">
            <div>
              <div style="font-weight:600;">Laporan Detail</div>
              <div style="font-size:0.97em;color:#888;">Detail per tagihan dan penghuni</div>
            </div>
          </label>
          <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="jenis_laporan" value="Aging Report" style="accent-color:#a259e6;margin-top:2px;">
            <div>
              <div style="font-weight:600;">Aging Report</div>
              <div style="font-size:0.97em;color:#888;">Analisis umur piutang</div>
            </div>
          </label>
          <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
            <input type="radio" name="jenis_laporan" value="Collection Report" style="accent-color:#a259e6;margin-top:2px;">
            <div>
              <div style="font-weight:600;">Collection Report</div>
              <div style="font-size:0.97em;color:#888;">Efektivitas penagihan</div>
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
      <div style="display:flex;gap:24px;">
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
        <label style="font-weight:500;">Filter Penghuni (Opsional)</label><br>
        <select style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>Semua Penghuni</option>
          <option>Andi Setiawan</option>
          <option>Maya Sari</option>
          <option>Budi Raharja</option>
        </select>
      </div>
      <div>
        <label style="font-weight:500;">Status Tagihan</label><br>
        <select style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>Semua Status</option>
          <option>Menunggu Pembayaran</option>
          <option>Telat Bayar</option>
          <option>Sudah Dibayar</option>
        </select>
      </div>
      <div>
        <label style="font-weight:500;">Format Output</label>
        <div style="display:flex;gap:24px;margin-top:6px;">
          <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
            <input type="radio" name="format_output" value="Pdf" checked style="accent-color:#a259e6;">
            Pdf
          </label>
          <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
            <input type="radio" name="format_output" value="Excel" style="accent-color:#a259e6;">
            Excel
          </label>
          <label style="display:flex;align-items:center;gap:7px;cursor:pointer;">
            <input type="radio" name="format_output" value="Word" style="accent-color:#a259e6;">
            Word
          </label>
        </div>
      </div>
      <div style="background:#f8f5ff;border:1.5px solid #a259e6;border-radius:8px;padding:14px 18px;margin:8px 0 0 0;">
        <div style="font-weight:600;color:#a259e6;margin-bottom:6px;">Preview Konten Laporan</div>
        <div style="font-size:0.98em;line-height:1.7;color:#a259e6;">
          <span style="display:flex;align-items:center;gap:7px;"><span style="font-size:1.1em;">💰</span> Total pendapatan & piutang</span><br>
          <span style="display:flex;align-items:center;gap:7px;"><span style="font-size:1.1em;">📊</span> Distribusi status pembayaran</span><br>
          <span style="display:flex;align-items:center;gap:7px;"><span style="font-size:1.1em;">🕒</span> Aging analysis piutang</span><br>
          <span style="display:flex;align-items:center;gap:7px;"><span style="font-size:1.1em;">🏅</span> Performance per penghuni</span>
        </div>
      </div>
      <div style="display:flex;gap:10px;margin-top:18px;">
        <button type="button" id="batalLaporanTagihan" style="flex:1;background:#fff;border:1.5px solid #cfd8dc;color:#888;font-weight:600;padding:10px 0;border-radius:7px;">Batal</button>
        <button type="submit" style="flex:2;background:#a259e6;color:#fff;font-weight:600;padding:10px 0;border-radius:7px;border:none;display:flex;align-items:center;justify-content:center;gap:8px;"><span style="font-size:1.2em;">🗎</span> Generate Laporan</button>
      </div>
    </form>
  </div>
</div>
<!-- Modal Export Data Tagihan (Statis/Simulasi) -->
<div id="exportTagihanModal" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.18);align-items:center;justify-content:center;">
  <div id="exportTagihanPanel" style="background:#fff;border-radius:12px;max-width:540px;width:96vw;padding:0 0 18px 0;box-shadow:0 8px 32px #0002;position:relative;overflow-y:auto;max-height:90vh;">
    <div style="padding:20px 32px 0 32px;display:flex;align-items:center;justify-content:space-between;">
      <div style="font-size:1.18em;font-weight:600;">Export Data Tagihan</div>
      <button id="closeExportTagihan" style="background:none;border:none;font-size:1.5em;line-height:1;color:#888;cursor:pointer;">&times;</button>
    </div>
    <div style="height:2px;background:linear-gradient(90deg,#ffe6a0 0,#fff 100%);margin:12px 0 18px 0;"></div>
    <form onsubmit="return false;" style="padding:0 32px;display:flex;flex-direction:column;gap:14px;">
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
            <div style="font-size:0.97em;color:#888;">Import ke sistem accounting</div>
          </div>
        </label>
        <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
          <input type="radio" name="format_export" value="pdf" style="accent-color:#3b7be6;margin-top:2px;">
          <span style="font-size:1.3em;">🗎</span>
          <div>
            <div style="font-weight:600;">PDF (.pdf)</div>
            <div style="font-size:0.97em;color:#888;">Dokumentasi dan arsip</div>
          </div>
        </label>
        <label style="display:flex;align-items:flex-start;gap:10px;background:#f8f9fa;border-radius:8px;padding:10px 14px 10px 10px;border:1.2px solid #e0e0e0;cursor:pointer;">
          <input type="radio" name="format_export" value="json" style="accent-color:#3b7be6;margin-top:2px;">
          <span style="font-size:1.3em;">🔗</span>
          <div>
            <div style="font-weight:600;">JSON (.json)</div>
            <div style="font-size:0.97em;color:#888;">Integrasi dengan API</div>
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
        <label style="font-weight:500;">Status Filter</label><br>
        <select style="width:100%;padding:9px 12px;border-radius:7px;border:1.2px solid #cfd8dc;font-size:1em;">
          <option>Semua Status</option>
          <option>Menunggu Pembayaran</option>
          <option>Telat Bayar</option>
          <option>Sudah Dibayar</option>
        </select>
      </div>
      <div style="margin-bottom:2px;font-weight:600;">Opsi Export:</div>
      <div style="display:flex;flex-direction:column;gap:7px;margin-bottom:8px;">
        <label style="display:flex;align-items:center;gap:8px;cursor:pointer;">
          <input type="checkbox" checked style="accent-color:#3b7be6;">
          Sertakan detail item tagihan
        </label>
        <label style="display:flex;align-items:center;gap:8px;cursor:pointer;">
          <input type="checkbox" checked style="accent-color:#3b7be6;">
          Sertakan riwayat pembayaran
        </label>
      </div>
      <div style="background:#f5f8ff;border:1.5px solid #3b7be6;border-radius:8px;padding:14px 18px;margin:8px 0 0 0;">
        <div style="font-weight:600;color:#3b7be6;margin-bottom:6px;">Preview Export</div>
        <div style="font-size:0.98em;line-height:1.7;">
          Total Records: <b>45</b><br>
          Format: <span style="color:#3b7be6;font-weight:600;">EXCEL</span><br>
          Estimated Size: <span style="color:#888;">~3.2 MB</span>
        </div>
        <div style="font-size:0.97em;color:#888;margin-top:8px;">
          Kolom yang disertakan: Nomor Invoice, Penghuni, Kamar, Periode, Jatuh Tempo, Status, Total Tagihan, Detail Item Tagihan, Riwayat Pembayaran
        </div>
      </div>
      <div style="display:flex;gap:10px;margin-top:18px;">
        <button type="button" id="batalExportTagihan" style="flex:1;background:#fff;border:1.5px solid #cfd8dc;color:#888;font-weight:600;padding:10px 0;border-radius:7px;">Batal</button>
        <button type="submit" style="flex:2;background:#3b7be6;color:#fff;font-weight:600;padding:10px 0;border-radius:7px;border:none;display:flex;align-items:center;justify-content:center;gap:8px;"><span style="font-size:1.2em;">⭳</span> Download Export</button>
      </div>
    </form>
  </div>
</div>
<script>
// Modal Buat Tagihan Baru logic
const buatTagihanBtn = document.getElementById('buatTagihanBtn');
const buatTagihanModal = document.getElementById('buatTagihanModal');
const closeBuatTagihan = document.getElementById('closeBuatTagihan');
const batalBuatTagihan = document.getElementById('batalBuatTagihan');

buatTagihanBtn.onclick = () => buatTagihanModal.style.display = 'flex';
closeBuatTagihan.onclick = batalBuatTagihan.onclick = () => buatTagihanModal.style.display = 'none';
buatTagihanModal.onclick = e => { if (e.target === buatTagihanModal) buatTagihanModal.style.display = 'none'; };

// Filter tagihan logic
const filterBtns = document.querySelectorAll('.filter-tagihan-btn');
const tagihanCards = document.querySelectorAll('#tagihanCardContainer > div');
filterBtns.forEach(btn => {
  btn.onclick = function() {
    filterBtns.forEach(b => b.style.background = '#f5f8ff');
    filterBtns.forEach(b => b.style.color = b.dataset.status === 'pending' ? '#ffb347' : b.dataset.status === 'late' ? '#e65a5a' : b.dataset.status === 'paid' ? '#3bb273' : '#3b7be6');
    if (btn.dataset.status === 'all') {
      btn.style.background = '#3b7be6'; btn.style.color = '#fff';
      tagihanCards.forEach(card => card.style.display = '');
    } else if (btn.dataset.status === 'pending') {
      btn.style.background = '#ffb347'; btn.style.color = '#fff';
      tagihanCards.forEach(card => card.querySelector('span').textContent.trim().toUpperCase().includes('PENDING') ? card.style.display = '' : card.style.display = 'none');
    } else if (btn.dataset.status === 'late') {
      btn.style.background = '#e65a5a'; btn.style.color = '#fff';
      tagihanCards.forEach(card => card.querySelector('span').textContent.trim().toUpperCase().includes('TELAT') ? card.style.display = '' : card.style.display = 'none');
    } else if (btn.dataset.status === 'paid') {
      btn.style.background = '#3bb273'; btn.style.color = '#fff';
      tagihanCards.forEach(card => card.querySelector('span').textContent.trim().toUpperCase().includes('SUDAH DIBAYAR') ? card.style.display = '' : card.style.display = 'none');
    }
  }
});
// Set default active
filterBtns[0].click();

// Modal Kirim Reminder logic
const kirimReminderBtn = document.getElementById('kirimReminderBtn');
const kirimReminderModal = document.getElementById('kirimReminderModal');
const closeKirimReminder = document.getElementById('closeKirimReminder');
const batalKirimReminder = document.getElementById('batalKirimReminder');

kirimReminderBtn.onclick = () => kirimReminderModal.style.display = 'flex';
closeKirimReminder.onclick = batalKirimReminder.onclick = () => kirimReminderModal.style.display = 'none';
kirimReminderModal.onclick = e => { if (e.target === kirimReminderModal) kirimReminderModal.style.display = 'none'; };

// Modal Laporan Tagihan logic
const laporanTagihanBtn = document.getElementById('laporanTagihanBtn');
const laporanTagihanModal = document.getElementById('laporanTagihanModal');
const closeLaporanTagihan = document.getElementById('closeLaporanTagihan');
const batalLaporanTagihan = document.getElementById('batalLaporanTagihan');

laporanTagihanBtn.onclick = () => laporanTagihanModal.style.display = 'flex';
closeLaporanTagihan.onclick = batalLaporanTagihan.onclick = () => laporanTagihanModal.style.display = 'none';
laporanTagihanModal.onclick = e => { if (e.target === laporanTagihanModal) laporanTagihanModal.style.display = 'none'; };

// Modal Export Data Tagihan logic
const exportTagihanBtn = document.getElementById('exportTagihanBtn');
const exportTagihanModal = document.getElementById('exportTagihanModal');
const closeExportTagihan = document.getElementById('closeExportTagihan');
const batalExportTagihan = document.getElementById('batalExportTagihan');

exportTagihanBtn.onclick = () => exportTagihanModal.style.display = 'flex';
closeExportTagihan.onclick = batalExportTagihan.onclick = () => exportTagihanModal.style.display = 'none';
exportTagihanModal.onclick = e => { if (e.target === exportTagihanModal) exportTagihanModal.style.display = 'none'; };
</script> 