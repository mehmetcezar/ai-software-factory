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
        window.location.href = "https://whitelotustest.online/kaporakayit.php";
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
   if($_FILES['kaporabelge']['name']!=NULL) {
        $kaporabelge = $_FILES['kaporabelge'];
    }else
    {
        Notdevam(); 
    }
   
   
    $kaporaid=$_SESSION['kaporaid'];    
    
    
    if($_POST['yapino']==NULL){
        Notdevam();
    }
    else
    {
      $yapino=$_POST['yapino'];
        $yapino=trim($yapino);
    }  
    
    
    if($_POST['mulkno']==NULL){
        Notdevam();
    }
    else
    {
      $mulkno=$_POST['mulkno'];
        $mulkno=trim($mulkno);
    } 
    
    if($_POST['kaporaidx']==NULL){
        Notdevam();
    }
    else
    {
      $kaporaidx=$_POST['kaporaidx'];
        $kaporaidx=trim($kaporaidx);
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
    
    if($_POST['kaporatip']==NULL){
        Notdevam();
    }
    else
    {
      $kaporatip=$_POST['kaporatip'];
        $kaporatip=trim($kaporatip);
    }  
    
    
    if($_POST['kimliktipi']==NULL){
        Notdevam();
    }
    else
    {
      $kimliktipi=$_POST['kimliktipi'];
        $kimliktipi=trim($kimliktipi);
    } 
    
    if($_POST['kaporamiktari']==NULL){
        Notdevam();
    }
    else
    {
      $kaporamiktari=$_POST['kaporamiktari'];
        $kaporamiktari=trim($kaporamiktari);
    } 
    
     if($_POST['kaporaparabirimi']==NULL){
        Notdevam();
    }
    else
    {
      $kaporaparabirimi=$_POST['kaporaparabirimi'];
        $kaporaparabirimi=trim($kaporaparabirimi);
    } 
    
     if($_POST['kaporateslimtarihi']==NULL){
        Notdevam();
    }
    else
    {
      $kaporateslimtarihi=$_POST['kaporateslimtarihi'];
        $kaporateslimtarihi=trim($kaporateslimtarihi);
    } 
    
              
 
      $kapozelnot=$_POST['kapozelnot'];
        $kapozelnot=trim($kapozelnot);
                
   
              
      
          
      /*    
    echo $adsoyad."<br>";
    echo $iletisim1."<br>";
    echo $iletisim2."<br>";
    echo $kimlikno."<br>";
    echo $kimliktipi."<br>";
    echo $email."<br>";
    echo $uyruk."<br>";
    echo $kapozelnot."<br>";
    echo $kaporamiktari."<br>";
    echo $kaporaparabirimi."<br>";
    echo $kaporateslimtarihi."<br>";
    echo $kaporatip."<br>";
    exit();
    */
    ?>

<!-------------------------------------------------------->
<?php
    
  
 if ($kaporaid != $kaporaidx) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Kayıt için başlatılan kapora numarası ile formda gönderilen kapora numarası farklıdır. Lütfen yeniden deneyiniz. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';
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


    $satildiison=0;
    $kiraison=0;
    //$satisison=0;
     if ($result = $conn -> query("SELECT * FROM mulkkayit where mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulkno'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

      if($row['satildi']==1){
          $satildiison=1;
      }
      
      
      
      
      if($row['kiralandi']==1){
          $kiraison=1;
      }
      
      /*
      if(strcmp($kaporatip, "SATIŞ")===0){
      if($row['satiskaporaeklendi']==1){
          $satisison=1;
      }
      }*/
     $malsahibi=$row['adsoyad'];
     $malsahibiid=$row['kimlikno'];      
}
     
  $result -> free_result();
}  
    
    
   if ($satildiison == 1) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülk satılmıştır. Satılmış olan mülkün kaporası güncellenemez. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
} 
    if ($kiraison == 1) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülk kiralanmıştır. Kiralama süreci tamamlanmış olan mülkün kaporası güncellenemez. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
} 
    
         if ($result = $conn -> query("SELECT * FROM yapikayit where yapikayit.isdeleted !=1 AND yapikayit.mulkid='$mulkno'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

     $bolge=$row['ilce'];
     $siteadi=$row['siteadi'];
     $kapino=$row['kapino'];
     
       
}
     
  $result -> free_result();
} 
    // kiralandı veya kira kaporası eklendi ise; satış kaporası alınabilir ve satışı yapılabilir.
    
    
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
    $kaporatip= mysqli_real_escape_string($conn, $kaporatip); 
    $adsoyad= mysqli_real_escape_string($conn, $adsoyad); 
    $iletisim1= mysqli_real_escape_string($conn, $iletisim1); 
    $iletisim2= mysqli_real_escape_string($conn, $iletisim2); 
    $kimlikno= mysqli_real_escape_string($conn, $kimlikno); 
     $kimliktipi= mysqli_real_escape_string($conn, $kimliktipi); 
    $email= mysqli_real_escape_string($conn, $email); 
    $uyruk= mysqli_real_escape_string($conn, $uyruk);
    $kapozelnot= mysqli_real_escape_string($conn, $kapozelnot); 
    $mulkno= mysqli_real_escape_string($conn, $mulkno); 
    
    $kaporamiktari= mysqli_real_escape_string($conn, $kaporamiktari);
    $kaporaparabirimi= mysqli_real_escape_string($conn, $kaporaparabirimi); 
    
    

    if(strcmp($kaporatip, "SATIŞ")===0){
      $satiskapora=1;  
    }else
    {
      $satiskapora=0;  
    }
    
    if(strcmp($kaporatip, "KİRALAMA")===0){
        $kirakapora=1;
    }else
    {
       $kirakapora=0; 
    }
    

/************DOSYA İŞLEMLERİ**************/
$currentDate = date("d-m-Y");  
$projectId = "".($mulkno)."";    
// DB PATH DEĞİŞKENLERİ
$kaporabelgepaths="";

if($satiskapora){
$basePath = "proje/mulk/{$projectId}/kapora/";
createDirectory($basePath);//KLASÖR İLK KEZ BURDA OLUŞTURULDU        
       
$files = array_filter($_FILES['kaporabelge']['name']); //Use something similar before processing files.
// Count the number of uploaded files in array
$total_count = count($_FILES['kaporabelge']['name']);
// Loop through every file
for( $i=0 ; $i < $total_count ; $i++ ) {
   //The temp file path is obtained
   $tmpFilePath = $_FILES['kaporabelge']['tmp_name'][$i];
   //A file path needs to be present
   if ($tmpFilePath != ""){
         // Dosya adını ve uzantısını al
        $originalFileName = $_FILES['kaporabelge']['name'][$i];
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
      //Setup our new file path
       
      $newFilePath = $basePath.$projectId."_kaporasatisbelge_".$currentDate.($i+1). "." . $fileExtension;
       
       //DBye yazmak için değişkene dosya pathını kopyala
       $kaporabelgepaths=$kaporabelgepaths.$newFilePath.";";
      //File is uploaded to temp dir
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
         //Other code goes here
      }
       else{
         echo "There is an error."; exit();  
       }
   }
}

}



if($kirakapora){
$basePath = "proje/mulk/{$projectId}/kapora/";
createDirectory($basePath);//KLASÖR İLK KEZ BURDA OLUŞTURULDU        
       
$files = array_filter($_FILES['kaporabelge']['name']); //Use something similar before processing files.
// Count the number of uploaded files in array
$total_count = count($_FILES['kaporabelge']['name']);
// Loop through every file
for( $i=0 ; $i < $total_count ; $i++ ) {
   //The temp file path is obtained
   $tmpFilePath = $_FILES['kaporabelge']['tmp_name'][$i];
   //A file path needs to be present
   if ($tmpFilePath != ""){
         // Dosya adını ve uzantısını al
        $originalFileName = $_FILES['kaporabelge']['name'][$i];
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
      //Setup our new file path
       
      $newFilePath = $basePath.$projectId."_kaporakirabelge_".$currentDate.($i+1). "." . $fileExtension;
       
       //DBye yazmak için değişkene dosya pathını kopyala
       $kaporabelgepaths=$kaporabelgepaths.$newFilePath.";";
      //File is uploaded to temp dir
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
         //Other code goes here
      }
       else{
         echo "There is an error."; exit();  
       }
   }
}

}





    if($satiskapora==1){
    $sql = "UPDATE satiskaporakayit SET adsoyad='$adsoyad',iletisim1='$iletisim1', iletisim2='$iletisim2', kimlikno='$kimlikno', kimliktipi='$kimliktipi', email='$email', uyruk='$uyruk', kapozelnot='$kapozelnot', kaporamiktari='$kaporamiktari', kaporaparabirimi='$kaporaparabirimi', kaporateslimtarihi='$kaporateslimtarihi', kaporasatisbelge='$kaporabelgepaths' WHERE id='$kaporaidx'";
         
        
        
         /*$sql = "INSERT INTO satiskaporakayit (id, date, username, adsoyad, iletisim1, iletisim2, kimlikno, kimliktipi, email, uyruk, kapozelnot, mulkno, kaporamiktari, kaporaparabirimi, kaporateslimtarihi, kaporasatisbelge) VALUES ('', '$date','$uname','$adsoyad','$iletisim1','$iletisim2','$kimlikno','$kimliktipi','$email','$uyruk','$kapozelnot','$mulkno','$kaporamiktari','$kaporaparabirimi','$kaporateslimtarihi','$kaporabelgepaths')"; */
    }
    else{
 $sql = "UPDATE kirakaporakayit SET adsoyad='$adsoyad',iletisim1='$iletisim1', iletisim2='$iletisim2', kimlikno='$kimlikno', kimliktipi='$kimliktipi', email='$email', uyruk='$uyruk', kapozelnot='$kapozelnot', kaporamiktari='$kaporamiktari', kaporaparabirimi='$kaporaparabirimi', kaporateslimtarihi='$kaporateslimtarihi', kaporakirabelge='$kaporabelgepaths' WHERE id='$kaporaidx'";
        
        
    /* $sql = "INSERT INTO kirakaporakayit (id, date, username, adsoyad, iletisim1, iletisim2, kimlikno, kimliktipi, email, uyruk, kapozelnot, mulkno, kaporamiktari, kaporaparabirimi, kaporateslimtarihi, kaporakirabelge) VALUES ('', '$date','$uname','$adsoyad','$iletisim1','$iletisim2','$kimlikno','$kimliktipi','$email','$uyruk','$kapozelnot','$mulkno','$kaporamiktari','$kaporaparabirimi','$kaporateslimtarihi','$kaporabelgepaths')"; */
    }
    
    if ($conn->query($sql) === TRUE) {
    
    $kirakaporaeklendi=$kirakapora;
    $satiskaporaeklendi=$satiskapora;
        
        
         if($satiskapora==1){
          $sql = "UPDATE satiskaporakayit SET gunusername='$uname', gundate='$date'  where id='$kaporaidx'";} 
         if($kirakapora==1){
           $sql = "UPDATE kirakaporakayit SET gunusername='$uname', gundate='$date' where id='$kaporaidx'";  }  
     if ($conn->query($sql) === TRUE) {
         
         
         
         
         
         
         
         /*********************WORD DOSYASI İŞLEMLERİ*********************/
         
         
         
       //error_reporting(E_ALL);
  //      ini_set('display_errors', 1);
$template_file_name = 'Kapora.docx'; 
//$rand_no = rand(111111, 999999);
if($kirakapora==1){         
$fileName = "kirakapora_".$mulkno."_".$currentDate.".docx";
}
if($satiskapora==1){
$fileName = "satiskapora_".$mulkno."_".$currentDate.".docx";  
}
$folder   = "proje/mulk/{$projectId}/kapora/KaporaSozlesme";
$full_path = $folder.'/'.$fileName;
 
try
{
    if (!file_exists($folder))
    {
        mkdir($folder);
    }       
         
    //Copy the Template file to the Result Directory
    copy($template_file_name, $full_path);
   
    // add calss Zip Archive
    $zip_val = new ZipArchive;
 
    //Docx file is nothing but a zip file. Open this Zip File
    if($zip_val->open($full_path) == true)
    {
        // In the Open XML Wordprocessing format content is stored.
        // In the document.xml file located in the word directory.
            
        $key_file_name = 'word/document.xml';
        
        //$message = $zip_val->getFromName('word/document.xml'); 
        $message = $zip_val->getFromName($key_file_name); 
        
        
                     
        //$timestamp = date("d-m-Y");
         
        // this data Replace the placeholders with actual values
        //$checkindate = date("d-m-Y", strtotime($checkindate));
     //$intarih = date("d-m-Y");
        $datexx = DateTime::createFromFormat('Y-m-d', $kaporateslimtarihi);

// Hedef formata dönüştür
$formattedDate = $datexx->format('d-m-Y');
     $intarih= $formattedDate;
     $adsoyad=(string)$adsoyad;
     $kimlikno=(string)$kimlikno;
     $bolge=(string)$bolge;
     $siteadi=(string)$siteadi;
     $kapino=(string)$kapino;
     $kaporamiktari=(string)$kaporamiktari;
     $kaporaparabirimi=(string)$kaporaparabirimi;
     
      
        $message = str_replace('intarih',$intarih,$message);
        $message = str_replace('inkiralayanci',$malsahibi,$message);
        $message = str_replace('inkiramalsah',$malsahibiid,$message);
        $message = str_replace('inkiraciadi',$adsoyad,$message);
        $message = str_replace('inkiraciidno',$kimlikno,$message);
        $message = str_replace('inbolge',$bolge,$message);
        $message = str_replace('insiteadi',$siteadi,$message);
        $message = str_replace('indaireno',$kapino,$message);
        $message = str_replace('inkaporamiktar',$kaporamiktari,$message);
        $message = str_replace('inkaporaparabirimi',$kaporaparabirimi,$message);
  
        //Replace the content with the new content created above.
        $zip_val->addFromString($key_file_name, $message);
        $zip_val->close();
           
    }
}
catch (Exception $exc) 
{
    $error_message =  "Error creating the Word Document";
    var_dump($exc);
}
    
$full_path='"'.$full_path.'"';          
             
  /**************************************/ 
         
$full_pathx = str_replace('"', '', $full_path);
         
 
         
         /**********TAMAMLA***********/
         
         
if($kirakapora==1){         
$sql = "UPDATE kirakaporakayit SET kaporasozpath='$full_pathx' where kirakaporakayit.mulkno='$mulkno'";
}
if($satiskapora==1){
$sql = "UPDATE satiskaporakayit SET kaporasozpath='$full_pathx' where satiskaporakayit.mulkno='$mulkno'"; 
}      
if ($conn->query($sql) === TRUE) {}else {echo "Error: " . $sql . "<br>" . $conn->error;}   
         
         
         
         
         
/*********************************************************/
         
         
         
 
         
         if($satiskapora==1){
                    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo "<br><br>";           
    echo '<div class="makememiddlebody"><div class="containercap"><div class="textcapdiv"><form action='.$full_path.' method="get" enctype="multipart/form-data">
  <div class="row" id="hiderow">
  <button type="submit" id="autoClickBtn" class="gobackcap" style="background:green;color:white;font-size:15px;font-weight:bolder;">Kapora Sözleşmesini İndir</button>
   </form>
  </div></div>
  </div></div>
</form>';
         echo "<br>";
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">'.$mulkno.' numaralı mülkün satış kaporası başarıyla güncellenmiştir. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';} 
         if($kirakapora==1){
             
                                   echo '<br>';
    echo '<br>';
    echo '<br>';
    echo "<br><br>";           
    echo '<div class="makememiddlebody"><div class="containercap"><div class="textcapdiv"><form action='.$full_path.' method="get" enctype="multipart/form-data">
  <div class="row" id="hiderow">
  <button type="submit" id="autoClickBtn" class="gobackcap" style="background:green;color:white;font-size:15px;font-weight:bolder;">Kapora Sözleşmesini İndir</button>
   </form>
  </div></div>
  </div></div>
</form>';
             
            echo "<br>";
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">'.$mulkno.' numaralı mülkün kira kaporası başarıyla güncellenmiştir. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Devam</button></div></div></div></div>';  } 
         
         
      
         
         
         
         
         
     }
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
        
        
       
       
 
   
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