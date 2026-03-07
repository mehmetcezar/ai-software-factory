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
    if($_POST['mulkno']==NULL){
        Notdevam();
    }
    else
    {
      $mulknoid=$_POST['mulkno'];
    }  
    
          if($_POST['yapino']==NULL){
        Notdevam();
    }
    else
    {
      $yapino=$_POST['yapino'];
        
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

$kirakaporasonkey="";
if ($result = $conn -> query("SELECT * FROM mulkkayit where mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulknoid'")) {
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
        $kirakaporaeklendi=$row['kirakaporaeklendi'];
      
        //if($kirakaporaeklendi==1){
         $kirakaporasonkey=$row['kirakaporasonkey']; //kaporalı ve kaporasız yine aynı yere yazılır kiralama key  
        //}
        $belirlenmiskirabedeli=$row['kirabedeli'];
      $belirlenmiskirabedeliparabirimi=$row['kirabedeliparabirimi'];
      $belirlenmismaxkirainoran=$row['maxkirainoran'];
      $belirlenmisguncelaidat=$row['guncelaidat'];
      $belirlenmisaidatparabirimi=$row['aidatparabirimi'];    
      
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
  

if($kirakaporaeklendi==1){    
if ($result = $conn -> query("SELECT * FROM kirakaporakayit where kirakaporakayit.isdeleted !=1 AND kirakaporakayit.kirakey='$kirakaporasonkey'")) {
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
          $ksname=$row['ksname'];
      $kssurname=$row['kssurname'];
      $acente=$row['acente'];
    $kaporakirabelgeektahsil = $row['kaporakirabelgeektahsil'];
}
     
  $result -> free_result();
}  
}
    
if ($result = $conn -> query("SELECT * FROM kiralamakayit where kiralamakayit.isdeleted !=1 AND kiralamakayit.kiralamakey='$kirakaporasonkey'")) {
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
        $kiralamaozelnot = $row['kiralamaozelnot'];
      $kiralamatarihi= $row['kiralamatarihi'];
      $kiralamabitistarihi= $row['kiralamabitistarihi'];
      $aidatsontarih = $row['aidatsontarih'];
       $yonetimsoziste=$row['yonetimsoziste'];
        $yonetimsozbastarih=$row['yonetimsozbastarih'];
        $yonetimsozbittarih=$row['yonetimsozbittarih'];
      
      
              // Kapora
$kaporatahMiktar = $row['kaporatahMiktar'];
$kaporaPB = $row['kaporaPB'];
$kaporaTlRate = $row['kaporaTlRate'];
$kaporaToTlRate = $row['kaporaToTlRate'];
$kaporaSterling = $row['kaporaSterling'];

// Depozito
$depozitoMiktar = $row['depozitoMiktar'];
$depozitoPB = $row['depozitoPB'];
$depozitoTlRate = $row['depozitoTlRate'];
$depozitoToTlRate = $row['depozitoToTlRate'];
$depozitoSterling = $row['depozitoSterling'];

// Aidat
$aidatMiktar = $row['aidatMiktar'];
$aidatPB = $row['aidatPB'];
$aidatTlRate = $row['aidatTlRate'];
$aidatToTlRate = $row['aidatToTlRate'];
$aidatSterling = $row['aidatSterling'];

// Kira
$kiraMiktar = $row['kiraMiktar'];
$kiraPB = $row['kiraPB'];
$kiraTlRate = $row['kiraTlRate'];
$kiraToTlRate = $row['kiraToTlRate'];
$kiraSterling = $row['kiraSterling'];
      
// Kapora Belge Yolu
$kaporabelgepaths = $row['kaporabelgepaths'];

// Depozito Belge Yolu
$depozitobelgepaths = $row['depozitobelgepaths'];

// Aidat Belge Yolu
$aidatbelgepaths = $row['aidatbelgepaths'];

// Kira Belge Yolu
$kirabelgepaths = $row['kirabelgepaths']; 
 
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
   
            $tarihObjesi2 = DateTime::createFromFormat('Y-m-d', $yonetimsozbastarih);
$yonetimsozbastarihx = $tarihObjesi2->format('d-m-Y');
    
            $tarihObjesi3 = DateTime::createFromFormat('Y-m-d', $yonetimsozbittarih);
$yonetimsozbittarihx = $tarihObjesi3->format('d-m-Y'); 
    
?>
    

<!-------------------------------------------------------->
    <script>
        let kaporamiktari = <?php echo json_encode($kaporamiktari); ?>;
        let kaporaparabirimi = <?php echo json_encode($kaporaparabirimi); ?>;
        let kirakaporaeklendi = <?php echo json_encode($kirakaporaeklendi); ?>;
        let ekdepozitoodemesi;
        
          let belirlenmisaidatparabirimi = <?php echo json_encode($belirlenmisaidatparabirimi); ?>;
        let belirlenmisguncelaidat = <?php echo json_encode($belirlenmisguncelaidat); ?>;
        let belirlenmismaxkirainoran = <?php echo json_encode($belirlenmismaxkirainoran); ?>;
        let belirlenmiskirabedeliparabirimi = <?php echo json_encode($belirlenmiskirabedeliparabirimi); ?>;
        let belirlenmiskirabedeli = <?php echo json_encode($belirlenmiskirabedeli); ?>;
        
        
            function hesaplakiralama() {
        // Input alanlarından sayıları al
var kirabedeli = document.getElementById("kirabedeli").value;
    var kirabedeliparabirimi = document.getElementById("kirabedeliparabirimi").value;
var kirasuresi = document.getElementById("kirasuresi").value;//number
var kiraodemebicimi = document.getElementById("kiraodemebicimi").value;
              
var depozitobedeli = document.getElementById("depozitobedeli").value;
var depozitobedeliparabirimi = document.getElementById("depozitobedeliparabirimi").value;              
              
var odenendepozito = document.getElementById("odenendepozito").value;          // var depozitovadesayisi = document.getElementById("depozitovadesayisi").value; //number   
  

              
kirabedeli=kirabedeli.trim();
depozitobedeli=depozitobedeli.trim();
odenendepozito=odenendepozito.trim();
        
    let lines = []; 
     let checkbit=0;   
      let depocheckbit=0;          
                
        
       line6= "Aylık Belirlenmiş Kira Bedeli: " + belirlenmiskirabedeli+ " " + belirlenmiskirabedeliparabirimi;
      line7= "Aylık Belirlenmiş Maksimum İndirim Oranı (%): " + belirlenmismaxkirainoran;
      line8= "Aylık Belirlenmiş Aidat Bedeli: " + belirlenmisguncelaidat+ " " + belirlenmisaidatparabirimi;
                line10= "Aylık Minimum Kira Bedeli: " + Math.ceil((belirlenmiskirabedeli*(100-belirlenmismaxkirainoran)/100));
                ayminkirabedeli=Math.ceil((belirlenmiskirabedeli*(100-belirlenmismaxkirainoran)/100));
      line9= "<hr>";                    
                
                
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
          
          
          if(kirakaporaeklendi!=0){
          
              
              
              if(depozitobedeliparabirimi!="" && depozitobedeli!="" && odenendepozito!=""){
              if(kaporaparabirimi === depozitobedeliparabirimi)
           {
            depocheckbit=1;
               if(Math.ceil(depozitobedeli)>Math.ceil(kaporamiktari)){
                  
                   line12="Depozitoya sayılan kapora miktarı: " + Math.ceil(kaporamiktari) + " " + kaporaparabirimi;
                   
                   ekdepozitoodemesi=Math.ceil(depozitobedeli-kaporamiktari); 
                   if(document.getElementById("odenendepozito").value==ekdepozitoodemesi)
       {
        line13= "Depozitoya ek olarak alınacak ödeme miktarı: " + Math.ceil(depozitobedeli-kaporamiktari) + " " + kaporaparabirimi +"  "+"<span class='checkmark'>✔</span>";     
       }else
           {
            line13= "Depozitoya ek olarak alınacak ödeme miktarı: " + Math.ceil(depozitobedeli-kaporamiktari) + " " + kaporaparabirimi +"  "+"<span class='crossmark'>&cross;</span>"; 
                alert("Depozitoya ek olarak alınacak ödeme miktarı Yüksek veya Düşük miktar girilmiştir. Düzeltmeyi yaparak tekrar deneyiniz.");
             document.getElementById("odenendepozito").value='';  
           }
      
                   
                   
    
               }
               if(Math.ceil(depozitobedeli)<Math.ceil(kaporamiktari)){
                  line12="";
                 line13="";
            alert("Depozito miktarı kapora miktarından az olamaz. Gerekli güncellemeleri yaptıktan sonra tekrar deneyiniz.");
                   document.getElementById("depozitobedeli").value='';
                
               }
                if(Math.ceil(depozitobedeli)==Math.ceil(kaporamiktari)){
                  line12="Depozitoya sayılan kapora miktarı: " + Math.ceil(depozitobedeli) + " " + kaporaparabirimi;
                  line13=""; 
                    
                    
                   if(document.getElementById("odenendepozito").value==0)
       {
        line13= "Depozitoya ek olarak alınacak ödeme miktarı SIFIR dır. "+"<span class='checkmark'>✔</span>";     
       }else
           {
            line13= "Depozitoya ek olarak alınacak ödeme miktarı SIFIR dır. Ödenen depozito değerini SIFIR yapınız. "+"<span class='crossmark'>&cross;</span>"; 
               alert("Depozitoya ek olarak alınacak ödeme miktarı SIFIR dır. Ödenen depozito değerini SIFIR yapınız.");
             document.getElementById("odenendepozito").value='';  
           } 
                    
                    
               }
      
               
           }else
               {
                 checkbit=1;
                   alert("Kapora ve depozito para birimi uyuşmamaktadır. gerekli güncellemeleri yaptıktan sonra tekrar deneyiniz.");
                   document.getElementById("depozitobedeliparabirimi").value='';
                   
               }
                 
          }
              
              
          }
          else
              {
                  
                line12="";
                 line13="Taksit miktarı: " + Math.ceil(kirabedeli) + " " + kirabedeliparabirimi;    document.getElementById("taksitmiktari").value=Math.ceil(kirabedeli);
                  
                  
                  if(Math.ceil(depozitobedeli)!=Math.ceil(odenendepozito)){
                      alert("Belirlenen depozito bedeli ile ödenen depozito bedeli uyuşmamaktadır. Depozito bedellerini kontrol ediniz.");
                   document.getElementById("depozitobedeli").value='';
                   document.getElementById("odenendepozito").value='';
                  }
               
              }
          

          
      }
      
                
      if(kiraodemebicimi==="1")          
      {line3="Kira Ödeme Biçimi: " + "Her Ay";
       document.getElementById("toplamkirabedeli").value=Math.ceil(kirabedeli*kirasuresi);
       line4="Toplam Kira Miktarı: " + document.getElementById("toplamkirabedeli").value +" "+kirabedeliparabirimi ;
       document.getElementById("taksitmiktari").value=document.getElementById("toplamkirabedeli").value/kirasuresi;
       
       if(document.getElementById("taksitmiktari").value>=ayminkirabedeli)
       {
        line11= "Aylık Taksit Miktarı: " + document.getElementById("taksitmiktari").value + " "+kirabedeliparabirimi +"  "+"<span class='checkmark'>✔</span>";     
       }else
           {
            line11= "Aylık Taksit Miktarı: " + document.getElementById("taksitmiktari").value + " "+kirabedeliparabirimi +"  "+"<span class='crossmark'>&cross;</span>";     
           }
      }
       if(kiraodemebicimi==="3")          
      {line3="Kira Ödeme Biçimi: " + "Her Üç Ayda Bir";
       document.getElementById("toplamkirabedeli").value=Math.ceil(kirabedeli*kirasuresi);
      line4="Toplam Kira Miktarı: " + document.getElementById("toplamkirabedeli").value +" "+kirabedeliparabirimi ;
       document.getElementById("taksitmiktari").value=document.getElementById("toplamkirabedeli").value/(kirasuresi/kiraodemebicimi);
       
       if(document.getElementById("taksitmiktari").value>=(ayminkirabedeli*kirasuresi/(kirasuresi/kiraodemebicimi)))
       {
        line11= "Üç Ayda Bir Taksit Miktarı: " + document.getElementById("taksitmiktari").value + " "+kirabedeliparabirimi +"  "+"<span class='checkmark'>✔</span>";     
       }else
           {
            line11= "Üç Ayda Bir Taksit Miktarı: " + document.getElementById("taksitmiktari").value + " "+kirabedeliparabirimi +"  "+"<span class='crossmark'>&cross;</span>";     
           }
      }         
        if(kiraodemebicimi==="6")          
      {line3="Kira Ödeme Biçimi: " + "Her Altı Ayda Bir";
       document.getElementById("toplamkirabedeli").value=Math.ceil(kirabedeli*kirasuresi);
      line4="Toplam Kira Miktarı: " + document.getElementById("toplamkirabedeli").value +" "+kirabedeliparabirimi ;
      document.getElementById("taksitmiktari").value=document.getElementById("toplamkirabedeli").value/(kirasuresi/kiraodemebicimi);
       
       
       if(document.getElementById("taksitmiktari").value>=(ayminkirabedeli*kirasuresi/(kirasuresi/kiraodemebicimi)))
       {
        line11= "Altı Ayda Bir Taksit Miktarı: " + document.getElementById("taksitmiktari").value + " "+kirabedeliparabirimi +"  "+"<span class='checkmark'>✔</span>";     
       }else
           {
            line11= "Altı Ayda Bir Taksit Miktarı: " + document.getElementById("taksitmiktari").value + " "+kirabedeliparabirimi +"  "+"<span class='crossmark'>&cross;</span>";     
           }
      }         
      if(kiraodemebicimi==="12")          
      {line3="Kira Ödeme Biçimi: " + "Her Oniki Ayda Bir";
      document.getElementById("toplamkirabedeli").value=Math.ceil(kirabedeli*kirasuresi);
      line4="Toplam Kira Miktarı: " + document.getElementById("toplamkirabedeli").value +" "+kirabedeliparabirimi ;
       document.getElementById("taksitmiktari").value=document.getElementById("toplamkirabedeli").value/(kirasuresi/kiraodemebicimi);
       
       
       if(document.getElementById("taksitmiktari").value>=(ayminkirabedeli*kirasuresi/(kirasuresi/kiraodemebicimi)))
       {
        line11= "Oniki Ayda Bir Taksit Miktarı: " + document.getElementById("taksitmiktari").value + " "+kirabedeliparabirimi +"  "+"<span class='checkmark'>✔</span>";     
       }else
           {
            line11= "Oniki Ayda Bir Taksit Miktarı: " + document.getElementById("taksitmiktari").value + " "+kirabedeliparabirimi +"  "+"<span class='crossmark'>&cross;</span>";     
           }
      }
      
     if(kirakaporaeklendi!=0){ 
     line5="Kapora Miktarı: " + kaporamiktari + " " + kaporaparabirimi;        
     }
                else
                    {
                      line5="Kapora Miktarı: Kapora bulunmamaktadır."  
                    }
       
     
    if(kiraodemebicimi!="" && kirasuresi!="" && kirabedeli!="" && kirabedeliparabirimi!="" && checkbit==0)
        {
            
    lines.push(line6);
    lines.push(line7);
    lines.push(line8);
    lines.push(line10);
    lines.push(line9);        
      
    lines.push(line1);
    lines.push(line2);
    lines.push(line3);
    lines.push(line4);
    lines.push(line5);        
    lines.push(line11);
    
    lines.push(line9);         
    if(depocheckbit)
           { lines.push(line12);
           lines.push(line13);}
           
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
          
              <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:16px;">KİRALAMA GİRİŞ SAYFASI</label>
              
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
           
           
            
              
           <div class="row">
          
              <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:16px;">KİRALAMA BİLGİLERİ SAYFASI</label>
              
          </div>
            <br>

          <div class="row">
            <div class="col-25">
              <label for="adresolustur" style="font-weight:bolder">Kiralama Bilgileri </label>
            </div>
          </div>
          <!-- Hidden inputs to store calculated values -->
        <input type="hidden" id="toplamkirabedeli" name="toplamkirabedeli">
       <!-- <input type="hidden" id="ilktaksitmiktari" name="ilktaksitmiktari">-->
          <input type="hidden" id="taksitmiktari" name="taksitmiktari">
          
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
          
          
          <div class="row">
            <div class="col-25">
              <label for="kiralamatarihi" style="font-weight:bolder">Kiralama Tarihi </label>
            </div>
            <div class="col-75">
            <input type="date" id="kiralamatarihi" name="kiralamatarihi" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $kiralamatarihi;?>">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="kiralamabitistarihi" style="font-weight:bolder">Kiralama Bitiş Tarihi </label>
            </div>
            <div class="col-75">
            <input type="date" id="kiralamabitistarihi" name="kiralamabitistarihi" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $kiralamabitistarihi;?>">
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
           <?php
            if($kaporamiktari!=null || $kaporamiktari!=""){
            
            echo '<div class="row">
            <div class="col-25">
              <label for="kaporamiktari" style="font-weight:bolder">Kapora Miktarı  </label>
              <br>
            </div>
            <div class="col-75">
             <input type="text" id="kaporamiktarigor" name="kaporamiktarigor" class="form-control" readonly style="background-color:#DCDCDC;" value="'.$kaporamiktari.'">
            </div>
            </div>
            <div class="row">
            
            <div class="col-25" >
              <label for="kaporaparabirimigor" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <select name="kaporaparabirimigor" id="kaporaparabirimigor" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option>'.$kaporaparabirimi.'</option>
              </select>
            </div>
          
           </div>
            </div>';
            }
            
            ?>
            </div>
            <div class="row">
            <div class="col-25">
              <label for="odenendepozito" style="font-weight:bolder">Ödenen Depozito Bedeli *</label>
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
           
           <!--<div class="row">
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
              <label for="aidatsontarih" style="font-weight:bolder">Aidatın Geçerli Olacağı Son Tarih (Sözleşme Süresince) *</label>
            </div>
            <div class="col-75">
               <input type="text" id="aidatsontarih" name="aidatsontarih" class="form-control" value="<?php echo $aidatsontarih;?>" readonly style="background-color:#DCDCDC;">
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
           
            
              <?php
          if($yonetimsoziste=="EVET")
          {
             echo'<div class="row">
            <div class="col-25">
              <label for="yonetimsoziste" style="font-weight:bolder">Yönetim Sözleşmesi İstenecek Mi? *</label>
            </div>
            <div class="col-75">
               <select name="yonetimsoziste" id="yonetimsoziste" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option>EVET</option>  
                    
              </select>
            </div>
          </div> 
          
          
          <div class="row">
            <div class="col-25">
              <label for="yonetimsozbastarih" style="font-weight:bolder">Yönetim Sözleşmesi Başlangıç Tarihi *</label>
            </div>
            <div class="col-75">
               <input type="text" id="yonetimsozbastarih" name="yonetimsozbastarih" class="form-control" value="'.$yonetimsozbastarihx.'" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
          
          
           <div class="row">
            <div class="col-25">
              <label for="yonetimsozbittarih" style="font-weight:bolder">Yönetim Sözleşmesi Başlangıç Tarihi *</label>
            </div>
            <div class="col-75">
               <input type="text" id="yonetimsozbittarih" name="yonetimsozbittarih" class="form-control" value="'.$yonetimsozbittarihx.'" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
          
          
          ';
              
              
              
              
              
          }else
          {
               echo'<div class="row">
            <div class="col-25">
              <label for="yonetimsoziste" style="font-weight:bolder">Yönetim Sözleşmesi İstenecek Mi? *</label>
            </div>
            <div class="col-75">
               <select name="yonetimsoziste" id="yonetimsoziste" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option>HAYIR</option>  
                    
              </select>
            </div>
          </div> ';
          }
          
          ?>
            
          
            <!--TAHSİLAT BÖLÜMÜ---->
           
           
           
           
           
           
              <label style="font-weight:bold;font-size:16px;color:#05059c;">TAHSİLAT BÖLÜMÜ</label>
<br>

<!-- Kapora Bölümü -->
<h5>Kapora</h5>
<div id="kaporaSection">
    <div class="row">
        <div class="col-25"><label for="kaporaMiktar">Kapora Tahsilat Miktarı</label></div>
        <div class="col-75"><input type="text" id="kaporaMiktar" name="kaporaMiktar" class="form-control" value="<?php echo htmlspecialchars($kaporatahMiktar ?? ''); ?>" readonly></div>
    </div>
    <div class="row">
        <div class="col-25"><label for="kaporaPB">Para Birimi</label></div>
        <div class="col-75">
            <select id="kaporaPB" name="kaporaPB" class="form-control" disabled>
                <option <?php if($kaporaPB == '') echo 'selected'; ?>></option>
                <option <?php if($kaporaPB == 'TL') echo 'selected'; ?>>TL</option>
                <option <?php if($kaporaPB == 'EURO') echo 'selected'; ?>>EURO</option>
                <option <?php if($kaporaPB == 'DOLAR') echo 'selected'; ?>>DOLAR</option>
            <option <?php if($kaporaPB == 'STERLIN') echo 'selected'; ?>>STERLIN</option>
            </select>
        </div>
    </div>
   
       <?php
     if($kaporaPB == 'TL'){
    
    echo '<div class="row">
        <div class="col-25"><label>TLden Sterline Çevirim Oranı</label></div>
        <div class="col-75"><input type="text" id="kaporaTlRate" name="kaporaTlRate" class="form-control" value="'.htmlspecialchars($kaporaTlRate ?? '').'" readonly></div>
    </div>';
    }
    if($kaporaPB == 'EURO'){
      echo '<div class="row">
        <div class="col-25"><label>Eurodan TLye Çevirim Oranı</label></div>
        <div class="col-75"><input type="text" id="kaporaTlRate" name="kaporaToTlRate" class="form-control" value="'.htmlspecialchars($kaporaToTlRate ?? '').'" readonly></div>
    </div>';  
    }
    if($kaporaPB == 'DOLAR'){
      echo '<div class="row">
        <div class="col-25"><label>Dolardan TLye Çevirim Oranı</label></div>
        <div class="col-75"><input type="text" id="kaporaTlRate" name="kaporaToTlRate" class="form-control" value="'.htmlspecialchars($kaporaToTlRate ?? '').'" readonly></div>
    </div>';   
    }
    
    ?>
    
    <div class="row">
        <div class="col-25"><label for="kaporaSterling">Hesaplanan Sterlin Değeri (GBP)</label></div>
        <div class="col-75"><input type="text" id="kaporaSterling" name="kaporaSterling" class="form-control" value="<?php echo htmlspecialchars($kaporaSterling ?? ''); ?>" readonly></div>
    </div>


            
                     <div class="row">
            <div class="col-25">
              <label for="kaporabelgepaths" style="font-weight:bolder">Kapora Evrakları </label>
              <br>
            </div>
            <div class="col-75">
                             <?php 
          $counter=1;   
$kaporabelgepathsayri= explode(";", $kaporabelgepaths);
$lastIndex = count($kaporabelgepathsayri) - 1;

if (empty($kaporabelgepathsayri[$lastIndex])) {
    unset($kaporabelgepathsayri[$lastIndex]);
}

$kaporabelgepathsayri = array_values($kaporabelgepathsayri);
foreach($kaporabelgepathsayri as $kaporabelgepathsx){
echo '<br>';    
echo '<label>'.$counter.'-'.'Kapora Dosyaları</label>';
    echo '<br>';
echo '<a href="?dosya='.$kaporabelgepathsx.'">Dosyayı İndir</a>';
    echo '<br><br>';
    echo '<button class="preview-button" data-file="'.$kaporabelgepathsx.'">Önizleme</button>';
    echo '<br>';
    $counter++;
   
}
            
                
                ?> 

            </div>
          </div>

</div>
<hr>

<!-- Depozito Bölümü -->
<h5>Depozito</h5>
<div id="depozitoSection">
    <div class="row">
        <div class="col-25"><label for="depozitoMiktar">Depozito Tahsilat Miktarı</label></div>
        <div class="col-75"><input type="text" id="depozitoMiktar" name="depozitoMiktar" class="form-control" value="<?php echo htmlspecialchars($depozitoMiktar ?? ''); ?>" readonly></div>
    </div>
    <div class="row">
        <div class="col-25"><label for="depozitoPB">Para Birimi</label></div>
        <div class="col-75">
            <select id="depozitoPB" name="depozitoPB" class="form-control" disabled>
                <option <?php if($depozitoPB == '') echo 'selected'; ?>></option>
                <option <?php if($depozitoPB == 'TL') echo 'selected'; ?>>TL</option>
                <option <?php if($depozitoPB == 'EURO') echo 'selected'; ?>>EURO</option>
                <option <?php if($depozitoPB == 'DOLAR') echo 'selected'; ?>>DOLAR</option>
                <option <?php if($depozitoPB == 'STERLIN') echo 'selected'; ?>>STERLIN</option>
            </select>
        </div>
    </div>
   
        <?php
      if($depozitoPB == 'TL'){
    
    echo '<div class="row">
        <div class="col-25"><label>TLden Sterline Çevirim Oranı</label></div>
        <div class="col-75"><input type="text" id="kaporaTlRate" name="kaporaTlRate" class="form-control" value="'.htmlspecialchars($depozitoTlRate ?? '').'" readonly></div>
    </div>';
    }
    
    if($depozitoPB == 'EURO'){
      echo '<div class="row">
        <div class="col-25"><label>Eurodan TLye Çevirim Oranı</label></div>
        <div class="col-75"><input type="text" id="depozitoToTlRate" name="depozitoToTlRate" class="form-control" value="'.htmlspecialchars($depozitoToTlRate ?? '').'" readonly></div>
    </div>';  
    }
    if($depozitoPB == 'DOLAR'){
      echo '<div class="row">
        <div class="col-25"><label>Dolardan TLye Çevirim Oranı</label></div>
        <div class="col-75"><input type="text" id="depozitoToTlRate" name="depozitoToTlRate" class="form-control" value="'.htmlspecialchars($depozitoToTlRate ?? '').'" readonly></div>
    </div>';   
    }
    
    ?>
    <div class="row">
        <div class="col-25"><label for="depozitoSterling">Hesaplanan Sterlin Değeri (GBP)</label></div>
        <div class="col-75"><input type="text" id="depozitoSterling" name="depozitoSterling" class="form-control" value="<?php echo htmlspecialchars($depozitoSterling ?? ''); ?>" readonly></div>
    </div>


<!-- Depozito Bölümü -->
<div class="row">
    <div class="col-25">
        <label for="depozitobelgepaths" style="font-weight:bolder">Depozito Evrakları</label>
        <br>
    </div>
    <div class="col-75">
        <?php 
        $counter = 1;
        $depozitobelgepathsayri = explode(";", $depozitobelgepaths);
        $lastIndex = count($depozitobelgepathsayri) - 1;

        if (empty($depozitobelgepathsayri[$lastIndex])) {
            unset($depozitobelgepathsayri[$lastIndex]);
        }

        foreach($depozitobelgepathsayri as $depozitobelgepathsx) {
            echo '<br>';
            echo '<label>' . $counter . '- Depozito Dosyaları</label>';
            echo '<br>';
            echo '<a href="?dosya=' . $depozitobelgepathsx . '">Dosyayı İndir</a>';
            echo '<br><br>';
            echo '<button class="preview-button" data-file="' . $depozitobelgepathsx . '">Önizleme</button>';
            echo '<br>';
            $counter++;
        }
        ?>
    </div>
</div>

</div>
<hr>

<!-- Aidat Bölümü -->
<h5>Aidat</h5>
<div id="aidatSection">
    <div class="row">
        <div class="col-25"><label for="aidatMiktar">Aidat Tahsilat Miktarı</label></div>
        <div class="col-75"><input type="text" id="aidatMiktar" name="aidatMiktar" class="form-control" value="<?php echo htmlspecialchars($aidatMiktar ?? ''); ?>" readonly></div>
    </div>
    <div class="row">
        <div class="col-25"><label for="aidatPB">Para Birimi</label></div>
        <div class="col-75">
            <select id="aidatPB" name="aidatPB" class="form-control" disabled>
                <option <?php if($aidatPB == '') echo 'selected'; ?>></option>
                <option <?php if($aidatPB == 'TL') echo 'selected'; ?>>TL</option>
                <option <?php if($aidatPB == 'EURO') echo 'selected'; ?>>EURO</option>
                <option <?php if($aidatPB == 'DOLAR') echo 'selected'; ?>>DOLAR</option>
                <option <?php if($aidatPB == 'STERLIN') echo 'selected'; ?>>STERLIN</option>
            </select>
        </div>
    </div>
   
        <?php
      if($aidatPB == 'TL'){
    
    echo '<div class="row">
        <div class="col-25"><label>TLden Sterline Çevirim Oranı</label></div>
        <div class="col-75"><input type="text" id="kaporaTlRate" name="kaporaTlRate" class="form-control" value="'.htmlspecialchars($aidatTlRate ?? '').'" readonly></div>
    </div>';
    }
    if($aidatPB == 'EURO'){
      echo '<div class="row">
        <div class="col-25"><label>Eurodan TLye Çevirim Oranı</label></div>
        <div class="col-75"><input type="text" id="aidatToTlRate" name="aidatToTlRate" class="form-control" value="'.htmlspecialchars($aidatToTlRate ?? '').'" readonly></div>
    </div>';  
    }
    if($aidatPB == 'DOLAR'){
      echo '<div class="row">
        <div class="col-25"><label>Dolardan TLye Çevirim Oranı</label></div>
        <div class="col-75"><input type="text" id="aidatToTlRate" name="aidatToTlRate" class="form-control" value="'.htmlspecialchars($aidatToTlRate ?? '').'" readonly></div>
    </div>';   
    }
    
    ?>
    <div class="row">
        <div class="col-25"><label for="aidatSterling">Hesaplanan Sterlin Değeri (GBP)</label></div>
        <div class="col-75"><input type="text" id="aidatSterling" name="aidatSterling" class="form-control" value="<?php echo htmlspecialchars($aidatSterling ?? ''); ?>" readonly></div>
    </div>

<div class="row">
    <div class="col-25">
        <label for="aidatbelgepaths" style="font-weight:bolder">Aidat Evrakları</label>
        <br>
    </div>
    <div class="col-75">
        <?php 
        $counter = 1;
        $aidatbelgepathsayri = explode(";", $aidatbelgepaths);
        $lastIndex = count($aidatbelgepathsayri) - 1;

        if (empty($aidatbelgepathsayri[$lastIndex])) {
            unset($aidatbelgepathsayri[$lastIndex]);
        }

        foreach($aidatbelgepathsayri as $aidatbelgepathsx) {
            echo '<br>';
            echo '<label>' . $counter . '- Aidat Dosyaları</label>';
            echo '<br>';
            echo '<a href="?dosya=' . $aidatbelgepathsx . '">Dosyayı İndir</a>';
            echo '<br><br>';
            echo '<button class="preview-button" data-file="' . $aidatbelgepathsx . '">Önizleme</button>';
            echo '<br>';
            $counter++;
        }
        ?>
    </div>
</div>
</div>
<hr>

<!-- Kira Bölümü -->
<h5>Kira</h5>
<div id="kiraSection">
    <div class="row">
        <div class="col-25"><label for="kiraMiktar">Kira Tahsilat Miktarı</label></div>
        <div class="col-75"><input type="text" id="kiraMiktar" name="kiraMiktar" class="form-control" value="<?php echo htmlspecialchars($kiraMiktar ?? ''); ?>" readonly></div>
    </div>
    <div class="row">
        <div class="col-25"><label for="kiraPB">Para Birimi</label></div>
        <div class="col-75">
            <select id="kiraPB" name="kiraPB" class="form-control" disabled>
                <option <?php if($kiraPB == '') echo 'selected'; ?>></option>
                <option <?php if($kiraPB == 'TL') echo 'selected'; ?>>TL</option>
                <option <?php if($kiraPB == 'EURO') echo 'selected'; ?>>EURO</option>
                <option <?php if($kiraPB == 'DOLAR') echo 'selected'; ?>>DOLAR</option>
                <option <?php if($kiraPB == 'STERLIN') echo 'selected'; ?>>STERLIN</option>
            </select>
        </div>
    </div>
   
       <?php
             if($kiraPB == 'TL'){
    
    echo '<div class="row">
        <div class="col-25"><label>TLden Sterline Çevirim Oranı</label></div>
        <div class="col-75"><input type="text" id="kaporaTlRate" name="kaporaTlRate" class="form-control" value="'.htmlspecialchars($kiraTlRate ?? '').'" readonly></div>
    </div>';
    }
    if($kiraPB == 'EURO'){
      echo '<div class="row">
        <div class="col-25"><label>Eurodan TLye Çevirim Oranı</label></div>
        <div class="col-75"><input type="text" id="kiraToTlRate" name="kiraToTlRate" class="form-control" value="'.htmlspecialchars($kiraToTlRate ?? '').'" readonly></div>
    </div>';  
    }
    if($kiraPB == 'DOLAR'){
      echo '<div class="row">
        <div class="col-25"><label>Dolardan TLye Çevirim Oranı</label></div>
        <div class="col-75"><input type="text" id="kiraToTlRate" name="kiraToTlRate" class="form-control" value="'.htmlspecialchars($kiraToTlRate ?? '').'" readonly></div>
    </div>';   
    }
    
    ?>
    <div class="row">
        <div class="col-25"><label for="kiraSterling">Hesaplanan Sterlin Değeri (GBP)</label></div>
        <div class="col-75"><input type="text" id="kiraSterling" name="kiraSterling" class="form-control" value="<?php echo htmlspecialchars($kiraSterling ?? ''); ?>" readonly></div>
    </div>

           
    <!-- Kira Bölümü -->
<div class="row">
    <div class="col-25">
        <label for="kirabelgepaths" style="font-weight:bolder">Kira Evrakları</label>
        <br>
    </div>
    <div class="col-75">
        <?php 
        $counter = 1;
        $kirabelgepathsayri = explode(";", $kirabelgepaths);
        $lastIndex = count($kirabelgepathsayri) - 1;

        if (empty($kirabelgepathsayri[$lastIndex])) {
            unset($kirabelgepathsayri[$lastIndex]);
        }

        foreach($kirabelgepathsayri as $kirabelgepathsx) {
            echo '<br>';
            echo '<label>' . $counter . '- Kira Dosyaları</label>';
            echo '<br>';
            echo '<a href="?dosya=' . $kirabelgepathsx . '">Dosyayı İndir</a>';
            echo '<br><br>';
            echo '<button class="preview-button" data-file="' . $kirabelgepathsx . '">Önizleme</button>';
            echo '<br>';
            $counter++;
        }
        ?>
    </div>
</div>
         </div>
          <hr>       
           
           
           
           
           
           
           
           
           
           
           
              <!--TAHSİLAT BÖLÜMÜ---->  
              
                  
            
            
            
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


    document.getElementById("odenendepozito").addEventListener("change", function() {
hesaplakiralama();
        
        
}); 
     document.getElementById("depozitobedeliparabirimi").addEventListener("change", function() {
hesaplakiralama();
        
        
}); 
    
      document.getElementById("depozitobedeli").addEventListener("change", function() {
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