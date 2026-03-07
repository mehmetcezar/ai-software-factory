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
    if($_POST['noticetarihi']!=null)
    {$noticetarihi=$_POST['noticetarihi']; //ID BU KISIM ve while içindeki ifdeki row id eşitliği
    }else
    {
      Notdevam();
    }
    if($_POST['kirabitistarihi']!=null)
    {$kirabitistarihi=$_POST['kirabitistarihi']; //ID BU KISIM ve while içindeki ifdeki row id eşitliği
    }else
    {
      Notdevam();
    }
    
    if($_POST['kirakaporasonkey']!=null)
    {$kirakaporasonkey=$_POST['kirakaporasonkey']; //ID BU KISIM ve while içindeki ifdeki row id eşitliği
    }else
    {
      Notdevam();
    }
    
    if($_POST['aciklama']!=null)
    {$aciklama=$_POST['aciklama']; //ID BU KISIM ve while içindeki ifdeki row id eşitliği
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
    
    
     if ($result = $conn -> query("SELECT noticeverildimi,kiralandi,kirakaporasonkey,kirabitistarihi FROM mulkkayit where mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulkno'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
        $noticeverildimi=$row['noticeverildimi'];
        $kiralandi = $row['kiralandi'];
        $kirabitistarihi=$row['kirabitistarihi'];
        $kirakaporasonkey=$row['kirakaporasonkey'];
}
     
  $result -> free_result();
}  
     
     
     if($kiralandi!=1){
         
         echo '
          <div class="parentmain2">
    <div class="options">
      <div class="container">   
    
            <div class="row"><p>Bu mülk kiralanmadığı için Notice tarihi verilemez. Ana menüye dönmek için tıklayınız.</p></div>

<br>
<div class="row" id="hiderow">
  <input name="iptal" type="submit" id="iptal" value="Kiralama Portalına Dön" onclick="anamenu()" style="background:red;"/>
  </div>



         </div>
    </div>
</div>  ';
         
         
      exit();   
     }
    
    
      if($noticeverildimi==1 || $noticeverildimi==2){
         
         echo '
          <div class="parentmain2">
    <div class="options">
      <div class="container">   
    
            <div class="row"><p>Bu mülk için hali hazırda girilmiş bir notice tarihi bulunmaktadır. Yenisi için girilmiş olanın silinmesi gerekir. Ana menüye dönmek için tıklayınız.</p></div>

<br>
<div class="row" id="hiderow">
  <input name="iptal" type="submit" id="iptal" value="Kiralama Portalına Dön" onclick="anamenu()" style="background:red;"/>
  </div>



         </div>
    </div>
</div>  ';
         
         
      exit();   
     }
    
    
    // DateTime nesnesi oluşturma
$datetime = new DateTime($kirabitistarihi);
$datesession2 = $datetime->format('Y-m-d');
// 1 gün ekleme
$datetime->modify('-30 day');
// Yeni tarih ve saati ayrı ayrı değişkenlere alma
$datesession3 = $datetime->format('Y-m-d');    
    
   /*echo $datesession3;
    echo $noticetarihi;
    exit();*/
     if($datesession3<$noticetarihi){
         
         echo '
          <div class="parentmain2">
    <div class="options">
      <div class="container">   
    
            <div class="row"><p>Notice tarihine müdahale edilmiştir. Giriş yapılamaz. Ana menüye dönmek için tıklayınız.</p></div>

<br>
<div class="row" id="hiderow">
  <input name="iptal" type="submit" id="iptal" value="Kiralama Portalına Dön" onclick="anamenu()" style="background:red;"/>
  </div>



         </div>
    </div>
</div>  ';
         
         
      exit();   
     }    
    
    
    // Tarih verilerini DateTime objelerine dönüştürme
$date1 = DateTime::createFromFormat('Y-m-d', $noticetarihi);
$date2 = DateTime::createFromFormat('Y-m-d', $kirabitistarihi);

$datedbyaz=$date1->format('Y-m-d');
$datea = $date1->format('d-m-Y');
$dateb = $date2->format('d-m-Y'); 
 
    
$noticeverildimi=1; //onaya gönderildi. 1 onayda 2 onaylandı.
$status="NOTICEONAYDA";    
      //$sql = "UPDATE mulkkayit SET kirakaporasontarih='$kaporaiptaltarihi' where mulkkayit.id='$mulkno'";
$sql = "UPDATE mulkkayit SET noticeverildimi='$noticeverildimi', noticetarihi='$datedbyaz', noticeaciklama='$aciklama', status='$status' where mulkkayit.id='$mulkno'";
    
 if ($conn->query($sql) === TRUE) {
     
     $sql = "UPDATE kiralamakayit SET noticeverildimi='$noticeverildimi', noticetarihi='$datedbyaz', noticeaciklama='$aciklama', status='$status' where kiralamakayit.kiralamakey='$kirakaporasonkey'";
     
     if ($conn->query($sql) === TRUE) {
     
      echo "<br>";
     echo "<br>";
     
     echo '
          <div class="parentmain2">
    <div class="options">
      <div class="container">   
    
            <div class="row"><p>'.$mulkno.' numaralı mülke ait erken kira sonlandırma (Notice tarihi) tarihi Yetkiliye iletilmiştir. Notice tarihi '.$datea.' şeklinde onaya sunulmuştur. </p></div>

<br>
<div class="row" id="hiderow">
  <input name="iptal" type="submit" id="iptal" value="Kiralama Portalına Dön" onclick="anamenu()" style="background:green;"/>
  </div>



         </div>
    </div>
</div>  ';
     
     
     }
     else {echo "Error: " . $sql . "<br>" . $conn->error;} 
     
     
    
     
    
     
     
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