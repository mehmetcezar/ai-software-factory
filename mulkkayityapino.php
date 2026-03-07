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
         if($_POST['yapimulkbilgileri']==NULL){
        Notdevam();
    }
    else
    {
      $yapimulkbilgileri=$_POST['yapimulkbilgileri'];
        $yapimulkbilgileri=trim($yapimulkbilgileri);
    }  
    
          if($_POST['yapinoid']==NULL){
        Notdevam();
    }
    else
    {
      $yapinoid=$_POST['yapinoid'];
        $yapinoid=trim($yapinoid);
    } 
    
    /*echo $yapinoid."<br>";
    echo $yapimulkbilgileri;
    exit();*/
    
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

    
    
    
    
    
    $mulkison=0;
     if ($result = $conn -> query("SELECT * FROM yapikayit where yapikayit.isdeleted !=1 AND yapikayit.yapino='$yapinoid'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
$ulke=$row['ulke'];
        $ilce = $row['ilce'];
        $mahalle = $row['mahalle'];
        $sokak = $row['sokak'];
        $projeadi = $row['projeadi'];
      $siteadi = $row['siteadi'];
        $blok = $row['blok'];
        $kat = $row['kat'];
        $kapino = $row['kapino'];
        $mulktip1 = $row['mulktip1'];
        $mulktip2 = $row['mulktip2'];
        $postakodu = $row['postakodu'];
        $cephe = $row['cephe'];
        $alan = $row['alan'];
        $salonadet = $row['salonadet'];
        $odaadet = $row['odaadet'];
        $banyoadet = $row['banyoadet'];  
        $yapino = $row['yapino'];
      
      if($row['mulkison']==1)
      {
        $mulkison=1;
         
          
          
      }
      
}
     
  $result -> free_result();
}  
    
    
   if ($mulkison == 1) {
   
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu yapı üzerinde mülk tanımı vardır. Güncellemek veya silmek için farklı menüden gidiniz.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   
} 
    
 //action sayfasında session ile POST edileni kontrol et. cross check.    
 $_SESSION['yapino']=$yapino;  
    
    
    
    
    
    if ($result = $conn -> query("SELECT * FROM yapikayit where yapikayit.isdeleted !=1")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

      $verilermx[]=$row['yapino'].",".$row['ilce'].",".$row['mahalle'].",".$row['sokak'].",".$row['blok'].",".$row['kat'].",".$row['kapino'];
      
}
     
  $result -> free_result();
}
    
    
     
function tekillestir($dizi) {
    // Dizinin içeriğini kontrol etmek için bir geçici dizi oluştur
    $geciciDizi = array();

    // Diziyi döngüye alarak tekrarlanan öğeleri tekilleştir
    foreach ($dizi as $eleman) {
        // Eğer eleman daha önce eklenmemişse, geçici diziye ekle
        if (!in_array($eleman, $geciciDizi)) {
            $geciciDizi[] = $eleman;
        }
    }

    // Tekilleştirilmiş diziyi döndür
    return $geciciDizi;
}
    $verilerm=tekillestir($verilermx); 
   $kontroldegiskeni=0;
  for($i=0;$i<count($verilerm);$i++){
      
      if($yapimulkbilgileri===$verilerm[$i])
      {
          $kontroldegiskeni=1;
          break;
      }
      
  }  
    
 if ($kontroldegiskeni == 0) {
   
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Gönderilen veriler veri tabanında bulunmamaktadır. Mülk sorgusu sırasında sisteme müdahale edilmiştir. Sistem Yöneticisi ile görüşün. </z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   
}    
 
    
?>
    

<!-------------------------------------------------------->
 
<br>
              <br>
     <div class="parentmain2">
    <div class="options">
      <div class="container"> 
           <div class="row">
          
              <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:16px;">MÜLK KAYIT SAYFASI</label>
              
          </div>
          <button id="toggleButton">Yapı Bilgilerini Göster/Gizle</button>
          <div id="myDiv" style="display:none;">
          
          <div class="row">
              <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:14px;">Yapı Bilgileri</label>
          </div>

           <div class="row">
            <div class="col-25">
              <label for="yapino" style="font-weight:bolder"><?php echo $yapino." Numaralı Yapı";?></label>
            </div>
          </div>
          <hr>
           <div class="row">
            <div class="col-25">
              <label for="adresolustur" style="font-weight:bolder">Adres Bilgileri</label>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-25">
              <label for="ulke" style="font-weight:bolder">Ülke</label>
            </div>
            <div class="col-75">
               <input type="text" name="ulke" class="form-control" id="ulke"  value="<?php echo $ulke;?>" readonly style="background-color:#DCDCDC;"> 
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="ilce" style="font-weight:bolder">İlçe</label>
            </div>
            <div class="col-75">
               <input type="text" name="ilce" class="form-control" id="ilce"  value="<?php echo $ilce;?>" readonly style="background-color:#DCDCDC;"> 
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="mahalle" style="font-weight:bolder">Mahalle</label>
            </div>
            <div class="col-75">
               
               <div id="inputFieldsContainer">
             <input type="text" name="mahalle" class="form-control" id="mahalle" value="<?php echo $mahalle;?>" readonly style="background-color:#DCDCDC;"> 
        </div>
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="sokak" style="font-weight:bolder">Sokak</label>
            </div>
            <div class="col-75">
              <div id="inputFieldsContainer">
             <input type="text" name="sokak" class="form-control" id="sokak"  value="<?php echo $sokak;?>" readonly style="background-color:#DCDCDC;">   
        </div>
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="projeadi" style="font-weight:bolder">Proje Adı</label>
            </div>
            <div class="col-75">
              <input type="text" id="projeadi" name="projeadi" class="form-control"  value="<?php echo $projeadi;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="siteadi" style="font-weight:bolder">Site Adı *</label>
            </div>
            <div class="col-75">
              <input type="text" id="siteadi" name="siteadi" class="form-control" value="<?php echo $siteadi;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="blok" style="font-weight:bolder">Blok</label>
            </div>
            <div class="col-75">
              <input type="text" id="blok" name="blok" class="form-control"   value="<?php echo $blok;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
          <br>
           <br>
            <div class="row">
            <div class="col-25">
              <label for="adresolustur" style="font-weight:bolder">Daire Bilgileri</label>
            </div>
          </div>
           <hr>
            <div class="row">
            <div class="col-25">
              <label for="kat" style="font-weight:bolder">Kat</label>
            </div>
            <div class="col-75">
              <input type="number" id="kat" name="kat" class="form-control"  value="<?php echo $kat;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
             <div class="row">
            <div class="col-25">
              <label for="kapino" style="font-weight:bolder">Kapı No</label>
            </div>
            <div class="col-75">
              <input type="number" id="kapino" name="kapino" class="form-control" value="<?php echo $kapino;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="mulktip1" style="font-weight:bolder">Mülk Tip 1</label>
            </div>
            <div class="col-75">
               <input type="text" name="mulktip1" class="form-control" id="mulktip1"  value="<?php echo $mulktip1;?>" readonly style="background-color:#DCDCDC;"> 
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="mulktip2" style="font-weight:bolder">Mülk Tip 2</label>
            </div>
            <div class="col-75">
             <input type="text" name="mulktip2" class="form-control" id="mulktip2"  value="<?php echo $mulktip2;?>" readonly style="background-color:#DCDCDC;"> 
            </div>
          </div>
              <div class="row">
            <div class="col-25">
              <label for="postakodu" style="font-weight:bolder">Posta Kodu</label>
            </div>
            <div class="col-75">
              <input type="number" id="postakodu" name="postakodu" class="form-control"  value="<?php echo $postakodu;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="cephe" style="font-weight:bolder">Cephe</label>
            </div>
            <div class="col-75">
               <input type="text" name="cephe" class="form-control" id="cephe"  value="<?php echo $cephe;?>" readonly style="background-color:#DCDCDC;"> 
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="alan" style="font-weight:bolder">Alan (m2)</label>
            </div>
            <div class="col-75">
              <input type="number" id="alan" name="alan" class="form-control"  value="<?php echo $alan;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="salonadet" style="font-weight:bolder">Salon Adet</label>
            </div>
            <div class="col-75">
              <input type="number" id="salonadet" name="salonadet" class="form-control" value="<?php echo $salonadet;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="odaadet" style="font-weight:bolder">Oda Adet</label>
            </div>
            <div class="col-75">
              <input type="number" id="odaadet" name="odaadet" class="form-control" value="<?php echo $odaadet;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="banyoadet" style="font-weight:bolder">Banyo Adet</label>
            </div>
            <div class="col-75">
              <input type="number" id="banyoadet" name="banyoadet" class="form-control"  value="<?php echo $banyoadet;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
          
          
          </div>
          <br>
          <hr>
        <form  id="busers" action="/mulkkayityapinoaction.php" method="post" onsubmit="return validatecallForm()" enctype="multipart/form-data">
          <div class="row">
            <div class="col-25">
              <label for="adresolustur" style="font-weight:bolder">Mülk Sahibi Bilgilerini Giriniz</label>
            </div>
          </div>
          <hr>
           <input type="text" id="yapino" name="yapino" class="form-control" value="<?php echo $yapino;?>" required="required" style="display:none;">
           <input type="text" id="siteadix" name="siteadix" class="form-control" value="<?php echo $siteadi;?>" required="required" style="display:none;">
            <div class="row">
            <div class="col-25">
              <label for="kiralamadurumu" style="font-weight:bolder">Kiralama Durumu *</label>
            </div>
            <div class="col-75">
               <select name="kiralamadurumu" id="kiralamadurumu" class="form-control" required="required">
                  <option></option>
                  <option>AÇIK</option>
                  <option>KAPALI</option>
                  <option>KİRALANMIŞ</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="ulke" style="font-weight:bolder">Ad Soyad *</label>
            </div>
            <div class="col-75">
               <input type="text" id="adsoyad" name="adsoyad" class="form-control" pattern="[A-Za-zöÖçÇşŞıIİğĞüÜ\s\/\\\-_.;:,?&* ]{1,80}" maxlength="80" title="Sadece harf ve bazı özel karakterler girilebilir." required="required">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="iletisim1" style="font-weight:bolder">İletişim No 1 *</label>
            </div>
            <div class="col-75">
              <input type="text" id="iletisim1" name="iletisim1" style="font-weight:bolder" required="required" maxlength="11" title="11 haneli olarak giriniz. 05XXXXXXXXX">
              <small class="form-text text-muted">
                11 haneli olarak giriniz. 05XXXXXXXXX
              </small>
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="iletisim2" style="font-weight:bolder">İletişim No 2 </label>
            </div>
            <div class="col-75">
              <input type="text" id="iletisim2" name="iletisim2" style="font-weight:bolder" maxlength="11" title="11 haneli olarak giriniz. 05XXXXXXXXX">
              <small class="form-text text-muted">
                11 haneli olarak giriniz. 05XXXXXXXXX
              </small>
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="kimlikno" style="font-weight:bolder">Kimlik No *</label>
            </div>
            <div class="col-75">
               <input type="text" id="kimlikno" name="kimlikno" class="form-control" pattern="[A-Za-zöÖçÇşŞıIİğĞüÜ\s\/\\\-_.;:,?&*0-9 ]{1,80}" maxlength="30" title="Sadece harf ve bazı özel karakterler girilebilir." required="required">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="email" style="font-weight:bolder">E-mail Adresi *</label>
            </div>
            <div class="col-75">
              <input type="text" id="email" name="email" style="font-weight:bolder" required="required" maxlength="40">
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="uyruk" style="font-weight:bolder">Uyruk *</label>
            </div>
            <div class="col-75">
               <select name="uyruk" id="uyruk" class="form-control" required="required">
                  <option></option>
                  <option>KKTC</option>
                  <option>TC</option>
                  <option>DİĞER</option>
              </select>
            </div>
          </div>
           
            <div class="row">
            <div class="col-25">
              <label for="msozelnot" style="font-weight:bolder">Özel Not (Max 500 karakter)</label>
            </div>
            <div class="col-75">
             <textarea id="msozelnot" name="msozelnot" maxlength="500"></textarea>  
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="aktifkocan" style="font-weight:bolder">Aktif Koçan *</label>
            </div>
            <div class="col-75">
             <input type="file" name="aktifkocan" id="aktifkocan" class="custom-file-input" accept=".pdf,.jpg,.png" required="required"> 
            </div>
          </div>
          <hr>
           <div class="row">
            <div class="col-25">
              <label for="adresolustur" style="font-weight:bolder">Diğer Mülk Bilgilerini Giriniz</label>
            </div>
          </div>
          <hr>
          
           <div class="row">
            <div class="col-25">
              <label for="guncelaidat" style="font-weight:bolder">Aidat (Aylık) *</label>
              <br>
              <label for="esyalistesi" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
            </div>
            <div class="col-75">
             <input type="text" id="guncelaidat" name="guncelaidat" class="form-control" pattern="\d+(\.\d{1,2})?" maxlength="20" title="Sadece sayı veya ondalık sayı girilebilir." required="required">
            </div>
            </div>
            
            
            <div class="row">
            <div class="dosya-alani2" style="display:none;">
            <div class="col-25" >
              <label for="aidatparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <select name="aidatparabirimi" id="aidatparabirimi" class="form-control">
                  <option></option>
                 <!-- <option>TL</option>
                  <option>EURO</option>
                  <option>DOLAR</option>-->
                  <option>STERLIN</option>
              </select>
            </div>
          </div>
           </div>
            </div>
            
            
           
            <div class="row">
            <div class="col-25" >
              <label for="aidatsurekliligi" style="font-size:14px;font-weight:bolder">Aidat Sürekliliği Var Mı? * </label>
              </div>
            <div class="col-75" style="max-width:250px;">
             <select name="aidatsurekliligi" id="aidatsurekliligi" class="form-control" required="required">
                  <option></option>
                  <option>EVET</option>
                  <option>HAYIR</option>
              </select>
            </div>
          
            </div>
            
            
            
             <div class="row">
            <div class="col-25">
              <label for="kirabedeli" style="font-weight:bolder">Kira Bedeli (Aylık) *</label>
              <br>
              <label for="kirabedeli" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
            </div>
            <div class="col-75">
             <input type="text" id="kirabedeli" name="kirabedeli" class="form-control" pattern="\d+(\.\d{1,2})?" maxlength="20" title="Sadece sayı veya ondalık sayı girilebilir." required="required">
            </div>
            </div>
            
            
            <div class="row">
            <div class="dosya-alani" style="display:none;">
            <div class="col-25" >
              <label for="kirabedeliparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <select name="kirabedeliparabirimi" id="kirabedeliparabirimi" class="form-control">
                  <option></option>
                  <!--<option>TL</option>
                  <option>EURO</option>
                  <option>DOLAR</option>-->
                  <option>STERLIN</option>
              </select>
            </div>
          </div>
           </div>
            </div>
            <hr>
             <div class="row">
            <div class="col-25">
              <label for="maxkirainoran" style="font-weight:bolder">Maksimum Kira İndirim Oranı (%) *</label>
            </div>
            <div class="col-75">
              <input type="number" id="maxkirainoran" name="maxkirainoran" class="form-control" min="0" step="0.01" max="100" required="required">
            </div>
          </div>
            <hr>
           <div class="row">
            <div class="col-25">
              <label for="esyalistesi" style="font-weight:bolder">Eşya Listesi </label>
              <br>
              <label for="esyalistesi" style="font-size:11px;font-weight:bolder">Birden Fazla Dosya CTRL ile seçilebilir.</label>
            </div>
            <div class="col-75">
             <input type="file" name="esyalistesi[]" id="esyalistesi" class="custom-file-input" accept=".pdf,.jpg,.png" multiple onchange="showSelectedFiles4(this)">
             <br><div id="fileNames4"></div> 
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-25">
              <label for="ekbelgeyukle" style="font-weight:bolder">Ek Belge Yükle </label>
              <br>
              <label for="esyalistesi" style="font-size:11px;font-weight:bolder">Birden Fazla Dosya CTRL ile seçilebilir.</label>
            </div>
            <div class="col-75">
             <input type="file" name="ekbelgeyukle[]" id="ekbelgeyukle" class="custom-file-input" accept=".pdf,.jpg,.png" multiple onchange="showSelectedFiles3(this)">
             <br><div id="fileNames3"></div> 
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-25">
              <label for="susahiplik" style="font-weight:bolder">Su Sahiplik Bilgisi *</label>
            </div>
            <div class="col-75">
               <select name="susahiplik" id="susahiplik" class="form-control" required="required">
                  <option></option>
                  <option>KİRACI</option>
                  <option>EV SAHİBİ</option>
                  <option>DİĞER</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="elektriksahiplik" style="font-weight:bolder">Elektrik Sahiplik Bilgisi *</label>
            </div>
            <div class="col-75">
               <select name="elektriksahiplik" id="elektriksahiplik" class="form-control" required="required">
                  <option></option>
                  <option>KİRACI</option>
                  <option>EV SAHİBİ</option>
                  <option>DİĞER</option>
              </select>
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="mulkozelnot" style="font-weight:bolder">Mülk Özel Not (Max 500 karakter)</label>
            </div>
            <div class="col-75">
             <textarea id="mulkozelnot" name="mulkozelnot" maxlength="500"></textarea>  
            </div>
          </div>
            <br>
            <br>
          <div class="row">
            <input type="submit" name="submit" id="onaybutton" value="Onayla ve Mülk Oluştur">
          </div>
        </form>
        
          
          
          
        </div>
    </div>
</div>
 
 

          <!---Bullury div--->
<div id="loadingOverlay">
  <div id="loadingImage"></div>
</div>


<script>
     var myDiv = document.getElementById("myDiv");
        var toggleButton = document.getElementById("toggleButton");

        toggleButton.addEventListener("click", function() {
            if (myDiv.style.display === "none" || myDiv.style.display === "") {
                myDiv.style.display = "block"; // Div'i görünür yap
            } else {
                myDiv.style.display = "none"; // Div'i gizle
            }
        });
    
    
       function validatecallForm()  {
          
     let phone1 = document.forms["busers"]["iletisim1"].value;
     let email = document.forms["busers"]["email"].value;
     let msozelnot = document.forms["busers"]["msozelnot"].value;  
     let mulkozelnot = document.forms["busers"]["mulkozelnot"].value;
           
  if(document.forms["busers"]["iletisim2"].value!=""){         
  let phone2 = document.forms["busers"]["iletisim2"].value;           
  phone2=phone2.trim(phone2); 
      if (!validatePhoneNumber(phone2)){
                     alert("Hatalı telefon numarası girilmiştir. Uygun formatta giriniz.");
                     document.getElementById("iletisim2").value = '';
                     document.getElementById("iletisim2").focus();
            return false;
    }
       }
           
email=email.trim(email);
phone1=phone1.trim(phone1);
           
          
    if (!ValidateEmail(email)){
                     alert("Hatalı email adresi girilmiştir. Uygun formatta giriniz.");
                     document.getElementById("email").value = '';
                     document.getElementById("email").focus();
            return false;
    }
    
        
            if (!validatePhoneNumber(phone1)){
                     alert("Hatalı telefon numarası girilmiştir. Uygun formatta giriniz.");
                     document.getElementById("iletisim1").value = '';
                     document.getElementById("iletisim1").focus();
            return false;
    }
           
        
         var pattern = /^[A-Za-zöÖçÇşŞıIİğĞüÜ\s\/\\\-_.;:,?&*0-9 ]{1,500}$/;
  if (!pattern.test(msozelnot)) {
    alert("Özel Not içeriğinde sistemin kabul etmediği özel karakterler var. Onları silip yeniden deneyiniz.");
                     document.getElementById("msozelnot").value = '';
                     document.getElementById("msozelnot").focus();
            return false;
  } 
           
             if (!pattern.test(mulkozelnot)) {
    alert("Özel Not içeriğinde sistemin kabul etmediği özel karakterler var. Onları silip yeniden deneyiniz.");
                     document.getElementById("mulkozelnot").value = '';
                     document.getElementById("mulkozelnot").focus();
            return false;
  } 

    
           
let fileInput4 = document.getElementById('aktifkocan');
if (fileInput4.value.trim() != "") {
  var tapuyer4 = null;
  var dosyaAdi4 = fileInput4.value;
  // Dosya uzantısını al
  var dosyaUzantisi4 = dosyaAdi4.split('.').pop().toLowerCase();
  //alert(dosyaUzantisi4);
  // Geçerli uzantıları kontrol et
 
  if (dosyaUzantisi4 === "jpg" || dosyaUzantisi4 === "pdf" || dosyaUzantisi4 === "png") {
    // Uzantı destekleniyorsa herhangi bir işlem yapmanıza gerek yok.
  } else {
    tapuyer4 = fileInput4.value + " dosyası desteklenmeyen bir türdedir.";
    alert(tapuyer4); // Hatanın nerede olduğunu görmek için ekrana basıyoruz.
    fileInput4.focus(); // Hata olduğunda inputa odaklanması için
    return false;
  }
  
}
   
      /*******************************************/ 
   
document.getElementById("loadingOverlay").style.display = "block";
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
    

     function showSelectedFiles3(input) {
        var fileNamesDiv = document.getElementById("fileNames3");
        fileNamesDiv.innerHTML = "";

        if (input.files && input.files.length > 0) {
            for (var i = 0; i < input.files.length; i++) {
                var fileName = input.files[i].name;
                var p = document.createElement("p");
                p.textContent = fileName;
                fileNamesDiv.appendChild(p);
            }
        } else {
            var p = document.createElement("p");
            p.textContent = "No files selected";
            fileNamesDiv.appendChild(p);
        }
    }
    
    
     function showSelectedFiles4(input) {
        var fileNamesDiv = document.getElementById("fileNames4");
        fileNamesDiv.innerHTML = "";

        if (input.files && input.files.length > 0) {
            for (var i = 0; i < input.files.length; i++) {
                var fileName = input.files[i].name;
                var p = document.createElement("p");
                p.textContent = fileName;
                fileNamesDiv.appendChild(p);
            }
        } else {
            var p = document.createElement("p");
            p.textContent = "No files selected";
            fileNamesDiv.appendChild(p);
        }
    }
    
    
    
    $(document).ready(function () {
    // Başvuru Tipi seçildiğinde kontrol etmek için
    $('#kirabedeli').change(function () {
      if ($(this).val() !== "") {
        $('.dosya-alani').show();
          $('#kirabedeliparabirimi').prop('required', true);
         /* $('#projevizenumarasi').prop('required', false);
          $('#ktmmobvizeno').prop('required', true);
          $('#insaatdosyanum').prop('required', true);
          $('#mimarivizenumarasi').prop('required', false);*/
      } else {
        $('.dosya-alani').hide();
           $('#kirabedeliparabirimi').prop('required', false);
         /* $('#projevizenumarasi').prop('required', false);
           $('#ktmmobvizeno').prop('required', false);
          $('#insaatdosyanum').prop('required', false);
          $('#mimarivizenumarasi').prop('required', false);*/
      }
    });

    // Sayfa yüklendiğinde kontrol etmek için
    $('#kirabedeli').trigger('change');
  }); 
    
    
        $(document).ready(function () {
    // Başvuru Tipi seçildiğinde kontrol etmek için
    $('#guncelaidat').change(function () {
      if ($(this).val() !== "") {
        $('.dosya-alani2').show();
          $('#aidatparabirimi').prop('required', true);
         /* $('#projevizenumarasi').prop('required', false);
          $('#ktmmobvizeno').prop('required', true);
          $('#insaatdosyanum').prop('required', true);
          $('#mimarivizenumarasi').prop('required', false);*/
      } else {
        $('.dosya-alani2').hide();
           $('#aidatparabirimi').prop('required', false);
         /* $('#projevizenumarasi').prop('required', false);
           $('#ktmmobvizeno').prop('required', false);
          $('#insaatdosyanum').prop('required', false);
          $('#mimarivizenumarasi').prop('required', false);*/
      }
    });

    // Sayfa yüklendiğinde kontrol etmek için
    $('#guncelaidat').trigger('change');
  }); 
    
    
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