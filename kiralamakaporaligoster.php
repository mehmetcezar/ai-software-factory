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
           if($_POST['itemid']==NULL){
        Notdevam();
    }
    else
    {
      $kiralamaid=$_POST['itemid'];
        $kiralamaid=trim($kiralamaid);
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


if ($result = $conn -> query("SELECT * FROM mulkkayit where  mulkkayit.company_id = '{$_SESSION['company_id']}' AND mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulknoid'")) {
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
    
    

    
if ($result = $conn -> query("SELECT * FROM yapikayit where  yapikayit.company_id = '{$_SESSION['company_id']}' AND yapikayit.isdeleted !=1 AND yapikayit.id='$yapino'")) {
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
  

if ($result = $conn -> query("SELECT * FROM kirakaporakayit where  kirakaporakayit.company_id = '{$_SESSION['company_id']}' AND kirakaporakayit.isdeleted !=1 AND kirakaporakayit.mulkno='$mulknoid'")) {
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

    
if ($result = $conn -> query("SELECT * FROM kiralamakayit where  kiralamakayit.company_id = '{$_SESSION['company_id']}' AND kiralamakayit.isdeleted !=1 AND kiralamakayit.id='$kiralamaid' AND kiralamakayit.kaporaid IS NOT NULL")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
        $kiralamaid=$row['id'];
        $stopajvergisi=$row['stopajvergisi'];
        $kirabedeli=$row['kirabedeli'];
        $kirabedeliparabirimi = $row['kirabedeliparabirimi'];
        $kirasuresi = $row['kirasuresi'];
        $kiraodemebicimi = $row['kiraodemebicimi'];
        $depozitobedeli = $row['depozitobedeli'];
        $depozitobedeliparabirimi = $row['depozitobedeliparabirimi'];
        $odenendepozito = $row['odenendepozito'];
        $depozitovadesayisi = $row['depozitovadesayisi'];
        $komisyon = $row['komisyon'];
        $komisyonbedeli = $row['komisyonbedeli'];
        $komisyonbedeliparabirimi = $row['komisyonbedeliparabirimi'];
        $komisyontahsili = $row['komisyontahsili'];
        $ilktaksitmiktari = $row['ilktaksitmiktari'];
        $toplamkirabedeli = $row['toplamkirabedeli'];
        $kiralamaozelnot = $row['kiralamaozelnot'];
}
     
  $result -> free_result();
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
          
              <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:16px;">KİRALAMA BİLGİLERİ SAYFASI- KAPORALI</label>
              
          </div>
            <br>

          <div class="row">
            <div class="col-25">
              <label for="adresolustur" style="font-weight:bolder">Kiralama Bilgileri </label>
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="stopajvergisi" style="font-weight:bolder">Stopaj Vergisi </label>
            </div>
            <div class="col-75">
               <select name="stopajvergisi" id="stopajvergisi" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option><?php echo $stopajvergisi;?></option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="kirabedeli" style="font-weight:bolder">Kiralama Bedeli *</label>
               <label for="kirabedeli" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
            </div>
            <div class="col-75">
               <input type="text" id="kirabedeli" name="kirabedeli" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $kirabedeli;?>">
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
          <div class="row">
            <div class="col-25">
              <label for="kirasuresi" style="font-weight:bolder">Kiralama Süresi (AY) *</label>
            </div>
            <div class="col-75">
               <input type="number" id="kirasuresi" name="kirasuresi" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $kirasuresi;?>">
            </div>
          </div>
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
          <div class="row">
            <div class="col-25">
              <label for="depozitobedeli" style="font-weight:bolder">Depozito Bedeli *</label>
              <label for="depozitobedeli" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
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
              <label for="odenendepozito" style="font-weight:bolder">Ödenen Depozito Bedeli *</label>
            </div>
            <div class="col-75">
               <input type="text" id="odenendepozito" name="odenendepozito" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $odenendepozito;?>">
            </div>
          </div>
          
          <div class="row">
            <div class="col-25">
              <label for="depozitovadesayisi" style="font-weight:bolder">Depozito Vade Sayısı (AY) *</label>
            </div>
            <div class="col-75">
               <input type="number" id="depozitovadesayisi" name="depozitovadesayisi" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $depozitovadesayisi;?>">
            </div>
          </div>
            
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
             <select name="komisyonbedeliparabirimi" id="dkomisyonbedeliparabirimi" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option><?php echo $komisyonbedeliparabirimi;?></option>
              </select>
            </div>
          </div>
           </div>
           <div class="row">
            <div class="col-25">
              <label for="komisyontahsili" style="font-weight:bolder">Komisyon Tahsili *</label>
            </div>
            <div class="col-75">
               <select name="komisyontahsili" id="komisyontahsili" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option><?php echo $komisyontahsili;?></option>
              </select>
            </div>
          </div>
            
           <div class="row">
            <div class="col-25">
              <label for="kiralamaozelnot" style="font-weight:bolder">Özel Not (Max 500 karakter)</label>
            </div>
            <div class="col-75">
             <textarea id="kiralamaozelnot" name="kiralamaozelnot" readonly style="background-color:#DCDCDC;"><?php echo $kiralamaozelnot;?></textarea>  
            </div>
          </div>
            <br>
         <div class="row" id="hiderow">
  <input name="iptal" type="submit" id="iptal" value="Geri Git" onclick="anamenu()" style="background:green;"/>

        </div>
          
         
        
          
          
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