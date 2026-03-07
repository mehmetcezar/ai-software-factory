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
 <!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<!-- jQuery ve DataTables JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script> 
    
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
            height: 10vh;
        }

 
        .button {
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
    
    
    
    
    
    
    include 'menu.php'; // kultipine göre menun ayarlandığı php dosyasıdır.
    
    
    if($_SESSION['siteadi']!=null)
    {
      $siteadi=$_SESSION['siteadi'];
    }
    else
    {
      Notdevam();  
    }
    
    if($_POST['kiralamakey']!=null)
    {
      $mulkno=$_POST['kiralamakey'];
    }
    else
    {
      Notdevam();  
    }
    
    
    
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
    
  
    
if ($result = $conn -> query("SELECT * FROM mulkkayit where  mulkkayit.company_id = '{$_SESSION['company_id']}' AND mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulkno'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {

        $yapino = $row['yapino'];
        
}
     
  $result -> free_result();
}     
    
    
if ($result = $conn -> query("SELECT * FROM yapikayit where  yapikayit.company_id = '{$_SESSION['company_id']}' AND yapikayit.isdeleted !=1 AND yapikayit.id='$yapino'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
       
        $projeadi = $row['projeadi'];
        $siteadi = $row['siteadi'];
        $blok = $row['blok'];
        $kat = $row['kat'];
        $kapino = $row['kapino'];
        $mulktip1 = $row['mulktip1'];
        $alan = $row['alan'];
        $salonadet = $row['salonadet'];
        $odaadet = $row['odaadet'];
        $banyoadet = $row['banyoadet'];  
        
           
}
     
  $result -> free_result();
}     
    
  
   

    
    
    ?>


<!-------------------------------------------------------->
<br>
<br>
    

  
 


             <script>
             //table.clear().destroy();      
 
          
          
   function  opensessiononay(){
         window.location.href = "https://whitelotustest.online/index.php";
    }
       </script>

 <div class="formcerceve">
    
    
    
   
    
        
            <h1 class="top-text">MAL SAHİBİ AİDAT HESAP DETAYLARI</h1>
            


      <?php
     
     
     function tarihFarki($verilenTarih) {
    // Bugünün tarihini al
    $bugun = new DateTime();
    
    // Verilen tarihi DateTime objesine dönüştür
    $verilenTarihObjesi = DateTime::createFromFormat('Y-m-d', $verilenTarih);
    
    // Tarih formatı hatalı ise null döndür
    if (!$verilenTarihObjesi) {
        return "Hatalı tarih formatı. Lütfen 'Y-m-d' formatında bir tarih girin.";
    }
    
    // Farkı hesapla
    $fark = $verilenTarihObjesi->diff($bugun);

    // Farkın gün cinsinden pozitif ya da negatif olarak hesaplanması
    return ($verilenTarihObjesi > $bugun ? 1 : -1) * $fark->days;
}
     
     
     
     function tarihDonustur($tarih) {
    // Verilen tarihi DateTime objesine dönüştür
    $dateObj = DateTime::createFromFormat('Y-m-d', $tarih);

    // Eğer tarih formatı geçersizse hata mesajı döndür
    if (!$dateObj) {
        return "Hatalı tarih formatı. Lütfen 'Y-m-d' formatında bir tarih girin.";
    }

    // Yeni formatta tarihi döndür
    return $dateObj->format('d-m-Y');
}
     
     
     
 include_once("config2.php");
      
     
 $kurusd=0;
 $kureuro=0;
 $kurgbp=0;     
         if ($result45y = $conn -> query("SELECT * FROM doviz_db WHERE tarih = (
    SELECT MAX(tarih) FROM doviz_db);")) {
  while ($row45y = $result45y -> fetch_array(MYSQLI_ASSOC)) {
      
      
      if($row45y['kur_adi']=="USD")
      {$kurusd=$row45y['kur_degeri'];}
      if($row45y['kur_adi']=="EUR")
      {$kureuro=$row45y['kur_degeri'];}
      if($row45y['kur_adi']=="GBP")
      {$kurgbp=$row45y['kur_degeri'];}
    }
     
  $result45y -> free_result();
}  
     
     
     
     
     
     
?>

           
           
      
           
   
           
           
           
           
           
    <?php       
           
         $empSQL = "SELECT * FROM mulkkayit where  mulkkayit.company_id = '{$_SESSION['company_id']}' AND mulkkayit.isdeleted!=1 AND id='$mulkno'";
     
	$empResult = mysqli_query($conn, $empSQL);	
	
        ?>	
	<table class="table table-striped table-bordered nowrap" id="example2" style="width:100%">
	<thead> 
		<tr> 
			<th>#ID</th>
            <th>Blok No</th> 
			<th>Daire No</th> 
			<th>Daire Tipi</th>
            <th>Kat No</th>
            <th>Alan(m2)</th>
            <th>Mülk No</th> 
            <th>Yapı No</th>
            
            <th>Aidat Borç Tarih</th>
            <th>Aidat Borç £</th> 
            <th>Aidat Alacak Tarih</th> 
            <th>Aidat Alacak £</th> 
            
            <th>Aidat Kalan Bakiye £</th> 
         
            <th>Alacak Ödeme Bilgisi</th>
		</tr> 
	</thead> 
	<tbody> 
		<?php 
        
		while($emp = mysqli_fetch_assoc($empResult)){ 
       
            
            
            

 $mulknox=$emp['id'];           
             if ($result2y = $conn -> query("SELECT * FROM yapikayit where  yapikayit.company_id = '{$_SESSION['company_id']}' AND yapikayit.isdeleted !=1 AND yapikayit.mulkid='$mulknox'")) {
  while ($row2y = $result2y -> fetch_array(MYSQLI_ASSOC)) {
      $blokno=$row2y['blok'];
      $daireno=$row2y['kapino'];
      $dairetipi=$row2y['mulktip1'];
      $katno=$row2y['kat'];
      $alan=$row2y['alan'];   
}
     
  $result2y -> free_result();
}
       
            
            
            
        
            
            
		?>
		
		
		
			<tr>
               <td></td>
               <td><?php echo $blokno; ?></td> 
                <td><?php echo $daireno; ?></td>
                <td><?php echo $dairetipi; ?></td>
                <td><?php echo $katno; ?></td> 
				<td><?php echo $alan; ?></td> 
                <?php echo '<td onclick="submitForm(\'formm' . $emp['id'] . '\')">';
            echo '<form action="mulkgoster.php" method="post" name="formm' . $emp['id'] . '" id="formm' . $emp['id'] . '" target="_blank">';
            echo '<input type="text" id="itemid" name="itemid" style="display:none" value="' . $emp['id'] . '">';
            echo '</form>';
            echo '<t style="cursor: pointer;color: blue;text-decoration: underline;">'.$emp['id'].'</t>';
            echo '</td>';?>
                <?php echo '<td onclick="submitForm(\'formy' . $emp['yapino'] . '\')">';
            echo '<form action="yapigoster.php" method="post" name="formy' . $emp['yapino'] . '" id="formy' . $emp['yapino'] . '" target="_blank">';
            echo '<input type="text" id="itemid" name="itemid" style="display:none" value="' . $emp['yapino'] . '">';
            echo '</form>';
            echo '<t style="cursor: pointer;color: blue;text-decoration: underline;">'.$emp['yapino'].'</t>';
            echo '</td>';?> 
              
             <td></td>
             <td></td>
             <td></td>  
             <td></td>
                 
             <td></td>
             <td></td>  
             
             
			</tr>
		
			
		<?php }?>		
						
  <?php
 $toplamaidatborc=0;
 $toplamaidatalacak=0;
 $toplamaidatbakiye=0;        
        
        
        
     $i=1;    
    $j=0; 
        $adtsur="EVET";
            $adtsurmal="MALSAHİBİ";
if ($result3y = $conn -> query("SELECT * FROM aidattahakkukborc where   aidattahakkukborc.company_id = '{$_SESSION['company_id']}' AND aidattahakkukborc.aidatsurekliligi='$adtsur' AND aidattahakkukborc.kimborclandirildi='$adtsurmal' AND aidattahakkukborc.mulkno='$mulkno'")) {
  while ($row3y = $result3y -> fetch_array(MYSQLI_ASSOC)) {
      $j++;
   
     
      echo '<tr>';
      echo '<td>'.$i.'.'.$j.'</td>';
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
               
      
     /**borc bilgileri***/
       echo '<td class="text-center align-middle">'.tarihDonustur($row3y['tahtarihi'])."</td>";
      
      
      $borc=0;
           if($row3y['parabirimi']=="STERLIN")
      {
          $borc=$row3y['miktar'];
      }
      
      if($row3y['parabirimi']=="EURO")
      {
          $eurotl=$row3y['miktar']*kureuro;
          $sterlincevir=$eurotl/kurgbp;
          $borc=$sterlincevir;
      }
       if($row3y['parabirimi']=="DOLAR")
      {
          $dolartl=$row3y['miktar']*kurusd;
          $sterlincevir=$dolartl/kurgbp;
          $borc=$sterlincevir;
      }
      if($row3y['parabirimi']=="TL")
      {
          $tl=$row3y['miktar']/kurgbp;
          
          $borc=$tl;
      }
      
      $toplamaidatborc+=$borc;
     
      echo '<td class="text-center align-middle">'.$borc."</td>";
      echo '<td>'."</td>";
      echo '<td>'."</td>";
      echo '<td class="text-center align-middle">'.(-1)*$borc."</td>";
      echo '<td>'."</td>";
      
      echo '</tr>'; 
    
      
      
}
     
  $result3y -> free_result();
}    
            
            
            
              $i=2;
                $j=0;   
if ($result4y = $conn -> query("SELECT * FROM aidattahakkukgelir where  aidattahakkukgelir.company_id = '{$_SESSION['company_id']}' AND gelirkaynagi='MALSAHIBI' AND aidattahakkukgelir.mulkno='$mulkno'")) {
  while ($row4y = $result4y -> fetch_array(MYSQLI_ASSOC)) {
      $j++;
   
     
      echo '<tr>';
      echo '<td>'.$i.'.'.$j.'</td>';
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
               
      
     /**borc bilgileri***/
       echo "<td>"."</td>";
      
      
      $alacak=0;
  
         $alacak=$row4y['stgmiktar'];
  
      
     $toplamaidatalacak+=$alacak;
      
     $belgepath1 = explode(";", $row4y['belgepaths']);
     
      echo "<td>"."</td>";
      echo '<td class="text-center align-middle">'.tarihDonustur($row4y['tahtarih'])."</td>";
      echo '<td class="text-center align-middle">'.$alacak."</td>";
      echo '<td class="text-center align-middle">'.$alacak."</td>";
      echo '<td class="text-center align-middle">'.'<a href="?dosya='.$belgepath1[0].'">İndir</a>'.' '.'<button class="preview-button" style="background-color:green;" data-file="'.$belgepath1[0].'">Önizle</button>'."</td>";
      
      echo '</tr>'; 
    
      
      
}
     
  $result4y -> free_result();
} 
            
        ?> 
			<?php
        $i=3;
        $j=1;
         echo '<tr>';
      echo '<td>'.$i.'.'.$j.'</td>';
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
      echo '<td>'.'</td>'; 
        
      echo '<td class="text-center align-middle">'.$toplamaidatborc.'</td>';   
      echo '<td>'.'</td>'; 
      echo '<td class="text-center align-middle">'.$toplamaidatalacak.'</td>'; 
      
        
        if(($toplamaidatalacak)+((-1)*$toplamaidatborc)<0)
        {
         echo '<td class="text-center align-middle" style=background-color:red;>'.($toplamaidatalacak)+((-1)*$toplamaidatborc).'</td>';    
        }
        
        if(($toplamaidatalacak)+((-1)*$toplamaidatborc)>=0)
        {
         echo '<td class="text-center align-middle" style=background-color:green;>'.($toplamaidatalacak)+((-1)*$toplamaidatborc).'</td>';    
        }
        
        
        
      echo '<td>'.'</td>'; 
       echo '</tr>'; 
        
        ?>  
		 
	     
	</tbody> 
	</table>
               
       
 </div>
<!---------------------------------MAİN END------------------------------------> 
           
           
           
   <div class="button-container">        
 
              <form method="POST" action="malsahibitahsilatyap.php" onsubmit="return validatecallForm()" enctype="multipart/form-data">
<input type="text" id="mulkno" name="mulkno" style="display:none" value='<?php echo $mulkno;?>'>
              <div class="form-group" style="width:100%;">
             <button id="renkdegis1" type="submit" class="button" style="background-color:#536DFE;">Tahsilat Yap</button>
              </div>
      
        </form>      
                                                   
    </div>                                                               
                                                                          
                                                                                   
                                                                                            
                                                                                                              
           
           
            
 <div class="preview-container">
    <span class="preview-close">&times;</span>
    <div class="preview-content"></div>
  </div> 
           
       



<script>
     function submitForm(formId) {
            document.getElementById(formId).submit();
        }
    
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
     new DataTable('#example', {
         language: {
        url: '//cdn.datatables.net/plug-ins/2.0.1/i18n/tr.json',
    },
    responsive: true,
         paging: false,        // Sayfalamayı kaldır
                info: false,          // "Kayıt sayısı" bilgisini kaldır
                searching: false,      // Arama çubuğunu kaldır
    
         
    columnDefs: [
            { 
                targets: [0,1,2,3,4,5,6,7,8,9,10,11,12,13], // Filtreleme ve sıralamanın devre dışı bırakılacağı kolonların indexleri
                searchable: false, // Filtrelemeyi devre dışı bırakır
                orderable: false   // Sıralamayı devre dışı bırakır
            }
        ]     
         
});   
    
  /*  
    
         new DataTable('#example2', {
         language: {
        url: '//cdn.datatables.net/plug-ins/2.0.1/i18n/tr.json',
    },
    responsive: true,
         paging: false,        // Sayfalamayı kaldır
                info: false,          // "Kayıt sayısı" bilgisini kaldır
                searching: false,      // Arama çubuğunu kaldır
    
         
    columnDefs: [
            { 
                targets: [0,1,2,3,4,5,6,7,8,9,10,11,12,13], // Filtreleme ve sıralamanın devre dışı bırakılacağı kolonların indexleri
                searchable: false, // Filtrelemeyi devre dışı bırakır
                orderable: false   // Sıralamayı devre dışı bırakır
            }
        ]     
         
}); 
    
    */
    
    
    
    
    
    
            $(document).ready(function() {
    var table = $('#example2').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        "info": true,
        dom: 'Bfrtip', // Butonlar için DOM yapılandırması
        buttons: [
            {
                extend: 'excelHtml5', // Excel’e aktarma butonu
                text: '📂 Excel’e Aktar',
                className: 'btn-excel',
                exportOptions: {
                    columns: ':not(.no-export)' // "no-export" sınıfına sahip olanları dışarıda bırak
                    //columns: ':visible' // Sadece görünen kolonları aktar
                }
            },
            {
                extend: 'colvis', // Kolonları göster/gizle butonu
                text: '🛠️ Kolonları Düzenle',
                className: 'btn-colvis'
            }
        ],
        responsive: {
            details: {
                type: 'inline', // Inline display of the additional information
                target: 'tr' // This tells DataTables to expand/collapse rows when clicked
            }
        },
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/tr.json" //Türkçe dil desteği
        }
    });

    // Excel butonuna özel tıklama eventi ekleyelim
    $('#exportExcel').on('click', function() {
        table.button('.buttons-excel').trigger();
    });
});
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

           new DataTable('#example3', {
         language: {
        url: '//cdn.datatables.net/plug-ins/2.0.1/i18n/tr.json',
    },
    responsive: true,
         paging: false,        // Sayfalamayı kaldır
                info: false,          // "Kayıt sayısı" bilgisini kaldır
                searching: false,      // Arama çubuğunu kaldır
    
         
    columnDefs: [
            { 
                targets: [0,1,2,3,4,5,6,7,8,9,10,11,12,13], // Filtreleme ve sıralamanın devre dışı bırakılacağı kolonların indexleri
                searchable: false, // Filtrelemeyi devre dışı bırakır
                orderable: false   // Sıralamayı devre dışı bırakır
            }
        ]     
         
});  
    
    
               new DataTable('#example4', {
         language: {
        url: '//cdn.datatables.net/plug-ins/2.0.1/i18n/tr.json',
    },
    responsive: true,
         paging: false,        // Sayfalamayı kaldır
                info: false,          // "Kayıt sayısı" bilgisini kaldır
                searching: false,      // Arama çubuğunu kaldır
    
         
    columnDefs: [
            { 
                targets: [0,1,2,3,4,5,6,7,8,9,10,11,12,13], // Filtreleme ve sıralamanın devre dışı bırakılacağı kolonların indexleri
                searchable: false, // Filtrelemeyi devre dışı bırakır
                orderable: false   // Sıralamayı devre dışı bırakır
            }
        ]     
         
}); 

        
      function showConfirmation(num,num2) {
        
     var a=document.getElementById(num);
         //alert(a.value);
   
        
          
          if(a.value=="0"){
              
                const isConfirmed = confirm("Kaporasız kiralama işlemini başlatmak istediğinizden emin misiniz?");

   //alert(isConfirmed);
    if (isConfirmed) {
     
        document.getElementById(num2).submit();
    } else {
        alert("Kaporasız işlem iptal edildi.");
        return false;
    }
}
          
          if(a.value=="1"){

        document.getElementById(num2).submit();
    
}
              
             
          }
          

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
  
    
</script>

</body>
</html>