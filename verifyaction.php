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
        header("Location: verify.php?error=invalid");
    }

    mysqli_close($conn);
}
?>
