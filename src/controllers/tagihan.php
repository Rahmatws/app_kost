<?php
require_once __DIR__ . '/../config.php';

function getAllTagihan() {
    global $conn;
    $sql = 'SELECT t.*, kp.id as id_kmr_penghuni, k.nomor as nomor_kamar, p.nama as nama_penghuni FROM tb_tagihan t JOIN tb_kmr_penghuni kp ON t.id_kmr_penghuni=kp.id JOIN tb_kamar k ON kp.id_kamar=k.id JOIN tb_penghuni p ON kp.id_penghuni=p.id';
    $result = mysqli_query($conn, $sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function getTagihanById($id) {
    global $conn;
    $sql = "SELECT * FROM tb_tagihan WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

function addTagihan($data) {
    global $conn;
    $bulan = mysqli_real_escape_string($conn, $data['bulan']);
    $id_kmr_penghuni = mysqli_real_escape_string($conn, $data['id_kmr_penghuni']);
    $jml_tagihan = mysqli_real_escape_string($conn, $data['jml_tagihan']);
    $sql = "INSERT INTO tb_tagihan (bulan, id_kmr_penghuni, jml_tagihan) VALUES ('$bulan', '$id_kmr_penghuni', '$jml_tagihan')";
    return mysqli_query($conn, $sql);
}

function updateTagihan($id, $data) {
    global $conn;
    $bulan = mysqli_real_escape_string($conn, $data['bulan']);
    $id_kmr_penghuni = mysqli_real_escape_string($conn, $data['id_kmr_penghuni']);
    $jml_tagihan = mysqli_real_escape_string($conn, $data['jml_tagihan']);
    $sql = "UPDATE tb_tagihan SET bulan='$bulan', id_kmr_penghuni='$id_kmr_penghuni', jml_tagihan='$jml_tagihan' WHERE id=$id";
    return mysqli_query($conn, $sql);
}

function deleteTagihan($id) {
    global $conn;
    $sql = "DELETE FROM tb_tagihan WHERE id=$id";
    return mysqli_query($conn, $sql);
} 