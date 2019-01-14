<style>
	#qb{
		color:white;				                                          /*Change table color to white*/
		float: right;                                                         /*Move the table to the right border of the page*/
	
	}
	span {
		
		float:right;														
		clear: both;
	}
</style>

<table id=qb border='0' align="right">
  	<tr>
  	<th>Rb Rank</th>
   	<th>Rb Name</th>
    <th>Rushing Yards</th>
    <th>Rush TDs</th>
    <th>Recieving Yards</th>
    <th>Recieving TDs</th>
    <th>Fumbles Lost</th>
    <th>Fantasy Points</th>
  </tr>
	<?php
		include_once 'rb.html';
		require_once 'php_file.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
		if($conn->connect_error) die($conn->connect_error);
		$option = isset($_POST['Test']) ? $_POST['Test'] : false;
		
		
		
		switch ($_POST['Test']){
			
			case 'sorttds':$query="SELECT * FROM rb order by rb_rushtds desc; ";
			$result = mysqli_query($conn,$query);
			echo "<br><br><br>";
			while ($row = mysqli_fetch_assoc($result)) {
				
			echo "<font color = 'white'> \t<tr><td>".$row['rb_id']."</td><td>".$row[rb_name]."</td><td>".$row[rb_rushyds]."</td><td>".$row[rb_rushtds]."</td><td>".$row[rb_recyds]."</td><td>".$row[rb_rectds]."</td><td>".$row[rb_fumlost]."</td><td>".$row[rb_points]."</td></twr>\n".'</span>';

}
			break;
			$result->close();
			$conn->close();
	
			
			case 'sortyds':$query="SELECT * FROM rb order by rb_rushyds desc; ";
			$result = mysqli_query($conn,$query);
			echo "<br><br><br>";
			while ($row = mysqli_fetch_assoc($result)) {
				
			echo "<font color = 'white'> \t<tr><td>".$row['rb_id']."</td><td>".$row[rb_name]."</td><td>".$row[rb_rushyds]."</td><td>".$row[rb_rushtds]."</td><td>".$row[rb_recyds]."</td><td>".$row[rb_rectds]."</td><td>".$row[rb_fumlost]."</td><td>".$row[rb_points]."</td></twr>\n".'</span>';

}
			break;
			$result->close();
			$conn->close();
			
			case 'sortpts':$query="SELECT * FROM rb order by rb_points desc; ";
			$result = mysqli_query($conn,$query);
			echo "<br><br><br>";
			while ($row = mysqli_fetch_assoc($result)) {
				
			echo "<font color = 'white'> \t<tr><td>".$row['rb_id']."</td><td>".$row[rb_name]."</td><td>".$row[rb_rushyds]."</td><td>".$row[rb_rushtds]."</td><td>".$row[rb_recyds]."</td><td>".$row[rb_rectds]."</td><td>".$row[rb_fumlost]."</td><td>".$row[rb_points]."</td></twr>\n".'</span>';

}
			break;
			$result->close();
			$conn->close();
		
		
		
		
	default:
		
		if ($option){
			
			$testField = $_POST['Test'];
			$query = "	select ". $testField . " from rb;";
			$result = mysqli_query($conn, $query);
			
		
				while ($row = mysqli_fetch_assoc($result)) {
				
					echo "<br>";
					echo '<span style="color:white;">'.$row[$testField].'</span>';
				}
				
				
	
		}
		}
	
	?>
		</table>