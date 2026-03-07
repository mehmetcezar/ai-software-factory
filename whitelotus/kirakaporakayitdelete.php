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
</style>     
    
    
</head>
    

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
<script>
     function opensession(){
        window.location.href = "https://whitelotustest.online/kiralamaportal.php";
    }
                   function anamenu(){
         window.location.href = "https://whitelotustest.online/kiralamaportal.php";
    }
    </script>

<?php 
    
    include 'menu.php'; // kultipine göre menun ayarlandığı php dosyasıdır.
    
    ?>

<?php
      if($_POST['kirakaporasonkey']!=null)
    {$buserid=$_POST['kirakaporasonkey']; //ID BU KISIM ve while içindeki ifdeki row id eşitliği
    $_SESSION['kirakaporasonkey']=$buserid;
    }else
    {
      $buserid=$_SESSION['kirakaporasonkey'];
    }
    
     if($_POST['mulkno']!=null)
    {$mulknoid=$_POST['mulkno']; //ID BU KISIM ve while içindeki ifdeki row id eşitliği
    $_SESSION['mulkno']=$mulknoid;
    }else
    {
      $mulknoid=$_SESSION['mulkno'];
    }

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
    $kirakaporaeklendi=0;
    $kiralandi=0;  
     if ($result = $conn -> query("SELECT * FROM mulkkayit WHERE mulkkayit.id='$mulknoid'")) {
 
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
           $kirakaporaeklendi=$row['kirakaporaeklendi'];
           $kaporaonayinda=$row['kaporaonayinda'];
           $kiralandi=$row['kiralandi'];
           $kiralamaonayinda=$row['kiralamaonayinda'];
}         
  $result -> free_result();
}

  
    
    if(!$kirakaporaeklendi && ($kaporaonayinda==0 || $kaporaonayinda==3)){
        echo "<br>";
        echo "<br>";
   echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülkte kapora bulunmamaktadır. Ana menüye dönmek için aşağıdaki butona tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>'; 
   mysqli_close($conn);            
   exit();   
  }  
    
    
    if($kaporaonayinda==2){
        echo "<br>";
        echo "<br>";
   echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülkte kapora onaylandığı için kapora kaydı silinemez. Ana menüye dönmek için aşağıdaki butona tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>'; 
   mysqli_close($conn);            
   exit();   
  } 
    
    if($kiralamaonayinda){
        echo "<br>";
        echo "<br>";
   echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülk kiralama onayında olduğu için kapora kaydı silinemez. Ana menüye dönmek için aşağıdaki butona tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>'; 
   mysqli_close($conn);            
   exit();   
  } 
    

    if($kiralandi){
        echo "<br>";
        echo "<br>";
   echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülk kiralandığı için kapora kaydı silinemez. Ana menüye dönmek için aşağıdaki butona tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>'; 
   mysqli_close($conn);            
   exit();   
  } 
    
    
 if ($result = $conn -> query("SELECT * FROM mulkkayit WHERE mulkkayit.id='$mulknoid'")) {
 
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
           $yapino=$row['yapino'];
           $adsoyad=$row['adsoyad'];
           $iletisim1=$row['iletisim1'];
           $iletisim2=$row['iletisim2'];
           $kimlikno=$row['kimlikno'];
           $email=$row['email'];
           $uyruk=$row['uyruk'];
           $guncelaidat=$row['guncelaidat'];
           $aidatparabirimi=$row['aidatparabirimi'];
           $susahiplik=$row['susahiplik'];
           $elektriksahiplik=$row['elektriksahiplik'];
}         
  $result -> free_result();
}

    ?>


<div class="parentmain2">
         
    <div class="options">

      <div class="container">
          
    <?php
          
    echo '<table border="1" name="table1" id="table1" class="table">   
<tr>
<th>#Mülk No</th>
<th>Tanımlı Yapı No</th>
<th>Ad Soyad</th>
<th id="thhide">İletişim 1</th>
<th>Kimlik No</th>
<th id="thhide">Uyruk</th>



</tr>';  
echo "<tr>";
echo "<td>" . $mulknoid . "</td>";
echo "<td>" . $yapino . "</td>";
echo "<td>" . $adsoyad . "</td>";
echo "<td id='thhide'>" . $iletisim1 . "</td>";
echo "<td>" . $kimlikno . "</td>";
echo "<td id='thhide'>" . $uyruk . "</td>";

echo "</tr>";
 echo "</table>";             
    ?>  
 </div>
    </div>
    </div>
    
    
        <div class="parentmain2">
         
    <div class="options" >

      <div class="container">
        
    <?php
        if(!isset($_POST['submitzemin'])){
            echo '<br><br><form action="" method="post" name="form1" id="form1">
  <div class="row"><p>Formu onaylamanız halinde kaporaya ait TÜM VERİLER SİLİNİR.</p></div>         
  <br>
  <br>
  <div class="row" id="hiderow">
  <input name="submitzemin" type="submit" id="submitzemin" value="Kapora Verilerini SİL" style="background:red;"/>
  </div>
</form>
 <br>
  <div class="row" id="hiderow">
  <input name="iptal" type="submit" id="iptal" value="İptal Et ve Ana Menüye Dön" onclick="anamenu()" style="background:green;"/>
  </div>';
            
        }
        ?>
    
    </div>
     </div>
         </div>
    
    
    <?php
    
          if(isset($_POST['submitzemin'])){
              
              
                        
               //VERİYİ GÜNCELLE
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
          $kirakaporasontarih="0000-00-00";
       $sql = "UPDATE kirakaporakayit SET isdeleted=1 where kirakey='$buserid'"; 
    
              
     if ($conn->query($sql) === TRUE) {
         
         $sql = "UPDATE mulkkayit SET kirakaporaeklendi=0,kaporaonayinda=0, kirakaporasontarih='$kirakaporasontarih', kirakaporasonkey='', status='UYGUN'   where id='$mulknoid'"; 
         
         if ($conn->query($sql) === TRUE) {
         echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Kapora Kaydı Verileri Silinmiştir. Ana menüye dönmek için aşağıdaki butona tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';
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
                
              
              
              
          }
    
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