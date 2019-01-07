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
  	<th>Te Rank</th>
   	<th>Te Name</th>
    <th>Recieving Yards</th>
    <th>Recieving TDs</th>
    <th>Recieving Two Point Conversions</th>
    <th>Fumbles Lost</th>
    <th>Fantasy Points</th>
  </tr>
	<?php
		include_once 'te.html';
		require_once 'php_file.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
		if($conn->connect_error) die($conn->connect_error);
		$option = isset($_POST['Test']) ? $_POST['Test'] : false;
		
		
		
		switch ($_POST['Test']){
			
			case 'sorttds':$query="SELECT * FROM te order by te_rectds desc; ";
			$result = mysqli_query($conn,$query);
			echo "<br><br><br>";
			while ($row = mysqli_fetch_assoc($result)) {
				
			echo "<font color = 'white'> \t<tr><td>".$row['te_id']."</td><td>".$row[te_name]."</td><td>".$row[te_recyds]."</td><td>".$row[te_rectds]."</td><td>".$row[te_twopoint]."</td><td>".$row[te_fumlost]."</td><td>".$row[te_points]."</td></tte>\n".'</span>';

}
			break;
			$result->close();
			$conn->close();
	
			
			case 'sortyds':$query="SELECT * FROM te order by te_recyds desc; ";
			$result = mysqli_query($conn,$query);
			echo "<br><br><br>";
			while ($row = mysqli_fetch_assoc($result)) {
				
			echo "<font color = 'white'> \t<tr><td>".$row['te_id']."</td><td>".$row[te_name]."</td><td>".$row[te_recyds]."</td><td>".$row[te_rectds]."</td><td>".$row[te_twopoint]."</td><td>".$row[te_fumlost]."</td><td>".$row[te_points]."</td></tte>\n".'</span>';

}
			break;
			$result->close();
			$conn->close();
			
			case 'sortpts':$query="SELECT * FROM te order by te_points desc; ";
			$result = mysqli_query($conn,$query);
			echo "<br><br><br>";
			while ($row = mysqli_fetch_assoc($result)) {
				
			echo "<font color = 'white'> \t<tr><td>".$row['te_id']."</td><td>".$row[te_name]."</td><td>".$row[te_recyds]."</td><td>".$row[te_rectds]."</td><td>".$row[te_twopoint]."</td><td>".$row[te_fumlost]."</td><td>".$row[te_points]."</td></tte>\n".'</span>';

}
			break;
			$result->close();
			$conn->close();
		
		
		
		
	default:
		
		if ($option){
			
			$testField = $_POST['Test'];
			$query = "	select ". $testField . " from te;";
			$result = mysqli_query($conn, $query);
			
		
				while ($row = mysqli_fetch_assoc($result)) {
				
					echo "<br>";
					echo '<span style="color:white;">'.$row[$testField].'</span>';
				}
				
				
	
		}
		}
	
	?>
		</table>