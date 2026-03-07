<?php
//require_once "PHPMailer/src/PHPMailer.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
function mailsender($emailpost,$message){
       
/*$message = "Bina numarası:".$id."<br>"."Bina İsmi:".$binaismi."<br>"."Bina yeri:".$binayeri."<br>"."Belediye:".$belediyeyeri."<br>"."Bina puanı:".$binapuan."<br>"."Bölge risk dilimi:".$bolgeriskdilim."<br>"."KKTC Risk Dilimi:".$kktcriskdilim."<br>"; */  
    
//$emailpost=$_POST["email"]; 
$emailpost=trim($emailpost);           
$to =$emailpost;  
  
   $mail = new PHPMailer;
   $mail->isSMTP();
   $mail->CharSet = 'utf-8';
   $mail->SMTPDebug = 0; //2 yaparsan detaylı sorunları gorosun.
   $mail->Host = 'smtp.hostinger.com';
   $mail->Port = 587;
   $mail->SMTPAuth = true;
   $mail->Username = 'info@whitelotustest.online';
   $mail->Password = 'Noveltech2022!!';
   $mail->setFrom('info@whitelotustest.online', 'info@whitelotustest.online');
   $mail->addReplyTo('info@whitelotustest.online', 'info@whitelotustest.online');
   $mail->addAddress($to, 'whitelotustest.online');
   $mail->Subject = 'Emlak Yönetim Portalı';
   $mail->msgHTML(file_get_contents('message.html'), __DIR__);
   $mail->Body = $message;
   //$mail->addAttachment("mword/"."bina".$id.".docx");
   if (!$mail->send()) {
       echo 'Mailer Hatası: ' . $mail->ErrorInfo;
   } else {
      // echo 'Rapor '. $to .' mail adresine gönderilmiştir.';
   }
          
          

}

function mailsenderattach($emailpost,$message,$path){
       
/*$message = "Bina numarası:".$id."<br>"."Bina İsmi:".$binaismi."<br>"."Bina yeri:".$binayeri."<br>"."Belediye:".$belediyeyeri."<br>"."Bina puanı:".$binapuan."<br>"."Bölge risk dilimi:".$bolgeriskdilim."<br>"."KKTC Risk Dilimi:".$kktcriskdilim."<br>"; */  
    
//$emailpost=$_POST["email"]; 
$emailpost=trim($emailpost);           
$to =$emailpost;  
  
   $mail = new PHPMailer;
   $mail->isSMTP();
   $mail->CharSet = 'utf-8';
   $mail->SMTPDebug = 0; //2 yaparsan detaylı sorunları gorosun.
   $mail->Host = 'smtp.hostinger.com';
   $mail->Port = 587;
   $mail->SMTPAuth = true;
   $mail->Username = 'info@whitelotustest.online';
   $mail->Password = 'Noveltech2022!!';
   $mail->setFrom('info@whitelotustest.online', 'info@whitelotustest.online');
   $mail->addReplyTo('info@whitelotustest.online', 'info@whitelotustest.online');
   $mail->addAddress($to, 'whitelotustest.online');
   $mail->Subject = 'Emlak Yönetim Portalı';
   $mail->msgHTML(file_get_contents('message.html'), __DIR__);
   $mail->Body = $message;
   $mail->addAttachment($path);
   if (!$mail->send()) {
       echo 'Mailer Hatası: ' . $mail->ErrorInfo;
   } else {
      // echo 'Rapor '. $to .' mail adresine gönderilmiştir.';
   }
          
          

}


function kira_email($id){
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
if ($result = $conn -> query("SELECT kirakey,email FROM kirakaporakayit where kirakaporakayit.kirakey='$id'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
$email=$row['email'];
    //echo "email:".$email;   
}
  $result -> free_result();
}
mysqli_close($conn);
return $email;
}


function message1_email($id){
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
if ($result = $conn -> query("SELECT kirakey,email,adsoyad,kimlikno,uyruk,kaporamiktari,kaporaparabirimi,kaporateslimtarihi FROM kirakaporakayit where kirakaporakayit.kirakey='$id'")) {

  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
        $adsoyad = $row['adsoyad'];
        $kimlikno = $row['kimlikno'];
        $uyruk = $row['uyruk'];
        $kaporamiktari = $row['kaporamiktari'];
        $kaporaparabirimi = $row['kaporaparabirimi'];
        $kaporateslimtarihi = $row['kaporateslimtarihi'];
        break;

}
      
  $result -> free_result();
}

date_default_timezone_set('Europe/Nicosia');    
$datesession=$kaporateslimtarihi;
$datetime = new DateTime("$datesession");
$datesession3 = $datetime->format('d-m-Y');   
$message="Aşağıdaki bilgiler ile kapora teslim alınmıştır"."<br><br>"."Ad Soyad: ".$adsoyad."<br>"."kimlik No:".$kimlikno."<br>"."Uyruk:".$uyruk."<br>"."kapora Miktarı:".$kaporamiktari." ".$kaporaparabirimi."<br>"."Kapora Teslim Tarihi:".$datesession3."<br>";    
    
   
mysqli_close($conn);
return $message;
}



//ÖRNEK KULLANIM

//include 'mailsender.php';

//MESAJ OLUŞTUR
//$id=22;
//$message=message_email($id);
/*"Bina numarası:".$id."<br>"."Bina İsmi:".$binaismi."<br>"."Bina yeri:".$binayeri."<br>"."Belediye:".$belediyeyeri."<br>"."Bina puanı:".$binapuan."<br>"."Bölge risk dilimi:".$bolgeriskdilim."<br>"."KKTC Risk Dilimi:".$kktcriskdilim."<br>";*/

//$message="HELLO THATS IT";

// EMAİL AL
//$emailsend=uname_email("mehmet.cezar");

// ÖRNEK MAİL
//mailsender($emailsend,$message);  









?>