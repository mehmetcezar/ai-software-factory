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
   <link rel="stylesheet" type="text/css" href="2wauth.css?rnd=<?php echo rand()?>">
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
    
</head>

    <?php
 session_start();  
$secretkey=$_SESSION['secretkey'];
$uname=$_SESSION['uname'];
$kultipi=$_SESSION['kultipi']; // kullanıcı yetkilerinin ve erişimlerinin kontrolunde kullanılır.

   ?> 
 
<body>




<div class="containerxx2">

<div class="containerxx2x">
  
    <h2>Google Authenticator ile Çift Doğrulama</h2>

   <!-- QR Kodun Durumu -->
    <h2>Giriş Yap</h2>
    <form method="post" action="verify.php">
       
        <label>6 Haneli Kod (Google Authenticator):</label><br>
        <input type="text" name="code"><br><br>
 <input type="hidden" name="secretkey" value="<?php echo $secretkey; ?>">
 <input type="hidden" name="uname" value="<?php echo $uname; ?>">
 <input type="hidden" name="kultipi" value="<?php echo $kultipi; ?>">
        <input type="submit" value="Giriş">
    </form>
    
</div>


   
    </div>


</body>
</html>