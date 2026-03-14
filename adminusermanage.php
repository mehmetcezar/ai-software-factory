<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
        <title><?= SITE_URL ?>/</title>
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

header("Location: <?= SITE_URL ?>/admin.php"); /* Redirect browser */
exit();	
	
} 
              



?>
<body>

<?php 
    
    include 'menu.php'; // kultipine göre menun ayarlandığı php dosyasıdır.
    
    ?>
<div class="container-fluid mt-5 mb-5 px-4">
    <div class="card shadow-lg border-0 rounded-lg">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center py-3">
            <h4 class="mb-0 fw-bold"><i class="fas fa-users me-2"></i> Kullanıcı Yönetimi</h4>
        </div>
        <div class="card-body p-4 bg-light">
            <script>
                if (typeof table !== 'undefined') {
                    table.clear().destroy();      
                }
                function opensessiononay(){
                    window.location.href = "<?= SITE_URL ?>/index.php";
                }
            </script>

            <?php
            include_once("config2.php");
            
            // Join companies table to get the company name
            $empSQL = "SELECT users.*, companies.company_name FROM users LEFT JOIN companies ON users.company_id = companies.id WHERE users.company_id = '{$_SESSION['company_id']}' AND users.isdeleted!=1";  
            $empResult = mysqli_query($conn, $empSQL);	
            
            if (!$empResult) {
                echo "<div class='alert alert-danger'>Veritabanı hatası: " . mysqli_error($conn) . "</div>";
                echo "<div class='alert alert-warning'>Lütfen canlı sunucudaki veritabanınıza `company_id` sütununu ve `companies` tablosunu eklediğinizden emin olun.</div>";
            }
            $kultipimevcut = "";
            ?>
            
            <div class="table-responsive bg-white p-3 rounded shadow-sm">
                <table class="table table-hover table-striped table-bordered align-middle" id="sortTable" style="width:100%">
                    <thead class="table-dark"> 
                        <tr> 
                            <th class="text-center" style="width: 50px;">#ID</th> 
                            <th>İsim / Soyisim</th> 
                            <th>Kullanıcı Adı</th>
                            <th>Şirket Adı</th>
                            <th>Kullanıcı Tipi</th>
                            <th class="text-center" style="width: 150px;">İşlemler</th>
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php 
                        while($emp = mysqli_fetch_assoc($empResult)) {
                            if($emp['yetkili'] == 1) { $kultipimevcut = "<span class='badge bg-primary'>Yetkili</span>"; }
                            elseif($emp['muhasebe'] == 1) { $kultipimevcut = "<span class='badge bg-info text-dark'>Muhasebe</span>"; }
                            elseif($emp['kiralamasorumlusu'] == 1) { $kultipimevcut = "<span class='badge bg-success'>Kiralama Sorumlusu</span>"; }
                            elseif($emp['musteri'] == 1) { $kultipimevcut = "<span class='badge bg-secondary'>Müşteri</span>"; }
                            else { $kultipimevcut = "<span class='badge bg-light text-dark'>Belirtilmemiş</span>"; }
                        ?>
                            <tr> 
                                <th scope="row" class="text-center"><?php echo $emp['id']; ?></th>
                                <td class="fw-bold"><?php echo $emp['name']." ".$emp['surname']; ?></td> 
                                <td><?php echo $emp['uname']; ?></td> 
                                <td><span class="badge bg-warning text-dark"><i class="fas fa-building me-1"></i> <?php echo $emp['company_name'] ? $emp['company_name'] : 'Tanımsız'; ?></span></td>
                                <td><?php echo $kultipimevcut; ?></td>  
                                <td class="text-center">
                                    <?php if($emp['isadmin'] == 1) { ?>
                                        <span class="badge bg-danger p-2"><i class="fas fa-user-shield me-1"></i> Sistem Yöneticisi</span>
                                    <?php } else { ?>
                                        <div class="d-flex justify-content-center gap-2">
                                            <form action="adminuserguncelle.php" method="post" class="m-0">
                                                <input type="hidden" name="buserid" value="<?php echo $emp['id']; ?>">
                                                <button type="submit" name="submit" class="btn btn-sm btn-outline-success" title="Güncelle">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </form>
                                            <form action="adminusersifreguncelle.php" method="post" class="m-0">
                                                <input type="hidden" name="buserid" value="<?php echo $emp['id']; ?>">
                                                <button type="submit" name="submit" class="btn btn-sm btn-outline-warning" title="Şifre Güncelle">
                                                    <i class="fas fa-key"></i>
                                                </button>
                                            </form>
                                            <form action="adminuserdelete.php" method="post" class="m-0" onsubmit="return confirm('Bu kullanıcıyı silmek istediğinize emin misiniz?');">
                                                <input type="hidden" name="buserid" value="<?php echo $emp['id']; ?>">
                                                <button type="submit" name="submit" class="btn btn-sm btn-outline-danger" title="Sil">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    <?php } ?>
                                </td> 
                            </tr> 
                        <?php } ?>
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
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