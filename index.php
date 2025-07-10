<?php
require_once __DIR__ . '/src/config.php';

// Handler aksi CRUD data master
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if ($page === 'penghuni') {
        require_once __DIR__ . '/src/controllers/penghuni.php';
        if (isset($_GET['action'])) {
            if ($_GET['action'] === 'save' && $_SERVER['REQUEST_METHOD'] === 'POST') {
                addPenghuni($_POST);
                header('Location: ?page=penghuni'); exit;
            }
            if ($_GET['action'] === 'update' && isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
                updatePenghuni($_GET['id'], $_POST);
                header('Location: ?page=penghuni'); exit;
            }
            if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
                deletePenghuni($_GET['id']);
                header('Location: ?page=penghuni'); exit;
            }
        }
    }
    if ($page === 'kamar') {
        require_once __DIR__ . '/src/controllers/kamar.php';
        if (isset($_GET['action'])) {
            if ($_GET['action'] === 'save' && $_SERVER['REQUEST_METHOD'] === 'POST') {
                addKamar($_POST);
                header('Location: ?page=kamar'); exit;
            }
            if ($_GET['action'] === 'update' && isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
                updateKamar($_GET['id'], $_POST);
                header('Location: ?page=kamar'); exit;
            }
            if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
                deleteKamar($_GET['id']);
                header('Location: ?page=kamar'); exit;
            }
        }
    }
    if ($page === 'barang') {
        require_once __DIR__ . '/src/controllers/barang.php';
        if (isset($_GET['action'])) {
            if ($_GET['action'] === 'save' && $_SERVER['REQUEST_METHOD'] === 'POST') {
                addBarang($_POST);
                header('Location: ?page=barang'); exit;
            }
            if ($_GET['action'] === 'update' && isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
                updateBarang($_GET['id'], $_POST);
                header('Location: ?page=barang'); exit;
            }
            if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
                deleteBarang($_GET['id']);
                header('Location: ?page=barang'); exit;
            }
        }
    }
    if ($page === 'kmr_penghuni') {
        require_once __DIR__ . '/src/controllers/kmr_penghuni.php';
        if (isset($_GET['action'])) {
            if ($_GET['action'] === 'save' && $_SERVER['REQUEST_METHOD'] === 'POST') {
                addKmrPenghuni($_POST);
                header('Location: ?page=kmr_penghuni'); exit;
            }
            if ($_GET['action'] === 'update' && isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
                updateKmrPenghuni($_GET['id'], $_POST);
                header('Location: ?page=kmr_penghuni'); exit;
            }
            if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
                deleteKmrPenghuni($_GET['id']);
                header('Location: ?page=kmr_penghuni'); exit;
            }
            if ($_GET['action'] === 'update_keluar' && isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
                updateKeluarKmrPenghuni($_GET['id'], $_POST['tgl_keluar']);
                header('Location: ?page=kmr_penghuni'); exit;
            }
            if ($_GET['action'] === 'update_pindah' && isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
                updatePindahKmrPenghuni($_GET['id'], $_POST['tgl_keluar']);
                header('Location: ?page=kmr_penghuni&action=add'); exit;
            }
        }
    }
    if ($page === 'brng_bawaan') {
        require_once __DIR__ . '/src/controllers/brng_bawaan.php';
        if (isset($_GET['action'])) {
            if ($_GET['action'] === 'save' && $_SERVER['REQUEST_METHOD'] === 'POST') {
                addBrngBawaan($_POST);
                header('Location: ?page=brng_bawaan'); exit;
            }
            if ($_GET['action'] === 'update' && isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
                updateBrngBawaan($_GET['id'], $_POST);
                header('Location: ?page=brng_bawaan'); exit;
            }
            if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
                deleteBrngBawaan($_GET['id']);
                header('Location: ?page=brng_bawaan'); exit;
            }
        }
    }
    if ($page === 'tagihan') {
        require_once __DIR__ . '/src/controllers/tagihan.php';
        if (isset($_GET['action'])) {
            if ($_GET['action'] === 'save' && $_SERVER['REQUEST_METHOD'] === 'POST') {
                addTagihan($_POST);
                header('Location: ?page=tagihan'); exit;
            }
            if ($_GET['action'] === 'update' && isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
                updateTagihan($_GET['id'], $_POST);
                header('Location: ?page=tagihan'); exit;
            }
            if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
                deleteTagihan($_GET['id']);
                header('Location: ?page=tagihan'); exit;
            }
        }
    }
    if ($page === 'bayar') {
        require_once __DIR__ . '/src/controllers/bayar.php';
        if (isset($_GET['action'])) {
            if ($_GET['action'] === 'save' && $_SERVER['REQUEST_METHOD'] === 'POST') {
                addBayar($_POST);
                header('Location: ?page=bayar'); exit;
            }
            if ($_GET['action'] === 'update' && isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
                updateBayar($_GET['id'], $_POST);
                header('Location: ?page=bayar'); exit;
            }
            if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
                deleteBayar($_GET['id']);
                header('Location: ?page=bayar'); exit;
            }
        }
    }
}

require_once __DIR__ . '/src/routes.php'; 