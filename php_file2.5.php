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
  	<th>Defense Rank</th>
   	<th>Defense Name</th>
    <th>Sacks</th>
    <th>Interceptions</th>
    <th>Fumble Recoveries</th>
    <th>Safeties</th>
    <th>Touchdowns</th>
    <th>Points Allowed</th>
    <th>Fantasy Points</th>
  </tr>
	<?php
		include_once 'def.html';
		require_once 'php_file.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
		if($conn->connect_error) die($conn->connect_error);
		$option = isset($_POST['Test']) ? $_POST['Test'] : false;
		
		
		
		switch ($_POST['Test']){
			
			case 'sortsks':$query="SELECT * FROM def order by def_sack desc; ";
			$result = mysqli_query($conn,$query);
			echo "<br><br><br>";
			while ($row = mysqli_fetch_assoc($result)) {
				
			echo "<font color = 'white'> \t<tr><td>".$row['def_id']."</td><td>".$row[def_name]."</td><td>".$row[def_sack]."</td><td>".$row[def_int]."</td><td>".$row[def_fumrec]."</td><td>".$row[def_safety]."</td><td>".$row[def_td]."</td><td>".$row[def_ptsallowed]."</td><td>".$row[def_pts]."</td></tte>\n".'</span>';

}
			break;
			$result->close();
			$conn->close();
	
			
			case 'sortints':$query="SELECT * FROM def order by def_int desc; ";
			$result = mysqli_query($conn,$query);
			echo "<br><br><br>";
			while ($row = mysqli_fetch_assoc($result)) {
				
			echo "<font color = 'white'> \t<tr><td>".$row['def_id']."</td><td>".$row[def_name]."</td><td>".$row[def_sack]."</td><td>".$row[def_int]."</td><td>".$row[def_fumrec]."</td><td>".$row[def_safety]."</td><td>".$row[def_td]."</td><td>".$row[def_ptsallowed]."</td><td>".$row[def_pts]."</td></tte>\n".'</span>';

}
			break;
			$result->close();
			$conn->close();
	
			
			case 'sortpts':$query="SELECT * FROM def order by def_pts desc; ";
			$result = mysqli_query($conn,$query);
			echo "<br><br><br>";
			while ($row = mysqli_fetch_assoc($result)) {
				
			echo "<font color = 'white'> \t<tr><td>".$row['def_id']."</td><td>".$row[def_name]."</td><td>".$row[def_sack]."</td><td>".$row[def_int]."</td><td>".$row[def_fumrec]."</td><td>".$row[def_safety]."</td><td>".$row[def_td]."</td><td>".$row[def_ptsallowed]."</td><td>".$row[def_pts]."</td></tte>\n".'</span>';

}
			break;
			$result->close();
			$conn->close();
	
		
		
		
	default:
		
		if ($option){
			
			$testField = $_POST['Test'];
			$query = "	select ". $testField . " from def;";
			$result = mysqli_query($conn, $query);
			
		
				while ($row = mysqli_fetch_assoc($result)) {
				
					echo "<br>";
					echo '<span style="color:white;">'.$row[$testField].'</span>';
				}
				
				
	
		}
		}
	
	?>
		</table>