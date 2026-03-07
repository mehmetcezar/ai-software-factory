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
    
    
    
      $kaporaid=$_POST['kirakey'];
        $kaporaid=trim($kaporaid);
   
    if($_POST['kiralamatarihi']==NULL){
        Notdevam();
    }
    else
    {
      $kiralamatarihi=$_POST['kiralamatarihi'];
        $kiralamatarihi=trim($kiralamatarihi);
    }
   
      $stopajvergisi=$_POST['stopajvergisi'];
        $stopajvergisi=trim($stopajvergisi);
      
              
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
        
    $komisyontahsili=$_POST['komisyontahsili'];
        $komisyontahsili=trim($komisyontahsili);
 
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
     
    if($_POST['aidatsontarih']==NULL){
        Notdevam();
    }
    else
    {
      $aidatsontarihx=$_POST['aidatsontarih'];
        $aidatsontarihx=trim($aidatsontarihx);
    } 
    
        $tarihObjesi = DateTime::createFromFormat('d-m-Y', $aidatsontarihx);
$aidatsontarih = $tarihObjesi->format('Y-m-d');
     
     $yonetimsoziste=$_POST['yonetimsoziste'];
        $yonetimsoziste=trim($yonetimsoziste);
    
    $yonetimsozbastarih=$_POST['yonetimsozbastarih'];
        $yonetimsozbastarih=trim($yonetimsozbastarih);
    
    $yonetimsozbittarih=$_POST['yonetimsozbittarih'];
        $yonetimsozbittarih=trim($yonetimsozbittarih);
    

    
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
    /*
      if($_POST['su']==NULL){
        Notdevam();
    }
    else
    {
      $su=$_POST['su'];
        $su=trim($su);
    }
    */
   
      $subedeli=$_POST['subedeli'];
        $subedeli=trim($subedeli);
    
    
  
      $subedeliparabirimi=$_POST['subedeliparabirimi'];
        $subedeliparabirimi=trim($subedeliparabirimi);
    
    
   
      $suodemebicimi=$_POST['suodemebicimi'];
        $suodemebicimi=trim($suodemebicimi);
    
    
    /*
          if($_POST['hizmet']==NULL){
        Notdevam();
    }
    else
    {
      $hizmet=$_POST['hizmet'];
        $hizmet=trim($hizmet);
    }
    */
    
      $hizmetbedeli=$_POST['hizmetbedeli'];
        $hizmetbedeli=trim($hizmetbedeli);
    
    
   
      $hizmetbedeliparabirimi=$_POST['hizmetbedeliparabirimi'];
        $hizmetbedeliparabirimi=trim($hizmetbedeliparabirimi);
    
    
   
      $hizmetodemebicimi=$_POST['hizmetodemebicimi'];
        $hizmetodemebicimi=trim($hizmetodemebicimi);
    
    
       $internetbedeli=$_POST['internetbedeli'];
        $internetbedeli=trim($internetbedeli);
    
    
   
      $internetbedeliparabirimi=$_POST['internetbedeliparabirimi'];
        $internetbedeliparabirimi=trim($internetbedeliparabirimi);
    
    
   
      $internetodemebicimi=$_POST['internetodemebicimi'];
        $internetodemebicimi=trim($internetodemebicimi);
    
    
    
    //Kapora
    
           $kaporatahMiktar=$_POST['kaporaMiktar'];
      $kaporatahMiktar=trim($kaporatahMiktar);
      $kaporaPB=$_POST['kaporaPB'];
      $kaporaPB=trim($kaporaPB);
     // $kaporaTlRate=$_POST['kaporaTlRate'];
     $kaporaTlRate=0;
      //$kaporaTlRate=trim($kaporaTlRate);
      //$kaporaToTlRate=$_POST['kaporaToTlRate'];
      $kaporaToTlRate=0;
      //$kaporaToTlRate=trim($kaporaToTlRate);
      $kaporaSterling=$_POST['kaporaSterling'];
      $kaporaSterling=trim($kaporaSterling);
    

    
      // Depozito
$depozitoMiktar = $_POST['depozitoMiktar'];
$depozitoMiktar = trim($depozitoMiktar);
$depozitoPB = $_POST['depozitoPB'];
$depozitoPB = trim($depozitoPB);
    
//$depozitoTlRate = $_POST['depozitoTlRate'];
$depozitoTlRate = 0;
//$depozitoTlRate = trim($depozitoTlRate);
//$depozitoToTlRate = $_POST['depozitoToTlRate'];
$depozitoToTlRate = 0;
//$depozitoToTlRate = trim($depozitoToTlRate);  
$depozitoSterling = $_POST['depozitoSterling'];
$depozitoSterling = trim($depozitoSterling);

// Aidat
$aidatMiktar = $_POST['aidatMiktar'];
$aidatMiktar = trim($aidatMiktar);
$aidatPB = $_POST['aidatPB'];
$aidatPB = trim($aidatPB);
$aidatTlRate = $_POST['aidatTlRate'];
$aidatTlRate = trim($aidatTlRate);
$aidatToTlRate = $_POST['aidatToTlRate'];
$aidatToTlRate = trim($aidatToTlRate);
$aidatSterling = $_POST['aidatSterling'];
$aidatSterling = trim($aidatSterling);

// Kira
$kiraMiktar = $_POST['kiraMiktar'];
$kiraMiktar = trim($kiraMiktar);
$kiraPB = $_POST['kiraPB'];
$kiraPB = trim($kiraPB);
$kiraTlRate = $_POST['kiraTlRate'];
$kiraTlRate = trim($kiraTlRate);
$kiraToTlRate = $_POST['kiraToTlRate'];
$kiraToTlRate = trim($kiraToTlRate);
$kiraSterling = $_POST['kiraSterling'];
$kiraSterling = trim($kiraSterling);
    
    
  // Kapora
$kaporatahMiktar = (float)$kaporatahMiktar;
$kaporaTlRate = (float)$kaporaTlRate;
$kaporaToTlRate = (float)$kaporaToTlRate;
$kaporaSterling = (float)$kaporaSterling;

// Depozito
$depozitoMiktar = (float)$depozitoMiktar;
$depozitoTlRate = (float)$depozitoTlRate;
$depozitoToTlRate = (float)$depozitoToTlRate;
$depozitoSterling = (float)$depozitoSterling;

// Aidat
$aidatMiktar = (float)$aidatMiktar;
$aidatTlRate = (float)$aidatTlRate;
$aidatToTlRate = (float)$aidatToTlRate;
$aidatSterling = (float)$aidatSterling;

// Kira
$kiraMiktar = (float)$kiraMiktar;
$kiraTlRate = (float)$kiraTlRate;
$kiraToTlRate = (float)$kiraToTlRate;
$kiraSterling = (float)$kiraSterling;  
    
    
  
// Kapora belgesi kontrolü
/*if ($_FILES['kaporaBelge']['name'] != NULL) {
    $kaporabelge = $_FILES['kaporaBelge'];
} else {
    Notdevam();
}*/

// Depozito belgesi kontrolü
if ($_FILES['depozitoBelge']['name'] != NULL) {
    $depozitobelge = $_FILES['depozitoBelge'];
} else {
    Notdevam();
}

// Aidat belgesi kontrolü
if ($_FILES['aidatBelge']['name'] != NULL) {
    $aidatbelge = $_FILES['aidatBelge'];
} else {
    Notdevam();
}

// Kira belgesi kontrolü
if ($_FILES['kiraBelge']['name'] != NULL) {
    $kirabelge = $_FILES['kiraBelge'];
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


    
    $kiraison=0;
    $kiralandiison=0;
    $kirakaporaeklendi=0;
     if ($result = $conn -> query("SELECT * FROM mulkkayit where  mulkkayit.company_id = '{$_SESSION['company_id']}' AND mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulkno'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

  
      if($row['kiralamadurumu']!="AÇIK"){
          $kiraison=1;
      }
      
      if($row['kiralandi']==1){
          $kiralandiison=1;
      }
      
      
     $kirakaporasonkey=$row['kirakaporasonkey'];
     $kirakaporaeklendi=$row['kirakaporaeklendi'];
     $kiralamaguncellemegonderildi=$row['kiralamaguncellemegonderildi']; 
      
      
     $malsahibi=$row['adsoyad'];
     $malsahibiid=$row['kimlikno'];       
}
     
  $result -> free_result();
}  
    
    

  if ($kiraison == 1) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülk işlemden önce kiralanmıştır veya kiralanmaya kapatılmıştır. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
}   
    if ($kiralandiison == 1) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülke daha önce kiracı eklenmiştir. Eklenen kiracıyı kaldırın veya güncelleme yapın. Ana menüye dönmek için tıklayınız. </z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
}
     if ($kiralamaguncellemegonderildi != 1) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülk için kiralamaya ait güncelleme süreci bulunmamaktadır. Ana menüye dönmek için tıklayınız. </z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
}
    
    // kiralandı veya kira kaporası eklendi ise; satış kaporası alınabilir ve satışı yapılabilir.
  
         if ($result = $conn -> query("SELECT * FROM yapikayit where  yapikayit.company_id = '{$_SESSION['company_id']}' AND yapikayit.isdeleted !=1 AND yapikayit.mulkid='$mulkno'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

     $bolge=$row['ilce'];
     $siteadi=$row['siteadi'];
     $kapino=$row['kapino'];
     
       
}
     
  $result -> free_result();
} 
    
    
    

    
    
    if($kirakaporaeklendi==1){
             if ($result = $conn -> query("SELECT * FROM kirakaporakayit where  kirakaporakayit.company_id = '{$_SESSION['company_id']}' AND kirakaporakayit.isdeleted !=1 AND kirakaporakayit.kirakey='$kirakaporasonkey'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

     $adsoyadkiraci=$row['adsoyad'];
     $kiracikimlikno=$row['kimlikno'];
     $kirkimtür=$row['kimliktipi'];
     $kaporakirabelge = $row['kaporakirabelge'];
     $kaporakirabelgeektahsil = $row['kaporakirabelgeektahsil'];
       
}
     
  $result -> free_result();
} 
        
        
    }
   $kiralamakey=$kirakaporasonkey;
    
    
    $kaporabelge=array();   
 $kaporabelgeindex=0;   
              $counter=1;   
$kaporakirabelgeayri= explode(";", $kaporakirabelge);
$lastIndex = count($kaporakirabelgeayri) - 1;

if (empty($kaporakirabelgeayri[$lastIndex])) {
    unset($kaporakirabelgeayri[$lastIndex]);
}

$kaporakirabelgeayri = array_values($kaporakirabelgeayri);
foreach($kaporakirabelgeayri as $kaporakirabelgex){

    $counter++;
    $kaporabelge[$kaporabelgeindex]=$kaporakirabelgex;
    
    $kaporabelgeindex++;
}
    
           $counter=1;   
$kaporakirabelgeektahsilayri= explode(";", $kaporakirabelgeektahsil);
$lastIndex = count($kaporakirabelgeektahsilayri) - 1;

if (empty($kaporakirabelgeektahsilayri[$lastIndex])) {
    unset($kaporakirabelgeektahsilayri[$lastIndex]);
}

$kaporakirabelgeektahsilayri = array_values($kaporakirabelgeektahsilayri);
foreach($kaporakirabelgeektahsilayri as $kaporakirabelgeektahsilx){

    $counter++;
    $kaporabelge[$kaporabelgeindex]=$kaporakirabelgeektahsilx;
    
    $kaporabelgeindex++;
}   
    
    
    /*******************SAYI OKUNUSU FONKSİYONU*******************/
    /*
    function yaziyla($sayi) {
    $birler = array("", "bir", "iki", "üç", "dört", "beş", "altı", "yedi", "sekiz", "dokuz");
    $onlar = array("", "on", "yirmi", "otuz", "kırk", "elli", "altmış", "yetmiş", "seksen", "doksan");
    $binler = array("", "bin", "milyon", "milyar", "trilyon");

    if ($sayi == 0) {
        return "sıfır";
    }

    $sayi = strval($sayi);
    $uzunluk = strlen($sayi);
    $kac_birlik = ceil($uzunluk / 3);
    $sayi = str_pad($sayi, $kac_birlik * 3, "0", STR_PAD_LEFT);
    $parcalar = str_split($sayi, 3);

    $yazi = "";
    for ($i = 0; $i < count($parcalar); $i++) {
        $parca = intval($parcalar[$i]);
        if ($parca == 0) {
            continue;
        }
        $birler_basamak = $parca % 10;
        $onlar_basamak = ($parca % 100 - $birler_basamak) / 10;
        $yuzler_basamak = ($parca - $parca % 100) / 100;

        if ($yuzler_basamak > 0) {
            if ($yuzler_basamak == 1) {
                $yazi .= "yüz";
            } else {
                $yazi .= $birler[$yuzler_basamak] . "yüz";
            }
        }

        if ($onlar_basamak > 0) {
            $yazi .= $onlar[$onlar_basamak];
        }

        if ($birler_basamak > 0) {
            $yazi .= $birler[$birler_basamak];
        }

        if ($i < count($parcalar) - 1) {
            $yazi .= $binler[count($parcalar) - 1 - $i];
        }
    }

    return trim($yazi);
}

// Örnek kullanım
$sayi = 123456789012;
echo yaziyla($sayi);
    */
    /**************************************************************/
    

     function createDirectory($path) {
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
}  
   /* 
    function randomNumbersInRange($min, $max) {
    $numbers = 0;
        $seed = microtime(true) * 1000;
    mt_srand($seed); // Başlangıç durumunu belirle
        $numbers = mt_rand($min, $max);
    return $numbers;
}
  */  
 
/***********************VERİ TABANI YAZMA İŞLEMLERİ*****************************/
    $uname= mysqli_real_escape_string($conn, $uname); 
    $yapino= mysqli_real_escape_string($conn, $yapino); 
    $mulkno= mysqli_real_escape_string($conn, $mulkno); 
    $kaporaid= mysqli_real_escape_string($conn, $kaporaid); 
    $stopajvergisi= mysqli_real_escape_string($conn, $stopajvergisi); 
    $kirabedeli= mysqli_real_escape_string($conn, $kirabedeli); 
    $kirabedeliparabirimi= mysqli_real_escape_string($conn, $kirabedeliparabirimi); 
    $kirasuresi= mysqli_real_escape_string($conn, $kirasuresi); 
    $kiraodemebicimi= mysqli_real_escape_string($conn, $kiraodemebicimi);
    $depozitobedeli= mysqli_real_escape_string($conn, $depozitobedeli); 
    $depozitobedeliparabirimi= mysqli_real_escape_string($conn, $depozitobedeliparabirimi); 
    $odenendepozito= mysqli_real_escape_string($conn, $odenendepozito);
   // $depozitovadesayisi= mysqli_real_escape_string($conn, $depozitovadesayisi); 
    $komisyon= mysqli_real_escape_string($conn, $komisyon); 
    $komisyonbedeli= mysqli_real_escape_string($conn, $komisyonbedeli); 
    $komisyonbedeliparabirimi= mysqli_real_escape_string($conn, $komisyonbedeliparabirimi);
    $aidat= mysqli_real_escape_string($conn, $aidat); 
    $aidatbedeli= mysqli_real_escape_string($conn, $aidatbedeli); 
    $aidatbedeliparabirimi= mysqli_real_escape_string($conn, $aidatbedeliparabirimi);
    $komisyontahsili= mysqli_real_escape_string($conn, $komisyontahsili); 
    $taksitmiktari= mysqli_real_escape_string($conn, $taksitmiktari); 
    $toplamkirabedeli= mysqli_real_escape_string($conn, $toplamkirabedeli); 
    $kiralamaozelnot= mysqli_real_escape_string($conn, $kiralamaozelnot);
    $aidatsontarih= mysqli_real_escape_string($conn, $aidatsontarih);
    
 $yonetimsoziste= mysqli_real_escape_string($conn, $yonetimsoziste);
    $yonetimsozbastarih= mysqli_real_escape_string($conn, $yonetimsozbastarih);
    $yonetimsozbittarih= mysqli_real_escape_string($conn, $yonetimsozbittarih);
    
    // Kapora
$kaporatahMiktar = mysqli_real_escape_string($conn, trim($_POST['kaporaMiktar']));
$kaporaPB = mysqli_real_escape_string($conn, trim($_POST['kaporaPB']));
$kaporaTlRate = mysqli_real_escape_string($conn, trim($_POST['kaporaTlRate']));
$kaporaToTlRate = mysqli_real_escape_string($conn, trim($_POST['kaporaToTlRate']));
$kaporaSterling = mysqli_real_escape_string($conn, trim($_POST['kaporaSterling']));

// Depozito
$depozitoMiktar = mysqli_real_escape_string($conn, trim($_POST['depozitoMiktar']));
$depozitoPB = mysqli_real_escape_string($conn, trim($_POST['depozitoPB']));
$depozitoTlRate = mysqli_real_escape_string($conn, trim($_POST['depozitoTlRate']));
$depozitoToTlRate = mysqli_real_escape_string($conn, trim($_POST['depozitoToTlRate']));
$depozitoSterling = mysqli_real_escape_string($conn, trim($_POST['depozitoSterling']));

// Aidat
$aidatMiktar = mysqli_real_escape_string($conn, trim($_POST['aidatMiktar']));
$aidatPB = mysqli_real_escape_string($conn, trim($_POST['aidatPB']));
$aidatTlRate = mysqli_real_escape_string($conn, trim($_POST['aidatTlRate']));
$aidatToTlRate = mysqli_real_escape_string($conn, trim($_POST['aidatToTlRate']));
$aidatSterling = mysqli_real_escape_string($conn, trim($_POST['aidatSterling']));

// Kira
$kiraMiktar = mysqli_real_escape_string($conn, trim($_POST['kiraMiktar']));
$kiraPB = mysqli_real_escape_string($conn, trim($_POST['kiraPB']));
$kiraTlRate = mysqli_real_escape_string($conn, trim($_POST['kiraTlRate']));
$kiraToTlRate = mysqli_real_escape_string($conn, trim($_POST['kiraToTlRate']));
$kiraSterling = mysqli_real_escape_string($conn, trim($_POST['kiraSterling']));    
 
    $acente= mysqli_real_escape_string($conn, $acente);
    
    $buayaidat= mysqli_real_escape_string($conn, $buayaidat);
   
    $subedeli= mysqli_real_escape_string($conn, $subedeli);
    $subedeliparabirimi= mysqli_real_escape_string($conn, $subedeliparabirimi);
    $suodemebicimi= mysqli_real_escape_string($conn, $suodemebicimi);
   
    $hizmetbedeli= mysqli_real_escape_string($conn, $hizmetbedeli);
    $hizmetbedeliparabirimi= mysqli_real_escape_string($conn, $hizmetbedeliparabirimi);
    $hizmetodemebicimi= mysqli_real_escape_string($conn, $hizmetodemebicimi);  
    
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
/************DOSYA İŞLEMLERİ**************/
/*
    $currentDate = date("d-m-Y");  
$projectId = "".($mulkno)."";    
// DB PATH DEĞİŞKENLERİ
$kaporabelgepaths="";

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



if($kirakapora){
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

}


*/

/*
    if($satiskapora==1){
         $sql = "INSERT INTO satiskaporakayit (id, date, username, adsoyad, iletisim1, iletisim2, kimlikno, kimliktipi, email, uyruk, kapozelnot, mulkno, kaporamiktari, kaporaparabirimi, kaporateslimtarihi, kaporasatisbelge) VALUES ('', '$date','$uname','$adsoyad','$iletisim1','$iletisim2','$kimlikno','$kimliktipi','$email','$uyruk','$kapozelnot','$mulkno','$kaporamiktari','$kaporaparabirimi','$kaporateslimtarihi','$kaporabelgepaths')"; 
    }
    else{
     $sql = "INSERT INTO kirakaporakayit (id, date, username, adsoyad, iletisim1, iletisim2, kimlikno, kimliktipi, email, uyruk, kapozelnot, mulkno, kaporamiktari, kaporaparabirimi, kaporateslimtarihi, kaporakirabelge, company_id) VALUES ('', '$date','$uname','$adsoyad','$iletisim1','$iletisim2','$kimlikno','$kimliktipi','$email','$uyruk','$kapozelnot','$mulkno','$kaporamiktari','$kaporaparabirimi','$kaporateslimtarihi','$kaporabelgepaths', '{$_SESSION['company_id']}')"; 
    }
    
   */ 
    
    
    date_default_timezone_set('Europe/Nicosia');
    $datesession=$kiralamatarihi;
    
    // DateTime nesnesi oluşturma
$datetime = new DateTime("$datesession");

$eklenecekgun="+".($kirasuresi)." month";        
// gün ekleme
$datetime->modify($eklenecekgun);
    
$kiralamabitistarihi = $datetime->format('Y-m-d');    
    
     //$muhasebeonay=1;// 1 olunca muhasebe onayına gitti demek, 2 olunca ise muhasebe onayladı demek.
    //$yetkilionay=1;// 1 olunca yetkili onayına gitti demek, 2 olunca ise yetkili onayladı demek.
    
     
     //$status="KIRAONAY"; //KIRAONAY: kira yetkili onayında, KIRAGUNCELLE: yetkili güncellemeye gönderdi, KIRADA: kira sürecinde; YENILENDI: süresi bitti ve yenilendi; KIRACIOUT: söz öncesinde kiracı ayrıldı; SONLANDI: söz. sonlandırıldı.
    
    
    
     $status="KIRAONAY";
    /*
     $sql = "UPDATE kiralamakayit SET 
            date = '$date', 
            username = '$uname', 
            kiralamakey = '$kiralamakey', 
            kiralamatarihi = '$kiralamatarihi', 
            kiralamabitistarihi = '$kiralamabitistarihi', 
            yapino = '$yapino', 
            mulkno = '$mulkno', 
            stopajvergisi = '$stopajvergisi', 
            kirabedeli = '$kirabedeli', 
            kirabedeliparabirimi = '$kirabedeliparabirimi', 
            kirasuresi = '$kirasuresi', 
            kiraodemebicimi = '$kiraodemebicimi', 
            toplamkirabedeli = '$toplamkirabedeli', 
            kaporaid = '$kaporaid', 
            taksitmiktari = '$taksitmiktari', 
            depozitobedeli = '$depozitobedeli', 
            depozitobedeliparabirimi = '$depozitobedeliparabirimi', 
            odenendepozito = '$odenendepozito',  
            komisyon = '$komisyon', 
            komisyonbedeli = '$komisyonbedeli', 
            komisyonbedeliparabirimi = '$komisyonbedeliparabirimi', 
            komisyontahsili = '$komisyontahsili', 
            aidat = '$aidat', 
            aidatbedeli = '$aidatbedeli', 
            aidatbedeliparabirimi = '$aidatbedeliparabirimi',
            aidatsontarih = '$aidatsontarih',
            kiralamaozelnot = '$kiralamaozelnot', 
            status = '$status'
        WHERE kiralamakey = '$kirakaporasonkey'";
    */
    /*
    $sql = "INSERT INTO kiralamakayit (id, date, username, kiralamakey, kiralamatarihi, kiralamabitistarihi, yapino, mulkno, stopajvergisi, kirabedeli, kirabedeliparabirimi, kirasuresi, kiraodemebicimi, aidatodemebicimi, toplamkirabedeli, kaporaid, taksitmiktari, depozitobedeli, depozitobedeliparabirimi, odenendepozito, komisyon, komisyonbedeli, komisyonbedeliparabirimi, komisyontahsili, aidat, aidatbedeli, aidatbedeliparabirimi,aidatsontarih, yonetimsoziste,yonetimsozbastarih,yonetimsozbittarih, kiralamaozelnot, yetkilionay, muhasebeonay,kaporatahMiktar, kaporaPB, kaporaTlRate, kaporaToTlRate, kaporaSterling, depozitoMiktar, depozitoPB, depozitoTlRate, depozitoToTlRate, depozitoSterling, aidatMiktar, aidatPB, aidatTlRate, aidatToTlRate, aidatSterling, kiraMiktar, kiraPB, kiraTlRate, kiraToTlRate, kiraSterling, status, company_id) VALUES ('', '$date','$uname','$kiralamakey', '$kiralamatarihi', '$kiralamabitistarihi','$yapino','$mulkno','$stopajvergisi','$kirabedeli','$kirabedeliparabirimi','$kirasuresi','$kiraodemebicimi','$aidatodemebicimi','$toplamkirabedeli','$kaporaid','$taksitmiktari','$depozitobedeli','$depozitobedeliparabirimi','$odenendepozito','$komisyon','$komisyonbedeli','$komisyonbedeliparabirimi','$komisyontahsili', '$aidat','$aidatbedeli','$aidatbedeliparabirimi','$aidatsontarih','$yonetimsoziste','$yonetimsozbastarih','$yonetimsozbittarih','$kiralamaozelnot','$yetkilionay', '$muhasebeonay', '$kaporatahMiktar', '$kaporaPB', '$kaporaTlRate', '$kaporaToTlRate', '$kaporaSterling', '$depozitoMiktar', '$depozitoPB', '$depozitoTlRate', '$depozitoToTlRate', '$depozitoSterling', '$aidatMiktar', '$aidatPB', '$aidatTlRate', '$aidatToTlRate', '$aidatSterling', '$kiraMiktar', '$kiraPB', '$kiraTlRate', '$kiraToTlRate', '$kiraSterling','$status', '{$_SESSION['company_id']}')";
    */
    /*$sql = "UPDATE kiralamakayit 
        SET 
            date = '$date',
            username = '$uname',
            kiralamakey = '$kiralamakey',
            kiralamatarihi = '$kiralamatarihi',
            kiralamabitistarihi = '$kiralamabitistarihi',
            yapino = '$yapino',
            mulkno = '$mulkno',
            stopajvergisi = '$stopajvergisi',
            kirabedeli = '$kirabedeli',
            kirabedeliparabirimi = '$kirabedeliparabirimi',
            kirasuresi = '$kirasuresi',
            kiraodemebicimi = '$kiraodemebicimi',
            aidatodemebicimi = '$aidatodemebicimi',
            toplamkirabedeli = '$toplamkirabedeli',
            kaporaid = '$kaporaid',
            taksitmiktari = '$taksitmiktari',
            depozitobedeli = '$depozitobedeli',
            depozitobedeliparabirimi = '$depozitobedeliparabirimi',
            odenendepozito = '$odenendepozito',
            komisyon = '$komisyon',
            komisyonbedeli = '$komisyonbedeli',
            komisyonbedeliparabirimi = '$komisyonbedeliparabirimi',
            komisyontahsili = '$komisyontahsili',
            aidat = '$aidat',
            aidatbedeli = '$aidatbedeli',
            aidatbedeliparabirimi = '$aidatbedeliparabirimi',
            aidatsontarih = '$aidatsontarih',
            yonetimsoziste = '$yonetimsoziste',
            yonetimsozbastarih = '$yonetimsozbastarih',
            yonetimsozbittarih = '$yonetimsozbittarih',
            kiralamaozelnot = '$kiralamaozelnot',
            yetkilionay = '$yetkilionay',
            muhasebeonay = '$muhasebeonay',
            kaporatahMiktar = '$kaporatahMiktar',
            kaporaPB = '$kaporaPB',
            kaporaTlRate = '$kaporaTlRate',
            kaporaToTlRate = '$kaporaToTlRate',
            kaporaSterling = '$kaporaSterling',
            depozitoMiktar = '$depozitoMiktar',
            depozitoPB = '$depozitoPB',
            depozitoTlRate = '$depozitoTlRate',
            depozitoToTlRate = '$depozitoToTlRate',
            depozitoSterling = '$depozitoSterling',
            aidatMiktar = '$aidatMiktar',
            aidatPB = '$aidatPB',
            aidatTlRate = '$aidatTlRate',
            aidatToTlRate = '$aidatToTlRate',
            aidatSterling = '$aidatSterling',
            kiraMiktar = '$kiraMiktar',
            kiraPB = '$kiraPB',
            kiraTlRate = '$kiraTlRate',
            kiraToTlRate = '$kiraToTlRate',
            kiraSterling = '$kiraSterling',
            status = '$status'
        WHERE kiralamakey = '$kirakaporasonkey'";
    */
    
    $sql = "UPDATE kiralamakayit 
        SET 
            date = '$date',
            kiralamatarihi = '$kiralamatarihi',
            kiralamabitistarihi = '$kiralamabitistarihi',
            stopajvergisi = '$stopajvergisi',
            yonetimsoziste = '$yonetimsoziste',
            yonetimsozbastarih = '$yonetimsozbastarih',
            yonetimsozbittarih = '$yonetimsozbittarih',
            kiralamaozelnot = '$kiralamaozelnot',
            yetkilionay = '$yetkilionay',
            muhasebeonay = '$muhasebeonay',
            kaporatahMiktar = '$kaporatahMiktar',
            kaporaPB = '$kaporaPB',
            kaporaTlRate = '$kaporaTlRate',
            kaporaToTlRate = '$kaporaToTlRate',
            kaporaSterling = '$kaporaSterling',
            depozitoMiktar = '$depozitoMiktar',
            depozitoPB = '$depozitoPB',
            depozitoTlRate = '$depozitoTlRate',
            depozitoToTlRate = '$depozitoToTlRate',
            depozitoSterling = '$depozitoSterling',
            aidatMiktar = '$aidatMiktar',
            aidatPB = '$aidatPB',
            aidatTlRate = '$aidatTlRate',
            aidatToTlRate = '$aidatToTlRate',
            aidatSterling = '$aidatSterling',
            kiraMiktar = '$kiraMiktar',
            kiraPB = '$kiraPB',
            kiraTlRate = '$kiraTlRate',
            kiraToTlRate = '$kiraToTlRate',
            kiraSterling = '$kiraSterling',
            status = '$status'
        WHERE kiralamakey = '$kirakaporasonkey'";
    
    
    
    if ($conn->query($sql) === TRUE) {
   
       
    
        /* 
    $kirakaporaeklendi=$kirakapora;
    $satiskaporaeklendi=$satiskapora;
        
         if($satiskapora==1){
          $sql = "UPDATE mulkkayit SET satiskaporaeklendi='$satiskaporaeklendi' where id='$mulkno'";} 
         if($kirakapora==1){
           $sql = "UPDATE mulkkayit SET kirakaporaeklendi='$kirakaporaeklendi' where id='$mulkno'";  } 
           
    */
      $status="KIRAONAY";    
      $kiralamaguncellemegonderildi=0;   
         $sql = "UPDATE mulkkayit SET kiralamaguncellemegonderildi='$kiralamaguncellemegonderildi', status='$status' where id='$mulkno'"; 
        
     if ($conn->query($sql) === TRUE) {
         
      
 /*DOSYA YAZMA İŞLEMLERİ* TAHSİLAT DOSYALARI*****/  
         
         
         
         
$currentDate = date("d-m-Y");  
$projectId = "".($mulkno)."";
$kiralamasayisi= "".($kiralamakey)."";        
      
 $basePath = "proje/mulk/{$projectId}/tahsilat/{$kiralamakey}/";
createDirectory($basePath); // KLASÖR İLK KEZ BURDA OLUŞTURULDU   
// DB PATH DEĞİŞKENLERİ

         
/**         
$kaporafiletest=$_FILES['kaporaBelge'];
$kaporabelgepaths = "";         
if ($_FILES['kaporaBelge']['name'] != NULL && $kaporafiletest['size'] != 0) {         
//$kaporabelgepaths = "";        
// Kapora belgeleri yükleme
$files = array_filter($_FILES['kaporaBelge']['name']); // Kullanılan dosyaların kontrolü
$total_count = count($_FILES['kaporaBelge']['name']); // Yüklenen dosyaların sayısını al

for ($i = 0; $i < $total_count; $i++) {
    $tmpFilePath = $_FILES['kaporaBelge']['tmp_name'][$i]; // Geçici dosya yolu
    if ($tmpFilePath != "") {
        $originalFileName = $_FILES['kaporaBelge']['name'][$i]; // Orijinal dosya adı
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION); // Dosya uzantısını al
        $newFilePath = $basePath . $projectId . "_kaporaBelge_" . $currentDate . ($i + 1) . "." . $fileExtension; // Yeni dosya yolu

        // DB'ye yazmak için dosya yolunu değişkene kopyala
        $kaporabelgepaths .= $newFilePath . ";";
        
        // Dosya yükleniyor
        if (move_uploaded_file($tmpFilePath, $newFilePath)) {
            // Diğer kodlar buraya gelebilir
        } else {
            echo "Kapora belgesi yüklenirken hata oluştu."; exit();  
        }
    }
}
}
 */        
         
         
$depozitobelgepaths = ""; 
$depozitofiletest=$_FILES['depozitoBelge'];         
if ($_FILES['depozitoBelge']['name'] != NULL && $depozitofiletest['size'] != 0) {         
//$depozitobelgepaths = "";          
// Depozito belgeleri yükleme
$files = array_filter($_FILES['depozitoBelge']['name']);
$total_count = count($_FILES['depozitoBelge']['name']);

for ($i = 0; $i < $total_count; $i++) {
    $tmpFilePath = $_FILES['depozitoBelge']['tmp_name'][$i];
    if ($tmpFilePath != "") {
        $originalFileName = $_FILES['depozitoBelge']['name'][$i];
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $newFilePath = $basePath . $projectId . "_depozitoBelge_" . $currentDate . ($i + 1) . "." . $fileExtension;

        $depozitobelgepaths .= $newFilePath . ";";
        
        if (move_uploaded_file($tmpFilePath, $newFilePath)) {
            // Diğer kodlar buraya gelebilir
        } else {
            echo "Depozito belgesi yüklenirken hata oluştu."; exit();  
        }
    }
}
}

         
         
  $aidatfiletest=$_FILES['aidatBelge'];       
  $aidatbelgepaths = "";       
if ($_FILES['aidatBelge']['name'] != NULL && $aidatfiletest['size'] != 0) {         
         //$aidatbelgepaths = "";
// Aidat belgeleri yükleme
$files = array_filter($_FILES['aidatBelge']['name']);
$total_count = count($_FILES['aidatBelge']['name']);

for ($i = 0; $i < $total_count; $i++) {
    $tmpFilePath = $_FILES['aidatBelge']['tmp_name'][$i];
    if ($tmpFilePath != "") {
        $originalFileName = $_FILES['aidatBelge']['name'][$i];
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $newFilePath = $basePath . $projectId . "_aidatBelge_" . $currentDate . ($i + 1) . "." . $fileExtension;

        $aidatbelgepaths .= $newFilePath . ";";
        
        if (move_uploaded_file($tmpFilePath, $newFilePath)) {
            // Diğer kodlar buraya gelebilir
        } else {
            echo "Aidat belgesi yüklenirken hata oluştu."; exit();  
        }
    }
}
}
         $kirabelgepaths = ""; 
$kirafiletest=$_FILES['kiraBelge'];
if ($_FILES['kiraBelge']['name'] != NULL && $kirafiletest['size'] != 0) {         
//$kirabelgepaths = ""; 
// Kira belgeleri yükleme
$files = array_filter($_FILES['kiraBelge']['name']);
$total_count = count($_FILES['kiraBelge']['name']);

for ($i = 0; $i < $total_count; $i++) {
    $tmpFilePath = $_FILES['kiraBelge']['tmp_name'][$i];
    if ($tmpFilePath != "") {
        $originalFileName = $_FILES['kiraBelge']['name'][$i];
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $newFilePath = $basePath . $projectId . "_kiraBelge_" . $currentDate . ($i + 1) . "." . $fileExtension;

        $kirabelgepaths .= $newFilePath . ";";
        
        if (move_uploaded_file($tmpFilePath, $newFilePath)) {
            // Diğer kodlar buraya gelebilir
        } else {
            echo "Kira belgesi yüklenirken hata oluştu."; exit();  
        }
    }
}         
}
         
         
     
         
       
  /*DOSYA YAZMA İŞLEMLERİ* TAHSİLAT DOSYALARI SONNNNN*****/         
         
         
         
         
         
 /*********************WORD DOSYASI İŞLEMLERİ*********************/
         
         
         
       //error_reporting(E_ALL);
  //      ini_set('display_errors', 1);

//$rand_no = rand(111111, 999999);
/*         
if($kirakapora==1){
    $template_file_name = 'Kapora.docx';
$fileName = "kirakapora_".$mulkno."_".$currentDate.".docx";
}
if($satiskapora==1){
    $template_file_name = 'Kapora_s.docx';
$fileName = "satiskapora_".$mulkno."_".$currentDate.".docx";  
}
$folder   = "proje/mulk/{$projectId}/kapora/KaporaSozlesme";
$full_path = $folder.'/'.$fileName;
 */
$projectId = "".($mulkno)."";          
$currentDate = date("d-m-Y");          
$template_file_name = 'Kirasozlesme.docx';
$fileName = "kirasoz_".$mulkno."_".$currentDate.".docx";         
$folder   = "proje/mulk/{$projectId}/soz/kira";
$full_path = $folder.'/'.$fileName; 
      
try
{
    if (!file_exists($folder))
    {
        createDirectory($folder);
        //mkdir($folder);
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
//$datexx = DateTime::createFromFormat('Y-m-d', $kaporateslimtarihi);

// Hedef formata dönüştür
//$formattedDate = $datexx->format('d-m-Y');
     //echo $kiraodemebicimi;
     if($kiraodemebicimi==1){
         $kiraodemebicimiyazi="Her Ay";
     } 
    if($kiraodemebicimi==3){
         $kiraodemebicimiyazi="Her Üç Ay";
     } 
      if($kiraodemebicimi==6){
         $kiraodemebicimiyazi="Her Altı Ay";
     } 
        if($kiraodemebicimi==12){
         $kiraodemebicimiyazi="Her Oniki Ay";
     }
        
     $intarih1= $currentDate;
     $intarih2= $currentDate;    
     $bolge=(string)$bolge;
     $siteadi=(string)$siteadi;
     $kapino=(string)$kapino;
     $malsahibi=(string)$malsahibi;
     $malsahibiid=(string)$malsahibiid;
     $adsoyadkiraci=(string)$adsoyadkiraci;
     $kiracikimlikno=(string)$kiracikimlikno;
     $kirkimtür=(string)$kirkimtür;
     $kiraodemebicimiyazi=(string)$kiraodemebicimiyazi;   
        
        
        
      
        $message = str_replace('intarih1',$intarih1,$message);
        $message = str_replace('intarih2',$intarih2,$message);
        $message = str_replace('inmulksahibi',$malsahibi,$message);
        $message = str_replace('inidmulksahibi',$malsahibiid,$message);
        $message = str_replace('inadsoyadkiraci',$adsoyadkiraci,$message);
        $message = str_replace('inkiracikimlikno',$kiracikimlikno,$message);
        $message = str_replace('inkirkimtür',$kirkimtür,$message);
        $message = str_replace('inbolge',$bolge,$message);
        $message = str_replace('insiteadi',$siteadi,$message);
        $message = str_replace('inkapino',$kapino,$message);
        $message = str_replace('inkiraodemebicimi',$kiraodemebicimiyazi,$message);
        //$message = str_replace('inkaporaparabirimi',$kaporaparabirimi,$message);
  
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
         
 
        
         /**********TAMAMLA***********/
         
   /*********** PDF DONUSTUR BASLA ****************/


// Word dosyasının yolu
$wordDosyaYolu = $full_pathx;
//echo $wordDosyaYolu;
// PDF dosyasının kaydedileceği yol
$fileNamepdf = "kirasoz_".$mulkno."_".$currentDate.".pdf";         
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
                 
         
         
     
       
         
/*         
if($kirakapora==1){         
$sql = "UPDATE kirakaporakayit SET kaporasozpath='$full_pathx' where kirakaporakayit.mulkno='$mulkno'";
}
if($satiskapora==1){
$sql = "UPDATE satiskaporakayit SET kaporasozpath='$full_pathx' where satiskaporakayit.mulkno='$mulkno'"; 
} 
 */   
         
           $sql = "UPDATE kiralamakayit SET kiralamasozpath='$full_pathx', kiralamasozpdfpath='$pdffull_pathx',";

    // Yalnızca geçerli dosya yollarını ekle
    $setClauses = [];

   /* if ($kaporabelgepaths != '') {
        $setClauses[] = "kaporabelgepaths='$kaporabelgepaths'";
    }*/

    if ($depozitobelgepaths != '') {
        $setClauses[] = "depozitobelgepaths='$depozitobelgepaths'";
    }

    if ($aidatbelgepaths != '') {
        $setClauses[] = "aidatbelgepaths='$aidatbelgepaths'";
    }

    if ($kirabelgepaths != '') {
        $setClauses[] = "kirabelgepaths='$kirabelgepaths'";
    }

   

    // Eğer en az bir dosya gönderilmişse, sorgu oluşur
    if (count($setClauses) > 0) {
        // SQL sorgusunu tamamla
        $sql .= implode(", ", $setClauses) . " WHERE kiralamakey='$kiralamakey'";

        
    }else
    {
        $sql = "UPDATE kiralamakayit SET kiralamasozpath='$full_pathx', kiralamasozpdfpath='$pdffull_pathx'"; 
    }
         
      
        
 /* $sql = "UPDATE kiralamakayit SET kiralamasozpath='$full_pathx', kiralamasozpdfpath='$pdffull_pathx', kirabelgepaths='$kirabelgepaths',depozitobelgepaths='$depozitobelgepaths',aidatbelgepaths='$aidatbelgepaths',kaporabelgepaths='$kaporabelgepaths' where kiralamakayit.kiralamakey='$kiralamakey'"; */  
         
         
         
if ($conn->query($sql) === TRUE) {
    
    /*
                       echo '<br>';
    echo '<br>';
    echo '<br>';
    echo "<br><br>";           
    echo '<div class="makememiddlebody"><div class="containercap"><div class="textcapdiv"><form action='.$full_path.' method="get" enctype="multipart/form-data">
  <div class="row" id="hiderow">
  <button type="submit" id="autoClickBtn" class="gobackcap" style="background:green;color:white;font-size:15px;font-weight:bolder;">Kira Sözleşmesini İndir</button>
   </form>
  </div></div>
  </div></div>
</form>';
*/
    
    
    
     /************YONETİM SOZLESMESİ*****************/
         
         
  if($yonetimsoziste=="EVET"){
     
       
      
      $projectId = "".($mulkno)."";          
$currentDate = date("d-m-Y");          
$template_file_name = 'Kirasozlesme.docx';
$fileName = "yonetimsoz_".$mulkno."_".$currentDate.".docx";         
$folder   = "proje/mulk/{$projectId}/soz/yonetim";
$full_path = $folder.'/'.$fileName; 
       
try
{
    if (!file_exists($folder))
    {
        createDirectory($folder);
        //mkdir($folder);
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
//$datexx = DateTime::createFromFormat('Y-m-d', $kaporateslimtarihi);

// Hedef formata dönüştür
//$formattedDate = $datexx->format('d-m-Y');
     //echo $kiraodemebicimi;
     if($kiraodemebicimi==1){
         $kiraodemebicimiyazi="Her Ay";
     } 
    if($kiraodemebicimi==3){
         $kiraodemebicimiyazi="Her Üç Ay";
     } 
      if($kiraodemebicimi==6){
         $kiraodemebicimiyazi="Her Altı Ay";
     } 
        if($kiraodemebicimi==12){
         $kiraodemebicimiyazi="Her Oniki Ay";
     }
        
     $intarih1= $currentDate;
     $intarih2= $currentDate;    
     $bolge=(string)$bolge;
     $siteadi=(string)$siteadi;
     $kapino=(string)$kapino;
     $malsahibi=(string)$malsahibi;
     $malsahibiid=(string)$malsahibiid;
     $adsoyadkiraci=(string)$adsoyadkiraci;
     $kiracikimlikno=(string)$kiracikimlikno;
     $kirkimtür=(string)$kirkimtür;
     $kiraodemebicimiyazi=(string)$kiraodemebicimiyazi;   
        
        
        
      
        $message = str_replace('intarih1',$intarih1,$message);
        $message = str_replace('intarih2',$intarih2,$message);
        $message = str_replace('inmulksahibi',$malsahibi,$message);
        $message = str_replace('inidmulksahibi',$malsahibiid,$message);
        $message = str_replace('inadsoyadkiraci',$adsoyadkiraci,$message);
        $message = str_replace('inkiracikimlikno',$kiracikimlikno,$message);
        $message = str_replace('inkirkimtür',$kirkimtür,$message);
        $message = str_replace('inbolge',$bolge,$message);
        $message = str_replace('insiteadi',$siteadi,$message);
        $message = str_replace('inkapino',$kapino,$message);
        $message = str_replace('inkiraodemebicimi',$kiraodemebicimiyazi,$message);
        //$message = str_replace('inkaporaparabirimi',$kaporaparabirimi,$message);
  
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
         
 
         
         /**********TAMAMLA***********/
         /*********** PDF DONUSTUR BASLA ****************/


// Word dosyasının yolu
$wordDosyaYolu = $full_pathx;
//echo $wordDosyaYolu;
// PDF dosyasının kaydedileceği yol
$fileNamepdf = "yonetimsoz_".$mulkno."_".$currentDate.".pdf";         
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
      
      
      
      
      
  }       
         
         
         
       
         
         
         
 /**********************YONETİM SOZ BİTTİ*********************/   
    
    $sql = "UPDATE kiralamakayit SET yonetimsozpath='$full_pathx',yonetimsozpdfpath='$pdffull_pathx' where kiralamakayit.kiralamakey='$kiralamakey'"; 
    if ($conn->query($sql) === TRUE) {
     
            echo "<br>";
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">'.$mulkno.' numaralı mülke ait kiralama bilgileri başarıyla güncellenmiştir. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';  
    }else {echo "Error: " . $sql . "<br>" . $conn->error;}  
    
}else {echo "Error: " . $sql . "<br>" . $conn->error;}   
         
         
         
         
         
/*********************************************************/ 
         
    /*     if($satiskapora==1){
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
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">'.$mulkno.' numaralı mülke başarıyla satış kaporası eklenmiştir. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';} */
       /*  if($kirakapora==1){
             
                       echo '<br>';
    echo '<br>';
    echo '<br>';
    echo "<br><br>";           
    echo '<div class="makememiddlebody"><div class="containercap"><div class="textcapdiv"><form action='.$full_path.' method="get" enctype="multipart/form-data">
  <div class="row" id="hiderow">
  <button type="submit" id="autoClickBtn" class="gobackcap" style="background:green;color:white;font-size:15px;font-weight:bolder;">Kira Sözleşmesini İndir</button>
   </form>
  </div></div>
  </div></div>
</form>';
            echo "<br>";
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">'.$mulkno.' numaralı mülke başarıyla kiracı eklenmiştir. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';  
     } */
         
         
      
         
         
         
         
         
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