<?php
require_once __DIR__ . '/../config.php';

function getAllBrngBawaan() {
    global $conn;
    $sql = 'SELECT bb.*, p.nama as nama_penghuni, b.nama as nama_barang FROM tb_brng_bawaan bb JOIN tb_penghuni p ON bb.id_penghuni=p.id JOIN tb_barang b ON bb.id_barang=b.id';
    $result = mysqli_query($conn, $sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function getBrngBawaanById($id) {
    global $conn;
    $sql = "SELECT * FROM tb_brng_bawaan WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

function addBrngBawaan($data) {
    global $conn;
    $id_penghuni = mysqli_real_escape_string($conn, $data['id_penghuni']);
    $id_barang = mysqli_real_escape_string($conn, $data['id_barang']);
    $sql = "INSERT INTO tb_brng_bawaan (id_penghuni, id_barang) VALUES ('$id_penghuni', '$id_barang')";
    return mysqli_query($conn, $sql);
}

function updateBrngBawaan($id, $data) {
    global $conn;
    $id_penghuni = mysqli_real_escape_string($conn, $data['id_penghuni']);
    $id_barang = mysqli_real_escape_string($conn, $data['id_barang']);
    $sql = "UPDATE tb_brng_bawaan SET id_penghuni='$id_penghuni', id_barang='$id_barang' WHERE id=$id";
    return mysqli_query($conn, $sql);
}

function deleteBrngBawaan($id) {
    global $conn;
    $sql = "DELETE FROM tb_brng_bawaan WHERE id=$id";
    return mysqli_query($conn, $sql);
} 