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
        window.location.href = "https://whitelotustest.online/yetkilipage.php";
    }
    </script>
  
    <?php
   
    ob_start();
    
    
    include 'usersession.php';
    //usersessiontimecheck();
            
              
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
 

    
   
    
   
    if($_POST['kullaniciadi']==NULL){
        Notdevam();
    }
    else
    {
      $kullaniciadi=$_POST['kullaniciadi'];  
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
 

              
      
              $kullaniciadi=trim($kullaniciadi); 
             
              $email=trim($email); 
             
             $bphone=trim($bphone);
              
              
function Notdevam()
{

header("Location: https://whitelotustest.online/yetkilipage.php"); /* Redirect browser */
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

    if ($result = $conn -> query("SELECT * FROM acente")) {
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
          if($kullaniciadi==$row['adi'] && $i==0)
          {
             
              $i=1;
          }

}
  
        
        
  $result -> free_result();
}
              
                       

if($i==1){
  
    $_SESSION['bemail']=$email;
    $_SESSION['bphone']=$bphone;
    $_SESSION['kullaniciadi']=$kullaniciadi;
    
    header("Location: https://whitelotustest.online/acenteolustur.php"); /* Redirect browser */
   exit();	
}else
    
{

    $_SESSION['bemail']="";
    $_SESSION['kullaniciadi']="";
 
    $_SESSION['bphone']="";
 
    
    

     
        $sql = "INSERT INTO acente (id, adi, email, phone, company_id) VALUES ('', '$kullaniciadi', '$email','$bphone', '{$_SESSION['company_id']}')";
  
    

if ($conn->query($sql) === TRUE) {
   
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Acente Başarıyla Oluşturulmuştur. Ana Sayfaya Dönmek İçin Tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';
   
}
}
     ob_flush();
flush();         
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