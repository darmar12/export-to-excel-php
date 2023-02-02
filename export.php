<?php
include_once("db.php");
$res = mysqli_query($conn, "SELECT name, age, email FROM export LIMIT 10") or die("database error:". mysqli_error($conn));
$table_tr = [];
while( $row = mysqli_fetch_assoc($res) ) {
	$table_tr[] = $row;
}

if(isset($_POST["exportData"])) {
	$filename = date('Y-m-d') . ".xls";
	$is_coloumn = false;
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$filename\"");	
	if(!empty($table_tr)) {
		foreach($table_tr as $row) {
			if(!$is_coloumn) {
			  echo implode("\t", array_keys($row)) . "\n";
			  $is_coloumn = true;
			}
			echo implode("\t", array_values($row)) . "\n";
		}
	}
	exit;  
}
?>