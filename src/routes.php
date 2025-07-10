<?php
$page = $_GET['page'] ?? 'home';
$content_view = '';
switch ($page) {
    case 'home':
        $content_view = 'home_content.php';
        break;
    case 'penghuni':
        $content_view = 'penghuni_content.php';
        break;
    case 'kamar':
        $content_view = 'kamar_content.php';
        break;
    case 'barang':
        $content_view = 'barang_content.php';
        break;
    case 'kmr_penghuni':
        $content_view = 'kmr_penghuni_content.php';
        break;
    case 'brng_bawaan':
        $content_view = 'brng_bawaan_content.php';
        break;
    case 'tagihan':
        $content_view = 'tagihan_content.php';
        break;
    case 'bayar':
        $content_view = 'pembayaran_content.php';
        break;
    default:
        $content_view = '404.php';
        break;
}
include 'views/layout.php'; 