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
        window.location.href = "https://whitelotustest.online/kiralamaonay.php";
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
$pageid="kiralamaonay"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.  
    
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
        $kirakaporaeklendi=$row['kirakaporaeklendi'];
        $kaporaonayinda=$row['kaporaonayinda'];
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
  

  
if ($result = $conn -> query("SELECT * FROM kirakaporakayit where  kirakaporakayit.company_id = '{$_SESSION['company_id']}' AND kirakaporakayit.isdeleted !=1 AND kirakaporakayit.kirakey='$kirakaporasonkey'")) {
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
        $topalkaporamiktari = $row['topalkaporamiktari'];
        $kaporaparabirimi = $row['kaporaparabirimi'];
        $kaporateslimtarihi = $row['kaporateslimtarihi'];
        $kaporakirabelge = $row['kaporakirabelge'];
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

    
 
 
 if ($kaporaonayinda != 1) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülk kapora onayında değildir. Ana menüye dönmek için tıklayınız. </z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
}
    
    if ($kirakaporaeklendi == 1) {
       echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülke ait kapora onayı tamamlanmıştır.Ana menüye dönmek için tıklayınız. </z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
}
  
    
    

    
    
    
?>
    

<!-------------------------------------------------------->
    <script>
        let belirlenmisaidatparabirimi = <?php echo json_encode($belirlenmisaidatparabirimi); ?>;
        let belirlenmisguncelaidat = <?php echo json_encode($belirlenmisguncelaidat); ?>;
        let belirlenmismaxkirainoran = <?php echo json_encode($belirlenmismaxkirainoran); ?>;
        let belirlenmiskirabedeliparabirimi = <?php echo json_encode($belirlenmiskirabedeliparabirimi); ?>;
        let belirlenmiskirabedeli = <?php echo json_encode($belirlenmiskirabedeli); ?>;
        let kirabedeli;
            function hesaplakiralama() {
                
       var kaporamiktari = document.getElementById("kaporamiktari").value;
        var kaporaparabirimi = document.getElementById("kaporaparabirimi").value;         
                
        // Input alanlarından sayıları al
kirabedeli = document.getElementById("kirabedeli").value;
    var kirabedeliparabirimi = document.getElementById("kirabedeliparabirimi").value;
var kirasuresi = document.getElementById("kirasuresi").value;//number
var kiraodemebicimi = document.getElementById("kiraodemebicimi").value;
              
       
    let lines = []; 
     let checkbit=0; 
                
       /* alert(kaporamiktari);        
        alert(kaporaparabirimi);  
        alert(kirabedeli);
        alert(kirabedeliparabirimi);
        alert(kirasuresi);
        alert(kiraodemebicimi);*/
    
      line6= "Aylık Belirlenmiş Kira Bedeli: " + belirlenmiskirabedeli+ " " + belirlenmiskirabedeliparabirimi;
      line7= "Aylık Belirlenmiş Maksimum İndirim Oranı: " + belirlenmismaxkirainoran;
      line8= "Aylık Belirlenmiş Aidat Bedeli: " + belirlenmisguncelaidat+ " " + belirlenmisaidatparabirimi;
                line10= "Aylık Minimum Kira Bedeli: " + Math.ceil((belirlenmiskirabedeli*(100-belirlenmismaxkirainoran)/100));
                ayminkirabedeli=Math.ceil((belirlenmiskirabedeli*(100-belirlenmismaxkirainoran)/100));
      line9= "<hr>";          
      line1="Aylık Kira Bedeli: " + kirabedeli + " " + kirabedeliparabirimi; 
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
          
         if(kirabedeliparabirimi!==belirlenmiskirabedeliparabirimi)
          {
              alert("Belirlenmiş kira bedeli para birimi ile girilmiş olan kira bedeli para birimi uyumlu değildir.");
              document.getElementById("kirabedeliparabirimi").value='';
              checkbit=1;
          }   
         
          
      }
                
              
                
      
        if(kiraodemebicimi!="" && kirasuresi!="" && kirabedeli!="")
        {
                
      if(kiraodemebicimi==="1")          
      {line3="Kira Ödeme Biçimi: " + "Her Ay";
       document.getElementById("toplamkirabedeli").value=Math.ceil(kirabedeli*kirasuresi);
       line4="Toplam Kira Miktarı: " + document.getElementById("toplamkirabedeli").value +" "+kirabedeliparabirimi ;
       document.getElementById("taksitmiktari").value=document.getElementById("toplamkirabedeli").value/kirasuresi;
       
       if(document.getElementById("taksitmiktari").value>=ayminkirabedeli)
       {
        line11= "Tahsil Edilecek Olan Aylık Kira Bedeli: " + document.getElementById("taksitmiktari").value + " "+kirabedeliparabirimi +"  "+"<span class='checkmark'>✔</span>";     
       }else
           {
            line11= "Tahsil Edilecek Olan Aylık Kira Bedeli: " + document.getElementById("taksitmiktari").value + " "+kirabedeliparabirimi +"  "+"<span class='crossmark'>&cross;</span>";     
           }
       
      }
       if(kiraodemebicimi==="3")          
      {line3="Kira Ödeme Biçimi: " + "Her Üç Ayda Bir";
       document.getElementById("toplamkirabedeli").value=Math.ceil(kirabedeli*kirasuresi);
      line4="Toplam Kira Miktarı: " + document.getElementById("toplamkirabedeli").value +" "+kirabedeliparabirimi ;
       document.getElementById("taksitmiktari").value=document.getElementById("toplamkirabedeli").value/(kirasuresi/kiraodemebicimi);
       
       if(document.getElementById("taksitmiktari").value>=(ayminkirabedeli*kirasuresi/(kirasuresi/kiraodemebicimi)))
       {
        line11= "Üç Ayda Bir Tahsil Edilecek Olan Kira Bedeli: " + document.getElementById("taksitmiktari").value + " "+kirabedeliparabirimi +"  "+"<span class='checkmark'>✔</span>";     
       }else
           {
            line11= "Üç Ayda Bir Tahsil Edilecek Olan Kira Bedeli: " + document.getElementById("taksitmiktari").value + " "+kirabedeliparabirimi +"  "+"<span class='crossmark'>&cross;</span>";     
           }
       
      }         
        if(kiraodemebicimi==="6")          
      {line3="Kira Ödeme Biçimi: " + "Her Altı Ayda Bir";
       document.getElementById("toplamkirabedeli").value=Math.ceil(kirabedeli*kirasuresi);
      line4="Toplam Kira Miktarı: " + document.getElementById("toplamkirabedeli").value +" "+kirabedeliparabirimi ;
      document.getElementById("taksitmiktari").value=document.getElementById("toplamkirabedeli").value/(kirasuresi/kiraodemebicimi);
       
       
       if(document.getElementById("taksitmiktari").value>=(ayminkirabedeli*kirasuresi/(kirasuresi/kiraodemebicimi)))
       {
        line11= "Altı Ayda Bir Tahsil Edilecek Olan Kira Bedeli: " + document.getElementById("taksitmiktari").value + " "+kirabedeliparabirimi +"  "+"<span class='checkmark'>✔</span>";     
       }else
           {
            line11= "Altı Ayda Bir Tahsil Edilecek Olan Kira Bedeli: " + document.getElementById("taksitmiktari").value + " "+kirabedeliparabirimi +"  "+"<span class='crossmark'>&cross;</span>";     
           }
       
       
       
      }         
      if(kiraodemebicimi==="12")          
      {line3="Kira Ödeme Biçimi: " + "Her Oniki Ayda Bir";
      document.getElementById("toplamkirabedeli").value=Math.ceil(kirabedeli*kirasuresi);
      line4="Toplam Kira Miktarı: " + document.getElementById("toplamkirabedeli").value +" "+kirabedeliparabirimi ;
       document.getElementById("taksitmiktari").value=document.getElementById("toplamkirabedeli").value/(kirasuresi/kiraodemebicimi);
       
       
       if(document.getElementById("taksitmiktari").value>=(ayminkirabedeli*kirasuresi/(kirasuresi/kiraodemebicimi)))
       {
        line11= "Oniki Ayda Bir Tahsil Edilecek Olan Kira Bedeli: " + document.getElementById("taksitmiktari").value + " "+kirabedeliparabirimi +"  "+"<span class='checkmark'>✔</span>";     
       }else
           {
            line11= "Oniki Ayda Bir Tahsil Edilecek Olan Kira Bedeli: " + document.getElementById("taksitmiktari").value + " "+kirabedeliparabirimi +"  "+"<span class='crossmark'>&cross;</span>";     
           }
     
      }
      
        }
     line5="Kapora Miktarı: " + kaporamiktari + " " + kaporaparabirimi;        
   
       
     
    if(kaporaparabirimi!="" && kaporamiktari!="" && kiraodemebicimi!="" && kirasuresi!="" && kirabedeli!="" && kirabedeliparabirimi!="" && checkbit==0)
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
    
        
        
        window.onload = function() {
    adjustRows3();
    hesaplakiralama();
};
    </script>
<br>
              <br>
     <div class="parentmain2">
    <div class="options">
      <div class="container">
          
            <div class="row">
          
              <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:16px;">KAPORA ONAY SAYFASI</label>
              
          </div>


     
        
         
           <br>
           <br>

           <div class="row">
          
              <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:16px;">KAPORA BİLGİLERİ SAYFASI</label>
              
          </div>
            <br>

            <input type="text" id="mulkno" name="mulkno" class="form-control" value="<?php echo $mulkno;?>" required="required" style="display:none;">
           <input type="text" id="yapino" name="yapino" class="form-control" value="<?php echo $yapino;?>" required="required" style="display:none;">
               <!-- Hidden inputs to store calculated values -->
        <input type="hidden" id="toplamkirabedeli" name="toplamkirabedeli">
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
              <label for="kaporatip" style="font-weight:bolder">Kapora Tipi *</label>
            </div>
            <div class="col-75">
               <select name="kaporatip" id="kaporatip" class="form-control" required="required" readonly style="background-color:#DCDCDC;">
                  <!--<option></option>
                  <option>SATIŞ</option>-->
                  <option>KİRALAMA</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="ulke" style="font-weight:bolder">Ad Soyad *</label>
            </div>
            <div class="col-75">
               <input type="text" id="adsoyadkap" name="adsoyadkap" class="form-control" value="<?php echo $adsoyadkap;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="kimlikno" style="font-weight:bolder">Kimlik No *</label>
            </div>
            <div class="col-75">
               <input type="text" id="kimliknokap" name="kimliknokap" class="form-control" value="<?php echo $kimliknokap;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="kimliktipikap" style="font-weight:bolder">Kimlik Tipi *</label>
            </div>
            <div class="col-75">
               <select name="kimliktipikap" id="kimliktipikap" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option><?php echo $kimliktipikap;?></option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="uyruk" style="font-weight:bolder">Uyruk *</label>
            </div>
            <div class="col-75">
               <select name="uyrukkap" id="uyrukkap" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option><?php echo $uyrukkap;?></option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="email" style="font-weight:bolder">E-mail Adresi *</label>
            </div>
            <div class="col-75">
              <input type="text" id="emailkap" name="emailkap" value="<?php echo $emailkap;?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="iletisim1" style="font-weight:bolder">İletişim No 1 *</label>
            </div>
            <div class="col-75">
              <input type="text" id="iletisim1kap" name="iletisim1kap"  value="<?php echo $iletisim1kap;?>" readonly style="background-color:#DCDCDC;">
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
              <input type="text" id="iletisim2kap" name="iletisim2kap" value="<?php echo $iletisim2kap;?>" readonly style="background-color:#DCDCDC;">
              <small class="form-text text-muted">
                11 haneli olarak giriniz. 05XXXXXXXXX
              </small>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="kaporamiktari" style="font-weight:bolder">Tahsil Edilen Kapora Miktarı * </label>
              <br>
            </div>
            <div class="col-75">
             <input type="text" id="kaporamiktari" name="kaporamiktari" class="form-control" value="<?php echo $kaporamiktari;?>" readonly style="background-color:#DCDCDC;">
            </div>
            </div>
            
            <div class="row">
            <div class="col-25">
              <label for="topalkaporamiktari" style="font-weight:bolder">Toplam Tahsil Edilecek Kapora Miktarı * </label>
              <br>
              <label for="topalkaporamiktari" style="font-size:11px;font-weight:bolder">Parçalı kapora tahsilatı yapılabilir. Parçalı kapora tahsilatı yapılmayacaksa yukarıda tahsil edilen kapora miktarı girilecektir. </label>
            </div>
            <div class="col-75">
             <input type="text" id="topalkaporamiktari" name="topalkaporamiktari" class="form-control"  value="<?php echo $topalkaporamiktari;?>" readonly style="background-color:#DCDCDC;">
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
              <input type="date" id="kaporateslimtarihi" name="kaporateslimtarihi" value="<?php echo $kaporateslimtarihi;?>" readonly style="background-color:#DCDCDC;">
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
                      
                       
                        
                         
                          
                           
                            
                             
                               
           
           
           
           
            <div class="row">
            <div class="col-25">
              <label for="kapozelnot" style="font-weight:bolder">Özel Not (Max 500 karakter)</label>
            </div>
            <div class="col-75">
             <textarea id="kapozelnot" name="kapozelnot" readonly style="background-color:#DCDCDC;"><?php echo $kapozelnot;?></textarea>  
            </div>
          </div>
            
         <br>
         <div class="row" id="hiderow">
  <input name="iptal" type="submit" id="iptal" value="Geri Git" onclick="anamenu()" style="background:green;"/>

        </div>
          
          <br>
          <br>
          
          
          
           <div class="button-like-div" id="toggleButton">Yapı/Mülk/Kapora Bilgilerini Göster/Gizle</div>
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
          <div class="button-like-div" id="toggleButton2">Yapı/Mülk/Kapora Bilgilerini Göster/Gizle</div>
           </div><!--DISPLAY  NONE-->
           
          
          
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


        <div class="linecon"></div>
     <br>
     <br>
   <?php
echo '
<div class="parentmain2">
    <div class="options">
      <div class="container">
   
  
   <form action="kaporaonaydegaction.php" method="post" onsubmit="return validatecallForm()" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$mulkno.'>
   <input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$kirakaporasonkey.'>
   <div class="form-group">
   <div class="form-group">
        <label for="description">Açıklama (max 1000 karakter)</label>
        <textarea class="form-control" id="aciklama" name="aciklama" maxlength="1000" required="required" oninput="adjustRows3()"></textarea>
      </div>
      <input type="submit" name="submit" id="buttongun" style="float:left;background:red;margin-top:40px;font-size:16px;" value="Kaporayı Reddet"></form>
      
      
      
       <form name="formgun" id="formgun" action="kaporaonaydegactionok.php" method="POST" onsubmit="return validatecallForm2()" enctype="multipart/form-data">
     
     <input type="text" id="mulkno" name="mulkno" style="display:none" value='.$mulkno.'>
   <input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$kirakaporasonkey.'>
      
 
      <input type="submit" name="submit" id="buttongun" style="float:right;background:green;margin-top:40px;font-size:16px;" value="Kaporayı Onayla">
    </form>
  
         </div>
    </div>
</div>';
                                                   
    
?>
 
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
    /*
     function adjustRows() {
    var textarea = document.getElementById("metinAlani");
    var lines = textarea.value.split("\n").length;
    textarea.rows = lines;
}
 function adjustRows2() {
    var textarea = document.getElementById("aciklamahesap");
    var lines = textarea.value.split("\n").length;
    textarea.rows = lines;
}*/
 function adjustRows3() {
    var textarea = document.getElementById("aciklama");
    var lines = textarea.value.split("\n").length;
    textarea.rows = lines;
} 

// Sayfa yüklendiğinde ve textarea içeriği değiştiğinde satır sayısını ayarla


//document.getElementById("metinAlani").addEventListener("input", adjustRows);
//document.getElementById("aciklamahesap").addEventListener("input", adjustRows2);
document.getElementById("aciklama").addEventListener("input", adjustRows3); 
    
    


    
    
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
    
    
   
        var toggleButton = document.getElementById("toggleButton2");

        toggleButton.addEventListener("click", function() {
            
                myDiv.style.display = "none"; // Div'i gizle
            
        });
    
    
       function validatecallForm()  {
          
     
 
           
           
   
           
           
           
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
    
    
    
    function validatecallForm()  {

  
   document.getElementById("loadingOverlay").style.display = "block";     
        
    } 
      
      
       function validatecallForm2()  {
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