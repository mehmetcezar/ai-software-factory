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
        window.location.href = "https://whitelotustest.online/kiralamaonay.php";
    }
    </script>
  
    <?php
   include 'usersession.php';
   // usersessiontimecheck();
            
              
session_start();
$session_id=$_SESSION['sessionid'];
$uname=$_SESSION['uname'];
$kultipi=$_SESSION['kultipi']; // kullanıcı yetkilerinin ve erişimlerinin kontrolunde kullanılır.
$pageid="kiralamaonay"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.  
    
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

    if($_POST['kirakaporasonkey']==NULL){
        Notdevam();
    }
    else
    {
      $kirakaporasonkey=$_POST['kirakaporasonkey'];
        $kirakaporasonkey=trim($kirakaporasonkey);
    }  
    
    
    if($_POST['mulkno']==NULL){
        Notdevam();
    }
    else
    {
      $mulkno=$_POST['mulkno'];
        $mulkno=trim($mulkno);
    }  
    
    
    
    
          
    /*     
    
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


    
    $kiraison=0;
    $kiralandiison=0;
    $kirakaporaeklendi=0;
     if ($result = $conn -> query("SELECT * FROM mulkkayit where  mulkkayit.company_id = '{$_SESSION['company_id']}' AND mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulkno'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

      
      if($row['kiralamaonayinda']!=1){
          $kiraison=1;
      }
      $kiralandi=$row['kiralandi'];
     
}
     
  $result -> free_result();
}  
    
    

  if ($kiraison == 1) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülk yetkili onayında değildir. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
}   
   
   if ($kiralandi == 1) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülk yetkili onayından geçip kiralanmıştır. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
}    
    
    
    
       if ($result = $conn -> query("SELECT * FROM kirakaporakayit where  kirakaporakayit.company_id = '{$_SESSION['company_id']}' AND kirakaporakayit.isdeleted !=1 AND kirakaporakayit.kirakey='$kirakaporasonkey'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

      
       $kaporamiktari=$row['kaporamiktari'];
        $kaporaparabirimi=$row['kaporaparabirimi'];
}
     
  $result -> free_result();
}    
    
    
    
          if ($result = $conn -> query("SELECT * FROM kiralamakayit where  kiralamakayit.company_id = '{$_SESSION['company_id']}' AND kiralamakayit.isdeleted !=1 AND kiralamakayit.kiralamakey='$kirakaporasonkey'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

      $kiralamayapanuname=$row['username'];
      $kiralamatarihi=$row['kiralamatarihi'];
      $kirasuresi=$row['kirasuresi'];//ay
      $status=$row['status'];
      $kiralamabitistarihi=$row['kiralamabitistarihi'];
      $mulkno=$row['mulkno'];
      $yapino=$row['yapino'];
     /**BORCLAR ve GELİRLER DEĞİŞKENLERİ**/ 
      
        $kiralamaid=$row['id'];
      
      
        $stopajvergisi=$row['stopajvergisi'];
      
      
        $kirabedeli=$row['kirabedeli'];
        $kirabedeliparabirimi = $row['kirabedeliparabirimi'];
        $kirasuresi = $row['kirasuresi'];
        $kiraodemebicimi = $row['kiraodemebicimi'];
      
      
        $depozitobedeli = $row['depozitobedeli'];
        $depozitobedeliparabirimi = $row['depozitobedeliparabirimi'];
        $odenendepozito = $row['odenendepozito'];
        
       
      
        //$komisyontahsili = $row['komisyontahsili'];
        $komisyon = $row['komisyon'];
        $komisyonbedeli = $row['komisyonbedeli'];
        $komisyonbedeliparabirimi = $row['komisyonbedeliparabirimi'];
      
      
        $buayaidat=$row['buayaidat'];
        $aidat = $row['aidat'];
        $aidatbedeli = $row['aidatbedeli'];
        $aidatbedeliparabirimi = $row['aidatbedeliparabirimi'];
        $aidatodemebicimi=$row['aidatodemebicimi'];
        $aidatsontarih=$row['aidatsontarih'];
      
        $ilktaksitmiktari = $row['ilktaksitmiktari'];
        $toplamkirabedeli = $row['toplamkirabedeli'];
        $kiralamaozelnot = $row['kiralamaozelnot'];
        $kiralamatarihi=$row['kiralamatarihi'];

        $yonetimsoziste=$row['yonetimsoziste'];
        $yonetimsozbastarih=$row['yonetimsozbastarih'];
        $yonetimsozbittarih=$row['yonetimsozbittarih'];
        
        // Kapora
$kaporatahMiktar = $row['kaporatahMiktar'];
$kaporaPB = $row['kaporaPB'];
$kaporaTlRate = $row['kaporaTlRate'];
$kaporaToTlRate = $row['kaporaToTlRate'];
$kaporaSterling = $row['kaporaSterling'];

// Depozito
$depozitoMiktar = $row['depozitoMiktar'];
$depozitoPB = $row['depozitoPB'];
$depozitoTlRate = $row['depozitoTlRate'];
$depozitoToTlRate = $row['depozitoToTlRate'];
$depozitoSterling = $row['depozitoSterling'];

// Aidat
$aidatMiktar = $row['aidatMiktar'];
$aidatPB = $row['aidatPB'];
$aidatTlRate = $row['aidatTlRate'];
$aidatToTlRate = $row['aidatToTlRate'];
$aidatSterling = $row['aidatSterling'];

// Kira
$kiraMiktar = $row['kiraMiktar'];
$kiraPB = $row['kiraPB'];
$kiraTlRate = $row['kiraTlRate'];
$kiraToTlRate = $row['kiraToTlRate'];
$kiraSterling = $row['kiraSterling'];
      
// Kapora Belge Yolu
$kaporabelgepaths = $row['kaporabelgepaths'];

// Depozito Belge Yolu
$depozitobelgepaths = $row['depozitobelgepaths'];

// Aidat Belge Yolu
$aidatbelgepaths = $row['aidatbelgepaths'];

// Kira Belge Yolu
$kirabelgepaths = $row['kirabelgepaths'];    
      
$acente=$row['acente'];
      

      
$subedeli = $row['subedeli'];
$subedeliparabirimi = $row['subedeliparabirimi'];
$suodemebicimi = $row['suodemebicimi'];
      
      
$hizmet = $row['hizmet'];
$hizmetbedeli = $row['hizmetbedeli'];
$hizmetbedeliparabirimi = $row['hizmetbedeliparabirimi'];
$hizmetodemebicimi = $row['hizmetodemebicimi'];  
      
      
$internet = $row['internet'];
$internetbedeli = $row['internetbedeli'];
$internetbedeliparabirimi = $row['internetbedeliparabirimi'];
$internetodemebicimi = $row['internetodemebicimi'];       
}
     
  $result -> free_result();
} 
    
    if ($status == "KIRADA") {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülk yetkili onayından geçip kiralanmıştır. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
}      
    
     $varmikontrol=0;
      if ($result = $conn -> query("SELECT * FROM kiralamaguncellemedif where kiralamaguncellemedif.isdeleted !=1 AND kiralamaguncellemedif.kirakey='$kirakaporasonkey'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

  
      $varmikontrol=1;
     
}
     
  $result -> free_result();
} 
    
    
    
    if($varmikontrol)
    {
    $sql = "UPDATE kiralamaguncellemedif SET kiralamaguncellemedif.isdeleted=1 where kiralamaguncellemedif.kirakey='$kirakaporasonkey'"; 

    
  if ($conn->query($sql) === TRUE) {  
       }
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    }
    

    
$borcgelirdahaonceislendimi=0;    
if ($result = $conn -> query("SELECT * FROM kiralamasureciborcgelirisle where  kiralamasureciborcgelirisle.kiralamakey='$kirakaporasonkey'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

      $borcgelirdahaonceislendimi=1;
}
     
  $result -> free_result();
}   
    
    
    
    
/***********************VERİ TABANI YAZMA İŞLEMLERİ*****************************/
    $uname= mysqli_real_escape_string($conn, $uname);  
    $mulkno= mysqli_real_escape_string($conn, $mulkno); 
    
   

    date_default_timezone_set('Europe/Nicosia');
    
    // Orijinal tarih ve eklenecek ay sayısı
$orijinal_tarih = $kiralamatarihi;
$ay_sayisi = $kirasuresi; // Değişken olarak ay sayısı

// DateTime nesnesi oluşturmak
$tarih = new DateTime($orijinal_tarih);

// Ay sayısını eklemek
$tarih->add(new DateInterval('P' . $ay_sayisi . 'M'));

// Yeni tarihi almak
$kirabitistarihi = $tarih->format('Y-m-d');
    
    
 
    
    
/***************KİRALAMA BORÇLARINI OLUŞTUR- GENELBORC TABLOSUNA YAZ*****************/ 
    date_default_timezone_set('Europe/Nicosia');
    $date = date("Y-m-d");  
    
    function getKiraOdemeTarihler($baslangicTarihi, $kiralamaSuresi, $odemeBicimi) {
    // Başlangıç tarihini DateTime objesine çevir
    $baslangicTarihiObj = new DateTime($baslangicTarihi);

    // Ödeme tarihlerini tutacak bir array
    $odemeTarihler = [];

    // Kiralama süresi boyunca ödeme tarihlerini hesapla
    for ($i = 0; $i < $kiralamaSuresi; $i++) {
        // İlgili ödeme periyodunu ekle
        $odemeTarihi = clone $baslangicTarihiObj; // orijinal nesneyi korumak için clone kullanıyoruz
        $odemeTarihi->add(new DateInterval('P' . ($i * $odemeBicimi) . 'M'));

        // Hesaplanan ödeme tarihini array'e ekle
        $odemeTarihler[] = $odemeTarihi->format('Y-m-d');
    }

    return $odemeTarihler;
}
    
    
    
    function getAidatOdemeTarihler($baslangicTarihi, $kiralamaSuresi) {
    // Başlangıç tarihini DateTime objesine çevir
    $baslangicTarihiObj = new DateTime($baslangicTarihi);
    
    // Başlangıç tarihinden bir sonraki ayın 1. gününe git
    $baslangicTarihiObj->modify('first day of next month');

    // Ödeme tarihlerini tutacak bir array
    $odemeTarihler = [];

    // Kiralama süresi boyunca ödeme tarihlerini hesapla
    for ($i = 0; $i < $kiralamaSuresi; $i++) {
        // İlgili ödeme tarihini hesapla
        $odemeTarihi = clone $baslangicTarihiObj; // orijinal nesneyi korumak için clone kullanıyoruz
        $odemeTarihi->add(new DateInterval('P' . ($i * 1) . 'M')); // her ay bir ödeme tarihi

        // Hesaplanan ödeme tarihini array'e ekle
        $odemeTarihler[] = $odemeTarihi->format('Y-m-d');
    }

    return $odemeTarihler;
}

 
    
    
   function getHizmetOdemeTarihler($baslangicTarihi, $kiralamaSuresi, $odemeBicimi) {
    // Başlangıç tarihini DateTime objesine çevir
   // $baslangicTarihiObj = new DateTime($baslangicTarihi);
    
    // Başlangıç tarihinden bir sonraki ayın 1. gününe git
    //$baslangicTarihiObj->modify('first day of month');

    // Ödeme tarihlerini tutacak bir array
    //$odemeTarihler = [];
 

    // Kiralama süresi boyunca ödeme tarihlerini hesapla
    //for ($i = 0; $i < ($kiralamaSuresi/$odemeBicimi); $i++) {
        // İlgili ödeme tarihini hesapla
       // $odemeTarihi = clone $baslangicTarihiObj; // Orijinal nesneyi korumak için clone kullanıyoruz
        //$odemeTarihi->add(new DateInterval('P' . ($i * $odemeBicimi) . 'M')); // Seçilen periyoda göre ekleme yap

        // Hesaplanan ödeme tarihini array'e ekle
        //$odemeTarihler[] = $odemeTarihi->format('Y-m-d');
//    }

  //  return $odemeTarihler;
       
       
       
           // Başlangıç tarihini DateTime objesine çevir
    $baslangicTarihiObj = new DateTime($baslangicTarihi);

    // Ödeme tarihlerini tutacak bir array
    $odemeTarihler = [];

    // Kiralama süresi boyunca ödeme tarihlerini hesapla
    for ($i = 0; $i < ($kiralamaSuresi/$odemeBicimi); $i++) {
        // İlgili ödeme periyodunu ekle
        $odemeTarihi = clone $baslangicTarihiObj; // orijinal nesneyi korumak için clone kullanıyoruz
        
        
        $odemeTarihi->add(new DateInterval('P' . ($i * $odemeBicimi) . 'M'));

        if($odemeBicimi==1){
            
         $odemeTarihi->modify('first day of next month'); 
         $odemeTarihler[] = $odemeTarihi->format('Y-m-d');  
        }
        
        if($odemeBicimi==3){
            
         $odemeTarihi->modify('first day of month'); 
         $odemeTarihi->modify('first day of +3 months');
         $odemeTarihler[] = $odemeTarihi->format('Y-m-d');  
        }
        
         if($odemeBicimi==6){
            
         $odemeTarihi->modify('first day of month'); 
         $odemeTarihi->modify('first day of +6 months');
         $odemeTarihler[] = $odemeTarihi->format('Y-m-d');  
        }

          if($odemeBicimi==12){
            
         $odemeTarihi->modify('first day of month'); 
         $odemeTarihi->modify('first day of +12 months');
         $odemeTarihler[] = $odemeTarihi->format('Y-m-d');  
        } 
    }

    return $odemeTarihler;
       
       
} 
    
    
    
    
    
    
    
    
    
 if($borcgelirdahaonceislendimi==0){// KONTROL İF
     
     
     
     
       
/***KİRA-BORC***/   
$kiraodemetarihleri=getKiraOdemeTarihler($kiralamatarihi,$kirasuresi,$kiraodemebicimi);
    $esasborctablosunayazildi=0;
    $kimborclandirildi="KİRACİ";
    
    /*BORC TİPLERİ: KİRA, AİDAT, DEPOZİTO, KAPORA, SU, HİZMET */
    $borctipi="KİRA";
    
    for($i=0;$i<count($kiraodemetarihleri);$i++){
        $sql="INSERT INTO genelborc (id, eklenmetarihi, tahedilecektarih, borctipi, miktar, parabirimi, mulkno, yapino, kiralamakey, kimborclandirildi, esasborctablosunayazildi, company_id) VALUES ('', '$date','$kiraodemetarihleri[$i]','$borctipi','$kirabedeli','$kirabedeliparabirimi','$mulkno','$yapino','$kirakaporasonkey','$kimborclandirildi','$esasborctablosunayazildi', '{$_SESSION['company_id']}')";
        if ($conn->query($sql) === TRUE) {}
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
/***KİRA-BORC SON***/
    
    

    
/***AİDAT-BORC***/  
    // İLK AY TAHSİL EDİLİP EDİLMEYECEĞİ KONTROL EDİLEREK, TAHSİL EDİLECEKSE İLK AYA BORC YANSIT
    $esasborctablosunayazildi=0;
    $kimborclandirildi="KİRACİ";
    
    $borctipi="AİDAT";
    if($buayaidat=="EVET" && $aidat="VAR"){
      $sql="INSERT INTO genelborc (id, eklenmetarihi, tahedilecektarih, borctipi, miktar, parabirimi, mulkno, yapino, kiralamakey, kimborclandirildi, esasborctablosunayazildi, company_id) VALUES ('', '$date','$kiralamatarihi','$borctipi','$aidatbedeli','$aidatbedeliparabirimi','$mulkno','$yapino','$kirakaporasonkey','$kimborclandirildi','$esasborctablosunayazildi', '{$_SESSION['company_id']}')";
        if ($conn->query($sql) === TRUE) {}
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }  
        
    }
    
    
    // AİDATI HER AYIN BAŞINDA YANSIT

$aidatodemetarihleri=getAidatOdemeTarihler($kiralamatarihi,$kirasuresi);
    $esasborctablosunayazildi=0;
    $kimborclandirildi="KİRACİ";
    
    /*BORC TİPLERİ: KİRA, AİDAT, DEPOZİTO, KAPORA, SU, HİZMET */
    $borctipi="AİDAT";
    
    for($i=0;$i<count($aidatodemetarihleri);$i++){
        $sql="INSERT INTO genelborc (id, eklenmetarihi, tahedilecektarih, borctipi, miktar, parabirimi, mulkno, yapino, kiralamakey, kimborclandirildi, esasborctablosunayazildi, company_id) VALUES ('', '$date','$aidatodemetarihleri[$i]','$borctipi','$aidatbedeli','$aidatbedeliparabirimi','$mulkno','$yapino','$kirakaporasonkey','$kimborclandirildi','$esasborctablosunayazildi', '{$_SESSION['company_id']}')";
        if ($conn->query($sql) === TRUE) {}
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
/***AİDAT-BORC SON***/ 
    
    
/***DEPOZİT-BORC***/  
    // KAPORA DEPOZİTE SAYILIYOR. ANCAK KAPORAYI AZ ODEMİŞSE VE DEPOZİT OLARAK EKSTRA ODEME YAPILDIYSA BURAYA BORC OLARAK GİRİYOR.
    $esasborctablosunayazildi=0;
    $kimborclandirildi="KİRACİ";
    
    $borctipi="DEPOZİTO";
    if($kaporamiktari<$depozitobedeli && $odenendepozito!=0){
      $sql="INSERT INTO genelborc (id, eklenmetarihi, tahedilecektarih, borctipi, miktar, parabirimi, mulkno, yapino, kiralamakey, kimborclandirildi, esasborctablosunayazildi, company_id) VALUES ('', '$date','$kiralamatarihi','$borctipi','$odenendepozito','$depozitobedeliparabirimi','$mulkno','$yapino','$kirakaporasonkey','$kimborclandirildi','$esasborctablosunayazildi', '{$_SESSION['company_id']}')";
        if ($conn->query($sql) === TRUE) {}
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }  
        
    }
    
    
/***DEPOZİT-BORC SON***/       
    
    
/***KAPORA-BORC***/  
    // KAPORA DEPOZİTE SAYILIYOR. KAPORA MİKTARI AYNEN BORC OLARAK YANSITILIYOR.
    $esasborctablosunayazildi=0;
    $kimborclandirildi="KİRACİ";
    
    $borctipi="KAPORA";
    if($kaporamiktari!=0){
      $sql="INSERT INTO genelborc (id, eklenmetarihi, tahedilecektarih, borctipi, miktar, parabirimi, mulkno, yapino, kiralamakey, kimborclandirildi, esasborctablosunayazildi, company_id) VALUES ('', '$date','$kiralamatarihi','$borctipi','$kaporamiktari','$kaporaparabirimi','$mulkno','$yapino','$kirakaporasonkey','$kimborclandirildi','$esasborctablosunayazildi', '{$_SESSION['company_id']}')";
        if ($conn->query($sql) === TRUE) {}
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }  
        
    }
    
    
/***KAPORA-BORC SON***/    
    
/***SU-BORC***/  
    // SU borcu her ayın başında yansıtılıyor.    
$suodemetarihleri=getHizmetOdemeTarihler($kiralamatarihi,$kirasuresi,$suodemebicimi);
    $esasborctablosunayazildi=0;
    $kimborclandirildi="KİRACİ";
    
    /*BORC TİPLERİ: KİRA, AİDAT, DEPOZİTO, KAPORA, SU, HİZMET */
    $borctipi="SU";
    
    for($i=0;$i<count($suodemetarihleri);$i++){
        $sql="INSERT INTO genelborc (id, eklenmetarihi, tahedilecektarih, borctipi, miktar, parabirimi, mulkno, yapino, kiralamakey, kimborclandirildi, esasborctablosunayazildi, company_id) VALUES ('', '$date','$suodemetarihleri[$i]','$borctipi','$subedeli','$subedeliparabirimi','$mulkno','$yapino','$kirakaporasonkey','$kimborclandirildi','$esasborctablosunayazildi', '{$_SESSION['company_id']}')";
        if ($conn->query($sql) === TRUE) {}
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
/***SU-BORC SON***/     
    

/***HİZMET-BORC***/  
    // SU borcu her ayın başında yansıtılıyor.    
$hizmetodemetarihleri=getHizmetOdemeTarihler($kiralamatarihi,$kirasuresi,$hizmetodemebicimi);
    $esasborctablosunayazildi=0;
    $kimborclandirildi="KİRACİ";
    
    /*BORC TİPLERİ: KİRA, AİDAT, DEPOZİTO, KAPORA, SU, HİZMET */
    $borctipi="HİZMET";
    
    for($i=0;$i<count($hizmetodemetarihleri);$i++){
        $sql="INSERT INTO genelborc (id, eklenmetarihi, tahedilecektarih, borctipi, miktar, parabirimi, mulkno, yapino, kiralamakey, kimborclandirildi, esasborctablosunayazildi, company_id) VALUES ('', '$date','$hizmetodemetarihleri[$i]','$borctipi','$hizmetbedeli','$hizmetbedeliparabirimi','$mulkno','$yapino','$kirakaporasonkey','$kimborclandirildi','$esasborctablosunayazildi', '{$_SESSION['company_id']}')";
        if ($conn->query($sql) === TRUE) {}
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
/***HİZMET-BORC SON***/     
    
/***İNTERNET-BORC***/  
    // SU borcu her ayın başında yansıtılıyor.    
$internetodemetarihleri=getHizmetOdemeTarihler($kiralamatarihi,$kirasuresi,$internetodemebicimi);
    $esasborctablosunayazildi=0;
    $kimborclandirildi="KİRACİ";
    
    /*BORC TİPLERİ: KİRA, AİDAT, DEPOZİTO, KAPORA, SU, HİZMET */
    $borctipi="İNTERNET";
    
    for($i=0;$i<count($internetodemetarihleri);$i++){
        $sql="INSERT INTO genelborc (id, eklenmetarihi, tahedilecektarih, borctipi, miktar, parabirimi, mulkno, yapino, kiralamakey, kimborclandirildi, esasborctablosunayazildi, company_id) VALUES ('', '$date','$internetodemetarihleri[$i]','$borctipi','$internetbedeli','$internetbedeliparabirimi','$mulkno','$yapino','$kirakaporasonkey','$kimborclandirildi','$esasborctablosunayazildi', '{$_SESSION['company_id']}')";
        if ($conn->query($sql) === TRUE) {}
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
/***İNTERNET-BORC SON***/     
    
    /***KOMİSYON-BORC***/  
    $esasborctablosunayazildi=0;
    $kimborclandirildi="KİRACİ";
    
    $borctipi="KOMİSYON";
    if($komisyonbedeli!=0){
      $sql="INSERT INTO genelborc (id, eklenmetarihi, tahedilecektarih, borctipi, miktar, parabirimi, mulkno, yapino, kiralamakey, kimborclandirildi, esasborctablosunayazildi, company_id) VALUES ('', '$date','$kiralamatarihi','$borctipi','$komisyonbedeli','$komisyonbedeliparabirimi','$mulkno','$yapino','$kirakaporasonkey','$kimborclandirildi','$esasborctablosunayazildi', '{$_SESSION['company_id']}')";
        if ($conn->query($sql) === TRUE) {}
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }  
        
    }
    
    
/***KAPORA-BORC SON***/
    
 /***************KİRALAMA BORÇLARINI OLUŞTUR SON*****************/   
    
    
    
    
    
    
   /***************KİRALAMA GELİRLERNİ EKLE*****************/     
    
    
    
      $gelirkaynagi="KIRACI";
      $tahsilatnot="KIRALAMASURECI";
     if($kaporatahMiktar!=0 && $kaporaSterling!=0){
     $sql="INSERT INTO kaporatahakkukgelir (id, insertdate, tahtarih, mulkno, yapino, kiralamakey, gelirkaynagi, miktar, stgmiktar, parabirimi, tahsilattlrate, tahsilattotlrate, username,  belgepaths, tahsilatnot) VALUES ('', '$date','$kiralamatarihi','$mulkno','$yapino','$kirakaporasonkey','$gelirkaynagi','$kaporatahMiktar','$kaporaSterling','$kaporaPB','$kaporaTlRate','$kaporaToTlRate','$kiralamayapanuname','$kaporabelgepaths','$tahsilatnot')";
        if ($conn->query($sql) === TRUE) {}
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
     }
    
          $gelirkaynagi="KIRACI";
      $tahsilatnot="KIRALAMASURECI";
     if($depozitoMiktar!=0 && $depozitoSterling!=0){
     $sql="INSERT INTO depozittahakkukgelir (id, insertdate, tahtarih, mulkno, yapino, kiralamakey, gelirkaynagi, miktar, stgmiktar, parabirimi, tahsilattlrate, tahsilattotlrate, username,  belgepaths, tahsilatnot, company_id) VALUES ('', '$date','$kiralamatarihi','$mulkno','$yapino','$kirakaporasonkey','$gelirkaynagi','$depozitoMiktar','$depozitoSterling','$depozitoPB','$depozitoTlRate','$depozitoToTlRate','$kiralamayapanuname','$depozitobelgepaths','$tahsilatnot', '{$_SESSION['company_id']}')";
        if ($conn->query($sql) === TRUE) {}
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
     }
    
              $gelirkaynagi="KIRACI";
      $tahsilatnot="KIRALAMASURECI";
     if($aidatMiktar!=0 && $aidatSterling!=0){
     $sql="INSERT INTO aidattahakkukgelir (id, insertdate, tahtarih, mulkno, yapino, kiralamakey, gelirkaynagi, miktar, stgmiktar, parabirimi, tahsilattlrate, tahsilattotlrate, username,  belgepaths, tahsilatnot, company_id) VALUES ('', '$date','$kiralamatarihi','$mulkno','$yapino','$kirakaporasonkey','$gelirkaynagi','$aidatMiktar','$aidatSterling','$aidatPB','$aidatTlRate','$aidatToTlRate','$kiralamayapanuname','$aidatbelgepaths','$tahsilatnot', '{$_SESSION['company_id']}')";
        if ($conn->query($sql) === TRUE) {}
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
     }
    
    
    
                  $gelirkaynagi="KIRACI";
      $tahsilatnot="KIRALAMASURECI";
     if($kiraMiktar!=0 && $kiraSterling!=0){
     $sql="INSERT INTO kiratahakkukgelir (id, insertdate, tahtarih, mulkno, yapino, kiralamakey, gelirkaynagi, miktar, stgmiktar, parabirimi, tahsilattlrate, tahsilattotlrate, username,  belgepaths, tahsilatnot, company_id) VALUES ('', '$date','$kiralamatarihi','$mulkno','$yapino','$kirakaporasonkey','$gelirkaynagi','$kiraMiktar','$kiraSterling','$kiraPB','$kiraTlRate','$kiraToTlRate','$kiralamayapanuname','$kirabelgepaths','$tahsilatnot', '{$_SESSION['company_id']}')";
        if ($conn->query($sql) === TRUE) {}
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
     }
    
    
    
   /***************KİRALAMA GELİRLERNİ EKLE SON*****************/   
    
     
     
     
     
        // KİRALAMA SÜRECİNİN İŞLENİP İŞLENMEDİĞİ GARANTİSİ. BU İŞLENİRSE TEKRARDAN AYNI BORC VEYA GELİR TABLOLARA İŞLENMEZ.
     $sql="INSERT INTO kiralamasureciborcgelirisle (id, date, kiralamakey) VALUES ('', '$date','$kirakaporasonkey')";
        if ($conn->query($sql) === TRUE) {}
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
     
     
 }// KONTROL İF
    
 
    
    
    
    
    
   
    
    
    
      $yetkilionay=2;
      $status="KIRADA";
      $sql = "UPDATE kiralamakayit SET yetkilionay='$yetkilionay', status='$status' where kiralamakey='$kirakaporasonkey'"; 
    
    if ($conn->query($sql) === TRUE) {
   

      $kiralamaonayinda=2; // OnAYLANDI 2 OLUR 
        $kiralandi=1;
        
         $sql = "UPDATE mulkkayit SET kiralamaonayinda='$kiralamaonayinda', kiralandi='$kiralandi', kirabitistarihi='$kirabitistarihi',status='$status'  where id='$mulkno'"; 
        
     if ($conn->query($sql) === TRUE) {
         
         
 
    

            echo "<br>";
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">'.$mulkno.' numaralı mülke ait kiralama süreci başarıyla tamamlanmıştır. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';  
    
    
     }
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
        
        
       
       
 
   
}else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    
  
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