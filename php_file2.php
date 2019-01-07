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
  	<th>Qb Rank</th>
   	<th>Qb Name</th>
    <th>Pass Yards</th>
    <th>Pass TDs</th>
    <th>Pass Interceptions</th>
    <th>Rush Yards</th>
    <th>Rush TDs</th>
    <th>Fumbles Lost</th>
    <th>Fantasy Points</th>
  </tr>
	<?php
		include_once 'qb.html';
		require_once 'php_file.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
		if($conn->connect_error) die($conn->connect_error);
		$option = isset($_POST['Test']) ? $_POST['Test'] : false;
		
		
		
		switch ($_POST['Test']){
			
			case 'sorttds':$query="SELECT * FROM qb order by pass_tds desc; ";
			$result = mysqli_query($conn,$query);
			echo "<br><br><br>";
			while ($row = mysqli_fetch_assoc($result)) {
				
			echo "<font color = 'white'> \t<tr><td>".$row['qb_id']."</td><td>".$row[qb_name]."</td><td>".$row[pass_yds]."</td><td>".$row[pass_tds]."</td><td>".$row[pass_ints]."</td><td>".$row[rush_yds]."</td><td>".$row[rush_tds]."</td><td>".$row[fum_lost]."</td><td>".$row[qb_points]."</td></tr>\n".'</span>';

}
			break;
			$result->close();
			$conn->close();
	
			
			case 'sortyds':$query="SELECT * FROM qb order by pass_yds desc; ";
			$result = mysqli_query($conn,$query);
			echo "<br><br><br>";
			while ($row = mysqli_fetch_assoc($result)) {
				
			echo "\t<tr><td>".$row['qb_id']."</td><td>".$row[qb_name]."</td><td>".$row[pass_yds]."</td><td>".$row[pass_tds]."</td><td>".$row[pass_ints]."</td><td>".$row[rush_yds]."</td><td>".$row[rush_tds]."</td><td>".$row[fum_lost]."</td><td>".$row[qb_points]."</td></tr>\n".'</span>';

}	
			break;
		$result->close();
		$conn->close();
			
			case 'sortpts':$query="SELECT * FROM qb order by qb_points desc; ";
			$result = mysqli_query($conn,$query);
			echo "<br><br><br>";
			while ($row = mysqli_fetch_assoc($result)) {
				
			echo "\t<tr><td>".$row['qb_id']."</td><td>".$row[qb_name]."</td><td>".$row[pass_yds]."</td><td>".$row[pass_tds]."</td><td>".$row[pass_ints]."</td><td>".$row[rush_yds]."</td><td>".$row[rush_tds]."</td><td>".$row[fum_lost]."</td><td>".$row[qb_points]."</td></tr>\n".'</span>';

}	
			break;
		$result->close();
		$conn->close();
		
		
		
		
		
	default:
		
		if ($option){
			
			$testField = $_POST['Test'];
			$query = "	select ". $testField . " from qb;";
			$result = mysqli_query($conn, $query);
			
		
				while ($row = mysqli_fetch_assoc($result)) {
				
					echo "<br>";
					echo '<span style="color:white;">'.$row[$testField].'</span>';
				}
				
				
	
		}
		}
	
	?>
		</table>