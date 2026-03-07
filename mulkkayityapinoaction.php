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
        
         .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

 
        .button {
            margin: 5px;
            padding: 5px 10px;
            background-color: #4CAF50; /* Açık yeşil renk */
            color: white;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            width: 700px; /* Sabit genişlik */
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #45a049; /* Hover durumunda renk değişikliği */
        }
    
        @media (max-width: 700px) {
            .button {
                width: 100%; /* 600px veya daha küçük ekranlarda genişlik sayfa genişliği kadar olsun */
            }
        }
        
        @media (max-width: 700px) {
            .textcon {
                width: 100%; /* 600px veya daha küçük ekranlarda genişlik sayfa genişliği kadar olsun */
            }
            
            .textcon2 {
                width: 100%; /* 600px veya daha küçük ekranlarda genişlik sayfa genişliği kadar olsun */
            }
            
            #inputFieldsContainer{
                 width: 100%;
            }
        }
        
        
</style>     
    
    
</head>
  
 <script>
             function opensession(){
        window.location.href = "https://whitelotustest.online/mulkkayit.php";
    }
    </script>
  
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

<?php 
    
    include 'menu.php'; // kultipine göre menun ayarlandığı php dosyasıdır.
    
    
    /*************Değişkenleri kontrol et**************/  
    if($_FILES['aktifkocan']['name']!=NULL) {
        $aktifkocan = $_FILES['aktifkocan'];
    }else
    {
        Notdevam(); 
    }
    
     if($_FILES['esyalistesi']['name']!=NULL) {
        $esyalistesi = $_FILES['esyalistesi'];
    }else
    {
        Notdevam(); 
    }
    
     if($_FILES['ekbelgeyukle']['name']!=NULL) {
        $ekbelgeyukle= $_FILES['ekbelgeyukle'];
    }else
    {
        Notdevam(); 
    }
    
        /*************Değişkenleri kontrol et**************/ 
   
    $yapinoid=$_SESSION['yapino'];    
   
     if($_POST['siteadix']==NULL){
        Notdevam();
    }
    else
    {
      $siteadix=$_POST['siteadix'];
        $siteadix=trim($siteadix);
    }
    
    
     if($_POST['kiralamadurumu']==NULL){
        Notdevam();
    }
    else
    {
      $kiralamadurumu=$_POST['kiralamadurumu'];
        $kiralamadurumu=trim($kiralamadurumu);
    }
    
    if($_POST['yapino']==NULL){
        Notdevam();
    }
    else
    {
      $yapino=$_POST['yapino'];
        $yapino=trim($yapino);
    }  
    
         if($_POST['adsoyad']==NULL){
        Notdevam();
    }
    else
    {
      $adsoyad=$_POST['adsoyad'];
        $adsoyad=trim($adsoyad);
    }  
              
        if($_POST['iletisim1']==NULL){
        Notdevam();
    }
    else
    {
      $iletisim1=$_POST['iletisim1'];
        $iletisim1=trim($iletisim1);
    }              
              
      
      $iletisim2=$_POST['iletisim2'];
        $iletisim2=trim($iletisim2);
               
              
         if($_POST['kimlikno']==NULL){
        Notdevam();
    }
    else
    {
      $kimlikno=$_POST['kimlikno'];
        $kimlikno=trim($kimlikno);
    }           
              
       if($_POST['email']==NULL){
        Notdevam();
    }
    else
    {
      $email=$_POST['email'];
        $email=trim($email);
    }   
              
if($_POST['uyruk']==NULL){
        Notdevam();
    }
    else
    {
      $uyruk=$_POST['uyruk'];
        $uyruk=trim($uyruk);
    }  
              
  if($_POST['msozelnot']==NULL){
        Notdevam();
    }
    else
    {
      $msozelnot=$_POST['msozelnot'];
        $msozelnot=trim($msozelnot);
    }             
    
              
              
         if($_POST['kirabedeli']==NULL){
        Notdevam();
    }
    else
    {
      $kirabedeli=$_POST['kirabedeli'];
        $kirabedeli=trim($kirabedeli);
    }
       
              
        if($_POST['kirabedeliparabirimi']==NULL){
        Notdevam();
    }
    else
    {
      $kirabedeliparabirimi=$_POST['kirabedeliparabirimi'];
        $kirabedeliparabirimi=trim($kirabedeliparabirimi);
    }  
    
    
     if($_POST['guncelaidat']==NULL){
        Notdevam();
    }
    else
    {
      $guncelaidat=$_POST['guncelaidat'];
        $guncelaidat=trim($guncelaidat);
    }
       
              
        if($_POST['aidatparabirimi']==NULL){
        Notdevam();
    }
    else
    {
      $aidatparabirimi=$_POST['aidatparabirimi'];
        $aidatparabirimi=trim($aidatparabirimi);
    } 
    
    
    
        if($_POST['maxkirainoran']==NULL){
        Notdevam();
    }
    else
    {
      $maxkirainoran=$_POST['maxkirainoran'];
        $maxkirainoran=trim($maxkirainoran);
    }
    
   
    if($_POST['susahiplik']==NULL){
        Notdevam();
    }
    else
    {
      $susahiplik=$_POST['susahiplik'];
        $susahiplik=trim($susahiplik);
    }  
              
               if($_POST['elektriksahiplik']==NULL){
        Notdevam();
    }
    else
    {
      $elektriksahiplik=$_POST['elektriksahiplik'];
        $elektriksahiplik=trim($elektriksahiplik);
    }
              
              
if($_POST['mulkozelnot']==NULL){
        Notdevam();
    }
    else
    {
      $mulkozelnot=$_POST['mulkozelnot'];
        $mulkozelnot=trim($mulkozelnot);
    }
     
    
    if($_POST['aidatsurekliligi']==NULL){
        Notdevam();
    }
    else
    {
      $aidatsurekliligi=$_POST['aidatsurekliligi'];
        $aidatsurekliligi=trim($aidatsurekliligi);
    }
     /*      
    echo $adsoyad."<br>";
    echo $iletisim1."<br>";
    echo $iletisim2."<br>";
    echo $kimlikno."<br>";
    echo $email."<br>";
    echo $uyruk."<br>";
    echo $msozelnot."<br>";
    echo $kirabedeli."<br>";
    echo $kirabedeliparabirimi."<br>";
    echo $susahiplik."<br>";
    echo $elektriksahiplik."<br>";
    echo $mulkozelnot."<br>";
    echo $guncelaidat."<br>";
    echo $aidatparabirimi."<br>";
    exit();
    */
    ?>

<!-------------------------------------------------------->
<?php
    
  
 if ($yapinoid != $yapino) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Kayıt için başlatılan yapı numarası ile formda gönderilen yapı numarası farklıdır. Lütfen yeniden deneyiniz. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';
   exit();
}   
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


    $mulkison=0;
     if ($result = $conn -> query("SELECT * FROM yapikayit where  yapikayit.company_id = '{$_SESSION['company_id']}' AND yapikayit.isdeleted !=1 AND yapikayit.yapino='$yapinoid'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

      if($row['mulkison']==1)
      {
        $mulkison=1;  
      }     
}
     
  $result -> free_result();
}  
    
    
   if ($mulkison == 1) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu yapı üzerinde mülk tanımı vardır. Güncellemek veya silmek için farklı menüden gidiniz.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   
} 
    
    
    
    
     function createDirectory($path) {
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
}  
    
    function randomNumbersInRange($min, $max) {
    $numbers = 0;
        $seed = microtime(true) * 1000;
    mt_srand($seed); // Başlangıç durumunu belirle
        $numbers = mt_rand($min, $max);
    return $numbers;
}
    
    
 
    
    
    
    
/***********************VERİ TABANI YAZMA İŞLEMLERİ*****************************/
    $uname= mysqli_real_escape_string($conn, $uname); 
    $kiralamadurumu= mysqli_real_escape_string($conn, $kiralamadurumu); 
    $adsoyad= mysqli_real_escape_string($conn, $adsoyad); 
    $iletisim1= mysqli_real_escape_string($conn, $iletisim1); 
    $iletisim2= mysqli_real_escape_string($conn, $iletisim2); 
    $kimlikno= mysqli_real_escape_string($conn, $kimlikno); 
    $email= mysqli_real_escape_string($conn, $email); 
    $uyruk= mysqli_real_escape_string($conn, $uyruk);
    $kirabedeli= mysqli_real_escape_string($conn, $kirabedeli); 
    $kirabedeliparabirimi= mysqli_real_escape_string($conn, $kirabedeliparabirimi); 
    $guncelaidat= mysqli_real_escape_string($conn, $guncelaidat); 
    $aidatparabirimi= mysqli_real_escape_string($conn, $aidatparabirimi); 
    $susahiplik= mysqli_real_escape_string($conn, $susahiplik); 
    $elektriksahiplik= mysqli_real_escape_string($conn, $elektriksahiplik); 
    $mulkozelnot= mysqli_real_escape_string($conn, $mulkozelnot); 
    $yapino= mysqli_real_escape_string($conn, $yapino);
    $maxkirainoran= mysqli_real_escape_string($conn, $maxkirainoran); 
    $aidatsurekliligi= mysqli_real_escape_string($conn, $aidatsurekliligi); 
    

     $status="UYGUN";
   
     $sql = "INSERT INTO mulkkayit (id, date, username, adsoyad, iletisim1, iletisim2, kimlikno, email, uyruk, msozelnot, kirabedeli, kirabedeliparabirimi, guncelaidat, aidatparabirimi, maxkirainoran, susahiplik, elektriksahiplik, mulkozelnot,aidatsurekliligi, yapino, kiralamadurumu, siteadi, status, company_id) VALUES ('', '$date','$uname','$adsoyad','$iletisim1','$iletisim2','$kimlikno','$email','$uyruk','$msozelnot','$kirabedeli','$kirabedeliparabirimi','$guncelaidat','$aidatparabirimi','$maxkirainoran','$susahiplik','$elektriksahiplik','$mulkozelnot','$aidatsurekliligi','$yapino', '$kiralamadurumu', '$siteadix','$status', '{$_SESSION['company_id']}')"; 
  
    
    if ($conn->query($sql) === TRUE) {
       
       
        
         if ($result = $conn -> query("SELECT * FROM mulkkayit where  mulkkayit.company_id = '{$_SESSION['company_id']}' AND mulkkayit.isdeleted !=1 AND mulkkayit.yapino='$yapino'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

      $mulkyapino=$row['id'];
         
}
     
  $result -> free_result();
} 
        
   
$currentDate = date("d-m-Y");  
$projectId = "".($mulkyapino)."";    
// DB PATH DEĞİŞKENLERİ
$aktifkocanpaths="";
    
    
$basePath = "proje/mulk/{$projectId}/kocan/";
createDirectory($basePath);//KLASÖR İLK KEZ BURDA OLUŞTURULDU

$i=randomNumbersInRange(1,99999);
       // Dosya adını ve uzantısını al
        $originalFileName = $_FILES['aktifkocan']['name'];
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
$newFilePath = $basePath.$projectId."_aktifkocan_".$currentDate.$i. "." . $fileExtension;
//DBye yazmak için değişkene dosya pathını kopyala
$aktifkocanpaths=$aktifkocanpaths.$newFilePath;
         if(move_uploaded_file($aktifkocan['tmp_name'], $newFilePath)) {
        //echo "OK2"; 
             //Other code goes here 
      }
       else{
         echo "There is an error."; exit();  
       }
        
       
$basePath = "proje/mulk/{$projectId}/esya/";
createDirectory($basePath);//KLASÖR İLK KEZ BURDA OLUŞTURULDU        
       
$files = array_filter($_FILES['esyalistesi']['name']); //Use something similar before processing files.
// Count the number of uploaded files in array
$total_count = count($_FILES['esyalistesi']['name']);
// Loop through every file
for( $i=0 ; $i < $total_count ; $i++ ) {
   //The temp file path is obtained
   $tmpFilePath = $_FILES['esyalistesi']['tmp_name'][$i];
   //A file path needs to be present
   if ($tmpFilePath != ""){
         // Dosya adını ve uzantısını al
        $originalFileName = $_FILES['esyalistesi']['name'][$i];
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
      //Setup our new file path
       
      $newFilePath = $basePath.$projectId."_esyalistesi_".$currentDate.($i+1). "." . $fileExtension;
       
       //DBye yazmak için değişkene dosya pathını kopyala
       $esyalistesipaths=$esyalistesipaths.$newFilePath.";";
      //File is uploaded to temp dir
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
         //Other code goes here
      }
       else{
         echo "There is an error."; exit();  
       }
   }
}
        
      
    
    
    
$basePath = "proje/mulk/{$projectId}/ekbelge/";
createDirectory($basePath);//KLASÖR İLK KEZ BURDA OLUŞTURULDU     
    
        
$files = array_filter($_FILES['ekbelgeyukle']['name']); //Use something similar before processing files.
// Count the number of uploaded files in array
$total_count = count($_FILES['ekbelgeyukle']['name']);
// Loop through every file
for( $i=0 ; $i < $total_count ; $i++ ) {
   //The temp file path is obtained
   $tmpFilePath = $_FILES['ekbelgeyukle']['tmp_name'][$i];
   //A file path needs to be present
   if ($tmpFilePath != ""){
         // Dosya adını ve uzantısını al
        $originalFileName = $_FILES['ekbelgeyukle']['name'][$i];
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
      //Setup our new file path
       
      $newFilePath = $basePath.$projectId."_ekbelgeyukle_".$currentDate.($i+1). "." . $fileExtension;
       
       //DBye yazmak için değişkene dosya pathını kopyala
       $ekbelgeyuklepaths=$ekbelgeyuklepaths.$newFilePath.";";
      //File is uploaded to temp dir
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
         //Other code goes here
      }
       else{
         echo "There is an error."; exit();  
       }
   }
}
        
      
    
    
        
        
       
        
        
        $setone=1;
        $sql1 = "UPDATE yapikayit SET yapino='$yapino', mulkison='$setone',mulkid='$mulkyapino' where yapikayit.id='$yapino'";
        if ($conn->query($sql1) === TRUE) {
            
             
             
            
        
     
        }
     else 
{
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}
   
}else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    
    $aktifkocanpaths= mysqli_real_escape_string($conn, $aktifkocanpaths); 
    $esyalistesipaths= mysqli_real_escape_string($conn, $esyalistesipaths); 
    $ekbelgeyuklepaths= mysqli_real_escape_string($conn, $ekbelgeyuklepaths); 
    
  $sql = "UPDATE mulkkayit SET aktifkocan='$aktifkocanpaths', esyalistesi='$esyalistesipaths',ekbelgeyukle='$ekbelgeyuklepaths' where mulkkayit.id='$mulkyapino'";
  
    
    if ($conn->query($sql) === TRUE) {
           echo "<br>";
       echo "<br>";
        
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">'.$yapino.' numaralı yapıya başarıyla '.$mulkyapino.' numaralı mülk eklenmiştir. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';
    }
    else 
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