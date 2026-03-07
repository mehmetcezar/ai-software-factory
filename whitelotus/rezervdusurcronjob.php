<?php


/*****************************FUNCTIONS*****************************/
function gunFarki($tarih1, $tarih2) {
    // Tarih formatlarının geçerliliğini kontrol et ve DateTime nesnesine dönüştür
   
    
    $date1 = DateTime::createFromFormat('Y-m-d', $tarih1);
    $date2 = DateTime::createFromFormat('Y-m-d', $tarih2);

    // Eğer tarihler geçerli değilse, false döndür
    if ($date1 > $date2) {
        $fark=1;
    }else
    {
        $fark=0;
    }

    
    return $fark;
} 


function compare_dates($date1, $date2) {
    // DateTime sınıfı kullanarak tarihleri oluştur
    $datetime1 = new DateTime($date1);
    $datetime2 = new DateTime($date2);

    // Tarihleri karşılaştır
    if ($datetime1 > $datetime2) {
        return 1; // İlk tarih büyükse 1 döner
    } elseif ($datetime1 < $datetime2) {
        return 2; // İkinci tarih büyükse 2 döner
    } else {
        return 0; // Tarihler eşitse 0 döner (isteğe bağlı)
    }
}


function tarihZamanDakikaya($tarihZamanString) {
    // Verilen tarih ve zaman formatı
    $format = 'Y-m-d H:i:s';

    // Verilen tarih ve zaman string'ini DateTime nesnesine çevir
    $dateTime = DateTime::createFromFormat($format, $tarihZamanString);

    // Hata kontrolü
    if (!$dateTime) {
        return "Geçersiz tarih ve zaman formatı";
    }

    // Dakikaya çevir
    $dakika = $dateTime->getTimestamp() / 60;

    return $dakika;
}

function dakikaFarki($tarih1, $tarih2) {
    // Verilen tarih ve zaman formatı
    $format = 'Y-m-d H:i:s';

    // Verilen tarih ve zaman string'lerini DateTime nesnesine çevir
    $dateTime1 = DateTime::createFromFormat($format, $tarih1);
    $dateTime2 = DateTime::createFromFormat($format, $tarih2);

   // echo $dateTime1;
//    echo $dateTime2;
    // Hata kontrolü
    if (!$dateTime1 || !$dateTime2) {
        return "Geçersiz tarih ve zaman formatı";
    }

    // Tarih farkını dakika cinsinden bul
    $fark = $dateTime1->diff($dateTime2);
    //echo $fark;
    $dakikaFarki = ($dateTime2 > $dateTime1) ? 1 : -1; // Eğer tarih2 daha yeni ise 1, aksi halde -1
    $dakikaFarki *= ($fark->days * 24 * 60 + $fark->h * 60 + $fark->i);

    return $dakikaFarki;
}

   function userdrop15($id){
		include 'config.php';

		$servername = $config['DB_HOST'];
$database = $config['DB_DATABASE'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];
// Create connection
$connn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$connn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
             if ($result = $connn -> query("SELECT * FROM mulkkayit where mulkkayit.isdeleted !=1 AND mulkkayit.id='$id'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
        
     
      $status=$row['status'];

}
     
  $result -> free_result();
}   
       
       if($status=="REZERV")
       {
           $i=0;
          $status="UYGUN"; 
           $sql = "UPDATE mulkkayit SET kirayaayrildisondate='',kirayaayrildisontime='', kirayaayrildi='$i',status='$status' where mulkkayit.id='$id'";
       }
       else
       {
           $i=0;
           $sql = "UPDATE mulkkayit SET kirayaayrildisondate='',kirayaayrildisontime='', kirayaayrildi='$i' where mulkkayit.id='$id'"; 
       }
       
        
       




if ($connn->query($sql) === TRUE) {
   
}
mysqli_close($connn);
//echo $i;
	//return $i;

	}

   function userdrop15kap($id){
		include 'config.php';

		$servername = $config['DB_HOST'];
$database = $config['DB_DATABASE'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];
// Create connection
$connn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$connn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

        $i=0;
$sql = "UPDATE mulkkayit SET kirakaporaeklendi='$i', kirakaporasontarih='', kaporaonayinda='$i', kaporasureonayinda='$i', kaporasureuzatmadate='', status='KAPORAIPTAL' where mulkkayit.kirakaporasonkey='$id'";



if ($connn->query($sql) === TRUE) {
   
}
   
  $status="GUNGECTIVEDUSTU";       
 $sql2 = "UPDATE kirakaporakayit SET kirakaporakayit.status='$status', kirakaporakayit.isdeleted=1 where kirakaporakayit.kirakey='$id'";



if ($connn->query($sql2) === TRUE) {
   
}      

mysqli_close($connn);
//echo $i;
	//return $i;

	} 




function kiralamayisonlandirfonk($kirakey,$mulkid){
    include 'config.php';

		$servername = $config['DB_HOST'];
$database = $config['DB_DATABASE'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];
// Create connection
$connn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$connn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
    
$kaporaonayinda=0;
$kaporasureonayinda=0; 
$kaporasureuzatmadate="0000-00-00";
$status="";    
    
$kirakaporaeklendi=0;
$kirakaporasontarih="0000-00-00";
$kirakaporasonkey="";
$kirabitistarihi="0000-00-00";
$noticeverildimi=0;
$noticetarihi="0000-00-00";
$kirayaayrildi=0;
$kirayaayrildisondate="0000-00-00";
$kirayaayrildisontime="00:00:00";    
$kiralamaonayinda=0;
$kiralamaguncellemegonderildi=0;
$kiralandi=0;
     
$sql = "UPDATE mulkkayit SET kirakaporaeklendi='$kirakaporaeklendi',kirakaporasontarih='$kirakaporasontarih',kirakaporasonkey='$kirakaporasonkey',kirabitistarihi='$kirabitistarihi',noticeverildimi='$noticeverildimi',noticetarihi='$noticetarihi',kirayaayrildi='$kirayaayrildi',kirayaayrildisondate='$kirayaayrildisondate',kirayaayrildisontime='$kirayaayrildisontime',kiralamaonayinda='$kiralamaonayinda',kiralamaguncellemegonderildi='$kiralamaguncellemegonderildi',kiralandi='$kiralandi', kaporaonayinda='$kaporaonayinda', kaporasureonayinda='$kaporasureonayinda',kaporasureuzatmadate='$kaporasureuzatmadate', status='$status' where mulkkayit.kirakaporasonkey='$kirakey'";


if ($connn->query($sql) === TRUE) {
   
}
    
 $sql = "UPDATE kiralamakayit SET isdeleted='1' where kiralamakayit.kiralamakey='$kirakey'";   
  if ($connn->query($sql) === TRUE) {
   
}  
  $sql = "UPDATE kirakaporakayit SET isdeleted='1' where kirakaporakayit.kirakey='$kirakey'";   
  if ($connn->query($sql) === TRUE) {
   
} 
      $sql = "UPDATE mulkkayit SET kirakaporasonkey='' where id='$mulkid'";   
  if ($connn->query($sql) === TRUE) {
   
}     

mysqli_close($connn);  
    
    
    
}



function noticedayoku(){
       include 'config.php';

		$servername = $config['DB_HOST'];
$database = $config['DB_DATABASE'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];
// Create connection
$connn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$connn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully"; 
    
              if ($result8 = $connn -> query("SELECT * FROM noticeay")) {
  while ($row8 = $result8 -> fetch_array(MYSQLI_ASSOC)) {
      $noticekacayonce=$row8['kacayonce'];

}
     
  $result8 -> free_result();
}
 mysqli_close($connn); 
    
    return $noticekacayonce;
    
}



function zararziyanstatusupdate(){
    $mulkdizi=array();
    $kiralamadizi=array();
    
       include 'config.php';

		$servername = $config['DB_HOST'];
$database = $config['DB_DATABASE'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];
// Create connection
$connn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$connn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully"; 
$i=0;

if ($result = $connn -> query("SELECT kirabitistarihi,noticeverildimi,noticetarihi,id,kirakaporasonkey,zararziyangirilmeli,kiralandi FROM mulkkayit where mulkkayit.isdeleted !=1")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
      $kirabitistarihi=$row['kirabitistarihi'];
      $noticeverildimi=$row['noticeverildimi'];
      $noticetarihi=$row['noticetarihi'];
      $mulkid=$row['id'];
      $zararziyangirilmeli=$row['zararziyangirilmeli'];
      $kiralandi=$row['kiralandi'];
  if($zararziyangirilmeli!=1){    
  if($noticeverildimi==2){

                 /****NOTİCE DAY ANALİZİ****/
                $todayget= date('Y-m-d');
                $tarihnot = new DateTime($noticetarihi);
                $noticekacayonce=noticedayoku();
                $hesaplanacakolan=$noticekacayonce*30;
                $gunhesabi='-'.$hesaplanacakolan.' day';    
                $tarihnot->modify($gunhesabi);
                $nottarih = $tarihnot->format('Y-m-d');
                if($todayget>=$nottarih){
                  
                 $mulkdizi[$i]=$row['id'];
                 $kiralamadizi[$i]=$row['kirakaporasonkey'];      
                 $i++;   
                }
                }
                else
                {   
                 
                 if($kiralandi==1){   
                /****NOTİCE DAY ANALİZİ****/
                $todayget= date('Y-m-d');
                $tarihnot = new DateTime($kirabitistarihi);
                $noticekacayonce=noticedayoku();
                $hesaplanacakolan=$noticekacayonce*30;
                $gunhesabi='-'.$hesaplanacakolan.' day';    
                $tarihnot->modify($gunhesabi);
                $nottarih = $tarihnot->format('Y-m-d');
                    echo '<br>'.$nottarih.'<br>';
                    echo '<br>'.$todayget.'<br>';
                if($todayget>=$nottarih){
                $mulkdizi[$i]=$row['id'];
                $kiralamadizi[$i]=$row['kirakaporasonkey'];      
                $i++;    
                } 
                    
                 }
                    
      
}
     
  
}    
 
  }
    
    
   
 $result -> free_result();     
}
    

    

    $counter=0;
    $status="ZARARZIYANGIR";
    $zararziyangirilmeli=1;
    for($k=0;$k<$i;$k++){
        
       $sql1 = "UPDATE mulkkayit SET mulkkayit.status='$status', mulkkayit.zararziyangirilmeli='$zararziyangirilmeli' where mulkkayit.id='$mulkdizi[$k]'";   
                        if ($connn->query($sql1) === TRUE) {} 
        
      
       $sql2 = "UPDATE kiralamakayit SET kiralamakayit.status='$status' where kiralamakayit.kiralamakey='$kiralamadizi[$k]'";   
                        if ($connn->query($sql2) === TRUE) {}  
        
     $counter++;   
    }
  
    
    
     echo "<br>"."ZARAR ZİYAN GİRİLME STATUS UPDATE: ".$counter;
                       
    
    mysqli_close($connn);
}


function kiralamadurumukapat($mulkid){
   include 'config.php';

		$servername = $config['DB_HOST'];
$database = $config['DB_DATABASE'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];
// Create connection
$connn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$connn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";  
   
     $sql1 = "UPDATE mulkkayit SET mulkkayit.kiralamadurumu='KAPALI' where mulkkayit.id='$mulkid' AND mulkkayit.isdeleted!=1";   
                        if ($connn->query($sql1) === TRUE) {} 
  mysqli_close($connn);  
}




function mulkkapaliac($mulkid){
    
      include 'config.php';

		$servername = $config['DB_HOST'];
$database = $config['DB_DATABASE'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];
// Create connection
$connn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$connn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully"; 
    
 // $sql = "UPDATE mulkkayit SET kaporaonayinda=0,kirakaporaeklendi=0,kaporasureonayinda=0,kaporasureuzatmadate='0000-00-00',kirakaporasontarih='0000-00-00',kirakaporasonkey='',kiracieklendi=0,kirabitistarihi=0,noticeverildimi=0,noticetarihi='0000-00-00',kirayaayrildi=0,kirayaayrildisondate='0000-00-00',kirayaayrildisontime='00:00:00',kiralamaonayinda=0,kiralamaguncellemegonderildi=0,kiralandi=0,zararziyangirilmeli=0,zararziyangirildimi=0,kiralamadurumu='AÇIK',status='UYGUN' where mulkkayit.id='$mulkid'";  
   $status="UYGUN";
    
         if ($result = $connn -> query("SELECT * FROM mulkkayit where mulkkayit.isdeleted !=1 AND mulkkayit.id='$mulkid'")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
        
     
      $kaporaonayinda=$row['kaporaonayinda'];

}
     
  $result -> free_result();
} 
    
    if($kaporaonayinda==1){
        $status="KAPORAONAYINDA";
    }
    if($kaporaonayinda==2){
        $status="KAPORAONAYLANDI";
    }
    if($kaporaonayinda==3){
        $status="KAPORARED";
    }
    
    $datedate="0000-00-00";
    
    $sql = "UPDATE mulkkayit SET kiralamadurumu='AÇIK',status='$status', kirayaactarih='$datedate' where mulkkayit.id='$mulkid'"; 
     
        if ($connn->query($sql) === TRUE) {}
    
    
    
 mysqli_close($connn);    
}


function compareDates($date1, $date2) {
    // DateTime nesneleri oluşturma
    $datetime1 = new DateTime($date1);
    $datetime2 = new DateTime($date2);

    // İki tarih arasındaki farkı hesapla
    $interval = $datetime1->diff($datetime2);

    // Sonucu gün, saat, dakika, saniye cinsinden döndür
    return [
        'days' => $interval->days,                // Toplam gün farkı
        'hours' => $interval->h,                  // Saat farkı
        'minutes' => $interval->i,                // Dakika farkı
        'seconds' => $interval->s,                // Saniye farkı
        'invert' => $interval->invert             // Tarih 1, Tarih 2'den önce mi (1 ise evet)
    ];
}




function isFirstDayOfMonth($date) {
    // Tarihi kontrol etmek için gün kısmını alıyoruz
    $day = date("d", strtotime($date));
    
    // Gün "01" ise true döndür, değilse false döndür
    return $day === "01"; //01 dir ayın başında atması için.
}

function isSameYearAndMonth($date1, $date2) {
    // İlk ve ikinci tarihin yıl ve ay değerlerini alıyoruz
    $yearMonth1 = date("Y-m", strtotime($date1));
    $yearMonth2 = date("Y-m", strtotime($date2));
    
    // Yıl ve ay değerlerini karşılaştırıyoruz
    return $yearMonth1 === $yearMonth2;
}




function genelborcdagit($borctipi,$datatable) {
    
    $sql="INSERT INTO '$datatable' (id, tahtarihi, mulkno, yapino, kiralamakey, kimborclandirildi, miktar, parabirimi) VALUES ('', '$date','$kiralamatarihi','$borctipi','$odenendepozito','$depozitobedeliparabirimi','$mulkno','$yapino','$kirakaporasonkey','$kimborclandirildi','$esasborctablosunayazildi')";
        if ($conn->query($sql) === TRUE) {}
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } 
    
    
}



/*****************************FUNCTIONS END*****************************/


/*START**/

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

          if ($result = $conn -> query("SELECT * FROM rezervasyonsure")) {
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
        $rezervasyonsure=$row['rezervasyonsuresisaat'];
        
}
     
  $result -> free_result();
}  



date_default_timezone_set('Europe/Nicosia');
   $date=date("Y-m-d");
    $time=date("H:i:s");
    $datetime=$date." ".$time;
if ($result = $conn -> query("SELECT kirayaayrildisondate,kirayaayrildisontime,id FROM mulkkayit where mulkkayit.kirayaayrildi=1 AND mulkkayit.isdeleted!=1")) {
  //echo tarihZamanDakikaya($datetime)."<br>";
  // Free result set
  //$date=date('Y-m-d');

    $i=0;
    $j=0;
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
	 //echo strtotime($date);
	 //echo strtotime($row['start_date']);
      //echo $row['uname'];
     // echo $row['password'];
      //echo $passwordx;
      //echo password_verify($password, $row['password']);

      $dbdatetime=$row['kirayaayrildisondate']." ".$row['kirayaayrildisontime'];
      //echo tarihZamanDakikaya($dbdatetime)."<br>";
      //echo $datetime."<br>";
      //echo $dbdatetime."<br>";
      if($dbdatetime!="0000-00-00 00:00:00"){
      $resultxxx=compareDates($dbdatetime,$datetime);
     // $minutes = (strtotime($datetime) - strtotime($dbdatetime)) / 60;
      //echo $time;
      //echo $row['timesession'];
      //echo $minutes."<br>";
      //echo $time15;
      //echo dakikaFarki($dbdatetime,$datetime)."<br>";
      //echo tarihZamanDakikaya($datetime)."<br>";
      /*
      echo strtotime($datetime)."<br>";
      echo strtotime($dbdatetime)."<br>";
      echo "<br>";
      echo dakikaFarki($dbdatetime,$datetime);
          echo "<br>";
          echo $rezervasyonsure;
         */ if($resultxxx['invert']!=1)
          {
              //echo dakikaFarki($dbdatetime,$datetime);
              userdrop15($row['id']);
              $i++;
          }
          else
         {
          
          $j++;
         }
      
      }
      
}

  $result -> free_result();
}



echo "<br>"."REZERV_DROPED:".$i;
echo "<br>"."REZERV_NOTDROPPED:".$j;


       
 /**************************KAPORA DUSUR********************************/ 
       
       
  /*     
  
       
       
          if ($result3 = $conn -> query("SELECT * FROM kirakaporasure")) {
  while ($row3 = $result3 -> fetch_array(MYSQLI_ASSOC)) {
        $kirakaporatakvimgunu=$row3['kirakaporatakvimgunu'];
        
}
     
  $result3 -> free_result();
}  



   
    $datetime2=date("Y-m-d");
if ($result2 = $conn -> query("SELECT kirakaporasontarih,kirakaporaeklendi,kirakaporasonkey,kaporaonayinda FROM mulkkayit where mulkkayit.kirakaporaeklendi=1 AND mulkkayit.isdeleted!=1 AND mulkkayit.kaporaonayinda=2")) {


    $i2=0;
    $j2=0;
    


  while ($row2 = $result2 -> fetch_array(MYSQLI_ASSOC)) {
	
    $dbdatetime2=$row2['kirakaporasontarih'];
    
      if($dbdatetime2!="0000-00-00"){
      
      //$minutes2 = (strtotime($datetime2) - strtotime($dbdatetime2)) / 60;
     
        
        if(compare_dates($datetime2,$dbdatetime2)==0)
          { 
              //echo gunFarki($datetime2,$dbdatetime2);
              userdrop15kap($row2['kirakaporasonkey']);
              $i2++;
          }
          else
         {
          
          $j2++;
         }
      }
  
      
}

  $result2 -> free_result();
}

echo "<br>"."KAPORA_DROPED:".$i2;
echo "<br>"."KAPORA_NOTDROPPED:".$j2;

*/


/***KAPORA YETKİLİYE GÖNDER SURE UZATIMI İÇİN KAPORA OTMATİK DUSMESİN***/

          if ($result3 = $conn -> query("SELECT * FROM kirakaporasure")) {
  while ($row3 = $result3 -> fetch_array(MYSQLI_ASSOC)) {
        $kirakaporatakvimgunu=$row3['kirakaporatakvimgunu'];
        
}
     
  $result3 -> free_result();
}  

$datetime2=date("Y-m-d");


if ($result2 = $conn -> query("SELECT kirakaporasontarih,kirakaporaeklendi,kirakaporasonkey,kaporaonayinda,id FROM mulkkayit where mulkkayit.kirakaporaeklendi=1 AND mulkkayit.isdeleted!=1 AND mulkkayit.kaporaonayinda=2 AND mulkkayit.kiralandi!=1 AND mulkkayit.cronjobiptalkapora!=1")) {


    $i2=0;
    $j2=0;
    


  while ($row2 = $result2 -> fetch_array(MYSQLI_ASSOC)) {
	$mulkid3489=$row2['id'];
      
    $dbdatetime2=$row2['kirakaporasontarih'];
    
      if($dbdatetime2!="0000-00-00"){
      
      //$minutes2 = (strtotime($datetime2) - strtotime($dbdatetime2)) / 60;
     
        
        if(compare_dates($datetime2,$dbdatetime2)==1)
          { 
              //echo gunFarki($datetime2,$dbdatetime2);
              //userdrop15kap($row2['kirakaporasonkey']);
            
            
$cronjobiptalkapora=1;
$status3489="KAPDUSTUYETKILIONAYINDA";    
      //$sql = "UPDATE mulkkayit SET kirakaporasontarih='$kaporaiptaltarihi' where mulkkayit.id='$mulkno'";
$sql3489 = "UPDATE mulkkayit SET cronjobiptalkapora='$cronjobiptalkapora', status='$status3489' where mulkkayit.id='$mulkid3489'";
            
            if ($conn->query($sql3489) === TRUE) {
                
                $i2++;
            }
            
            
             
          }
          else
         {
          
          $j2++;
         }
      }
  
      
}

  $result2 -> free_result();
}

echo "<br>"."KAPORA_DROPED:".$i2;
echo "<br>"."KAPORA_NOTDROPPED:".$j2;




/***KAPORA YETKİLİYE GÖNDER SURE UZATIMI İÇİN KAPORA OTMATİK DUSMESİN***/




    /**************************KAPORA DUSUR SON********************************/  



 /**************************KİRALAMA DUSUR ve MULK KAPAT**********************/

$i3=0;
    $ijk=1;
          if ($result4 = $conn -> query("SELECT kiralandi, kirabitistarihi, noticeverildimi, noticetarihi,kirakaporasonkey,zararziyangirildimi,id FROM mulkkayit where mulkkayit.kiralandi='$ijk' AND mulkkayit.isdeleted!='$ijk' AND mulkkayit.kiralamadurumu='AÇIK'")) {
  while ($row4 = $result4 -> fetch_array(MYSQLI_ASSOC)) {  
     
      $esasdate="";
      $analizyapabilin=0;
      $kirakaporasonkey=$row4['kirakaporasonkey'];
      $mulkno=$row4['id'];
      $zararziyangirildimi=$row4['zararziyangirildimi'];
      $noticeverildimi=$row4['noticeverildimi'];
      $kiralandi=$row4['kiralandi'];
      
      
      if($kiralandi==1)
      {
      if($zararziyangirildimi==2)
      {      
      if($noticeverildimi==2){
       $esasdate=$row4['noticetarihi'];
       $analizyapabilin=1;      
      }
      else
      {
       $esasdate=$row4['kirabitistarihi'];
       $analizyapabilin=1;
      }
      }//zararziyan yetkili tarafından onaylandı mı bakılır.
      }//kiralandı ise
      
      
      
      
      /*
      if($row4['noticetarihi']=="0000-00-00"){
        $esasdate=$row4['kirabitistarihi'];
          
      }
      else
      {
      $resultfunk=compare_dates($row4['kirabitistarihi'],$row4['noticetarihi']);
          
      if($resultfunk==1)
      {
          
          $esasdate=$row4['noticetarihi'];
      }
      else
      {
          
      $esasdate=$row4['kirabitistarihi'];  
      }
      
      }
      */
     $datetimenowkira=date("Y-m-d"); 
     $resultfunk2=compare_dates($esasdate,$datetimenowkira); 
       
     
      if($resultfunk2==0)
      {
      //kiralamayı sonlandır fonksiyon
      //kiralamayisonlandirfonk($kirakaporasonkey,$mulkno);
         kiralamadurumukapat($mulkno); 
         $i3++; 
      }
      
}   
  $result4 -> free_result();
}  


echo "<br>"."KİRALAMA_DROPPED:".$i3;


/**************************KİRALAMA DUSUR SON********************************/ 


/**************************ZARAR ZİYAN STATUS UPDATE********************************/



zararziyanstatusupdate();



/**************************ZARAR ZİYAN STATUS UPDATE SON***************************/ 


/**************************MULK KİRALAMAYA AÇ********************************/





$i6=0;

if ($result6 = $conn -> query("SELECT kirayaactarih,id FROM mulkkayit where mulkkayit.isdeleted!=1 AND mulkkayit.kiralamadurumu='KAPALI'")) {
  while ($row6 = $result6 -> fetch_array(MYSQLI_ASSOC)) {  
     $esasdate=$row6['kirayaactarih'];
     
     $datetimenowkira=date("Y-m-d"); 
     $resultfunk2=compare_dates($esasdate,$datetimenowkira); 
       
     
      if($resultfunk2==0)
      {
      //kiralamayı sonlandır fonksiyon
      //kiralamayisonlandirfonk($kirakaporasonkey,$mulkno);
         mulkkapaliac($row6['id']);
         $i6++; 
      }
      
}   
  $result6 -> free_result();
}  


echo "<br>"."KİRAYA_AÇMA:".$i6;





/**************************MULK KİRALAMAYA AÇ SON***************************/ 































/******SÜRELİ AİDAT MAT SAHİBİNE AİDAT HER AY TAHAKKUK AT ***************************/



/***MAL SAHİBİNE***/
$date=date("Y-m-d");
$kimborclandirildi="MALSAHİBİ";
$counter2378=0;
$aidatsurektest="EVET";
if(isFirstDayOfMonth($date)){ // HER AYIN 01 İSİ BUNU ÇALIŞTIR. HER AYIN BAŞINDA AİDAT TAHHUKUK ETTİRİLİYOR BORÇ OLARAK

if ($result76 = $conn -> query("SELECT id,yapino,guncelaidat,aidatparabirimi,aidatsurekliligi FROM mulkkayit where mulkkayit.isdeleted !=1 AND  mulkkayit.aidatsurekliligi='$aidatsurektest' AND mulkkayit.kiralandi!=1")) {
  while ($row76 = $result76 -> fetch_array(MYSQLI_ASSOC)) {
      
   $mulkno=$row76['id'];   
   $yapino=$row76['yapino'];   
   $guncelaidat=$row76['guncelaidat'];   
   $aidatparabirimi=$row76['aidatparabirimi'];   
   $aidatsurekliligi=$row76['aidatsurekliligi'];
   
      
      
   // EĞER DAHA ÖNCE AYNI AY VE SENE İÇERİSİNDE AİDAT TAHAKKUK ATIYSA TEKRAR ATMASIN DİYE
      $control55=1;
     if ($result55 = $conn -> query("SELECT tahtarihi,mulkno FROM aidattahakkukborc where aidattahakkukborc.mulkno='$mulkno'")) { 
      while ($row55 = $result55 -> fetch_array(MYSQLI_ASSOC)) {
           
          if(isSameYearAndMonth($date, $row55['tahtarihi'])){
             $control55=0;
            
          }
          if($control55==0)
              break;
      }
         
      
     }
      $result55 -> free_result();
      // EĞER DAHA ÖNCE AYNI AY VE SENE İÇERİSİNDE AİDAT TAHAKKUK ATIYSA TEKRAR ATMASIN DİYE
      
    
      if($control55){
   $sql76 = "INSERT INTO aidattahakkukborc (id, tahtarihi, mulkno, aidatsurekliligi, yapino, kimborclandirildi, miktar, parabirimi) VALUES ('', '$date','$mulkno', '$aidatsurekliligi','$yapino','$kimborclandirildi','$guncelaidat','$aidatparabirimi')"; 
  
    
    if ($conn->query($sql76) === TRUE) {
    $counter2378++;
    }  
      
      }
}
     
  $result76 -> free_result();
} 



}// AYIN BAŞI İF SONU
/***MAL SAHİBİNE SON***/

echo "<br>"."MAL SAHİBİ AİDAT TAHAKKUK SAYISI:".$counter2378;

/**************************AİDAT HER AY TAHAKKUK SON***************************/





/*******GENEL BORC TABLOSUNUN TİPE GÖRE DAĞITILMASI*****************/

$today=date("Y-m-d");
$kiraborccount=0;
$depozitoborccount=0;
$kaporaborccount=0;
$aidatborccount=0;
$suborccount=0;
$hizmetborccount=0;
$internetborccount=0;
$komisyonborccount=0;
 if ($result28 = $conn -> query("SELECT * FROM genelborc where genelborc.tahedilecektarih<='$today' AND genelborc.esasborctablosunayazildi!=1")) { 
      while ($row28 = $result28 -> fetch_array(MYSQLI_ASSOC)) {
          echo "OK";
     $idgenelborc=$row28['id'];      
    $borctipi=$row28['borctipi'];
          $tahedilecektarih=$row28['tahedilecektarih'];
          $miktar=$row28['miktar'];
          $parabirimi=$row28['parabirimi'];
          $mulkno=$row28['mulkno'];
          $yapino=$row28['yapino'];
          $kiralamakey=$row28['kiralamakey'];
          $kimborclandirildi=$row28['kimborclandirildi'];
         
    if($borctipi=="KİRA"){
        echo "OK";
     $sql28 = "INSERT INTO kiratahakkukborc (id, tahtarihi, mulkno, yapino, kiralamakey, kimborclandirildi, miktar, parabirimi) VALUES ('', '$tahedilecektarih','$mulkno','$yapino','$kiralamakey','$kimborclandirildi','$miktar','$parabirimi')"; 
        $kiraborccount++;
    } 
          
           if($borctipi=="KAPORA"){
     $sql28 = "INSERT INTO kaporatahakkukborc (id, tahtarihi, mulkno, yapino, kiralamakey, kimborclandirildi, miktar, parabirimi) VALUES ('', '$tahedilecektarih','$mulkno','$yapino','$kiralamakey','$kimborclandirildi','$miktar','$parabirimi')";
               $kaporaborccount++;
    } 
          
       if($borctipi=="AİDAT"){
     $sql28 = "INSERT INTO aidattahakkukborc (id, tahtarihi, mulkno, yapino, kiralamakey, kimborclandirildi, miktar, parabirimi) VALUES ('', '$tahedilecektarih','$mulkno','$yapino','$kiralamakey','$kimborclandirildi','$miktar','$parabirimi')";
           $aidatborccount++;
    }    
      
          
             if($borctipi=="DEPOZİTO"){
     $sql28 = "INSERT INTO depozittahakkukborc (id, tahtarihi, mulkno, yapino, kiralamakey, kimborclandirildi, miktar, parabirimi) VALUES ('', '$tahedilecektarih','$mulkno','$yapino','$kiralamakey','$kimborclandirildi','$miktar','$parabirimi')";
                 $depozitoborccount++;
    }  
          
                       if($borctipi=="SU"){
     $sql28 = "INSERT INTO sutahakkukborc (id, tahtarihi, mulkno, yapino, kiralamakey, kimborclandirildi, miktar, parabirimi) VALUES ('', '$tahedilecektarih','$mulkno','$yapino','$kiralamakey','$kimborclandirildi','$miktar','$parabirimi')"; 
                           $suborccount++;
    }
          
                                 if($borctipi=="HİZMET"){
     $sql28 = "INSERT INTO hizmettahakkukborc (id, tahtarihi, mulkno, yapino, kiralamakey, kimborclandirildi, miktar, parabirimi) VALUES ('', '$tahedilecektarih','$mulkno','$yapino','$kiralamakey','$kimborclandirildi','$miktar','$parabirimi')";  
                                     $hizmetborccount++;
    }
          
                                          if($borctipi=="İNTERNET"){
     $sql28 = "INSERT INTO internettahakkukborc (id, tahtarihi, mulkno, yapino, kiralamakey, kimborclandirildi, miktar, parabirimi) VALUES ('', '$tahedilecektarih','$mulkno','$yapino','$kiralamakey','$kimborclandirildi','$miktar','$parabirimi')";  
                                     $internetborccount++;
    }
                  if($borctipi=="KOMİSYON"){
     $sql28 = "INSERT INTO komisyontahakkukborc (id, tahtarihi, mulkno, yapino, kiralamakey, kimborclandirildi, miktar, parabirimi) VALUES ('', '$tahedilecektarih','$mulkno','$yapino','$kiralamakey','$kimborclandirildi','$miktar','$parabirimi')";
               $komisyonborccount++;
    }
       
         if ($conn->query($sql28) === TRUE) {
             $todayx=date("Y-m-d");
             $sql1934 = "UPDATE genelborc SET esasborctablosunayazildi=1, esasborctablosuyazilmatarihi='$todayx' where genelborc.id='$idgenelborc'";   
          
       if ($conn->query($sql1934) === TRUE) {}     
           else
        {
            echo "Error: " . $sql1934 . "<br>" . $conn->error;
        } 
             
             
             
         }     
           else
        {
            echo "Error: " . $sql28 . "<br>" . $conn->error;
        }
        
             
         
          
          
     }
      $result28 -> free_result();
 }











/*******GENEL BORC TABLOSUNUN TİPE GÖRE DAĞITILMASI SON*****************/



/*?????!!!!*BUNU DOSYANIN EN SONUNA BIRAK. DOVİZ EN SONDA OLSUN**????!!!!!!*/

/**********DOVİZ CEK**************************/
// Döviz Kurlarını Çek
function fetchExchangeRatesFromTCMB() {
    $url = "https://www.tcmb.gov.tr/kurlar/today.xml";

    // XML verisini çek
    $xml = @simplexml_load_file($url);

    if ($xml === false) {
        die("TCMB döviz verisi alınamadı.");
    }

    // İlgili kurları döndür
    $rates = [
        "USD" => (float) $xml->Currency[0]->BanknoteBuying, // ABD Doları
        "EUR" => (float) $xml->Currency[3]->BanknoteBuying, // Euro
        "GBP" => (float) $xml->Currency[4]->BanknoteBuying, // İngiliz Sterlini
    ];

    return $rates;
}

// Döviz kurlarını alın
try {
    $rates = fetchExchangeRatesFromTCMB();
    //echo "Güncel Döviz Kurları:\n";
    foreach ($rates as $currency => $rate) {
        //echo "$currency: $rate\n";
    }
} catch (Exception $e) {
    echo "Hata: " . $e->getMessage();
}



$control99=0;
if ($result99 = $conn -> query("SELECT * FROM doviz_db where tarih='$date'")) {
  while ($row99 = $result99 -> fetch_array(MYSQLI_ASSOC)) {
      $control99=1;
  }
 $result99 -> free_result();   
}
 

if($control99==0){
// Ana İşlem
$rates = fetchExchangeRatesFromTCMB();





$dovizcheck=0;
foreach ($rates as $currency => $rate) {

   $kur_adi=$currency;
   $kur_degeri=$rate;
   $sql92 = "INSERT INTO doviz_db (id, tarih, kur_adi, kur_degeri) VALUES ('', '$date','$kur_adi','$kur_degeri')"; 

if ($conn->query($sql92) === TRUE) {
    
    $dovizcheck++;
}  
 else
        {
            echo "Error: " . $sql92 . "<br>" . $conn->error;
        }

}
}else
{
  echo "<br>"."doviz cekilmesi daha önce bugun için başarıyla tamamlandı";  
}


if($dovizcheck ==3)
{
echo "<br>"."doviz cekilmesi başarıyla tamamlandı";
}

/**********DOVİZ CEK SON**************************/

mysqli_close($conn);

?>