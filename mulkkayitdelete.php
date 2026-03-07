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
$pageid="yetkilipage"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.  
    
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
        window.location.href = "https://whitelotustest.online/mulkkayityonet.php";
    }
                   function anamenu(){
         window.location.href = "https://whitelotustest.online/mulkkayityonet.php";
    }
    </script>

<?php 
    
    include 'menu.php'; // kultipine göre menun ayarlandığı php dosyasıdır.
    
    ?>

<?php
      if($_POST['buserid']!=null)
    {$buserid=$_POST['buserid']; //ID BU KISIM ve while içindeki ifdeki row id eşitliği
    $_SESSION['buserid']=$buserid;
    }else
    {
      $buserid=$_SESSION['buserid'];
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
    $kaporaeklendi=0;
    $kiracieklendi=0;
    $satisaayrildi=0;
    $satildi=0;   
     if ($result = $conn -> query("SELECT * FROM mulkkayit WHERE  mulkkayit.company_id = '{$_SESSION['company_id']}' AND mulkkayit.id='$buserid'")) {
 
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
           $satildi=$row['satildi'];
           $satisaayrildi=$row['satisaayrildi'];
           $kiracieklendi=$row['kiracieklendi'];
           $kaporaeklendi=$row['kaporaeklendi'];
           
 
}         
  $result -> free_result();
}

  if($kaporaeklendi){
   echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülkün üzerinde kapora kaydı vardır. Önce kapora kaydını siliniz. Ana menüye dönmek için aşağıdaki butona tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>'; 
   mysqli_close($conn);            
   exit();   
  } 
    
    if($kiracieklendi){
   echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülkün üzerinde kiracı kaydı vardır. Önce kiracı kaydını siliniz. Ana menüye dönmek için aşağıdaki butona tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>'; 
   mysqli_close($conn);            
   exit();   
  }  
    
     if($satisaayrildi){
   echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülk satış için ayrılmıştır. Mülkü silmek için satışa ayrılmış mülkü satıştan kaldırınız. Ana menüye dönmek için aşağıdaki butona tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>'; 
   mysqli_close($conn);            
   exit();   
  }  
    
    if($satildi){
   echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülk satıldığı için kaydı silinemez. Ana menüye dönmek için aşağıdaki butona tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>'; 
   mysqli_close($conn);            
   exit();   
  } 
    
    
 if ($result = $conn -> query("SELECT * FROM mulkkayit WHERE  mulkkayit.company_id = '{$_SESSION['company_id']}' AND mulkkayit.id='$buserid'")) {
 
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
echo "<td>" . $buserid . "</td>";
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
  <div class="row"><p>Formu onaylamanız halinde bu mülke ait TÜM VERİLER SİLİNİR.</p></div>         
  <br>
  <br>
  <div class="row" id="hiderow">
  <input name="submitzemin" type="submit" id="submitzemin" value="Mülk Verilerini SİL" style="background:red;"/>
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
          
       $sql = "UPDATE mulkkayit SET isdeleted=1 where id='$buserid'"; 
    
              
     if ($conn->query($sql) === TRUE) {
         
         $sql = "UPDATE yapikayit SET mulkison=0 where id='$yapino'"; 
         
         if ($conn->query($sql) === TRUE) {
         
         echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Mülk Kaydı Verileri Silinmiştir. Ana menüye dönmek için aşağıdaki butona tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';
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