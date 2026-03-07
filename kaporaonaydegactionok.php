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
    
    $aciklama=$_POST['aciklama'];
        $aciklama=trim($aciklama);
    
    
          
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


    $mulkkapalimi=0;
    $kiraison=0;
    $kiralandiison=0;
    $kirakaporaeklendi=0;
     if ($result = $conn -> query("SELECT * FROM mulkkayit where mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulkno'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

  
      if($row['kaporaonayinda']!=1){
          $kiraison=1;
      }
     
      if($row['kiralamadurumu']=="KAPALI" && $row['kirayaactarih']!="0000-00-00"){
             $kirayaactarih=$row['kirayaactarih'];
             $kirayaactarih2 = new DateTime("$kirayaactarih");           
  $kirayaactarih3 = $kirayaactarih2->format('d-m-Y');
   $mulkkapalimi=1;   
      
}
  }
  $result -> free_result();
}  
    
    

  if ($kiraison == 1) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülk kapora onayında değildir. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
}   
   
    
    
          if ($result = $conn -> query("SELECT * FROM kirakaporasure")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

  
      $kirakaporatakvimgunu=$row['kirakaporatakvimgunu'];
  
     
}
     
  $result -> free_result();
} 
    
    
    
     $varmikontrol=0;
      if ($result = $conn -> query("SELECT * FROM kaporareddet where kaporareddet.isdeleted !=1 AND kaporareddet.kirakey='$kirakaporasonkey'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

  
      $varmikontrol=1;
     
}
     
  $result -> free_result();
} 
    
    if($varmikontrol)
    {
    $sql = "UPDATE kaporareddet SET kaporareddet.isdeleted=1 where kaporareddet.kirakey='$kirakaporasonkey'"; 

    
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
    $aciklama= mysqli_real_escape_string($conn, $aciklama);

    

    date_default_timezone_set('Europe/Nicosia');
    
         
         if($mulkkapalimi==1){
             
             $datesessionxxx = new DateTime("$kirayaactarih3");           
  $datesession = $datesessionxxx->format('d-m-Y');
             
             
         }else
         {
        $datesession=date("Y-m-d");
         }
    // DateTime nesnesi oluşturma
$datetime = new DateTime("$datesession");

$eklenecekgun="+".($kirakaporatakvimgunu)." day";        
// gün ekleme
$datetime->modify($eklenecekgun);

// Yeni tarih ve saati ayrı ayrı değişkenlere alma
$datesession2 = $datetime->format('Y-m-d');
        
$datesession3 = $datetime->format('d-m-Y'); 
    
    
    
      $kirakaporaeklendi=1; // kapora eklendi.
      $kaporaonayinda=2; // OnAYLANDI 2 OLUR 
      $status="KAPORAONAYLANDI";
      $sql = "UPDATE mulkkayit SET kirakaporaeklendi='$kirakaporaeklendi', kirakaporasontarih='$datesession2', kirakaporasonkey='$kirakaporasonkey',kaporaonayinda='$kaporaonayinda', status='$status'  where id='$mulkno'"; 
    
    if ($conn->query($sql) === TRUE) {
   

         $sql = "UPDATE kirakaporakayit SET kaporasontarih='$datesession2', yetkilionayaciklama='$aciklama' where kirakey='$kirakaporasonkey'";
        
        
    
         if ($conn->query($sql) === TRUE) {
        
          echo "<br>";
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">'.$mulkno.' numaralı mülke ait kapora alma süreci başarıyla tamamlanmıştır. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';  
         
 
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