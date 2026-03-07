<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>https://whitelotustest.online/</title>
        <meta name="ktmmo" content="kira satış danışman emlak alım">
 <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="main2.css?rnd=<?php echo rand()?>">
   <link rel="stylesheet" type="text/css" href="2wauth.css?rnd=<?php echo rand()?>">
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
  

    <script>/*
       function gopage2() {
  window.location.href = "https://www.ktimobina.com/userpage2.php";
    
    
}*/
     // Initialization for ES Users
        
    
    </script>
    <?php
    include 'usersession.php';
    //usersessiontimecheck();
            
              
session_start();
//echo $_SESSION['uname'];
//echo $_SESSION['sessionid'];
$session_id=$_SESSION['sessionid'];
$uname=$_SESSION['uname'];
$kultipi=$_SESSION['kultipi']; // kullanıcı yetkilerinin ve erişimlerinin kontrolunde kullanılır.
$pageid="2wauthpage"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.
    
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
    
    $linkref="";
       if($kultipi=="admin"){
                          $linkref="adminpage.php";
                      }
                      if($kultipi=="yetkili"){
                          $linkref="yetkilipage.php";
                      }
                      if($kultipi=="muhasebe"){
                          $linkref="muhasebepage.php";
                      }
                      if($kultipi=="musteri"){
                          $linkref="musteripage.php";
                      }
    if($kultipi=="kiralamasorumlusu"){
                          $linkref="kiralamasorumlusupage.php";
                      }
    
    
    ?>
    

   <?php
    
        function generateUniqueRandomString() {
    // Rastgele karakter seti
    $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ234567";
    $charactersLength = strlen($characters);
    
    // Rastgele string oluşturma
    $randomString = '';
    for ($i = 0; $i < 16; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    
    // Benzersizlik eklemek için uniqid ve microtime kullanma
   // $uniqueString = uniqid(microtime(), true);
    
    // MD5 ile hash oluşturma ve ilk 10 karakteri alma
    //$uniqueHash = substr(md5($uniqueString), 0, 8);
    
    // Rastgele string ile benzersiz hash'i birleştirme
    //return $randomString . $uniqueHash;
    return $randomString;
}
    
$secretkey = generateUniqueRandomString();
    
    
 include_once("config2.php");    
    $qr_status=false;
    
    
    
    
  if ($result = $conn -> query("SELECT secretkey,secretkeyon FROM users WHERE uname='$uname'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
      
      
      if($row['secretkey']=="" || $row['secretkey']==NULL)
      {  
       $secretkey = generateUniqueRandomString();   
          
         $secretkey= mysqli_real_escape_string($conn, $secretkey);
        $sql = "UPDATE users SET secretkey='$secretkey' where users.uname='$uname'";   
        if ($conn->query($sql) === TRUE) {}  
          
      }
      else
      {
        $secretkey=$row['secretkey'];  
      }
      
       if($row['secretkeyon']==0)
      {  
       $qr_status=false;     
      }
      else
      {
       $qr_status=true; 
      }
      
     
    }
     
  $result -> free_result();
}    
    
require_once 'GoogleAuthenticator.php'; // composer kullanmıyorsan bu dosyayı elle indir
define('USER_SECRET', $secretkey);   
$ga = new PHPGangsta_GoogleAuthenticator();
$secret = USER_SECRET; // veya $ga->createSecret();
$qrCodeUrl = $ga->getQRCodeGoogleUrl('www.stockcyprusportal.com', $secret);
    
    // Form gönderildiyse ve kullanıcı kutuyu işaretlediyse
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $choice = $_POST['fa_choice'] ?? '';
    if ($choice === 'enable') {
        $_SESSION['2fa_enabled'] = true; // Veritabanına da yazabilirsin
        
        $check=0;
          if ($result = $conn -> query("SELECT secretkey,secretkeyon FROM users WHERE uname='$uname'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
      
      
      if($row['secretkeyon']==1)
      {  
       $check=1;
          $qr_status=true;
      }

    }
     
  $result -> free_result();
} 
        
        if($check!=1){
        $secretkey= mysqli_real_escape_string($conn, $secretkey);
        $secretkeyon=1; // seçildi ve on yapıldı.
        $sql = "UPDATE users SET secretkey='$secretkey',secretkeyon='$secretkeyon' where users.uname='$uname'"; 
        
        if ($conn->query($sql) === TRUE) {
            $qr_status=true;
        $message = "✔️ Çift doğrulama başarıyla aktif hale getirildi.";
        }
        }
        else
        {
           $message = "Çift doğrulama halihazırda başarıyla aktif hale getrilmiştir."; 
        }
        
    } elseif($choice === 'disable') {
        $_SESSION['2fa_enabled'] = false;
        
                $check=0;
          if ($result = $conn -> query("SELECT secretkey,secretkeyon FROM users WHERE uname='$uname'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
      
      
      if($row['secretkeyon']==1)
      {  
       $check=1;     
      }

    }
     
  $result -> free_result();
} 
        
       if($check==1){
        
           $secretkeyon=0; // seçildi ve on yapıldı.
        $sql = "UPDATE users SET secretkey='',secretkeyon='$secretkeyon' where users.uname='$uname'"; 
        
        if ($conn->query($sql) === TRUE) {
            $qr_status=false;
        $message = "❌ Çift doğrulama devre dışı bırakıldı.";
         $qrCodeUrl="https://whitelotustest.online/image/missingqr.jpg"; 
            $secret=""; 
        }
           
       }else
       {
           $message = "❌ Çift doğrulama zaten devre dışıdır.";
 $qrCodeUrl="https://whitelotustest.online/image/missingqr.jpg"; 
            $secret="";
       }
        
        
        
    }else {
        $message = "Lütfen bir seçim yapınız.";
    }
}
    
?>


<div class="containerxx2">

<div class="containerxx2x">
  
    <h2>Google Authenticator ile Çift Doğrulama</h2>

   <!-- QR Kodun Durumu -->
    <div class="qr-status <?php echo $qr_status ? 'active' : 'inactive'; ?>">
        <?php echo $qr_status ? '✅ Çift doğrulama aktif.' : '❌ Çift doğrulama aktif değil.'; ?>
    </div>
   
    <p>Lütfen aşağıdaki QR kodu Google Authenticator uygulamasıyla tarayın.</p>

    <div class="qr-image">
        <img src="<?php echo $qrCodeUrl; ?>" alt="QR Kodu">
    </div>

    <p class="secret">Gizli Anahtar: <?php echo $secret; ?></p>

    <div class="description">
        Google Authenticator, hesabınıza ekstra bir güvenlik katmanı eklemek için kullanılan bir çift faktörlü kimlik doğrulama (2FA) yöntemidir. Uygulamayı telefonunuza yükledikten sonra, bu QR kodu tarayarak her girişte dinamik olarak üretilen 6 haneli kodları kullanabilirsiniz. Bu sayede yalnızca şifrenizi bilen biri değil, fiziksel olarak telefonunuza sahip olan biri hesabınıza erişebilir. Güvenliğiniz için önerilen bu sistemle yetkisiz girişlerin önüne geçebilirsiniz.
    </div>
    
     <form method="POST">
        <div class="radio-group">
            <label class="radio enable-label">
                <input type="radio" name="fa_choice" value="enable">
                Giriş ekranımda çift doğrulamayı kullanmak istiyorum
            </label>

            <label class="radio disable-label">
                <input type="radio" name="fa_choice" value="disable">
                Çift doğrulamayı devre dışı bırakmak istiyorum
            </label>
        </div>

        <button type="submit">Onaylıyorum</button>
    </form>

    <?php if (isset($message)): ?>
        <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>  
    <br>
    <?php echo '<a href="https://whitelotustest.online/'.$linkref.'" class="btn-blue">Ana Sayfaya Dön</a>';?>
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

</body>
</html>