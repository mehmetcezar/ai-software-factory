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
$pageid="acenteolustur"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.  
    
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

header("Location: https://whitelotustest.online/yetkilipage.php"); /* Redirect browser */
exit();	
	
} 
              



?>
<body>
<?php 
    
    include 'menu.php'; // kultipine göre menun ayarlandığı php dosyasıdır.
    
    ?>

   
    
    
    <br>
              <br>
     <div class="parentmain2">
    <div class="options">
      <div class="container">
        
          <div class="row">
          <div style="color:red;">
             <?php
              if($_SESSION['kullaniciadi']!=null){
                  echo $_SESSION['kullaniciadi']." kullanımdadır. Lütfen farklı bir kullanıcı adı tanımlayınız.";
              }
              
              ?>
            
          </div>
              </div>
              
           <div class="row">
          
              <label for="genelbilgi" style="font-weight:bolder;font-size:16px;">Kullanıcı Oluştur</label>
            
          </div>
        <form  id="busers" action="/acenteolusturaction.php" method="post" onsubmit="return validatecallForm()" enctype="multipart/form-data">
           <div class="row">
            <div class="col-25">
              <label for="bkullaniciadi" style="font-weight:bolder">Acente İsim *</label>
            </div>
            <div class="col-75">
              <input type="text" id="kullaniciadi" name="kullaniciadi" style="font-weight:bolder" required="required" pattern="[A-Za-zöÖçÇşŞıIğĞüÜ.\s ]{1,50}" maxlength="50" title="Sadece harf ve nokta girilebilir.">
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="bemail" style="font-weight:bolder">Acente E-mail Adresi *</label>
            </div>
            <div class="col-75">
              <input type="text" id="email" name="email" style="font-weight:bolder" required="required" maxlength="30" value="<?php echo $_SESSION['bemail']; ?>">
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="bphone" style="font-weight:bolder">Mobil Telefon No: *</label>
            </div>
            <div class="col-75">
              <input type="text" id="bphone" name="bphone" style="font-weight:bolder" required="required" maxlength="11" title="11 haneli olarak giriniz. 05XXXXXXXXX" value="<?php echo $_SESSION['bphone']; ?>">
              <small class="form-text text-muted">
                11 haneli olarak giriniz. 05XXXXXXXXX
              </small>
            </div>
          </div>
            <br>
            <br>
          <div class="row">
            <input type="submit" name="submit" id="onaybutton" value="Onayla ve Kullanıcı Oluştur">
          </div>
        </form>
        
          
          
          
        </div>
    </div>
</div>
    

 
<script>
    
    function validatecallForm()  {
     let phone = document.forms["busers"]["bphone"].value;
        let email = document.forms["busers"]["email"].value;
        email=email.trim(email);
 phone=phone.trim(phone);
    
    if (!ValidateEmail(email)){
                     alert("Hatalı email adresi girilmiştir. Uygun formatta giriniz.");
                     document.getElementById("email").value = '';
                     document.getElementById("email").focus();
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