<html>
	<head>
		<title>Rotatebox</title>
	</head>
	<body>
	<?php
		require("db/data_access/data_access.php");
		
		$dao = new DataAccesser();
		$dao->dbConnect();
		$dao->dbClose();
	?> 
	</body>
</html>
