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
$pageid="tahsilatonay"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.  
    
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

<h1 class="top-text">TAHSİLAT ONAY</h1>
<!-------------------------------------------------------->

 <div class="formcerceve">
    
      <script>
             table.clear().destroy();      
 
          
          
   function  opensessiononay(){
         window.location.href = "https://whitelotustest.online/index.php";
    }
       </script>

      <?php
     
     function formatDates($dateString) {
    // String'i ';' işaretine göre diziye çevir
    $datesArray = explode(';', $dateString);
    
    // Her bir tarihi `d-m-Y` formatına dönüştür
    $formattedDates = array_map(function($date) {
        return date("d-m-Y", strtotime($date));
    }, $datesArray);
    
    // Dönüştürülmüş tarihleri tekrar `;` ile birleştir
    return implode(';', $formattedDates);
}
     
 include_once("config2.php");
      
     //echo $musterikayitid;
     //echo $musteriadi; 
       
	//$empSQL = "SELECT * FROM labproje where labproje.ispassived !=1 AND musterikayitid='$musterikayitid'";
      
    $empSQL = "SELECT * FROM tahsilat where yetkilionay=1 AND guncellemegonderildi!=1";  
	$empResult = mysqli_query($conn, $empSQL);	
	
        ?>	
	<table class="table table-striped table-bordered" id="example" style="width:100%">
	<thead> 
		<tr> 
			<!--<th>#ID</th>-->
            <th>Tahsilat Tarihi</th>
            <th>Mülk No</th> 
            <th>Yapı No</th> 
			<th>Tahsilat Türü</th> 
			<th>Miktar</th>
            <th>Para Birimi</th>
            <th>İşlem-1</th>
		</tr> 
	</thead> 
	<tbody> 
		<?php 
        $i=0;
		while($emp = mysqli_fetch_assoc($empResult)){  

   //         $tarihObjesi3 = DateTime::createFromFormat('Y-m-d', $emp['tahtarihi']);
//$tahsilattarihix = $tarihObjesi3->format('d-m-Y');
$tahsilattarihix = formatDates($emp['tahtarihi']);
		?>


               <tr>
                <td><?php echo $tahsilattarihix; ?></td> 
            <?php echo '<td onclick="submitForm(\'formm' . $emp['mulkno'] . '\')">';
            echo '<form action="mulkgoster.php" method="post" name="formm' . $emp['mulkno'] . '" id="formm' . $emp['mulkno'] . '" target="_blank">';
            echo '<input type="text" id="itemid" name="itemid" style="display:none" value="' . $emp['mulkno'] . '">';
            echo '</form>';
            echo '<t style="cursor: pointer;color: blue;text-decoration: underline;">'.$emp['mulkno'].'</t>';
            echo '</td>';?>
                <?php echo '<td onclick="submitForm(\'formy' . $emp['yapino'] . '\')">';
            echo '<form action="yapigoster.php" method="post" name="formy' . $emp['yapino'] . '" id="formy' . $emp['yapino'] . '" target="_blank">';
            echo '<input type="text" id="itemid" name="itemid" style="display:none" value="' . $emp['yapino'] . '">';
            echo '</form>';
            echo '<t style="cursor: pointer;color: blue;text-decoration: underline;">'.$emp['yapino'].'</t>';
            echo '</td>';?>
                <td><?php echo $emp['tahsilatturu']; ?></td> 
				<td><?php echo $emp['miktar']; ?></td> 
				<td><?php echo $emp['parabirimi']; ?></td> 
                <td><?php
            
            echo '
                                                   
   <div class="dropdownbb">
  <button class="dropbtnbb">Menü</button>
  <div class="dropdown-contentbb">';        
  echo '<a href="#"><form action="tahsilatonaydeg.php" method="post" name="formgun" id="formgun"><input type="text" id="mulkno" name="mulkno" style="display:none" value='.$emp['mulkno'].'><input type="text" id="yapino" name="yapino" style="display:none" value='.$emp['yapino'].'><input type="text" id="tahsilatid" name="tahsilatid" style="display:none" value='.$emp['id'].'><input type="submit" name="submit" id="buttongun" style="background:green;" value="Değerlendir"></form></a>
  
  

  </div>
</div>                      
                                                   ';}
                                                                                      
             ?></td> 

        </tr>
	</tbody> 
	</table>
               
      </div>   
 


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
     new DataTable('#example', {
         language: {
        url: '//cdn.datatables.net/plug-ins/2.0.1/i18n/tr.json',
    },
    responsive: true
});   
       
 

          

    
  
    
</script>

</body>
</html>