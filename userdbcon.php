    <?php
	function userdbconfun($usernamex,$passwordx){
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
if ($result = $conn -> query("SELECT * FROM users")) {
  //echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  //$date=date('Y-m-d');
    $i=1;
    $d=0;
  while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
	 //echo strtotime($date);
	 //echo strtotime($row['start_date']);
      //echo $row['uname'];
     // echo $row['password'];
      //echo $passwordx;
      //echo password_verify($password, $row['password']);
          if($usernamex==$row['uname'] && password_verify($passwordx, $row['password']))
          {
              $i=1;
              //echo "OK";
              
              $d=$i;
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
	return $d;
        
	}

	?>