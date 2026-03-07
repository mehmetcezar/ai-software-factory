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
<h1 class="top-text">HEM KİRA HEM SATIŞ KAPORASINA SAHİP MÜLKLER</h1>
    
    
  <!--<h1 class="centered-text">KULLANICILAR</h1>-->
   
    <br>

<!--------------------------------MAİN------------------------------------->
 
 
 
  <div class="formcerceve">
    
      <script>
             table.clear().destroy();      
 
          
          
   function  opensessiononay(){
         window.location.href = "https://whitelotustest.online/index.php";
    }
       </script>

      <?php
 include_once("config2.php");
      
     //echo $musterikayitid;
     //echo $musteriadi; 
       
	//$empSQL = "SELECT * FROM labproje where labproje.ispassived !=1 AND musterikayitid='$musterikayitid'";
      
    $empSQL = "SELECT * FROM mulkkayit where mulkkayit.isdeleted!=1 AND mulkkayit.kirakaporaeklendi=1 AND mulkkayit.satiskaporaeklendi=1";  
	$empResult = mysqli_query($conn, $empSQL);	
      $kultipimevcut="";
	
        ?>	
	<table class="table table-striped table-bordered" id="sortTable">
	<thead> 
		<tr> 
			<!--<th>#ID</th>-->
             <th>Mülk No</th> 
            <th>Ad Soyad</th> 
			<th>İletişim 1</th> 
			<th id="thhide">iletişim 2</th>
            <th>Kimlik No</th>
            <th id="thhide">Email</th>
            <th id="thhide">Aidat</th> 
            <th id="thhide">Su Abonelik</th> 
            <th id="thhide">Elektrik Abonelik</th>
            <th id="thhide">Bağlı Yapı No</th>   
		</tr> 
	</thead> 
	<tbody> 
		<?php 
        
		while($emp = mysqli_fetch_assoc($empResult)){  
 
		?>
			<tr> 
                <td><?php echo $emp['id']; ?></td>
                <td><?php echo $emp['adsoyad']; ?></td> 
                <td><?php echo $emp['iletisim1']; ?></td>
                <td id="tdhide"><?php echo $emp['iletisim2']; ?></td>
                <td><?php echo $emp['kimlikno']; ?></td> 
				<td id="tdhide"><?php echo $emp['email']; ?></td> 
				<td id="tdhide"><?php echo $emp['guncelaidat']." ".$emp['aidatparabirimi']; ?></td> 
				<td id="tdhide"><?php echo $emp['susahiplik']; ?></td> 
				<td id="tdhide"><?php echo $emp['elektriksahiplik']; ?></td> 
				<td id="tdhide"><?php echo $emp['yapino']; ?></td>   
                 
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