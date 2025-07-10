<?php
require_once __DIR__ . '/../config.php';

function getAllKamar() {
    global $conn;
    $sql = 'SELECT * FROM tb_kamar';
    $result = mysqli_query($conn, $sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function getKamarById($id) {
    global $conn;
    $sql = "SELECT * FROM tb_kamar WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

function addKamar($data) {
    global $conn;
    $nomor = mysqli_real_escape_string($conn, $data['nomor']);
    $harga = mysqli_real_escape_string($conn, $data['harga']);
    $sql = "INSERT INTO tb_kamar (nomor, harga) VALUES ('$nomor', '$harga')";
    return mysqli_query($conn, $sql);
}

function updateKamar($id, $data) {
    global $conn;
    $nomor = mysqli_real_escape_string($conn, $data['nomor']);
    $harga = mysqli_real_escape_string($conn, $data['harga']);
    $sql = "UPDATE tb_kamar SET nomor='$nomor', harga='$harga' WHERE id=$id";
    return mysqli_query($conn, $sql);
}

function deleteKamar($id) {
    global $conn;
    $sql = "DELETE FROM tb_kamar WHERE id=$id";
    return mysqli_query($conn, $sql);
} 