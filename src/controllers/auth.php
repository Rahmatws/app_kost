<?php
session_start();
require_once __DIR__ . '/../config.php';
function isLoggedIn() {
    return isset($_SESSION['login']) && $_SESSION['login'] === true;
}
function doLogin($username, $password) {
    global $conn;
    $username = mysqli_real_escape_string($conn, $username);
    $sql = "SELECT * FROM tb_user WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        if ($row['password'] === $password) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            return true;
        }
    }
    return false;
}
function doLogout() {
    session_destroy();
} 