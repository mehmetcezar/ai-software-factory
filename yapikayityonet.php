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
</style>     
    
    
</head>
    

    <?php
    
    include 'usersession.php';
   // usersessiontimecheck();
            
              
session_start();
$session_id=$_SESSION['sessionid'];
$uname=$_SESSION['uname'];
$kultipi=$_SESSION['kultipi']; // kullanıcı yetkilerinin ve erişimlerinin kontrolunde kullanılır.
$pageid="yetkilipage"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.  
    
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
<h1 class="top-text">TANIMLANAN YAPILAR</h1>
    
    
  <!--<h1 class="centered-text">KULLANICILAR</h1>-->
   
    <br>

<!--------------------------------MAİN------------------------------------->
 
 
 
  <div class="formcerceve">
    
      <script>
             table.clear().destroy();      
 
          
          
   function  opensessiononay(){
         window.location.href = "https://whitelotustest.online/index.php";
    }
    
    
    
        function navigateToLink(url) {
            window.location.href = url;
        }
    
    
    
       </script>

      <?php
 include_once("config2.php");
      
     //echo $musterikayitid;
     //echo $musteriadi; 
       
	//$empSQL = "SELECT * FROM labproje where labproje.ispassived !=1 AND musterikayitid='$musterikayitid'";
      
    $empSQL = "SELECT * FROM yapikayit where  yapikayit.company_id = '{$_SESSION['company_id']}' AND yapikayit.isdeleted!=1";  
	$empResult = mysqli_query($conn, $empSQL);	
      $kultipimevcut="";
	
        ?>	
	<table class="table table-striped table-bordered" id="sortTable">
	<thead> 
		<tr> 
			<!--<th>#ID</th>-->
            <th>Yapı No</th> 
            <th id="thhide">Ülke</th> 
			<th>İlçe</th> 
			<th>Mahalle</th>
            <th>Sokak</th>
            <th id="thhide">Proje Adı</th>
            <th id="thhide">Blok</th> 
            <th id="thhide">Kat</th> 
            <th id="thhide">Kapı No</th>
            <th id="thhide">Mülk Tip 1</th> 
            <!--<th id="thhide">Mülk Tip 2</th>-->
            <!--<th id="thhide">Posta Kodu</th>-->
            <!--<th>Cephe</th>-->
            <!--<th>Alan</th>-->
            <!--<th id="thhide">Salon</th>-->
            <!--<th>Oda</th>-->
            <!--<th id="thhide">Banyo</th>-->
            <th>Mülk Tanımı</th>   
            <th>İşlemler</th>
		</tr> 
	</thead> 
	<tbody> 
		<?php 
		while($emp = mysqli_fetch_assoc($empResult)){  
		?>
			<tr> 
				<!--<th scope="row"><?php/* echo $emp['id'];*/ ?></th>-->
                <?php /* echo '<td onclick="submitForm(\'form' . $emp['yapino'] . '\')">';
            echo '<form action="yapigoster.php" method="post" name="form' . $emp['yapino'] . '" id="form' . $emp['yapino'] . '">';
            echo '<input type="text" id="itemid" name="itemid" style="display:none" value="' . $emp['yapino'] . '">';
            echo '</form>';
            echo '<t style="cursor: pointer;color: blue;text-decoration: underline;">'.$emp['yapino'].'</t>';
            */
           echo  '<td id="tdhide">'.$emp['id'].'</td>';
            echo '</td>';?>
                <td id="tdhide"><?php echo $emp['ulke']; ?></td> 
                <td><?php echo $emp['ilce']; ?></td>
                <td><?php echo $emp['mahalle']; ?></td>
                <td><?php echo $emp['sokak']; ?></td> 
				<td id="tdhide"><?php echo $emp['projeadi']; ?></td> 
				<td id="tdhide"><?php echo $emp['blok']; ?></td> 
				<td id="tdhide"><?php echo $emp['kat']; ?></td> 
				<td id="tdhide"><?php echo $emp['kapino']; ?></td> 
				<td id="tdhide"><?php echo $emp['mulktip1']; ?></td> 
				 
				
				
				
				
                <?php if($emp['mulkison']){echo '<td onclick="submitForm(\'form' . $emp['mulkid'] . '\')">'; echo '<form action="mulkgoster.php" method="post" name="form' . $emp['mulkid'] . '" id="form' . $emp['mulkid'] . '">';
            echo '<input type="text" id="itemid" name="itemid" style="display:none" value="' . $emp['mulkid'] . '">';
            echo '</form>';
            echo '<t style="cursor: pointer;color: blue;text-decoration: underline;">'."VAR".'</t>';
            echo '</td>';}else{echo '<td>';echo "YOK";echo '</td>';} ?> 
                <td><?php
            echo '
                                                   
                                 <div class="dropdownbb">
  <button class="dropbtnbb">Menü</button>
  <div class="dropdown-contentbb">
  <a href="#"><form action="yapikayitguncelle.php" method="post" name="formgun" id="formgun"><input type="text" id="buserid" name="buserid" style="display:none" value='.$emp['id'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Yapı Güncelle"></form></a>
  <a href="#"><form action="yapikayitdelete.php" method="post" name="formgun" id="formgun"><input type="text" id="buserid" name="buserid" style="display:none" value='.$emp['id'].'><input type="submit" name="submit" id="buttongun" style="background:red;" value="Yapı Sil"></form></a>
  </div>
</div>                      
                                                   ';
                                                                                      
             ?></td> 
			</tr> 
		<?php  }?>
	</tbody> 
	</table>
               
      </div>   
 
 <?php
    /*<td id="tdhide"><?php echo $emp['postakodu']; ?></td> 
				<td><?php echo $emp['cephe']; ?></td>
                <td><?php echo $emp['alan']; ?></td> 
                <td id="tdhide"><?php echo $emp['salonadet']; ?></td>
                <td><?php echo $emp['odaadet']; ?></td>
                <td id="tdhide"><?php echo $emp['banyoadet']; ?></td>*/
    ?>

<!---------------------------------MAİN END------------------------------------>
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

    // Yeniden başlatmak için yeni yapılandırmayı ekleyin
$('#sortTable').DataTable({
    language: {
        url: 'js/Turkish.json'
    }
    
}); 
    
$('#sortTable').DataTable();

</script>



</body>
</html>