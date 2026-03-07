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
    </script>
  
    <?php
   include 'usersession.php';
   // usersessiontimecheck();
     require 'vendor/autoload.php';

use PhpOffice\PhpWord\IOFactory;
use Dompdf\Dompdf;
use Dompdf\Options;       
              
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
   if($_FILES['kaporabelge']['name']!=NULL) {
        $kaporabelge = $_FILES['kaporabelge'];
    }else
    {
        Notdevam(); 
    }
   
   
    $mulknoid=$_SESSION['mulkno'];    
   
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
    
         if($_POST['adsoyad']==NULL){
        Notdevam();
    }
    else
    {
      $adsoyad=$_POST['adsoyad'];
        $adsoyad=trim($adsoyad);
    }  
              
        if($_POST['iletisim1']==NULL){
        Notdevam();
    }
    else
    {
      $iletisim1=$_POST['iletisim1'];
        $iletisim1=trim($iletisim1);
    }              
              
      
      $iletisim2=$_POST['iletisim2'];
        $iletisim2=trim($iletisim2);
               
              
         if($_POST['kimlikno']==NULL){
        Notdevam();
    }
    else
    {
      $kimlikno=$_POST['kimlikno'];
        $kimlikno=trim($kimlikno);
    }           
              
       if($_POST['email']==NULL){
        Notdevam();
    }
    else
    {
      $email=$_POST['email'];
        $email=trim($email);
    }   
              
if($_POST['uyruk']==NULL){
        Notdevam();
    }
    else
    {
      $uyruk=$_POST['uyruk'];
        $uyruk=trim($uyruk);
    } 
    
    if($_POST['kaporatip']==NULL){
        Notdevam();
    }
    else
    {
      $kaporatip=$_POST['kaporatip'];
        $kaporatip=trim($kaporatip);
    }  
    
   
    if($_POST['kimliktipi']==NULL){
        Notdevam();
    }
    else
    {
      $kimliktipi=$_POST['kimliktipi'];
        $kimliktipi=trim($kimliktipi);
    } 
    
    if($_POST['kaporamiktari']==NULL){
        Notdevam();
    }
    else
    {
      $kaporamiktari=$_POST['kaporamiktari'];
        $kaporamiktari=trim($kaporamiktari);
    }
    
    if($_POST['topalkaporamiktari']==NULL){
        Notdevam();
    }
    else
    {
      $topalkaporamiktari=$_POST['topalkaporamiktari'];
        $topalkaporamiktari=trim($topalkaporamiktari);
    }
    
     if($_POST['kaporaparabirimi']==NULL){
        Notdevam();
    }
    else
    {
      $kaporaparabirimi=$_POST['kaporaparabirimi'];
        $kaporaparabirimi=trim($kaporaparabirimi);
    } 
    
     if($_POST['kaporateslimtarihi']==NULL){
        Notdevam();
    }
    else
    {
      $kaporateslimtarihi=$_POST['kaporateslimtarihi'];
        $kaporateslimtarihi=trim($kaporateslimtarihi);
    } 
    
       
    
    
    
    
 
      $kapozelnot=$_POST['kapozelnot'];
        $kapozelnot=trim($kapozelnot);
                
   
    
    
    if($_POST['kirabedeli']==NULL){
        Notdevam();
    }
    else
    {
      $kirabedeli=$_POST['kirabedeli'];
        $kirabedeli=trim($kirabedeli);
    } 
    
     if($_POST['kirabedeliparabirimi']==NULL){
        Notdevam();
    }
    else
    {
      $kirabedeliparabirimi=$_POST['kirabedeliparabirimi'];
        $kirabedeliparabirimi=trim($kirabedeliparabirimi);
    } 
    
              
     if($_POST['kirasuresi']==NULL){
        Notdevam();
    }
    else
    {
      $kirasuresi=$_POST['kirasuresi'];
        $kirasuresi=trim($kirasuresi);
    }   
    
     if($_POST['kiraodemebicimi']==NULL){
        Notdevam();
    }
    else
    {
      $kiraodemebicimi=$_POST['kiraodemebicimi'];
        $kiraodemebicimi=trim($kiraodemebicimi);
    } 
       
    if($_POST['depozitobedeli']==NULL){
        Notdevam();
    }
    else
    {
      $depozitobedeli=$_POST['depozitobedeli'];
        $depozitobedeli=trim($depozitobedeli);
    } 
    
    if($_POST['depozitobedeliparabirimi']==NULL){
        Notdevam();
    }
    else
    {
      $depozitobedeliparabirimi=$_POST['depozitobedeliparabirimi'];
        $depozitobedeliparabirimi=trim($depozitobedeliparabirimi);
    }  
    
    
    if($_POST['odenendepozito']==NULL){
        Notdevam();
    }
    else
    {
      $odenendepozito=$_POST['odenendepozito'];
        $odenendepozito=trim($odenendepozito);
    } 
   
     
      //$depozitovadesayisi=$_POST['depozitovadesayisi'];
        //$depozitovadesayisi=trim($depozitovadesayisi);
   
    
     if($_POST['komisyon']==NULL){
        Notdevam();
    }
    else
    {
      $komisyon=$_POST['komisyon'];
        $komisyon=trim($komisyon);
    } 
    
   
      $komisyonbedeli=$_POST['komisyonbedeli'];
        $komisyonbedeli=trim($komisyonbedeli);
   
    $komisyonbedeliparabirimi=$_POST['komisyonbedeliparabirimi'];
        $komisyonbedeliparabirimi=trim($komisyonbedeliparabirimi);
        
    //$komisyontahsili=$_POST['komisyontahsili'];
      //  $komisyontahsili=trim($komisyontahsili);
 
      $kiralamaozelnot=$_POST['kiralamaozelnot'];
        $kiralamaozelnot=trim($kiralamaozelnot);
                
    if($_POST['taksitmiktari']==NULL){
        Notdevam();
    }
    else
    {
      $taksitmiktari=$_POST['taksitmiktari'];
        $taksitmiktari=trim($taksitmiktari);
    } 
            
     if($_POST['toplamkirabedeli']==NULL){
        Notdevam();
    }
    else
    {
      $toplamkirabedeli=$_POST['toplamkirabedeli'];
        $toplamkirabedeli=trim($toplamkirabedeli);
    } 
    
     if($_POST['aidat']==NULL){
        Notdevam();
    }
    else
    {
      $aidat=$_POST['aidat'];
        $aidat=trim($aidat);
    } 
    
    if($_POST['aidatbedeli']==NULL){
        Notdevam();
    }
    else
    {
      $aidatbedeli=$_POST['aidatbedeli'];
        $aidatbedeli=trim($aidatbedeli);
    } 
       
     if($_POST['aidatbedeliparabirimi']==NULL){
        Notdevam();
    }
    else
    {
      $aidatbedeliparabirimi=$_POST['aidatbedeliparabirimi'];
        $aidatbedeliparabirimi=trim($aidatbedeliparabirimi);
    } 
    
     if($_POST['aidatodemebicimi']==NULL){
        Notdevam();
    }
    else
    {
      $aidatodemebicimi=$_POST['aidatodemebicimi'];
        $aidatodemebicimi=trim($aidatodemebicimi);
    }  
   
    
    if($_POST['acente']==NULL){
        Notdevam();
    }
    else
    {
      $acente=$_POST['acente'];
        $acente=trim($acente);
    }
    
     if($_POST['buayaidat']==NULL){
        Notdevam();
    }
    else
    {
      $buayaidat=$_POST['buayaidat'];
        $buayaidat=trim($buayaidat);
    }
    
      if($_POST['su']==NULL){
        Notdevam();
    }
    else
    {
      $su=$_POST['su'];
        $su=trim($su);
    }
    
 
    
      $subedeli=$_POST['subedeli'];
        $subedeli=trim($subedeli);
    
    
   
      $subedeliparabirimi=$_POST['subedeliparabirimi'];
        $subedeliparabirimi=trim($subedeliparabirimi);
    
    
   
      $suodemebicimi=$_POST['suodemebicimi'];
        $suodemebicimi=trim($suodemebicimi);
    
    
    
          if($_POST['hizmet']==NULL){
        Notdevam();
    }
    else
    {
      $hizmet=$_POST['hizmet'];
        $hizmet=trim($hizmet);
    }
    
  
      $hizmetbedeli=$_POST['hizmetbedeli'];
        $hizmetbedeli=trim($hizmetbedeli);
    
    
  
      $hizmetbedeliparabirimi=$_POST['hizmetbedeliparabirimi'];
        $hizmetbedeliparabirimi=trim($hizmetbedeliparabirimi);
    
    
   
      $hizmetodemebicimi=$_POST['hizmetodemebicimi'];
        $hizmetodemebicimi=trim($hizmetodemebicimi);
    
    
    
    
    
              if($_POST['internet']==NULL){
        Notdevam();
    }
    else
    {
      $internet=$_POST['internet'];
        $internet=trim($internet);
    }
    
  
      $internetbedeli=$_POST['internetbedeli'];
        $internetbedeli=trim($internetbedeli);
    
    
  
      $internetbedeliparabirimi=$_POST['internetbedeliparabirimi'];
        $internetbedeliparabirimi=trim($internetbedeliparabirimi);
    
    
   
      $internetodemebicimi=$_POST['internetodemebicimi'];
        $internetodemebicimi=trim($internetodemebicimi);
    
    /*     
    echo $adsoyad."<br>";
    echo $iletisim1."<br>";
    echo $iletisim2."<br>";
    echo $kimlikno."<br>";
    echo $kimliktipi."<br>";
    echo $email."<br>";
    echo $uyruk."<br>";
    echo $kapozelnot."<br>";
    echo $kaporamiktari."<br>";
    echo $kaporaparabirimi."<br>";
    echo $kaporateslimtarihi."<br>";
    echo $kirabedeli."<br>";
    echo $kirabedeliparabirimi."<br>";
    echo $kirasuresi."<br>";
    echo $kiraodemebicimi."<br>";
    echo $depozitobedeli."<br>";
    echo $depozitobedeliparabirimi."<br>";
    echo $odenendepozito."<br>";
    echo $komisyon."<br>";
    echo $komisyonbedeli."<br>";
    echo $komisyonbedeliparabirimi."<br>";
    echo $aidat."<br>";
    echo $aidatbedeli."<br>";
    echo $aidatbedeliparabirimi."<br>";
    echo $komisyontahsili."<br>";
    echo $taksitmiktari."<br>";
    echo $toplamkirabedeli."<br>";
    
    exit();
    */
    ?>

<!-------------------------------------------------------->
<?php
    
  
 if ($mulknoid != $mulkno) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Kayıt için başlatılan mülk numarası ile formda gönderilen mülk numarası farklıdır. Lütfen yeniden deneyiniz. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';
   exit();
}   
    
    
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

             if ($result = $conn -> query("SELECT * FROM kirakaporasure")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
        $kirakaporasure=$row['kirakaporatakvimgunu'];
        
}
     
  $result -> free_result();
}
    

    //$satildiison=0;
    $mulkkapalimi=0;
    $kiraison=0;
   // $satisison=0;
     if ($result = $conn -> query("SELECT * FROM mulkkayit where mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulkno'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

     /* if($row['satildi']==1){
          $satildiison=1;
      }
      */
      
      
      if(strcmp($kaporatip, "KİRALAMA")===0){
      if($row['kirakaporaeklendi']==1 || $row['kiralamaonayinda']==1 || $row['kiralamaonayinda']==2 || $row['kiralandi']==1 || $row['kiracieklendi']==1){
          $kiraison=1;
      }
      }
      /*
      if(strcmp($kaporatip, "SATIŞ")===0){
      if($row['satiskaporaeklendi']==1){
          $satisison=1;
      }
      }
      */
    $malsahibi=$row['adsoyad'];
     $malsahibiid=$row['kimlikno'];  
      
      
       if($row['kiralamadurumu']=="KAPALI" && $row['kirayaactarih']!="0000-00-00"){   
      $mulkkapalimi=1;
      $kirayaactarih=$row['kirayaactarih'];   
   }
      
      
      
}
     
  $result -> free_result();
}  
    
  /*  
   if ($satildiison == 1) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülk satılmıştır. Satılmış olan mülke kapora eklenemez. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
} 
   */ 
       if ($kiraison == 1) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülke daha önce kira kaporası eklenmiştir. Kira kaporası güncellenebilir veya kira kaporası silinerek yeni kapora eklemesi yapılabilir. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
} 
    
    // Tarihlerin değişkenlerde tanımlandığını varsayalım



// Tarihleri DateTime nesnelerine dönüştürme
$tarih1 = new DateTime($date);
$tarih2 = new DateTime($kaporateslimtarihi);
    
    
    
       if ($tarih1!=$tarih2 && $mulkkapalimi==0) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Sisteme müdehale edilerek tarih değişikliği yapılmıştır. Kapora kaydı yapılamaz. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
} 
  
           if ($kaporamiktari>$topalkaporamiktari) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Sisteme müdehale edilerek kapora değişikliği yapılmıştır. Kapora kaydı yapılamaz. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
}
    
    
  
         if ($result = $conn -> query("SELECT * FROM yapikayit where yapikayit.isdeleted !=1 AND yapikayit.mulkid='$mulkno'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

     $bolge=$row['ilce'];
     $siteadi=$row['siteadi'];
     $kapino=$row['kapino'];
     
       
}
     
  $result -> free_result();
} 
    
    
           if ($result = $conn -> query("SELECT name,surname FROM users where users.isdeleted !=1 AND users.uname='$uname'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

     $ksname=$row['name'];
     $kssurname=$row['surname'];
     
     
       
}
     
  $result -> free_result();
}   
    
    
     function createDirectory($path) {
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
}  
    
    function randomNumbersInRange($min, $max) {
    $numbers = 0;
        $seed = microtime(true) * 1000;
    mt_srand($seed); // Başlangıç durumunu belirle
        $numbers = mt_rand($min, $max);
    return $numbers;
}
    
    
 
    
    
    
    
/***********************VERİ TABANI YAZMA İŞLEMLERİ*****************************/
    $uname= mysqli_real_escape_string($conn, $uname); 
    $kaporatip= mysqli_real_escape_string($conn, $kaporatip); 
    $adsoyad= mysqli_real_escape_string($conn, $adsoyad); 
    $iletisim1= mysqli_real_escape_string($conn, $iletisim1); 
    $iletisim2= mysqli_real_escape_string($conn, $iletisim2); 
    $kimlikno= mysqli_real_escape_string($conn, $kimlikno); 
     $kimliktipi= mysqli_real_escape_string($conn, $kimliktipi); 
    $email= mysqli_real_escape_string($conn, $email); 
    $uyruk= mysqli_real_escape_string($conn, $uyruk);
    $kapozelnot= mysqli_real_escape_string($conn, $kapozelnot); 
    $mulkno= mysqli_real_escape_string($conn, $mulkno); 
    
    $kaporamiktari= mysqli_real_escape_string($conn, $kaporamiktari);
    $topalkaporamiktari= mysqli_real_escape_string($conn, $topalkaporamiktari);
    $kaporaparabirimi= mysqli_real_escape_string($conn, $kaporaparabirimi); 
    
     $kirabedeli= mysqli_real_escape_string($conn, $kirabedeli); 
    $kirabedeliparabirimi= mysqli_real_escape_string($conn, $kirabedeliparabirimi); 
    $kirasuresi= mysqli_real_escape_string($conn, $kirasuresi); 
    $kiraodemebicimi= mysqli_real_escape_string($conn, $kiraodemebicimi);
    $aidatodemebicimi= mysqli_real_escape_string($conn, $aidatodemebicimi);
    $depozitobedeli= mysqli_real_escape_string($conn, $depozitobedeli); 
    $depozitobedeliparabirimi= mysqli_real_escape_string($conn, $depozitobedeliparabirimi); 
    $odenendepozito= mysqli_real_escape_string($conn, $odenendepozito);
    //$depozitovadesayisi= mysqli_real_escape_string($conn, $depozitovadesayisi); 
    $komisyon= mysqli_real_escape_string($conn, $komisyon); 
    $komisyonbedeli= mysqli_real_escape_string($conn, $komisyonbedeli); 
    $komisyonbedeliparabirimi= mysqli_real_escape_string($conn, $komisyonbedeliparabirimi);
    $aidat= mysqli_real_escape_string($conn, $aidat); 
    $aidatbedeli= mysqli_real_escape_string($conn, $aidatbedeli); 
    $aidatbedeliparabirimi= mysqli_real_escape_string($conn, $aidatbedeliparabirimi);
    $komisyontahsili= mysqli_real_escape_string($conn, $komisyontahsili); 
    $taksitmiktari= mysqli_real_escape_string($conn, $taksitmiktari); 
    $toplamkirabedeli= mysqli_real_escape_string($conn, $toplamkirabedeli);
    $acente= mysqli_real_escape_string($conn, $acente);
    
    $buayaidat= mysqli_real_escape_string($conn, $buayaidat);
    $su= mysqli_real_escape_string($conn, $su);
    $subedeli= mysqli_real_escape_string($conn, $subedeli);
    $subedeliparabirimi= mysqli_real_escape_string($conn, $subedeliparabirimi);
    $suodemebicimi= mysqli_real_escape_string($conn, $suodemebicimi);
    $hizmet= mysqli_real_escape_string($conn, $hizmet);
    $hizmetbedeli= mysqli_real_escape_string($conn, $hizmetbedeli);
    $hizmetbedeliparabirimi= mysqli_real_escape_string($conn, $hizmetbedeliparabirimi);
    $hizmetodemebicimi= mysqli_real_escape_string($conn, $hizmetodemebicimi);
 
    $internet= mysqli_real_escape_string($conn, $internet);
    $internetbedeli= mysqli_real_escape_string($conn, $internetbedeli);
    $internetbedeliparabirimi= mysqli_real_escape_string($conn, $internetbedeliparabirimi);
    $internetodemebicimi= mysqli_real_escape_string($conn, $internetodemebicimi);
    
/*
    if(strcmp($kaporatip, "SATIŞ")===0){
      $satiskapora=1;  
    }else
    {
      $satiskapora=0;  
    }
    
    
    if(strcmp($kaporatip, "KİRALAMA")===0){
        $kirakapora=1;
    }else
    {
       $kirakapora=0; 
    }
    */
    $kirakapora=1;

   
    
    
    
/************DOSYA İŞLEMLERİ**************/
$currentDate = date("d-m-Y");  
$projectId = "".($mulkno)."";    
// DB PATH DEĞİŞKENLERİ
$kaporabelgepaths="";

    /*
if($satiskapora){
$basePath = "proje/mulk/{$projectId}/kapora/";
createDirectory($basePath);//KLASÖR İLK KEZ BURDA OLUŞTURULDU        
       
$files = array_filter($_FILES['kaporabelge']['name']); //Use something similar before processing files.
// Count the number of uploaded files in array
$total_count = count($_FILES['kaporabelge']['name']);
// Loop through every file
for( $i=0 ; $i < $total_count ; $i++ ) {
   //The temp file path is obtained
   $tmpFilePath = $_FILES['kaporabelge']['tmp_name'][$i];
   //A file path needs to be present
   if ($tmpFilePath != ""){
         // Dosya adını ve uzantısını al
        $originalFileName = $_FILES['kaporabelge']['name'][$i];
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
      //Setup our new file path
       
      $newFilePath = $basePath.$projectId."_kaporasatisbelge_".$currentDate.($i+1). "." . $fileExtension;
       
       //DBye yazmak için değişkene dosya pathını kopyala
       $kaporabelgepaths=$kaporabelgepaths.$newFilePath.";";
      //File is uploaded to temp dir
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
         //Other code goes here
      }
       else{
         echo "There is an error."; exit();  
       }
   }
}

}
*/


//if($kirakapora){
$basePath = "proje/mulk/{$projectId}/kapora/";
createDirectory($basePath);//KLASÖR İLK KEZ BURDA OLUŞTURULDU        
       
$files = array_filter($_FILES['kaporabelge']['name']); //Use something similar before processing files.
// Count the number of uploaded files in array
$total_count = count($_FILES['kaporabelge']['name']);
// Loop through every file
for( $i=0 ; $i < $total_count ; $i++ ) {
   //The temp file path is obtained
   $tmpFilePath = $_FILES['kaporabelge']['tmp_name'][$i];
   //A file path needs to be present
   if ($tmpFilePath != ""){
         // Dosya adını ve uzantısını al
        $originalFileName = $_FILES['kaporabelge']['name'][$i];
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
      //Setup our new file path
       
      $newFilePath = $basePath.$projectId."_kaporakirabelge_".$currentDate.($i+1). "." . $fileExtension;
       
       //DBye yazmak için değişkene dosya pathını kopyala
       $kaporabelgepaths=$kaporabelgepaths.$newFilePath.";";
      //File is uploaded to temp dir
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
         //Other code goes here
      }
       else{
         echo "There is an error."; exit();  
       }
   }
}

//}

/*
function generateUniqueRandomString() {
    $timestamp = microtime();
    $uniqueString = md5(uniqid($timestamp, true));
    $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, 10);
    return $uniqueString . $randomString;
}
*/
    function generateUniqueRandomString() {
    // Rastgele karakter seti
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $charactersLength = strlen($characters);
    
    // Rastgele string oluşturma
    $randomString = '';
    for ($i = 0; $i < 10; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    
    // Benzersizlik eklemek için uniqid ve microtime kullanma
    $uniqueString = uniqid(microtime(), true);
    
    // MD5 ile hash oluşturma ve ilk 10 karakteri alma
    $uniqueHash = substr(md5($uniqueString), 0, 10);
    
    // Rastgele string ile benzersiz hash'i birleştirme
    return $randomString . $uniqueHash;
}
    
$kaporaidtekil = generateUniqueRandomString();// BAŞVURU TEKİLLİĞİNİ SAĞLAMAK
    

    
   
   
 
/*
    if($satiskapora==1){
         $sql = "INSERT INTO satiskaporakayit (id, date, username, adsoyad, iletisim1, iletisim2, kimlikno, kimliktipi, email, uyruk, kapozelnot, mulkno, kaporamiktari, kaporaparabirimi, kaporateslimtarihi, kaporasatisbelge) VALUES ('', '$date','$uname','$adsoyad','$iletisim1','$iletisim2','$kimlikno','$kimliktipi','$email','$uyruk','$kapozelnot','$mulkno','$kaporamiktari','$kaporaparabirimi','$kaporateslimtarihi','$kaporabelgepaths')"; 
    }*/
    //else{
     $sql = "INSERT INTO kirakaporakayit (id, kirakey, date, username, ksname,kssurname,acente, adsoyad, iletisim1, iletisim2, kimlikno, kimliktipi, email, uyruk, kapozelnot, mulkno, kaporamiktari,topalkaporamiktari, kaporaparabirimi, kaporateslimtarihi, kaporakirabelge, kirabedeli,kirabedeliparabirimi,kirasuresi,kiraodemebicimi,aidatodemebicimi, toplamkirabedeli, taksitmiktari, depozitobedeli, depozitobedeliparabirimi, odenendepozito, komisyon, komisyonbedeli, komisyonbedeliparabirimi, komisyontahsili, aidat, aidatbedeli, aidatbedeliparabirimi, buayaidat, su, subedeli, subedeliparabirimi, suodemebicimi, hizmet, hizmetbedeli, hizmetbedeliparabirimi, hizmetodemebicimi, internet, internetbedeli, internetbedeliparabirimi, internetodemebicimi) VALUES ('', '$kaporaidtekil','$date','$uname','$ksname','$kssurname','$acente','$adsoyad','$iletisim1','$iletisim2','$kimlikno','$kimliktipi','$email','$uyruk','$kapozelnot','$mulkno','$kaporamiktari','$topalkaporamiktari','$kaporaparabirimi','$kaporateslimtarihi','$kaporabelgepaths','$kirabedeli','$kirabedeliparabirimi','$kirasuresi','$kiraodemebicimi','$aidatodemebicimi','$toplamkirabedeli','$taksitmiktari','$depozitobedeli','$depozitobedeliparabirimi','$odenendepozito','$komisyon','$komisyonbedeli','$komisyonbedeliparabirimi','$komisyontahsili', '$aidat','$aidatbedeli','$aidatbedeliparabirimi','$buayaidat','$su','$subedeli','$subedeliparabirimi','$suodemebicimi','$hizmet','$hizmetbedeli','$hizmetbedeliparabirimi','$hizmetodemebicimi','$internet','$internetbedeli','$internetbedeliparabirimi','$internetodemebicimi')"; 
   // }
    
    
    
  
    
    
    
    
    if ($conn->query($sql) === TRUE) {
     
    $kirakaporaeklendi=$kirakapora;
    //$satiskaporaeklendi=$satiskapora;
        
        
        date_default_timezone_set('Europe/Nicosia');
    $datesession=date("Y-m-d");
    
    // DateTime nesnesi oluşturma
$datetime = new DateTime("$datesession");

$eklenecekgun="+".($kirakaporasure)." day";        
// gün ekleme
$datetime->modify($eklenecekgun);

// Yeni tarih ve saati ayrı ayrı değişkenlere alma
$datesession2 = $datetime->format('Y-m-d');
        
$datesession3 = $datetime->format('d-m-Y');        
         /*if($satiskapora==1){
          $sql = "UPDATE mulkkayit SET satiskaporaeklendi='$satiskaporaeklendi' where id='$mulkno'";} 
          */
         //if($kirakapora==1){
        
    
        /***KİRALAMA STATUS****/
      // UYGUN: Kiralamak için uygun.
      // REZERV: rezerv edilen mülk için.
      // YETKİLİ ONAYINDA: kapora alınarak veya alınmayarak yetkili onayına gittiğini gösterir.
      // KİRALANDI: kiralanmış ve halen kirası devam eden mülkü gösterir.
    
      $status="KAPORAONAYINDA";
      $kaporaonayinda=1; // kapora yetkili onayına gidiyor 1 ise onayda 2 ise onaylandı demek.3 ise reddedildi demek.    
        
           /*$sql = "UPDATE mulkkayit SET kirakaporaeklendi='$kirakaporaeklendi', kirakaporasontarih='$datesession2', kirakaporasonkey='$kaporaidtekil', status='$status'  where id='$mulkno'";  //}  */
         $sql = "UPDATE mulkkayit SET kaporaonayinda='$kaporaonayinda', kirakaporasonkey='$kaporaidtekil', status='$status'  where id='$mulkno'";  //} 
        
     if ($conn->query($sql) === TRUE) {
         
         
 /*********************WORD DOSYASI İŞLEMLERİ*********************/
         
 
         
         
         
       //error_reporting(E_ALL);
  //      ini_set('display_errors', 1);

//$rand_no = rand(111111, 999999);
//if($kirakapora==1){
    $template_file_name = 'Kapora.docx';
$fileName = "kirakapora_".$mulkno."_".$currentDate.".docx";
//}

/*if($satiskapora==1){
    $template_file_name = 'Kapora_s.docx';
$fileName = "satiskapora_".$mulkno."_".$currentDate.".docx";  
}*/
$folder   = "proje/mulk/{$projectId}/kapora/KaporaSozlesme";
$full_path = $folder.'/'.$fileName;
 
try
{
    if (!file_exists($folder))
    {
        mkdir($folder);
    }       
         
    //Copy the Template file to the Result Directory
    copy($template_file_name, $full_path);
   
    // add calss Zip Archive
    $zip_val = new ZipArchive;
 
    //Docx file is nothing but a zip file. Open this Zip File
    if($zip_val->open($full_path) == true)
    {
        // In the Open XML Wordprocessing format content is stored.
        // In the document.xml file located in the word directory.
            
        $key_file_name = 'word/document.xml';
        
        //$message = $zip_val->getFromName('word/document.xml'); 
        $message = $zip_val->getFromName($key_file_name); 
        
        
                     
        //$timestamp = date("d-m-Y");
         
        // this data Replace the placeholders with actual values
        //$checkindate = date("d-m-Y", strtotime($checkindate));
     //$intarih = date("d-m-Y");
        // DateTime nesnesi oluştur
$datexx = DateTime::createFromFormat('Y-m-d', $kaporateslimtarihi);

// Hedef formata dönüştür
$formattedDate = $datexx->format('d-m-Y');
        
     $intarih= $formattedDate;   
     $adsoyad=(string)$adsoyad;
     $kimlikno=(string)$kimlikno;
     $bolge=(string)$bolge;
     $siteadi=(string)$siteadi;
     $kapino=(string)$kapino;
     $kaporamiktari=(string)$kaporamiktari;
     $kaporaparabirimi=(string)$kaporaparabirimi;
     
      
        $message = str_replace('intarih',$intarih,$message);
        $message = str_replace('inkiralayanci',$malsahibi,$message);
        $message = str_replace('inkiramalsah',$malsahibiid,$message);
        $message = str_replace('inkiraciadi',$adsoyad,$message);
        $message = str_replace('inkiraciidno',$kimlikno,$message);
        $message = str_replace('inbolge',$bolge,$message);
        $message = str_replace('insiteadi',$siteadi,$message);
        $message = str_replace('indaireno',$kapino,$message);
        $message = str_replace('inkaporamiktar',$kaporamiktari,$message);
        $message = str_replace('inkaporaparabirimi',$kaporaparabirimi,$message);
  
        //Replace the content with the new content created above.
        $zip_val->addFromString($key_file_name, $message);
        $zip_val->close();
           
    }
}
catch (Exception $exc) 
{
    $error_message =  "Error creating the Word Document";
    var_dump($exc);
}
    
$full_path='"'.$full_path.'"';          
             
  /**************************************/ 
         
$full_pathx = str_replace('"', '', $full_path);
         
 
         /**********WORD  TAMAMLA***********/
         
/*********** PDF DONUSTUR BASLA ****************/


// Word dosyasının yolu
$wordDosyaYolu = $full_pathx;
//echo $wordDosyaYolu;
// PDF dosyasının kaydedileceği yol
$fileNamepdf = "kirakapora_".$mulkno."_".$currentDate.".pdf";         
$pdfDosyaYolu = $folder.'/'.$fileNamepdf;
//echo $pdfDosyaYolu;
  
         
// Word belgesini yükleme ve HTML'ye dönüştürme
$phpWord = IOFactory::load($wordDosyaYolu, 'Word2007');
$htmlDosyaYolu = tempnam(sys_get_temp_dir(), 'html');
$htmlWriter = IOFactory::createWriter($phpWord, 'HTML');
$htmlWriter->save($htmlDosyaYolu);

// HTML içeriğini Dompdf ile PDF'ye dönüştürme
$htmlContent = file_get_contents($htmlDosyaYolu);
$htmlContent = trim($htmlContent); // Baş ve sondaki boşlukları temizle
$htmlContent = preg_replace('/\s+/', ' ', $htmlContent); // Fazla boşlukları temizle

// HTML başlığı ve meta karakter seti ekleme
$htmlContent = '<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>' . $htmlContent . '</body></html>';

// Dompdf oluşturma
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isPhpEnabled', true);
$options->set('defaultFont', 'DejaVu Sans');
$options->set('isFontSubsettingEnabled', true);
$dompdf = new Dompdf($options);

// HTML içeriğini PDF'ye dönüştürme
$dompdf->loadHtml($htmlContent);

// Sayfa boyutu ve yönlendirme ayarları
$dompdf->setPaper('A4', 'portrait');

// PDF'yi oluşturma
$dompdf->render();

// PDF dosyasını kaydetme
file_put_contents($pdfDosyaYolu, $dompdf->output());

// Geçici HTML dosyasını silme
unlink($htmlDosyaYolu);
        
        
  $pdffull_path='"'.$pdfDosyaYolu.'"';         
  $pdffull_pathx = str_replace('"', '', $pdffull_path);       
            /**********PDF  TAMAMLA***********/
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
//if($kirakapora==1){         
$sql = "UPDATE kirakaporakayit SET kaporasozpath='$full_pathx',kaporasozpdfpath='$pdffull_pathx' where kirakaporakayit.mulkno='$mulkno'";
//}
/*         
if($satiskapora==1){
$sql = "UPDATE satiskaporakayit SET kaporasozpath='$full_pathx' where satiskaporakayit.mulkno='$mulkno'"; 
}   */   
if ($conn->query($sql) === TRUE) {
    
    
    
             echo "<br>";
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">'.$mulkno.' numaralı mülke başarıyla kira kaporası eklenmiş ve Yetkili Onayına İletilmiştir. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';  
    
    
/* MAİL GONDERİMİ İÇİN
    
   // echo $kaporaidtekil;
              include 'mailsender.php';    
         
      $message=message1_email($kaporaidtekil);    
         
      $message=$message."Kaporanın Geçerli Olduğu Son Tarih:".$datesession3."<br>"."Kaporanız yukarıda belirtilen tarihe kadar geçerlidir. Kapora uzatılması ve/veya gerekli ödemenin zamanında yapılmaması durumunda ödenen kapora iade edilmez.";
        // echo $message;
      $emailsend=kira_email($kaporaidtekil);
        // echo $emailsend;
  
     // mailsender($emailsend,$message); //MAİL GONDERİMİ İÇİN BUNU AÇ 
    
    
    
    */
    
    
    
    
}else {echo "Error: " . $sql . "<br>" . $conn->error;}   
         
         
         
         
         
/*********************************************************/ 
       /*  
         if($satiskapora==1){
           echo '<br>';
    echo '<br>';
    echo '<br>';
    echo "<br><br>";           
    echo '<div class="makememiddlebody"><div class="containercap"><div class="textcapdiv"><form action='.$full_path.' method="get" enctype="multipart/form-data">
  <div class="row" id="hiderow">
  <button type="submit" id="autoClickBtn" class="gobackcap" style="background:green;color:white;font-size:15px;font-weight:bolder;">Kapora Sözleşmesini İndir</button>
   </form>
  </div></div>
  </div></div>
</form>';
         echo "<br>";
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">'.$mulkno.' numaralı mülke başarıyla satış kaporası eklenmiştir. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';} 
       */
        // if($kirakapora==1){
             
         
         
  /**********KİRA SÖZLEŞMESİNİ WORD OLARKA İNDİR       
         
         
         
                       echo '<br>';
    echo '<br>';
    echo '<br>';
    echo "<br><br>";           
    echo '<div class="makememiddlebody"><div class="containercap"><div class="textcapdiv"><form action='.$full_path.' method="get" enctype="multipart/form-data">
  <div class="row" id="hiderow">
  <button type="submit" id="autoClickBtn" class="gobackcap" style="background:green;color:white;font-size:15px;font-weight:bolder;">Kapora Sözleşmesini İndir</button>
   </form>
  </div></div>
  </div></div>
</form>';

*/
         
         
         /*KAPORA EKLENME MESAJI

            echo "<br>";
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">'.$mulkno.' numaralı mülke başarıyla kira kaporası eklenmiştir. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>'; // } 
         
         
      
       */  
         
         
         
         
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