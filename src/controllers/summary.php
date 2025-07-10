<?php
require_once __DIR__ . '/../config.php';

function getKamarKosong() {
    global $conn;
    $sql = "SELECT * FROM tb_kamar WHERE id NOT IN (SELECT id_kamar FROM tb_kmr_penghuni WHERE tgl_keluar IS NULL)";
    $result = mysqli_query($conn, $sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function getKamarHampirJatuhTempo() {
    global $conn;
    $sql = "SELECT k.nomor, p.nama, t.bulan, t.jml_tagihan FROM tb_tagihan t JOIN tb_kmr_penghuni kp ON t.id_kmr_penghuni=kp.id JOIN tb_kamar k ON kp.id_kamar=k.id JOIN tb_penghuni p ON kp.id_penghuni=p.id WHERE t.bulan = DATE_FORMAT(DATE_ADD(CURDATE(), INTERVAL 1 MONTH), '%Y-%m')";
    $result = mysqli_query($conn, $sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function getKamarTelatBayar() {
    global $conn;
    $sql = "SELECT k.nomor, p.nama, t.bulan, t.jml_tagihan FROM tb_tagihan t JOIN tb_kmr_penghuni kp ON t.id_kmr_penghuni=kp.id JOIN tb_kamar k ON kp.id_kamar=k.id JOIN tb_penghuni p ON kp.id_penghuni=p.id WHERE t.bulan < DATE_FORMAT(CURDATE(), '%Y-%m') AND t.id NOT IN (SELECT id_tagihan FROM tb_bayar WHERE status='lunas')";
    $result = mysqli_query($conn, $sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function getSummaryCount() {
    global $conn;
    $data = [];
    $tables = ['tb_penghuni','tb_kamar','tb_barang','tb_kmr_penghuni','tb_tagihan','tb_bayar'];
    foreach ($tables as $tb) {
        $q = mysqli_query($conn, "SELECT COUNT(*) as jml FROM $tb");
        $row = mysqli_fetch_assoc($q);
        $data[$tb] = $row['jml'];
    }
    return $data;
} 