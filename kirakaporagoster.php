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
        window.location.href = "https://whitelotustest.online/kiralamaportal.php";
    }
            function anamenu(){
        window.history.back();
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
$pageid="pasifgorme"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.  
    
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
        if($_POST['kirakaporasonkey']==NULL){
        Notdevam();
    }
    else
    {
      $kaporaid=$_POST['kirakaporasonkey'];
        $kaporaid=trim($kaporaid);
    }  
    
    //echo $kaporaid."<br>";
    //echo $yapimulkbilgileri;
    //exit();
    
    ?>

<!-------------------------------------------------------->
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

  

if ($result = $conn -> query("SELECT * FROM kirakaporakayit where  kirakaporakayit.company_id = '{$_SESSION['company_id']}' AND kirakaporakayit.isdeleted !=1 AND kirakaporakayit.kirakey='$kaporaid'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
        //$kaporaid=$row['id'];
        $adsoyadkap=$row['adsoyad'];
        $kimliknokap = $row['kimlikno'];
        $kimliktipikap = $row['kimliktipi'];
        $emailkap = $row['email'];
        $uyrukkap = $row['uyruk'];
        $iletisim1kap = $row['iletisim1'];
        $iletisim2kap = $row['iletisim2'];
        $kapozelnot = $row['kapozelnot'];
        $kaporamiktari = $row['kaporamiktari'];
        $topalkaporamiktari = $row['topalkaporamiktari'];
        $kaporaparabirimi = $row['kaporaparabirimi'];
        $kaporateslimtarihi = $row['kaporateslimtarihi'];
        
        $kaporakirabelge = $row['kaporakirabelge'];
        $kaporakirabelgeektahsil = $row['kaporakirabelgeektahsil'];
        $mulkno=$row['mulkno'];
        $kirabedeli = $row['kirabedeli'];
        $kirabedeliparabirimi = $row['kirabedeliparabirimi'];
        $kirasuresi = $row['kirasuresi'];
        $kiraodemebicimi = $row['kiraodemebicimi'];
    
       $depozitobedeli = $row['depozitobedeli'];
        $depozitobedeliparabirimi = $row['depozitobedeliparabirimi'];
        $odenendepozito = $row['odenendepozito'];
        //$depozitovadesayisi = $row['depozitovadesayisi'];
        $komisyon = $row['komisyon'];
        $komisyonbedeli = $row['komisyonbedeli'];
        $komisyonbedeliparabirimi = $row['komisyonbedeliparabirimi'];
        $aidat = $row['aidat'];
        $aidatbedeli = $row['aidatbedeli'];
        $aidatbedeliparabirimi = $row['aidatbedeliparabirimi'];
      $aidatodemebicimi = $row['aidatodemebicimi'];
        //$komisyontahsili = $row['komisyontahsili'];
        $ilktaksitmiktari = $row['ilktaksitmiktari'];
        $toplamkirabedeli = $row['toplamkirabedeli'];
            $ksname=$row['ksname'];
      $kssurname=$row['kssurname'];
      $acente=$row['acente'];
   
            $buayaidat=$row['buayaidat'];
      $subedeli = $row['subedeli'];
$subedeliparabirimi = $row['subedeliparabirimi'];
$suodemebicimi = $row['suodemebicimi'];
$hizmet = $row['hizmet'];
$hizmetbedeli = $row['hizmetbedeli'];
$hizmetbedeliparabirimi = $row['hizmetbedeliparabirimi'];
$hizmetodemebicimi = $row['hizmetodemebicimi'];
      
$internet = $row['internet'];
$internetbedeli = $row['internetbedeli'];
$internetbedeliparabirimi = $row['internetbedeliparabirimi'];
$internetodemebicimi = $row['internetodemebicimi'];      
}
     
  $result -> free_result();
}  

    
if ($result = $conn -> query("SELECT kirakaporasontarih FROM mulkkayit where mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulkno'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
        $kirakaporasontarih = $row['kirakaporasontarih'];
    
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
          
              <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:16px;">KİRA KAPORA BİLGİLERİ</label>
              
          </div>
          <div class="row">
              <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:14px;">Kapora Bilgileri</label>
          </div>
            <br>
          <hr>
          <div class="row">
            <div class="col-25">
              <label for="kaporaid" style="font-weight:bolder"><?php echo $mulkno." Numaralı Mülke Ait Kapora";?></label>
            </div>
          </div>
          
           <div class="row">
            <div class="col-25">
              <label for="ksname" style="font-weight:bolder">Kapora İşlemini Yapan Kiralama Sorumlusu</label>
            </div>
            <div class="col-75">
                <input type="text" id="ksname" name="ksname" class="form-control" value="<?php echo $ksname." ".$kssurname;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
          
           <div class="row">
            <div class="col-25">
              <label for="acente" style="font-weight:bolder">Acente</label>
            </div>
            <div class="col-75">
                <input type="text" id="acente" name="acente" class="form-control" value="<?php echo $acente;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
          
          <hr>
           <div class="row">
            <div class="col-25">
              <label for="kaporatip" style="font-weight:bolder">Kapora Tipi: <?php echo " KİRALAMA";?></label>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="ulke" style="font-weight:bolder">Ad Soyad *</label>
            </div>
            <div class="col-75">
               <input type="text" id="adsoyad" name="adsoyad" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $adsoyadkap;?>">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="kimlikno" style="font-weight:bolder">Kimlik No *</label>
            </div>
            <div class="col-75">
               <input type="text" id="kimlikno" name="kimlikno" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $kimliknokap;?>">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="kimliktipi" style="font-weight:bolder">Kimlik Tipi *</label>
            </div>
            <div class="col-75">
               <select name="kimliktipi" id="kimliktipi" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option><?php echo $kimliktipikap;?></option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="uyruk" style="font-weight:bolder">Uyruk *</label>
            </div>
            <div class="col-75">
               <select name="uyruk" id="uyruk" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option><?php echo $uyrukkap;?></option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="email" style="font-weight:bolder">E-mail Adresi *</label>
            </div>
            <div class="col-75">
              <input type="text" id="email" name="email" readonly style="background-color:#DCDCDC;" value="<?php echo $emailkap;?>">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="iletisim1" style="font-weight:bolder">İletişim No 1 *</label>
            </div>
            <div class="col-75">
              <input type="text" id="iletisim1" name="iletisim1" readonly style="background-color:#DCDCDC;" value="<?php echo $iletisim1kap;?>">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="iletisim2" style="font-weight:bolder">İletişim No 2 </label>
            </div>
            <div class="col-75">
              <input type="text" id="iletisim2" name="iletisim2" readonly style="background-color:#DCDCDC;" value="<?php echo $iletisim2kap;?>">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="kaporamiktari" style="font-weight:bolder">Tahsil Edilen Kapora Miktarı * </label>
              <br>
            </div>
            <div class="col-75">
             <input type="text" id="kaporamiktari" name="kaporamiktari" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $kaporamiktari;?>">
            </div>
            </div>
             <div class="row">
            <div class="col-25">
              <label for="topalkaporamiktari" style="font-weight:bolder">Toplam Tahsil Edilecek Kapora Miktarı * </label>
              <br>
            </div>
            <div class="col-75">
             <input type="text" id="topalkaporamiktari" name="topalkaporamiktari" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $topalkaporamiktari;?>">
            </div>
            </div>
            <div class="row">
            
            <div class="col-25" >
              <label for="kaporaparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <select name="kaporaparabirimi" id="kaporaparabirimi" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option><?php echo $kaporaparabirimi;?></option>
              </select>
            </div>
          </div>
           
            </div>
          <div class="row">
            <div class="col-25">
              <label for="kaporateslimtarihi" style="font-weight:bolder">Kapora Teslim Tarihi *</label>
            </div>
            <div class="col-75">
              <input type="date" id="kaporateslimtarihi" name="kaporateslimtarihi"  readonly style="background-color:#DCDCDC;" value="<?php echo $kaporateslimtarihi;?>">
            </div>
          </div>
            <hr>
            <div class="row">
            <div class="col-25">
              <label for="kirakaporasontarih" style="font-weight:bolder">Kaporanın Geçerli Olduğu Son Tarih </label>
            </div>
            <div class="col-75">
              <input type="date" id="kirakaporasontarih" name="kirakaporasontarih"  readonly style="background-color:#DCDCDC;" value="<?php echo $kirakaporasontarih;?>">
            </div>
          </div>
            <hr>
          <div class="row">
            <div class="col-25">
              <label for="kaporabelge" style="font-weight:bolder">Kapora Belge *</label>
              <br>
            </div>
               <div class="col-75">
                             <?php 
          $counter=1;   
$kaporakirabelgeayri= explode(";", $kaporakirabelge);
$lastIndex = count($kaporakirabelgeayri) - 1;

if (empty($kaporakirabelgeayri[$lastIndex])) {
    unset($kaporakirabelgeayri[$lastIndex]);
}

$kaporakirabelgeayri = array_values($kaporakirabelgeayri);
foreach($kaporakirabelgeayri as $kaporakirabelgex){
echo '<br>';    
echo '<label>'.$counter.'-'.'Kapora Dosyaları</label>';
    echo '<br>';
echo '<a href="?dosya='.$kaporakirabelgex.'">Dosyayı İndir</a>';
    echo '<br><br>';
    echo '<button class="preview-button" data-file="'.$kaporakirabelgex.'">Önizleme</button>';
    echo '<br>';
    $counter++;
   
}
          
                
                ?> 

            </div>
          </div>
          
          
                      <hr>
          <div class="row">
            <div class="col-25">
              <label for="kaporakirabelgeektahsil" style="font-weight:bolder">Kapora Ek Tahsilat Belgeleri *</label>
              <br>
            </div>
               <div class="col-75">
                             <?php 
          $counter=1;   
$kaporakirabelgeektahsilayri= explode(";", $kaporakirabelgeektahsil);
$lastIndex = count($kaporakirabelgeektahsilayri) - 1;

if (empty($kaporakirabelgeektahsilayri[$lastIndex])) {
    unset($kaporakirabelgeektahsilayri[$lastIndex]);
}

$kaporakirabelgeektahsilayri = array_values($kaporakirabelgeektahsilayri);
foreach($kaporakirabelgeektahsilayri as $kaporakirabelgeektahsilx){
echo '<br>';    
echo '<label>'.$counter.'-'.'Kapora Dosyaları</label>';
    echo '<br>';
echo '<a href="?dosya='.$kaporakirabelgeektahsilx.'">Dosyayı İndir</a>';
    echo '<br><br>';
    echo '<button class="preview-button" data-file="'.$kaporakirabelgeektahsilx.'">Önizleme</button>';
    echo '<br>';
    $counter++;
   
}
          
                
                ?> 

            </div>
          </div>
          
          
           <hr>
           <div class="row">
            <div class="col-25">
              <label for="kirabedeli" style="font-weight:bolder">Kiralama Bedeli *(Aylık) </label>
            </div>
            <div class="col-75">
               <input type="text" id="kirabedeli" name="kirabedeli" class="form-control" value="<?php echo $kirabedeli;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
           <div class="row">
        
            <div class="col-25" >
              <label for="kirabedeliparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <select name="kirabedeliparabirimi" id="kirabedeliparabirimi" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option><?php echo $kirabedeliparabirimi;?></option>
              </select>
            </div>
          </div>
          
            </div>
          <hr>
           <div class="row">
            <div class="col-25">
              <label for="kirasuresi" style="font-weight:bolder">Kiralama Süresi (AY) *</label>
            </div>
            <div class="col-75">
               <input type="number" id="kirasuresi" name="kirasuresi" class="form-control" value="<?php echo $kirasuresi;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-25">
              <label for="kiraodemebicimi" style="font-weight:bolder">Kira Ödeme Biçimi *</label>
            </div>
            <div class="col-75">
               <select name="kiraodemebicimi" id="kiraodemebicimi" class="form-control" readonly style="background-color:#DCDCDC;">
                  <?php
                    if($kiraodemebicimi==1){
         $kiraodemebicimiyazi="HER AY";
     } 
    if($kiraodemebicimi==3){
         $kiraodemebicimiyazi="HER ÜÇ AYDA BİR";
     } 
      if($kiraodemebicimi==6){
         $kiraodemebicimiyazi="HER ALTI AYDA BİR";
     } 
        if($kiraodemebicimi==12){
         $kiraodemebicimiyazi="HER ONİKİ AYDA BİR";
     }
                   ?>
                  <option value="<?php echo $kiraodemebicimi;?>"><?php echo $kiraodemebicimiyazi;?></option>
              </select>
            </div>
          </div>
          <hr>
           
           
           
           
            <div class="row">
            <div class="col-25">
              <label for="depozitobedeli" style="font-weight:bolder">Depozito Bedeli *</label>
              <label for="depozitobedeli" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
              <label for="depozitobedeli" style="font-size:11px;font-weight:bolder">Kapora Depozitoya dahil edilmiştir/aktarılmıştır.</label>
            </div>
            <div class="col-75">
               <input type="text" id="depozitobedeli" name="depozitobedeli" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $depozitobedeli;?>">
            </div>
          </div>
          <div class="row">
            
            <div class="col-25" >
              <label for="depozitobedeliparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <select name="depozitobedeliparabirimi" id="depozitobedeliparabirimi" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option><?php echo $depozitobedeliparabirimi;?></option>

              </select>
            </div>
          </div>
           
            </div>
            <div class="row">
            <div class="col-25">
              <label for="odenendepozito" style="font-weight:bolder">Ödenecek Depozito Bedeli *</label>
              <label for="depozitobedeli" style="font-size:11px;font-weight:bolder">Kapora Depozitoya dahil edilmiştir/aktarılmıştır.</label>
            </div>
            <div class="col-75">
               <input type="text" id="odenendepozito" name="odenendepozito" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $odenendepozito;?>">
            </div>
          </div>
          <!--
          <div class="row">
            <div class="col-25">
              <label for="depozitovadesayisi" style="font-weight:bolder">Depozito Vade Sayısı (AY) *</label>
            </div>
            <div class="col-75">
               <input type="number" id="depozitovadesayisi" name="depozitovadesayisi" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php //echo $depozitovadesayisi;?>">
            </div>
          </div>
            -->
            <div class="row">
            <div class="col-25">
              <label for="komisyon" style="font-weight:bolder">Komisyon *</label>
            </div>
            <div class="col-75">
               <select name="komisyon" id="komisyon" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option><?php echo $komisyon;?></option>
              </select>
            </div>
          </div>
          
           <div class="row">
            <div class="col-25">
              <label for="komisyonbedeli" style="font-weight:bolder">Komisyon Bedeli *</label>
              <label for="komisyonbedeli" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
            </div>
            <div class="col-75">
               <input type="text" id="komisyonbedeli" name="komisyonbedeli" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $komisyonbedeli;?>">
            </div>
          </div>
          <div class="row">
            
            <div class="col-25" >
              <label for="komisyonbedeliparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <select name="komisyonbedeliparabirimi" id="komisyonbedeliparabirimi" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option><?php echo $komisyonbedeliparabirimi;?></option>
              </select>
            </div>
          </div>
           </div>
           <!--
           <div class="row">
            <div class="col-25">
              <label for="komisyontahsili" style="font-weight:bolder">Komisyon Tahsili *</label>
            </div>
            <div class="col-75">
               <select name="komisyontahsili" id="komisyontahsili" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option><?php //echo $komisyontahsili;?></option>
              </select>
            </div>
          </div>-->
            
               <div class="row">
            <div class="col-25">
              <label for="aidatbedeli" style="font-weight:bolder">Aidat Bedeli *</label>
              <label for="aidatbedeli" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
            </div>
            <div class="col-75">
               <input type="text" id="aidatbedeli" name="aidatbedeli" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $aidatbedeli;?>">
            </div>
          </div>
          <div class="row">
            
            <div class="col-25" >
              <label for="aidatbedeliparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <select name="aidatbedeliparabirimi" id="aidatbedeliparabirimi" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option><?php echo $aidatbedeliparabirimi;?></option>
              </select>
            </div>
          </div>
           </div>
            
             <div class="row">
            <div class="col-25">
              <label for="aidatodemebicimi" style="font-weight:bolder">Aidat Ödeme Biçimi *</label>
            </div>
            <div class="col-75">
               <select name="aidatodemebicimi" id="aidatodemebicimi" class="form-control" readonly style="background-color:#DCDCDC;">
                  <?php

                                   if($aidatodemebicimi==1){
         $aidatodemebicimiyazi="HER AY";
     } 
    if($aidatodemebicimi==3){
         $aidatodemebicimiyazi="HER ÜÇ AYDA BİR";
     } 
      if($aidatodemebicimi==6){
         $aidatodemebicimiyazi="HER ALTI AYDA BİR";
     } 
        if($aidatodemebicimi==12){
         $aidatodemebicimiyazi="HER ONİKİ AYDA BİR";
     }
                   
                   ?>
                  <option value="<?php echo $aidatodemebicimi;?>"><?php echo $aidatodemebicimiyazi;?></option>
              </select>
            </div>
          </div>
          
          
          <div class="row">
            <div class="col-25">
              <label for="buayaidat" style="font-weight:bolder">Bu Ay Aidat Tahsil Edilecek Mi? *</label>
            </div>
            <div class="col-75">
               <select name="buayaidat" id="buayaidat" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option><?php echo $buayaidat;?></option>
              </select>
            </div>
          </div>
           
          
           
            
            <div class="row">
    <div class="col-25">
        <label for="subedeli" style="font-weight:bolder">Su Bedeli *</label>
        <label for="subedeli" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
    </div>
    <div class="col-75">
        <input type="text" id="subedeli" name="subedeli" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $subedeli;?>">
    </div>
</div>
<div class="row">
    <div class="col-25">
        <label for="subedeliparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
    </div>
    <div class="col-75" style="max-width:250px;">
        <select name="subedeliparabirimi" id="subedeliparabirimi" class="form-control" readonly style="background-color:#DCDCDC;">
            <option><?php echo $subedeliparabirimi;?></option>
        </select>
    </div>
</div>
<div class="row">
    <div class="col-25">
        <label for="suodemebicimi" style="font-weight:bolder">Su Ödeme Biçimi *</label>
    </div>
    <div class="col-75">
        <select name="suodemebicimi" id="suodemebicimi" class="form-control" readonly style="background-color:#DCDCDC;">
            <?php
                if($suodemebicimi == 1){
                    $suodemebicimiyazi = "HER AY";
                } 
                if($suodemebicimi == 3){
                    $suodemebicimiyazi = "HER ÜÇ AYDA BİR";
                } 
                if($suodemebicimi == 6){
                    $suodemebicimiyazi = "HER ALTI AYDA BİR";
                } 
                if($suodemebicimi == 12){
                    $suodemebicimiyazi = "HER ONİKİ AYDA BİR";
                }
            ?>
            <option value="<?php echo $suodemebicimi;?>"><?php echo $suodemebicimiyazi;?></option>
        </select>
    </div>
</div>
 
              
               
 
 <div class="row">
    <div class="col-25">
        <label for="hizmetbedeli" style="font-weight:bolder">Hizmet Bedeli *</label>
        <label for="hizmetbedeli" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
    </div>
    <div class="col-75">
        <input type="text" id="hizmetbedeli" name="hizmetbedeli" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $hizmetbedeli;?>">
    </div>
</div>
<div class="row">
    <div class="col-25">
        <label for="hizmetbedeliparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
    </div>
    <div class="col-75" style="max-width:250px;">
        <select name="hizmetbedeliparabirimi" id="hizmetbedeliparabirimi" class="form-control" readonly style="background-color:#DCDCDC;">
            <option><?php echo $hizmetbedeliparabirimi;?></option>
        </select>
    </div>
</div>
<div class="row">
    <div class="col-25">
        <label for="hizmetodemebicimi" style="font-weight:bolder">Hizmet Ödeme Biçimi *</label>
    </div>
    <div class="col-75">
        <select name="hizmetodemebicimi" id="hizmetodemebicimi" class="form-control" readonly style="background-color:#DCDCDC;">
            <?php
                if($hizmetodemebicimi == 1){
                    $hizmetodemebicimiyazi = "HER AY";
                } 
                if($hizmetodemebicimi == 3){
                    $hizmetodemebicimiyazi = "HER ÜÇ AYDA BİR";
                } 
                if($hizmetodemebicimi == 6){
                    $hizmetodemebicimiyazi = "HER ALTI AYDA BİR";
                } 
                if($hizmetodemebicimi == 12){
                    $hizmetodemebicimiyazi = "HER ONİKİ AYDA BİR";
                }
            ?>
            <option value="<?php echo $hizmetodemebicimi;?>"><?php echo $hizmetodemebicimiyazi;?></option>
        </select>
    </div>
</div>
                
                  
          
     <div class="row">
    <div class="col-25">
        <label for="internetbedeli" style="font-weight:bolder">İnternet Bedeli *</label>
        <label for="internetbedeli" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
    </div>
    <div class="col-75">
        <input type="text" id="internetbedeli" name="internetbedeli" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $internetbedeli;?>">
    </div>
</div>
<div class="row">
    <div class="col-25">
        <label for="internetbedeliparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
    </div>
    <div class="col-75" style="max-width:250px;">
        <select name="internetbedeliparabirimi" id="internetbedeliparabirimi" class="form-control" readonly style="background-color:#DCDCDC;">
            <option><?php echo $internetbedeliparabirimi;?></option>
        </select>
    </div>
</div>
<div class="row">
    <div class="col-25">
        <label for="internetodemebicimi" style="font-weight:bolder">İnternet Ödeme Biçimi *</label>
    </div>
    <div class="col-75">
        <select name="internetodemebicimi" id="internetodemebicimi" class="form-control" readonly style="background-color:#DCDCDC;">
            <?php
                if($internetodemebicimi == 1){
                    $internetodemebicimiyazi = "HER AY";
                } 
                if($internetodemebicimi == 3){
                    $internetodemebicimiyazi = "HER ÜÇ AYDA BİR";
                } 
                if($internetodemebicimi == 6){
                    $internetodemebicimiyazi = "HER ALTI AYDA BİR";
                } 
                if($internetodemebicimi == 12){
                    $internetodemebicimiyazi = "HER ONİKİ AYDA BİR";
                }
            ?>
            <option value="<?php echo $internetodemebicimi;?>"><?php echo $internetodemebicimiyazi;?></option>
        </select>
    </div>
</div>      
          
          
          
          
          <hr>
            <div class="row">
            <div class="col-25">
              <label for="kapozelnot" style="font-weight:bolder">Özel Not (Max 500 karakter)</label>
            </div>
            <div class="col-75">
             <textarea id="kapozelnot" name="kapozelnot" readonly style="background-color:#DCDCDC;"><?php echo $kapozelnot;?></textarea>  
            </div>
          </div>
          <br>
          <hr>
       
         <div class="row" id="hiderow">
  <input name="iptal" type="submit" id="iptal" value="Geri Git" onclick="anamenu()" style="background:green;"/>

        </div>
    </div>
</div>
 
                 <!--- PRIVIEW CONTAİNER ----->

 <div class="preview-container">
    <span class="preview-close">&times;</span>
    <div class="preview-content"></div>
  </div>           

<script>
    
 // Function to show the right-side popup
    function showRightPopup() {
        var rightPopup = document.getElementById("rightPopup");
        rightPopup.style.display = "block";

        // Automatically hide the popup after 5 seconds
        setTimeout(function() {
            hideRightPopup();
        }, 5000);
    }

    // Function to hide the right-side popup
    function hideRightPopup() {
        var rightPopup = document.getElementById("rightPopup");
        rightPopup.style.display = "none";
    }
    
    
     function resizeImageToContainer(containerSelector, imageSelector) {
  const container = document.querySelector(containerSelector);
  const image = document.querySelector(imageSelector);

  if (!container || !image) {
    console.error('Container or image element not found!');
    return;
  }

  const containerWidth = container.offsetWidth;
  const containerHeight = container.offsetHeight;

  const imageWidth = image.naturalWidth;
  const imageHeight = image.naturalHeight;

  const containerAspectRatio = containerWidth / containerHeight;
  const imageAspectRatio = imageWidth / imageHeight;

  if (containerAspectRatio > imageAspectRatio) {
    image.style.width = '100%';
    image.style.height = 'auto';
  } else {
    image.style.width = 'auto';
    image.style.height = '100%';
  }
}

     
     $(document).ready(function() {

  $('.preview-button').click(function(event) {
    event.preventDefault(); // Form submitini engelle
    var file = $(this).data('file');
    var extension = file.substr(file.lastIndexOf('.') + 1).toLowerCase();

    if (extension === 'pdf') {
      window.open(file, '_blank');
    } else if (extension === 'jpg' || extension === 'jpeg' || extension === 'png') {
      $('.preview-content').html('<img src="' + file + '" alt="Dosya Önizleme">');
      jQuery('.preview-container').fadeIn();
        resizeImageToContainer('.preview-content img', '.preview-content');
    }else{
        showRightPopup();
    }
  });

  $('.preview-close').click(function() {
       $('.preview-content').empty();
    $('.preview-container').fadeOut();
   
  });
  
  // Dosya değiştiğinde önizlemeyi güncelle
  $('.custom-file-input').change(function() {
    var file = $(this).val();
    var extension = file.substr(file.lastIndexOf('.') + 1).toLowerCase();

    if (extension === 'jpg' || extension === 'jpeg' || extension === 'png') {
      $('.preview-content').html('<img src="' + file + '" alt="Dosya Önizleme">');
        resizeImageToContainer('.preview-content img', '.preview-content');
    } else {
      $('.preview-content').empty();
        
    }
  });
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