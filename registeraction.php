<?php
include 'config.php';
include 'mailsender.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name = trim($_POST['company_name']);
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $phone = trim($_POST['phone']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password_raw = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password_raw !== $password_confirm) {
        die("Hata: Şifreler birbiriyle uyuşmuyor. Lütfen kontrol edip tekrar deneyiniz.");
    }

    $conn = mysqli_connect($config['DB_HOST'], $config['DB_USERNAME'], $config['DB_PASSWORD'], $config['DB_DATABASE']);
    
    if (!$conn) {
        die("Bağlantı hatası: " . mysqli_connect_error());
    }

    // 1. Check if user already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE uname = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        die("Bu kullanıcı adı veya e-posta zaten kullanımda.");
    }

    // 2. Create Company
    $stmt = $conn->prepare("INSERT INTO companies (company_name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $company_name, $email);
    $stmt->execute();
    $company_id = $stmt->insert_id;

    // 3. Generate 6-digit verification code
    $verification_code = sprintf("%06d", mt_rand(1, 999999));

    // 4. Create Admin User (Unverified)
    $password_hashed = password_hash($password_raw, PASSWORD_DEFAULT);
    $is_admin = 1;
    $is_verified = 0;

    $stmt = $conn->prepare("INSERT INTO users (company_id, name, surname, uname, password, email, phone, verification_code, is_verified, isadmin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssssii", $company_id, $first_name, $last_name, $username, $password_hashed, $email, $phone, $verification_code, $is_verified, $is_admin);
    
    if ($stmt->execute()) {
        // Send email
        $message = "Noveltech Kayıt Doğrulama Kodunuz: " . $verification_code;
        mailsender($email, $message);
        
        $_SESSION['verify_username'] = $username;
        header("Location: verify.php");
    } else {
        echo "Hata: " . $stmt->error;
    }

    mysqli_close($conn);
}
?>
