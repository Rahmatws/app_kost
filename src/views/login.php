<?php
require_once __DIR__ . '/../controllers/auth.php';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!doLogin($_POST['username'], $_POST['password'])) {
        $error = 'Username atau password salah!';
    } else {
        header('Location: ../../index.php?page=home'); exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - KosVerse</title>
    <link rel="stylesheet" href="../assets/style.css">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(120deg, #f7e9d2 0%, #f5e6c8 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-box {
            max-width: 380px;
            width: 100%;
            margin: 40px auto;
            background: #fff8f0;
            border-radius: 18px;
            box-shadow: 0 4px 32px #0001;
            padding: 38px 32px 32px 32px;
            text-align: center;
        }
        .logo-kosverse {
            font-size: 2.2em;
            font-weight: bold;
            color: #2a3b4c;
            letter-spacing: 2px;
            margin-bottom: 8px;
        }
        .logo-kosverse svg {
            vertical-align: middle;
            margin-right: 8px;
        }
        .login-title {
            font-size: 2em;
            font-weight: 700;
            color: #2a3b4c;
            margin-bottom: 4px;
        }
        .login-subtitle {
            color: #8d7b5a;
            margin-bottom: 24px;
        }
        .login-box input[type=text],
        .login-box input[type=password] {
            width: 100%;
            padding: 12px 14px;
            border: 1.5px solid #e2c9a0;
            border-radius: 8px;
            margin-bottom: 18px;
            background: #fff;
            font-size: 1em;
            transition: border 0.2s;
        }
        .login-box input[type=text]:focus,
        .login-box input[type=password]:focus {
            border: 1.5px solid #e6b87a;
            outline: none;
        }
        .login-box input[type=submit] {
            width: 100%;
            background: linear-gradient(90deg, #e6b87a 0%, #f7e9d2 100%);
            color: #2a3b4c;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            padding: 12px 0;
            font-size: 1.1em;
            margin-top: 8px;
            cursor: pointer;
            box-shadow: 0 2px 8px #e6b87a22;
            transition: background 0.2s;
        }
        .login-box input[type=submit]:hover {
            background: linear-gradient(90deg, #f7e9d2 0%, #e6b87a 100%);
        }
        .login-box .error {
            color: #c00;
            margin-bottom: 12px;
        }
        @media (max-width: 600px) {
            .login-box { padding: 18px 6vw; }
        }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="logo-kosverse">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="15" fill="#ffb347" stroke="#2a3b4c" stroke-width="2"/><path d="M10 22V14L16 10L22 14V22H10Z" fill="#fff" stroke="#2a3b4c" stroke-width="2"/></svg>
            KosVerse
        </div>
        <div class="login-title">Masuk</div>
        <div class="login-subtitle">Masuk ke akun admin Anda</div>
        <?php if ($error): ?><div class="error"><?= $error ?></div><?php endif; ?>
        <form method="post">
            <input name="username" type="text" placeholder="Username" required autofocus autocomplete="username"><br>
            <input name="password" type="password" placeholder="Password" required autocomplete="current-password"><br>
            <input type="submit" value="Masuk">
        </form>
    </div>
    <script src="../assets/app.js"></script>
</body>
</html> 