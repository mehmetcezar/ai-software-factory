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
$pageid="kullaniciolusturma"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.  
    
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
<h1 class="top-text">KULLANICILAR</h1>
    
    
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
      
    $empSQL = "SELECT * FROM users where users.isdeleted!=1";  
	$empResult = mysqli_query($conn, $empSQL);	
      $kultipimevcut="";
	
        ?>	
	<table class="table table-striped table-bordered" id="sortTable">
	<thead> 
		<tr> 
			<th>#ID</th> 
            <th id="thhide">İsim/Soyisim</th> 
			<th>Kullanıcı Adı</th> 
			<th>Kullanıcı Tipi</th>
            <th>İşlemler</th>
		</tr> 
	</thead> 
	<tbody> 
		<?php 
		while($emp = mysqli_fetch_assoc($empResult)){
            if($emp['yetkili']==1){
                $kultipimevcut="Yetkili";
            }
            if($emp['muhasebe']==1){
                $kultipimevcut="Muhasebe";
            }
            
             if($emp['kiralamasorumlusu']==1){
                $kultipimevcut="Kiralama Sorumlusu";
            }
            if($emp['musteri']==1){
                $kultipimevcut="Müşteri";
            }
            
		?>
			<tr> 
				<th scope="row"><?php echo $emp['id']; ?></th>
                <td><?php echo $emp['name']." ".$emp['surname']; ?></td> 
				<td><?php echo $emp['uname']; ?></td> 
				<td id="tdhide"><?php echo $kultipimevcut; ?></td>  
                <td><?php

            if($emp['isadmin']==1){
                echo '
                                                   
                                 <div class="dropdownbb">
  <button class="dropbtnbb">Menü</button>
  <div class="dropdown-contentbb">
  
  </div>
</div>                      
                                                   ';
                
            }else
            {
            
            echo '
                                                   
                                 <div class="dropdownbb">
  <button class="dropbtnbb">Menü</button>
  <div class="dropdown-contentbb">
  <a href="#"><form action="adminuserguncelle.php" method="post" name="formgun" id="formgun"><input type="text" id="buserid" name="buserid" style="display:none" value='.$emp['id'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Güncelle"></form></a><a href="#"><form action="adminusersifreguncelle.php" method="post" name="formgun" id="formgun"><input type="text" id="buserid" name="buserid" style="display:none" value='.$emp['id'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Şifre Güncelle"></form></a><a href="#"><form action="adminuserdelete.php" method="post" name="formgun" id="formgun"><input type="text" id="buserid" name="buserid" style="display:none" value='.$emp['id'].'><input type="submit" name="submit" id="buttongun" style="background:red;" value="Kullanıcı Sil"></form></a>
  </div>
</div>                      
                                                   ';
                                                                                      
             ?></td> 
			</tr> 
		<?php } }?>
	</tbody> 
	</table>
               
      </div>   
 
 

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