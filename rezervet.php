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
         if($_POST['mulkno']==NULL){
        Notdevam();
    }
    else
    {
      $mulkno=$_POST['mulkno'];
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
<h1 class="top-text">REZERVASYON SAYFASI</h1>
 <div class="formcerceve">
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

    
          if ($result = $conn -> query("SELECT * FROM rezervasyonsure")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
        $rezervasyonsure=$row['rezervasyonsuresisaat'];
        
}
     
  $result -> free_result();
}  
     
     
     
 /***REZERVASYON YAPILIP YAPILAMAYACAĞINI KONTROL ET**/    
     
     
      if ($result = $conn -> query("SELECT kirayaayrildi,kiralandi,kiracieklendi,kirakaporaeklendi,kiralamaonayinda,kaporaonayinda FROM mulkkayit where mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulkno'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
        $kirayaayrildi=$row['kirayaayrildi'];
        $kiralandi = $row['kiralandi'];
        $kiracieklendi = $row['kiracieklendi'];
        $kirakaporaeklendi = $row['kirakaporaeklendi']; 
        $kiralamaonayinda = $row['kiralamaonayinda']; 
        $kaporaonayinda = $row['kaporaonayinda'];
}
     
  $result -> free_result();
}  
     
     
     if($kirayaayrildi==1 || $kiralandi==1 || $kiracieklendi==1 || $kirakaporaeklendi==1 || $kiralamaonayinda==1 || $kiralamaonayinda==2 || $kaporaonayinda==1){
         
         echo '
          <div class="parentmain2">
    <div class="options">
      <div class="container">   
    
            <div class="row"><p>Bu mülk için rezervasyon yapılamaz. Mülk kira sürecindedir.</p></div>

<br>
<div class="row" id="hiderow">
  <input name="iptal" type="submit" id="iptal" value="İptal Et Kiralama Portalına Dön" onclick="anamenu()" style="background:red;"/>
  </div>



         </div>
    </div>
</div>  ';
         
         
      exit();   
     }
     
     
     
     
     
    /***REZERVASYON YAPILIP YAPILAMAYACAĞINI KONTROL ET SONNNNUU**/    
     
     
   
    
   $empSQL = "SELECT * FROM mulkkayit where  mulkkayit.company_id = '{$_SESSION['company_id']}' AND mulkkayit.isdeleted!=1 AND id='$mulkno'";  
	$empResult = mysqli_query($conn, $empSQL);	
	
        ?>	
	<table class="table table-striped table-bordered" id="example" style="width:100%">
	<thead> 
		<tr> 
			<!--<th>#ID</th>-->
            <th>Ad Soyad</th> 
			<th>İletişim 1</th> 
			<th>iletişim 2</th>
            <th>Kimlik No</th>
            <th>Email</th>
            <th>Aidat</th> 
            <th>Su Abonelik</th> 
            <th>Elektrik Abonelik</th>
            <th>Mülk No</th> 
            <th>Yapı No</th>
            <th>Site Adı</th> 
            <th>Kiralama Durumu</th>
            <th>Bilgi</th>  
            
		</tr> 
	</thead> 
	<tbody> 
		<?php 
        $i=0;
		while($emp = mysqli_fetch_assoc($empResult)){  
   $bilgi="";
           //$kaporaeklendi[$i]=$emp['kaporaeklendi']; 
           //$kiracieklendi[$i]=$emp['kiracieklendi']; 
           //$satisaayrildi[$i]=$emp['satisaayrildi']; 
           //$satildi[$i]=$emp['satildi'];
          
            
            if($emp['kirakaporaeklendi']==1){
                $bilgi=$bilgi." Kira Kapora: Mevcut, ";
               
            }else{
                $bilgi=$bilgi." Kira Kapora: Yok, ";
            }
      
            if($emp['kiracieklendi']==1){
                $bilgi=$bilgi."Kiracı: Mevcut, ";
            }else{
                $bilgi=$bilgi."Kiracı: Yok, ";
            }
            
            if($emp['kirayaayrildi']==1){
                $bilgi=$bilgi."Rezerv: Mevcut ";
            }else{
                $bilgi=$bilgi."Rezerv: Yok ";
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
		?>
			<tr title="<?php echo $bilgi;?>">
               <td><?php echo $emp['adsoyad']; ?></td> 
                <td><?php echo $emp['iletisim1']; ?></td>
                <td><?php echo $emp['iletisim2']; ?></td>
                <td><?php echo $emp['kimlikno']; ?></td> 
				<td><?php echo $emp['email']; ?></td> 
				<td><?php echo $emp['guncelaidat']." ".$emp['aidatparabirimi']; ?></td> 
				<td><?php echo $emp['susahiplik']; ?></td> 
				<td><?php echo $emp['elektriksahiplik']; ?></td>  
                <?php echo '<td onclick="submitForm(\'form' . $emp['id'] . '\')">';
            echo '<form action="mulkgoster.php" method="post" name="form' . $emp['id'] . '" id="form' . $emp['id'] . '" target="_blank">';
            echo '<input type="text" id="itemid" name="itemid" style="display:none" value="' . $emp['id'] . '">';
            echo '</form>';
            echo '<t style="cursor: pointer;color: blue;text-decoration: underline;">'.$emp['id'].'</t>';
            echo '</td>';?>
                <?php echo '<td onclick="submitForm(\'form' . $emp['yapino'] . '\')">';
            echo '<form action="yapigoster.php" method="post" name="form' . $emp['yapino'] . '" id="form' . $emp['yapino'] . '" target="_blank">';
            echo '<input type="text" id="itemid" name="itemid" style="display:none" value="' . $emp['yapino'] . '">';
            echo '</form>';
            echo '<t style="cursor: pointer;color: blue;text-decoration: underline;">'.$emp['yapino'].'</t>';
            echo '</td>';?> 
               <td><?php echo $emp['siteadi']; ?></td>
                <td><?php echo $emp['kiralamadurumu']; ?></td>
                <td><?php echo $bilgi;} ?></td> 
               
			</tr> 
	</tbody> 
	</table>
               
      </div>    
    
    
    <br>
    <br>
   <div class="parentmain2">
    <div class="options">
      <div class="container">   
    
    
            <form  id="aidatyapi" name="aidatyapi" action="/rezervetaction.php" method="post" onsubmit="return validatecallForm()" enctype="multipart/form-data"><div class="row"><p>Formu onaylamanız halinde bu mülke ait REZERVASYON yapılacaktır. Rezervasyon süresi: <?php echo $rezervasyonsure;?> saattir.</p></div>

         <input type="text" id="mulkno" name="mulkno" style="display:none" value="<?php echo $mulkno;?>">
         
  <div class="row" id="hiderow">
  <input type="submit" name="aidatyapi" id="aidatyapi" value="Onayla ve Rezervasyon Yap">
  </div>
</form><br>
<div class="row" id="hiderow">
  <input name="iptal" type="submit" id="iptal" value="İptal Et Kiralama Portalına Dön" onclick="anamenu()" style="background:red;"/>
  </div>



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
   
</script>

</body>
</html>