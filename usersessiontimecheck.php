<?php
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
date_default_timezone_set('Europe/Nicosia');
   $date=date("Y-m-d");
    $time=date("H:i:s");
    $datetime=$date." ".$time;
if ($result = $conn -> query("SELECT uname,datesession,timesession FROM users")) {
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

      $dbdatetime=$row['datesession']." ".$row['timesession'];
      //echo tarihZamanDakikaya($dbdatetime)."<br>";
      //echo $datetime;
      if($dbdatetime!="0000-00-00 00:00:00"){
      
      $minutes = (strtotime($datetime) - strtotime($dbdatetime)) / 60;
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
      */
          if(dakikaFarki($dbdatetime,$datetime)>=60 )
          {
              userdrop15($row['uname']);
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
mysqli_close($conn);
echo "A:".$i;
echo "B:".$j;



   function userdrop15($uname){
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
$sql = "UPDATE users SET idsession='', islogin='$i' where uname='$uname'";



if ($connn->query($sql) === TRUE) {
    $i=1;
}

mysqli_close($connn);
//echo $i;
	//return $i;

	} 



?>