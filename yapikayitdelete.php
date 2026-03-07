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
        window.location.href = "https://whitelotustest.online/yapikayityonet.php";
    }
                   function anamenu(){
         window.location.href = "https://whitelotustest.online/yapikayityonet.php";
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
     if ($result = $conn -> query("SELECT * FROM yapikayit WHERE yapikayit.id='$buserid'")) {
 
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
           $mulkison=$row['mulkison'];
 
}         
  $result -> free_result();
}

  if($mulkison){
   echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu yapının üzerinde mülk kaydı vardır. Önce mülk kaydını siliniz. Ana menüye dönmek için aşağıdaki butona tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>'; 
   mysqli_close($conn);            
   exit();   
  }  
    
    
 if ($result = $conn -> query("SELECT * FROM yapikayit WHERE yapikayit.id='$buserid'")) {
 
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
           $yapino=$row['yapino'];
           $projeadi=$row['projeadi'];
           $ilce=$row['ilce'];
           $mahalle=$row['mahalle'];
           $sokak=$row['sokak'];
           $blok=$row['blok'];
           $kat=$row['kat'];
           $kapino=$row['kapino'];
           $mulktip1=$row['mulktip1'];
           $mulktip2=$row['mulktip2'];
           $cephe=$row['cephe'];
           $alan=$row['alan'];
           $salonadet=$row['salonadet'];
           $odaadet=$row['odaadet'];
           $banyoadet=$row['banyoadet'];
           
  
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
<th>#Yapı No</th>
<th>Proje Adı</th>
<th>İlçe</th>
<th>Mahalle</th>
<th>Sokak</th>
<th>Blok</th>
<th>Kat</th>
<th>Kapı No</th>
<th>Mülk Tip 1</th>
<th>Mülk Tip 2</th>
<th>Cephe</th>
<th>Alan</th>
<th>Salon Adet</th>
<th>Oda Adet</th>
<th>Banyo Adet</th>


</tr>';  
echo "<tr>";
echo "<td>" . $yapino . "</td>";
echo "<td>" . $projeadi . "</td>";
echo "<td>" . $ilce . "</td>";
echo "<td>" . $mahalle . "</td>";
echo "<td>" . $sokak . "</td>";
echo "<td>" . $blok . "</td>";
echo "<td>" . $kat . "</td>";
echo "<td>" . $kapino . "</td>";
echo "<td>" . $mulktip1 . "</td>";
echo "<td>" . $mulktip2 . "</td>";
echo "<td>" . $cephe . "</td>";
echo "<td>" . $alan . "</td>";
echo "<td>" . $salonadet . "</td>";
echo "<td>" . $odaadet . "</td>";
echo "<td>" . $banyoadet . "</td>";


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
  <div class="row"><p>Formu onaylamanız halinde bu yapiya ait TÜM VERİLER SİLİNİR.</p></div>         
  <br>
  <br>
  <div class="row" id="hiderow">
  <input name="submitzemin" type="submit" id="submitzemin" value="Yapı Verilerini SİL" style="background:red;"/>
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
              echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Yapı Kaydı Verileri Silinmiştir. Ana menüye dönmek için aşağıdaki butona tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';
              
                        
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
          
       $sql = "UPDATE yapikayit SET isdeleted=1 where id='$buserid'"; 
    
              
     if ($conn->query($sql) === TRUE) {
         
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