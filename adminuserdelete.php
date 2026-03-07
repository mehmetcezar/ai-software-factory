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
    <script>
     function opensession(){
        window.location.href = "https://whitelotustest.online/adminusermanage.php";
    }
                   function anamenu(){
         window.location.href = "https://whitelotustest.online/adminusermanage.php";
    }
    </script>

    <?php
    
    include 'usersession.php';
   // usersessiontimecheck();
            
              
session_start();
$session_id=$_SESSION['sessionid'];
$uname=$_SESSION['uname'];
$kultipi=$_SESSION['kultipi']; // kullanıcı yetkilerinin ve erişimlerinin kontrolunde kullanılır.
$pageid="kullaniciolusturma"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.  
    
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

    if ($result = $conn -> query("SELECT * FROM users WHERE  users.company_id = '{$_SESSION['company_id']}' AND users.id='$buserid'")) {
  //echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  //$date=date('Y-m-d');
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
	 //echo strtotime($date);
	 //echo strtotime($row['start_date']);
      //echo $row['binaismi'];
     //echo $row['binayeri'];
      //echo $row['intarih'];
      //echo password_verify($password, $row['password']);
      //($row['binapuani']==0 || $row['binapuani']==null) &&
      
           $name=$row['name'];
           $surname=$row['surname'];
           $uname=$row['uname'];
           $email=$row['email'];
           $id=$row['id'];
      
           if($row['yetkili']==1){
                $kultipimevcut="Yetkili";
            }
      
            if($row['muhasebe']==1){
                $kultipimevcut="Muhasebe";
            }
      /*
             if($row['vizeci']==1){
                $kultipimevcut="Vizeci";
            }
      
      */

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
<th>#ID</th>
<th>Kullanıcı İsmi</th>
<th>Kullanıcı Soyismi</th>
<th>kullanıcı Adı</th>
<th>E-mail</th>
<th>Kullanıcı Tipi</th>
</tr>';  
echo "<tr>";
echo "<td>" . $id . "</td>";
echo "<td>" . $name . "</td>";
echo "<td>" . $surname . "</td>";
echo "<td>" . $uname . "</td>";
echo "<td>" . $email . "</td>";
echo "<td>" . $kultipimevcut . "</td>";
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
  <div class="row"><p>Formu onaylamanız halinde bu kullanıcıya ait TÜM VERİLER SİLİNİR.</p></div>         
  <br>
  <br>
  <div class="row" id="hiderow">
  <input name="submitzemin" type="submit" id="submitzemin" value="Kullanıcı Verilerini SİL" style="background:red;"/>
  </div>
</form>
 <br>
  <div class="row" id="hiderow">
  <input name="iptal" type="submit" id="iptal" value="İptal Et ve Kullanıcı Yönetimizne Dön" onclick="anamenu()" style="background:green;"/>
  </div>';
            
        }
        ?>
    
    </div>
     </div>
         </div>
    
    
    <?php
    
          if(isset($_POST['submitzemin'])){
              echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Kullanıcı Verileri Silinmiştir. Kullanıcı yönetimine dönmek için aşağıdaki butona tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';
              
                        
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
          
       $sql = "UPDATE users SET isdeleted=1 where id='$buserid'"; 
    
              
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