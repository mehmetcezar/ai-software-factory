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
       

        .calculated { color: blue; font-weight: bold; }
        .hidden { display: none; }
        
</style>     
    
    
</head>
  
 <script>
             function opensession(){
        window.location.href = "https://whitelotustest.online/kiralamaportal.php";
    }
     function anamenu(){
         window.location.href = "https://whitelotustest.online/kiralamaportal.php";
     }
    </script>
  
    <?php
       
    
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
    if($_POST['mulkno']!=null)
    {$mulkid=$_POST['mulkno']; //ID BU KISIM ve while içindeki ifdeki row id eşitliği
    }else
    {
      Notdevam();
    }
    
    
    if($_POST['kirakaporasonkey']!=null)
    {$kirakaporasonkey=$_POST['kirakaporasonkey']; //ID BU KISIM ve while içindeki ifdeki row id eşitliği
    }else
    {
      Notdevam();
    }
    
  $_SESSION['kiralamaid']=$kirakaporasonkey; 
    /*
    echo $mulkid."<br>";
    echo $yapimulkbilgileri;
    exit();
    */
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
        //$kirakey=$row['kirakaporasonkey'];
        $kirakaporaeklendi=$row['kirakaporaeklendi'];
        $kiralamaonayinda=$row['kiralamaonayinda'];
        $kaporaonayinda=$row['kaporaonayinda'];
        $kiralandi=$row['kiralandi'];
      
      
       $belirlenmiskirabedeli=$row['kirabedeli'];
      $belirlenmiskirabedeliparabirimi=$row['kirabedeliparabirimi'];
      //$belirlenmismaxkirainoran=$row['maxkirainoran'];
      $belirlenmisguncelaidat=$row['guncelaidat'];
      $belirlenmisaidatparabirimi=$row['aidatparabirimi'];
      $cronjobiptalkapora=$row['cronjobiptalkapora'];
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
        $yonetimsozlesmesi=$row['yonetimsozlesmesi'];
           
}
     
  $result -> free_result();
} 
  

if ($result = $conn -> query("SELECT topalkaporamiktari,kaporamiktari,date FROM kirakaporakayit where kirakaporakayit.isdeleted !=1 AND kirakaporakayit.kirakey='$kirakaporasonkey'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
        $topalkaporamiktari=$row['topalkaporamiktari'];
        $kaporamiktari = $row['kaporamiktari'];
        $minkaporadate=$row['date'];
           
}
     
  $result -> free_result();
}     
  
    
   if($topalkaporamiktari==$kaporamiktari){
    
      echo "<br>";
   echo "<br>";
       echo '<div class="parentmain2"><div class="options"><div class="container"><z class="textcap">Ek kapora tahsili eklenemez. Kapora girişinde belirtilen tüm kapora tahsil edilmiştir. Ana menüye dönmek için tıklayınız.</z><div class="gobackcapdiv"><br><br><button class="gobackcap" type="submit" name="submit" onclick="opensession()">Ana Menü</button></div></div></div></div>';
   exit();  
       
   } 
    
    
    
?>
    
  <hr>
          



<br>
              <br>
    <div class="parentmain2">
        <div class="options">
            <div class="container">
                <div class="row">
                    <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:16px;">TAHSİLAT SAYFASI</label>
                </div>

                <form id="busers" action="/kirakaporaektahsilaction.php" method="post" onsubmit="return validatecallForm()" enctype="multipart/form-data">
                    <div id="tahsilatFields">
                         <input type="text" id="mulkno" name="mulkno" class="form-control" value="<?php echo $mulkno;?>" required="required" style="display:none;">
           <input type="text" id="yapino" name="yapino" class="form-control" value="<?php echo $yapino;?>" required="required" style="display:none;">
        <input type="text" id="kirakaporasonkey" name="kirakaporasonkey" class="form-control" value="<?php echo $kirakaporasonkey;?>" required="required" style="display:none;">
                    </div>
          <div class="row">
            <div class="col-25">
              <label for="kaporamiktari" style="font-weight:bolder">Tahsil Edilen Kapora Miktarı * </label>
              <br>
            </div>
            <div class="col-75">
             <input type="text" id="kaporamiktari" name="kaporamiktari" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $kaporamiktari. " STERLIN";?>">
            </div>
            </div>
             <div class="row">
            <div class="col-25">
              <label for="topalkaporamiktari" style="font-weight:bolder">Toplam Tahsil Edilecek Kapora Miktarı * </label>
              <br>
            </div>
            <div class="col-75">
             <input type="text" id="topalkaporamiktari" name="topalkaporamiktari" class="form-control" readonly style="background-color:#DCDCDC;" value="<?php echo $topalkaporamiktari. " STERLIN";?>">
            </div>
            </div>
                  <br>
                  <br> 
                   
                    <div class="row">
                        <div class="col-75">
                            <button type="button" onclick="addTahsilatForm()">Yeni Tahsilat Alanı Ekle</button>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <input type="submit" name="submit" id="onaybutton" value="Tahsilatı Al">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let tahsilatCount = 0; // Eklenecek tahsilat bölümlerinin sayısı için sayaç

        // Yeni form eklemek için fonksiyon
        function addTahsilatForm() {
              // En fazla 6 tahsilat eklenebilir
    if (tahsilatCount >= 1) {
        alert("En fazla 1 tahsilat eklenebilir.");
        return;
    }
            
            tahsilatCount++;
            const formId = 'tahsilatForm' + tahsilatCount;

            // Yeni tahsilat formunun HTML yapısı
            const newForm = `

                <div class="tahsilat-form" id="${formId}">
                    <div class="row">
                        <div class="col-25">
                            <label for="tahsilattarihi_${formId}" style="font-weight:bolder">Tahsilat Tarihi *</label>
                        </div>
                        <div class="col-75">
                            <input type="date" id="tahsilattarihi_${formId}" name="tahsilattarihi[]" style="font-weight:bolder" min="<?php echo $minkaporadate; ?>" required="required">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-25">
                            <label for="tahsilatturu_${formId}" style="font-weight:bolder">Tahsilat Türü*</label>
                        </div>
                        <div class="col-75">
                            <select name="tahsilatturu[]" id="tahsilatturu_${formId}" class="form-control" required onchange="handleCurrencyChange('${formId}')">
                                <option></option>
                                <option>KAPORA</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <label style="font-weight:bold;font-size:16px;color:#05059c;">TAHSİLAT MİKTARI</label>
                    <br>
                    <h5>Tahsilat</h5>
                    <div id="kaporaSection_${formId}">
                        <div class="row">
                            <div class="col-25"><label for="kaporaMiktar_${formId}">Tahsilat Miktarı *</label></div>
                            <div class="col-75"><input type="number" id="kaporaMiktar_${formId}" name="kaporaMiktar[]" class="form-control" step="0.01" placeholder="Örn: 120.35" maxlength="20" title="Sadece sayı veya ondalık sayı girilebilir." oninput="calculateSterling('${formId}')" required="required"></div>
                        </div>
                        <div class="row">
                            <div class="col-25"><label for="kaporaPB_${formId}">Para Birimi</label></div>
                            <div class="col-75"><select id="kaporaPB_${formId}" name="kaporaPB[]" class="form-control" onchange="handleCurrencyChange('${formId}'); calculateSterling('${formId}')" required="required">
                                <option></option><option>STERLIN</option></select></div>
                        </div>
                        <div id="kaporaExchangeFields_${formId}" class="hidden">
                            <div class="row">
                                <div class="col-25"><label>TL'den Sterlin'e Çevirim Oranı</label></div>
                                <div class="col-75"><input type="number" id="kaporaTlRate_${formId}" name="kaporaTlRate[]" class="form-control" step="0.01" placeholder="Örn: 25.35" oninput="calculateSterling('${formId}')"></div>
                            </div>
                            <div id="kaporaExtraRateFields_${formId}" class="row hidden">
                                <div class="col-25"><label id="kaporaToTlRateLabel_${formId}"></label></div>
                                <div class="col-75"><input type="number" id="kaporaToTlRate_${formId}" name="kaporaToTlRate[]" class="form-control" step="0.01" placeholder="Örn: 25.35" oninput="calculateSterling('${formId}')"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25"><label for="kaporaSterling_${formId}">Hesaplanan Sterlin Değeri (GBP)</label></div>
                            <div class="col-75"><input type="text" id="kaporaSterling_${formId}" name="kaporaSterling[]" class="form-control" readonly></div>
                        </div>
                        <div class="row">
                            <div class="col-25"><label for="kaporaBelge_${formId}">Tahsilat Belge *</label><small> (Tek Dosya seçilebilir)</small></div>
                            <div class="col-75"><input type="file" name="kaporaBelge[]" id="kaporaBelge_${formId}" class="custom-file-input" accept=".pdf,.jpg,.png" onchange="showSelectedFiles('${formId}')" required="required"><br><div id="kaporaFileNames_${formId}"></div></div>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-75">
                            <button type="button" onclick="removeTahsilatForm('${formId}')">Kaldır</button>
<hr>
                        </div>
                    </div>
                </div>

            `;

            // Yeni formu ekleyelim
            document.getElementById('tahsilatFields').insertAdjacentHTML('beforeend', newForm);
        }

        // Form kaldırma fonksiyonu
        function removeTahsilatForm(formId) {
           
            const formElement = document.getElementById(formId);
            formElement.remove(); // Formu kaldırıyoruz
            
            tahsilatCount--;
        }

        // Para birimi değiştiğinde ilgili alanların görünürlüğünü ayarlama fonksiyonu
       /* function handleCurrencyChange(section) {
            const currency = document.getElementById("kaporaPB_" + section).value;
            const exchangeFields = document.getElementById("kaporaExchangeFields_" + section);
            const extraRateFields = document.getElementById("kaporaExtraRateFields_" + section);
            const toTlRateLabel = document.getElementById("kaporaToTlRateLabel_" + section);

            // STERLIN seçildiğinde, diğer alanları gizle
            if (currency === "STERLIN") {
                exchangeFields.classList.add("hidden");
                extraRateFields.classList.add("hidden");

            } else if (currency === "TL") {
                exchangeFields.classList.remove("hidden");
                extraRateFields.classList.add("hidden");
  
            } else if (currency === "EURO" || currency === "DOLAR") {
                exchangeFields.classList.remove("hidden");
                extraRateFields.classList.remove("hidden");
                toTlRateLabel.innerText = (currency === "EURO" ? "Euro'dan TL'ye Çevirim Oranı" : "Dolar'dan TL'ye Çevirim Oranı");
            }
        }
*/
        function handleCurrencyChange(section) {
    const currency = document.getElementById("kaporaPB_" + section).value;
    const exchangeFields = document.getElementById("kaporaExchangeFields_" + section);
    const extraRateFields = document.getElementById("kaporaExtraRateFields_" + section);
    const toTlRateLabel = document.getElementById("kaporaToTlRateLabel_" + section);
            


    // STERLIN seçildiğinde, diğer alanları gizle ve "required" kaldır
    if (currency === "STERLIN") {
       // extraRateFields içindeki inputları required olmayan hale getir
        extraRateFields.querySelectorAll('input').forEach(function(input) {
            input.removeAttribute('required');
        });
          exchangeFields.querySelectorAll('input').forEach(function(input) {
            input.removeAttribute('required');
        });
        exchangeFields.classList.add("hidden");
        extraRateFields.classList.add("hidden");
        
        
    } 
    // TL seçildiğinde, exchangeFields göster, extraRateFields'ı gizle
    else if (currency === "TL") {
        
         // extraRateFields içindeki inputları required olmayan hale getir
        extraRateFields.querySelectorAll('input').forEach(function(input) {
            input.removeAttribute('required');
        });
          exchangeFields.querySelectorAll('input').forEach(function(input) {
            input.removeAttribute('required');
        });
      
        exchangeFields.classList.remove("hidden");
        extraRateFields.classList.add("hidden");

        // extraRateFields içindeki inputları required olmayan hale getir
       
        document.getElementById("kaporaTlRate_" + section).setAttribute('required', 'required');
        /*exchangeFields.querySelectorAll('input').forEach(function(input) {
            input.setAttribute('required', 'required');
        });*/
    } 
    // EURO veya DOLAR seçildiğinde, exchangeFields ve extraRateFields'ı göster, "required" ekle
    else if (currency === "EURO" || currency === "DOLAR") {
        exchangeFields.classList.remove("hidden");
        extraRateFields.classList.remove("hidden");
        
        // Euro/Dolar seçildiğinde, toTlRateLabel'ı değiştir
        toTlRateLabel.innerText = (currency === "EURO" ? "Euro'dan TL'ye Çevirim Oranı" : "Dolar'dan TL'ye Çevirim Oranı");

        // extraRateFields içindeki inputları required yap
        extraRateFields.querySelectorAll('input').forEach(function(input) {
            input.setAttribute('required', 'required');
        });
        exchangeFields.querySelectorAll('input').forEach(function(input) {
            input.setAttribute('required', 'required');
        });
    }
}
        
        // Sterling hesaplama fonksiyonu
        function calculateSterling(section) {
            var kaporamiktari = <?php echo json_encode($kaporamiktari); ?>;
            var topalkaporamiktari = <?php echo json_encode($topalkaporamiktari); ?>;
            
            
            const miktar = parseFloat(document.getElementById("kaporaMiktar_" + section).value);
            const currency = document.getElementById("kaporaPB_" + section).value;
            const tlRate = parseFloat(document.getElementById("kaporaTlRate_" + section).value);
            const toTlRate = parseFloat(document.getElementById("kaporaToTlRate_" + section).value || 1);

            if (!miktar || (currency !== 'STERLIN' && (!tlRate || (currency !== 'TL' && !toTlRate)))) {
                document.getElementById("kaporaSterling_" + section).value = "";
                return;
            }
            
            if (miktar>(topalkaporamiktari-kaporamiktari)) {
                alert("Toplam tahsil edilmesi gereken kaporadan fazla bir miktar girilmiştir. değeri kontrol ediniz.");
                document.getElementById("kaporaMiktar_" + section).value = "";
                return;
            }
            
            if (miktar<0) {
                alert("Negatif sayı girilemez.");
                document.getElementById("kaporaMiktar_" + section).value = "";
                return;
            }

            let sterlingValue = 0;

            if (currency === "STERLIN") {
                sterlingValue = miktar;
            } else if (currency === "TL") {
                sterlingValue = miktar * (1/tlRate);
            } else if (currency === "EURO" || currency === "DOLAR") {
                sterlingValue = miktar * toTlRate * (1/tlRate);
            }

            document.getElementById("kaporaSterling_" + section).value = sterlingValue.toFixed(2);
        }

        // Dosya seçildiğinde dosya isimlerini gösteren fonksiyon
        function showSelectedFiles(section) {
            const fileNamesDiv = document.getElementById("kaporaFileNames_" + section);
            const input = document.getElementById("kaporaBelge_" + section);

            fileNamesDiv.innerHTML = ""; // Önceki dosya isimlerini temizle

            if (input.files && input.files.length > 0) {
                for (let i = 0; i < input.files.length; i++) {
                    const fileName = input.files[i].name;
                    const p = document.createElement("p");
                    p.textContent = fileName;
                    fileNamesDiv.appendChild(p);
                }
            } else {
                const p = document.createElement("p");
                p.textContent = "Dosya seçilmedi";
                fileNamesDiv.appendChild(p);
            }
        }
    </script>
 
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
    function handleCurrencyChange(section) {
            const currency = document.getElementById(section + "PB").value;
            const exchangeFields = document.getElementById(section + "ExchangeFields");
            const extraRateFields = document.getElementById(section + "ExtraRateFields");
            const toTlRateLabel = document.getElementById(section + "ToTlRateLabel");

            
         if (currency === "STERLIN") {
                exchangeFields.classList.add("hidden");
                extraRateFields.classList.add("hidden");
            } else if (currency === "TL") {
                exchangeFields.classList.remove("hidden");
                extraRateFields.classList.add("hidden");
            } else if (currency === "EURO" || currency === "DOLAR") {
                exchangeFields.classList.remove("hidden");
                extraRateFields.classList.remove("hidden");
                toTlRateLabel.innerText = (currency === "EURO" ? "Euro'dan TL'ye Çevirim Oranı" : "Dolar'dan TL'ye Çevirim Oranı");
            }
        }

        function calculateSterling(section) {
    const miktar = parseFloat(document.getElementById(section + "Miktar").value);
    const currency = document.getElementById(section + "PB").value;
    const tlRate = parseFloat(document.getElementById(section + "TlRate").value);
    const toTlRate = parseFloat(document.getElementById(section + "ToTlRate").value || 1);

    if (!miktar || (currency !== 'STERLIN' && (!tlRate || (currency !== 'TL' && !toTlRate)))) {
        document.getElementById(section + "Sterling").value = "";
        return;
    }

    let sterlingValue = 0;

    if (currency === "STERLIN") {
        sterlingValue = miktar; // Girilen miktarı doğrudan Sterling değerine atar
    } else if (currency === "TL") {
        sterlingValue = miktar * tlRate;
    } else if (currency === "EURO" || currency === "DOLAR") {
        sterlingValue = miktar * toTlRate * tlRate;
    }

    document.getElementById(section + "Sterling").value = sterlingValue.toFixed(2);
}

        function showSelectedFiles(section) {
            var fileNamesDiv = document.getElementById(section + "FileNames");
            var input = document.getElementById(section + "Belge");
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
                p.textContent = "Dosya seçilmedi";
                fileNamesDiv.appendChild(p);
            }
        }
    
    
    */

    function validateNotePattern(textarea) {
    const pattern = /^[A-Za-zöÖçÇşŞıIİğĞüÜ\s\/\\\-_.;:,?&*0-9 ]{1,500}$/;
    const errorMessage = document.getElementById(`noteError_${textarea.id.split('_')[1]}`);

    if (!pattern.test(textarea.value)) {
        errorMessage.style.display = 'block';
        textarea.setCustomValidity("Lütfen geçerli karakterler kullanın.");
    } else {
        errorMessage.style.display = 'none';
        textarea.setCustomValidity("");
    }
}
    
    
       function validatecallForm()  {
       /*   
     alert(document.getElementById("tahsilatnot_tahsilatForm" + i).value);
           for(i=0;i<=tahsilatCount;i++){
     let kapozelnot = document.getElementById("tahsilatnot_tahsilatForm" + i).value;  
alert(kapozelnot);
         var pattern = /^[A-Za-zöÖçÇşŞıIİğĞüÜ\s\/\\\-_.;:,?&*0-9 ]{1,500}$/;
  if(kapozelnot!=""){
    if (!pattern.test(kapozelnot)) {
    alert("Özel Not içeriğinde sistemin kabul etmediği özel karakterler var. Onları silip yeniden deneyiniz.");
                     document.getElementById("tahsilatnot_tahsilatForm" + i).value = '';
                     document.getElementById("tahsilatnot_tahsilatForm" + i).focus();
            return false;
  } 
  }
               }
       return false;*/
           
           if(tahsilatCount==0){
               alert("Herhangi bir form eklenmemiştir. O nedenle form gönderimi yapılamaz.");
                
            return false; 
               
           }
           
           
document.getElementById("loadingOverlay").style.display = "block";
       }
    
/*
    $(document).ready(function () {

             $('#kaporaPB').change(function () {   
         if($('#kaporaPB').val() === "EURO" || $('#kaporaPB').val() === "DOLAR"){
          $('#kaporaTlRate').prop('required', true);
          $('#kaporaToTlRate').prop('required', true);
             $('#kaporaBelge').prop('required', true);
      } else if ($('#kaporaPB').val() === "TL")
          {
             $('#kaporaTlRate').prop('required', true); 
              $('#kaporaBelge').prop('required', true);
          }
        else if ($('#kaporaPB').val() === "STERLIN")
          {
              
              $('#kaporaBelge').prop('required', true);
              $('#kaporaTlRate').prop('required', false);
          $('#kaporaToTlRate').prop('required', false);
          }
          else
          {
          $('#kaporaTlRate').prop('required', false);
          $('#kaporaToTlRate').prop('required', false);
              $('#kaporaBelge').prop('required', false);
          }
        
               
                
    });
        

    // Sayfa yüklendiğinde kontrol etmek için
    $('#kaporaPB').trigger('change'); 
 
  }); 
    */
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