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
        window.location.href = "https://whitelotustest.online/kiralama.php";
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
    
    
    /*************Değişkenleri kontrol et**************/              
         if($_POST['yapimulkbilgileri']==NULL){
        Notdevam();
    }
    else
    {
      $yapimulkbilgileri=$_POST['yapimulkbilgileri'];
        $yapimulkbilgileri=trim($yapimulkbilgileri);
    }  
    
          if($_POST['mulkid']==NULL){
        Notdevam();
    }
    else
    {
      $mulkid=$_POST['mulkid'];
        $mulkid=trim($mulkid);
    } 
    /*
    echo $mulkid."<br>";
    echo $yapimulkbilgileri;
    exit();
    */
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


if ($result = $conn -> query("SELECT * FROM mulkkayit where mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulkid'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
        $adsoyad=$row['adsoyad'];
        $iletisim1 = $row['iletisim1'];
        $iletisim2 = $row['iletisim2'];
        $kimlikno = $row['kimlikno'];
        $email = $row['email'];
        $uyruk = $row['uyruk'];
        $msozelnot = $row['msozelnot'];
        $aktifkocan = $row['aktifkocan'];
        $guncelaidat = $row['guncelaidat'];
        $aidatparabirimi = $row['aidatparabirimi'];
        $esyalistesi = $row['esyalistesi'];
        $ekbelgeyukle = $row['ekbelgeyukle'];
        $susahiplik = $row['susahiplik'];
        $elektriksahiplik = $row['elektriksahiplik'];
        $mulkozelnot = $row['mulkozelnot'];  
        $mulkno = $row['id'];
        $yapino = $row['yapino'];
    
}
     
  $result -> free_result();
}  
    
    

    
if ($result = $conn -> query("SELECT * FROM yapikayit where yapikayit.isdeleted !=1 AND yapikayit.id='$yapino'")) {
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
           
}
     
  $result -> free_result();
} 
  

if ($result = $conn -> query("SELECT * FROM kirakaporakayit where kirakaporakayit.isdeleted !=1 AND kirakaporakayit.mulkno='$mulkid'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
        $kaporaid=$row['id'];
        $adsoyadkap=$row['adsoyad'];
        $kimliknokap = $row['kimlikno'];
        $kimliktipikap = $row['kimliktipi'];
        $emailkap = $row['email'];
        $uyrukkap = $row['uyruk'];
        $iletisim1kap = $row['iletisim1'];
        $iletisim2kap = $row['iletisim2'];
        $kapozelnot = $row['kapozelnot'];
        $kaporamiktari = $row['kaporamiktari'];
        $kaporaparabirimi = $row['kaporaparabirimi'];
        $kaporateslimtarihi = $row['kaporateslimtarihi'];
        $kaporakirabelge = $row['kaporakirabelge'];
        
    
}
     
  $result -> free_result();
}  

    
    if ($result = $conn -> query("SELECT * FROM mulkkayit where mulkkayit.isdeleted !=1")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

      $verilermx[]=$row['id'].",".$row['adsoyad'].",".$row['kimlikno'].",".$row['iletisim1'].",".$row['email'].",".$row['uyruk'].",".$row['yapino'];
      
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
   
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Gönderilen veriler veri tabanında bulunmamaktadır. Sorgu sırasında sisteme müdahale edilmiştir. Sistem Yöneticisi ile görüşün. </z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   
}    
 
    
?>
    

<!-------------------------------------------------------->
    <script>
        let kaporamiktari = <?php echo json_encode($kaporamiktari); ?>;
        let kaporaparabirimi = <?php echo json_encode($kaporaparabirimi); ?>;
        
        
            function hesaplakiralama() {
        // Input alanlarından sayıları al
var kirabedeli = document.getElementById("kirabedeli").value;
    var kirabedeliparabirimi = document.getElementById("kirabedeliparabirimi").value;
var kirasuresi = document.getElementById("kirasuresi").value;//number
var kiraodemebicimi = document.getElementById("kiraodemebicimi").value;
              
var depozitobedeli = document.getElementById("depozitobedeli").value;
var depozitobedeliparabirimi = document.getElementById("depozitobedeliparabirimi").value;              
              
var odenendepozito = document.getElementById("odenendepozito").value;           var depozitovadesayisi = document.getElementById("depozitovadesayisi").value; //number   
  

              
kirabedeli=kirabedeli.trim();
depozitobedeli=depozitobedeli.trim();
odenendepozito=odenendepozito.trim();
        
    let lines = []; 
     let checkbit=0;           
                
      line1="Kira Bedeli: " + kirabedeli + " " + kirabedeliparabirimi; 
      line2="Kira Süresi: " + kirasuresi + " " + "Ay";
                
         if(kiraodemebicimi!="" && kirasuresi!="" && kirabedeliparabirimi!="")       
      {
        if(kirasuresi<parseInt(kiraodemebicimi, 10))
          {
              alert("Kira Süresi kira ödeme biçiminden küçük olamaz.");
              document.getElementById("kiraodemebicimi").value='';
              document.getElementById("kirabedeli").value='';
              checkbit=1;
          }
        if(kirasuresi % parseInt(kiraodemebicimi, 10) !==0)
          {
              alert("Kira Süresi kira ödeme biçimi uyumlu değildir.");
              document.getElementById("kiraodemebicimi").value='';
              document.getElementById("kirabedeli").value='';
              checkbit=1;
          } 
          
          if(kaporaparabirimi === kirabedeliparabirimi)
           {
      line6="İlk Taksit Miktarı (Kapora Çıkarıldı): " + Math.ceil((kirabedeli-kaporamiktari)*100)/100 + " " + kirabedeliparabirimi;
               document.getElementById("ilktaksitmiktari").value=Math.ceil((kirabedeli-kaporamiktari)*100)/100;
           }else
               {
                 checkbit=1;
                   alert("Kira ve alınan kaporanın para birimi uyuşmamaktadır. gerekli güncellemeleri yaptıktan sonra tekrar deneyiniz.");
                   document.getElementById("kirabedeliparabirimi").value='';
                   document.getElementById("kiraodemebicimi").value='';
                   document.getElementById("kirabedeli").value='';
               }
          
          
          if(Math.ceil((kirabedeli-kaporamiktari)*100)/100<0){
              checkbit=1;
                   alert("Alınan kapora ilk taksit miktarından fazla olamaz..");
                   document.getElementById("kirabedeliparabirimi").value='';
                   document.getElementById("kiraodemebicimi").value='';
                   document.getElementById("kirabedeli").value='';
          }
          
      }
                
      if(kiraodemebicimi==="1")          
      {line3="Kira Ödeme Biçimi: " + "Her Ay";
       line4="Toplam Kira Miktarı: " + Math.ceil((kirabedeli*(kirasuresi/kiraodemebicimi))*100)/100 +" "+kirabedeliparabirimi ;
       document.getElementById("toplamkirabedeli").value=Math.ceil((kirabedeli*(kirasuresi/kiraodemebicimi))*100)/100;
      }
       if(kiraodemebicimi==="3")          
      {line3="Kira Ödeme Biçimi: " + "Her Üç Ayda Bir";
      line4="Toplam Kira Miktarı: " + Math.ceil((kirabedeli*(kirasuresi/kiraodemebicimi))*100)/100 +" "+kirabedeliparabirimi ;
       document.getElementById("toplamkirabedeli").value=Math.ceil((kirabedeli*(kirasuresi/kiraodemebicimi))*100)/100;
      }         
        if(kiraodemebicimi==="6")          
      {line3="Kira Ödeme Biçimi: " + "Her Altı Ayda Bir";
      line4="Toplam Kira Miktarı: " + Math.ceil((kirabedeli*(kirasuresi/kiraodemebicimi))*100)/100 +" "+kirabedeliparabirimi ;
       document.getElementById("toplamkirabedeli").value=Math.ceil((kirabedeli*(kirasuresi/kiraodemebicimi))*100)/100;
      }         
      if(kiraodemebicimi==="12")          
      {line3="Kira Ödeme Biçimi: " + "Her Oniki Ayda Bir";
      line4="Toplam Kira Miktarı: " + Math.ceil((kirabedeli*(kirasuresi/kiraodemebicimi))*100)/100 +" "+kirabedeliparabirimi ;
       document.getElementById("toplamkirabedeli").value=Math.ceil((kirabedeli*(kirasuresi/kiraodemebicimi))*100)/100;
      }
      
      line5="Kapora Miktarı: " + kaporamiktari + " " + kaporaparabirimi;        
                
       
     
    if(kiraodemebicimi!="" && kirasuresi!="" && kirabedeli!="" && kirabedeliparabirimi!="" && checkbit==0)
        {
    lines.push(line1);
    lines.push(line2);
    lines.push(line3);
    lines.push(line4);
    lines.push(line5);        
    lines.push(line6);        
    let contentDiv = document.getElementById("contentxx");

    let formattedString = lines.join("<br>");

    contentDiv.innerHTML = formattedString;
        }
                else
                    {
    
    let contentDiv = document.getElementById("contentxx");

    let formattedString = "";

    contentDiv.innerHTML = formattedString;    
                    }
                    
        }
    
    </script>
<br>
              <br>
     <div class="parentmain2">
    <div class="options">
      <div class="container"> 
           <div class="row">
          
              <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:16px;">KİRALAMA GİRİŞ SAYFASI- KAPORALI</label>
              
          </div>
          <button id="toggleButton">Yapı/Mülk/Kapora Bilgilerini Göster/Gizle</button>
          <div id="myDiv" style="display:none;">
          
          <div class="row">
              <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:14px;">Yapı Bilgileri</label>
          </div>

           <div class="row">
            <div class="col-25">
              <label for="yapinox" style="font-weight:bolder"><?php echo $yapino." Numaralı Yapı";?></label>
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

          <br>
          <hr>
          <div class="row">
              <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:14px;">Mülk Bilgileri</label>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="yapino" style="font-weight:bolder"><?php echo $mulkno." Numaralı Mülk";?></label>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-25">
              <label for="ulke" style="font-weight:bolder">Ad Soyad</label>
            </div>
            <div class="col-75">
               <input type="text" id="adsoyadx" name="adsoyadx" class="form-control" value="<?php echo $adsoyad;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="iletisim1" style="font-weight:bolder">İletişim No 1</label>
            </div>
            <div class="col-75">
              <input type="text" id="iletisim1x" name="iletisim1x" class="form-control" value="<?php echo $iletisim1;?>" readonly style="background-color:#DCDCDC;">
              
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="iletisim2" style="font-weight:bolder">İletişim No 2 </label>
            </div>
            <div class="col-75">
              <input type="text" id="iletisim2x" name="iletisim2x" class="form-control"value="<?php echo $iletisim2;?>" readonly style="background-color:#DCDCDC;">
              
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="kimlikno" style="font-weight:bolder">Kimlik No</label>
            </div>
            <div class="col-75">
               <input type="text" id="kimliknox" name="kimliknox" class="form-control"value="<?php echo $kimlikno;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="email" style="font-weight:bolder">E-mail Adresi</label>
            </div>
            <div class="col-75">
              <input type="text" id="emailx" name="emailx" class="form-control" value="<?php echo $email;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="uyruk" style="font-weight:bolder">Uyruk</label>
            </div>
            <div class="col-75">
                <input type="text" id="uyrukx" name="uyrukx" class="form-control" value="<?php echo $uyruk;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
           
            <div class="row">
            <div class="col-25">
              <label for="msozelnot" style="font-weight:bolder">Özel Not </label>
            </div>
            <div class="col-75">
             <textarea id="msozelnot" name="msozelnot" class="form-control" readonly style="background-color:#DCDCDC;"><?php echo $msozelnot;?></textarea>  
            </div>
          </div>
              <div class="row">
            <div class="col-25">
              <label for="aktifkocan" style="font-weight:bolder">Aktif Koçan *</label>
            </div>
            <div class="col-75">
                    <?php 
          $counter=1;   
$aktifkocanayri= explode(";", $aktifkocan);
$lastIndex = count($aktifkocanayri) - 1;

if (empty($aktifkocanayri[$lastIndex])) {
    unset($aktifkocanayri[$lastIndex]);
}

$aktifkocanayri = array_values($aktifkocanayri);
foreach($aktifkocanayri as $aktifkocanx){
echo '<br>';    
echo '<label>'.$counter.'-'.'Aktif Koçan Dosyası</label>'; 
echo '<a href="?dosya='.$aktifkocanx.'">Dosyayı İndir</a>';
    echo '<br>';
    echo '<button class="preview-button" data-file="'.$aktifkocanx.'">Önizleme</button>';
    echo '<br><br>';
    $counter++;
   
}?>
 
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="guncelaidat" style="font-weight:bolder">Güncel Aidat </label>
            </div>
            <div class="col-75">
             <input type="text" id="guncelaidat" name="guncelaidat" class="form-control"  value="<?php echo $guncelaidat;?>" readonly style="background-color:#DCDCDC;">
            </div>
            </div>
            <div class="row">
            <div class="col-25" >
              <label for="aidatparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <input type="text" id="aidatparabirimi" name="aidatparabirimi" class="form-control" value="<?php echo $aidatparabirimi;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>

            </div>
            <hr>
                     <div class="row">
            <div class="col-25">
              <label for="esyalistesi" style="font-weight:bolder">Eşya Listesi </label>
              <br>
            </div>
            <div class="col-75">
                             <?php 
          $counter=1;   
$esyalistesiayri= explode(";", $esyalistesi);
$lastIndex = count($esyalistesiayri) - 1;

if (empty($esyalistesiayri[$lastIndex])) {
    unset($esyalistesiayri[$lastIndex]);
}

$esyalistesiayri = array_values($esyalistesiayri);
foreach($esyalistesiayri as $esyalistesix){
echo '<br>';    
echo '<label>'.$counter.'-'.'Eşya Listesi Dosyaları</label>';
    echo '<br>';
echo '<a href="?dosya='.$esyalistesix.'">Dosyayı İndir</a>';
    echo '<br><br>';
    echo '<button class="preview-button" data-file="'.$esyalistesix.'">Önizleme</button>';
    echo '<br>';
    $counter++;
   
}
            
                
                ?> 

            </div>
          </div>
          <hr>
           <div class="row">
            <div class="col-25">
              <label for="ekbelgeyukle" style="font-weight:bolder">Ek Belge Yükle </label>
              <br>
            </div>
            <div class="col-75">
                                         <?php 
          $counter=1;   
$ekbelgeyukleayri= explode(";", $ekbelgeyukle);
$lastIndex = count($ekbelgeyukleayri) - 1;

if (empty($ekbelgeyukleayri[$lastIndex])) {
    unset($ekbelgeyukleayri[$lastIndex]);
}

$eekbelgeyukleayri = array_values($ekbelgeyukleayri);
foreach($ekbelgeyukleayri as $ekbelgeyuklex){
echo '<br>';    
echo '<label>'.$counter.'-'.'Ek Belge Dosyaları</label>';
    echo '<br>';
echo '<a href="?dosya='.$ekbelgeyuklex.'">Dosyayı İndir</a>';
    echo '<br><br>';
    echo '<button class="preview-button" data-file="'.$ekbelgeyuklex.'">Önizleme</button>';
    echo '<br>';
    $counter++;
   
}
           
                
                ?> 
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-25">
              <label for="susahiplik" style="font-weight:bolder">Su Sahiplik Bilgisi</label>
            </div>
            <div class="col-75">
               <input type="text" id="susahiplik" name="susahiplik" class="form-control" value="<?php echo $susahiplik;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="elektriksahiplik" style="font-weight:bolder">Elektrik Sahiplik Bilgisi</label>
            </div>
            <div class="col-75">
               <input type="text" id="elektriksahiplik" name="elektriksahiplik" class="form-control" value="<?php echo $elektriksahiplik;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="mulkozelnot" style="font-weight:bolder">Mülk Özel Not</label>
            </div>
            <div class="col-75">
             <textarea id="mulkozelnot" name="mulkozelnot" class="form-control" readonly style="background-color:#DCDCDC;"><?php echo $mulkozelnot;?></textarea>    
            </div>
          </div>
            <br>

  
         
          <hr>
          <div class="row">
              <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:14px;">Kapora Bilgileri</label>
          </div>
            <br>
          <hr>
          <div class="row">
            <div class="col-25">
              <label for="kaporaid" style="font-weight:bolder"><?php echo $kaporaid." Numaralı Kapora";?></label>
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
              <label for="kaporamiktari" style="font-weight:bolder">Kapora Miktarı * </label>
              <br>
            </div>
            <div class="col-75">
             <input type="text" id="kaporamiktari" name="kaporamiktari" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $kaporamiktari;?>">
            </div>
            </div>
            <div class="row">
            <div class="dosya-alani" style="display:none;">
            <div class="col-25" >
              <label for="kaporaparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <select name="kaporaparabirimi" id="kaporaparabirimi" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option><?php echo $kaporaparabirimi;?></option>
              </select>
            </div>
          </div>
           </div>
            </div>
          <div class="row">
            <div class="col-25">
              <label for="kaporateslimtarihi" style="font-weight:bolder">Kapora Teslim Tarihi *</label>
            </div>
            <div class="col-75">
              <input type="date" id="kaporateslimtarihi" name="kaporateslimtarihi" style="font-weight:bolder" readonly style="background-color:#DCDCDC;" value="<?php echo $kaporateslimtarihi;?>">
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

if (empty($ekaporakirabelgeayri[$lastIndex])) {
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
              <label for="kapozelnot" style="font-weight:bolder">Özel Not (Max 500 karakter)</label>
            </div>
            <div class="col-75">
             <textarea id="kapozelnot" name="kapozelnot" readonly style="background-color:#DCDCDC;"><?php echo $kapozelnot;?></textarea>  
            </div>
          </div>
          <hr>
          
           </div><!--DISPLAY  NONE-->
          
          
          <br>
            <br>
        <form  id="busers" action="/kiralamakaporaliaction.php" method="post" onsubmit="return validatecallForm()" enctype="multipart/form-data">
          <div class="row">
            <div class="col-25">
              <label for="adresolustur" style="font-weight:bolder">Kiralamaya Ait Bilgileri Giriniz</label>
            </div>
          </div>
          <hr>
           <input type="text" id="mulkno" name="mulkno" class="form-control" value="<?php echo $mulkno;?>" required="required" style="display:none;">
           <input type="text" id="yapino" name="yapino" class="form-control" value="<?php echo $yapino;?>" required="required" style="display:none;">
           <input type="text" id="kaporaid" name="kaporaid" class="form-control" value="<?php echo $kaporaid;?>" required="required" style="display:none;">
            <!-- Hidden inputs to store calculated values -->
        <input type="hidden" id="toplamkirabedeli" name="toplamkirabedeli">
        <input type="hidden" id="ilktaksitmiktari" name="ilktaksitmiktari">
           <div class="row">
            <div class="col-25">
              <label for="stopajvergisi" style="font-weight:bolder">Stopaj Vergisi </label>
            </div>
            <div class="col-75">
               <select name="stopajvergisi" id="stopajvergisi" class="form-control">
                  <option></option>
                  <option>ÖDENDİ</option>
                  <option>ÖDEME BEKLİYOR</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="kirabedeli" style="font-weight:bolder">Kiralama Bedeli *</label>
               <label for="kirabedeli" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
            </div>
            <div class="col-75">
               <input type="text" id="kirabedeli" name="kirabedeli" class="form-control" pattern="\d+(\.\d{1,2})?" maxlength="20" title="Sadece sayı veya ondalık sayı girilebilir." required="required">
            </div>
          </div>
           <div class="row">
            <div class="dosya-alani2" style="display:none;">
            <div class="col-25" >
              <label for="kirabedeliparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <select name="kirabedeliparabirimi" id="kirabedeliparabirimi" class="form-control">
                  <option></option>
                  <option>TL</option>
                  <option>EURO</option>
                  <option>DOLAR</option>
                  <option>STERLIN</option>
              </select>
            </div>
          </div>
           </div>
            </div>
          <div class="row">
            <div class="col-25">
              <label for="kirasuresi" style="font-weight:bolder">Kiralama Süresi (AY) *</label>
            </div>
            <div class="col-75">
               <input type="number" id="kirasuresi" name="kirasuresi" class="form-control" min="1" max="60" required="required">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="kiraodemebicimi" style="font-weight:bolder">Kira Ödeme Biçimi *</label>
            </div>
            <div class="col-75">
               <select name="kiraodemebicimi" id="kiraodemebicimi" class="form-control" required="required">
                  <option></option>
                  <option value="1">HER AY</option>
                  <option value="3">HER ÜÇ AYDA BİR</option>
                  <option value="6">HER ALTI AYDA BİR</option>
                  <option value="12">HER ONİKİ AYDA BİR</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="depozitobedeli" style="font-weight:bolder">Depozito Bedeli *</label>
              <label for="depozitobedeli" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
            </div>
            <div class="col-75">
               <input type="text" id="depozitobedeli" name="depozitobedeli" class="form-control" pattern="\d+(\.\d{1,2})?" maxlength="20" title="Sadece sayı veya ondalık sayı girilebilir." required="required">
            </div>
          </div>
          <div class="row">
            <div class="dosya-alani3" style="display:none;">
            <div class="col-25" >
              <label for="depozitobedeliparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <select name="depozitobedeliparabirimi" id="depozitobedeliparabirimi" class="form-control">
                  <option></option>
                  <option>TL</option>
                  <option>EURO</option>
                  <option>DOLAR</option>
                  <option>STERLIN</option>
              </select>
            </div>
          </div>
           </div>
            </div>
            <div class="row">
            <div class="col-25">
              <label for="odenendepozito" style="font-weight:bolder">Ödenen Depozito Bedeli *</label>
            </div>
            <div class="col-75">
               <input type="text" id="odenendepozito" name="odenendepozito" class="form-control" pattern="\d+(\.\d{1,2})?" maxlength="20" title="Sadece sayı veya ondalık sayı girilebilir." required="required">
            </div>
          </div>
          <div class="dosya-alani4" style="display:none;">
          <div class="row">
            <div class="col-25">
              <label for="depozitovadesayisi" style="font-weight:bolder">Depozito Vade Sayısı (AY) *</label>
            </div>
            <div class="col-75">
               <input type="number" id="depozitovadesayisi" name="depozitovadesayisi" class="form-control" min="1" max="12">
            </div>
          </div>
            </div>
            <div class="row">
            <div class="col-25">
              <label for="komisyon" style="font-weight:bolder">Komisyon *</label>
            </div>
            <div class="col-75">
               <select name="komisyon" id="komisyon" class="form-control" required="required">
                  <option></option>
                  <option>VAR</option>
                  <option>YOK</option>
              </select>
            </div>
          </div>
          <div class="dosya-alani5" style="display:none;">
           <div class="row">
            <div class="col-25">
              <label for="komisyonbedeli" style="font-weight:bolder">Komisyon Bedeli *</label>
              <label for="komisyonbedeli" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
            </div>
            <div class="col-75">
               <input type="text" id="komisyonbedeli" name="komisyonbedeli" class="form-control" pattern="\d+(\.\d{1,2})?" maxlength="20" title="Sadece sayı veya ondalık sayı girilebilir.">
            </div>
          </div>
          <div class="row">
            
            <div class="col-25" >
              <label for="komisyonbedeliparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <select name="komisyonbedeliparabirimi" id="dkomisyonbedeliparabirimi" class="form-control">
                  <option></option>
                  <option>TL</option>
                  <option>EURO</option>
                  <option>DOLAR</option>
                  <option>STERLIN</option>
              </select>
            </div>
          </div>
           </div>
           <div class="row">
            <div class="col-25">
              <label for="komisyontahsili" style="font-weight:bolder">Komisyon Tahsili *</label>
            </div>
            <div class="col-75">
               <select name="komisyontahsili" id="komisyontahsili" class="form-control">
                  <option></option>
                  <option>TAHSİL EDİLDİ</option>
                  <option>TAHSİL EDİLMEDİ</option>
              </select>
            </div>
          </div>
            </div> 
           <div class="row">
            <div class="col-25">
              <label for="kiralamaozelnot" style="font-weight:bolder">Özel Not (Max 500 karakter)</label>
            </div>
            <div class="col-75">
             <textarea id="kiralamaozelnot" name="kiralamaozelnot" maxlength="500"></textarea>  
            </div>
          </div>
            <br>
            <br>
            
          
         <div class="row">
            <div class="col-25">
            </div>
            <div class="col-75">
                <div id="contentxx"></div> 
            </div>
          </div>
              <br>
         <br>
          <div class="row">
            <input type="submit" name="submit" id="onaybutton" value="Onayla ve Kiralama Yap">
          </div>
        </form>
          
          
         
        
          
          
        </div>
    </div>
</div>
 
              <!--- PRIVIEW CONTAİNER ----->

 <div class="preview-container">
    <span class="preview-close">&times;</span>
    <div class="preview-content"></div>
  </div> 

          <!---Bullury div--->
<div id="loadingOverlay">
  <div id="loadingImage"></div>
</div>


<script>
    

          document.getElementById("kirabedeli").addEventListener("change", function() {
hesaplakiralama();
});
          document.getElementById("kirasuresi").addEventListener("change", function() {
hesaplakiralama();
});    
           document.getElementById("kiraodemebicimi").addEventListener("change", function() {
hesaplakiralama();
}); 
    
    document.getElementById("kirabedeliparabirimi").addEventListener("change", function() {
hesaplakiralama();
}); 
    
    
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
          
     
     let kapozelnot = document.forms["busers"]["kiralamaozelnot"].value;  
     let kirabedeli = document.forms["busers"]["kirabedeli"].value;
             
           
    if(kirabedeli==="0"){
        alert("Kira bedeli Sıfır girilmiştir. Lütfen farklı bir değer giriniz.");
                     document.getElementById("kirabedeli").value = '';
                     document.getElementById("kirabedeli").focus();
            return false;
    }
        
         var pattern = /^[A-Za-zöÖçÇşŞıIİğĞüÜ\s\/\\\-_.;:,?&*0-9 ]{1,500}$/;
  if (!pattern.test(kapozelnot)) {
    alert("Özel Not içeriğinde sistemin kabul etmediği özel karakterler var. Onları silip yeniden deneyiniz.");
                     document.getElementById("kiralamaozelnot").value = '';
                     document.getElementById("kiralamaozelnot").focus();
            return false;
  } 
           
           
   
           
           
           
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
    $('#kaporamiktari').change(function () {
      if ($(this).val() !== "") {
        $('.dosya-alani').show();
          $('#kaporaparabirimi').prop('required', true);
         /* $('#projevizenumarasi').prop('required', false);dat
          $('#ktmmobvizeno').prop('required', true);
          $('#insaatdosyanum').prop('required', true);
          $('#mimarivizenumarasi').prop('required', false);*/
      } else {
        $('.dosya-alani').hide();
           $('#kaporaparabirimi').prop('required', false);
         /* $('#projevizenumarasi').prop('required', false);
           $('#ktmmobvizeno').prop('required', false);
          $('#insaatdosyanum').prop('required', false);
          $('#mimarivizenumarasi').prop('required', false);*/
      }
    });

    // Sayfa yüklendiğinde kontrol etmek için
    $('#kaporamiktari').trigger('change');
        
        
        $('#kirabedeli').change(function () {
      if ($(this).val() !== "") {
        $('.dosya-alani2').show();
          $('#kirabedeliparabirimi').prop('required', true);
         /* $('#projevizenumarasi').prop('required', false);dat
          $('#ktmmobvizeno').prop('required', true);
          $('#insaatdosyanum').prop('required', true);
          $('#mimarivizenumarasi').prop('required', false);*/
      } else {
        $('.dosya-alani2').hide();
           $('#kirabedeliparabirimi').prop('required', false);
         /* $('#projevizenumarasi').prop('required', false);
           $('#ktmmobvizeno').prop('required', false);
          $('#insaatdosyanum').prop('required', false);
          $('#mimarivizenumarasi').prop('required', false);*/
      }
    });

    // Sayfa yüklendiğinde kontrol etmek için
    $('#kirabedeli').trigger('change');
        
        
        
        
            $('#depozitobedeli').change(function () {
      if ($(this).val() !== "") {
        $('.dosya-alani3').show();
          $('#depozitobedeliparabirimi').prop('required', true);
         /* $('#projevizenumarasi').prop('required', false);dat
          $('#ktmmobvizeno').prop('required', true);
          $('#insaatdosyanum').prop('required', true);
          $('#mimarivizenumarasi').prop('required', false);*/
      } else {
        $('.dosya-alani3').hide();
           $('#depozitobedeliparabirimi').prop('required', false);
         /* $('#projevizenumarasi').prop('required', false);
           $('#ktmmobvizeno').prop('required', false);
          $('#insaatdosyanum').prop('required', false);
          $('#mimarivizenumarasi').prop('required', false);*/
      }
                
                
      if($(this).val() !== parseFloat($('#odenendepozito').val())){
          $('.dosya-alani4').show();
          $('#depozitovadesayisi').prop('required', true);
      } else
          {
             $('.dosya-alani4').hide();
              $('#depozitovadesayisi').prop('required', false);
          }
                
                
    });
        
        

    // Sayfa yüklendiğinde kontrol etmek için
    $('#depozitobedeli').trigger('change');   
        
        
        
        
    $('#odenendepozito').change(function () {
       
      if(parseFloat($('#odenendepozito').val()) < parseFloat($('#depozitobedeli').val())){
          $('.dosya-alani4').show();
          $('#depozitovadesayisi').prop('required', true);
      } else
          {
             $('.dosya-alani4').hide();
              $('#depozitovadesayisi').prop('required', false);
              $('#depozitovadesayisi').val('');
          }
                
                
    });
        
        

    // Sayfa yüklendiğinde kontrol etmek için
    $('#odenendepozito').trigger('change'); 
        
        
        
$('#komisyon').change(function () {
       
      if($(this).val() === "VAR"){
          $('.dosya-alani5').show();
          $('#komisyonbedeli').prop('required', true);
          $('#komisyonbedeliparabirimi').prop('required', true);
          $('#komisyontahsili').prop('required', true);
      } else
          {
          $('.dosya-alani5').hide();
          $('#komisyonbedeli').prop('required', false);
          $('#komisyonbedeliparabirimi').prop('required', false);
          $('#komisyontahsili').prop('required', false);
          }
                
                
    });
        
        

    // Sayfa yüklendiğinde kontrol etmek için
    $('#komisyon').trigger('change'); 
        
        
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