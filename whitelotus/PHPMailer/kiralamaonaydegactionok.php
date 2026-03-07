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
     if ($result = $conn -> query("SELECT * FROM mulkkayit where mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulkno'")) {
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
    
    
    
    
    
    
    
          if ($result = $conn -> query("SELECT * FROM kiralamakayit where kiralamakayit.isdeleted !=1 AND kiralamakayit.kiralamakey='$kirakaporasonkey'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

  
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
        $depozitovadesayisi = $row['depozitovadesayisi'];
        $komisyon = $row['komisyon'];
        $komisyonbedeli = $row['komisyonbedeli'];
        $komisyonbedeliparabirimi = $row['komisyonbedeliparabirimi'];
        $aidat = $row['aidat'];
        $aidatbedeli = $row['aidatbedeli'];
        $aidatbedeliparabirimi = $row['aidatbedeliparabirimi'];
        $komisyontahsili = $row['komisyontahsili'];
        $ilktaksitmiktari = $row['ilktaksitmiktari'];
        $toplamkirabedeli = $row['toplamkirabedeli'];
        $kiralamaozelnot = $row['kiralamaozelnot'];
        $kiralamatarihi=$row['kiralamatarihi'];
        $aidatodemebicimi=$row['aidatodemebicimi'];
        $aidatsontarih=$row['aidatsontarih'];
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
      
            $buayaidat=$row['buayaidat'];
      $subedeli = $row['subedeli'];
$subedeliparabirimi = $row['subedeliparabirimi'];
$suodemebicimi = $row['suodemebicimi'];
$hizmet = $row['hizmet'];
$hizmetbedeli = $row['hizmetbedeli'];
$hizmetbedeliparabirimi = $row['hizmetbedeliparabirimi'];
$hizmetodemebicimi = $row['hizmetodemebicimi'];  
      
      
      
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
    
    
    
    
    
    
    
    
    
    
   /* BUNU AÇÇÇ İŞİN BİTİNCE BORC
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
    
*/
    
    
    
    
    
    
    
    
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
   
       
/***KİRA-BORC***/   
$kiraodemetarihleri=getKiraOdemeTarihler($kiralamatarihi,$kirasuresi,$kiraodemebicimi);
    $esasborctablosunayazildi=0;
    $kimborclandirildi="KİRACİ";
    echo $kiraodemetarihleri;
    
    for($i=0;$i<count($kiraodemetarihleri);$i++){
        $sql="INSERT INTO genelborc (id, eklenmetarihi, tahedilecektarih, miktar, parabirimi, mulkno, yapino, kiralamakey, kimborclandirildi, esasborctablosunayazildi) VALUES ('', '$date','$kiraodemetarihleri[$i]','$kirabedeli','$kirabedeliparabirimi','$mulkno','$yapino','$kirakaporasonkey','$kimborclandirildi','$esasborctablosunayazildi')";
        
    }
    
/***KİRA-BORC SON***/     
    
    exit();
    
    
 /***************KİRALAMA BORÇLARINI OLUŞTUR SON*****************/   
    
    
    
    
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