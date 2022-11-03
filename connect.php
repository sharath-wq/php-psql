<!DOCTYPE html>
<html>
	<head>
		<title>Document</title>
	</head>
	<body>
	</body>
	
	<?php
		
		
		$db = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=montyxgreen");
		if ($db == true) {
			echo "Database connected successfully";
		} else {
			echo "Error can't connect database";
		}
	?>
	
</html>
