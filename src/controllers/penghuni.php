<?php
require_once __DIR__ . '/../config.php';

function getAllPenghuni() {
    global $conn;
    $sql = 'SELECT * FROM tb_penghuni';
    $result = mysqli_query($conn, $sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function getPenghuniById($id) {
    global $conn;
    $sql = "SELECT * FROM tb_penghuni WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

function addPenghuni($data) {
    global $conn;
    $nama = mysqli_real_escape_string($conn, $data['nama']);
    $no_ktp = mysqli_real_escape_string($conn, $data['no_ktp']);
    $no_hp = mysqli_real_escape_string($conn, $data['no_hp']);
    $tgl_masuk = mysqli_real_escape_string($conn, $data['tgl_masuk']);
    $sql = "INSERT INTO tb_penghuni (nama, no_ktp, no_hp, tgl_masuk) VALUES ('$nama', '$no_ktp', '$no_hp', '$tgl_masuk')";
    return mysqli_query($conn, $sql);
}

function updatePenghuni($id, $data) {
    global $conn;
    $nama = mysqli_real_escape_string($conn, $data['nama']);
    $no_ktp = mysqli_real_escape_string($conn, $data['no_ktp']);
    $no_hp = mysqli_real_escape_string($conn, $data['no_hp']);
    $tgl_masuk = mysqli_real_escape_string($conn, $data['tgl_masuk']);
    $tgl_keluar = isset($data['tgl_keluar']) ? "'" . mysqli_real_escape_string($conn, $data['tgl_keluar']) . "'" : 'NULL';
    $sql = "UPDATE tb_penghuni SET nama='$nama', no_ktp='$no_ktp', no_hp='$no_hp', tgl_masuk='$tgl_masuk', tgl_keluar=$tgl_keluar WHERE id=$id";
    return mysqli_query($conn, $sql);
}

function deletePenghuni($id) {
    global $conn;
    $sql = "DELETE FROM tb_penghuni WHERE id=$id";
    return mysqli_query($conn, $sql);
} 