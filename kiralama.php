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
    
    ?>

<!-------------------------------------------------------->
<?php
    
      $verilerp=array();
   $verilerm=array();
    $verilerpx=array();
   $verilermx=array();
    //$verilery=array();
   
    
    $verilerp2=array();
   $verilerm2=array();
    $verilerpx2=array();
   $verilermx2=array();
    
    
    $verilerp3=array();
   $verilerpx3=array();
    
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

    if ($result = $conn -> query("SELECT * FROM mulkkayit where mulkkayit.isdeleted !=1 AND mulkkayit.kirakaporaeklendi=1 AND kiracieklendi!=1 AND kirayaayrildi!=1 AND kiralandi!=1 AND mulkkayit.satildi!=1" )) {
  //echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  //$date=date('Y-m-d');
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
	 //echo strtotime($date);
	 //echo strtotime($row['start_date']);
      //echo $row['binaismi'];
     //echo $row['binayeri'];
      //echo $row['intarih'];
      //echo password_verify($password, $row['password']);
      //($row['binapuani']==0 || $row['binapuani']==null) &&
      
           
           $verilermx[]=$row['id'].",".$row['adsoyad'].",".$row['kimlikno'].",".$row['iletisim1'].",".$row['email'].",".$row['uyruk'].",".$row['yapino'];
      
    
      $kirakaporaeklendi="Kira Kaporası Mevcut Değil";
      $satiskaporaeklendi="Satış Kaporası Mevcut Değil";
      if($row['kirakaporaeklendi']==1){
          $kirakaporaeklendi="Kira Kaporası Mevcut";
      }
      if($row['satiskaporaeklendi']==1){
          $satiskaporaeklendi="Satış Kaporası Mevcut";
      }
      
      $verilerpx[]=$kirakaporaeklendi.",".$satiskaporaeklendi;
      //echo $kirakaporaeklendi.",".$satiskaporaeklendi;
      
      
      //$verilery[]=$row['yapino'];
           /*$musteriadi=$row['musteriadi'];
           $musteriadres=$row['musteriadres'];
           $musterifaturaadres=$row['musterifaturaadres'];
           $irtibatkisi=$row['irtibatkisi'];
           $telefon=$row['telefon'];
           $email=$row['email'];
           $id=$row['id'];*/

}
     
  $result -> free_result();
}
    
    
    
     if ($result = $conn -> query("SELECT * FROM mulkkayit where mulkkayit.isdeleted !=1 AND mulkkayit.kirakaporaeklendi!=1 AND kiracieklendi!=1 AND kirayaayrildi!=1 AND kiralandi!=1 AND mulkkayit.satildi!=1" )) {
  //echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  //$date=date('Y-m-d');
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
	 //echo strtotime($date);
	 //echo strtotime($row['start_date']);
      //echo $row['binaismi'];
     //echo $row['binayeri'];
      //echo $row['intarih'];
      //echo password_verify($password, $row['password']);
      //($row['binapuani']==0 || $row['binapuani']==null) &&
      
           
           $verilermx2[]=$row['id'].",".$row['adsoyad'].",".$row['kimlikno'].",".$row['iletisim1'].",".$row['email'].",".$row['uyruk'].",".$row['yapino'];
      
    
      $kirakaporaeklendi="Kira Kaporası Mevcut Değil";
      $satiskaporaeklendi="Satış Kaporası Mevcut Değil";
      if($row['kirakaporaeklendi']==1){
          $kirakaporaeklendi="Kira Kaporası Mevcut";
      }
      if($row['satiskaporaeklendi']==1){
          $satiskaporaeklendi="Satış Kaporası Mevcut";
      }
      
      $verilerpx2[]=$kirakaporaeklendi.",".$satiskaporaeklendi;
      //echo $kirakaporaeklendi.",".$satiskaporaeklendi;
      
      
      //$verilery[]=$row['yapino'];
           /*$musteriadi=$row['musteriadi'];
           $musteriadres=$row['musteriadres'];
           $musterifaturaadres=$row['musterifaturaadres'];
           $irtibatkisi=$row['irtibatkisi'];
           $telefon=$row['telefon'];
           $email=$row['email'];
           $id=$row['id'];*/

}
     
  $result -> free_result();
}
    

    
     if ($result = $conn -> query("SELECT siteadi FROM yapikayit where yapikayit.isdeleted !=1" )) {

  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

      $verilerpx3[]=$row['siteadi'];

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
    $verilerm2=tekillestir($verilermx2);
    $verilerp3=tekillestir($verilerpx3);
    //$verilerp=tekillestir($verilerpx);
    
?>
    

<!-------------------------------------------------------->
 
       <script>
        var values = <?php echo json_encode($verilerm); ?>;
 var valuespr = <?php echo json_encode($verilerpx); ?>;
        var bilgi="";
           
           
              var values2 = <?php echo json_encode($verilerm2); ?>;
 var valuespr2 = <?php echo json_encode($verilerpx2); ?>;
        var bilgi2="";
           
  var values3 = <?php echo json_encode($verilerp3); ?>;         
           
           
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
                    
                   // option.onclick = selectValuemi; // Assign the selectValue function to the onclick event
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
       /* function selectValuemi() {
            var dropdown = document.getElementById("dropdownmi");
            var selectedValue = dropdown.options[dropdown.selectedIndex].value;
            alert(selectedValue);
            var searchInput = document.getElementById("searchmi");

            searchInput.value = selectedValue;
            dropdown.style.display = "none";
            searchInput.focus();
        }
*/
        // Function to handle input field changes
        function handleInputChangemi() {
            var searchInput = document.getElementById("searchmi");
            var dropdown = document.getElementById("dropdownmi");

            filterValuesmi(); // Filter values when the input field changes
              /******************button appears*********************/
            check=0;             
       for(i=0;i<values.length;i++){
           
           if(values[i]===this.value){
              check=1;
               bilgi=valuespr[i];
               break;
           }
       }               
                      
                      
                     
    if(check==1)
        {
            
            document.getElementById("renkdegis1").style.display='block';
             document.getElementById("bilgi").value=bilgi;
            document.getElementById("bilgi").style.display='block';
        }else
            {
               
                document.getElementById("renkdegis1").style.display='none';
                document.getElementById("bilgi").style.display='none';
            }
            
            /***************************************/
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
               
               var button = document.getElementById("renkdegis1");
                button.style.backgroundColor = "blue";
                button.style.font.color="white";
               button.style.boxShadow = "0px 5px 5px rgba(0, 0, 0, 0.2)";
               
               

           }
           
           
           
           
           
           
           
           
           
        //******************************İKİNCİ KISIM İÇİN******************/
           
           
           
           
           
           
           
           
           //// MÜŞTERİ PROJE KAYDI İÇİN FONSİYONLAR
        // Function to filter and display array values
        function filterValuesmi2() {
            var searchValue2 = document.getElementById("searchmi2").value.toLowerCase();
            var dropdown2 = document.getElementById("dropdownmi2");

            dropdown2.innerHTML = "";

            values2.forEach(function(value2) {
                
                if (value2.toLowerCase().includes(searchValue2)) {
                    var option = document.createElement("option");
                    option.value = value2;
                    option.text = value2;
                   //option2.onclick = selectValuemi2; // Assign the selectValue function to the onclick event
                    dropdown2.appendChild(option);
                }
            });

            if (searchValue2 === "") {
                dropdown2.style.display = "none";
            } else {
                dropdown2.style.display = "block";
            }
        }

    
        // Function to handle value selection
       /* function selectValuemi() {
            var dropdown = document.getElementById("dropdownmi");
            var selectedValue = dropdown.options[dropdown.selectedIndex].value;
            alert(selectedValue);
            var searchInput = document.getElementById("searchmi");

            searchInput.value = selectedValue;
            dropdown.style.display = "none";
            searchInput.focus();
        }
*/
        // Function to handle input field changes
        function handleInputChangemi2() {
            var searchInput2 = document.getElementById("searchmi2");
            var dropdown2 = document.getElementById("dropdownmi2");

            filterValuesmi2(); // Filter values when the input field changes
              /******************button appears*********************/
            check2=0;             
       for(i=0;i<values2.length;i++){
           
           if(values2[i]===this.value){
              check2=1;
               bilgi2=valuespr2[i];
               break;
           }
       }               
                      
                      
                     
    if(check2==1)
        {
            
            document.getElementById("renkdegis2").style.display='block';
             document.getElementById("bilgi2").value=bilgi2;
            document.getElementById("bilgi2").style.display='block';
        }else
            {
               
                document.getElementById("renkdegis2").style.display='none';
                document.getElementById("bilgi2").style.display='none';
            }
            
            /***************************************/
            if (searchInput2.value === "") {
                dropdown2.style.display = "none";
            } else {
                dropdown2.style.display = "block";
            }
        }

        // Function to handle input field deletions
        function handleInputDeletionmi2() {
            var searchInput2 = document.getElementById("searchmi2");
            var dropdown2 = document.getElementById("dropdownmi2");

            filterValuesmi2(); // Filter values when the input field changes

            if (searchInput2.value === "") {
                dropdown2.style.display = "none";
            } else {
                dropdown2.style.display = "block";
            }
        }
           
           
        
           
           function changecolor2() {
               
               var button2 = document.getElementById("renkdegis2");
                button2.style.backgroundColor = "blue";
                button2.style.font.color="white";
               button2.style.boxShadow = "0px 5px 5px rgba(0, 0, 0, 0.2)";
               
               

           }
           
           
          //******************************ÜÇÜNCÜ KISIM İÇİN******************/
           
           
            // Function to filter and display array values
        function filterValuesmiii() {
            var searchValue = document.getElementById("searchmiii").value.toLowerCase();
            var dropdown = document.getElementById("dropdownmiii");

            dropdown.innerHTML = "";

            values3.forEach(function(value) {
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
 
 

 <div class="button-container">
        <!--<a href="sayfa3.html" class="button">Müşteri Kaydı Proje Listeleme/Ekleme/Güncelleme</a>-->
        
        
         <button id="showButton" onclick="toggleFields3()" class="button">Site Adını Giriniz</button>
    <div id="hiddenFields3" style="display:none;">
        
        <form method="POST" action="kiralamaportalpre.php" onsubmit="return validatecallForm()" enctype="multipart/form-data">
        
        
        
        <label for="selected_value" style="font-size:15px;padding: 0px 0px 0px 7px;">Site Adını Giriniz:</label>
        <div id="inputFieldsContainer">
          <div class="input-group mb-2">
              <div class="form-group" style="width:100%;">
        <div style="padding: 0px 0px 0px 7px;">
             <input type="text" name="siteadi" class="textcon" id="searchmiii" oninput="handleInputChangemiii();" onkeyup="handleInputDeletionmiii();" onclick="this.select();" title="Site adını giriniz." autocomplete="off" onchange="changecolor();">
             
        <br>
        <select id="dropdownmiii" size="5" class="textcon2" style="display: none;"></select>
        <br>
             </div>
             <button id="renkdegis3" type="submit" class="button" style="background-color:#536DFE;display:none;">Siteye Ait Mülkleri Getir</button>
              </div>
            </div>
        </div>
                  
        </form>
    </div>
        
        
   
        
      <!--  
      <button id="showButton" onclick="toggleFields()" class="button">Mülk Numarası ile Kiracı Ekleme (Kaporalı)</button>
    <div id="hiddenFields" style="display:none;">
        
        <form method="POST" action="kiralamakaporali.php" onsubmit="return validatecallForm()" enctype="multipart/form-data">
        
        
        
        <label for="selected_value" style="font-size:15px;padding: 0px 0px 0px 7px;">MülkID,AdSoyad,KimlikNo,İletişim1,Email,Uyruk,YapıNo Giriniz:</label>
        <div id="inputFieldsContainer">
          <div class="input-group mb-2">
              <div class="form-group" style="width:100%;">
        <div style="padding: 0px 0px 0px 7px;">
             <input type="text" name="yapimulkbilgileri" class="textcon" id="searchmi" oninput="handleInputChangemi();" onkeyup="handleInputDeletionmi();" onclick="this.select();" title="Mülk numarasını giriniz." autocomplete="off" onchange="changecolor();">
             
        <br>
        <select id="dropdownmi" size="5" class="textcon2" style="display: none;"></select>
        <br>
             </div>
             <input type="text" id="mulkid" name="mulkid" style="display:none">
             <input type="text" id="bilgi" name="bilgi" style="background-color:grey;display:none;font-size:10px;">
             <button id="renkdegis1" type="submit" class="button" style="background-color:#536DFE;display:none;">Kiracı Eklemeyi Başlat</button>
              </div>
            </div>
        </div>
                  
        </form>
    </div>
      
      
      
      
      <button id="showButton" onclick="toggleFields2()" class="button">Mülk Numarası ile Kiracı Ekleme (Kaporasız)</button>
    <div id="hiddenFields2" style="display:none;">
        
        <form method="POST" action="kiralamakaporasiz.php" onsubmit="return validatecallForm2()" enctype="multipart/form-data">
        
        
        
        <label for="selected_value2" style="font-size:15px;padding: 0px 0px 0px 7px;">MülkID,AdSoyad,KimlikNo,İletişim1,Email,Uyruk,YapıNo Giriniz:</label>
        <div id="inputFieldsContainer">
          <div class="input-group mb-2">
              <div class="form-group" style="width:100%;">
        <div style="padding: 0px 0px 0px 7px;">
             <input type="text" name="yapimulkbilgileri2" class="textcon" id="searchmi2" oninput="handleInputChangemi2();" onkeyup="handleInputDeletionmi2();" onclick="this.select();" title="Mülk numarasını giriniz." autocomplete="off" onchange="changecolor2();">
             
        <br>
        <select id="dropdownmi2" size="5" class="textcon2" style="display: none;"></select>
        <br>
             </div>
             <input type="text" id="mulkid2" name="mulkid2" style="display:none">
             <input type="text" id="bilgi2" name="bilgi2" style="background-color:grey;display:none;font-size:10px;">
             <button id="renkdegis2" type="submit" class="button" style="background-color:#536DFE;display:none;">Kiracı Eklemeyi Başlat</button>
              </div>
            </div>
        </div>
                  
        </form>
    </div>
       
       <a href="kiralamakaporaliyonet.php" class="button">Kaporalı Kiralama Kayıt Listeleme/Güncelleme/Silme</a>
       <a href="kiralamakaporasizyonet.php" class="button">Kaporasız Kiralama Kayıt Listeleme/Güncelleme/Silme</a>
       
       
       -->
       
       <!--<a href="kskaporakayityonet.php" class="button">Hem Kira Hem de Satış Kaporasına Sahip Mülkleri Listeleme</a>-->
       
       
        <!--
        <button id="showButton" onclick="toggleFields2()" class="button">Yapı Malzemeleri Deneyleri için Numune Kayıt</button>
           <div id="hiddenFields2" style="display:none;">
      
        <form id="myForm">
        <label for="selected_value" style="font-size:15px;">Müşteri İsmini Giriniz:</label>
        <div id="inputFieldsContainer">
          <div class="input-group mb-2">
              <div class="form-group" style="width:100%;">
        <div style="padding: 0px 0px 0px 10px">
             <input type="text" name="musteri" class="form-control" id="searchmii" oninput="handleInputChangemii();" onkeyup="handleInputDeletionmii();" onclick="this.select();" title="Müşteri adını veya irtibat kişi isnini giriniz." autocomplete="off" style="width:400px;" onchange="changecolor();">
             
        <br>
        <select id="dropdownmii" size="5" style="display: none;width:400px;"></select>
        <br>
            
             </div>
            
             <button type="submit" class="button" id="musteributton" style="background-color:#536DFE;">Seçilen Müşteriyi Onayla</button>
              </div>
            </div>
        </div>
            </form>
                  
                 <div id="hiddenFields3" style="display:none;">
                 <form method="POST" action="yapimaldeneynumunekayit.php" onsubmit="return validatecallForm2()" enctype="multipart/form-data">
        <label for="selected_value" style="font-size:15px;">Müşteriye Ait Proje Seçiniz:</label>
        <div id="inputFieldsContainer">
          <div class="input-group mb-2">
              <div class="form-group" style="width:100%;">
        <div style="padding: 0px 0px 0px 10px">
        
            
             
        <select id="myDropdown" name="myDropdown"></select>
   
            
             </div>
            
              </div>
            </div>
        </div>
        <input type="text" id="dropdownvalue" name="projeadi" style="display:none;">
        <input type="text" id="gonderilen" name="musteriadi" style="display:none;">
         <button id="renkdegis" type="submit" class="button" style="background-color:#536DFE;">Numune Kaydını Başlat</button>         
                     </form>
        <form id="reset">
        <button type="submit" class="button" id="musteriresetbutton" style="background-color:#FBC02D;">Müşteriyi Yeniden Seç</button> 
        </form>            
    </div>                  
        
    </div>
-->
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
        
         /******************button appears*********************/
            check3=0;             
       for(i=0;i<values3.length;i++){
           if(values3[i]===this.value){
              check3=1;
              // alert(values3[i]);
               break;
           }
       }               
                      
                      
                     
    if(check3==1)
        {
            
            document.getElementById("renkdegis3").style.display='block';
      
        }else
            {
               
                document.getElementById("renkdegis3").style.display='none';
                
            }
            
            /***************************************/
        
});
    
    /*
              document.getElementById("dropdownmii").addEventListener("change", function() {
    // Dropdown'dan seçilen değeri al
    //alert(this.value);
document.getElementById("searchmii").value=this.value;
    // Seçilen değeri bir HTML elemanına yazdır
    

    // Seçilen değeri bir JavaScript değişkenine atamak istiyorsanız:
    // var myVariable = selectedValue;
});*/
document.getElementById("dropdownmi").addEventListener("change", function() {
    // Dropdown'dan seçilen değeri al
    //alert(this.value); 
                     
document.getElementById("searchmi").value=this.value;
    // Seçilen değeri bir HTML elemanına yazdır
    // Seçilen değeri bir JavaScript değişkenine atamak istiyorsanız:
    // var myVariable = selectedValue;
                        /******************button appears*********************/
            check=0;             
       for(i=0;i<values.length;i++){
           if(values[i]===this.value){
               bilgi=valuespr[i];
              check=1;
               break;
           }
       }               
                      
                      
                     
    if(check==1)
        {
            
            document.getElementById("renkdegis1").style.display='block';
            document.getElementById("bilgi").value=bilgi;
            document.getElementById("bilgi").style.display='block';
        }else
            {
               
                document.getElementById("renkdegis1").style.display='none';
                document.getElementById("bilgi").style.display='none';
            }
            
            /***************************************/
                      
                      
                      
});
    
    
    
    
    
    document.getElementById("dropdownmi2").addEventListener("change", function() {
    // Dropdown'dan seçilen değeri al
    //alert(this.value); 
                     
document.getElementById("searchmi2").value=this.value;
    // Seçilen değeri bir HTML elemanına yazdır
    // Seçilen değeri bir JavaScript değişkenine atamak istiyorsanız:
    // var myVariable = selectedValue;
                        /******************button appears*********************/
            check2=0;             
       for(i=0;i<values2.length;i++){
           if(values2[i]===this.value){
               bilgi2=valuespr2[i];
              check2=1;
               break;
           }
       }               
                      
                      
                     
    if(check2==1)
        {
            
            document.getElementById("renkdegis2").style.display='block';
            document.getElementById("bilgi2").value=bilgi2;
            document.getElementById("bilgi2").style.display='block';
        }else
            {
               
                document.getElementById("renkdegis2").style.display='none';
                document.getElementById("bilgi2").style.display='none';
            }
            
            /***************************************/
                      
                      
                      
});
    /*
                      document.getElementById("dropdownmiii").addEventListener("change", function() {
    // Dropdown'dan seçilen değeri al
    //alert(this.value);
document.getElementById("searchmiii").value=this.value;
    // Seçilen değeri bir HTML elemanına yazdır
    

    // Seçilen değeri bir JavaScript değişkenine atamak istiyorsanız:
    // var myVariable = selectedValue;
});
    
   */


    
    
    const reset = document.getElementById("reset");
    
     reset.addEventListener("submit", function(event) {
            event.preventDefault(); // Formun otomatik gönderilmesini engelle

            window.location.reload();
        });

    

    function validatecallForm()  {
   
 var varbos=document.getElementById("searchmi").value;
            
            if(varbos=="" || varbos==null){
                alert("Giriş kısmı boş bırakılamaz..");
            return false;
            }
        
        
      /******************button appears*********************/
            check=0;
            xid=0;
       for(i=0;i<values.length;i++){
           if(values[i]===document.getElementById("searchmi").value){
              check=1;
               xid=i;
               break;
           }
       }               
                      
                      
                     
    if(check!=1)
        {
          alert("Göndereceğiniz veriyi açılan menüden seçiniz.");
            return false;   
        }
       
            /***************************************/   
        
        

var veriParcalari = values[xid].split(",");
var ilkDeger = veriParcalari[0];
 document.getElementById("mulkid").value = ilkDeger;       
       
        
   document.getElementById("loadingOverlay").style.display = "block";     
        
    }    
    
    
    
    function validatecallForm2()  {
   
 var varbos=document.getElementById("searchmi2").value;
            
            if(varbos=="" || varbos==null){
                alert("Giriş kısmı boş bırakılamaz..");
            return false;
            }
        
        
      /******************button appears*********************/
            check2=0;
            xid2=0;
       for(i=0;i<values2.length;i++){
           if(values2[i]===document.getElementById("searchmi2").value){
              check2=1;
               xid2=i;
               break;
           }
       }               
                      
                      
                     
    if(check2!=1)
        {
          alert("Göndereceğiniz veriyi açılan menüden seçiniz.");
            return false;   
        }
       
            /***************************************/   
        
        

var veriParcalari2 = values2[xid2].split(",");
var ilkDeger2 = veriParcalari2[0];
 document.getElementById("mulkid2").value = ilkDeger2;       
        
        
   document.getElementById("loadingOverlay").style.display = "block";     
        
    } 
    /*
        function validatecallForm2()  {
    var dropdown = document.getElementById("myDropdown").value;
            
            if(dropdown=="" || dropdown==null){
                alert("Proje ismi boş bırakılamaz..");
            return false;
            }
        
   document.getElementById("loadingOverlay").style.display = "block";     
        
    } 
    
            function validatecallForm3()  {
    var dropdown = document.getElementById("searchmiii").value;
            
            if(dropdown=="" || dropdown==null){
                alert("Protokol numarası boş bırakılamaz..");
            return false;
            }
        
   document.getElementById("loadingOverlay").style.display = "block";     
        
    }
    */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
    
        function toggleFields() {
            var hiddenFields = document.getElementById("hiddenFields");
            
            if (hiddenFields.style.display === "none" || hiddenFields.style.display === "") {
                hiddenFields.style.display = "block";
                hiddenFields.style.opacity = 1;
            } else {
                hiddenFields.style.display = "none";
                hiddenFields.style.opacity = 0;
            }
        }
    
     function toggleFields2() {
            var hiddenFields2 = document.getElementById("hiddenFields2");
            
            if (hiddenFields2.style.display === "none" || hiddenFields2.style.display === "") {
                hiddenFields2.style.display = "block";
                hiddenFields2.style.opacity = 1;
            } else {
                hiddenFields2.style.display = "none";
                hiddenFields2.style.opacity = 0;
            }
        }
    
        function toggleFields3() {
            var hiddenFields3 = document.getElementById("hiddenFields3");
            
            if (hiddenFields3.style.display === "none" || hiddenFields3.style.display === "") {
                hiddenFields3.style.display = "block";
                hiddenFields3.style.opacity = 1;
            } else {
                hiddenFields3.style.display = "none";
                hiddenFields3.style.opacity = 0;
            }
        }
    
  
</script>

</body>
</html>