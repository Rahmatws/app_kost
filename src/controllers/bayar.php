<?php
require_once __DIR__ . '/../config.php';

function getAllBayar() {
    global $conn;
    $sql = 'SELECT b.*, t.bulan, t.jml_tagihan, kp.id as id_kmr_penghuni, k.nomor as nomor_kamar, p.nama as nama_penghuni FROM tb_bayar b JOIN tb_tagihan t ON b.id_tagihan=t.id JOIN tb_kmr_penghuni kp ON t.id_kmr_penghuni=kp.id JOIN tb_kamar k ON kp.id_kamar=k.id JOIN tb_penghuni p ON kp.id_penghuni=p.id';
    $result = mysqli_query($conn, $sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function getBayarById($id) {
    global $conn;
    $sql = "SELECT * FROM tb_bayar WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

function addBayar($data) {
    global $conn;
    $id_tagihan = mysqli_real_escape_string($conn, $data['id_tagihan']);
    $jml_bayar = mysqli_real_escape_string($conn, $data['jml_bayar']);
    $status = mysqli_real_escape_string($conn, $data['status']);
    $sql = "INSERT INTO tb_bayar (id_tagihan, jml_bayar, status) VALUES ('$id_tagihan', '$jml_bayar', '$status')";
    return mysqli_query($conn, $sql);
}

function updateBayar($id, $data) {
    global $conn;
    $id_tagihan = mysqli_real_escape_string($conn, $data['id_tagihan']);
    $jml_bayar = mysqli_real_escape_string($conn, $data['jml_bayar']);
    $status = mysqli_real_escape_string($conn, $data['status']);
    $sql = "UPDATE tb_bayar SET id_tagihan='$id_tagihan', jml_bayar='$jml_bayar', status='$status' WHERE id=$id";
    return mysqli_query($conn, $sql);
}

function deleteBayar($id) {
    global $conn;
    $sql = "DELETE FROM tb_bayar WHERE id=$id";
    return mysqli_query($conn, $sql);
} 