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
$pageid="tahsilatonay"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.  
    
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

    if($_POST['tahsilatid']==NULL){
        Notdevam();
    }
    else
    {
      $tahsilatid=$_POST['tahsilatid'];
        $tahsilatid=trim($tahsilatid);
    }  
    
     if($_POST['mulknoid']==NULL){
        Notdevam();
    }
    else
    {
      $mulkno=$_POST['mulknoid'];
        $mulkno=trim($mulkno);
    }
    
    
          
      
   /* 
    echo $tahsilatid."<br>";
    echo $mulkno."<br>";
   
    
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


    

     if ($result = $conn -> query("SELECT * FROM mulkkayit where mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulkno'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

      
     $kiralandi=$row['kiralandi'];
     
}
     
  $result -> free_result();
}  
    
         if ($result = $conn -> query("SELECT * FROM tahsilat where id='$tahsilatid'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

      $yetkilionay=$row['yetkilionay'];
$tahtarihi = $row['tahtarihi'];
$mulkno = $row['mulkno'];
$yapino = $row['yapino'];
$kiralamakey = $row['kiralamakey'];
$tahsilatturu = $row['tahsilatturu'];
$miktar = $row['miktar'];
$stgmiktar = $row['stgmiktar'];
$parabirimi = $row['parabirimi'];
$tahsilattlrate = $row['tahsilattlrate'];
$tahsilattotlrate = $row['tahsilattotlrate'];
$belgepaths = $row['belgepaths'];
$tahsilatnot = $row['tahsilatnot'];
      $basusername = $row['basusername'];
      $gunusername = $row['gunusername'];
      $malsahibiodemesi = $row['malsahibiodemesi'];
}
     
  $result -> free_result();
}  
    
    

  if ($kiralandi!= 1 && $yetkilionay!=1 ) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu tahsilat yetkili tarafından onaylanamaz. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
}   
   
    
    
// Ayrıştırarak dizi haline getirme
$tahsilatTarihleriArr = explode(";", $tahtarihi);
$tahsilatTurleriArr = explode(";", $tahsilatturu);
$tahsilatMiktarArr = explode(";", $miktar);
$tahsilatstgMiktarArr = explode(";", $stgmiktar);
$paraBirimiArr = explode(";", $parabirimi);
$tahsilatTlRateArr = explode(";", $tahsilattlrate);
$tahsilatToTlRateArr = explode(";", $tahsilattotlrate);
$tahsilatBelgeArr = explode(";", $belgepaths);
$tahsilatNotlarArr = explode(";", $tahsilatnot);  
    
    
    
 if($malsahibiodemesi=="EVET"){
  $gelirkaynagi="MALSAHIBI";    
 }else
 {
$gelirkaynagi="KIRACI"; 
 }
for ($i = 0; $i < count($tahsilatTurleriArr); $i++) {
    
    if($tahsilatTurleriArr[$i]=="KİRA")
    {
      $tahsilattarihidb=$tahsilatTarihleriArr[$i];
      $tahsilatturudb=$tahsilatTurleriArr[$i];
      $kaporaSterlingdb=(float)$tahsilatstgMiktarArr[$i];
      $kaporaMiktardb=(float)$tahsilatMiktarArr[$i];
      $kaporaPBdb=$paraBirimiArr[$i];
      $kaporaTlRatedb=(float)$tahsilatTlRateArr[$i];
      $kaporaToTlRatedb=(float)$tahsilatToTlRateArr[$i];
      $kaporabelgepaths=$tahsilatBelgeArr[$i];
      $tahsilatnotdb=$tahsilatNotlarArr[$i];
      
      $tarih = new DateTime($tahsilattarihidb);    
      $tahsilattarihidb = $tarih->format('Y-m-d');
      
      $tahsilattarihidb = mysqli_real_escape_string($conn, $tahsilattarihidb);
$mulkno = mysqli_real_escape_string($conn, $mulkno);
$yapino = mysqli_real_escape_string($conn, $yapino);
$kiralamakey = mysqli_real_escape_string($conn, $kiralamakey);
$gelirkaynagi = mysqli_real_escape_string($conn, $gelirkaynagi);
$kaporaSterlingdb = mysqli_real_escape_string($conn, $kaporaSterlingdb);
$kaporaMiktardb = mysqli_real_escape_string($conn, $kaporaMiktardb);
$kaporaPBdb = mysqli_real_escape_string($conn, $kaporaPBdb);
$kaporaTlRatedb = mysqli_real_escape_string($conn, $kaporaTlRatedb);
$kaporaToTlRatedb = mysqli_real_escape_string($conn, $kaporaToTlRatedb);
$basusername = mysqli_real_escape_string($conn, $basusername);
$gunusername = mysqli_real_escape_string($conn, $gunusername);
$kaporabelgepaths = mysqli_real_escape_string($conn, $kaporabelgepaths);
$tahsilatnotdb = mysqli_real_escape_string($conn, $tahsilatnotdb);     
        
        
      $sql = "INSERT INTO kiratahakkukgelir (id, insertdate, tahtarih, mulkno, yapino, kiralamakey, gelirkaynagi, miktar, stgmiktar, parabirimi, tahsilattlrate, tahsilattotlrate,username,lastgunusername, belgepaths, tahsilatnot) VALUES ('', '$date','$tahsilattarihidb','$mulkno', '$yapino','$kiralamakey','$gelirkaynagi','$kaporaMiktardb','$kaporaSterlingdb','$kaporaPBdb','$kaporaTlRatedb','$kaporaToTlRatedb','$basusername','$gunusername','$kaporabelgepaths','$tahsilatnotdb')";  
        
    }
    if($tahsilatTurleriArr[$i]=="AİDAT")
    {
      $tahsilattarihidb=$tahsilatTarihleriArr[$i];
      $tahsilatturudb=$tahsilatTurleriArr[$i];
      $kaporaSterlingdb=(float)$tahsilatstgMiktarArr[$i];
      $kaporaMiktardb=(float)$tahsilatMiktarArr[$i];
      $kaporaPBdb=$paraBirimiArr[$i];
      $kaporaTlRatedb=(float)$tahsilatTlRateArr[$i];
      $kaporaToTlRatedb=(float)$tahsilatToTlRateArr[$i];
      $kaporabelgepaths=$tahsilatBelgeArr[$i];
      $tahsilatnotdb=$tahsilatNotlarArr[$i];
      
      $tarih = new DateTime($tahsilattarihidb);    
      $tahsilattarihidb = $tarih->format('Y-m-d');       
      
        
      
      $tahsilattarihidb = mysqli_real_escape_string($conn, $tahsilattarihidb);
$mulkno = mysqli_real_escape_string($conn, $mulkno);
$yapino = mysqli_real_escape_string($conn, $yapino);
$kiralamakey = mysqli_real_escape_string($conn, $kiralamakey);
$gelirkaynagi = mysqli_real_escape_string($conn, $gelirkaynagi);
$kaporaSterlingdb = mysqli_real_escape_string($conn, $kaporaSterlingdb);
$kaporaMiktardb = mysqli_real_escape_string($conn, $kaporaMiktardb);
$kaporaPBdb = mysqli_real_escape_string($conn, $kaporaPBdb);
$kaporaTlRatedb = mysqli_real_escape_string($conn, $kaporaTlRatedb);
$kaporaToTlRatedb = mysqli_real_escape_string($conn, $kaporaToTlRatedb);
$basusername = mysqli_real_escape_string($conn, $basusername);
$gunusername = mysqli_real_escape_string($conn, $gunusername);
$kaporabelgepaths = mysqli_real_escape_string($conn, $kaporabelgepaths);
$tahsilatnotdb = mysqli_real_escape_string($conn, $tahsilatnotdb);   
        
        
      $sql = "INSERT INTO aidattahakkukgelir (id, insertdate, tahtarih, mulkno, yapino, kiralamakey, gelirkaynagi, miktar, stgmiktar, parabirimi, tahsilattlrate, tahsilattotlrate,username,lastgunusername, belgepaths, tahsilatnot) VALUES ('', '$date','$tahsilattarihidb','$mulkno', '$yapino','$kiralamakey','$gelirkaynagi','$kaporaMiktardb','$kaporaSterlingdb','$kaporaPBdb','$kaporaTlRatedb','$kaporaToTlRatedb','$basusername','$gunusername','$kaporabelgepaths','$tahsilatnotdb')";
        
        
    }
    if($tahsilatTurleriArr[$i]=="DEPOZİTO")
    {
      $tahsilattarihidb=$tahsilatTarihleriArr[$i];
      $tahsilatturudb=$tahsilatTurleriArr[$i];
      $kaporaSterlingdb=(float)$tahsilatstgMiktarArr[$i];
      $kaporaMiktardb=(float)$tahsilatMiktarArr[$i];
      $kaporaPBdb=$paraBirimiArr[$i];
      $kaporaTlRatedb=(float)$tahsilatTlRateArr[$i];
      $kaporaToTlRatedb=(float)$tahsilatToTlRateArr[$i];
      $kaporabelgepaths=$tahsilatBelgeArr[$i];
      $tahsilatnotdb=$tahsilatNotlarArr[$i];
      
      $tarih = new DateTime($tahsilattarihidb);    
      $tahsilattarihidb = $tarih->format('Y-m-d');       
        
      $tahsilattarihidb = mysqli_real_escape_string($conn, $tahsilattarihidb);
$mulkno = mysqli_real_escape_string($conn, $mulkno);
$yapino = mysqli_real_escape_string($conn, $yapino);
$kiralamakey = mysqli_real_escape_string($conn, $kiralamakey);
$gelirkaynagi = mysqli_real_escape_string($conn, $gelirkaynagi);
$kaporaSterlingdb = mysqli_real_escape_string($conn, $kaporaSterlingdb);
$kaporaMiktardb = mysqli_real_escape_string($conn, $kaporaMiktardb);
$kaporaPBdb = mysqli_real_escape_string($conn, $kaporaPBdb);
$kaporaTlRatedb = mysqli_real_escape_string($conn, $kaporaTlRatedb);
$kaporaToTlRatedb = mysqli_real_escape_string($conn, $kaporaToTlRatedb);
$basusername = mysqli_real_escape_string($conn, $basusername);
$gunusername = mysqli_real_escape_string($conn, $gunusername);
$kaporabelgepaths = mysqli_real_escape_string($conn, $kaporabelgepaths);
$tahsilatnotdb = mysqli_real_escape_string($conn, $tahsilatnotdb); 
        
      $sql = "INSERT INTO depozittahakkukgelir (id, insertdate, tahtarih, mulkno, yapino, kiralamakey, gelirkaynagi, miktar, stgmiktar, parabirimi, tahsilattlrate, tahsilattotlrate,username,lastgunusername, belgepaths, tahsilatnot) VALUES ('', '$date','$tahsilattarihidb','$mulkno', '$yapino','$kiralamakey','$gelirkaynagi','$kaporaMiktardb','$kaporaSterlingdb','$kaporaPBdb','$kaporaTlRatedb','$kaporaToTlRatedb','$basusername','$gunusername','$kaporabelgepaths','$tahsilatnotdb')";  
        
        
    }
    if($tahsilatTurleriArr[$i]=="KAPORA")
    {
      $tahsilattarihidb=$tahsilatTarihleriArr[$i];
      $tahsilatturudb=$tahsilatTurleriArr[$i];
      $kaporaSterlingdb=(float)$tahsilatstgMiktarArr[$i];
      $kaporaMiktardb=(float)$tahsilatMiktarArr[$i];
      $kaporaPBdb=$paraBirimiArr[$i];
      $kaporaTlRatedb=(float)$tahsilatTlRateArr[$i];
      $kaporaToTlRatedb=(float)$tahsilatToTlRateArr[$i];
      $kaporabelgepaths=$tahsilatBelgeArr[$i];
      $tahsilatnotdb=$tahsilatNotlarArr[$i];
      
      $tarih = new DateTime($tahsilattarihidb);    
      $tahsilattarihidb = $tarih->format('Y-m-d');       
        
      $tahsilattarihidb = mysqli_real_escape_string($conn, $tahsilattarihidb);
$mulkno = mysqli_real_escape_string($conn, $mulkno);
$yapino = mysqli_real_escape_string($conn, $yapino);
$kiralamakey = mysqli_real_escape_string($conn, $kiralamakey);
$gelirkaynagi = mysqli_real_escape_string($conn, $gelirkaynagi);
$kaporaSterlingdb = mysqli_real_escape_string($conn, $kaporaSterlingdb);
$kaporaMiktardb = mysqli_real_escape_string($conn, $kaporaMiktardb);
$kaporaPBdb = mysqli_real_escape_string($conn, $kaporaPBdb);
$kaporaTlRatedb = mysqli_real_escape_string($conn, $kaporaTlRatedb);
$kaporaToTlRatedb = mysqli_real_escape_string($conn, $kaporaToTlRatedb);
$basusername = mysqli_real_escape_string($conn, $basusername);
$gunusername = mysqli_real_escape_string($conn, $gunusername);
$kaporabelgepaths = mysqli_real_escape_string($conn, $kaporabelgepaths);
$tahsilatnotdb = mysqli_real_escape_string($conn, $tahsilatnotdb); 
        
      $sql = "INSERT INTO kaporatahakkukgelir (id, insertdate, tahtarih, mulkno, yapino, kiralamakey, gelirkaynagi, miktar, stgmiktar, parabirimi, tahsilattlrate, tahsilattotlrate,username,lastgunusername, belgepaths, tahsilatnot) VALUES ('', '$date','$tahsilattarihidb','$mulkno', '$yapino','$kiralamakey','$gelirkaynagi','$kaporaMiktardb','$kaporaSterlingdb','$kaporaPBdb','$kaporaTlRatedb','$kaporaToTlRatedb','$basusername','$gunusername','$kaporabelgepaths','$tahsilatnotdb')"; 
        
        
    }
    if($tahsilatTurleriArr[$i]=="SU")
    {
      $tahsilattarihidb=$tahsilatTarihleriArr[$i];
      $tahsilatturudb=$tahsilatTurleriArr[$i];
      $kaporaSterlingdb=(float)$tahsilatstgMiktarArr[$i];
      $kaporaMiktardb=(float)$tahsilatMiktarArr[$i];
      $kaporaPBdb=$paraBirimiArr[$i];
      $kaporaTlRatedb=(float)$tahsilatTlRateArr[$i];
      $kaporaToTlRatedb=(float)$tahsilatToTlRateArr[$i];
      $kaporabelgepaths=$tahsilatBelgeArr[$i];
      $tahsilatnotdb=$tahsilatNotlarArr[$i];
      
      $tarih = new DateTime($tahsilattarihidb);    
      $tahsilattarihidb = $tarih->format('Y-m-d');       
       
      $tahsilattarihidb = mysqli_real_escape_string($conn, $tahsilattarihidb);
$mulkno = mysqli_real_escape_string($conn, $mulkno);
$yapino = mysqli_real_escape_string($conn, $yapino);
$kiralamakey = mysqli_real_escape_string($conn, $kiralamakey);
$gelirkaynagi = mysqli_real_escape_string($conn, $gelirkaynagi);
$kaporaSterlingdb = mysqli_real_escape_string($conn, $kaporaSterlingdb);
$kaporaMiktardb = mysqli_real_escape_string($conn, $kaporaMiktardb);
$kaporaPBdb = mysqli_real_escape_string($conn, $kaporaPBdb);
$kaporaTlRatedb = mysqli_real_escape_string($conn, $kaporaTlRatedb);
$kaporaToTlRatedb = mysqli_real_escape_string($conn, $kaporaToTlRatedb);
$basusername = mysqli_real_escape_string($conn, $basusername);
$gunusername = mysqli_real_escape_string($conn, $gunusername);
$kaporabelgepaths = mysqli_real_escape_string($conn, $kaporabelgepaths);
$tahsilatnotdb = mysqli_real_escape_string($conn, $tahsilatnotdb); 
        
      $sql = "INSERT INTO sutahakkukgelir (id, insertdate, tahtarih, mulkno, yapino, kiralamakey, gelirkaynagi, miktar, stgmiktar, parabirimi, tahsilattlrate, tahsilattotlrate,username,lastgunusername, belgepaths, tahsilatnot) VALUES ('', '$date','$tahsilattarihidb','$mulkno', '$yapino','$kiralamakey','$gelirkaynagi','$kaporaMiktardb','$kaporaSterlingdb','$kaporaPBdb','$kaporaTlRatedb','$kaporaToTlRatedb','$basusername','$gunusername','$kaporabelgepaths','$tahsilatnotdb')"; 
        
        
    }
    if($tahsilatTurleriArr[$i]=="HİZMET")
    {
       
      $tahsilattarihidb=$tahsilatTarihleriArr[$i];
      $tahsilatturudb=$tahsilatTurleriArr[$i];
      $kaporaSterlingdb=(float)$tahsilatstgMiktarArr[$i];
      $kaporaMiktardb=(float)$tahsilatMiktarArr[$i];
      $kaporaPBdb=$paraBirimiArr[$i];
      $kaporaTlRatedb=(float)$tahsilatTlRateArr[$i];
      $kaporaToTlRatedb=(float)$tahsilatToTlRateArr[$i];
      $kaporabelgepaths=$tahsilatBelgeArr[$i];
      $tahsilatnotdb=$tahsilatNotlarArr[$i];
      
      $tarih = new DateTime($tahsilattarihidb);    
      $tahsilattarihidb = $tarih->format('Y-m-d');       
        
      $tahsilattarihidb = mysqli_real_escape_string($conn, $tahsilattarihidb);
$mulkno = mysqli_real_escape_string($conn, $mulkno);
$yapino = mysqli_real_escape_string($conn, $yapino);
$kiralamakey = mysqli_real_escape_string($conn, $kiralamakey);
$gelirkaynagi = mysqli_real_escape_string($conn, $gelirkaynagi);
$kaporaSterlingdb = mysqli_real_escape_string($conn, $kaporaSterlingdb);
$kaporaMiktardb = mysqli_real_escape_string($conn, $kaporaMiktardb);
$kaporaPBdb = mysqli_real_escape_string($conn, $kaporaPBdb);
$kaporaTlRatedb = mysqli_real_escape_string($conn, $kaporaTlRatedb);
$kaporaToTlRatedb = mysqli_real_escape_string($conn, $kaporaToTlRatedb);
$basusername = mysqli_real_escape_string($conn, $basusername);
$gunusername = mysqli_real_escape_string($conn, $gunusername);
$kaporabelgepaths = mysqli_real_escape_string($conn, $kaporabelgepaths);
$tahsilatnotdb = mysqli_real_escape_string($conn, $tahsilatnotdb); 
        
      $sql = "INSERT INTO hizmettahakkukgelir (id, insertdate, tahtarih, mulkno, yapino, kiralamakey, gelirkaynagi, miktar, stgmiktar, parabirimi, tahsilattlrate, tahsilattotlrate,username,lastgunusername, belgepaths, tahsilatnot) VALUES ('', '$date','$tahsilattarihidb','$mulkno', '$yapino','$kiralamakey','$gelirkaynagi','$kaporaMiktardb','$kaporaSterlingdb','$kaporaPBdb','$kaporaTlRatedb','$kaporaToTlRatedb','$basusername','$gunusername','$kaporabelgepaths','$tahsilatnotdb')";  
        
        
    } 
    
      if($tahsilatTurleriArr[$i]=="İNTERNET")
    {
       
      $tahsilattarihidb=$tahsilatTarihleriArr[$i];
      $tahsilatturudb=$tahsilatTurleriArr[$i];
      $kaporaSterlingdb=(float)$tahsilatstgMiktarArr[$i];
      $kaporaMiktardb=(float)$tahsilatMiktarArr[$i];
      $kaporaPBdb=$paraBirimiArr[$i];
      $kaporaTlRatedb=(float)$tahsilatTlRateArr[$i];
      $kaporaToTlRatedb=(float)$tahsilatToTlRateArr[$i];
      $kaporabelgepaths=$tahsilatBelgeArr[$i];
      $tahsilatnotdb=$tahsilatNotlarArr[$i];
      
      $tarih = new DateTime($tahsilattarihidb);    
      $tahsilattarihidb = $tarih->format('Y-m-d');       
        
      $tahsilattarihidb = mysqli_real_escape_string($conn, $tahsilattarihidb);
$mulkno = mysqli_real_escape_string($conn, $mulkno);
$yapino = mysqli_real_escape_string($conn, $yapino);
$kiralamakey = mysqli_real_escape_string($conn, $kiralamakey);
$gelirkaynagi = mysqli_real_escape_string($conn, $gelirkaynagi);
$kaporaSterlingdb = mysqli_real_escape_string($conn, $kaporaSterlingdb);
$kaporaMiktardb = mysqli_real_escape_string($conn, $kaporaMiktardb);
$kaporaPBdb = mysqli_real_escape_string($conn, $kaporaPBdb);
$kaporaTlRatedb = mysqli_real_escape_string($conn, $kaporaTlRatedb);
$kaporaToTlRatedb = mysqli_real_escape_string($conn, $kaporaToTlRatedb);
$basusername = mysqli_real_escape_string($conn, $basusername);
$gunusername = mysqli_real_escape_string($conn, $gunusername);
$kaporabelgepaths = mysqli_real_escape_string($conn, $kaporabelgepaths);
$tahsilatnotdb = mysqli_real_escape_string($conn, $tahsilatnotdb); 
        
      $sql = "INSERT INTO internettahakkukgelir (id, insertdate, tahtarih, mulkno, yapino, kiralamakey, gelirkaynagi, miktar, stgmiktar, parabirimi, tahsilattlrate, tahsilattotlrate,username,lastgunusername, belgepaths, tahsilatnot) VALUES ('', '$date','$tahsilattarihidb','$mulkno', '$yapino','$kiralamakey','$gelirkaynagi','$kaporaMiktardb','$kaporaSterlingdb','$kaporaPBdb','$kaporaTlRatedb','$kaporaToTlRatedb','$basusername','$gunusername','$kaporabelgepaths','$tahsilatnotdb')";  
        
        
    }
   
          if($tahsilatTurleriArr[$i]=="KOMİSYON")
    {
       
      $tahsilattarihidb=$tahsilatTarihleriArr[$i];
      $tahsilatturudb=$tahsilatTurleriArr[$i];
      $kaporaSterlingdb=(float)$tahsilatstgMiktarArr[$i];
      $kaporaMiktardb=(float)$tahsilatMiktarArr[$i];
      $kaporaPBdb=$paraBirimiArr[$i];
      $kaporaTlRatedb=(float)$tahsilatTlRateArr[$i];
      $kaporaToTlRatedb=(float)$tahsilatToTlRateArr[$i];
      $kaporabelgepaths=$tahsilatBelgeArr[$i];
      $tahsilatnotdb=$tahsilatNotlarArr[$i];
      
      $tarih = new DateTime($tahsilattarihidb);    
      $tahsilattarihidb = $tarih->format('Y-m-d');       
        
      $tahsilattarihidb = mysqli_real_escape_string($conn, $tahsilattarihidb);
$mulkno = mysqli_real_escape_string($conn, $mulkno);
$yapino = mysqli_real_escape_string($conn, $yapino);
$kiralamakey = mysqli_real_escape_string($conn, $kiralamakey);
$gelirkaynagi = mysqli_real_escape_string($conn, $gelirkaynagi);
$kaporaSterlingdb = mysqli_real_escape_string($conn, $kaporaSterlingdb);
$kaporaMiktardb = mysqli_real_escape_string($conn, $kaporaMiktardb);
$kaporaPBdb = mysqli_real_escape_string($conn, $kaporaPBdb);
$kaporaTlRatedb = mysqli_real_escape_string($conn, $kaporaTlRatedb);
$kaporaToTlRatedb = mysqli_real_escape_string($conn, $kaporaToTlRatedb);
$basusername = mysqli_real_escape_string($conn, $basusername);
$gunusername = mysqli_real_escape_string($conn, $gunusername);
$kaporabelgepaths = mysqli_real_escape_string($conn, $kaporabelgepaths);
$tahsilatnotdb = mysqli_real_escape_string($conn, $tahsilatnotdb); 
       
      $sql = "INSERT INTO komisyontahakkukgelir (id, insertdate, tahtarih, mulkno, yapino, kiralamakey, gelirkaynagi, miktar, stgmiktar, parabirimi, tahsilattlrate, tahsilattotlrate,username,lastgunusername, belgepaths, tahsilatnot) VALUES ('', '$date','$tahsilattarihidb','$mulkno', '$yapino','$kiralamakey','$gelirkaynagi','$kaporaMiktardb','$kaporaSterlingdb','$kaporaPBdb','$kaporaTlRatedb','$kaporaToTlRatedb','$basusername','$gunusername','$kaporabelgepaths','$tahsilatnotdb')";  
        
        
    }
    
      
    if ($conn->query($sql) === TRUE) {}
    else
    {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    
   
    
}

/***********************VERİ TABANI YAZMA İŞLEMLERİ*****************************/

      $yetkilionay=2;
      $sql = "UPDATE tahsilat SET yetkilionay='$yetkilionay' where id='$tahsilatid'"; 
    
    if ($conn->query($sql) === TRUE) {
   


            echo "<br>";
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Tahsilat kayıt süreci başarıyla tamamlanmıştır. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';  
    
    
     }
else 
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