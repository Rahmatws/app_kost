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
    <a href="?page=tagihan&action=add" style="background:#7b5ae6;color:#fff;padding:10px 22px;border-radius:8px;font-weight:600;text-decoration:none;box-shadow:0 2px 8px #e6b87a22;">+ Buat Tagihan Baru</a>
    <button style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Kirim Reminder</button>
    <button style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Laporan Tagihan</button>
    <button style="background:#f5f8ff;color:#7b5ae6;padding:10px 22px;border-radius:8px;font-weight:600;border:none;box-shadow:0 2px 8px #e6b87a22;">Export Data</button>
</div>
<div style="display:flex;gap:0;margin-bottom:18px;">
    <button style="flex:1;background:#3b7be6;color:#fff;padding:10px 0;border-radius:8px 0 0 8px;font-weight:600;border:none;">Semua Tagihan</button>
    <button style="flex:1;background:#f5f8ff;color:#ffb347;padding:10px 0;border-radius:0;font-weight:600;border:none;">Menunggu Pembayaran</button>
    <button style="flex:1;background:#f5f8ff;color:#e65a5a;padding:10px 0;border-radius:0;font-weight:600;border:none;">Telat Bayar</button>
    <button style="flex:1;background:#f5f8ff;color:#3bb273;padding:10px 0;border-radius:0 8px 8px 0;font-weight:600;border:none;">Sudah Dibayar</button>
</div>
<div style="display:flex;flex-wrap:wrap;gap:24px;">
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
    <!-- Card dummy lain bisa ditambah sesuai kebutuhan -->
</div> 