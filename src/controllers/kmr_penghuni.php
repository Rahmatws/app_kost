<?php
require_once __DIR__ . '/../config.php';

function getAllKmrPenghuni() {
    global $conn;
    $sql = 'SELECT kp.*, k.nomor as nomor_kamar, p.nama as nama_penghuni FROM tb_kmr_penghuni kp JOIN tb_kamar k ON kp.id_kamar=k.id JOIN tb_penghuni p ON kp.id_penghuni=p.id';
    $result = mysqli_query($conn, $sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function getKmrPenghuniById($id) {
    global $conn;
    $sql = "SELECT * FROM tb_kmr_penghuni WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

function addKmrPenghuni($data) {
    global $conn;
    $id_kamar = mysqli_real_escape_string($conn, $data['id_kamar']);
    $id_penghuni = mysqli_real_escape_string($conn, $data['id_penghuni']);
    $tgl_masuk = mysqli_real_escape_string($conn, $data['tgl_masuk']);
    $sql = "INSERT INTO tb_kmr_penghuni (id_kamar, id_penghuni, tgl_masuk) VALUES ('$id_kamar', '$id_penghuni', '$tgl_masuk')";
    return mysqli_query($conn, $sql);
}

function updateKmrPenghuni($id, $data) {
    global $conn;
    $id_kamar = mysqli_real_escape_string($conn, $data['id_kamar']);
    $id_penghuni = mysqli_real_escape_string($conn, $data['id_penghuni']);
    $tgl_masuk = mysqli_real_escape_string($conn, $data['tgl_masuk']);
    $tgl_keluar = isset($data['tgl_keluar']) ? "'" . mysqli_real_escape_string($conn, $data['tgl_keluar']) . "'" : 'NULL';
    $sql = "UPDATE tb_kmr_penghuni SET id_kamar='$id_kamar', id_penghuni='$id_penghuni', tgl_masuk='$tgl_masuk', tgl_keluar=$tgl_keluar WHERE id=$id";
    return mysqli_query($conn, $sql);
}

function deleteKmrPenghuni($id) {
    global $conn;
    $sql = "DELETE FROM tb_kmr_penghuni WHERE id=$id";
    return mysqli_query($conn, $sql);
} 