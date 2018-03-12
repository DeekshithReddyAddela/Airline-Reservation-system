<?php
require 'connect.inc.php';

?>

<form action="index.php" method="Get">
<select name="uh">
<option value="1">unhal</option>
<option value="13">heal</option>
</select><br><br>
<input type="submit" value="Submit">
</form>
<?php
if (isset($_GET['uh'])&&!empty($_GET['uh'])){
	$uh = $_GET['uh'];
	if($uh=='1'||$uh=='13'){
		

$query = "SELECT * FROM table1 WHERE roll='$uh'";
if($query_run= mysql_query($query)){
	while ($query_row = mysql_fetch_assoc($query_run)){
	$id=$query_row['id'];
	$roll =$query_row['roll'];
	echo $id.'        '. $roll.'<br>';
	
	
	
	
	}
	}
else{
	echo mysql_error();

	}}
}




?>