<?php
include 'config.php';
include 'mailsender.php';
session_start();

function alertAndGoBack($msg) {
    echo "<script>alert('$msg'); window.history.back();</script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name = trim($_POST['company_name']);
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $phone = trim($_POST['phone']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password_raw = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    // 1. Password Confirmation
    if ($password_raw !== $password_confirm) {
        alertAndGoBack("Hata: Şifreler birbiriyle uyuşmuyor.");
    }

    // 2. Username Validation (No Turkish chars, alphanumeric + . _, length 3-20)
    // [a-zA-Z0-9._] -> Sadece ingilizce harf, rakam, nokta ve alt çizgi
    if (!preg_match('/^[a-zA-Z0-9._]{3,20}$/', $username)) {
        alertAndGoBack("Hata: Kullanıcı adı 3-20 karakter olmalı, Türkçe karakter içermemeli ve sadece harf, rakam, nokta veya alt çizgi içermelidir.");
    }

    // 3. Name/Surname Validation (Letters only, space and dot allowed, NO NUMBERS or symbols)
    // \p{L} is any letter from any language, including Turkish
    if (!preg_match('/^[\p{L} .]{1,30}$/u', $first_name) || !preg_match('/^[\p{L} .]{1,30}$/u', $last_name)) {
        alertAndGoBack("Hata: Ad ve Soyad sadece harf, boşluk ve nokta içerebilir, 30 karakterden uzun olamaz.");
    }

    // 4. Company Name Validation (Letters, numbers, space, & . - / , allowed)
    // We allow a set of safe commercial symbols
    if (!preg_match('/^[\p{L}0-9 &.\-\/,]{1,100}$/u', $company_name)) {
        alertAndGoBack("Hata: Şirket adı geçersiz karakterler içeriyor. Sadece harf, rakam ve şu sembollere izin verilir: & . - / ,");
    }

    // 5. Email Validation (Format + Max 30 as per schema)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 30) {
        alertAndGoBack("Hata: Geçersiz e-posta formatı veya 30 karakter sınırını aşıyor.");
    }

    // 6. Phone Validation (Format 5XXXXXXXXX)
    if (!preg_match('/^5[0-9]{9}$/', $phone)) {
        alertAndGoBack("Hata: Telefon numarası 5XXXXXXXXX formatında (10 hane) olmalıdır.");
    }

    $conn = mysqli_connect($config['DB_HOST'], $config['DB_USERNAME'], $config['DB_PASSWORD'], $config['DB_DATABASE']);
    
    if (!$conn) {
        die("Bağlantı hatası: " . mysqli_connect_error());
    }

    // Check if user already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE uname = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        alertAndGoBack("Hata: Bu kullanıcı adı veya e-posta zaten kullanımda.");
    }

    // Create Company
    $stmt = $conn->prepare("INSERT INTO companies (company_name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $company_name, $email);
    $stmt->execute();
    $company_id = $stmt->insert_id;

    // Generate 6-digit verification code
    $verification_code = sprintf("%06d", mt_rand(1, 999999));

    // Create Admin User (Unverified)
    $password_hashed = password_hash($password_raw, PASSWORD_DEFAULT);
    $is_admin = 1;
    $is_verified = 0;

    $stmt = $conn->prepare("INSERT INTO users (company_id, name, surname, uname, password, email, phone, verification_code, is_verified, isadmin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssssii", $company_id, $first_name, $last_name, $username, $password_hashed, $email, $phone, $verification_code, $is_verified, $is_admin);
    
    if ($stmt->execute()) {
        $message = "Noveltech Kayıt Doğrulama Kodunuz: " . $verification_code;
        mailsender($email, $message);
        
        $_SESSION['verify_username'] = $username;
        header("Location: verify.php");
    } else {
        alertAndGoBack("Veritabanı hatası: " . $stmt->error);
    }

    mysqli_close($conn);
}
?>
