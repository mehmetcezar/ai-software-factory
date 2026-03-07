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
$pageid="kaporasureonay"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.  
    
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

  
      if($row['kaporasureonayinda']!=1){
          $kiraison=1;
      }
     
}
     
  $result -> free_result();
}  
    
    

  if ($kiraison == 1) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülk kapora süre onayında değildir. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
}   
   
    
    
          if ($result = $conn -> query("SELECT kaporasureuzatmadate,kirakaporasontarih,toplamkaporauzatmadate FROM mulkkayit where id='$mulkno'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

  
      $kaporasureuzatmadatereq=$row['kaporasureuzatmadate'];
      $kirakaporasontarihprev=$row['kirakaporasontarih'];
      $toplamkaporauzatmadate=$row['toplamkaporauzatmadate'];
     
}
     
  $result -> free_result();
} 
    
  
              if ($result = $conn -> query("SELECT kirakaporauzatmatakvimgunu FROM kirakaporasureuzatmayet")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

  
      $kirakaporauzatmatakvimgunu=$row['kirakaporauzatmatakvimgunu'];
         
}
     
  $result -> free_result();
} 
    
    
     $varmikontrol=0;
      if ($result = $conn -> query("SELECT * FROM kaporasurereddet where kaporasurereddet.isdeleted !=1 AND kaporasurereddet.kirakey='$kirakaporasonkey'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

  
      $varmikontrol=1;
     
}
     
  $result -> free_result();
} 
    
    if($varmikontrol)
    {
    $sql = "UPDATE kaporasurereddet SET kaporasurereddet.isdeleted=1 where kaporasurereddet.kirakey='$kirakaporasonkey'"; 

    
  if ($conn->query($sql) === TRUE) {  
       }
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    }
    

/***********************VERİ TABANI YAZMA İŞLEMLERİ*****************************/
    $uname= mysqli_real_escape_string($conn, $uname);  
    $mulkno= mysqli_real_escape_string($conn, $mulkno); 
    
    function convertToDMY($date) {
    // DateTime nesnesine çevir
    $dateTime = DateTime::createFromFormat('Y-m-d', $date);
    
    // Hatalı giriş kontrolü
    if (!$dateTime) {
        return "Geçersiz tarih formatı. Lütfen Y-m-d formatında girin.";
    }
    
    // Yeni formatta döndür
    return $dateTime->format('d-m-Y');
}
    
function daysBetweenDates($date1, $date2) {
    // Tarih formatını belirle
    $format = 'Y-m-d';
    
    // Tarihleri DateTime nesnesine çevir
    $d1 = DateTime::createFromFormat($format, $date1);
    $d2 = DateTime::createFromFormat($format, $date2);
    
      // Hatalı giriş kontrolü
    if (!$d1 || !$d2) {
        return "Geçersiz tarih formatı. Lütfen gg-aa-YYYY formatında girin.";
    }
    // Farkı hesapla
    $interval = $d1->diff($d2);
    
    // Gün farkını döndür
    return $interval->days;
}
    //echo $kaporasureuzatmadatereq;
    //echo $kirakaporasontarihprev;
    $daydiff=daysBetweenDates($kaporasureuzatmadatereq,$kirakaporasontarihprev);
    
    //echo $daydiff;
    
    $yetkilileremailat=0;
    if(($toplamkaporauzatmadate+$daydiff)>5){
     $yetkilileremailat=1;      
    }
    
    $toplamkaporauzatmadate=$toplamkaporauzatmadate+$daydiff;
    $mesajformatidate=convertToDMY($kaporasureuzatmadatereq);
   // echo $toplamkaporauzatmadate+$daydiff;
   //exit(); 
    
      //$kaporasureuzatmadate="0000-00-00";
      $kaporasureonayinda=2; // OnAYLANDI 2 OLUR 
      $status="KAPORASUREONAYLANDI";
      $sql = "UPDATE mulkkayit SET kirakaporasontarih='$kaporasureuzatmadatereq', kaporasureonayinda='$kaporasureonayinda',toplamkaporauzatmadate='$toplamkaporauzatmadate', status='$status' where id='$mulkno'"; 
    
    if ($conn->query($sql) === TRUE) {
   

    
        
             $sql = "UPDATE kirakaporakayit SET kaporasontarih='$kaporasureuzatmadatereq' where kirakey='$kirakaporasonkey'";
        
        
    
         if ($conn->query($sql) === TRUE) {
             
             
             //MAİL SENDER KULLANICI BİLGİSİNE
                   include 'mailsender.php';    
         
           if(!$yetkilileremailat){  
      $message="";  
         
      $message=$message." ".$mulkno." numaralı mülk için kapora süre uzatımı talebi Yetkiliye iletilmiş ve Kapora süresi ".$mesajformatidate." tarihinde sona erecek şeklinde onaylanmıştır.";
        // echo $message;
         
      if ($result = $conn -> query("SELECT email FROM users where users.uname='$uname' AND  users.isdeleted!=1")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
      $emailsend=$row['email']; 
      mailsender($emailsend,$message);
}
  
  $result -> free_result();
}   
           }
             //MAİL SENDER YÖNETİCİ BİLGİSİNE
             if($yetkilileremailat){
                   $message="";  
         
      $message=$message." ".$mulkno." numaralı mülk için kapora süre uzatımı toplamda 5+5 günden FAZLA olacak şekilde onaylanmıştır. Onaylama işlemini ".$uname." kullanıcı adına sahip yönetici gerçekleştirmiştir.";
        // echo $message;
         
      if ($result = $conn -> query("SELECT email FROM users where users.yetkili=1 AND users.isdeleted!=1")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
      $emailsend=$row['email']; 
      mailsender($emailsend,$message);
}
  
  $result -> free_result();
}
             
             }
        
           echo "<br>";
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">'.$mulkno.' numaralı mülke ait kapora süre uzatımı başarıyla tamamlanmıştır.  Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';  
         
             
             
             
             
             
 
         }
        else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
         
 
    
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