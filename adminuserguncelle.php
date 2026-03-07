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

header("Location: https://lab.ktimobina.com/admin.php"); /* Redirect browser */
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
    
    
     if(!isset($_POST['aidatyapi'])){
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
           $phone=$row['phone'];
           $id=$row['id'];
      
              if($row['yetkili']==1){
                $kultipimevcut="Yetkili";
            }
            if($row['muhasebe']==1){
                $kultipimevcut="Muhasebe";
            }
      
             if($row['kiralamasorumlusu']==1){
                $kultipimevcut="Kiralama Sorumlusu";
            }
      
      if($row['musteri']==1){
                $kultipimevcut="Müşteri";
            }

}
  
             
  $result -> free_result();
}
    
 }
    
    
    
    ?>
    
       <?php
    if (isset($_POST['aidatyapi'])) {
        
         $name=$_POST['bisim'];
         $surname=$_POST['bsoyisim'];
         $email=$_POST['bemail'];
         $phone=$_POST['bphone'];
         $kultipimevcut=$_POST['kultipimevcut'];
      
         $name=trim($name);
         $surname=trim($surname);
         $email=trim($email);
         $phone=trim($phone);
         $kultipimevcut=trim($kultipimevcut);
  
    }
    
    ?>
    
    
     <div class="parentmain2">
    <div class="options">
      <div class="container">
        
           
         <?php
        
        if(!isset($_POST['aidatyapi'])){
            echo '<form  id="aidatyapi" name="aidatyapi" action="" method="post" onsubmit="return validatecallForm()" enctype="multipart/form-data"><div class="row"><p>Formu onaylamanız halinde bu kullanıcıya ait veriler GÜNCELLENİR.</p></div>'  ;
    
        echo '
        <div class="row">
            <div class="col-25">
              <label for="bisim" style="font-weight:bolder">Kullanıcı Tipi:</label>
            </div>
            <div class="col-75">
              <input type="text"  style="font-weight:bolder" value="'.$kultipimevcut.'" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
              <label for="bisim" style="font-weight:bolder">İsim *</label>
            </div>
            <div class="col-75">
              <input type="text" id="bisim" name="bisim" style="font-weight:bolder" required="required" pattern="[A-Za-zöÖçÇşŞıIğĞüÜ\s ]{1,30}" maxlength="30" title="Sadece harf girilebilir." value="'.$name.'">
            </div>
            </div>
            <div class="row">
            <div class="col-25">
              <label for="bsoyisim" style="font-weight:bolder">Soyisim *</label>
            </div>
            <div class="col-75">
               <input type="text" id="bsoyisim" name="bsoyisim" style="font-weight:bolder" required="required" pattern="[A-Za-zöÖçÇşŞıIğĞüÜ\s ]{1,30}" maxlength="30" title="Sadece harf girilebilir." value="'.$surname.'">
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="bemail" style="font-weight:bolder">Kullanıcı E-mail Adresi *</label>
            </div>
            <div class="col-75">
              <input type="text" id="bemail" name="bemail" style="font-weight:bolder" required="required" maxlength="30" value="'.$email.'">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="bphone" style="font-weight:bolder">Mobil Telefon No: *</label>
            </div>
            <div class="col-75">
              <input type="text" id="bphone" name="bphone" style="font-weight:bolder" required="required" maxlength="11" title="11 haneli olarak giriniz. 05XXXXXXXXX" value="'.$phone.'">
              <small class="form-text text-muted">
                11 haneli olarak giriniz. 05XXXXXXXXX
              </small>
            </div>
          </div>
          
          ';

            echo '
  <div class="row" id="hiderow">
  <input type="submit" name="aidatyapi" id="aidatyapi" value="Onayla ve Verileri Güncelle">
  </div>
</form><br>
<div class="row" id="hiderow">
  <input name="iptal" type="submit" id="iptal" value="İptal Et ve Kullanıcı Yönetimizne Dön" onclick="anamenu()" style="background:red;"/>
  </div>


';
            
        }
        ?>  
           <script>
          function anamenu(){
         window.location.href = "https://whitelotustest.online/adminusermanage.php";
    }
          
           function validatecallForm()  {
    
        let email = document.forms["aidatyapi"]["bemail"].value;
                let phone = document.forms["aidatyapi"]["bphone"].value;
        email=email.trim(email);
phone=phone.trim(phone);
    
    if (!ValidateEmail(email)){
                     alert("Hatalı email adresi girilmiştir. Uygun formatta giriniz.");
                     document.getElementById("bemail").value = '';
                     document.getElementById("bemail").focus();
            return false;
    }
    
        if (!validatePhoneNumber(phone)){
                     alert("Hatalı telefon numarası girilmiştir. Uygun formatta giriniz.");
                     document.getElementById("bphone").value = '';
                     document.getElementById("bphone").focus();
            return false;
    }   
        
        
      
        

    }
    
    
    
    
    
    
    
    
    
    function ValidateEmail(emailtext) 
{
var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
return (re.test(String(emailtext).toLowerCase()));
}
          
           function validatePhoneNumber(phoneNumber) {
  const pattern = /^05\d{9}$/;

  return pattern.test(phoneNumber);
}
          
          
          </script>
          
          
        </div>
    </div>
</div>
    

 
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
   
   
      <?php
    
          if(isset($_POST['aidatyapi'])){
              

              echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Kullanıcı Verileri Güncellenmiştir. Kullanıcı yönetimine dönmek için aşağıdaki butona tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';
              
   include 'config.php';                     
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
          
      $sql = "UPDATE users SET name='$name', surname='$surname', email='$email', phone='$phone' where id='$buserid'"; 
    
              
     if ($conn->query($sql) === TRUE) {
         
     }
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);   
                
              
              
              
          }
    
    ?>
    
    
    
</body>
</html>