<?php
include_once("db.php");
include("export.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Export Data to Excel</title>
</head>
<body>
	<div class="wrapper">
		<h1 class="title">Export Data to Excel</h1>
		<div class="export__content">
			<div class="export__box">
				<form action="<?=$_SERVER['PHP_SELF'];?>" class="export__form" method="post">
					<button type="submit" name="exportData" id="exportData" class="export__btn">Export Data to Excel</button>
				</form>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Age</th>	
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<?foreach($table_tr as $tr):?>
						<tr>
							<td><?=$tr['name']?></td>
							<td><?=$tr['age']?></td>
							<td><?=$tr['email']?></td>
						</tr>
					<?endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>




