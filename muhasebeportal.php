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
$pageid="muhasebepage"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.  
    
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
    
    
    
   $toplambakiye=0; 
   $toplamkirabakiye=0; 
   $toplamaidatbakiye=0; 
    
    ?>


<!-------------------------------------------------------->




             <script>
             //table.clear().destroy();      
 
          
          
   function  opensessiononay(){
         window.location.href = "https://whitelotustest.online/index.php";
    }
       </script>


<br>
 <a href="muhasebeportaleski.php" class="btn" style="background-color: #4da6ff; color: white;">
  Eski Kiralamaları Gör
</a>
 <br>

 <div class="formcerceve">
    
    
    
   
    
        
            <h1 class="top-text">MUHASEBE- AKTİF KİRALAMALAR</h1>
            <h1 class="top-text"><?php echo "Site Adı: ".$siteadi;?></h1>


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
     
     
     
     

     

       $empSQL = "SELECT * FROM mulkkayit where  mulkkayit.company_id = '{$_SESSION['company_id']}' AND mulkkayit.isdeleted!=1 AND siteadi='$siteadi'";
     
	$empResult = mysqli_query($conn, $empSQL);	
	
        ?>	
	<table class="table table-striped table-bordered nowrap" id="example" style="width:100%">

	<!--
   <div class="container my-3">
    <div class="row g-2 align-items-center">
       
        <div class="col-md-4">
            <label class="form-label fw-bold">Sözleşme Bitiş Tarihi:</label>
            <div class="input-group">
                <input type="date" id="minDate" class="form-control">
                <span class="input-group-text">-</span>
                <input type="date" id="maxDate" class="form-control">
            </div>
        </div>

       
        <div class="col-md-4">
            <label class="form-label fw-bold">Bakiye Aralığı (£):</label>
            <div class="input-group">
                <input type="number" id="minBakiye" class="form-control" placeholder="Min">
                <span class="input-group-text">-</span>
                <input type="number" id="maxBakiye" class="form-control" placeholder="Max">
            </div>
        </div>

        
        <div class="col-md-4">
            <label class="form-label fw-bold">Özel Sütun:</label>
            <select id="customFilter" class="form-select">
                <option value="">Tümünü Göster</option>
                <option value="Kapora">Kapora</option>
                <option value="Depozito">Depozito</option>
                <option value="Aidat">Aidat</option>
                <option value="Kira">Kira</option>
            </select>
        </div>
    </div>
</div>

-->
	
	<thead> 
		<tr> 
			<th>#ID</th>
            <th>Blok No</th> 
			<th>Daire No</th> 
			<!--<th>Daire Tipi</th>-->
            <th>Kat No</th>
            <th>Alan(m2)</th>
            <th>Mülk No</th> 
            <!--<th>Yapı No</th>-->
            
            <th>Söz Baş.</th>
            <th>Söz. Bit.</th> 
            <th>Söz. Bit. Kalan Gün</th> 
            <th>Ödeme Şekli</th> 
            
            <th>Kira Borç £</th> 
            <th>Kira Alacak £</th> 
            <th>Kira Bakiye £</th> 
              
              <th>Aidat Borç £</th> 
            <th>Aidat Alacak £</th> 
            <th>Aidat Bakiye £</th> 
             
            <th>Toplam Bakiye £</th>   
                   
            <th>Cari Hesap Detay</th>
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
       
            
            
            
        
            
            
		?>
		
		
		<!--
			<tr style="background-color:#98C419;">
               <td><?php// echo $i; ?></td>
               <td><?php// echo $blokno; ?></td> 
                <td><?php// echo $daireno; ?></td>
                <td><?php// echo $dairetipi; ?></td>
                <td><?php// echo $katno; ?></td> 
				<td><?php// echo $alan; ?></td> 
                <?php // echo '<td onclick="submitForm(\'formm' . $emp['id'] . '\')">';
            //echo '<form action="mulkgoster.php" method="post" name="formm' . $emp['id'] . '" id="formm' . $emp['id'] . '" target="_blank">';
            //echo '<input type="text" id="itemid" name="itemid" style="display:none" value="' . $emp['id'] . '">';
            //echo '</form>';
            //echo '<t style="cursor: pointer;color: blue;text-decoration: underline;">'.$emp['id'].'</t>';
            //echo '</td>';?>
                <?php //echo '<td onclick="submitForm(\'formy' . $emp['yapino'] . '\')">';
            //echo '<form action="yapigoster.php" method="post" name="formy' . $emp['yapino'] . '" id="formy' . $emp['yapino'] . '" target="_blank">';
            //echo '<input type="text" id="itemid" name="itemid" style="display:none" value="' . $emp['yapino'] . '">';
            //echo '</form>';
            //echo '<t style="cursor: pointer;color: blue;text-decoration: underline;">'.$emp['yapino'].'</t>';
            //echo '</td>';?> 
              
             <td></td>
             <td></td>
             <td></td>  
             <td></td>
                 
             <td></td>
             <td></td>  
             <td></td>      
                  
                <td></td> 
             
			</tr>
			-->
  <?php
    $j=0;   
if ($result3y = $conn -> query("SELECT * FROM kiralamakayit where  kiralamakayit.company_id = '{$_SESSION['company_id']}' AND kiralamakayit.isdeleted !=1 AND kiralamakayit.mulkno='$mulknox'")) {
  while ($row3y = $result3y -> fetch_array(MYSQLI_ASSOC)) {
      $j++;
      $check=0;
      if($check==0)
      {echo '<tr>';}
       echo '<td>'.$i.'.'.$j.'</td>';
      echo '<td>'.$blokno.'</td>'; 
      echo '<td>'.$daireno.'</td>'; 
      //echo '<td>'.$dairetipi.'</td>'; 
      echo '<td>'.$katno.'</td>'; 
      echo '<td>'.$alan.'</td>'; 
               
      echo '<td onclick="submitForm(\'formm' . $emp['id'] . '\')">';
            echo '<form action="mulkgoster.php" method="post" name="formm' . $emp['id'] . '" id="formm' . $emp['id'] . '" target="_blank">';
            echo '<input type="text" id="itemid" name="itemid" style="display:none" value="' . $emp['id'] . '">';
            echo '</form>';
            echo '<t style="cursor: pointer;color: blue;text-decoration: underline;">'.$emp['id'].'</t>';
            echo '</td>';?>
                <?php //echo '<td onclick="submitForm(\'formy' . $emp['yapino'] . '\')">';
            //echo '<form action="yapigoster.php" method="post" name="formy' . $emp['yapino'] . '" id="formy' . $emp['yapino'] . '" target="_blank">';
            //echo '<input type="text" id="itemid" name="itemid" style="display:none" value="' . $emp['yapino'] . '">';
            //echo '</form>';
            //echo '<t style="cursor: pointer;color: blue;text-decoration: underline;">'.$emp['yapino'].'</t>';
            //echo '</td>';
     
      echo "<td>".tarihDonustur($row3y['kiralamatarihi'])."</td>";
      echo "<td>".tarihDonustur($row3y['kiralamabitistarihi'])."</td>";
      
      
      $sozbitistarihi=tarihFarki($row3y['kiralamabitistarihi']);
      
      if($sozbitistarihi>30){
         echo '<td class="text-center align-middle">'.$sozbitistarihi."</td>"; 
      }
      if($sozbitistarihi<=30 && $sozbitistarihi>=0){
         echo '<td style="background-color:orange" class="text-center align-middle">'.$sozbitistarihi."</td>"; 
      }
     if($sozbitistarihi<0){
         echo '<td style="background-color:red" class="text-center align-middle">'.$sozbitistarihi."</td>"; 
      }
      
      
      if($row3y['kiraodemebicimi'] == 1){
                    $suodemebicimiyazi = "HER AY";
                } 
                if($row3y['kiraodemebicimi'] == 3){
                    $suodemebicimiyazi = "HER ÜÇ AYDA BİR";
                } 
                if($row3y['kiraodemebicimi'] == 6){
                    $suodemebicimiyazi = "HER ALTI AYDA BİR";
                } 
                if($row3y['kiraodemebicimi'] == 12){
                    $suodemebicimiyazi = "HER ONİKİ AYDA BİR";
                }
      
       echo '<td class="text-center align-middle">'.$suodemebicimiyazi."</td>";
      
      
      /***BORC ALACAK BAKİYE TD LERİ***/
      
     $kiralamakey=$row3y['kiralamakey'];
      
      
     $borc=0;
     
    if ($result4y = $conn -> query("SELECT * FROM kiratahakkukborc where  kiratahakkukborc.company_id = '{$_SESSION['company_id']}' AND kiratahakkukborc.kiralamakey='$kiralamakey'")) {
  while ($row4y = $result4y -> fetch_array(MYSQLI_ASSOC)) {
$kiraparabirimi=$row4y['parabirimi'];
      if($row4y['parabirimi']=="STERLIN")
      {
          $borc+=$row4y['miktar'];
      }
      
      if($row4y['parabirimi']=="EURO")
      {
          $eurotl=$row4y['miktar']*$kureuro;
          $sterlincevir=ceil($eurotl/$kurgbp*100)/100;
          $borc+=$sterlincevir;
      }
       if($row4y['parabirimi']=="DOLAR")
      {
          $dolartl=$row4y['miktar']*$kurusd;
          $sterlincevir=ceil($dolartl/$kurgbp*100)/100;
          $borc+=$sterlincevir;
      }
      if($row4y['parabirimi']=="TL")
      {
          $tl=ceil($row4y['miktar'] / $kurgbp* 100)/100;
          
          $borc+=$tl;
      }
      
    }
     
  $result4y -> free_result();
}    
      
      $aidatborc=0;
      
          if ($result5y = $conn -> query("SELECT * FROM aidattahakkukborc where  aidattahakkukborc.company_id = '{$_SESSION['company_id']}' AND aidattahakkukborc.kiralamakey='$kiralamakey'")) {
  while ($row5y = $result5y -> fetch_array(MYSQLI_ASSOC)) {
$aidatparabirimi=$row5y['parabirimi'];
      if($row5y['parabirimi']=="STERLIN")
      {
          $aidatborc+=$row5y['miktar'];
      }
      
      if($row5y['parabirimi']=="EURO")
      {
          $eurotl=$row5y['miktar']*$kureuro;
          $sterlincevir=ceil($eurotl/$kurgbp*100)/100;
          $aidatborc+=$sterlincevir;
      }
       if($row5y['parabirimi']=="DOLAR")
      {
          $dolartl=$row5y['miktar']*$kurusd;
          $sterlincevir=ceil($dolartl/$kurgbp*100)/100;
          $aidatborc+=$sterlincevir;
      }
      if($row5y['parabirimi']=="TL")
      {
          $tl=ceil($row5y['miktar'] / $kurgbp* 100)/100;
          
          $aidatborc+=$tl;
      }
      
    }
     
  $result5y -> free_result();
} 
      
      
      
      
      
      echo '<td class="text-center align-middle">'.$borc."</td>";
      
     // echo '<td class="text-center align-middle">'.$aidatborc."</td>";
      
           $alacak=0;
     
    if ($result6y = $conn -> query("SELECT * FROM kiratahakkukgelir where  kiratahakkukgelir.company_id = '{$_SESSION['company_id']}' AND kiratahakkukgelir.kiralamakey='$kiralamakey'")) {
  while ($row6y = $result6y -> fetch_array(MYSQLI_ASSOC)) {

          $alacak+=$row6y['stgmiktar'];

    }
     
  $result6y -> free_result();
}  
      
                 $aidatalacak=0;
     
    if ($result7y = $conn -> query("SELECT * FROM aidattahakkukgelir where  aidattahakkukgelir.company_id = '{$_SESSION['company_id']}' AND aidattahakkukgelir.kiralamakey='$kiralamakey'")) {
  while ($row7y = $result7y -> fetch_array(MYSQLI_ASSOC)) {

          $aidatalacak+=$row7y['stgmiktar'];

    }
     
  $result7y -> free_result();
} 
      
    
      
      echo '<td class="text-center align-middle">'.$alacak."</td>";
      
      //echo '<td class="text-center align-middle">'.$aidatalacak."</td>";
      
      
      if($alacak-$borc<0 && $aidatalacak-$aidatborc<0)
      {
       echo '<td class="text-center align-middle" style=background-color:red;>'.$alacak-$borc."</td>";   
      }
      if($alacak-$borc>=0 && $aidatalacak-$aidatborc>=0)
      {
       echo '<td class="text-center align-middle" style=background-color:green;>'.$alacak-$borc."</td>";   
      }
       if($alacak-$borc>=0 && $aidatalacak-$aidatborc<0)
      {
       echo '<td class="text-center align-middle"><a style=background-color:green;>'.$alacak-$borc."</b></td>";   
      }
        if($alacak-$borc<0 && $aidatalacak-$aidatborc>=0)
      {
       echo '<td class="text-center align-middle"><a style=background-color:red;>'.$alacak-$borc."</b></td>";   
      }
      //echo '<td class="text-center align-middle">'.$alacak-$borc."<br>".$aidatalacak-$aidatborc."</td>";
      
      
      $toplamkirabakiye=$toplamkirabakiye+($alacak-$borc);
      
      echo '<td class="text-center align-middle">'.$aidatborc."</td>";
      
      echo '<td class="text-center align-middle">'.$aidatalacak."</td>";
      
      
      if($alacak-$borc<0 && $aidatalacak-$aidatborc<0)
      {
       echo '<td class="text-center align-middle" style=background-color:red;>'.$aidatalacak-$aidatborc."</td>";   
      }
      if($alacak-$borc>=0 && $aidatalacak-$aidatborc>=0)
      {
       echo '<td class="text-center align-middle" style=background-color:green;>'.$aidatalacak-$aidatborc."</td>";   
      }
       if($alacak-$borc>=0 && $aidatalacak-$aidatborc<0)
      {
       echo '<td class="text-center align-middle"><a style=background-color:green;>'.$aidatalacak-$aidatborc."</b></td>";   
      }
        if($alacak-$borc<0 && $aidatalacak-$aidatborc>=0)
      {
       echo '<td class="text-center align-middle"><a style=background-color:red;>'.$aidatalacak-$aidatborc."</b></td>";   
      }
      
      $toplamaidatbakiye=$toplamaidatbakiye+($aidatalacak-$aidatborc);
      
      
      if($alacak-$borc<0 && $aidatalacak-$aidatborc<0)
      {
       echo '<td class="text-center align-middle" style=background-color:red;>'.$alacak-$borc+$aidatalacak-$aidatborc."</td>"; 
          
      }
      if($alacak-$borc>=0 && $aidatalacak-$aidatborc>=0)
      {
       echo '<td class="text-center align-middle" style=background-color:green;>'.$alacak-$borc+$aidatalacak-$aidatborc."</td>";
      }
       if($alacak-$borc>=0 && $aidatalacak-$aidatborc<0)
      {
       echo '<td class="text-center align-middle"><a style=background-color:green;>'.$alacak-$borc+$aidatalacak-$aidatborc."</b></td>";   
      }
        if($alacak-$borc<0 && $aidatalacak-$aidatborc>=0)
      {
       echo '<td class="text-center align-middle"><a style=background-color:red;>'.$alacak-$borc+$aidatalacak-$aidatborc."</b></td>";   
      }
      
      $toplambakiye=$toplambakiye+($alacak-$borc+$aidatalacak-$aidatborc);
      
      
      /***BORC ALACAK BAKİYE TD LERİ SON***/  
      
           
            echo '<td class="text-center align-middle">
                                                   
                                 <div class="dropdownbb">
  <button class="dropbtnbb">Menü</button>
  <div class="dropdown-contentbb">';
  
  echo '<a href="#"><form action="/muhasebekiradetay.php" method="post" name="formgun" id="formgun"><input type="text" id="kiralamakey" name="kiralamakey" style="display:none" value='.$kiralamakey.'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Göster"></form></a>';

echo  '</td></div></div>';
        
                                                                                      
            
      
      
    if($check==0)
    {echo '</tr>'; 
    $check=1;
    }
      
      
}
     
  $result3y -> free_result();
}            
    
        }
        ?> 
			  
			   
			     
	</tbody> 
	</table>
               
       

<!---------------------------------MAİN END------------------------------------> 
  
        </div>
        
        
        
        
 <br>       
 <br>       
 <br>       
 
        
        
        
        <div class="formcerceve">

            <h1 class="top-text">Özet Muhasebe Bilgileri</h1>
            

<table id="muhasebeTablosu" class="display responsive nowrap" style="width:100%">
    <thead>
      <tr>
        <th>Bilgi Türü</th>
        <th>Tutar (£)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Toplam Kira Bakiye</td>
        <td><?php echo  $toplamkirabakiye;?></td>
      </tr>
      <tr>
        <td>Toplam Aidat Bakiye</td>
        <td><?php echo  $toplamaidatbakiye;?></td>
      </tr>
      <tr>
        <td>Toplam Bakiye</td>
        <td><?php echo  $toplambakiye;?></td>
      </tr>
    </tbody>
  </table>
   
   
   
   
   
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

    
$('#exportExcel').on('click', function() {
    $('.buttons-excel').click();
});

 
/*    
    $(document).ready(function() {
    var table = $('#example').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        "info": true,
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                text: '📂 Excel’e Aktar',
                className: 'btn-excel',
                exportOptions: {
                    columns: null // Tüm kolonları Excel'e aktar
                }
            },
            {
                extend: 'colvis',
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
            "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/tr.json"
        }
    });

    // Excel butonuna özel tıklama eventi ekleyelim
    $('#exportExcel').on('click', function() {
        table.button('.buttons-excel').trigger();
    });
});

 */   
   
        $(document).ready(function () {
      $('#muhasebeTablosu').DataTable({
        responsive: true,
        paging: false,       // Sayfalama kapalı
        searching: false,    // Arama kapalı
        info: false          // Alt bilgi kapalı
      });
    });
    
    

$(document).ready(function() {
    var table = $('#example').DataTable({
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
                    //columns: ':visible' // Sadece görünen kolonları aktar
                     columns: ':not(.no-export)' // "no-export" sınıfına sahip olanları dışarıda bırak
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

    

/*$(document).ready(function() {
   var table = $('#example').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "responsive": true, // Responsive özelliği aktif
        "autoWidth": false, // Otomatik genişliği devre dışı bırak
        "dom": 'Bfrtip',
        "buttons": [
            {
                extend: 'colvis',
                text: 'Kolonları Göster/Gizle'
            
            }
        ],
        "columnDefs": [
            { "orderable": false, "targets": [13] }, // Son sütunun sıralamayı kapat
            { "className": "none", "targets": [5, 6, 7, 8, 9] } // Küçük ekranlarda gizlenecek kolonlar
        ],
        "language": {
    "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/tr.json"
}
    });
   /* 
      // Sözleşme Bitiş Tarihi Filtreleme
    $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
        var minDate = $('#minDate').val();
        var maxDate = $('#maxDate').val();
        var endDate = data[8] || ''; // Sözleşme bitiş tarihi sütunu

        if ((minDate === '' || endDate >= minDate) && (maxDate === '' || endDate <= maxDate)) {
            return true;
        }
        return false;
    });

    // Bakiye Min-Max Değer Filtreleme
    $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
        var minBakiye = parseFloat($('#minBakiye').val()) || -Infinity;
        var maxBakiye = parseFloat($('#maxBakiye').val()) || Infinity;
        var bakiye = parseFloat(data[13]) || 0; // Bakiye sütunu

        return bakiye >= minBakiye && bakiye <= maxBakiye;
    });

    // Filtreleme işlemi için event listener
    $('#minDate, #maxDate, #minBakiye, #maxBakiye').on('keyup change', function() {
        table.draw();
    });
    */
//});
   
    

    

        
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