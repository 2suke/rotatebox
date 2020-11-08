<html>
	<head>
		<title>Rotatebox</title>
	</head>
	<body>
		<?php
			echo "<h3>$card[name]</h3>";
			echo "<p>id: ".$_GET['id']."</p>";
			echo "<p>name: ".$card['name']."</p>";
		?>
		
		<a href="/cards/edit.php?id=<?php echo $id ?>">edit</a>
		<a href="/">home</a>
	</body>
</html>
