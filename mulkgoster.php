<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
        <title>https://whitelotustest.online/</title>
        <meta name="ktmmo" content="kira satış danışman emlak alım">
         <link rel="stylesheet" type="text/css" href="main2.css?rnd=<?php echo rand()?>">
<script src="js/jquery-3.7.1.js"></script>
<script src="js/dataTables.js"></script>
<script src="js/dataTables.bootstrap5.js"></script>
<script src="js/dataTables.responsive.js"></script>
<script src="js/responsive.bootstrap5.js"></script>
<link rel="stylesheet" href="css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="css/responsive.bootstrap5.css">
<script src="https://kit.fontawesome.com/9d1d9a82d2.js" crossorigin="anonymous"></script>
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
        
         .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

 
        .button {
            margin: 5px;
            padding: 5px 10px;
            background-color: #4CAF50; /* Açık yeşil renk */
            color: white;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            width: 700px; /* Sabit genişlik */
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #45a049; /* Hover durumunda renk değişikliği */
        }
    
        @media (max-width: 700px) {
            .button {
                width: 100%; /* 600px veya daha küçük ekranlarda genişlik sayfa genişliği kadar olsun */
            }
        }
        
        @media (max-width: 700px) {
            .textcon {
                width: 100%; /* 600px veya daha küçük ekranlarda genişlik sayfa genişliği kadar olsun */
            }
            
            .textcon2 {
                width: 100%; /* 600px veya daha küçük ekranlarda genişlik sayfa genişliği kadar olsun */
            }
            
            #inputFieldsContainer{
                 width: 100%;
            }
        }
        
        
</style>     
    
    
</head>
  
 <script>
             function opensession(){
        window.location.href = "https://whitelotustest.online/kiralamaportal.php";
    }
     
            function anamenu(){
        window.history.back();
    }
    </script>
  
    <?php
        if (isset($_GET['dosya'])) {
    $dosyaYolu = $_GET['dosya'];
    dosyayiIndir($dosyaYolu);
} else {
    //echo 'Dosya yüklenmedi.';
}
  function dosyayiIndir($dosyaYolu) {
     if (file_exists($dosyaYolu)) {
        $dosyaAdi = basename($dosyaYolu);
        $dosyaUzantisi = strtolower(pathinfo($dosyaAdi, PATHINFO_EXTENSION));
        
        // Desteklenen dosya uzantıları
        $desteklenenUzantilar = array('pdf', 'png', 'jpg', 'doc', 'docx', 'xls', 'xlsx', 'dwg');
        
        // Dosya uzantısı desteklenen uzantılar arasındaysa devam et
        if (in_array($dosyaUzantisi, $desteklenenUzantilar)) {
            header('Content-Type: application/octet-stream');
            header('Content-Transfer-Encoding: Binary');
            header('Content-Disposition: inline; filename="' . $dosyaAdi . '"');
            header('Content-Length: ' . filesize($dosyaYolu));
            header('Accept-Ranges: bytes');
            
            ob_clean();
            flush();
            
            readfile($dosyaYolu);
            exit;
        } else {
            echo 'Desteklenmeyen dosya uzantısı.';
        }
    } else {
        echo 'Dosya bulunamadı.';
    }
}   
    
   include 'usersession.php';
   // usersessiontimecheck();
            
              
session_start();
$session_id=$_SESSION['sessionid'];
$uname=$_SESSION['uname'];
$kultipi=$_SESSION['kultipi']; // kullanıcı yetkilerinin ve erişimlerinin kontrolunde kullanılır.
$pageid="pasifgorme"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.  
    
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
              include 'kullanicisayfayetkisi.php'; // kullanıcıların kultipine göre bu sayfaya erişim yetkilerinin olup olmayacağının ayarlandığı php dosyasıdır.

              
                 if(!kulsayfayetki($kultipi,$pageid,$uname))
             {
           echo "Sayfaya erişim yetkiniz yoktur!";
           exit(); 
                 
             }
function Notdevam()
{

header("Location: https://whitelotustest.online/admin.php"); /* Redirect browser */
exit();	
	
} 
              
          
   ?> 
 
<body>

<?php 
    
    include 'menu.php'; // kultipine göre menun ayarlandığı php dosyasıdır.
    
    
    /*************Değişkenleri kontrol et**************/              
 
    
          if($_POST['itemid']==NULL){
        Notdevam();
    }
    else
    {
      $mulkid=$_POST['itemid'];
        $mulkid=trim($mulkid);
    } 
    /*
    echo $mulkid."<br>";
    echo $yapimulkbilgileri;
    exit();
    */
    ?>

<!-------------------------------------------------------->
<?php

 include 'config.php';
    
$servername = $config['DB_HOST'];
$database = $config['DB_DATABASE'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


    
     if ($result = $conn -> query("SELECT * FROM mulkkayit where mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulkid'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
        $adsoyad=$row['adsoyad'];
        $iletisim1 = $row['iletisim1'];
        $iletisim2 = $row['iletisim2'];
        $kimlikno = $row['kimlikno'];
        $email = $row['email'];
        $uyruk = $row['uyruk'];
        $msozelnot = $row['msozelnot'];
        $aktifkocan = $row['aktifkocan'];
        $kirabedeli = $row['kirabedeli'];
        $kirabedeliparabirimi = $row['kirabedeliparabirimi'];
      $guncelaidat = $row['guncelaidat'];
        $aidatparabirimi = $row['aidatparabirimi'];
        $esyalistesi = $row['esyalistesi'];
        $ekbelgeyukle = $row['ekbelgeyukle'];
        $susahiplik = $row['susahiplik'];
        $elektriksahiplik = $row['elektriksahiplik'];
        $mulkozelnot = $row['mulkozelnot'];  
        $mulkno = $row['id'];
      $yapino = $row['yapino'];
      $kiralamadurumu = $row['kiralamadurumu'];
      $maxkirainoran = $row['maxkirainoran'];
}
     
  $result -> free_result();
}  
    
  
?>
    

<!-------------------------------------------------------->
 
<br>
              <br>
     <div class="parentmain2">
    <div class="options">
      <div class="container"> 
           <div class="row">
          
              <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:16px;">MÜLK BİLGİLERİ SAYFASI</label>
              
          </div>
          <div class="row">
              <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:14px;">Mülk Bilgileri</label>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="yapino" style="font-weight:bolder"><?php echo $mulkno." Numaralı Mülk";?></label>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-25">
              <label for="kiralamadurumu" style="font-weight:bolder">Kiralama Durumu</label>
            </div>
            <div class="col-75">
               <input type="text" id="kiralamadurumu" name="kiralamadurumu" class="form-control" value="<?php echo $kiralamadurumu;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="ulke" style="font-weight:bolder">Ad Soyad</label>
            </div>
            <div class="col-75">
               <input type="text" id="adsoyadx" name="adsoyadx" class="form-control" value="<?php echo $adsoyad;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="iletisim1" style="font-weight:bolder">İletişim No 1</label>
            </div>
            <div class="col-75">
              <input type="text" id="iletisim1x" name="iletisim1x" class="form-control" value="<?php echo $iletisim1;?>" readonly style="background-color:#DCDCDC;">
              
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="iletisim2" style="font-weight:bolder">İletişim No 2 </label>
            </div>
            <div class="col-75">
              <input type="text" id="iletisim2x" name="iletisim2x" class="form-control"value="<?php echo $iletisim2;?>" readonly style="background-color:#DCDCDC;">
              
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="kimlikno" style="font-weight:bolder">Kimlik No</label>
            </div>
            <div class="col-75">
               <input type="text" id="kimliknox" name="kimliknox" class="form-control"value="<?php echo $kimlikno;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="email" style="font-weight:bolder">E-mail Adresi</label>
            </div>
            <div class="col-75">
              <input type="text" id="emailx" name="emailx" class="form-control" value="<?php echo $email;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="uyruk" style="font-weight:bolder">Uyruk</label>
            </div>
            <div class="col-75">
                <input type="text" id="uyrukx" name="uyrukx" class="form-control" value="<?php echo $uyruk;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
           
            <div class="row">
            <div class="col-25">
              <label for="msozelnot" style="font-weight:bolder">Özel Not </label>
            </div>
            <div class="col-75">
             <textarea id="msozelnot" name="msozelnot" class="form-control" readonly style="background-color:#DCDCDC;"><?php echo $msozelnot;?></textarea>  
            </div>
          </div>
              <div class="row">
            <div class="col-25">
              <label for="aktifkocan" style="font-weight:bolder">Aktif Koçan *</label>
            </div>
            <div class="col-75">
                    <?php 
          $counter=1;   
$aktifkocanayri= explode(";", $aktifkocan);
$lastIndex = count($aktifkocanayri) - 1;

if (empty($aktifkocanayri[$lastIndex])) {
    unset($aktifkocanayri[$lastIndex]);
}

$aktifkocanayri = array_values($aktifkocanayri);
foreach($aktifkocanayri as $aktifkocanx){
echo '<br>';    
echo '<label>'.$counter.'-'.'Aktif Koçan Dosyası</label>'; 
echo '<a href="?dosya='.$aktifkocanx.'">Dosyayı İndir</a>';
    echo '<br>';
    echo '<button class="preview-button" data-file="'.$aktifkocanx.'">Önizleme</button>';
    echo '<br><br>';
    $counter++;
   
}?>
 
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="kirabedeli" style="font-weight:bolder">Kira Bedeli * </label>
            </div>
            <div class="col-75">
             <input type="text" id="kirabedeli" name="kirabedeli" class="form-control"  value="<?php echo $kirabedeli;?>" readonly style="background-color:#DCDCDC;">
            </div>
            </div>
            <div class="row">
            <div class="col-25" >
              <label for="kirabedeliparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <input type="text" id="kirabedeliparabirimi" name="kirabedeliparabirimi" class="form-control" value="<?php echo $kirabedeliparabirimi;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>

            </div>
            <hr>
             <div class="row">
            <div class="col-25">
              <label for="guncelaidat" style="font-weight:bolder">Aidat * </label>
            </div>
            <div class="col-75">
             <input type="text" id="guncelaidat" name="guncelaidat" class="form-control"  value="<?php echo $guncelaidat;?>" readonly style="background-color:#DCDCDC;">
            </div>
            </div>
            <div class="row">
            <div class="col-25" >
              <label for="aidatparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <input type="text" id="aidatparabirimi" name="aidatparabirimi" class="form-control" value="<?php echo $aidatparabirimi;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>

            </div>
            <hr>
            
            <div class="row">
            <div class="col-25">
              <label for="maxkirainoran" style="font-weight:bolder">Maksimum Kira İndirim Oranı (%) *</label>
            </div>
            <div class="col-75">
              <input type="number" id="maxkirainoran" name="maxkirainoran" class="form-control"  value="<?php echo $maxkirainoran;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
            <hr>
                     <div class="row">
            <div class="col-25">
              <label for="esyalistesi" style="font-weight:bolder">Eşya Listesi </label>
              <br>
            </div>
            <div class="col-75">
                             <?php 
          $counter=1;   
$esyalistesiayri= explode(";", $esyalistesi);
$lastIndex = count($esyalistesiayri) - 1;

if (empty($esyalistesiayri[$lastIndex])) {
    unset($esyalistesiayri[$lastIndex]);
}

$esyalistesiayri = array_values($esyalistesiayri);
foreach($esyalistesiayri as $esyalistesix){
echo '<br>';    
echo '<label>'.$counter.'-'.'Eşya Listesi Dosyaları</label>';
    echo '<br>';
echo '<a href="?dosya='.$esyalistesix.'">Dosyayı İndir</a>';
    echo '<br><br>';
    echo '<button class="preview-button" data-file="'.$esyalistesix.'">Önizleme</button>';
    echo '<br>';
    $counter++;
   
}
            
                
                ?> 

            </div>
          </div>
          <hr>
           <div class="row">
            <div class="col-25">
              <label for="ekbelgeyukle" style="font-weight:bolder">Ek Belge Yükle </label>
              <br>
            </div>
            <div class="col-75">
                                         <?php 
          $counter=1;   
$ekbelgeyukleayri= explode(";", $ekbelgeyukle);
$lastIndex = count($ekbelgeyukleayri) - 1;

if (empty($ekbelgeyukleayri[$lastIndex])) {
    unset($ekbelgeyukleayri[$lastIndex]);
}

$eekbelgeyukleayri = array_values($ekbelgeyukleayri);
foreach($ekbelgeyukleayri as $ekbelgeyuklex){
echo '<br>';    
echo '<label>'.$counter.'-'.'Ek Belge Dosyaları</label>';
    echo '<br>';
echo '<a href="?dosya='.$ekbelgeyuklex.'">Dosyayı İndir</a>';
    echo '<br><br>';
    echo '<button class="preview-button" data-file="'.$ekbelgeyuklex.'">Önizleme</button>';
    echo '<br>';
    $counter++;
   
}
           
                
                ?> 
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-25">
              <label for="susahiplik" style="font-weight:bolder">Su Sahiplik Bilgisi</label>
            </div>
            <div class="col-75">
               <input type="text" id="susahiplik" name="susahiplik" class="form-control" value="<?php echo $susahiplik;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="elektriksahiplik" style="font-weight:bolder">Elektrik Sahiplik Bilgisi</label>
            </div>
            <div class="col-75">
               <input type="text" id="elektriksahiplik" name="elektriksahiplik" class="form-control" value="<?php echo $elektriksahiplik;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="mulkozelnot" style="font-weight:bolder">Mülk Özel Not</label>
            </div>
            <div class="col-75">
             <textarea id="mulkozelnot" name="mulkozelnot" class="form-control" readonly style="background-color:#DCDCDC;"><?php echo $mulkozelnot;?></textarea>    
            </div>
          </div>
            <br>

            <hr>
       
         <div class="row" id="hiderow">
  <input name="iptal" type="submit" id="iptal" value="Geri Git" onclick="anamenu()" style="background:green;"/>
  </div>
          
  
        </div>
    </div>
</div>
 
              <!--- PRIVIEW CONTAİNER ----->

 <div class="preview-container">
    <span class="preview-close">&times;</span>
    <div class="preview-content"></div>
  </div> 




<script>
     // Function to show the right-side popup
    function showRightPopup() {
        var rightPopup = document.getElementById("rightPopup");
        rightPopup.style.display = "block";

        // Automatically hide the popup after 5 seconds
        setTimeout(function() {
            hideRightPopup();
        }, 5000);
    }

    // Function to hide the right-side popup
    function hideRightPopup() {
        var rightPopup = document.getElementById("rightPopup");
        rightPopup.style.display = "none";
    }
    
    
     function resizeImageToContainer(containerSelector, imageSelector) {
  const container = document.querySelector(containerSelector);
  const image = document.querySelector(imageSelector);

  if (!container || !image) {
    console.error('Container or image element not found!');
    return;
  }

  const containerWidth = container.offsetWidth;
  const containerHeight = container.offsetHeight;

  const imageWidth = image.naturalWidth;
  const imageHeight = image.naturalHeight;

  const containerAspectRatio = containerWidth / containerHeight;
  const imageAspectRatio = imageWidth / imageHeight;

  if (containerAspectRatio > imageAspectRatio) {
    image.style.width = '100%';
    image.style.height = 'auto';
  } else {
    image.style.width = 'auto';
    image.style.height = '100%';
  }
}

     
     $(document).ready(function() {

  $('.preview-button').click(function(event) {
    event.preventDefault(); // Form submitini engelle
    var file = $(this).data('file');
    var extension = file.substr(file.lastIndexOf('.') + 1).toLowerCase();

    if (extension === 'pdf') {
      window.open(file, '_blank');
    } else if (extension === 'jpg' || extension === 'jpeg' || extension === 'png') {
      $('.preview-content').html('<img src="' + file + '" alt="Dosya Önizleme">');
      jQuery('.preview-container').fadeIn();
        resizeImageToContainer('.preview-content img', '.preview-content');
    }else{
        showRightPopup();
    }
  });

  $('.preview-close').click(function() {
       $('.preview-content').empty();
    $('.preview-container').fadeOut();
   
  });
  
  // Dosya değiştiğinde önizlemeyi güncelle
  $('.custom-file-input').change(function() {
    var file = $(this).val();
    var extension = file.substr(file.lastIndexOf('.') + 1).toLowerCase();

    if (extension === 'jpg' || extension === 'jpeg' || extension === 'png') {
      $('.preview-content').html('<img src="' + file + '" alt="Dosya Önizleme">');
        resizeImageToContainer('.preview-content img', '.preview-content');
    } else {
      $('.preview-content').empty();
        
    }
  });
}); 
    
  
    
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