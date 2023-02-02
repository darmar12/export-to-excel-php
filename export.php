<?php
include_once("db.php");
$res = mysqli_query($conn, "SELECT name, age, email FROM export LIMIT 10") or die("database error:". mysqli_error($conn));
$table_tr = [];
while( $row = mysqli_fetch_assoc($res) ) {
	$table_tr[] = $row;
}
?>