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
}

require_once __DIR__ . '/src/routes.php'; 