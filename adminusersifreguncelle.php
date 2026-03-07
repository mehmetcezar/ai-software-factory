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

    if ($result = $conn -> query("SELECT * FROM users WHERE users.id='$buserid'")) {
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
<th>Kullanıcı Adı</th>
<th>Kullanıcı Tipi</th>
</tr>';  
echo "<tr>";
echo "<td>" . $id . "</td>";
echo "<td>" . $name . "</td>";
echo "<td>" . $surname . "</td>";
echo "<td>" . $uname . "</td>";
echo "<td>" . $kultipimevcut . "</td>";
echo "</tr>";
 echo "</table>";             
    ?>  
 </div>
    </div>
    </div>
    
    
         <div class="parentmain2">
    <div class="options">
      <div class="container">
    
           <div class="row">
          
              <label for="genelbilgi" style="font-weight:bolder;font-size:16px;">Kullanıcı Şifre Güncelle</label>
            
          </div>
        <form  id="busers" action="adminusersifreguncelleaction.php" method="post" onsubmit="return validatecallForm()" enctype="multipart/form-data">
            <div class="row">
            <div class="col-25">
              <label for="bsifre" style="font-weight:bolder">Yeni Şifre *</label>
            </div>
            <div class="col-75">
              <input type="text" id="bsifre" name="bsifre" style="font-weight:bolder" required="required" pattern="[A-Za-z0-9!-_.]{6,10}" maxlength="10" title="Sadece harf, sayı ve !-_. karakterleri girilebilir. En az 6 karakter girilmelidir.">
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="bsifre" style="font-weight:bolder">Yeni Şifre Tekrar *</label>
            </div>
            <div class="col-75">
              <input type="text" id="bsifre2" name="bsifre2" style="font-weight:bolder" required="required" pattern="[A-Za-z0-9!-_.]{6,10}" maxlength="10" title="Sadece harf, sayı ve !-_. karakterleri girilebilir. En az 6 karakter girilmelidir.">
            </div>
          </div>
             <div class="row">
            <div class="col-75">
              <input type="hidden" id="buserid" name="buserid" style="font-weight:bolder" value="<?php echo $id;?>" readonly>
            </div>
          </div>
            <br>
            <br>
          <div class="row">
            <input type="submit" name="submit" id="onaybutton" value="Onayla ve Şifre Değiştir">
          </div>
        </form>
        
          
          
          
        </div>
    </div>
</div>
    

 
<script>
    
    function validatecallForm()  {
    
        let sifre = document.forms["busers"]["bsifre"].value;
        let sifre2 = document.forms["busers"]["bsifre2"].value;
        sifre=sifre.trim(sifre);
        sifre2=sifre2.trim(sifre2);

    
    if (sifre!=sifre2){
        alert("Girilen şifreler uyuşmamaktadır. Tekrar Deneyiniz.");
        document.getElementById("bsifre").value = '';             
        document.getElementById("bsifre2").value = '';
        document.getElementById("bsifre").focus();
            return false;
    }
    
  
    }
    
    
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