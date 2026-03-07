<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
        <title>https://whitelotustest.online/</title>
        <meta name="ktmmo" content="kira satış danışman emlak alım">
        <link rel="stylesheet" type="text/css" href="main2.css?rnd=<?php echo rand()?>">
        <link rel="shortcut icon" type="image/x-icon" href="image/logo/logo.jpeg" /> 
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


</style>
    
    
    
</head>
  

    <script>/*
       function gopage2() {
  window.location.href = "https://www.ktimobina.com/userpage2.php";
    
    
}*/
              
    
    </script>
    <?php
    include 'usersession.php';
    //usersessiontimecheck();
            
         //echo "OK";     
session_start();
//echo $_SESSION['uname'];
//echo $_SESSION['sessionid'];
$session_id=$_SESSION['sessionid'];
$uname=$_SESSION['uname'];
$kultipi=$_SESSION['kultipi']; // kullanıcı yetkilerinin ve erişimlerinin kontrolunde kullanılır.
$pageid="yetkilipage"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.
    //echo "OK"; 
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
    
        //echo "OK";      
   
             include 'kullanicisayfayetkisi.php'; // kullanıcıların kultipine göre bu sayfaya erişim yetkilerinin olup olmayacağının ayarlandığı php dosyasıdır.
             // echo "OK";
             if(!kulsayfayetki($kultipi,$pageid,$uname))
             {
           echo "Sayfaya erişim yetkiniz yoktur!";
           exit(); 
                 
             }

//echo "OK"; 
function Notdevam()
{

header("Location: https://whitelotustest.online/admin.php"); /* Redirect browser */
exit();	
	
}
   ?> 
 
<body>

<?php 
    
    include 'menu.php'; // kultipine göre menun ayarlandığı php dosyasıdır.
    
   $verilerp=array();
   $verilerm=array();
    $verilerpx=array();
   $verilermx=array();
    
    $verilerpsx=array();
   $verilers=array();
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
   if ($result = $conn -> query("SELECT mahalle,sokak,siteadi FROM yapikayit where yapikayit.isdeleted !=1")) {
 
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
      $verilermx[]=$row['mahalle'];
      $verilerpx[]=$row['sokak'];
      $verilerpsx[]=$row['siteadi'];
}
     
  $result -> free_result();
}  
    
 
   

    foreach ($verilermx as $deger) {
        
        if (!in_array($deger, $verilerm)) {
            $verilerm[] = $deger;
        }
    }

     foreach ($verilerpx as $deger) {
        
        if (!in_array($deger, $verilerp)) {
            $verilerp[] = $deger;
        }
    }
    
    foreach ($verilerpsx as $deger) {
        
        if (!in_array($deger, $verilers)) {
            $verilers[] = $deger;
        }
    }

    
    
    ?>
    
   <script>
        var values = <?php echo json_encode($verilerm); ?>;
 var valuespr = <?php echo json_encode($verilerp); ?>;
   var valuesps = <?php echo json_encode($verilers); ?>;     
    //// MÜŞTERİ PROJE KAYDI İÇİN FONSİYONLAR
        // Function to filter and display array values
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
           
           
 
           
           
        
        // Function to filter and display array values
        function filterValuesmii() {
            var searchValue = document.getElementById("searchmii").value.toLowerCase();
            var dropdown = document.getElementById("dropdownmii");

            dropdown.innerHTML = "";

            valuespr.forEach(function(value) {
                if (value.toLowerCase().includes(searchValue)) {
                    var option = document.createElement("option");
                    option.value = value;
                    option.text = value;
                    option.onclick = selectValuemii; // Assign the selectValue function to the onclick event
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
        function selectValuemii() {
            var dropdown = document.getElementById("dropdownmii");
            var selectedValue = dropdown.options[dropdown.selectedIndex].value;
            var searchInput = document.getElementById("searchmii");

            searchInput.value = selectedValue;
            dropdown.style.display = "none";
            searchInput.focus();
        }

        // Function to handle input field changes
        function handleInputChangemii() {
            var searchInput = document.getElementById("searchmii");
            var dropdown = document.getElementById("dropdownmii");

            filterValuesmii(); // Filter values when the input field changes

            if (searchInput.value === "") {
                dropdown.style.display = "none";
            } else {
                dropdown.style.display = "block";
            }
        }

        // Function to handle input field deletions
        function handleInputDeletionmii() {
            var searchInput = document.getElementById("searchmii");
            var dropdown = document.getElementById("dropdownmii");

            filterValuesmii(); // Filter values when the input field changes

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
              
           
       
       
        // Function to filter and display array values
        function filterValuesmiii() {
            var searchValue = document.getElementById("searchmiii").value.toLowerCase();
            var dropdown = document.getElementById("dropdownmiii");

            dropdown.innerHTML = "";

            valuesps.forEach(function(value) {
                if (value.toLowerCase().includes(searchValue)) {
                    var option = document.createElement("option");
                    option.value = value;
                    option.text = value;
                    option.onclick = selectValuemiii; // Assign the selectValue function to the onclick event
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
        function selectValuemiii() {
            var dropdown = document.getElementById("dropdownmiii");
            var selectedValue = dropdown.options[dropdown.selectedIndex].value;
            var searchInput = document.getElementById("searchmiii");

            searchInput.value = selectedValue;
            dropdown.style.display = "none";
            searchInput.focus();
        }

        // Function to handle input field changes
        function handleInputChangemiii() {
            var searchInput = document.getElementById("searchmiii");
            var dropdown = document.getElementById("dropdownmiii");

            filterValuesmiii(); // Filter values when the input field changes

            if (searchInput.value === "") {
                dropdown.style.display = "none";
            } else {
                dropdown.style.display = "block";
            }
        }

        // Function to handle input field deletions
        function handleInputDeletionmiii() {
            var searchInput = document.getElementById("searchmiii");
            var dropdown = document.getElementById("dropdownmiii");

            filterValuesmiii(); // Filter values when the input field changes

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
      
      
      
       
   
 <br>
              <br>
     <div class="parentmain2">
    <div class="options">
      <div class="container"> 
           <div class="row">
          
              <label class="top-text" for="genelbilgi" style="font-weight:bolder;font-size:16px;">YAPI KAYIT SAYFASI</label>
              
          </div>
        <form  id="busers" action="/yapikayitaction.php" method="post" onsubmit="return validatecallForm()" enctype="multipart/form-data">
          <div class="row">
            <div class="col-25">
              <label for="adresolustur" style="font-weight:bolder">Adres Oluştur</label>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-25">
              <label for="ulke" style="font-weight:bolder">Ülke *</label>
            </div>
            <div class="col-75">
               <select name="ulke" id="ulke" class="form-control" required="required">
                  <option></option>
                  <option>Kuzey Kıbrıs Türk Cumhuriyeti</option>
              </select>
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="ilce" style="font-weight:bolder">İlçe *</label>
            </div>
            <div class="col-75">
               <select name="ilce" id="ilce" class="form-control" required="required">
                  <option></option>
                  <option>LEFKOŞA</option>
                  <option>GAZİMAĞUSA</option>
                  <option>GİRNE</option>
                  <option>GÜZELYURT</option>
                  <option>LEFKE</option>
                  <option>İSKELE</option>
              </select>
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="mahalle" style="font-weight:bolder">Mahalle*</label>
            </div>
            <div class="col-75">
               
               <div id="inputFieldsContainer">
             <input type="text" name="mahalle" class="form-control" id="searchmi" oninput="handleInputChangemi();" onkeyup="handleInputDeletionmi();" onclick="this.select();" title="Sadece harf ve bazı özel karakterler girilebilir." autocomplete="off" onchange="changecolor();" pattern="[A-Za-zöÖçÇşŞıIİğĞüÜ\s\/\\\-_.;:,?&*0-9 ]{1,80}" maxlength="80" required="required">
             
        <br>
        <select id="dropdownmi" size="5" style="display: none;width:100%;"></select>
        <br> 
        </div>
               
               <!--<input type="text" id="mahalle" name="mahalle" class="form-control" pattern="[A-Za-zöÖçÇşŞıIİğĞüÜ\s\/\\\-_.;:,?&*0-9 ]{1,80}" maxlength="80" title="Sadece harf ve bazı özel karakterler girilebilir." required="required">-->
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="sokak" style="font-weight:bolder">Sokak *</label>
            </div>
            <div class="col-75">
              <div id="inputFieldsContainer">
             <input type="text" name="sokak" class="form-control" id="searchmii" oninput="handleInputChangemii();" onkeyup="handleInputDeletionmii();" onclick="this.select();" title="Sadece harf ve bazı özel karakterler girilebilir." autocomplete="off" onchange="changecolor();" pattern="[A-Za-zöÖçÇşŞıIİğĞüÜ\s\/\\\-_.;:,?&*0-9 ]{1,80}" maxlength="80" required="required">
             
        <br>
        <select id="dropdownmii" size="5" style="display: none;width:100%;"></select>
        <br> 
        </div>
             
             
              <!--<input type="text" id="sokak" name="sokak" class="form-control" pattern="[A-Za-zöÖçÇşŞıIİğĞüÜ\s\/\\\-_.;:,?&*0-9 ]{1,80}" maxlength="80" title="Sadece harf ve bazı özel karakterler girilebilir." required="required">-->
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="projeadi" style="font-weight:bolder">Proje Adı</label>
            </div>
            <div class="col-75">
              <input type="text" id="projeadi" name="projeadi" class="form-control" pattern="[A-Za-zöÖçÇşŞıIİğĞüÜ\s\/\\\-_.;:,?&*0-9 ]{1,80}" maxlength="80" title="Sadece harf ve bazı özel karakterler girilebilir.">
            </div>
          </div>
          
          
          
           <div class="row">
            <div class="col-25">
              <label for="siteadi" style="font-weight:bolder">Site Adı *</label>
            </div>
            <div class="col-75">
              <div id="inputFieldsContainer">
             <input type="text" name="siteadi" class="form-control" id="searchmiii" oninput="handleInputChangemiii();" onkeyup="handleInputDeletionmiii();" onclick="this.select();" title="Sadece harf ve bazı özel karakterler girilebilir." autocomplete="off" onchange="changecolor();" pattern="[A-Za-zöÖçÇşŞıIİğĞüÜ\s\/\\\-_.;:,?&*0-9 ]{1,80}" maxlength="80" required="required">
             
        <br>
        <select id="dropdownmiii" size="5" style="display: none;width:100%;"></select>
        <br> 
        </div>
             
             
              <!--<input type="text" id="sokak" name="sokak" class="form-control" pattern="[A-Za-zöÖçÇşŞıIİğĞüÜ\s\/\\\-_.;:,?&*0-9 ]{1,80}" maxlength="80" title="Sadece harf ve bazı özel karakterler girilebilir." required="required">-->
            </div>
          </div>
          
          
          
           <div class="row">
            <div class="col-25">
              <label for="yonetimsozlesmesi" style="font-weight:bolder">Yönetim Sözleşmesi Var Mı? *</label>
            </div>
            <div class="col-75">
               <select name="yonetimsozlesmesi" id="yonetimsozlesmesi" class="form-control" required="required">
                  <option></option>
                  <option>EVET</option>
                  <option>HAYIR</option>
              </select>
            </div>
          </div>
          
          <!--
          <div class="row">
            <div class="dosya-alani" style="display:none;">
            <div class="col-25" >
              <label for="aidatmetrekare" style="font-size:14px;font-weight:bolder">Aidat Metre Kare Bedeli </label>
            <div class="col-75">
               <input type="text" id="aidatmetrekare" name="aidatmetrekare" class="form-control" pattern="\d+(\.\d{1,2})?" maxlength="20" title="Sadece sayı veya ondalık sayı girilebilir.">
            </div>
          </div>
           
           <div class="col-25" >
              <label for="aidatmetrekareparabirimi" style="font-size:14px;font-weight:bolder">Para Birimi </label>
            <div class="col-75" style="max-width:250px;">
             <select name="aidatmetrekareparabirimi" id="aidatmetrekareparabirimi" class="form-control">
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
          -->
          
         
          
           <div class="row">
            <div class="col-25">
              <label for="blok" style="font-weight:bolder">Blok *</label>
            </div>
            <div class="col-75">
              <input type="text" id="blok" name="blok" class="form-control" pattern="[A-Za-zöÖçÇşŞıIİğĞüÜ\s\/\\\-_.;:,?&*0-9 ]{1,80}" maxlength="80" title="Sadece harf ve bazı özel karakterler girilebilir." required="required">
            </div>
          </div>
          <br>
           <br>
            <div class="row">
            <div class="col-25">
              <label for="adresolustur" style="font-weight:bolder">Daire Oluştur</label>
            </div>
          </div>
           <hr>
            <div class="row">
            <div class="col-25">
              <label for="kat" style="font-weight:bolder">Kat *</label>
            </div>
            <div class="col-75">
              <input type="number" id="kat" name="kat" class="form-control" min="0" step="1" max="100" required="required">
            </div>
          </div>
             <div class="row">
            <div class="col-25">
              <label for="kapino" style="font-weight:bolder">Kapı No *</label>
            </div>
            <div class="col-75">
              <input type="text" id="kapino" name="kapino" class="form-control" pattern="[A-Za-zöÖçÇşŞıIİğĞüÜ\s\/\\\0-9 ]{1,20}" maxlength="20" title="Sadece harf ve bazı özel karakterler girilebilir." required="required">
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="mulktip1" style="font-weight:bolder">Mülk Tip 1 *</label>
            </div>
            <div class="col-75">
               <select name="mulktip1" id="mulktip1" class="form-control" required="required">
                  <option></option>
                  <option>Villa</option>
                  <option>Apartman</option>
              </select>
            </div>
          </div>
           <!--<div class="row">
            <div class="col-25">
              <label for="mulktip2" style="font-weight:bolder">Mülk Tip 2 *</label>
            </div>
            <div class="col-75">
               <select name="mulktip2" id="mulktip2" class="form-control" required="required">
                  <option></option>
                  <option>Tek Kat</option>
                  <option>Dublex</option>
                  <option>Triplex</option>
              </select>
            </div>
          </div>-->
              <div class="row">
            <div class="col-25">
              <label for="postakodu" style="font-weight:bolder">Posta Kodu *</label>
            </div>
            <div class="col-75">
              <input type="number" id="postakodu" name="postakodu" class="form-control" min="0" step="1" max="99999999" required="required">
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="cephe" style="font-weight:bolder">Cephe *</label>
            </div>
            <div class="col-75">
               <select name="cephe" id="cephe" class="form-control" required="required">
                  <option></option>
                  <option>Doğu</option>
                  <option>Batı</option>
                  <option>Kuzey</option>
                  <option>Güney</option>
              </select>
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="alan" style="font-weight:bolder">Alan (m2) *</label>
            </div>
            <div class="col-75">
              <input type="number" id="alan" name="alan" class="form-control" min="0" step="1" max="10000" required="required">
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="salonadet" style="font-weight:bolder">Salon Adet *</label>
            </div>
            <div class="col-75">
              <input type="number" id="salonadet" name="salonadet" class="form-control" min="0" step="1" max="100" required="required">
            </div>
          </div>
           <div class="row">
            <div class="col-25">
              <label for="odaadet" style="font-weight:bolder">Oda Adet *</label>
            </div>
            <div class="col-75">
              <input type="number" id="odaadet" name="odaadet" class="form-control" min="0" step="1" max="1000" required="required">
            </div>
          </div>
            <div class="row">
            <div class="col-25">
              <label for="banyoadet" style="font-weight:bolder">Banyo Adet *</label>
            </div>
            <div class="col-75">
              <input type="number" id="banyoadet" name="banyoadet" class="form-control" min="0" step="1" max="100" required="required">
            </div>
          </div>
            <br>
            <br>
          <div class="row">
            <input type="submit" name="submit" id="onaybutton" value="Onayla ve Yapıyı Oluştur">
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
                 document.getElementById("dropdownmiii").addEventListener("change", function() {
    // Dropdown'dan seçilen değeri al
    //alert(this.value);
document.getElementById("searchmiii").value=this.value;
    // Seçilen değeri bir HTML elemanına yazdır
    

    // Seçilen değeri bir JavaScript değişkenine atamak istiyorsanız:
    // var myVariable = selectedValue;
});
    
    
             document.getElementById("dropdownmii").addEventListener("change", function() {
    // Dropdown'dan seçilen değeri al
    //alert(this.value);
document.getElementById("searchmii").value=this.value;
    // Seçilen değeri bir HTML elemanına yazdır
    

    // Seçilen değeri bir JavaScript değişkenine atamak istiyorsanız:
    // var myVariable = selectedValue;
});
                  document.getElementById("dropdownmi").addEventListener("change", function() {
    // Dropdown'dan seçilen değeri al
    //alert(this.value);
document.getElementById("searchmi").value=this.value;
    // Seçilen değeri bir HTML elemanına yazdır
    

    // Seçilen değeri bir JavaScript değişkenine atamak istiyorsanız:
    // var myVariable = selectedValue;
});
    
    /*
    $('#yonetimsozlesmesi').change(function () {
       
      if($(this).val() === "EVET"){
          $('.dosya-alani').show();
          $('#aidatmetrekare').prop('required', true);
          $('#aidatmetrekareparabirimi').prop('required', true);
      } else
          {
          $('.dosya-alani').hide();
          $('#aidatmetrekare').prop('required', false);
          $('#aidatmetrekareparabirimi').prop('required', false);
          }
                
                
    });
        
       */ 

    // Sayfa yüklendiğinde kontrol etmek için
    $('#yonetimsozlesmesi').trigger('change'); 
    
    
    
    function validatecallForm()  {
        var varbos=document.getElementById("searchmi").value;
            
            if(varbos=="" || varbos==null){
                alert("Müşteri ismi boş bırakılamaz..");
            return false;
            }
        
        
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