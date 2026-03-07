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
    if (isset($_GET['dosya'])) {
    $dosyaYolu = $_GET['dosya'];
    dosyayiIndir($dosyaYolu);
} else {
    //echo 'Dosya yüklenmedi.';
}
  function dosyayiIndir($dosyaYolu) {
     if (file_exists($dosyaYolu)) {
        $dosyaAdi = basename($dosyaYolu);
        $dosyaUzantisi = strtolower(pathinfo($dosyaAdi, PATHINFO_EXTENSION));
        
        // Desteklenen dosya uzantıları
        $desteklenenUzantilar = array('pdf', 'png', 'jpg', 'doc', 'docx', 'xls', 'xlsx', 'dwg');
        
        // Dosya uzantısı desteklenen uzantılar arasındaysa devam et
        if (in_array($dosyaUzantisi, $desteklenenUzantilar)) {
            header('Content-Type: application/octet-stream');
            header('Content-Transfer-Encoding: Binary');
            header('Content-Disposition: inline; filename="' . $dosyaAdi . '"');
            header('Content-Length: ' . filesize($dosyaYolu));
            header('Accept-Ranges: bytes');
            
            ob_clean();
            flush();
            
            readfile($dosyaYolu);
            exit;
        } else {
            echo 'Desteklenmeyen dosya uzantısı.';
        }
    } else {
        echo 'Dosya bulunamadı.';
    }
}  
               
               
    
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
    
    
     if($_POST['buserid']!=null)
    {$buserid=$_POST['buserid']; //ID BU KISIM ve while içindeki ifdeki row id eşitliği
    }else
    {
      Notdevam();
    }
    
    if($_POST['mulkno']!=null)
    {$mulknoid=$_POST['mulkno']; //ID BU KISIM ve while içindeki ifdeki row id eşitliği
    }else
    {
      Notdevam();
    }
    
  $_SESSION['kiralamaid']=$buserid; 
    ?>

<!-------------------------------------------------------->
<?php
    
    $verilermx=array();  
     $verilerm=array();
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

  
  $mulkno=$mulkid;  
  
    

    
         if ($result = $conn -> query("SELECT * FROM kiralamakayit where  kiralamakayit.company_id = '{$_SESSION['company_id']}' AND kiralamakayit.isdeleted !=1 AND kiralamakayit.id='$buserid'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
       
        $full_path = $row['kiralamasozpath'];
        $imzali_path =$row['kiralamasozimzalipath'];
        $id=$row['id'];
}
     
  $result -> free_result();
}  
    
  
?>
    

<!-------------------------------------------------------->
 
<br>
              <br>
     <div class="parentmain2">
    <div class="options">
      <div class="container"> 
           <div class="row">
          
              <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:16px;">İMZALI KİRA SÖZLEŞMESİ YÜKLEME SAYFASI</label>
              
          </div>
          
          
          <?php
          echo '<br>';
    echo '<br>';
    echo '<br>';
    echo "<br><br>";           
    echo '<div class="makememiddlebody"><div class="containercap"><div class="textcapdiv"><form action='.$full_path.' method="get" enctype="multipart/form-data">
  <div class="row" id="hiderow">
  <button type="submit" id="autoClickBtn" class="gobackcap" style="background:green;color:white;font-size:15px;font-weight:bolder;">Kira Sözleşmesini İndir</button>
   </form>
  </div></div>
  </div></div>
</form>';
          ?>
          
          <form  id="busers" action="/kiralamakaporalisozkayitaction.php" method="post" onsubmit="return validatecallForm()" enctype="multipart/form-data"> 
          
          <input type="text" name="buserid" id="buserid" value="<?php echo $id;?>" style="display:none;"> 
          <input type="text" name="mulkno" id="mulkno" value="<?php echo $mulknoid;?>" style="display:none;">
          
          <div class="row">
            <div class="col-25">
              <label for="kaporasozimzali" style="font-weight:bolder">İmzalı Kira Sözleşmesi *</label>
              <br>
            </div>
            <div class="col-75">
             <input type="file" name="kiralamasozimzali" id="kiralamasozimzali" class="custom-file-input" accept=".pdf,.jpg,.png" required="required"> 
            </div>
          </div>
          <br>
           <br>
            <div class="row">
            <input type="submit" name="submit" id="onaybutton" value="Onayla ve Kira Sözleşmesini Yükle">
          </div>
        </form> 

       <br>
       <br>
    
      <?php
         if($imzali_path!=""){ 
       echo '<form  id="busers2" action="/kiralamasozgoraction.php" method="post" enctype="multipart/form-data" target="_blank"> 
          
          <input type="text" name="buserid" id="buserid" value="'.$id.'" style="display:none;"> 
          <input type="text" name="mulkno" id="mulkno" value="'.$mulknoid.'" style="display:none;">

          <br>
           <br>
            <div class="row">
            <input type="submit" name="submit" id="onaybutton" style="background-color:blue;" value="İmzalı Kira Sözleşmesini Gör">
          </div>
        </form>';
         }
       ?>
        </div>
    </div>
</div>
 


          <!---Bullury div--->
<div id="loadingOverlay">
  <div id="loadingImage"></div>
</div>



<script>
    

       function validatecallForm()  {
          
     
          let fileInput = document.getElementById('kiralamasozimzali');
    
        var tapuyer;
    
        var file=fileInput.files[0];

      var fileType = file.type;
//alert(fileType);
      // Dosya türünü kontrol et
      if (fileType === "application/pdf") {
        //insaatruhsat[i]=file.name + " dosyası JPEG formatındadır.";
      }
        else if (fileType === "image/jpg") {
        //insaatruhsat[i]=file.name + " dosyası JPEG formatındadır.";
      }
        else if (fileType === "image/jpeg") {
        //insaatruhsat[i]=file.name + " dosyası JPEG formatındadır.";
      }
        else if (fileType === "image/png") {
        //insaatruhsat[i]=file.name + " dosyası JPEG formatındadır.";
      }
       else {
        tapuyer=file.name + " dosyası desteklenmeyen bir türdedir.";
            document.getElementById('kiralamasozimzali').focus();
      }
 
    if(tapuyer!=null){
    alert(tapuyer);
            return false;
        
        
}

    
           

   
      /*******************************************/ 
   
document.getElementById("loadingOverlay").style.display = "block";
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