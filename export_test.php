 <?php
$servername = "localhost:3306";
$username = "bluesystech_staging_tawde";
$password = "8}TLt5KNI[Y{";
$dbname = "bluesystech_staging_tawde";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from `twf23_users` order by `id` ASC";
$result = $conn->query($sql);
//echo "<pre>";print_r($result->num_rows);exit;
$new = array();
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  $new[] =  $row;
    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  $new = array();
}
$resultinit = array();
//echo "<pre>";print_r($new);exit;
foreach($new as $mlop)
{
	
	//$mlop['email'];
	
	$sql2 = "INSERT INTO `users`(`first_name`, `email`) VALUES ('".$mlop['name']."','".$mlop['email']."')";
	$resultinit = $conn->query($sql2);
	if($resultinit)
	{
		$initrec[] = $resultinit;
	}
	
}
//echo "<pre>";print_r($initrec);exit;
$conn->close();
?>