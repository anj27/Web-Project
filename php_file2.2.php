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
  	<th>Wr Rank</th>
   	<th>Wr Name</th>
    <th>Recieving Yards</th>
    <th>Recieving TDs</th>
    <th>Recieving Two Point Conversions</th>
    <th>Fumbles Lost</th>
    <th>Fantasy Points</th>
  </tr>
	<?php
		include_once 'wr.html';
		require_once 'php_file.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
		if($conn->connect_error) die($conn->connect_error);
		$option = isset($_POST['Test']) ? $_POST['Test'] : false;
		
		
		
		switch ($_POST['Test']){
			
			case 'sorttds':$query="SELECT * FROM wr order by wr_rectds desc; ";
			$result = mysqli_query($conn,$query);
			echo "<br><br><br>";
			while ($row = mysqli_fetch_assoc($result)) {
				
			echo "<font color = 'white'> \t<tr><td>".$row['wr_id']."</td><td>".$row[wr_name]."</td><td>".$row[wr_recyds]."</td><td>".$row[wr_rectds]."</td><td>".$row[wr_twopoint]."</td><td>".$row[wr_fumlost]."</td><td>".$row[wr_points]."</td></twr>\n".'</span>';

}
			break;
			$result->close();
			$conn->close();
	
			
			case 'sortyds':$query="SELECT * FROM wr order by wr_recyds desc; ";
			$result = mysqli_query($conn,$query);
			echo "<br><br><br>";
			while ($row = mysqli_fetch_assoc($result)) {
				
			echo "<font color = 'white'> \t<tr><td>".$row['wr_id']."</td><td>".$row[wr_name]."</td><td>".$row[wr_recyds]."</td><td>".$row[wr_rectds]."</td><td>".$row[wr_twopoint]."</td><td>".$row[wr_fumlost]."</td><td>".$row[wr_points]."</td></twr>\n".'</span>';

}
			break;
			$result->close();
			$conn->close();
			
			case 'sortpts':$query="SELECT * FROM wr order by wr_points desc; ";
			$result = mysqli_query($conn,$query);
			echo "<br><br><br>";
			while ($row = mysqli_fetch_assoc($result)) {
				
			echo "<font color = 'white'> \t<tr><td>".$row['wr_id']."</td><td>".$row[wr_name]."</td><td>".$row[wr_recyds]."</td><td>".$row[wr_rectds]."</td><td>".$row[wr_twopoint]."</td><td>".$row[wr_fumlost]."</td><td>".$row[wr_points]."</td></twr>\n".'</span>';

}
			break;
			$result->close();
			$conn->close();
		
		
		
		
	default:
		
		if ($option){
			
			$testField = $_POST['Test'];
			$query = "	select ". $testField . " from wr;";
			$result = mysqli_query($conn, $query);
			
		
				while ($row = mysqli_fetch_assoc($result)) {
				
					echo "<br>";
					echo '<span style="color:white;">'.$row[$testField].'</span>';
				}
				
				
	
		}
		}
	
	?>
		</table>