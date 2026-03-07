    <?php
date_default_timezone_set('Europe/Nicosia');
	function usersessionwrite($uname,$sessionx,$timesession,$datesession){
		include_once 'config.php'
		
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
        $i=0;
$sql = "UPDATE users SET idsession='$sessionx', timesession='$timesession', datesession='$datesession' where users.uname='$uname'";
        
        

if ($conn->query($sql) === TRUE) {
    $i=1;
}
     
mysqli_close($conn);
//echo $i;
	return $i;
        
	}



	function usersessionupdate($uname){
		include_once 'config.php'
		
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
        $i=0;
         date_default_timezone_set('Europe/Nicosia');
       $datesession=date("Y-m-d");
      $timesession=date("H:i:s"); 
$sql = "UPDATE users SET timesession='$timesession', datesession='$datesession' where users.uname='$uname'";
        
        

if ($conn->query($sql) === TRUE) {
    $i=1;
}
     
mysqli_close($conn);
//echo $i;
	//return $i;
        
	}


function usersessioncheck($uname,$sessionx){
		include_once 'config.php'
		
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
if ($result = $conn -> query("SELECT * FROM users where  users.company_id = '{$_SESSION['company_id']}' AND users.uname='$uname'")) {
  //echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  //$date=date('Y-m-d');
    $i=1;
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
	 //echo strtotime($date);
	 //echo strtotime($row['start_date']);
      //echo $row['uname'];
     // echo $row['password'];
      //echo $passwordx;
      //echo password_verify($password, $row['password']);
          if($sessionx==$row['idsession'] && $uname==$row['uname'])
          {
              $i=1;
              usersessionupdate($uname);
          }
          else
         { 
          $i=0;
         }
}
  
  $result -> free_result();
}
mysqli_close($conn);
//echo $i;
	return $i;
        
	}


function usersessiontimecheck(){
		/*include_once 'config.php'
		
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
   $date=date("Y-m-d");
    $time=date("H:i:s");
    $datetime=$date." ".$time;
if ($result = $conn -> query("SELECT * FROM users")) {
  //echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  //$date=date('Y-m-d');
    
    $i=0;
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
	 //echo strtotime($date);
	 //echo strtotime($row['start_date']);
      //echo $row['uname'];
     // echo $row['password'];
      //echo $passwordx;
      //echo password_verify($password, $row['password']);
    
      $dbdatetime=$row['datesession']." ".$row['timesession'];
      //echo $dbdatetime;
      //echo $datetime;
      $minutes = (strtotime($datetime) - strtotime($dbdatetime)) / 60;
      //echo $time;
      //echo $row['timesession'];
      //echo $minutes;
      //echo $time15;
          if($date>$row['datesession'] || $minutes>=60 )
          {
              userdrop15($row['uname']);
              $i++;
          }
          else
         { 
          $i=0;
         }
}
  
  $result -> free_result();
}
mysqli_close($conn);
//echo $i;
	return $i;
        */
	}




function userlogincheck($uname){
		include_once 'config.php'
		
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
if ($result = $conn -> query("SELECT * FROM users where  users.company_id = '{$_SESSION['company_id']}' AND users.uname='$uname'")) {
  //echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  //$date=date('Y-m-d');
    
    $i=0;
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
	 //echo strtotime($date);
	 //echo strtotime($row['start_date']);
      //echo $row['uname'];
     // echo $row['password'];
      //echo $passwordx;
      //echo password_verify($password, $row['password']);
          if(1==$row['islogin'])
          {
              $i=1;  
          }
          else
         { 
          $i=0;
         }
}
  
  $result -> free_result();
}
mysqli_close($conn);
//echo $i;
	return $i;
        
	}



function userloginwrite($uname){
		include_once 'config.php'
		
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
    //echo $uname;
    $value=1;
        $i=0;
$sql = "UPDATE users SET islogin='$value' where uname='$uname'";

if ($conn->query($sql) === TRUE) {
    $i=1;
    //echo "ok";
}
     
mysqli_close($conn);
//echo $i;
	return $i;
        
	}



function userloginout($uname){
		include_once 'config.php'
		
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
 
    $value=0;
        $i=0;
$sql = "UPDATE users SET islogin='$value', idsession='', timesession='', datesession='' where uname='$uname'";

if ($conn->query($sql) === TRUE) {
    $i=1;
}
     
mysqli_close($conn);
//echo $i;
	return $i;
        
	}


function userdrop15($uname){
		include_once 'config.php'
		
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
        $i=0;
$sql = "UPDATE users SET idsession='', islogin='$i' where uname='$uname'";
        
        

if ($conn->query($sql) === TRUE) {
    $i=1;
}
     
mysqli_close($conn);
//echo $i;
	return $i;
        
	}





function passwordcompare($uname,$pass){
		include_once 'config.php'
		
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
if ($result = $conn -> query("SELECT * FROM users")) {
  //echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  //$date=date('Y-m-d');
    
    
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
	 //echo strtotime($date);
	 //echo strtotime($row['start_date']);
      //echo $row['uname'];
     // echo $row['password'];
      //echo $passwordx;
      //echo password_verify($password, $row['password']);
         if($uname==$row['uname'] && password_verify($pass, $row['password']))
          {
              $i=1;
              
          }
          else
         {
             
          $i=0;
         }
         
}
  
  $result -> free_result();
}
mysqli_close($conn);
//echo $i;
	return $i;
        
	}




function passupdate($uname,$newpass){
		include_once 'config.php'
		
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
    $newpassx=password_hash($newpass, PASSWORD_DEFAULT);
        $i=0;
$sql = "UPDATE users SET password='$newpassx' where uname='$uname'";
        
        

if ($conn->query($sql) === TRUE) {
    $i=1;
}
     
mysqli_close($conn);
//echo $i;
	return $i;
        
	}



function checkadmin($uname){
		include_once 'config.php'
		
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
if ($result = $conn -> query("SELECT * FROM users")) {
  //echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  //$date=date('Y-m-d');
    
    $b=0;
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
	 //echo strtotime($date);
	 //echo strtotime($row['start_date']);
      //echo $row['uname'];
     // echo $row['password'];
      //echo $passwordx;
      //echo password_verify($password, $row['password']);
      //$i=1;
      
         if($uname==$row['uname'] && 1==$row['isadmin'])
          {

              $b=1;
          }
         /* else
         {
             
          $i=0;
         }*/
         
}
  
  $result -> free_result();
}
mysqli_close($conn);
//echo $i;
	return $b;
        
	}



function checkyetkili($uname){
		include_once 'config.php'
		
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
if ($result = $conn -> query("SELECT * FROM users")) {
  //echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  //$date=date('Y-m-d');
    
    $b=0;
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
	 //echo strtotime($date);
	 //echo strtotime($row['start_date']);
      //echo $row['uname'];
     // echo $row['password'];
      //echo $passwordx;
      //echo password_verify($password, $row['password']);
      //$i=1;
      
         if($uname==$row['uname'] && 1==$row['yetkili'])
          {
              //echo "OKad";
              $b=1;
          }
         /* else
         {
             
          $i=0;
         }*/
         
}
  
  $result -> free_result();
}
mysqli_close($conn);
//echo $i;
	return $b;
        
	}


function checkmuhasebe($uname){
		include_once 'config.php'
		
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
if ($result = $conn -> query("SELECT * FROM users")) {
  //echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  //$date=date('Y-m-d');
    
    $b=0;
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
	 //echo strtotime($date);
	 //echo strtotime($row['start_date']);
      //echo $row['uname'];
     // echo $row['password'];
      //echo $passwordx;
      //echo password_verify($password, $row['password']);
      //$i=1;
      
         if($uname==$row['uname'] && 1==$row['muhasebe'])
          {
              //echo "OKad";
              $b=1;
          }
         /* else
         {
             
          $i=0;
         }*/
         
}
  
  $result -> free_result();
}
mysqli_close($conn);
//echo $i;
	return $b;
        
	}


function checkkiralamasorumlusu($uname){
		include_once 'config.php'
		
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
if ($result = $conn -> query("SELECT * FROM users")) {
  //echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  //$date=date('Y-m-d');
    
    $b=0;
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
	 //echo strtotime($date);
	 //echo strtotime($row['start_date']);
      //echo $row['uname'];
     // echo $row['password'];
      //echo $passwordx;
      //echo password_verify($password, $row['password']);
      //$i=1;
      
         if($uname==$row['uname'] && 1==$row['kiralamasorumlusu'])
          {
              //echo "OKad";
              $b=1;
          }
         /* else
         {
             
          $i=0;
         }*/
         
}
  
  $result -> free_result();
}
mysqli_close($conn);
//echo $i;
	return $b;
        
	}



function checkmusteri($uname){
		include_once 'config.php'
		
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
if ($result = $conn -> query("SELECT * FROM users")) {
  //echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  //$date=date('Y-m-d');
    
    $b=0;
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
	 //echo strtotime($date);
	 //echo strtotime($row['start_date']);
      //echo $row['uname'];
     // echo $row['password'];
      //echo $passwordx;
      //echo password_verify($password, $row['password']);
      //$i=1;
      
         if($uname==$row['uname'] && 1==$row['musteri'])
          {
              //echo "OKad";
              $b=1;
          }
         /* else
         {
             
          $i=0;
         }*/
         
}
  
  $result -> free_result();
}
mysqli_close($conn);
//echo $i;
	return $b;
        
	}



function getCompanyId($uname){
    include_once 'config.php'
    $conn = mysqli_connect($config['DB_HOST'], $config['DB_USERNAME'], $config['DB_PASSWORD'], $config['DB_DATABASE']);
    if (!$conn) return 1;
    
    $company_id = 1;
    if ($result = $conn->query("SELECT company_id FROM users WHERE uname='$uname'")) {
        if ($row = $result->fetch_assoc()) {
            $company_id = $row['company_id'];
        }
    }
    mysqli_close($conn);
    return $company_id;
}
	?>
