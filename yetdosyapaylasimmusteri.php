<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
        <title>https://whitelotustest.online/</title>
        <meta name="ktmmo" content="kira satış danışman emlak alım">
        <link rel="stylesheet" type="text/css" href="main.css?rnd=<?php echo rand()?>">
        <link rel="stylesheet" type="text/css" href="fileshare.css?rnd=<?php echo rand()?>">
        <link rel="shortcut icon" type="image/x-icon" href="image/logo/logo.jpeg" /> 
<!--<script src="js/jquery-3.7.1.js"></script>-->
<script src="js/dataTables.js"></script>
<script src="js/dataTables.bootstrap5.js"></script>
<script src="js/dataTables.responsive.js"></script>
<script src="js/responsive.bootstrap5.js"></script>
<link rel="stylesheet" href="css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="css/responsive.bootstrap5.css">
<!--<script src="https://kit.fontawesome.com/9d1d9a82d2.js" crossorigin="anonymous"></script>--->
<script src="js/Chart.js"></script>

 <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
  
   <script src="js/Turkish.json"></script>
<script src="js/jquery.min.js"></script>
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
        
        .dropzone {
            border: 2px dashed #007bff;
            padding: 30px;
            text-align: center;
            cursor: pointer;
            color: #999;
        }
        .dropzone.dragover {
            background-color: #e9ecef;
        }    

</style>
    
    
    
</head>
  

    <script>           
    
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
$pageid="yetkilipage"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.
    //echo "OK"; 
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
    
  
include 'config.php';

$servername = $config['DB_HOST'];
$database = $config['DB_DATABASE'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$customers = [];
if ($result = $conn->query("SELECT id, uname, name, surname FROM users WHERE users.isdeleted != 1 AND users.musteri = 1")) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $customers[] = $row;
    }
}
$conn->close();

    ?>
    
       
<div class="container">
    <h2>Yetkili Paneli - Dosya Paylaşım</h2>

    <div class="mb-3">
        <label for="customerSelect">Müşteri Seç:</label>
        <select id="customerSelect" class="form-select">
            <option value="">Müşteri Seçiniz</option>
            <?php foreach ($customers as $customer): ?>
                <option value="<?= htmlspecialchars($customer['uname']) ?>">
                    <?= htmlspecialchars($customer['name'] . " " . $customer['surname']) ?> (<?= htmlspecialchars($customer['uname']) ?>)
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div id="fileSection" style="display:none;">
        <div id="dropzone" class="dropzone mb-3">
            Dosyaları buraya sürükleyip bırakın ya da tıklayın
        </div>
        <input type="file" id="fileInput" multiple hidden>

        <div id="uploadStatus" class="mb-3"></div>
<div class="progress mb-3" style="height: 25px; display:none;">
  <div id="progressBar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" 
       style="width: 0%">0%</div>
</div>

        <h4>Paylaşılan Dosyalar</h4>
        <div id="fileList"></div>
    </div>
</div>

<!-- Loading ekranı -->
<div id="loadingOverlay" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; 
     background:rgba(255,255,255,0.8); z-index:9999; justify-content:center; align-items:center; font-size:2em;">
    <div>Yükleniyor... ⏳</div>
</div>


<script>
const dropzone = document.getElementById('dropzone');
const fileInput = document.getElementById('fileInput');

dropzone.addEventListener('click', () => fileInput.click());
dropzone.addEventListener('dragover', (e) => {
    e.preventDefault();
    dropzone.classList.add('dragover');
});
dropzone.addEventListener('dragleave', () => dropzone.classList.remove('dragover'));
dropzone.addEventListener('drop', (e) => {
    e.preventDefault();
    dropzone.classList.remove('dragover');
    uploadFiles(e.dataTransfer.files);
});
fileInput.addEventListener('change', () => {
    uploadFiles(fileInput.files);
});

document.getElementById('customerSelect').addEventListener('change', function() {
    let uname = this.value;
    if (uname) {
        document.getElementById('fileSection').style.display = 'block';
        loadFiles(uname);
    } else {
        document.getElementById('fileSection').style.display = 'none';
    }
});

function uploadFiles(files) {
    const receiver_uname = document.getElementById('customerSelect').value;
    if (!receiver_uname) {
        alert("Önce müşteri seçiniz.");
        return;
    }

    const formData = new FormData();
    for (let file of files) {
        formData.append('files[]', file);
    }
    formData.append('receiver_uname', receiver_uname);

    // UI kilitle
    document.getElementById('loadingOverlay').style.display = 'flex';
    document.getElementById('uploadStatus').innerHTML = '';
    document.querySelector('.progress').style.display = 'block';
    document.getElementById('progressBar').style.width = '0%';
    document.getElementById('progressBar').innerText = '0%';

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'upload_file.php', true);

    xhr.upload.onprogress = function(e) {
        if (e.lengthComputable) {
            let percent = Math.round((e.loaded / e.total) * 100);
            document.getElementById('progressBar').style.width = percent + '%';
            document.getElementById('progressBar').innerText = percent + '%';
        }
    };

    xhr.onload = function() {
        document.querySelector('.progress').style.display = 'none';
        document.getElementById('uploadStatus').innerHTML = `<div class="alert alert-success">${xhr.responseText}</div>`;
        document.getElementById('loadingOverlay').style.display = 'none';
        loadFiles(receiver_uname);
    };

    xhr.onerror = function() {
        document.querySelector('.progress').style.display = 'none';
        document.getElementById('uploadStatus').innerHTML = `<div class="alert alert-danger">Yükleme başarısız oldu.</div>`;
        document.getElementById('loadingOverlay').style.display = 'none';
    };

    xhr.send(formData);
}

function loadFiles(uname) {
    fetch('list_files.php?receiver_uname=' + uname)
        .then(response => response.text())
        .then(data => {
            document.getElementById('fileList').innerHTML = data;
        });
}

function deleteFile(id, uname) {
    if (confirm('Dosyayı silmek istediğinizden emin misiniz?')) {
        fetch('delete_file.php?id=' + id)
            .then(response => response.text())
            .then(() => loadFiles(uname));
    }
}
</script>

      
       
     
 
    
    

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