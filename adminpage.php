<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>https://whitelotustest.online/</title>
        <meta name="ktmmo" content="kira satış danışman emlak alım">
 <meta name="viewport" content="width=device-width, initial-scale=1">
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
  

    <script>/*
       function gopage2() {
  window.location.href = "https://www.ktimobina.com/userpage2.php";
    
    
}*/
     // Initialization for ES Users
        
    
    </script>
    <?php
    include 'usersession.php';
    //usersessiontimecheck();
            
              
session_start();
//echo $_SESSION['uname'];
//echo $_SESSION['sessionid'];
$session_id=$_SESSION['sessionid'];
$uname=$_SESSION['uname'];
$kultipi=$_SESSION['kultipi']; // kullanıcı yetkilerinin ve erişimlerinin kontrolunde kullanılır.
$pageid="adminpage"; //hangi sayfa olduğu belirtilir. kullanıcıların hangi sayfalara erişeceği burdan ayarlanır.
    
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
    
    
    
 <body>
    <div class="container">
        <div class="box">
          <div class="card chart-container">
  <canvas id="chart"></canvas>
            </div>
        </div>
        <div class="box">
            <div class="card chart-container">
  <canvas id="chart2"></canvas>
            </div>
        </div>
       <!-- <div class="box">
               <div class="card chart-container">
  <canvas id="chart3"></canvas>
            </div>
        </div>-->
        <div class="box">
                          <div class="card chart-container">
  <canvas id="chart4"></canvas>
            </div>
        </div>
        
        
        
        
        <div class="box">
            
            
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
      
    $empSQL = "SELECT * FROM users where  users.company_id = '{$_SESSION['company_id']}' AND users.isdeleted!=1";  
	$empResult = mysqli_query($conn, $empSQL);	
      $kultipimevcut="";
	
        ?>	
	<table id="example" class="table table-striped nowrap" style="width:100%">
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
           /* if($emp['sekreter']==1){
                $kultipimevcut="Sekreter";
            }
             if($emp['vizeci']==1){
                $kultipimevcut="Vizeci";
            }
            if($emp['isadmin']==1){
                $kultipimevcut="Admin";
            }*/
            
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
 
            
            
            
            
        </div>
        
        
    </div>
    
    

</body>   
    
    
    
    
    

<script>
 //https://www.devwares.com/blog/create-bootstrap-charts-using-bootstrap5/

const ctx2 = document.getElementById("chart2").getContext('2d');
      const myChart2 = new Chart(ctx2, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday",
          "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            label: 'Last week',
            backgroundColor: 'rgba(161, 198, 247, 1)',
            borderColor: 'rgb(47, 128, 237)',
            data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true,
              }
            }]
          }
        },
      });
    
          const ctx = document.getElementById("chart").getContext('2d');
      const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["rice", "yam", "tomato", "potato",
          "beans", "maize", "oil"],
          datasets: [{
            label: 'food Items',
            backgroundColor: 'rgba(161, 198, 247, 1)',
            borderColor: 'rgb(47, 128, 237)',
            data: [300, 400, 200, 500, 800, 900, 200],
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true,
              }
            }]
          }
        },
      });
    
    
        /*  const ctx3 = document.getElementById("chart3").getContext('2d');
      const myChart3 = new Chart(ctx3, {
        type: 'pie',
        data: {
          labels: ["rice", "yam", "tomato", "potato",
          "beans", "maize", "oil"],
          datasets: [{
            label: 'food Items',
            backgroundColor: 'rgba(161, 198, 247, 1)',
            borderColor: 'rgb(47, 128, 237)',
            data: [30, 40, 20, 50, 80, 90, 20],
          }]
        },
      });*/
    
    
          const ctx4 = document.getElementById("chart4").getContext('2d');
      const myChart4 = new Chart(ctx4, {
        type: 'doughnut',
        data: {
          labels: ["rice", "yam", "tomato", "potato", "beans",
           "maize", "oil"],
          datasets: [{
            label: 'food Items',
            data: [30, 40, 20, 50, 80, 90, 20],
            backgroundColor: ["#0074D9", "#FF4136", "#2ECC40",
            "#FF851B", "#7FDBFF", "#B10DC9", "#FFDC00",
            "#001f3f", "#39CCCC", "#01FF70", "#85144b",
            "#F012BE", "#3D9970", "#111111", "#AAAAAA"]
          }]
        },
      });
    
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