<?php
include 'config.php';

$servername = $config['DB_HOST'];
$database = $config['DB_DATABASE'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function getCategory($filename) {
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    if ($ext == 'pdf') return 'PDF Dosyaları';
    if (in_array($ext, ['doc', 'docx'])) return 'Word Dosyaları';
    if (in_array($ext, ['xls', 'xlsx'])) return 'Excel Dosyaları';
    return 'Diğer Dosyalar';
}

function getIcon($filename) {
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    if ($ext == 'pdf') return '<i class="fas fa-file-pdf text-danger me-2"></i>';
    if (in_array($ext, ['doc', 'docx'])) return '<i class="fas fa-file-word text-primary me-2"></i>';
    if (in_array($ext, ['xls', 'xlsx'])) return '<i class="fas fa-file-excel text-success me-2"></i>';
    if (in_array($ext, ['zip', 'rar'])) return '<i class="fas fa-file-archive text-warning me-2"></i>';
    //return '<i class="fas fa-file-alt text-secondary me-2"></i>';
}

if (isset($_GET['receiver_uname'])) {
    //$receiver_uname = $_GET['receiver_uname'];
    $receiver_uname = mysqli_real_escape_string($conn, $_GET['receiver_uname']);
    $result = $conn->query("SELECT * FROM files WHERE  files.company_id = '{$_SESSION['company_id']}' AND receiver_uname = '$receiver_uname' ORDER BY uploaded_at DESC");

    $categories = [];

    while ($file = $result->fetch_array(MYSQLI_ASSOC)) {
        $category = getCategory($file['original_name']);
        $categories[$category][] = $file;
    }

    foreach ($categories as $categoryName => $files) {
        echo "<h5 class='mt-4'>$categoryName</h5>";
        foreach ($files as $file) {
            $icon = getIcon($file['original_name']);
            $originalName = htmlspecialchars($file['original_name']);
            $filePath = 'uploads/' . urlencode($file['filename']);
            $fileId = (int)$file['id'];
            $sizeKB = round($file['size'] / 1024, 1); // Dosya boyutu KB cinsinden
            echo "
<div class='file-row'>
    <div class='d-flex align-items-center'>
        $icon 
        <a href='$filePath' download='$originalName'>
            $originalName <small class='text-muted'>($sizeKB KB)</small>
        </a>
    </div>
    <button class='delete-btn' onclick='deleteFile($fileId, \"$receiver_uname\")'>
        <i class='fas fa-trash-alt'></i>
    </button>
</div>";
        }
    }
    if (empty($categories)) {
    echo "<div class='alert alert-info mt-3'>Seçilen müşteriye ait dosya bulunamadı.</div>";
}
}
$conn->close();
?>