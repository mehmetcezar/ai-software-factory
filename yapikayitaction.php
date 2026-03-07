<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
        <title>https://whitelotustest.online/</title>
        <meta name="ktmmo" content="kira satış danışman emlak alım">
        <link rel="stylesheet" type="text/css" href="main2.css?rnd=<?php echo rand()?>">
        <link rel="shortcut icon" type="image/x-icon" href="image/logo/logo.jpeg" /> 
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
        window.location.href = "https://whitelotustest.online/yapikayit.php";
    }
     
    
    </script>
    <?php
    include 'usersession.php';
    //usersessiontimecheck();
            
         //echo "OK";     
session_start();
//echo $_SESSION['uname'];
//echo $_SESSION['sessionid'];
$session_id=$_SESSION['sessionid'];
$uname=$_SESSION['uname'];
$kultipi=$_SESSION['kultipi']; // kullanıcı yetkilerinin ve erişimlerinin kontrolunde kullanılır.
$pageid="yetkilipage"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.
    //echo "OK"; 
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
    
        //echo "OK";      
   
             include 'kullanicisayfayetkisi.php'; // kullanıcıların kultipine göre bu sayfaya erişim yetkilerinin olup olmayacağının ayarlandığı php dosyasıdır.
             // echo "OK";
             if(!kulsayfayetki($kultipi,$pageid,$uname))
             {
           echo "Sayfaya erişim yetkiniz yoktur!";
           exit(); 
                 
             }
              
             
/*************Değişkenleri kontrol et**************/              
         if($_POST['ulke']==NULL){
        Notdevam();
    }
    else
    {
      $ulke=$_POST['ulke'];
        $ulke=trim($ulke);
    }  
              
        if($_POST['ilce']==NULL){
        Notdevam();
    }
    else
    {
      $ilce=$_POST['ilce'];
        $ilce=trim($ilce);
    }              
              
         if($_POST['mahalle']==NULL){
        Notdevam();
    }
    else
    {
      $mahalle=$_POST['mahalle'];
        $mahalle=trim($mahalle);
    }            
              
         if($_POST['sokak']==NULL){
        Notdevam();
    }
    else
    {
      $sokak=$_POST['sokak'];
        $sokak=trim($sokak);
    }           
              
     if($_POST['siteadi']==NULL){
        Notdevam();
    }
    else
    {
      $siteadi=$_POST['siteadi'];
        $siteadi=trim($siteadi);
    }  
    
      $projeadi=$_POST['projeadi'];
        $projeadi=trim($projeadi);
             
              
       if($_POST['blok']==NULL){
        Notdevam();
    }
    else
    {
      $blok=$_POST['blok'];
        $blok=trim($blok);
    }   
              
if($_POST['kat']==NULL){
        Notdevam();
    }
    else
    {
      $kat=$_POST['kat'];
        $kat=trim($kat);
    }  
              
  if($_POST['kapino']==NULL){
        Notdevam();
    }
    else
    {
      $kapino=$_POST['kapino'];
        $kapino=trim($kapino);
    }             
    
                if($_POST['mulktip1']==NULL){
        Notdevam();
    }
    else
    {
      $mulktip1=$_POST['mulktip1'];
        $mulktip1=trim($mulktip1);
    }  
       
              /*
         if($_POST['mulktip2']==NULL){
        Notdevam();
    }
    else
    {
      $mulktip2=$_POST['mulktip2'];
        $mulktip2=trim($mulktip2);
    }
       */
              
        if($_POST['postakodu']==NULL){
        Notdevam();
    }
    else
    {
      $postakodu=$_POST['postakodu'];
        $postakodu=trim($postakodu);
    }              
   
    if($_POST['cephe']==NULL){
        Notdevam();
    }
    else
    {
      $cephe=$_POST['cephe'];
        $cephe=trim($cephe);
    }  
              
               if($_POST['alan']==NULL){
        Notdevam();
    }
    else
    {
      $alan=$_POST['alan'];
        $alan=trim($alan);
    }
              
              
if($_POST['salonadet']==NULL){
        Notdevam();
    }
    else
    {
      $salonadet=$_POST['salonadet'];
        $salonadet=trim($salonadet);
    }
          
              if($_POST['odaadet']==NULL){
        Notdevam();
    }
    else
    {
      $odaadet=$_POST['odaadet'];
        $odaadet=trim($odaadet);
    }
              
                           if($_POST['banyoadet']==NULL){
        Notdevam();
    }
    else
    {
      $banyoadet=$_POST['banyoadet'];
        $banyoadet=trim($banyoadet);
    }
              
              
                                    if($_POST['yonetimsozlesmesi']==NULL){
        Notdevam();
    }
    else
    {
      $yonetimsozlesmesi=$_POST['yonetimsozlesmesi'];
        $yonetimsozlesmesi=trim($yonetimsozlesmesi);
    }
              
//echo "OK"; 
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
    date_default_timezone_set('Europe/Nicosia');
    $date = date("Y-m-d");
    
    
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
    
    $getid=0;
        if ($result = $conn -> query("SELECT id,yapino FROM yapikayit")) {
    
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

      if($getid<=$row['yapino'] && $row['yapino']!=null){
          
           $getid=$row['yapino']; 
      }
     
      

}
  
        
        
  $result -> free_result();
}
    
  $getid=$getid+1;  
    
    
    $uname= mysqli_real_escape_string($conn, $uname); 
    //$date= mysqli_real_escape_string($conn, $date); 
    $ulke= mysqli_real_escape_string($conn, $ulke); 
    $ilce= mysqli_real_escape_string($conn, $ilce); 
    $mahalle= mysqli_real_escape_string($conn, $mahalle); 
    $sokak= mysqli_real_escape_string($conn, $sokak); 
    $projeadi= mysqli_real_escape_string($conn, $projeadi);
     $siteadi= mysqli_real_escape_string($conn, $siteadi);
    $blok= mysqli_real_escape_string($conn, $blok); 
    $kat= mysqli_real_escape_string($conn, $kat); 
    $kapino= mysqli_real_escape_string($conn, $kapino); 
    $mulktip1= mysqli_real_escape_string($conn, $mulktip1); 
    //$mulktip2= mysqli_real_escape_string($conn, $mulktip2); 
    $postakodu= mysqli_real_escape_string($conn, $postakodu); 
    $cephe= mysqli_real_escape_string($conn, $cephe); 
    $alan= mysqli_real_escape_string($conn, $alan); 
    $salonadet= mysqli_real_escape_string($conn, $salonadet); 
    $odaadet= mysqli_real_escape_string($conn, $odaadet); 
    $banyoadet= mysqli_real_escape_string($conn, $banyoadet); 
    $yonetimsozlesmesi= mysqli_real_escape_string($conn, $yonetimsozlesmesi); 

    
    
    
     /*$sql = "INSERT INTO yapikayit (id, date, username, ulke, ilce, mahalle, sokak, projeadi, siteadi, blok, kat, kapino, mulktip1, mulktip2, postakodu, cephe, alan, salonadet, odaadet, banyoadet, yapino, company_id) VALUES ('', '$date','$uname','$ulke','$ilce','$mahalle','$sokak','$projeadi','$siteadi','$blok','$kat','$kapino','$mulktip1','$mulktip2', '$postakodu', '$cephe', '$alan', '$salonadet', '$odaadet', '$banyoadet', '$getid', '{$_SESSION['company_id']}')";*/
    
    $sql = "INSERT INTO yapikayit (id, date, username, ulke, ilce, mahalle, sokak, projeadi, siteadi, blok, kat, kapino, mulktip1, postakodu, cephe, alan, salonadet, odaadet, banyoadet,yonetimsozlesmesi, yapino, company_id) VALUES ('', '$date','$uname','$ulke','$ilce','$mahalle','$sokak','$projeadi','$siteadi','$blok','$kat','$kapino','$mulktip1', '$postakodu', '$cephe', '$alan', '$salonadet', '$odaadet', '$banyoadet','$yonetimsozlesmesi', '$getid', '{$_SESSION['company_id']}')";
    
    if ($conn->query($sql) === TRUE) {
       echo "<br>";
       echo "<br>";
        
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">'.$getid.' numaralı yapı başarıyla oluşturulmuştur. Yeni yapı eklemek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';
   
}else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    
 mysqli_close($conn); 
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