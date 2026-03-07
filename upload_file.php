<?php
session_start();
include 'config.php';

$servername = $config['DB_HOST'];
$database = $config['DB_DATABASE'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$authorized_uname = $_SESSION['uname'];

if (!empty($_FILES['files']['name']) && isset($_POST['receiver_uname'])) {
    $receiver_uname = $_POST['receiver_uname'];

    foreach ($_FILES['files']['name'] as $key => $val) {
        $original_name = $_FILES['files']['name'][$key];
        $tmp_name = $_FILES['files']['tmp_name'][$key];
        $file_size = $_FILES['files']['size'][$key]; // 📌 BOYUT BURADA ALINIYOR
        $filename = uniqid() . '_' . basename($original_name);
        $target = 'uploads/' . $filename;

        if (move_uploaded_file($tmp_name, $target)) {
            $now = date('Y-m-d H:i:s');

            // 📌 Dosya boyutu da ekleniyor
            $conn->query("INSERT INTO files 
                (sender_uname, receiver_uname, filename, original_name, uploaded_at, size, company_id) 
                VALUES 
                ('$authorized_uname', '$receiver_uname', '$filename', '$original_name', '$now', '$file_size', '{$_SESSION['company_id']}')");
        }
    }

    echo "Dosyalar başarıyla yüklendi.";
} else {
    echo "Dosya yüklenemedi.";
}
$conn->close();
?>