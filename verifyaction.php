<?php
include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = trim($_POST['code']);
    $username = $_SESSION['verify_username'];

    $conn = mysqli_connect($config['DB_HOST'], $config['DB_USERNAME'], $config['DB_PASSWORD'], $config['DB_DATABASE']);
    
    if (!$conn) {
        die("Bağlantı hatası: " . mysqli_connect_error());
    }

    // Check code
    $stmt = $conn->prepare("SELECT id FROM users WHERE uname = ? AND verification_code = ?");
    $stmt->bind_param("ss", $username, $code);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Success: Verify user
        $stmt = $conn->prepare("UPDATE users SET is_verified = 1, verification_code = NULL WHERE uname = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        
        unset($_SESSION['verify_username']);
        header("Location: admin.php?verify=success");
    } else {
        // Failure: Show error and redirect to home page
        echo "<html><body style='background:#111; color:#fff; font-family:sans-serif; display:flex; align-items:center; justify-content:center; height:100vh; text-align:center;'>";
        echo "<div><h2 style='color:#ff4d4d;'>Hata: Geçersiz Doğrulama Kodu</h2>";
        echo "<p>Girdiğiniz kod hatalı veya süresi dolmuş olabilir.</p>";
        echo "<p>Lütfen tekrar deneyiniz veya destek ekibiyle iletişime geçiniz.</p>";
        echo "<p>3 saniye içinde ana sayfaya yönlendiriliyorsunuz...</p></div>";
        echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 3000);</script>";
        echo "</body></html>";
    }

    mysqli_close($conn);
}
?>
