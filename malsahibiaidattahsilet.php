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
        
        
        
        
        
               .container {
            display: flex;
            flex-wrap: wrap;
        }

        .box {
            width: calc(50% - 20px);
            background-color: white;
            color: black;
            padding: 20px;
            margin: 10px;
            box-sizing: border-box;
            /*border:0.2px solid;*/
        }

        @media screen and (max-width: 1000px) {
            .box {
                width: calc(100% - 20px);
            }
        }
        
        @media screen and (max-width: 768px) {
            .box {
                width: calc(100% - 20px);
            }
        }

        @media screen and (max-width: 480px) {
            .box {
                width: calc(100% - 20px);
            }
        }
        
        
        
        .chart-container {
    width: 100%;
    height: 100%;
    margin: auto;
  }
       
        table.dataTable td {
  font-size: 1em;
}
        div.dt-container div.dt-length label {
    font-weight: normal;
    text-align: left;
    white-space: nowrap;
            font-size: 0.6em;
}
div.dt-container div.dt-info {
    padding-top: 0.85em;
    font-size: 0.6em;
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
    
    
    if($_SESSION['siteadi']!=null)
    {
      $siteadi=$_SESSION['siteadi'];
    }
    else
    {
      Notdevam();  
    }
    
    /*
     if($_SESSION['year']!=null)
    {
      $year=$_SESSION['year'];
    }
    else
    {
      Notdevam();  
    }
    */
    ?>


<!-------------------------------------------------------->




             <script>
             //table.clear().destroy();      
 
          
          
   function  opensessiononay(){
         window.location.href = "https://whitelotustest.online/index.php";
    }
       </script>

 <div class="formcerceve">
    
    
    
   
    
        
            <h1 class="top-text">MAL SAHİBİNE AİT AİDATLARI YÖNET</h1>
            <h1 class="top-text"><?php echo "Site Adı: ".$siteadi;?></h1>


      <?php
          // Yılın ilk gününü döndüren fonksiyon
function getFirstDayOfYear($year) {
    $string=$year."-01-01";
    return new DateTime($string); // Yılın ilk günü: 1 Ocak
}

// Yılın son gününü döndüren fonksiyon
function getLastDayOfYear($year) {
    $string=$year."-12-31";
    return new DateTime($string); // Yılın son günü: 31 Aralık
}
     
   $currentYear = date("Y"); // Geçerli yılı al  
   $firstDay = getFirstDayOfYear($currentYear);
$lastDay = getLastDayOfYear($currentYear);  
  
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
  
     //preeeee start
     $o=0;
                 $adtsur="EVET";
            $premulkid=[];
            $preyapiid=[];
            $adtsurmal="MALSAHİBİ";
            //echo $mulknoss."<br>";
if ($result343y = $conn -> query("SELECT * FROM aidattahakkukborc where  aidattahakkukborc.company_id = '{$_SESSION['company_id']}' AND aidattahakkukborc.aidatsurekliligi='$adtsur' AND aidattahakkukborc.kimborclandirildi='$adtsurmal'")) {
    
  while ($row343y = $result343y -> fetch_array(MYSQLI_ASSOC)) {
    $premulkid[$o]=$row343y['mulkno']; 
    $preyapiid[$o]=$row343y['yapino']; 
      $o++;
  }
      
$result343y -> free_result();
}
   //preeeee end   
 $check=0;

       $empSQL = "SELECT * FROM mulkkayit where  mulkkayit.company_id = '{$_SESSION['company_id']}' AND mulkkayit.isdeleted!=1 AND siteadi='$siteadi' AND aidatsurekliligi='EVET'";
     
	$empResult = mysqli_query($conn, $empSQL);	
	
        ?>	
	<table class="table table-striped table-bordered" id="example" style="width:100%">
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
            
            <!--<th>Tarih Baş.</th>
            <th>Tarih. Bit.</th> -->
            
            <th>Aidat Borç £</th> 
            <th>Aidat Alacak £</th> 
            <th>Aidat Bakiye £</th> 
               
            <th>Aidat Tahsil Et</th>
		</tr> 
	</thead> 
	<tbody> 
		<?php 
        $i=0;
		while($emp = mysqli_fetch_assoc($empResult)){ 
         $i++;   
            
            
            

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
       
            
   $controltahsilatguncelle=0;
    if ($result8y = $conn -> query("SELECT * FROM tahsilat where  tahsilat.company_id = '{$_SESSION['company_id']}' AND kiralamakey='$kiralamakey' AND yetkilionay=1 AND guncellemegonderildi=1")) {
  while ($row8y = $result8y -> fetch_array(MYSQLI_ASSOC)) {
       $controltahsilatguncelle=$row8y['guncellemegonderildi'];
       $tahsilatid=$row8y['id'];
}
     
  $result8y -> free_result();
}          
            
        
            
            
		?>
		
		<?php
            for($k=0;$k<count($premulkid);$k++)
            {
                if($premulkid[$k]==$emp['id'] && $preyapiid[$k]==$emp['yapino'])
                {
                    
                    echo '<tr style="background-color:#98C419;">
               <td><?php echo $i; ?></td>
               <td><?php echo $blokno; ?></td> 
                <td><?php echo $daireno; ?></td>
                <td><?php echo $dairetipi; ?></td>
                <td><?php echo $katno; ?></td> 
				<td><?php echo $alan; ?></td> 
                <td onclick="submitForm(\'formm' . $emp['id'] . '\')">';
            echo '<form action="mulkgoster.php" method="post" name="formm' . $emp['id'] . '" id="formm' . $emp['id'] . '" target="_blank">';
            echo '<input type="text" id="itemid" name="itemid" style="display:none" value="' . $emp['id'] . '">';
            echo '</form>';
            echo '<t style="cursor: pointer;color: blue;text-decoration: underline;">'.$emp['id'].'</t>';
            echo '</td>';
                echo '<td onclick="submitForm(\'formy' . $emp['yapino'] . '\')">';
            echo '<form action="yapigoster.php" method="post" name="formy' . $emp['yapino'] . '" id="formy' . $emp['yapino'] . '" target="_blank">';
            echo '<input type="text" id="itemid" name="itemid" style="display:none" value="' . $emp['yapino'] . '">';
            echo '</form>';
            echo '<t style="cursor: pointer;color: blue;text-decoration: underline;">'.$emp['yapino'].'</t>';
            echo '</td>';
              
           // <td><?php //echo $firstDay->format('d-m-Y'); </td>
             // <td><?php //echo $lastDay->format('d-m-Y');</td>
                    
 
            ?>
		
		
		
		   
                 
             
			
          <?php
         $j=0;
           $aidatborc=0;
            $mulknoss=$emp['id'];
            $adtsur="EVET";
            $adtsurmal="MALSAHİBİ";
            //echo $mulknoss."<br>";
if ($result3y = $conn -> query("SELECT * FROM aidattahakkukborc where  aidattahakkukborc.company_id = '{$_SESSION['company_id']}' AND aidattahakkukborc.aidatsurekliligi='$adtsur' AND aidattahakkukborc.kimborclandirildi='$adtsurmal' AND aidattahakkukborc.mulkno='$mulknoss'")) {
    
  while ($row3y = $result3y -> fetch_array(MYSQLI_ASSOC)) {
      $check=1;
      $j++;
      

      //echo $row3y['mulkno']."<br>";
     
        
           if($row3y['parabirimi']=="STERLIN")
      {
          $aidatborc+=$row3y['miktar'];
      }
      
      if($row3y['parabirimi']=="EURO")
      {
          $eurotl=$row3y['miktar']*$kureuro;
          $sterlincevir=ceil($eurotl/$kurgbp*100)/100;
          $aidatborc+=$sterlincevir;
      }
       if($row3y['parabirimi']=="DOLAR")
      {
          $dolartl=$row3y['miktar']*$kurusd;
          $sterlincevir=ceil($dolartl/$kurgbp*100)/100;
          $aidatborc+=$sterlincevir;
      }
      if($row3y['parabirimi']=="TL")
      {
          $tl=ceil($row3y['miktar'] / $kurgbp* 100)/100;
          
          $aidatborc+=$tl;
      }
   
       }
      $result3y -> free_result();
}      
       echo '<td class="text-center align-middle">'.$aidatborc."</td>";
      
    
                   $aidatalacak=0;
     
      $firstdayfor=$firstDay->format('Y-m-d');
      $lastdayfor=$lastDay->format('Y-m-d');
      
      
      
    if ($result7y = $conn -> query("SELECT * FROM aidattahakkukgelir where  aidattahakkukgelir.company_id = '{$_SESSION['company_id']}' AND gelirkaynagi='MALSAHIBI' AND mulkno='$mulknoss'")) {
        
    //AND tahtarih BETWEEN '$firstdayfor' AND '$lastdayfor'
  while ($row7y = $result7y -> fetch_array(MYSQLI_ASSOC)) {

          $aidatalacak+=$row7y['stgmiktar'];

    }
     
  $result7y -> free_result();
}     
      
      
       echo '<td class="text-center align-middle">'.$aidatalacak."</td>";
      
      
         if($aidatalacak-$aidatborc<0)
      {
       echo '<td class="text-center align-middle" style=background-color:red;>'.$aidatalacak-$aidatborc."</td>";   
      }
      if($aidatalacak-$aidatborc>=0)
      {
       echo '<td class="text-center align-middle" style=background-color:green;>'.$aidatalacak-$aidatborc."</td>";   
      }
       
      
      
               echo '<td class="text-center align-middle">
                                                   
                                 <div class="dropdownbb">
  <button class="dropbtnbb">Menü</button>
  <div class="dropdown-contentbb">';
  
  echo '<a href="#"><form action="/malsahibiaidattahsiletdetay.php" method="post" name="formgun" id="formgun"><input type="text" id="kiralamakey" name="kiralamakey" style="display:none" value='.$mulknoss.'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Göster"></form></a>';

       if($controltahsilatguncelle==1){
            
           echo '<a href="#"><form action="malsahibitahsilatguncelle.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$mulknoss.'><input type="text" id="tahsilatid" name="tahsilatid" style="display:none" value='.$tahsilatid.'><input type="submit" name="submit" id="buttongun" style="background:orange;" value="Tahsil.Güncelle"></form></a>'; 
            
        }      
            
            
echo  '</td></div></div>';
      
       
    echo '</tr>'; 
   
      
 
            
            

    break;
        }
                
                                     }
            }
        
        if($check==0){
    echo '<div><b style="color:red;">Bu sitede bulunan mülklere ait herhangi bir borç bulunamadı.</b></div>';}
                
          
                
        ?> 
			  
			   
			     
	</tbody> 
	</table>
               
       

<!---------------------------------MAİN END------------------------------------> 
            

           
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
    
         
    columnDefs: [
            { 
                targets: [1,2,3,4,5,6,7,8,9,10,11], // Filtreleme ve sıralamanın devre dışı bırakılacağı kolonların indexleri
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
          

    
  
    
</script>

</body>
</html>