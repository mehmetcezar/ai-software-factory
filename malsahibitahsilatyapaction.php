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
        window.location.href = "https://whitelotustest.online/malsahibiaidattahsilet.php";
    }
    </script>
  
    <?php
   include 'usersession.php';
        
              
session_start();
$session_id=$_SESSION['sessionid'];
$uname=$_SESSION['uname'];
$kultipi=$_SESSION['kultipi']; // kullanıcı yetkilerinin ve erişimlerinin kontrolunde kullanılır.
$pageid="kiralamasorumlusupage"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.  
    
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

    if($_POST['yapino']==NULL){
        Notdevam();
    }
    else
    {
      $yapino=$_POST['yapino'];
        $yapino=trim($yapino);
    }  
    
    
    if($_POST['mulkno']==NULL){
        Notdevam();
    }
    else
    {
      $mulkno=$_POST['mulkno'];
        $mulkno=trim($mulkno);
    }  
    
    
    
 
    if($_POST['tahsilattarihi']==NULL){
        Notdevam();
    }
    else
    {
      $tahsilattarihi=$_POST['tahsilattarihi'];
       
    }
   
        if($_POST['tahsilatturu']==NULL){
        Notdevam();
    }
    else
    {
      $tahsilatturu=$_POST['tahsilatturu'];
        foreach ($tahsilatturu as $turu) {
        
        $turu=trim($turu);
        }
        
    }
    
    
     //Kapora
    
      $kaporatahMiktar=$_POST['kaporaMiktar'];
    foreach ($kaporatahMiktar as $tahMiktar) {
        
        $tahMiktar=trim($tahMiktar);
        $tahMiktar=(float)$tahMiktar;
        }

      $kaporaPB=$_POST['kaporaPB'];
    foreach ($kaporaPB as $PB) {
        
        $PB=trim($PB);
        
        }
    
      $kaporaTlRate=$_POST['kaporaTlRate'];
    foreach ($kaporaTlRate as $TlRate) {
        
        $TlRate=trim($TlRate);
        $TlRate = (float)$TlRate;
        }
    

      $kaporaToTlRate=$_POST['kaporaToTlRate'];
     foreach ($kaporaToTlRate as $ToTlRate) {
        
        $ToTlRate=trim($ToTlRate);
         $ToTlRate = (float)$ToTlRate;
        }
    

      $kaporaSterling=$_POST['kaporaSterling'];
    foreach ($kaporaSterling as $Sterling) {
        
        $Sterling=trim($Sterling);
        $Sterling = (float)$Sterling;
        }
    
 $tahsilatnot=$_POST['tahsilatnot'];
    foreach ($tahsilatnot as $nott) {
        
        $nott=trim($nott);
      
        }

  
// Kapora belgesi kontrolü
if ($_FILES['kaporaBelge']['name'] != NULL) {
    $kaporabelge = $_FILES['kaporaBelge'];
} else {
    Notdevam();
}

    
    
    /*   
    echo $yapino."<br>";
    echo $mulkno."<br>";
    echo $kiralamatarihi."<br>";
    echo $kaporaid."<br>";
    echo $stopajvergisi."<br>";
    echo $kirabedeli."<br>";
    echo $kirabedeliparabirimi."<br>";
    echo $kirasuresi."<br>";
    echo $kiraodemebicimi."<br>";
    echo $depozitobedeli."<br>";
    echo $depozitobedeliparabirimi."<br>";
    echo $odenendepozito."<br>";
    echo $depozitovadesayisi."<br>";
    echo $komisyon."<br>";
    echo $komisyonbedeli."<br>";
    echo $komisyonbedeliparabirimi."<br>";
    echo $aidat."<br>";
    echo $aidatbedeli."<br>";
    echo $aidatbedeliparabirimi."<br>";
    echo $komisyontahsili."<br>";
    echo $ilktaksitmiktari."<br>";
    echo $toplamkirabedeli."<br>";
    
    exit();
    */
    
    ?>

<!-------------------------------------------------------->
<?php
       
date_default_timezone_set('Europe/Nicosia');
    $date = date("Y-m-d");    
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




     function createDirectory($path) {
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
}  
  
 
/***********************VERİ TABANI YAZMA İŞLEMLERİ*****************************/ 
    $yapino= mysqli_real_escape_string($conn, $yapino); 
    $mulkno= mysqli_real_escape_string($conn, $mulkno); 
    $kaporaid= mysqli_real_escape_string($conn, $kaporaid);
    
     foreach ($tahsilatturu as $turu) {
       $turu= mysqli_real_escape_string($conn, $turu);
        }
    
     foreach ($tahsilattarihi as $tarih) {
       $tarih= mysqli_real_escape_string($conn, $tarih);
        }
  
    foreach ($kaporatahMiktar as $miktar) {
       $miktar= mysqli_real_escape_string($conn, $miktar);
        }
    foreach ($kaporaPB as $PB) {
       $PB= mysqli_real_escape_string($conn, $PB);
        }
    foreach ($kaporaTlRate as $TlRate) {
       $TlRate= mysqli_real_escape_string($conn, $TlRate);
        }
    foreach ($kaporaToTlRate as $ToTlRate) {
       $ToTlRate= mysqli_real_escape_string($conn, $ToTlRate);
        }
    foreach ($kaporaSterling as $Sterling) {
       $Sterling= mysqli_real_escape_string($conn, $Sterling);
        }
     foreach ($tahsilatnot as $nott) {
       $nott= mysqli_real_escape_string($conn, $nott);
        }

    
    /*DOSYA YAZMA İŞLEMLERİ* TAHSİLAT DOSYALARI*****/       
        
$currentDate = date("d-m-Y");  
$projectId = "".($mulkno)."";
       
      
   
// DB PATH DEĞİŞKENLERİ
$kaporabelgepaths = "";        
$basePath = "proje/mulk/{$projectId}/onaybektahsilat/malsahibi/";
createDirectory($basePath); // KLASÖR İLK KEZ BURDA OLUŞTURULDU        

// Kapora belgeleri yükleme
$files = array_filter($_FILES['kaporaBelge']['name']); // Kullanılan dosyaların kontrolü
$total_count = count($_FILES['kaporaBelge']['name']); // Yüklenen dosyaların sayısını al

for ($i = 0; $i < $total_count; $i++) {
    
   
    if($tahsilatturu[$i]=="AİDAT")
    {
       $isimek="aidatBelge"; 
    }
    
    
    $tmpFilePath = $_FILES['kaporaBelge']['tmp_name'][$i]; // Geçici dosya yolu
    if ($tmpFilePath != "") {
        $originalFileName = $_FILES['kaporaBelge']['name'][$i]; // Orijinal dosya adı
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION); // Dosya uzantısını al
        $newFilePath = $basePath . $projectId . "_".$isimek."_". $currentDate . ($i + 1) . "." . $fileExtension; // Yeni dosya yolu

        // DB'ye yazmak için dosya yolunu değişkene kopyala
        $kaporabelgepaths .= $newFilePath . ";";
        
        // Dosya yükleniyor
        if (move_uploaded_file($tmpFilePath, $newFilePath)) {
            // Diğer kodlar buraya gelebilir
            
        } else {
            echo "Tahsilat belgeleri yüklenirken hata oluştu."; exit();  
        }
    }
}  
   
   function convertArrayToString($array) {
    // Dizi elemanlarını ";" ile birleştirip tek bir string döndür
    return implode(";", $array);
}
    
   
     $tahsilattarihidb=convertArrayToString($tahsilattarihi);
    $tahsilatturudb=convertArrayToString($tahsilatturu);
   
    $kaporaSterlingdb=convertArrayToString($kaporaSterling);
    $kaporatahMiktardb=convertArrayToString($kaporatahMiktar);
    
    $kaporaPBdb=convertArrayToString($kaporaPB);
  
    $kaporaTlRatedb=convertArrayToString($kaporaTlRate);
    
    $kaporaToTlRatedb=convertArrayToString($kaporaToTlRate);
    
    $tahsilatnotdb=convertArrayToString($tahsilatnot);
 

     $yetkilionay=1;// 1 olunca yetkili onayına gitti demek, 2 olunca ise yetkili onayladı demek.

  $malsahibiodemesi="EVET";
   $sql = "INSERT INTO tahsilat (id, date, tahtarihi, mulkno, yapino, kiralamakey, tahsilatturu, miktar, stgmiktar, parabirimi, tahsilattlrate, tahsilattotlrate, belgepaths, tahsilatnot, malsahibiodemesi, basusername, yetkilionay) VALUES ('', '$date','$tahsilattarihidb','$mulkno', '$yapino','$kaporaid','$tahsilatturudb','$kaporatahMiktardb','$kaporaSterlingdb','$kaporaPBdb','$kaporaTlRatedb','$kaporaToTlRatedb','$kaporabelgepaths','$tahsilatnotdb','$malsahibiodemesi','$uname','$yetkilionay')";
    
/*
    echo "$tahsilattarihidb";echo "<br>";
    echo "$tahsilatturudb";echo "<br>";
    echo "$kaporaSterlingdb";echo "<br>";
    echo "$kaporaPBdb";echo "<br>";
    echo "$kaporaTlRatedb";echo "<br>";
    echo "$kaporaToTlRatedb";echo "<br>";
    echo "$kaporabelgepaths";echo "<br>";
    echo "$tahsilatnotdb";echo "<br>";
    
    exit();
    */
    if ($conn->query($sql) === TRUE) {
   

            echo "<br>";
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Tahsilatlar yetkili onayına sunulmuştur. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';  
    
    
    }else {echo "Error: " . $sql . "<br>" . $conn->error;}  
    

 
  
 mysqli_close($conn);  
    
?>
    




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