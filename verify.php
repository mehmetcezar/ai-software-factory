<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noveltech - E-posta Doğrulama</title>
    <link rel="stylesheet" href="register.css?rnd=<?php echo rand()?>">
    <link rel="shortcut icon" type="image/x-icon" href="image/logo/noveltechlogo.jpeg" />
    <style>
        .verify-box {
            text-align: center;
            max-width: 400px;
            margin: 50px auto;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .code-input {
            letter-spacing: 0.5rem;
            font-size: 2rem;
            text-align: center;
            padding: 10px;
            width: 80%;
            margin: 20px 0;
            background: rgba(0,0,0,0.3);
            border: 1px solid #4ade80;
            color: #fff;
            border-radius: 5px;
        }
    </style>
</head>
<?php
session_start();
if (!isset($_SESSION['verify_username'])) {
    header("Location: register.php");
    exit();
}
?>
<body>
    <div class="verify-box">
        <h2>E-posta Doğrulama</h2>
        <p>Hesabınızı aktifleştirmek için e-posta adresinize gönderdiğimiz 6 haneli kodu girin.</p>
        
        <form action="verifyaction.php" method="POST">
            <input type="text" name="code" class="code-input" placeholder="000000" maxlength="6" pattern="[0-9]{6}" required autofocus>
            <br>
            <button type="submit" class="reg-button">Doğrula ve Başla</button>
        </form>
    </div>
</body>
</html>
