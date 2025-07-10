<?php
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        require 'views/home.php';
        break;
    case 'penghuni':
        require 'views/penghuni.php';
        break;
    case 'kamar':
        require 'views/kamar.php';
        break;
    case 'barang':
        require 'views/barang.php';
        break;
    case 'kmr_penghuni':
        require 'views/kmr_penghuni.php';
        break;
    case 'brng_bawaan':
        require 'views/brng_bawaan.php';
        break;
    default:
        require 'views/404.php';
        break;
} 