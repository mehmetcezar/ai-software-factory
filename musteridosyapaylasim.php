<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
        <title>https://whitelotustest.online/</title>
        <meta name="ktmmo" content="kira satış danışman emlak alım">
        <link rel="stylesheet" type="text/css" href="main.css?rnd=<?php echo rand()?>">
        <link rel="shortcut icon" type="image/x-icon" href="image/logo/logo.jpeg" /> 
<script src="js/jquery-3.7.1.js"></script>
<script src="js/dataTables.js"></script>
<script src="js/dataTables.bootstrap5.js"></script>
<script src="js/dataTables.responsive.js"></script>
<script src="js/responsive.bootstrap5.js"></script>
<link rel="stylesheet" href="css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="css/responsive.bootstrap5.css">
<!--<script src="https://kit.fontawesome.com/9d1d9a82d2.js" crossorigin="anonymous"></script>-->
<script src="js/Chart.js"></script>

 <link href="css/bootstrap.min.css" rel="stylesheet">
  
  
   <script src="js/Turkish.json"></script>
<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
   <script src="js/jquery.dataTables.min.js"></script>
   <script src="js/dataTables.bootstrap5.min.js"></script>
    
    <link rel="stylesheet" href="/css/all.min.css">
    <style>
 .avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 8px;
            cursor: pointer; /* Avatar resmine tıklanabilir olmasını sağlar */
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }


</style>
    
    
    
</head>
  

    <script>/*
       function gopage2() {
  window.location.href = "https://www.ktimobina.com/userpage2.php";
    
    
}*/
              
    
    </script>
    <?php
    include 'usersession.php';
    //usersessiontimecheck();
            
         //echo "OK";     
session_start();
//echo $_SESSION['uname'];
//echo $_SESSION['sessionid'];
$session_id=$_SESSION['sessionid'];
$uname=$_SESSION['uname'];
$kultipi=$_SESSION['kultipi']; // kullanıcı yetkilerinin ve erişimlerinin kontrolunde kullanılır.
$pageid="musteripage"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.
/*echo $kultipi; 
echo "<br>";
echo  $uname;  */           
    if(!usersessioncheck($uname,$_SESSION['sessionid'])){
      Notdevam();  
    }
    /*if(!session_valid_id($session_id)){
      Notdevam();  
    }*/
    if($_SESSION['sessionid']!=session_id())
    {
        Notdevam(); 
    }
    
        //echo "OK";      
   
             include 'kullanicisayfayetkisi.php'; // kullanıcıların kultipine göre bu sayfaya erişim yetkilerinin olup olmayacağının ayarlandığı php dosyasıdır.
             // echo "OK";
             if(!kulsayfayetki($kultipi,$pageid,$uname))
             {
           echo "Sayfaya erişim yetkiniz yoktur!";
           exit(); 
                 
             }

//echo "OK"; 
function Notdevam()
{

header("Location: https://whitelotustest.online/admin.php"); /* Redirect browser */
exit();	
	
}
   ?> 
 
<body>

<?php 
    
    include 'menu.php'; // kultipine göre menun ayarlandığı php dosyasıdır.
    
    
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

// Login olmuş müşteri uname
$customer_uname = $_SESSION['uname'];

// Müşteriye paylaşılan dosyalar çekiliyor
$files = [];
if ($result = $conn->query("SELECT * FROM files WHERE  files.company_id = '{$_SESSION['company_id']}' AND receiver_uname = '$customer_uname' ORDER BY uploaded_at DESC")) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $files[] = $row;
    }
}
$conn->close();
    
    // Yardımcı fonksiyonlar
function formatBytes($bytes, $precision = 1) {
    $units = ['B', 'KB', 'MB', 'GB'];
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    $bytes /= pow(1024, $pow);
    return round($bytes, $precision) . ' ' . $units[$pow];
}

function getFileIcon($filename) {
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    switch ($ext) {
        case 'pdf':
            return '<i class="far fa-file-pdf text-danger me-2"></i>';
        case 'doc':
        case 'docx':
            return '<i class="far fa-file-word text-primary me-2"></i>';
        case 'xls':
        case 'xlsx':
            return '<i class="far fa-file-excel text-success me-2"></i>';
        case 'jpg':
        case 'jpeg':
        case 'png':
        case 'gif':
            return '<i class="far fa-file-image text-warning me-2"></i>';
        case 'zip':
        case 'rar':
            return '<i class="far fa-file-archive text-secondary me-2"></i>';
        default:
            return '<i class="far fa-file-alt text-muted me-2"></i>';
    }
}
    
    ?>
    
       
<div class="container mt-5">
  <h2 class="mb-4">📁 Paylaşılan Dosyalarım</h2>

  <?php if (!empty($files)): ?>
    <?php foreach ($files as $file): ?>
      <?php
        $icon = getFileIcon($file['original_name']);
        $size = formatBytes($file['size'] ?? 0);
        $date = date('d.m.Y H:i', strtotime($file['uploaded_at']));
        $safeFileName = htmlspecialchars($file['original_name']);
        $downloadPath = 'uploads/' . htmlspecialchars($file['filename']);
      ?>
      <div class="file-row">
        <div>
          <?= $icon ?>
          <strong><?= $safeFileName ?></strong><br>
          <span class="file-meta"><?= $size ?> | <?= $date ?></span>
        </div>
        <a href="<?= $downloadPath ?>" download="<?= $safeFileName ?>" class="btn btn-success btn-sm">
          <i class="fas fa-download me-1"></i> İndir
        </a>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <div class="alert alert-info">Henüz sizinle dosya paylaşılmadı.</div>
  <?php endif; ?>
</div>


 
    
    

<script>
    
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>