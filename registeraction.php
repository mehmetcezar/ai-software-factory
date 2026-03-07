<?php
include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name = trim($_POST['company_name']);
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password_raw = $_POST['password'];

    $conn = mysqli_connect($config['DB_HOST'], $config['DB_USERNAME'], $config['DB_PASSWORD'], $config['DB_DATABASE']);

    if (!$conn) {
        die("Bağlantı hatası: " . mysqli_connect_error());
    }

    // 1. Check if user already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE uname = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        die("Bu kullanıcı adı zaten alınmış.");
    }

    // 2. Create Company
    $stmt = $conn->prepare("INSERT INTO companies (company_name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $company_name, $email);
    $stmt->execute();
    $company_id = $stmt->insert_id;

    // 3. Create Admin User for this Company
    $password_hashed = password_hash($password_raw, PASSWORD_DEFAULT);
    $is_admin = 1;

    $stmt = $conn->prepare("INSERT INTO users (company_id, name, surname, uname, password, email, isadmin) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssi", $company_id, $first_name, $last_name, $username, $password_hashed, $email, $is_admin);

    if ($stmt->execute()) {
        header("Location: admin.php?reg=success");
    }
    else {
        echo "Hata: " . $stmt->error;
    }

    mysqli_close($conn);
}
?>
