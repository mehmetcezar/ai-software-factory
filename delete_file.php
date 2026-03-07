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

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = $conn->query("SELECT filename FROM files WHERE id = $id");
    if ($file = $result->fetch_array(MYSQLI_ASSOC)) {
        unlink('uploads/' . $file['filename']);
        $conn->query("DELETE FROM files WHERE id = $id");
    }
}
$conn->close();
?>