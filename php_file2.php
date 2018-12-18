
	<?php
		include_once 'myTest.html';
		require_once 'php_file.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
		if($conn->connect_error) die($conn->connect_error);
		$option = isset($_POST['Test']) ? $_POST['Test'] : false;
		if ($option){
			$testField = $_POST['Test'];
			$query = "	select ". $testField . " from qb;";
			$result = mysqli_query($conn, $query);
			
echo "<table border='1'>
  	<tr>
   	<th>Qb Name</th>
    <th>Pass Yards</th>
    <th>Pass TDs</th>
    <th>Pass Interceptions</th>
    <th>Rush Yards</th>
    <th>Rush TDs</th>
    <th>Fumbles Lost</th>
    <th>Fantasy Points</th>
  </tr>";
			
			
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
	echo "<td>" . $row[$testField] . "</td>";

	echo "</tr>";
	}
	echo "</table>";
	
			}
		$result->close();
		$conn->close();
	?>