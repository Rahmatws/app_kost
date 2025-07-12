# Kost Management System (Static Simulation)

Aplikasi web simulasi manajemen kost/boarding house dengan UI modern, fitur lengkap, dan data statis (tanpa backend/database). Dirancang untuk demo, presentasi, dan perancangan sistem.

## Fitur Utama

### 1. Dashboard
- Ringkasan data penghuni, kamar, barang, tagihan, pembayaran.
- Info kamar kosong, hampir jatuh tempo, telat bayar.
- Navigasi cepat ke fitur utama.

### 2. Data Penghuni
- Tabel penghuni lengkap (ID, Nama, KTP, HP, Tgl Masuk, Status, dll).
- Tambah, edit, hapus, detail penghuni (simulasi modal).
- Statistik penghuni aktif, menunggu konfirmasi, kamar terisi.
- Pencarian penghuni.

### 3. Data Kamar
- Daftar kamar dengan status (Tersedia, Terisi, Maintenance), tipe (Standar, VIP, Deluxe), harga, fasilitas.
- Filter berdasarkan status, tipe, harga.
- Tambah, edit, hapus kamar (simulasi modal).
- Export data, print laporan.

### 4. Data Barang
- Tabel inventori barang (furniture, elektronik, dapur, kebersihan).
- Filter kategori, kondisi, dan pencarian.
- Tambah, edit, hapus barang (simulasi modal).
- Export data, laporan inventori, update stok.

### 5. Barang Bawaan
- Daftar barang bawaan penghuni (nama barang, jumlah, status check-in/out).
- Filter status, verifikasi, pencarian.
- Input barang bawaan, laporan check-in/out, export data (semua via modal statis).

### 6. Tagihan
- Daftar tagihan penghuni (status: menunggu, telat, lunas, dll).
- Filter status tagihan.
- Buat tagihan baru, kirim reminder, laporan tagihan, export data (semua via modal statis).

### 7. Pembayaran
- Daftar pembayaran (status: terverifikasi, menunggu, gagal, telat, dibatalkan).
- Filter status, metode, periode.
- Input pembayaran manual, laporan keuangan, export data, buat kwitansi (semua via modal statis).

## Navigasi & UI
- Semua fitur diakses dari sidebar dan dashboard.
- Semua aksi utama (tambah, edit, export, laporan) menggunakan modal statis yang responsif.
- Data dummy pada setiap modul mewakili semua status/tipe yang mungkin.
- Tidak ada backend/database, semua data hanya simulasi di frontend.

## Diagram Use Case

```mermaid
graph TD
  Admin((Admin))
  Penghuni((Penghuni))
  UC1([Kelola Data Penghuni])
  UC2([Kelola Data Kamar])
  UC3([Kelola Data Barang])
  UC4([Kelola Barang Bawaan])
  UC5([Kelola Tagihan])
  UC6([Kelola Pembayaran])
  UC7([Lihat Dashboard])
  UC8([Export/Laporan])
  UC9([Lihat Tagihan])
  UC10([Lihat Status Pembayaran])
  UC11([Lihat Data Kamar])
  UC12([Lihat Barang Bawaan])

  Admin --> UC1
  Admin --> UC2
  Admin --> UC3
  Admin --> UC4
  Admin --> UC5
  Admin --> UC6
  Admin --> UC7
  Admin --> UC8
  Penghuni --> UC9
  Penghuni --> UC10
  Penghuni --> UC11
  Penghuni --> UC12
```

## Diagram Entity Relationship (ERD)

```mermaid
graph TD
  Penghuni((Penghuni))
  Kamar((Kamar))
  Barang((Barang))
  BarangBawaan((Barang Bawaan))
  Tagihan((Tagihan))
  Pembayaran((Pembayaran))

  Penghuni -- "menempati" --> Kamar
  Kamar -- "memiliki" --> Barang
  Penghuni -- "memiliki" --> BarangBawaan
  Penghuni -- "menerima" --> Tagihan
  Tagihan -- "dibayar oleh" --> Pembayaran
  Pembayaran -- "untuk" --> Tagihan
  BarangBawaan -- "terkait" --> Kamar

  Penghuni -- "melakukan" --> Pembayaran
  Kamar -- "memiliki status" --> Tagihan
  Barang -- "dikelola" --> BarangBawaan
```

---

> **Catatan:**
> Semua data, aksi, dan filter hanya simulasi statis di frontend. Tidak ada database atau backend. Untuk pengembangan lebih lanjut, backend/API dapat diintegrasikan sesuai struktur data di atas.
