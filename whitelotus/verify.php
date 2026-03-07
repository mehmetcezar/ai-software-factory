<?php

require_once 'GoogleAuthenticator.php'; // composer kullanmıyorsan bu dosyayı elle indir
include 'userdbcon.php';
include 'usersession.php';
session_start();

$secretkey = $_POST['secretkey'] ?? '';
$uname = $_POST['uname'] ?? '';
$kultipi = $_POST['kultipi'] ?? '';
$code = $_POST['code'] ?? '';

$_SESSION['kultipi']=$kultipi;

define('USER_SECRET', $secretkey);
    $ga = new PHPGangsta_GoogleAuthenticator();
    $check = $ga->verifyCode(USER_SECRET, $code, 2); // 60 saniye tolerans
/*echo $secretkey."<br>";
echo $uname."<br>";
echo $kultipi."<br>";
echo $code."<br>";
echo $check."<br>";
exit();*/
    if ($check) {
        $_SESSION['loggedin'] = true;
        

                 if($kultipi=="admin")
                     {
                       $_SESSION['kultipi']="admin";
                     
        if(!userloginwrite($uname)){
            Notdevam();
        }
        date_default_timezone_set('Europe/Nicosia');
       $date=date("Y-m-d");
      $time=date("H:i:s"); if(!usersessionwrite($_SESSION['uname'],$_SESSION['sessionid'],$time,$date)){
            Notdevam();
        }
                     
                     
                        admindevam();   
                     }

                     if($kultipi=="yetkili")
                     {
                        $_SESSION['kultipi']="yetkili";
                            if(!userloginwrite($uname)){
            Notdevam();
        }
        date_default_timezone_set('Europe/Nicosia');
       $date=date("Y-m-d");
      $time=date("H:i:s"); if(!usersessionwrite($uname,$_SESSION['sessionid'],$time,$date)){
            Notdevam();
        }
                       yetkilidevam();  
                     }

                     if($kultipi=="muhasebe")
                     {
                        $_SESSION['kultipi']="muhasebe";
                         if(!userloginwrite($uname)){
            Notdevam();
        }
        date_default_timezone_set('Europe/Nicosia');
       $date=date("Y-m-d");
      $time=date("H:i:s"); if(!usersessionwrite($uname,$_SESSION['sessionid'],$time,$date)){
            Notdevam();
        }
                         
                       muhasebedevam();  
                     }

                     if($kultipi=="kiralamasorumlusu")
                     {
                        $_SESSION['kultipi']="kiralamasorumlusu";
                         if(!userloginwrite($uname)){
            Notdevam();
        }
        date_default_timezone_set('Europe/Nicosia');
       $date=date("Y-m-d");
      $time=date("H:i:s"); if(!usersessionwrite($uname,$_SESSION['sessionid'],$time,$date)){
            Notdevam();
        }
                       kiralamasorumlusudevam();  
                     }

                     if($kultipi=="musteri")
                     {
                       $_SESSION['kultipi']="musteri";
                         if(!userloginwrite($uname)){
            Notdevam();
        }
        date_default_timezone_set('Europe/Nicosia');
       $date=date("Y-m-d");
      $time=date("H:i:s"); if(!usersessionwrite($uname,$_SESSION['sessionid'],$time,$date)){
            Notdevam();
        }
                       musteridevam();  
                     }
                }
           else {
        hatalidogrulamadevam();
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

function hatalidogrulamadevam()
{

header("Location: https://whitelotustest.online/2wauthhatalipage.php"); 
exit();	
	
}

?>