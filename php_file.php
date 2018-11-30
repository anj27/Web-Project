$host = "127.0.0.1";
$user = "anj27";
$pass = "";
$db = "carproject";
$port = 3306;

$connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

$query = "SELECT * FROM cars";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)){
	echo "The car is a " . $row['car_name'] . ", which is a " . $row ['car_type'] . "from " . $row ['car_brand];	
}