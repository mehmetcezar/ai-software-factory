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
  $_SESSION['kaporamiktari']="";  
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
    
    ?>


<!-------------------------------------------------------->


<script>
    function openTab(event, tabId) {
    // Tüm tab-content'leri gizle
    var tabContents = document.getElementsByClassName("tab-content");
    for (var i = 0; i < tabContents.length; i++) {
        tabContents[i].classList.remove("active");
    }

    // Tüm tab-button'lardan active sınıfını kaldır
    var tabButtons = document.getElementsByClassName("tab-button");
    for (var i = 0; i < tabButtons.length; i++) {
        tabButtons[i].classList.remove("active");
    }

    // Tıklanan butonu ve ilgili içeriği aktif yap
    document.getElementById(tabId).classList.add("active");
    event.currentTarget.classList.add("active");
}
    </script>


             <script>
             table.clear().destroy();      
 
          
          
   function  opensessiononay(){
         window.location.href = "https://whitelotustest.online/index.php";
    }
       </script>

 <div class="formcerceve">
    
    
    
     <div class="tab-container">
        <div class="tabs">
            <button class="tab-button active" onclick="openTab(event, 'tab1')">Benim Listem</button>
            <button class="tab-button" onclick="openTab(event, 'tab2')">Genel Liste</button>
        </div>
        <div class="tab-content active" id="tab1">
            <h1 class="top-text">KİRALAMA YÖNET</h1>
            <h1 class="top-text"><?php echo "Site Adı: ".$siteadi;?></h1>


      <?php
 include_once("config2.php");
      
     //echo $musterikayitid;
     //echo $musteriadi; 
            
            
/**Notice Ayı oku**/
          if ($result8 = $conn -> query("SELECT * FROM noticeay")) {
  while ($row8 = $result8 -> fetch_array(MYSQLI_ASSOC)) {
      $noticekacayonce=$row8['kacayonce'];

}
     
  $result8 -> free_result();
}       
/****/            
       $kiradurumux="AÇIK";
	//$empSQL = "SELECT * FROM labproje where labproje.ispassived !=1 AND musterikayitid='$musterikayitid'";
       $empSQL = "SELECT * FROM mulkkayit where mulkkayit.isdeleted!=1 AND siteadi='$siteadi' AND mulkkayit.kiralamadurumu='$kiradurumux' AND (mulkkayit.kirakaporaeklendi=1 || mulkkayit.kaporaonayinda=1 || mulkkayit.kaporaonayinda=2 || mulkkayit.kaporaonayinda=3 || mulkkayit.kiracieklendi=1 || mulkkayit.kiralandi=1 || mulkkayit.kiralamaonayinda=1 || mulkkayit.kiralamaguncellemegonderildi=1)";
     
	$empResult = mysqli_query($conn, $empSQL);	
	 
        ?>	
	<table class="table table-striped table-bordered" id="example" style="width:100%">
	<thead> 
		<tr> 
			<!--<th>#ID</th>-->
            <th>Blok No</th> 
			<th>Daire No</th> 
			<th>Daire Tipi</th>
            <th>Kat No</th>
            <th>Alan(m2)</th>
            <th>Kira Bedeli</th> 
            <th>Aidat</th> 
            <th>Mülk No</th> 
            <th>Yapı No</th>
            <th>Statü</th> 
            <th>Bilgi</th>  
            <th>İşlem-1</th>
            <th>İşlem-2</th>
		</tr> 
	</thead> 
	<tbody> 
		<?php 
        $i=0;
		while($emp = mysqli_fetch_assoc($empResult)){ 
          // echo $emp['kapora_username']." ".$uname; 
       //if(strval($emp['kapora_username'])==strval($uname)){     
            $listemid=$emp['kirakaporasonkey'];
            
                   if ($result99 = $conn -> query("SELECT username FROM kirakaporakayit where kirakaporakayit.kirakey = '$listemid'")) {
  while ($row99 = $result99 -> fetch_array(MYSQLI_ASSOC)) {
      $username99=$row99['username'];

}
     
  $result99 -> free_result();
}    
            
       if(strval($username99)==strval($uname)){     
            
      $kiralamakey=$emp['kirakaporasonkey'];      
   $bilgi="";
   $yetkilionayi="";
            $color="#DAF7A6";
            $zararziyangoster=0;
           //$kaporaeklendi[$i]=$emp['kaporaeklendi']; 
           //$kiracieklendi[$i]=$emp['kiracieklendi']; 
           //$satisaayrildi[$i]=$emp['satisaayrildi']; 
           //$satildi[$i]=$emp['satildi'];
            
            date_default_timezone_set('Europe/Nicosia');
    $datesession=$emp['kirayaayrildisondate'];
    $timesession=$emp['kirayaayrildisontime'];
     
    // DateTime nesnesi oluşturma
$datetime = new DateTime("$datesession $timesession");

// Yeni tarih ve saati ayrı ayrı değişkenlere alma
$datesession2 = $datetime->format('d-m-Y');
$timesession2 = $datetime->format('H:i:s');
 
$datesession3 = $datesession2." ".$timesession2;  
            
$kirakaporasontarih=$emp['kirakaporasontarih'];    
 $datetime22 = new DateTime("$kirakaporasontarih");           
  $kirakaporasontarih2 = $datetime22->format('d-m-Y');          
          
            
            $kiralandi=$emp['kiralandi'];
            
            if($emp['kiralandi']!=1){
            
            if($emp['kirayaayrildi']==1){
                $bilgi=$bilgi."Rezerv: Mevcut:".$datesession3.", "; 
                $color="#FFC300";
            }else{
                $bilgi=$bilgi."Rezerv: Yok, ";
            }
                
                
            
              $bilgikaporacheck=0;  
                if($emp['kirakaporaeklendi']!=1 && $emp['kaporaonayinda']==1){
                $bilgi=$bilgi." Kira Kapora: Yetkili Onayında, ";
                $color="#00E0FF";
                 $bilgikaporacheck=1;}
                if($emp['kirakaporaeklendi']!=1 && $emp['kaporaonayinda']==3 && $emp['kirayaayrildi']==1){
                    $bilgi=$bilgi." Kira Kapora: Reddedildi, ";
                $color="#00E0FF";
                    $bilgikaporacheck=1;
                }    
           
            if($emp['kirakaporaeklendi']==1){
                $bilgi=$bilgi." Kira Kapora: Mevcut:".$kirakaporasontarih2.", ";
                $color="#00E0FF";
                $bilgikaporacheck=1;
            }
            if(!$bilgikaporacheck){
                $bilgi=$bilgi." Kira Kapora: Yok, "; 
            }
                
                
            if($emp['kiralamaonayinda']==1 && $emp['kiralamaguncellemegonderildi']!=1){
                $bilgi=$bilgi." Kiralama Onayında, ";
                $color="#BF48FF";
            }
            
            if($emp['kiralamaonayinda']==1 && $emp['kiralamaguncellemegonderildi']==1){
                $bilgi=$bilgi." Güncelleme İçin Bekliyor!!, ";
                $color="#BF48FF";
            }
      
            }//kiralanınca artık gosterme bunları
            
          
            
            
            if($emp['kiralandi']==1){
               $mulknox=$emp['id']; 
                
     if ($result2 = $conn -> query("SELECT * FROM mulkkayit where mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulknox'")) {
  while ($row2 = $result2 -> fetch_array(MYSQLI_ASSOC)) {
      $kirabitistarihi=$row2['kirabitistarihi'];
      $noticeverildimi=$row2['noticeverildimi'];
      $noticetarihi=$row2['noticetarihi'];
      $zararziyangirildimi=$row2['zararziyangirildimi'];
}
     
  $result2 -> free_result();
}
   
                $tarih = new DateTime($kirabitistarihi);
                $kirabitistarihi = $tarih->format('d-m-Y');
                
               
                if($noticeverildimi==2){
                    
                    
                 /****NOTİCE DAY ANALİZİ****/
                $todayget= date('Y-m-d');
                $tarihnot = new DateTime($noticetarihi);
                
                $hesaplanacakolan=$noticekacayonce*30;
                $gunhesabi='-'.$hesaplanacakolan.' day';    
                $tarihnot->modify($gunhesabi);
                $nottarih = $tarihnot->format('Y-m-d');
                   // echo $nottarih;
                    //echo $todayget;
                if($todayget>=$nottarih){
                    $zararziyangoster=1;
                }
                
                /************/    
                    
                    
                    
                    
                    
                $tarihnot = new DateTime($noticetarihi);
                $noticetarihi = $tarihnot->format('d-m-Y');
                    
                $bilgi=$bilgi."Kiracı: Mevcut, ";
                $bilgi=$bilgi."NOTICE Verildi-Tarihi: ".$noticetarihi;
                if($zararziyangoster && $zararziyangirildimi!=2)    
                {$bilgi=$bilgi." Notice Süresi içerisinde- zarar-ziyan gir. "; }
               
                if($zararziyangirildimi==2)
                {$bilgi=$bilgi." Zarar-Ziyan Girilmiştir. "; } 
                
                    
                $color="#FF48BF"; 
                    
                    
                }
                else
                {   
                    
                /****NOTİCE DAY ANALİZİ****/
                $todayget= date('Y-m-d');
                $tarihnot = new DateTime($kirabitistarihi);
                
                $hesaplanacakolan=$noticekacayonce*30;
                $gunhesabi='-'.$hesaplanacakolan.' day';    
                $tarihnot->modify($gunhesabi);
                $nottarih = $tarihnot->format('Y-m-d');
                if($todayget>=$nottarih){
                    $zararziyangoster=1;
                }
                
                /************/    
                    
                    
                    
                $bilgi=$bilgi."Kiracı: Mevcut, ";
                $bilgi=$bilgi."Söz Bitiş Tarihi: ".$kirabitistarihi;
                if($zararziyangoster && $zararziyangirildimi!=2)    
                {$bilgi=$bilgi." Notice Süresi içerisinde- zarar-ziyan gir. "; }
                 if($zararziyangirildimi==2)
                {$bilgi=$bilgi." Zarar-Ziyan Girilmiştir. "; } 
                $color="#FF48BF";
                }
            }else{
                $bilgi=$bilgi."Kiracı: Yok ";
            }
            
            
     if($emp['yetkilionayinda']==1){
         $yetkilionayi="YETKİLİ ONAYINDA";
     }     
            if($emp['yetkilionayinda']==2)
            {
              $yetkilionayi="KAPORA ONAYLANDI";  
            }
            
            if($emp['yetkilionayinda']==3)
            {
              $yetkilionayi="KAPORA REDDEDİLDİ";  
            }
           
           
            
           /* 
            if($emp['kirakaporaeklendi']==1){
                $bilgi=$bilgi." Kira Kapora: Mevcut, ";
               
            }else{
                $bilgi=$bilgi." Kira Kapora: Yok, ";
            }
            
             if($emp['satiskaporaeklendi']==1){
                $bilgi=$bilgi." Satış Kapora: Mevcut, ";
               
            }else{
                $bilgi=$bilgi." Satış Kapora: Yok, ";
            }
            
            if($emp['kiracieklendi']==1){
                $bilgi=$bilgi."Kiracı: Mevcut, ";
            }else{
                $bilgi=$bilgi."Kiracı: Yok, ";
            }
            
            if($emp['satisaayrildi']==1){
                $bilgi=$bilgi."Satış: Ayrıldı, ";
            }else{
                $bilgi=$bilgi."Satış: Yok, ";
            }
            
            if($emp['satildi']==1){
                $bilgi=$bilgi."Satıldı, ";
            }else{
                $bilgi=$bilgi."Satılmadı, ";
            }
            */
            
           /****YAPI BİLGİLERİ ALINSIN****/ 
                        
$mulknox=$emp['id'];
            //echo $mulknox."<br>";
             if ($result2y = $conn -> query("SELECT * FROM yapikayit where yapikayit.isdeleted !=1 AND yapikayit.mulkid='$mulknox'")) {
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
    if ($result3y = $conn -> query("SELECT * FROM tahsilat where kiralamakey='$kiralamakey' AND yetkilionay=1 AND guncellemegonderildi=1")) {
  while ($row3y = $result3y -> fetch_array(MYSQLI_ASSOC)) {
       $controltahsilatguncelle=$row3y['guncellemegonderildi'];
       $tahsilatid=$row3y['id'];
}
     
  $result3y -> free_result();
}            
		?>
		
		
		
			<tr title="<?php echo $bilgi;?>" style="background-color:<?php echo $color;?>;">
               <td><?php echo $blokno; ?></td> 
                <td><?php echo $daireno; ?></td>
                <td><?php echo $dairetipi; ?></td>
                <td><?php echo $katno; ?></td> 
				<td><?php echo $alan; ?></td> 
				<td><?php echo $emp['kirabedeli']." ".$emp['kirabedeliparabirimi']; ?></td> 
				<td><?php echo $emp['guncelaidat']." ".$emp['aidatparabirimi']; ?></td> 
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
              
               <td><?php echo $emp['status']; ?></td>
               
                <td><?php echo $bilgi; ?></td> 
                <td><?php
           
            echo '
                                                   
                                 <div class="dropdownbb">
  <button class="dropbtnbb">Menü</button>
  <div class="dropdown-contentbb">';
  if($kiralandi!=1){ 
  echo '<a href="#"><form action="/rezervet.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp['yapino'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Rezerv Et"></form></a>
  
  <a href="#"><form action="/rezerviptalet.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp['yapino'].'><input type="submit" name="submit" id="buttongun" style="background:red;" value="Rezerv İptal"></form></a>
  
  <a href="#"><form action="kaporakayitgir.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp['yapino'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kapora Al"></form></a>
  
  <a href="#"><form action="kaporasureuzat.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp['yapino'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kap.Süre Uzat"></form></a>';
      }
            if($emp['kaporasureonayinda']==3){
  echo '<a href="#"><form action="kirakaporasureredgoster.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kap.SureRedSeb."></form></a>';}
            
            if($emp['kaporaonayinda']==3){
  echo '<a href="#"><form action="kirakaporaredgoster.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kap.RedSebebi"></form></a>';}
            
            
  if($emp['kirakaporaeklendi']==1){
  echo '<a href="#"><form action="kirakaporagoster.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kapora Gör"></form></a>';
  
  echo '<a href="#"><form action="kirakaporasozkayit.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kap.Söz. Yükle"></form></a>';
      
       echo '<a href="#"><form action="kirakaporafatkayit.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kap.Fat. Yükle"></form></a>';
      
      echo '<a href="#"><form action="kirakaporamakkayit.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kap.Mak. Yükle"></form></a>';
      
      echo '<a href="#"><form action="kirakaporaektahsil.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kapora Ek Tah."></form></a>';
  }
     if($kiralandi!=1){       
  echo '<a href="#"><form action="kirakaporakayitdelete.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp['kirakaporasonkey'].'><input type="text" id="kirakaporaeklendi" name="kirakaporaeklendi" style="display:none" value='.$emp['kirakaporaeklendi'].'><input type="submit" name="submit" id="buttongun" style="background:red;" value="Kapora İptal"></form></a>';}
  
  

echo   '</div>
</div>                      
                                                   ';
                                                                                      
             ?></td> 
             
             
             
     
             
             
              <td><?php
           
            echo '
                                                   
                                 <div class="dropdownbb">
  <button class="dropbtnbb">Menü</button>
  <div class="dropdown-contentbb">';
  if($kiralandi!=1 && $emp['kirakaporaeklendi']==1){ 
  echo '<a href="#"><form action="kiralamayap.php" method="post" name="formxxx" id='."formxxx".$emp['id'].'><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp['yapino'].'><input type="text" id='."kirakey".$emp['id'].' name="kirakeyx" style="display:none" value='.$emp['kirakaporaeklendi'].'><input type="text"  id="javasubmit" style="background:green;" value="Kiralama Yap" onclick="showConfirmation(\'kirakey'.$emp['id'].'\',\'formxxx'.$emp['id'].'\')"></form></a>';
       }
  if($emp['kiralamaonayinda']==1 || $emp['kiralamaonayinda']==2){
  echo '<a href="#"><form action="kiralamagoster.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp['yapino'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kir.Bilgi Gör"></form></a>';        }   
            
  if($emp['kiralamaonayinda']==1 && $emp['kiralamaguncellemegonderildi']==1 && $kiralandi!=1){
  echo '<a href="#"><form action="kiralamaguncelle.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp['kirakaporasonkey'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp['yapino'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Güncelle"></form></a>';        }  
    if($kiralandi==1){    
   echo '<a href="#"><form action="kiralamasozyukle.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kir.Söz. Yükle"></form></a>';
        echo '<a href="#"><form action="tahsilatyap.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Tahsilat Yap"></form></a>';
        if($kiralandi==1 && $controltahsilatguncelle==1){
            
           echo '<a href="#"><form action="tahsilatguncelle.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp['kirakaporasonkey'].'><input type="text" id="tahsilatid" name="tahsilatid" style="display:none" value='.$tahsilatid.'><input type="submit" name="submit" id="buttongun" style="background:orange;" value="Tahsil.Güncelle"></form></a>'; 
            
        } 
        
        
   echo '<a href="#"><form action="yonetimsozyukle.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Yön.Söz. Yükle"></form></a>';
        
        echo '<a href="#"><form action="noticegir.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp['yapino'].'><input type="submit" name="submit" id="buttongun" style="background:red;" value="Notice Tar. Gir"></form></a>';
    
    
    }
            if($kiralandi==1 && $emp['noticeverildimi']==1){
                                
 echo '<a href="#"><form action="noticedelete.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Notice Tar. Sil"></form></a>';
            }
            
            if($kiralandi==1 && $emp['noticeverildimi']==3){
                                
 echo '<a href="#"><form action="noticeredgoster.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="NoticeRedSeb."></form></a>';
            }
            if($zararziyangoster==1){
                                
 echo '<a href="#"><form action="zararziyangir.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp['yapino'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="ZararZiyan Gir."></form></a>';
            }
             if($kiralandi==1 && $zararziyangirildimi==3){
                                
 echo '<a href="#"><form action="zararziyanredgoster.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Zarar-ZRedSeb."></form></a>';
            }
                        if($zararziyangirildimi==2){
                                
 echo '<a href="#"><form action="zararziyangor.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp['yapino'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="ZararZiyan Gör."></form></a>';
            }
            
     if($kiralandi!=1){    
   echo '<a href="#"><form action="kiralamadelete.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:red;" value="Kiralama İptal"></form></a>';}
  
  

  echo '</div>
</div>                      
                                                   ';} }//KS username parantez
                                                                                      
             ?></td> 
             
			</tr> 
	</tbody> 
	</table>
               
      </div>   

 
   


<!---------------------------------MAİN END------------------------------------> 
            
            
        
        <div class="tab-content" id="tab2">
            <h1 class="top-text">KİRALAMA YÖNET</h1>
            <h1 class="top-text"><?php echo "Site Adı: ".$siteadi;?></h1>
           <?php
           
           include_once("config2.php");
      
     //echo $musterikayitid;
     //echo $musteriadi; 
       
	//$empSQL = "SELECT * FROM labproje where labproje.ispassived !=1 AND musterikayitid='$musterikayitid'";
      
    $empSQL2 = "SELECT * FROM mulkkayit where mulkkayit.isdeleted!=1 AND siteadi='$siteadi' AND kiralamadurumu='$kiradurumux' AND mulkkayit.kirakaporaeklendi!=1 AND mulkkayit.kiracieklendi!=1 AND mulkkayit.kiralandi!=1 AND mulkkayit.kaporaonayinda!=1 AND mulkkayit.kaporaonayinda!=2 AND mulkkayit.kiralamaonayinda!=1 AND mulkkayit.kiralamaonayinda!=2 AND mulkkayit.kiralamaguncellemegonderildi!=1 || (mulkkayit.kiralamadurumu='KAPALI' AND mulkkayit.kirayaactarih!='0000-00-00')";  
	$empResult2 = mysqli_query($conn, $empSQL2);	
	
        ?>	
	<table class="table table-striped table-bordered" id="example2" style="width:100%">
	<thead> 
		<tr> 
			<!--<th>#ID</th>-->
            <th>Blok No</th> 
			<th>Daire No</th> 
			<th>Daire Tipi</th>
            <th>Kat No</th>
            <th>Alan(m2)</th>
            <th>Kira Bedeli</th> 
            <th>Aidat</th> 
            <th>Mülk No</th> 
            <th>Yapı No</th>
            <th>Kiralama Açılma Tarihi</th>
            <th>Statü</th> 
            <th style="min-width:200px;">Bilgi</th>  
            <th>İşlem-1</th>
            <th>İşlem-2</th>
		</tr> 
	</thead> 
	<tbody> 
		<?php 
        $i=0;
		while($emp2 = mysqli_fetch_assoc($empResult2)){  
   $bilgi2="";
            $yetkilionayi="";
            $color2="#DAF7A6";
           //$kaporaeklendi[$i]=$emp['kaporaeklendi']; 
           //$kiracieklendi[$i]=$emp['kiracieklendi']; 
           //$satisaayrildi[$i]=$emp['satisaayrildi']; 
           //$satildi[$i]=$emp['satildi'];
            
            date_default_timezone_set('Europe/Nicosia');
    $datesession2=$emp2['kirayaayrildisondate'];
    $timesession2=$emp2['kirayaayrildisontime'];
     
    // DateTime nesnesi oluşturma
$datetime2 = new DateTime("$datesession2 $timesession2");

// Yeni tarih ve saati ayrı ayrı değişkenlere alma
$datesession22 = $datetime2->format('d-m-Y');
$timesession22 = $datetime2->format('H:i:s');
 
$datesession32 = $datesession22." ".$timesession22;  
            
$kirakaporasontarih2=$emp2['kirakaporasontarih'];    
 $datetime222 = new DateTime("$kirakaporasontarih2");           
  $kirakaporasontarih22 = $datetime222->format('d-m-Y');          
          
            
            $kiralandi2=$emp2['kiralandi'];
            
            if($emp2['kiralandi']!=1){
            
            if($emp2['kirayaayrildi']==1){
                $bilgi2=$bilgi2."Rezerv: Mevcut:".$datesession32.", "; 
                $color2="#FFC300";
            }else{
                $bilgi2=$bilgi2."Rezerv: Yok, ";
            }
            
           
              $bilgikaporacheck2=0;  
                if($emp2['kirakaporaeklendi']!=1 && $emp2['kaporaonayinda']==1){
                $bilgi2=$bilgi2." Kira Kapora: Yetkili Onayında, ";
                $color2="#00E0FF";
                 $bilgikaporacheck2=1;}
                if($emp2['kirakaporaeklendi']!=1 && $emp2['kaporaonayinda']==3 && $emp2['kirayaayrildi']==1){
                    $bilgi2=$bilgi2." Kira Kapora: Reddedildi, ";
                $color2="#00E0FF";
                    $bilgikaporacheck2=1;
                }    
           
            if($emp2['kirakaporaeklendi']==1){
                $bilgi2=$bilgi2." Kira Kapora: Mevcut:".$kirakaporasontarih22.", ";
                $color2="#00E0FF";
                $bilgikaporacheck2=1;
            }
            if(!$bilgikaporacheck2){
                $bilgi2=$bilgi2." Kira Kapora: Yok, "; 
            }
                
            
            if($emp2['kiralamaonayinda']==1 && $emp2['kiralamaguncellemegonderildi']!=1){
                $bilgi2=$bilgi2." Kiralama Onayında, ";
                $color2="#BF48FF";
            }
            
            if($emp2['kiralamaonayinda']==1 && $emp2['kiralamaguncellemegonderildi']==1){
                $bilgi2=$bilgi2." Güncelleme İçin Bekliyor!!, ";
                $color2="#BF48FF";
            }
      
                
                
                
                
            }//kiralanınca artık gosterme bunları
            
            
            
            
            if($emp2['kiralandi']==1){
               $mulknox2=$emp2['id']; 
                
     if ($result22 = $conn -> query("SELECT * FROM mulkkayit where mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulknox2'")) {
  while ($row22 = $result22 -> fetch_array(MYSQLI_ASSOC)) {
      $kirabitistarihi2=$row22['kirabitistarihi'];
     
}
     
  $result22 -> free_result();
}
   
                $tarih2 = new DateTime($kirabitistarihi2);
                $kirabitistarihi2 = $tarih2->format('d-m-Y');
                
                $bilgi2=$bilgi2."Kiracı: Mevcut, ";
                $bilgi2=$bilgi2."Söz Bitiş Tarihi: ".$kirabitistarihi2;
                $color2="#FF48BF";
                
            }else{
                $bilgi2=$bilgi2."Kiracı: Yok ";
            }
            
            

           
            
           /* 
            if($emp['kirakaporaeklendi']==1){
                $bilgi=$bilgi." Kira Kapora: Mevcut, ";
               
            }else{
                $bilgi=$bilgi." Kira Kapora: Yok, ";
            }
            
             if($emp['satiskaporaeklendi']==1){
                $bilgi=$bilgi." Satış Kapora: Mevcut, ";
               
            }else{
                $bilgi=$bilgi." Satış Kapora: Yok, ";
            }
            
            if($emp['kiracieklendi']==1){
                $bilgi=$bilgi."Kiracı: Mevcut, ";
            }else{
                $bilgi=$bilgi."Kiracı: Yok, ";
            }
            
            if($emp['satisaayrildi']==1){
                $bilgi=$bilgi."Satış: Ayrıldı, ";
            }else{
                $bilgi=$bilgi."Satış: Yok, ";
            }
            
            if($emp['satildi']==1){
                $bilgi=$bilgi."Satıldı, ";
            }else{
                $bilgi=$bilgi."Satılmadı, ";
            }
            */
                       /****YAPI BİLGİLERİ ALINSIN****/ 
                        
$mulknox=$emp2['id'];
             if ($result2y = $conn -> query("SELECT * FROM yapikayit where yapikayit.isdeleted !=1 AND yapikayit.mulkid='$mulknox'")) {
  while ($row2y = $result2y -> fetch_array(MYSQLI_ASSOC)) {
      $blokno=$row2y['blok'];
      $daireno=$row2y['kapino'];
      $dairetipi=$row2y['mulktip1'];
      $katno=$row2y['kat'];
      $alan=$row2y['alan'];   
}
     
  $result2y -> free_result();
}
          
            
            
         if($emp2['kiralamadurumu']=="KAPALI" && $emp2['kirayaactarih']!="0000-00-00"){
             $kirayaactarih=$emp2['kirayaactarih'];
             $kirayaactarih2 = new DateTime("$kirayaactarih");           
  $kirayaactarih3 = $kirayaactarih2->format('d-m-Y'); 
         }   
            
            
		?>
		
		
		
			<tr title="<?php echo $bilgi2;?>" style="background-color:<?php echo $color2;?>;">
               <td><?php echo $blokno; ?></td> 
                <td><?php echo $daireno; ?></td>
                <td><?php echo $dairetipi; ?></td>
                <td><?php echo $katno; ?></td> 
				<td><?php echo $alan; ?></td>  
				<td><?php echo $emp2['kirabedeli']." ".$emp2['kirabedeliparabirimi']; ?></td> 
				<td><?php echo $emp2['guncelaidat']." ".$emp2['aidatparabirimi']; ?></td>  
                <?php echo '<td onclick="submitForm(\'formm' . $emp2['id'] . '\')">';
            echo '<form action="mulkgoster.php" method="post" name="formm' . $emp2['id'] . '" id="formm' . $emp2['id'] . '" target="_blank">';
            echo '<input type="text" id="itemid" name="itemid" style="display:none" value="' . $emp2['id'] . '">';
            echo '</form>';
            echo '<t style="cursor: pointer;color: blue;text-decoration: underline;">'.$emp2['id'].'</t>';
            echo '</td>';?>
                <?php echo '<td onclick="submitForm(\'formy' . $emp2['yapino'] . '\')">';
            echo '<form action="yapigoster.php" method="post" name="formy' . $emp2['yapino'] . '" id="formy' . $emp2['yapino'] . '" target="_blank">';
            echo '<input type="text" id="itemid" name="itemid" style="display:none" value="' . $emp2['yapino'] . '">';
            echo '</form>';
            echo '<t style="cursor: pointer;color: blue;text-decoration: underline;">'.$emp2['yapino'].'</t>';
            echo '</td>';?> 
               <td><?php echo $kirayaactarih3; ?></td>
                <td><?php echo $emp2['status']; ?></td>
                <td><?php echo $bilgi2; ?></td>
                  
                <td><?php
           
            echo '
                                                   
                                 <div class="dropdownbb">
  <button class="dropbtnbb">Menü</button>
  <div class="dropdown-contentbb">';
    //if($emp2['kiralamadurumu']!="KAPALI" && $emp2['kirayaactarih']=="0000-00-00"){
    if($emp2['kiralamadurumu']=="AÇIK"){
  if($kiralandi2!=1){ 
  echo '<a href="#"><form action="/rezervet.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp2['yapino'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Rezerv Et"></form></a>
  
  <a href="#"><form action="/rezerviptalet.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp2['yapino'].'><input type="submit" name="submit" id="buttongun" style="background:red;" value="Rezerv İptal"></form></a>
  
  <a href="#"><form action="kaporakayitgir.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp2['yapino'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kapora Al"></form></a>
  
  <a href="#"><form action="kaporasureuzat.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp2['yapino'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kap.Süre Uzat"></form></a>';
      }
  if($emp2['kirakaporaeklendi']==1){
  echo '<a href="#"><form action="kirakaporagoster.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp2['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kapora Gör"></form></a>';
  
  echo '<a href="#"><form action="kirakaporasozkayit.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp2['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kap.Söz. Yükle"></form></a>';
      
       echo '<a href="#"><form action="kirakaporafatkayit.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp2['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kap.Fat. Yükle"></form></a>';
      
      echo '<a href="#"><form action="kirakaporamakkayit.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp2['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kap.Mak. Yükle"></form></a>';
      
      
  }
     if($kiralandi2!=1){       
  echo '<a href="#"><form action="kirakaporakayitdelete.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp2['kirakaporasonkey'].'><input type="text" id="kirakaporaeklendi" name="kirakaporaeklendi" style="display:none" value='.$emp2['kirakaporaeklendi'].'><input type="submit" name="submit" id="buttongun" style="background:red;" value="Kapora İptal"></form></a>';}
  
  
            
    }else
    {
        if($kiralandi2!=1){ 
  echo '
  <a href="#"><form action="kaporakayitgir.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp2['yapino'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kapora Al"></form></a>';
      }
  if($emp2['kirakaporaeklendi']==1){
  echo '<a href="#"><form action="kirakaporagoster.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp2['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kapora Gör"></form></a>';
  
  echo '<a href="#"><form action="kirakaporasozkayit.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp2['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kap.Söz. Yükle"></form></a>';
      
       echo '<a href="#"><form action="kirakaporafatkayit.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp2['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kap.Fat. Yükle"></form></a>';
      
      echo '<a href="#"><form action="kirakaporamakkayit.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp2['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kap.Mak. Yükle"></form></a>';
      
      
  }
    }
            

echo   '</div>
</div>                      
                                                   ';
                                                                                      
             ?></td> 
             
             
             
     
             
             
              <td><?php
           
            echo '
                                                   
                                 <div class="dropdownbb">
  <button class="dropbtnbb">Menü</button>
  <div class="dropdown-contentbb">';
             if($emp2['kiralamadurumu']!="KAPALI" && $emp2['kirayaactarih']=="0000-00-00"){
  if($kiralandi2!=1 && $emp2['kirakaporaeklendi']==1){ 
  echo '<a href="#"><form action="kiralamayap.php" method="post" name="formxxx" id='."formxxx".$emp2['id'].'><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp2['yapino'].'><input type="text" id='."kirakey".$emp2['id'].' name="kirakeyx" style="display:none" value='.$emp2['kirakaporaeklendi'].'><input type="text"  id="javasubmit" style="background:green;" value="Kiralama Yap" onclick="showConfirmation(\'kirakey'.$emp2['id'].'\',\'formxxx'.$emp2['id'].'\')"></form></a>';
       }
  if($emp2['kiralamaonayinda']==1 || $emp2['kiralamaonayinda']==2){
  echo '<a href="#"><form action="kiralamagoster.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp2['yapino'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kir.Bilgi Gör"></form></a>';        }   
            
  if($emp2['kiralamaonayinda']==1 && $emp2['kiralamaguncellemegonderildi']==1 && $kiralandi2!=1){
  echo '<a href="#"><form action="kiralamaguncelle.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp2['kirakaporasonkey'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp2['yapino'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Güncelle"></form></a>';        }  
    if($kiralandi2==1){    
   echo '<a href="#"><form action="kiralamasozyukle.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp2['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Kir.Söz. Yükle"></form></a>';
   
    
    
    }
            
     if($kiralandi2!=1){    
   echo '<a href="#"><form action="kiralamadelete.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp2['id'].'><input type="text" id="kirakaporasonkey" name="kirakaporasonkey" style="display:none" value='.$emp2['kirakaporasonkey'].'><input type="submit" name="submit" id="buttongun" style="background:red;" value="Kiralama İptal"></form></a>';}
  
  
             }
  echo '</div>
</div>                      
                                                   ';}
                                                                                      
             ?></td> 
             
			</tr> 
	</tbody> 
	</table> 
           
           
           
           
           
           
           
           
           
           
        </div>

        
        
    </div>
   
    
    
    
    
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
    responsive: true
         
});   
    
         new DataTable('#example2', {
         language: {
        url: '//cdn.datatables.net/plug-ins/2.0.1/i18n/tr.json',
    },
    responsive: true
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