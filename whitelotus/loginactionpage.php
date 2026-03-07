<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
         <title>https://whitelotustest.online/</title>
        <meta name="ktmmo" content="kira satış danışman emlak alım">
        <link rel="stylesheet" type="text/css" href="main.css?rnd=<?php echo rand()?>">
        <link rel="shortcut icon" type="image/x-icon" href="image/logo/logo.jpeg" /> 
        <!-- winter candd font -->  
        <link href="http://fonts.cdnfonts.com/css/winter-candy" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<script>
function goBack() {
  /*window.history.back();*/
    window.location.href = "https://whitelotustest.online/admin.php";
    
}
    function opensessionadmin(){
        window.location.href = "https://whitelotustest.online/adminpage.php";
    }
    function opensessionyetkili(){
        window.location.href = "https://whitelotustest.online/yetkilipage.php";
    }
    
    function opensessionmuhasebe(){
        window.location.href = "https://whitelotustest.online/muhasebepage.php";
    }
    
     function opensessionkiralamasorumlusu(){
        window.location.href = "https://whitelotustest.online/kiralamasorumlusupage.php";
    }
     function opensessionmusteri(){
        window.location.href = "https://whitelotustest.online/musteripage.php";
    }
 

</script>
    </head>
    <?php
               $uname=$_POST['uname'];
         $qr_status=0;
        include_once("config2.php");
          if ($result = $conn -> query("SELECT secretkey,secretkeyon FROM users WHERE uname='$uname'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {  
       if($row['secretkeyon']==1)
      { 
       $qr_status=1;
       $secretkey=$row['secretkey'];     
          //echo "OK";  
      }
      else
      {
       $qr_status=0;
      }
    }  
  $result -> free_result();
}
 mysqli_close($conn);
  //echo "OKprepre";
//google recaptcha doğrulama 

         if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
             //echo $captcha;
        }
        if(!$captcha){
          echo 'Captcha doldurulmadı. Hata!';
      Notdevam();
    exit;
        }

    $secretKey = "6LemsP0pAAAAAOKOVHlO549UdS8YPVyfA-z1mTrH";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true
              //echo $responseKeys; 
        if($responseKeys["success"]) {
//google recaptcha doğrulama sonu  
    //echo "sucess";

    
    include 'usersession.php';
            //echo "OKpre";
    //usersessiontimecheck();
            
            session_start();
        $session_id=session_id();
        
        $_SESSION['sessionid']=$session_id;
        
            //echo "OK";
    if($_POST['uname']==NULL){
        Notdevam();
    }
    else
    {
      $username=$_POST['uname'];  
    }
    
    if($_POST['psw']==NULL){
        Notdevam();
    }
    else
    {
      $passwordx=$_POST['psw'];  
        //echo $password; 
    }
    
include 'userdbcon.php';
         //echo "ok";
if(userlogincheck($username)&&usersessioncheck($username,$session_id)&&checkadmin($username)){
   
    $_SESSION['kultipi']="admin";
    $_SESSION['uname']=$username;
        echo '<html><body class="makememiddlebody"><div class="containercap"><div class="textcapdiv"><z class="textcap">Daha önceden giriş yapılmıştır. Devam etmek için aşağıdaki butona basınız.</z></div><div class="gobackcapdiv"><button class="gobackcap" type="submit" name="submit" onclick="opensessionadmin()">Admin Sayfası</button></div></div></body></html>';
         
    }
    else if(userlogincheck($username)&&usersessioncheck($username,$session_id)&&checkyetkili($username)){
        $_SESSION['kultipi']="yetkili";
        $_SESSION['uname']=$username;
        echo '<html><body class="makememiddlebody"><div class="containercap"><div class="textcapdiv"><z class="textcap">Daha önceden giriş yapılmıştır. Devam etmek için aşağıdaki butona basınız.</z></div><div class="gobackcapdiv"><button class="gobackcap" type="submit" name="submit" onclick="opensessionyetkili()">Kullanıcı Sayfasına Git</button></div></div></body></html>';
         
    }
            
            
        else if(userlogincheck($username)&&usersessioncheck($username,$session_id)&&checkmuhasebe($username)){
            $_SESSION['kultipi']="muhasebe";
            $_SESSION['uname']=$username;
        echo '<html><body class="makememiddlebody"><div class="containercap"><div class="textcapdiv"><z class="textcap">Daha önceden giriş yapılmıştır. Devam etmek için aşağıdaki butona basınız.</z></div><div class="gobackcapdiv"><button class="gobackcap" type="submit" name="submit" onclick="opensessionmuhasebe()">Kullanıcı Sayfasına Git</button></div></div></body></html>';
         
    }
            else if(userlogincheck($username)&&usersessioncheck($username,$session_id)&&checkkiralamasorumlusu($username)){
                $_SESSION['kultipi']="kiralamasorumlusu";
                $_SESSION['uname']=$username;
        echo '<html><body class="makememiddlebody"><div class="containercap"><div class="textcapdiv"><z class="textcap">Daha önceden giriş yapılmıştır. Devam etmek için aşağıdaki butona basınız.</z></div><div class="gobackcapdiv"><button class="gobackcap" type="submit" name="submit" onclick="opensessionkiralamasorumlusu()">Kullanıcı Sayfasına Git</button></div></div></body></html>';
         
    }
                else if(userlogincheck($username)&&usersessioncheck($username,$session_id)&&checkmusteri($username)){
                    $_SESSION['kultipi']="musteri";
                    $_SESSION['uname']=$username;
        echo '<html><body class="makememiddlebody"><div class="containercap"><div class="textcapdiv"><z class="textcap">Daha önceden giriş yapılmıştır. Devam etmek için aşağıdaki butona basınız.</z></div><div class="gobackcapdiv"><button class="gobackcap" type="submit" name="submit" onclick="opensessionmusteri()">Kullanıcı Sayfasına Git</button></div></div></body></html>';
         
    }
 
    else{
        //echo "test";
        //echo userdbconfun($username,$passwordx);
    if(userdbconfun($username,$passwordx)){
        
        //echo "login OK"; 
        $_SESSION['uname']=$username;
        
      /*  if(!userloginwrite($_SESSION['uname'])){
            Notdevam();
        }
        date_default_timezone_set('Europe/Nicosia');
       $date=date("Y-m-d");
      $time=date("H:i:s"); if(!usersessionwrite($_SESSION['uname'],$_SESSION['sessionid'],$time,$date)){
            Notdevam();
        }*/
           /*if(!session_valid_id($session_id)){
        //echo "login OK1"; 
        Notdevam();  
                }*/
        //echo "login OK";
          //echo "login OK";  
           
    
        
         if($_SESSION['sessionid']!=session_id())
    {//echo "login OK2"; 
        Notdevam(); 
    }
        else{
             $isadmin=checkadmin($username);
             if($isadmin)
             {
                    $_SESSION['kultipi']="admin";
                  
               if($qr_status==1) 
               {
                $_SESSION['secretkey']=$secretkey;
                auth2w();   
               }
               else
               {
                   if(!userloginwrite($_SESSION['uname'])){
            Notdevam();
        }
                    date_default_timezone_set('Europe/Nicosia');
       $date=date("Y-m-d");
      $time=date("H:i:s"); 
        
        if(!usersessionwrite($_SESSION['uname'],$_SESSION['sessionid'],$time,$date)){
            Notdevam();
        }
                   
                   
                admindevam(); 
               }
                 
                   
             }
             $yetkili=checkyetkili($username);
             if($yetkili)
             {
                          $_SESSION['kultipi']="yetkili";
                 
                  if($qr_status==1) 
               {
                $_SESSION['secretkey']=$secretkey;
                auth2w();   
               }
               else
               {
                                   if(!userloginwrite($_SESSION['uname'])){
            Notdevam();
        }
                    date_default_timezone_set('Europe/Nicosia');
       $date=date("Y-m-d");
      $time=date("H:i:s"); 
        
        if(!usersessionwrite($_SESSION['uname'],$_SESSION['sessionid'],$time,$date)){
            Notdevam();
        }
                   
                yetkilidevam();  
               } 
             }
            
             $muhasebe=checkmuhasebe($username);
             if($muhasebe)
             {
                             $_SESSION['kultipi']="muhasebe";
                 
                    if($qr_status==1) 
               {
                $_SESSION['secretkey']=$secretkey;
                auth2w();   
               }
               else
               {
                   if(!userloginwrite($_SESSION['uname'])){
            Notdevam();
        }
                    date_default_timezone_set('Europe/Nicosia');
       $date=date("Y-m-d");
      $time=date("H:i:s"); 
        
        if(!usersessionwrite($_SESSION['uname'],$_SESSION['sessionid'],$time,$date)){
            Notdevam();
        }
                   
                   
                muhasebedevam();
               }
                 
                 
               
             }
            
             $kiralamasorumlusu=checkkiralamasorumlusu($username);
             if($kiralamasorumlusu)
             {
                         $_SESSION['kultipi']="kiralamasorumlusu";
                 
                    if($qr_status==1) 
               {
                $_SESSION['secretkey']=$secretkey;
                auth2w();   
               }
               else
               {
                   if(!userloginwrite($_SESSION['uname'])){
            Notdevam();
        }
                    date_default_timezone_set('Europe/Nicosia');
       $date=date("Y-m-d");
      $time=date("H:i:s"); 
        
        if(!usersessionwrite($_SESSION['uname'],$_SESSION['sessionid'],$time,$date)){
            Notdevam();
        }
                   
                   
                kiralamasorumlusudevam(); 
               } 
             }
             $musteri=checkmusteri($username);
             if($musteri)
             {
                         $_SESSION['kultipi']="musteri"; 
                 
                   if($qr_status==1) 
               {
                $_SESSION['secretkey']=$secretkey;
                auth2w();   
               }
               else
               {
                   if(!userloginwrite($_SESSION['uname'])){
            Notdevam();
        }
                    date_default_timezone_set('Europe/Nicosia');
       $date=date("Y-m-d");
      $time=date("H:i:s"); 
        
        if(!usersessionwrite($_SESSION['uname'],$_SESSION['sessionid'],$time,$date)){
            Notdevam();
        }
                   
                   
                musteridevam();  
               } 
                 
             }
           
            
    }
    }
    else{
         
         echo '<html><body class="makememiddlebody"><div class="containercap"><div class="textcapdiv"><z class="textcap">Giriş için yetkili değilsiniz. Kullanıcı adı veya şifresi hatalı. Yeniden deneyiniz.</z></div><div class="gobackcapdiv"><button class="gobackcap" type="submit" name="submit" onclick="goBack()">Geri</button></div></div></body></html>';
    exit;
        //$hash = password_hash($password, PASSWORD_DEFAULT);
        //var_dump($hashed_password);
    }
    }

/*function session_valid_id($session_id)
{
    return preg_match('/^[-,a-zA-Z0-9]{1,128}$/', $session_id) > 0;
}*/


        }
              
              
              
function Notdevam()
{

header("Location: https://whitelotustest.online/admin.php"); /* Redirect browser */
exit();	
	
}

function admindevam()
{

header("Location: https://whitelotustest.online/adminpage.php"); /* Redirect browser */
exit();	
	
}
function yetkilidevam()
{

header("Location: https://whitelotustest.online/yetkilipage.php"); /* Redirect browser */
exit();	
	
}
              
function muhasebedevam()
{

header("Location: https://whitelotustest.online/muhasebepage.php"); 
exit();
}
	

function kiralamasorumlusudevam()
{

header("Location: https://whitelotustest.online/kiralamasorumlusupage.php");
exit();	
	
}
function musteridevam()
{

header("Location: https://whitelotustest.online/musteripage.php"); 
exit();	
	
}
function auth2w()
{

header("Location: https://whitelotustest.online/2wauthpage.php"); 
exit();	
	
}

    ?>

<body class="makememiddlebody">  


    
    
    </body>
</html>