<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
       <title>https://whitelotustest.online/</title>
        <meta name="ktmmo" content="vize evize evrak süreç yönetim">
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
        window.location.href = "https://whitelotustest.online/adminpage.php";
    }
    </script>
  
    <?php
   
    
    
    
    include 'usersession.php';
    //usersessiontimecheck();
            
              
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
 

    
   
    
   
              
    if($_POST['isim']==NULL){
        Notdevam();
    }
    else
    {
      $isim=$_POST['isim'];  
    }
    
    if($_POST['soyisim']==NULL){
        Notdevam();
    }
    else
    {
      $soyisim=$_POST['soyisim'];  
        //echo $password; 
    }
    if($_POST['kullaniciadi']==NULL){
        Notdevam();
    }
    else
    {
      $kullaniciadi=$_POST['kullaniciadi'];  
    }
    
    if($_POST['sifre']==NULL){
        Notdevam();
    }
    else
    {
      $sifre=$_POST['sifre'];  
        //echo $password; 
    }
     if($_POST['email']==NULL){
        Notdevam();
    }
    else
    {
      $email=$_POST['email'];  
        //echo $password; 
    }
               if($_POST['bphone']==NULL){
        Notdevam();
    }
    else
    {
      $bphone=$_POST['bphone'];  
        //echo $password; 
    }
 
    if($_POST['kultipicreate']==NULL){
        Notdevam();
    }
    else
    {
      $kultipicreate=$_POST['kultipicreate'];  
        //echo $password; 
    }
              
       $isim=trim($isim);       
           $soyisim=trim($soyisim); 
              $kullaniciadi=trim($kullaniciadi); 
              $sifre=trim($sifre); 
              $email=trim($email); 
              $kultipicreate=trim($kultipicreate);
             $bphone=trim($bphone);
              
              
function Notdevam()
{

header("Location: https://whitelotustest.online/admin.php"); /* Redirect browser */
exit();	
	
}
  ?>
             <body>
             <?php
             include 'menu.php'; // kultipine göre menun ayarlandığı php dosyasıdır.          ?>  
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

    if ($result = $conn -> query("SELECT * FROM users")) {
  //echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  //$date=date('Y-m-d');
    $i=0;
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
	 //echo strtotime($date);
	 //echo strtotime($row['start_date']);
      //echo $row['binaismi'];
     //echo $row['binayeri'];
      //echo $row['intarih'];
      //echo password_verify($password, $row['password']);
          if($kullaniciadi==$row['uname'] && $i==0)
          {
             
              $i=1;
          }

}
  
        
        
  $result -> free_result();
}
              
                          

if($i==1){
    $_SESSION['isim']=$isim;
    $_SESSION['soyisim']=$soyisim;
    $_SESSION['email']=$email;
    $_SESSION['bphone']=$bphone;
    $_SESSION['kullaniciadi']=$kullaniciadi;
    $_SESSION['kultipicreate']=$kultipicreate;
    header("Location: https://whitelotustest.online/userscreate.php"); /* Redirect browser */
   exit();	
}else
    
{
    $_SESSION['isim']="";
    $_SESSION['soyisim']="";
    $_SESSION['email']="";
    $_SESSION['kullaniciadi']="";
    $_SESSION['kultipicreate']="";
    $_SESSION['bphone']="";
    //echo "USER CREATED!";
    $password=password_hash($sifre, PASSWORD_DEFAULT);
    
    if($kultipicreate=="Yetkili"){
        $yetkili=1;
        $sql = "INSERT INTO users (id, name, surname, uname, password, email, phone, yetkili) VALUES ('', '$isim', '$soyisim', '$kullaniciadi', '$password', '$email', '$bphone', '$yetkili')";
    }
    if($kultipicreate=="Muhasebe"){
        $muhasebe=1;
         $sql = "INSERT INTO users (id, name, surname, uname, password, email, phone, muhasebe) VALUES ('', '$isim', '$soyisim', '$kullaniciadi', '$password', '$email', '$bphone', '$muhasebe')";
    }
    
    if($kultipicreate=="Kiralama Sorumlusu"){
        $kiralamasorumlusu=1;
        $sql = "INSERT INTO users (id, name, surname, uname, password, email, phone, kiralamasorumlusu) VALUES ('', '$isim', '$soyisim', '$kullaniciadi', '$password', '$email','$bphone', '$kiralamasorumlusu')";
    }
   
    if($kultipicreate=="Müşteri"){
        $musteri=1;
        $sql = "INSERT INTO users (id, name, surname, uname, password, email, phone, musteri) VALUES ('', '$isim', '$soyisim', '$kullaniciadi', '$password', '$email','$bphone', '$musteri')";
    }
    

if ($conn->query($sql) === TRUE) {
   
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Kullanıcı Başarıyla Oluşturulmuştur. Ana Sayfaya Dönmek İçin Tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';
   
}
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