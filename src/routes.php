<?php
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        require 'views/home.php';
        break;
    default:
        require 'views/404.php';
        break;
} 