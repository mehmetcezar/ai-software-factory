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
         window.location.href = "https://whitelotustest.online/kiralamaportal.php";
    }
    </script>
  
    <?php
   
    
   include 'usersession.php';
   // usersessiontimecheck();
            
              
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
    
    
     if($_POST['mulkno']!=null)
    {$mulkno=$_POST['mulkno']; //ID BU KISIM ve while içindeki ifdeki row id eşitliği
    }else
    {
      Notdevam();
    }
    
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
    
    
     if ($result = $conn -> query("SELECT kirayaayrildi,kiralandi,kiracieklendi,kirakaporaeklendi,kiralamaonayinda FROM mulkkayit where mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulkno'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
        $kirayaayrildi=$row['kirayaayrildi'];
        $kiralandi = $row['kiralandi'];
        $kiracieklendi = $row['kiracieklendi'];
        $kirakaporaeklendi = $row['kirakaporaeklendi'];
      $kiralamaonayinda = $row['kiralamaonayinda'];
      $kaporaonayinda = $row['kaporaonayinda'];
}
     
  $result -> free_result();
}  
     
     
     if($kirayaayrildi==1 || $kiralandi==1 || $kiracieklendi==1 || $kirakaporaeklendi==1 || $kiralamaonayinda==1 || $kiralamaonayinda==2 || $kaporaonayinda==1){
         
         echo '
          <div class="parentmain2">
    <div class="options">
      <div class="container">   
    
            <div class="row"><p>Bu mülk için rezervasyon yapılamaz. Mülk kira sürecindedir.</p></div>

<br>
<div class="row" id="hiderow">
  <input name="iptal" type="submit" id="iptal" value="İptal Et Kiralama Portalına Dön" onclick="anamenu()" style="background:red;"/>
  </div>



         </div>
    </div>
</div>  ';
         
         
      exit();   
     }
    
    
              if ($result = $conn -> query("SELECT * FROM rezervasyonsure")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
        $rezervasyonsure=$row['rezervasyonsuresisaat'];
        
}
     
  $result -> free_result();
}  
    
    
    
    date_default_timezone_set('Europe/Nicosia');
    $datesession=date("Y-m-d");
    $timesession=date("H:i:s");
    
    // DateTime nesnesi oluşturma
$datetime = new DateTime("$datesession $timesession");

    
// Saat değerini $datetime nesnesine ekleyelim
$incomingTimeInterval = new DateInterval('PT' . $rezervasyonsure . 'H');
$datetime->add($incomingTimeInterval);


// 1 gün ekleme
//$datetime->modify('+1 day');

// Yeni tarih ve saati ayrı ayrı değişkenlere alma
$datesession2 = $datetime->format('Y-m-d');
$timesession2 = $datetime->format('H:i:s');
 
$datesession3 = $datetime->format('d-m-Y');    

      $kirayaayrildi=1; // onaylanmış olduğunda muhasebe tarafından 2 olur.
       
      /***KİRALAMA STATUS****/
      // UYGUN: Kiralamak için uygun.
      // REZERV: rezerv edilen mülk için.
      // YETKİLİ ONAYINDA: kapora alınarak veya alınmayarak yetkili onayına gittiğini gösterir.
      // KİRALANDI: kiralanmış ve halen kirası devam eden mülkü gösterir.
    
      $status="REZERV";
      
      $sql = "UPDATE mulkkayit SET kirayaayrildi='$kirayaayrildi', kirayaayrildisondate='$datesession2', kirayaayrildisontime='$timesession2', status='$status' where mulkkayit.id='$mulkno'";
    
 if ($conn->query($sql) === TRUE) {
     echo "<br>";
     echo "<br>";
     
     echo '
          <div class="parentmain2">
    <div class="options">
      <div class="container">   
    
            <div class="row"><p>'.$mulkno.' numaralı mülk için rezervasyon yapılmıştır. Rezervasyon '.$datesession3.' tarih ve '.$timesession2.' saatinde sona erecektir. </p></div>

<br>
<div class="row" id="hiderow">
  <input name="iptal" type="submit" id="iptal" value="Kiralama Portalına Dön" onclick="anamenu()" style="background:green;"/>
  </div>



         </div>
    </div>
</div>  ';
     
    
     
     
}   
 else {echo "Error: " . $sql . "<br>" . $conn->error;}  
    
    mysqli_close($conn);
?>
    

<!-------------------------------------------------------->
 

 

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