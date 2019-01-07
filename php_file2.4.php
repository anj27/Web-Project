<style>
	#qb{
		color:white;
		float: right;
		display: inline;
	}
	span {
		
		float:right;
		clear: both;
	}
</style>

<table id=qb border='0' align="right">
  	<tr>
  	<th>Kicker Rank</th>
   	<th>Kicker Name</th>
    <th>PATs</th>
    <th>0-29 yd fg</th>
    <th>30-49 yd fg</th>
    <th>50+ yd fg</th>
    <th>Fantasy Points</th>
  </tr>
	<?php
		include_once 'k.html';
		require_once 'php_file.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
		if($conn->connect_error) die($conn->connect_error);
		$option = isset($_POST['Test']) ? $_POST['Test'] : false;
		
		
		
		switch ($_POST['Test']){
			
			case 'sortpats':$query="SELECT * FROM k order by k_pat desc; ";
			$result = mysqli_query($conn,$query);
			echo "<br><br><br>";
			while ($row = mysqli_fetch_assoc($result)) {
				
			echo "<font color = 'white'> \t<tr><td>".$row['k_id']."</td><td>".$row[k_name]."</td><td>".$row[k_pat]."</td><td>".$row[k029]."</td><td>".$row[k3049]."</td><td>".$row[k50]."</td><td>".$row[k_points]."</td></tte>\n".'</span>';

}
			break;
			$result->close();
			$conn->close();
	
			
			case 'sortpts':$query="SELECT * FROM k order by k_points desc; ";
			$result = mysqli_query($conn,$query);
			echo "<br><br><br>";
			while ($row = mysqli_fetch_assoc($result)) {
				
			echo "<font color = 'white'> \t<tr><td>".$row['k_id']."</td><td>".$row[k_name]."</td><td>".$row[k_pat]."</td><td>".$row[k029]."</td><td>".$row[k3049]."</td><td>".$row[k50]."</td><td>".$row[k_points]."</td></tte>\n".'</span>';

}
			break;
			$result->close();
			$conn->close();
	
		
		
	default:
		
		if ($option){
			
			$testField = $_POST['Test'];
			$query = "	select ". $testField . " from k;";
			$result = mysqli_query($conn, $query);
			
		
				while ($row = mysqli_fetch_assoc($result)) {
				
					echo "<br>";
					echo '<span style="color:white;">'.$row[$testField].'</span>';
				}
				
				
	
		}
		}
	
	?>
		</table>