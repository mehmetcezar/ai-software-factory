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
$pageid="kiralamasorumlusupage"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.  
    
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
      $mulkid=$_POST['mulkno'];
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


    
    
    
    $mulkkapalimi=0;
    $kaporaison=0;
     if ($result = $conn -> query("SELECT * FROM mulkkayit where  mulkkayit.company_id = '{$_SESSION['company_id']}' AND mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulkid'")) {
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
      $kirayaayrildi=$row['kirayaayrildi'];
      $belirlenmiskirabedeli=$row['kirabedeli'];
      $belirlenmiskirabedeliparabirimi=$row['kirabedeliparabirimi'];
      $belirlenmismaxkirainoran=$row['maxkirainoran'];
      $belirlenmisguncelaidat=$row['guncelaidat'];
      $belirlenmisaidatparabirimi=$row['aidatparabirimi'];
      
      
      if($row['kirakaporaeklendi']==1 || $row['kaporaonayinda']==1 || $row['kiracieklendi']==1 || $row['kiralandi']==1 || $row['kiralamaonayinda']==1 || $row['kiralamaonayinda']==2)
      {
        $kaporaison=1;
         
          
          
      }
    
      
      
   if($row['kiralamadurumu']=="KAPALI" && $row['kirayaactarih']!="0000-00-00"){   
      $mulkkapalimi=1;
      $kirayaactarih=$row['kirayaactarih'];   
   }
}
     
  $result -> free_result();
}  
    
    
   if ($kaporaison == 1) {
   echo "<br>";
   echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Bu mülk üzerinde kiracı/kapora/satış/kiralama işlemlerinden biri mevcuttur. Bu mülk üzerine kapora eklemek için mevcut kaporayı kaldırmanız gerekir. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
}
    
     if ($kirayaayrildi != 1) {
   echo "<br>";
   echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Rezervasyon yapılmadan kapora alınamaz. Mülke ait kapora alınmadan önce rezervasyon yapılması gerekir.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();
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
    
    
    
    
    
    
    
 //action sayfasında session ile POST edileni kontrol et. cross check.    
 $_SESSION['mulkno']=$mulkno;  
    
    
    
    
    /*
    if ($result = $conn -> query("SELECT * FROM mulkkayit where  mulkkayit.company_id = '{$_SESSION['company_id']}' AND mulkkayit.isdeleted !=1")) {
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
   
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Gönderilen veriler veri tabanında bulunmamaktadır. Mülk sorgusu sırasında sisteme müdahale edilmiştir. Sistem Yöneticisi ile görüşün. </z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   
}    
 
   */ 
    
    $verilerm=array();
    $verilermx=array();
    if ($result = $conn -> query("SELECT adi FROM acente where acente.isdeleted !=1")) {
 
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
      $verilermx[]=$row['adi'];
     
}
     
  $result -> free_result();
}  
    
    //tekilleştirme fonksiyonu
   foreach ($verilermx as $deger) {
        
        if (!in_array($deger, $verilerm)) {
            $verilerm[] = $deger;
        }
    }
    
    
    
?>
   
   
    <script>
        var values = <?php echo json_encode($verilerm); ?>;

        function filterValuesmi() {
            var searchValue = document.getElementById("searchmi").value.toLowerCase();
            var dropdown = document.getElementById("dropdownmi");

            dropdown.innerHTML = "";

            values.forEach(function(value) {
                if (value.toLowerCase().includes(searchValue)) {
                    var option = document.createElement("option");
                    option.value = value;
                    option.text = value;
                   option.onclick = selectValuemi; // Assign the selectValue function to the onclick event
                    dropdown.appendChild(option);
                }
            });

            if (searchValue === "") {
                dropdown.style.display = "none";
            } else {
                dropdown.style.display = "block";
            }
        }

    
        // Function to handle value selection
        function selectValuemi() {
            var dropdown = document.getElementById("dropdownmi");
            var selectedValue = dropdown.options[dropdown.selectedIndex].value;
            //alert(selectedValue);
            var searchInput = document.getElementById("searchmi");

            searchInput.value = selectedValue;
            dropdown.style.display = "none";
            searchInput.focus();
        }

        // Function to handle input field changes
        function handleInputChangemi() {
            var searchInput = document.getElementById("searchmi");
            var dropdown = document.getElementById("dropdownmi");

            filterValuesmi(); // Filter values when the input field changes

            if (searchInput.value === "") {
                dropdown.style.display = "none";
            } else {
                dropdown.style.display = "block";
            }
        }

        // Function to handle input field deletions
        function handleInputDeletionmi() {
            var searchInput = document.getElementById("searchmi");
            var dropdown = document.getElementById("dropdownmi");

            filterValuesmi(); // Filter values when the input field changes

            if (searchInput.value === "") {
                dropdown.style.display = "none";
            } else {
                dropdown.style.display = "block";
            }
        }
           
           
        
           
           function changecolor() {
               
               var button = document.getElementById("renkdegis");
                button.style.backgroundColor = "blue";
                button.style.font.color="white";
               button.style.boxShadow = "0px 5px 5px rgba(0, 0, 0, 0.2)";
               
               

           }
   
   
   
   
    </script>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    
<script>
    

       let ekdepozitoodemesi;
        let belirlenmisaidatparabirimi = <?php echo json_encode($belirlenmisaidatparabirimi); ?>;
        let belirlenmisguncelaidat = <?php echo json_encode($belirlenmisguncelaidat); ?>;
        let belirlenmismaxkirainoran = <?php echo json_encode($belirlenmismaxkirainoran); ?>;
        let belirlenmiskirabedeliparabirimi = <?php echo json_encode($belirlenmiskirabedeliparabirimi); ?>;
        let belirlenmiskirabedeli = <?php echo json_encode($belirlenmiskirabedeli); ?>;
        let kirabedeli;
            function hesaplakiralama() {
                
       var kaporamiktari = document.getElementById("kaporamiktari").value;
       var topalkaporamiktari = document.getElementById("topalkaporamiktari").value;
        var kaporaparabirimi = document.getElementById("kaporaparabirimi").value;         
                
        // Input alanlarından sayıları al
kirabedeli = document.getElementById("kirabedeli").value;
    var kirabedeliparabirimi = document.getElementById("kirabedeliparabirimi").value;
var kirasuresi = document.getElementById("kirasuresi").value;//number
var kiraodemebicimi = document.getElementById("kiraodemebicimi").value;
    
                
   var suodemebicimi = document.getElementById("suodemebicimi").value;             
   var hizmetodemebicimi = document.getElementById("hizmetodemebicimi").value;           
    var internetodemebicimi = document.getElementById("internetodemebicimi").value;            
    var aidatodemebicimi = document.getElementById("aidatodemebicimi").value;            
                
                
   var depozitobedeli = document.getElementById("depozitobedeli").value;
var depozitobedeliparabirimi = document.getElementById("depozitobedeliparabirimi").value;              
              
//var odenendepozito = document.getElementById("odenendepozito").value;          // var depozitovadesayisi = document.getElementById("depozitovadesayisi").value; //number   



              
kirabedeli=kirabedeli.trim();
depozitobedeli=depozitobedeli.trim();
//odenendepozito=odenendepozito.trim();           
       
    let lines = []; 
     let checkbit=0; 
       let depocheckbit=0;           
       /* alert(kaporamiktari);        
        alert(kaporaparabirimi);  
        alert(kirabedeli);
        alert(kirabedeliparabirimi);
        alert(kirasuresi);
        alert(kiraodemebicimi);*/
    if(kaporamiktari!="" && topalkaporamiktari!=""){
                if(parseFloat(kaporamiktari)>parseFloat(topalkaporamiktari)){
    alert("Toplam kapora miktarı tahsil edilenden daha az girilmiştir. Düzeltilmesi gerekir.");
              document.getElementById("topalkaporamiktari").value='';
                    document.getElementById("kaporamiktari").value='';
              checkbit=1;
}
    }
                
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
          
          
            if(suodemebicimi!="")       
      { 
          if(kirasuresi % parseInt(suodemebicimi, 10) !==0)
          {
              alert("Kira Süresi su ödeme biçimi uyumlu değildir.");
              document.getElementById("suodemebicimi").value='';
              document.getElementById("subedeli").value='';
              checkbit=1;
          }
      }
                 if(hizmetodemebicimi!="")       
      {
           if(kirasuresi % parseInt(hizmetodemebicimi, 10) !==0)
          {
              alert("Kira Süresi hizmet ödeme biçimi uyumlu değildir.");
              document.getElementById("hizmetodemebicimi").value='';
              document.getElementById("hizmetbedeli").value='';
              checkbit=1;
          }
      }
                 if(internetodemebicimi!="")       
      {
           if(kirasuresi % parseInt(internetodemebicimi, 10) !==0)
          {
              alert("Kira Süresi internet ödeme biçimi uyumlu değildir.");
              document.getElementById("internetodemebicimi").value='';
              document.getElementById("internetbedeli").value='';
              checkbit=1;
          }
      }
          
                       if(aidatodemebicimi!="")       
      {
           if(kirasuresi % parseInt(aidatodemebicimi, 10) !==0)
          {
              alert("Kira Süresi aidat ödeme biçimi uyumlu değildir.");
              document.getElementById("aidatodemebicimi").value='';
              checkbit=1;
          }
      }
          
          
         if(kirabedeliparabirimi!==belirlenmiskirabedeliparabirimi)
          {
              alert("Belirlenmiş kira bedeli para birimi ile girilmiş olan kira bedeli para birimi uyumlu değildir.");
              document.getElementById("kirabedeliparabirimi").value='';
              checkbit=1;
          }   
         
          
      }
                
          
                
                /***/
                 if(depozitobedeliparabirimi!="" && depozitobedeli!=""){
              if(kaporaparabirimi === depozitobedeliparabirimi)
           {
            depocheckbit=1;
               if(Math.ceil(depozitobedeli)>Math.ceil(topalkaporamiktari)){
                  
                   line12="Depozitoya sayılan kapora miktarı: " + Math.ceil(topalkaporamiktari) + " " + kaporaparabirimi;
                   
                   ekdepozitoodemesi=Math.ceil(depozitobedeli-topalkaporamiktari);
                   document.getElementById("odenendepozito").value=ekdepozitoodemesi;
           //alert(document.getElementById("odenendepozito").value);
                  /* if(document.getElementById("odenendepozito").value==ekdepozitoodemesi)
       {
           
        line13= "Depozitoya ek olarak alınacak ödeme miktarı: " + Math.ceil(depozitobedeli-kaporamiktari) + " " + kaporaparabirimi +"  "+"<span class='checkmark'>✔</span>";     
       } else
           {
            line13= "Depozitoya ek olarak alınacak ödeme miktarı: " + Math.ceil(depozitobedeli-kaporamiktari) + " " + kaporaparabirimi +"  "+"<span class='crossmark'>&cross;</span>"; 
                alert("Depozitoya ek olarak alınacak ödeme miktarı Yüksek veya Düşük miktar girilmiştir. Düzeltmeyi yaparak tekrar deneyiniz.");
             document.getElementById("odenendepozito").value='';  
           }*/
      
                   
                   
    
               }
               if(Math.ceil(depozitobedeli)<Math.ceil(topalkaporamiktari)){
                  line12="";
                 line13="";
            alert("Depozito miktarı kapora miktarından az olamaz. Gerekli güncellemeleri yaptıktan sonra tekrar deneyiniz.");
                   document.getElementById("depozitobedeli").value='';
                
               }
                if(Math.ceil(depozitobedeli)==Math.ceil(topalkaporamiktari)){
                  line12="Depozitoya sayılan kapora miktarı: " + Math.ceil(depozitobedeli) + " " + kaporaparabirimi;
                  line13=""; 
                  document.getElementById("odenendepozito").value=0;  
                    //alert(document.getElementById("odenendepozito").value);
                 /*  if(document.getElementById("odenendepozito").value==0)
       {
           document.getElementById("odenendepozito").value=0;
           alert(document.getElementById("odenendepozito").value);
        line13= "Depozitoya ek olarak alınacak ödeme miktarı SIFIR dır. "+"<span class='checkmark'>✔</span>";     
       }else
           {
               document.getElementById("odenendepozito").value=0;
            line13= "Depozitoya ek olarak alınacak ödeme miktarı SIFIR dır. Ödenen depozito değerini SIFIR yapınız. "+"<span class='crossmark'>&cross;</span>"; 
              // alert("Depozitoya ek olarak alınacak ödeme miktarı SIFIR dır. Ödenen depozito değerini SIFIR yapınız.");
             //document.getElementById("odenendepozito").value='';  
           } */
                    
                    
               }
      
               
           }else
               {
                 checkbit=1;
                   alert("Kapora ve depozito para birimi uyuşmamaktadır. gerekli güncellemeleri yaptıktan sonra tekrar deneyiniz.");
                   document.getElementById("depozitobedeliparabirimi").value='';
                   
               }
                 
          }
                /**/
                
                
                
                
                
      
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
    //lines.push(line7);
    lines.push(line8);
    //lines.push(line10);
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
    
    </script>


<!-------------------------------------------------------->
 
<br>
              <br>
     <div class="parentmain2">
    <div class="options">
      <div class="container"> 
           <div class="row">
          
              <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:16px;">KAPORA KAYIT SAYFASI</label>
              
          </div>
          <button id="toggleButton">Yapı/Mülk Bilgilerini Göster/Gizle</button>
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

  
          </div><!--DISPLAY  NONE-->
          
          
          
          
          
            <br>
          <hr>
        <form  id="busers" action="/kaporakayitgiraction.php" method="post" onsubmit="return validatecallForm()" enctype="multipart/form-data">
          <div class="row">
            <div class="col-25">
              <label for="adresolustur" style="font-weight:bolder">Kapora Bilgilerini Giriniz</label>
            </div>
          </div>
          <hr>
           <input type="text" id="mulkno" name="mulkno" class="form-control" value="<?php echo $mulkno;?>" required="required" style="display:none;">
           <input type="text" id="yapino" name="yapino" class="form-control" value="<?php echo $yapino;?>" required="required" style="display:none;">
               <!-- Hidden inputs to store calculated values -->
        <input type="hidden" id="toplamkirabedeli" name="toplamkirabedeli">
        <input type="hidden" id="taksitmiktari" name="taksitmiktari">
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
              <label for="acente" style="font-weight:bolder">Acente*</label>
            </div>
            <div class="col-75">
               
               <div id="inputFieldsContainer">
             <input type="text" name="acente" class="form-control" id="searchmi" oninput="handleInputChangemi();" onkeyup="handleInputDeletionmi();" onclick="this.select();" title="Sadece harf ve bazı özel karakterler girilebilir." autocomplete="off" onchange="changecolor();" pattern="[A-Za-zöÖçÇşŞıIİğĞüÜ\s\/\\\-_.;:,?&*0-9 ]{1,80}" maxlength="80" required="required">
             
        <br>
        <select id="dropdownmi" size="5" style="display: none;width:100%;"></select>
        <br> 
        </div>
               
               <!--<input type="text" id="mahalle" name="mahalle" class="form-control" pattern="[A-Za-zöÖçÇşŞıIİğĞüÜ\s\/\\\-_.;:,?&*0-9 ]{1,80}" maxlength="80" title="Sadece harf ve bazı özel karakterler girilebilir." required="required">-->
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
              <label for="kimlikno" style="font-weight:bolder">Kimlik No *</label>
            </div>
            <div class="col-75">
               <input type="text" id="kimlikno" name="kimlikno" class="form-control" pattern="[A-Za-zöÖçÇşŞıIİğĞüÜ\s\/\\\-_.;:,?&*0-9 ]{1,80}" maxlength="30" title="Sadece harf ve bazı özel karakterler girilebilir." required="required">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="kimliktipi" style="font-weight:bolder">Kimlik Tipi *</label>
            </div>
            <div class="col-75">
               <select name="kimliktipi" id="kimliktipi" class="form-control" required="required">
                  <option></option>
                  <option>Kimlik</option>
                  <option>Pasaport</option>
                  <option>Ehliyet</option>
              </select>
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
              <label for="email" style="font-weight:bolder">E-mail Adresi *</label>
            </div>
            <div class="col-75">
              <input type="text" id="email" name="email" style="font-weight:bolder" required="required" maxlength="40">
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
              <label for="kaporamiktari" style="font-weight:bolder">Tahsil Edilen Kapora Miktarı * </label>
              <br>
              <label for="kaporamiktari" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
            </div>
            <div class="col-75">
             <input type="text" id="kaporamiktari" name="kaporamiktari" class="form-control"  pattern="\d+(\.\d{1,2})?" maxlength="20" title="Sadece sayı veya ondalık sayı girilebilir." required="required">
            </div>
            </div>
            <div class="row">
            <div class="dosya-alani" style="display:none;">
            
            <div class="row">
            <div class="col-25">
              <label for="topalkaporamiktari" style="font-weight:bolder">Toplam Tahsil Edilecek Kapora Miktarı * </label>
              <br>
              <label for="topalkaporamiktari" style="font-size:11px;font-weight:bolder">Parçalı kapora tahsilatı yapılabilir. Parçalı kapora tahsilatı yapılmayacaksa yukarıda tahsil edilen kapora miktarı girilecektir. </label>
            </div>
            <div class="col-75">
             <input type="text" id="topalkaporamiktari" name="topalkaporamiktari" class="form-control"  pattern="\d+(\.\d{1,2})?" maxlength="20" title="Sadece sayı veya ondalık sayı girilebilir." required="required">
            </div>
            </div>
            
            <div class="col-25" >
              <label for="kaporaparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <select name="kaporaparabirimi" id="kaporaparabirimi" class="form-control">
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
            
            
            
            <?php
            if($mulkkapalimi==1) 
            {
            $kiraacesastarih=$kirayaactarih;
            }else
            {
            $kiraacesastarih=date('Y-m-d');
            }
            
            ?>
            
            
            
          <div class="row">
            <div class="col-25">
              <label for="kaporateslimtarihi" style="font-weight:bolder">Kapora Teslim Tarihi *</label>
            </div>
            <div class="col-75">
              <input type="date" id="kaporateslimtarihi" name="kaporateslimtarihi" style="font-weight:bolder" required="required" value="<?php echo $kiraacesastarih;?>" readonly>   
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-25">
              <label for="kaporabelge" style="font-weight:bolder">Kapora Belge *</label>
              <br>
              <label for="kaporabelge" style="font-size:11px;font-weight:bolder">Birden Fazla Dosya CTRL ile seçilebilir.</label>
            </div>
            <div class="col-75">
             <input type="file" name="kaporabelge[]" id="kaporabelge" class="custom-file-input" accept=".pdf,.jpg,.png" multiple onchange="showSelectedFiles4(this)" required="required">
             <br><div id="fileNames4"></div> 
            </div>
          </div>
          <hr>
           <div class="row">
            <div class="col-25">
              <label for="kirabedeli" style="font-weight:bolder">Kiralama Bedeli (Aylık) *</label>
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
              <label for="kirasuresi" style="font-weight:bolder">Kiralama Süresi (AY) *</label>
            </div>
            <div class="col-75">
               <input type="number" id="kirasuresi" name="kirasuresi" class="form-control" min="1" max="60" required="required">
            </div>
          </div>
          <hr>
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
          <hr>
           <div class="row">
            <div class="col-25">
              <label for="depozitobedeli" style="font-weight:bolder">Depozito Bedeli *</label>
              <label for="depozitobedeli" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
              <label for="depozitobedeli" style="font-size:11px;font-weight:bolder">Kapora Depozitoya dahil edilmiştir/aktarılmıştır.</label>
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
                  <!--<option>TL</option>
                  <option>EURO</option>
                  <option>DOLAR</option>-->
                  <option>STERLIN</option>
              </select>
            </div>
          </div>
           </div>
            </div>
           <div class="row">
            <div class="col-25">
              <label for="odenendepozito" style="font-weight:bolder">Ödenecek Depozito Bedeli *</label>
              <label for="depozitobedeli" style="font-size:11px;font-weight:bolder">Kapora Depozitoya dahil edilmiştir/aktarılmıştır.</label>
            </div>
            <div class="col-75">
               <input type="text" id="odenendepozito" name="odenendepozito" class="form-control" pattern="\d+(\.\d{1,2})?" maxlength="20" title="Sadece sayı veya ondalık sayı girilebilir." readonly required="required" style="background-color:#DCDCDC;">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="komisyon" style="font-weight:bolder">Komisyon *</label>
            </div>
            <div class="col-75">
               <select name="komisyon" id="komisyon" class="form-control" required="required">
                  <option>YOK</option>
                  <option>VAR</option>
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
             <select name="komisyonbedeliparabirimi" id="komisyonbedeliparabirimi" class="form-control">
                  <option></option>
                  <!--<option>TL</option>
                  <option>EURO</option>
                  <option>DOLAR</option>-->
                  <option>STERLIN</option>
              </select>
            </div>
          </div>
           </div>
          
           <!-- <div class="row">
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
          </div>-->
           
            </div> 
            
            <div class="row">
            <div class="col-25">
              <label for="aidat" style="font-weight:bolder">Aidat *</label>
            </div>
            <div class="col-75">
               <select name="aidat" id="aidat" class="form-control" required="required" readonly style="background-color:#DCDCDC;">
                  <option>VAR</option>  
              </select>
            </div>
          </div>
          <div class="dosya-alani6" style="display:none;">
           <div class="row">
            <div class="col-25">
              <label for="aidatbedeli" style="font-weight:bolder">Aidat Bedeli *</label>
              <label for="aidatbedeli" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
            </div>
            <div class="col-75">
               <input type="text" id="aidatbedeli" name="aidatbedeli" class="form-control" pattern="\d+(\.\d{1,2})?" maxlength="20" title="Sadece sayı veya ondalık sayı girilebilir." value="<?php echo $belirlenmisguncelaidat; ?>" readonly style="background-color:#DCDCDC;">
            </div>
          </div>
          <div class="row">
            
            <div class="col-25" >
              <label for="aidatbedeliparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <select name="aidatbedeliparabirimi" id="aidatbedeliparabirimi" class="form-control" readonly style="background-color:#DCDCDC;">
                  <option><?php echo $belirlenmisaidatparabirimi; ?></option>
              </select>
            </div>
          </div>
           </div>
           
           <div class="row">
            <div class="col-25">
              <label for="aidatodemebicimi" style="font-weight:bolder">Aidat Ödeme Biçimi *</label>
            </div>
            <div class="col-75">
               <select name="aidatodemebicimi" id="aidatodemebicimi" class="form-control">
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
              <label for="buayaidat" style="font-weight:bolder">Bu Ay İçin Aidat Alınacak Mı? *</label>
            </div>
            <label for="buayaidat" style="font-size:11px;font-weight:bolder">Her ayın 16'sından sonra alınmayabilir..</label>
            <div class="col-75">
               <select name="buayaidat" id="buayaidat" class="form-control" required>
                  <option>HAYIR</option>
                  <option>EVET</option>
              </select>
            </div>
          </div>
           
           
           
           
           
           
           
           
           
           
           
           
            <div class="row">
            <div class="col-25">
              <label for="su" style="font-weight:bolder">Su Bedeli *</label>
            </div>
            <div class="col-75">
               <select name="su" id="su" class="form-control" required="required">
                  <option>YOK</option>
                  <option>VAR</option>
              </select>
            </div>
          </div>
          <div class="dosya-alani7" style="display:none;">
           <div class="row">
            <div class="col-25">
              <label for="subedeli" style="font-weight:bolder">Su Bedeli *</label>
              <label for="subedeli" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
            </div>
            <div class="col-75">
               <input type="text" id="subedeli" name="subedeli" class="form-control" pattern="\d+(\.\d{1,2})?" maxlength="20" title="Sadece sayı veya ondalık sayı girilebilir.">
            </div>
          </div>
          <div class="row">
            
            <div class="col-25" >
              <label for="subedeliparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <select name="subedeliparabirimi" id="subedeliparabirimi" class="form-control">
                  <option></option>
                  <!--<option>TL</option>
                  <option>EURO</option>
                  <option>DOLAR</option>-->
                  <option>STERLIN</option>
              </select>
            </div>
          </div>
           </div>
           <div class="row">
            <div class="col-25">
              <label for="suodemebicimi" style="font-weight:bolder">Su Ödeme Biçimi *</label>
            </div>
            <div class="col-75">
               <select name="suodemebicimi" id="suodemebicimi" class="form-control">
                  <option></option>
                  <option value="1">HER AY</option>
                  <option value="3">HER ÜÇ AYDA BİR</option>
                  <option value="6">HER ALTI AYDA BİR</option>
                  <option value="12">HER ONİKİ AYDA BİR</option>
              </select>
            </div>
          </div>
            </div> 
           
           
           
           
           
           
           
           
            <div class="row">
            <div class="col-25">
              <label for="hizmet" style="font-weight:bolder">Hizmet Bedeli *</label>
            </div>
            <div class="col-75">
               <select name="hizmet" id="hizmet" class="form-control" required="required">
                  <option>YOK</option>
                  <option>VAR</option>
              </select>
            </div>
          </div>
          <div class="dosya-alani8" style="display:none;">
           <div class="row">
            <div class="col-25">
              <label for="hizmetbedeli" style="font-weight:bolder">Hizmet Bedeli *</label>
              <label for="hizmetbedeli" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
            </div>
            <div class="col-75">
               <input type="text" id="hizmetbedeli" name="hizmetbedeli" class="form-control" pattern="\d+(\.\d{1,2})?" maxlength="20" title="Sadece sayı veya ondalık sayı girilebilir.">
            </div>
          </div>
          <div class="row">
            
            <div class="col-25" >
              <label for="hizmetbedeliparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <select name="hizmetbedeliparabirimi" id="hizmetbedeliparabirimi" class="form-control">
                  <option></option>
                  <!--<option>TL</option>
                  <option>EURO</option>
                  <option>DOLAR</option>-->
                  <option>STERLIN</option>
              </select>
            </div>
          </div>
           </div>
           <div class="row">
            <div class="col-25">
              <label for="hizmetodemebicimi" style="font-weight:bolder">Hizmet Ödeme Biçimi *</label>
            </div>
            <div class="col-75">
               <select name="hizmetodemebicimi" id="hizmetodemebicimi" class="form-control">
                  <option></option>
                  <option value="1">HER AY</option>
                  <option value="3">HER ÜÇ AYDA BİR</option>
                  <option value="6">HER ALTI AYDA BİR</option>
                  <option value="12">HER ONİKİ AYDA BİR</option>
              </select>
            </div>
          </div>
            </div> 
           
           
           
           <div class="row">
            <div class="col-25">
              <label for="internet" style="font-weight:bolder">İnternet Bedeli *</label>
            </div>
            <div class="col-75">
               <select name="internet" id="internet" class="form-control" required="required">
                  <option>YOK</option>
                  <option>VAR</option>
              </select>
            </div>
          </div>
           
                     <div class="dosya-alani9" style="display:none;">
           <div class="row">
            <div class="col-25">
              <label for="internetbedeli" style="font-weight:bolder">İnternet Bedeli *</label>
              <label for="internetbedeli" style="font-size:11px;font-weight:bolder">Miktardan sonra para birimi istenecektir.</label>
            </div>
            <div class="col-75">
               <input type="text" id="internetbedeli" name="internetbedeli" class="form-control" pattern="\d+(\.\d{1,2})?" maxlength="20" title="Sadece sayı veya ondalık sayı girilebilir.">
            </div>
          </div>
          <div class="row">
            
            <div class="col-25" >
              <label for="internetbedeliparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <select name="internetbedeliparabirimi" id="internetbedeliparabirimi" class="form-control">
                  <option></option>
                  <!--<option>TL</option>
                  <option>EURO</option>
                  <option>DOLAR</option>-->
                  <option>STERLIN</option>
              </select>
            </div>
          </div>
           </div>
           <div class="row">
            <div class="col-25">
              <label for="internetodemebicimi" style="font-weight:bolder">İnternet Ödeme Biçimi *</label>
            </div>
            <div class="col-75">
               <select name="internetodemebicimi" id="internetodemebicimi" class="form-control">
                  <option></option>
                  <option value="1">HER AY</option>
                  <option value="3">HER ÜÇ AYDA BİR</option>
                  <option value="6">HER ALTI AYDA BİR</option>
                  <option value="12">HER ONİKİ AYDA BİR</option>
              </select>
            </div>
          </div>
            </div>
           
           
           
           
           
           
            </div>
            <div class="row">
            <div class="col-25">
              <label for="kapozelnot" style="font-weight:bolder">Özel Not (Max 500 karakter)</label>
            </div>
            <div class="col-75">
             <textarea id="kapozelnot" name="kapozelnot" maxlength="500"></textarea>  
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
            <input type="submit" name="submit" id="onaybutton" value="Onayla ve Kapora Oluştur">
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
                     document.getElementById("kaporamiktari").addEventListener("change", function() {
hesaplakiralama();
});
                      document.getElementById("kaporaparabirimi").addEventListener("change", function() {
hesaplakiralama();
});
    
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
    
       document.getElementById("topalkaporamiktari").addEventListener("change", function() {
hesaplakiralama();
        
        
});   
    
           document.getElementById("aidatodemebicimi").addEventListener("change", function() {
hesaplakiralama();
        
        
});   
              document.getElementById("suodemebicimi").addEventListener("change", function() {
hesaplakiralama();
        
        
}); 
    
                document.getElementById("hizmetodemebicimi").addEventListener("change", function() {
hesaplakiralama();
        
        
});   
                    document.getElementById("internetodemebicimi").addEventListener("change", function() {
hesaplakiralama();
        
        
}); 
    
                      document.getElementById("dropdownmi").addEventListener("change", function() {
    // Dropdown'dan seçilen değeri al
    //alert(this.value);
document.getElementById("searchmi").value=this.value;
    // Seçilen değeri bir HTML elemanına yazdır
    

    // Seçilen değeri bir JavaScript değişkenine atamak istiyorsanız:
    // var myVariable = selectedValue;
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
          
     let phone1 = document.forms["busers"]["iletisim1"].value;
     let email = document.forms["busers"]["email"].value;
     let kapozelnot = document.forms["busers"]["kapozelnot"].value;  
     
           
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
  if(kapozelnot!==''){
    if (!pattern.test(kapozelnot)) {
    alert("Özel Not içeriğinde sistemin kabul etmediği özel karakterler var. Onları silip yeniden deneyiniz.");
                     document.getElementById("kapozelnot").value = '';
                     document.getElementById("kapozelnot").focus();
            return false;
  } 
  }
       
        
if(ayminkirabedeli>Math.ceil(kirabedeli)){
     const isConfirmed = confirm("Aylık kira bedeli belirlenen minimum kira bedelinden daha azdır. Yine de devam etmek istiyor musunuz?");
    if (isConfirmed) {
     
    } else {
        alert("Form gönderimi iptal edildi.");
        return false;
    }
}
    

 
       
         const inputValue = document.getElementById("searchmi").value;

            // Array içinde olup olmadığını kontrol et
            if (values.includes(inputValue)) {
               
            } else {
                alert("Girilen acente tanımlı değil!!");
                document.getElementById("searchmi").value = '';
                     document.getElementById("searchmi").focus();
                 return false;
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
                
       /*         
      if($(this).val() !== parseFloat($('#odenendepozito').val())){
          $('.dosya-alani4').show();
          $('#depozitovadesayisi').prop('required', true);
      } else
          {
             $('.dosya-alani4').hide();
              $('#depozitovadesayisi').prop('required', false);
          }
                
          */      
    });
        
        

    // Sayfa yüklendiğinde kontrol etmek için
    $('#depozitobedeli').trigger('change');   
        
        
    /*    
        
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
        
     */   

    // Sayfa yüklendiğinde kontrol etmek için
    //$('#odenendepozito').trigger('change'); 
        
        
        
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
   
        
        
$('#aidat').change(function () {
       
      if($(this).val() === "VAR"){
          $('.dosya-alani6').show();
          $('#aidatbedeli').prop('required', true);
          $('#aidatodemebicimi').prop('required', true);
          $('#aidatbedeliparabirimi').prop('required', true);
          $('#aidattahsili').prop('required', true);
      } else
          {
          $('.dosya-alani6').hide();
          $('#aidatbedeli').prop('required', false);
          $('#aidatodemebicimi').prop('required', false);
          $('#aidatbedeliparabirimi').prop('required', false);
          $('#aidattahsili').prop('required', false);
          }
                
                
    });
        
        

    // Sayfa yüklendiğinde kontrol etmek için
    $('#aidat').trigger('change');         
        
     
        
    $('#su').change(function () {
       
      if($(this).val() === "VAR"){
          $('.dosya-alani7').show();
          $('#subedeli').prop('required', true);
          $('#suodemebicimi').prop('required', true);
          $('#subedeliparabirimi').prop('required', true);
          
      } else
          {
          $('.dosya-alani7').hide();
          $('#subedeli').prop('required', false);
          $('#suodemebicimi').prop('required', false);
          $('#subedeliparabirimi').prop('required', false);
          
          }
                
                
    });
        
        

    // Sayfa yüklendiğinde kontrol etmek için
    $('#su').trigger('change');     
        
      $('#hizmet').change(function () {
       
      if($(this).val() === "VAR"){
          $('.dosya-alani8').show();
          $('#hizmetbedeli').prop('required', true);
          $('#hizmetodemebicimi').prop('required', true);
          $('#hizmetbedeliparabirimi').prop('required', true);
          
      } else
          {
          $('.dosya-alani8').hide();
          $('#hizmetbedeli').prop('required', false);
          $('#hizmetodemebicimi').prop('required', false);
          $('#hizmetbedeliparabirimi').prop('required', false);
          
          }
                
                
    });
        
        

    // Sayfa yüklendiğinde kontrol etmek için
    $('#internet').trigger('change');     
     
              $('#internet').change(function () {
       
      if($(this).val() === "VAR"){
          $('.dosya-alani9').show();
          $('#internetbedeli').prop('required', true);
          $('#internetodemebicimi').prop('required', true);
          $('#internetbedeliparabirimi').prop('required', true);
          
      } else
          {
          $('.dosya-alani8').hide();
          $('#internetbedeli').prop('required', false);
          $('#internetodemebicimi').prop('required', false);
          $('#internetbedeliparabirimi').prop('required', false);
          
          }
                
                
    });
        
        

    // Sayfa yüklendiğinde kontrol etmek için
    $('#internet').trigger('change');  
        
        
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