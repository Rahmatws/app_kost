<?php
require_once __DIR__ . '/../config.php';

function getAllBarang() {
    global $conn;
    $sql = 'SELECT * FROM tb_barang';
    $result = mysqli_query($conn, $sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function getBarangById($id) {
    global $conn;
    $sql = "SELECT * FROM tb_barang WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

function addBarang($data) {
    global $conn;
    $nama = mysqli_real_escape_string($conn, $data['nama']);
    $harga = mysqli_real_escape_string($conn, $data['harga']);
    $sql = "INSERT INTO tb_barang (nama, harga) VALUES ('$nama', '$harga')";
    return mysqli_query($conn, $sql);
}

function updateBarang($id, $data) {
    global $conn;
    $nama = mysqli_real_escape_string($conn, $data['nama']);
    $harga = mysqli_real_escape_string($conn, $data['harga']);
    $sql = "UPDATE tb_barang SET nama='$nama', harga='$harga' WHERE id=$id";
    return mysqli_query($conn, $sql);
}

function deleteBarang($id) {
    global $conn;
    $sql = "DELETE FROM tb_barang WHERE id=$id";
    return mysqli_query($conn, $sql);
} 